@extends('Backend.app')

@section('content-header')
    Quản lý phản hồi của khách hàng 🐱‍🏍
@endsection

@section('content-body')
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ route('AdminClientFeedback.create') }}"
               class="float-right btn btn-primary">Thêm phản hồi mới</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách các phản hồi của người dùng</h3>

                    <div class="card-tools">
                        <button type="button"
                                class="btn btn-tool"
                                data-card-widget="collapse"
                                title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button"
                                class="btn btn-tool"
                                data-card-widget="remove"
                                title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0"
                     style="display: block;">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 3%">
                                #
                            </th>
                            <th style="width: 23%">
                                Tác giả
                            </th>
                            <th style="width: 15%">
                                Ảnh đại diện
                            </th>
                            <th style="width: 30%">
                                Nội dung
                            </th>
                            <th style="width: 10%">
                                Trạng thái
                            </th>
                            <th>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientFeedbacks as $clientFeedback)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    <span>
                                        {{ $clientFeedback->author_info }}
                                    </span>
                                    <br>
                                    <small>
                                        Đã tạo: {{ $clientFeedback->created_at }}
                                    </small>
                                </td>
                                <td>
                                    <img src="{{ asset($clientFeedback->image_path) }}"
                                         alt=""
                                         width="111"
                                    >
                                </td>
                                <td>
                                    {{ $clientFeedback->content }}
                                </td>
                                <td class="text-center">
                                    @if($clientFeedback->status == 1)
                                        <a class="btn badge-btn badge-success"
                                           href="{{ route('AdminClientFeedback.setHidden', [$clientFeedback]) }}"
                                        >
                                            Hiển thị
                                        </a>
                                    @else
                                        <a class="btn badge-btn badge-warning"
                                           href="{{ route('AdminClientFeedback.setVisible', [$clientFeedback]) }}"
                                        >
                                            Ẩn
                                        </a>
                                    @endif
                                </td>
                                <td class="project-actions text-center">
                                    <a title="Sửa" class="btn btn-info btn-sm d-inline-block m-1"
                                       href="{{ route('AdminClientFeedback.edit', [$clientFeedback]) }}"
                                    >
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>
                                    <a title="Xóa" class="btn btn-danger btn-sm d-inline-block m-1"
                                       href="{{ route('AdminClientFeedback.delete', [$clientFeedback]) }}"
                                    >
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

                @if($clientFeedbacks->lastPage() > 1)
                    <div class="card-footer">
                        {{ $clientFeedbacks->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
