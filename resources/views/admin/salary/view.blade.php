<x-admin.layout>
    <x-slot name="title">Salary Model</x-slot>
    <x-slot name="heading">Salary Model</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                <form id="salaryForm" method="GET" action="{{ route('salary-model.index') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                           <label for="month" class="form-label">Month</label>
                            <select class="form-select" id="month" name="month" required>
                                <option value="">Month</option>
                                @foreach([
                                    1 => 'Jan', 2 => 'Feb', 3 => 'March', 4 => 'April',
                                    5 => 'May', 6 => 'June', 7 => 'July', 8 => 'Aug',
                                    9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'
                                ] as $key => $value)
                                    <option value="{{ $key }}" {{ ($selected_month == $key) ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-4">
                            <label for="employee_type" class="form-label">Employee Type</label>
                            <select class="form-select" id="employee_type" name="employee_type" required>
                                <option value="">Select Type</option>
                                <option value="1" {{ ($selected_type == 1) ? 'selected' : '' }}>Office Staff</option>
                                <option value="2" {{ ($selected_type == 2) ? 'selected' : '' }}>Drivers</option>
                            </select>
                        </div>
                    </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="addSubmit">Submit</button>
                        <button type="reset" class="btn btn-warning">Refresh</button>
                    </div>
                </form>

                    <div class="table-responsive mt-5">
                        <table id="buttons-datatables" class="table table-bordered nowrap align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Full Name</th>
                                    <th>Basic Salary</th>
                                    <th>Trip Allowance</th>
                                    <th>Advance</th>
                                    <th>Net Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($getSalaryDetails as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value['name'] }}</td>
                                       <td>{{ number_format($value['basic_salary'], 2) }}</td>
                                        <td>{{ number_format($value['trip_allowance'] ?? 0, 2) }}</td>
                                        <td></td>
                                        <td>{{ number_format($value['net_salary'], 2) }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
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
            url: '{{ route('users.store') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#addSubmit").prop('disabled', false);
                if (!data.error2)
                    swal("Successful!", data.success, "success")
                    .then((action) => {
                        window.location.href = '{{ route('users.index') }}';
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

        function resetErrors() {
            var form = document.getElementById('addForm');
            var data = new FormData(form);
            for (var [key, value] of data) {
                $('.' + key + '_err').text('');
                $('#' + key).removeClass('is-invalid');
                $('#' + key).addClass('is-valid');
            }
        }

        function printErrMsg(msg) {
            $.each(msg, function(key, value) {
                $('.' + key + '_err').text(value);
                $('#' + key).addClass('is-invalid');
                $('#' + key).removeClass('is-valid');
            });
        }

    });
</script>

