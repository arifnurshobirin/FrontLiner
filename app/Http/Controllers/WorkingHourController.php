<?php

namespace App\Http\Controllers;

use App\Workinghour;
use DataTables;
use Illuminate\Http\Request;

class WorkingHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Workinghour::latest()->get();
            return DataTables::of($data)
            ->addColumn('codeshift', '<input type="text" name="code{{$id}}" id="code{{$id}}" class="form-control" value="{{$CodeShift}}" readonly/>')
            ->addColumn('startshift', '<input type="text" name="start{{$id}}" id="start{{$id}}" class="form-control" value="{{$StartShift}}" readonly/>')
            ->addColumn('endshift', '<input type="text" name="end{{$id}}" id="end{{$id}}" class="form-control" value="{{$EndShift}}" readonly/>')
            ->addColumn('workinghour', '<div class="input-group">
            <input type="text" name="hour{{$id}}" id="hour{{$id}}" class="form-control" value="{{$WorkingHour}}" readonly/>
            <div class="input-group-prepend"><span class="input-group-text">Hour</span> </div>
        </div>')
            ->addColumn('action',
                '<div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a class="schedulesave dropdown-item" id="{{$id}}" onclick="freezeschedule({{$id}})"><i class="fas fa-desktop"></i> Save</a>
                <a class="scheduleedit dropdown-item" id="{{$id}}" onclick="editschedule({{$id}})"><i class="fas fa-edit"></i> Edit</a>
                <a class="scheduledelete dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
                </div></div>')
            ->rawColumns(['codeshift','startshift','endshift','workinghour','action'])
            ->make(true);
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
     * @param  \App\Workinghour  $Workinghour
     * @return \Illuminate\Http\Response
     */
    public function show(Workinghour $Workinghour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workinghour  $Workinghour
     * @return \Illuminate\Http\Response
     */
    public function edit(Workinghour $Workinghour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workinghour  $Workinghour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workinghour $Workinghour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workinghour  $Workinghour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workinghour $Workinghour)
    {
        //
    }
}
