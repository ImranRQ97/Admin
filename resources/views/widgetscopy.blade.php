@extends('layouts.master')
@section('title')
@lang('translation.widgets')
@endsection
@section('css')
<!-- plugin css -->
<link href="{{URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Steex
@endslot
@slot('title')
Widgets
@endslot
@endcomponent

                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-decoration-underline mb-3 pb-1">Tile Boxs</h5>
                        </div>
                    </div>
                    <!-- end row-->
                    
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Total Sessions</p>
                    
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="368.24">0</span>k </h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 06.41% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="session_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Avg. Visit Duration</p>
                    
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="01.47">0</span>sec </h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Impressions</p>
                    
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="1647">0</span></h3>
                                            <p class="text-danger mb-0"><i class="bi bi-arrow-down me-1"></i> 07.26% Last Week</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="impressions_chart" data-colors='["--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Total Views</p>
                    
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="291.32">0</span>k </h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="views_chart" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-success-subtle text-success rounded fs-xl">
                                                    <i class="bi bi-ticket"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p><span class="text-success me-1"><i class="ri-arrow-right-up-line fs-sm align-middle"></i> +3.47 %</span> than last week</p>
                                        </div>
                                    </div>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="249">0</span>k </h4>
                                    <p class="fw-medium text-muted mb-0">Total Tickets</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-warning-subtle text-warning rounded fs-xl">
                                                    <i class="bi bi-hourglass-split"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p><span class="text-danger me-1"><i class="ri-arrow-right-down-line fs-sm align-middle"></i> +6.33 %</span> than last week</p>
                                        </div>
                                    </div>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="3174">0</span></h4>
                                    <p class="fw-medium text-muted mb-0">Pending Tickets</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-danger-subtle text-danger rounded fs-xl">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p><span class="text-success me-1"><i class="ri-arrow-right-up-line fs-sm align-middle"></i> +7.34 %</span> than last week</p>
                                        </div>
                                    </div>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="1596">0</span></h4>
                                    <p class="fw-medium text-muted mb-0">Closed Tickets</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card card-primary file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-primary-subtle text-primary rounded fs-xl">
                                                    <i class="bi bi-ticket-perforated"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p><span class="text-danger me-1"><i class="ri-arrow-right-down-line fs-sm align-middle"></i> +1.29 %</span> than last week</p>
                                        </div>
                                    </div>
                                    <h4 class="fw-semibold text-reset mb-3"><span class="counter-value" data-target="365">0</span></h4>
                                    <p class="fw-medium text-white text-opacity-50 mb-0">New Tickets</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded">
                                            <i class="ph ph-briefcase"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="368.24">0</span>M </h4>
                                    <p class="text-muted mb-4">Annual Profit</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 4.65%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 76%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded">
                                            <i class="ph ph-wallet"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="1454.71">0</span>k </h4>
                                    <p class="text-muted mb-4">Daily average income</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 1.33%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 88%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-danger-subtle text-danger fs-3xl rounded">
                                            <i class="bi bi-broadcast"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="33.37"></span>%</h4>
                                    <p class="text-muted mb-4">Lead Conversations</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 2.69%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 18%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-success-subtle text-success fs-3xl rounded">
                                            <i class="ph ph-rocket-launch"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="648"></span></h4>
                                    <p class="text-muted mb-4">Campaign Sent</p>
                                    <p class="text-muted mb-0"><span class="badge bg-danger-subtle text-danger"><i class="bi bi-arrow-down"></i> 0.78%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 49%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                                            <i class="ph ph-heartbeat"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="1742"></span></h4>
                                    <p class="text-muted mb-4">Annual Deals</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i class="bi bi-arrow-up"></i> 7.93%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 83%"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="card">
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-xxl-3 col-md-6 border-end-md border-dashed">
                                    <div class="text-center">
                                        <p class="text-muted">Project On Hold</p>
                                        <div class="mx-3 mb-3 pb-1">
                                            <div id="mini-chart-6" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                        <h5 class="mb-0">2451 <small class="badge fs-2xs bg-danger-subtle text-danger ms-1"><i class="ph-arrow-down align-baseline"></i> 1.02%</small></h5>
                                    </div>
                                </div><!--end col-->
                                <div class="col-xxl-3 col-md-6 border-end-xxl border-dashed">
                                    <div class="text-center">
                                        <p class="text-muted">Ongoing Properties</p>
                                        <div class="mx-3 mb-3 pb-1">
                                            <div id="mini-chart-7" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                        <h5 class="mb-0">$750.36M <small class="badge fs-2xs bg-success-subtle text-success ms-1"><i class="ph-arrow-up align-baseline"></i> 2.17%</small></h5>
                                    </div>
                                </div><!--end col-->
                                <div class="col-xxl-3 col-md-6 border-end-md border-dashed">
                                    <div class="text-center">
                                        <p class="text-muted">Pending Properties</p>
                                        <div class="mx-3 mb-3 pb-1">
                                            <div id="mini-chart-8" data-colors='["--tb-warning"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                        <h5 class="mb-0">$750.36M <small class="badge fs-2xs bg-success-subtle text-success ms-1"><i class="ph-arrow-up align-baseline"></i> 07.26%</small></h5>
                                    </div>
                                </div><!--end col-->
                                <div class="col-xxl-3 col-md-6">
                                    <div class="text-center">
                                        <p class="text-muted">Completed Project</p>
                                        <div class="mx-3 mb-3 pb-1">
                                            <div id="mini-chart-9" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                        <h5 class="mb-0">4689 <small class="badge fs-2xs bg-success-subtle text-success ms-1"><i class="ph-arrow-up align-baseline"></i> 3.62%</small></h5>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>

                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="card border-bottom border-3 card-animate border-primary">
                                <div class="card-body">
                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 3.8%</span>
                                    <h4 class="mb-4"><span class="counter-value" data-target="21438">0</span></h4>
                    
                                    <p class="text-muted fw-medium text-uppercase mb-0">Total Orders</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card border-bottom border-3 card-animate card-secondary border-secondary">
                                <div class="card-body">
                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 20.8%</span>
                                    <h4 class="mb-4 text-reset"><span class="counter-value" data-target="5963">0</span></h4>
                    
                                    <p class="text-white text-opacity-50 fw-medium text-uppercase mb-0">New Orders</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card border-bottom border-3 card-animate border-warning">
                                <div class="card-body">
                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 12.6%</span>
                                    <h4 class="mb-4"><span class="counter-value" data-target="4620">0</span></h4>
                    
                                    <p class="text-muted fw-medium text-uppercase mb-0">Pending Orders</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card border-bottom border-3 card-animate border-success">
                                <div class="card-body">
                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 18.7%</span>
                                    <h4 class="mb-4"><span class="counter-value" data-target="8541">0</span></h4>
                    
                                    <p class="text-muted fw-medium text-uppercase mb-0">Delivered Orders</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col">
                            <div class="card border-bottom border-3 card-animate border-danger">
                                <div class="card-body">
                                    <span class="badge bg-danger-subtle text-danger float-end"><i class="ph-trend-down align-middle me-1"></i> 7.1%</span>
                                    <h4 class="mb-4"><span class="counter-value" data-target="2314">0</span></h4>
                    
                                    <p class="text-muted fw-medium text-uppercase mb-0">Cancelled Orders</p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!---end row-->

                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-decoration-underline mb-3 pb-1">Other Widgets</h5>
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card" id="networks">
                                <div class="card-header d-flex">
                                    <h5 class="card-title mb-0 flex-grow-1">Browsers</h5>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown sortble-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted dropdown-title">Browsers</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <button class="dropdown-item sort" data-sort="browsers">Browsers</button>
                                                <button class="dropdown-item sort" data-sort="click">Click</button>
                                                <button class="dropdown-item sort" data-sort="pageviews">Bounce Rate</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-active">
                                                <tr>
                                                    <th class="sort cursor-pointer" data-sort="browsers">
                                                        Browsers
                                                    </th>
                                                    <th class="sort cursor-pointer text-center" data-sort="click">
                                                        Click
                                                    </th>
                                                    <th class="sort cursor-pointer text-center" data-sort="pageviews">
                                                        Bounce Rate
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/chrome.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Google Chrome</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        640
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        86.01%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/firefox.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Firefox</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        274
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        59.22%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/safari.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Safari</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        591
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        71.36%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/opera.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Opera</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        456
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        63.82%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/microsoft.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Microsoft Edge</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        312
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        57.48%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/microsoft2.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Internet Explorer</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        164
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        77.21%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="{{ URL::asset('build/images/brands/chromium.png') }}" alt="" class="avatar-xxs">
                                                        <span class="ms-1 browsers">Chromium</span>
                                                    </td>
                                                    <td class="click text-center">
                                                        36
                                                    </td>
                                                    <td class="pageviews text-center">
                                                        18.90%
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h4 class="card-title mb-0 flex-grow-1">Popular Property</h4>
                                    <div class="flex-shrink-0">
                                        <div class="nav nav-pills gap-1" id="popularProperty" role="tablist" aria-orientation="vertical">
                                            <button class="btn btn-ghost-danger btn-sm active" id="saleProperty" data-bs-toggle="pill" data-bs-target="#salePropertyTabs" type="button" role="tab" aria-controls="salePropertyTabs" aria-selected="true">Sale</button>
                                            <button class="btn btn-ghost-info btn-sm" id="rentProperty" data-bs-toggle="pill" data-bs-target="#rentPropertyTabs" type="button" role="tab" aria-controls="rentPropertyTabs" aria-selected="false" tabindex="-1">Rent</button>
                                        </div>
                                    </div>
                                </div><!--end header-->
                                <div class="card-body">
                                    <div class="tab-content" id="popularPropertyContent">
                                        <div class="tab-pane show active" id="salePropertyTabs" role="tabpanel" aria-labelledby="saleProperty" tabindex="0">
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-08.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Crystal House</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1039 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.5</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-07.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Whitepace Vintage Villa</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1145 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-05.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Northlight Residency</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1859 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.7</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-08.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Park Side Colonial</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 5 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 5643 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.7</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-04.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Marina Hill Vintage</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1963 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.8</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-07.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Grand Cub Hotel</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1543 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.4</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="rentPropertyTabs" role="tabpanel" aria-labelledby="rentProperty" tabindex="0">
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-01.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Liberty Property</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 1 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 958 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.3</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-02.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Duplex Square Valley</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 2659 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 3.8</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-03.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Small house on an autumn’s</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 2230 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.3</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-07.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>New Grand Hotel Room</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 2785 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-08.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Park Side Colonial</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 5 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 3 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 5643 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.7</span>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center position-relative mb-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/real-estate/img-07.jpg') }}" alt="" class="avatar-sm object-fit-cover rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="apps-real-estate-property-overview" class="stretched-link">
                                                        <h6>Whitepace Vintage Villa</h6>
                                                    </a>
                                                    <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1145 sqft</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill text-warning"></i> 4.9</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h4 class="card-title mb-0 flex-grow-1">Customer Feedback</h4>
                                    <div class="flex-shrink-0">
                                        <a href="#!" class="text-muted">View All <i class="bi bi-chevron-right align-baseline"></i></a>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <div data-simplebar style="max-height: 390px;">
                                        <div class="card border-bottom rounded-0 shadow-none mb-0">
                                            <div class="card-body pt-0">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">04:47 PM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Josefa Weissnat</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" Themebrand used Anydesk to fix the bug in Flask and django version. I highly recommend this product! "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">11:24 AM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Ophelia Steuber</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" Thank you for this awesome admin panel. I'm very happy with it, it's a pleasure to work with it! "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">03:19 PM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Dianna Bogan</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" High theme quality. Very good support, they spent almost an hour remotely to fix a problem. I hope this theme will have a long term support. "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">06:39 AM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Jerry Emard</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" There is as lot packed in this template. The savings in time and energy is so worth it. "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-bottom rounded-0 shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="text-muted clearfix float-end">09:18 AM</span>
                                                        <h6 class="fs-md mb-1"><a href="#!" class="text-reset">Axel Kozey</a></h6>
                                                        <div class="text-warning mb-2 fs-xs">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <p class="text-muted mb-0">" Works like a component library, a crazy amount of design elements already built and given. "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end col-->

                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-decoration-underline mb-3 mt-2 pb-3">Chart & Map Widgets</h5>
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">Sales Report</h5>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-subtle-info btn-sm"><i class="bi bi-file-earmark-text me-1 align-baseline"></i> Generate Reports</button>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>$<span class="counter-value" data-target="452.32"></span>M <span class="text-success fw-normal fs-sm"><i class="bi bi-arrow-up"></i> +23.57%</span></h4>
                                    <p class="text-muted mb-0">($215.32 Avg. revenue monthly)</p>
                                </div>
                                <div class="card-body pt-0 pb-2 ps-0 mt-2 mt-lg-n3">
                                    <div id="sales_Report" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-4 col-lg-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Sync Status Breakdown</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">This Month<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="syncStatusBreakdown" data-colors='["--tb-primary", "--tb-primary-rgb, 0.85", "--tb-primary-rgb, 0.60", "--tb-primary-rgb, 0.50", "--tb-info"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <!-- card -->
                                            <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">Current Year</a>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                                            <i class="ph-wallet"></i>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Revenue</p>
                                                        <h4 class="fw-semibold mb-3">$<span class="counter-value" data-target="750.36">750.36</span>M </h4>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="text-success fs-xs mb-0">
                                                                <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
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
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">Current Year</a>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-dark-subtle text-dark rounded-circle fs-3">
                                                            <i class="ph-bag"></i>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Orders</p>
                                                        <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="684">684</span></h4>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="text-success fs-xs mb-0">
                                                                <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +8.13 %
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
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">Current Year</a>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-light text-light-emphasis rounded-circle fs-3">
                                                            <i class="ph-eye"></i>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Product Views</p>
                                                        <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="113870">113,870</span></h4>
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
                                        <div class="col-md-6">
                                            <!-- card -->
                                            <div class="card shadow-none border-top border-md-0 rounded-0 mb-0">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">Current Year</a>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-3">
                                                            <i class="ph-users-three"></i>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Customers</p>
                                                        <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="2500">2,500</span>k </h4>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h5 class="text-success fs-xs mb-0">
                                                                <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +10.42 %
                                                            </h5>
                                                            <p class="text-muted mb-0">than last week</p>
                                                        </div>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- card -->
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Sales by Countries</h4>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-subtle-primary btn-sm">
                                            Export Report
                                        </button>
                                    </div>
                                </div><!-- end card header -->
                    
                                <!-- card body -->
                                <div class="card-body">
                    
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 340px"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-4">
                                                <h6 class="text-muted mb-3 fw-medium fs-xs text-uppercase">Compared to last month</h6>
                                                <h3><span class="counter-value" data-target="53736"></span> <small class="text-muted fw-normal fs-sm">Sales</small></h3>
                                            </div>
                                            <div>
                                                <ul class="list-unstyled vstack gap-2">
                                                    <li class="p-2 rounded">
                                                        <i class="ri-checkbox-blank-circle-fill text-primary align-bottom me-1"></i> United States <span class="float-end">15,364</span>
                                                    </li>
                                                    <li class="bg-light-subtle p-2 rounded">
                                                        <i class="ri-checkbox-blank-circle-fill text-secondary align-bottom me-1"></i> Greenland <span class="float-end">12,387</span>
                                                    </li>
                                                    <li class="p-2 rounded">
                                                        <i class="ri-checkbox-blank-circle-fill text-info align-bottom me-1"></i> Serbia <span class="float-end">9,123</span>
                                                    </li>
                                                    <li class="bg-light-subtle p-2 rounded">
                                                        <i class="ri-checkbox-blank-circle-fill text-success align-bottom me-1"></i> Russia <span class="float-end">7,108</span>
                                                    </li>
                                                    <li class="p-2 rounded">
                                                        <i class="ri-checkbox-blank-circle-fill text-danger align-bottom me-1"></i> Brazil <span class="float-end">6,731</span>
                                                    </li>
                                                    <li class="bg-light-subtle p-2 rounded">
                                                        <i class="ri-checkbox-blank-circle-fill text-warning align-bottom me-1"></i> Sydney <span class="float-end">3,023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Realized Rate</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="realized_rate" data-colors='["--tb-primary", "--tb-secondary", "--tb-danger"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h6 class="card-title mb-0 flex-grow-1">Email Sent</h6>
                                    <div class="dropdown card-header-dropdown flex-shrink-0">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="emailSent" data-colors='["--tb-primary", "--tb-success", "--tb-secondary"]' dir="ltr"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
      
@endsection
@section('script')
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/widgets.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection