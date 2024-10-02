@extends('layouts.master')
@section('title')
@lang('translation.grid-view')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Courses
@endslot
@slot('title')
Grid View
@endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-3 order-last order-md-first me-auto">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Search for agent, email, address or something...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-2">
                        <div>
                            <select class="form-select" id="status-type-input" data-choices data-choices-search-false>
                                <option value="Active">Active</option>
                                <option value="Unactive">Unactive</option>
                            </select>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-auto text-end">
                        <div class="d-flex gap-2">
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addCourse"><i class="bi bi-person-plus align-baseline me-1"></i> Add Course</button>
                            <a href="apps-learning-grid" class="active btn btn-subtle-primary btn-icon ms-auto"><i class="bi bi-grid"></i></a>
                            <a href="apps-learning-list" class="btn btn-subtle-primary btn-icon"><i class="bi bi-list-task"></i></a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end row-->
</div>
<!--end col-->

<div class="row row-cols-xl-5 row-cols-sm-2 row-cols-1">
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-info-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-danger-subtle text-danger">Intermediate</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle active btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Advanced React and Redux</a></h6>
                <p class="text-muted">React Development</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 6 Months</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 256</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 15 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Themesbrand</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-success-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-success-subtle text-success">Beginner</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">The Complete Shopify Dropship course</a></h6>
                <p class="text-muted">Shopify Development</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 1 Years</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 120</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 68 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-3.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Ayaan Bowen</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-warning-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/sketch.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/sketch.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-info-subtle text-info">Advance</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">UI/UX style guide with sketch</a></h6>
                <p class="text-muted">Graphic Design</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 7 Months</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 120</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 68 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-6.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Zachary Stokes</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-primary-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/webpack.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/webpack.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-danger-subtle text-danger">Intermediate</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle active btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Digital Marketing</a></h6>
                <p class="text-muted">Marketing & Management</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 2 Years</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 146</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 93 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-4.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Nelson Schaden</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-danger-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-info-subtle text-info">Advance</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Master Laravel for Beginners & Intermediate</a></h6>
                <p class="text-muted">Laravel Development</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 1 Years</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 84</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 57 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-9.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Ophelia Steuber</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-dark-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/flask.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/flask.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-success-subtle text-success">Beginner</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">REST APIs with Flask</a></h6>
                <p class="text-muted">Flask Development</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 3 Years</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 364</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 230 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Sarai Schmidt</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-primary-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/core.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/core.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-danger-subtle text-danger">Intermediate</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle active btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Asp.Net Core 7 True Ultimate Guide</a></h6>
                <p class="text-muted">Asp.Net Development</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 8 Years</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 321</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 49 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-10.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Deondre Huel</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-info-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/tailwindcss.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/tailwindcss.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-success-subtle text-success">Beginner</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Tailwind CSS From Scratch</a></h6>
                <p class="text-muted">Web Design</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 8 Months</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 362</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 101 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-8.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Nelson Schaden</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-danger-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/brands/firefox.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/brands/firefox.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-info-subtle text-info">Advance</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Conflict Management with Emotional Intelligence</a></h6>
                <p class="text-muted">Marketing & Management</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 1 Years</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 159</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 43 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-7.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Prezy Mark</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card overflow-hidden">
            <div class="card-body bg-info-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/mysql.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/mysql.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center">
                    <div class="flex-grow-1">
                        <span class="badge bg-danger-subtle text-danger">Intermediate</span>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                            <span class="icon-on"><i class="bi bi-star"></i></span>
                            <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                        </button>
                    </div>
                </div>
                <h6 class="text-truncate fs-md text-capitalize"><a href="apps-learning-overview" class="text-reset">Fundamentals of Database Engineering</a></h6>
                <p class="text-muted">PHP Development</p>
                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                    <li>
                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-secondary me-1"></i> 9 Months</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-secondary me-1"></i> 320</p>
                    </li>
                    <li>
                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-secondary me-1"></i> 87 Lessons</p>
                    </li>
                </ul>
            </div>
            <div class="card-body border-top hstack align-items-center gap-2">
                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/32/avatar-5.jpg') }}" alt="" class="avatar-xs rounded-circle">
                    </div>
                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Domenic Dach</a></h6>
                </div>
                <div class="dropdown flex-shrink-0">
                    <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apps-learning-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#addCourse"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row align-items-center mb-3">
    <div class="col-sm">
        <div class="text-muted text-center text-sm-start">
            Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
        </div>
    </div>
    <!--end col-->
    <div class="col-sm-auto mt-3 mt-sm-0">
        <div class="pagination-wrap hstack justify-content-center gap-2">
            <a class="page-item pagination-prev disabled" href="#">
                Previous
            </a>
            <ul class="pagination listjs-pagination mb-0">
                <li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li>
                <li><a class="page" href="#" data-i="2" data-page="10">2</a></li>
            </ul>
            <a class="page-item pagination-next" href="#">
                Next
            </a>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->


<!-- Modal -->
<div class="modal fade" id="addCourse" tabindex="-1" aria-labelledby="addCourseLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-danger p-3">
                <h5 class="modal-title text-white" id="addCourseLabel">Add Course</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <div class="mb-3">
                        <label class="form-label">Course Image<span class="text-danger">*</span></label>
                        <div class="dropzone course-dropzone border border-1 border-dashed text-center" style="min-height: 80px;">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick my-3">
                                <div class="mb-3">
                                    <i class="bi bi-cloud-download fs-1"></i>
                                </div>

                                <h5 class="fs-md mb-0">Drop image here or click to upload.</h5>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0" id="course-preview">
                            <li class="mt-2" id="course-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex flex-wrap gap-2 p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded p-2">
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{ URL::asset('build/images/new-document.png') }}" alt="Dropzone-Image">
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

                    <div class="mb-3">
                        <label for="course-title-input" class="form-label">Course title<span class="text-danger">*</span></label>
                        <input type="text" id="course-title-input" class="form-control" placeholder="Enter course title" required>
                    </div>


                    <div class="mb-3">
                        <label for="course-category-input" class="form-label">Course Category<span class="text-danger">*</span></label>

                        <select class="form-select" id="course-category-input" data-choices>
                            <option value="">Select Course Category</option>
                            <option value="Marketing & Management">Marketing & Management</option>
                            <option value="React Development">React Development</option>
                            <option value="Shopify Development">Shopify Development</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Laravel Development">Laravel Development</option>
                            <option value="Flask Development">Flask Development</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Asp.Net Development">Asp.Net Development</option>
                            <option value="Marketing & Management">Marketing & Management</option>
                            <option value="PHP Development">PHP Development</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Data Science">Data Science</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="lessons-input" class="form-label">Lessons<span class="text-danger">*</span></label>
                                <input type="number" id="lessons-input" class="form-control" placeholder="Lessons" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="students-input" class="form-label">Students</label>
                                <input type="number" id="students-input" class="form-control" placeholder="Students" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="duration-input" class="form-label">Duration Time<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="duration-input" placeholder="Select duration" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="Property-price-input" class="form-label">Price<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="Property-price-input" placeholder="0.00" required>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="status-input" class="form-label">Status<span class="text-danger">*</span></label>

                                <select class="form-select" id="status-input" data-choices data-choices-search-false>
                                    <option value="">Select Status</option>
                                    <option value="Open">Open</option>
                                    <option value="Close">Close</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Add Course</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal-content -->
    </div>
</div>
<!--end add Property modal-->

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
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/learning-grid.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection