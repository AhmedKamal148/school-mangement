@extends('admin.master')

@section('title')
    Grade
@endsection

@push('admin.css')
    @if(App::getLocale() == 'ar')
        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminRtl/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminRtl/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css')}}">

        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminRtl/src/plugins/css/dark/table/datatable/dt-global_style.css')}}">
        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminRtl/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css')}}">

    @else
        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminLtr/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminLtr/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css')}}">

        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminLtr/src/plugins/css/dark/table/datatable/dt-global_style.css')}}">
        <link rel="stylesheet"
              type="text/css"
              href="{{asset('adminLtr/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css')}}">
    @endif

@endpush

@section('breadcrumb')
    <div class="secondary-nav">
        <div class="breadcrumbs-container" data-page-heading="Analytics">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </a>
                <div class="d-flex breadcrumb-content">
                    <div class="page-header">

                        <div class="page-title">

                        </div>

                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <a href="{{route('admin.home')}}"> {{trans('sidebar.dashboard')}}</a>
                                </li>
                                <li class="breadcrumb-item ">
                                    <a href="#">{{trans('sidebar.grades')}}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </header>
        </div>
    </div>
    <!--  END BREADCRUMBS  -->
@endsection
@section('content')

    <div class="row layout-spacing layout-top-spacing ">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Grades</h4>
                    <a href="#">
                    </a>
                </div>
                <div class="card-body">
                    <table id="individual-col-search" class="table dt-table-hover ">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>{{trans('grades.name')}}</th>
                            <th>{{trans('grades.notes')}}</th>
                            <th class="text-center dt-no-sorting">{{trans('grades.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($grades as $grade)
                            <tr>
                                <td>{{$grade->id}}</td>
                                <td>{{$grade->name}}</td>
                                <td>{{$grade->notes}}</td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a data-url="{{route('admin.grade.edit')}}"
                                           data-id="{{$grade->id}}"
                                           class="btn btn-outline-success mx-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-edit">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path
                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </a>

                                        <a data-url="{{route('admin.grade.delete')}}"
                                           data-id="{{$grade->id}}"
                                           class="btn btn-outline-danger btn_delete mx-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>{{trans('grades.name')}}</th>
                            <th>{{trans('grades.notes')}}</th>
                            <th class="invisible"></th>
                        </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('admin.js')
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/datatables.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/dt-custom-setting.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/button-ext/jszip.min.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script src="{{asset('adminLtr/src/plugins/src/table/datatable/custom_miscellaneous.js')}}"></script>

    <script>
        $(document).ready(function () {
            let gradeTable = new DataTable('#individual-col-search');
        });
    </script>
@endpush
