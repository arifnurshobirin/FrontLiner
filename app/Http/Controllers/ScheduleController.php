<?php

namespace App\Http\Controllers;

use App\ScheduleModel;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('multimedia.gallery');
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
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleModel $scheduleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleModel $scheduleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduleModel $scheduleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduleModel $scheduleModel)
    {
        //
    }
}
