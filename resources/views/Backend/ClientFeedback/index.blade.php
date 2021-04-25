<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
@include('Backend._preloader')

<!-- Navbar -->
@include('Backend._navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Backend._main-sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý phản hồi của người dùng</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quản lý phản hồi của người dùng</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="{{ route('AdminClientFeedback.create') }}"
                       class="float-right btn btn-primary">Thêm phản hồi mới</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách các phản hồi của người dùng</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0" style="display: block;">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 3%">
                                        #
                                    </th>
                                    <th style="width: 23%">
                                        Tác giả
                                    </th>
                                    <th style="width: 15%">
                                        Ảnh đại diện
                                    </th>
                                    <th style="width: 40%">
                                        Nội dung
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clientFeedbacks as $clientFeedback)
                                    <tr>
                                        <td>
                                            {{ $clientFeedback->id }}
                                        </td>
                                        <td>
                                            <a>
                                                {{ $clientFeedback->author_info }}
                                            </a>
                                            <br>
                                            <small>
                                                Đã tạo: {{ $clientFeedback->created_at }}
                                            </small>
                                        </td>
                                        <td>
                                            <img src="{{ asset($clientFeedback->image_path) }}"
                                                 alt=""
                                                 width="111"
                                            >
                                        </td>
                                        <td>
                                            {{ $clientFeedback->content }}
                                        </td>
                                        <td class="project-actions text-right">

                                            @if($clientFeedback->status == 1)
                                                <a class="btn btn-success btn-sm d-inline-block m-1"
                                                   href=""
                                                >
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            @else
                                                <a class="btn btn-warning btn-sm d-inline-block m-1"
                                                   href=""
                                                >
                                                    <i class="fas fa-eye-slash"></i>
                                                </a>
                                            @endif

                                            <a class="btn btn-info btn-sm d-inline-block m-1"
                                               href="{{ route('AdminClientFeedback.edit', [$clientFeedback]) }}"
                                            >
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                            <a class="btn btn-danger btn-sm d-inline-block m-1"
                                               href="{{ route('AdminClientFeedback.delete', [$clientFeedback]) }}"
                                            >
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
@include('Backend._control-sidebar')
<!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('Backend._main-footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard2.js') }}"></script>
</body>
</html>
