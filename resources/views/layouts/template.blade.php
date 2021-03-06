<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/slick/slick.css">
    <link rel="stylesheet" href="../assets/slick/slick-theme.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
    <!-- Chartist JS -->
    <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Niovi\'s Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/slick/slick.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>Online Tuition</title>
</head>
<body class="{{ $class ?? '' }}">
    @include('layouts.page_templates.frontend')


{{--<div class="fixed-plugin">--}}
{{--<div class="dropdown show-dropdown">--}}
{{--<a href="#" data-toggle="dropdown">--}}
{{--<i class="fa fa-cog fa-2x"> </i>--}}
{{--</a>--}}
{{--<ul class="dropdown-menu">--}}
{{--<li class="header-title"> Sidebar Filters</li>--}}
{{--<li class="adjustments-line">--}}
{{--<a href="javascript:void(0)" class="switch-trigger active-color">--}}
{{--<div class="badge-colors ml-auto mr-auto">--}}
{{--<span class="badge filter badge-purple " data-color="purple"></span>--}}
{{--<span class="badge filter badge-azure" data-color="azure"></span>--}}
{{--<span class="badge filter badge-green" data-color="green"></span>--}}
{{--<span class="badge filter badge-warning active" data-color="orange"></span>--}}
{{--<span class="badge filter badge-danger" data-color="danger"></span>--}}
{{--<span class="badge filter badge-rose" data-color="rose"></span>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="header-title">Images</li>--}}
{{--<li class="active">--}}
{{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--<img src="{{ asset('material') }}/img/sidebar-1.jpg" alt="">--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--<img src="{{ asset('material') }}/img/sidebar-2.jpg" alt="">--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--<img src="{{ asset('material') }}/img/sidebar-3.jpg" alt="">--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--<img src="{{ asset('material') }}/img/sidebar-4.jpg" alt="">--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="button-container">--}}
{{--<a href="https://www.creative-tim.com/product/material-dashboard-laravel" target="_blank" class="btn btn-primary btn-block">Free Download</a>--}}
{{--</li>--}}
{{--<!-- <li class="header-title">Want more components?</li>--}}
{{--<li class="button-container">--}}
{{--<a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">--}}
{{--Get the pro version--}}
{{--</a>--}}
{{--</li> -->--}}
{{--<li class="button-container">--}}
{{--<a href="https://material-dashboard-laravel.creative-tim.com/docs/getting-started/laravel-setup.html" target="_blank" class="btn btn-default btn-block">--}}
{{--View Documentation--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="button-container github-star">--}}
{{--<a class="github-button" href="https://github.com/creativetimofficial/material-dashboard-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>--}}
{{--</li>--}}
{{--<li class="header-title">Thank you for 95 shares!</li>--}}
{{--<li class="button-container text-center">--}}
{{--<button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>--}}
{{--<button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>--}}
{{--<br>--}}
{{--<br>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
<!--   Core JS Files   -->

@stack('js')
    @yield('javascript')
</body>
</html>
