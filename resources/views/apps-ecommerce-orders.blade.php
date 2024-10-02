@extends('layouts.master')
@section('title') @lang('translation.orders') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Orders @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body pb-0 mb-lg-n4">
                <div class="d-flex z-1 position-relative">
                    <div class="flex-shrink-0">
                        <div data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-default-date="01 Feb 2023 to 28 Feb 2023">01 Feb 2023 to 28 Feb 2023 <i class="ph-caret-down align-middle ms-1"></i></div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div id="line_chart_basic" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
    <div class="col">
        <div class="card border-bottom border-3 card-animate border-secondary">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 3.8%</span>
                <h4 class="mb-4"><span class="counter-value" data-target="21438">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Total Orders</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-3 card-animate border-primary">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 20.8%</span>
                <h4 class="mb-4"><span class="counter-value" data-target="5963">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">New Orders</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-3 card-animate border-warning">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 12.6%</span>
                <h4 class="mb-4"><span class="counter-value" data-target="4620">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Pending Orders</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-3 card-animate border-success">
            <div class="card-body">
                <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 18.7%</span>
                <h4 class="mb-4"><span class="counter-value" data-target="8541">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Delivered Orders</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-bottom border-3 card-animate border-danger">
            <div class="card-body">
                <span class="badge bg-danger-subtle text-danger float-end"><i class="ph-trend-down align-middle me-1"></i> 7.1%</span>
                <h4 class="mb-4"><span class="counter-value" data-target="2314">0</span></h4>

                <p class="text-muted fw-medium text-uppercase mb-0">Cancelled Orders</p>
            </div>
        </div>
    </div>
</div>
<!---end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-3 col-md-6">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>

                    <div class="col-md-auto ms-md-auto">
                        <div class="d-flex flex-wrap align-items-center gap-2">
                            <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            <div class="dropdown card-header-dropdown sortble-dropdown flex-shrink-0">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <button class="dropdown-item sort" data-sort="order_date">Order Date</button>
                                    <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                                    <button class="dropdown-item sort" data-sort="amount">Amount</button>
                                    <button class="dropdown-item sort" data-sort="status">Status</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary add-btn ms-auto" data-bs-toggle="modal" data-bs-target="#showModal"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th scope="col" class="sort cursor-pointer" data-sort="order_id">Order ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="order_date">Order Date</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="delivery_date">Delivery Date</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="products">Products</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="customer">Customers</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="shop">Shop</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="payment_method">Payment Method</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="status">Delivery Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all">
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child">
                                        <label class="form-check-label"></label>
                                    </div>
                                </th>
                                <td class="order_id"><a href="apps-ecommerce-order-overview" class="fw-medium link-primary">#TBS250001</a></td>
                                <td class="order_date">
                                    22 Feb, 2023
                                </td>
                                <td class="delivery_date">
                                    02 March, 2023
                                </td>
                                <td class="products">Cotton collar t-shirts for men</td>
                                <td class="customer">
                                    Deondre Fahey
                                </td>
                                <td class="shop">
                                    <a href="#!" class="text-reset"><img src="{{ URL::asset('build/images/companies/img-7.png') }}" alt="" class="avatar-xxs rounded-circle me-1 shop-logo"> <span class="shop-name">Pich Fashion</span></a>
                                </td>
                                <td class="payment_method">COD</td>
                                <td class="amount"><span class="fw-medium">$109.00</span></td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0">-</h5>
                                </td>
                                <td class="status"><span class="badge bg-primary-subtle text-primary">New</span></td>
                                <td>
                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                        <li>
                                            <a href="apps-ecommerce-order-overview" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                        </li>
                                        <li>
                                            <a href="#showModal" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
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
                            <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any orders for you search.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-sm-end mt-2">
                    <div class="pagination-wrap hstack gap-2">
                        <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                            <i class="mdi mdi-chevron-left align-middle"></i>
                        </a>
                        <ul class="pagination listjs-pagination mb-0"></ul>
                        <a class="page-item pagination-next" href="javascript:void(0)">
                            <i class="mdi mdi-chevron-right align-middle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->


<!-- showModal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-ordermodal"></button>
            </div>
            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Customer Name</label>
                        <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required>
                    </div>

                    <div class="mb-3">
                        <label for="productname-field" class="form-label">Product</label>
                        <select class="form-control" data-trigger name="productname-field" id="productname-field" required>
                            <option value="">Product</option>
                            <option value="Cotton collar t-shirts for men">Cotton collar t-shirts for men</option>
                            <option value="Like style travel black handbag">Like style travel black handbag</option>
                            <option value="Fossil gen 5E smart watch">Fossil gen 5E smart watch</option>
                            <option value="Super bass bluetooth wireless headphone">Super bass bluetooth wireless headphone</option>
                            <option value="Willage volleyball ball size 4">Willage volleyball ball size 4</option>
                            <option value="Branded T-Shirts">Branded T-Shirts</option>
                            <option value="Flip-Flops and house slippers">Flip-Flops and house slippers</option>
                            <option value="Jeans blue men boxer">Jeans blue men boxer</option>
                            <option value="MAG back to the future shoes">MAG back to the future shoes</option>
                            <option value="Super bass bluetooth wireless headphone">Super bass bluetooth wireless headphone</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="date-field" class="form-label">Order Date</label>
                                <input type="date" id="date-field" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="shopName-input" class="form-label">Shop</label>
                                <input type="text" id="shopName-input" class="form-control" placeholder="Enter shop name" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label mb-3">Shop logo</label>
                            <div class="text-center mb-3">
                                <div class="position-relative d-inline-block">
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="companyLogo-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select company logo">
                                            <span class="avatar-xs d-inline-block">
                                                <span class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </span>
                                            </span>
                                        </label>
                                        <input class="form-control d-none" id="companyLogo-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-3">
                                            <img src="{{ URL::asset('build/images/users/multi-user.jpg') }}" alt="" id="companyLogo-img" class="avatar-md h-auto rounded-3 object-fit-cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 mb-3">
                        <div class="col-md-6">
                            <div>
                                <label for="amount-field" class="form-label">Amount</label>
                                <input type="text" id="amount-field" class="form-control" placeholder="Total amount" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="payment-field" class="form-label">Payment Method</label>
                                <select class="form-control" data-trigger name="payment-method" required id="payment-field">
                                    <option value="">Payment Method</option>
                                    <option value="Mastercard">Mastercard</option>
                                    <option value="Visa">Visa</option>
                                    <option value="COD">COD</option>
                                    <option value="Paypal">Paypal</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="delivered-status" class="form-label">Delivery Status</label>
                        <select class="form-control" data-trigger name="delivered-status" required id="delivered-status">
                            <option value="">Delivery Status</option>
                            <option value="New">New</option>
                            <option value="Pending">Pending</option>
                            <option value="Out of Delivered">Out of Delivered</option>
                            <option value="Shipping">Shipping</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                    </div>
                    <input type="hidden" id="delivery-status-field">
                    <input type="hidden" id="rating-field">
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Order</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end showModal -->

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
                        <i class="bi bi-trash display-4"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="mb-2">Are you sure ?</h3>
                        <p class="text-muted fs-lg mx-3 mb-0">Are you sure you want to remove this record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /deleteRecordModal -->


@endsection
@section('script')

<!-- list.js min js -->
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<!-- sweetalert2 js -->
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- ecommerce-orders -->
<script src="{{ URL::asset('build/js/pages/ecommerce-orders.init.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>

@endsection




