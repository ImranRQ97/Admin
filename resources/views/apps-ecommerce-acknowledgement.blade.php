@extends('layouts.master')

@section('title')
@lang('Upload-acknowledgement')
@endsection

@section('css')
<!-- Existing CSS assets -->
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('build/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Include Bootstrap Icons CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
    rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">

<!-- Custom CSS -->
<style>
    /* General Styles */
    body {
        background-color: #f4f7fa;
        font-family: 'Roboto', sans-serif;
    }

    .card {
        border-radius: 12px;
        border: none;
        margin-bottom: 1.5rem;
    }

    .card-header {
        background-color: #4a90e2;
        color: #ffffff;
        font-weight: 600;
        font-size: 1.1rem;
        border-top-left-radius: 20px;
        border-top-right-radius: 12px;
    }

    .upload-section {
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .status-section {
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
        background-image: linear-gradient(135deg, #4a90e2, #357ABD);
        color: #ffffff;
        border: none;
        border-radius: 8px;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        display: inline-block;
        position: relative;
        overflow: hidden;
    }

    .btn-custom::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background-color: rgba(255, 255, 255, 0.15);
        transition: all 0.75s;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
    }

    .btn-custom:hover {
        background-image: linear-gradient(135deg, #357ABD, #4a90e2);
        color: #ffffff;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-custom:hover::before {
        transform: translate(-50%, -50%) scale(1);
        transition: all 0.75s;
    }

    /* Dropzone Styles */
    .dropzone {
        border: 2px dashed #4a90e2;
        background-color: #f9fbfd;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
    }

    .dropzone .dz-message {
        color: #333;
        font-size: 16px;
        font-weight: 500;
    }

    .dropzone .dz-message i {
        color: #4a90e2;
        font-size: 40px;
    }

    .text-warning {
        color: #f39c12 !important;
    }

    .text-success {
        color: #27ae60 !important;
    }

    .text-danger {
        color: #e74c3c !important;
    }

    .d-flex>span {
        font-weight: 500;
    }

    .btn-primary {
        background-color: #4a90e2;
        border-color: #4a90e2;
    }

    .btn-secondary {
        background-color: #7f8c8d;
        border-color: #7f8c8d;
    }

    .btn-primary:hover,
    .btn-secondary:hover {
        opacity: 0.9;
    }

    .container {
        max-width: 900px;
        /* Sets the maximum width of the container */
        position: relative;
        /* Allows the container to be positioned relative to its normal position */
        right: 1%;
        /* Moves the container 3% to the right */
        bottom: 30px;
        margin: 0 auto;
        /* Centers the container horizontally */
    }
</style>
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1')
Dashboards
@endslot
@slot('title')

@endslot
@endcomponent

<!-- Content Section -->
<div class="container mt-5">
    <!-- Upload Acknowledgement Section -->
    <div class="card upload-section shadow-sm">
        <div class="card-header">Upload Acknowledgement</div>
        <div class="card-body">
            <form action="#" method="POST" class="dropzone" id="invoiceUploadDropzone">
                @csrf
                <div class="dz-message needsclick text-center">
                    <i class="bi bi-cloud-arrow-up fs-1 mb-3"
                        style="position: relative; left: 3px; right: 20px; text-align: center;"></i>
                    <h5>Drop files here or click to upload.</h5>
                </div>
                <button type="submit" class="btn btn-custom mt-3">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <!-- Communication Section -->
    <div class="card status-section shadow-sm mt-4">
        <div class="card-header">Communication</div>
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-chat-left-dots-fill me-2 text-primary" style="position: relative; rigth: 10%"></i> Send
                SMS
                <span class="ms-auto text-muted">
                    <i class="bi bi-hourglass-split"></i> Status: <span class="text-warning">Pending</span>
                </span>
            </div>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-envelope-fill me-2 text-primary" style="position: relative; rigth: 10%"></i> Send Email
                <span class="ms-auto text-muted">
                    <i class="bi bi-hourglass-split"></i> Status: <span class="text-warning">Pending</span>
                </span>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-secondary" onclick="window.location.href='/apps-ecommerce-generate-lr'"><i class="bi bi-arrow-left-circle"></i> Back</button>
                <!-- <button class="btn btn-primary" onclick="window.location.href='/apps-ecommerce-customers'"><i class="bi bi-arrow-right-circle"></i> Next</button> -->
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Dropzone JS for file upload handling -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<script>
    Dropzone.options.invoiceUploadDropzone = {
        paramName: 'file',
        maxFilesize: 5, // MB
        acceptedFiles: '.png,.jpg,.jpeg,.gif,.pdf,.docx,.xlsx',
        success: function (file, response) {
            console.log('Invoice uploaded successfully');
            // Additional success actions
        },
        error: function (file, response) {
            console.error('Error uploading invoice');
        }
    };
</script>

<!-- Existing JavaScript assets -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/echarts/echarts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/dashboard-analytics.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection