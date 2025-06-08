<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreAttendancemanagementRequest;
use App\Http\Requests\Admin\Masters\UpdateAttendancemanagementRequest;
use App\Models\Attendancemanagement;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\Vehicle\Employeemanagement;
use App\Models\Vehicle\Driver;

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
            $month = $input['month'];
            $employeeType = $input['employee_type'];

            foreach ($input['employee_ids'] as $employeeId) {
                $total_days = $this->getTotalDaysInMonth($month);
                $status = $input['attendance_type'][$employeeId] ?? 'Present';
                if ($status === 'Absent') {
                    $absentDays = $input['attendance_days'][$employeeId] ?? 0;
                    $attendanceDays = $total_days - $absentDays;
                } else {
                    $attendanceDays = $input['attendance_days'][$employeeId] ?? 0;
                }

                Attendancemanagement::create([
                    'employee_type'   => $employeeType,
                    'employee_id'     => $employeeId,
                    'attendance_type' => $status,
                    'attendance_days' => $attendanceDays,
                    'remarks'         => $input['remarks'][$employeeId] ?? null,
                    'total_days'      => $total_days,
                    'month'           => $month,
                    'EmployeeName'    => $input['EmployeeName'][$employeeId] ?? null,
                ]);
            }

            DB::commit();

            return response()->json(['success' => 'Attendancemanagement created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Attendancemanagement: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getTotalDaysInMonth($month, $year = null)
    {
        $year = $year ?? date('Y');

        $month = str_pad($month, 2, '0', STR_PAD_LEFT);

        return cal_days_in_month(CAL_GREGORIAN, $month, $year);
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

    public function fetchAttendanceData(Request $request)
    {
        $request->validate([
            'month' => 'required|numeric',
            'employee_type' => 'required|in:1,2',
        ]);

        // Determine the model class based on employee_type
        $model = $request->employee_type == 1 ? \App\Models\Employeemanagement::class : \App\Models\Driver::class;

        // Fetch records
        $records = $model::get()->map(function ($emp) use ($request) {
            $name = $request->employee_type == 1
                ? $emp->first_name . ' ' . $emp->last_name
                : $emp->f_name. ' ' . $emp->l_name;

            return [
                'employee_id' => $emp->id,
                'name'        => $name,
                'type'        => $request->employee_type == 1 ? 'Employee' : 'Driver',
            ];
        });

        return response()->json(['records' => $records]);
}


}
