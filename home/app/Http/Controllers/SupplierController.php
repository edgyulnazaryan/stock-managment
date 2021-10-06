<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::with('location')->get();
        return view('supplier.index', compact('data'));
    }
    public function show($id)
    {
        $data = Supplier::where('id', $id)->with('location')->first();
        return view('supplier.show', compact('data'));
    }

    public function create()
    {
        $location = Location::all();
        return view('supplier.create', compact('location'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Supplier::create($data);
        return redirect()->route('supplier');
    }
    public function edit($id)
    {
        $data = Supplier::find($id);
        $location = Location::all();
        return view('supplier.edit', compact('data', 'location'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'company_name' => $request->company_name,
            'phone_number' => $request->phone_number,
            'location_id' => $request->location_id,
        );
        Supplier::where('id', $id)->update($data);
        return redirect()->route('supplier');
    }

    public function destroy($id, Request $request)
    {
        Supplier::destroy($id);
        return redirect()->route('supplier');
    }
}
