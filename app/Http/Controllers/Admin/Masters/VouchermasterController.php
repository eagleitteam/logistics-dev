<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreVouchermasterRequest;
use App\Http\Requests\Admin\Masters\StoreIncomeRequest;
use App\Http\Requests\Admin\Masters\StoreExpanseRequest;
use App\Http\Requests\Admin\Masters\StoreLoanRequest;
use App\Http\Requests\Admin\Masters\StoreAdvanceRequest;
use App\Http\Requests\Admin\Masters\StoreCashRequest;
use App\Http\Requests\Admin\Masters\UpdateVouchermasterRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Vouchermaster;
use App\Models\Income;
use App\Models\Loan;
use App\Models\Cash;
use App\Models\Client;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VouchermasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all Income (latest first)
        $incomes = Income::with('client')->get();

        $clients = Client::latest()->get();

        $vouchermasters = Vouchermaster::latest()->get();
        return view('admin.masters.voucherMaster')->with([ 'incomes' => $incomes ,'vouchermasters' => $vouchermasters,'clients'=> $clients ]);
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
        $formType = $request->input('form_type');

        try {
            DB::beginTransaction();
            $message = '';

            switch ($formType) {
                case 'income':
                    $rules = (new StoreIncomeRequest())->rules(); //  Correct instantiation
                    $input = Validator::make($request->all(), $rules)->validate();

                    

                    $voucher = Vouchermaster::create([
                        'voucher_type' => '1',
                        'voucher_date' => $input['tranDate'],
                        'category_type' => $input['income_Category'],
                        'created_by' => auth()->id(),
                    ]);

                    $input['voucher_ref'] = $voucher->id;
                    Income::create(Arr::only($input, Income::getFillables()));
                    $message = 'Income created successfully!';
                    break;

                case 'expense':
                    $formRequest = new StoreExpenseRequest();
                    $input = $formRequest->validate($request);

                    $voucher = Vouchermaster::create([
                        'voucher_type' => 'Expense',
                        'voucher_date' => $input['tranDate'],
                        'category_type' => $input['expense_Category'],
                        'created_by' => auth()->id(),
                    ]);

                    $input['voucher_ref'] = $voucher->id;
                    Expense::create(Arr::only($input, Expense::getFillables()));
                    $message = 'Expense created successfully!';
                    break;

                case 'loan':
                    $rules = (new StoreLoanRequest())->rules(); //  Correct instantiation
                    $input = Validator::make($request->all(), $rules)->validate();

                    // dd($request->all()); // For debugging only

                    $voucher = Vouchermaster::create([
                        'voucher_type' => '3',
                        'voucher_date' => $input['tranDate'],
                        'category_type' => $input['loan_type'],
                        'created_by' => auth()->id(),
                    ]);

                    $input['voucher_ref'] = $voucher->id;

                    Loan::create(Arr::only($input, Loan::getFillables()));
                    $message = 'Loan created successfully!';
                    break;

                case 'advance':
                    $rules = (new StoreAdvanceRequest())->rules(); //  Correct instantiation
                    $input = Validator::make($request->all(), $rules)->validate();

                    // dd($request->all()); // For debugging only

                    $voucher = Vouchermaster::create([
                        'voucher_type' => '4',
                        'voucher_date' => $input['tranDate'],
                        'category_type' => $input['loan_type'],
                        'created_by' => auth()->id(),
                    ]);

                    $input['voucher_ref'] = $voucher->id;

                    Loan::create(Arr::only($input, Loan::getFillables()));
                    $message = 'Advance created successfully!';
                    break;

                    case 'cash':
                    $rules = (new StoreCashRequest())->rules(); //  Correct instantiation
                    $input = Validator::make($request->all(), $rules)->validate();

                    // dd($request->all()); // For debugging only

                    $voucher = Vouchermaster::create([
                        'voucher_type' => '5',
                        'voucher_date' => $input['tranDate'],
                        'category_type' => $input['cash_type'],
                        'created_by' => auth()->id(),
                    ]);

                    $input['voucher_ref'] = $voucher->id;

                    Cash::create(Arr::only($input, Cash::getFillables()));
                    $message = 'Cash created successfully!';
                    break;


                default:
                    throw new \Exception('Invalid form type');
            }

            DB::commit();
            return response()->json(['success' => $message]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error2' => 'Error: ' . $e->getMessage()
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
