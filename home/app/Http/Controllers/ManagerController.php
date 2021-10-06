<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $data = Manager::with('location')->get();
        return view('manager.index', compact('data'));
    }
    public function show($id)
    {
        $data = Manager::where('id', $id)->with('location')->first();
        return view('manager.show', compact('data'));
    }

    public function create()
    {
        $location = Location::all();
        return view('manager.create', compact('location'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Manager::create($data);
        return redirect()->route('manager');
    }
    public function edit($id)
    {
        $data = Manager::find($id);
        $location = Location::all();
        return view('manager.edit', compact('data', 'location'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location_id' => $request->location_id,
        );
        Manager::where('id', $id)->update($data);
        return redirect()->route('manager');
    }

    public function destroy($id, Request $request)
    {
        Manager::destroy($id);
        return redirect()->route('manager');
    }
}
