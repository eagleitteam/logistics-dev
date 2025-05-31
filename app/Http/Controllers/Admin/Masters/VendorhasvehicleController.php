<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreVendorhasvehicleRequest;
use App\Http\Requests\Admin\Masters\UpdateVendorhasvehicleRequest;
use App\Models\Vendorhasvehicle;
use App\Models\Vendor;
use App\Models\VehicalNumber;
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
        $vendorId = request()->get('vendor_id') ?? null;

// with(['vendor', 'vehicle'])
        $vendorhasvehicles = vendorhasvehicle::with(['vendor', 'vehicle'])
                            ->when($vendorId, function ($query, $vendorId) {
                                return $query->where('vendor_id', $vendorId);
                            })
                            ->latest()
                            ->get();
                            // dd($vendorhasvehicles);

        $totalVehicles = $vendorhasvehicles->count();
        $activeVehicles = $vendorhasvehicles->where('status','active')->count();
        $maintenanceVehicles = $vendorhasvehicles->where('status','maintenance')->count();                    
        $inactiveVehicles = $vendorhasvehicles->where('status','inactive')->count();                    
        //<... return view('admin.masters.VendorHasVehicle', compact('vendorhasvehicles')); ..>

        // Get all Vendor (latest first)
         $vendors = Vendor::latest()->get();
        // Get all Vehical Type (latest first)
         $vehicles = Vehicle::latest()->get();

        // Pass both Vendor and states to the view
         return view("admin.masters.VendorHasVehicle")->with(['vendorhasvehicle'=>$vendorhasvehicles 
                                ,'Vendor'=>$vendors,
                                 'Vehicle'=>$vehicles,
                                 'totalVehicles' => $totalVehicles,
                                 'vendorId' => $vendorId,
                                 'activeVehicles' => $activeVehicles,
                                'maintenanceVehicles' => $maintenanceVehicles,
                                'inactiveVehicles' => $inactiveVehicles
                                ]);
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
    // info("allrequest: " . json_encode($request->all()));

    try {
        DB::beginTransaction();

        $input = $request->validated();

        // Get individual arrays
        $vehicleIds = $input['Vehicle_id'];
        // dd($vehicleIds);
        $vehicleNumbers = $input['vehicle_number'];
        $capacities = $input['capacity'];
        $statuses = $input['status'];
        $vendorId = $input['vendor_id'];

        // Loop through and insert each set of data
        for ($i = 0; $i < count($vehicleIds); $i++) {
            $reference_id = vendorhasvehicle::create([
                'vendor_id'       => $vendorId,
                'vehicle_id'      => $vehicleIds[$i],
                'vehicle_number'  => $vehicleNumbers[$i],
                'capacity'        => $capacities[$i],
                'status'          => $statuses[$i],
            ]);


            // Prepare and save vehicle number
            $arr = [
                'vehicle_number' => $vehicleNumbers[$i],
                'from'           => 1, // for vendor
                'reference_id'   => $reference_id->id,
            ];

        VehicalNumber::create($arr);

        }

        DB::commit();
        return response()->json(['success' => 'vendorhasvehicle created successfully!']);

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'error' => 'Error creating vendorhasvehicle: ' . $e->getMessage()
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
    public function edit(vendorhasvehicle $vendorhasvehicle, Request $request)
    { 
        $vendorhasvehicle = vendorhasvehicle::find($request->model_id);
        try {
            return response()->json([
                'vendorhasvehicle' => $vendorhasvehicle,
                'success' => 'vendorhasvehicle retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve vendorhasvehicle'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorhasvehicleRequest $request, vendorhasvehicle $vendorhasvehicle)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $vendorhasvehicle->update(Arr::only($input, vendorhasvehicle::getFillables()));
            DB::commit();

            return response()->json(['success' => 'vendorhasvehicle updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating vendorhasvehicle: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vendorhasvehicle $vendorhasvehicle, Request $request)
    {
        try {
            $vendorhasvehicles = vendorhasvehicle::find($request->model_id);
            DB::beginTransaction();
            $vendorhasvehicles->delete();
            DB::commit();

            return response()->json(['success' => 'vendorhasvehicle deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting vendorhasvehicle: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getVendorDetails(Request $request)
        {
            $vendorId = $request->get('vendorId'); 
            if (!$vendorId) {
                return response()->json(['success' => false, 'message' => 'Vendor ID not provided.']);
            }

            $vendorDetails = VendorhasVehicle::where('vendor_id', $vendorId)->get(); // Or your own logic

            return response()->json([
                'success' => true,
                'vendorDetails' => $vendorDetails
            ]);
        }


}
