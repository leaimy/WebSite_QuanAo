@extends('Backend.app')

@section('content-header')
    Quản lý tài khoản người dùng 🐇
@endsection

@section('content-body')
    <div class="row">
        <div class="col-12 mb-2">
            <a href="{{ route('AdminUser.create') }}"
               class="float-right btn btn-primary">Thêm tài khoản người dùng mới</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách tất cả tài khoản người dùng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1"
                           class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Tên đầy đủ</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td class="text-center align-middle">{{ $user->id }}</td>
                                <td class="align-middle">{{ $user->username }}</td>
                                <td class="align-middle">{{ $user->getFullName() }}</td>
                                <td class="align-middle">{{ $user->email }}</td>
                                <td class="text-center align-middle">
                                    <img src="{{ asset($user->avatar_path) }}"
                                         alt=""
                                         width="70"
                                    >
                                </td>
                                <td class="text-center align-middle">Admin</td>
                                <td class="text-right align-middle">
                                    <a class="m-1 btn btn-info btn-sm"
                                       href="{{ route('AdminUser.show', [$user]) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem chi tiết
                                    </a>
                                    <a class="m-1 btn btn-success btn-sm"
                                       href="{{ route('AdminUser.edit', [$user]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="m-1 btn btn-danger btn-sm"
                                       href="{{ route('AdminUser.delete', [$user]) }}">
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

