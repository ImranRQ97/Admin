@extends('layouts.master')
@section('title')
@lang('translation.my-cources')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Students
@endslot
@slot('title')
My Courses
@endslot
@endcomponent

<div class="row">
    <div class="col-xl-9 col-lg-8">
        <div class="card">
            <div class="card-body d-flex gap-3 align-items-center">
                <h6 class="card-title flex-grow-1 mb-0">My Courses <span class="badge bg-dark-subtle text-body align-baseline ms-1">23</span></h6>
                <div class="flex-shrink-0">
                    <a href="apps-student-subscriptions" class="btn btn-primary"><i class="bi bi-bag align-baseline me-1"></i> Upgrade Courses</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-3 col-md-4">
                            <div class="card-body bg-info-subtle text-center learning-widgets d-flex align-items-center justify-content-center h-100">
                                <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="avatar-lg">
                                <img src="{{ URL::asset('build/images/learning/react.png') }}" alt="" class="effect">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-9 col-md-8">
                            <div class="card-body">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="badge bg-success-subtle text-success">Beginner</span>
                                    </div>
                                    <div class="flex-shrink-0 fs-lg fw-medium">
                                        $425.36
                                    </div>
                                </div>
                                <h5 class="text-truncate text-capitalize"><a href="apps-learning-overview" class="text-reset">Advanced React and Redux</a></h5>
                                <p class="text-muted">React Development</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-primary me-1"></i> 6 Months</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-primary me-1"></i> 256</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-primary me-1"></i> 15 Lessons</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-globe-stand align-middle text-primary me-1"></i> English, France</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top border-dashed hstack align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-xxs rounded-circle">
                                    </div>
                                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Ayaan Bowen</a></h6>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="progress bg-primary-subtle progress-sm rounded-0" data-bs-toggle="tooltip" data-bs-title="74% Completed">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-3 col-md-4">
                            <div class="card-body bg-danger-subtle text-center learning-widgets d-flex align-items-center justify-content-center h-100">
                                <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="avatar-lg">
                                <img src="{{ URL::asset('build/images/learning/laravel.png') }}" alt="" class="effect">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-9 col-md-8">
                            <div class="card-body">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="badge bg-info-subtle text-info">Advance</span>
                                    </div>
                                    <div class="flex-shrink-0 fs-lg fw-medium">
                                        $264.71
                                    </div>
                                </div>
                                <h5 class="text-truncate text-capitalize"><a href="apps-learning-overview" class="text-reset">Master Laravel for Beginners & Intermediate</a></h5>
                                <p class="text-muted">Laravel Development</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-primary me-1"></i> 1 Years</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-primary me-1"></i> 84</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-primary me-1"></i> 57 Lessons</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-globe-stand align-middle text-primary me-1"></i> English</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top border-dashed hstack align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-xxs rounded-circle">
                                    </div>
                                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Ophelia Steuber</a></h6>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.8</span>
                                </div>
                            </div>
                            <div class="progress bg-warning-subtle progress-sm rounded-0" data-bs-toggle="tooltip" data-bs-title="53% Completed">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-3 col-md-4">
                            <div class="card-body bg-primary-subtle text-center learning-widgets d-flex align-items-center justify-content-center h-100">
                                <img src="{{ URL::asset('build/images/learning/core.png') }}" alt="" class="avatar-lg">
                                <img src="{{ URL::asset('build/images/learning/core.png') }}" alt="" class="effect">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-9 col-md-8">
                            <div class="card-body">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="badge bg-danger-subtle text-danger">Intermediate</span>
                                    </div>
                                    <div class="flex-shrink-0 fs-lg fw-medium">
                                        $249.99
                                    </div>
                                </div>
                                <h5 class="text-truncate text-capitalize"><a href="apps-learning-overview" class="text-reset">Asp.Net Core 7 True Ultimate Guide</a></h5>
                                <p class="text-muted">Asp.Net Development</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-primary me-1"></i> 8 Years</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-primary me-1"></i> 321</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-primary me-1"></i> 95 Lessons</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-globe-stand align-middle text-primary me-1"></i> English, France</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top border-dashed hstack align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-xxs rounded-circle">
                                    </div>
                                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Deondre Huel</a></h6>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.7</span>
                                </div>
                            </div>
                            <div class="progress bg-success-subtle progress-sm rounded-0" data-bs-toggle="tooltip" data-bs-title="87% Completed">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-3 col-md-4">
                            <div class="card-body bg-success-subtle text-center learning-widgets d-flex align-items-center justify-content-center h-100">
                                <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="avatar-lg">
                                <img src="{{ URL::asset('build/images/learning/shopify.png') }}" alt="" class="effect">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-9 col-md-8">
                            <div class="card-body">
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="badge bg-success-subtle text-success">Beginner</span>
                                    </div>
                                    <div class="flex-shrink-0 fs-lg fw-medium">
                                        $134.69
                                    </div>
                                </div>
                                <h5 class="text-truncate text-capitalize"><a href="apps-learning-overview" class="text-reset">The Complete Shopify Dropship course</a></h5>
                                <p class="text-muted">Shopify Development</p>
                                <ul class="d-flex align-items-center gap-2 flex-wrap list-unstyled mb-0">
                                    <li>
                                        <p class="text-muted mb-0"><i class="bi bi-clock align-baseline text-primary me-1"></i> 9 Months</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-student align-middle text-primary me-1"></i> 134</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-graduation-cap align-middle text-primary me-1"></i> 36 Lessons</p>
                                    </li>
                                    <li>
                                        <p class="text-muted mb-0"><i class="ph ph-globe-stand align-middle text-primary me-1"></i> English, France</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top border-dashed hstack align-items-center gap-2">
                                <div class="d-flex align-items-center gap-2 flex-grow-1 position-relative">
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-xxs rounded-circle">
                                    </div>
                                    <h6 class="flex-grow-1 mb-0"><a href="pages-profile" class="text-reset stretched-link">Nelson Schaden</a></h6>
                                </div>
                                <div class="flex-shrink-0">
                                    <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.9</span>
                                </div>
                            </div>
                            <div class="progress bg-secondary-subtle progress-sm rounded-0" data-bs-toggle="tooltip" data-bs-title="30% Completed">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end col-->
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4 pb-2">
                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-md rounded-circle d-block mx-auto">
                    <div class="mt-3">
                        <a href="pages-profile">
                            <h5>Josefa Weissna</h5>
                        </a>
                        <p class="text-muted mb-0">Student</p>
                    </div>
                </div>
                <div class="upcoming-scheduled pt-4">
                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-default-date="30 Oct, 2023" data-inline-date="true">
                </div>
            </div>
        </div>
        <!--end card-->
        <div class="mb-3">
            <h6 class="card-title">Courses Schedule</h6>
        </div>
        <div class="card">
            <div class="card-body d-flex gap-3">
                <div class="flex-shrink-0">
                    <div class="avatar-sm border-end border-dashed">
                        <div class="avatar-title bg-body-secondary text-body-secondary p-2 text-center">
                            16 Feb
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <a href="apps-learning-overview" class="stretched-link">
                        <h6 class="fs-md">React Development</h6>
                    </a>
                    <p class="text-muted mb-0"><b>9</b> of 15 Lessons</p>
                </div>
                <div class="flex-shrink-0 text-muted">
                    08:54 AM
                </div>
            </div>
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-body d-flex gap-3">
                <div class="flex-shrink-0">
                    <div class="avatar-sm border-end border-dashed">
                        <div class="avatar-title bg-body-secondary text-body-secondary p-2 text-center">
                            28 Jan
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <a href="apps-learning-overview" class="stretched-link">
                        <h6 class="fs-md">Shopify Development</h6>
                    </a>
                    <p class="text-muted mb-0"><b>18</b> of 43 Lessons</p>
                </div>
                <div class="flex-shrink-0 text-muted">
                    10:49 PM
                </div>
            </div>
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-body d-flex gap-3">
                <div class="flex-shrink-0">
                    <div class="avatar-sm border-end border-dashed">
                        <div class="avatar-title bg-body-secondary text-body-secondary p-2 text-center">
                            19 Jan
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <a href="apps-learning-overview" class="stretched-link">
                        <h6 class="fs-md">Laravel Development</h6>
                    </a>
                    <p class="text-muted mb-0"><b>3</b> of 68 Lessons</p>
                </div>
                <div class="flex-shrink-0 text-muted">
                    03:24 PM
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
