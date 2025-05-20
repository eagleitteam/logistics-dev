<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreVendorhasvehicleRequest;
use App\Http\Requests\Admin\Masters\UpdateVendorhasvehicleRequest;
use App\Models\Vendorhasvehicle;
use App\Models\Vendor;
use App\Models\Vehicle;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VendorhasvehicleController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendorhasvehicles = vendorhasvehicle::latest()->get();
        //<... return view('admin.masters.VendorHasVehicle', compact('vendorhasvehicles')); ..>

        // Get all Vendor (latest first)
         $vendors = Vendor::latest()->get();
        // Get all Vehical Type (latest first)
         $vehicles = Vehicle::latest()->get();

        // Pass both Vendor and states to the view
         return view("admin.masters.VendorHasVehicle")->with(['vendorhasvehicle'=>$vendorhasvehicles ,'Vendor'=>$vendors, 'Vehicle'=>$vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorhasvehicleRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            vendorhasvehicle::create(Arr::only($input, vendorhasvehicle::getFillables()));
            DB::commit();

            return response()->json(['success' => 'vendorhasvehicle created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating groupandledgermaster: ' . $e->getMessage()
            ], 500);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
