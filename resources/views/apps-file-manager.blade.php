@extends('layouts.master')
@section('title') @lang('translation.filemanager') @endsection
@section('content')

<body class="file-detail-show">

<div class="m-n2">
    <div class="d-flex">
        <div class="card file-manager-wrapper rounded-end-0 shadow-none">
            <div data-simplebar class="h-100">
                <div class="card-body d-flex flex-column h-100">
                    <div class="position-relative mb-4 d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 position-relative">
                            <img src="{{ URL::asset('build/images/users/48/avatar-1.jpg') }}" alt="" class="avatar-sm rounded">
                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-2">Welcom to file manager</p>
                            <a href="#!" class="stretched-link">
                                <h6 class="fs-md mb-0">Silene Oliveira</h6>
                            </a>
                        </div>
                    </div>
                    <div class="mb-4">

                        <div class="dropzone file-dropzone border border-1 border-dashed text-center" style="min-height: 100px;">
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
                    <div class="mb-4">
                        <h6>File Manager</h6>
                        <ul class="file-manager-menu list-unstyled">
                            <li>
                                <a href="#!"><i class="bi bi-folder align-baseline me-1"></i> All Folders</a>
                            </li>
                            <li>
                                <a href="#!"><i class="bi bi-file-text align-baseline me-1"></i> Documents</a>
                            </li>
                            <li>
                                <a href="#!"><i class="bi bi-images align-baseline me-1"></i> Media</a>
                            </li>
                            <li>
                                <a href="#!"><i class="bi bi-clock-history align-baseline me-1"></i> Recent File</a>
                            </li>
                            <li>
                                <a href="#!"><i class="bi bi-star align-baseline me-1"></i> Important</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card mt-auto mb-0">
                        <div class="card-body pt-2">
                            <div class="text-center mt-n5">
                                <img src="{{ URL::asset('build/images/techny-rocket.png') }}" alt="" height="90">
                                <p class="text-md mt-4">Upgrade to Pro for unlimited storage</p>
                                <a href="#!" class="link-effect">Upgrade Now <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end file-manager-wrapper-->
        <div class="card file-manager-content-wrapper w-100 rounded-0 border border-1 border-top-0 border-bottom-0 shadow-none">
            <div class="card-body">
                <div class="d-flex gap-3 align-items-center mb-3">
                    <div class="flex-shrink-0 d-block d-lg-none">
                        <button type="button" class="btn btn-icon btn-subtle-success file-menu-btn">
                            <i class="ri-menu-2-fill align-bottom"></i>
                        </button>
                    </div>
                    <div class="search-box flex-grow-1">
                        <input type="text" class="form-control search" placeholder="Search products, price etc...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createFolder"><i class="bi bi-plus-lg align-baseline"></i> <span class="ms-1 d-none d-sm-inline-block">Create Folders</span></button>
                    </div>
                </div>
                <div class="row row-cols-xxl-5">
                    <div class="col">
                        <a href="#!" class="card">
                            <div class="card-body d-flex align-items-center gap-3 p-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-primary-subtle text-primary-emphasis fs-md rounded">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="flex-grow-1 mb-0 text-muted"><b>345</b> Files</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <a href="#!" class="card">
                            <div class="card-body d-flex align-items-center gap-3 p-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-danger-subtle text-danger-emphasis fs-md rounded">
                                        <i class="bi bi-images"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="flex-grow-1 mb-0 text-muted"><b>3124</b> Images</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <a href="#!" class="card">
                            <div class="card-body d-flex align-items-center gap-3 p-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-secondary-subtle text-secondary-emphasis fs-md rounded">
                                        <i class="bi bi-camera-reels"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="flex-grow-1 mb-0 text-muted"><b>213</b> Video</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <a href="#!" class="card">
                            <div class="card-body d-flex align-items-center gap-3 p-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-warning-subtle text-warning-emphasis fs-md rounded">
                                        <i class="bi bi-filetype-doc"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="flex-grow-1 mb-0 text-muted"><b>469</b> Docs Files</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <a href="#!" class="card">
                            <div class="card-body d-flex align-items-center gap-3 p-2">
                                <div class="avatar-xs flex-shrink-0">
                                    <div class="avatar-title bg-success-subtle text-success-emphasis fs-md rounded">
                                        <i class="bi bi-google-play"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="flex-grow-1 mb-0 text-muted"><b>18</b> Application</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-center mb-4">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="{{ URL::asset('build/images/brands/dropbox.png') }}" alt="" class="avatar-xs">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fs-md">Dropbox</h6>
                                        <p class="mb-0"><a href="#!">Open Folders</a></p>
                                    </div>
                                </div>

                                <!-- Progress sm -->
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2">
                                    <p class="flex-grow-1 mb-0">1,324 Files</p>
                                    <div class="fw-semibold flex-shrink-0">14.57GB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-center mb-4">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="{{ URL::asset('build/images/brands/google-drive.png') }}" alt="Google Drive" class="avatar-xs">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fs-md">Google Drive</h6>
                                        <p class="mb-0"><a href="#!">Open Folders</a></p>
                                    </div>
                                </div>

                                <!-- Progress sm -->
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 74%;" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2">
                                    <p class="flex-grow-1 mb-0">3451 Files</p>
                                    <div class="fw-semibold flex-shrink-0">30.45GB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-center mb-4">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="{{ URL::asset('build/images/brands/cloud-computing.png') }}" alt="Google Drive" class="avatar-xs">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fs-md">Cloud Storage</h6>
                                        <p class="mb-0"><a href="#!">Open Folders</a></p>
                                    </div>
                                </div>

                                <!-- Progress sm -->
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex mt-2">
                                    <p class="flex-grow-1 mb-0">2416 Files</p>
                                    <div class="fw-semibold flex-shrink-0">29.57GB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <div class="d-flex align-items-center gap-2 mb-3">
                    <h6 class="card-title flex-grow-1 mb-0">Folders</h6>
                    <div class="flex-shrink-0 dropdown">
                        <button class="btn btn-subtle-secondary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-folder-plus me-1 align-baseline"></i> Add Folder</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-cloud-arrow-down me-1 align-baseline"></i> Import</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-cloud-arrow-up me-1 align-baseline"></i> Export</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex gap-3 mb-4">
                                    <div class="flex-grow-1">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-transparent rounded text-primary fs-3">
                                                <i class="bi bi-folder2-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="#!">
                                    <h6 class="fs-md text-truncate">My Documents</h6>
                                </a>
                                <ul class="list-unstyled hstack gap-2 text-muted mb-0">
                                    <li>
                                        <b>24</b> Feb
                                    </li>
                                    <li>
                                        <b>733</b> Files
                                    </li>
                                    <li>
                                        <b>1.4</b> GB
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex gap-3 mb-4">
                                    <div class="flex-grow-1">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-transparent rounded text-primary fs-3">
                                                <i class="bi bi-folder2-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="#!">
                                    <h6 class="fs-md text-truncate">Steex - Admin & Dashboard Templates</h6>
                                </a>
                                <ul class="list-unstyled hstack gap-2 text-muted mb-0">
                                    <li>
                                        <b>08</b> Feb
                                    </li>
                                    <li>
                                        <b>2473</b> Files
                                    </li>
                                    <li>
                                        <b>1.6</b> GB
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex gap-3 mb-4">
                                    <div class="flex-grow-1">
                                        <div class="avatar-xs">
                                            <div class="avatar-title bg-transparent rounded text-primary fs-3">
                                                <i class="bi bi-folder2-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 dropdown">
                                        <a href="#!" class="text-reset d-inline-block" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-folder2-open me-1 align-baseline"></i> Open Folder</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-1 align-baseline"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-1 align-baseline"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="#!">
                                    <h6 class="fs-md text-truncate">Database</h6>
                                </a>
                                <ul class="list-unstyled hstack gap-2 text-muted mb-0">
                                    <li>
                                        <b>16</b> March
                                    </li>
                                    <li>
                                        <b>269</b> Files
                                    </li>
                                    <li>
                                        <b>716</b> MB
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div id="contactList" class="mt-2">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <h6 class="card-title flex-grow-1 mb-0">File Recent</h6>
                        <div class="dropdown card-header-dropdown sortble-dropdown flex-shrink-0">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold text-uppercase fs-12">Sort by:
                                </span><span class="text-muted dropdown-title">Docs Type</span> <i class="mdi mdi-chevron-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <button class="dropdown-item sort" data-sort="docs_type">Docs Type</button>
                                <button class="dropdown-item sort" data-sort="size">Size</button>
                                <button class="dropdown-item sort" data-sort="date">Date</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="1" id="checkbox-1">
                                            <label class="form-check-label" for="checkbox-1"></label>
                                        </div>
                                    </th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="docs_type">Type</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="document_name">Document Name</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="file_item">File Item</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="size">Size</th>
                                    <th scope="col" class="sort cursor-pointer" data-sort="date">Last Modified</th>
                                    <th scope="col" class="sort cursor-pointer">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="file-list">
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="2" id="checkbox-2">
                                            <label class="form-check-label" for="checkbox-2"></label>
                                        </div>
                                    </th>
                                    <td class="docs_type">
                                        <i class="bi bi-filetype-pdf text-danger-emphasis fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#!" class="text-reset document_name">Velzon Docs File</a>
                                    </td>
                                    <td class="file_item">24</td>
                                    <td class="size">
                                        2.5 MB
                                    </td>
                                    <td class="date">
                                        15 Feb, 2023
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="javascript:void(0);"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" href="javascript:void(0);"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="3" id="checkbox-3">
                                            <label class="form-check-label" for="checkbox-3"></label>
                                        </div>
                                    </th>
                                    <td class="docs_type">
                                        <i class="bi bi-filetype-psd text-primary-emphasis fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#!" class="text-reset document_name">Steex Design Kit.psd</a>
                                    </td>
                                    <td class="file_item">148</td>
                                    <td class="size">
                                        234.87 MB
                                    </td>
                                    <td class="date">
                                        29 Jan, 2023
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="javascript:void(0);"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" href="javascript:void(0);"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="4" id="checkbox-4">
                                            <label class="form-check-label" for="checkbox-4"></label>
                                        </div>
                                    </th>
                                    <td class="docs_type">
                                        <i class="bi bi-filetype-mp4 text-warning-emphasis fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#!" class="text-reset document_name">Velzon Docs Video.mp4</a>
                                    </td>
                                    <td class="file_item">19</td>
                                    <td class="size">
                                        149.33 MB
                                    </td>
                                    <td class="date">
                                        12 Nov, 2022
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="javascript:void(0);"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" href="javascript:void(0);"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="4" id="checkbox-5">
                                            <label class="form-check-label" for="checkbox-5"></label>
                                        </div>
                                    </th>
                                    <td class="docs_type">
                                        <i class="bi bi-filetype-gif text-success-emphasis fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#!" class="text-reset document_name">Offline Pages.gif</a>
                                    </td>
                                    <td class="file_item">01</td>
                                    <td class="size">
                                        0.987 MB
                                    </td>
                                    <td class="date">
                                        12 Nov, 2022
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="javascript:void(0);"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" href="javascript:void(0);"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="4" id="checkbox-6">
                                            <label class="form-check-label" for="checkbox-6"></label>
                                        </div>
                                    </th>
                                    <td class="docs_type">
                                        <i class="bi bi-filetype-svg text-secondary-emphasis fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#!" class="text-reset document_name">home Pattern Wave.svg</a>
                                    </td>
                                    <td class="file_item">01</td>
                                    <td class="size">
                                        3.87 MB
                                    </td>
                                    <td class="date">
                                        19 Dec, 2022
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="javascript:void(0);"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" href="javascript:void(0);"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><!-- end tr -->
                                <tr>
                                    <th>
                                        <div class="form-check checkbox-product-list">
                                            <input class="form-check-input" type="checkbox" value="4" id="checkbox-6">
                                            <label class="form-check-label" for="checkbox-6"></label>
                                        </div>
                                    </th>
                                    <td class="docs_type">
                                        <i class="bi bi-filetype-scss text-danger fs-4"></i>
                                    </td>
                                    <td>
                                        <a href="#!" class="text-reset document_name">_variables.scss</a>
                                    </td>
                                    <td class="file_item">01</td>
                                    <td class="size">
                                        0.234 KB
                                    </td>
                                    <td class="date">
                                        03 April, 2023
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="javascript:void(0);"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" href="javascript:void(0);"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr><!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center text-center text-sm-start mt-3">
                        <div class="col-sm">
                            <div class="text-muted">
                                Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">10</span> Results
                            </div>
                        </div>
                        <div class="col-sm-auto  mt-3 mt-sm-0">
                            <div class="pagination-wrap hstack justify-content-center gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0">
                                    <li class="active"><a class="page" href="#" data-i="1" data-page="10">1</a></li>
                                    <li><a class="page" href="#" data-i="2" data-page="10">2</a></li>
                                </ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end file tables-->
            </div>
            <!--end card-body-->
        </div>
        <!--end file-manager-content-wrapper-->
        <div class="card file-manager-right-wrapper rounded-start-0 shadow-none">
            <div data-simplebar class="h-100">
                <div class="card-header d-flex gap-2 align-items-center">
                    <div>
                        <button type="button" class="btn btn-sm btn-icon btn-subtle-danger close-btn-overview">
                            <i class="ri-close-fill align-bottom"></i>
                        </button>
                    </div>
                    <h6 class="card-title flex-grow-1 mb-0">Storage Details</h6>
                    <div class="flex-shrink-0">
                        <p class="text-danger mb-0">Used 57%</p>
                    </div>
                </div>
                <div class="card-body">
                    <div id="storageChart" data-colors='["--tb-secondary", "--tb-primary", "--tb-light","--tb-danger", "--tb-success"]' class="e-charts shadow-none mt-n4"></div>
                    <div class="mt-4 mb-3">
                        <h6 class="card-title mb-0">Pined Items</h6>
                    </div>
                    <ul class="vstack gap-2 list-unstyled">
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Skote Design file.psd</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        2.5 MB
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Trip Photography</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        276 MB
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Steex Admin</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        631 MB
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Velzon Design file</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        1.3 GB
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Velzon React</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        698 MB
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Steex Docs</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        32.19 MB
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="d-block p-2 bg-light bg-opacity-50 rounded">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-xs flex-shrink-0 ronded">
                                        <div class="avatar-title bg-body-secondary text-body">
                                            <i class="bi bi-pin"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Skote Design file.psd</h6>
                                    </div>
                                    <div class="flex-shrink-0 text-muted">
                                        2.5 MB
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="card card-primary file-manager-widgets mb-0">
                        <div class="card-body">
                            <p class="fs-md text-white text-opacity-75">Invite 2 friends and get 5 GB extra space.</p>
                            <a href="#!" class="stretched-link text-decoration-underline text-reset">Invite Friends <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end file-manager-right-wrapper-->
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="createFolder" tabindex="-1" aria-labelledby="createFolderLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFolderLabel">Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>

            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
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
                        <div class="dropzone my-dropzone text-center" style="min-height: 180px;">
                            <div class="dz-message">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>

                                <h5>Drop files here or click to upload.</h5>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="product-category-input" class="form-label">Product category</label>

                        <select class="form-select" id="product-category-input" data-choices data-choices-search-false data-choices-removeItem>
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
                                <input type="number" id="product-stock-input" class="form-control" placeholder="Enter product stocks" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-price-input" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" id="product-price-input" placeholder="Enter product price" required>
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
</div>

@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/echarts/echarts.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/file-manager.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
