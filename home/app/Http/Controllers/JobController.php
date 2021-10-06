<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $data = Job::all();
        return view('job.index', compact('data'));
    }
    public function show($id)
    {
        $data = Job::find($id);
        return view('job.show', compact('data'));
    }

    public function create()
    {
        return view('job.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Job::create($data);
        return redirect()->route('job');
    }
    public function edit($id)
    {
        $data = Job::find($id);
        return view('job.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = array(
            'job_title' => $request->job_title,
            'salary' => $request->salary,
        );
        Job::where('id', $id)->update($data);
        return redirect()->route('job');
    }

    public function destroy($id, Request $request)
    {
        Job::destroy($id);
        return redirect()->route('job');
    }
}
