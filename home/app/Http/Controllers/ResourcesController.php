<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ResourceExport;
use App\Imports\ResourceImport;
use App\Models\Category;
use App\Models\Resources;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        $data = Resources::with('category')->get();
        return view('resources.index', compact('data'));
    }
    public function show($id)
    {
        $data = Resources::where('id', $id)->with('category')->first();
        return view('resources.show', compact('data'));
    }

    public function create()
    {
        $category = Category::all();
        return view('resources.create', compact('category'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Resources::create($data);
        return redirect()->route('resources');
    }
    public function edit($id)
    {
        $data = Resources::find($id);
        $category = Category::all();
        return view('resources.edit', compact('data', 'category'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'qty_stock' => $request->qty_stock,
            'category_id' => $request->category_id
        );
        Resources::where('id', $id)->update($data);
        return redirect()->route('resources');
    }

    public function destroy($id, Request $request)
    {
        Resources::destroy($id);
        return redirect()->route('resources');
    }

    public function export()
    {
        return Excel::download(new ResourceExport, 'Resource.xlsx');
    }

    public function upload()
    {
        return view('resources.resources_upload_blade');
    }

    public function import(Request $request)
    {
        // $request->file('file')->store('temp')

        Excel::import(new ResourceImport, $request->file('file')->store('tmp'));

        return redirect('/')->with('success', 'All good!');
    }
}
