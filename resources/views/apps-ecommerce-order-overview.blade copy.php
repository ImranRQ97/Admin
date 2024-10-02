@extends('layouts.master')
@section('title') @lang('translation.Verification') @endsection

@section('css')
<link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/leaflet-routing-machine/leaflet-routing-machine.css') }}" rel="stylesheet"
    type="text/css" />
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script> -->

@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Verification @endslot
@endcomponent

<div class="container verification-container">

    <!-- Vehicle Verification Section -->
    <div class="card mb-4">
        <div class="card-body">
            <h4>Verify Vehicle</h4>
            <form>
                <div class="form-group row">
                    <label for="vehicleNumber" class="col-sm-3 col-form-label">Vehicle Number:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="vehicleNumber" placeholder="Enter Vehicle Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="vehiclePhoto" class="col-sm-3 col-form-label">Upload Vehicle Photo:</label>
                    <div class="col-sm-9">
                        <div class="dropzone" id="vehiclePhotoDropzone" style="min-height: 100px;">
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="bi bi-cloud-download fs-1"
                                        style="position: relative; left: 50%; right: 20px; text-align: center;"></i>
                                </div>
                                <h5 class="fs-md mb-0"
                                    style="position: relative; left: 20px; right: 20px; text-align: center;">Drop files
                                    here or click to upload.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Verify Vehicle</button>
            </form>
        </div>
    </div>

    <!-- Invoice Verification Section -->
    <div class="card mb-4">
        <div class="card-body">
            <h4>Verify E-way Bill with Product Details</h4>
            <form>
                <div class="form-group row">
                    <label for="invoiceNumber" class="col-sm-3 col-form-label">Invoice Number:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="invoiceNumber" placeholder="Enter Invoice Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="invoiceUpload" class="col-sm-3 col-form-label">Upload Invoice (PDF):</label>
                    <div class="col-sm-9">
                        <div class="dropzone" id="invoiceUploadDropzone" style="min-height: 100px;">
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="bi bi-cloud-download fs-1"
                                        style="position: relative; left: 50%; right: 20px; text-align: center;"></i>
                                </div>
                                <h5 class="fs-md mb-0"
                                    style="position: relative; left: 20px; right: 20px; text-align: center;">Drop files
                                    here or click to upload.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Verify Invoice</button>
            </form>
        </div>
    </div>

    <!-- Next Button -->
    <button type="button" class="btn btn-secondary btn-next">Next</button>
</div>
<!--end row-->
@endsection

@section('script')

<script>
    // Initialize Dropzone for Vehicle Photo Upload
    Dropzone.options.vehiclePhotoDropzone = {
        url: '/upload/vehicle-photo',
        paramName: 'file',
        maxFilesize: 5, // MB
        acceptedFiles: '.png,.jpg,.jpeg,.gif',
        success: function (file, response) {
            console.log('Vehicle photo uploaded successfully');
        },
        error: function (file, response) {
            console.log('Error uploading vehicle photo');
        }
    };

    // Initialize Dropzone for Invoice Upload
    Dropzone.options.invoiceUploadDropzone = {
        url: '/upload/invoice',
        paramName: 'file',
        maxFilesize: 10, // MB
        acceptedFiles: '.pdf',
        success: function (file, response) {
            console.log('Invoice uploaded successfully');
        },
        error: function (file, response) {
            console.log('Error uploading invoice');
        }
    };
</script>
@endsection