<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payrollpaymentmanagement;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TaxOnsalaryreportController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payrollpaymentmanagements = payrollpaymentmanagement::latest()->get();
        return view('admin.masters.taxOnSalaryReport', compact('payrollpaymentmanagements'));
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
        try {
            DB::beginTransaction();
            $input = $request->validated();
            payrollpaymentmanagement::create(Arr::only($input, payrollpaymentmanagement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Salaryreport created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Salaryreport: ' . $e->getMessage()
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
