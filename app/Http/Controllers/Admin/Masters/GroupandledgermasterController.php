<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreGroupandledgermasterRequest;
use App\Http\Requests\Admin\Masters\UpdateGroupandledgermasterRequest;
use App\Models\Groupandledgermaster;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class GroupandledgermasterController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupandledgermasters = groupandledgermaster::latest()->get();
        return view('admin.masters.groupandLedgerMaster', compact('groupandledgermasters'));
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
    public function store(StoreGroupandledgermasterRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            groupandledgermaster::create(Arr::only($input, groupandledgermaster::getFillables()));
            DB::commit();

            return response()->json(['success' => 'groupandledgermaster created successfully!']);
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
