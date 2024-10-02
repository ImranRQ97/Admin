@extends('layouts.master')
@section('title')
@lang('translation.generate_lr')
@endsection

@section('css')
<!-- External Libraries -->
<link href="{{URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<!-- Custom Styling -->
<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        padding: 40px;
        /* display: flex; */
        position: relative;
        bottom: 40px;
        justify-content: center;
        min-height: 100vh;
    }

    .content-wrapper {
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); */
        /* max-width: 960px; */
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
        background-color: #5e656d;
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
        /* background-color: #0056b3; */
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

<div class="container">
    <div class="content-wrapper">

        <h1 class="content-header">Lorry Receipt (LR) Management</h1>

        <!-- Lorry Receipt Section -->
        <div class="section">
            <h2 class="section-title">Lorry Receipt Details</h2>
            <div class="actions">
                <div class="action-item">
                    <div class="action-content">
                        <i class="fas fa-file-alt"></i>
                        <span>Original</span>
                    </div>
                    <div class="action-buttons">
                        <button><i class="fas fa-print"></i> Print</button>
                        <button><i class="fas fa-download"></i> Download</button>
                    </div>
                </div>

                <div class="action-item">
                    <div class="action-content">
                        <i class="fas fa-file-alt"></i>
                        <span>Duplicate</span>
                    </div>
                    <div class="action-buttons">
                        <button><i class="fas fa-print"></i> Print</button>
                        <button><i class="fas fa-download"></i> Download</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Communication Section -->
        <div class="section">
            <h2 class="section-title">Communication</h2>
            <div class="actions">
                <div class="action-item">
                    <div class="action-content">
                        <i class="fas fa-sms"></i>
                        <button><i class="fas fa-paper-plane"></i> Send SMS</button>
                        <span>Status: <strong>Pending</strong></span>
                    </div>
                </div>

                <div class="action-item">
                    <div class="action-content">
                        <i class="fas fa-envelope"></i>
                        <button><i class="fas fa-paper-plane"></i> Send Email</button>
                        <span>Status: <strong>Pending</strong></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="navigation">
            <button class="back"><i class="fas fa-arrow-left"></i> Back</button>
            <button class="next"><i class="fas fa-arrow-right"></i> Next</button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/widgets.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
