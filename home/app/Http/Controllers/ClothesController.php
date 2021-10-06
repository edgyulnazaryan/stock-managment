<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use App\Models\Employer;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Clothes::with('employer')->get();
        return view('clothes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employer = Employer::all();
        return view('clothes.create', compact('employer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->image->store('clothes', 'public');
        $product = new Clothes([
            "title" => $request->get('title'),
            "color" => $request->get('color'),
            "quantity" => $request->get('quantity'),
            "size" => $request->get('size'),
            "employer_id" => $request->get('employer_id'),
            "image" => $request->image->hashName()
        ]);

        $product->save();
        // $data = $request->all();
        // Clothes::create($data);
        return redirect()->route('clothes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Clothes::where('id', $id)->with('employer')->first();
        // $category = Category::where('id', $data->category_id)->first()->name;
        return view('clothes.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Clothes::find($id);
        $employer = Employer::all();
        return view('clothes.edit', compact('data', 'employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if(isset($request->image))
        {
            $data = array(
                'title' => $request->title,
                'size' => $request->size,
                'image' => $request->image_new,
                'quantity' => $request->quantity,
                'color' => $request->color,
                'employer_id' => $request->employer_id
            );
        }
        else
        {
            $data = array(
                'title' => $request->title,
                'size' => $request->size,
                'image' => $request->image_old,
                'quantity' => $request->quantity,
                'color' => $request->color,
                'employer_id' => $request->employer_id
            );
        }
        Clothes::where('id', $id)->update($data);
        return redirect()->route('clothes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clothes::destroy($id);
        return redirect()->route('clothes');
    }
}
