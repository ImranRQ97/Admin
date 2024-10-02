@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.lock-screen')
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
                                            <p class="text-white opacity-75 fs-base">It brings together your tasks,
                                                projects, timelines, files and more</p>
                                        </div>

                                        <div
                                            class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                            <div
                                                class="effect-circle-1 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                <div
                                                    class="effect-circle-2 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                    <div
                                                        class="effect-circle-3 mx-auto rounded-circle position-relative text-white fs-4xl d-flex align-items-center justify-content-center">
                                                        Welcome to <span class="text-primary ms-1">Steex</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="auth-user-list list-unstyled">
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div
                                                            class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div
                                                            class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div
                                                            class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div
                                                            class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="avatar-sm d-inline-block">
                                                        <div
                                                            class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                            <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="text-center">
                                            <p class="text-white opacity-75 mb-0 mt-3">
                                                &copy;
                                                <script>
                                                    document.write(new Date().getFullYear())
                                                </script> Steex. Crafted with <i
                                                    class="mdi mdi-heart text-danger"></i> by Themesbrand
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6 mx-auto">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-5 m-lg-4">
                                        <div class="text-center">
                                            <h5 class="fs-3xl">Lock Screen</h5>
                                            <p class="text-muted mb-4">Enter your password to unlock the screen!</p>
                                        </div>
                                        <div class="user-thumb text-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                            <h5 class="font-size-15 mt-3">Hi ! Richard Marshall</h5>
                                        </div>
                                        <div class="p-2 mt-4">
                                            <form method="POST" action="{{ route('password.confirm') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label" for="userpassword">Password <span class="text-danger">*</span></label>
                                                    <input type="password"
                                                        class="form-control password-input @error('password') is-invalid @enderror"
                                                        id="userpassword" placeholder="Enter your password" name="password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-2 mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Unlock</button>
                                                </div>
                                            </form><!-- end form -->

                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Not you ? return <a href="{{ route('login') }}"
                                                    class="fw-semibold text-primary text-decoration-underline"> Sign in </a>
                                            </p>
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