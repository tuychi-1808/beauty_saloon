<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function work()
    {
        return view('beauty_saloon/work');
    }
}
