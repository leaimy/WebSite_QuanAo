@extends('backend.app')

@section('content-header')
    Cập nhật tài khoản người dùng 🐇
@endsection

@section('content-body')
    <form action="{{ route('AdminUser.update', [$user]) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin cá nhân</h3>

                        <div class="card-tools">
                            <button type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                    title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="first_name">Tên *</label>
                            <input name="first_name"
                                   type="text"
                                   id="first_name"
                                   class="form-control"
                                   value="{{ $user->first_name }}"
                                   placeholder="Tên">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Họ đệm *</label>
                            <input name="last_name"
                                   type="text"
                                   id="last_name"
                                   value="{{ $user->last_name }}"
                                   class="form-control"
                                   placeholder="Họ đệm">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input name="email"
                                   type="text"
                                   id="email"
                                   value="{{ $user->email }}"
                                   class="form-control"
                                   placeholder="Email">
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

                        <div class="form-group text-center">
                            <img src="{{ asset($user->avatar_path) }}"
                                 id="image_viewer"
                                 alt=""
                                 width="165"
                            >
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin đăng nhập</h3>

                        <div class="card-tools">
                            <button type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse"
                                    title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input name="username"
                                   type="text"
                                   id="username"
                                   class="form-control"
                                   value="{{ $user->username }}"
                                   disabled
                                   placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="password">Nhập mật khẩu mới</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   id="password"
                                   placeholder="Nhập mật khẩu đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Xác nhận mật khẩu</label>
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   id="password_confirmation"
                                   placeholder="Nhập lại mật khẩu đăng nhập">
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <a href="{{ route('AdminUser.index') }}"
                   class="btn btn-secondary">Quay về</a>
                <input type="submit"
                       value="Lưu thay đổi"
                       class="btn btn-success float-right">
            </div>
        </div>
    </form>
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
