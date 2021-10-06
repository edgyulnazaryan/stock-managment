<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Manager;
use App\Models\Resources;
use App\Models\Supplier;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // $data = Order::all();
        $data = Customer::all();
        return view('customer.index', compact('data'));
    }
    public function show($id)
    {
        $data = Customer::where('id', $id)->first();
        // $category = Category::where('id', $data->category_id)->first()->name;
        return view('customer.show', compact('data'));
    }

    public function create()
    {
        $data = Customer::all();
        return view('customer.create', compact('data'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Customer::create($data);
        return redirect()->route('customer');
    }
    public function edit($id)
    {
        $data = Customer::find($id);
        return view('customer.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
        );
        Customer::where('id', $id)->update($data);
        return redirect()->route('customer');
    }

    public function destroy($id, Request $request)
    {
        Customer::destroy($id);
        return redirect()->route('customer');
    }
}
