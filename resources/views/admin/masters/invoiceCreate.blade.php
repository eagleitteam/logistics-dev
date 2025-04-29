<x-admin.layout>
    <x-slot name="title">Invoice Create</x-slot>
    <x-slot name="heading">Invoice Create</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tax Invoice</title>
    <style>
        /* Base Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 12px;
            background-color: #f5f5f5;
        }

        /* Invoice Container */
        .invoice-container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            border: 1px solid #000;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        /* Header Styles */
        .header {
            text-align: center;
            padding: 5px;
            border-bottom: 1px solid #000;
        }
        .company-name {
            font-size: 18px;
            font-weight: bold;
        }
        .invoice-title {
            font-size: 14px;
            font-weight: bold;
        }

        /* Form Sections */
        .invoice-details, .address-section, .gstin-section {
            display: flex;
            flex-wrap: wrap;
            border-bottom: 1px solid #000;
        }

        .detail-column, .address-column, .gstin-column {
            flex: 1;
            min-width: 300px;
            padding: 5px;
            box-sizing: border-box;
        }

        .detail-row {
            display: flex;
            margin-bottom: 3px;
        }

        .detail-label, .address-label, .bank-label {
            font-weight: bold;
        }
        .detail-label { min-width: 120px; }
        .bank-label { min-width: 80px; }

        /* Items Table */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 1px solid #000;
        }

        .items-table th, .items-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }

        .items-table th {
            font-weight: bold;
            background-color: #f0f0f0;
        }

        .items-table input, .items-table select {
            width: 100%;
            border: none;
            padding: 2px;
            box-sizing: border-box;
            background-color: transparent;
        }

        .items-table input:focus, .items-table select:focus {
            outline: 1px solid #4CAF50;
            background-color: #fff;
        }

        /* Totals and Amount */
        .total-row {
            display: flex;
            justify-content: flex-end;
            border-bottom: 1px solid #000;
            padding: 5px;
        }

        .total-label {
            font-weight: bold;
            margin-right: 10px;
        }

        .amount-in-words {
            padding: 5px;
            border-bottom: 1px solid #000;
            font-style: italic;
        }

        /* Tax Table */
        .tax-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .tax-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        /* Terms and Notes */
        .terms {
            padding: 5px;
            border-bottom: 1px solid #000;
        }

        .note {
            padding: 5px;
            border-bottom: 1px solid #000;
            font-style: italic;
            white-space: pre-line;
        }

        /* Bank Details */
        .bank-details {
            display: flex;
            flex-wrap: wrap;
        }

        .bank-row {
            display: flex;
            width: 100%;
            margin-bottom: 3px;
        }

        /* Form Controls */
        .form-control {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
            box-sizing: border-box;
            border: 1px solid #ddd;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 50px;
        }

        /* Buttons */
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin: 0 5px;
        }

        .btn-add { background-color: #4CAF50; color: white; }
        .btn-remove { background-color: #f44336; color: white; }
        .btn-save { background-color: #2196F3; color: white; }
        .btn-reset { background-color: #ff9800; color: white; }
        .btn-preview { background-color: #9c27b0; color: white; }
        .btn-print { background-color: #607d8b; color: white; }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 2% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        .preview-actions {
            text-align: center;
            margin-top: 20px;
        }

        /* Print Styles */
        @media print {
            body * {
                visibility: hidden;
            }
            .printable, .printable * {
                visibility: visible;
            }
            .printable {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .no-print {
                display: none !important;
            }
            .items-table td, .items-table th {
                padding: 3px;
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="header">
            <div class="company-name">
                <input type="text" class="form-control" id="companyName" value="ADINATH LOGISTICS">
            </div>
            <div class="invoice-title">TAX INVOICE</div>
        </div>

        <div class="invoice-details">
            <div class="detail-column">
                <div class="detail-row">
                    <div class="detail-label">Tax Invoice No:</div>
                    <div><input type="text" class="form-control" id="invoiceNo" value="AL/NGB/ADH/036"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Invoice Date:</div>
                    <div><input type="date" class="form-control" id="invoiceDate" value="2024-12-27"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">RO/PO Number</div>
                    <div><input type="text" class="form-control" id="poNumber"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">SAC NO.</div>
                    <div><input type="text" class="form-control" id="sacNo" value="996511"></div>
                </div>
            </div>
            <div class="detail-column">
                <div class="detail-row">
                    <div class="detail-label">Credit Terms:</div>
                    <div><input type="text" class="form-control" id="creditTerms" value="15 Days"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Nature of Transaction:</div>
                    <div>
                        <select class="form-control" id="transactionNature">
                            <option value="Intra State" selected>Intra State</option>
                            <option value="Inter State">Inter State</option>
                        </select>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Nature of Suppy:</div>
                    <div>
                        <select class="form-control" id="supplyNature">
                            <option value="Services" selected>Services</option>
                            <option value="Goods">Goods</option>
                        </select>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Invoice Period</div>
                    <div><input type="text" class="form-control" id="invoicePeriod" value="Dec-24"></div>
                </div>
            </div>
        </div>

        <div class="address-section">
            <div class="address-column">
                <div class="address-label">Billed From:</div>
                <div><input type="text" class="form-control" id="billedFrom" value="ADINATH LOGISTICS"></div>
                <div><textarea class="form-control" id="billedFromAddress">GROUND FLOOR,1035,ANANDNAGAR,CHARNIPADA ROAD,RAHNAL,RAHNAL,BHIWANDI,THANE,MAHARASHTRA 421302</textarea></div>
            </div>
            <div class="address-column">
                <div class="address-label">Billed To:</div>
                <div><input type="text" class="form-control" id="billedTo" value="Klimapharm Technologies Pvt Ltd"></div>
                <div><textarea class="form-control" id="billedToAddress">B/204,Athene, Lodha Paradise, Majiwada, Opp. Lodha World school, Thane(w)- 400601.
Thane- Maharashtra</textarea></div>
            </div>
        </div>

        <div class="gstin-section">
            <div class="gstin-column">
                <div><input type="text" class="form-control" id="fromGstin" value="GSTIN: 27CYFPK8134G1ZA TAX WILL PAY BY COMPANY"></div>
                <div><input type="text" class="form-control" id="fromPan" value="PAN : CYFPK8134G"></div>
            </div>
            <div class="gstin-column">
                <div><input type="text" class="form-control" id="toGstin" value="GSTIN: 27AAGCK9452K1ZZ"></div>
            </div>
        </div>

        <table class="items-table" id="invoiceItems">
            <thead>
                <tr>
                    <th>SR NO</th>
                    <th>DATE</th>
                    <th>Vehicle No.</th>
                    <th>ORIGIN</th>
                    <th>DESTINATION</th>
                    <th>Types</th>
                    <th>Regular/Adhoc</th>
                    <th>RATE</th>
                    <th>Toll Amount</th>
                    <th>EXTRA KMS</th>
                    <th>DETENTIONS</th>
                    <th>AMOUNT</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Rows will be added dynamically -->
            </tbody>
        </table>

        <div class="action-buttons">
            <button class="btn btn-add" id="addRowBtn">Add Row</button>
        </div>

        <div class="total-row">
            <div class="total-label">Total :-</div>
            <div id="invoiceTotal">0</div>
        </div>

        <div class="amount-in-words">
            Inv Amt in Word :- <span id="amountInWords">Rupees Zero Only</span>
        </div>

        <table class="tax-table">
            <tr>
                <td rowspan="2"></td>
                <td rowspan="2"></td>
                <td rowspan="2"></td>
                <td>IGST %</td>
                <td>IGST Value</td>
                <td>CGST %</td>
                <td>CGST Value</td>
                <td>SGST %</td>
                <td>SGST Value</td>
                <td rowspan="2"></td>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" id="igstPercent"></td>
                <td><input type="text" class="form-control" id="igstValue" value="-"></td>
                <td><input type="text" class="form-control" id="cgstPercent"></td>
                <td><input type="text" class="form-control" id="cgstValue"></td>
                <td><input type="text" class="form-control" id="sgstPercent"></td>
                <td><input type="text" class="form-control" id="sgstValue"></td>
            </tr>
        </table>

        <div class="terms">
            <input type="text" class="form-control" id="terms" value="Terms & Condition: As per Agreement">
        </div>

        <div class="note">
            <textarea class="form-control" id="note">Note : GOODS AND SERVICE TAX IN RESPECT OF TRANSPORT
CHARGES IS TO BE PAID BY THE SERVICE
RECEIVER UNDER THE "REVERSE CHARGE MECHANISM"</textarea>
        </div>

        <div class="bank-details">
            <div class="bank-row">
                <div class="bank-label">A/c NO</div>
                <div><input type="text" class="form-control" id="accountNo" value="2056102000009546"></div>
            </div>
            <div class="bank-row">
                <div class="bank-label">IFSC Code</div>
                <div><input type="text" class="form-control" id="ifscCode" value="IBKL0002056"></div>
            </div>
            <div class="bank-row">
                <div class="bank-label">Bank Name</div>
                <div><input type="text" class="form-control" id="bankName" value="IDBI BANK"></div>
            </div>
            <div class="bank-row">
                <div class="bank-label">Branch</div>
                <div><input type="text" class="form-control" id="branch" value="BHIWANDI , ANJURFATA"></div>
            </div>
        </div>

        <div class="action-buttons">
            <button class="btn btn-reset" id="resetBtn">Reset</button>
            <div>
                <button class="btn btn-preview" id="previewBtn">Preview</button>
                <button class="btn btn-save" id="saveBtn">Save Invoice</button>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="previewModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="printPreview" class="printable"></div>
            <div class="preview-actions no-print">
                <button class="btn btn-print" id="printBtn">Print Invoice</button>
            </div>
        </div>
    </div>


</body>
</html>


</x-admin.layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize with 3 empty rows
        for (let i = 0; i < 3; i++) {
            addRow();
        }

        // Set initial values
        updateSerialNumbers();
        calculateTotal();

        // Add event listeners
        document.getElementById('addRowBtn').addEventListener('click', addRow);
        document.getElementById('resetBtn').addEventListener('click', resetForm);
        document.getElementById('saveBtn').addEventListener('click', saveInvoice);
        document.getElementById('previewBtn').addEventListener('click', showPreview);
        document.getElementById('printBtn').addEventListener('click', printInvoice);
        document.querySelector('.close').addEventListener('click', closeModal);

        // Calculate totals when inputs change
        document.getElementById('invoiceItems').addEventListener('input', function(e) {
            if (e.target.classList.contains('rate') ||
                e.target.classList.contains('toll-amount') ||
                e.target.classList.contains('extra-kms') ||
                e.target.classList.contains('detentions')) {
                const row = e.target.closest('tr');
                calculateRowTotal(row);
                calculateTotal();
            }
        });

        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('previewModal')) {
                closeModal();
            }
        });
    });

    let rowCount = 0;

    function addRow() {
        rowCount++;
        const tbody = document.querySelector('#invoiceItems tbody');
        const row = document.createElement('tr');

        const today = new Date();
        const formattedDate = formatDateForInput(today);

        row.innerHTML = `
            <td class="sr-no">${rowCount}</td>
            <td><input type="date" class="form-control date-input" value="${formattedDate}"></td>
            <td><input type="text" class="form-control vehicle-no"></td>
            <td><input type="text" class="form-control origin" value="BHIWANDI"></td>
            <td><input type="text" class="form-control destination"></td>
            <td>
                <select class="form-control type">
                    <option value="22 Ft">22 Ft</option>
                    <option value="407 Pickup">407 Pickup</option>
                    <option value="Truck">Truck</option>
                    <option value="Container">Container</option>
                </select>
            </td>
            <td>
                <select class="form-control service-type">
                    <option value="Adhoc">Adhoc</option>
                    <option value="Regular">Regular</option>
                </select>
            </td>
            <td><input type="number" class="form-control rate" value="0"></td>
            <td><input type="number" class="form-control toll-amount" value="0"></td>
            <td><input type="number" class="form-control extra-kms" value="0"></td>
            <td><input type="number" class="form-control detentions" value="0"></td>
            <td><input type="number" class="form-control amount-input" readonly></td>
            <td><button class="btn btn-remove remove-row">X</button></td>
        `;

        tbody.appendChild(row);

        // Add remove row event
        row.querySelector('.remove-row').addEventListener('click', function() {
            row.remove();
            updateSerialNumbers();
            calculateTotal();
        });

        // Calculate initial row total
        calculateRowTotal(row);
    }

    function calculateRowTotal(row) {
        const rate = parseFloat(row.querySelector('.rate').value) || 0;
        const tollAmount = parseFloat(row.querySelector('.toll-amount').value) || 0;
        const extraKms = parseFloat(row.querySelector('.extra-kms').value) || 0;
        const detentions = parseFloat(row.querySelector('.detentions').value) || 0;

        const total = rate + tollAmount + extraKms + detentions;
        row.querySelector('.amount-input').value = total.toFixed(2);
    }

    function calculateTotal() {
        const amountInputs = document.querySelectorAll('.amount-input');
        let total = 0;

        amountInputs.forEach(input => {
            total += parseFloat(input.value) || 0;
        });

        document.getElementById('invoiceTotal').textContent = total.toFixed(2);
        document.getElementById('amountInWords').textContent = 'Rupees ' + numberToWords(total) + ' Only';
    }

    function updateSerialNumbers() {
        const srNos = document.querySelectorAll('.sr-no');
        srNos.forEach((srNo, index) => {
            srNo.textContent = index + 1;
        });
    }

    function resetForm() {
        if (confirm('Are you sure you want to reset the form? All data will be lost.')) {
            document.querySelector('#invoiceItems tbody').innerHTML = '';
            rowCount = 0;
            for (let i = 0; i < 3; i++) {
                addRow();
            }
            document.getElementById('invoiceTotal').textContent = '0';
            document.getElementById('amountInWords').textContent = 'Rupees Zero Only';
        }
    }

    function saveInvoice() {
        const invoiceData = collectInvoiceData();
        alert('Invoice saved successfully!');
        console.log('Invoice Data:', invoiceData);
    }

    function showPreview() {
        const previewContent = document.getElementById('printPreview');
        const invoiceData = collectInvoiceData();

        // Generate items HTML
        let itemsHtml = '';
        invoiceData.items.forEach(item => {
            itemsHtml += `
                <tr>
                    <td>${item.srNo}</td>
                    <td>${formatDateForDisplay(item.date)}</td>
                    <td>${item.vehicleNo || '&nbsp;'}</td>
                    <td>${item.origin || '&nbsp;'}</td>
                    <td>${item.destination || '&nbsp;'}</td>
                    <td>${item.type || '&nbsp;'}</td>
                    <td>${item.serviceType || '&nbsp;'}</td>
                    <td>${item.rate || '0'}</td>
                    <td>${item.tollAmount || '0'}</td>
                    <td>${item.extraKms || '0'}</td>
                    <td>${item.detentions || '0'}</td>
                    <td>${item.amount || '0'}</td>
                </tr>
            `;
        });

        // Add empty rows to match original format (total 11 rows)
        const emptyRowsNeeded = 11 - invoiceData.items.length;
        for (let i = 0; i < emptyRowsNeeded; i++) {
            itemsHtml += `
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            `;
        }

        // Generate the preview HTML
        previewContent.innerHTML = `
            <div class="invoice-container">
                <div class="header">
                    <div class="company-name">${invoiceData.companyName}</div>
                    <div class="invoice-title">TAX INVOICE</div>
                </div>

                <div class="invoice-details">
                    <div class="detail-column">
                        <div class="detail-row">
                            <div class="detail-label">Tax Invoice No:</div>
                            <div>${invoiceData.invoiceNo}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Invoice Date:</div>
                            <div>${formatDateForDisplay(invoiceData.invoiceDate)}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">RO/PO Number</div>
                            <div>${invoiceData.poNumber || '&nbsp;'}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">SAC NO.</div>
                            <div>${invoiceData.sacNo}</div>
                        </div>
                    </div>
                    <div class="detail-column">
                        <div class="detail-row">
                            <div class="detail-label">Credit Terms:</div>
                            <div>${invoiceData.creditTerms}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Nature of Transaction:</div>
                            <div>${invoiceData.transactionNature}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Nature of Suppy:</div>
                            <div>${invoiceData.supplyNature}</div>
                        </div>
                        <div class="detail-row">
                            <div class="detail-label">Invoice Period</div>
                            <div>${invoiceData.invoicePeriod}</div>
                        </div>
                    </div>
                </div>

                <div class="address-section">
                    <div class="address-column">
                        <div class="address-label">Billed From:</div>
                        <div>${invoiceData.billedFrom}</div>
                        <div>${invoiceData.billedFromAddress.replace(/\n/g, '<br>')}</div>
                    </div>
                    <div class="address-column">
                        <div class="address-label">Billed To:</div>
                        <div>${invoiceData.billedTo}</div>
                        <div>${invoiceData.billedToAddress.replace(/\n/g, '<br>')}</div>
                    </div>
                </div>

                <div class="gstin-section">
                    <div class="gstin-column">
                        <div>${invoiceData.fromGstin}</div>
                        <div>${invoiceData.fromPan}</div>
                    </div>
                    <div class="gstin-column">
                        <div>${invoiceData.toGstin}</div>
                    </div>
                </div>

                <table class="items-table">
                    <thead>
                        <tr>
                            <th>SR NO</th>
                            <th>DATE</th>
                            <th>Vehicle No.</th>
                            <th>ORIGIN</th>
                            <th>DESTINATION</th>
                            <th>Types</th>
                            <th>Regular/Adhoc</th>
                            <th>RATE</th>
                            <th>Toll Amount</th>
                            <th>EXTRA KMS</th>
                            <th>DETENTIONS</th>
                            <th>AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${itemsHtml}
                    </tbody>
                </table>

                <div class="total-row">
                    <div class="total-label">Total :-</div>
                    <div>${invoiceData.total}</div>
                </div>

                <div class="amount-in-words">
                    Inv Amt in Word :- ${invoiceData.amountInWords}
                </div>

                <table class="tax-table">
                    <tr>
                        <td rowspan="2"></td>
                        <td rowspan="2"></td>
                        <td rowspan="2"></td>
                        <td>IGST %</td>
                        <td>IGST Value</td>
                        <td>CGST %</td>
                        <td>CGST Value</td>
                        <td>SGST %</td>
                        <td>SGST Value</td>
                        <td rowspan="2"></td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td>${invoiceData.igstPercent || '&nbsp;'}</td>
                        <td>${invoiceData.igstValue || '&nbsp;'}</td>
                        <td>${invoiceData.cgstPercent || '&nbsp;'}</td>
                        <td>${invoiceData.cgstValue || '&nbsp;'}</td>
                        <td>${invoiceData.sgstPercent || '&nbsp;'}</td>
                        <td>${invoiceData.sgstValue || '&nbsp;'}</td>
                    </tr>
                </table>

                <div class="terms">
                    ${invoiceData.terms}
                </div>

                <div class="note">
                    ${invoiceData.note.replace(/\n/g, '<br>')}
                </div>

                <div class="bank-details">
                    <div class="bank-row">
                        <div class="bank-label">A/c NO</div>
                        <div>${invoiceData.accountNo}</div>
                    </div>
                    <div class="bank-row">
                        <div class="bank-label">IFSC Code</div>
                        <div>${invoiceData.ifscCode}</div>
                    </div>
                    <div class="bank-row">
                        <div class="bank-label">Bank Name</div>
                        <div>${invoiceData.bankName}</div>
                    </div>
                    <div class="bank-row">
                        <div class="bank-label">Branch</div>
                        <div>${invoiceData.branch}</div>
                    </div>
                </div>
            </div>
        `;

        // Show the modal
        document.getElementById('previewModal').style.display = 'block';
    }

    function printInvoice() {
        window.print();
    }

    function closeModal() {
        document.getElementById('previewModal').style.display = 'none';
    }

    function collectInvoiceData() {
        return {
            companyName: document.getElementById('companyName').value,
            invoiceNo: document.getElementById('invoiceNo').value,
            invoiceDate: document.getElementById('invoiceDate').value,
            poNumber: document.getElementById('poNumber').value,
            sacNo: document.getElementById('sacNo').value,
            creditTerms: document.getElementById('creditTerms').value,
            transactionNature: document.getElementById('transactionNature').value,
            supplyNature: document.getElementById('supplyNature').value,
            invoicePeriod: document.getElementById('invoicePeriod').value,
            billedFrom: document.getElementById('billedFrom').value,
            billedFromAddress: document.getElementById('billedFromAddress').value,
            billedTo: document.getElementById('billedTo').value,
            billedToAddress: document.getElementById('billedToAddress').value,
            fromGstin: document.getElementById('fromGstin').value,
            fromPan: document.getElementById('fromPan').value,
            toGstin: document.getElementById('toGstin').value,
            items: collectItemsData(),
            total: document.getElementById('invoiceTotal').textContent,
            amountInWords: document.getElementById('amountInWords').textContent,
            igstPercent: document.getElementById('igstPercent').value,
            igstValue: document.getElementById('igstValue').value,
            cgstPercent: document.getElementById('cgstPercent').value,
            cgstValue: document.getElementById('cgstValue').value,
            sgstPercent: document.getElementById('sgstPercent').value,
            sgstValue: document.getElementById('sgstValue').value,
            terms: document.getElementById('terms').value,
            note: document.getElementById('note').value,
            accountNo: document.getElementById('accountNo').value,
            ifscCode: document.getElementById('ifscCode').value,
            bankName: document.getElementById('bankName').value,
            branch: document.getElementById('branch').value
        };
    }

    function collectItemsData() {
        const items = [];
        const rows = document.querySelectorAll('#invoiceItems tbody tr');

        rows.forEach(row => {
            items.push({
                srNo: row.querySelector('.sr-no').textContent,
                date: row.querySelector('.date-input').value,
                vehicleNo: row.querySelector('.vehicle-no').value,
                origin: row.querySelector('.origin').value,
                destination: row.querySelector('.destination').value,
                type: row.querySelector('.type').value,
                serviceType: row.querySelector('.service-type').value,
                rate: row.querySelector('.rate').value,
                tollAmount: row.querySelector('.toll-amount').value,
                extraKms: row.querySelector('.extra-kms').value,
                detentions: row.querySelector('.detentions').value,
                amount: row.querySelector('.amount-input').value
            });
        });

        return items;
    }

    function formatDateForInput(date) {
        if (!date) return '';
        const d = new Date(date);
        return d.toISOString().split('T')[0];
    }

    function formatDateForDisplay(dateString) {
        if (!dateString) return '';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN');
    }

    function numberToWords(num) {
        const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine',
                     'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen',
                     'Seventeen', 'Eighteen', 'Nineteen'];
        const tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

        num = parseFloat(num) || 0;
        if (num === 0) return 'Zero';

        let result = '';
        const numStr = Math.floor(num).toString();

        // Handle Crores
        if (numStr.length > 7) {
            const crore = Math.floor(num / 10000000);
            result += numberToWords(crore) + ' Crore ';
            num = num % 10000000;
        }

        // Handle Lakhs
        if (numStr.length > 5) {
            const lakh = Math.floor(num / 100000);
            result += numberToWords(lakh) + ' Lakh ';
            num = num % 100000;
        }

        // Handle Thousands
        if (numStr.length > 3) {
            const thousand = Math.floor(num / 1000);
            result += numberToWords(thousand) + ' Thousand ';
            num = num % 1000;
        }

        // Handle Hundreds
        if (numStr.length > 2) {
            const hundred = Math.floor(num / 100);
            result += ones[hundred] + ' Hundred ';
            num = num % 100;
        }

        // Handle Tens and Ones
        if (num > 0) {
            if (num < 20) {
                result += ones[num];
            } else {
                result += tens[Math.floor(num / 10)];
                if (num % 10 > 0) {
                    result += ' ' + ones[num % 10];
                }
            }
        }

        return result.trim();
    }
</script>
