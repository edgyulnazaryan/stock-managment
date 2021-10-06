<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $data = Employer::with('location','job')->get();
        return view('employer.index', compact('data'));
    }
    public function show($id)
    {
        $data = Employer::where('id', $id)->with('location','job')->first();
        return view('employer.show', compact('data'));
    }

    public function create()
    {
        $job = Job::all();
        $location = Location::all();
        return view('employer.create', compact('job', 'location'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Employer::create($data);
        return redirect()->route('employer');
    }
    public function edit($id)
    {
        $job = Job::all();
        $location = Location::all();
        $data = Employer::find($id);
        return view('employer.edit', compact('data', 'job', 'location'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'location_id' => $request->location_id,
            'job_id' => $request->job_id,
        );
        Employer::where('id', $id)->update($data);
        return redirect()->route('employer');
    }

    public function destroy($id, Request $request)
    {
        Employer::destroy($id);
        return redirect()->route('employer');
    }
}
