<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Clothes;
use App\Models\Manager;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        // $data = Order::all();
        $data = Order::with('resource','supplier', 'manager')->get();

        // dd($data);
        return view('order.index', compact('data'));
    }
    public function show($id)
    {
        $data = Order::where('id', $id)->with('resource','supplier', 'manager')->first();
        // $category = Category::where('id', $data->category_id)->first()->name;
        return view('order.show', compact('data'));
    }

    public function approve($id, Request $request)
    {
        Order::where('id', $id)->update(['status'=> 'Approved']);
        return redirect()->route('order');
    }

    public function approved_orders()
    {
        $data = Order::where('status', 'Approved')->with('resource','supplier', 'manager')->get();
        return view('home', compact('data'));
    }

    public function confirmed($id, Request $request)
    {
        Order::where('id', $id)->update(['status'=> 'Confirmed']);
        return redirect()->route('home');
    }

    public function create()
    {
        $supplier = Supplier::all();
        $product = Clothes::all();
        $manager = Manager::all();
        return view('order.create', compact('supplier', 'product', 'manager'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Order::create($data);
        return redirect()->route('order');
    }
    public function edit($id)
    {
        $data = Order::find($id);
        $category = Category::all();
        return view('order.edit', compact('data', 'category'));
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
        Order::where('id', $id)->update($data);
        return redirect()->route('order');
    }

    public function destroy($id, Request $request)
    {
        Order::destroy($id);
        return redirect()->route('order');
    }
    public function order_ajax(Request $request)
    {
        $id = $request->id;
        $data = Clothes::find($id)->quantity;
        return response()->json($data);
    }
}
