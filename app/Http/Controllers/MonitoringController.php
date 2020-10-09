<?php

namespace App\Http\Controllers;

use App\{Counter, Edc};
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
        // $data = DB::table('countertable')
        //     ->select('countertable.id','countertable.NoCounter','countertable.Status', 'countertable.TypeCounter',
        //             'edctable.id as idEDC','edctable.TIDEDC', 'edctable.MIDEDC','edctable.TypeEDC', 'edctable.SIMCard', 'edctable.Status as StatusEDC')
        //     ->leftJoin('edctable', 'countertable.NoCounter', '=', 'edctable.NoCounter')->orderBy('countertable.NoCounter','asc')
        //     ->get();
            $datacounter = Counter::orderBy('NoCounter','asc')->get();
    
        return view('monitoring.monitoring',compact('datacounter'));
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
     * @param  \App\Counter  $Counter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataedc =  Counter::find($id)->edcs;
        // $data = response()->json($dataedc);
             // dd($data);
        return response()->json($dataedc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Counter  $Counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $Counter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Counter  $Counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $Counter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Counter  $Counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $Counter)
    {
        //
    }
}
