<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreGstrateRequest;
use App\Models\Gstrate;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class GstrateController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Gstrates = Gstrate::latest()->get();
        return view('admin.masters.gstrate')->with(['Gstrates' => $Gstrates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masters.createGstrate'); // create the blade if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGstrateRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            Gstrate::create(Arr::only($input, Gstrate::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Gstrate created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Gstrate: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Gstrates = Gstrate::find($id);

        if (!$Gstrates) {
            return response()->json(['error' => 'Gstrate not found'], 404);
        }

        return response()->json(['Gstrate' => $Gstrates]);
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Gstrate $Gstrate)
    {
        if ($Gstrate) {
            $response = [
                'result' => 1,
                'Gstrate' => $Gstrate,
            ];
        } else {
            $response = ['result' => 0];
        }
        return $response;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGstrateRequest $request, Gstrate $Gstrates)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $Gstrates->update(Arr::only($input, Gstrate::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Gstrate updated successfully!']);
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
    public function destroy(Gstrate $Gstrates)
    {
        try {
            DB::beginTransaction();
            $Gstrates->delete();
            DB::commit();

            return response()->json(['success' => 'Gstrate deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting vehicle: ' . $e->getMessage()
            ], 500);
        }
    }
}
