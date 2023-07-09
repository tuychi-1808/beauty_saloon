<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    public function single()
    {
        return view('beauty_saloon/blog-single');
    }
}
