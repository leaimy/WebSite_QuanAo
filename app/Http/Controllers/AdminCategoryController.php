<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller {

    public function index()
    {
        $tableCategory = Category::all();

        return view('Backend.Category.index', [
            'category' => $tableCategory,
        ]);
    }

    public function create()
    {
        $parents = Category::where('parent_id', 0)->get();

        return view('Backend.Category.create', [
            'parents' => $parents
        ]);
    }

    public function store(Request $request)
    {

        $name = $request['name'];
        $parent_id = $request['parent_id'];
        $slug = Str::slug($name, '-');
        $status = $request['status'];

        Category::create([
            'name' => $name,
            'slug' => $slug,
            'status' => $status,
            'parent_id' => $parent_id,
        ]);

        return redirect()->route('AdminCategory.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $parents = Category::where('parent_id', 0)->get();

        return view('Backend.Category.edit', ['category' => $category, 'parents' => $parents]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $name = $request['name'];
        $parent_id = $request['parent_id'];
        $slug = Str::slug($name, '-');
        $status = $request['status'];

        $category->update([
            'name' => $name,
            'parent_id' => $parent_id,
            'slug' => $slug,
            'status' => $status
        ]);

        return redirect()->route('AdminCategory.index');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('AdminCategory.index');
    }

}
