@extends('layouts.master')
@section('title')
@lang('translation.crm')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Dashboards
@endslot
@slot('title')
CRM
@endslot
@endcomponent


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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
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
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-3">
        <div class="card card-height-100">
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
    </div>
    <!--end col-->
    <div class="col-xl-9">
        <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
                <h6 class="card-title mb-0 flex-grow-1">Balance Overview</h6>
                <div>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        ALL
                    </button>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        1M
                    </button>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        6M
                    </button>
                    <button type="button" class="btn btn-subtle-primary btn-sm">
                        1Y
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="balance_overview" data-colors='["--tb-primary", "--tb-light","--tb-secondary"]' class="apex-charts ms-n3" dir="ltr"></div>
                <div class="table-responsive table-card mb-0 mt-2">
                    <table class="table table-sm table-borderless align-middle text-center mb-0 table-nowrap">
                        <tr>
                            <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-primary"></i> Total Revenue</td>
                            <th>$795.69k</th>
                            <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 6.19%</span> than last years</td>
                            <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-light"></i> Total Expenses</td>
                            <th>$415.37k</th>
                            <td class="text-muted"><span class="text-success"><i class="bi bi-caret-up-fill align-baseline me-1"></i> 3.62%</span> than last years</td>
                            <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-start"><i class="bi bi-diamond-fill align-baseline me-1 text-secondary"></i> Profit Ratio </td>
                            <th>3.6%</th>
                            <td class="text-muted"><span class="text-danger"><i class="bi bi-caret-down-fill align-baseline me-1"></i> 1.47%</span> than last years</td>
                            <td class="text-end" style="width: 150px;"><a href="#!" class="icon-link icon-link-hover text-decoration-underline link-underline link-underline-opacity-0 link-underline-opacity-75-hover">View All <i class="bi bi-arrow-right"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-6">
        <div class="card" id="leadsList">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Contact Leads</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                            </span><span class="text-muted dropdown-title">Leads Score</span> <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item sort" data-sort="leads_score">Leads Score</button>
                            <button class="dropdown-item sort" data-sort="contact_name">Contact Name</button>
                            <button class="dropdown-item sort" data-sort="phone_number">Phone Number</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card mt-0">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="contact_name">Contact Name</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="phone_number">Phone Number</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="leads_score">Leads Score</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="location">Location</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="create_date">Create Date</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="react.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset contact_name">Buck Roberts</a>
                                    </div>
                                </td>
                                <td class="phone_number">(11) 3885-1022</td>
                                <td class="leads_score">234</td>
                                <td class="location">Guarulhos, Brazil</td>
                                <td class="create_date">17 Mar, 2023</td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="contact_name">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="shopify.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset">Josefa Weissnat</a>
                                    </div>
                                </td>
                                <td class="phone_number">(53) 3035-3100</td>
                                <td class="leads_score">418</td>
                                <td class="location">California, USA</td>
                                <td class="create_date">15 Mar, 2023</td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="sketch.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset contact_name">Jacinthe Will</a>
                                    </div>
                                </td>
                                <td class="phone_number">(33) 3521-6761</td>
                                <td class="leads_score">357</td>
                                <td class="location">Brasília, Brazil</td>
                                <td class="create_date">11 Mar, 2023</td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/48/avatar-6.jpg') }}" alt="sketch.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset contact_name">Donnell Schultz</a>
                                    </div>
                                </td>
                                <td class="phone_number">(51) 3233-7909</td>
                                <td class="leads_score">631</td>
                                <td class="location">Natal, Brazil</td>
                                <td class="create_date">29 Feb, 2023</td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/48/avatar-7.jpg') }}" alt="sketch.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset contact_name">Xander Wyman</a>
                                    </div>
                                </td>
                                <td class="phone_number">(48) 3877-9000</td>
                                <td class="leads_score">249</td>
                                <td class="location">Logrono, Spain</td>
                                <td class="create_date">24 Feb, 2023</td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/48/avatar-8.jpg') }}" alt="sketch.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset contact_name">Buck Roberts</a>
                                    </div>
                                </td>
                                <td class="phone_number">(92) 3639-8685</td>
                                <td class="leads_score">176</td>
                                <td class="location">Ibiza, Spain</td>
                                <td class="create_date">27 Jan, 2023</td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/users/48/avatar-9.jpg') }}" alt="sketch.png" class="avatar-xxs rounded">
                                        <a href="pages-profile" class="text-reset contact_name">Federico Hand</a>
                                    </div>
                                </td>
                                <td class="phone_number">(11) 3666-9716</td>
                                <td class="leads_score">176</td>
                                <td class="location">San Luis Potosi, Mexico</td>
                                <td class="create_date">21 Dec, 2022</td>
                            </tr><!-- end tr -->
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
                <div class="align-items-center mt-4 pt-2 row">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">05</span> of <span class="fw-semibold">07</span> Results
                        </div>
                    </div>
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <div class="pagination-wrap pagination-sm hstack gap-2 justify-content-center">
                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="javascript:void(0)">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-lg-6">
        <div class="card card-height-100">
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
    </div>
    <!--end col-->
    <div class="col-xl-3 col-lg-6">
        <div class="card card-height-100">
            <div class="card-header align-items-center d-flex">
                <h6 class="card-title mb-0 flex-grow-1">Users Activity</h6>
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
                <div id="usersActivity" data-colors='["--tb-primary", "--tb-light"]' class="apex-charts ms-n2" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-4">
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
    </div>
    <!--end col-->
    <div class="col-xxl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h6 class="card-title mb-0 flex-grow-1">Open Deals</h6>
                <div class="dropdown card-header-dropdown flex-shrink-0">
                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fw-semibold text-uppercase">Sort by:
                        </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Yesterday</a>
                        <a class="dropdown-item" href="#">Last 7 Days</a>
                        <a class="dropdown-item" href="#">Last 30 Days</a>
                        <a class="dropdown-item" href="#">This Month</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0">
                <div data-simplebar class="card-body py-0" style="max-height: 350px;">
                    <div class="vstack gap-2">
                        <div class="py-2 px-3 border border-dashed rounded">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/48/avatar-10.jpg') }}" alt="" class="avatar-sm rounded">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">SASS app workflow diagram</a></h6>
                                    <p class="text-muted mb-0">Closing Deal date 14 Jan, 2023</p>
                                </div>
                                <div class="text-end">
                                    <h5 class="fs-md text-primary mb-0">$49.99</h5>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 px-3 border border-dashed rounded">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="avatar-sm rounded">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Steex - Admin Dashboard</a></h6>
                                    <p class="text-muted mb-0">Closing Deal date 22 April, 2023</p>
                                </div>
                                <div class="text-end">
                                    <h5 class="fs-md text-primary mb-0">$132.94</h5>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 px-3 border border-dashed rounded">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-sm rounded">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Create New Components</a></h6>
                                    <p class="text-muted mb-0">Closing Deal date 29 April, 2023</p>
                                </div>
                                <div class="text-end">
                                    <h5 class="fs-md text-primary mb-0">$349.99</h5>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 px-3 border border-dashed rounded">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-sm rounded">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">New Email Design Templates</a></h6>
                                    <p class="text-muted mb-0">Closing Deal date 23 March, 2023</p>
                                </div>
                                <div class="text-end">
                                    <h5 class="fs-md text-primary mb-0">$258.73</h5>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 px-3 border border-dashed rounded">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Urban Modern Design</a></h6>
                                    <p class="text-muted mb-0">Closing Deal date 17 March, 2023</p>
                                </div>
                                <div class="text-end">
                                    <h5 class="fs-md text-primary mb-0">$374.61</h5>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 px-3 border border-dashed rounded">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/48/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h6 class="fs-md text-truncate"><a href="#!" class="text-reset">Airbnb React Development</a></h6>
                                    <p class="text-muted mb-0">Closing Deal date 03 Feb, 2023</p>
                                </div>
                                <div class="text-end">
                                    <h5 class="fs-md text-primary mb-0">$976.07</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h6 class="card-title mb-0 flex-grow-1">Create Tasks List</h6>
                <div class="dropdown card-header-dropdown flex-shrink-0">
                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fw-semibold text-uppercase">Sort by:
                        </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Yesterday</a>
                        <a class="dropdown-item" href="#">Last 7 Days</a>
                        <a class="dropdown-item" href="#">Last 30 Days</a>
                        <a class="dropdown-item" href="#">This Month</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0">
                <div data-simplebar class="card-body py-0" style="max-height: 350px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item ps-0">
                            <div class="d-flex align-items-start">
                                <div class="form-check ps-0 flex-sharink-0">
                                    <input type="checkbox" class="form-check-input ms-0" id="task_one">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <label class="form-check-label mb-0 ps-2" for="task_one">
                                        <span class="d-block fw-semibold mb-1 text-truncate">Review and make sure nothing slips through cracks</span>
                                        <span class="text-muted d-block">If someone cracks, they lose control of their emotions or actions because they are under a lot of pressure.</span>
                                    </label>
                                </div>
                                <div class="flex-shrink-0 ms-2">
                                    <p class="text-muted fs-xs fw-medium mb-0">15 Sep, 2023</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item ps-0">
                            <div class="d-flex align-items-start">
                                <div class="form-check ps-0 flex-sharink-0">
                                    <input type="checkbox" class="form-check-input ms-0" id="task_two">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <label class="form-check-label mb-0 ps-2" for="task_two">
                                        <span class="d-block fw-semibold mb-1 text-truncate">Send meeting invites for sales campaign</span>
                                        <span class="text-muted d-block">I will send you a meeting invite" is grammatically incorrect. Invite is a verb and invitation is the noun.</span>
                                    </label>
                                </div>
                                <div class="flex-shrink-0 ms-2">
                                    <p class="text-muted fs-xs fw-medium mb-0">20 Sep, 2023</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item ps-0">
                            <div class="d-flex align-items-start">
                                <div class="form-check flex-sharink-0 ps-0">
                                    <input type="checkbox" class="form-check-input ms-0" id="task_three">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <label class="form-check-label mb-0 ps-2" for="task_three">
                                        <span class="d-block fw-semibold mb-1 text-truncate">Make a creating an account profile</span>
                                        <span class="text-muted d-block">Like any other essay, a profile essay has three main parts, the introduction, body, and conclusion.</span>
                                    </label>
                                </div>
                                <div class="flex-shrink-0 ms-2">
                                    <p class="text-muted fs-xs fw-medium mb-0">08 Feb, 2023</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item ps-0">
                            <div class="d-flex align-items-start">
                                <div class="form-check ps-0 flex-sharink-0">
                                    <input type="checkbox" class="form-check-input ms-0" id="task_four">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <label class="form-check-label mb-0 ps-2" for="task_four">
                                        <span class="d-block fw-semibold mb-1 text-truncate">Change email option process</span>
                                        <span class="text-muted d-block">If people have you saved as something else in their contacts, that's the name they'll see.</span>
                                    </label>
                                </div>
                                <div class="flex-shrink-0 ms-2">
                                    <p class="text-muted fs-xs fw-medium mb-0">19 Jan, 2023</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item ps-0">
                            <div class="d-flex align-items-start">
                                <div class="form-check ps-0 flex-sharink-0">
                                    <input type="checkbox" class="form-check-input ms-0" id="task_five">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <label class="form-check-label mb-0 ps-2" for="task_five">
                                        <span class="d-block fw-semibold mb-1 text-truncate">Additional Calendar</span>
                                        <span class="text-muted d-block">Employees can use shared calendars to manage their own assignments and appointments</span>
                                    </label>
                                </div>
                                <div class="flex-shrink-0 ms-2">
                                    <p class="text-muted fs-xs fw-medium mb-0">03 Jan, 2023</p>
                                </div>
                            </div>
                        </li>
                    </ul>
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
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-crm.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
