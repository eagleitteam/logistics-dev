<x-admin.layout>
    <x-slot name="title">Invoice Create</x-slot>
    <x-slot name="heading">Invoice Create</x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Tax Invoice</h4>
                    </div>
                    <div class="card-body">
                        <!-- Invoice Form -->
                        <div class="invoice-container">
                            <div class="card">
                                <div class="card-header text-center bg-light py-2">
                                    <h5 class="mb-0">
                                        <input type="text" class="form-control form-control-lg text-center border-0 fw-bold" id="companyName" value="ADINATH LOGISTICS">
                                    </h5>
                                    <h6 class="mb-0 fw-bold">TAX INVOICE</h6>
                                </div>
                                <form class="theme-form" id="addForm" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    
                                    <!-- Invoice Details -->
                                    <div class="row mb-3 border-bottom pb-3">
                                        <div class="col-md-6">
                                            <div class="row g-2 mb-2">
                                                <div class="col-4 fw-bold">Tax Invoice No:</div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control form-control-sm" id="invoiceNo" value="AL/NGB/ADH/036">
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-2">
                                                <div class="col-4 fw-bold">Invoice Date:</div>
                                                <div class="col-8">
                                                    <input type="date" class="form-control form-control-sm" id="invoiceDate" name="invoiceDate" >
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-2">
                                                <div class="col-4 fw-bold">RO/PO Number:</div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control form-control-sm" id="poNumber" name="poNumber">
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-4 fw-bold">SAC NO:</div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control form-control-sm" id="sacNo" name="sacNo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row g-2 mb-2">
                                                <div class="col-4 fw-bold">Credit Terms:</div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control form-control-sm" id="creditTerms" name="termdays" value="15 Days">
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-2">
                                                <div class="col-4 fw-bold">Transaction:</div>
                                                <div class="col-8" name="transactionNature">
                                                    <select class="form-select form-select-sm" id="transactionNature">
                                                        <option value="Intra State" selected>Intra State</option>
                                                        <option value="Inter State">Inter State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2 mb-2">
                                                <div class="col-4 fw-bold">Supply Nature:</div>
                                                <div class="col-8">
                                                    <select class="form-select form-select-sm" id="supplyNature" name="supplyNature">
                                                        <option value="Services" selected>Services</option>
                                                        <option value="Goods">Goods</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-4 fw-bold">Invoice Period:</div>
                                                <div class="col-8">
                                                    <input type="text" class="form-control form-control-sm" id="invoicePeriod" name="invoicePeriod">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address Section -->
                                    <div class="row mb-3 border-bottom pb-3">
                                        <div class="col-md-6">
                                            <label class="fw-bold">Billed From:</label>
                                            <input type="text" class="form-control form-control-sm mb-2" id="billedFrom" value="ADINATH LOGISTICS" name="billedFrom">
                                            <textarea class="form-control form-control-sm" id="billedFromAddress" rows="2" name="billedFromAddress">
                                                GROUND FLOOR,1035,ANANDNAGAR,CHARNIPADA ROAD,RAHNAL,RAHNAL,BHIWANDI,THANE,MAHARASHTRA 421302
                                            </textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fw-bold">Billed To:</label>
                                            <select class="form-select form-select-sm mb-2" id="client_id" name="client_id">
                                                <option value="">Select Client</option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                @endforeach
                                            </select>
                                            <textarea class="form-control form-control-sm" id="billedToAddress" rows="2">B/204,Athene, Lodha Paradise, Majiwada, Opp. Lodha World school, Thane(w)- 400601. Thane- Maharashtra</textarea>
                                        </div>
                                    </div>

                                    <!-- GSTIN Section -->
                                    <div class="row mb-3 border-bottom pb-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control form-control-sm mb-1" id="fromGstin" value="GSTIN: 27CYFPK8134G1ZA TAX WILL PAY BY COMPANY"name="fromGstin">
                                            <input type="text" class="form-control form-control-sm" id="fromPan" value="PAN : CYFPK8134G" name="fromPan">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control form-control-sm" id="toGstin" value="GSTIN: 27AAGCK9452K1ZZ" name="toGstin">
                                        </div>
                                    </div>

                                    <!-- Items Table -->
                                    <div class="table-responsive mb-3">
                                        <table class="table table-bordered table-sm" id="invoiceItems">
                                            <thead class="table-light">
                                                <tr>
                                                    <th width="3%">SR NO</th>
                                                    <th width="8%">DATE</th>
                                                    <th width="10%">Vehicle No.</th>
                                                    <th width="10%">ORIGIN</th>
                                                    <th width="10%">DESTINATION</th>
                                                    <th width="8%">Types</th>
                                                    <th width="10%">Regular/Adhoc</th>
                                                    <th width="7%">RATE</th>
                                                    <th width="7%">Toll Amount</th>
                                                    <th width="7%">EXTRA KMS</th>
                                                    <th width="7%">DETENTIONS</th>
                                                    <th width="7%">AMOUNT</th>
                                                    <th width="6%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Items will be added here dynamically -->
                                                 <input type="hidden" name="invoice_items[]" id="invoice_items">
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Add Items Button -->
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-primary btn-sm" id="addRowBtn">
                                            <i class="fas fa-plus me-1"></i> Add Trip Items
                                        </button>
                                    </div>

                                    <!-- Total Row -->
                                    <div class="row justify-content-end mb-3 border-bottom pb-3">
                                        <div class="col-auto fw-bold" name="total">Total:</div>
                                        <div class="col-auto" id="invoiceTotal">0.00</div>
                                    </div>

                                    <!-- Amount in Words -->
                                    <div class="mb-3 border-bottom pb-3">
                                        <span class="fw-bold" name="amtword">Inv Amt in Word:</span> 
                                        <span id="amountInWords">Rupees Zero Only</span>
                                    </div>

                                    <!-- Tax Table -->
                                    <div class="table-responsive mb-3">
                                        <table class="table table-bordered table-sm">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>IGST %</th>
                                                    <th>IGST Value</th>
                                                    <th>CGST %</th>
                                                    <th>CGST Value</th>
                                                    <th>SGST %</th>
                                                    <th>SGST Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control form-control-sm" id="igstPercent"></td>
                                                    <td><input type="text" class="form-control form-control-sm" id="igstValue" value="-"></td>
                                                    <td><input type="text" class="form-control form-control-sm" id="cgstPercent"></td>
                                                    <td><input type="text" class="form-control form-control-sm" id="cgstValue"></td>
                                                    <td><input type="text" class="form-control form-control-sm" id="sgstPercent"></td>
                                                    <td><input type="text" class="form-control form-control-sm" id="sgstValue"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Terms and Notes -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-sm" id="terms" value="Terms & Condition: As per Agreement">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control form-control-sm" id="note" rows="2">Note : GOODS AND SERVICE TAX IN RESPECT OF TRANSPORT
                                            CHARGES IS TO BE PAID BY THE SERVICE
                                            RECEIVER UNDER THE "REVERSE CHARGE MECHANISM"</textarea>
                                    </div>

                                    <!-- Bank Details -->
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-3">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text fw-bold">A/c NO</span>
                                                <input type="text" class="form-control" id="accountNo" value="2056102000009546">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text fw-bold">IFSC Code</span>
                                                <input type="text" class="form-control" id="ifscCode" value="IBKL0002056">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text fw-bold">Bank Name</span>
                                                <input type="text" class="form-control" id="bankName" value="IDBI BANK">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text fw-bold">Branch</span>
                                                <input type="text" class="form-control" id="branch" value="BHIWANDI , ANJURFATA">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary btn-sm" id="resetBtn">
                                            <i class="fas fa-redo me-1"></i> Reset
                                        </button>
                                        <div>
                                            <button type="button" class="btn btn-info btn-sm me-2" id="previewBtn">
                                                <i class="fas fa-eye me-1"></i> Preview
                                            </button>
                                            <button type="submit" class="btn btn-success btn-sm" id="saveBtn">
                                                <i class="fas fa-save me-1"></i> Save Invoice
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Items Modal -->
    <div class="modal fade" id="addItemsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Items to Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive" style="max-height: 60vh; overflow-y: auto;">
                        <table class="table table-bordered table-sm table-hover" id="itemsSelectionTable">
                            <thead class="table-light sticky-top">
                                <tr>
                                    <th width="3%"><input type="checkbox" id="selectAllCheckbox"></th>
                                    <th width="3%">SR NO</th>
                                    <th width="8%">DATE</th>
                                    <th width="10%">Vehicle No.</th>
                                    <th width="10%">ORIGIN</th>
                                    <th width="10%">DESTINATION</th>
                                    <th width="8%">Types</th>
                                    <th width="10%">Regular/Adhoc</th>
                                    <th width="7%">RATE</th>
                                    <th width="7%">Toll Amount</th>
                                    <th width="7%">EXTRA KMS</th>
                                    <th width="7%">DETENTIONS</th>
                                    <th width="7%">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Items will be loaded here -->

                            </tbody>
                        </table>
                                <!-- <input type="hidden" name="invoice_items[]" id="invoice_items"> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="selectAllBtn">Select All</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary" id="deselectAllBtn">Deselect All</button>
                    <button type="button" class="btn btn-sm btn-success" id="addSelectedBtn">Add Selected</button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Invoice Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="printPreview"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="printBtn">
                        <i class="fas fa-print me-1"></i> Print Invoice
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>

