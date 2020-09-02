<?php

namespace App\Http\Controllers;

use App\MonitoringModel;
use App\CounterModel;
use DB;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DB::table('countertable')
            ->select('countertable.id','countertable.NoCounter','countertable.Status', 'countertable.TypeCounter',
                    'edctable.id as idEDC','edctable.TIDEDC', 'edctable.MIDEDC','edctable.TypeEDC')
            ->leftJoin('edctable', 'countertable.NoCounter', '=', 'edctable.NoCounter')->orderBy('countertable.NoCounter','asc')
            ->get();
            // $data = CounterModel::all();
            // dd($data);
        return view('monitoring.monitoring',compact('data'));
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
     * @param  \App\MonitoringModel  $monitoringModel
     * @return \Illuminate\Http\Response
     */
    public function show(MonitoringModel $monitoringModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MonitoringModel  $monitoringModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MonitoringModel $monitoringModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MonitoringModel  $monitoringModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MonitoringModel $monitoringModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MonitoringModel  $monitoringModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonitoringModel $monitoringModel)
    {
        //
    }
}
