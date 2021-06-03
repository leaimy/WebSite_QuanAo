@extends('Backend.app')

@section('content-header')
    Quản lý danh sách đơn hàng 🎉
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
                            <th class="text-center">Khách hàng</th>
                            <th class="text-center">Tổng giá</th>
                            <th class="text-center">Giảm giá</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Nhận hàng</th>
                            <th style="width: 13%;"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orders as $item)

                            <tr>
                                <td class="text-center align-middle">
                                    {{ $item->id }}
                                </td>
                                <td class="text-left align-middle">
                                    <span>
                                        {{ \App\Customer::find($item->customer_id)->username }}
                                    </span>
                                    <br>
                                </td>
                                <td class="text-center align-middle">{{ $item->total_price }} VND</td>
                                <td class="text-center align-middle">{{ $item->discount_percent }} %</td>
                                <td class="text-center align-middle">
                                    <span class="{{ \App\OrderHelpers::getClasses($item->current_status) }}">
                                        {{ \App\OrderHelpers::getVNVersion($item->current_status) }}
                                    </span>
                                </td>
                                <td class="project-state text-center align-middle">
                                    @if($item->order_option == 'shipping')
                                        <span class="btn badge-btn badge-success">Ship/COD</span>
                                    @else
                                        <span class="btn badge-btn badge-danger">Ghé cửa hàng</span>
                                    @endif
                                </td>
                                <td class="text-center align-middle">
                                    <a title="Xem chi tiết" class="m-1 btn btn-info btn-sm"
                                       href="{{ route('AdminOrderDetail.show', [$item]) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                    </a>
                                    <a title="Sửa" class="m-1 btn btn-success btn-sm"
                                       href="{{ route('AdminUser.edit', [$item]) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a title="Xóa" class="m-1 btn btn-danger btn-sm"
                                       href="{{ route('AdminUser.delete', [$item]) }}">
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
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
