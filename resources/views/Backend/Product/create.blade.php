@extends('Backend.app')

@section('content-header')
    Quản lý sản phẩm 🍁
@endsection

@section('script')
    <script>
        function xuLySuKienKhiNguoiDungChonAnhPreview(input) {
            console.log('Nguoi dung vua chon anh preivew');

            // Lay ten anh nguoi dung vua chon
            console.log(input.files);
            console.log(input.files[0].name);

            // Hien thi ten anh len man hinh
            document.getElementById('preview_image_label').innerText = input.files[0].name;
        }

        function xuLySuKienKhiNguoiDungChonAnhChiTietSanPham(input) {
            console.log('Nguoi dung chon anh chi tiet san pham');
            document.getElementById('detail_images_label').innerText = "";

            // Lay cac ten anh nguoi dung vua chon, viet bang ngon ngu Javascript
            var files = input.files;
            for (var i=0;i<files.length;i++){
                document.getElementById('detail_images_label').innerText += files[i].name + ' ; ';
            }


            // Hien thi len man hinh
        }
    </script>
@endsection

@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('AdminProduct.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nameproduct">Tên sản phẩm</label>
                            <input name="name" type="text" class="form-control" id="nameproduct"
                                   placeholder="Nhập tên sản phẩm">

                        </div>
                        <div class="form-group">
                            <label for="exampleSelectRounded0">Nhóm sản phẩm</label>
                            <select name="category_id" class="custom-select rounded-0"
                                    id="exampleSelectRounded0">
                                @foreach($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="skuproduct">Mã SKU</label>
                            <input name="sku" type="text" class="form-control" id="skuproduct"
                                   placeholder="Nhập mã sku">
                        </div>

                        <div class="form-group">
                            <label for="unitproduct">Giá nhập</label>
                            <input name="unit_price" type="text" class="form-control" id="unitproduct"
                                   placeholder="Nhập giá nhập ">
                        </div>

                        <div class="form-group">
                            <label for="saleproduct">Giá bán</label>
                            <input name="sale_price" type="text" class="form-control" id="saleproduct"
                                   placeholder="Nhập giá bán">
                        </div>

                        <div class="form-group">
                            <label for="prieviewproduct">Ảnh đại diện</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input
                                        onchange="xuLySuKienKhiNguoiDungChonAnhPreview(this)"
                                        name="preview_image"
                                        type="file"
                                        class="custom-file-input"
                                        id="prieviewproduct">
                                    <label class="custom-file-label" id="preview_image_label" for="prieviewproduct">Chọn ảnh đại diện</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh chi tiết</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input
                                        onchange="xuLySuKienKhiNguoiDungChonAnhChiTietSanPham(this)"
                                        name="detail_images[]"
                                        type="file"
                                        class="custom-file-input"
                                        id="detail_images"
                                        multiple>
                                    <label class="custom-file-label" id="detail_images_label" for="exampleInputFile">Chọn các ảnh chi tiết</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả sản phẩm</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Nhập mô tả ..."></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
