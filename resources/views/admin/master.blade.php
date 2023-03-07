<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="lang" content="{{ app()->getLocale() }}"/>
    <title>
        {{ config('app.name') }} @stack('title')
    </title>


    @include('admin.layouts._head')
</head>

<body class="layout-boxed">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->


<!--  BEGIN NAVBAR  -->
@include('admin.layouts._navbar')
<!--  END NAVBAR  -->


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>


    @include('admin.layouts._sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">

                <!--  BEGIN BREADCRUMBS  -->
                @yield('breadcrumb')
                <!--  END BREADCRUMBS  -->

                <!--  BEGIN CONTENT AREA  -->
                @yield('content')
                <!--  END CONTENT AREA  -->
            </div>
        </div>
    </div>

</div>


@include('admin.layouts._footer-js')


</body>
</html>
