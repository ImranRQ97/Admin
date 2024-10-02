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
Instructors
@endslot
@slot('title')
Grid View
@endslot
@endcomponent

<div class="card">
    <div class="card-body">
        <div class="row align-items-center g-2">
            <div class="col-lg-3 me-auto">
                <h6 class="card-title mb-0">Instructors List <span class="badge bg-primary ms-1 align-baseline">1452</span></h6>
            </div>
            <!--end col-->
            <div class="col-lg-2">
                <div class="search-box">
                    <input type="text" class="form-control search" placeholder="Search for instructors, email or something...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-auto">
                <div class="hstack gap-2">
                    <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Instructor</a>
                    <a href="apps-instructors-grid" class="btn btn-subtle-primary active btn-icon ms-auto"><i class="bi bi-grid"></i></a>
                    <a href="apps-instructors-list" class="btn btn-subtle-primary btn-icon"><i class="bi bi-list-task"></i></a>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
</div>
<!--end card-->

<div class="row row-cols-xxl-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-1">
                        <label class="form-check-label" for="checkbox-1"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Ayaan Bowen</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Shopify Development</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:ayaan@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> ayaanbowen@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:+(152) 15963 24785" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> +(152) 15963 24785</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 134 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.5 </span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-2" checked>
                        <label class="form-check-label" for="checkbox-2"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Priscilla Takahashi</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Project Manager</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:priscilla@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> priscilla@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:+(122) 0397 3076" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> +(122) 0397 3076</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 160 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-1 border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.8</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-3">
                        <label class="form-check-label" for="checkbox-3"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Martin Roth</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Graphic Designer</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:martinroth@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> martinroth@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:781 789 3874" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 781 789 3874</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 362 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.3</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-4">
                        <label class="form-check-label" for="checkbox-4"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Jennifer Masten</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">React Development</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:jennifermasten@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> jennifermasten@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:918 664 0738" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 918 664 0738</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 241 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.6</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-5">
                        <label class="form-check-label" for="checkbox-5"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Hazel Gordon</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Laravel Development</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:hazelgordon@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> hazelgordon@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:617 398 3263" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 617 398 3263</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 237 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.8</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-6">
                        <label class="form-check-label" for="checkbox-6"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Michael Johnson</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Flask Development</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:michaeljohnson@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> michaeljohnson@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:02261 95 80 88" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 02261 95 80 88</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 174 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.7</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-7">
                        <label class="form-check-label" for="checkbox-7"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Angela Fryar</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Web Designer</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:angelafryar@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> angelafryar@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:089 54 77 91" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 089 54 77 91</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 99 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.9</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-8">
                        <label class="form-check-label" for="checkbox-8"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Anthony Gardner</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Marketing & Management</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:anthonygardner@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> anthonygardner@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:09404 91 69 16" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 09404 91 69 16</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 110 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.6</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-9" checked>
                        <label class="form-check-label" for="checkbox-9"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">James Bradley</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Marketing & Management</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:jamesbradley@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> jamesbradley@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:040 67 58 18" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 040 67 58 18</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 159 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.3</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="form-check flex-grow-1">
                        <input class="form-check-input" type="checkbox" value="1" id="checkbox-10">
                        <label class="form-check-label" for="checkbox-10"></label>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item edit-list" href="#addInstructor" data-edit-id="9" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                <li><a class="dropdown-item remove-list" href="#deleteRecordModal" data-remove-id="9" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-3">
                    <div class="position-relative d-inline-block">
                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-md rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <a href="apps-instructors-overview">
                        <h6 class="fs-md mt-4 mb-1">Brenda Cornett</h6>
                    </a>
                    <p class="text-muted fs-sm mb-0">Marketing & Management</p>
                </div>
                <ul class="list-unstyled text-muted vstack gap-2 mb-0">
                    <li>
                        <a href="mailto:brendacornett@steex.com" class="text-reset text-truncate"><i class="bi bi-envelope align-baseline me-1"></i> brendacornett@steex.com</a>
                    </li>
                    <li>
                        <a href="tel:03586 68 04 69" class="text-reset"><i class="bi bi-telephone align-baseline me-1"></i> 03586 68 04 69</a>
                    </li>
                    <li>
                        <i class="ph ph-graduation-cap align-baseline me-1"></i> 176 Courses
                    </li>
                </ul>
            </div>
            <div class="card-body border-top border-dashed d-flex align-items-center">
                <div class="flex-grow-1">
                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.3</span>
                </div>
                <div class="flex-shrink-0"></div>
                <a href="apps-instructors-overview" class="link-effect">Overview <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
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
            Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">10</span> Results
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
                <li><a class="page" href="#" data-i="3" data-page="10">3</a></li>
            </ul>
            <a class="page-item pagination-next" href="#">
                Next
            </a>
        </div>
    </div>
    <!--end col-->
</div>

<!-- Modal -->
<div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header">
                <h5 class="modal-title" id="addInstructorModalLabel">Add Instructor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addInstructorModal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field">
                    <input type="hidden" id="rating-field">
                    <div class="mb-3">
                        <label class="form-label">Instructor Image<span class="text-danger">*</span></label>
                        <div class="dropzone instrucor-dropzone border border-1 border-dashed text-center" style="min-height: 80px;">
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

                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
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

                    <div class="row">


                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="instructor-name-input" class="form-label">Instructor Name<span class="text-danger">*</span></label>
                                <input type="text" id="instructor-name-input" class="form-control" placeholder="Enter instructor name" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="email-input" class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" id="email-input" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="total-courses-input" class="form-label">Total Courses<span class="text-danger">*</span></label>
                                <input type="number" id="total-courses-input" class="form-control" placeholder="Total courses" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="experience-input" class="form-label">Experience<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="experience-input" placeholder="Experience" required>
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
                                <label for="contact-input" class="form-label">Contact<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="contact-input" placeholder="Contact no" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="status-input" class="form-label">Status<span class="text-danger">*</span></label>

                                <select class="form-select" id="status-input">
                                    <option value="">Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Unactive">Unactive</option>
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
                        <button type="submit" class="btn btn-primary" id="add-btn">Add Instructor</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal-content -->
    </div>
</div>
<!--end modal-->

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
<script src="{{ URL::asset('build/js/pages/learning-instructors-grid.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
