<x-admin.layout>
    <x-slot name="title">GST Rates + Code Master</x-slot>
    <x-slot name="heading">GST Rates + Code Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <!-- Add Form -->
    <div class="row" id="addContainer" style="display:none;">
        <div class="col-sm-12">
            <div class="card">
                <form class="theme-form" name="addForm" id="addForm" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-md-4">  
                                <label class="col-form-label" for="code_type" > Select HSN / SAC</label>
                                <select id="ForminputState" class="form-select" name="code_type">
                                    <option selected>Choose...</option>
                                    <option value="HSN">HSN CODE</option>
                                    <option value="SAC">SAC CODE</option>
                                </select>
                                <span class="text-danger invalid code_type_err"></span>
                            </div> 
                            <div class="col-md-4">
                                <label class="col-form-label" for="code">Enter Code <span class="text-danger">*</span></label>
                                <input class="form-control" id="code" name="code" type="text" placeholder="Enter Code">
                                <span class="text-danger invalid code_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="code_description"> Code Description<span class="text-danger">*</span></label>
                                <input class="form-control" id="code_description" name="code_description" type="text" placeholder=" Code Description">
                                <span class="text-danger invalid code_description_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="igst">IGST % <span class="text-danger">*</span></label>
                                <input class="form-control" id="igst" name="igst" type="number" placeholder="Enter IGST %">
                                <span class="text-danger invalid igst_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="cgst">CGST % (Auto Calculated)</label>
                                <input class="form-control" id="cgst" name="cgst" type="number" placeholder="Auto-filled CGST %" readonly>
                                <span class="text-danger invalid cgst_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="sgst">SGST % (Auto Calculated)</label>
                                <input class="form-control" id="sgst" name="sgst" type="number" placeholder="Auto-filled SGST %" readonly>
                                <span class="text-danger invalid igst_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="remark">Remark </label>
                                <input class="form-control" id="remark" name="remark" type="text" placeholder="Remark (IF Any)" >
                                <span class="text-danger invalid remark_err"></span>
                            </div>
                            
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success" id="addSubmit">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- Edit Form --}}
    <div class="row" id="editContainer" style="display:none;">
        <div class="col">
            <form class="form-horizontal form-bordered" method="post" id="editForm">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h4 class="card-title">Edit GST Rate</h4>
                    </header>

                    <div class="card-body py-2">

                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="mb-3 row">
                            <div class="col-md-4">  
                                <label class="col-form-label" for="code_type" > Select HSN / SAC</label>
                                <select id="ForminputState" class="form-select" name="code_type">
                                    <option value="">Choose...</option>
                                    <option value="HSN">HSN CODE</option>
                                    <option value="SAC">SAC CODE</option>
                                </select>
                                <span class="text-danger invalid code_type_err"></span>
                            </div> 
                            <div class="col-md-4">
                                <label class="col-form-label" for="code">Enter Code <span class="text-danger">*</span></label>
                                <input class="form-control" id="code" name="code" type="text" placeholder="Enter Code">
                                <span class="text-danger invalid code_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="code_description"> Code Description<span class="text-danger">*</span></label>
                                <input class="form-control" id="code_description" name="code_description" type="text" placeholder=" Code Description">
                                <span class="text-danger invalid code_description_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="igst">IGST % <span class="text-danger">*</span></label>
                                <input class="form-control" id="igst" name="igst" type="number" placeholder="Enter IGST %">
                                <span class="text-danger invalid igst_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="cgst">CGST % (Auto Calculated)</label>
                                <input class="form-control" id="cgst" name="cgst" type="number" placeholder="Auto-filled CGST %" readonly>
                                <span class="text-danger invalid cgst_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="sgst">SGST % (Auto Calculated)</label>
                                <input class="form-control" id="sgst" name="sgst" type="number" placeholder="Auto-filled SGST %" readonly>
                                <span class="text-danger invalid igst_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="remark">Remark </label>
                                <input class="form-control" id="remark" name="remark" type="text" placeholder="Remark (IF Any)" >
                                <span class="text-danger invalid remark_err"></span>
                            </div>

                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" id="editSubmit">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </section>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @can('Gstrate.create')
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="">
                                    <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                    <button id="btnCancel" class="btn btn-danger" style="display:none;">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Code Type</th>
                                    <th>Code</th>
                                    <th>Code Description</th>
                                    <th>IGST %</th>
                                    <th>CGST %</th>
                                    <th>SGST %</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Gstrates as $Gstrate)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $Gstrate->code_type }}</td>
                                        <td>{{ $Gstrate->code }}</td>
                                        <td>{{ $Gstrate->code_description }}</td>
                                        <td>{{ $Gstrate->igst }}</td>
                                        <td>{{ $Gstrate->cgst }}</td>
                                        <td>{{ $Gstrate->sgst }}</td>
                                        <td>{{ $Gstrate->remark }}</td>
                                        <td>{{ $Gstrate->status }}</td>
                                        <td>
                                            @can('Gstrate.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Gstrate" data-id="{{ $Gstrate->id }}"><i data-feather="edit"></i></button>
                                            @endcan
                                            @can('Gstrate.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Gstrate" data-id="{{ $Gstrate->id }}"><i data-feather="trash-2"></i> </button>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-admin.layout>

<!-- Auto calculate CGST and SGST based on IGST input -->
<script>
    document.getElementById('igst').addEventListener('input', function () {
        const igstValue = parseFloat(this.value);
        const cgstInput = document.getElementById('cgst');
        const sgstInput = document.getElementById('sgst');

        if (!isNaN(igstValue)) {
            const halfValue = (igstValue / 2).toFixed(2);
            cgstInput.value = halfValue;
            sgstInput.value = halfValue;
        } else {
            cgstInput.value = '';
            sgstInput.value = '';
        }
    });
</script>


{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('Gstrate.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('Gstrate.index') }}';
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
        var url = "{{ route('Gstrate.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.Gstrate.id);
                    $("#editForm select[name='code_type']").val(data.Gstrate.code_type);
                    $("#editForm input[name='code']").val(data.Gstrate.code);
                    $("#editForm input[name='code_description']").val(data.Gstrate.code_description);
                    $("#editForm input[name='igst']").val(data.Gstrate.igst);
                    $("#editForm input[name='cgst']").val(data.Gstrate.cgst);
                    $("#editForm input[name='sgst']").val(data.Gstrate.sgst);
                    $("#editForm input[name='status']").val(data.Gstrate.status);
                    $("#editForm input[name='remark']").val(data.Gstrate.remark);

                } else {
                    alert(data.error);
                }
            },
            error: function(error, jqXHR, textStatus, errorThrown) {
                alert("Something went wrong");
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
            var url = "{{ route('Gstrate.update', ':model_id') }}";

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
                            window.location.href = '{{ route('Gstrate.index') }}';
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
                        swal("Error occurred!", "Something went wrong please try again", "error");
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
                title: "Are you sure to delete this GST Rate Entry?",
                icon: "warning",
                buttons: ["Cancel", "Confirm"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    var url = "{{ route('Gstrate.destroy', ':model_id') }}";

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




