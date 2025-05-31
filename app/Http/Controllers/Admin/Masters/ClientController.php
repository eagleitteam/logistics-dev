<?php

namespace App\Http\Controllers\admin\masters;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\Admin\Masters\StoreClientRequest;
use App\Models\Client;
use App\Models\StateNameWithCode;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $clients = Client::latest()->get();

        // return view('admin.masters.client')->with(['clients' => $clients]);

        // Get all clients (latest first)
         $clients = Client::with('states')->latest()->get();

        
         // Get distinct state names sorted alphabetically
         $stateNameWithCode = StateNameWithCode::latest()->get();

        // Pass both clients and states to the view
         return view("admin.masters.client")->with(['clients'=>$clients,'StateNameWithCode'=>$stateNameWithCode]);
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
    public function store(StoreClientRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();
            // Create Cilent
            $client = Client::create(Arr::only($input, Client::getFillables()));
            DB::commit();
            return response()->json(['success' => 'Client created successfully!']);

        } catch (\Exception $e) {
            DB::rollBack();
            return $this->respondWithAjax($e, 'creating', 'Client');
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
    public function edit(client $client)
    {
        try {
            return response()->json([
                'client' => $client,
                'success' => 'Vendor retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve vendor'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClientRequest $request, client $client)
    {
       try {
            DB::beginTransaction();
            $input = $request->validated();
            $client->update(Arr::only($input, client::getFillables()));
            DB::commit();

            return response()->json(['success' => 'Vendclientor updated successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'updating', 'client');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        try {
            DB::beginTransaction();
            $client->delete();
            DB::commit();

            return response()->json(['success' => 'client deleted successfully!']);
        } catch (\Exception $e) {
            return $this->respondWithAjax($e, 'deleting', 'client');
        }
    }
}