<!-- JavaScript -->
<script>
        $(document).ready(function() {
            // Global variables
            let allClientItems = [];
            let addedItems = [];
            let currentClientId = null;
            
            // Initialize modals
            const addItemsModal = new bootstrap.Modal(document.getElementById('addItemsModal'));
            const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
            
            // Client selection change handler
            $('#client_id').on('change', function() {
                currentClientId = $(this).val();
            });
            
            // Add items button click handler
            $('#addRowBtn').on('click', function() {
                if (!currentClientId) {
                    alert('Please select a client first');
                    return;
                }
                fetchClientTripItems(currentClientId);
            });
            
            // Fetch client trip items
            function fetchClientTripItems(clientId) {
                $.ajax({
                    url: `/get-client-iteamdetails/${clientId}`,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        // Show loading indicator
                        $('#addRowBtn').html('<i class="fas fa-spinner fa-spin me-1"></i> Loading...');
                    },
                    success: function(response) {
                        if (response.status && response.items && response.items.length > 0) {
                            allClientItems = response.items;
                            updateItemsModal();
                            addItemsModal.show();
                        } else {
                            alert('No trip entries found for this client.');
                        }
                    },
                    error: function(xhr) {
                        console.error("Error fetching items:", xhr);
                        alert('Failed to fetch client items.');
                    },
                    complete: function() {
                        $('#addRowBtn').html('<i class="fas fa-plus me-1"></i> Add Trip Items');
                    }
                });
            }
            
            // Update items modal with available items
            function updateItemsModal() {
                alert("1");
                const tbody = $('#itemsSelectionTable tbody');
                tbody.empty();
                
                // Filter out already added items
                const availableItems = allClientItems.filter(item => 
                    !addedItems.some(added => added.id === item.id)
                );
                
                if (availableItems.length === 0) {
                    tbody.append('<tr><td colspan="13" class="text-center">No items available to add</td></tr>');
                    return;
                }
                
                availableItems.forEach((item, index) => {
                  
                    const row = `
                        <tr data-item-id="${item.id}">
                            <td><input type="checkbox" class="item-checkbox"></td>
                            <td>${index + 1}</td>
                            <td>${item.date || ''}</td>
                            <td>${item.vehicle_no || ''}</td>
                            <td>${item.origin || ''}</td>
                            <td>${item.destination || ''}</td>
                            <td>${item.types || ''}</td>
                            <td>${item.trip_type || ''}</td>
                            <td>${formatNumber(item.rate) || '0.00'}</td>
                            <td>${formatNumber(item.toll_amount) || '0.00'}</td>
                            <td>${formatNumber(item.extra_kms) || '0.00'}</td>
                            <td>${formatNumber(item.detention) || '0.00'}</td>
                            <td>${formatNumber(item.amount) || '0.00'}</td>
                        </tr>
                    `;
                    tbody.append(row);
                });
            }
            
            // Add selected items to invoice
            $('#addSelectedBtn').on('click', function() {
                const selectedItems = [];
                
                $('#itemsSelectionTable tbody tr').each(function() {
                    if ($(this).find('.item-checkbox').is(':checked')) {
                        const itemId = $(this).data('item-id');
                        const item = allClientItems.find(i => i.id == itemId);
                        if (item) selectedItems.push(item);
                    }
                });
                
                if (selectedItems.length) {
                    addItemsToInvoice(selectedItems);
                    addItemsModal.hide();
                } else {
                    alert('Please select at least one item');
                }
            });
            
            

            // Add items to invoice table
            function addItemsToInvoice(items) {
                
                const tbody = $('#invoiceItems tbody');
                let grandTotal = 0;
                items.forEach(item => {
                    if (!addedItems.some(added => added.id === item.id)) {
                        addedItems.push(item);

                        // Update the hidden input value
                        $('#invoice_items').val(JSON.stringify(addedItems));

                        let nettotal = 
                        (parseFloat(item.rate) || 0) +
                        (parseFloat(item.toll_amount) || 0) +
                        (parseFloat(item.extra_kms) || 0) +
                        (parseFloat(item.detention) || 0);
                        grandTotal += nettotal;
                        
                     
                        const row = `
                            <tr data-item-id="${item.id}">
                                <td>${addedItems.length}</td>
                                <td>${item.date || ''}</td>
                                <td>${item.vehicle_no || ''}</td>
                                <td>${item.origin || ''}</td>
                                <td>${item.destination || ''}</td>
                                <td>${item.types || ''}</td>
                                <td>${item.trip_type || ''}</td>
                                <td>${formatNumber(item.rate) || '0.00'}</td>
                                <td>${formatNumber(item.toll_amount) || '0.00'}</td>
                                <td>${formatNumber(item.extra_kms) || '0.00'}</td>
                                <td>${formatNumber(item.detention) || '0.00'}</td>
                                <td>${formatNumber(nettotal)}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm remove-item">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                        
                        tbody.append(row);
                    }
                });
                alert(grandTotal);
                $('#invoiceTotal').text(formatNumber(grandTotal.toFixed(2)));
                
                updateInvoiceTotal();
            }
            
            // Remove item from invoice
            $('#invoiceItems').on('click', '.remove-item', function() {
                const row = $(this).closest('tr');
                const itemId = row.data('item-id');
                addedItems = addedItems.filter(item => item.id != itemId);
                row.remove();
                updateRowNumbers();
                updateInvoiceTotal();
            });
            
            // Update row numbers in invoice table
            function updateRowNumbers() {
                $('#invoiceItems tbody tr').each(function(index) {
                    $(this).find('td:first').text(index + 1);
                });
            }
            
            // Update invoice total
            function updateInvoiceTotal() {
                const total = addedItems.reduce((sum, item) => sum + (parseFloat(item.amount) || 0), 0);
                $('#invoiceTotal').text(formatNumber(total.toFixed(2)));
                $('#amountInWords').text('Rupees ' + convertToWords(total) + ' Only');
            }
            
            // Select/Deselect all items
            $('#selectAllCheckbox').on('change', function() {
                $('.item-checkbox').prop('checked', this.checked);
            });
            
            $('#selectAllBtn').on('click', function() {
                $('.item-checkbox').prop('checked', true);
                $('#selectAllCheckbox').prop('checked', true);
            });
            
            $('#deselectAllBtn').on('click', function() {
                $('.item-checkbox').prop('checked', false);
                $('#selectAllCheckbox').prop('checked', false);
            });
            
            // Preview invoice
            $('#previewBtn').on('click', function() {
                if (addedItems.length === 0) {
                    alert('Please add items to the invoice first');
                    return;
                }
                
                const printPreview = $('#printPreview');
                printPreview.html($('.invoice-container').html());
                
                // Hide action buttons in preview
                printPreview.find('#addRowBtn, #resetBtn, #previewBtn, #saveBtn, .remove-item').remove();
                
                previewModal.show();
            });
            
            // Print invoice
            $('#printBtn').on('click', function() {
                const printContent = $('#printPreview').html();
                const originalContent = $('body').html();
                
                $('body').html(printContent);
                window.print();
                $('body').html(originalContent);
            });
            
            // Reset form
            $('#resetBtn').on('click', function() {
                if (confirm('Are you sure you want to reset the form? All data will be lost.')) {
                    $('#invoiceItems tbody').empty();
                    addedItems = [];
                    updateInvoiceTotal();
                }
            });
            
            // Helper functions
            function formatNumber(num) {
                if (!num) return '0.00';
                return parseFloat(num).toLocaleString('en-IN', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }
            
            function convertToWords(num) {
                const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
                const teens = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
                const tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
                
                if (num === 0) return 'Zero';
                
                let words = '';
                let rupees = Math.floor(num);
                const paise = Math.round((num - rupees) * 100);
                
                if (rupees >= 10000000) {
                    const crores = Math.floor(rupees / 10000000);
                    words += convertToWords(crores) + ' Crore ';
                    rupees %= 10000000;
                }
                
                if (rupees >= 100000) {
                    const lakhs = Math.floor(rupees / 100000);
                    words += convertToWords(lakhs) + ' Lakh ';
                    rupees %= 100000;
                }
                
                if (rupees >= 1000) {
                    const thousands = Math.floor(rupees / 1000);
                    words += convertToWords(thousands) + ' Thousand ';
                    rupees %= 1000;
                }
                
                if (rupees >= 100) {
                    const hundreds = Math.floor(rupees / 100);
                    words += ones[hundreds] + ' Hundred ';
                    rupees %= 100;
                }
                
                if (rupees >= 20) {
                    words += tens[Math.floor(rupees / 10)] + ' ';
                    rupees %= 10;
                } else if (rupees >= 10) {
                    words += teens[rupees - 10] + ' ';
                    rupees = 0;
                }
                
                if (rupees > 0) {
                    words += ones[rupees] + ' ';
                }
                
                if (paise > 0) {
                    words += 'and ' + convertToWords(paise) + ' Paise';
                }
                
                return words.trim();
            }
            
            
        });
</script>

{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();


        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('Create-Invoice.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Create-Invoice.index') }}';
                    });
                else
                    swal("Error!", data.error2, "error");
            },
            statusCode: {
                422: function(responseObject, textStatus, jqXHR) {
                    $("#addSubmit").prop('disabled', false);
                    resetErrors();
                    printErrMsg(responseObject.responseJSON.errors);
                },
                500: function(responseObject, textStatus, errorThrown) {
                    $("#addSubmit").prop('disabled', false);
                    swal("Error occured!", "Something went wrong please try again", "error");
                }
            }
        });

    });
</script>