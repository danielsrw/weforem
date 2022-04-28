<?php

namespace App\Http\Controllers\Nexcode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        return view('nexcode.pages.services');
    }

    public function webDev()
    {
        return view('nexcode.pages.services.web-dev');
    }

    public function mobileDev()
    {
        return view('nexcode.pages.services.mobile-dev');
    }

    public function GraphicDesign()
    {
        return view('nexcode.pages.services.graphic-design');
    }

    public function seo()
    {
        return view('nexcode.pages.services.seo');
    }

    public function ppc()
    {
        return view('nexcode.pages.services.ppc');
    }

    public function electMain()
    {
        return view('nexcode.pages.services.electronic-maintainance');
    }
}
