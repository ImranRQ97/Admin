@extends('layouts.master')
@section('title')
@lang('translation.category')
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
Category
@endslot
@endcomponent


<div class="row align-items-center mb-4 g-2">
    <div class="col-lg-3 col-md-4 me-auto">
        <div class="search-box">
            <input type="text" class="form-control search" placeholder="Search for category or something...">
            <i class="ri-search-line search-icon"></i>
        </div>
    </div>
    <!--end col-->
    <div class="col-md-auto">
        <a href="#addCategory" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Category</a>
    </div>
    <!--end col-->
</div>

<div class="row row-cols-xl-5 row-cols-sm-2 row-cols-1">
    <div class="col">
        <div class="card card-animate text-center bg-info-subtle border border-info-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">React Development</h5>
                </a>
                <p class="text-muted mb-0">250+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-dark-subtle border border-dark-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/flask.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Flask Development</h5>
                </a>
                <p class="text-muted mb-0">120+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-success-subtle border border-success-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Shopify Development</h5>
                </a>
                <p class="text-muted mb-0">65+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-danger-subtle border border-danger-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/brands/firefox.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Marketing & Management</h5>
                </a>
                <p class="text-muted mb-0">50+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-info-subtle border border-info-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/tailwindcss.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Web Design</h5>
                </a>
                <p class="text-muted mb-0">345+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-primary-subtle border border-primary-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/core.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">ASP.NET Development</h5>
                </a>
                <p class="text-muted mb-0">69+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-danger-subtle border border-danger-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Laravel Development</h5>
                </a>
                <p class="text-muted mb-0">130+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-primary-subtle border border-primary-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/mysql.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">PHP Development</h5>
                </a>
                <p class="text-muted mb-0">25+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-warning-subtle border border-warning-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/sketch.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Graphic Design</h5>
                </a>
                <p class="text-muted mb-0">25+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-dark-subtle border border-dark-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/symfony.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Business & Consulting</h5>
                </a>
                <p class="text-muted mb-0">90+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-info-subtle border border-info-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/learning/webpack.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Digital Marketing</h5>
                </a>
                <p class="text-muted mb-0">75+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-success-subtle border border-success-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/brands/microsoft.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Data Science</h5>
                </a>
                <p class="text-muted mb-0">69+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-danger-subtle border border-danger-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/brands/dribbble.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Writing & Reading</h5>
                </a>
                <p class="text-muted mb-0">20+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-info-subtle border border-info-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/brands/cloud-computing.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Self Development</h5>
                </a>
                <p class="text-muted mb-0">10+ Courses Available</p>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col">
        <div class="card card-animate text-center bg-warning-subtle border border-warning-subtle">
            <div class="card-body p-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-white rounded">
                        <img src="{{ URL::asset('build/images/brands/chrome.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <a href="apps-learning-grid" class="stretched-link">
                    <h5 class="text-truncate">Computer Science</h5>
                </a>
                <p class="text-muted mb-0">10+ Courses Available</p>
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

<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header bg-secondary p-3">
                <h5 class="modal-title text-white" id="addCategoryLabel">Add Category</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>

                    <div class="mb-3">
                        <label class="form-label">Category Image<span class="text-danger">*</span></label>
                        <div class="dropzone category-dropzone border border-1 border-dashed text-center" style="min-height: 80px;">
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

                        <ul class="list-unstyled mb-0" id="category-preview">
                            <li class="mt-2" id="category-preview-list">
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
                        <label for="category-title-input" class="form-label">Category title<span class="text-danger">*</span></label>
                        <input type="text" id="category-title-input" class="form-control" placeholder="Enter category title" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Add Category</button>
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
<script src="{{ URL::asset('build/js/pages/learning-category.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
