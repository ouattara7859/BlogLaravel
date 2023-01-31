<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    //
    public function Index()
    {
        # code...

        return view('admin.addtags');
    }


    public function ListTags()
    {
        # code...

        return view('admin.alltags');
    }
}
