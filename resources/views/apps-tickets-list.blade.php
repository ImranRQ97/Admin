@extends('layouts.master')
@section('title')
@lang('translation.tickets-list-view')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Support Tickets
@endslot
@slot('title')
List View
@endslot
@endcomponent

<div class="row">
    <div class="col-lg-3">
        <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-success-subtle text-success rounded fs-xl">
                                <i class="bi bi-ticket"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <p><span class="text-success me-1"><i class="ri-arrow-right-up-line fs-sm align-middle"></i> +3.47 %</span> than last week</p>
                    </div>
                </div>
                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="249">0</span>k </h4>
                <p class="fw-medium text-muted mb-0">Total Tickets</p>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-warning-subtle text-warning rounded fs-xl">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <p><span class="text-danger me-1"><i class="ri-arrow-right-down-line fs-sm align-middle"></i> +6.33 %</span> than last week</p>
                    </div>
                </div>
                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="3174">0</span></h4>
                <p class="fw-medium text-muted mb-0">Pending Tickets</p>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-danger-subtle text-danger rounded fs-xl">
                                <i class="bi bi-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <p><span class="text-success me-1"><i class="ri-arrow-right-up-line fs-sm align-middle"></i> +7.34 %</span> than last week</p>
                    </div>
                </div>
                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="1596">0</span></h4>
                <p class="fw-medium text-muted mb-0">Closed Tickets</p>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card file-manager-widgets" style="background-size: 95px;background-position:right bottom;">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-info-subtle text-info rounded fs-xl">
                                <i class="bi bi-ticket-perforated"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <p><span class="text-danger me-1"><i class="ri-arrow-right-down-line fs-sm align-middle"></i> +1.29 %</span> than last week</p>
                    </div>
                </div>
                <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="365">0</span></h4>
                <p class="fw-medium text-muted mb-0">New Tickets</p>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row" id="ticketsList">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center g-2">
                    <div class="col-lg-3 me-auto">
                        <h6 class="card-title mb-0">Tickets List</h6>
                    </div>
                    <!--end col-->
                    <div class="col-lg-2 col-sm-4">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Search for tickets, date, client or something...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto">
                        <div class="hstack gap-2">
                            <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            <a href="#addTickets" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Ticket</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <div class="card-body mt-3">
                <div class="table-responsive table-card">
                    <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th scope="col" class="sort cursor-pointer" data-sort="tickets_id">ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="assign">Assigned To</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="ticket_title">Ticket Title</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="client_name">Client Name</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="create_date">Create Date</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="due_date">Due Date</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="priority">Priority</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all">
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child">
                                        <label class="form-check-label"></label>
                                    </div>
                                </td>
                                <td class="tickets_id"><a href="apps-tickets-overview" class="fw-medium link-primary">#TBS243019001</a></td>
                                <td class="assign">
                                    <a href="apps-tickets-overview" class="d-inline-block" data-bs-toggle="tooltip" data-bs-title="Lucian Griffith">
                                        <img src="{{ URL::asset('build/images/users/32/avatar-1.jpg') }}" alt="" class="avatar-xxs rounded-circle">
                                    </a>
                                </td>
                                <td class="ticket_title">Not creating enough components</td>
                                <td class="client_name">Janet Guin</td>
                                <td class="create_date">28 March, 2023</td>
                                <td class="due_date">06 April, 2023</td>
                                <td class="priority"><span class="badge bg-danger">High</span></td>
                                <td class="status"><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                <td>
                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                        <li>
                                            <a href="apps-tickets-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="#addTickets" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                        </li>
                                        <li>
                                            <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                    <div class="noresult" style="display: none">
                        <div class="text-center py-4">
                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                            <p class="text-muted mb-0">We've searched more than 6k+ tickets We did not find any tickets for you search.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                    <div class="col-sm">
                        <div class="text-muted text-center text-sm-start">
                            Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto mt-3 mt-sm-0">
                        <div class="pagination-wrap hstack justify-content-center gap-2">
                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="javascript:void(0)">
                                Next
                            </a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<!-- Modal -->
<div class="modal fade" id="addTickets" tabindex="-1" aria-labelledby="addTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header">
                <h5 class="modal-title" id="addTicketModalLabel">Add Ticket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addTicketModal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="client-name-input" class="form-label">Client Name<span class="text-danger">*</span></label>
                                <input type="text" id="client-name-input" class="form-control" placeholder="Enter client name" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4 d-flex align-items-center">
                                <div class="me-2">
                                    <h6 class="mb-0">Assigned To :</h6>
                                </div>
                                <div class="avatar-group justify-content-center" id="assignee-member">

                                </div>
                            </div>
                            <div class="mx-n4 px-4 mb-3" data-simplebar style="max-height: 180px;">
                                <div class="vstack gap-3 select-element">
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-1.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Stefanie Cartwright</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Marisol Gaylord</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-3.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Merlin Heaney</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-4.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Alexys Collier</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-5.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Kyla O'Hara</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-6.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Twila Stark</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-7.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Bennett Rice</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-8.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Dusty Hackett</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-9.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Ines Stracke</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                    <div class="d-flex align-items-center option-list">
                                        <div class="avatar-xs flex-shrink-0 me-3">
                                            <img src="{{ URL::asset('build/images/users/32/avatar-10.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0"><a href="#" class="text-body d-block">Abner Wisozk</a></h6>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-light btn-sm btn-action">Add</button>
                                        </div>
                                    </div>
                                    <!-- end member item -->
                                </div>
                                <!-- end list -->
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="ticket-title-input" class="form-label">Ticket title<span class="text-danger">*</span></label>
                                <input type="text" id="ticket-title-input" class="form-control" placeholder="Ticket title" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="create-date-input" class="form-label">Create Date<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="create-date-input" placeholder="Create date" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="due-date-input" class="form-label">Due Date<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="due-date-input" placeholder="Due date" required>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="priority-input" class="form-label">Priority<span class="text-danger">*</span></label>

                                <select class="form-select" id="priority-input" data-choices data-choices-search-false>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="status-input" class="form-label">Status<span class="text-danger">*</span></label>

                                <select class="form-select" id="status-input" data-choices data-choices-search-false>
                                    <option value="">Select Status</option>
                                    <option value="Open">Open</option>
                                    <option value="New">New</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Close">Close</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Add Ticket</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal-content -->
    </div>
</div>
<!--end modal-->

<!-- deleteRecordModal -->
<div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-5"></i>
                    </div>
                    <div class="mt-4">
                        <h4 class="mb-2">Are you sure ?</h4>
                        <p class="text-muted mx-3 mb-0">Are you sure you want to remove this record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                    <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /deleteRecordModal -->
@endsection
@section('script')
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/tickets-list.init.js') }}"></script>
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection