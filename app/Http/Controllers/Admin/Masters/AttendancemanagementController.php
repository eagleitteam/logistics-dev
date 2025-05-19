<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreAttendancemanagementRequest;
use App\Http\Requests\Admin\Masters\UpdateAttendancemanagementRequest;
use App\Models\Attendancemanagement;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AttendancemanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendancemanagements = Attendancemanagement::latest()->get();
        return view('admin.masters.attendanceManagement', compact('attendancemanagements'));
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
    public function store(StoreAttendancemanagementRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            Attendancemanagement::create(Arr::only($input, Attendancemanagement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Attendancemanagement created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Attendancemanagement: ' . $e->getMessage()
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
