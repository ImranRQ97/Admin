@extends('layouts.master')
@section('title')
@lang('translation.overview')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Instructors
@endslot
@slot('title')
Overview
@endslot
@endcomponent

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card overflow-hidden">
                                <div class="rounded instructor-profile position-relative" style="background-image: url('build/images/learning/img-01.jpg');">
                                    <div class="bg-overlay bg-primary"></div>
                                    <a href="" class="btn btn-secondary position-absolute end-0 top-0 m-3"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit Profile</a>
                                </div>
                                <div class="card-body">
                                    <div class="position-relative">
                                        <div class="mt-n5">
                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-lg rounded-circle p-1 mt-n4">
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="row justify-content-between gy-4">
                                            <div class="col-xl-4 col-lg-4">
                                                <h5 class="fs-xl">Ayaan Bowen <span class="badge border border-2 border-white rounded-circle bg-success p-1"><span></span></span></h5>
                                                <div class="hstack gap-3 mb-3 text-muted">
                                                    <div><i class="bi bi-geo-alt align-middle me-1"></i> Phoenix, USA</div>
                                                    <div>
                                                        <i class="ph ph-chalkboard align-middle me-1"></i> 231 Courses
                                                    </div>
                                                    <div>
                                                        <i class="ph ph-student align-middle me-1"></i> 874 Students
                                                    </div>
                                                </div>
                                                <p class="mb-2">Shopify Developer</p>
                                                <p class="text-muted">Shopify developers are experts in building online stores, themes and apps using the shopify platform.</p>
                    
                                                <div class="d-flex align-items-center gap-2 mb-3">
                                                    <div class="flex-shrink-0">
                                                        <i class="ph ph-graduation-cap align-middle"></i> 
                                                    </div>
                                                    Master of Engineering in California State University System
                                                </div>
                                                
                                                <div class="hstack gap-2">
                                                    <button type="button" class="btn btn-primary custom-toggle" data-bs-toggle="button" aria-pressed="false">
                                                        <span class="icon-on"><i class="bi bi-person me-1"></i> Connect</span>
                                                        <span class="icon-off"><i class="bi bi-check-lg me-1"></i> Unconnect</span>
                                                    </button>
                                                    <button type="button" class="btn btn-subtle-secondary btn-icon"><i class="bi bi-chat-left-text"></i></button>
                                                    <div class="dropdown">
                                                        <button class="btn btn-subtle-info btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-5">
                                                <div>
                                                    <p class="text-muted fw-medium mb-2">Language Knows</p>
                                                    <ul class="list-inline mb-4">
                                                        <li class="list-inline-item">
                                                            <span class="badge bg-info-subtle text-info">English</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="badge bg-info-subtle text-info">Russian</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="badge bg-info-subtle text-info">Chinese</span>
                                                        </li>
                                                    </ul>
                                                </div>
                    
                                                <div>
                                                    <p class="text-muted fw-medium mb-2">Featured Skills</p>
                                                    <ul class="d-flex gap-2 flex-wrap list-unstyled mb-0">
                                                        <li>
                                                            <span class="badge bg-dark-subtle text-dark">UI/UX Design</span>
                                                        </li>
                                                        <li>
                                                            <span class="badge bg-dark-subtle text-dark">Shopify Development</span>
                                                        </li>
                                                        <li>
                                                            <span class="badge bg-dark-subtle text-dark">Social Ads Management</span>
                                                        </li>
                                                        <li>
                                                            <span class="badge bg-dark-subtle text-dark">Content SEO</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body pb-1">
                                    <h5 class="card-title mb-0 flex-shrink-0">Student Activity</h5>
                                </div>
                                <div class="card-body pt-0 ps-1 mt-lg-n4">
                                    <div id="session_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="card">
                        <div class="card-body d-flex align-items-center flex-wrap gap-2">
                            <h5 class="card-title flex-grow-1 mb-0">Portfolio Overview</h5>
                            <div class="flex-shrink-0">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#coursesList" role="tab" aria-selected="true">
                                            Courses List
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#studentsList" role="tab" aria-selected="false" tabindex="-1">
                                            Students
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false" tabindex="-1">
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane active" id="coursesList" role="tabpanel">
                            <div id="coursesListTable">
                                <div class="row align-items-center gy-3 mb-2">
                                    <div class="col-lg-3 col-md-6 order-last order-md-first me-auto">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search for courses, price or something...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-6">
                                        <a href="apps-learning-create" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Course</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-custom align-middle table-borderless text-center table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="sort cursor-pointer text-start" data-sort="course_title">Courses Title</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="price">Price</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="duration">Duration</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="students">Students</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="ratings">Ratings</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-success-subtle rounded">
                                                                    <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="avatar-xxs">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="apps-learning-overview"><h6 class="fs-md mb-2 course_title">The Complete Shopify Dropship course</h6></a>
                                                            <p class="text-muted mb-0">Shopify Development</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="price">$451.32</td>
                                                <td class="duration">6 Months</td>
                                                <td class="students">
                                                    745
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning ratings"><i class="bi bi-star-fill align-baseline me-1"></i> 4.8</span>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success status">Live</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="apps-learning-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="apps-learning-create" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-warning-subtle rounded">
                                                                    <img src="{{ URL::asset('build/images/learning/sketch.png') }}" alt="" class="avatar-xxs">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="apps-learning-overview"><h6 class="fs-md mb-2 course_title">UI/UX Style guide With Sketch</h6></a>
                                                            <p class="text-muted mb-0">Graphic Design</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="price">$239.99</td>
                                                <td class="duration">9 Months</td>
                                                <td class="students">
                                                    654
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning ratings"><i class="bi bi-star-fill align-baseline me-1"></i> 4.3</span>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success status">Live</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="apps-learning-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="apps-learning-create" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-danger-subtle rounded">
                                                                    <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="avatar-xxs">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="apps-learning-overview"><h6 class="fs-md mb-2 course_title">Master Laravel for Beginners & Intermediate</h6></a>
                                                            <p class="text-muted mb-0">Laravel Development</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="price">$159.27</td>
                                                <td class="duration">1 Years</td>
                                                <td class="students">
                                                    321
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning ratings"><i class="bi bi-star-fill align-baseline me-1"></i> 4.9</span>
                                                </td>
                                                <td><span class="badge bg-warning-subtle text-warning status">Pending</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="apps-learning-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="apps-learning-create" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-dark-subtle rounded">
                                                                    <img src="{{ URL::asset('build/images/learning/flask.png') }}" alt="" class="avatar-xxs">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="apps-learning-overview"><h6 class="fs-md mb-2 course_title">REST APIs With Flask</h6></a>
                                                            <p class="text-muted mb-0">Flask Development</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="price">$198.16</td>
                                                <td class="duration">2 Years</td>
                                                <td class="students">
                                                    349
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning ratings"><i class="bi bi-star-fill align-baseline me-1"></i> 4.5</span>
                                                </td>
                                                <td><span class="badge bg-danger-subtle text-danger status">Cancel</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="apps-learning-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="apps-learning-create" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-danger-subtle rounded">
                                                                    <img src="{{ URL::asset('build/images/brands/firefox.png') }}" alt="" class="avatar-xxs">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="apps-learning-overview"><h6 class="fs-md mb-2 course_title">Conflict Management with Emotional Intelligence</h6></a>
                                                            <p class="text-muted mb-0">Marketing & Management</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="price">$324.48</td>
                                                <td class="duration">8 Months</td>
                                                <td class="students">
                                                    745
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning ratings"><i class="bi bi-star-fill align-baseline me-1"></i> 4.6</span>
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success status">Live</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="apps-learning-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="apps-learning-create" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center py-4">
                                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 164+ Courses We did not find any Courses for you search.</p>
                                        </div>
                                    </div>
                                </div><!--end course table-->
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm">
                                        <div class="text-muted text-center text-sm-start">
                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">10</span> Results
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                        <div class="pagination-wrap hstack justify-content-center gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li>
                                                <li><a class="page" href="#" data-i="2" data-page="10">2</a></li>
                                                <li><a class="page" href="#" data-i="3" data-page="10">3</a></li>
                                            </ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div><!--end course tab-->
                        <div class="tab-pane" id="studentsList" role="tabpanel">
                            <div id="studentsListTable">
                                <div class="row align-items-center gy-3 mb-2">
                                    <div class="col-lg-3 col-md-6 order-last order-md-first me-auto">
                                        <div class="search-box">
                                            <input type="text" class="form-control search" placeholder="Search for courses, price or something...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-6">
                                        <a href="#!" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Student</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-custom align-middle table-borderless table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="sort cursor-pointer text-start" data-sort="students_name">Students Name</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="students_email">Email Address</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="students_contact">Contact Number</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="students_courses">Courses</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="joined_date">Joined Date</th>
                                                <th scope="col" class="sort cursor-pointer" data-sort="students_status">Status</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-sm rounded">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="pages-profile"><h6 class="fs-md mb-2 students_name">Soledad Vandervort</h6></a>
                                                            <p class="text-muted mb-0">Students</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="students_email">vandervort@steex.com</td>
                                                <td class="students_contact">+(512) 34682 17935</td>
                                                <td class="students_courses">8</td>
                                                <td class="joined_date">
                                                    12 March, 2023
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success students_status">Active</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="pages-profile" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-profile-settings" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-sm rounded">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="pages-profile"><h6 class="fs-md mb-2 students_name">Marcelino Smith</h6></a>
                                                            <p class="text-muted mb-0">Students</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="students_email">marcelino@steex.com</td>
                                                <td class="students_contact">+(210) 95162 15935</td>
                                                <td class="students_courses">0</td>
                                                <td class="joined_date">
                                                    29 Feb, 2023
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info students_status">New</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="pages-profile" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-profile-settings" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="pages-profile"><h6 class="fs-md mb-2 students_name">Vinnie Huels</h6></a>
                                                            <p class="text-muted mb-0">Students</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="students_email">Vinnie Huels</td>
                                                <td class="students_contact">+(105) 93521 23165</td>
                                                <td class="students_courses">2</td>
                                                <td class="joined_date">
                                                    06 Feb, 2023
                                                </td>
                                                <td><span class="badge bg-danger-subtle text-danger students_status">Unactive</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="pages-profile" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-profile-settings" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-sm rounded">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="pages-profile"><h6 class="fs-md mb-2 students_name">Deondre Huel</h6></a>
                                                            <p class="text-muted mb-0">Students</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="students_email">deondrehuel@steex.com</td>
                                                <td class="students_contact">+(532) 35795 15935</td>
                                                <td class="students_courses">9</td>
                                                <td class="joined_date">
                                                    29 Jan, 2023
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success students_status">Active</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="pages-profile" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-profile-settings" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 text-start">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-sm rounded">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="pages-profile"><h6 class="fs-md mb-2 students_name">Zachary Stokes</h6></a>
                                                            <p class="text-muted mb-0">Students</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="students_email">zacharystokes@steex.com</td>
                                                <td class="students_contact">+(44) 98765 32104</td>
                                                <td class="students_courses">3</td>
                                                <td class="joined_date">
                                                    09 Jan, 2023
                                                </td>
                                                <td><span class="badge bg-success-subtle text-success students_status">Active</span></td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0 justify-content-end">
                                                        <li>
                                                            <a href="pages-profile" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-profile-settings" class="btn btn-subtle-secondary btn-icon btn-sm"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center py-4">
                                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 164+ students We did not find any students for you search.</p>
                                        </div>
                                    </div>
                                </div><!--end course table-->
                                <div class="row align-items-center mb-3">
                                    <div class="col-sm">
                                        <div class="text-muted text-center text-sm-start">
                                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">10</span> Results
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                        <div class="pagination-wrap hstack justify-content-center gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li>
                                                <li><a class="page" href="#" data-i="2" data-page="10">2</a></li>
                                                <li><a class="page" href="#" data-i="3" data-page="10">3</a></li>
                                            </ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                        <div class="tab-pane" id="reviews" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <h6 class="card-title flex-grow-1 mb-0">Ratings & Reviews</h6>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReview"><i class="ph-plus-circle align-middle me-1"></i> Add Review</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-lg-2">
                                            <div class="text-center mt-3 mt-lg-5">
                                                <h1 class="mb-3">4.9 <small class="fs-sm text-muted fw-normal">/ 5.0</small></h1>
                                                <div class="text-warning hstack gap-2 justify-content-center mb-2">
                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                </div>
                                                <p class="mb-0"><b>3.5k</b> Reviews</p>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-10">
                                            <div>
                                                <div class="me-lg-n3 pe-lg-4" data-simplebar style="max-height: 500px;">
                                                    <ul class="list-unstyled mb-0" id="review-list">
                                                        <li class="review-list py-2" id="review-1">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">4.5</span>
                                                                    </div>
                                                                    <div class="vr"></div>
                                                                    <div class="flex-grow-1">
                                                                        <p class="mb-0"><a href="#!">Jansh Brown</a></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <span class="text-muted fs-13 mb-0">08 Mar, 2023</span>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <a href="#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                        <a href="#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                    </div>
                                                                </div>
                                                    
                                                                <h6 class="review-title fs-md">Product Quality</h6>
                                                                <p class="review-desc mb-0">" This is an incredible framework worth so much in the right hands! Nowhere else are you going to get so much flexibility and great code for a few dollars. Highly recommend purchasing today! Like right now! "</p>
                                                    
                                                                <div class="d-flex flex-grow-1 gap-2 mt-3">
                                                                    <a href="#" class="avatar-md">
                                                                        <div class="avatar-title bg-light rounded">
                                                                            <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt="img-1.png" class="product-img avatar-sm">
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="avatar-md">
                                                                        <div class="avatar-title bg-light rounded">
                                                                            <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="img-6.png" class="product-img avatar-sm">
                                                                        </div>
                                                                    </a>
                                                                    <a href="#" class="avatar-md">
                                                                        <div class="avatar-title bg-light rounded">
                                                                            <img src="{{ URL::asset('build/images/products/img-7.png') }}" alt="img-7.png" class="product-img avatar-sm">
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="review-list py-2" id="review-2">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">4.0</span>
                                                                    </div>
                                                                    <div class="vr"></div>
                                                                    <div class="flex-grow-1">
                                                                        <p class="mb-0"><a href="#!">Camilla Harber</a></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">03 Mar, 2023</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <a href="#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                        <a href="#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                    </div>
                                                                </div>
                                                    
                                                                <h6 class="review-title fs-md">Product Quality</h6>
                                                                <p class="review-desc mb-0">" We have used your other templates as well and seems it's amazing with the design and code quality. Wish you best for the future updates. Keep updated you will be #1 in near future. "</p>
                                                            </div>
                                                        </li>
                                                    
                                                        <li class="review-list py-2" id="review-3">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">5.0</span>
                                                                    </div>
                                                                    <div class="vr"></div>
                                                                    <div class="flex-grow-1">
                                                                        <p class="mb-0"><a href="#!">Kaylin Bechtelar</a></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">28 Feb, 2023</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <a href="#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                        <a href="#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                    </div>
                                                                </div>
                                                    
                                                                <h6 class="review-title fs-md">Design Quality</h6>
                                                                <p class="review-desc mb-0">" This template is incredibly comprehensive considering how new and modern it is! I bought 8 different admin templates recently and all of them had some good features, but were always missing stuff that you only realise after purchase. I've migrated my site to this template and have yet to find anything missing or lacking! Plus, the online documentation is really easy to use and access and very comprehensive! Well done guys and thank you! "</p>
                                                            </div>
                                                        </li>
                                                    
                                                        <li class="review-list py-2" id="review-4">
                                                            <div class="border border-dashed rounded p-3">
                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">3.5</span>
                                                                    </div>
                                                                    <div class="vr"></div>
                                                                    <div class="flex-grow-1">
                                                                        <p class="mb-0"><a href="#!">Dedrick Shields</a></p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <p class="text-muted fs-13 mb-0">24 Feb, 2023</p>
                                                                    </div>
                                                                    <div class="flex-shrink-0">
                                                                        <a href="#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                        <a href="#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                    </div>
                                                                </div>
                                                    
                                                                <h6 class="review-title fs-md">Feature Availability</h6>
                                                                <p class="review-desc mb-0">" Hello everyone, I would like to suggest here two contents that you could create. Course pages and blog pages. In them you could insert the listing and management of courses and listing and management of blog. The theme is perfect, one of the best purchases I've ever made. "</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div><!--end tab pane-->
                    </div><!--end tab content-->


    <!-- addReview Modal -->
    <div class="modal fade" id="addReview" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addReviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addReviewLabel">Add Review</h1>
                    <button type="button" class="btn-close" id="review-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="tablelist-form" novalidate autocomplete="off">
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field">
                        <div class="mb-3">
                            <label class="form-label d-block">Select Review <span class="text-danger">*</span></label>
                            <div id="basic-rater" class="mx-auto" dir="ltr"></div>
                        </div>
                        <div class="mb-3">
                            <label for="reviewTitle-input" class="form-label">Review Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="reviewTitle-input" placeholder="Title" required>
                        </div>
                        <div class="mb-3">
                            <label for="reviewDesc-input" class="form-label">Review <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="reviewDesc-input" rows="4" placeholder="Enter review" required></textarea>
                        </div>
                        <div>
                            <label class="form-label">Product Images</label>
                            <div class="dropzone my-dropzone text-center" style="min-height: 180px;">
                                <div class="dz-message my-4">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                    </div>
    
                                    <h5>Drop files here or click to upload.</h5>
                                </div>
                            </div>
    
                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                <li class="mt-2" id="dropzone-preview-list">
                                    <!-- This is used as the file preview template -->
                                    <div class="border rounded">
                                        <div class="d-flex p-2">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm bg-light rounded">
                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{ URL::asset('build/images/new-document.png') }}" alt="Dropzone-Image" >
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="pt-1">
                                                    <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                    <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-3">
                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end dropzon-preview -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="ph-x align-middle me-1"></i> Close</button>
                        <button type="submit" class="btn btn-primary">Add Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal-review"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4 fs-base">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this review ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-product">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- deleteRecordModal -->
    <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-5"></i>
                        </div>
                        <div class="mt-4">
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted mx-3 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /deleteRecordModal -->

    
@endsection

@section('script')
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/libs/rater-js/index.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/learning-instructor-overview.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
