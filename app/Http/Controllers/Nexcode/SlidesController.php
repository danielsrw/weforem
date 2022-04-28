<?php

namespace App\Http\Controllers\Nexcode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlidesController extends Controller
{
    public function index()
    {
        $slides = Slide::all();

        return view('nexcode.admin.pages.slides.index', compact('slides'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => ['required', 'image'],
            'status' => 'required',
            'description' => 'required',
        ]);

        $imagePath = (request('image')->store('slides', 'public'));

        Slide::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'image' => $imagePath,
            'status' => $data['status'],
            'description' => $data['description'],
        ]);

        return redirect()->route('nexcode.admin.slide');
    }

    public function edit($id)
    {
        $slides = Slide::all();

        return view('nexcode.admin.pages.slides.edit', compact('slides'));
    }

    public function active($id)
    {
        $data = Slide::findOrfail($id);
        $data->status = 0;
        $data->save();

        return back()->with('success', 'Slide unactived successfully');
    }

    public function unactive($id)
    {
        $data = Slide::findOrfail($id);
        $data->status = 1;
        $data->save();

        return back()->with('success', 'Slide actived successfully');
    }

    public function destroy($id)
    {
        $data = Slide::findOrfail($id);
        $data->delete();

        return back()->with('success', 'Slide deleted successfully');
    }
}
