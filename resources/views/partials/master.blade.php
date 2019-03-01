<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{--<link  href="{{('css/bootstrap.min.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/bootstrap-responsive.min.css')}}"  rel="stylesheet"/>--}}
    {{--<link rel="stylesheet" href="{{('css/bootstrap-wysihtml5.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/datepicker.css')}}" />--}}

    {{--<link rel="stylesheet" href="{{('css/font-awesome.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/fullcalendar.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/jquery.easy-pie-chart.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/matrix-login.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/matrix-media.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/matrix-style.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/select2.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{('css/uniform.css')}}" />--}}

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    @yield('stylesheets')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('partials.header')
    @include('partials.sidebar')
    @yield('content')
</div>


<script src="js/excanvas.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.min.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.dashboard.js"></script>
<script src="js/jquery.gritter.min.js"></script>
<script src="js/matrix.interface.js"></script>
<script src="js/matrix.chat.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/matrix.form_validation.js"></script>
<script src="js/jquery.wizard.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/matrix.popover.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.tables.js"></script>


{{--<script src="{{ ('js/jquery.min.js') }}"></script>--}}

{{--<script src="{{ ('js/jquery.dataTables.min.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.easy-pie-chart.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.flot.min.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.flot.pie.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.flot.resize.min.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.flot.stack.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.flot.crosshair.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.gritter.min.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.peity.min.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.ui.custom.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.uniform.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.validate.js') }}"></script>--}}
{{--<script src="{{ ('js/jquery.wizard.js') }}"></script>--}}
{{--<script src="{{ ('js/fullcalendar.min.js') }}"></script>--}}

{{--<script src="{{ ('js/bootstrap-datepicker.js') }}"></script>--}}
{{--<script src="{{ ('js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ ('js/bootstrap.js') }}"></script>--}}
{{--<script src="{{ ('js/bootstrap-wysihtml5.js') }}"></script>--}}

{{--<script src="{{ ('js/excanvas.min.js') }}"></script>--}}
{{--<script src="{{ ('js/masked.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.form_common.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.calendar.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.charts.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.chat.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.dashboard.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.form_validation.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.interface.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.login.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.popover.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.tables.js') }}"></script>--}}
{{--<script src="{{ ('js/matrix.wizard.js') }}"></script>--}}
{{--<script src="{{ ('js/select2.min.js') }}"></script>--}}
{{--<script src="{{ ('js/masked.js') }}"></script>--}}
{{--<script src="{{ ('js/wysihtml5-0.3.0.js') }}"></script>--}}

@yield('scripts')
</body>
</html>