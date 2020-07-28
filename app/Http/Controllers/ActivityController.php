<?php

namespace App\Http\Controllers;

use App\ActivityModel;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activity.chronology');
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
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityModel $activityModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityModel $activityModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityModel $activityModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivityModel  $activityModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityModel $activityModel)
    {
        //
    }
}
