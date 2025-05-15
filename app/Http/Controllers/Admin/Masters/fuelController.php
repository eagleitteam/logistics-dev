<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StorefuelRequest;
use App\Models\Fuel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class fuelController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fuels = Fuel::latest()->get();
        // return view('admin.masters.fuel')->with(['fuels' => $fuels]);
        return view('admin.masters.employeeManagement')->with(['fuels' => $fuels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masters.createfuel'); // create the blade if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefuelRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            Fuel::create(Arr::only($input, Fuel::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Fuel created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Fuel Record: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fuels = fuel::find($id);

        if (!$fuels) {
            return response()->json(['error' => 'fuel not found'], 404);
        }

        return response()->json(['fuel' => $fuels]);
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Fuel $Fuel)
    {
        if ($Fuel) {
            $response = [
                'result' => 1,
                'Fuel' => $Fuel,
            ];
        } else {
            $response = ['result' => 0];
        }
        return $response;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorefuelRequest $request, fuel $fuels)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $fuels->update(Arr::only($input, fuel::getFillables()));
            DB::commit();

            return response()->json(['success' => 'fuel updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating fuel: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fuel $fuels)
    {
        try {
            DB::beginTransaction();
            $fuels->delete();
            DB::commit();

            return response()->json(['success' => 'fuel deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting fuel: ' . $e->getMessage()
            ], 500);
        }
    }
}
