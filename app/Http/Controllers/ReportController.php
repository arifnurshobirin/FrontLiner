<?php

namespace App\Http\Controllers;

use App\ReportModel;
use Illuminate\Http\Request;
Use Alert;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboardv1');
        
    }

    public function calendar()
    {
        alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->showConfirmButton('Confirm', '#3085d6')->showCancelButton('Cancel');
        return view('calendar.calendar');
    }
    public function gallery()
    {
        return view('multimedia.gallery');
    }
    public function monitoring()
    {
        Alert::success('Success Title', 'Success Message');
        return view('monitoring.monitoring');
    }
    public function lockscreen()
    {
        return view('auth.lockscreen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReportModel  $reportModel
     * @return \Illuminate\Http\Response
     */
    public function show(ReportModel $reportModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportModel  $reportModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportModel $reportModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportModel  $reportModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportModel $reportModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportModel  $reportModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportModel $reportModel)
    {
        //
    }
}
