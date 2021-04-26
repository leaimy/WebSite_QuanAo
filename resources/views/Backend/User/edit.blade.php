@extends('backend.app')

@section('content-header')
    quản lý tài khoản người dùng 🐇
@endsection

@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa thông tin tài khoản người dùng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('AdminUser.update', [$user]) }}"
                      method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">Tên</label>
                                    <input value="{{ $user->first_name }}"
                                           name="first_name"
                                           type="text"
                                           id="first_name"
                                           class="form-control"
                                           placeholder="Tên">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Họ đệm</label>
                                    <input value="{{ $user->last_name }}"
                                           name="last_name"
                                           type="text"
                                           id="last_name"
                                           class="form-control"
                                           placeholder="Họ đệm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Tên đăng nhập</label>
                                    <input value="{{ $user->username }}"
                                           name="username"
                                           type="text"
                                           id="username"
                                           class="form-control"
                                           placeholder="Tên đăng nhập">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input value="{{ $user->email }}"
                                           name="email"
                                           type="text"
                                           id="email"
                                           class="form-control"
                                           placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu mới</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   id="password"
                                   placeholder="Nhập mật khẩu đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="PASSWORD_CONFIRMATION">Xác nhận mật khẩu</label>
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   id="password_confirmation"
                                   placeholder="Nhập lại mật khẩu đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="image_input">Ảnh đại diện (165 x 165)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input"
                                           name="avatar"
                                           onchange="handleOnImageInputChange(this);"
                                           id="image_input">
                                    <label class="custom-file-label"
                                           id="image_label"
                                           for="image_input">{{ $user->avatar_name }}</label>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset($user->avatar_path) }}"
                             id="image_viewer"
                             alt=""
                             width="165"
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
