@extends('Backend.app')

@section('content-header')
    Quản lý nhóm sản phẩm ❄
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
            <a href="{{ route('AdminCategory.create') }}"
               class="float-right btn btn-primary">Thêm nhóm sản phẩm mới</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách nhóm sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1"
                           class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="3%"
                                class="text-center">ID
                            </th>
                            <th class="text-center">Tên nhóm sản phẩm</th>
                            <th class="text-center">Số lượng sản phẩm</th>
                            <th class="text-center">Trạng thái</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($category as $item)

                            <tr>
                                <td class="text-center align-middle">{{ $item->id }}</td>
                                <td class="text-left align-middle">
                                    <span>
                                        {{mb_convert_case($item->name, MB_CASE_TITLE, "UTF-8") }}
                                    </span>
                                    <br>
                                    <small>
                                        Đã tạo: {{ $item->created_at }}
                                    </small>
                                </td>
                                <td class="text-center align-middle">0</td>
                                <td class="project-state text-center align-middle">
                                    @if($item->status == 1)
                                        <span class="btn badge-btn badge-success">Hiển thị</span>
                                    @else
                                        <span class="btn badge-btn badge-danger">Ẩn</span>
                                    @endif
                                </td>
                                <td class="project-actions text-center align-middle">
                                    <a class="btn btn-info btn-sm m-1"
                                       href="{{ route('AdminCategory.edit', ['id' => $item->id]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm m-1"
                                       href="{{ route('AdminCategory.delete', ['id' => $item->id]) }}">
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
