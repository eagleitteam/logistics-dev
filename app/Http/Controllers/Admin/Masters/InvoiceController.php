<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreInvoiceRequest;
use App\Http\Requests\Admin\Masters\UpdateInvoiceRequest;
use App\Models\Invoice;
use App\Models\Client;
use App\Models\TripMovement;
use App\Models\Invoiceiteam;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::latest()->get();
        return view('admin.masters.invoiceDisplay')->with(['Invoice' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::latest()->get();
        return view('admin.masters.invoiceCreate')->with(['clients' => $clients]); // create the blade if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {   
        // info('FormData', $request->all());
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $tripItems = json_decode($input['invoice_items'][0], true);

            info('Trip Items', $tripItems);
            $invoice = Invoice::create(Arr::only($input, Invoice::getFillables()));

            foreach ($tripItems as $item) {
                $reference = Invoiceiteam::create([
                    'client_id'        => $input['client_id'],
                    'invoice_id'       => $invoice->id,
                    'trip_movement_id' => $item['id'],
                ]);               
            }


            DB::commit();

            return response()->json(['success' => 'Invoice created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating Invoice: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $invoices = Invoice::find($id);

        if (!$invoices) {
            return response()->json(['error' => 'Invoice not found'], 404);
        }

        return response()->json(['Invoice' => $invoices]);
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit(Invoice $invoices)
    {
        if ($Invoice) {
            $response = [
                'result' => 1,
                'Invoice' => $Invoice,
            ];
        } else {
            $response = ['result' => 0];
        }
        return $response;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoices)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            $invoices->update(Arr::only($input, Invoice::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Invoice updated successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error updating Invoice: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoices)
    {
        try {
            DB::beginTransaction();
            $invoices->delete();
            DB::commit();

            return response()->json(['success' => 'Invoice deleted successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error deleting Invoice: ' . $e->getMessage()
            ], 500);
        }
    }

    public function clientiteamdetails($clientId, Request $request)
    {
        $items = TripMovement::where('client_id', $clientId)->get();
        if ($items->isEmpty()) {
            return response()->json(['status' => false, 'message' => 'No entries found for this client'], 404);
        }

        return response()->json(['status' => true, 'items' => $items]);
    }
}
