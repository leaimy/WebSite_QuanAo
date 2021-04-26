@extends('Backend.app')

@section('content-header')
    Quản lý nhóm sản phẩm ❄
@endsection('content-header')

@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm nhóm sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('AdminCategory.store')}}" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên nhóm</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="Nhập tên nhóm">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectRounded0">Chọn nhóm</label>
                            <select name="parent_id" class="custom-select rounded-0"
                                    id="exampleSelectRounded0">
                                <option value="0">Chọn nhóm cha</option>
                                @foreach($parents as $parent)
                                    <option value="{{$parent['id']}}">{{$parent['name']}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="customRadio5">Trạng thái hiển thị</label>
                            <div class="custom-control custom-radio">
                                <input value="1"
                                       class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio" id="customRadio5" name="status">
                                <label for="customRadio5" class="custom-control-label">Hiển thị</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input value="0"
                                       class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio" id="nocustomRadio5" name="status">
                                <label for="nocustomRadio5" class="custom-control-label">Không hiển
                                    thị</label>
                            </div>
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
