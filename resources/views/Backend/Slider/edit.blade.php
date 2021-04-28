@extends('Backend.app')

@section('script')
    <script>
        function handleOnImageInputChange(input) {
            if (input.files && input.files[0]) {
                $('#image_label').text(input.files[0].name);

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_viewer')
                        .removeAttr('hidden')
                        .attr('src', e.target.result)
                        .width(300);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

@section('content-header')
    Quản lý slider 🐹
@endsection

@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa thông tin slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('AdminSlider.update', [$slider]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   id="title"
                                   value="{{ $slider->title }}"
                                   placeholder="Nhập tiêu đề">
                        </div>
                        <div class="form-group">
                            <label for="content">Mô tả</label>
                            <textarea name="content"
                                      id="content"
                                      class="form-control"
                                      placeholder="Nhập mô tả"
                                      rows="10">{{ $slider->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái hiển thị</label>
                            <div class="custom-control custom-radio">
                                <input
                                    class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                    @if ($slider->status == 1) checked @endif
                                    type="radio"
                                    id="status-show"
                                    value="1"
                                    name="status">
                                <label for="status-show" class="custom-control-label">Hiển thị</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input
                                    class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                    @if($slider->status == 0) checked @endif
                                    type="radio" id="status-hidden"
                                    name="status"
                                    value="0">
                                <label for="status-hidden" class="custom-control-label">Ẩn</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_input">Ảnh bìa (1920 x 900)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input"
                                           name="image"
                                           onchange="handleOnImageInputChange(this);"
                                           id="image_input">
                                    <label class="custom-file-label"
                                           id="image_label"
                                           for="image_input">{{ $slider->image_name }}</label>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset($slider->image_path) }}"
                             id="image_viewer"
                             width="300"
                             alt=""
                        >
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit"
                                class="btn btn-primary">Cập nhật
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

