<?php

namespace App\Http\Controllers\admin\masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreBankregisterRequest;
use App\Http\Requests\Admin\Masters\UpdateBankregistereRequest;
use App\Models\Bankregister;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BankRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bankregisters = Bankregister::latest()->get();
        return view('admin.masters.bankRegister', compact('bankregisters'));
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
    public function store(StoreBankregisterRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            Bankregister::create(Arr::only($input, Bankregister::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Bankregister created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Bankregister: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bankregister = Bankregister::find($id);

        if (!$bankregister) {
            return response()->json(['error' => 'Bankregister not found'], 404);
        }

        return response()->json(['Bankregister' => $bankregister]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bankregister $bankregister, Request $request)
    {   
        
       try {
            $bankregister = Bankregister::find($request->model_id);
            return response()->json([
                'bankregister' => $bankregister,
                'success' => 'Bankregister retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve Bankregister'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBankregistereRequest $request, Bankregister $bankregister)
    {
        try {
            
            DB::beginTransaction();
            $input = $request->validated();
            $bankregister->update(Arr::only($input, Bankregister::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Bankregister updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating Bankregister: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bankregister $bankregister, Request $request)
    {
        try {
           $bankregister = Bankregister::find($request->model_id);
            DB::beginTransaction();
            $bankregister->delete();
            DB::commit();

            return response()->json(['success' => 'Bankregister deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting Bankregister: ' . $e->getMessage()
            ], 500);
        }
    }
}
