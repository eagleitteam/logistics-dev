<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreMastergroupRequest;
use App\Http\Requests\Admin\Masters\UpdateMastergroupRequest;
use App\Models\Mastergroup;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class MastergroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masterGroups = Mastergroup::latest()->get();

        // Pass both clients and states to the view
         return view("admin.masters.MasterGroup")->with(['masterGroups'=>$masterGroups]);
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
    public function store(StoreMastergroupRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            // Create Mastergroup
            $mastergroups = Mastergroup::create(Arr::only($input, Mastergroup::getFillables()));
            DB::commit();
            return response()->json(['success' => 'Mastergroup created successfully!']);

        } catch (\Exception $e) {
            DB::rollBack();
            return $this->respondWithAjax($e, 'creating', 'Mastergroup');
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
    public function edit(Mastergroup $mastergroup, Request $request)
    {
        $mastergroup = Mastergroup::find($request->model_id);

        try {
            return response()->json([
                'mastergroup' => $mastergroup,
                'success' => 'Mastergroup retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve Mastergroup'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMastergroupRequest $request, Mastergroup $mastergroup)
    {
       try {
            DB::beginTransaction();
            $input = $request->validated();
            $mastergroup->update(Arr::only($input, Mastergroup::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Mastergroup updated successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'updating', 'Mastergroup');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mastergroup $mastergroup, Request $request)
    {
        try {
            $mastergroup = Mastergroup::find($request->model_id);
            DB::beginTransaction();
            $mastergroup->delete();
            DB::commit();

            return response()->json(['success' => 'Mastergroup deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'Mastergroup');
        }
    }
}
