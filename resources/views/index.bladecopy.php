@extends('layouts.master')
@section('title')
@lang('translation.dashboards')
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
                    <div class="col-md-6">
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
                                        <i class="ph-wallet"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total
                                        transactions</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="10">0</span>
                                    </h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +10.07 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-6">
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
                                        <i class="ph-bag"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">LR generated</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="8">0</span>
                                    </h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +2.13 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card shadow-none border-end-md rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i
                                                class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>

                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-body rounded-circle fs-3">
                                        <i class="ph-eye"></i>
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Informed Team</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="6">0</span>
                                    </h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-danger fs-xs mb-0">
                                            <i class="ri-arrow-right-down-line fs-sm align-middle"></i> +2.01 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
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
        <!-- @extends('layouts.master') -->

        <!-- @section('content') -->
        <div class="col-lg-6">
            <div class="card" id="contactList">
                <!-- Card Header and other content here -->
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
                                        <span class="fw-medium">${{ number_format($shipment->price, 2) }}</span>
                                    </td>
                                    <td class="status">
                                        <span class="badge bg-{{ $shipment->status_class }}">{{ $shipment->status
                                            }}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- @endsection -->



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
                                <th scope="col" class="sort cursor-pointer" data-sort="value">Value</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="quantity">QTY</th>
                            </tr>
                            <!-- </thead> -->
                            <tbody class="list">
                                <tr>
                                    <td class="order_id">
                                        011
                                    </td>
                                    <td class="order_id">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">TS0110011</a>
                                    </td>

                                    <td class="amount">
                                        <span class="fw-medium">$109.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">1000 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        012
                                    </td>
                                    <td class="vehicle_no">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">TBS250010</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$149.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">800 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        013
                                    </td>
                                    <td class="vehicle_no">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">TBS250009</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$215.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">700 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        014
                                    </td>
                                    <td class="vehicle_no">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">TBS250008</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$199.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">600 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        015
                                    </td>
                                    <td class="vehicle_no">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">TBS250007</a>
                                    </td>

                                    <td class="amount">
                                        <span class="fw-medium">$330.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">500 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        016
                                    </td>
                                    <td class="vehicle_no">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">TBS250006</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$745.11</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">500 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div>
                </div>
            </div>
        </div>

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
                                <th scope="col" class="sort cursor-pointer" data-sort="quantity">QTY</th>
                            </tr>
                            <!-- </thead> -->
                            <tbody class="list">
                                <tr>
                                    <td class="order_id">
                                        011
                                    </td>
                                    <td class="product_id">
                                        <a href="apps-ecommerce-order-overview" class="fw-medium link-primary">Bikes</a>
                                    </td>

                                    <td class="amount">
                                        <span class="fw-medium">$109.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">1000 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        012
                                    </td>
                                    <td class="product">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Motors</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$149.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">800 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        013
                                    </td>
                                    <td class="product">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Fridge</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$215.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">700 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        014
                                    </td>
                                    <td class="product_id">
                                        <a href="apps-ecommerce-order-overview" class="fw-medium link-primary">Cars</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$199.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">600 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        015
                                    </td>
                                    <td class="product_id">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Machine</a>
                                    </td>

                                    <td class="amount">
                                        <span class="fw-medium">$330.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">500 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        016
                                    </td>
                                    <td class="product_id">
                                        <a href="apps-ecommerce-order-overview" class="fw-medium link-primary">Boxes</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$745.11</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">500 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div>
                </div>
            </div>
        </div>
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
                                <th scope="col" class="sort cursor-pointer" data-sort="value">Value</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="quantity">QTY</th>
                            </tr>
                            <!-- </thead> -->
                            <tbody class="list">
                                <tr>
                                    <td class="order_id">
                                        011
                                    </td>
                                    <td class="drivername">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Mr.Sahil</a>
                                    </td>

                                    <td class="amount">
                                        <span class="fw-medium">$109.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">1000 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        012
                                    </td>
                                    <td class="drivername">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Mr.Shakeel</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$149.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">800 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        013
                                    </td>
                                    <td class="drivername">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Mr.Kiran</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$215.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">700 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        014
                                    </td>
                                    <td class="drivername">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Mr.Uday</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$199.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">600 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        015
                                    </td>
                                    <td class="drivername">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Mr.Irfan</a>
                                    </td>

                                    <td class="amount">
                                        <span class="fw-medium">$330.00</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">500 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                                <tr>
                                    <td class="order_id">
                                        016
                                    </td>
                                    <td class="drivername">
                                        <a href="apps-ecommerce-order-overview"
                                            class="fw-medium link-primary">Mr.Aman</a>
                                    </td>

                                    <td class="value">
                                        <span class="fw-medium">$745.11</span>
                                    </td>
                                    <td class="quantity">
                                        <span class="fw-medium">500 Kg</span>
                                    </td>

                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->

                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->




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