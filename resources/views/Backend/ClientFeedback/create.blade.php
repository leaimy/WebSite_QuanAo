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
    Quản lý phản hồi của khách hàng 🐱‍🏍
@endsection

@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Nhập thông tin phản hồi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('AdminClientFeedback.store') }}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="author_info">Tác giả</label>
                            <input type="text"
                                   name="author_info"
                                   class="form-control"
                                   id="author_info"
                                   placeholder="Nhập thông tin tác giả">
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung phản hồi</label>
                            <textarea name="content"
                                      id="content"
                                      class="form-control"
                                      placeholder="Nhập nội dung phản hồi"
                                      rows="15"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái hiển thị</label>
                            <div class="custom-control custom-radio">
                                <input checked
                                       class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio"
                                       id="status-show"
                                       value="1"
                                       name="status">
                                <label for="status-show"
                                       class="custom-control-label">Hiển thị</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio"
                                       id="status-hidden"
                                       name="status"
                                       value="0">
                                <label for="status-hidden"
                                       class="custom-control-label">Ẩn</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_input">Ảnh đại diện (165 x 165)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input"
                                           name="image"
                                           onchange="handleOnImageInputChange(this);"
                                           id="image_input">
                                    <label class="custom-file-label"
                                           id="image_label"
                                           for="image_input">Chọn ảnh</label>
                                </div>
                            </div>
                        </div>

                        <img src=""
                             id="image_viewer"
                             alt=""
                             hidden
                        >
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit"
                                class="btn btn-primary">Thêm
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
