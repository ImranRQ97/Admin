@extends('layouts.master')
@section('title')
@lang('translation.analytics')
@endsection
@section('css')

<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet">

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Dashboards
@endslot
@slot('title')
Analytics
@endslot
@endcomponent

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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header d-flex align-items-center flex-wrap gap-3">
                <h5 class="card-title mb-0 flex-grow-1">Performance Overview</h5>
                <ul class="nav nav-pills flex-shrink-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#pageViews" role="tab" aria-selected="true">
                            Pageviews
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#Clicks" role="tab" aria-selected="false" tabindex="-1">
                            Clicks
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#conversations" role="tab" aria-selected="false" tabindex="-1">
                            Conversations
                        </a>
                    </li>
                </ul>
            </div>
            <!--end card-header-->
            <div class="card-body ps-0">
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="pageViews" role="tabpanel">
                        <div id="pageviews_overview" data-colors='["--tb-light", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                    </div>
                    <!--end tab-->
                    <div class="tab-pane" id="Clicks" role="tabpanel">
                        <div id="clicks_Chart" data-colors='["--tb-light", "--tb-secondary", "--tb-primary"]' class="apex-charts" dir="ltr"></div>
                    </div>
                    <!--end tab-->
                    <div class="tab-pane" id="conversations" role="tabpanel">
                        <div id="column_distributed" data-colors='["--tb-primary-text-emphasis"]' class="apex-charts" dir="ltr"></div>
                    </div>
                    <!--end tab-->
                </div>
                <!--end tab-content-->
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-4">
        <div class="card card-height-100" id="networks">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Browser Usage</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
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
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-9">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Active Users Right Now</h5>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-subtle-primary btn-sm"><i class="bi bi-file-earmark-text me-1 align-baseline"></i> Reports</button>
                </div>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 340px"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <h6 class="text-muted mb-3 fw-medium fs-xs text-uppercase">Compared to last month</h6>
                            <h3><span class="counter-value" data-target="53736"></span> <small class="text-muted fw-normal fs-sm">Users</small></h3>
                        </div>
                        <div>
                            <div id="main" data-colors='["--tb-primary-bg-subtle", "--tb-light", "--tb-primary"]' style="height: 265px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /col-->
    <div class="col-xl-3">
        <div class="card card-height-100" id="top-Pages">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Top Pages</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item sort" data-sort="activePage" href="#!">Active Page</a>
                            <a class="dropdown-item sort" data-sort="pageUsers" href="#!">Users</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePage" style="width: 62;">Active Page</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePageNo">Active</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="pageUsers">Users</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/themesbrand/velzon</a>
                                </td>
                                <td class="activePageNo">299</td>
                                <td class="pageUsers">25.3%</td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/skote/index</a>
                                </td>
                                <td class="activePageNo">240</td>
                                <td class="pageUsers">22.7%</td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/hybrix/timeline</a>
                                </td>
                                <td class="activePageNo">190</td>
                                <td class="pageUsers">18.7%</td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/themesbrand/minia</a>
                                </td>
                                <td class="activePageNo">135</td>
                                <td class="pageUsers">14.2%</td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/dashon/dashboard</a>
                                </td>
                                <td class="activePageNo">118</td>
                                <td class="pageUsers">12.6%</td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/doot/chats</a>
                                </td>
                                <td class="activePageNo">90</td>
                                <td class="pageUsers">10.9%</td>
                            </tr><!-- end -->
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">/steex/learning</a>
                                </td>
                                <td class="activePageNo">75</td>
                                <td class="pageUsers">07.3%</td>
                            </tr><!-- end -->
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
            </div>
        </div>
    </div><!-- end col-->
</div><!-- end row-->

<div class="row">
    <div class="col-xl-4">
        <div class="card card-height-100 border-0 overflow-hidden">
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
                                <div id="time_On_Sale" data-colors='["--tb-primary"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Time on Sale</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="32">0</span>M <span class="counter-value" data-target="12">0</span>s</h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +21.36 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">Analytics for last week</p>
                                        </div>
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
                                <div id="goal_Completions" data-colors='["--tb-dark"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Goal Completions</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="254157">0</span></h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +6.30 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">Analytics for last week</p>
                                        </div>
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
                                <div id="bounce_rate" data-colors='["--tb-danger"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Bounce Rate</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="68">0</span>%</h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-danger flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-down-line fs-sm align-middle"></i> +2.01 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">Analytics for last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card shadow-none border-top border-top-md-0 rounded-0 mb-0">
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
                                <div id="new_Sessions" data-colors='["--tb-info"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">New Sessions</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="32548">0</span> </h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +10.42 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">than last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-4">
        <div class="card card-height-100">
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
            <div class="card-body pt-0 pb-2 ps-0 mt-2 mt-lg-n3 sales-report-chart">
                <div id="sales_Report" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-4">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Earning</h5>
                <div class="dropdown card-header-dropdown">
                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Current Years</a>
                        <a class="dropdown-item" href="#">Last Years</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="p-3 text-center bg-light-subtle mb-4 rounded">
                    <h4 class="mb-0">$<span class="counter-value" data-target="314.57"></span>M <span class="text-muted fw-normal fs-sm"><span class="text-success fw-medium"><i class="bi bi-arrow-up"></i> +23.57%</span> Last Month</span></h4>
                </div>
                <div class="progress progress-bar-animated">
                    <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Product Development (28%)" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Startup Business (15%)" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Corporate Design (20%)" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-light" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Develop Project (18%)" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Prototype (13%)" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Design (8%)" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="list-unstyled mt-4 pt-2 vstack gap-3">
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-primary me-2"></i> Product Development
                            </div>
                            <div class="flex-shrink-0">
                                28%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-secondary me-2"></i> Startup Business
                            </div>
                            <div class="flex-shrink-0">
                                15%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-info me-2"></i> Corporate Design
                            </div>
                            <div class="flex-shrink-0">
                                20%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-light me-2"></i> Develop Project
                            </div>
                            <div class="flex-shrink-0">
                                18%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-success me-2"></i> Prototype
                            </div>
                            <div class="flex-shrink-0">
                                13%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-warning me-2"></i> Design
                            </div>
                            <div class="flex-shrink-0">
                                8%
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <a href="#!" class="link-secondary fw-medium link-effect">View All Earning <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
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
<script src="{{ URL::asset('build/libs/echarts/echarts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard-analytics.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
