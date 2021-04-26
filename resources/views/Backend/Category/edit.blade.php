@extends('Backend.app')

@section('content-header')
    Quản lý nhóm sản phẩm ❄
@endsection

@section('content-body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cập nhật nhóm sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('AdminCategory.update',['id'=>$category['id']])}}" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên nhóm</label>
                            <input value="{{$category['name']}}" name="name" type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="Nhập tên nhóm">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectRounded0">Chọn nhóm</label>
                            <select  name="parent_id" class="custom-select rounded-0"
                                     id="exampleSelectRounded0">
                                <option value="0">Chọn nhóm cha</option>
                                @foreach($parents as $parent)
                                    <option @if($category['parent_id']==$parent['id']) selected="selected" @endif value="{{$parent['id']}}">{{$parent['name']}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="customRadio5">Trạng thái hiển thị</label>
                            <div class="custom-control custom-radio">
                                <input value="1" @if($category['status']==1) checked="checked" @endif
                                class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio" id="customRadio5" name="status">
                                <label for="customRadio5" class="custom-control-label">Hiển thị</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input value="0" @if($category['status']==0) checked="checked" @endif
                                class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                       type="radio" id="nocustomRadio5" name="status">
                                <label for="nocustomRadio5" class="custom-control-label">Không hiển
                                    thị</label>
                            </div>
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
