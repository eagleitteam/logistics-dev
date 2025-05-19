<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Masters\StorePayrollpaymentmanagementRequest;
use App\Http\Requests\Admin\Masters\UpdatePayrollpaymentmanagementRequest;
use App\Models\Payrollpaymentmanagement;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PayrollpaymentmanagementController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payrollpaymentmanagements = payrollpaymentmanagement::latest()->get();
        return view('admin.masters.payrollPaymentManagement', compact('payrollpaymentmanagements'));
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
    public function store(StorePayrollpaymentmanagementRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            payrollpaymentmanagement::create(Arr::only($input, payrollpaymentmanagement::getFillables()));
            DB::commit();

            return response()->json(['success' => 'payrollpaymentmanagement created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating payrollpaymentmanagement: ' . $e->getMessage()
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
