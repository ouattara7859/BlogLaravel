<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function Index()
    {
        $categories = Category::latest()->get();


        return view('admin.allcategory', compact('categories'));
        # code...


    }

    public function AddCategory()
    {
        # code...

        return view('admin.addcategory');
    }

    public function StoreCreateBlog(Request $request)
    {
        # code...
        $validated = $request->validate([
            'category' => 'required|unique:categories',

        ]);

        Category::insert([
            'category'=>$request->category,
            'color_random'=>substr(md5(rand()), 0, 6),
            'slug'=> strtolower(str_replace(' ','-', $request->category)),

        ]);



        return redirect()
        ->route('allcategory')
        ->with('message', 'Category Added Successfully!!');
    }



    public function EditCategory($id)
    {

        $info_category = Category::findOrFail($id);



        return view('admin.editcategory', compact('info_category'));

    }

    public function UpdateCategory(Request $request)
    {

        $validated = $request->validate([
            'category' => 'required|unique:categories',

        ]);

        $category_id = $request->category_id;

        Category::findOrFail($category_id)->
            update([
            'category'=>$request->category,
            'slug'=> strtolower(str_replace(' ','-', $request->category)),

        ]);

        return redirect()
        ->route('allcategory')
        ->with('message', 'Category Updated Successfully!!');


    }

    public function DestroyCategory($id)
    {
        # code...DestroyCategory
        Category::findOrFail($id)->delete();

        return redirect()
        ->route('allcategory')
        ->with('info_delete', 'Category deleted Successfully!!');

    }





}
