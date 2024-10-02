@extends('layouts.master')
@section('title') @lang('translation.sellers-overview') @endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title')Sellers Overview @endslot
@endcomponent

<div class="row">
    <div class="col-xxl-9">
        <div class="card">
            <div class="card-body d-flex align-items-center gap-2">
                <h5 class="card-title flex-grow-1 mb-0">Portfolio Overview</h5>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        ALL
                    </button>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        1M
                    </button>
                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                        6M
                    </button>
                    <button type="button" class="btn btn-subtle-primary btn-sm">
                        1Y
                    </button>
                </div>
            </div>
            <div class="border border-start-0 border-end-0">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6">
                        <div class="card-body text-center border-end-md border-bottom-lg-0 border-bottom">
                            <h5 class="mb-2"><span class="counter-value" data-target="7585">0</span></h5>
                            <p class="text-muted mb-0">Orders</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-body text-center border-end-lg border-bottom-lg-0 border-bottom">
                            <h5 class="mb-2">$<span class="counter-value" data-target="750.36">0</span>M</h5>
                            <p class="text-muted mb-0">Earnings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-body text-center border-end-md border-bottom-md-0 border-bottom">
                            <h5 class="mb-2"><span class="counter-value" data-target="328">0</span></h5>
                            <p class="text-muted mb-0">Refunds</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-body text-center">
                            <h5 class="mb-2 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                            <p class="text-muted mb-0">Conversation Ratio</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body ps-1">
                <div id="portfolio_charts" data-colors='["--tb-primary", "--tb-light", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <div id="productList">
            <div class="row g-3 justify-content-between mb-3">
                <div class="col-lg-3">
                    <div class="search-box">
                        <input type="text" class="form-control search" placeholder="Search products, price etc...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-auto">
                    <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                    <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="bi bi-plus-circle align-baseline me-1"></i> Add Product</button>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered align-middle table-nowrap mb-0">
                            <thead class="table-active">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="sort cursor-pointer" data-sort="products">Products</th>
                                    <th class="sort cursor-pointer" data-sort="category">Category</th>
                                    <th class="sort cursor-pointer" data-sort="stock">Stock</th>
                                    <th class="sort cursor-pointer" data-sort="price">Price</th>
                                    <th class="sort cursor-pointer" data-sort="orders">Orders</th>
                                    <th class="sort cursor-pointer" data-sort="rating">Rating</th>
                                    <th class="sort cursor-pointer" data-sort="published">Published</th>
                                    <th>Action</th>
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
                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#TB01</a></td>
                                    <td class="products">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-light rounded p-1 me-2">
                                                <img src="{{ URL::asset('build/images/products/32/img-1.png') }}" alt="" class="img-fluid d-block">
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><a href="apps-ecommerce-product-details" class="text-reset text-capitalize products">Branded T-Shirts</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="discount d-none">Fashion</td>
                                    <td class="category">Fashion</td>
                                    <td class="stock">12</td>
                                    <td class="price">$215.00</td>
                                    <td class="orders">48</td>
                                    <td class="rating">
                                        <span class="badge bg-warning-subtle text-warning"><i class="bi bi-star-fill align-baseline me-1"></i> 4.9</span>
                                    </td>
                                    <td class="published">12 Oct, 2022</td>
                                    <td>
                                        <div class="dropdown position-static">
                                            <button class="btn btn-subtle-secondary btn-sm btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="apps-ecommerce-product-details"><i class="ph-eye align-middle me-1"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" data-bs-toggle="modal" href="#showModal"><i class="ph-pencil align-middle me-1"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ph-trash align-middle me-1"></i> Remove</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end table-responsive-->

                    <div class="noresult" style="display: none">
                        <div class="text-center py-4">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                            <p class="text-muted mb-0">We've searched more than 150+ products We did not find any products for you search.</p>
                        </div>
                    </div>

                    <div class="row mt-3 align-items-center" id="pagination-element">
                        <div class="col-sm">
                            <div class="text-muted">
                                Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">35</span> Results
                            </div>
                        </div>

                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    <i class="mdi mdi-chevron-left align-middle"></i>
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    <i class="mdi mdi-chevron-right align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div class="card overflow-hidden">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509156.773725123!2d-123.79622260161696!3d37.19312212390098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1678106410566!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="card-body pt-1">
                <div class="avatar-lg mt-n5 position-relative mx-auto">
                    <div class="avatar-title bg-body-secondary rounded shadow">
                        <img src="{{ URL::asset('build/images/companies/img-1.png') }}" alt="" class="avatar-sm">
                    </div>
                </div>
                <div class="text-center mt-4">
                    <h5 class="mb-2">Terry & Jerry</h5>
                    <p class="text-muted mb-4 pb-2">Manufacture & Retail</p>
                </div>
                <div class="table-responsive table-card">
                    <table class="table align-middle table-borderless mb-0">
                        <tbody>
                            <tr>
                                <th>Owner Name</th>
                                <td>Lenna Labadie</td>
                            </tr>
                            <tr>
                                <th>Company Type</th>
                                <td>Partnership</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>United States</td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td><a href="#!" class="text-reset">steex@themesbrand.com</a></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><a href="tel:+(542) 95135 74123">+(542) 95135 74123</a></td>
                            </tr>
                            <tr>
                                <th>Since</th>
                                <td>1995</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="hstack gap-2 justify-content-center list-unstyled mt-4 pt-2 mb-0">
                    <li>
                        <a href="#!" class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn btn-primary btn-sm"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn btn-info btn-sm"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn btn-danger btn-sm"><i class="bi bi-envelope"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="text-muted text-uppercase fw-semibold mb-4">Customer Reviews</h6>
                    <div>
                        <div>
                            <div class="bg-warning-subtle px-3 py-2 rounded-2 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="fs-16 align-middle text-warning">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-fill"></i>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h6 class="mb-0">4.8 out of 5</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="text-muted">Total <span class="fw-medium">5.50k</span> reviews</div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="row align-items-center g-3 pt-2">
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0">5 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0 text-muted">2758</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-3 pt-2">
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0">4 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0 text-muted">1063</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-3 pt-2">
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0">3 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0 text-muted">997</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-3 pt-2">
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0">2 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0 text-muted">227</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row align-items-center g-3 pt-2">
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0">1 star</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="progress animated-progress progress-sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div>
                                        <h6 class="mb-0 text-muted">408</h6>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Contact Support</h6>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your messages..."></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary"><i class="bi bi-envelope align-baseline me-1"></i> Send Messages</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->



