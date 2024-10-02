@extends('layouts.master')
@section('title')
    @lang('translation.tickets-overview')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Support Tickets
        @endslot
        @slot('title')
            Overview
        @endslot
    @endcomponent

    <div class="card">
        <div class="row g-0">
            <div class="col-xl-9 col-lg-8">
                <div class="card-body border-end h-100">
                    <div class="row mb-4 pb-2 g-3">
                        <div class="col-auto">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-success-subtle rounded">
                                    <img src="{{ URL::asset('build/images/companies/img-3.png') }}" alt="" class="avatar-xs">
                                </div>
                            </div>
                        </div>
                        <div class="col-md order-3 order-md-2">
                            <div>
                                <h5>#TBS24301901 - Forgetting to start a component name with a capital letter</h5>
                                <div class="hstack gap-2 gap-md-3 flex-wrap">
                                    <div class="text-muted"><i class="ri-building-line align-bottom me-1"></i><span
                                            id="ticket-client">Themesbrand</span></div>
                                    <div class="vr"></div>
                                    <div class="text-muted">Create Date : <span class="fw-medium " id="create-date">20 Dec,
                                            2023</span></div>
                                    <div class="vr"></div>
                                    <div class="text-muted">Due Date : <span class="fw-medium" id="due-date">29 Dec,
                                            2023</span></div>
                                    <div class="vr"></div>
                                    <div class="badge rounded-pill bg-info fs-12" id="ticket-status">New</div>
                                    <div class="badge rounded-pill bg-danger fs-12" id="ticket-priority">High</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ms-auto order-2 order-md-3">
                            <a href="apps-tickets-list" class="btn btn-primary btn-sm"> Add Ticket</a>
                        </div>
                    </div>

                    <h6 class="fw-semibold text-uppercase mb-2">Ticket Descriptions</h6>
                    <p class="text-muted mb-4">It's used for building interactive user interfaces and web applications
                        quickly and efficiently with significantly less code than you would with vanilla JavaScript. In
                        React, you develop your applications by creating reusable components that you can think of as
                        independent Lego blocks. React is a JavaScript library developed by Facebook which, among other
                        things, was used to build Instagram.com. Its aim is to allow developers to easily create fast user
                        interfaces for websites and applications alike. The main concept of React. js is virtual DOM. If you
                        need a fast and responsive user interface, ReactJS is the better option. But if you need to handle
                        complex data analysis or number-crunching.</p>
                    <h6 class="fw-semibold text-uppercase mb-3">Create an Excellent UI for a Dashboard</h6>
                    <ul class="text-muted vstack gap-2 mb-4 list-unstyled">
                        <li><i class="bi bi-check-lg text-success"></i> App Registry Error in React</li>
                        <li><i class="bi bi-check-lg text-success"></i> Development Server Error in React</li>
                        <li><i class="bi bi-check-lg text-success"></i> Undefined is not an object error in React</li>
                        <li><i class="bi bi-check-lg text-success"></i> Not following the ReactJS folder structure</li>
                        <li><i class="bi bi-check-lg text-success"></i> Webstorm does not recognize tags</li>
                    </ul>
                    <h6 class="fw-semibold text-uppercase mb-4">Discussion with Themesbrand</h6>
                    <div data-simplebar style="height: 300px;" class="px-3 mx-n3">
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-xs rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Joseph Parker <small class="text-muted">20 Dec 2023 - 05:47AM</small></h6>
                                <p class="text-muted">I am getting message from customers that when they place order always
                                    get error message .</p>
                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt=""
                                            class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>Alexis Clarke <small class="text-muted">22 Dec 2023 - 02:32PM</small></h6>
                                        <p class="text-muted">Please be sure to check your Spam mailbox to see if your email
                                            filters have identified the email from Dell as spam.</p>
                                        <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                                class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-xs rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Donald Palmer <small class="text-muted">24 Dec 2023 - 05:20PM</small></h6>
                                <p class="text-muted">If you have further questions, please contact Customer Support from
                                    the “Action Menu” on your <a href="javascript:void(0);"
                                        class="text-decoration-underline">Online Order Support</a>.</p>
                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-xs rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Alexis Clarke <small class="text-muted">26 min ago</small></h6>
                                <p class="text-muted">Your <a href="javascript:void(0)"
                                        class="text-decoration-underline">Online Order Support</a> provides you with the
                                    most current status of your order. To help manage your order refer to the “Action Menu”
                                    to initiate return, contact Customer Support and more.</p>
                                <div class="row g-2 mb-3">
                                    <div class="col-lg-1 col-sm-2 col-6">
                                        <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="" class="img-fluid rounded">
                                    </div>
                                    <div class="col-lg-1 col-sm-2 col-6">
                                        <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="" class="img-fluid rounded">
                                    </div>
                                </div>
                                <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt=""
                                            class="avatar-xs rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>Donald Palmer <small class="text-muted">8 sec ago</small></h6>
                                        <p class="text-muted">Other shipping methods are available at checkout if you want
                                            your purchase delivered faster.</p>
                                        <a href="javascript: void(0);" class="badge text-muted bg-light"><i
                                                class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="javascript:void(0);" class="mt-3">
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Leave a Comments</label>
                                <textarea class="form-control bg-light border-light" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Enter comments"></textarea>
                            </div>
                            <div class="col-lg-12 text-end">
                                <a href="javascript:void(0);" class="btn btn-success">Post Comments</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-3 col-lg-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">Ticket Details</h6>
                </div>
                <div class="card-body mt-2">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless align-middle mb-0">
                            <tbody>
                                <tr>
                                    <th>Ticket No</th>
                                    <td>#TBS<span id="t-no">24301901</span> </td>
                                </tr>
                                <tr>
                                    <th>Client</th>
                                    <td id="t-client">Themesbrand</td>
                                </tr>
                                <tr>
                                    <th>Project</th>
                                    <td>Steex - Admin & Dashboard</td>
                                </tr>
                                <tr>
                                    <th>Assigned To:</th>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="javascript:void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                                data-bs-original-title="Erica Kernan">
                                                <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                            <a href="javascript:void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                                data-bs-original-title="Alexis Clarke">
                                                <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                            <a href="javascript:void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                                data-bs-original-title="James Price">
                                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xs">
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                data-bs-original-title="Add Members">
                                                <div class="avatar-xs">
                                                    <div
                                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                        +
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        <select class="form-select" id="t-status" data-choices data-choices-search-false
                                            aria-label="Default select example">
                                            <option value>Status</option>
                                            <option value="New" selected>New</option>
                                            <option value="Open">Open</option>
                                            <option value="Inprogress">Inprogress</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Priority</th>
                                    <td>
                                        <span class="badge bg-danger" id="t-priority">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Create Date</th>
                                    <td id="c-date">20 Dec, 2023</td>
                                </tr>
                                <tr>
                                    <th>Due Date</th>
                                    <td id="d-date">29 Dec, 2023</td>
                                </tr>
                                <tr>
                                    <th>Last Activity</th>
                                    <td>14 min ago</td>
                                </tr>
                                <tr>
                                    <th>Labels</th>
                                    <td class="hstack text-wrap gap-1">
                                        <span class="badge bg-primary-subtle text-primary">Admin</span>
                                        <span class="badge bg-primary-subtle text-primary">UI</span>
                                        <span class="badge bg-primary-subtle text-primary">Dashboard</span>
                                        <span class="badge bg-primary-subtle text-primary">Design</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end card-body-->
                <div class="card-body border-top mt-2">
                    <a href="#!" class="float-end link-effect">View More <i
                            class="bi bi-arrow-right align-baseline ms-1"></i></a>
                    <h6 class="card-title mb-0">Support Team</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex gap-2 align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-sm rounded">
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="fs-md">Morton Satterfield</h6>
                            <p class="text-muted mb-0">Admin & Founder</p>
                        </div>
                    </div>
                    <button class="btn btn-secondary w-100" id="agent-chat"><i
                            class="bi bi-chat-text align-baseline me-1"></i> Get In Touch</button>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
