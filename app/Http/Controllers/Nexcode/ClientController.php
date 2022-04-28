<?php

namespace App\Http\Controllers\Nexcode;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('nexcode.admin.pages.clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'link' => '',
            'image' => ['required', 'image'],
            'status' => 'required',
        ]);

        $imagePath = (request('image')->store('clients', 'public'));

        Client::create([
            'name' => $data['name'],
            'link' => $data['link'],
            'image' => $imagePath,
            'status' => $data['status'],
        ]);

        return redirect()->route('nexcode.admin.client');
    }

    public function active($id)
    {
        $data = Client::findOrfail($id);
        $data->status = 0;
        $data->save();

        return back()->with('success', 'Client unactived successfully');
    }

    public function unactive($id)
    {
        $data = Client::findOrfail($id);
        $data->status = 1;
        $data->save();

        return back()->with('success', 'Slide actived successfully');
    }
}
