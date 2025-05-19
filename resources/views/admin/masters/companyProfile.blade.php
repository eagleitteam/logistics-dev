<x-admin.layout>
    <x-slot name="title">Company Settings</x-slot>
    <x-slot name="heading">Company Settings</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-cog me-2"></i> Company Settings</h4>
                        <button class="btn btn-primary" id="saveCompanySettings">
                            <i class="fas fa-save me-2"></i>Save Settings
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="companySettingsTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="company-info-tab" data-bs-toggle="tab" data-bs-target="#company-info" type="button" role="tab" aria-controls="company-info" aria-selected="true">
                                <i class="fas fa-building me-2"></i>Company Information
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="locations-tab" data-bs-toggle="tab" data-bs-target="#locations" type="button" role="tab" aria-controls="locations" aria-selected="false">
                                <i class="fas fa-map-marker-alt me-2"></i>Locations
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="departments-tab" data-bs-toggle="tab" data-bs-target="#departments" type="button" role="tab" aria-controls="departments" aria-selected="false">
                                <i class="fas fa-sitemap me-2"></i>Departments
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="holidays-tab" data-bs-toggle="tab" data-bs-target="#holidays" type="button" role="tab" aria-controls="holidays" aria-selected="false">
                                <i class="fas fa-calendar-day me-2"></i>Holidays
                            </button>
                        </li>
                    </ul>
                    
                    <!-- Tab Content -->
                    <div class="tab-content" id="companySettingsTabContent">
                        <!-- Company Information Tab -->
                        <div class="tab-pane fade show active" id="company-info" role="tabpanel" aria-labelledby="company-info-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><i class="fas fa-info-circle me-2"></i>Basic Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <form id="companyInfoForm">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="companyName" class="form-label">Company Name</label>
                                                        <input type="text" class="form-control" id="companyName" name="company_name" value="ABC Logistics Pvt. Ltd.">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="companyType" class="form-label">Company Type</label>
                                                        <select class="form-select" id="companyType" name="company_type">
                                                            <option value="Private Limited" selected>Private Limited</option>
                                                            <option value="Public Limited">Public Limited</option>
                                                            <option value="LLP">LLP</option>
                                                            <option value="Proprietorship">Proprietorship</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="registrationNumber" class="form-label">Registration Number</label>
                                                        <input type="text" class="form-control" id="registrationNumber" name="registration_number" value="U63090DL2010PTC207331">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="panNumber" class="form-label">PAN Number</label>
                                                        <input type="text" class="form-control" id="panNumber" name="pan_number" value="AAECB1234F">
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="gstin" class="form-label">GSTIN</label>
                                                        <input type="text" class="form-control" id="gstin" name="gstin" value="07AABCU9603R1ZM">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="financialYearStart" class="form-label">Financial Year Start</label>
                                                        <select class="form-select" id="financialYearStart" name="financial_year_start">
                                                            <option value="April" selected>April</option>
                                                            <option value="January">January</option>
                                                            <option value="July">July</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><i class="fas fa-address-card me-2"></i>Contact Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="addressLine1" class="form-label">Address Line 1</label>
                                                    <input type="text" class="form-control" id="addressLine1" name="address_line1" value="123 Industrial Area">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="addressLine2" class="form-label">Address Line 2</label>
                                                    <input type="text" class="form-control" id="addressLine2" name="address_line2" value="Sector 5">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="city" name="city" value="New Delhi">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="state" class="form-label">State</label>
                                                    <select class="form-select" id="state" name="state">
                                                        <option value="Delhi" selected>Delhi</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="pinCode" class="form-label">PIN Code</label>
                                                    <input type="text" class="form-control" id="pinCode" name="pin_code" value="110020">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number" value="011-23456789">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="info@abclogistics.com">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label for="website" class="form-label">Website</label>
                                                    <input type="url" class="form-control" id="website" name="website" value="https://www.abclogistics.com">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Locations Tab -->
                        <div class="tab-pane fade" id="locations" role="tabpanel" aria-labelledby="locations-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-map-marker-alt me-2"></i>Company Locations</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addLocationModal">
                                                    <i class="fas fa-plus me-2"></i>Add Location
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="locationsTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Location Code</th>
                                                            <th>Location Name</th>
                                                            <th>Address</th>
                                                            <th>Contact Person</th>
                                                            <th>Phone</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>DEL</td>
                                                            <td>Delhi Head Office</td>
                                                            <td>123 Industrial Area, New Delhi</td>
                                                            <td>Rajesh Kumar</td>
                                                            <td>9876543210</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-location" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-location" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>MUM</td>
                                                            <td>Mumbai Branch</td>
                                                            <td>456 Business Park, Mumbai</td>
                                                            <td>Priya Sharma</td>
                                                            <td>8765432109</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-location" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-location" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BLR</td>
                                                            <td>Bangalore Warehouse</td>
                                                            <td>789 Tech Park, Bangalore</td>
                                                            <td>Mohan Singh</td>
                                                            <td>7654321098</td>
                                                            <td><span class="badge bg-warning">Inactive</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-location" data-id="3"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-location" data-id="3"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Departments Tab -->
                        <div class="tab-pane fade" id="departments" role="tabpanel" aria-labelledby="departments-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-sitemap me-2"></i>Departments</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                                    <i class="fas fa-plus me-2"></i>Add Department
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="departmentsTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Department Code</th>
                                                            <th>Department Name</th>
                                                            <th>Head of Department</th>
                                                            <th>Location</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>OPS</td>
                                                            <td>Operations</td>
                                                            <td>Anita Desai</td>
                                                            <td>DEL, MUM</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>ACC</td>
                                                            <td>Accounts</td>
                                                            <td>Rajesh Kumar</td>
                                                            <td>DEL</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>HR</td>
                                                            <td>Human Resources</td>
                                                            <td>Priya Sharma</td>
                                                            <td>DEL, MUM</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="3"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="3"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>LOG</td>
                                                            <td>Logistics</td>
                                                            <td>Mohan Singh</td>
                                                            <td>DEL, MUM, BLR</td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-department" data-id="4"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-department" data-id="4"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Holidays Tab -->
                        <div class="tab-pane fade" id="holidays" role="tabpanel" aria-labelledby="holidays-tab">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="fas fa-calendar-day me-2"></i>Holidays</h5>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addHolidayModal">
                                                    <i class="fas fa-plus me-2"></i>Add Holiday
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-md-4">
                                                    <label for="holidayYear" class="form-label">Select Year</label>
                                                    <select class="form-select" id="holidayYear">
                                                        <option value="2023" selected>2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover" id="holidaysTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Day</th>
                                                            <th>Holiday Name</th>
                                                            <th>Type</th>
                                                            <th>Location</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>26-Jan-2023</td>
                                                            <td>Thursday</td>
                                                            <td>Republic Day</td>
                                                            <td><span class="badge bg-primary">National</span></td>
                                                            <td>All Locations</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="1"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="1"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>15-Aug-2023</td>
                                                            <td>Tuesday</td>
                                                            <td>Independence Day</td>
                                                            <td><span class="badge bg-primary">National</span></td>
                                                            <td>All Locations</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="2"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="2"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02-Oct-2023</td>
                                                            <td>Monday</td>
                                                            <td>Gandhi Jayanti</td>
                                                            <td><span class="badge bg-primary">National</span></td>
                                                            <td>All Locations</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="3"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="3"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19-Mar-2023</td>
                                                            <td>Sunday</td>
                                                            <td>Holi</td>
                                                            <td><span class="badge bg-info">Regional</span></td>
                                                            <td>DEL, MUM</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary edit-holiday" data-id="4"><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger delete-holiday" data-id="4"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Location Modal -->
    <div class="modal fade" id="addLocationModal" tabindex="-1" aria-labelledby="addLocationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLocationModalLabel"><i class="fas fa-map-marker-alt me-2"></i>Add Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addLocationForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="locationCode" class="form-label">Location Code</label>
                                <input type="text" class="form-control" id="locationCode" name="location_code" required>
                            </div>
                            <div class="col-md-6">
                                <label for="locationName" class="form-label">Location Name</label>
                                <input type="text" class="form-control" id="locationName" name="location_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="locationAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="locationAddress" name="address" rows="3" required></textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="contactPerson" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="contactPerson" name="contact_person" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="contactPhone" name="contact_phone" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="locationStatus" class="form-label">Status</label>
                                <select class="form-select" id="locationStatus" name="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Department Modal -->
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDepartmentModalLabel"><i class="fas fa-sitemap me-2"></i>Add Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addDepartmentForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="departmentCode" class="form-label">Department Code</label>
                                <input type="text" class="form-control" id="departmentCode" name="department_code" required>
                            </div>
                            <div class="col-md-6">
                                <label for="departmentName" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="departmentName" name="department_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="headOfDepartment" class="form-label">Head of Department</label>
                                <select class="form-select" id="headOfDepartment" name="head_of_department" required>
                                    <option value="">Select Employee</option>
                                    <option value="1">Anita Desai</option>
                                    <option value="2">Rajesh Kumar</option>
                                    <option value="3">Priya Sharma</option>
                                    <option value="4">Mohan Singh</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="departmentLocations" class="form-label">Locations</label>
                                <select class="form-select" id="departmentLocations" name="locations" multiple required>
                                    <option value="DEL">Delhi (DEL)</option>
                                    <option value="MUM">Mumbai (MUM)</option>
                                    <option value="BLR">Bangalore (BLR)</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="departmentStatus" class="form-label">Status</label>
                                <select class="form-select" id="departmentStatus" name="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Add Holiday Modal -->
    <div class="modal fade" id="addHolidayModal" tabindex="-1" aria-labelledby="addHolidayModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addHolidayModalLabel"><i class="fas fa-calendar-day me-2"></i>Add Holiday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addHolidayForm">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="holidayDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="holidayDate" name="holiday_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="holidayName" class="form-label">Holiday Name</label>
                                <input type="text" class="form-control" id="holidayName" name="holiday_name" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="holidayType" class="form-label">Type</label>
                                <select class="form-select" id="holidayType" name="holiday_type" required>
                                    <option value="national">National</option>
                                    <option value="regional">Regional</option>
                                    <option value="optional">Optional</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="holidayLocations" class="form-label">Applicable Locations</label>
                                <select class="form-select" id="holidayLocations" name="locations" multiple required>
                                    <option value="all" selected>All Locations</option>
                                    <option value="DEL">Delhi (DEL)</option>
                                    <option value="MUM">Mumbai (MUM)</option>
                                    <option value="BLR">Bangalore (BLR)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Modals would be similar to Add Modals but prefilled with data -->
    
    <script>
        // Initialize DataTables
        $(document).ready(function() {
            $('#locationsTable').DataTable({
                responsive: true
            });
            
            $('#departmentsTable').DataTable({
                responsive: true
            });
            
            $('#holidaysTable').DataTable({
                responsive: true
            });
            
            // Save Company Settings
            $('#saveCompanySettings').click(function() {
                // Collect all form data
                const companyInfoData = $('#companyInfoForm').serializeArray();
                const contactInfoData = {
                    address_line1: $('#addressLine1').val(),
                    address_line2: $('#addressLine2').val(),
                    city: $('#city').val(),
                    state: $('#state').val(),
                    pin_code: $('#pinCode').val(),
                    phone_number: $('#phoneNumber').val(),
                    email: $('#email').val(),
                    website: $('#website').val()
                };
                
                // Combine all data
                const allData = {
                    company_info: companyInfoData,
                    contact_info: contactInfoData
                };
                
                // AJAX request to save settings
                $.ajax({
                    url: '{{ route("Company-Profile.index") }}',
                    type: 'POST',
                    data: allData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Company settings saved successfully');
                        } else {
                            toastr.error('Error saving company settings');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error saving company settings');
                        console.error(error);
                    }
                });
            });
            
            // Add Location Form Submission
            $('#addLocationForm').submit(function(e) {
                e.preventDefault();
                
                $.ajax({
                    url: '{{ route("Company-Profile.store") }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Location added successfully');
                            $('#addLocationModal').modal('hide');
                            // Refresh locations table or add new row
                        } else {
                            toastr.error('Error adding location');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error adding location');
                        console.error(error);
                    }
                });
            });
            
            // Add Department Form Submission
            $('#addDepartmentForm').submit(function(e) {
                e.preventDefault();
                
                $.ajax({
                    url: '{{ route("Company-Profile.store") }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Department added successfully');
                            $('#addDepartmentModal').modal('hide');
                            // Refresh departments table or add new row
                        } else {
                            toastr.error('Error adding department');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error adding department');
                        console.error(error);
                    }
                });
            });
            
            // Add Holiday Form Submission
            $('#addHolidayForm').submit(function(e) {
                e.preventDefault();
                
                $.ajax({
                    url: '{{ route("Company-Profile.store") }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Holiday added successfully');
                            $('#addHolidayModal').modal('hide');
                            // Refresh holidays table or add new row
                        } else {
                            toastr.error('Error adding holiday');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Error adding holiday');
                        console.error(error);
                    }
                });
            });
            
            // Edit Location
            $('.edit-location').click(function() {
                const locationId = $(this).data('id');
                // AJAX to fetch location data and populate edit modal
                // Similar to add but with prefilled data
            });
            
            // Delete Location
            $('.delete-location').click(function() {
                const locationId = $(this).data('id');
                
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route("Company-Profile.destroy", "") }}/' + locationId,
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                if (response.success) {
                                    toastr.success('Location deleted successfully');
                                    // Remove row from table or refresh
                                } else {
                                    toastr.error('Error deleting location');
                                }
                            },
                            error: function(xhr, status, error) {
                                toastr.error('Error deleting location');
                                console.error(error);
                            }
                        });
                    }
                });
            });
            
            // Similar edit/delete handlers for departments and holidays
        });
    </script>
</x-admin.layout>