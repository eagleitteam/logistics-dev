<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class LedgerstatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        // Pass both clients and states to the view
         return view("admin.masters.Ledgerstmt");
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
    public function edit(cashmemo $cashmemo, Request $request)
    { 
        $cashMemores = cashmemo::find($request->model_id);
        try {
            return response()->json([
                'memo' => $cashMemores,
                'success' => 'cashmemo retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve cashmemo'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCashmemoRequest $request, cashmemo $cashmemos)
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
    public function destroy(cashmemo  $cashmemos, Request $request)
    {
        try {
            $cashmemos = cashmemo::find($request->model_id);
            DB::beginTransaction();
            $cashmemos->delete();
            DB::commit();

            return response()->json(['success' => 'cashmemo deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'cashmemo');
        }
    }
}
