<x-admin.layout>
    <x-slot name="title"> Client Master</x-slot>
    <x-slot name="heading"> Client Master</x-slot>
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
                                <label class="col-form-label" for="name">Client Company Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter Client Company Name">
                                <span class="text-danger invalid name_err"></span>
                            </div>
                            <!-- <div class="col-md-4">
                                <label class="col-form-label" for="gst_no">GST NO <span class="text-danger">*</span></label>
                                <input class="form-control" id="gst_no" name="gst_no" type="text" placeholder="Enter GST NO">
                                <span class="text-danger invalid gst_no_err"></span>
                            </div> -->
                            <!-- GST Registered Checkbox -->
                            <!-- GST Registered Checkbox Container -->
                                <div class="col-md-4" id="gst_checkbox_container">
                                    <br> 
                                    <label class="col-form-label" for="gst_registered">
                                        <input  type="checkbox" id="gst_registered"> GST Registered
                                    </label>
                                </div>

                                <!-- GST NO Input (initially hidden) -->
                                <div class="col-md-4" id="gst_no_container" style="display: none;">
                                    <label class="col-form-label" for="gst_no">GST NO <span class="text-danger">*</span></label>
                                    <input class="form-control" id="gst_no" name="gst_no" type="text" placeholder="Enter GST NO">
                                    <span class="text-danger invalid gst_no_err"></span>
                                </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="email">Email Address <span class="text-danger">*</span></label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter Email Address">
                                <span class="text-danger invalid email_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="contact_person">Contact Person Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="contact_person" name="contact_person" type="text" placeholder="Enter Contact Person Name">
                                <span class="text-danger invalid contact_person_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="contact_number">Contact Number <span class="text-danger">*</span></label>
                                <input class="form-control" id="contact_number" name="contact_number" type="number" placeholder="Enter Contact Number">
                                <span class="text-danger invalid contact_number_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="alternate_contact_no">Alternet Contact Number <span class="text-danger">*</span></label>
                                <input class="form-control" id="alternate_contact_no" name="alternate_contact_no" type="text" placeholder="Enter Alternet Contact Number">
                                <span class="text-danger invalid alternate_contact_no_err"></span>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label" for="billing_address">Billing Address <span class="text-danger">*</span></label>
                                <input class="form-control" id="billing_address" name="billing_address" type="text" placeholder="Enter Billing Address">
                                <span class="text-danger invalid billing_address_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="city">City <span class="text-danger">*</span></label>
                                <input class="form-control" id="city" name="city" type="text" placeholder="Enter City">
                                <span class="text-danger invalid city_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="pincode">PIN Code <span class="text-danger">*</span></label>
                                <input class="form-control" id="pincode" name="pincode" type="text" placeholder="Enter PIN Code">
                                <span class="text-danger invalid pincode_err"></span>
                            </div>
                            <div class="col-md-4">
                                                    <label class="col-form-label" for="pincode" >State</label>
                                                    <select id="ForminputState" class="form-select" name="state">
                                                         @foreach ($StateNameWithCode as $StateNameWithCode)
                                                                <option value="{{ $StateNameWithCode->id }}">{{ $StateNameWithCode->stateName }}</option>
                                                            @endforeach
                                                    </select>
                                                    <span class="text-danger invalid state_err"></span>

                                                </div>
                        <div class="col-md-4">
                                                    <label class="col-form-label" for="billing_type" >Billing Type</label>
                                                    <select id="ForminputState" class="form-select" name="billing_type">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Immediate</option>
                                                        <option value="2">Month End</option>
                                                        <option value="3">Respestive Period</option>
                                                    </select>
                                                    <span class="text-danger invalid billing_type_err"></span>

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
                        <h4 class="card-title">Edit State Data</h4>
                    </header>

                    <div class="card-body py-2">

                        <input type="hidden" id="edit_model_id" name="edit_model_id" value="">
                        <div class="mb-3 row">
                                                       <div class="col-md-4">
                                <label class="col-form-label" for="name">Client Company Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter Client Company Name">
                                <span class="text-danger invalid name_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="gst_no">GST NO <span class="text-danger">*</span></label>
                                <input class="form-control" id="gst_no" name="gst_no" type="text" placeholder="Enter GST NO">
                                <span class="text-danger invalid gst_no_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="email">Email Address <span class="text-danger">*</span></label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter Email Address">
                                <span class="text-danger invalid email_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="contact_person">Contact Person Name <span class="text-danger">*</span></label>
                                <input class="form-control" id="contact_person" name="contact_person" type="text" placeholder="Enter Contact Person Name">
                                <span class="text-danger invalid contact_person_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="contact_number">Contact Number <span class="text-danger">*</span></label>
                                <input class="form-control" id="contact_number" name="contact_number" type="number" placeholder="Enter Contact Number">
                                <span class="text-danger invalid contact_number_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="alternate_contact_no">Alternet Contact Number <span class="text-danger">*</span></label>
                                <input class="form-control" id="alternate_contact_no" name="alternate_contact_no" type="text" placeholder="Enter Alternet Contact Number">
                                <span class="text-danger invalid alternate_contact_no_err"></span>
                            </div>
                            <div class="col-md-12">
                                <label class="col-form-label" for="billing_address">Billing Address <span class="text-danger">*</span></label>
                                <input class="form-control" id="billing_address" name="billing_address" type="text" placeholder="Enter Billing Address">
                                <span class="text-danger invalid alternate_contact_no_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="city">City <span class="text-danger">*</span></label>
                                <input class="form-control" id="city" name="city" type="text" placeholder="Enter City">
                                <span class="text-danger invalid city_err"></span>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="pincode">PIN Code <span class="text-danger">*</span></label>
                                <input class="form-control" id="pincode" name="pincode" type="text" placeholder="Enter PIN Code">
                                <span class="text-danger invalid pincode_err"></span>
                            </div>
                            <div class="col-md-4">
                                                    <label class="col-form-label" for="pincode" >State</label>
                                                    <select id="ForminputState" class="form-select" name="state">
                                                        <option selected>Choose...</option>
                                                        @foreach ($StateNameWithCode as $StateNameWithCode)
                                                        <option value="{{ optional($StateNameWithCode)->id }}">{{ optional($StateNameWithCode)->stateName }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger invalid state_err"></span>

                                                </div>
                        <div class="col-md-4">
                                                    <label class="col-form-label" for="billing_type" >Billing Type</label>
                                                    <select id="ForminputState" class="form-select" name="billing_type">
                                                        <option value="">Choose...</option>
                                                        
                                                    </select>
                                                    <span class="text-danger invalid billing_type_err"></span>

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
                @can('clients.create')
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
                                    <th>Client Name</th>
                                    <th>GST No</th>
                                    <th>Contact Person</th>
                                    <th>Contact Number</th>
                                    <th>Alternet  Number</th>
                                    <th>Email ID</th>
                                    <th>Sate Name</th>
                                    <th>Billing Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->gst_no }}</td>
                                        <td>{{ $client->contact_person }}</td>
                                        <td>{{ $client->contact_number }}</td>
                                        <td>{{ $client->alternate_contact_no }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->states->stateName }}</td>
                                        <!-- <td>{{ $client->billing_type }}</td> -->
                                        <td>
                                            @if($client->billing_type == 1)
                                                Immediate
                                            @elseif($client->billing_type == 2)
                                                Month End
                                            @elseif($client->billing_type == 3)
                                                Respestive Period
                                            @else
                                                Unknown
                                            @endif
                                        </td>
                                        <td>
                                            @can('clients.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit Vehicle" data-id="{{ $client->id }}"><i data-feather="edit"></i></button>
                                            @endcan
                                            @can('clients.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete Vehicle" data-id="{{ $client->id }}"><i data-feather="trash-2"></i> </button>
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


{{-- Add --}}
<script>
    $("#addForm").submit(function(e) {
        e.preventDefault();
        $("#addSubmit").prop('disabled', true);

        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('clients.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('clients.index') }}';
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
        var url = "{{ route('clients.edit', ':model_id') }}";

        $.ajax({
            url: url.replace(':model_id', model_id),
            type: 'GET',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function(data, textStatus, jqXHR) {
                editFormBehaviour();
                if (!data.error) {
                    $("#editForm input[name='edit_model_id']").val(data.client.id);
                    $("#editForm input[name='name']").val(data.client.name);
                    $("#editForm input[name='gst_no']").val(data.client.gst_no);
                    $("#editForm input[name='contact_person']").val(data.client.contact_person);
                    $("#editForm input[name='contact_number']").val(data.client.contact_number);
                    $("#editForm input[name='alternate_contact_no']").val(data.client.alternate_contact_no);
                    $("#editForm input[name='email']").val(data.client.email);
                    $("#editForm input[name='billing_address']").val(data.client.billing_address);
                    $("#editForm input[name='city']").val(data.client.city);
                    $("#editForm input[name='pincode']").val(data.client.pincode);
                    $("#editForm input[name='state']").val(data.client.state);
                    $("#editForm input[name='billing_type']").val(data.client.billing_type);
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
            var url = "{{ route('clients.update', ':model_id') }}";

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
                            window.location.href = '{{ route('clients.index') }}';
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
                title: "Are you sure to delete this vehicle type?",
                icon: "warning",
                buttons: ["Cancel", "Confirm"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var model_id = $(this).attr("data-id");
                    var url = "{{ route('clients.destroy', ':model_id') }}";

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

<!-- GST Registered Checkbox -->
<script>
    $(document).ready(function () {
    $('#gst_registered').change(function () {
        if ($(this).is(':checked')) {
            // Hide the checkbox container
            $('#gst_checkbox_container').hide();

            // Show GST NO input
            $('#gst_no_container').slideDown();
        }
    });

    
});

</script>

