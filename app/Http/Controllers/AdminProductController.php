<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('Backend.Product.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        $categories = Category::where('parent_id', '!=', 0)->get();
        return view('Backend.Product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {

        $name = $request['name'];
        $slug = Str::slug($name, '-');
        $category_id = $request['category_id'];
        $sku = $request['sku'];
        $unit_price = $request['unit_price'];
        $sale_price = $request['sale_price'];
        $description = $request['description'];

        // Luu file
        $file_anh_dai_dien = $request->file('preview_image');
        $file_anh_dai_dien_name = $file_anh_dai_dien->getClientOriginalName();
        $file_anh_dai_dien_path = $this->SaveFile($file_anh_dai_dien, 'product_', 'image_products');

        // Luu san pham vao CSDL
        $sanPhamMoi = Product::create([
            'sku' => $sku,
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'category_id' => $category_id,
            'unit_price' => $unit_price,
            'sale_price' => $sale_price,
            'preview_image_name' => $file_anh_dai_dien_name,
            'preview_image_path' => $file_anh_dai_dien_path,
        ]);

        // Luu chi tiet anh san pham
        $danh_sach_anh_chi_tiet = $request->file('detail_images');
        foreach ($danh_sach_anh_chi_tiet as $file_anh_chi_tiet) {
            $file_anh_chi_tiet_name = $file_anh_chi_tiet->getClientOriginalName();
            $file_anh_chi_tiet_path = $this->SaveFile($file_anh_chi_tiet, 'product_', 'image_products');

            ProductImage::create([
                'product_id' => $sanPhamMoi->id,
                'name' => $file_anh_chi_tiet_name,
                'path' => $file_anh_chi_tiet_path
            ]);
        }
        return redirect()->route('AdminProduct.index');
    }

    public function edit($id)
    {
        $categories = Category::where('parent_id', '!=', 0)->get();
        $product = Product::findOrFail($id);
        $product_image = ProductImage::where('product_id', '=', $id)->get();

        return view('Backend.Product.edit', ['categories' => $categories, 'product' => $product, 'product_image' => $product_image]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $name = $request['name'];
        $slug = Str::slug($name, '-');
        $category_id = $request['category_id'];
        $sku = $request['sku'];
        $unit_price = $request['unit_price'];
        $sale_price = $request['sale_price'];
        $description = $request['description'];

        $update_array = [
            'sku' => $sku,
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'category_id' => $category_id,
            'unit_price' => $unit_price,
            'sale_price' => $sale_price
        ];

        if ($request->hasFile('preview_image')) {
            // Luu file
            $file_anh_dai_dien = $request->file('preview_image');
            $file_anh_dai_dien_name = $file_anh_dai_dien->getClientOriginalName();
            $file_anh_dai_dien_path = $this->SaveFile($file_anh_dai_dien, 'product_', 'image_products');

            $update_array['preview_image_name'] = $file_anh_dai_dien_name;
            $update_array['preview_image_path'] = $file_anh_dai_dien_path;
        }

        // Luu san pham vao CSDL
        $product->update($update_array);

        // ???nh c?? s???n: 3 t???m
        // ng?????i ta up 2 t???m

        // x??a h???t 3 t???m c?? ??i
        // th??m 2 t???m m???i th??i

        if ($request->has('detail_images')) {
            // V??ng l???p x??a ???nh c?? s???n trong CSDL
            // L??m sao l???y ???????c t???t c??? ???nh thu???c v??? $product hi???n t???i
            // 1 s???n ph???m c?? 1 ho???c nhi???u ???nh chi ti???t, th??ng qua product_id
            $product_image = ProductImage::where('product_id', '=', $id)->get();
            foreach ($product_image as $image) {
                $image->delete();
            }

            $danh_sach_anh_chi_tiet = $request->file('detail_images');
            // V??ng l???p th??m m???i ???nh v??o CSDL
            foreach ($danh_sach_anh_chi_tiet as $file_anh_chi_tiet) {
                $file_anh_chi_tiet_name = $file_anh_chi_tiet->getClientOriginalName();
                $file_anh_chi_tiet_path = $this->SaveFile($file_anh_chi_tiet, 'product_', 'image_products');


                ProductImage::create([
                    'product_id' => $product->id,
                    'name' => $file_anh_chi_tiet_name,
                    'path' => $file_anh_chi_tiet_path
                ]);
            }
        }

        return redirect()->route('AdminProduct.index');

    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('AdminProduct.index');
    }

    public function SaveFile($file, $prefix, $folder)
    {
        // Tach ten file
        $file_name = $file->getClientOriginalName();

        // Tao ten file ngau nhien de luu tru
        $file_name_unique = $prefix . Str::random(11) . time() . '.' . $file->getClientOriginalExtension();

        // Luu tru vat ly
        $file->move(public_path($folder), $file_name_unique);

        // Tra ve duong dan unique de luu tru vao CSDL
        return $folder . '/' . $file_name_unique;
    }
}
