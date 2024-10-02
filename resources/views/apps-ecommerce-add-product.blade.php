@extends('layouts.master')
@section('title') @lang('Fill-Form') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') @endslot
@endcomponent
<script>
    function addInvoice() {
        const invoiceContainer = document.getElementById('invoice-container');
        const newInvoice = document.createElement('div');
        newInvoice.className = 'invoice-entry row'; // Add 'row' class to match the existing layout
        newInvoice.innerHTML = `
            <div class="col-lg-4">
                <label for="productname" class="form-label">Product Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="product_name[]" placeholder="Enter product name" required>
            </div>
            <div class="col-lg-4">
                <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="quantity[]" placeholder="Enter quantity" required>
            </div>
            <div class="col-lg-4">
                <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="price[]" placeholder="Enter price" required>
            </div>
            <div class="col-lg-5">
                <label for="invoiceNumber" class="form-label">Invoice Number <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="invoice_number[]" placeholder="Enter invoice number" required>
            </div>
            <div class="col-lg-5">
                <label for="invoiceDate" class="form-label">Invoice Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="invoice_date[]" required>
            </div>
            <div class="col-lg-2 d-flex align-items-end">
                <button type="button" class="btn btn-danger" onclick="removeInvoice(this)">Remove</button>
            </div>
        `;
        invoiceContainer.appendChild(newInvoice);
    }

    function removeInvoice(button) {
        button.closest('.invoice-entry').remove(); // Ensures the entire entry is removed
    }
</script>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-xxl-4">
                            <p class="text-muted">Product Information refers to any information held by an organisation about the products it produces, buys, sells or distributes.</p>
                        </div> -->
                    <div class="col-xxl-8">
                        <h3>FinAnalyz Logistic Managment</h3>
                        <br>
                        <!-- From and To Section -->
                        <form action="/shipments" method="POST">
                            @csrf

                            <!-- Company Details Section -->
                            <div class="mb-3">
                                <h4>Company Details</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fromCompany" class="form-label">From Company Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fromCompany" name="from_company"
                                            placeholder="Enter from company name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="toCompany" class="form-label">To Company Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="toCompany" name="to_company"
                                            placeholder="Enter to company name" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <label for="fromAddress" class="form-label">From Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fromAddress" name="from_address"
                                            placeholder="Enter from address" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="toAddress" class="form-label">To Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="toAddress" name="to_address"
                                            placeholder="Enter to address" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Details Section -->
                            <div class="mb-3">
                                <h4>Vehicle Details</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="vehicleNumber" class="form-label">Vehicle Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="vehicleNumber" name="vehicle_number"
                                            placeholder="Enter vehicle number" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="modelName" class="form-label">Model Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="modelName" name="model_name"
                                            placeholder="Enter model name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="driverName" class="form-label">Driver Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="driverName" name="driver_name"
                                            placeholder="Enter driver name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="driverNo" class="form-label">Driver Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="driverNo" name="driver_no"
                                            placeholder="Enter driver number" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Details Section -->
                            <div class="mb-3">
                                <h4>Product Details</h4>
                                <div id="invoice-container">
                                    <div class="invoice-entry row">
                                        <!-- Product Name Field -->
                                        <div class="col-lg-4">
                                            <label for="productname" class="form-label">Product Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="product_name[]"
                                                placeholder="Enter product name" required>
                                        </div>

                                        <!-- Quantity Field -->
                                        <div class="col-lg-4">
                                            <label for="quantity" class="form-label">Quantity <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="quantity[]"
                                                placeholder="Enter quantity" required>
                                        </div>

                                        <!-- Price Field -->
                                        <div class="col-lg-4">
                                            <label for="price" class="form-label">Price <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="price[]"
                                                placeholder="Enter price" required>
                                        </div>

                                        <!-- Invoice Number Field -->
                                        <div class="col-lg-5">
                                            <br>
                                            <label for="invoiceNumber" class="form-label">Invoice Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="invoice_number[]"
                                                placeholder="Enter invoice number" required>
                                        </div>

                                        <!-- Invoice Date Field -->
                                        <div class="col-lg-5">
                                            <br>
                                            <label for="invoiceDate" class="form-label">Invoice Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="invoice_date[]" required>
                                        </div>

                                        <!-- Add Invoice Button -->
                                        <div class="col-lg-2 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary"
                                                onclick="addInvoice()">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="button-container">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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


<!--end row-->


<!--end row-->


<!--end row-->



@endsection
@section('script')
<!-- dropzone min -->
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>

<!-- ckeditor -->
<script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<!-- init js -->
<script src="{{ URL::asset('build/js/pages/ecommerce-create-product.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection