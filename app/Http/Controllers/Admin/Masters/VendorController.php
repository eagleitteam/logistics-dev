<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Masters\StoreVendorRequest;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::latest()->get();

        return view('admin.masters.advancedFuelManagement')->with(['vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $vehicleTypes = DB::table('vehicles')
                        ->select('id', 'description')
                        ->where('is_active', 1) // optional filter
                        ->orderBy('description')
                        ->get();

            return view('vendors.create', compact('vehicleTypes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {
        try {
            DB::beginTransaction();

            $input = $request->validated();

            // Create vendor
            $vendor = Vendor::create(Arr::only($input, Vendor::getFillables()));

            // Create vehicles if present
            if ($request->has('vehicles') && !empty($input['vehicles'])) {
                foreach ($input['vehicles'] as $vehicleData) {
                    $vendor->vehicles()->create([
                        'vehicle_no' => $vehicleData['vehicle_no'],
                        'vehicle_type' => $vehicleData['vehicle_type']
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Vendor created successfully!',
                'redirect' => route('vendors.index') // or your preferred redirect route
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return $this->respondWithAjax($e, 'creating', 'Vendor');
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
    public function edit(Vendor $vendor)
    {
        try {
            return response()->json([
                'vendor' => $vendor,
                'success' => 'Vendor retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve vendor'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreVendorRequest $request, Vendor $vendor)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $vendor->update(Arr::only($input, Vendor::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Vendor updated successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'updating', 'Vendor');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        try {
            DB::beginTransaction();
            $vendor->delete();
            DB::commit();

            return response()->json(['success' => 'Vendor deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'Vendor');
        }
    }
}
