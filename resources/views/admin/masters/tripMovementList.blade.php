<x-admin.layout>
    <x-slot name="title">Trip Movement List Master</x-slot>
    <x-slot name="heading">Trip Movement List Master</x-slot>
    {{-- <x-slot name="subheading">Test</x-slot> --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @can('TripMovement.create')
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
                                    <th>Trip Count No</th>
                                    <th>Trip Date</th>
                                    <th>Vehical Number</th>
                                    <th>Vehical Type</th>
                                    <th>Vehical description</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Client Name</th> 
                                    <th>Driver Name</th>
                                    <th>P.D. Allowance</th>
                                    <th>Trip Cost</th>
                                    <th>ADV REC</th>
                                    <th>Rec Date</th>
                                    <th>Toll</th>
                                    <th>Unloading</th>
                                    <th>Holding</th>
                                    <th>Balance PMT</th>
                                    <th>Vender Name</th>
                                    <th>Vendor Cost</th>
                                    <th>POD NO</th>
                                    <th>POD Status</th>
                                    <th>Couier DOC No</th>
                                    <th>Courier Date</th>
                                    <th>PMT Due Days</th>
                                    <th>Billing Status</th>
                                    <th>Invoice No</th>
                                    <th>Invoice Date</th>
                                    <th>Note /  Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trip_movement as $movement)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $movement->trip_count_no }}</td>
                                        <td>{{ $movement->trip_date }}</td>
                                        <td>{{ $movement->vehicle_id }}</td>
                                        <td>{{ $movement->description }}</td>
                                        <td>{{ $movement->description }}</td>
                                        <td>{{ $movement->origin }}</td>
                                        <td>{{ $movement->destination }}</td>
                                        <td>{{ $movement->client_id }}</td>
                                        <td>{{ $movement->driver_id }}</td>
                                        <td>{{ $movement->per_day_allow }}</td>
                                        <td>{{ $movement->rate }}</td>
                                        <td>{{ $movement->advance }}</td>
                                        <td>{{ $movement->advance_date }}</td>
                                        <td>{{ $movement->toll }}</td>
                                        <td>{{ $movement->unloading_charges }}</td>
                                        <td>{{ $movement->holding_charges }}</td>
                                        <td>{{ $movement->balance_payment }}</td>
                                        <td>{{ $movement->vehicle_id }}</td>
                                        <td>{{ $movement->vendor_rate }}</td>
                                        <td>{{ $movement->pod_no }}</td>
                                        <td>{{ $movement->pod_status }}</td>
                                        <td>{{ $movement->courier_doc_no }}</td>
                                        <td>{{ $movement->courier_date }}</td>
                                        <td>{{ $movement->courier_date }}</td>
                                        <td>{{ $movement->bill_status }}</td>
                                        <td>{{ $movement->invoice_no }}</td>
                                        <td>{{ $movement->invoice_date }}</td>
                                        <td>{{ $movement->remark }}</td>
                                        <td>
                                             @can('TripMovement.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit TripMovement" data-id="{{ $movement->id }}"><i data-feather="eye"></i></button>
                                            @endcan
                                            @can('TripMovement.edit')
                                                <button class="edit-element btn btn-secondary px-2 py-1" title="Edit TripMovement" data-id="{{ $movement->id }}"><i data-feather="edit"></i></button>
                                            @endcan
                                            @can('TripMovement.delete')
                                                <button class="btn btn-danger rem-element px-2 py-1" title="Delete TripMovement" data-id="{{ $movement->id }}"><i data-feather="trash-2"></i> </button>
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






