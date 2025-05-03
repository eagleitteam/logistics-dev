<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Masters\StoreVehicleRequest;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->get();

        return view('admin.masters.selfVehicalDetailView')->with(['vehicles' => $vehicles]);
        // return view('admin.masters.vehicles')->with(['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            Vehicle::create(Arr::only($input, Vehicle::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Vehicle created successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'creating', 'Vehicle');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        try {
            return response()->json([
                'vehicle' => $vehicle,
                'success' => 'Vehicle retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve vehicle'], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreVehicleRequest $request, Vehicle $vehicle)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $vehicle->update(Arr::only($input, Vehicle::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Vehicle updated successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'updating', 'Vehicle');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        try {
            DB::beginTransaction();
            $vehicle->delete();
            DB::commit();

            return response()->json(['success' => 'Vehicle deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'Vehicle');
        }
    }
}
