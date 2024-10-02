@extends('layouts.master')
@section('title')
@lang('translation.pricing')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Pricing @endslot
@endcomponent

<div class="row justify-content-center mt-4">
    <div class="col-lg-5">
        <div class="text-center mb-5">
            <h4 class="fw-semibold fs-4xl">Plans & Pricing</h4>
            <p class="text-muted mb-4 fs-base">Simple pricing. No hidden fees. Advanced features for you business.</p>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row justify-content-center">
    <div class="col-xxl-9">
        <div class="row">
            <div class="col-xxl-4 col-lg-6 g-3">
                <div class="card pricing-box">
                    <div class="card-body p-4">
                        <div class="d-flex gap-3 align-items-center mb-4 pb-2">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-success-subtle text-success fs-3 rounded">
                                    <i class="ph ph-telegram-logo"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-2">Free Plan</h5>
                                <p class="text-muted mb-0">For Startup</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h3 class="mb-0 me-2">$29.99 <small class="fw-normal text-muted fs-xs">/Monthly</small></h3>
                        </div>

                        <div class="mt-4">
                            <ul class="ps-3 vstack gap-3">
                                <li class="active"><b>3</b> Projects</li>
                                <li class="active"><b>299</b> Customers</li>
                                <li class="active">Scalable Bandwidth</li>
                                <li class="active"><b>0</b> No Team Account</li>
                                <li class="text-decoration-line-through text-muted">In app messaging</li>
                                <li class="text-decoration-line-through text-muted"><b>5</b> FTP Login</li>
                                <li class="text-decoration-line-through text-muted">Detailed Analytics</li>
                                <li class="text-decoration-line-through text-muted">Custom domain</li>
                                <li class="text-decoration-line-through text-muted">Smart Workflow</li>
                                <li class="text-decoration-line-through text-muted">IQ test</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary w-100">Change Plan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-xxl-4 col-lg-6 g-3">
                <div class="card pricing-box ribbon-box right">
                    <div class="ribbon ribbon-danger vertical-shape">Popular</div>
                    <div class="card-body p-4">
                        <div class="d-flex gap-3 align-items-center mb-4 pb-2">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-success-subtle text-success fs-3 rounded">
                                    <i class="ph ph-telegram-logo"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-2">Professional Plan</h5>
                                <p class="text-muted mb-0">Professional plans</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h3 class="mb-0 me-2">$49.99 <small class="fw-normal text-muted fs-xs">/Monthly</small></h3>
                        </div>
                        <div class="mt-4">
                            <ul class="ps-3 vstack gap-3">
                                <li class="active"><b>3</b> Projects</li>
                                <li class="active"><b>299</b> Customers</li>
                                <li class="active">Scalable Bandwidth</li>
                                <li class="active"><b>0</b> No Team Account</li>
                                <li class="active">In app messaging</li>
                                <li class="active"><b>5</b> FTP Login</li>
                                <li class="active">Detailed Analytics</li>
                                <li class="active">Custom domain</li>
                                <li class="text-decoration-line-through text-muted">Smart Workflow</li>
                                <li class="text-decoration-line-through text-muted">IQ test</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-secondary disabled w-100">Your Current Plan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-xxl-4 col-lg-6 g-3">
                <div class="card pricing-box">
                    <div class="card-body p-4">
                        <div>
                            <div class="d-flex gap-3 align-items-center mb-4 pb-2">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-success-subtle text-success fs-3 rounded">
                                        <i class="ph ph-telegram-logo"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="mb-2">Professional Plan</h5>
                                    <p class="text-muted mb-0">Professional plans</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h3 class="mb-0 me-2">$99.99 <small class="fw-normal text-muted fs-xs">/Monthly</small></h3>
                            </div>
                            <div class="mt-4">
                                <ul class="ps-3 vstack gap-3">
                                    <li class="active"><b>3</b> Projects</li>
                                    <li class="active"><b>299</b> Customers</li>
                                    <li class="active">Scalable Bandwidth</li>
                                    <li class="active"><b>0</b> No Team Account</li>
                                    <li class="active">In app messaging</li>
                                    <li class="active"><b>5</b> FTP Login</li>
                                    <li class="active">Detailed Analytics</li>
                                    <li class="active">Custom domain</li>
                                    <li class="active">Smart Workflow</li>
                                    <li class="active">IQ test</li>
                                </ul>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary w-100">Change Plan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!--end row-->
    </div>
    <!--end col-->
</div>
<!-- end row -->