<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4 pt-4">
                <h5 class="modal-title" id="exampleModalLabel">Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body p-4">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field">

                    <input type="hidden" id="order-field">
                    <input type="hidden" id="rating-field">
                    <input type="hidden" id="discount-field">

                    <div class="mb-3">
                        <label for="product-title-input" class="form-label">Product title</label>
                        <input type="text" id="product-title-input" class="form-control" placeholder="Enter product title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Images</label>

                        <div class="dropzone my-dropzone border border-1 border-dashed text-center" style="min-height: 100px;">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="bi bi-cloud-download fs-1"></i>
                                </div>

                                <h5 class="fs-md mb-0">Drop files here or click to upload.</h5>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex flex-wrap gap-2 p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded p-2">
                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{ URL::asset('build/images/new-document.png') }}" alt="Dropzone-Image">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="pt-1">
                                                <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-3">
                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- end dropzon-preview -->
                    </div>

                    <div class="mb-3">
                        <label for="product-category-input" class="form-label">Product category</label>

                        <select class="form-select" id="product-category-input">
                            <option value="">Select product category</option>
                            <option value="Appliances">Appliances</option>
                            <option value="Automotive Accessories">Automotive Accessories</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Grocery">Grocery</option>
                            <option value="Headphones">Headphones</option>
                            <option value="Kids">Kids</option>
                            <option value="Luggage">Luggage</option>
                            <option value="Sports">Sports</option>
                            <option value="Watches">Watches</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-stock-input" class="form-label">Stocks</label>
                                <input type="text" id="product-stock-input" class="form-control" placeholder="Enter product stocks" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-price-input" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" id="product-price-input" placeholder="Enter product price" required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Add User</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->

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

<!-- ApexCharts Js -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- list.js min js -->
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

<!-- sweetalert2 js -->
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- dropzone js -->
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>

<!-- Ecommerce sellers overview init JS -->
<script src="{{ URL::asset('build/js/pages/ecommerce-sellers-overview.init.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/ecommerce-product-list.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

