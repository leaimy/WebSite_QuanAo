@extends('Backend.app')

@section('content-header')
    Quản lý slider 🐹
@endsection

@section('content-body')
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ route('AdminSlider.create') }}"
               class="float-right btn btn-primary">Thêm slider mới</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách slider</h3>

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
                            <th style="width: 3%">
                                #
                            </th>
                            <th>
                                Tiêu đề
                            </th>
                            <th>
                                Hình ảnh
                            </th>
                            <th>Trạng thái</th>
                            <th>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>
                                    {{ $loop->index+1 }}
                                </td>
                                <td>
                                    <span>
                                        {{ $slider->title }}
                                    </span>
                                    <br>
                                    <small>
                                        Đã tạo: {{ $slider->created_at }}
                                    </small>
                                </td>
                                <td>
                                    <img src="{{ asset($slider->image_path) }}"
                                         alt=""
                                         width="200"
                                    >
                                </td>
                                <td class="text-center">
                                    @if($slider->status == 1)
                                        <a href="{{ route('AdminSlider.setHidden', [$slider])}}"
                                           class="btn badge-btn badge-success m-0">
                                            Hiển thị
                                        </a>
                                    @else
                                        <a href="{{ route('AdminSlider.setVisible', [$slider]) }}"
                                           class="btn badge-btn badge-warning m-0">
                                            Ẩn
                                        </a>
                                    @endif
                                </td>
                                <td class="project-actions text-right">
                                    <div>
                                        <a class="btn btn-info btn-sm d-inline-block m-1"
                                           href="{{ route('AdminSlider.edit', [$slider]) }}"
                                        >
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Sửa
                                        </a>
                                        <a class="btn btn-danger btn-sm d-inline-block m-1"
                                           href="{{ route('AdminSlider.delete', [$slider]) }}"
                                        >
                                            <i class="fas fa-trash">
                                            </i>
                                            Xóa
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                @if ($sliders->lastPage() > 1)
                    <div class="card-footer">
                        {{ $sliders->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

