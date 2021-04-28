@extends('Backend.app')

@section('content-header')
    Quản lý chi tiết sản phẩm 🍀
@endsection



@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cập nhật chi tiết sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('AdminProductDetail.update',['product_id'=>$product_id,'id'=>$id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="skuproduct">Mã SKU</label>
                            <input value="{{$product_detail->sku}}" name="sku" type="text" class="form-control" id="skuproduct"
                                   placeholder="Nhập mã sku">
                        </div>

                        <div class="form-group">
                            <label for="colorproduct">Màu sắc</label>
                            <input disabled value="{{$product_detail->color}}" name="color" type="text" class="form-control" id="colorproduct"
                                 >
                        </div>

                        <div class="form-group">
                            <label for="sizeproduct">Size</label>
                            <input disabled value="{{$product_detail->size}}" name="size" type="text" class="form-control" id="sizeproduct"
                                   >
                        </div>

                        <div class="form-group">
                            <label for="quantityproduct">Số lượng</label>
                            <input value="{{$product_detail->quantity}}" name="quantity" type="text" class="form-control" id="quantityproduct"
                                   placeholder="Nhập số lượng">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
