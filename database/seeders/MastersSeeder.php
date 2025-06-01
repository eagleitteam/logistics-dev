<?php

namespace Database\Seeders;

use App\Models\Ward;
use App\Models\StateNameWithCode;
use App\Models\Vendor;
use App\Models\Client;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\SelfVehicle;
use App\Models\Gstrate;
use App\Models\Yearmaster;
use App\Models\CompanyProfile;
use App\Models\EmployeeManagement;
use App\Models\BankRegister;
use App\Models\TripMovement;
use App\Models\Vendorhasvehicle;
use App\Models\VehicalNumber;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MastersSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Wards Seeder
        $wards = [
            [
                'id' => 1,
                'name' => 'Ward 1',
                'initial' => 'w1',
            ],
            [
                'id' => 2,
                'name' => 'Ward 2',
                'initial' => 'w2',
            ]
        ];

        foreach ($wards as $ward) {
            Ward::updateOrCreate([
                'id' => $ward['id']
            ], [
                'id' => $ward['id'],
                'name' => $ward['name'],
                'initial' => $ward['initial']
            ]);
        }

        // Vehicles Types Seeder
        $vehicles = [
            [
                'id' => 1,
                'type' => '20FT',
                'description' => 'Standard 20 Feet Vehicle',
                
            ],
            [
                'id' => 2,
                'type' => '32FT',
                'description' => 'Extended 32 Feet Vehicle',
                
            ],
            [
                'id' => 3,
                'type' => 'Electric Truck',
                'description' => 'Electric-powered heavy vehicle',
                
            ],
            [
                'id' => 4,
                'type' => 'Heavy Hauler',
                'description' => 'Heavy duty vehicle for long distance',
                
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::updateOrCreate(
                ['id' => $vehicle['id']],
                $vehicle
            );
        }


        // StateNameWithCode Seeder
    
         $states = [
            [
                'id' => 1,
                'stateCode' => '27',
                'stateName' => 'Maharashtra',
            ],
            [
                'id' => 2,
                'stateCode' => '30',
                'stateName' => 'Goa',
            ]
        ];

        foreach ($states as $state) {
            StateNameWithCode::updateOrCreate([
                'id' => $state['id']
            ], [
                'id' => $state['id'],
                'stateCode' => $state['stateCode'],
                'stateName' => $state['stateName']
            ]);
        }

        // Vondor   Seeder
        $vendors = [
            [
                'id' => 1,
                'name' => 'ABC Traders',
                'vendor_address' => '123, Market Road',
                'gst_no' => '27ABCDE1234F1Z5',
                'tds_applicable' => 1,
                'tds_rate' => 1.00,
                'contact_name' => 'Ravi Patil',
                'contact_no' => '9876543210',
                'alternate_contact_no' => '9823456789',
                'email' => 'abc@example.com',
                'address' => 'Office No. 12, Pune',
                'city' => 'Pune',
                'pincode' => '411001',

                // Instead of 'state' => 'Maharashtra', use this:
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),
                

            ],
            [
                'id' => 2,
                'name' => 'xyz Traders',
                'vendor_address' => '123, Market Road',
                'gst_no' => '27ABCDE1233F1Z5',
                'tds_applicable' => 2,
                'tds_rate' => 1.00,
                'contact_name' => 'Ravi Patil',
                'contact_no' => '9876543222',
                'alternate_contact_no' => '9823456777',
                'email' => 'abc@example.com',
                'address' => 'Office No. 12, virar',
                'city' => 'virar',
                'pincode' => '411011',

                // Instead of 'state' => 'Maharashtra', use this:
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),
                

            ],
            [
                'id' => 3,
                'name' => 'RRR Traders',
                'vendor_address' => '123, Market Road',
                'gst_no' => '27ABCDE1223F2Z5',
                'tds_applicable' => 2,
                'tds_rate' => 1.00,
                'contact_name' => 'Ravi Patil',
                'contact_no' => '9876543222',
                'alternate_contact_no' => '9823456777',
                'email' => 'abc@example.com',
                'address' => 'Office No. 12, virar',
                'city' => 'virar',
                'pincode' => '411011',

                // Instead of 'state' => 'Maharashtra', use this:
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),
                

            ],
        ];
        foreach ($vendors as $vendor) {
            \App\Models\Vendor::updateOrCreate(
                ['id' => $vendor['id']],
                $vendor // पूर्ण array pass करा, manual key-values लिहायची गरज नाही
            );
        }

        // Client Seeder
        $clients = [
            [
                'id' => 1,
                'name' => 'XYZ Enterprises',
                'gst_no' => '27XYZE1234X1Z5',
                'contact_person' => 'Priya Joshi',
                'contact_number' => '9876512345',
                'alternate_contact_no' => '9876598765',
                'email' => 'xyz@example.com',

                'billing_address' => 'Flat 4B, Business Towers',
                'city' => 'Mumbai',
                'pincode' => '400001',
                
                // Use state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'billing_type' => 1,
                
            ],
            [
                'id' => 2,
                'name' => 'www Enterprises',
                'gst_no' => '27XYZE1238X1Z5',
                'contact_person' => 'Priya Joshi',
                'contact_number' => '9876512344',
                'alternate_contact_no' => '9876598766',
                'email' => 'xyz@example.com',

                'billing_address' => 'Flat 4B, Business Towers',
                'city' => 'Mumbai',
                'pincode' => '400111',
                
                // Use state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'billing_type' => 2,
                
            ],
            [
                'id' => 3,
                'name' => 'ggg Enterprises',
                'gst_no' => '27XYZE9238X1Z5',
                'contact_person' => 'Priya Joshi',
                'contact_number' => '9876512344',
                'alternate_contact_no' => '9876598766',
                'email' => 'xyz@example.com',

                'billing_address' => 'Flat 4B, Business Towers',
                'city' => 'Mumbai',
                'pincode' => '400111',
                
                // Use state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'billing_type' => 2,
                
            ],
            [
                'id' => 4,
                'name' => 'jjj Enterprises',
                'gst_no' => '27XYZE9338X1Z5',
                'contact_person' => 'Priya Joshi',
                'contact_number' => '9876512344',
                'alternate_contact_no' => '9876598766',
                'email' => 'xyz@example.com',

                'billing_address' => 'Flat 4B, Business Towers',
                'city' => 'Mumbai',
                'pincode' => '400111',
                
                // Use state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'billing_type' => 2,
                
            ],
        ];

        foreach ($clients as $client) {
            Client::updateOrCreate(
                ['id' => $client['id']],
                $client
            );
        }

        // drivers Seeder
        $drivers = [
            [
                'id' => 1,
                'f_name' => 'Rajesh',
                'l_name' => 'Kadam',
                'mobile_no' => '9876543210',
                'joining_date' => '2024-01-10',
                'end_date' => null,
                'basic_salary' => 15000,
                'alternate_contact_no' => '9823456789',
                'email' => 'rajesh.kadam@example.com',
                'address' => 'Plot No. 45, Shivaji Nagar',
                'city' => 'Nashik',
                'pincode' => '422001',

                // dynamic state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'status' => 1,
                'aadhar_card_path' => null,
                'pan_card_path' => null,
                'driving_license_path' => null,
                'driving_license_validity' => '2028-12-31',
                'remark' => 'Experienced heavy vehicle driver',

                'bank_name' => 'State Bank of India',
                'bank_branch' => 'Nashik Main',
                'bank_account_no' => '123456789012',
                'bank_ifsc_code' => 'SBIN0001234',

                'reference_name' => 'Shivam More',
                'gpay_number' => '9876543210',

                
            ],
            [
                'id' => 2,
                'f_name' => 'praful',
                'l_name' => 'chavan',
                'mobile_no' => '9876543210',
                'joining_date' => '2024-01-10',
                'end_date' => null,
                'basic_salary' => 125000,
                'alternate_contact_no' => '9823456789',
                'email' => 'rajesh.kadam@example.com',
                'address' => 'Plot No. 45, Shivaji Nagar',
                'city' => 'Nashik',
                'pincode' => '422001',

                // dynamic state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'status' => 1,
                'aadhar_card_path' => null,
                'pan_card_path' => null,
                'driving_license_path' => null,
                'driving_license_validity' => '2028-12-20',
                'remark' => 'Experienced heavy vehicle driver',

                'bank_name' => 'State Bank of India',
                'bank_branch' => 'Nashik Main',
                'bank_account_no' => '123456789012',
                'bank_ifsc_code' => 'SBIN0001234',

                'reference_name' => 'Shivam More',
                'gpay_number' => '9876543210',

                
            ],
            [
                'id' => 3,
                'f_name' => 'ravi',
                'l_name' => 'more',
                'mobile_no' => '9876543210',
                'joining_date' => '2024-01-10',
                'end_date' => null,
                'basic_salary' => 35000,
                'alternate_contact_no' => '9823456789',
                'email' => 'rajesh.kadam@example.com',
                'address' => 'Plot No. 45, Shivaji Nagar',
                'city' => 'Nashik',
                'pincode' => '422001',

                // dynamic state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'status' => 1,
                'aadhar_card_path' => null,
                'pan_card_path' => null,
                'driving_license_path' => null,
                'driving_license_validity' => '2028-12-20',
                'remark' => 'Experienced heavy vehicle driver',

                'bank_name' => 'State Bank of India',
                'bank_branch' => 'Nashik Main',
                'bank_account_no' => '123456789012',
                'bank_ifsc_code' => 'SBIN0001234',

                'reference_name' => 'Shivam More',
                'gpay_number' => '9876543210',

                
            ],
            [
                'id' => 4,
                'f_name' => 'parag',
                'l_name' => 'patil',
                'mobile_no' => '9876543210',
                'joining_date' => '2024-01-10',
                'end_date' => null,
                'basic_salary' => 5000,
                'alternate_contact_no' => '9823456789',
                'email' => 'rajesh.kadam@example.com',
                'address' => 'Plot No. 45, Shivaji Nagar',
                'city' => 'Nashik',
                'pincode' => '422001',

                // dynamic state ID from StateNameWithCode
                'state' => StateNameWithCode::where('stateName', 'Maharashtra')->value('id'),

                'status' => 1,
                'aadhar_card_path' => null,
                'pan_card_path' => null,
                'driving_license_path' => null,
                'driving_license_validity' => '2028-12-20',
                'remark' => 'Experienced heavy vehicle driver',

                'bank_name' => 'State Bank of India',
                'bank_branch' => 'Nashik Main',
                'bank_account_no' => '123456789012',
                'bank_ifsc_code' => 'SBIN0001234',

                'reference_name' => 'Shivam More',
                'gpay_number' => '9876543210',

                
            ],
        ];

        foreach ($drivers as $driver) {
            Driver::updateOrCreate(
                ['id' => $driver['id']],
                $driver
            );
        }

        // Self Vehicles Seeder
        $SelfVehicles = [
            [
                'id' => 1,
                'vehicle_id' => 1,
                'vehicle_number' => 1,
                'fule_type' => 1, // Diesel
                'register_date' => '2023-01-10',
                'chassis_num' => 'CHS123456789',
                'eng_num' => 'ENG987654321',
                'model_num' => 'Model X1',
                'toll_stm' => 'Toll Active',
                'remark' => 'First vehicle',
                'f_s_d' => '2023-01-01',
                'f_e_d' => '2024-01-01',
                'file' => null,
                'tax_start_date' => '2023-02-01',
                'tax_end_date' => '2024-02-01',
                'tax_file' => null,
                'insurance_start_date' => '2023-03-01',
                'insurance_end_date' => '2024-03-01',
                'insurance_company_name' => 'ICICI Lombard',
                'insurance_document' => null,
                'puc_start_date' => '2023-01-01',
                'puc_end_date' => '2023-07-01',
                'puc_file' => null,
                'permit_start_date' => '2023-01-15',
                'permit_end_date' => '2024-01-15',
                'permit_document' => null,
                'national_permit_start_date' => '2023-01-20',
                'national_permit_end_date' => '2024-01-20',
                'national_permit_file' => null,
                'loan_start_date' => '2023-01-10',
                'loan_end_date' => '2026-01-10',
                'bank_name' => 'SBI',
                'loan_amt' => '500000',
                'emi_count' => '36',
                'emi_amt' => '15000',
                'emi_date' => '2023-02-10',
                'loan_document' => null,
                
            ],
            [
                'id' => 2,
                'vehicle_id' => 2,
                'vehicle_number' => 2,
                'fule_type' => 2, // CNG
                'register_date' => '2022-06-15',
                'chassis_num' => 'CHS654321098',
                'eng_num' => 'ENG123456789',
                'model_num' => 'Model Y2',
                'toll_stm' => 'Toll Inactive',
                'remark' => 'Second vehicle',
                'f_s_d' => '2022-06-01',
                'f_e_d' => '2023-06-01',
                'file' => null,
                'tax_start_date' => '2022-07-01',
                'tax_end_date' => '2023-07-01',
                'tax_file' => null,
                'insurance_start_date' => '2022-08-01',
                'insurance_end_date' => '2023-08-01',
                'insurance_company_name' => 'HDFC Ergo',
                'insurance_document' => null,
                'puc_start_date' => '2022-06-01',
                'puc_end_date' => '2022-12-01',
                'puc_file' => null,
                'permit_start_date' => '2022-06-20',
                'permit_end_date' => '2023-06-20',
                'permit_document' => null,
                'national_permit_start_date' => '2022-06-25',
                'national_permit_end_date' => '2023-06-25',
                'national_permit_file' => null,
                'loan_start_date' => null,
                'loan_end_date' => null,
                'bank_name' => null,
                'loan_amt' => null,
                'emi_count' => null,
                'emi_amt' => null,
                'emi_date' => null,
                'loan_document' => null,
                
            ],
            [
                'id' => 3,
                'vehicle_id' => 3,
                'vehicle_number' => 3,
                'fule_type' => 3, // Electrical
                'register_date' => '2024-02-01',
                'chassis_num' => 'ELEC888888',
                'eng_num' => 'ELEC123123',
                'model_num' => 'e-Truck 500',
                'toll_stm' => 'No Toll',
                'remark' => 'Electric vehicle',
                'f_s_d' => '2024-02-01',
                'f_e_d' => '2025-02-01',
                'file' => null,
                'tax_start_date' => '2024-03-01',
                'tax_end_date' => '2025-03-01',
                'tax_file' => null,
                'insurance_start_date' => '2024-04-01',
                'insurance_end_date' => '2025-04-01',
                'insurance_company_name' => 'Tata AIG',
                'insurance_document' => null,
                'puc_start_date' => null,
                'puc_end_date' => null,
                'puc_file' => null,
                'permit_start_date' => '2024-03-10',
                'permit_end_date' => '2025-03-10',
                'permit_document' => null,
                'national_permit_start_date' => '2024-03-15',
                'national_permit_end_date' => '2025-03-15',
                'national_permit_file' => null,
                'loan_start_date' => null,
                'loan_end_date' => null,
                'bank_name' => null,
                'loan_amt' => null,
                'emi_count' => null,
                'emi_amt' => null,
                'emi_date' => null,
                'loan_document' => null,
                
            ],
            [
                'id' => 4,
                'vehicle_id' => 4,
                'vehicle_number' => 1,
                'fule_type' => 1, // Diesel
                'register_date' => '2021-12-01',
                'chassis_num' => 'DIES123321',
                'eng_num' => 'DIES456654',
                'model_num' => 'Heavy X9',
                'toll_stm' => 'Active',
                'remark' => 'Long distance hauler',
                'f_s_d' => '2021-12-01',
                'f_e_d' => '2022-12-01',
                'file' => null,
                'tax_start_date' => '2022-01-01',
                'tax_end_date' => '2023-01-01',
                'tax_file' => null,
                'insurance_start_date' => '2022-02-01',
                'insurance_end_date' => '2023-02-01',
                'insurance_company_name' => 'Bajaj Allianz',
                'insurance_document' => null,
                'puc_start_date' => '2022-01-01',
                'puc_end_date' => '2022-07-01',
                'puc_file' => null,
                'permit_start_date' => '2022-01-15',
                'permit_end_date' => '2023-01-15',
                'permit_document' => null,
                'national_permit_start_date' => '2022-01-20',
                'national_permit_end_date' => '2023-01-20',
                'national_permit_file' => null,
                'loan_start_date' => '2021-12-10',
                'loan_end_date' => '2024-12-10',
                'bank_name' => 'Axis Bank',
                'loan_amt' => '700000',
                'emi_count' => '36',
                'emi_amt' => '19444',
                'emi_date' => '2022-01-10',
                'loan_document' => null,
                
            ],
        ];

        foreach ($SelfVehicles as $SelfVehicle) {
            SelfVehicle::updateOrCreate(
                ['id' => $SelfVehicle['id']],
                $SelfVehicle
            );
        }

        // Gstrate Seeder
        $rates = [
            [
                'code_type' => 'GST',
                'code' => 'GST001',
                'code_description' => 'Standard GST Rate',
                'igst' => 18.00,
                'cgst' => 9.00,
                'sgst' => 9.00,
                'status' => 1,
                'remark' => 'Standard 18% GST',
                
            ],
            [
                'code_type' => 'GST',
                'code' => 'GST002',
                'code_description' => 'Reduced GST Rate',
                'igst' => 5.00,
                'cgst' => 2.50,
                'sgst' => 2.50,
                'status' => 1,
                'remark' => 'Reduced 5% GST',
                
            ],
            [
                'code_type' => 'GST',
                'code' => 'GST003',
                'code_description' => 'Exempted GST',
                'igst' => 0.00,
                'cgst' => 0.00,
                'sgst' => 0.00,
                'status' => 2, // Inactive
                'remark' => 'GST Exempted',
                
            ],
            [
                'code_type' => 'GST',
                'code' => 'GST004',
                'code_description' => 'Special GST Rate',
                'igst' => 12.00,
                'cgst' => 6.00,
                'sgst' => 6.00,
                'status' => 1,
                'remark' => 'Special 12% GST',
                
            ],
        ];

        foreach ($rates as $rate) {
            Gstrate::updateOrCreate(
                ['code' => $rate['code']],
                $rate
            );
        }

        // Yearmaster Seeder
        $yearmasters = [
            [
                'id' => 1,
                'title' => 'FY 2023-2024',
                'start_date' => '2023-04-01',
                'end_date' => '2024-03-31',
                'status' => 1,
                'freeze_status' => 0,
                
            ],
            [
                'id' => 2,
                'title' => 'FY 2024-2025',
                'start_date' => '2024-04-01',
                'end_date' => '2025-03-31',
                'status' => 1,
                'freeze_status' => 0,
                
            ],
            [
                'id' => 3,
                'title' => 'FY 2025-2026',
                'start_date' => '2025-04-01',
                'end_date' => '2026-03-31',
                'status' => 2,        // inactive example
                'freeze_status' => 1, // freeze example
                
            ],
        ];

        foreach ($yearmasters as $yearmaster) {
            Yearmaster::updateOrCreate(
                ['id' => $yearmaster['id']],
                $yearmaster
            );
        }

        // CompanyProfile Seeder
        $companyprofiles = [
            [
                'id' => 1,
                'company_name' => 'ABC Technologies',
                'registration_number' => 'REG123456',
                'address_line1' => '123, MG Road',
                'address_line2' => 'Near City Park',
                'companyphone' => '9876543210',
                'email' => 'contact@abctech.com',
                'companywebsite' => 'https://www.abctech.com',
                'companylogo' => 'logo_abctech.png',
                'gststatus' => 'Registered',
                'gstin' => '27ABCDE1234F1Z5',
                'pan_number' => 'ABCDE1234F',
                'phone_number' => '9876543210',
                'pin_code' => '400001',
                'city' => 'Mumbai',
                'state' => 'Maharashtra',
                'company_logo' => 'logo_abctech.png',
                'company_seal' => 'seal_abctech.png',
                'company_signature' => 'signature_abctech.png',
                'website' => 'https://www.abctech.com',
                
            ],
            [
                'id' => 2,
                'company_name' => 'XYZ Enterprises',
                'registration_number' => 'REG654321',
                'address_line1' => '456, Park Avenue',
                'address_line2' => '',
                'companyphone' => '9123456789',
                'email' => 'info@xyzenterprises.com',
                'companywebsite' => 'https://www.xyzenterprises.com',
                'companylogo' => 'logo_xyz.png',
                'gststatus' => 'Unregistered',
                'gstin' => null,
                'pan_number' => 'XYZDE9876L',
                'phone_number' => '9123456789',
                'pin_code' => '560001',
                'city' => 'Bangalore',
                'state' => 'Karnataka',
                'company_logo' => 'logo_xyz.png',
                'company_seal' => 'seal_xyz.png',
                'company_signature' => 'signature_xyz.png',
                'website' => 'https://www.xyzenterprises.com',
                
            ],
        ];

        foreach ($companyprofiles as $companyprofile) {
            CompanyProfile::updateOrCreate(
                ['id' => $companyprofile['id']],
                $companyprofile
            );
        }

        // EmployeeManagement Seeder
        $employees = [
            [
                'id' => 1,
                'type' => 'Full-Time',
                'emp_id' => 'EMP001',
                'first_name' => 'Rahul',
                'last_name' => 'Deshmukh',
                'joining_date' => '2022-01-15',
                'basic_salary' => 50000.00,
                'contact_number' => '9876543210',
                'email' => 'rahul.deshmukh@example.com',
                'department' => 'IT',
                'designation' => 'Software Engineer',
                'address' => '123, Pune',
                'bank_name' => 'State Bank of India',
                'account_number' => '1234567890',
                'ifsc_code' => 'SBIN0000123',
                'pan_number' => 'ABCDE1234F',
                'branch' => 'Pune Main Branch',
                'note' => 'Experienced in Laravel',
                'status' => 1,
                
            ],
            [
                'id' => 2,
                'type' => 'Part-Time',
                'emp_id' => 'EMP002',
                'first_name' => 'Sneha',
                'last_name' => 'Kulkarni',
                'joining_date' => '2023-03-10',
                'basic_salary' => 30000.00,
                'contact_number' => '9123456789',
                'email' => 'sneha.kulkarni@example.com',
                'department' => 'HR',
                'designation' => 'HR Manager',
                'address' => '456, Mumbai',
                'bank_name' => 'HDFC Bank',
                'account_number' => '0987654321',
                'ifsc_code' => 'HDFC0000456',
                'pan_number' => 'XYZDE9876L',
                'branch' => 'Mumbai Central',
                'note' => 'Part-time employee',
                'status' => 2,
                
            ],
        ];

        foreach ($employees as $employee) {
            EmployeeManagement::updateOrCreate(
                ['id' => $employee['id']],
                $employee
            );
        }

        // BankRegister Seeder
        $banks = [
            [
                'id' => 1,
                'act_type' => 1,
                'Bank_Name' => 'State Bank of India',
                'BankBranch' => 'Mumbai Main Branch',
                'BankAccountNo' => '123456789012',
                'BankIFSCCode' => 'SBIN0000456',
                'Remark' => 'Primary savings account',
                'status' => 1,
                
            ],
            [
                'id' => 2,
                'act_type' => 2,
                'Bank_Name' => 'HDFC Bank',
                'BankBranch' => 'Pune Shivaji Nagar',
                'BankAccountNo' => '987654321098',
                'BankIFSCCode' => 'HDFC0000789',
                'Remark' => 'Current account for business',
                'status' => 1,
                
            ],
        ];

        foreach ($banks as $bank) {
            BankRegister::updateOrCreate(
                ['id' => $bank['id']],
                $bank
            );
        }

       


        // Vendorhasvehicle Seeder

        $vehicles = [
            ['vendor_id' => 1, 'vehicle_id' => 1, 'vehicle_number' => 'MH01AB1001', 'capacity' => '10 Ton', 'status' => 'active'],
            ['vendor_id' => 1, 'vehicle_id' => 2, 'vehicle_number' => 'MH01AB1002', 'capacity' => '8 Ton', 'status' => 'active'],
            ['vendor_id' => 1, 'vehicle_id' => 3, 'vehicle_number' => 'MH01AB1003', 'capacity' => '15 Ton', 'status' => 'inactive'],
            ['vendor_id' => 2, 'vehicle_id' => 4, 'vehicle_number' => 'MH02CD2001', 'capacity' => '12 Ton', 'status' => 'active'],
            ['vendor_id' => 2, 'vehicle_id' => 1, 'vehicle_number' => 'MH02CD2002', 'capacity' => '10 Ton', 'status' => 'active'],
            ['vendor_id' => 2, 'vehicle_id' => 2, 'vehicle_number' => 'MH02CD2003', 'capacity' => '14 Ton', 'status' => 'inactive'],
            ['vendor_id' => 3, 'vehicle_id' => 3, 'vehicle_number' => 'MH03EF3001', 'capacity' => '8 Ton', 'status' => 'active'],
            ['vendor_id' => 3, 'vehicle_id' => 4, 'vehicle_number' => 'MH03EF3002', 'capacity' => '10 Ton', 'status' => 'active'],
            ['vendor_id' => 3, 'vehicle_id' => 1, 'vehicle_number' => 'MH03EF3003', 'capacity' => '20 Ton', 'status' => 'active'],
            ['vendor_id' => 3, 'vehicle_id' => 2, 'vehicle_number' => 'MH03EF3004', 'capacity' => '18 Ton', 'status' => 'inactive'],
        ];

        foreach ($vehicles as $v) {
            Vendorhasvehicle::create([
                'vendor_id' => $v['vendor_id'],
                'vehicle_id' => $v['vehicle_id'],
                'vehicle_number' => $v['vehicle_number'],
                'capacity' => $v['capacity'],
                'status' => $v['status'],
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // VehicleNumber Seeder

         $vehicals = [
            ['id' => 1, 'vehicle_number' => 'MP09AB1234', 'from' => 1, 'reference_id' => 1],
            ['id' => 2, 'vehicle_number' => 'GJ01XY5678', 'from' => 2, 'reference_id' => 2],
            ['id' => 3, 'vehicle_number' => 'MH12PQ3456', 'from' => 1, 'reference_id' => 3],
            ['id' => 4, 'vehicle_number' => 'KA03LM7890', 'from' => 2, 'reference_id' => 4],
            
        ];

        foreach ($vehicals as $vehical) {
            VehicalNumber::updateOrCreate(
                ['id' => $vehical['id']],
                $vehical
            );
        }

         // TripMovement Seeder
        $tripMovements = [
            [
                'trip_count_no' => 101,
                'trip_date' => Carbon::parse('2025-01-10'),
                'vendor_id' => 1,
                'origin' => 'Mumbai',
                'destination' => 'Pune',
                'vehicle_no' => 1,
                'vehicle_id' => 1,
                'client_id' => 1,
                'driver_id' => 1,
                'per_day_allow' => '500',
                'rate' => 1500.00,
                'advance' => 500.00,
                'advance_date' => Carbon::parse('2025-01-05'),
                'toll' => 100.00,
                'unloading_charges' => 50.00,
                'holding_charges' => 20.00,
                'balance_payment' => 1070.00,
                'payment_received_amount' => 1070.00,
                'payment_date' => Carbon::parse('2025-01-12'),
                'pod_no' => 'POD123',
                'pod_status' => 1,
                'bill_status' => 1,
                'payment_terms' => 'Net 30',
                'invoice_no' => 'INV1001',
                'invoice_date' => Carbon::parse('2025-01-11'),
                'courier_doc_no' => 'CR123',
                'courier_date' => Carbon::parse('2025-01-13'),
                'vendor_rate' => 1400.00,
                'remark' => 'On time delivery',
                
            ],
            [
                'trip_count_no' => 102,
                'trip_date' => Carbon::parse('2025-02-15'),
                'vendor_id' => 2,
                'origin' => 'Pune',
                'destination' => 'Nagpur',
                'vehicle_no' => 2,
                'vehicle_id' => 2,
                'client_id' => 2,
                'driver_id' => 2,
                'per_day_allow' => '600',
                'rate' => 2000.00,
                'advance' => 800.00,
                'advance_date' => Carbon::parse('2025-02-10'),
                'toll' => 150.00,
                'unloading_charges' => 75.00,
                'holding_charges' => 30.00,
                'balance_payment' => 1045.00,
                'payment_received_amount' => 1045.00,
                'payment_date' => Carbon::parse('2025-02-18'),
                'pod_no' => 'POD124',
                'pod_status' => 2,
                'bill_status' => 1,
                'payment_terms' => 'Net 15',
                'invoice_no' => 'INV1002',
                'invoice_date' => Carbon::parse('2025-02-16'),
                'courier_doc_no' => 'CR124',
                'courier_date' => Carbon::parse('2025-02-19'),
                'vendor_rate' => 1900.00,
                'remark' => 'Delayed due to weather',
                
            ],
            [
                'trip_count_no' => 103,
                'trip_date' => Carbon::parse('2025-03-05'),
                'vendor_id' => 3,
                'origin' => 'Nagpur',
                'destination' => 'Bhopal',
                'vehicle_no' => 3,
                'vehicle_id' => 3,
                'client_id' => 3,
                'driver_id' => 3,
                'per_day_allow' => '550',
                'rate' => 1800.00,
                'advance' => 600.00,
                'advance_date' => Carbon::parse('2025-03-01'),
                'toll' => 120.00,
                'unloading_charges' => 60.00,
                'holding_charges' => 25.00,
                'balance_payment' => 1095.00,
                'payment_received_amount' => 1095.00,
                'payment_date' => Carbon::parse('2025-03-08'),
                'pod_no' => 'POD125',
                'pod_status' => 1,
                'bill_status' => 1,
                'payment_terms' => 'Net 45',
                'invoice_no' => 'INV1003',
                'invoice_date' => Carbon::parse('2025-03-06'),
                'courier_doc_no' => 'CR125',
                'courier_date' => Carbon::parse('2025-03-09'),
                'vendor_rate' => 1700.00,
                'remark' => 'Smooth trip',
                
            ],
            [
                'trip_count_no' => 104,
                'trip_date' => Carbon::parse('2025-04-10'),
                'vendor_id' => 1,
                'origin' => 'Bhopal',
                'destination' => 'Indore',
                'vehicle_no' => 4,
                'vehicle_id' => 4,
                'client_id' => 2,
                'driver_id' => 2,
                'per_day_allow' => '500',
                'rate' => 1600.00,
                'advance' => 400.00,
                'advance_date' => Carbon::parse('2025-04-05'),
                'toll' => 110.00,
                'unloading_charges' => 55.00,
                'holding_charges' => 20.00,
                'balance_payment' => 1015.00,
                'payment_received_amount' => 1015.00,
                'payment_date' => Carbon::parse('2025-04-12'),
                'pod_no' => 'POD126',
                'pod_status' => 2,
                'bill_status' => 1,
                'payment_terms' => 'Net 30',
                'invoice_no' => 'INV1004',
                'invoice_date' => Carbon::parse('2025-04-11'),
                'courier_doc_no' => 'CR126',
                'courier_date' => Carbon::parse('2025-04-13'),
                'vendor_rate' => 1500.00,
                'remark' => 'Minor delay due to traffic',
                
            ],
            [
                'trip_count_no' => 105,
                'trip_date' => Carbon::parse('2025-05-20'),
                'vendor_id' => 2,
                'origin' => 'Indore',
                'destination' => 'Ahmedabad',
                'vehicle_no' => 5,
                'vehicle_id' => 1,
                'client_id' => 1,
                'driver_id' => 1,
                'per_day_allow' => '650',
                'rate' => 2200.00,
                'advance' => 900.00,
                'advance_date' => Carbon::parse('2025-05-15'),
                'toll' => 180.00,
                'unloading_charges' => 80.00,
                'holding_charges' => 35.00,
                'balance_payment' => 1105.00,
                'payment_received_amount' => 1105.00,
                'payment_date' => Carbon::parse('2025-05-22'),
                'pod_no' => 'POD127',
                'pod_status' => 1,
                'bill_status' => 1,
                'payment_terms' => 'Net 15',
                'invoice_no' => 'INV1005',
                'invoice_date' => Carbon::parse('2025-05-21'),
                'courier_doc_no' => 'CR127',
                'courier_date' => Carbon::parse('2025-05-23'),
                'vendor_rate' => 2100.00,
                'remark' => 'On schedule',
                
            ],
        ];

        foreach ($tripMovements as $trip) {
            TripMovement::updateOrCreate(
                ['trip_count_no' => $trip['trip_count_no']],
                $trip
            );
        }

       
    }
}
