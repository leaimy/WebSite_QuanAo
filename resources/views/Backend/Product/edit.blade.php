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
                        <h1 class="m-0">Quản lý nhóm sản phẩm</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quản lý nhóm sản phẩm</li>
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
                                <h3 class="card-title">Thêm sản phẩm</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('AdminCategory.store')}}" method="post">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nameproduct">Tên sản phẩm</label>
                                        <input name="name" type="text" class="form-control" id="nameproduct"
                                               placeholder="Nhập tên sản phẩm">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectRounded0">Nhóm sản phẩm</label>
                                        <select name="category_id" class="custom-select rounded-0"
                                                id="exampleSelectRounded0">
                                            <option value="0">Chọn nhóm cha</option>
                                            @foreach($parents as $parent)
                                                <option value="{{$parent['id']}}">{{$parent['name']}}</option>

                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="skuproduct">Mã SKU</label>
                                        <input name="sku" type="text" class="form-control" id="skuproduct"
                                               placeholder="Nhập mã sku">
                                    </div>

                                    <div class="form-group">
                                        <label for="unitproduct">Giá nhập</label>
                                        <input name="unit_price" type="text" class="form-control" id="unitproduct"
                                               placeholder="Nhập giá nhập ">
                                    </div>

                                    <div class="form-group">
                                        <label for="saleproduct">Giá bán</label>
                                        <input name="sale_price" type="text" class="form-control" id="saleproduct"
                                               placeholder="Nhập giá bán">
                                    </div>

                                    <div class="form-group">
                                        <label for="prieviewproduct">Ảnh đại diện</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="preview_image_name" type="file" class="custom-file-input" id="prieviewproduct">
                                                <label class="custom-file-label" for="prieviewproduct"></label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh chi tiết</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="detail_images[]" type="file" class="custom-file-input" id="exampleInputFile" multiple>
                                                <label class="custom-file-label" for="exampleInputFile"></label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea name="description" class="form-control" rows="3" placeholder="Nhập mô tả ..."></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
