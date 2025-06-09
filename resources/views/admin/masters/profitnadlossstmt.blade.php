<x-admin.layout>
    <x-slot name="title">Profit & Loss Statement</x-slot>
    <x-slot name="heading">Profit & Loss Statement</x-slot>

    <style>
        :root {
            --tally-primary: #2c3e50;
            --tally-secondary: #3498db;
            --tally-green: #27ae60;
            --tally-red: #e74c3c;
            --tally-gray: #ecf0f1;
            --tally-dark-gray: #bdc3c7;
        }

        .statement-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            padding: 25px;
            font-family: 'Segoe UI', sans-serif;
        }

        .debit-credit-table {
            border-collapse: collapse;
            width: 100%;
        }

        .debit-credit-table th,
        .debit-credit-table td {
            padding: 10px;
            border: 1px solid #ccc;
            vertical-align: top;
        }

        .debit-credit-table th {
            background-color: var(--tally-primary);
            color: white;
            text-align: center;
        }

        .account-group {
            font-weight: bold;
            cursor: pointer;
            background: var(--tally-gray);
        }

        .ledger-item {
            display: none;
        }

        .toggle-icon {
            margin-right: 5px;
        }

        .positive { color: var(--tally-green); font-weight: 600; }
        .negative { color: var(--tally-red); font-weight: 600; }

        .form-inline {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        select.form-select {
            padding: 5px 10px;
            border-radius: 4px;
        }

        .inner-amount-header, .inner-amount-cell {
            display: none;
        }

        .show-inner .inner-amount-header, 
        .show-inner .inner-amount-cell {
            display: table-cell;
        }
    </style>

    <div class="container-fluid">
        <div class="statement-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <h4 class="mb-0">Profit & Loss Statement</h4>
                <div class="form-inline">
                    <select class="form-select">
                        <option selected disabled>Select Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                    </select>
                    <button class="btn btn-sm btn-outline-primary" id="expandAllBtn">Expand All</button>
                    <button class="btn btn-sm btn-outline-secondary" id="collapseAllBtn">Collapse All</button>
                    <button class="btn btn-sm btn-primary" onclick="window.print()">Print</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered debit-credit-table" id="plTable">
                    <thead>
                        <tr>
                            <th>Particulars (Debit)</th>
                            <th class="inner-amount-header">Inner Amount (₹)</th>
                            <th>Total Amount (₹)</th>
                            <th>Particulars (Credit)</th>
                            <th class="inner-amount-header">Inner Amount (₹)</th>
                            <th>Total Amount (₹)</th>
                        </tr>
                    </thead>
                    <tbody id="plTableBody"></tbody>
                    <tfoot>
                        <tr class="fw-bold">
                            <td>Total Expenses</td>
                            <td class="inner-amount-header"></td>
                            <td id="totalDebit">₹0.00</td>
                            <td>Total Income</td>
                            <td class="inner-amount-header"></td>
                            <td id="totalCredit">₹0.00</td>
                        </tr>
                        <tr class="fw-bold" id="netProfitRow">
                            <td colspan="5" class="text-end">Net Profit/Loss</td>
                            <td id="netProfit">₹0.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    
</x-admin.layout>

<script>
        const plData = {
            income: [
                {
                    group: "Sales Accounts",
                    ledgers: [
                        { name: "Product Sales (Domestic)", amount: 1850000 },
                        { name: "Product Sales (Export)", amount: 750000 },
                        { name: "Service Income", amount: 320000 }
                    ]
                },
                {
                    group: "Other Income",
                    ledgers: [
                        { name: "Interest Income", amount: 85000 },
                        { name: "Discount Received", amount: 45000 },
                        { name: "Miscellaneous Income", amount: 15000 }
                    ]
                }
            ],
            expenses: [
                {
                    group: "Direct Expenses",
                    ledgers: [
                        { name: "Raw Material Purchases", amount: 1250000 },
                        { name: "Direct Labor", amount: 450000 },
                        { name: "Manufacturing Expenses", amount: 220000 }
                    ]
                },
                {
                    group: "Indirect Expenses",
                    ledgers: [
                        { name: "Salaries & Wages", amount: 550000 },
                        { name: "Rent", amount: 180000 },
                        { name: "Utilities", amount: 75000 },
                        { name: "Marketing & Advertising", amount: 120000 },
                        { name: "Depreciation", amount: 90000 }
                    ]
                },
                {
                    group: "Financial Expenses",
                    ledgers: [
                        { name: "Interest Paid", amount: 65000 },
                        { name: "Bank Charges", amount: 15000 }
                    ]
                }
            ]
        };

        const INR = amt => `₹${amt.toLocaleString('en-IN', { minimumFractionDigits: 2 })}`;

        function renderPL() {
            const tbody = document.getElementById('plTableBody');
            tbody.innerHTML = '';

            const maxGroups = Math.max(plData.expenses.length, plData.income.length);
            let totalExpenses = 0;
            let totalIncome = 0;

            for (let i = 0; i < maxGroups; i++) {
                const expGroup = plData.expenses[i];
                const incGroup = plData.income[i];
                const expId = expGroup ? `exp-${i}` : '';
                const incId = incGroup ? `inc-${i}` : '';

                const expTotal = expGroup?.ledgers.reduce((sum, l) => sum + l.amount, 0) || 0;
                const incTotal = incGroup?.ledgers.reduce((sum, l) => sum + l.amount, 0) || 0;
                totalExpenses += expTotal;
                totalIncome += incTotal;

                tbody.innerHTML += `
                    <tr>
                        <td class="account-group" onclick="toggleGroup('${expId}')">
                            ${expGroup ? `<i class='fas fa-chevron-right toggle-icon'></i> ${expGroup.group}` : ''}
                        </td>
                        <td class="inner-amount-cell"></td>
                        <td>${expGroup ? INR(expTotal) : ''}</td>
                        <td class="account-group" onclick="toggleGroup('${incId}')">
                            ${incGroup ? `<i class='fas fa-chevron-right toggle-icon'></i> ${incGroup.group}` : ''}
                        </td>
                        <td class="inner-amount-cell"></td>
                        <td>${incGroup ? INR(incTotal) : ''}</td>
                    </tr>
                `;

                const maxLedgers = Math.max(
                    expGroup?.ledgers.length || 0,
                    incGroup?.ledgers.length || 0
                );

                for (let j = 0; j < maxLedgers; j++) {
                    const exp = expGroup?.ledgers[j];
                    const inc = incGroup?.ledgers[j];

                    tbody.innerHTML += `
                        <tr class="ledger-item ${expId} ${incId}">
                            <td>${exp?.name || ''}</td>
                            <td class="inner-amount-cell">${exp ? INR(exp.amount) : ''}</td>
                            <td></td>
                            <td>${inc?.name || ''}</td>
                            <td class="inner-amount-cell">${inc ? INR(inc.amount) : ''}</td>
                            <td></td>
                        </tr>
                    `;
                }
            }

            document.getElementById('totalDebit').innerText = INR(totalExpenses);
            document.getElementById('totalCredit').innerText = INR(totalIncome);

            const net = totalIncome - totalExpenses;
            const netEl = document.getElementById('netProfit');
            netEl.innerText = INR(Math.abs(net));
            netEl.className = net >= 0 ? 'positive' : 'negative';
        }

        function toggleGroup(cls) {
            const rows = document.querySelectorAll(`.${cls}`);
            const table = document.getElementById('plTable');

            let isVisible = rows[0]?.style.display === 'table-row';
            rows.forEach(row => row.style.display = isVisible ? 'none' : 'table-row');

            const icon = event.currentTarget.querySelector('i');
            icon.classList.toggle('fa-chevron-right', isVisible);
            icon.classList.toggle('fa-chevron-down', !isVisible);

            const anyVisible = [...document.querySelectorAll('.ledger-item')].some(r => r.style.display === 'table-row');
            table.classList.toggle('show-inner', anyVisible);
        }

        document.getElementById('expandAllBtn').onclick = () => {
            document.querySelectorAll('.ledger-item').forEach(r => r.style.display = 'table-row');
            document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('fa-chevron-right', 'fa-chevron-down'));
            document.getElementById('plTable').classList.add('show-inner');
        };

        document.getElementById('collapseAllBtn').onclick = () => {
            document.querySelectorAll('.ledger-item').forEach(r => r.style.display = 'none');
            document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('fa-chevron-down', 'fa-chevron-right'));
            document.getElementById('plTable').classList.remove('show-inner');
        };

        renderPL();


                function adjustNetProfitColspan() {
                const isExpanded = document.getElementById('plTable').classList.contains('show-inner');
                const netRow = document.getElementById('netProfitRow');

                if (isExpanded) {
                    netRow.children[0].setAttribute('colspan', '5'); // When expanded: 6 cols (Particulars, Inner, Total x 2)
                } else {
                    netRow.children[0].setAttribute('colspan', '3'); // When collapsed: 4 cols (Particulars, Total x 2)
                }
            }

            // Call on expand/collapse
            document.getElementById('expandAllBtn').onclick = () => {
                document.querySelectorAll('.ledger-item').forEach(r => r.style.display = 'table-row');
                document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('fa-chevron-right', 'fa-chevron-down'));
                const table = document.getElementById('plTable');
                table.classList.add('show-inner');
                adjustNetProfitColspan();
            };

            document.getElementById('collapseAllBtn').onclick = () => {
                document.querySelectorAll('.ledger-item').forEach(r => r.style.display = 'none');
                document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('fa-chevron-down', 'fa-chevron-right'));
                const table = document.getElementById('plTable');
                table.classList.remove('show-inner');
                adjustNetProfitColspan();
            };


    </script>