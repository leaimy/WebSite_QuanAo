@extends('Backend.app')

@section('content-header')
    Quản lý vai trò 🦀
@endsection

@section('content-body')
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ route('AdminRole.create') }}"
               class="float-right btn btn-primary">Thêm vai trò mới</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách vai trò</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0" style="display: block;">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th class="text-center align-middle" style="width: 3%">
                                #
                            </th>
                            <th class="text-left align-middle">
                                Tên vai trò
                            </th>
                            <th class="text-left align-middle">
                                Các quyền
                            </th>
                            <th class="text-center align-middle">
                                Số người dùng
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td class="text-center align-middle">
                                    {{ $loop->index+1 }}
                                </td>
                                <td class="text-left align-middle">
                                    <span>
                                        {{ $role->display_name }}
                                    </span>
                                    <br>
                                    <small>
                                        Đã tạo: {{ $role->created_at }}
                                    </small>
                                </td>
                                <td class="text-left align-middle"></td>
                                <td class="text-center align-middle">
                                    0
                                </td>
                                <td class="project-actions text-center">
                                    <a class="m-1 btn btn-info btn-sm"
                                       href="">
                                        <i class="fas fa-folder">
                                        </i>
                                        Xem chi tiết
                                    </a>
                                    <a class="m-1 btn btn-success btn-sm"
                                       href="">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Sửa
                                    </a>
                                    <a class="m-1 btn btn-danger btn-sm"
                                       href="">
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
                @if ($roles->lastPage() > 1)
                    <div class="card-footer">
                        {{ $roles->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

