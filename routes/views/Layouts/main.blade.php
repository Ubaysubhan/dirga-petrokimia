<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IMS | Dashboard</title>
    <link href="{{ asset ('css/app.css') }}" rel="stylesheet">
</head>

<body class=" flex">
    
   

                <!-- Sidebar -->
                @include('Layouts.sidebar')
                <!-- Sidebar -->
            <div class="mt-auto">
                <!-- topbar -->
                @include('Layouts.topbar')
                <!-- topbar -->

                <!-- Container Fluid-->
                 @yield('container')
                <!---Container Fluid-->
            </div>
</div>    

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
        </a>

</body>

</html>
