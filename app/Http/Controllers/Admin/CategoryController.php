<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();
        return view('dashboard.category.index' , compact('category'));

    }
    public function add(){
        return view('dashboard.category.add') ;
    }

    public function insert(Request $request)
    {
        $category = new Category();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') ? 1 : 0;
        $category->popular = $request->input('popular') ? 1 : 0;
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');

        $category->save();

        return redirect('/category')->with('status', 'Category Added Successfully');
    }


    function edit($id) {
        $category = Category::find($id);
        return view('dashboard.category.edit' , compact('category'));
    }

    function update(Request $request, $id){

        $category = Category::find($id);

        if ($request->hasFile('image')) {
            $path='assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') ? 1 : 0;
        $category->popular = $request->input('popular') ? 1 : 0;
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_description = $request->input('meta_description');
        $category->update();
        return redirect('/category')->with('status', 'Category Updated Successfully');

    }

    function destroy($id){

        $category = Category::find($id);
        if ($category->image) {
            $path='assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/category')->with('status', 'Category Deleted Successfully');

    }

}
