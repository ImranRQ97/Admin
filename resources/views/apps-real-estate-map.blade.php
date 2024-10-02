@extends('layouts.master')
@section('title')
@lang('translation.listing-map')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Real Estate
@endslot
@slot('title')
Listing Map
@endslot
@endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <!-- <div class="col-lg-3">
                                                <h6 class="card-title">Property</h6>
                                            </div> -->
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search products, price etc...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-6">
                                                <select class="form-control" id="idType" data-choices data-choices-search-false>
                                                    <option value="all">Select All Type</option>
                                                    <option value="Villa">Villa</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Residency">Residency</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-2 col-sm-6">
                                                <select class="form-control" id="idBedroom" data-choices data-choices-search-false>
                                                    <option value="all">Select All</option>
                                                    <option value="1">1 Bedroom</option>
                                                    <option value="2">2 Bedroom</option>
                                                    <option value="3">3 Bedroom</option>
                                                    <option value="4">4 Bedroom</option>
                                                    <option value="5">5 Bedroom</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-2 col-sm-6">
                                                <select class="form-control" data-choices data-choices-search-false>
                                                    <option value="all">Select All</option>
                                                    <option value="0-$2000">0-$1000</option>
                                                    <option value="$1000-$2000">$1000-$2000</option>
                                                    <option value="$2000-$3000">$2000-$3000</option>
                                                    <option value="$3000-$4000">$3000-$4000</option>
                                                    <option value="$4000-$5000">$4000-$5000</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-2 col-sm-6">
                                                <div>
                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                                </div>
                                            </div>
                                            <div class="col-xl col-sm-6">
                                                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addProperty">Add Property</button>
                                            </div>
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-xl-5">
                                        <div class="card-header">
                                            <div class="d-flex align-items-center flex-wrap gap-2 text-muted">
                                                <b>249</b> items in
                                                <span class="badge bg-danger-subtle text-danger">Villa</span>
                                                <div class="vr"></div>
                                                <a href="#!" class="badge border text-reset">$2000-$3000</a>
                                                <div class="vr"></div>
                                                <a href="#!" class="badge border text-reset">4 Bedroom</a>
                                            </div>
                                        </div>

                                        <div class="card-body border-bottom">
                                            <div class="row gy-3">
                                                <div class="col-lg-5">
                                                    <div class="position-relative">
                                                        <img src="{{ URL::asset('build/images/real-estate/img-01.jpg') }}" alt="" class="img-fluid rounded d-block mx-auto">
                                                        <div class="position-absolute bottom-0 start-0 m-2">
                                                            <span class="badge bg-white text-danger fs-xxs"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-7">
                                                    <div class="d-flex flex-column h-100">
                                                        <div>
                                                            <div class="dropdown float-end">
                                                                <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#addProperty" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                            <h6 class="fs-lg text-capitalize text-truncate"><a href="apps-real-estate-property-overview" class="text-reset">the Country House</a></h6>
                                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> West Midlands, United Kingdom</p>
                                                        </div>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1458 sqft</p>
                                                            </li>
                                                        </ul>
                                                        <div class="border-top border-dashed mt-auto pt-3 d-flex align-items-center justify-content-between gap-3">
                                                            <h5 class="mb-0">$2451.39</h5>
                                                            <a href="apps-real-estate-property-overview" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                        <div class="card-body border-bottom">
                                            <div class="row gy-3">
                                                <div class="col-lg-5">
                                                    <div class="position-relative">
                                                        <img src="{{ URL::asset('build/images/real-estate/img-02.jpg') }}" alt="" class="img-fluid rounded d-block mx-auto">
                                                        <div class="position-absolute bottom-0 start-0 m-2">
                                                            <span class="badge bg-white text-success fs-xxs"><i class="bi bi-buildings align-baseline me-1"></i> Residency</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-7">
                                                    <div class="d-flex flex-column h-100">
                                                        <div>
                                                            <div class="dropdown float-end">
                                                                <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#addProperty" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                            <h6 class="fs-lg text-capitalize text-truncate"><a href="apps-real-estate-property-overview" class="text-reset">Classic White House</a></h6>
                                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Baden-Württemberg, Germany</p>
                                                        </div>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1324 sqft</p>
                                                            </li>
                                                        </ul>
                                                        <div class="border-top border-dashed mt-auto pt-3 d-flex align-items-center justify-content-between gap-3">
                                                            <h5 class="mb-0">$3698.99</h5>
                                                            <a href="apps-real-estate-property-overview" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                        <div class="card-body border-bottom">
                                            <div class="row gy-3">
                                                <div class="col-lg-5">
                                                    <div class="position-relative">
                                                        <img src="{{ URL::asset('build/images/real-estate/img-03.jpg') }}" alt="" class="img-fluid rounded d-block mx-auto">
                                                        <div class="position-absolute bottom-0 start-0 m-2">
                                                            <span class="badge bg-white text-info fs-xxs"><i class="bi bi-building align-baseline me-1"></i> Apartment</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-7">
                                                    <div class="d-flex flex-column h-100">
                                                        <div>
                                                            <div class="dropdown float-end">
                                                                <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#addProperty" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                            <h6 class="fs-lg text-capitalize text-truncate"><a href="apps-real-estate-property-overview" class="text-reset">Vintage Apartment</a></h6>
                                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Minas Gerais, Brazil</p>
                                                        </div>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1025 sqft</p>
                                                            </li>
                                                        </ul>
                                                        <div class="border-top border-dashed mt-auto pt-3 d-flex align-items-center justify-content-between gap-3">
                                                            <h5 class="mb-0">$1249.99</h5>
                                                            <a href="apps-real-estate-property-overview" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                        <div class="card-body border-bottom">
                                            <div class="row gy-3">
                                                <div class="col-lg-5">
                                                    <div class="position-relative">
                                                        <img src="{{ URL::asset('build/images/real-estate/img-04.jpg') }}" alt="" class="img-fluid rounded d-block mx-auto">
                                                        <div class="position-absolute bottom-0 start-0 m-2">
                                                            <span class="badge bg-white text-danger fs-xxs"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-7">
                                                    <div class="d-flex flex-column h-100">
                                                        <div>
                                                            <div class="dropdown float-end">
                                                                <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" href="#addProperty" data-bs-toggle="modal"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                                    <li><a class="dropdown-item" href="#deleteRecordModal" data-bs-toggle="modal"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                            <h6 class="fs-lg text-capitalize text-truncate"><a href="apps-real-estate-property-overview" class="text-reset">Whitespace Vintage Villa</a></h6>
                                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Cantabria, Spain</p>
                                                        </div>
                                                        <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                                            </li>
                                                            <li>
                                                                <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1754 sqft</p>
                                                            </li>
                                                        </ul>
                                                        <div class="border-top border-dashed mt-auto pt-3 d-flex align-items-center justify-content-between gap-3">
                                                            <h5 class="mb-0">$3495.76</h5>
                                                            <a href="apps-real-estate-property-overview" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-sm">
                                                    <div class="text-muted text-center text-sm-start">
                                                        Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">10</span> Results
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
                                        </div><!--end card-body-->
                                    </div><!--end col-->
                                    <div class="col-xl-7">
                                        <div id="leaflet-map-group-control" class="leaflet-map leaflet-gray rounded" style="min-height: 100%;"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>

        <!-- Modal -->
        <div class="modal fade" id="addProperty" tabindex="-1" aria-labelledby="addPropertyLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPropertyLabel">Add Property</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
        
                    <form class="tablelist-form" novalidate autocomplete="off">
                        <div class="modal-body">
                            <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                            <input type="hidden" id="id-field" >
        
                            <input type="hidden" id="order-field" >
                            <input type="hidden" id="rating-field" >
                            <input type="hidden" id="discount-field" >
        
                            <div class="mb-3">
                                <label class="form-label">Property Images<span class="text-danger">*</span></label>
                                <div class="dropzone property-dropzone border border-1 border-dashed text-center" style="min-height: 100px;">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="bi bi-cloud-download fs-1"></i>
                                        </div>
        
                                        <h5 class="fs-md mb-0">Drop files here or click to upload.</h5>
                                    </div>
                                </div>
        
                                <ul class="list-unstyled mb-0" id="property-preview">
                                    <li class="mt-2" id="property-preview-list">
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
                                <label for="Property-title-input" class="form-label">Property title<span class="text-danger">*</span></label>
                                <input type="text" id="Property-title-input" class="form-control" placeholder="Enter Property title" required >
                            </div>
        
        
                            <div class="mb-3">
                                <label for="Property-type-input" class="form-label">Property Type<span class="text-danger">*</span></label>
        
                                <select class="form-select" id="Property-type-input" data-choices data-choices-search-false data-choices-removeItem>
                                    <option value="">Select Property Type</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Residency">Residency</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Others">Other</option>
                                </select>
                            </div>
        
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="bedroom-input" class="form-label">Bedroom<span class="text-danger">*</span></label>
                                        <input type="number" id="bedroom-input" class="form-control" placeholder="Enter Bedroom" required >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="bathroom-input" class="form-label">Bathroom<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="bathroom-input" placeholder="Enter Bathroom" required >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="sqft-input" class="form-label">SQFT<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="sqft-input" placeholder="Enter sqft" required >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="Property-price-input" class="form-label">Price<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="Property-price-input" placeholder="Enter price" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="addressLine" class="form-label">Sort Address<span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="addressLine" rows="3" placeholder="Enter sort address" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                <button type="submit" class="btn btn-primary" id="add-btn">Add Property</button>
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
<script src="{{ URL::asset('build/libs/leaflet/leaflet.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/real-estate-list-map.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection