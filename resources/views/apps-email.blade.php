@extends('layouts.master')
@section('title') @lang('translation.email') @endsection
@section('content')


<div class="email-wrapper d-lg-flex gap-1 mx-n3 mt-n3 p-1">
    <div class="email-panel p-3 pt-4 d-none d-lg-flex flex-column">
        <div class="text-center">
            <a href="#!" class="btn btn-icon btn-primary btn-sm fs-lg toggle-email-panel"><i class="ph-list"></i></a>
        </div>

        <div class="panel-list mt-3">
            <a href="apps-email" class="active"><i class="bi bi-envelope"></i> <span>Email</span></a>
            <a href="apps-chat"><i class="bi bi-chat-dots"></i> <span>Chat</span></a>
            <a href="apps-chat"><i class="bi bi-camera-video"></i> <span>Meet</span></a>
            <a href="apps-file-manager"><i class="bi bi-database"></i> <span>Storage</span></a>
        </div>
        <div class="text-center mt-auto">
            <div class="dropdown mail-user-dropdown">
                <a class="d-inline-block" href="#!" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ URL::asset('build/images/users/32/avatar-1.jpg') }}" alt="" class="avatar-xs rounded mail-profile-img">
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item active" href="#">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-xxs rounded-circle mail-user-img">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">everett@themesbrand.com</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-xxs rounded-circle mail-user-img">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">johnny@themesbrand.com</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-xxs rounded-circle mail-user-img">
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">michelle@themesbrand.com</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="email-menu-sidebar">
        <div class="p-4 d-flex flex-column h-100">
            <div class="pb-3">
                <button type="button" class="btn btn-subtle-primary w-100" data-bs-toggle="modal" data-bs-target="#composemodal"><i class="bi bi-plus-lg me-1 align-baseline"></i> Compose</button>
            </div>

            <div class="mx-n4 px-4 email-menu-sidebar-scroll" data-simplebar>
                <div class="mail-list mt-3">
                    <a href="#" class="active"><i class="bi bi-envelope me-3 align-baseline"></i> <span class="mail-list-link">All</span> <span class="badge bg-secondary-subtle text-secondary ms-auto  ">5</span></a>
                    <a href="#"><i class="bi bi-archive me-3 align-baseline"></i> <span class="mail-list-link">Inbox</span> <span class="badge bg-secondary-subtle text-secondary ms-auto  ">5</span></a>
                    <a href="#"><i class="bi bi-send me-3 align-baseline"></i> <span class="mail-list-link">Sent</span></a>
                    <a href="#"><i class="bi bi-pencil-square me-3 align-baseline"></i> <span class="mail-list-link">Draft</span></a>
                    <a href="#"><i class="bi bi-exclamation-diamond me-3 align-baseline"></i> <span class="mail-list-link">Spam</span></a>
                    <a href="#"><i class="bi bi-trash3 me-3 align-baseline"></i> <span class="mail-list-link">Trash</span></a>
                    <a href="#"><i class="bi bi-bookmark-star me-3 align-baseline"></i> <span class="mail-list-link">Starred</span></a>
                    <a href="#"><i class="bi bi-tags me-3 align-baseline"></i> <span class="mail-list-link">Important</span></a>
                </div>


                <div>
                    <h5 class="fs-xs text-uppercase text-muted mt-4">Labels</h5>

                    <div class="mail-list mt-1">
                        <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-info"></span><span class="mail-list-link" data-type="label">Support</span> <span class="badge bg-secondary-subtle text-secondary ms-auto">3</span></a>
                        <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-warning"></span><span class="mail-list-link" data-type="label">Freelance</span></a>
                        <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-primary"></span><span class="mail-list-link" data-type="label">Social</span></a>
                        <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-danger"></span><span class="mail-list-link" data-type="label">Friends</span><span class="badge bg-secondary-subtle text-secondary ms-auto">2</span></a>
                        <a href="#"><span class="ri-checkbox-blank-circle-line me-2 text-success"></span><span class="mail-list-link" data-type="label">Family</span></a>
                    </div>
                </div>

                <div class="border-top border-top-dashed pt-3 mt-3">
                    <a href="#" class="btn btn-icon btn-sm btn-subtle-info btn-rounded float-end"><i class="bx bx-plus fs-16"></i></a>
                    <h5 class="fs-xs text-uppercase text-muted mb-4">Chat</h5>

                    <div class="mt-2 vstack email-chat-list mx-n4">
                        <a href="javascript: void(0);" class="d-flex align-items-center active">
                            <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                            </div>

                            <div class="flex-grow-1 chat-user-box overflow-hidden">
                                <h5 class="fs-sm text-truncate mb-0 chatlist-user-name">Scott Median</h5>
                                <small class="fs-xs text-muted text-truncate mb-0">Hello ! are you there?</small>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                            </div>

                            <div class="flex-grow-1 chat-user-box overflow-hidden">
                                <h5 class="fs-sm text-truncate mb-0 chatlist-user-name">Julian Rosa</h5>
                                <small class="fs-xs text-muted text-truncate mb-0">What about our next..</small>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                            </div>

                            <div class="flex-grow-1 chat-user-box overflow-hidden">
                                <h5 class="fs-sm text-truncate mb-0 chatlist-user-name">David Medina</h5>
                                <small class="fs-xs text-muted text-truncate mb-0">Yeah everything is fine</small>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-2 avatar-xxs chatlist-user-image">
                                <img class="img-fluid rounded-circle" src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                            </div>

                            <div class="flex-grow-1 chat-user-box overflow-hidden">
                                <h5 class="fs-sm text-truncate mb-0 chatlist-user-name">Jay Baker</h5>
                                <small class="fs-xs text-muted text-truncate mb-0">Wow that's great</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end email-menu-sidebar -->

    <div class="email-content">
        <div class="p-4 pb-0">
            <div class="border-bottom border-bottom-dashed">
                <div class="row mb-3 mb-sm-0 align-items-center g-3">

                    <div class="col-lg-5 me-auto">
                        <div class="search-box">
                            <input type="text" class="form-control border-0" id="searchResultList" autocomplete="off" placeholder="Search here...">
                            <i class="bi bi-search search-icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="d-flex gap-sm-1 email-topbar-link">
                            <button type="button" class="btn btn-subtle-success btn-icon btn-sm fs-lg email-menu-btn d-block d-lg-none">
                                <i class="ri-menu-2-fill align-bottom"></i>
                            </button>
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-lg ms-auto">
                                <i class="bi bi-arrow-clockwise"></i>
                            </button>
                            <div class="dropdown">
                                <button class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                    <a class="dropdown-item" href="#">Add Star</a>
                                    <a class="dropdown-item" href="#">Mute</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-3">
                    <div class="row align-items-center mt-3 mb-2 d-flex">
                        <div class="col">
                            <div class="hstack gap-sm-1 align-items-center flex-wrap email-topbar-link ms-1">
                                <div class="form-check fs-md m-0">
                                    <input class="form-check-input" type="checkbox" value="" id="checkall">
                                    <label class="form-check-label" for="checkall"></label>
                                </div>
                                <div id="email-topbar-actions">
                                    <div class="hstack gap-sm-1 align-items-center flex-wrap">
                                        <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Archive">
                                            <i class="bi bi-inbox"></i>
                                        </button>
                                        <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Report Spam">
                                            <i class="bi bi-exclamation-triangle"></i>
                                        </button>
                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Trash">
                                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="vr align-self-center mx-2"></div>
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-tag"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Support</a>
                                        <a class="dropdown-item" href="#">Freelance</a>
                                        <a class="dropdown-item" href="#">Social</a>
                                        <a class="dropdown-item" href="#">Friends</a>
                                        <a class="dropdown-item" href="#">Family</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#" id="mark-all-read">Mark all as Read</a>
                                    </div>
                                </div>
                                <div class="alert alert-warning alert-dismissible unreadConversations-alert px-4 fade show " id="unreadConversations" role="alert">
                                    No Unread Conversations
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="text-muted mb-0">1-50 of 154</div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="mail-primary">
                    <div class="message-list-content mx-n4 px-4 message-list-scroll">
                        <div id="elmLoader">
                            <div class="spinner-border text-primary avatar-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <ul class="message-list" id="mail-list"></ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end email-content -->

    <div class="email-detail-content">
        <div class="p-4 d-flex flex-column h-100">
            <div class="pb-4 border-bottom border-bottom-dashed">
                <div class="row">
                    <div class="col">
                        <div class="">
                            <button type="button" class="btn btn-subtle-danger btn-icon btn-sm fs-lg close-btn-email" id="close-btn-email">
                                <i class="ri-close-fill align-bottom"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="hstack gap-sm-1 align-items-center flex-wrap email-topbar-link">
                            <button class="btn btn-ghost-secondary btn-icon btn-sm fs-lg">
                                <i class="ri-printer-fill align-bottom"></i>
                            </button>
                            <button class="btn btn-ghost-secondary btn-icon btn-sm fs-lg remove-mail" data-remove-id="" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                <i class="ri-delete-bin-5-fill align-bottom"></i>
                            </button>
                            <div class="dropdown">
                                <button class="btn btn-ghost-secondary btn-icon btn-sm fs-lg" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-2-fill align-bottom"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                    <a class="dropdown-item" href="#">Add Star</a>
                                    <a class="dropdown-item" href="#">Mute</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-n4 px-4 email-detail-content-scroll" data-simplebar>
                <div class="mt-4 mb-3">
                    <h5 class="fw-bold email-subject-title">New updates for Steex Theme</h5>
                </div>

                <div class="accordion accordion-flush">
                    <div class="accordion-item border-dashed left">
                        <div class="accordion-header">
                            <a role="button" class="btn w-100 text-start px-0 bg-transparent shadow-none collapsed" data-bs-toggle="collapse" href="#email-collapseOne" aria-expanded="true" aria-controls="email-collapseOne">
                                <div class="d-flex align-items-center text-muted">
                                    <div class="flex-shrink-0 avatar-xs me-3">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-md text-truncate email-user-name mb-0">Jack Davis</h5>
                                        <div class="text-truncate fs-xs">to: me</div>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <div class="text-muted fs-xs">09 Jan 2022, 11:12 AM</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div id="email-collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body text-body px-0">
                                <div>
                                    <p>Hi,</p>
                                    <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor.</p>
                                    <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices.</p>
                                    <p>Sincerly,</p>

                                    <div class="d-flex gap-3">
                                        <div class="border rounded avatar-xl h-auto">
                                            <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="" class="img-fluid rouned-top">
                                            <div class="py-2 text-center">
                                                <a href="" class="d-block fw-semibold">Download</a>
                                            </div>
                                        </div>
                                        <div class="border rounded avatar-xl h-auto">
                                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt="" class="img-fluid rouned-top">
                                            <div class="py-2 text-center">
                                                <a href="" class="d-block fw-semibold">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion-item -->

                    <div class="accordion-item border-dashed right">
                        <div class="accordion-header">
                            <a role="button" class="btn w-100 text-start px-0 bg-transparent shadow-none collapsed" data-bs-toggle="collapse" href="#email-collapseTwo" aria-expanded="true" aria-controls="email-collapseTwo">
                                <div class="d-flex align-items-center text-muted">
                                    <div class="flex-shrink-0 avatar-xs me-3">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-md text-truncate email-user-name-right mb-0">Anna Adam</h5>
                                        <div class="text-truncate fs-xs">to: jackdavis@email.com</div>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <div class="text-muted fs-xs">09 Jan 2022, 02:15 PM</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div id="email-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body text-body px-0">
                                <div>
                                    <p>Hi,</p>
                                    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual.</p>
                                    <p>Thank you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion-item -->

                    <div class="accordion-item border-dashed left">
                        <div class="accordion-header">
                            <a role="button" class="btn w-100 text-start px-0 bg-transparent shadow-none" data-bs-toggle="collapse" href="#email-collapseThree" aria-expanded="true" aria-controls="email-collapseThree">
                                <div class="d-flex align-items-center text-muted">
                                    <div class="flex-shrink-0 avatar-xs me-3">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-md text-truncate email-user-name mb-0">Jack Davis</h5>
                                        <div class="text-truncate fs-xs">to: me</div>
                                    </div>
                                    <div class="flex-shrink-0 align-self-start">
                                        <div class="text-muted fs-xs">10 Jan 2022, 10:08 AM</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div id="email-collapseThree" class="accordion-collapse collapse show">
                            <div class="accordion-body text-body px-0">
                                <div>
                                    <p>Hi,</p>
                                    <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar pronunciation.</p>
                                    <p>Thank you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion-item -->
                </div>
                <!-- end accordion -->
            </div>
            <div class="mt-auto">
                <form class="mt-2">
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Reply :</label>
                        <textarea class="form-control border-bottom-0 rounded-top rounded-0 border" id="exampleFormControlTextarea1" rows="3" placeholder="Enter message"></textarea>
                        <div class="bg-light px-2 py-1 rouned-bottom border">
                            <div class="row">
                                <div class="col">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm py-0 fs-lg btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Bold"><i class="ri-bold align-bottom"></i></button>
                                        <button type="button" class="btn btn-sm py-0 fs-lg btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Italic"><i class="ri-italic align-bottom"></i></button>
                                        <button type="button" class="btn btn-sm py-0 fs-lg btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Link"><i class="ri-link align-bottom"></i></button>
                                        <button type="button" class="btn btn-sm py-0 fs-lg btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Image"><i class="ri-image-2-line align-bottom"></i></button>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-success"><i class="ri-send-plane-2-fill align-bottom"></i></button>
                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="ri-timer-line text-muted me-1 align-bottom"></i> Schedule Send</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end email-detail-content -->
