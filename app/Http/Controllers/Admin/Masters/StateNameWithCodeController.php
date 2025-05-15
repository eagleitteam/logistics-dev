<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreStateNameWithCodeRequest;
use App\Models\StateNameWithCode;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class StateNameWithCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $stateNameWithCode = StateNameWithCode::latest()->get();
        return view('admin.masters.StateNameWithCode')->with(['StateNameWithCode' => $stateNameWithCode]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masters.createStateNameWithCode'); // create the blade if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStateNameWithCodeRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            StateNameWithCode::create(Arr::only($input, StateNameWithCode::getFillables()));
            DB::commit();

            return response()->json(['success' => 'StateNameWithCode created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating StateNameWithCode: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $stateNameWithCode = StateNameWithCode::find($id);

        if (!$stateNameWithCode) {
            return response()->json(['error' => 'StateNameWithCode not found'], 404);
        }

        return response()->json(['StateNameWithCode' => $stateNameWithCode]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StateNameWithCode $stateNameWithCode)
    {
       try {
            return response()->json([
                'StateNameWithCode' => $stateNameWithCode,
                'success' => 'StateNameWithCode retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve StateNameWithCode'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreStateNameWithCodeRequest $request, StateNameWithCode $stateNameWithCode)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $stateNameWithCode->update(Arr::only($input, StateNameWithCode::getFillables()));
            DB::commit();

            return response()->json(['success' => 'StateNameWithCode updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating StateNameWithCode: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StateNameWithCode $stateNameWithCode)
    {
        try {
            DB::beginTransaction();
            $stateNameWithCode->delete();
            DB::commit();

            return response()->json(['success' => 'StateNameWithCode deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting StateNameWithCode: ' . $e->getMessage()
            ], 500);
        }
    }
}
