<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ABS Construction</title>

    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />



    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />

    <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>


    {{-- jQuery (required for DataTables) --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/dropzone/dropzone.css" />

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>

    {{-- toaster --}}
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- Data table --}}
    <link rel="stylesheet" type="http://cdn.datatables.net/2.1.6/css/dataTables.dataTables.min.css">
    
</head>

<body>

    {{-- for sound --}}
    <audio class="successSound" src="assets/sounds/success.mp3"></audio>
    <audio class="errorSound" src="assets/sounds/error.mp3"></audio>
    <audio class="warningSound" src="assets/sounds/warning.mp3"></audio>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">ABS</span>
                    </a>
            
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
                    </a>
                </div>
            
                <div class="menu-inner-shadow"></div>
            
                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                            <div class="badge bg-danger rounded-pill ms-auto">5</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="Admin Dashboard">Admin Dashboard</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            
            
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>


                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="ti ti-menu-2 ti-md"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item navbar-search-wrapper mb-0">
                                    <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                                        <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                                        <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Notification -->
                                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                    <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                        href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        aria-expanded="false">
                                        <span class="position-relative">
                                            <i class="ti ti-bell ti-md"></i>
                                            <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-0">
                                        <li class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h6 class="mb-0 me-auto">Notification</h6>
                                                <div class="d-flex align-items-center h6 mb-0">
                                                    <span class="badge bg-label-primary me-2">0 New</span>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                                            class="ti ti-mail-opened text-heading"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-notifications-list scrollable-container">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar">
                                                                <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                            <small class="mb-1 d-block text-body">Won the monthly best seller gold
                                                                badge</small>
                                                            <small class="text-muted">1h ago</small>
                                                        </div>
                                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                                    class="badge badge-dot"></span></a>
                                                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                                    class="ti ti-x"></span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="border-top">
                                            <div class="d-grid p-4">
                                                <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                                    <small class="align-middle">View all notifications</small>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ Notification --> 

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar avatar-online">
                                                            <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0"></h6>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider my-1 mx-n2"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-profile-user.html">
                                                <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider my-1 mx-n2"></div>
                                        </li>
                                        <li>
                                            <div class="d-grid px-2 pt-2 pb-1">
                                                <a class="btn btn-sm btn-danger d-flex" href="#" target="_blank">
                                                    <small class="align-middle">Logout</small>
                                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>

                        <!-- Search Small Screens -->
                        <div class="navbar-search-wrapper search-input-wrapper d-none">
                            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                                aria-label="Search..." />
                            <i class="ti ti-x search-toggler cursor-pointer"></i>
                        </div>
                    </nav>

                    <!-- Modal -->
                    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="notificationModalLabel">Notification Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="notificationDetails"></div>
                                    <div id="notificationImage" class="mt-3 text-center" style="display: none;">
                                        <img src="" alt="Bond Image" class="img-fluid" id="bondImage">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success">Print <i
                                            class="fas fa-download ms-2"></i></button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="viewDetailsBtn">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                </div>
                <!-- Content -->
                @include('include.content')
                <!-- / Content -->

                <!-- Footer -->
                
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                      <div
                        class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                        <div class="text-body">
                          ©
                          <script>
                            document.write(new Date().getFullYear());
                          </script>
                          , made with  by <a href="#" target="_blank" class="footer-link">Marazin (Pvt) Ltd</a>
                        </div>
                        <div class="d-none d-lg-inline-block">
                          <a href="#" class="footer-link me-4"
                            target="_blank">License</a> 
                
                          <a href="#" target="_blank"
                            class="footer-link d-none d-sm-inline-block">Support</a>
                        </div>
                      </div>
                    </div>
                  </footer>

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/forms-pickers.js"></script>
        
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/js/modal-add-new-address.js"></script>

    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script src="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
    <script src="../../assets/vendor/libs/pickr/pickr.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/tagify/tagify.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>
    <script src="../../assets/js/forms-pickers.js"></script>


    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-basic.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-validation.js"></script>

     <!-- jQuery Validation Plugin -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


      {{-- Toaster --}}
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="../../assets/vendor/libs/dropzone/dropzone.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
     <script src="../../assets/js/forms-file-upload.js"></script>
     <script src="../../assets/vendor/libs/autosize/autosize.js"></script>
     <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
     <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>


 <!-- Main JS -->
 <script src="../../assets/js/main.js"></script>

     <!-- Page JS -->
     <script src="../../assets/js/forms-extras.js"></script>

          {{-- This is Toaster --}}

    <script>
        $(document).ready(function() {
            var successSound = document.querySelector('.successSound');
            var errorSound = document.querySelector('.errorSound');

            @if (Session::has('toastr-success'))
                toastr.success("{{ Session::get('toastr-success') }}");
                successSound.play();
            @endif

            @if (Session::has('toastr-error'))
                toastr.error("{{ Session::get('toastr-error') }}");
                errorSound.play();
            @endif

            @if (Session::has('toastr-warning'))
                toastr.warning("{{ Session::get('toastr-warning') }}");
            @endif

            @if (Session::has('toastr-info'))
                toastr.info("{{ Session::get('toastr-info') }}"); @endif
        });
    </script>

</body>

</html>
