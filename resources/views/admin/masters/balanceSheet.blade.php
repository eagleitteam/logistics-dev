<x-admin.layout>
    <x-slot name="title">Balance Sheet</x-slot>
    <x-slot name="heading">Balance Sheet</x-slot>

    <style>
        .statement-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
            padding: 25px;
            font-family: 'Segoe UI', sans-serif;
        }
        .balance-sheet-table {
            width: 100%;
            border-collapse: collapse;
        }
        .balance-sheet-table th,
        .balance-sheet-table td {
            padding: 10px;
            border: 1px solid #ccc;
            vertical-align: top;
        }
        .balance-sheet-table th {
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
    </style>

    <div class="container-fluid">
        <div class="statement-container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <h4 class="mb-0">Balance Sheet</h4>
                <div class="form-inline">
                    <button class="btn btn-sm btn-outline-primary" id="expandAllBtn">Expand All</button>
                    <button class="btn btn-sm btn-outline-secondary" id="collapseAllBtn">Collapse All</button>
                    <button class="btn btn-sm btn-primary" onclick="window.print()">Print</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered balance-sheet-table" id="bsTable">
                    <thead>
                        <tr>
                            <th>Assets</th>
                            <th>Amount (₹)</th>
                            <th>Liabilities & Equity</th>
                            <th>Amount (₹)</th>
                        </tr>
                    </thead>
                    <tbody id="bsTableBody"></tbody>
                    <tfoot>
                        <tr class="fw-bold">
                            <td>Total Assets</td>
                            <td id="totalAssets">₹0.00</td>
                            <td>Total Liabilities & Equity</td>
                            <td id="totalLiabilities">₹0.00</td>
                        </tr>
                        <tr class="fw-bold">
                            <td colspan="3" class="text-end">Balance Difference</td>
                            <td id="balanceDifference">₹0.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    
</x-admin.layout>

<script>
        const bsData = {
            assets: [
                {
                    group: "Fixed Assets",
                    ledgers: [
                        { name: "Land & Building", amount: 1500000 },
                        { name: "Machinery", amount: 800000 },
                        { name: "Furniture & Fixtures", amount: 250000 }
                    ]
                },
                {
                    group: "Current Assets",
                    ledgers: [
                        { name: "Cash in Hand", amount: 100000 },
                        { name: "Bank Balance", amount: 200000 },
                        { name: "Accounts Receivable", amount: 350000 },
                        { name: "Stock in Trade", amount: 500000 }
                    ]
                },
                {
                    group: "Loans & Advances",
                    ledgers: [
                        { name: "Advance to Suppliers", amount: 150000 },
                        { name: "Prepaid Expenses", amount: 50000 }
                    ]
                }
            ],
            liabilities: [
                {
                    group: "Current Liabilities",
                    ledgers: [
                        { name: "Accounts Payable", amount: 300000 },
                        { name: "Outstanding Expenses", amount: 125000 },
                        { name: "Short Term Loan", amount: 175000 }
                    ]
                },
                {
                    group: "Long Term Liabilities",
                    ledgers: [
                        { name: "Secured Loan", amount: 400000 },
                        { name: "Debentures", amount: 200000 }
                    ]
                },
                {
                    group: "Capital & Reserves",
                    ledgers: [
                        { name: "Share Capital", amount: 1000000 },
                        { name: "Reserves & Surplus", amount: 1100000 }
                    ]
                }
            ]
        };

        const INR = amt => `₹${amt.toLocaleString('en-IN', { minimumFractionDigits: 2 })}`;

        function renderBalanceSheet() {
            const tbody = document.getElementById('bsTableBody');
            tbody.innerHTML = '';

            const maxGroups = Math.max(bsData.assets.length, bsData.liabilities.length);
            let totalAssets = 0;
            let totalLiabilities = 0;

            for (let i = 0; i < maxGroups; i++) {
                const assetGroup = bsData.assets[i];
                const liabilityGroup = bsData.liabilities[i];
                const assetId = assetGroup ? `asset-${i}` : '';
                const liabilityId = liabilityGroup ? `liab-${i}` : '';

                const assetTotal = assetGroup?.ledgers.reduce((sum, l) => sum + l.amount, 0) || 0;
                const liabilityTotal = liabilityGroup?.ledgers.reduce((sum, l) => sum + l.amount, 0) || 0;
                totalAssets += assetTotal;
                totalLiabilities += liabilityTotal;

                tbody.innerHTML += `
                    <tr>
                        <td class="account-group" onclick="toggleGroup('${assetId}')">
                            ${assetGroup ? `<i class='fas fa-chevron-right toggle-icon'></i> ${assetGroup.group}` : ''}
                        </td>
                        <td>${assetGroup ? INR(assetTotal) : ''}</td>
                        <td class="account-group" onclick="toggleGroup('${liabilityId}')">
                            ${liabilityGroup ? `<i class='fas fa-chevron-right toggle-icon'></i> ${liabilityGroup.group}` : ''}
                        </td>
                        <td>${liabilityGroup ? INR(liabilityTotal) : ''}</td>
                    </tr>
                `;

                const maxLedgers = Math.max(
                    assetGroup?.ledgers.length || 0,
                    liabilityGroup?.ledgers.length || 0
                );

                for (let j = 0; j < maxLedgers; j++) {
                    const a = assetGroup?.ledgers[j];
                    const l = liabilityGroup?.ledgers[j];

                    tbody.innerHTML += `
                        <tr class="ledger-item ${assetId} ${liabilityId}">
                            <td>${a?.name || ''}</td>
                            <td>${a ? INR(a.amount) : ''}</td>
                            <td>${l?.name || ''}</td>
                            <td>${l ? INR(l.amount) : ''}</td>
                        </tr>
                    `;
                }
            }

            document.getElementById('totalAssets').innerText = INR(totalAssets);
            document.getElementById('totalLiabilities').innerText = INR(totalLiabilities);

            const diff = totalAssets - totalLiabilities;
            const diffEl = document.getElementById('balanceDifference');
            diffEl.innerText = INR(Math.abs(diff));
            diffEl.className = diff === 0 ? 'positive' : 'negative';
        }

        function toggleGroup(cls) {
            const rows = document.querySelectorAll(`.${cls}`);
            let isVisible = rows[0]?.style.display === 'table-row';
            rows.forEach(row => row.style.display = isVisible ? 'none' : 'table-row');

            const icon = event.currentTarget.querySelector('i');
            icon.classList.toggle('fa-chevron-right', isVisible);
            icon.classList.toggle('fa-chevron-down', !isVisible);
        }

        document.getElementById('expandAllBtn').onclick = () => {
            document.querySelectorAll('.ledger-item').forEach(r => r.style.display = 'table-row');
            document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('fa-chevron-right', 'fa-chevron-down'));
        };

        document.getElementById('collapseAllBtn').onclick = () => {
            document.querySelectorAll('.ledger-item').forEach(r => r.style.display = 'none');
            document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('fa-chevron-down', 'fa-chevron-right'));
        };

        renderBalanceSheet();
    </script>