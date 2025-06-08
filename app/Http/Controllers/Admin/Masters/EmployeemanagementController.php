<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreEmployeemanagementRequest;
use App\Http\Requests\Admin\Masters\UpdateEmployeemanagementRequest;
use App\Models\Employeemanagement;
use App\Models\Driver;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class EmployeemanagementController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all active employees (type = 1)
        $activeEmployees = Employeemanagement::where('status', '1')
            ->where('type', '1') // Only employees (not drivers)
            ->latest()
            ->get();
            

        // Get all active drivers (type = 2)
        $activeDrivers = Driver::where('status', '1')
            ->latest()
            ->get();

        

        // Get all inactive (employees + drivers)
            $inactiveEmployees = Employeemanagement::where('status', '!=', '1')->get();
            $inactiveDrivers = Driver::where('status', '!=', '1')->get();
            $inactive = $inactiveEmployees->concat($inactiveDrivers)->sortByDesc('created_at');
            

            // Get ALL active (employees + drivers)
            $allActiveEmployees = Employeemanagement::where('status', '1')->get();
            $allActiveDrivers = Driver::where('status', '1')->get();
            $allActive = $allActiveEmployees->concat($allActiveDrivers)->sortByDesc('created_at');
            // dd($allActive);

        return view('admin.masters.employeeManagement', compact(
            'activeEmployees',
            'activeDrivers',
            'inactive',
            'allActive'
        ));
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
    public function edit(employeemanagement $employeemanagements, Request $request)
    { 
        $employeemanagements = employeemanagement::find($request->model_id);
        try {
            return response()->json([
                'employeemanagement' => $employeemanagements,
                'success' => 'employeemanagement retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve employeemanagement'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeemanagementRequest $request,$id )
    {
       try {
            DB::beginTransaction();
            $employeemanagement = Employeemanagement::findOrFail($id); // explicitly fetch
            $input = $request->validated();
            $employeemanagement->update(Arr::only($input, employeemanagement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'employee updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating employee: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employeemanagement  $employeemanagements, Request $request)
    {
        try {
            $employeemanagements = employeemanagement::find($request->model_id);
            DB::beginTransaction();
            $employeemanagements->delete();
            DB::commit();

            return response()->json(['success' => 'employeemanagement deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'employeemanagement');
        }
    }
}
