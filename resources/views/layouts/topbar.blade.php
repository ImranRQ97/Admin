<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="22">
                        </span>
                    </a>

                    <a href="index" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button"
                    class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <form class="app-search d-none d-md-inline-flex">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                            id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                            id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index" class="btn btn-subtle-secondary btn-sm btn-rounded">how to setup <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                                <a href="index" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="m-0">Angela Bernier</h6>
                                            <span class="fs-2xs mb-0 text-muted">Manager</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="m-0">David Grasso</h6>
                                            <span class="fs-2xs mb-0 text-muted">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-1">
                                            <h6 class="m-0">Mike Bunch</h6>
                                            <span class="fs-2xs mb-0 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="text-center pt-3 pb-1">
                            <a href="#" class="btn btn-primary btn-sm">View All Results <i
                                    class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <!-- <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bi bi-grid fs-2xl'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-base"> Browse by Apps </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="btn btn-sm btn-subtle-info"> View All Apps
                                        <i class="ri-arrow-right-s-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{ URL::asset('build/images/brands/github.png') }}" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{ URL::asset('build/images/brands/bitbucket.png') }}"
                                            alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{ URL::asset('build/images/brands/dribbble.png') }}"
                                            alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{ URL::asset('build/images/brands/dropbox.png') }}"
                                            alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{ URL::asset('build/images/brands/mail_chimp.png') }}"
                                            alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="{{ URL::asset('build/images/brands/slack.png') }}" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false">
                        <i class='bi bi-bag fs-2xl'></i>
                        <span
                            class="position-absolute topbar-badge cartitem-badge fs-3xs translate-middle badge rounded-pill bg-info">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 product-list"
                        aria-labelledby="page-header-cart-dropdown">
                        <div class="p-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-lg fw-semibold"> My Cart <span
                                            class="badge bg-secondary fs-sm cartitem-badge ms-1">7</span></h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!">View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 300px;">
                            <div class="p-3">
                                <div class="text-center empty-cart" id="empty-cart">
                                    <div class="avatar-md mx-auto my-3">
                                        <div class="avatar-title bg-info-subtle text-info fs-2 rounded-circle">
                                            <i class='bx bx-cart'></i>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                    <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                </div>

                                <div class="d-block dropdown-item product text-wrap p-2">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3 flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="{{ URL::asset('build/images/products/32/img-1.png') }}"
                                                    class="avatar-xs" alt="user-pic">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-1 fs-sm text-muted">Fashion</p>
                                            <h6 class="mt-0 mb-3 fs-md">
                                                <a href="#!" class="text-reset">Blive Printed Men Round Neck</a>
                                            </h6>
                                            <div class="text-muted fw-medium d-none">$<span
                                                    class="product-price">327.49</span></div>
                                            <div class="input-step">
                                                <button type="button" class="minus">–</button>
                                                <input type="number" class="product-quantity" value="2"
                                                    min="0" max="100" readonly>
                                                <button type="button" class="plus">+</button>
                                            </div>
                                        </div>
                                        <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn"
                                                data-bs-toggle="modal" data-bs-target="#removeCartModal"><i
                                                    class="ri-close-fill fs-lg"></i></button>
                                            <h5 class="mb-0">$ <span class="product-line-price">654.98</span></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item product text-wrap p-2">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3 flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="{{ URL::asset('build/images/products/img-5.png') }}"
                                                    class="avatar-xs" alt="user-pic">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-1 fs-sm text-muted">Sportwear</p>
                                            <h6 class="mt-0 mb-3 fs-md">
                                                <a href="#!" class="text-reset">Willage Volleyball Ball</a>
                                            </h6>
                                            <div class="text-muted fw-medium d-none">$<span
                                                    class="product-price">49.06</span></div>
                                            <div class="input-step">
                                                <button type="button" class="minus">–</button>
                                                <input type="number" class="product-quantity" value="3"
                                                    min="0" max="100" readonly>
                                                <button type="button" class="plus">+</button>
                                            </div>
                                        </div>
                                        <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn"
                                                data-bs-toggle="modal" data-bs-target="#removeCartModal"><i
                                                    class="ri-close-fill fs-lg"></i></button>
                                            <h5 class="mb-0">$ <span class="product-line-price">147.18</span></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item product text-wrap p-2">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3 flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="{{ URL::asset('build/images/products/32/img-10.png') }}"
                                                    class="avatar-xs" alt="user-pic">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-1 fs-sm text-muted">Fashion</p>
                                            <h6 class="mt-0 mb-3 fs-md">
                                                <a href="#!" class="text-reset">Cotton collar tshirts for men</a>
                                            </h6>
                                            <div class="text-muted fw-medium d-none">$<span
                                                    class="product-price">53.33</span></div>
                                            <div class="input-step">
                                                <button type="button" class="minus">–</button>
                                                <input type="number" class="product-quantity" value="3"
                                                    min="0" max="100" readonly>
                                                <button type="button" class="plus">+</button>
                                            </div>
                                        </div>
                                        <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn"
                                                data-bs-toggle="modal" data-bs-target="#removeCartModal"><i
                                                    class="ri-close-fill fs-lg"></i></button>
                                            <h5 class="mb-0">$ <span class="product-line-price">159.99</span></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item product text-wrap p-2">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3 flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="{{ URL::asset('build/images/products/32/img-11.png') }}"
                                                    class="avatar-xs" alt="user-pic">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-1 fs-sm text-muted">Fashion</p>
                                            <h6 class="mt-0 mb-3 fs-md">
                                                <a href="#!" class="text-reset">Jeans blue men boxer</a>
                                            </h6>
                                            <div class="text-muted fw-medium d-none">$<span
                                                    class="product-price">164.37</span></div>
                                            <div class="input-step">
                                                <button type="button" class="minus">–</button>
                                                <input type="number" class="product-quantity" value="1"
                                                    min="0" max="100" readonly>
                                                <button type="button" class="plus">+</button>
                                            </div>
                                        </div>
                                        <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn"
                                                data-bs-toggle="modal" data-bs-target="#removeCartModal"><i
                                                    class="ri-close-fill fs-lg"></i></button>
                                            <h5 class="mb-0">$ <span class="product-line-price">164.37</span></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item product text-wrap p-2">
                                    <div class="d-flex">
                                        <div class="avatar-sm me-3 flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="{{ URL::asset('build/images/products/32/img-8.png') }}"
                                                    class="avatar-xs" alt="user-pic">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-1 fs-sm text-muted">Fashion</p>
                                            <h6 class="mt-0 mb-3 fs-md">
                                                <a href="#!" class="text-reset">Full Sleeve Solid Men
                                                    Sweatshirt</a>
                                            </h6>
                                            <div class="text-muted fw-medium d-none">$<span
                                                    class="product-price">180.00</span></div>
                                            <div class="input-step">
                                                <button type="button" class="minus">–</button>
                                                <input type="number" class="product-quantity" value="1"
                                                    min="0" max="100" readonly>
                                                <button type="button" class="plus">+</button>
                                            </div>
                                        </div>
                                        <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn"
                                                data-bs-toggle="modal" data-bs-target="#removeCartModal"><i
                                                    class="ri-close-fill fs-lg"></i></button>
                                            <h5 class="mb-0">$ <span class="product-line-price">180.00</span></h5>
                                        </div>
                                    </div>
                                </div>

                                <div id="count-table">
                                    <table class="table table-borderless mb-0  fw-semibold">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total :</td>
                                                <td class="text-end cart-subtotal">$1306.52</td>
                                            </tr>
                                            <tr>
                                                <td>Discount <span class="text-muted">(Steex15)</span>:</td>
                                                <td class="text-end cart-discount">- $195.98</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge :</td>
                                                <td class="text-end cart-shipping">$65.00</td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Tax (12.5%) : </td>
                                                <td class="text-end cart-tax">$163.31</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                            id="checkout-elem">
                            <div class="d-flex justify-content-between align-items-center pb-3">
                                <h5 class="m-0 text-muted">Total:</h5>
                                <div class="px-2">
                                    <h5 class="m-0 cart-total">$1338.86</h5>
                                </div>
                            </div>

                            <a href="apps-ecommerce-checkout" class="btn btn-info text-center w-100">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div> -->

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bi bi-arrows-fullscreen fs-lg'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-sun align-middle fs-3xl"></i>
                    </button>
                    <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                        <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i>
                            Default (light mode)</a>
                        <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i>
                            Dark</a>
                        <a href="#!" class="dropdown-item" data-mode="auto"><i
                                class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                src="{{ Auth::user()->logo ? asset('storage/' . Auth::user()->logo) : URL::asset('build/images/') }}"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                <span
                                    class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">{{ Auth::user()->business_name }}</span>
                            </span>
                        </span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Richard!</h6>

                        <a class="dropdown-item" href="/register"><i
                                class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">Taskboard</span></a>
                        <!-- <a class="dropdown-item" href="pages-faqs"><i
                                class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">Help</span></a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <a class="dropdown-item" href="pages-profile"><i
                                class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">Balance : <b>$8451.36</b></span></a> -->
                        <!-- <a class="dropdown-item" href="pages-profile-settings"><span
                                class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">@lang('translation.settings')</span></a> -->
                        <a class="dropdown-item" href="{{ route('password.confirm') }}"><i
                                class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">
                                @lang('translation.lock-screen')</span></a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">@lang('translation.logout')</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-4"></i>
                    </div>
                    <div class="mt-4 fs-base">
                        <h4 class="mb-1">Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                        It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- removeCartModal -->
<div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-cartmodal"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-5"></i>
                    </div>
                    <div class="mt-4">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                        It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->