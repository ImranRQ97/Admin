@extends('layouts.master')
@section('title')
@lang('translation.product-Details')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Ecommerce
@endslot
@slot('title')
Product Overview
@endslot
@endcomponent

<div class="row">
    <div class="col-xxl-4">
        <div class="card p-3 sticky-side-div">
            <div class="product-img-slider">
                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="p-5 mx-4">
                                <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="p-5 mx-4">
                                <img src="{{ URL::asset('build/images/products/img-7.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="p-5 mx-4">
                                <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="p-5 mx-4">
                                <img src="{{ URL::asset('build/images/products/img-10.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="p-5 mx-4">
                                <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- end swiper thumbnail slide -->
                <div class="swiper product-nav-slider mt-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="nav-slide-item">
                                <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nav-slide-item">
                                <img src="{{ URL::asset('build/images/products/img-7.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nav-slide-item">
                                <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nav-slide-item">
                                <img src="{{ URL::asset('build/images/products/img-10.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nav-slide-item">
                                <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper nav slide -->
            </div>
        </div>
    </div>
    <div class="col-xxl-8">
        <div class="row g-0">
            <div class="col-xxl-8">
                <div class="card rounded-end-0">
                    <div class="card-body p-4">
                        <p class="text-muted float-md-end mb-md-0"><a href="#!"><i class="ph-storefront align-middle me-1"></i> Visit Store</a></p>
                        <h4 class="text-capitalize mb-3">Unite wear solid men hooded neck blue T-shirt</h4>
                        <div class="hstack gap-3 flex-wrap mb-4">
                            <div class="text-muted"><b class="text-body fw-medium">3.7k</b> Sold</div>
                            <div class="vr"></div>
                            <div class="text-muted"><b class="text-body fw-medium">3.5k</b> Reviews</div>
                            <div class="vr"></div>
                            <div class="text-muted">Published : <span class="text-body fw-medium">26 Mar, 2021</span></div>
                        </div>

                        <h6 class="fs-md mb-3">Choose Size:</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Out of Stock">
                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio1" disabled>
                                <label class="btn btn-subtle-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio1">S</label>
                            </div>

                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="04 Items Available">
                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio2">
                                <label class="btn btn-subtle-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio2">M</label>
                            </div>
                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="06 Items Available">
                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio3">
                                <label class="btn btn-subtle-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio3">L</label>
                            </div>

                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Out of Stock">
                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio4" disabled>
                                <label class="btn btn-subtle-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio4">XL</label>
                            </div>

                            <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="08 Items Available">
                                <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio5">
                                <label class="btn btn-subtle-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio5">2xl</label>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="fs-md mb-3">Colors :</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Out of Stock">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-primary" disabled="">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="03 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-secondary">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="03 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-success">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="02 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-info">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="01 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-warning">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="04 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-danger">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="03 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-light">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="04 Items Available">
                                    <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-5xl text-dark">
                                        <i class="ri-checkbox-blank-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="fs-md mb-3">Shipping Information:</h5>
                            <p class="text-muted mb-2"><b>Delivery Location</b> </p>
                            <p class="text-muted mb-0">A thicker knit T-Shirt with a rag cut edge and sleeves and a printed muscle man on the back, you will feel #ULTRA in one of these.</p>
                        </div>

                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xxl-4">
                <div class="card card-height-100 border-start rounded-start-0">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-primary">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title text-white fs-xl">25% Off</h5>
                                            <p class="mb-0 text-white-50">If order over $120</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-secondary">Util 10 Feb, 2024</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card border shadow-none mb-0">
                                            <div class="card-body p-2">
                                                <div class="text-center">
                                                    <p class="text-muted text-truncate mb-2">PRICE</p>
                                                    <h6 class="fs-lg">$245.99</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="card border shadow-none mb-0">
                                            <div class="card-body p-2">
                                                <div class="text-center">
                                                    <p class="text-muted text-truncate mb-2">No. of Orders</p>
                                                    <h6 class="fs-lg">3.7k</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="card border shadow-none mb-0">
                                            <div class="card-body p-2">
                                                <div class="text-center">
                                                    <p class="text-muted text-truncate mb-2">Available Stocks</p>
                                                    <h6 class="fs-lg">764</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="card border shadow-none mb-0">
                                            <div class="card-body p-2">
                                                <div class="text-center">
                                                    <p class="text-muted text-truncate mb-2">Total Revenue</p>
                                                    <h6 class="fs-lg">$59,239</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="mt-4 d-flex gap-2">
                            <button type="button" class="btn btn-primary w-100">Edit</button>
                            <button type="button" class="btn btn-danger w-100"><i class="ph-trash align-middle me-1"></i> Delete</button>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="card">
            <div class="card-body p-4">
                <div>
                    <h5 class="fs-md mb-3">Description:</h5>
                    <p class="text-muted mb-2">A <b>hoodie</b> is a sweatshirt with a hood attached that may also have a kangaroo pocket or full zipper. A sweatshirt is a long-sleeved pullover shirt fashioned out of thick, usually cotton cloth material. Sweatshirts are almost exclusively casual attire and hence not as dressy as some sweaters.</p>
                    <p class="text-muted">A thicker knit T-Shirt with a rag cut edge and sleeves and a printed muscle man on the back, you will feel #ULTRA in one of these.</p>
                </div>

                <div class="mt-4">
                    <h5 class="fs-md mb-3">Product Details:</h5>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless align-middle description-table mb-0">
                            <tbody>
                                <tr>
                                    <th>Type</th>
                                    <td>Stripped shirts</td>
                                </tr>
                                <tr>
                                    <th>Sleeve</th>
                                    <td>Full Sleeve</td>
                                </tr>
                                <tr>
                                    <th>Country of Origin</th>
                                    <td>California</td>
                                </tr>
                                <tr>
                                    <th>Pack of</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>Style</th>
                                    <td>Modern</td>
                                </tr>
                                <tr>
                                    <th>Style Code</th>
                                    <td>TBS037</td>
                                </tr>
                                <tr>
                                    <th>Generic Name</th>
                                    <td>Formal Shirt</td>
                                </tr>
                                <tr>
                                    <th>Ideal For</th>
                                    <td>Men</td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td>All Available</td>
                                </tr>
                                <tr>
                                    <th>Suitable For</th>
                                    <td>Formal Wear,Party Wear</td>
                                </tr>
                                <tr>
                                    <th>Seller</th>
                                    <td>Zibra Fashion</td>
                                </tr>
                                <tr>
                                    <th>Fabric</th>
                                    <td>Cotton</td>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex flex-wrap align-items-center gap-3 mb-2">
                <h6 class="card-title flex-grow-1 mb-0">Ratings & Reviews</h6>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-muted dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            This Month <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Yesterday</a>
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 30 Days</a>
                            <a class="dropdown-item" href="#">This Month</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReview"><i class="ph-plus-circle align-middle me-1"></i> Add Review</button>
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
                    </div>
                    <!--end col-->
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

                                            <div class="d-flex flex-grow-1 gap-2 review-gallery-img">
                                                <a href="#" class="avatar-md mt-3">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt="img-1.png" class="product-img avatar-sm">
                                                    </div>
                                                </a>
                                                <a href="#" class="avatar-md mt-3">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="img-6.png" class="product-img avatar-sm">
                                                    </div>
                                                </a>
                                                <a href="#" class="avatar-md mt-3">
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
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->


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
                        <div class="dropzone my-dropzone" style="min-height: 180px;">
                            <div class="dz-message my-2">
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
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
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

@endsection
@section('script')

<!--Swiper slider js-->
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
<!-- dropzone js -->
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<!-- rater-js plugin -->
<script src="{{ URL::asset('build//libs/rater-js/index.js') }}"></script>

<script src="{{ URL::asset('build//js/pages/ecommerce-product-overview.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection