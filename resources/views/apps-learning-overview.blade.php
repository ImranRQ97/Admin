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
Courses
@endslot
@slot('title')
Overview
@endslot
@endcomponent

<div class="row">
    <div class="col-xl-9 col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="position-relative mb-4">
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.youtube.com/embed/Hu4Yvq-g7_Y" class="rounded overflow-hidden" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="position-absolute d-flex gap-2 top-0 end-0 m-3">
                        <a href="apps-learning-create" class="btn bg-white">
                            <i class="bi bi-pencil-square me-1 align-baseline"></i> Edit Course
                        </a>
                        <div class="dropdown">
                            <button class="btn bg-white btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-share"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#!"><i class="bi bi-facebook me-1 align-baseline"></i> Facebook</a></li>
                                <li><a class="dropdown-item" href="#!"><i class="bi bi-instagram me-1 align-baseline"></i> Instagram</a></li>
                                <li><a class="dropdown-item" href="#!"><i class="bi bi-whatsapp me-1 align-baseline"></i> Whatsapp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-subtle-warning custom-toggle btn-icon btn-sm active float-end" data-bs-toggle="button" aria-pressed="true">
                    <span class="icon-on"><i class="bi bi-star"></i></span>
                    <span class="icon-off"><i class="bi bi-star-fill"></i></span>
                </button>
                <h4>Getting Started with JavaScript</h4>
                <ul class="list-unstyled hstack gap-2 flex-wrap mb-0">
                    <li><a href="#!" class="text-reset"><i class="bi bi-box-seam align-baseline me-1"></i> React Development</a></li>
                    <li class="text-warning">
                        <i class="bi bi-star-fill align-baseline"></i>
                        <i class="bi bi-star-fill align-baseline"></i>
                        <i class="bi bi-star-fill align-baseline"></i>
                        <i class="bi bi-star-fill align-baseline"></i>
                        <i class="bi bi-star-half align-baseline"></i>
                        <span class="text-body ms-1">4.5</span>
                    </li>
                    <li>
                        <span class="badge bg-success-subtle text-success">Beginner</span>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0 mx-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#description" role="tab" aria-selected="true">
                            Description
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#videoTutorials" role="tab" aria-selected="false" tabindex="-1">
                            Video Tutorials
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false" tabindex="-1">
                            Reviews
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#faqs" role="tab" aria-selected="false" tabindex="-1">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="description" role="tabpanel">
                        <h6 class="card-title mb-3">Overview</h6>
                        <p class="text-muted mb-2">JavaScript is a programming language commonly used for web development, among many other things. It works in conjunction with HTML and CSS to add dynamic functionality to websites. JavaScript is the sauce of the web. It is what makes things dance. JavaScript enables web pages to do things like display updated content, show maps that you can interact with, and many other things.</p>
                        <p class="text-muted">Today we are going to learn how to learn JavaScript faster so that you can command JavaScript as you please and use it effectively in your projects.</p>
                        <h6 class="card-title mb-3">What We'll Cover in this Article</h6>
                        <ul class="list-unstyled vstack gap-2">
                            <li><i class="bi bi-caret-right"></i> How to learn JavaScript faster – an overview</li>
                            <li><i class="bi bi-caret-right"></i> How to practice coding in JavaScript</li>
                            <li><i class="bi bi-caret-right"></i> Why you should read the documentation</li>
                            <li><i class="bi bi-caret-right"></i> Some best practices you can adopt from reading documentation</li>
                            <li><i class="bi bi-caret-right"></i> How to contribute to open source projects</li>
                            <li><i class="bi bi-caret-right"></i> How to find projects to contribute to</li>
                            <li><i class="bi bi-caret-right"></i> Why you should build lots of projects</li>
                            <li><i class="bi bi-caret-right"></i> Resources that might inspire you to build projects</li>
                        </ul>
                        <h6 class="card-title mb-3">How to Practice Coding in JavaScript</h6>
                        <p class="text-muted mb-2">Practicing is what makes you progress. Whether it's in music, dancing, singing, playing basketball – or coding.</p>
                        <p class="text-muted">Practicing is really repetitive and can be tiring, but it is what helps us and sets us apart in the long run. It is through the action of practicing and repetition that we are able to be good at all these activities. Coding is not different.</p>
                        <h6 class="card-title mb-3">Work through Courses and Tutorials</h6>
                        <p class="text-muted mb-2">Courses and tutorials are a good way to learn. You can find various learning materials from a lot of places on the web. If you would like to take a course on a particular programming language, you can find them on sites like LinkedIn.</p>
                        <p class="text-muted mb-0">If you like videos, there are many great channels on YouTube that post coding tutorials for free. My favorite one-stop-shop is <a href="http://themesbrand.com/" target="_blank">Themesbrand</a>.</p>
                    </div>
                    <div class="tab-pane" id="videoTutorials" role="tabpanel">
                        <!-- START Accordions -->
                        <div class="accordion accordion-border-box" id="accordionlefticon">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordionlefticonExample1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_lefticonExamplecollapse1" aria-expanded="true" aria-controls="accor_lefticonExamplecollapse1">
                                        Introduction to JavaScript + Setup <small class="ms-1 align-baseline">(4 Lessons)</small>
                                    </button>
                                </h2>
                                <div id="accor_lefticonExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionlefticonExample1" data-bs-parent="#accordionlefticon">
                                    <div class="accordion-body">
                                        <ul class="list-group list">
                                            <li class="list-group-item position-relative">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What JavaScript framework should I learn?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        03:20 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What is JavaScript for example?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        07:32 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item active list-group-item-action">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-primary-subtle text-primary">
                                                            <i class="bi bi-stop-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">Which is a framework of JavaScript?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        08:54 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What is JavaScript and why it is used?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        06:37 min
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="accordionlefticonExample2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_lefticonExamplecollapse2" aria-expanded="false" aria-controls="accor_lefticonExamplecollapse2">
                                        Variables in JavaScript <small class="ms-1 align-baseline">(7 Lessons)</small>
                                    </button>
                                </h2>
                                <div id="accor_lefticonExamplecollapse2" class="accordion-collapse collapse" aria-labelledby="accordionlefticonExample2" data-bs-parent="#accordionlefticon">
                                    <div class="accordion-body">
                                        <ul class="list-group list">
                                            <li class="list-group-item position-relative">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What are the variables in JavaScript?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        08:34 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What is a variable in JavaScript example?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        10:08 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What are the three variables in JavaScript?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        11:33 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">How to write variables in JavaScript?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        07:31 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What are 3 types of variables?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        14:46 min
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs">
                                                        <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                            <i class="bi bi-play"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2">
                                                        <a href="#!" class="stretched-link text-reset">What is a variable with example?</a>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        09:33 min
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="accordionlefticonExample3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_lefticonExamplecollapse3" aria-expanded="false" aria-controls="accor_lefticonExamplecollapse3">
                                        Const, let and var in JavaScript <small class="ms-1 align-baseline">(3 Lessons)</small>
                                    </button>
                                </h2>
                                <div id="accor_lefticonExamplecollapse3" class="accordion-collapse collapse" aria-labelledby="accordionlefticonExample3" data-bs-parent="#accordionlefticon">
                                    <ul class="list-group list">
                                        <li class="list-group-item position-relative">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                        <i class="bi bi-play"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <a href="#!" class="stretched-link text-reset">What JavaScript framework should I learn?</a>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    03:20 min
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                        <i class="bi bi-play"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <a href="#!" class="stretched-link text-reset">What is JavaScript for example?</a>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    07:32 min
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title rounded bg-danger-subtle text-danger">
                                                        <i class="bi bi-play"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <a href="#!" class="stretched-link text-reset">What is JavaScript and why it is used?</a>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    06:37 min
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END Accordions -->
                    </div>
                    <div class="tab-pane" id="reviews" role="tabpanel">
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-2">
                            <h6 class="card-title flex-grow-1 mb-0">Ratings & Reviews</h6>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addReview"><i class="ph-plus-circle align-middle me-1"></i> Add Review</button>
                            </div>
                        </div>
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
                    </div>
                    <div class="tab-pane" id="faqs" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">What are good questions to ask about course?</h6>
                                        <p class="text-muted mb-0">What textbooks are required for the course? What days/times do class sessions occur or are they fully online? Are there any online platforms, programs, and/or softwares needed for the course? When are major assignments/ exams due for this course and what are its point values?</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">How does online learning work?</h6>
                                        <p class="text-muted mb-0">Distance learning is an educational process where students receive instruction through online classes, video recordings, video conferencing, or any other audio/visual technology medium.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">Why is online learning better?</h6>
                                        <p class="text-muted mb-0">Because online courses provide students with full control over their studies, they can work at their own pace. Pupils, on average, work faster and absorb more information in online courses than they would otherwise.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">How successful is online learning?</h6>
                                        <p class="text-muted mb-0">Some students do as well in online courses as in in-person courses, some may actually do better, but, on average, students do worse in the online setting, and this is particularly true for students with weaker academic backgrounds.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">How do you ask questions about learning?</h6>
                                        <p class="text-muted mb-0">Avoid asking leading questions, those that prompt or suggest the answer, and yes/no questions. If a yes/no question is warranted, be ready with a follow-up question to encourage students to critically evaluate the material and engage in discussion.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">What are course objectives?</h6>
                                        <p class="text-muted mb-0">A course objective specifies a behavior, skill, or action that a student can demonstrate if they have achieved mastery of the objective.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-question-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="card-title">What is the advantage of learning?</h6>
                                        <p class="text-muted mb-0">By consistently educating yourself and trying new things, you'll learn you're capable of change and growth, which keeps you open to new opportunities in life. “Learning a new skill can get you out of a rut.</p>
                                    </div>
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
    <div class="col-xl-3 col-lg-4">
        <div class="card overflow-hidden ribbon-box">
            <span class="ribbon ribbon-danger rounded-end">Off 20%</span>
            <div class="card-body bg-info-subtle text-center learning-widgets d-flex align-items-center justify-content-center">
                <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="avatar-lg">
                <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="effect">
            </div>
            <div class="card-body">
                <h4 class="text-truncate text-capitalize">$245.95 <small class="text-decoration-line-through fs-xs text-muted align-baseline">499.99</small></h4>
                <p class="text-danger"><i class="bi bi-clock me-2"></i> <b>10</b> days left at this price</p>
                <div class="hstack gap-2">
                    <button class="btn btn-secondary w-100">Free Trial</button>
                    <button class="btn btn-primary w-100"><i class="bi bi-bag align-baseline me-1"></i> Buy Now</button>
                </div>
            </div>
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">This course includes</h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled vstack gap-2 mb-0">
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="ph ph-book-open align-middle me-1 text-primary-emphasis"></i> Lessons
                            </div>
                            <div class="flex-shrink-0 text-muted">
                                35
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="ph ph-timer align-middle me-1 text-primary-emphasis"></i> Duration
                            </div>
                            <div class="flex-shrink-0 text-muted">
                                6 Months
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="ph ph-chart-bar align-middle me-1 text-primary-emphasis"></i> Skills
                            </div>
                            <div class="flex-shrink-0 text-muted">
                                Beginner
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="ph ph-book-open align-middle me-1 text-primary-emphasis"></i> Language
                            </div>
                            <div class="flex-shrink-0 text-muted">
                                English
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-card-heading align-baseline me-1 text-primary-emphasis"></i> Certificate
                            </div>
                            <div class="flex-shrink-0 text-muted">
                                Yes
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a href="apps-instructors-overview" class="float-end link-effect">View More <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
                <h6 class="card-title mb-0">Instructor Details</h6>
            </div>
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center mb-3">
                    <div class="flex-shrink-0">
                        <img src="{{ URL::asset('build/images/users/48/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fs-md">Morton Satterfield</h6>
                        <p class="text-muted mb-0">Software Engineering</p>
                    </div>
                </div>
                <button class="btn btn-subtle-info w-100" id="agent-chat"><i class="bi bi-chat-text align-baseline me-1"></i> Get In Touch</button>
            </div>
        </div>
        <div class="card card-primary file-manager-widgets">
            <div class="card-body">
                <h6 class="card-title text-reset"> Join Membership</h6>
                <p class="text-white-50 mb-5">Access all course anywhere and any time</p>
                <div class="mt-4">
                    <a href="pages-pricing" class="btn btn-light w-md">Join Now</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->


<div class="email-chat-detail" id="emailchat-detailElem">
    <div class="card mb-0 overflow-hidden">
        <div class="card-header align-items-center d-flex bg-primary-subtle text-primary p-3">
            <div class="flex-grow-1">
                <h5 class="fs-md text-primary-emphasis profile-username">Morton Satterfield</h5>
                <p class="mb-0 fs-sm lh-1">Active</p>
            </div>
            <div class="flex-shrink-0">
                <div class="mt-n1">
                    <button type="button" class="btn btn-link btn-icon btn-sm text-primary fs-lg text-decoration-none rounded-circle bg-primary-subtle bg-opacity-10" id="emailchat-btn-close"><i class="ri-close-fill"></i></button>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0">
            <div id="users-chat">
                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 250px;">
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
<!--END CHAT-->

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
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/libs/rater-js/index.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/learning-overview.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection