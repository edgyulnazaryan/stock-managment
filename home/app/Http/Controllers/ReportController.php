<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\Clothes;
use App\Models\Manager;
use App\Models\Report;
use App\Models\Sale;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manager = Manager::all();
        $clothes = Clothes::all();
        return view('Report.index', compact('manager', 'clothes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report()
    {
        $manager = Manager::all();
        $clothes = Clothes::all();
        return view('Report.index', compact('manager', 'clothes'));
    }

    public function report_ajax(Request $request)
    {
        $id = $request->id;
        $data = Sale::where('manager_id', $id)->with('manager', 'customer', 'product')->get();
        return response()->json($data);
    }

    public function generate_pdf(Request $request)
    {
        $id = $request->id;
        $data = Sale::where('manager_id', $id)->with('manager', 'customer', 'product')->get();

        return view('Report.pdf', compact('data'));
    }

    public function download(Request $request, $id)
    {
        $id = $request->id;

        $data = Sale::where('manager_id', $id)->with('manager', 'customer', 'product')->get();

        $pdf = PDF::loadView('Report.pdf', compact('data'));

        return $pdf->download('invoice.pdf');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Report::create($data);
        return redirect()->route('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
