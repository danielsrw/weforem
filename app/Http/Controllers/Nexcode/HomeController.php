<?php

namespace App\Http\Controllers\Nexcode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Slide;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $slides = Slide::all();
        $team = Team::all();
        return view('nexcode.pages.index', compact('slides', 'clients', 'team'));
    }
}
