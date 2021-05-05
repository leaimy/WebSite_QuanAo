@extends('Backend.app')

@section('content-header')
    Thông tin cửa hàng 🍎
@endsection

@section('content-body')
    <form action="{{ route('AdminWebsite.update') }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin chung ♎</h3>

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
                            <label for="first_name">Tên cửa hàng *</label>
                            <input value="{{$shop_name}}" name="name_store"
                                   type="text"
                                   id="first_name"
                                   class="form-control"
                                   placeholder="Nhập tên cửa hàng">
                        </div>

                        <div class="form-group">
                            <label for="image_input">Logo (87x27)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input"
                                           name="logo_image"
                                           onchange="handleOnImageInputChange(this);"
                                           id="image_input">
                                    <label class="custom-file-label"
                                           id="image_label"
                                           for="image_input">Chọn ảnh</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <img  src="{{asset($logo_image)}}"
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
                        <h3 class="card-title">Thông tin liên hệ ♑</h3>

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
                            <label for="address">Địa chỉ cửa hàng *</label>
                            <input value="{{$address}}" name="address"
                                   type="text"
                                   id="address"
                                   class="form-control"
                                   placeholder="Nhập địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Số điện thoại *</label>
                            <input value="{{$phone_number}}" name="phone_number"
                                   type="text"
                                   id="phonenumber"
                                   class="form-control"
                                   placeholder="Nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input value="{{$email}}" name="email"
                                   type="text"
                                   id="email"
                                   class="form-control"
                                   placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input value="{{$facebook}}" name="facebook"
                                   type="text"
                                   id="facebook"
                                   class="form-control"
                                   placeholder="Nhập link facebook">
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input value="{{$youtube}}" name="youtube"
                                   type="text"
                                   id="youtube"
                                   class="form-control"
                                   placeholder="Nhập link youtube">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input value="{{$instagram}}" name="instagram"
                                   type="text"
                                   id="instagram"
                                   class="form-control"
                                   placeholder="Nhập link instagram">
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <a href=""
                   class="btn btn-secondary">Quay về</a>
                <input type="submit"
                       value="Cập nhật thông tin cửa hàng"
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

