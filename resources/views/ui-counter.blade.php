@extends('layouts.master')
@section('title') @lang('translation.counter') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Custom UI @endslot
@slot('title') Counter  @endslot
@endcomponent

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Basic</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-4">Use basic counters to show custom details.</p>

                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3"><span class="counter-value" data-target="25500">0</span></h4>
                                                <p class="text-muted fs-md mb-0">Happy Users & Counting</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3"><span class="counter-value" data-target="25500">0</span></h4>
                                                <p class="text-muted fs-md mb-0">Happy Users & Counting</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3"><span class="counter-value" data-target="25500">0</span></h4>
                                                <p class="text-muted fs-md mb-0">Happy Users & Counting</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3"><span class="counter-value" data-target="25500">0</span></h4>
                                                <p class="text-muted fs-md mb-0">Happy Users & Counting</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Counter with Symbols</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-4">Use symbol with counter to show earning like data.</p>

                                    <div class="row g-4">
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3">$<span class="counter-value" data-target="674.30">0</span>k</h4>
                                                <p class="text-muted fs-md mb-0">Total Earnings</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3"><span class="counter-value" data-target="365424">0</span></h4>
                                                <p class="text-muted fs-md mb-0">Orders</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3"><span class="counter-value" data-target="1030.35">0</span>M</h4>
                                                <p class="text-muted fs-md mb-0">Customers</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="text-center">
                                                <h4 class="fs-4xl fw-semibold mb-3">$<span class="counter-value" data-target="165.89">0</span>k</h4>
                                                <p class="text-muted fs-md mb-0">My Balance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Counter with Icons</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-4">Use icon counter to show your number of Happy clients, Downloads etc data.</p>

                                    <div class="row g-4 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                                        <div class="col">
                                            <div class="card text-center mb-0">
                                                <div class="card-body py-4">
                                                    <div class="avatar-sm mx-auto mb-4">
                                                        <div class="avatar-title bg-success-subtle text-success fs-4xl rounded-circle">
                                                            <i class="bi bi-emoji-smile"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="fs-4xl fw-semibold"><span class="counter-value" data-target="8000">0</span>k</h4>
                                                    <p class="text-muted fs-md mb-0">Happy Clients</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col">
                                            <div class="card text-center border-secondary border-opacity-25 mb-0">
                                                <div class="card-body py-4">
                                                    <div class="avatar-sm mx-auto mb-4">
                                                        <div class="avatar-title bg-secondary-subtle text-secondary fs-4xl rounded-circle">
                                                            <i class="bi bi-download"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="fs-4xl fw-semibold"><span class="counter-value" data-target="3000">0</span>k</h4>
                                                    <p class="text-muted fs-md mb-0">Downloads</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col">
                                            <div class="card text-center mb-0">
                                                <div class="card-body py-4">
                                                    <div class="avatar-sm mx-auto mb-4">
                                                        <div class="avatar-title bg-danger-subtle text-danger fs-4xl rounded-circle">
                                                            <i class="bi bi-cast"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="fs-4xl fw-semibold"><span class="counter-value" data-target="784">0</span>k</h4>
                                                    <p class="text-muted fs-md mb-0">Project Completed</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col">
                                            <div class="card text-center mb-0">
                                                <div class="card-body py-4">
                                                    <div class="avatar-sm mx-auto mb-4">
                                                        <div class="avatar-title text-bg-primary fs-4xl rounded-circle">
                                                            <i class="bi bi-clock"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="fs-4xl fw-semibold"><span class="counter-value" data-target="365">0</span></h4>
                                                    <p class="text-muted fs-md mb-0">Working Days</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card text-center mb-0">
                                                <div class="card-body py-4">
                                                    <div class="avatar-sm mx-auto mb-4">
                                                        <div class="avatar-title bg-warning-subtle text-warning fs-4xl rounded-circle">
                                                            <i class="bi bi-trophy"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="fs-4xl fw-semibold"><span class="counter-value" data-target="59">0</span></h4>
                                                    <p class="text-muted fs-md mb-0">Awards</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
