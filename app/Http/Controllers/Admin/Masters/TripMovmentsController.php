<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Driver;
use App\Models\TripMovement;
use App\Models\Vehicle;
use App\Models\VehicalNumber;
use App\Http\Requests\Admin\Masters\StoreTripMovmentsRequest;
use App\Http\Requests\Admin\Masters\UpdateTripMovmentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TripMovmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trip_movements = TripMovement::with([
        'vendor',
        'vehicle',
        'client',
        'driver',
        'VehicalNumber' // if needed separately
    ])->latest()->get();

    
        return view('admin.masters.tripMovementList')->with(['trip_movement' => $trip_movements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehical_numbers = VehicalNumber::latest()->get();
        $vehicalTypes = Vehicle::latest()->get();
        $clients = Client::latest()->get();
        $drivers = Driver::latest()->get();
        
        return view("admin.masters.tripMovement")->with(['vehicalTypes' => $vehicalTypes,'clients'=>$clients,'drivers'=>$drivers,'VehicalNumber' => $vehical_numbers]);;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTripMovmentsRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();

            // Get the current highest trip_count_no
            $lastTripCount = TripMovement::lockForUpdate()->max('trip_count_no');
            $newTripCount = is_null($lastTripCount) ? 1 : $lastTripCount + 1;

            // Add trip_count_no to input
             $input['trip_count_no'] = $newTripCount;

            TripMovement::create(Arr::only($input, TripMovement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'TripMovement created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating TripMovement: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trip_movements = TripMovement::find($id);

        if (!$trip_movements) {
            return response()->json(['error' => 'TripMovement not found'], 404);
        }

        return response()->json(['TripMovement' => $trip_movements]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TripMovement $trip_movement, Request $request)
    {   
        // info all edit data
        info('TripMovement edit request', ['request' => $request->all()]);
       try {
            $trip_movement = TripMovement::find($request->model_id);
            return response()->json([
                'movement' => $trip_movement,
                'success' => 'TripMovement retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve TripMovement'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTripMovmentsRequest $request, TripMovement $trip_movement)
    {
        try {
            
            DB::beginTransaction();
            $input = $request->validated();
            $statenamewtrip_movementithcode->update(Arr::only($input, TripMovement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'TripMovement updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating TripMovement: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TripMovement $trip_movement, Request $request)
    {
        try {
           $trip_movement = TripMovement::find($request->model_id);
            DB::beginTransaction();
            $trip_movement->delete();
            DB::commit();

            return response()->json(['success' => 'TripMovement deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting TripMovement: ' . $e->getMessage()
            ], 500);
        }
    }

    
}
