<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ URL::asset('dist/img/logo/Logo Dirga kecil 2.png') }}" rel="icon">
    <title>Dirga | Retail Management PG</title>
    <link href="{{ URL::asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('dist/css/ruang-admin.min.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet"> -->
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<c:url" value="resources/js/bootstrap.js"></script>
    <link href="{{ URL::asset('dist/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Layouts.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('Layouts.topbar')
                <!-- Topbar -->

                <!-- Alert -->
                @include('Layouts.alert')
                <!-- Alert -->

                <!-- Container Fluid-->
                    @yield('container')
                <!---Container Fluid-->
            </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="{{ URL::asset('dist/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ URL::asset('dist/js/ruang-admin.min.js') }}"></script>
        <script src="{{ URL::asset('dist/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ URL::asset('dist/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ URL::asset('dist/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}"></script>
        <script>
            $("input[id='quantityForm']").TouchSpin({
                min: 0,
                max: 100,                
                boostat: 5,
                maxboostedstep: 10,        
                initval: 0
            });
        </script>
        @yield('script')
</body>

</html>
