@extends('layouts.master-without-nav')
@section('title')
@lang('translation.two-step-verification')
@endsection
@section('content')

    <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-xxl-5">
                                <div class="card auth-card bg-secondary h-100 border-0 shadow-none d-none d-sm-block mb-0">
                                    <div class="card-body py-5 d-flex justify-content-between flex-column h-100">
                                        <div class="text-center">
                                            <h3 class="text-white">Start your journey with us.</h3>
                                            <p class="text-white opacity-75 fs-base">It brings together your tasks, projects, timelines, files and more</p>
                                        </div>

                                        <div class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                            <div class="effect-circle-1 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                <div class="effect-circle-2 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="effect-circle-3 mx-auto rounded-circle position-relative text-white fs-4xl d-flex align-items-center justify-content-center">
                                                        Welcome to <span class="text-primary ms-1">Steex</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="auth-user-list list-unstyled">
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="text-center">
                                            <p class="text-white opacity-75 mb-0 mt-3">
                                                &copy;
                                                <script>document.write(new Date().getFullYear())</script> Steex. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="p-2 mt-4">

                                            
                                            <div class="text-muted text-center mb-4 pb-2 mx-lg-3">
                                                <div class="mb-4">
                                                    <img src="{{ URL::asset('build/images/auth/permission.png') }}" alt="" class="avatar-md">
                                                </div>
                                                <h4>Verify Your Email</h4>
                                                <p>Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>
                                            </div>
                                        
                                            <form autocomplete="off">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                            <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                                        </div>
                                                    </div><!-- end col -->
                                        
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                            <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                                        </div>
                                                    </div><!-- end col -->
                                        
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                            <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                                        </div>
                                                    </div><!-- end col -->
                                        
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                            <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div>
                                            </form><!-- end form -->
                                        
                                            <div class="mt-3">
                                                <button type="button" class="btn btn-primary w-100">Confirm</button>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Didn't receive a code ? <a href="auth-pass-reset" class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
@section('script')
    <!-- two step verification init js -->
       <script src="{{ URL::asset('build/js/pages/two-step-verification.init.js') }}"></script>

@endsection