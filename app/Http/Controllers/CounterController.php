<?php

namespace App\Http\Controllers;

use App\CounterModel;
use DataTables;
use Illuminate\Http\Request;
use Validator;
Use Alert;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        return view('counter.counterdatatable');
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = CounterModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action',
            '<div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
            <a href="#" class="countershow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
            <a href="#" class="counteredit dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
            <a href="#" class="counterdelete dropdown-item sweetalert" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
            </div></div>')
            ->addColumn('checkbox', '<input type="checkbox" name="countercheckbox[]" class="checkbox countercheckbox" value="{{$id}}" />')
            // ->addColumn('status', function($data) {
            //     if($data->is_active == '1'){
            //         return '<label class="badge badge-success">Active</label>';
            //     }else{
            //         return '<label class="badge badge-danger">Inactive</label>';
            //     }
            // })
            ->rawColumns(['checkbox','action'])
            ->make(true);

        }
        return view('counter.counterdatatable');
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
        $form_data = array(
            'NoCounter' => $request->nocounter,
            'IpAddress' => $request->ipaddress,
            'MacAddress' => $request->macaddress,
            'TypeCounter' => $request->typecounter
        );
    
        CounterModel::updateOrCreate(['id'=>$request->counterid],$form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CounterModel  $counterModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CounterModel::findOrFail($id);
        return view('counter.counterprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CounterModel  $counterModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CounterModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CounterModel  $counterModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CounterModel $counterModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CounterModel  $counterModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CounterModel::findOrFail($id);
        $data->delete();
    }

    public function somedelete(Request $request)
    {   
        // if($request->ajax()){
        //     return response()->json(['status'=>'Ajax request']);
        // }
        // return response()->json(['status'=>'Http request']);
        $idarray = $request->input('id');
        $counter = CounterModel::whereIn('id',$idarray);
        if($counter->delete())
        {
            echo 'Data Deleted';
        }
    }
}
