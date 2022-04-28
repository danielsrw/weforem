<?php

namespace App\Http\Controllers\Ndahari;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('ndahari.pages.index');
    }
}
