<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle\Employeemanagement;
use App\Models\Vehicle\Driver;
use Carbon\Carbon;
use App\Models\TripMovement;

class SalaryModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $month = $request->month ?? '';
        $employeeType = $request->employee_type ?? '';

        $model = $request->employee_type == 1 ? \App\Models\Employeemanagement::class : \App\Models\Driver::class;
        $year = now()->year;
        $from_date = $to_date = null;
        if ($month) {
            $from_date = Carbon::createFromDate($year, $month, 1)->startOfMonth()->toDateString();
            $to_date   = Carbon::createFromDate($year, $month, 1)->endOfMonth()->toDateString();
        }

        $getSalaryDetails = $model::get()->map(function ($emp) use ($employeeType, $from_date, $to_date) {

            $name = $employeeType == 1
                ? $emp->first_name . ' ' . $emp->last_name
                : $emp->f_name. ' ' . $emp->l_name;

            $tripAllowance = 0;

            if ($employeeType == 2 && $from_date && $to_date) {
                $tripAllowance = TripMovement::where('driver_id', $emp->id)
                    ->whereBetween('trip_date', [$from_date, $to_date])
                    ->sum('per_day_allow');
            }
            return [
                'employee_id' => $emp->id,
                'name'        => $name,
                'basic_salary'=> $emp->basic_salary,
                'trip_allowance'=> $tripAllowance,
                'net_salary'    => $emp->basic_salary + $tripAllowance, 

            ];
        });

        return view('admin.salary.view')->with(['getSalaryDetails' => $getSalaryDetails, 'from_date'        => $from_date,
        'to_date'          => $to_date,
        'selected_month'   => $month,
        'selected_type'    => $employeeType,]);

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
    public function store(Request $request)
    {
        //
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
