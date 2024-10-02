@extends('layouts.layouts-two-column')
@section('title') @lang('translation.two-column') @endsection
@section('content')

<div class="row">
    <div class="col-xxl-9">
        <div class="row">
            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge bg-success-subtle text-success float-end"><i class="bi bi-arrow-up"></i> 4.65%</span>
                                <p class="fs-md text-muted mb-4">Total Students</p>
                                <h3 class="mb-n3"><span class="counter-value" data-target="4879">0</span>k </h3>
                                <div id="total_students" data-colors='["--tb-light", "--tb-secondary", "--tb-light", "--tb-light", "--tb-light", "--tb-light","--tb-light"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <span class="badge bg-danger-subtle text-danger float-end"><i class="bi bi-arrow-down"></i> 1.27%</span>
                                <p class="fs-md text-muted mb-4">Total Courses</p>
                                <h3 class="mb-n3"><span class="counter-value" data-target="754">0</span> </h3>
                                <div id="total_courses" data-colors='["--tb-info", "--tb-secondary", "--tb-primary", "--tb-primary", "--tb-primary", "--tb-primary","--tb-primary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h6 class="card-title mb-0 flex-grow-1">Features Course Categories</h6>
                                <div class="flex-shrink-0">
                                    <a href="apps-learning-category" class="icon-link icon-link-hover">View All <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto">
                                                <div class="avatar-title bg-success-subtle rounded">
                                                    <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <h6 class="text-trucate mb-0 mt-3"><a href="apps-learning-grid" class="text-reset">Shopify Development</a></h6>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto">
                                                <div class="avatar-title bg-info-subtle rounded">
                                                    <img src="{{ URL::asset('build/images/learning/webpack.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <h6 class="text-trucate mb-0 mt-3"><a href="apps-learning-grid" class="text-reset">Marketing & Management</a></h6>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto">
                                                <div class="avatar-title bg-danger-subtle rounded">
                                                    <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <h6 class="text-trucate mb-0 mt-3"><a href="apps-learning-grid" class="text-reset">Laravel Development</a></h6>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto">
                                                <div class="avatar-title bg-info-subtle rounded">
                                                    <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                            <h6 class="text-trucate mb-0 mt-3"><a href="apps-learning-grid" class="text-reset">React Development</a></h6>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
            <div class="col-xxl-3">
                <div class="card card-height-100">
                    <div class="card-header d-flex">
                        <h5 class="card-title mb-0 flex-grow-1">Daily Progress</h5>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown sortble-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted dropdown-title">Today</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <button class="dropdown-item">Today</button>
                                    <button class="dropdown-item">This Week</button>
                                    <button class="dropdown-item">This Month</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div id="stroked_radialbar" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                        <p class="text-muted mb-0">Very good, keep improving the quality of your learning</p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-8">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Learning Overview</h4>
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
                        <div id="area_chart_spline" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts ms-n3" dir="ltr"></div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-4">
                <div class="card card-height-100">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="card-title mb-0 flex-grow-1">Best instructors</h6>
                        <div class="flex-shrink-0">
                            <a href="apps-instructors-list" class="icon-link icon-link-hover">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div data-simplebar class="card-body py-0" style="max-height: 330px;">
                            <div class="table-responsive table-card mt-0">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-2.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1"><a href="apps-instructors-overview" class="text-reset">Bethany Nienow</a></h6>
                                                        <p class="text-muted mb-0">236 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.9</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-7.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1"><a href="apps-instructors-overview" class="text-reset">Sonia Conn</a></h6>
                                                        <p class="text-muted mb-0">247 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.8</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-4.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1"><a href="apps-instructors-overview" class="text-reset">Talon Bradtke</a></h6>
                                                        <p class="text-muted mb-0">365 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.9</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-5.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1"><a href="apps-instructors-overview" class="text-reset">Tyrell Kerluke</a></h6>
                                                        <p class="text-muted mb-0">298 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.7</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-6.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1"><a href="apps-instructors-overview" class="text-reset">Ross Zieme</a></h6>
                                                        <p class="text-muted mb-0">196 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.9</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-1.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1"><a href="apps-instructors-overview" class="text-reset">Hollis Spencer</a></h6>
                                                        <p class="text-muted mb-0">321 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.7</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ URL::asset('build/images/users/48/avatar-8.jpg') }}" alt="" class="avatar-sm rounded-circle p-1">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-md mb-1">Cordia Grady</h6>
                                                        <p class="text-muted mb-0">357 Courses</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill"></i> 4.8</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="card" id="coursesList">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Recent Courses</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                            </span><span class="text-muted dropdown-title">Course Name</span> <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item sort" data-sort="courses_Name">Course Name</button>
                            <button class="dropdown-item sort" data-sort="instructor">Instructor</button>
                            <button class="dropdown-item sort" data-sort="fees">Amount</button>
                            <button class="dropdown-item sort" data-sort="status">Status</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card mt-0">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="courses_Name">Course Name</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="category">Category</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="instructor">Instructor</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="lessons">Lessons</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="duration">Duration</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="fees">Fees</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="react.png" class="avatar-xxs rounded"> <a href="apps-learning-overview" class="text-reset courses_Name">Advanced React and Redux</a>
                                    </div>
                                </td>
                                <td class="category">
                                    React Development
                                </td>
                                <td class="instructor">
                                    Ayaan Bowen
                                </td>
                                <td class="lessons">
                                    15
                                </td>
                                <td class="duration">2 Years</td>
                                <td>
                                    <span class="fw-medium fees">$278.12</span>
                                </td>
                                <td>
                                    <span class="badge bg-info-subtle text-info status">Open</span>
                                </td>
                                <td>
                                    <h5 class="fs-md fw-medium mb-0 rating"><i class="ph-star align-baseline text-warning"></i> 4.5</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="courses_Name">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="shopify.png" class="avatar-xxs rounded"> <a href="apps-learning-overview" class="text-reset">The Complete Shopify Dropship course</a>
                                    </div>
                                </td>
                                <td class="category">
                                    Shopify Development
                                </td>
                                <td class="instructor">
                                    Jansh Brown
                                </td>
                                <td class="lessons">
                                    27
                                </td>
                                <td class="duration">6 Months</td>
                                <td>
                                    <span class="fw-medium fees">$149.00</span>
                                </td>
                                <td>
                                    <span class="badge bg-info-subtle text-info status">Open</span>
                                </td>
                                <td>
                                    <h5 class="fs-md fw-medium mb-0 rating"><i class="ph-star align-baseline text-warning"></i> 4.5</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/learning/sketch.png') }}" alt="sketch.png" class="avatar-xxs rounded"> <a href="apps-learning-overview" class="text-reset courses_Name">UI/UX Style guide With Sketch</a>
                                    </div>
                                </td>
                                <td class="category">
                                    Graphic Design
                                </td>
                                <td class="instructor">
                                    Ayaan Bowen
                                </td>
                                <td class="lessons">
                                    16
                                </td>
                                <td class="duration">3 Months</td>
                                <td>
                                    <span class="fw-medium fees">$215.00</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger status">Close</span>
                                </td>
                                <td>
                                    <h5 class="fs-md fw-medium mb-0 rating"><i class="ph-star align-baseline text-warning"></i> 4.9</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/learning/webpack.png') }}" alt="webpack.png" class="avatar-xxs rounded"> <a href="apps-learning-overview" class="text-reset courses_Name">Digital Marketing</a>
                                    </div>
                                </td>
                                <td class="category">
                                    Marketing & Management
                                </td>
                                <td class="instructor">
                                    Prezy Mark
                                </td>
                                <td class="lessons">
                                    65
                                </td>
                                <td class="duration">2 Years</td>
                                <td>
                                    <span class="fw-medium fees">$199.00</span>
                                </td>
                                <td>
                                    <span class="badge bg-info-subtle text-info status">Open</span>
                                </td>
                                <td>
                                    <h5 class="fs-md fw-medium mb-0 rating"><i class="ph-star align-baseline text-warning"></i> 4.3</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="laravel.png" class="avatar-xxs rounded courses_Name"> <a href="apps-learning-overview" class="text-reset">Master Laravel for Beginners &amp; Intermediate</a>
                                    </div>
                                </td>
                                <td class="category">
                                    Laravel Development
                                </td>
                                <td class="instructor">
                                    Nelson Schaden
                                </td>
                                <td class="lessons">
                                    21
                                </td>
                                <td class="duration">8 Months</td>
                                <td>
                                    <span class="fw-medium fees">$379.99</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger status">Close</span>
                                </td>
                                <td>
                                    <h5 class="fs-md fw-medium mb-0 rating"><i class="ph-star align-baseline text-warning"></i> 4.7</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ URL::asset('build/images/learning/tailwindcss.png') }}" alt="" class="avatar-xxs rounded courses_Name"> <a href="apps-learning-overview" class="text-reset">Tailwind CSS From Scratch</a>
                                    </div>
                                </td>
                                <td class="category">
                                    Web Design
                                </td>
                                <td class="instructor">
                                    Domenic Dach
                                </td>
                                <td class="lessons">
                                    53
                                </td>
                                <td class="duration">1 Months</td>
                                <td>
                                    <span class="fw-medium fees">$473.08</span>
                                </td>
                                <td>
                                    <span class="badge bg-info-subtle text-info status">Open</span>
                                </td>
                                <td>
                                    <h5 class="fs-md fw-medium mb-0 rating"><i class="ph-star align-baseline text-warning"></i> 4.8</h5>
                                </td>
                            </tr><!-- end tr -->
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
                <div class="align-items-center mt-4 pt-2 row">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">6</span> Results
                        </div>
                    </div>
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <div class="pagination-wrap hstack gap-2 justify-content-center">
                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="javascript:void(0)">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h6 class="card-title mb-0">Overview</h6>
                    </div>
                    <div class="dropdown flex-shrink-0">
                        <button class="btn avatar-xs btn-subtle-secondary p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-share"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#!"><i class="bi bi-facebook me-1 align-baseline"></i> Facebook</a></li>
                            <li><a class="dropdown-item" href="#!"><i class="bi bi-whatsapp me-1 align-baseline"></i> Whatsapp</a></li>
                            <li><a class="dropdown-item" href="#!"><i class="bi bi-instagram me-1 align-baseline"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mb-4 pb-2">
                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-md rounded-circle">
                    <h6 class="fs-md mt-3 mb-1"><a href="pages-profile" class="text-reset">Richard Marshall <i class="bi bi-patch-check-fill text-info"></i></a></h6>
                    <p class="text-muted mb-4">Create Designer</p>
                    <div class="row g-3">
                        <div class="col-6 border-end border-dashed">
                            <div>
                                <h5>1549</h5>
                                <p class="text-muted mb-0">Students</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <h5>137</h5>
                                <p class="text-muted mb-0">Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 bg-light rounded courses-calendar-dashboard">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <div class="flex-shrink-0">
                            <button class="btn btn-sm btn-secondary"><i class="bi bi-chevron-left"></i></button>
                        </div>
                        <h6 class="flex-grow-1 mb-0 text-center fs-md">
                            December - 2023
                        </h6>
                        <div class="flex-shrink-0">
                            <button class="btn btn-sm btn-secondary"><i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-around date-calendar flex-wrap">
                        <a href="#!" class="week flex-shrink-0 active">
                            <h6 class="mb-3">S</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">21</div>
                            </div>
                        </a>
                        <a href="#!" class="week flex-shrink-0">
                            <h6 class="mb-3">M</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">22</div>
                            </div>
                        </a>
                        <a href="#!" class="week flex-shrink-0">
                            <h6 class="mb-3">T</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">23</div>
                            </div>
                        </a>
                        <a href="#!" class="week flex-shrink-0">
                            <h6 class="mb-3">W</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">24</div>
                            </div>
                        </a>
                        <a href="#!" class="week flex-shrink-0">
                            <h6 class="mb-3">T</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">25</div>
                            </div>
                        </a>
                        <a href="#!" class="week flex-shrink-0">
                            <h6 class="mb-3">F</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">26</div>
                            </div>
                        </a>
                        <a href="#!" class="week flex-shrink-0">
                            <h6 class="mb-3">S</h6>
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle">27</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-4">
                    <h6 class="card-title mb-3">Upcoming Schedule</h6>

                    <div class="card border-start border-primary border-3">
                        <div class="card-body">
                            <A href="apps-learning-overview" class="btn btn-primary btn-icon btn-sm float-end"><i class="bi bi-arrow-right"></i></A>
                            <h6 class="text-truncate"><a href="#!" class="text-reset">UI/UX style guide with sketch</a></h6>
                            <p class="text-muted mb-0"><i class="bi bi-calendar2 align-baseline me-1"></i> Today <i class="bi bi-clock align-baseline mx-1"></i> 02:18 PM</p>
                        </div>
                    </div>
                    <div class="card border-start border-primary border-3">
                        <div class="card-body">
                            <A href="apps-learning-overview" class="btn btn-primary btn-icon btn-sm float-end"><i class="bi bi-arrow-right"></i></A>
                            <h6 class="text-truncate"><a href="#!" class="text-reset">Advanced React And Redux</a></h6>
                            <p class="text-muted mb-0"><i class="bi bi-calendar2 align-baseline me-1"></i> 04 April, 2023 <i class="bi bi-clock align-baseline mx-1"></i> 03:00 to 04:00 PM</p>
                        </div>
                    </div>
                    <div class="card border-start border-primary border-3">
                        <div class="card-body">
                            <A href="apps-learning-overview" class="btn btn-primary btn-icon btn-sm float-end"><i class="bi bi-arrow-right"></i></A>
                            <h6 class="text-truncate"><a href="#!" class="text-reset">Tailwind CSS From Scratch</a></h6>
                            <p class="text-muted mb-0"><i class="bi bi-calendar2 align-baseline me-1"></i> 08 April, 2023 <i class="bi bi-clock align-baseline mx-1"></i> 07:36 AM</p>
                        </div>
                    </div>
                    <div class="card border-start border-primary border-3">
                        <div class="card-body">
                            <A href="apps-learning-overview" class="btn btn-primary btn-icon btn-sm float-end"><i class="bi bi-arrow-right"></i></A>
                            <h6 class="text-truncate"><a href="#!" class="text-reset">REST APIs With Flask</a></h6>
                            <p class="text-muted mb-0"><i class="bi bi-calendar2 align-baseline me-1"></i> 15 April, 2023 <i class="bi bi-clock align-baseline mx-1"></i> 10:11 PM</p>
                        </div>
                    </div>
                    <div class="card border-start border-primary border-3">
                        <div class="card-body">
                            <A href="apps-learning-overview" class="btn btn-primary btn-icon btn-sm float-end"><i class="bi bi-arrow-right"></i></A>
                            <h6 class="text-truncate"><a href="#!" class="text-reset">Asp.Net Core 7 True Ultimate Guide</a></h6>
                            <p class="text-muted mb-0"><i class="bi bi-calendar2 align-baseline me-1"></i> 24 May, 2023 <i class="bi bi-clock align-baseline mx-1"></i> 07:00 to 10:00 AM</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-primary overflow-hidden mb-0">
                    <div class="position-absolute bottom-0" style="opacity: 0.15;">
                        <img src="{{ URL::asset('build/images/effect-pattern/pattern-2.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body position-relative">
                        <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="22">
                        <h6 class="text-white fs-md fw-medium mt-4">Go Premium</h6>
                        <p class="text-white-75">Explore 500+ courses with lifetime membership by themesbrand</p>
                        <a href="#!" class="icon-link icon-link-hover stretched-link link-light">Premium Now <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-learning.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