</div>
<!-- end email wrapper -->

<div class="email-chat-detail" id="emailchat-detailElem">
    <div class="card mb-0 overflow-hidden">
        <div class="card-header align-items-center d-flex bg-primary text-white-50 p-3">
            <div class="flex-grow-1">
                <h5 class="fs-md text-white profile-username"></h5>
                <p class="mb-0 fs-sm lh-1">Active</p>
            </div>
            <div class="flex-shrink-0">
                <div class="mt-n1">
                    <button type="button" class="btn btn-link btn-icon btn-sm text-white fs-lg text-decoration-none rounded-circle bg-white bg-opacity-10" id="emailchat-btn-close"><i class="ri-close-fill"></i></button>
                </div>
            </div>
        </div><!-- end card header -->

        <div class="card-body p-0">
            <div id="users-chat">
                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 250px;">
                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Good morning 😊</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list right">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list right">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Wow that's great</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->
                    </ul>
                </div>
            </div>

            <div class="border-top border-top-dashed">
                <div class="row g-2 mx-3 mt-2 mb-3">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                        </div>
                    </div><!-- end col -->
                    <div class="col-auto">
                        <button type="submit" class="btn btn-secondary"><i class="mdi mdi-send"></i></button>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end cardbody -->
    </div>
</div>
<!-- end email chat detail -->

