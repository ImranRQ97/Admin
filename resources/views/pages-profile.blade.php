@extends('layouts.master')
@section('title')
@lang('translation.profile')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Profile  @endslot
@endcomponent

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <div class="dropdown flex-shrink-0 ms-auto">
                        <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-share"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#!"><i class="bi bi-facebook me-1 align-baseline"></i> Facebook</a></li>
                            <li><a class="dropdown-item" href="#!"><i class="bi bi-whatsapp me-1 align-baseline"></i> Whatsapp</a></li>
                            <li><a class="dropdown-item" href="#!"><i class="bi bi-instagram me-1 align-baseline"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center border-bottom border-dashed pb-4">
                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-lg rounded-circle p-1 img-thumbnail">
                    <div class="mt-3">
                        <h5>Richard Marshall <i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                        <p class="text-muted">Web Developer</p>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button type="button" class="btn btn-subtle-secondary custom-toggle w-50" data-bs-toggle="button" aria-pressed="true">
                            <span class="icon-on"><i class="bi bi-person-plus align-baseline me-1"></i> Follow</span>
                            <span class="icon-off"><i class="bi bi-person-x align-baseline me-1"></i> Unfollow</span>
                        </button>
                        <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                    </div>
                </div>

                <div class="border-bottom border-dashed py-4">
                    <h5 class="card-title mb-3">Information</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm align-middle mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">Designation</th>
                                    <td class="text-muted text-end">Web Developer</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Phone No</th>
                                    <td class="text-muted text-end">617 219 6245</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Birth of Date</th>
                                    <td class="text-muted text-end">24 June, 1998</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Website</th>
                                    <td class="text-muted text-end"><a href="http://themesbrand.com/" target="_blank">www.themesbrand.com</a></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Email</th>
                                    <td class="text-muted text-end">richardmarshall@steex.com</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Location</th>
                                    <td class="text-muted text-end">Los Angeles, California</td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Joining Date</th>
                                    <td class="text-muted text-end">30 Oct 2023</td>
                                </tr>
                                <tr>
                                    <th>Social Media</th>
                                    <td>
                                        <div class="d-flex flex-wrap justify-content-end gap-2">
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle bg-secondary-subtle text-dark">
                                                    <i class="bi bi-github"></i>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                    <i class="bi bi-facebook"></i>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle bg-success-subtle text-success">
                                                    <i class="bi bi-dribbble"></i>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="avatar-xs d-block">
                                                <span class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                    <i class="bi bi-instagram"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="border-bottom border-dashed py-4">
                    <h5 class="card-title mb-3">Documents</h5>
                    <div class="vstack gap-3">
                        <div class="d-flex gap-2 align-items-center position-relative">
                            <div class="flex-shrink-0">
                                <div class="avatar-sm border border rounded">
                                    <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                        <i class="bi bi-file-zip"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Artboard.zip</h6>
                                <p class="text-muted mb-0">2.02MB</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                            </div>
                        </div>

                        <div class="d-flex gap-2 align-items-center position-relative">
                            <div class="flex-shrink-0">
                                <div class="avatar-sm border border rounded">
                                    <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                        <i class="bi bi-filetype-txt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Steex.txt</h6>
                                <p class="text-muted mb-0">1.49 MB</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                            </div>
                        </div>

                        <div class="d-flex gap-2 align-items-center position-relative">
                            <div class="flex-shrink-0">
                                <div class="avatar-sm border border rounded">
                                    <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                        <i class="bi bi-image"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Profile bg.png</h6>
                                <p class="text-muted mb-0">325 KB</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                            </div>
                        </div>

                        <div class="d-flex gap-2 align-items-center position-relative">
                            <div class="flex-shrink-0">
                                <div class="avatar-sm border border rounded">
                                    <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                        <i class="bi bi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Steex Docs.pdf</h6>
                                <p class="text-muted mb-0">2.06 MB</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pt-4">
                    <div class="d-flex align-items-center mb-3 gap-2">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Recent Followers</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#!" class="icon-link">View all <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="d-flex align-items-center gap-2 pb-2">
                                <div class="avatar-sm flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="img-fluid img-thumbnail">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fs-md">Esther James</h6>
                                    <p class="text-muted fs-sm mb-0">Web Designer</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-sm btn-outline-info custom-toggle active" data-bs-toggle="button" aria-pressed="true">
                                        <span class="icon-on"><i class=" bx bx-user-check align-bottom fs-md"></i></span>
                                        <span class="icon-off"><i class=" bx bx-user-x align-bottom fs-md"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 pb-2">
                                <div class="avatar-sm flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="img-fluid img-thumbnail">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fs-md">Jacqueline Steve</h6>
                                    <p class="fs-sm text-muted mb-0">UI/UX Designer</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-sm btn-outline-info custom-toggle" data-bs-toggle="button" aria-pressed="true">
                                        <span class="icon-on"><i class=" bx bx-user-check align-bottom fs-md"></i></span>
                                        <span class="icon-off"><i class=" bx bx-user-x align-bottom fs-md"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="avatar-sm flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="img-fluid img-thumbnail">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="fs-md">George Whalen</h6>
                                    <p class="fs-sm text-muted mb-0">Backend Developer</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-sm btn-outline-info custom-toggle" data-bs-toggle="button" aria-pressed="true">
                                        <span class="icon-on"><i class=" bx bx-user-check align-bottom fs-md"></i></span>
                                        <span class="icon-off"><i class=" bx bx-user-x align-bottom fs-md"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>

            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-xl-9">
        <div class="row align-items-center g-3 mb-3">
            <div class="col-md order-1">
                <!-- Nav tabs -->
                <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                            Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                            Activities
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#projects" role="tab">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#friends" role="tab">
                            Friends
                        </a>
                    </li>
                </ul>
            </div>
            <!--end col-->
            <div class="col-md-auto order-lg-2">
                <a href="pages-profile-settings" class="btn btn-primary"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="tab-content">
            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title mb-3">Media</h5>
                            <div class="row profile-media g-3">
                                <div class="col-lg-3">
                                    <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="" class="img-fluid h-100 rounded object-fit-cover">
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <img src="{{ URL::asset('build/images/learning/img-01.jpg') }}" alt="" class="fixed-width w-100 rounded object-fit-cover">
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="" class="fixed-width w-100 rounded object-fit-cover">
                                        </div>
                                        <!--end-col-->
                                        <div class="col-lg-6">
                                            <img src="{{ URL::asset('build/images/real-estate/img-03.jpg') }}" alt="" class="fixed-width w-100 rounded object-fit-cover">
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3">
                                    <img src="{{ URL::asset('build/images/real-estate/overview-03.jpg') }}" alt="" class="img-fluid rounded object-fit-cover h-100 object-fit-cover">
                                </div>
                                <!--end col-->
                                <div class="col-lg-2">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <img src="{{ URL::asset('build/images/small/img-10.jpg') }}" alt="" class="fixed-width w-100 rounded object-fit-cover">
                                        </div>
                                        <!--end-col-->
                                        <div class="col-lg-12">
                                            <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="" class="fixed-width w-100 rounded object-fit-cover">
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="mb-4">
                            <h5 class="card-title mb-3">About Us</h5>
                            <p class="text-muted mb-2">A <b>Web Developer</b> creates and designs different websites for clients. They are responsible for their aesthetic as well as their function. Professionals in this field may also need to be able to ensure sites are compatible with multiple types of media. Web Developers need to have a firm understanding of programming and graphical design. Having a strong resume that emphasizes these attributes makes it significantly easier to get hired as a Web Developer.</p>
                            <p class="text-muted mb-0">As a web designer, my objective is to make a positive impact on clients, co-workers, and the Internet using my skills and experience to design compelling and attractive websites. Solving code problems. Editing & Design with designing team in the company to build perfect web designs.</p>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="card-title mb-3">Languages</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary-subtle text-primary">English</span>
                                        <span class="badge bg-primary-subtle text-primary">French</span>
                                        <span class="badge bg-primary-subtle text-primary">German</span>
                                        <span class="badge bg-primary-subtle text-primary">Arabic</span>
                                        <span class="badge bg-primary-subtle text-primary">Italiana</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="card-title mb-3 mt-4 mt-lg-0">Skills & Knowledge</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-secondary-subtle text-secondary">Photoshop</span>
                                        <span class="badge bg-secondary-subtle text-secondary">illustrator</span>
                                        <span class="badge bg-secondary-subtle text-secondary">HTML</span>
                                        <span class="badge bg-secondary-subtle text-secondary">CSS</span>
                                        <span class="badge bg-secondary-subtle text-secondary">Javascript</span>
                                        <span class="badge bg-secondary-subtle text-secondary">Php</span>
                                        <span class="badge bg-secondary-subtle text-secondary">Python</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5 class="card-title mb-3">Education Qualification</h5>
                            <ul class="acitivity-timeline-2 list-unstyled mb-0">
                                <li>
                                    <h6 class="fs-md">Masters in Computer Application (MCA)</h6>
                                    <div class="d-flex align-items-center mb-3 gap-3">
                                        <p class="mb-0">
                                            <i class="bi bi-calendar align-baseline me-1"></i> 2023 - Continue
                                        </p>
                                        <p class="mb-0">
                                            <i class="bi bi-buildings align-baseline me-1"></i> California State University
                                        </p>
                                    </div>
                                    <p class="text-muted mb-0">It is a 3-year post-graduate course. To pursue MCA, you must be a graduate from a well-known university after completing 10+2 with Mathematics as a subject to apply for this course.</p>
                                </li>
                                <li>
                                    <h6 class="fs-md">Bachelors's in Computer Application (BCA)</h6>
                                    <div class="d-flex align-items-center mb-3 gap-3">
                                        <p class="mb-0">
                                            <i class="bi bi-calendar align-baseline me-1"></i> 2018 - 2023
                                        </p>
                                        <p class="mb-0">
                                            <i class="bi bi-buildings align-baseline me-1"></i> California State University
                                        </p>
                                    </div>
                                    <p class="text-muted mb-0">BCA is a three-year degree course for people who wish to dive into the world of programming language.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end card-body-->
                </div><!-- end card -->
            </div>
            <!--end tab-pane-->

            <div class="tab-pane fade" id="activities" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Activity Stream</h5>
                    </div>
                    <div class="card-body">
                        <ul class="acitivity-timeline-2 list-unstyled mb-0">
                            <li>
                                <h6 class="fs-md">Purchase by James Price</h6>
                                <p>09:24 PM</p>
                                <p class="mb-0">Product noise evolve smartwatch</p>
                            </li>
                            <li>
                                <h6 class="fs-md">New ticket received <span class="badge text-bg-info align-middle ms-1">New</span></h6>
                                <p class="mb-3">4 days ago</p>
                                <p class="text-muted mb-0">User <span class="text-secondary">Erica245</span> submitted a ticket</p>
                            </li>
                            <li>
                                <h6 class="fs-md">Adding a new event with attachments</h6>
                                <p class="mb-3">30 days ago</p>
                                <div class="border border-dashed p-2 rounded-3">
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <div class="d-flex position-relative gap-2">
                                                <div class="flex-shrink-0">
                                                    <i class="bi bi-file-earmark-image fs-xl text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <a href="javascript:void(0);" class="stretched-link">
                                                        <h6>UI/UX design</h6>
                                                    </a>
                                                    <small>685 KB</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="d-flex position-relative gap-2">
                                                <div class="flex-shrink-0">
                                                    <i class="bi bi-file-pdf fs-xl text-info"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <a href="javascript:void(0);" class="stretched-link">
                                                        <h6>Steex Invoice</h6>
                                                    </a>
                                                    <small>342 KB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h6 class="fs-md">01:30 PM</h6>
                                <p class="mb-0 text-muted">Lunch time after which sleep just doesn't want to let go of me. 🤝</p>
                            </li>
                            <li>
                                <h6 class="fs-md">03:30 PM</h6>
                                <p class="mb-0 text-muted">Drink the magical chai, it will ward off sleep they said. 🤷‍</p>
                            </li>
                            <li>
                                <h6 class="fs-md">Templates layout upload</h6>
                                <p class="mb-3">1 week ago</p>
                                <p class="text-muted fst-italic">
                                    Powerful, clean & modern responsive bootstrap 5 admin template. The maximum file size for uploads in this demo :
                                </p>
                                <div class="row border border-dashed gx-2 p-2">
                                    <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="" class="avatar-md rounded">
                                    <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="avatar-md rounded">
                                    <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="" class="avatar-md rounded">
                                    <img src="{{ URL::asset('build/images/small/img-9.jpg') }}" alt="" class="avatar-md rounded">
                                </div>
                                <!--end row-->
                            </li>
                            <li>
                                <h6 class="fs-md">04:24 PM</h6>
                                <p class="mb-0 text-muted">The only time I don't feel sleepy cause it's work out time. I mean walking time. 😹</p>
                            </li>
                            <li>
                                <h6 class="fs-md">06:43 PM</h6>
                                <p class="mb-0 text-muted">Food my tummy needs, sleep my body needs.👿</p>
                            </li>
                            <li>
                                <h6 class="fs-md">07:36 PM</h6>
                                <p class="mb-0 text-muted">My tummy's happy time 🍝</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end card-->

            </div>
            <!--end tab-pane-->

            <div class="tab-pane fade" id="projects" role="tabpanel">
                <div class="row">
                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-warning-subtle text-warning">Web Design</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Chat App Update</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">2 year Ago</span></p>
                                <h5 class="fs-xs">Inprogress <span class="text-primary float-end">80%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            J
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i>4</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 3</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-primary-subtle text-primary">Mobile App</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">ABC Project Customization</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-medium text-reset">2 month Ago</span></p>
                                <h5 class="fs-xs">Inprogress <span class="text-warning float-end">65%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 25</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 146</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-secondary-subtle text-secondary">Dashboard</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Client - Frank Hook</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">1 year Ago</span></p>
                                <h5 class="fs-xs">Inprogress <span class="text-danger float-end">23%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            M
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i>8</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 98</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-success-subtle text-success">App Development</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Steex Project</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">11 year Ago</span></p>
                                <h5 class="fs-xs">Completed <span class="text-success float-end">100%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 12</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 36</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-secondary-subtle text-secondary">Landing Page</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Brand Logo Design</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">10 min Ago</span></p>
                                <h5 class="fs-xs">Inprogress <span class="text-primary float-end">68%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            E
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 13</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 62</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-info-subtle text-info">Web Development</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-dark">Chat App</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-dark">8 hr Ago</span></p>
                                <h5 class="fs-xs">Inprogress <span class="text-info float-end">76%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            R
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 36</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 195</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->

                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-warning-subtle text-warning">Mobile App</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Project Update</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">48 min Ago</span></p>
                                <h5 class="fs-xs">Progress <span class="text-info float-end">69%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 87</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 249</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-danger-subtle text-danger">Web Design</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Bsuiness Template - UI/UX design</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">7 month Ago</span></p>
                                <h5 class="fs-xs">Inprogress <span class="text-danger float-end">10%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            R
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 130</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 341</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1 me-3">
                                        <div class="badge bg-danger-subtle text-danger">Web Design</div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="text-end dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end mb-0">
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-pencil-square align-baseline me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item" href="#!"><i class="bi bi-trash3 align-baseline me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="fs-md text-truncate"><a href="#" class="text-reset">Bsuiness Template - UI/UX design</a></h6>
                                <p class="text-muted fs-sm text-truncate">Last Update : <span class="fw-semibold text-reset">7 month Ago</span></p>
                                <h5 class="fs-xs">Completed <span class="text-success float-end">100%</span></h5>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; visibility: visible; animation-name: animationProgress;">
                                    </div>
                                </div>
                                <div class="d-flex mt-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-group">
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            R
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#!" class="avatar-group-item">
                                                    <div class="avatar-xxs">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2 hstack gap-3">
                                        <span class="text-muted"><i class="bi bi-paperclip align-baseline me-1"></i> 130</span>
                                        <span class="text-muted"><i class="bi bi-chat-right-dots align-baseline me-1"></i> 341</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center justify-content-between text-center text-sm-start mb-3">
                    <div class="col-sm">
                        <div class="text-muted">
                            Showing <span class="fw-semibold">9</span> of <span class="fw-semibold">11</span> Results
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
                <!--end row-->
            </div>
            <!--end tab-pane-->

            <div class="tab-pane fade" id="friends" role="tabpanel">
                <div class="d-flex align-items-center mb-4">
                    <h5 class="card-title flex-grow-1 mb-0">Friends</h5>
                    <div>
                        <a href="pages-contacts" class="icon-link">View All <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <div class="col-xxl-4 col-sm-6">
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
                                    <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 1738 Old Cres Lady Frere 5411</p>
                                </div>
                                <div class="d-flex gap-2 pt-4">
                                    <a href="pages-profile" class="btn btn-subtle-secondary w-50"><i class="bi bi-person align-baseline me-1"></i> Profile</a>
                                    <button type="button" class="btn btn-primary text-truncate w-50"><i class="bi bi-chat-left-text align-baseline me-1"></i> Contact Us</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--end col-->
                    <div class="col-xxl-4 col-sm-6">
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
                    <!--END col-->
                </div>
                <!--end row-->

                <div class="row align-items-center mb-3">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">9</span> of <span class="fw-semibold">13</span> Results
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto mt-3 mt-sm-0">
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
            <!--end tab-pane-->
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
