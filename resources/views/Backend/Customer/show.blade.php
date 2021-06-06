@extends('Backend.app')

@section('content-header')
    Chi tiết khách hàng: 🌞 {{$customer->getFullName()}} 🌞
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
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh sách đơn hàng</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
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
                            <th class="text-center" ></th>
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
                                      {{$customer->username}}
                                    </span>
                                    <br>
                                </td>
                                <td class="text-center align-middle">{{ $item->total_price }} VND</td>
                                <td class="text-center align-middle">{{ $item->discount_percent }} %</td>
                                <td class="text-center align-middle" onclick="handleOnOrderStatusClicked({{ $item->id }})">
                                    <span class="{{ \App\OrderHelpers::getClasses($item->current_status) }}" data-toggle="modal" data-target="#modal-lg">
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

        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thông tin khách hàng</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body row ">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th style="width:50%">Họ và tên: </th>
                                    <td>
                                        {{$customer->getFullName()}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tên đăng nhập: </th>
                                    <td>
                                       {{$customer->username}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email: </th>
                                    <td>
                                       {{$customer->email}}

                                    </td>
                                </tr>
                                <tr>
                                    <th>Số điện thoại: </th>
                                    <td>
                                        {{$customer->phone_number}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ: </th>
                                    <td>
                                        {{$customer->getAdrress()}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