<!-- Compose Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header p-3 bg-light">
                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="mb-3 position-relative">
                        <input type="text" class="form-control email-compose-input" data-choices data-choices-limit="15" value="support@themesbrand.com" data-choices-removeItem placeholder="To">
                        <div class="position-absolute top-0 end-0">
                            <div class="d-flex">
                                <button class="btn btn-link text-reset fw-semibold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#CcRecipientsCollapse" aria-expanded="false" aria-controls="CcRecipientsCollapse">
                                    Cc
                                </button>
                                <button class="btn btn-link text-reset fw-semibold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#BccRecipientsCollapse" aria-expanded="false" aria-controls="BccRecipientsCollapse">
                                    Bcc
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="CcRecipientsCollapse">
                        <div class="mb-3">
                            <label>Cc:</label>
                            <input type="text" class="form-control" data-choices data-choices-limit="15" data-choices-removeItem placeholder="Cc recipients">
                        </div>
                    </div>
                    <div class="collapse" id="BccRecipientsCollapse">
                        <div class="mb-3">
                            <label>Bcc:</label>
                            <input type="text" class="form-control" data-choices data-choices-limit="15" data-choices-removeItem placeholder="Bcc recipients">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="ck-editor-reverse">
                        <div id="email-editor"></div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Discard</button>

                <div class="btn-group">
                    <button type="button" class="btn btn-success">Send</button>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="ri-timer-line text-muted me-1 align-bottom"></i> Schedule Send</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- removeItemModal -->
<div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <div class="text-danger display-5">
                        <i class="bi bi-trash3"></i>
                    </div>
                    <div class="mt-4 pt-2 fs-lg mx-4 mx-sm-5">
                        <h4>Are you Sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                </div>
            </div>
            <!-- modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('script')

<script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/mailbox.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
