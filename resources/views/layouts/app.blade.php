<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../template/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../template/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../template/assets/libs/css/style.css">
    <link rel="stylesheet" href="../template/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../template/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../template/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../template/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../template/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../template/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../template/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../template/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../template/assets/libs/css/style.css">
    <link rel="stylesheet" href="../template/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <title>@yield('title')</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('layouts.admin-dash-layouts.topbar') <!-- Topbar included here -->
        @include('layouts.admin-dash-layouts.sidebar') <!-- Sidebar included here -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    @include('layouts.admin-dash-layouts.pageheader') <!--pageheader -->
                    @yield('content')<!--Content of dashboard-->
                </div>
            </div>
            @include('layouts.admin-dash-layouts.footer')<!-- footer -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="../assets/vendor/charts/sparkline/spark-js.js"></script>
    <!-- jquery 3.3.1 -->
    <script src="../template/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../template/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../template/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../template/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../template/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../template/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../template/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../template/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../template/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../template/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../template/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../template/assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>