@extends('layouts.master')
@section('title')
@lang('Dashboard')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row">
    <div class="col-xl">
        <div class="card card-height-100 border-0 overflow-hidden">
            <div class="card-body p-1">
                <div class="row g-0">
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>

                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                        <i class="ph-wallet" title="All Transactions"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total
                                        transactions</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="10">0</span>
                                    </h4>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>

                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                        <i class="ph-file-text" title="LR Informed"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">LR Informed</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="10">0</span>
                                    </h4>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div>
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>

                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                        <i class="ph-file-plus" title="LR Generate"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">LR Generate</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="10">0</span>
                                    </h4>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div>
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card shadow-none border-bottom rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>

                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-dark-subtle text-dark rounded-circle fs-3">
                                        <i class="ph-cloud-arrow-up" title="Acknowledgment Uploaded"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Acknowledgment
                                        Uploaded</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="8">0</span>
                                    </h4>

                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <!-- end row-->
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->

    <div class="row">
        <div class="col-lg-6">
            <div class="card" id="contactList">
                <!-- Card Header and other content here -->
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Consignee details</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown sortble-dropdown">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col" class="sort cursor-pointer" data-sort="order_id">ID</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="to_name">To Name</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="quantity">QTY</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="value">Value</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($shipments as $shipment)
                                    <tr>
                                        <td class="order_id">{{ $shipment->id }}</td>
                                        <td class="to_name">
                                            <a href="#" class="fw-medium link-primary">{{ $shipment->to_company }}</a>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{ $shipment->quantity }} Kg</span>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">₹{{ number_format($shipment->price, 2) }}</span>
                                        </td>
                                        <td class="status">
                                            @if($shipment->status == 'Out of Delivered')
                                                <span class="badge bg-danger-subtle text-danger">Out of Delivered</span>
                                            @elseif($shipment->status == 'New')
                                                <span class="badge bg-secondary-subtle text-secondary">New</span>
                                            @elseif($shipment->status == 'Pending')
                                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                                            @elseif($shipment->status == 'Shipping')
                                                <span class="badge bg-primary-subtle text-primary">Shipping</span>
                                            @elseif($shipment->status == 'Delivered')
                                                <span class="badge bg-success-subtle text-success">Delivered</span>
                                            @else
                                                <span
                                                    class="badge bg-warning-subtle text-warning">{{ $shipment->status }}</span>
                                            @endif
                                        </td>
                                        </ </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card" id="contactList">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Product details</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown sortble-dropdown">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <!-- <thead class="text-muted table-light"> -->
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="id">ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="product">Product Name</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="value">Value</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="quantity">Invoice No</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="invoicedate">Invoice Date </th>

                            </tr>
                            <!-- </thead> -->
                            <tbody class="list">
                                @foreach ($shipments as $shipment)
                                    <tr>
                                        <td class="order_id">{{ $shipment->id }}</td>
                                        <td class="to_name">
                                            <a href="#" class="fw-medium link-primary">{{ $shipment->product_name }}</a>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{ $shipment->quantity }} Kg</span>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{($shipment->invoice_number) }}</span>
                                        </td>
                                        <td class="invoicedate">
                                            <span class="fw-medium">{{($shipment->invoice_date) }}</span>
                                        </td>
                                        </ </tr>
                                @endforeach

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card" id="contactList">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Vehicle details</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown sortble-dropdown">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <!-- <thead class="text-muted table-light"> -->
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="id">ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="vehicle">Vehicle No</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="value">Vehicle Model</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="quantity">Route</th>
                            </tr>
                            <!-- </thead> -->
                            <tbody class="list">
                                @foreach ($shipments as $shipment)
                                    <tr>
                                        <td class="order_id">{{ $shipment->id }}</td>
                                        <td class="to_name">
                                            <a href="#" class="fw-medium link-primary">{{ $shipment->vehicle_number }}</a>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{ $shipment->model_name }} </span>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{($shipment->to_address) }}</span>
                                        </td>
                                        <!-- <td class="invoicedate">
                                                                                                                <span class="fw-medium">{{($shipment->invoice_date) }}</span>
                                                                                                            </td> -->
                                        </ </tr>
                                @endforeach

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-lg-6">
            <div class="card" id="contactList">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Driver details</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown sortble-dropdown">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <!-- <thead class="text-muted table-light"> -->
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="id">ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="drivername">Driver Name</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="value">Model No</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="quantity">Driver No</th>
                            </tr>
                            <!-- </thead> -->
                            <tbody class="list">
                                @foreach ($shipments as $shipment)
                                    <tr>
                                        <td class="order_id">{{ $shipment->id }}</td>
                                        <td class="to_name">
                                            <a href="#" class="fw-medium link-primary">{{ $shipment->driver_name }}</a>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{ $shipment->model_name }} </span>
                                        </td>
                                        <td class="value">
                                            <span class="fw-medium">{{($shipment->driver_no) }}</span>
                                        </td>

                                        </ </tr>
                                @endforeach

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <!--end row-->


    <!--end row-->

    <!-- Modal -->

    <!-- end Modal -->

    <!-- Product Modal -->

    <!-- End Product Modal -->
    @endsection

    @section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection