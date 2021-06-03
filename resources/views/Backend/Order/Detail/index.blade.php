@extends('Backend.app')

@section('content-header')
    Xem đơn hàng chi tiết 🎉
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
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lịch sử đơn hàng</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="timeline timeline-inverse">

                    @foreach($orderNotes as $orderNote)
                        <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-danger">
                                  {{ $orderNote['day'] }} {{ $orderNote['month'] }}. {{ $orderNote['year'] }}
                                </span>
                            </div>
                            <!-- /.timeline-label -->

                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-envelope bg-primary"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="far fa-clock"></i> {{ $orderNote['hour'] }}:{{ $orderNote['minute'] }}:{{ $orderNote['second'] }}</span>

                                    @if (isset($orderNote['user']))
                                        <h3 class="timeline-header"><a
                                                href="#">{{ $orderNote['user']['last_name'] . ' ' . $orderNote['user']['first_name'] }}</a>
                                            <span>chuyển trạng thái đơn hàng thành:</span>
                                            <span class="{{ \App\OrderHelpers::getClasses($orderNote['order_status']) }}">{{ \App\OrderHelpers::getVNVersion($orderNote['order_status']) }}</span>
                                        </h3>
                                    @else
                                        <h3 class="timeline-header">Khởi tạo</h3>
                                    @endif

                                    @if (!empty($orderNote['note']))
                                        <div class="timeline-body">
                                            {{ $orderNote['note'] }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <!-- END timeline item -->
                        @endforeach
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <p>Mã đơn hàng: {{ $order_id }}</p>
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
                            <th class="text-center">Sản phẩm</th>
                            <th class="text-center">Hình ảnh</th>
                            <th class="text-center">Màu sắc</th>
                            <th class="text-center">Kích thước</th>
                            <th class="text-center">Đơn giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Thành tiền</th>
                            <th style="width: 13%;"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($orderDetails as $item)
                            <tr>
                                <td class="text-center align-middle">
                                    {{ $item->id }}
                                </td>
                                <td class="text-center align-middle">
                                    {{ $item['product']['name'] }}
                                </td>
                                <td class="text-center align-middle">
                                    <img width="100" src="{{ asset( $item['product']['preview_image_path'] ) }}" alt="">
                                </td>
                                <td class="text-center align-middle">
                                    {{ $item['model']['color'] }}
                                </td>
                                <td class="text-center align-middle">
                                    {{ $item['model']['size'] }}
                                </td>
                                <td class="text-right align-middle">
                                    {{ $item['product']['sale_price'] }}
                                </td>
                                <td class="text-center align-middle">
                                    {{ $item['quantity'] }}
                                </td>
                                <td class="text-right align-middle">
                                    {{ $item['quantity'] * $item['product']['sale_price'] }}
                                </td>
                                <td class="text-center align-middle">
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
