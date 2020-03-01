<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();

        return view('admin.category.index', compact('data'));
    }

    public function create()
    {
        $data = category::all();
        return view('admin.category.create', compact('data'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

//        Lay toan bo Data trong CSDL
        $inputs = $request->all();

        if ($request->has('is_active')) { //Kiem tra
            $is_active = $request->input('is_active');

        }

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = str_slug($request->input('name'));
        $category->parent_id = $request->input('parent_id');
        $category->is_active = $is_active;
        $category->position = $request->input('position');
        $category->save();

        //Chuyen huong trang
        return redirect()->route('admin.category.index');
     }

    public function show($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.show', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $category = Category::all();

        $data = Category::findOrFail($id);
        return view('admin.category.edit', compact('category', 'data'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
