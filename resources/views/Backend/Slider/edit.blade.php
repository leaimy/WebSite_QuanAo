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
                        <h1 class="m-0">Quản lý slider</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quản lý slider</li>
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
                                <h3 class="card-title">Chỉnh sửa thông tin slider</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('AdminSlider.update', [$slider]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Tiêu đề</label>
                                        <input type="text"
                                               name="title"
                                               class="form-control"
                                               id="title"
                                               value="{{ $slider->title }}"
                                               placeholder="Nhập tiêu đề">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Mô tả</label>
                                        <textarea name="content"
                                                  id="content"
                                                  class="form-control"
                                                  placeholder="Nhập mô tả"
                                                  rows="10">{{ $slider->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Trạng thái hiển thị</label>
                                        <div class="custom-control custom-radio">
                                            <input
                                                class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                                @if ($slider->status == 1) checked @endif
                                                type="radio"
                                                id="status-show"
                                                value="1"
                                                name="status">
                                            <label for="status-show" class="custom-control-label">Hiển thị</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input
                                                class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                                @if($slider->status == 0) checked @endif
                                                type="radio" id="status-hidden"
                                                name="status"
                                                value="0">
                                            <label for="status-hidden" class="custom-control-label">Ẩn</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_input">Ảnh bìa (1920 x 900)</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                       class="custom-file-input"
                                                       name="image"
                                                       onchange="handleOnImageInputChange(this);"
                                                       id="image_input">
                                                <label class="custom-file-label"
                                                       id="image_label"
                                                       for="image_input">{{ $slider->image_name }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{ asset($slider->image_path) }}"
                                         id="image_viewer"
                                         width="300"
                                         alt=""
                                    >
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit"
                                            class="btn btn-primary">Cập nhật
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
