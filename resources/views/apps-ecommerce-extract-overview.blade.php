@extends('layouts.master')

@section('title') @lang('Verification') @endsection

@section('css')
<link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/leaflet-routing-machine/leaflet-routing-machine.css') }}" rel="stylesheet"
    type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Verification @endslot
@endcomponent

<div class="container verification-container">

    <!-- Vehicle Verification Section -->
    <div class="card mb-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($shipment)
            <div class="card-body">
                <h4>Verify Vehicle</h4>
                <form id="verifyVehicleForm" method="POST" action="{{ route('vehicle.extract') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <p>Vehicle Number : {{ $shipment->vehicle_number }}</p>
                        <label for="vehicleNumberLabel" class="col-sm-3 col-form-label">Extracted Vehicle Number:</label>
                        <div class="col-sm-9">
                            <label id="vehicleNumberLabel" class="form-control" readonly>
                                {{ session('vehicle_number', 'Waiting for extraction...') }}
                            </label>
                        </div>
                    </div>

                    <!-- Verify Button for Vehicle Number -->
                    @if (session('vehicle_number') && session('vehicle_number') == $shipment->vehicle_number)
                        <div class="alert alert-success">
                            Vehicle number matched successfully!
                        </div>
                    @elseif(session('vehicle_number'))
                        <div class="alert alert-danger">
                            Vehicle number did not match.
                        </div>
                    @endif

                    <div class="form-group row">
                        <label for="vehiclePhoto" class="col-sm-3 col-form-label">Upload Vehicle Photo:</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="vehiclePhoto" name="vehicle_photo" accept="image/*"
                                required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Extract Vehicle No</button>
                </form>
            </div>
        @else
            <div class="alert alert-danger">
                Shipment not found.
            </div>
        @endif
    </div>

    <!-- Invoice Extraction Section -->
    <div class="card mb-4">
        @if (session('successs'))
            <div class="alert alert-success">
                {{ session('successs') }}
            </div>
        @endif

        @if (session('errorr'))
            <div class="alert alert-danger">
                {{ session('errorr') }}
            </div>
        @endif

        @if ($shipment)
            <div class="card-body">
                <h4>Verify Invoice</h4>
                <form id="verifyInvoiceForm" method="POST" action="{{ route('invoice.extract') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="shipment_id" value="{{ $shipment->id }}">
                    <!-- Hidden input for shipment ID -->

                    <div class="form-group row">
                        <p>Invoice Number : {{ $shipment->invoice_number }}</p>
                        <label for="invoiceNumberLabel" class="col-sm-3 col-form-label">Extracted E-Way Bill No:</label>
                        <div class="col-sm-9">
                            <label id="invoiceNumberLabel" class="form-control" readonly>
                                {{ session('eway_bill_no', 'Waiting for extraction...') }}
                            </label>
                        </div>
                    </div>

                    <!-- Verify Button for Invoice Number -->
                    @if (session('eway_bill_no') && session('eway_bill_no') == $shipment->invoice_number)
                        <div class="alert alert-success">
                            Invoice number matched successfully!
                        </div>
                    @elseif(session('eway_bill_no'))
                        <div class="alert alert-danger">
                            Invoice number did not match.
                        </div>
                    @endif

                    <div class="form-group row">
                        <label for="invoice_pdf" class="col-sm-3 col-form-label">Upload Invoice PDF:</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="invoice_pdf" name="invoice_pdf"
                                accept="application/pdf" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Extract Invoice Details</button>
                </form>
            </div>
        @else
            <div class="alert alert-danger">
                Shipment not found.
            </div>
        @endif
    </div>

    <!-- Next Button -->
    <!-- <form action="/apps-ecommerce-generate-lr" method="get">
        <button type="submit" class="btn btn-secondary btn-next">Next</button>
    </form> -->
</div>

<!--end row-->
@endsection

@section('script')
<!-- leaflet plugin -->
<script src="{{ URL::asset('build/libs/leaflet/leaflet.js') }}"></script>
<script src="https://themesbrand.com/skote/layouts/assets/js/pages/leaflet-us-states.js"></script>
<!-- leaflet-routing-machine -->
<script src="{{ URL::asset('build/libs/leaflet-routing-machine/leaflet-routing-machine.min.js') }}"></script>

<!-- Order Overview init -->
<script src="{{ URL::asset('build/js/pages/ecommerce-order-overview.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection