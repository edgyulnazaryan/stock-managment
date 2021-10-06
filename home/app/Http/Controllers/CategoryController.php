<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::all();
        return view('category.index', compact('data'));
    }
    public function show($id)
    {
        $data = Category::find($id);
        return view('category.show', compact('data'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return view('category.create');
    }

    public function edit($id, Request $request)
    {
        $data = Category::find($id);
        return view('category.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = array(
            'name' => $request->name,
            'description' => $request->description
        );
        Category::where('id', $id)->update($data);
        return redirect()->route('category');
    }

    public function destroy($id, Request $request)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('category');
    }





}
