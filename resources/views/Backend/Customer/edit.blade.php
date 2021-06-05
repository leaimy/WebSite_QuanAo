@extends('Backend.app')

@section('content-header')
   Cập nhật tài khoản khách hàng 🐇
@endsection

@section('content-body')
    <form action="{{ route('AdminCustomer.update',[$customer]) }}"
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
                                   value="{{$customer->first_name}}"
                                   type="text"
                                   id="first_name"
                                   class="form-control"
                                   placeholder="Tên">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Họ đệm *</label>
                            <input name="last_name"
                                   value="{{$customer->last_name}}"
                                   type="text"
                                   id="last_name"
                                   class="form-control"
                                   placeholder="Họ đệm">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Số điện thoại *</label>
                            <input name="phone_number"
                                   value="{{$customer->phone_number}}"
                                   type="text"
                                   id="phone_number"
                                   class="form-control"
                                   placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="province">Tỉnh/Thành phố *</label>
                            <input name="province"
                                   value="{{$customer->province}}"
                                   type="text"
                                   id="province"
                                   class="form-control"
                                   placeholder="Tỉnh/Thành phố">
                        </div>
                        <div class="form-group">
                            <label for="district">Quận/Huyện *</label>
                            <input name="district"
                                   value="{{$customer->district}}"
                                   type="text"
                                   id="district"
                                   class="form-control"
                                   placeholder="Quận/Huyện">
                        </div>
                        <div class="form-group">
                            <label for="village">Phường/Xã *</label>
                            <input name="village"
                                   value="{{$customer->village}}"
                                   type="text"
                                   id="village"
                                   class="form-control"
                                   placeholder="Phường/Xã">
                        </div>
                        <div class="form-group">
                            <label for="street">Đường, số nhà *</label>
                            <input name="street"
                                   value="{{$customer->street}}"
                                   type="text"
                                   id="street"
                                   class="form-control"
                                   placeholder="Đường, số nhà">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
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
                            <label for="username">Tên đăng nhập *</label>
                            <input name="username"
                                   value="{{$customer->username}}"
                                   type="text"
                                   autocomplete="off"
                                   id="username"
                                   class="form-control"
                                   placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input name="email"
                                   value="{{$customer->email}}"
                                   type="text"
                                   id="email"
                                   class="form-control"
                                   placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Nhập mật khẩu mới *</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   id="password"
                                   placeholder="Nhập mật khẩu đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Xác nhận mật khẩu mới *</label>
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
                       value="Thêm người dùng"
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
                        .attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

