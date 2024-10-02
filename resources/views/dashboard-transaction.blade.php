@extends('layouts.master')
@section('title')
@lang('Transactions')
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

@endsection

@section(section: 'content')
@component('components.breadcrumb')
@slot('li_1')
Dashboards
@endslot
@slot('title')
Transaction
@endslot
@endcomponent
<div class="position-relative">
    <div class="d-flex justify-content-end">
        <a href="/apps-ecommerce-add-product" class="btn btn-primary">
            Create Transaction
        </a>
    </div>
</div>
<div class="container mt-5">

    <div class="table-responsive">

        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Invoice No</th>
                    <th scope="col">Vehicle No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shipments as $shipment)
                    <tr>
                        <td>{{ $shipment->id }}</td>
                        <td>{{ $shipment->from_address }}</td>
                        <td><i class="bi bi-truck"></i> {{ $shipment->to_address }}</td>
                        <td>{{ $shipment->product_name }} Kg</td>
                        <td>{{ $shipment->invoice_number }}</td>
                        <td>{{ $shipment->vehicle_number }}</td>
                        <td class="shipment-row" data-level="{{ $shipment->status }}">
                            <span class="badge bg-{{ $shipment->status_class }}">{{ $shipment->status }}</span>
                        </td>
                        <td>
                            <!-- Pass shipment details to the modal using data attributes -->
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#shipmentDetailsModal" data-shipment="{{ json_encode($shipment) }}">
                                <i class="bi bi-eye"></i>View
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="shipmentDetailsModal" tabindex="-1" aria-labelledby="shipmentDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shipmentDetailsModalLabel">Shipment Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- Company Details Section -->
                        <div class="mb-3">
                            <h4>Company Details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fromCompany" class="form-label">From Company Name</label>
                                    <input type="text" class="form-control" id="fromCompany" name="from_company"
                                        readonly>
                                </div>
                                <div class="col-lg-6">
                                    <label for="toCompany" class="form-label">To Company Name</label>
                                    <input type="text" class="form-control" id="toCompany" name="to_company" readonly>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <label for="fromAddress" class="form-label">From Address</label>
                                    <input type="text" class="form-control" id="fromAddress" name="from_address"
                                        readonly>
                                </div>
                                <div class="col-lg-6">
                                    <label for="toAddress" class="form-label">To Address</label>
                                    <input type="text" class="form-control" id="toAddress" name="to_address" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Vehicle Details Section -->
                        <div class="mb-3">
                            <h4>Vehicle Details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="vehicleNumber" class="form-label">Vehicle Number</label>
                                    <input type="text" class="form-control" id="vehicleNumber" name="vehicle_number"
                                        readonly>
                                </div>
                                <div class="col-lg-6">
                                    <label for="modelName" class="form-label">Model Name</label>
                                    <input type="text" class="form-control" id="modelName" name="model_name" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="driverName" class="form-label">Driver Name</label>
                                    <input type="text" class="form-control" id="driverName" name="driver_name" readonly>
                                </div>
                                <div class="col-lg-6">
                                    <label for="driverNo" class="form-label">Driver Number</label>
                                    <input type="text" class="form-control" id="driverNo" name="driver_no" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Product Details Section -->
                        <div class="mb-3">
                            <h4>Shipment Details</h4>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for="productname" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="productname" name="product_name"
                                        readonly>
                                </div>

                                <div class="col-lg-4">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" readonly>
                                </div>

                                <!-- Invoice Number Field -->
                                <div class="col-lg-6">
                                    <label for="invoiceNumber" class="form-label">Invoice Number</label>
                                    <input type="text" class="form-control" id="invoiceNumber" name="invoice_number"
                                        readonly>
                                </div>

                                <!-- Invoice Date Field -->
                                <div class="col-lg-6">
                                    <label for="invoiceDate" class="form-label">Invoice Date</label>
                                    <input type="date" class="form-control" id="invoiceDate" name="invoice_date"
                                        readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('script')
    @section('script')
    <script>
        // Use jQuery to handle modal data population
        $('#shipmentDetailsModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var shipment = button.data('shipment'); // Extract shipment details from data-* attributes

            // Check if the shipment data is being passed
            // console.log(shipment);

            // Populate modal fields with shipment data if it's not undefined
            if (shipment) {
                var modal = $(this);
                modal.find('#fromCompany').val(shipment.from_company || '');
                modal.find('#toCompany').val(shipment.to_company || '');
                modal.find('#fromAddress').val(shipment.from_address || '');
                modal.find('#toAddress').val(shipment.to_address || '');
                modal.find('#vehicleNumber').val(shipment.vehicle_number || '');
                modal.find('#modelName').val(shipment.model_name || '');
                modal.find('#driverName').val(shipment.driver_name || '');
                modal.find('#driverNo').val(shipment.driver_no || '');
                modal.find('#productname').val(shipment.product_name || '');
                modal.find('#quantity').val(shipment.quantity || '');
                modal.find('#price').val(shipment.price || '');
                modal.find('#invoiceNumber').val(shipment.invoice_number || '');
                modal.find('#invoiceDate').val(shipment.invoice_date || '');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const rows = document.querySelectorAll('.shipment-row');

            rows.forEach(row => {
                row.addEventListener('click', function () {
                    const level = this.dataset.level;
                    const shipmentId = this.closest('tr').querySelector('td:first-child').textContent.trim();

                    switch (level) {
                        case 'new':
                            window.location.href = `/apps-ecommerce-extract-overview?id=${shipmentId}`;
                            break;
                        case 'lr_informed':
                            window.location.href = `/apps-ecommerce-generate-lr?id=${shipmentId}`;
                            break;
                        case 'lr_generated':
                            window.location.href = `/apps-ecommerce-acknowledgement`;
                            break;
                        case 'Acknowledgement uploaded':
                            window.location.href = `/apps-ecommerce-customers?id=${shipmentId}`;
                            break;
                        default:
                            alert('No action for this status.');
                    }
                });
            });
        });

    </script>
    @endsection