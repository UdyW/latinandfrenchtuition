<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap">
    <link rel="stylesheet" href="../assets/slick/slick.css">
    <link rel="stylesheet" href="../assets/slick/slick-theme.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    
    <script rel="preload" src="{{ asset('material') }}/js/core/jquery.min.js" as="script"></script>
    <script rel="preload" src="{{ asset('material') }}/js/core/popper.min.js" as="script" defer></script>
    <script rel="preload" src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js" as="script" defer></script>
    <script rel="preload" src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js" as="script" defer></script>

    {{--<script src="assets/js/jquery.js"></script>--}}
    <script rel="preload"  src="assets/slick/slick.js" as="script"></script>
    <script  rel="preload" src="assets/js/bootstrap.min.js" as="script" defer></script>
    <script rel="preload"  src="assets/js/main.js" as="script" defer></script>

    <script rel="preload"  src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js" as="script" defer></script>
    <script rel="preload"  src="//code.jquery.com/ui/1.12.1/jquery-ui.js" as="script" defer></script>
    <script rel="preload"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js" as="script" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <title>Online Tuition</title>
</head>
<body class="{{ $class ?? '' }}">
@include('layouts.page_templates.frontend')


@stack('js')
@yield('javascript')
</body>
</html>
