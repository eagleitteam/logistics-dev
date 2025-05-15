 <x-admin.layout>
    <x-slot name="title">Tally Style Financial Dashboard</x-slot>
    <x-slot name="heading">Tally Style Financial Dashboard</x-slot>

    <div class="container-fluid tally-style">
        <!-- Dashboard Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h4 mb-0"><i class="fas fa-calculator me-2 text-primary"></i> Financial Statements</h1>
            <div class="d-flex gap-2">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="periodDropdown" data-bs-toggle="dropdown">
                        <i class="far fa-calendar-alt me-1"></i> Current Fiscal Year
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Quarter</a></li>
                        <li><a class="dropdown-item active" href="#">This Fiscal Year</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Custom Period</a></li>
                    </ul>
                </div>
                <button class="btn btn-sm btn-primary">
                    <i class="fas fa-print me-1"></i> Print
                </button>
            </div>
        </div>
        
        <!-- Tally-style navigation -->
        <div class="tally-balance-sheet">
  <table class="table table-bordered">
    <thead>
      <tr class="table-primary">
        <th class="text-center">Liabilities</th>
        <th class="text-center">Amount (Tk.)</th>
        <th class="text-center"></th>
        <th class="text-center">Assets</th>
        <th class="text-center">Amount (Tk.)</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      <!-- Capital Account -->
      <tr>
        <td>Capital Account</td>
        <td class="text-end">5,00,000.00</td>
        <td></td>
        <td>Fixed Assets</td>
        <td class="text-end">3,88,000.00</td>
        <td></td>
      </tr>
      <tr>
        <td class="ps-4"></td>
        <td></td>
        <td></td>
        <td class="ps-4">Plant and Machinery</td>
        <td></td>
        <td class="text-end">3,88,000.00</td>
      </tr>
      
      <!-- Loans Liability -->
      <tr>
        <td>Loans Liability</td>
        <td class="text-end border-top">2,80,000.00</td>
        <td></td>
        <td>Investments</td>
        <td class="text-end border-top">1,72,000.00</td>
        <td></td>
      </tr>
      <tr>
        <td class="ps-4">Unsecured loans</td>
        <td></td>
        <td class="text-end">2,00,000.00</td>
        <td class="ps-4">Investments in Shares</td>
        <td></td>
        <td class="text-end">95,400.00</td>
      </tr>
      <tr>
        <td class="ps-4">Secured Loans</td>
        <td></td>
        <td class="text-end">80,000.00</td>
        <td class="ps-4">Investment in XYZ Ltd.</td>
        <td></td>
        <td class="text-end">76,600.00</td>
      </tr>
      
      <!-- Current Liabilities -->
      <tr>
        <td>Current Liabilities</td>
        <td class="text-end border-top">1,90,000.00</td>
        <td></td>
        <td>Loans and Advances</td>
        <td class="text-end border-top">1,55,000.00</td>
        <td></td>
      </tr>
      <tr>
        <td class="ps-4">Duties and Taxes</td>
        <td></td>
        <td class="text-end">72,000.00</td>
        <td class="ps-4">Loans to Subsidiaries</td>
        <td></td>
        <td class="text-end">1,10,000.00</td>
      </tr>
      <tr>
        <td class="ps-4">Sundry Creditors</td>
        <td></td>
        <td class="text-end">1,18,000.00</td>
        <td class="ps-4">Salary Advance</td>
        <td></td>
        <td class="text-end">45,000.00</td>
      </tr>
      
      <!-- Profit & Loss -->
      <tr>
        <td>Profit & Loss Account</td>
        <td class="text-end border-top">1,77,700.00</td>
        <td></td>
        <td>Current Assets</td>
        <td class="text-end border-top">4,33,500.00</td>
        <td></td>
      </tr>
      <tr>
        <td class="ps-4">Opening Balance</td>
        <td></td>
        <td class="text-end">86,500.00</td>
        <td class="ps-4">Closing Stock</td>
        <td></td>
        <td class="text-end">1,48,900.00</td>
      </tr>
      <tr>
        <td class="ps-4">Current Period</td>
        <td></td>
        <td class="text-end">91,200.00</td>
        <td class="ps-4">Sundry Debtors</td>
        <td></td>
        <td class="text-end">1,34,600.00</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="ps-4">Cash in hand</td>
        <td></td>
        <td class="text-end">70,100.00</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="ps-4">Cash at Bank</td>
        <td></td>
        <td class="text-end">79,900.00</td>
      </tr>
      
      <!-- Total -->
      <tr class="table-active">
        <td class="fw-bold">Total</td>
        <td class="text-end fw-bold">11,48,700.00</td>
        <td></td>
        <td class="fw-bold">Total</td>
        <td class="text-end fw-bold">11,48,700.00</td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
    </div>

  
</x-admin.layout>

  <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .tally-style {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .tally-sidebar .list-group-item {
            border-left: 0;
            border-right: 0;
            padding: 0.75rem 1.25rem;
        }
        .tally-sidebar .list-group-item:first-child {
            border-top: 0;
        }
        .tally-sidebar .list-group-item.active {
            background-color: #f8f9fa;
            color: #495057;
            font-weight: 600;
            border-left: 3px solid #0d6efd;
        }
        #tallyBalanceSheet td {
            padding: 0.5rem 1rem;
        }
        #tallyBalanceSheet .table-group-divider td {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
    </style>
    <style>
.tally-balance-sheet {
  font-family: Arial, sans-serif;
  font-size: 14px;
}
.tally-balance-sheet table {
  width: 100%;
  border-collapse: collapse;
}
.tally-balance-sheet th {
  background-color: #f8f9fa;
  font-weight: bold;
}
.tally-balance-sheet td, .tally-balance-sheet th {
  padding: 6px 10px;
  border: 1px solid #dee2e6;
}
.tally-balance-sheet .ps-4 {
  padding-left: 2rem !important;
}
.tally-balance-sheet .border-top {
  border-top: 1px solid #212529 !important;
}
</style>
<style>
.tally-balance-sheet {
  font-family: Arial, sans-serif;
  font-size: 14px;
}
.tally-balance-sheet table {
  width: 100%;
  border-collapse: collapse;
}
.tally-balance-sheet th {
  background-color: #f8f9fa;
  font-weight: bold;
  text-align: center;
}
.tally-balance-sheet td, .tally-balance-sheet th {
  padding: 6px 10px;
  border: 1px solid #dee2e6;
}
.tally-balance-sheet .ps-4 {
  padding-left: 2rem !important;
}
.tally-balance-sheet .border-top {
  border-top: 1px solid #212529 !important;
}
.tally-balance-sheet .text-end {
  text-align: right !important;
}
</style>