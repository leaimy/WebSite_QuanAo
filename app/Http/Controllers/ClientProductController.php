<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    public function index($id)
    {
        $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
        $websiteconfig = \App\Website::all();
        $children_categories = Category::where('parent_id', $id)->get();

        $products = [];

        foreach ($children_categories as $category) {
            $results = Product::where('category_id', $category->id)->get();

            foreach ($results as $result) {
                array_push($products, $result);
            }
        }

        return view('Frontend.Home.danh-sach-san-pham', [
            'websiteconfig' => $websiteconfig,
            'parent_categories' => $parent_categories,
            'products' => $products,
        ]);
    }
}
