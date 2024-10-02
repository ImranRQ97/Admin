@extends('layouts.master')
@section('title')
@lang('translation.grid-view')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Instructors
@endslot
@slot('title')
Grid View
@endslot
@endcomponent

<style>
    .header {
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .container {
        padding: padding: var(--tb-card-spacer-y) var(--tb-card-spacer-x);
        /* height: 100%; */
        /* width: 100%; */

    }

    .content-wrapper {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #112acf;
    }

    .company-info,
    .contact-info {
        text-align: center;
        font-size: 14px;
    }

    .details,
    .content-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    .details td,
    .content-table td,
    .content-table th {
        border: 1px solid #000;
        padding: 5px;
    }

    .details td {
        width: 25%;
    }

    .content-table th {
        background-color: #f5f5f5;
        text-align: center;
    }

    .content-table td {
        text-align: center;
    }

    .sign {
        text-align: right;
        margin-top: 20px;
        font-weight: bold;
    }
</style>
@endsection

@section('script')
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/learning-instructors-grid.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
