<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- BS Stepper -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/dropzone/min/dropzone.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet"
          href="{{ asset('backend/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet"
          href="{{ asset('backend/dist/css/adminlte.min.css') }}">
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
                        <h1 class="m-0">Quản lý người dùng</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quản lý người dùng</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nhập thông tin tài khoản người dùng</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('AdminUser.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Tên</label>
                                                <input name="first_name" type="text" id="first_name" class="form-control" placeholder="Tên">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Họ đệm</label>
                                                <input name="last_name" type="text" id="last_name" class="form-control" placeholder="Họ đệm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Tên đăng nhập</label>
                                                <input name="username" type="text" id="username" class="form-control" placeholder="Tên đăng nhập">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="email" type="text" id="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password"
                                               name="password"
                                               class="form-control"
                                               id="password"
                                               placeholder="Nhập mật khẩu đăng nhập">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Xác nhận mật khẩu</label>
                                        <input type="password"
                                               name="password_confirmation"
                                               class="form-control"
                                               id="password_confirmation"
                                               placeholder="Nhập lại mật khẩu đăng nhập">
                                    </div>
                                    <div class="form-group">
                                        <label for="image_input">Ảnh đại diện (165 x 165)</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       class="custom-file-input"
                                                       name="avatar"
                                                       onchange="handleOnImageInputChange(this);"
                                                       id="image_input">
                                                <label class="custom-file-label"
                                                       id="image_label"
                                                       for="image_input">Chọn ảnh</label>
                                            </div>
                                        </div>
                                    </div>

                                    <img src=""
                                         id="image_viewer"
                                         alt=""
                                         hidden
                                    >
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit"
                                            class="btn btn-primary">Thêm
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
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

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>

<script>
    function handleOnImageInputChange(input) {
        if (input.files && input.files[0]) {
            $('#image_label').text(input.files[0].name);

            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_viewer')
                    .removeAttr('hidden')
                    .attr('src', e.target.result)
                    .width(300);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>
