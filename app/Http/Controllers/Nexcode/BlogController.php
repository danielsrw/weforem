<?php

namespace App\Http\Controllers\Nexcode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create()
    {
        $blogs = Blog::all();

        return view('nexcode.admin.pages.blog.index', compact('blogs'));
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
