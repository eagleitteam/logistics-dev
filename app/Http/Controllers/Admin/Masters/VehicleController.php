<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Masters\StoreVehicleRequest;
use App\Http\Requests\Admin\Masters\UpdateVehicleRequest;
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
        return view('admin.masters.vehicles')->with(['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masters.createVehicle'); // create the blade if needed
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
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating vehicle: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found'], 404);
        }

        return response()->json(['vehicle' => $vehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        if ($vehicle) {
            $response = [
                'result' => 1,
                'vehicle' => $vehicle,
            ];
        } else {
            $response = ['result' => 0];
        }
        return $response;
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
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating vehicle: ' . $e->getMessage()
            ], 500);
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
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting vehicle: ' . $e->getMessage()
            ], 500);
        }
    }
}
