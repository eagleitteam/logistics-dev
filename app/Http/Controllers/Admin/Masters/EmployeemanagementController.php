<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreEmployeemanagementRequest;
use App\Http\Requests\Admin\Masters\UpdateEmployeemanagementRequest;
use App\Models\Employeemanagement;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class EmployeemanagementController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeemanagements = employeemanagement::latest()->get();
        return view('admin.masters.employeeManagement', compact('employeemanagements'));
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
    public function store(StoreEmployeemanagementRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            employeemanagement::create(Arr::only($input, employeemanagement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'employeemanagement created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating employeemanagement: ' . $e->getMessage()
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
