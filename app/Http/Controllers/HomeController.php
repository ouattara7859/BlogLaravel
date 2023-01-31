<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Userblogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //

    public function Index()
    {
        # code...

        $all_blogs = Blog::join('categories', 'categories.id', '=' , 'blogs.category_count_blog')
                     ->orderBy('id', 'desc')
                     ->limit(3)
                     ->get(['blogs.*', 'categories.category']);




        // $user_data = array(
        //     'email'  => $request->get('email'),
        //     'password' => $request->get('password')
        //  );
        //  if(Auth::attempt($user_data))
        //  {
        //     return ['status'=>'Login success'];
        //  }
        //  else
        //  {
        //     return ['error'=>'Identifiants incorrects'];
        //  }


        return view('user_template.home', compact(['all_blogs']));
    }
}
