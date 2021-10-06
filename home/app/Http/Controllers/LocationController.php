<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $data = Location::all();
        return view('location.index', compact('data'));
    }
    public function show($id)
    {
        $data = Location::find($id);
        return view('location.show', compact('data'));
    }

    public function create()
    {
        return view('location.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Location::create($data);
        return redirect()->route('location');
    }
    public function edit($id)
    {
        $data = Location::find($id);
        return view('location.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'province' => $request->province,
            'city' => $request->city,
            'street' => $request->street,
        );
        Location::where('id', $id)->update($data);
        return redirect()->route('location');
    }

    public function destroy($id, Request $request)
    {
        Location::destroy($id);
        return redirect()->route('location');
    }
}
