@extends('layouts.master')
@section('title')
@lang('translation.list-view')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Agencies
@endslot
@slot('title')
List View
@endslot
@endcomponent

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="agenciesList">
                                <div class="card-header">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-lg-3 col-md-6 order-last order-md-first me-auto">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for agencies, email, address or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-auto text-end">
                                            <div class="row align-items-center g-2">
                                                <div class="col-sm-auto">
                                                    <div class="dropdown card-header-dropdown sortble-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                            </span><span class="text-muted dropdown-title">Since</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <button class="dropdown-item sort" data-sort="since">Since</button>
                                                            <button class="dropdown-item sort" data-sort="agencies_Name">Agencies name</button>
                                                            <button class="dropdown-item sort" data-sort="address">Address</button>
                                                            <button class="dropdown-item sort" data-sort="total_property">Total Property</button>
                                                            <button class="dropdown-item sort" data-sort="employee">Employee</button>
                                                            <button class="dropdown-item sort" data-sort="email">Email</button>
                                                            <button class="dropdown-item sort" data-sort="contact">Contacts</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto ms-auto">
                                                    <div class="d-flex gap-2">
                                                        <button class="btn btn-subtle-danger d-none order-2 order-sm-1" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                        <button class="btn btn-secondary order-1 order-sm-2" data-bs-toggle="modal" data-bs-target="#addAgencies"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Agencies</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                            <label class="form-check-label" for="checkAll"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="agencies_id">#</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="since">Since</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="agencies_Name">Agencies Name</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="address">Address</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="total_property">Total Property</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="employee">Employee</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="email">Email</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="contact">Contacts</th>
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
                                                    <td class="agencies_id"><a href="apps-real-estate-agencies-overview" class="fw-medium link-primary">#TBA001</a></td>
                                                    <td class="since">1980</td>
                                                    <td class="agencies_Name">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="{{ URL::asset('build/images/brands/github.png') }}" alt="" class="avatar-xxs rounded">
                                                            <a href="apps-real-estate-agencies-overview" class="text-reset text-capitalize">GitHub</a>
                                                        </div>
                                                    </td>
                                                    <td class="address">Birmingham, United Kingdom</td>
                                                    <td class="total_property">954</td>
                                                    <td class="employee">32</td>
                                                    <td class="email">github@steex.com</td>
                                                    <td class="contact">(86) 9985-9220</td>
                                                    <td>
                                                        <ul class="d-flex gap-2 list-unstyled mb-0">
                                                            <li>
                                                                <a href="apps-real-estate-agencies-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#addAgencies" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
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
                                                <p class="text-muted mb-0">We've searched more than 150+ agencies We did not find any agencies for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 align-items-center" id="pagination-element">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <div class="pagination-wrap justify-content-center hstack gap-2">
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

    <!-- Modal -->
    <div class="modal fade" id="addAgencies" tabindex="-1" aria-labelledby="addAgencyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAgencyModalLabel">Add Agencies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addAgencyModal"></button>
                </div>

                <form class="tablelist-form" novalidate autocomplete="off">
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field" >

                        <div class="mb-3">
                            <label class="form-label">Agencies Images<span class="text-danger">*</span></label>
                            <div class="dropzone border border-1 border-dashed text-center" style="min-height: 100px;">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-download fs-1"></i>
                                    </div>

                                    <h5 class="fs-md mb-0">Drop Image here or click to upload.</h5>
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                <li class="mt-2" id="dropzone-preview-list">
                                    <!-- This is used as the file preview template -->
                                    <div class="border rounded">
                                        <div class="d-flex flex-wrap gap-2 p-2">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm bg-light rounded p-2">
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

                        <div class="mb-3">
                            <label for="agencies-name-input" class="form-label">Agencies Name<span class="text-danger">*</span></label>
                            <input type="text" id="agencies-name-input" class="form-control" placeholder="Enter agencies name" required >
                        </div>
                        <div class="mb-3">
                            <label for="since-input" class="form-label">Since<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="since-input" placeholder="Enter since from" required >
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="property-input" class="form-label">Total Property<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="property-input" placeholder="Enter property" required >
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="employee-input" class="form-label">Employee<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="employee-input" placeholder="Enter employee" required >
                                </div>
                            </div><!--end col-->
                        </div><!---end row-->

                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email-input" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email-input" placeholder="Enter email" required >
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="contact-input" class="form-label">Contact No<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contact-input" placeholder="Enter contact number" required >
                                </div>
                            </div><!--end col-->
                        </div><!---end row-->

                        <div>
                            <label for="address-input" class="form-label">Address<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="address-input" rows="3" placeholder="Enter address" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                            <button type="submit" class="btn btn-primary" id="add-btn">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- modal-content -->
        </div>
    </div><!--end add Property modal-->

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
                            <p class="text-muted fs-md mx-3 mb-0">Are you sure you want to remove this record ?</p>
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
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/real-estate-agencies-list.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
