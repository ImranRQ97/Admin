@extends('layouts.master')
@section('title')
@lang('translation.overview')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Agents
@endslot
@slot('title')
Overview
@endslot
@endcomponent


<div class="row">
    <div class="col-xxl-9">
        <div class="card">
            <div class="card-header d-flex align-items-center gap-2">
                <h5 class="card-title flex-grow-1 mb-0">Property Overview</h5>
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
            <div class="card-body ps-1">
                <div id="agent_overview_charts" data-colors='["--tb-primary", "--tb-light", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>

        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-4">
                <h5 class="card-title mb-0">Active Listing</h5>
            </div>
            <div class="col-auto">
                <div class="nav nav-pills gap-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="active btn btn-subtle-secondary btn-icon" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-grid"></i></button>
                    <button class="btn btn-subtle-secondary btn-icon" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-list-task"></i></button>
                </div>
            </div>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <div class="row">
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-01.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.5</p>
                                <span class="badge bg-danger-subtle text-danger fs-xxs mb-3"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">the Country House</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> West Midlands, United Kingdom</p>
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
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$2451.39</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-02.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.5</p>
                                <span class="badge bg-success-subtle text-success fs-xxs mb-3"><i class="bi bi-buildings align-baseline me-1"></i> Residency</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Classic White House</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Baden-Württemberg, Germany</p>
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
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$3698.99</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-03.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.7</p>
                                <span class="badge bg-info-subtle text-info fs-xxs mb-3"><i class="bi bi-building align-baseline me-1"></i> Apartment</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Vintage Apartment</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Minas Gerais, Brazil</p>
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
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$1249.99</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-04.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.9</p>
                                <span class="badge bg-danger-subtle text-danger fs-xxs mb-3"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Whitepace Vintage Villa</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Cantabria, Spain</p>
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
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$3495.76</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-05.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.4</p>
                                <span class="badge bg-success-subtle text-success fs-xxs mb-3"><i class="bi bi-buildings align-baseline me-1"></i> Residency</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Duplex square valley</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Distrito Federal, Brazil</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 3 Bedroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1596 sqft</p>
                                    </li>
                                </ul>
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$2579.31</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-06.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.8</p>
                                <span class="badge bg-danger-subtle text-danger fs-xxs mb-3"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Crystal House</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Guipuzcua, Spain</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 2 Bedroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 1 Bathroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1039 sqft</p>
                                    </li>
                                </ul>
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$1249.99</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-07.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.5</p>
                                <span class="badge bg-danger-subtle text-danger fs-xxs mb-3"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Swimming pool side of the residential Ascot home.</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> Estado de Mexico, Mexico</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1145 sqft</p>
                                    </li>
                                </ul>
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$1452.39</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card real-estate-grid-widgets card-animate">
                            <div class="card-body p-2">
                                <img src="{{ URL::asset('build/images/real-estate/img-08.jpg') }}" alt="" class="img-fluid rounded">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                                <div class="dropdown dropdown-real-estate">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.9</p>
                                <span class="badge bg-info-subtle text-info fs-xxs mb-3"><i class="bi bi-building align-baseline me-1"></i> Apartment</span>
                                <a href="#!">
                                    <h6 class="fs-lg text-capitalize text-truncate">Small house on an autumn’s day</h6>
                                </a>
                                <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1"></i> West Midland, United Kingdom</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-house align-baseline text-primary me-1"></i> 4 Bedroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-bathtub align-middle text-primary me-1"></i> 2 Bathroom</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-columns align-baseline text-primary me-1"></i> 1796 sqft</p>
                                    </li>
                                </ul>
                                <div class="border-top border-dashed mt-3 pt-3 d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="mb-0">$3895.39</h5>
                                    <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center mb-3">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">8</span> of <span class="fw-semibold">15</span> Results
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto  mt-3 mt-sm-0">
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
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xxl-2 col-lg-3">
                                        <div class="position-relative">
                                            <img src="{{ URL::asset('build/images/real-estate/img-01.jpg') }}" alt="" class="img-fluid rounded h-100">
                                            <div class="position-absolute bottom-0 start-0 m-2">
                                                <span class="badge bg-white text-danger fs-xxs"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-7 col-lg-6">
                                        <div class="d-flex flex-column h-100">
                                            <div>
                                                <h6 class="fs-lg text-capitalize text-truncate"><a href="#!" class="text-reset">the Country House</a></h6>
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
                                            <p class="text-muted mb-0">Agent: <b>Jerry Emard</b></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="d-flex flex-lg-column justify-content-between justify-content-lg-start text-lg-end gap-3 h-100">
                                            <h5 class="mb-0">$2451.39</h5>
                                            <div class="mt-auto">
                                                <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xxl-2 col-lg-3">
                                        <div class="position-relative">
                                            <img src="{{ URL::asset('build/images/real-estate/img-02.jpg') }}" alt="" class="img-fluid rounded h-100">
                                            <div class="position-absolute bottom-0 start-0 m-2">
                                                <span class="badge bg-white text-success fs-xxs"><i class="bi bi-buildings align-baseline me-1"></i> Residency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-7 col-lg-6">
                                        <div class="d-flex flex-column h-100">
                                            <div>
                                                <h6 class="fs-lg text-capitalize text-truncate"><a href="#!" class="text-reset">Classic White House</a></h6>
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
                                            <p class="text-muted mb-0">Agent: <b>Jerry Emard</b></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="d-flex flex-lg-column justify-content-between justify-content-lg-start text-lg-end gap-3 h-100">
                                            <h5 class="mb-0">$3698.99</h5>
                                            <div class="mt-auto">
                                                <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xxl-2 col-lg-3">
                                        <div class="position-relative">
                                            <img src="{{ URL::asset('build/images/real-estate/img-03.jpg') }}" alt="" class="img-fluid rounded h-100">
                                            <div class="position-absolute bottom-0 start-0 m-2">
                                                <span class="badge bg-white text-info fs-xxs"><i class="bi bi-building align-baseline me-1"></i> Apartment</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-7 col-lg-6">
                                        <div class="d-flex flex-column h-100">
                                            <div>
                                                <h6 class="fs-lg text-capitalize text-truncate"><a href="#!" class="text-reset">Vintage Apartment</a></h6>
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
                                            <p class="text-muted mb-0">Agent: <b>Jerry Emard</b></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="d-flex flex-lg-column justify-content-between justify-content-lg-start text-lg-end gap-3 h-100">
                                            <h5 class="mb-0">$1249.99</h5>
                                            <div class="mt-auto">
                                                <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xxl-2 col-lg-3">
                                        <div class="position-relative">
                                            <img src="{{ URL::asset('build/images/real-estate/img-04.jpg') }}" alt="" class="img-fluid rounded h-100">
                                            <div class="position-absolute bottom-0 start-0 m-2">
                                                <span class="badge bg-white text-danger fs-xxs"><i class="bi bi-house-door align-baseline me-1"></i> Villa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-7 col-lg-6">
                                        <div class="d-flex flex-column h-100">
                                            <div>
                                                <h6 class="fs-lg text-capitalize text-truncate"><a href="#!" class="text-reset">Whitespace Vintage Villa</a></h6>
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
                                            <p class="text-muted mb-0">Agent: <b>Jerry Emard</b></p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3">
                                        <div class="d-flex flex-lg-column justify-content-between justify-content-lg-start text-lg-end gap-3 h-100">
                                            <h5 class="mb-0">$3495.76</h5>
                                            <div class="mt-auto">
                                                <a href="#!" class="link-effect">Read More <i class="bi bi-chevron-right align-baseline ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center justify-content-between text-center text-sm-start mb-3">
                    <div class="col-sm">
                        <div class="text-muted">
                            Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">6</span> Results
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto  mt-3 mt-sm-0">
                        <div class="pagination-wrap hstack gap-2">
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
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1">
                                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm" data-bs-toggle="button">
                                    <span class="icon-on"><i class="bi bi-star"></i></span>
                                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded mx-auto d-block">
                            <h5 class="mt-3">Jerry Emard <i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                            <p class="text-muted">Agent</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap table-borderless mb-0">
                                <tr>
                                    <th>Agency</th>
                                    <td><a href="#!">Themesbrand</a></td>
                                </tr>
                                <tr>
                                    <th>Agent License</th>
                                    <td>#TBS01</td>
                                </tr>
                                <tr>
                                    <th>Agent License</th>
                                    <td>3214 57896 5412</td>
                                </tr>
                                <tr>
                                    <th>Tax Number</th>
                                    <td>TBS 214513 54414</td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>Hamburg, Germany</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>jacinthe@steex.com</td>
                                </tr>
                                <tr>
                                    <th>Contact Number</th>
                                    <td>+(27) 3041-1766</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>11 March, 2023</td>
                                </tr>
                            </table>
                        </div>
                        <ul class="list-unstyled hstack justify-content-center gap-2 mb-0 mt-4">
                            <li>
                                <a href="#!" class="avatar-xs d-inline-block">
                                    <div class="avatar-title rounded bg-primary-subtle text-primary">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="avatar-xs d-inline-block">
                                    <div class="avatar-title bg-success-subtle text-success rounded">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="avatar-xs d-inline-block">
                                    <div class="avatar-title bg-info-subtle text-info rounded">
                                        <i class="bi bi-twitter"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="avatar-xs d-inline-block">
                                    <div class="avatar-title bg-danger-subtle text-danger rounded">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-header align-items-center d-flex bg-primary-subtle text-primary p-3">
                        <div class="flex-grow-1">
                            <h5 class="card-title text-primary-emphasis profile-username">Jerry Emard</h5>
                            <p class="mb-0 lh-1">Active</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="mt-n1">
                                <a href="tel:+(27) 3041-1766" class="btn btn-icon btn-info btn-sm"><i class="bi bi-telephone"></i></a>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body p-0">
                        <div>
                            <div class="chat-conversation p-3" data-simplebar style="height: 300px;">
                                <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Good morning 😊</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Wow that's great</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->
                                </ul>
                            </div>
                        </div>

                        <div class="border-top border-top-dashed">
                            <div class="row g-2 mx-3 mt-2 mb-3">
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-secondary"><i class="mdi mdi-send"></i></button>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div><!-- end cardbody -->
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end col-->
</div>
<!--end row-->


@endsection

@section('script')
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/real-estate-agent-overview.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection