<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateBlogController extends Controller
{
    //
    public function Index()
    {
        # code...
        $all_blogs = Blog::join('categories', 'categories.id', '=' , 'blogs.category_count_blog')
                     ->get(['blogs.*', 'categories.category']);

            //  ->get(['blogs.id','blogs.name','blogs.blog_img', 'blogs.title', 'categories.category']);



        return view('admin.allblog', compact('all_blogs'));

    }

    public function AddBlog()
    {
        # code...
        $categories = Category::latest()->get();
        return view('admin.addblog', compact('categories'));
    }

    public function StoreBlog(Request $request)
    {
        # code...
        $validated = $request->validate([
            'title' => 'required|unique:blogs',
            'name' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('blog_img');
        $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->blog_img->move(public_path('upload'),$img_name);
        $img_url= 'upload/' . $img_name;

        $category_id = $request->category_id;


        Blog::insert([
            'title'=>$request->title,
            'name'=>$request->name,
            'category_count_blog'=>$category_id,
            'tags'=>$request->tags,
            'description'=>$request->description,
            'blog_img'=>$img_url,
            'slug'=> strtolower(str_replace(' ','-', $request->title)),
            'date_creation'=>date('d-m-Y'),
            'heure_creation'=>date('H:i:s'),

        ]);

        Category::where('id', $category_id)->increment('category_count', 1);

        return redirect()
        ->route('allblog')
        ->with('message', 'Blog Added Successfully!!');
    }




    public function EditBlogImg($id)
    {
        # code...
        $bloginfo = Blog::findOrFail($id);

        return view('admin.editblogimg', compact('bloginfo'));
    }


    public function UpdateBlogImg(Request $request)
    {
        $request->validate([

            'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         $id = $request->id;

         $image = $request->file('blog_img');
         $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
         $request->blog_img->move(public_path('upload'),$img_name);
         $img_url= 'upload/' . $img_name;

         Blog::findOrFail($id)->update([
             'blog_img'=> $img_url,

         ]);

         return redirect()
         ->route('allblog')
         ->with('message', 'Blog Updated Successfully!!');

    }

    public function EditBlog($id)
    {
        # code...
        $categories = Category::latest()->get();

        $Blogs = Blog::findOrFail($id);

        return view('admin.editblog', compact('Blogs', 'categories'));
    }

    public function UpdateBlog(Request $request)
    {
        $request->validate([

            'title' => 'required|unique:blogs',
            'name' => 'required',
            'tags' => 'required',
            'description' => 'required',


        ]);

        $blogid = $request->id;

        Blog::findOrFail($blogid)->update([
            'title'=> $request->title,
            'name'=> $request->name,
            'tags'=> $request->tags,
            'description'=> $request->description,
            'slug'=> strtolower(str_replace(' ','-', $request->title)),
        ]);

        return redirect()
        ->route('allblog')
        ->with('message', 'Blog Updated Successfully!!');

    }

    public function DestroyBlog($id)
    {
        # code...

        $cat_id=Blog::where('id', $id)->value('category_count_blog',1);
        Blog::findOrFail($id)->delete();

        Category::where('id',$cat_id)->decrement('category_count', 1);

        return redirect()
        ->route('allblog')
        ->with('info_delete', 'Blog Deleted Successfully!!');

    }

}
