@php use Illuminate\Support\Facades\App; @endphp
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">


<link rel="icon"
      type="image/x-icon"
      href="{{ asset('adminLtr/src/assets/img/logo.png') }}"/>


@if(App::getLocale() === 'ar')
    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/layouts/vertical-light-menu/css/light/loader.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/layouts/vertical-light-menu/css/dark/loader.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/src/bootstrap/css/bootstrap.rtl.min.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/layouts/vertical-light-menu/css/light/plugins.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/layouts/vertical-light-menu/css/dark/plugins.css')}}"/>


    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/src/assets/css/light/dashboard/dash_1.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminRtl/src/assets/css/light/dashboard/dash_1.css')}}"/>

@else

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/layouts/vertical-light-menu/css/light/loader.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/layouts/vertical-light-menu/css/dark/loader.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/src/bootstrap/css/bootstrap.min.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/layouts/vertical-light-menu/css/light/plugins.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/layouts/vertical-light-menu/css/dark/plugins.css')}}"/>


    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/src/assets/css/light/dashboard/dash_1.css')}}"/>

    <link rel="stylesheet"
          type="text/css"
          href="{{asset('adminLtr/src/assets/css/dark/dashboard/dash_1.css')}}"/>

@endif



@stack('admin.css')


