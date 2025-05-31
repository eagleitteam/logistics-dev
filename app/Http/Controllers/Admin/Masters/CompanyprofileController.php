<?php

namespace App\Http\Controllers\Admin\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Masters\StoreCompanyprofileRequest;
use App\Models\StateNameWithCode;
use App\Models\Companyprofile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class CompanyprofileController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get distinct state names sorted alphabetically
         $stateNameWithCode = StateNameWithCode::latest()->get();

         $companyprofiles = companyprofile::first(); // Get first record

        // Pass both company profiles and states to the view
        return view('admin.masters.companyProfile')->with(['StateNameWithCode' => $stateNameWithCode,'companyprofile' => $companyprofiles]);

        
        // return view('admin.masters.companyProfile', compact('companyprofiles'));
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
    public function store(StoreCompanyprofileRequest $request)
    {
        try {
            DB::beginTransaction();
            $input = $request->validated();

            $companyName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->company_name); // sanitize for folder name
            $folderPath = "uploads/companies_documents/{$companyName}";

        // Upload and save logo
        if ($request->hasFile('company_logo')) {
            $logoFile = $request->file('company_logo');
            $logoName = 'logo_' . $companyName . '.' . $logoFile->getClientOriginalExtension();
            $input['logo'] = $logoFile->storeAs($folderPath, $logoName, 'public');
        }

        // Upload and save seal
        if ($request->hasFile('company_seal')) {
            $sealFile = $request->file('company_seal');
            $sealName = 'seal_' . $companyName . '.' . $sealFile->getClientOriginalExtension();
            $input['seal'] = $sealFile->storeAs($folderPath, $sealName, 'public');
        }

        // Upload and save signature
        if ($request->hasFile('company_signature')) {
            $signatureFile = $request->file('company_signature');
            $signatureName = 'signature_' . $companyName . '.' . $signatureFile->getClientOriginalExtension();
            $input['signature'] = $signatureFile->storeAs($folderPath, $signatureName, 'public');
        }

        
        // Store in database using your original method
            
            companyprofile::create(Arr::only($input, companyprofile::getFillables()));
            DB::commit();

            return response()->json(['success' => 'companyprofile created successfully!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Error creating companyprofile: ' . $e->getMessage()
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
