@extends('layouts.master')
@section('title')
@lang('translation.list-view')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Instructors
@endslot
@slot('title')
List View
@endslot
@endcomponent

                    <div id="instructorList">

                        <div class="row">
                            <div class="col-xl-2 col-sm-6">
                                <div class="card card-height-100">
                                    <div class="card-body text-center">
                                        <div id="total_instructors" data-colors='["--tb-primary"]' class="apex-charts radialbar-chart-effect-primary" dir="ltr"></div>
                                        <h5 class="card-title mt-3">Total Instructors</h5>
                                        <p class="text-muted mb-0"><span class="text-success"><i class="ph ph-trend-up align-middle me-1"></i> 07.78%</span> than last week</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-2 col-sm-6">
                                <div class="card card-height-100">
                                    <div class="card-body text-center">
                                        <div id="total_courses" data-colors='["--tb-secondary"]' class="apex-charts radialbar-chart-effect-secondary" dir="ltr"></div>
                                        <h5 class="card-title mt-3">Total Courses</h5>
                                        <p class="text-muted mb-0"><span class="text-danger"><i class="ph ph-trend-down align-middle me-1"></i> 01.39%</span> than last week</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="h6 card-title flex-grow-1 mb-0">Instructor Activity</div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-subtle-secondary btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-subtle-secondary btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-subtle-secondary btn-sm">
                                                1Y
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body ps-2">
                                        <div id="instuctor_activity" data-colors='["--tb-primary", "--tb-light", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center g-2">
                                            <div class="col-lg-3 me-auto">
                                                <h6 class="card-title mb-0">Instructors List <span class="badge bg-primary ms-1 align-baseline">235</span></h6>
                                            </div><!--end col-->
                                            <div class="col-xl-2 col-lg-3 col-sm-5">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search for instructors, email, contact number or something...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-sm-auto">
                                                <div class="hstack gap-2">
                                                    <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                    <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Instructor</a>
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                    </div>
                                    <div class="card-body mt-3">
                                        <div class="table-responsive table-card">
                                            <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                                <label class="form-check-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor_id">ID</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor">Instructor</th> 
                                                        <th scope="col" class="sort cursor-pointer" data-sort="courses_total">Total Courses</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="email">Email</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="experience">Experience</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="students">Students</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="contact">contact</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child">
                                                                <label class="form-check-label"></label>
                                                            </div>
                                                        </td>
                                                        <td class="instructor_id"><a href="apps-instructors-overview" class="fw-medium link-primary">#TBSI159001</a></td>
                                                        <td class="instructor">
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-xxs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <a href="apps-instructors-overview" class="text-reset">Themesbrand</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="courses_total">159</td>
                                                        <td class="email">themesbrand@steex.com</td>
                                                        <td class="experience">2 Years</td>
                                                        <td class="students">49</td>
                                                        <td class="contact">+(123) 15962 32145</td>
                                                        <td class="rating"><i class="bi bi-star-fill text-warning align-baseline me-1"></i> <span class="rating-value">4.9</span></td>
                                                        <td class="status"><span class="badge bg-success-subtle text-success">Active</span></td>
                                                        <td>
                                                            <ul class="d-flex gap-2 list-unstyled mb-0">
                                                                <li>
                                                                    <a href="apps-instructors-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                            <div class="noresult" style="display: none">
                                                <div class="text-center py-4">
                                                    <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 164+ instructors We did not find any instructors for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                                            <div class="col-sm">
                                                <div class="text-muted text-center text-sm-start">
                                                    Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-sm-auto mt-3 mt-sm-0">
                                                <div class="pagination-wrap hstack justify-content-center gap-2">
                                                    <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                                        Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="javascript:void(0)">
                                                        Next
                                                    </a>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

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
                            </div><!--end col-->

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="total-courses-input" class="form-label">Total Courses<span class="text-danger">*</span></label>
                                    <input type="number" id="total-courses-input" class="form-control" placeholder="Total courses" required>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="experience-input" class="form-label">Experience<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="experience-input" placeholder="Experience" required>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="students-input" class="form-label">Students</label>
                                    <input type="number" id="students-input" class="form-control" placeholder="Students" required>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="contact-input" class="form-label">Contact<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contact-input" placeholder="Contact no" required>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="status-input" class="form-label">Status<span class="text-danger">*</span></label>
    
                                    <select class="form-select" id="status-input">
                                        <option value="">Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Unactive">Unactive</option>
                                    </select>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
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
    </div><!--end modal-->
    
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
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/learning-instructors-list.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection