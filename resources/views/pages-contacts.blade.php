@extends('layouts.master')
@section('title')
@lang('translation.contacts')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Contact @endslot
@endcomponent

<div class="row align-items-center g-3 mb-4">
    <div class="col-sm-3 me-auto">
        <h5 class="card-title mb-0">Contact List <span class="badge bg-success ms-1 align-baseline">834</span></h5>
    </div>
    <!--end col-->
    <div class="col-lg-3 col-sm-5 col">
        <div class="search-box">
            <input type="text" class="form-control search" placeholder="Search for name, number, location or something...">
            <i class="ri-search-line search-icon"></i>
        </div>
    </div>
    <div class="col-sm-auto col-auto">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2">
            <div>
                <a href="#" class="btn btn-primary"><i class="bx bx-plus me-1"></i> Add New</a>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Patricia Honda</a></h5>
                        <p class="text-muted mb-0">Full Stack Developer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 617 219 6245</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> patriciahonda@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 2995 Lynn Street Newton, MA 02160</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">James Lash</a></h5>
                        <p class="text-muted mb-0">Web Designer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 617 219 6245</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> jameslash@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 3089 Leroy Lane Pollock, SD 57648</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Angus Garnsey</a></h5>
                        <p class="text-muted mb-0">React Developer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 085 383 2388</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> angusgarnsey@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 1738 Old Cress Lady Frere 5411</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Matilda Marston</a></h5>
                        <p class="text-muted mb-0">Shopify Developer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 082 288 1065</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> matildamarston@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 2168 Bezuidenhout St Evander 2270</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Zachary Benjamin</a></h5>
                        <p class="text-muted mb-0">Shopify Developer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 348 9730237</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> zacharybenjamin@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Via Carlo Alberto, 8 22020-Faloppio CO</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <div class="avatar-sm">
                            <div class="avatar-title fs-lg bg-danger-subtle text-danger rounded">
                                RC
                            </div>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Ruby Chomley</a></h5>
                        <p class="text-muted mb-0">Shopify Developer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 348 9730237</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> rubychomley@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Via Pasquale Scura, 76 75010-Calciano MT</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Sophia Prendiville</a></h5>
                        <p class="text-muted mb-0">Angular Developer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 0354 3037376</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> sophiaprendiville@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 36078-Maglio Di Sopra VI</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <div class="avatar-sm">
                            <div class="avatar-title fs-lg bg-info-subtle text-info rounded">
                                SZ
                            </div>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Samantha Zepps</a></h5>
                        <p class="text-muted mb-0">Project Manager</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 0365 4363346</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> samanthazepps@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Via del Carmine, 108 36040-Sarego VI</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <div class="avatar-sm">
                            <div class="avatar-title fs-lg bg-warning-subtle text-warning rounded">
                                XB
                            </div>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Xavier Bower</a></h5>
                        <p class="text-muted mb-0">Graphic Designer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 0486 45 08 27</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> xavierbower@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Rue Haute 47 8630 Steenkerke</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Ryder Herron</a></h5>
                        <p class="text-muted mb-0">Flask Development</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 0496 11 27 97</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> ryderherron@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Rue du Commerce 366 3722 Wintershoven</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Jesse Edouard</a></h5>
                        <p class="text-muted mb-0">CEO & Founder</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 044 017 3869</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> jessedouard@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Laivurinkatu 29 49460 HAMINA</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Remove</a>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 position-relative">
                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-sm rounded">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h5 class="fs-md"><a href="pages-profile" class="text-dark">Isabel Hardwicke</a></h5>
                        <p class="text-muted mb-0">Web Designer</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 046 535 5916</p>
                    <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> isabelhardwicke@steex.com</p>
                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Kankaanpääntie 64 94450 KEMINMAA</p>
                </div>
                <div class="d-flex gap-2 pt-4">
                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
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
            Showing <span class="fw-semibold">12</span> of <span class="fw-semibold">20</span> Results
        </div>
    </div>
    <!--end col-->
    <div class="col-sm-auto mt-3 mt-sm-0">
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

@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
