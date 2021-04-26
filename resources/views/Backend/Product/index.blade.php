@extends('Backend.app')

@section('content-header')
    Quản lý sản phẩm 🍁
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection

@section('content-body')
    <div class="row">
        <div class="col-12 mb-2">
            <a href="{{ route('AdminProduct.create') }}"
               class="float-right btn btn-primary">Thêm sản phẩm mới</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="3%">Mã SKU</th>
                            <th>Tên sản phẩm</th>
                            <th>Nhóm </th>
                            <th>Giá bán</th>
                            <th >Giá nhập</th>
                            <th >Số lượng </th>
                            <th width="12%">Ảnh đại diện</th>
                            <th width="25%"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $item)

                            <tr>
                                <td>{{ $item->sku }}</td>
                                <td>
                                    <a>
                                        {{ $item->name }}
                                    </a>
                                    <br>
                                    <small>
                                        Đã tạo {{ $item->created_at }}
                                    </small>
                                </td>
                                <td>
                                    {{ \App\Category::find($item->category_id)->name }}
                                </td>
                                <td>{{$item->sale_price}}</td>
                                <td>{{$item->unit_price}}</td>
                                <td>{{$item->available_stock}}</td>
                                <td>
                                    <img width="100" src="{{asset($item->preview_image_path)}}" alt="">
                                </td>
                                <td class="project-actions">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem chi tiết
                                    </a>
                                    <a class="btn btn-info btn-sm m-1"
                                       href="{{route('AdminProduct.edit',['id'=>$item->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm m-1"
                                       href="{{route('AdminProduct.delete',['id'=>$item->id])}}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Xóa
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
