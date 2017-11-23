<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title> Admin </title>

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/adminc/ss/font-awesome.min.css" rel="stylesheet" />
    <link href="/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="/admin/css/owl.carousel.css" type="text/css">
    <link href="/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/fullcalendar.css">
    <link href="/admin/css/widgets.css" rel="stylesheet">
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="/admin/css/xcharts.min.css" rel=" stylesheet">
    <link href="/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
    <section id="container" class="">
        @if(Auth::guard('admin')->check())
        @include('admin.header.header')
        @include('admin.sidebar.sidebar')
        @yield('content')
            @else
            @yield('content')
        @endif
    </section>

    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/admin/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="/admin/js/owl.carousel.js"></script>
    <<script src="/admin/js/fullcalendar.min.js"></script>
    <script src="/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="/admin/js/calendar-custom.js"></script>
    <script src="/admin/js/jquery.rateit.min.js"></script>
    <script src="/admin/js/jquery.customSelect.min.js"></script>
    <script src="/admin/assets/chart-master/Chart.js"></script>
    <script src="/admin/js/scripts.js"></script>
    <script src="/admin/js/sparkline-chart.js"></script>
    <script src="/admin/js/easy-pie-chart.js"></script>
    <script src="/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/admin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/js/xcharts.min.js"></script>
    <script src="/admin/js/jquery.autosize.min.js"></script>
    <script src="/admin/js/jquery.placeholder.min.js"></script>
    <script src="/admin/js/gdp-data.js"></script>
    <script src="/admin/js/morris.min.js"></script>
    <script src="/admin/js/sparklines.js"></script>
    <script src="/admin/js/charts.js"></script>
    <script src="/admin/js/jquery.slimscroll.min.js"></script>
</body>
</html>