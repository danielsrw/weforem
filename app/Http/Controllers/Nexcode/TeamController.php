<?php

namespace App\Http\Controllers\Nexcode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('nexcode.pages.team', compact('team'));
    }

    public function create()
    {
        $team = Team::all();

        return view('nexcode.admin.pages.team.index', compact('team'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => ['required', 'image'],
            'status' => 'required',
            'desc' => 'required',
            'twitter' => '',
            'facebook' => '',
            'linkedin' => '',
            'google' => '',
            'instagram' => '',
        ]);

        $imagePath = (request('image')->store('team', 'public'));

        Team::create([
            'name' => $data['name'],
            'title' => $data['title'],
            'image' => $imagePath,
            'status' => $data['status'],
            'desc' => $data['desc'],
            'twitter' => $data['twitter'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
            'google' => $data['google'],
            'instagram' => $data['instagram'],
        ]);

        return redirect()->route('nexcode.admin.team');
    }

    public function active($id)
    {
        $data = Team::findOrfail($id);
        $data->status = 0;
        $data->save();

        return back()->with('success', 'Member unactived successfully');
    }

    public function unactive($id)
    {
        $data = Team::findOrfail($id);
        $data->status = 1;
        $data->save();

        return back()->with('success', 'Member actived successfully');
    }
}
