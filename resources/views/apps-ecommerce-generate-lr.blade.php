@extends('layouts.master')
@section('title')
@lang('LR_Generate')
@endsection

@section('css')
<!-- External Libraries -->
<link href="{{URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!-- Custom Styling -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }

    .containerform {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #112acf;
    }

    .containerformdub {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #5b5e74;
    }

    .header {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
    }

    .details {
        margin-top: 20px;
        width: 100%;
    }

    .details td {
        padding: 5px;
        border: 1px solid #112acf;
    }

    .detailsd td {
        padding: 5px;
        border: 1px solid #5b5e74;
    }

    .sign {
        margin-top: 50px;
        text-align: right;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        padding: 40px;
        position: relative;
        bottom: 40px;
        justify-content: center;
        min-height: 100vh;
    }

    .content-wrapper {
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        width: 100%;
    }

    .content-header {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 30px;
        color: #343a40;
        text-align: center;
    }

    .section-title {
        font-size: 18px;
        font-weight: 500;
        color: #495057;
        margin-bottom: 20px;
    }

    .section {
        margin-bottom: 30px;
    }

    .actions {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    .action-item {
        background-color: #f1f3f5;
        padding: 15px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        flex: 1;
    }

    .action-item i {
        font-size: 22px;
        color: #007bff;
    }

    .action-content {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        color: #495057;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
    }

    button {
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        background-color: #4ab0c1;
        color: #fff;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    button:hover {
        background-color: #4e555b;
    }

    .navigation {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .back {
        background-color: #6c757d;
    }

    .next {
        background-color: #28a745;
    }

    @media (max-width: 768px) {
        .actions {
            flex-direction: column;
        }
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
        max-width: 600px;
        position: relative;
    }

    .modal-header {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    .modal-body {
        max-height: 400px;
        overflow-y: auto;
    }
</style>
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1')
Logistics
@endslot
@slot('title')
Generate LR
@endslot
@endcomponent

<div class="container mt-5">
    <h1 class="content-header">Lorry Receipt (LR) Management</h1>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>

                    <th scope="col">Invoice No</th>
                    <th scope="col">Action</th>
                    <th scope=""> Communication</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $shipment->id }}</td>
                    <td>{{ $shipment->invoice_number }}</td>
                    <td>
                        <div class="action-buttons">
                            <a
                                href="{{ route('generate.bill', ['id' => $shipment->id, 'action' => 'print', 'type' => 'original']) }}">
                                <button type="button"><i class="fas fa-download"></i> Print </button>
                                            </a>
                            <a
                                href="{{ route('generate.bill', ['id' => $shipment->id, 'action' => 'download', 'type' => 'original']) }}">
                                <button type="button"><i class="fas fa-file-alt" title="Original"></i>
                                    Original</button>
                                            </a>
                            <a
                                href="{{ route('generate.bill', ['id' => $shipment->id, 'action' => 'download', 'type' => 'duplicate']) }}">
                                <button type="button"><i class="fas fa-copy" title="Duplicate"></i>
                                    Duplicate </button>
                                            </a>

                        </div>
                    </td>
                    <td>
                        <div class="actions">
                            <div class="action-item">
                                <div class="action-content">
                                    <i class="fas fa-sms"></i>
                                    <button><i class="fas fa-paper-plane"></i> Send SMS</button>
                                    <span>Status: <strong>Pending</strong></span>
                                </div>

                                <div class="action-item">
                                    <div class="action-content">
                                        <i class="fas fa-envelope"></i>
                                        <button type="button"
                                            onclick="openEmailModal('{{ $shipment->id}}','{{ $shipment->invoice_number }}')"
                                            data-bs-toggle="modal" data-bs-target="#composemodal">
                                            <i class="fas fa-paper-plane"></i> Send Email
                                        </button>
                                        <span>Status: <strong>Pending</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- </div> -->
    <div class="container">
        <div class="content-wrapper">
            <!-- Navigation Buttons -->
            <div class="navigation">
                <!-- <button type="button" class="btn btn-secondary back"
                    onclick="window.location.href='/apps-ecommerce-extract-overview'">
                    <i class="fas fa-arrow-left"></i> Back
                </button> -->
                <button type="button" class="btn btn-primary next"
                    onclick="window.location.href='/apps-ecommerce-acknowledgement'">
                    <i class="fas fa-arrow-right"></i> Next
                </button>
            </div>

        </div>
    </div>
</div>

<!-- Compose Modal -->
<!-- Compose Email Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header p-3 bg-light">
                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <!-- Email To Field -->
                    <div class="mb-3 position-relative">
                        <input type="email" class="form-control mb-3" id="emailTo" value="{{ Auth::user()->email }}"
                            placeholder="Recipient(s)">

                        <div class="position-absolute top-0 end-0">
                            <div class="d-flex">
                                <button class="btn btn-link text-reset fw-semibold px-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#CcRecipientsCollapse"
                                    aria-expanded="false" aria-controls="CcRecipientsCollapse">Cc</button>
                                <button class="btn btn-link text-reset fw-semibold px-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#BccRecipientsCollapse"
                                    aria-expanded="false" aria-controls="BccRecipientsCollapse">Bcc</button>
                            </div>
                        </div>
                    </div>

                    <!-- Cc Field -->
                    <div class="collapse" id="CcRecipientsCollapse">
                        <div class="mb-3">
                            <label for="emailCc">Cc:</label>
                            <input type="text" class="form-control" id="emailCc" placeholder="Cc recipients">
                        </div>
                    </div>

                    <!-- Bcc Field -->
                    <div class="collapse" id="BccRecipientsCollapse">
                        <div class="mb-3">
                            <label for="emailBcc">Bcc:</label>
                            <input type="text" class="form-control" id="emailBcc" placeholder="Bcc recipients">
                        </div>
                    </div>

                    <!-- Subject Field -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="emailSubject" placeholder="Subject">
                    </div>

                    <!-- Rich Text Editor (Quill.js or CKEditor) -->
                    <div class="mb-3">
                        <textarea class="form-control" id="emailBody" rows="6"
                            placeholder="Compose your message here..."></textarea>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Discard</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-success" id="sendEmailButton">Send</button>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="ri-timer-line text-muted me-1 align-bottom"></i>
                                Schedule Send</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Compose Email Modal -->

<!-- end modal -->

@endsection

@section('script')
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/widgets.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>


<script>
    let shipmentId = null;

    // Function to open the modal and set email fields dynamically
    function openEmailModal(id, invoiceNumber) {
        shipmentId = id;  // Set the shipment ID globally
        console.log("Shipment ID:", shipmentId);  // Log for debugging
        console.log("Invoice Number:", invoiceNumber);  // Log for debugging

        // Populate the default email body dynamically
        let businessName = "{{ Auth::user()->business_name }}";  // Fetch business name from authenticated user
        let emailBody = `Dear sir/ma'am,\n\nThe InvoiceNumber has been initiated with the No: ${invoiceNumber}.\n\nBest,\n${businessName}`;

        // Set the default email body in the textarea
        document.getElementById('emailBody').value = emailBody;

        // Automatically set Auth::user()->email in the recipient field
        document.getElementById('emailTo').value = "{{ Auth::user()->email }}";

        // Show the modal
        var modal = new bootstrap.Modal(document.getElementById('composemodal'));
        modal.show();
    }

    // Handle the email sending process
    document.getElementById('sendEmailButton').addEventListener('click', function () {
        var emailTo = document.getElementById('emailTo').value;
        var emailCc = document.getElementById('emailCc').value;
        var emailBcc = document.getElementById('emailBcc').value;
        var emailSubject = document.getElementById('emailSubject').value;
        var emailBody = document.getElementById('emailBody').value;

        // Send AJAX request to the controller
        $.ajax({
            url: '/send-email/' + shipmentId,  // Pass shipment ID here
            method: 'POST',
            data: {
                emailTo: emailTo,
                emailCc: emailCc,
                emailBcc: emailBcc,
                emailSubject: emailSubject,
                emailBody: emailBody,
                _token: '{{ csrf_token() }}'  // CSRF token for security
            },
            success: function (response) {
                $('#composemodal').modal('hide');  // Close the modal on success
                alert('Email sent successfully!');
            },
            error: function (xhr, status, error) {
                console.error(error);
                alert('Failed to send email. Please try again.');
            }
        });
    });
</script>

@endsection