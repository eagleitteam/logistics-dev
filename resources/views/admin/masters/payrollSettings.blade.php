<x-admin.layout>
    <x-slot name="title">Payroll Settings</x-slot>
    <x-slot name="heading">Payroll Settings</x-slot>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><i class="fas fa-money-bill-wave me-2"></i> Payroll Settings</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tabs">
                        <div class="tab active" data-tab="salary-components">Salary Components</div>
                        <div class="tab" data-tab="tax-settings">Tax Settings</div>
                        <div class="tab" data-tab="pf-settings">PF Settings</div>
                        <div class="tab" data-tab="esi-settings">ESI Settings</div>
                        <div class="tab" data-tab="payment-settings">Payment Settings</div>
                    </div>

                    <!-- Salary Components Tab -->
                    <div class="tab-content active" id="salary-components">
                        <div class="card">
                            <div class="card-header">
                                <h4><i class="fas fa-cubes me-2"></i>Salary Structure</h4>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addComponentModal">
                                    <i class="fas fa-plus me-1"></i> Add Component
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Component</th>
                                                <th>Type</th>
                                                <th>Taxable</th>
                                                <th>PF Applicable</th>
                                                <th>ESI Applicable</th>
                                                <th>Default Value</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Basic Salary</td>
                                                <td>Earning</td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td>50% of CTC</td>
                                                <td>
                                                    <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editComponentModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dearness Allowance</td>
                                                <td>Earning</td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td>20% of Basic</td>
                                                <td>
                                                    <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editComponentModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>House Rent Allowance</td>
                                                <td>Earning</td>
                                                <td>Partially</td>
                                                <td><i class="fas fa-times text-danger"></i></td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td>40% of Basic</td>
                                                <td>
                                                    <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editComponentModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tax Settings Tab -->
                    <div class="tab-content" id="tax-settings" style="display: none;">
                        <div class="card">
                            <div class="card-header">
                                <h4><i class="fas fa-file-invoice-dollar me-2"></i>Tax Configuration</h4>
                            </div>
                            <div class="card-body">
                                <form id="taxSettingsForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">TDS Deduction Method</label>
                                            <select class="form-select" name="tds_method">
                                                <option>Monthly</option>
                                                <option>Quarterly</option>
                                                <option>Yearly</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">TDS Threshold Amount</label>
                                            <input type="text" class="form-control" name="tds_threshold" value="250000">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tax Regime</label>
                                            <select class="form-select" name="tax_regime">
                                                <option>New Tax Regime</option>
                                                <option>Old Tax Regime</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Default Employee Tax Option</label>
                                            <select class="form-select" name="default_tax_option">
                                                <option>New Tax Regime</option>
                                                <option>Old Tax Regime</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Standard Deduction</label>
                                            <input type="text" class="form-control" name="standard_deduction" value="50000">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enableTaxProof" checked>
                                                <label class="form-check-label" for="enableTaxProof">Enable Tax Proof Submission</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enableTaxCalc" checked>
                                                <label class="form-check-label" for="enableTaxCalc">Enable Automatic Tax Calculation</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Save Tax Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                <h4><i class="fas fa-file-signature me-2"></i>Investment Declaration Components</h4>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addInvestmentComponentModal">
                                    <i class="fas fa-plus me-1"></i> Add Component
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Component</th>
                                                <th>Section</th>
                                                <th>Max Limit</th>
                                                <th>Require Proof</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>House Rent Allowance</td>
                                                <td>10(13A)</td>
                                                <td>₹60,000</td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-secondary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leave Travel Allowance</td>
                                                <td>10(5)</td>
                                                <td>No Limit</td>
                                                <td><i class="fas fa-check text-success"></i></td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-secondary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PF Settings Tab -->
                    <div class="tab-content" id="pf-settings" style="display: none;">
                        <div class="card">
                            <div class="card-header">
                                <h4><i class="fas fa-piggy-bank me-2"></i>Provident Fund Settings</h4>
                            </div>
                            <div class="card-body">
                                <form id="pfSettingsForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">PF Applicable To</label>
                                            <select class="form-select" name="pf_applicable">
                                                <option>All Employees</option>
                                                <option>Only Office Staff</option>
                                                <option>Selected Employees</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">PF Calculation Method</label>
                                            <select class="form-select" name="pf_calculation">
                                                <option>On Basic + DA</option>
                                                <option>On Gross Salary</option>
                                                <option>On Custom Amount</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Employee PF Percentage</label>
                                            <input type="text" class="form-control" name="employee_pf" value="12%">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Employer PF Percentage</label>
                                            <input type="text" class="form-control" name="employer_pf" value="12%">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">PF Number</label>
                                            <input type="text" class="form-control" name="pf_number" value="DL/12345/1234567">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Establishment Code</label>
                                            <input type="text" class="form-control" name="establishment_code" value="DL1234567890">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">PF Admin Charges (%)</label>
                                            <input type="text" class="form-control" name="pf_admin" value="0.5%">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">EDLI Charges (%)</label>
                                            <input type="text" class="form-control" name="edli_charges" value="0.5%">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enablePF" checked>
                                                <label class="form-check-label" for="enablePF">Enable PF Deduction</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enablePension" checked>
                                                <label class="form-check-label" for="enablePension">Enable Pension Scheme</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Save PF Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ESI Settings Tab -->
                    <div class="tab-content" id="esi-settings" style="display: none;">
                        <div class="card">
                            <div class="card-header">
                                <h4><i class="fas fa-hospital me-2"></i>ESI Settings</h4>
                            </div>
                            <div class="card-body">
                                <form id="esiSettingsForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">ESI Applicable To</label>
                                            <select class="form-select" name="esi_applicable">
                                                <option>Employees earning ≤ ₹21,000</option>
                                                <option>All Employees</option>
                                                <option>Selected Employees</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">ESI Calculation Method</label>
                                            <select class="form-select" name="esi_calculation">
                                                <option>On Gross Salary</option>
                                                <option>On Basic Salary</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Employee ESI Percentage</label>
                                            <input type="text" class="form-control" name="employee_esi" value="0.75%">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Employer ESI Percentage</label>
                                            <input type="text" class="form-control" name="employer_esi" value="3.25%">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">ESI Number</label>
                                            <input type="text" class="form-control" name="esi_number" value="1234567890">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Dispensary Location</label>
                                            <input type="text" class="form-control" name="dispensary" value="New Delhi">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enableESI" checked>
                                                <label class="form-check-label" for="enableESI">Enable ESI Deduction</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Save ESI Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Settings Tab -->
                    <div class="tab-content" id="payment-settings" style="display: none;">
                        <div class="card">
                            <div class="card-header">
                                <h4><i class="fas fa-credit-card me-2"></i>Payment Settings</h4>
                            </div>
                            <div class="card-body">
                                <form id="paymentSettingsForm">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Default Payment Method</label>
                                            <select class="form-select" name="default_payment">
                                                <option>Bank Transfer</option>
                                                <option>Cash</option>
                                                <option>Cheque</option>
                                                <option>UPI</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Payment Processing Day</label>
                                            <select class="form-select" name="payment_day">
                                                <option>1st of Month</option>
                                                <option>5th of Month</option>
                                                <option>7th of Month</option>
                                                <option>Last Working Day</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Bank Name</label>
                                            <input type="text" class="form-control" name="bank_name" value="State Bank of India">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Account Number</label>
                                            <input type="text" class="form-control" name="account_number" value="1234567890">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">IFSC Code</label>
                                            <input type="text" class="form-control" name="ifsc_code" value="SBIN0001234">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Account Type</label>
                                            <select class="form-select" name="account_type">
                                                <option>Current</option>
                                                <option>Savings</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enableAutoPay" checked>
                                                <label class="form-check-label" for="enableAutoPay">Enable Auto Pay</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="enablePayslip" checked>
                                                <label class="form-check-label" for="enablePayslip">Enable Payslip Email</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Save Payment Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Component Modal -->
    <div class="modal fade" id="addComponentModal" tabindex="-1" aria-labelledby="addComponentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addComponentModalLabel">Add Salary Component</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addComponentForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Component Name</label>
                            <input type="text" class="form-control" name="component_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Component Type</label>
                            <select class="form-select" name="component_type" required>
                                <option value="">Select Type</option>
                                <option value="earning">Earning</option>
                                <option value="deduction">Deduction</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Taxable</label>
                            <select class="form-select" name="taxable" required>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="partial">Partially</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pfApplicable" name="pf_applicable">
                                    <label class="form-check-label" for="pfApplicable">PF Applicable</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="esiApplicable" name="esi_applicable">
                                    <label class="form-check-label" for="esiApplicable">ESI Applicable</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Default Value</label>
                            <input type="text" class="form-control" name="default_value" placeholder="E.g. 50% of CTC or ₹5000">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Component</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Component Modal -->
    <div class="modal fade" id="editComponentModal" tabindex="-1" aria-labelledby="editComponentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editComponentModalLabel">Edit Salary Component</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editComponentForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Component Name</label>
                            <input type="text" class="form-control" name="component_name" value="Basic Salary" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Component Type</label>
                            <select class="form-select" name="component_type" required>
                                <option value="earning" selected>Earning</option>
                                <option value="deduction">Deduction</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Taxable</label>
                            <select class="form-select" name="taxable" required>
                                <option value="yes" selected>Yes</option>
                                <option value="no">No</option>
                                <option value="partial">Partially</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="editPfApplicable" name="pf_applicable" checked>
                                    <label class="form-check-label" for="editPfApplicable">PF Applicable</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="editEsiApplicable" name="esi_applicable" checked>
                                    <label class="form-check-label" for="editEsiApplicable">ESI Applicable</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Default Value</label>
                            <input type="text" class="form-control" name="default_value" value="50% of CTC">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Component</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Investment Component Modal -->
    <div class="modal fade" id="addInvestmentComponentModal" tabindex="-1" aria-labelledby="addInvestmentComponentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addInvestmentComponentModalLabel">Add Investment Component</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addInvestmentComponentForm">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Component Name</label>
                            <input type="text" class="form-control" name="component_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Section</label>
                            <input type="text" class="form-control" name="section" placeholder="E.g. 10(13A)" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Max Limit</label>
                            <input type="text" class="form-control" name="max_limit" placeholder="E.g. ₹60,000 or No Limit">
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="requireProof" name="require_proof" checked>
                                <label class="form-check-label" for="requireProof">Require Proof</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Component</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>

<script>
    // Tab functionality
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Remove active class from all tabs
            this.closest('.tabs').querySelectorAll('.tab').forEach(t => {
                t.classList.remove('active');
            });
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.style.display = 'none';
            });
            
            // Show selected tab content
            document.getElementById(tabId).style.display = 'block';
        });
    });

    // Form submissions
    document.getElementById('taxSettingsForm').addEventListener('submit', function(e) {
        e.preventDefault();
        saveSettings('tax');
    });

    document.getElementById('pfSettingsForm').addEventListener('submit', function(e) {
        e.preventDefault();
        saveSettings('pf');
    });

    document.getElementById('esiSettingsForm').addEventListener('submit', function(e) {
        e.preventDefault();
        saveSettings('esi');
    });

    document.getElementById('paymentSettingsForm').addEventListener('submit', function(e) {
        e.preventDefault();
        saveSettings('payment');
    });

    document.getElementById('addComponentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        addComponent();
    });

    document.getElementById('editComponentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        updateComponent();
    });

    document.getElementById('addInvestmentComponentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        addInvestmentComponent();
    });

    function saveSettings(type) {
        const formData = new FormData(document.getElementById(`${type}SettingsForm`));
        
        // Show loading state
        const submitBtn = document.querySelector(`#${type}SettingsForm [type="submit"]`);
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...';
        
        // AJAX call to save settings
        fetch(`/api/payroll-settings/${type}`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('success', 'Settings saved successfully');
            } else {
                showToast('error', data.message || 'Failed to save settings');
            }
        })
        .catch(error => {
            showToast('error', 'An error occurred while saving settings');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Save Settings';
        });
    }

    function addComponent() {
        const formData = new FormData(document.getElementById('addComponentForm'));
        
        // Show loading state
        const submitBtn = document.querySelector('#addComponentForm [type="submit"]');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...';
        
        // AJAX call to add component
        fetch('/api/payroll-components', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('success', 'Component added successfully');
                $('#addComponentModal').modal('hide');
                // Refresh the components table
                // You would typically reload this section via AJAX
                location.reload();
            } else {
                showToast('error', data.message || 'Failed to add component');
            }
        })
        .catch(error => {
            showToast('error', 'An error occurred while adding component');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Save Component';
        });
    }

    function updateComponent() {
        const formData = new FormData(document.getElementById('editComponentForm'));
        
        // Show loading state
        const submitBtn = document.querySelector('#editComponentForm [type="submit"]');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Updating...';
        
        // AJAX call to update component
        fetch('/api/payroll-components/1', { // Replace 1 with actual component ID
            method: 'PUT',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('success', 'Component updated successfully');
                $('#editComponentModal').modal('hide');
                // Refresh the components table
                // You would typically reload this section via AJAX
                location.reload();
            } else {
                showToast('error', data.message || 'Failed to update component');
            }
        })
        .catch(error => {
            showToast('error', 'An error occurred while updating component');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Update Component';
        });
    }

    function addInvestmentComponent() {
        const formData = new FormData(document.getElementById('addInvestmentComponentForm'));
        
        // Show loading state
        const submitBtn = document.querySelector('#addInvestmentComponentForm [type="submit"]');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Saving...';
        
        // AJAX call to add investment component
        fetch('/api/investment-components', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showToast('success', 'Investment component added successfully');
                $('#addInvestmentComponentModal').modal('hide');
                // Refresh the components table
                // You would typically reload this section via AJAX
                location.reload();
            } else {
                showToast('error', data.message || 'Failed to add component');
            }
        })
        .catch(error => {
            showToast('error', 'An error occurred while adding component');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Add Component';
        });
    }

    function showToast(type, message) {
        // You would typically use a toast library or your own implementation
        // This is a simplified version
        const toast = document.createElement('div');
        toast.className = `toast show align-items-center text-white bg-${type}`;
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        `;
        document.body.appendChild(toast);
        
        // Remove toast after 5 seconds
        setTimeout(() => {
            toast.remove();
        }, 5000);
    }
</script>