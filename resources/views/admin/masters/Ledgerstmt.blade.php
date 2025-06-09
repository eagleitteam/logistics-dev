<x-admin.layout>
    <x-slot name="title">Ledger Statement</x-slot>
    <x-slot name="heading">Ledger Statement</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

   <style>
        .ledger-header {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }
        .ledger-title {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .ledger-info {
            font-size: 0.9rem;
        }
        .table-responsive {
            border: 1px solid #dee2e6;
            border-radius: 0 0 5px 5px;
        }
        .table thead {
            background-color: #f8f9fa;
            position: sticky;
            top: 0;
        }
        .table th {
            font-weight: 600;
            white-space: nowrap;
        }
        .dr-amount {
            color: #dc3545;
        }
        .cr-amount {
            color: #28a745;
        }
        .balance-positive {
            color: #28a745;
            font-weight: 600;
        }
        .balance-negative {
            color: #dc3545;
            font-weight: 600;
        }
        .expand-btn {
            cursor: pointer;
            color: #2c3e50;
            transition: all 0.3s;
        }
        .expand-btn:hover {
            color: #1abc9c;
            transform: scale(1.2);
        }
        .reference-row {
            background-color: #f8f9fa;
        }
        .search-container {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .filter-badge {
            cursor: pointer;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .print-btn, .export-btn {
            min-width: 100px;
        }
        .summary-card {
            border-left: 4px solid #2c3e50;
        }
        @media print {
            .no-print {
                display: none !important;
            }
            body {
                padding: 0;
                margin: 0;
            }
            .table-responsive {
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row mb-4 no-print">
            <div class="col-12">
                <div class="search-container shadow-sm">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="ledgerType" class="form-label">Ledger Type</label>
                            <select class="form-select" id="ledgerType">
                                <option selected>All Ledgers</option>
                                <option>Vendor Ledger</option>
                                <option>Client Ledger</option>
                                <option>General Ledger</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="dateRange" class="form-label">Date Range</label>
                            <input type="text" class="form-control" id="dateRange" placeholder="Select date range">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="search" class="form-label">Search</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="search" placeholder="Search...">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <span class="badge bg-primary filter-badge">This Month</span>
                                <span class="badge bg-secondary filter-badge">Last 30 Days</span>
                                <span class="badge bg-success filter-badge">This Quarter</span>
                                <span class="badge bg-danger filter-badge">This Financial Year</span>
                                <span class="badge bg-warning text-dark filter-badge">Custom Range</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 no-print">
            <div class="col-md-4 mb-3">
                <div class="card summary-card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Total Debit</h6>
                        <h3 class="card-title dr-amount">₹12,45,670.00</h3>
                        <p class="card-text text-muted small">Across all transactions</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card summary-card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Total Credit</h6>
                        <h3 class="card-title cr-amount">₹10,89,340.00</h3>
                        <p class="card-text text-muted small">Across all transactions</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card summary-card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Current Balance</h6>
                        <h3 class="card-title balance-negative">₹1,56,330.00 Dr</h3>
                        <p class="card-text text-muted small">As of today</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3 no-print">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Vendor Ledger Statement</h4>
                <div>
                    <button class="btn btn-outline-primary print-btn me-2">
                        <i class="fas fa-print me-1"></i> Print
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-success export-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-file-export me-1"></i> Export
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel me-2"></i> Excel</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i> PDF</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv me-2"></i> CSV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="ledger-header mb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ledger-title">ABC Suppliers Pvt. Ltd.</div>
                            <div class="ledger-info">GSTIN: 22AAAAA0000A1Z5</div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="ledger-info">Period: 01 Apr 2023 - 30 Jun 2023</div>
                            <div class="ledger-info">Opening Balance: ₹25,000.00 Dr</div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th width="5%">Sr No</th>
                                <th width="10%">Date</th>
                                <th width="25%">Particulars</th>
                                <th width="15%">Ref No.</th>
                                <th width="15%" class="text-end">Dr Amount</th>
                                <th width="15%" class="text-end">Cr Amount</th>
                                <th width="15%" class="text-end">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref1" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    1
                                </td>
                                <td>01-Apr-2023</td>
                                <td>Opening Balance</td>
                                <td></td>
                                <td class="text-end dr-amount">25,000.00</td>
                                <td class="text-end"></td>
                                <td class="text-end balance-negative">25,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref1">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Opening balance carried forward from previous period.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref2" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    2
                                </td>
                                <td>05-Apr-2023</td>
                                <td>Purchase Invoice #PI-1001</td>
                                <td>PI-1001</td>
                                <td class="text-end dr-amount">1,50,000.00</td>
                                <td class="text-end"></td>
                                <td class="text-end balance-negative">1,75,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref2">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Purchase of raw materials - 100 units @ ₹1,500 per unit<br>
                                        <strong>Document:</strong> <a href="#" class="text-decoration-none">PI-1001.pdf</a><br>
                                        <strong>Due Date:</strong> 20-Apr-2023
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref3" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    3
                                </td>
                                <td>10-Apr-2023</td>
                                <td>Payment via Bank</td>
                                <td>CHQ-456789</td>
                                <td class="text-end"></td>
                                <td class="text-end cr-amount">50,000.00</td>
                                <td class="text-end balance-negative">1,25,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref3">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Payment made via HDFC Bank Cheque #456789<br>
                                        <strong>Document:</strong> <a href="#" class="text-decoration-none">PaymentReceipt_10Apr.pdf</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref4" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    4
                                </td>
                                <td>15-Apr-2023</td>
                                <td>Purchase Invoice #PI-1002</td>
                                <td>PI-1002</td>
                                <td class="text-end dr-amount">75,000.00</td>
                                <td class="text-end"></td>
                                <td class="text-end balance-negative">2,00,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref4">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Purchase of packaging materials - 500 units @ ₹150 per unit<br>
                                        <strong>Document:</strong> <a href="#" class="text-decoration-none">PI-1002.pdf</a><br>
                                        <strong>Due Date:</strong> 30-Apr-2023
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref5" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    5
                                </td>
                                <td>20-Apr-2023</td>
                                <td>Debit Note #DN-001</td>
                                <td>DN-001</td>
                                <td class="text-end"></td>
                                <td class="text-end cr-amount">5,000.00</td>
                                <td class="text-end balance-negative">1,95,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref5">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Quality discount received for early payment<br>
                                        <strong>Document:</strong> <a href="#" class="text-decoration-none">DN-001.pdf</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref6" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    6
                                </td>
                                <td>25-Apr-2023</td>
                                <td>Payment via NEFT</td>
                                <td>NEFT-123456</td>
                                <td class="text-end"></td>
                                <td class="text-end cr-amount">1,00,000.00</td>
                                <td class="text-end balance-negative">95,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref6">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Electronic payment via NEFT<br>
                                        <strong>UTR Number:</strong> HDFC20230425123456<br>
                                        <strong>Document:</strong> <a href="#" class="text-decoration-none">BankStatement_Apr.pdf</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="expand-btn me-2" data-bs-toggle="collapse" href="#ref7" role="button">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    7
                                </td>
                                <td>30-Apr-2023</td>
                                <td>Purchase Invoice #PI-1003</td>
                                <td>PI-1003</td>
                                <td class="text-end dr-amount">1,20,000.00</td>
                                <td class="text-end"></td>
                                <td class="text-end balance-negative">2,15,000.00 Dr</td>
                            </tr>
                            <tr class="reference-row collapse" id="ref7">
                                <td colspan="7">
                                    <div class="p-2">
                                        <strong>Reference Details:</strong> Purchase of electrical components<br>
                                        <strong>Document:</strong> <a href="#" class="text-decoration-none">PI-1003.pdf</a><br>
                                        <strong>Due Date:</strong> 15-May-2023
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="table-active">
                                <td colspan="4" class="text-end"><strong>Closing Balance:</strong></td>
                                <td class="text-end"><strong>3,70,000.00</strong></td>
                                <td class="text-end"><strong>1,55,000.00</strong></td>
                                <td class="text-end balance-negative"><strong>2,15,000.00 Dr</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-3 no-print">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">
                        Showing 1 to 7 of 7 entries
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
 


</x-admin.layout>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Handle print button click
        document.querySelector('.print-btn').addEventListener('click', function() {
            window.print();
        });

        // Handle expand/collapse icons
        document.querySelectorAll('.expand-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('fa-plus-circle')) {
                    icon.classList.remove('fa-plus-circle');
                    icon.classList.add('fa-minus-circle');
                } else {
                    icon.classList.remove('fa-minus-circle');
                    icon.classList.add('fa-plus-circle');
                }
            });
        });

        // Simulate loading data
        document.getElementById('dateRange').addEventListener('focus', function() {
            // In a real app, you would initialize a date range picker here
            this.value = '01-Apr-2023 to 30-Jun-2023';
        });
    </script>
