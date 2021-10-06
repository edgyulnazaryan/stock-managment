<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use App\Models\Customer;
use App\Models\Manager;
use App\Models\Resources;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sale::with('product', 'customer', 'manager')->get();
        return view('sales.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Clothes::all();
        $customer = Customer::all();
        $manager = Manager::all();
        return view('sales.create', compact('product', 'customer', 'manager'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Sale([
            "product_id" => $request->get('product_id'),
            "price" => $request->get('price'),
            "quantity" => $request->get('quantity'),
            "manager_id" => $request->get('manager_id'),
            "customer_id" => $request->get('customer_id'),
        ]);

        $product->save();
        // $data = $request->all();
        // Sale::create($data);
        return redirect()->route('sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Sale::where('id', $id)->with('product', 'customer', 'manager')->first();
        // $category = Category::where('id', $data->category_id)->first()->name;
        return view('sales.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sale::find($id);
        $product = Clothes::all();
        $manager = Manager::all();
        $customer = Customer::all();
        return view('sales.edit', compact('data', 'product', 'manager', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
            $data = array(
                "product_id" => $request->product_id,
                "price" => $request->price,
                "quantity" => $request->quantity,
                "manager_id" => $request->manager_id,
                "customer_id" => $request->customer_id,
            );

        Sale::where('id', $id)->update($data);
        return redirect()->route('sales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::destroy($id);
        return redirect()->route('sales');
    }

    public function order_ajax(Request $request)
    {
        $id = $request->id;
        $data = Clothes::find($id)->quantity;

        return response()->json($data);
    }

    
}
