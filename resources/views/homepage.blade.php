<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--BOOTSTRAP CSS-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/" />
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    <meta name="theme-color" content="#712cf9" />
    <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: #0000001a;
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow:
                inset 0 0.5em 1.5em #0000001a,
                inset 0 0.125em 0.5em #00000026;
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .bi {
            width: 1em;
            height: 1em;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
</head>

<body>

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="../assets/images/logos/logo.svg" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-6"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./index.html" aria-expanded="false">
                            <i class="ti ti-atom"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/index.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-aperture"></i>
                                </span>
                                <span class="hide-menu">Analytical</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/index2.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">eCommerce</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-grid"></i>
                                </span>
                                <span class="hide-menu">Front Pages</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-landingpage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Homepage</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-aboutpage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">About Us</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-blogpage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Blog</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-blogdetailpage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Blog Details</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-contactpage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Contact Us</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-portfoliopage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Portfolio</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/frontend-pricingpage.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Pricing</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>

                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">UI</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                            <i class="ti ti-layers-subtract"></i>
                            <span class="hide-menu">Buttons</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                            <i class="ti ti-alert-circle"></i>
                            <span class="hide-menu">Alerts</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                            <i class="ti ti-cards"></i>
                            <span class="hide-menu">Card</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                            <i class="ti ti-file-text"></i>
                            <span class="hide-menu">Forms</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                            <i class="ti ti-typography"></i>
                            <span class="hide-menu">Typography</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-grid"></i>
                                </span>
                                <span class="hide-menu">Ui Elements</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-accordian.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Accordian</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-badge.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Badge</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-dropdowns.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Dropdowns</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-modals.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Modals</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-tab.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Tab</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-tooltip-popover.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Tooltip & Popover</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-notification.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Notification</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-progressbar.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Progressbar</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-pagination.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Pagination</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-bootstrap-ui.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap UI</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-breadcrumb.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Breadcrumb</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-offcanvas.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Offcanvas</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-lists.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Lists</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-grid.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Grid</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-carousel.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Carousel</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-scrollspy.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Scrollspy</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-spinner.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Spinner</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-link.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Link</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-components"></i>
                                </span>
                                <span class="hide-menu">Components</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/component-sweetalert.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Sweet Alert</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/component-nestable.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Nestable</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/component-noui-slider.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Noui slider</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/component-rating.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Rating</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/component-toastr.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Toastr</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Cards</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-cards.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Basic Cards</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-card-customs.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Custom Cards</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-card-weather.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Weather Cards</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/ui-card-draggable.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Draggable Cards</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Apps</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-basket"></i>
                                </span>
                                <span class="hide-menu">Ecommerce</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-shop.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Shop</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-shop-detail.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Details</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-product-list.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">List</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-checkout.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Checkout</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-add-product.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Add Product</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-edit-product.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Edit Product</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-donut-3"></i>
                                </span>
                                <span class="hide-menu">Blog</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/blog-posts.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Blog Posts</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/blog-detail.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Blog Details</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/page-user-profile.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-user-circle"></i>
                                </span>
                                <span class="hide-menu">User Profile</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-email.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-mail"></i>
                                </span>
                                <span class="hide-menu">Email</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-calendar.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-calendar"></i>
                                </span>
                                <span class="hide-menu">Calendar</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-kanban.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-kanban"></i>
                                </span>
                                <span class="hide-menu">Kanban</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-chat.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-message-dots"></i>
                                </span>
                                <span class="hide-menu">Chat</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-notes.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-notes"></i>
                                </span>
                                <span class="hide-menu">Notes</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-contact.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-phone"></i>
                                </span>
                                <span class="hide-menu">Contact Table</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-contact2.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-list-details"></i>
                                </span>
                                <span class="hide-menu">Contact List</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/app-invoice.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-file-text"></i>
                                </span>
                                <span class="hide-menu">Invoice</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Pages</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout"></i>
                                </span>
                                <span class="hide-menu">Widgets</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/widgets-cards.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Cards</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/widgets-banners.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Banner</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/widgets-charts.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Charts</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/widgets-feeds.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Feeds</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/widgets-apps.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Apps</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/widgets-data.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Data</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-files"></i>
                                </span>
                                <span class="hide-menu">Pages</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/pages-animation.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Animation</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/pages-search-result.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Search Result</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/pages-gallery.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Gallery</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/pages-treeview.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Treeview</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/pages-block-ui.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Block-Ui</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/pages-session-timeout.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Session Timeout</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/page-pricing.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Pricing</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/page-faq.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">FAQ</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/page-account-settings.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Account Setting</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/landingpage/index.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Landingpage</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Forms</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-file-text"></i>
                                </span>
                                <span class="hide-menu">Elements</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-inputs.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Forms Input</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-input-groups.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Input Groups</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-input-grid.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Input Grid</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-checkbox-radio.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Checkbox & Radios</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-bootstrap-switch.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Switch</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-select2.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Select2</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-qrcode"></i>
                                </span>
                                <span class="hide-menu">Form Addons</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">

                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-dropzone.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Dropzone</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-mask.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Mask</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-typeahead.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Typehead</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-files"></i>
                                </span>
                                <span class="hide-menu">Forms Inputs</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-basic.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Basic Form</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-horizontal.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Horizontal</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-actions.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Actions</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-row-separator.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Row Separator</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-bordered.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Bordered</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-detail.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Detail</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-striped-row.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Striped Rows</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-floating-input.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Floating Input</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Validation</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-bootstrap-validation.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Validation</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-custom-validation.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Custom Validation</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-file-pencil"></i>
                                </span>
                                <span class="hide-menu">Form Pickers</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-picker-colorpicker.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Colorpicker</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-picker-bootstrap-rangepicker.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Rangepicker</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-picker-bootstrap-datepicker.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">BT Datepicker</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-picker-material-datepicker.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">MT Datepicker</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-dna"></i>
                                </span>
                                <span class="hide-menu">Form Editors</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-editor-quill.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Quill Editor</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-editor-tinymce.html">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Tinymce Edtor</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-wizard.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-files"></i>
                                </span>
                                <span class="hide-menu">Form Wizard</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/form-repeater.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-topology-star-3"></i>
                                </span>
                                <span class="hide-menu">Form Repeater</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Bootstrap Tables</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-basic.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-sidebar"></i>
                                </span>
                                <span class="hide-menu">Basic Table</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-dark-basic.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-sidebar"></i>
                                </span>
                                <span class="hide-menu">Dark Table</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-sizing.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-sidebar"></i>
                                </span>
                                <span class="hide-menu">Sizing Table</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-layout-coloured.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-layout-sidebar"></i>
                                </span>
                                <span class="hide-menu">Coloured Table</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Datatables</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-datatable-basic.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-air-conditioning-disabled"></i>
                                </span>
                                <span class="hide-menu">Basic</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-datatable-api.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-air-conditioning-disabled"></i>
                                </span>
                                <span class="hide-menu">API</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/table-datatable-advanced.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-air-conditioning-disabled"></i>
                                </span>
                                <span class="hide-menu">Advanced</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Charts</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-line.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-line"></i>
                                </span>
                                <span class="hide-menu">Line Chart</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-area.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-area"></i>
                                </span>
                                <span class="hide-menu">Area Chart</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-bar.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-bar"></i>
                                </span>
                                <span class="hide-menu">Bar Chart</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-pie.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-bar"></i>
                                </span>
                                <span class="hide-menu">Pie Chart</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-radial.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-arcs"></i>
                                </span>
                                <span class="hide-menu">Radial Chart</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/chart-apex-radar.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-chart-radar"></i>
                                </span>
                                <span class="hide-menu">Radar Chart</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>


                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Auth</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                            <i class="ti ti-login"></i>
                            <span class="hide-menu">Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                            <i class="ti ti-user-plus"></i>
                            <span class="hide-menu">Register</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Auth Pages</span>
                            </div>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-login.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Side Login</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-register.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Side Register</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-forgot-password.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Side Forgot Pwd</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-forgot-password2.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Boxed Forgot Pwd</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-two-steps.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Side Two Steps</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-two-steps2.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Boxed Two Steps</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-error.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Error</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link justify-content-between" target="_blank"
                                    href="https://bootstrapdemos.adminmart.com/modernize/dist/main/authentication-maintenance.html"
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center gap-3">
                                        <span class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </span>
                                        <span class="hide-menu">Maintenance</span>
                                    </div>
                                    <span
                                        class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Extra</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link justify-content-between" target="_blank"
                            href="https://bootstrapdemos.adminmart.com/modernize/dist/main/icon-solar.html"
                            aria-expanded="false">
                            <div class="d-flex align-items-center gap-3">
                                <span class="d-flex">
                                    <i class="ti ti-mood-smile"></i>
                                </span>
                                <span class="hide-menu">Solar Icon</span>
                            </div>
                            <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                            <i class="ti ti-archive"></i>
                            <span class="hide-menu">Tabler Icon</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                            <i class="ti ti-file"></i>
                            <span class="hide-menu">Sample Page</span>
                        </a>
                    </li>
                </ul>
                <div class="unlimited-access hide-menu bg-light-secondary position-relative mb-7 mt-5 rounded">
                    <div class="d-flex">
                        <div class="unlimited-access-title me-3">
                            <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Check Pro Version</h6>
                            <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/?ref=56#product-demo-section"
                                target="_blank" class="btn btn-secondary fs-2 fw-semibold">Check</a>
                        </div>
                        <div class="unlimited-access-img">
                            <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    @auth
        <div class="d-flex">
            <p>Welcome, Folks!</p>
            <form action="/logout" method="POST">
                @csrf
                <button>Log Out</button>
            </form>
        </div>
        <div class="border border-primary">
            <h2>Create a new post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Title">
                <textarea name="body" placeholder="Body Content..."></textarea>
                <button>Post</button>
            </form>
        </div>
        <!--Displays all posts from users-->
        <div class="border border-primary bg-tertiary">
            <h2>All Posts</h2>
            @foreach ($posts as $post)
                <div class="border border-secondary my-2 p-2">
                    <h3>{{$post['title']}} by {{ $post->user->name }}</h3>
                    <p>{{$post['body']}}</p>
                    <p><a href="/edit-post/{{ $post['id'] }}">Edit</a></p>
                    <form action="/delete-post/{{ $post['id'] }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <div class="d-flex justify-content-center py-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="check2" viewBox="0 0 16 16">
                    <path
                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                    </path>
                </symbol>
                <symbol id="circle-half" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                </symbol>
                <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                    <path
                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                    </path>
                    <path
                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                    </path>
                </symbol>
                <symbol id="sun-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                    </path>
                </symbol>
            </svg>
            <!--DARK MODE BUTTON-->
            <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
                <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme"
                    type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                    <svg class="bi my-1 theme-icon-active" aria-hidden="true">
                        <use href="#circle-half"></use>
                    </svg>
                    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                            aria-pressed="false">
                            <svg class="bi me-2 opacity-50" aria-hidden="true">
                                <use href="#sun-fill"></use>
                            </svg>
                            Light
                            <svg class="bi ms-auto d-none" aria-hidden="true">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                            aria-pressed="false">
                            <svg class="bi me-2 opacity-50" aria-hidden="true">
                                <use href="#moon-stars-fill"></use>
                            </svg>
                            Dark
                            <svg class="bi ms-auto d-none" aria-hidden="true">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active"
                            data-bs-theme-value="auto" aria-pressed="true">
                            <svg class="bi me-2 opacity-50" aria-hidden="true">
                                <use href="#circle-half"></use>
                            </svg>
                            Auto
                            <svg class="bi ms-auto d-none" aria-hidden="true">
                                <use href="#check2"></use>
                            </svg>
                        </button>
                    </li>
                </ul>
                <!--DARK MODE BUTTON-->
            </div>
            <!--DARK MODE BUTTON-->

            <!--REGISTRATION FORM-->
            <main class="form-signin w-100">
                <form action="/register" method="POST">
                    @csrf
                    <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57" />
                    <h1 class="h3 mb-3 fw-normal">Registration</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="John Doe" name="name" />
                        <label for="floatingName">Full Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="email" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault" />
                        <label class="form-check-label" for="checkDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2">
                        Register
                    </button>
                </form>
            </main>
            <!--REGISTRATION FORM-->


            <!--LOGIN-->
            <main class="form-signin w-100">
                <!--LOGIN-->
                <form action="/login" method="POST">
                    @csrf
                    <img class="mb-4" src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57" />
                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="loginemail" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="loginpassword" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault" />
                        <label class="form-check-label" for="checkDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2">
                        Login
                    </button>
                </form>
            </main>
            <!--LOGIN-->


        </div>
    @endauth

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}" class="astro-vvvwv3sm"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script> -->
</body>

</html>