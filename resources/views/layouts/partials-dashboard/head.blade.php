<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>Admin</title>

<meta name="description" content="" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{!! url('assets-dashboard/assets/img/favicon/favicon.ico') !!}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/fonts/boxicons.css') !!}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/css/core.css') !!}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/css/theme-default.css') !!}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/css/demo.css') !!}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') !!}" />
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/libs/typeahead-js/typeahead.css') !!}" />
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') !!}">
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') !!}">
<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/libs/flatpickr/flatpickr.css') !!}" />

<link rel="stylesheet" href="{!! url('assets-dashboard/assets/vendor/libs/apex-charts/apex-charts.css') !!}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{!! url('assets-dashboard/assets/vendor/js/helpers.js') !!}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{!! url('assets-dashboard/assets/js/config.js') !!}"></script>


{{-- <script language="JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script> --}}

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{!! url('assets-dashboard/assets/vendor/libs/jquery/jquery.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/libs/popper/popper.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/js/bootstrap.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>

<script src="{!! url('assets-dashboard/assets/vendor/js/menu.js') !!}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{!! url('assets-dashboard/assets/vendor/libs/apex-charts/apexcharts.js') !!}"></script>

<!-- Vendors JS -->
<script src="{!! url('assets-dashboard/assets/vendor/libs/datatables/jquery.dataTables.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/libs/datatables-responsive/datatables.responsive.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') !!}"></script>
<!-- Flat Picker -->
<script src="{!! url('assets-dashboard/assets/vendor/libs/moment/moment.js') !!}"></script>
<script src="{!! url('assets-dashboard/assets/vendor/libs/flatpickr/flatpickr.js') !!}"></script>

<!-- Main JS -->
<script src="{!! url('assets-dashboard/assets/js/main.js') !!}"></script>

<!-- Page JS -->
<script src="{!! url('assets-dashboard/assets/js/dashboards-analytics.js') !!}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<style>
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc_disabled:before {
        right: 1em;
        content: "\02C6" !important;
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:after {
        right: 0.5em;
        content: "\02C7" !important;
    }

    .select_disabled {
        pointer-events: none;
        background-color: #eceef1;
    }
</style>
