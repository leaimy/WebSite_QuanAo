@extends('Backend.app')

@section('content-header')
    Quản lý chi tiết sản phẩm 🍀
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
                <form action="{{route('AdminProductDetail.store',['product_id'=>$product_id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="colorproduct">Màu sắc</label>
                            <input name="color" type="text" class="form-control" id="colorproduct"
                                   placeholder="Nhập màu sắc">
                        </div>

                        <div class="form-group">
                            <label for="sizeproduct">Size</label>
                            <input name="size" type="text" class="form-control" id="sizeproduct"
                                   placeholder="Nhập kích thước">
                        </div>

                        <div class="form-group">
                            <label for="quantityproduct">Số lượng</label>
                            <input name="quantity" type="text" class="form-control" id="quantityproduct"
                                   placeholder="Nhập số lượng">
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