<div class="row justify-content-center mt-4">
    <div class="col-lg-5">
        <div class="text-center mb-5">
            <h4 class="fw-semibold fs-4xl">Plans & Pricing</h4>
            <p class="text-muted mb-4 fs-base">Simple pricing. No hidden fees. Advanced features for you business.</p>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row justify-content-center">
    <div class="col-xxl-3 col-lg-6">
        <div class="card">
            <div class="card-body p-4">
                <div class="flex-grow-1 mb-4 pb-2">
                    <h5 class="mb-2">Personal Plan</h5>
                    <p class="text-muted mb-0">Perfect plan for Starters</p>
                </div>
                <div class="mb-4">
                    <h3 class="mb-0 me-2">$19.99 <small class="fs-xs text-muted fw-normal">/Monthly</small></h3>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100">Change Plan</button>
                </div>
                <div class="mt-4">
                    <ul class="list-unstyled vstack gap-3 mb-0">
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>Unlimited</b> Projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Sync across devices</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Scalable Bandwidth</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>5</b> FTP Login</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-xxl-3 col-lg-6">
        <div class="card ribbon-box right">
            <div class="ribbon ribbon-danger vertical-shape">Popular</div>
            <div class="card-body p-4">
                <div class="flex-grow-1 mb-4 pb-2">
                    <h5 class="mb-2">Professional Plan</h5>
                    <p class="text-muted mb-0">For users who want to do more.</p>
                </div>
                <div class="mb-4">
                    <h3 class="mb-0 me-2">$49.99 <small class="fs-xs text-muted fw-normal">/Monthly</small></h3>
                </div>
                <div class="mt-4">
                    <button class="btn btn-secondary disabled w-100">Your Current Plan</button>
                </div>
                <div class="mt-4">
                    <ul class="list-unstyled vstack gap-3 mb-0">
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Everything in Free Plans</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>Unlimited</b> Projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Sync across devices</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Scalable Bandwidth</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-xxl-3 col-lg-6">
        <div class="card">
            <div class="card-body p-4">
                <div class="flex-grow-1 mb-4 pb-2">
                    <h5 class="mb-2">Enterprise Plan</h5>
                    <p class="text-muted mb-0">Your entire team in one place</p>
                </div>
                <div class="mb-4">
                    <h3 class="mb-0 me-2">$49.99 <small class="fs-xs text-muted fw-normal">/Monthly</small></h3>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100">Change Plan</button>
                </div>
                <div class="mt-4">
                    <ul class="list-unstyled vstack gap-3 mb-0">
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Everything in Pro Plan</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>Unlimited</b> Projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Scalable Bandwidth</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>30</b> day version history</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Admin tools</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-xxl-3 col-lg-6">
        <div class="card">
            <div class="card-body p-4">
                <div class="flex-grow-1 mb-4 pb-2">
                    <h5 class="mb-2">Unlimited Plan</h5>
                    <p class="text-muted mb-0">Run your company on your teams</p>
                </div>
                <div class="mb-4">
                    <h3 class="mb-0 me-2">$49.99 <small class="fs-xs text-muted fw-normal">/Monthly</small></h3>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary w-100">Change Plan</button>
                </div>
                <div class="mt-4">
                    <ul class="list-unstyled vstack gap-3 mb-0">
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Everything in Enterprise Plan</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>Unlimited</b> Projects</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Sync across devices</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Scalable Bandwidth</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Share with <b>5</b> team members</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0"><b>30</b> day version history</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-lg text-success me-2 align-middle"></i>
                                <p class="mb-0">Admin tools</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
        <div class="text-center mb-5">
            <h3 class="fw-semibold fs-4xl">Our plans for your Business</h3>
            <p class="text-muted fs-base">Simple pricing. No hidden fees. Advanced features for you business.</p>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xxl-3 col-lg-6">
        <div class="card card-animate border-0 border-top border-2 border-success rounded-0 rounded-bottom">
            <div class="card-body m-2 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Starter</h5>
                    </div>
                    <div class="ms-auto">
                        <h2 class="mb-0">$19 <small class="fs-sm text-muted">/Month</small></h2>
                    </div>
                </div>

                <p class="text-muted">The perfect way to get started and get used to our tools.</p>
                <ul class="list-unstyled vstack gap-3">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>3</b> Projects
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>299</b> Customers
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Scalable Bandwidth
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>5</b> FTP Login
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-3 pt-2">
                    <a href="javascript:void(0);" class="btn btn-danger disabled w-100">Your Current Plan</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->

    <div class="col-xxl-3 col-lg-6">
        <div class="card card-animate border-0 border-top border-2 border-secondary rounded-0 rounded-bottom">
            <div class="card-body m-2 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Professional</h5>
                    </div>
                    <div class="ms-auto">
                        <h2 class="mb-0">$29 <small class="fs-sm text-muted">/Month</small></h2>
                    </div>
                </div>
                <p class="text-muted">Excellent for scaling teams to build culture. Special plan for professional business.</p>
                <ul class="list-unstyled vstack gap-3">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>8</b> Projects
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>449</b> Customers
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Scalable Bandwidth
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>7</b> FTP Login
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>24/7</b> Support
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-3 pt-2">
                    <a href="javascript:void(0);" class="btn btn-info w-100">Change Plan</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->

    <div class="col-xxl-3 col-lg-6">
        <div class="card card-animate border-0 border-top border-2 border-primary rounded-0 rounded-bottom">
            <div class="card-body m-2 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Enterprise</h5>
                    </div>
                    <div class="ms-auto">
                        <h2 class="mb-0">$39 <small class="fs-sm text-muted">/Month</small></h2>
                    </div>
                </div>
                <p class="text-muted">This plan is for those who have a team already and running a large business.</p>
                <ul class="list-unstyled vstack gap-3">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>15</b> Projects
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>Unlimited</b> Customers
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Scalable Bandwidth
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>12</b> FTP Login
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>24/7</b> Support
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>35GB</b> Storage
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-3 pt-2">
                    <a href="javascript:void(0);" class="btn btn-info w-100">Change Plan</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->

    <div class="col-xxl-3 col-lg-6">
        <div class="card card-animate border-0 border-top border-2 border-info rounded-0 rounded-bottom">
            <div class="p-1 bg-info bg-opacity-10 text-center text-info fw-semibold"><span><i class="ri-flashlight-fill align-bottom me-1"></i> Most Popular Choice</span></div>
            <div class="card-body m-2 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Unlimited</h5>
                    </div>
                    <div class="ms-auto">
                        <h2 class="mb-0">$49 <small class="fs-sm text-muted">/Month</small></h2>
                    </div>
                </div>
                <p class="text-muted">For most businesses that want to optimize web queries.</p>
                <ul class="list-unstyled vstack gap-3">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>Unlimited</b> Projects
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>Unlimited</b> Customers
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Scalable Bandwidth
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>Unlimited</b> FTP Login
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>24/7</b> Support
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>Unlimited</b> Storage
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Domain
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-3 pt-2">
                    <a href="javascript:void(0);" class="btn btn-info w-100">Change Plan</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row justify-content-center mt-5">
    <div class="col-xl-4">
        <div class="text-center mb-4 pb-2">
            <h4 class="fw-semibold fs-4xl">Simple Pricing Plan</h4>
            <p class="text-muted mb-4 fs-base">Simple pricing. No hidden fees. Advanced features for you business.</p>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-xxl-4 col-lg-6">
        <div class="card overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="card-body bg-success-subtle h-100 d-flex flex-column">
                        <div>
                            <h5>Starter</h5>
                            <p>Starter plans</p>
                        </div>

                        <div class="pt-3 mt-auto">
                            <h2 class="text-success mb-0">$24.99 <span class="fs-xs fw-normal text-success opacity-75"> /Per month</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-body h-100">
                        <ul class="list-unstyled vstack gap-3 mb-4">
                            <li><i class="bi bi-check2-square text-success me-1"></i> Users: <span class="fw-semibold">1</span></li>
                            <li><i class="bi bi-check2-square text-success me-1"></i> Storage: <span class="fw-semibold">01 GB</span></li>
                            <li><i class="bi bi-check2-square text-success me-1"></i> Domain: <span class="fw-semibold">No</span></li>
                            <li><i class="bi bi-check2-square text-success me-1"></i> Support: <span class="fw-semibold">No</span></li>
                        </ul>
                        <button type="button" class="btn btn-success w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-4 col-lg-6">
        <div class="card overflow-hidden ribbon-box right">
            <div class="ribbon ribbon-danger round-shape">Hot</div>
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="card-body bg-primary-subtle h-100 d-flex flex-column">
                        <div>
                            <h5>Professional</h5>
                            <p>Professional plans</p>
                        </div>

                        <div class="pt-3 mt-auto">
                            <h2 class="text-primary mb-0">$49.99 <span class="fs-xs fw-normal text-primary opacity-75"> /Per month</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-body h-100">
                        <ul class="list-unstyled vstack gap-3 mb-4">
                            <li><i class="bi bi-check2-square text-primary me-1"></i> Users: <span class="fw-semibold">1</span></li>
                            <li><i class="bi bi-check2-square text-primary me-1"></i> Storage: <span class="fw-semibold">5 GB</span></li>
                            <li><i class="bi bi-check2-square text-primary me-1"></i> Domain: <span class="fw-semibold">Yes</span></li>
                            <li><i class="bi bi-check2-square text-primary me-1"></i> Support: <span class="fw-semibold">No</span></li>
                        </ul>
                        <button type="button" class="btn btn-primary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-4 col-lg-6">
        <div class="card overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="card-body bg-secondary-subtle h-100 d-flex flex-column">
                        <div>
                            <h5>Unlimited</h5>
                            <p>Unlimited plans</p>
                        </div>

                        <div class="pt-3 mt-auto">
                            <h2 class="text-secondary mb-0">$99.99 <span class="fs-xs fw-normal text-secondary opacity-75"> /Per month</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-body h-100">
                        <ul class="list-unstyled vstack gap-3 mb-4">
                            <li><i class="bi bi-check2-square text-secondary me-1"></i> Users: <span class="fw-semibold">5</span></li>
                            <li><i class="bi bi-check2-square text-secondary me-1"></i> Storage: <span class="fw-semibold">40 GB</span></li>
                            <li><i class="bi bi-check2-square text-secondary me-1"></i> Domain: <span class="fw-semibold">Yes</span></li>
                            <li><i class="bi bi-check2-square text-secondary me-1"></i> Support: <span class="fw-semibold">Yes</span></li>
                        </ul>
                        <button type="button" class="btn btn-secondary w-100">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection