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


    @include('auth.layouts._head')
</head>

<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<div class="auth-container d-flex">
    <div class="container mx-auto align-self-center">
        <div class="row">
            <div
                class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                <div class="auth-cover-bg-image"></div>
                <div class="auth-overlay"></div>
                <div class="auth-cover">
                    <div class="position-relative">
                        <img src="{{asset('adminLtr/src/assets/img/auth-cover.svg')}}" alt="auth-img">

                        <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert developers</h2>
                        <p class="text-white px-2">It is easy to setup with great customer experience. Start your 7-day
                            free trial</p>
                    </div>

                </div>

            </div>
            <div
                class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">

                @yield('content')

            </div>
        </div>
    </div>
</div>


@include('auth.layouts._footer-js')
</body>
</html>
