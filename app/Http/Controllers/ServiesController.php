<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiesController extends Controller
{
    public function services()
    {
        return view('beauty_saloon/services');
    }
}
