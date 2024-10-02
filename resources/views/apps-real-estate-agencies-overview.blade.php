@extends('layouts.master')
@section('title')
@lang('translation.overview')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/nouislider/nouislider.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Agencies
@endslot
@slot('title')
Overview
@endslot
@endcomponent

<div class="row">
    <div class="col-xxl-9">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center justify-content-center g-3">
                    <div class="col-xl-4 col-md-5">
                        <div class="text-center bg-info-subtle rounded-3 py-3 ribbon-box page-agency-overview overflow-hidden">
                            <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                                <span class="trending-ribbon-text">600 Properties</span> <i class="mdi mdi-home-city text-white align-bottom float-end ms-2"></i>
                            </div>
                            <img src="{{ URL::asset('build/images/companies/img-5.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-7">
                        <div>
                            <div class="mb-3">
                                <h6 class="card-title">Real estate agency</h6>
                                <p class="text-muted mb-0">Dream house</p>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-sm table-nowrap table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th>Agency:</th>
                                                <td><a href="#!">Themesbrand</a></td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>jacinthe@steex.com</td>
                                            </tr>
                                            <tr>
                                                <th>Contact Number:</th>
                                                <td>+(27) 3041-1766</td>
                                            </tr>
                                            <tr>
                                                <th>Website:</th>
                                                <td>https://Themesbrand.com/</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="list-unstyled hstack gap-2 mb-0 mt-4">
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
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="">
                    <button type="button" class="btn btn-subtle-warning custom-toggle float-end btn-icon btn-sm" data-bs-toggle="button">
                        <span class="icon-on"><i class="bi bi-star"></i></span>
                        <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                    </button>
                    <h6 class="card-title">About</h6>
                    <p class="text-muted mb-2">Property is <b>any item that a person or a business has legal title over</b>. Property can be tangible items, such as houses, cars, or appliances, or it can refer to intangible items that carry the promise of future worth, such as stock and bond certificates. There are two types of property. In legal terms, all property will be classified as either <b>personal property or real property</b>. This distinction between types of property comes from English common law, but our modern laws continue to distinguish between the two.</p>
                    <p class="text-muted mb-0">Basic Property Unit. Definition. The basic unit of ownership that is recorded in the land books, land registers or equivalent. It is defined by unique ownership and homogeneous real property rights, and may consist of one or more adjacent or geographically separate parcels.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-lg-12">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-secondary mb-3" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" data-bs-toggle="tab" href="#border-nav-home" role="tab">Property</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" data-bs-toggle="tab" href="#border-nav-profile" role="tab">Agents</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane show active" id="border-nav-home" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.7</p>
                                        <span class="badge bg-info-subtle text-success fs-xxs mb-3"><i class="bi bi-building align-baseline me-1"></i> Apartment</span>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="text-muted float-end mb-0"><i class="bi bi-star text-warning align-baseline me-1"></i> 4.4</p>
                                        <span class="badge bg-subtle-success text-success fs-xxs mb-3"><i class="bi bi-buildings align-baseline me-1"></i> Residency</span>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
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
                            <div class="col-xxl-3 col-sm-6">
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
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
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

                        <div class="row align-items-center justify-content-between text-center text-sm-start mb-3">
                            <div class="col-sm">
                                <div class="text-muted">
                                    Showing <span class="fw-semibold">8</span> of <span class="fw-semibold">15</span> Results
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

                    <div class="tab-pane fade" id="border-nav-profile" role="tabpanel" tabindex="0">
                        <div class="row row-cols-xxl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Donnell Schultz</a></h5>
                                            <p class="text-muted"><b>#TBS03</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> Natal, Brazil</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">326 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(51) 3233-7909" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Xander Wyman</a></h5>
                                            <p class="text-muted"><b>#TBS04</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> Logrono, Spain</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">85 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(48) 3877-9000" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card ribbon-box ribbon-fill">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-secondary">New</div>
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Buck Roberts</a></h5>
                                            <p class="text-muted"><b>#TBS05</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> Guarulhos, Brazil</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">495 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(11) 3885-1022" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Uriel King</a></h5>
                                            <p class="text-muted"><b>#TBS06</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> Ibiza, Spain</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">369 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(27) 3041-1766" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card ribbon-box ribbon-fill">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-secondary">New</div>
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Federico Hand</a></h5>
                                            <p class="text-muted"><b>#TBS07</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> San Luis Potosi, Mexico</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">487 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(11) 3666-9716" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Ophelia Steuber</a></h5>
                                            <p class="text-muted"><b>#TBS08</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> Sobrado, Spain</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">279 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(21) 2345-67896" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card ribbon-box ribbon-fill">
                                    <div class="card-body">
                                        <div class="ribbon ribbon-secondary">New</div>
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Josefa Weissnat</a></h5>
                                            <p class="text-muted"><b>#TBS09</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> California, USA</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">164 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(53) 3035-3100" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="btn btn-ghost-secondary btn-icon btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="apps-real-estate-agent-overview"><i class="bi bi-eye align-baseline me-1"></i> Overview</a></li>
                                                        <li><a class="dropdown-item"~ href="#addAgent"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"~><i class="bi bi-trash3 align-baseline me-1"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <div class="position-relative d-inline-block">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded mx-auto d-inline-block">
                                                <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                            </div>
                                            <h5 class="mt-4 mb-1"><a href="apps-real-estate-agent-overview" class="text-reset">Dianna Bogan</a></h5>
                                            <p class="text-muted"><b>#TBS10</b></p>

                                            <p class="text-muted"><i class="bi bi-geo-alt align-baseline me-1 text-body"></i> Brasília, Brazil</p>
                                            <h6 class="fs-md text-secondary-emphasis mb-4">149 Property</h6>
                                            <div class="hstack gap-2">
                                                <button class="btn btn-subtle-primary w-100"><i class="bi bi-chat-text align-baseline me-1"></i> Message</button>
                                                <a href="tel:(33) 3521-6761" class="btn btn-info btn-icon flex-shrink-0"><i class="bi bi-telephone"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
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

        </div>
    </div>
    <!--end col-->

    <div class="col-xxl-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Request Exploration</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="text" class="form-control mb-3" placeholder="Enter name" id="firstNameinput">
                            <input type="email" class="form-control mb-3" placeholder="Enter email" id="emailinput">
                            <input type="tel" class="form-control mb-3" placeholder="+(245) 451 45123" id="phonenumberInput">
                            <textarea class="form-control mb-3" placeholder="Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <button class="btn btn-primary btn-sm float-end">Submit</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title flex-grow-1 mb-0">Fliters</h4>
                        <div class="flex-shrink-0">
                            <button class="btn btn-subtle-secondary btn-icon btn-sm"><i class="bi bi-funnel fs-md"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <p class="text-muted fw-medium text-uppercase mb-3">Location</p>
                            <select class="form-select" id="select-location">
                                <option selected>Select Location</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Brazil">Brazil</option>
                                <option value="China">China</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Serbia">Serbia</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <p class="text-muted fw-medium text-uppercase mb-3">Property Type</p>
                            <div class="d-flex flex-wrap gap-2">
                                <div>
                                    <input type="radio" class="btn-check" name="propertyType" value="Villa" id="propertyType1" checked>
                                    <label class="btn btn-ghost-primary fs-lg avatar-xs p-0 d-flex justify-content-center align-items-center" for="propertyType1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-title="Villa">
                                        <i class="bi bi-house"></i>
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" class="btn-check" name="propertyType" value="Apartment" id="propertyType3">
                                    <label class="btn btn-ghost-primary fs-lg avatar-xs p-0 d-flex justify-content-center align-items-center" for="propertyType3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-title="Apartment">
                                        <i class="bi bi-building"></i>
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" class="btn-check" name="propertyType" value="Residency" id="propertyType4">
                                    <label class="btn btn-ghost-primary fs-lg avatar-xs p-0 d-flex justify-content-center align-items-center" for="propertyType4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-title="Residency">
                                        <i class="bi bi-buildings"></i>
                                    </label>
                                </div>

                                <div>
                                    <input type="radio" class="btn-check" name="propertyType" value="all" id="propertyType5">
                                    <label class="btn btn-ghost-primary fs-lg avatar-xs p-0 d-flex justify-content-center align-items-center" for="propertyType5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-title="all"><i class="bi bi-hospital"></i></label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted fw-medium text-uppercase mb-3">Bedroom</p>
                            <div class="row gy-3" id="bedroom-filter">
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="all" id="allselectBedroom">
                                        <label class="form-check-label" for="allselectBedroom">
                                            Select All
                                        </label>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="twoBedroom" checked>
                                        <label class="form-check-label" for="twoBedroom">
                                            2 Bedroom
                                        </label>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="threeBedroom">
                                        <label class="form-check-label" for="threeBedroom">
                                            3 Bedroom
                                        </label>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4" id="fourBedroom">
                                        <label class="form-check-label" for="fourBedroom">
                                            4 Bedroom
                                        </label>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5" id="fiveBedroom" checked>
                                        <label class="form-check-label" for="fiveBedroom">
                                            5 Bedroom
                                        </label>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end -->

                        <div class="mb-4">
                            <p class="text-muted fw-medium text-uppercase mb-3">Price Range</p>
                            <div>
                                <div id="product-price-range" data-slider-color="secondary"></div>
                                <div class="formCost d-flex gap-2 align-items-center mt-4">
                                    <input class="form-control" type="text" id="minCost" value="0"> <span class="fw-semibold text-muted">to</span> <input class="form-control" type="text" id="maxCost" value="1000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->

                <div class="card">

                    <div class="card-body">
                        <div id="leaflet-map-marker" class="leaflet-map"></div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end col-->
</div>
<!--end row-->


@endsection

@section('script')
<script src="{{ URL::asset('build/libs/nouislider/nouislider.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/wnumb/wNumb.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/leaflet/leaflet.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/leaflet-us-states.js') }}"></script>
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>



<script>
    // leaflet-map-marker
    var markermap = L.map('leaflet-map-marker').setView([51.505, -0.09], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidGhlbWVzYnJhbmQiLCJhIjoiY2xmbmc3bTV4MGw1ejNzbnJqOWpubzhnciJ9.DNkdZVKLnQ6I9NOz7EED-w', {
        maxZoom: 18
        , attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>'
        , id: 'mapbox/streets-v11'
        , tileSize: 512
        , zoomOffset: -1
    }).addTo(markermap);

    L.marker([51.5, -0.09]).addTo(markermap);

    L.circle([51.508, -0.11], {
        color: '#0ab39c'
        , fillColor: '#0ab39c'
        , fillOpacity: 0.5
        , radius: 500
    }).addTo(markermap);

    L.polygon([
        [51.509, -0.08]
        , [51.503, -0.06]
        , [51.51, -0.047]
    ], {
        color: '#405189'
        , fillColor: '#405189'
    , }).addTo(markermap);

</script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>

@endsection
