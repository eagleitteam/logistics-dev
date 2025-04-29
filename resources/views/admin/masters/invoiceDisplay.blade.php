<x-admin.layout>
    <x-slot name="title">Invoice Create</x-slot>
    <x-slot name="heading">Invoice Create</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Invoice - ALNGBADH036</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 12px;
        }
        .invoice-container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            border: 1px solid #000;
        }
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
        .invoice-details {
            display: flex;
            flex-wrap: wrap;
            border-bottom: 1px solid #000;
        }
        .detail-column {
            flex: 1;
            min-width: 300px;
            padding: 5px;
            box-sizing: border-box;
        }
        .detail-row {
            display: flex;
            margin-bottom: 3px;
        }
        .detail-label {
            font-weight: bold;
            min-width: 120px;
        }
        .address-section {
            display: flex;
            border-bottom: 1px solid #000;
        }
        .address-column {
            flex: 1;
            padding: 5px;
            box-sizing: border-box;
        }
        .address-label {
            font-weight: bold;
        }
        .gstin-section {
            display: flex;
            border-bottom: 1px solid #000;
        }
        .gstin-column {
            flex: 1;
            padding: 5px;
            box-sizing: border-box;
        }
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
        }
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
        .terms {
            padding: 5px;
            border-bottom: 1px solid #000;
        }
        .note {
            padding: 5px;
            border-bottom: 1px solid #000;
            font-style: italic;
        }
        .bank-details {
            display: flex;
            flex-wrap: wrap;
            padding: 5px;
        }
        .bank-row {
            display: flex;
            width: 100%;
            margin-bottom: 3px;
        }
        .bank-label {
            font-weight: bold;
            min-width: 80px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="header">
            <div class="company-name">ADINATH LOGISTICS</div>
            <div class="invoice-title">TAX INVOICE</div>
        </div>

        <div class="invoice-details">
            <div class="detail-column">
                <div class="detail-row">
                    <div class="detail-label">Tax Invoice No:</div>
                    <div>AL/NGB/ADH/036</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Invoice Date:</div>
                    <div>2024-12-27 00:00:00</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">RO/PO Number</div>
                    <div></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">SAC NO.</div>
                    <div>996511</div>
                </div>
            </div>
            <div class="detail-column">
                <div class="detail-row">
                    <div class="detail-label">Credit Terms:</div>
                    <div>15 Days</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Nature of Transaction:</div>
                    <div>Intra State</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Nature of Suppy:</div>
                    <div>Services</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Invoice Period</div>
                    <div>Dec-24</div>
                </div>
            </div>
        </div>

        <div class="address-section">
            <div class="address-column">
                <div class="address-label">Billed From:</div>
                <div>ADINATH LOGISTICS</div>
                <div>GROUND FLOOR,1035,ANANDNAGAR,CHARNIPADA ROAD,RAHNAL,RAHNAL,BHIWANDI,THANE,MAHARASHTRA 421302</div>
            </div>
            <div class="address-column">
                <div class="address-label">Billed To:</div>
                <div>Klimapharm Technologies Pvt Ltd</div>
                <div>B/204,Athene, Lodha Paradise, Majiwada, Opp. Lodha World school, Thane(w)- 400601.<br>Thane- Maharashtra</div>
            </div>
        </div>

        <div class="gstin-section">
            <div class="gstin-column">
                <div>GSTIN: 27CYFPK8134G1ZA TAX WILL PAY BY COMPANY</div>
                <div>PAN : CYFPK8134G</div>
            </div>
            <div class="gstin-column">
                <div>GSTIN: 27AAGCK9452K1ZZ</div>
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
                <tr>
                    <td>1</td>
                    <td>2024-12-19 00:00:00</td>
                    <td>MH 04 LQ 4312</td>
                    <td>BHIWANDI</td>
                    <td>MAHAD</td>
                    <td>22 Ft</td>
                    <td>Adhoc</td>
                    <td>17000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>17000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-12-20 00:00:00</td>
                    <td>MH 04 LQ 4313</td>
                    <td>BHIWANDI</td>
                    <td>JNPT</td>
                    <td>22 Ft</td>
                    <td>Adhoc</td>
                    <td>8000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>8000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-12-23 00:00:00</td>
                    <td>MH 04 KU 9970</td>
                    <td>BHIWANDI</td>
                    <td>MAHAD</td>
                    <td>407 Pickup</td>
                    <td>Adhoc</td>
                    <td>9000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>9000</td>
                </tr>
                <!-- Empty rows to match the Excel format -->
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
            </tbody>
        </table>

        <div class="total-row">
            <div class="total-label">Total :-</div>
            <div>34000</div>
        </div>

        <div class="amount-in-words">
            Inv Amt in Word :- Rupees Thirty Four Thousand Only
        </div>

        <table class="tax-table">
            <tr>
                <td>IGST %</td>
                <td>IGST Value</td>
                <td>CGST %</td>
                <td>CGST Value</td>
                <td>SGST %</td>
                <td>SGST Value</td>
            </tr>
            <tr>
                <td></td>
                <td>-</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <div class="terms">
            Terms & Condition: As per Agreement
        </div>

        <div class="note">
            Note : GOODS AND SERVICE TAX IN RESPECT OF TRANSPORT<br>
            CHARGES IS TO BE PAID BY THE SERVICE<br>
            RECEIVER UNDER THE "REVERSE CHARGE MECANISM"
        </div>

        <div class="bank-details">
            <div class="bank-row">
                <div class="bank-label">A/c NO</div>
                <div>205610200000954 6</div>
            </div>
            <div class="bank-row">
                <div class="bank-label">IFSC Code</div>
                <div>IBKL0002056</div>
            </div>
            <div class="bank-row">
                <div class="bank-label">Bank Name</div>
                <div>IDBI BANK</div>
            </div>
            <div class="bank-row">
                <div class="bank-label">Branch</div>
                <div>BHIWANDI , ANJURFATA</div>
            </div>
        </div>
    </div>
</body>
</html>




</x-admin.layout>


{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('vehicle.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('vehicle.index') }}';
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


<!-- Edit -->
<script>
    $("#buttons-datatables").on("click", ".edit-element", function(e) {
        e.preventDefault();
        var model_id = $(this).attr("data-id");
        var url = "{{ route('vehicle.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.ward.id);
                    $("#editForm input[name='name']").val(data.ward.name);
                    $("#editForm input[name='initial']").val(data.ward.initial);
                } else {
                    alert(data.error);
                }
            },
            error: function(error, jqXHR, textStatus, errorThrown) {
                alert("Some thing went wrong");
            },
        });
    });
</script>


<!-- Update -->
<script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            e.preventDefault();
            $("#editSubmit").prop('disabled', true);
            var formdata = new FormData(this);
            formdata.append('_method', 'PUT');
            var model_id = $('#edit_model_id').val();
            var url = "{{ route('vehicle.update', ':model_id') }}";
            //
            $.ajax({
                url: url.replace(':model_id', model_id),
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#editSubmit").prop('disabled', false);
                    if (!data.error2)
                        swal("Successful!", data.success, "success")
                        .then((action) => {
                            window.location.href = '{{ route('vehicle.index') }}';
                        });
                    else
                        swal("Error!", data.error2, "error");
                },
                statusCode: {
                    422: function(responseObject, textStatus, jqXHR) {
                        $("#editSubmit").prop('disabled', false);
                        resetErrors();
                        printErrMsg(responseObject.responseJSON.errors);
                    },
                    500: function(responseObject, textStatus, errorThrown) {
                        $("#editSubmit").prop('disabled', false);
                        swal("Error occured!", "Something went wrong please try again", "error");
                    }
                }
            });

        });
    });
</script>


<!-- Delete -->
<script>
    $("#buttons-datatables").on("click", ".rem-element", function(e) {
        e.preventDefault();
        swal({
                title: "Are you sure to delete this ward?",
                // text: "Make sure if you have filled Vendor details before proceeding further",
                icon: "info",
                buttons: ["Cancel", "Confirm"]
            })
            .then((justTransfer) => {
                if (justTransfer) {
                    var model_id = $(this).attr("data-id");
                    var url = "{{ route('vehicle.destroy', ':model_id') }}";

                    $.ajax({
                        url: url.replace(':model_id', model_id),
                        type: 'POST',
                        data: {
                            '_method': "DELETE",
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(data, textStatus, jqXHR) {
                            if (!data.error && !data.error2) {
                                swal("Success!", data.success, "success")
                                    .then((action) => {
                                        window.location.reload();
                                    });
                            } else {
                                if (data.error) {
                                    swal("Error!", data.error, "error");
                                } else {
                                    swal("Error!", data.error2, "error");
                                }
                            }
                        },
                        error: function(error, jqXHR, textStatus, errorThrown) {
                            swal("Error!", "Something went wrong", "error");
                        },
                    });
                }
            });
    });
</script>
