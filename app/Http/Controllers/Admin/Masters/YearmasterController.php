<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreYearmasterRequest;
use App\Models\Yearmaster;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class YearmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yearmasters = Yearmaster::latest()->get();
        return view('admin.masters.Yearmaster')->with(['Yearmaster' => $yearmasters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masters.createYearmaster'); // create the blade if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreYearmasterRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            Yearmaster::create(Arr::only($input, Yearmaster::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Yearmaster created successfully!']);
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
        $Yearmaster = Yearmaster::find($id);

        if (!$Yearmaster) {
            return response()->json(['error' => 'Yearmaster not found'], 404);
        }

        return response()->json(['Yearmaster' => $Yearmaster]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Yearmaster $Yearmaster)
    {
        if ($Yearmaster) {
            $response = [
                'result' => 1,
                'Yearmaster' => $Yearmaster,
            ];
        } else {
            $response = ['result' => 0];
        }
        return $response;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreYearmasterRequest $request, Yearmaster $Yearmaster)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $Yearmaster->update(Arr::only($input, Yearmaster::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Yearmaster updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating Yearmaster: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Yearmaster $Yearmaster)
    {
        try {
            DB::beginTransaction();
            $Yearmaster->delete();
            DB::commit();

            return response()->json(['success' => 'Yearmaster deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting Yearmaster: ' . $e->getMessage()
            ], 500);
        }
    }
}
