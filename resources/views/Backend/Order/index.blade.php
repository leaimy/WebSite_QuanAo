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
    <link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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

    <!-- SweetAlert2 -->
    <script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>

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

    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    icon: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultError').click(function() {
                Toast.fire({
                    icon: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    icon: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultQuestion').click(function() {
                Toast.fire({
                    icon: 'question',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastsDefaultDefault').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultTopLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'topLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomRight').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomRight',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultAutohide').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    autohide: true,
                    delay: 750,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultNotFixed').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    fixed: false,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultFull').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    icon: 'fas fa-envelope fa-lg',
                })
            });
            $('.toastsDefaultFullImage').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    image: '../../dist/img/user3-128x128.jpg',
                    imageAlt: 'User Picture',
                })
            });
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultWarning').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultDanger').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultMaroon').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-maroon',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });
    </script>

    <script>
        const newOrderCount = {{ $new_order_counts }};

        const newOrderCountElement = document.getElementById('new_order_count');
        const frmChangeOrderStatus = document.getElementById('frm-change-order-status');

        const orders = (@json($orders));
        const replaceWord = 'tronghieuthihavippro';
        let actionURL = "{{ route('AdminOrder.status',['tronghieuthihavippro']) }}";

        console.log(orders);

        let currentOrderId = null;

        if (newOrderCount > 0) {
            newOrderCountElement.innerHTML = newOrderCount;
        }
        else {
            newOrderCountElement.hidden = true;
        }

        function handleOnOrderStatusClicked(id) {
            currentOrderId = id;
        }

        function handleOnBtnSubmitClick() {
            const url = actionURL.replace(replaceWord, currentOrderId);
            frmChangeOrderStatus.setAttribute('action', url);
            const newOrderStatus = document.getElementById('new-order-status').value;
            const newOrderNote = document.getElementById('new-order-note').value;

            frmChangeOrderStatus.insertAdjacentHTML('afterbegin', `
                <input type="hidden" name="new_order_status" value="${newOrderStatus}">
                <input type="hidden" name="new_order_note" value="${newOrderNote}">
            `);

            document.getElementById('frm-submit-button').click();
        }

        function handleOnFormSubmit(e) {
            e.preventDefault();
            console.log(currentOrderId);
        }
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

@section('modal')
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thay đổi trạng thái đơn hàng</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="form-group">
                                <label>Trạng thái đơn hàng *</label>
                                <select class="form-control select2bs4" style="width: 100%;" id="new-order-status">
                                    <option selected="selected" value="-1">Chọn trạng thái mới</option>

                                    @foreach($list_of_orders as $orderStatus)
                                        <option name="new-order-status" value="{{ $orderStatus['value'] }}">{{ $orderStatus['render'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea class="form-control" rows="3" placeholder="Nhập ghi chú ..." id="new-order-note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="frm-change-order-status" action="" class="modal-footer justify-content-between" method="post">
                    @csrf
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button onclick="handleOnBtnSubmitClick()" type="button" class="btn btn-primary">Lưu thay đổi</button>
                    <input style="display: none" type="submit" value="" id="frm-submit-button">
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
