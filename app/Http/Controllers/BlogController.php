<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function posts(){
        $data['posts'] = Blog::all();
        return view('posts.index',$data) ; 
    }
}
