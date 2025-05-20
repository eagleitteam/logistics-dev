<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreCashmemoRequest;
use App\Http\Requests\Admin\Masters\UpdateCashmemoRequest;
use App\Models\Cashmemo;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\VehicalNumber;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CashmemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all cash Memo (latest first)
         $cashmemos = cashmemo::latest()->get();

        // Get all clients (latest first)
         $clients = Client::latest()->get();

        
         // Get vehical type
         $vehicles = Vehicle::latest()->get();

        // Get vehical numbers
            $vehiclenumbers = Vehicle::latest()->get();

        // Pass both clients and states to the view
         return view("admin.masters.cashMemo")->with(['cashmemo'=>$cashmemos,'Vehicletype'=>$vehicles,'clients'=>$clients,'Vehicleno'=>$vehiclenumbers]);
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
    public function store(StoreCashmemoRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            // Create Cilent
            $cashmemos = cashmemo::create(Arr::only($input, cashmemo::getFillables()));
            DB::commit();
            return response()->json(['success' => 'cashmemo created successfully!']);

        } catch (\Exception $e) {
            DB::rollBack();
            return $this->respondWithAjax($e, 'creating', 'cashmemo');
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
    public function edit(cashmemo $cashmemos)
    {
        try {
            return response()->json([
                'cashmemo' => $cashmemos,
                'success' => 'Vendor retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve cashmemo'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClientRequest $request, cashmemo $cashmemos)
    {
       try {
            DB::beginTransaction();
            $input = $request->validated();
            $cashmemos->update(Arr::only($input, cashmemo::getFillables()));
            DB::commit();

            return response()->json(['success' => 'cashmemo updated successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'updating', 'cashmemo');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cashmemo $cashmemos)
    {
        try {
            DB::beginTransaction();
            $cashmemos->delete();
            DB::commit();

            return response()->json(['success' => 'cashmemo deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'cashmemo');
        }
    }
}
