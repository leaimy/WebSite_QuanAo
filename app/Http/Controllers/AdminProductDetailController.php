<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use Illuminate\Http\Request;

class AdminProductDetailController extends Controller
{
    public function index($product_id)
    {
        $productdetails = ProductDetail::where('product_id', $product_id)->get();

        return view('Backend.Product.ProductDetail.index', ['productdetails' => $productdetails, 'product_id' => $product_id]);
    }

    public function create($product_id)
    {
        return view('Backend.Product.ProductDetail.create', ['product_id' => $product_id]);
    }

    public function store(Request $request, $product_id)
    {
        $color = $request['color'];
        $size = $request['size'];
        $quantity = $request['quantity'];

        $string = strtolower($color . $size);
        $string = $this->convert_vi_to_en($string);
        $arrayString = str_split($string);
        sort($arrayString);
        $unique_search_id = implode($arrayString);

        ProductDetail::create([
            'size' => $size,
            'color' => $color,
            'quantity' => $quantity,
            'product_id' => $product_id,
            'unique_search_id' => $unique_search_id
        ]);

        return redirect()->route('AdminProductDetail.index', ['product_id' => $product_id]);
    }

    public function edit($product_id, $id)
    {
        $product_detail = ProductDetail::findOrFail($id);
        return view('Backend.Product.ProductDetail.edit', [
            'product_id' => $product_id,
            'id' => $id,
            'product_detail' => $product_detail
        ]);
    }

    public function update(Request $request, $product_id, $id)
    {
        $quantity = $request['quantity'];

        $product_detail = ProductDetail::findOrFail($id);
        $quantity = $product_detail->quantity + $quantity;
        $product_detail->update([
            'quantity' => $quantity
        ]);

        return redirect()->route('AdminProductDetail.index', ['product_id' => $product_id]);
    }

    public function delete($product_id,$id)
    {
        $product_detail = ProductDetail::findOrFail($id);
        $product_detail->delete();
        return redirect()->route('AdminProductDetail.index', ['product_id' => $product_id]);
    }

    function convert_vi_to_en($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/(Đ)/", "D", $str);
        //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
        return $str;
    }
}
