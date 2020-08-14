<?php

namespace App\Http\Controllers;

use App\EDCModel;
use DataTables;
use Illuminate\Http\Request;
use Validator;
Use Alert;

class EDCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function datatable(Request $request)
    {
        $data = EDCModel::latest()->get();
        return DataTables::of($data)
        ->addColumn('action','<div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
            <a href="#" class="edcshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
            <a href="#" class="editedc dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
            <a href="#" class="deleteedc dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
            </div></div>')
        ->addColumn('checkbox', '<input type="checkbox" name="edccheckbox[]" class="edccheckbox" value="{{$id}}" />')
        ->rawColumns(['action','checkbox'])
        ->make(true);

    }
    public function index(Request $request)
    {
        return view('edc.edcdatatable');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'TIDEDC' => $request->tidedc,
            'MIDEDC' => $request->midedc,
            'IPAdress' => $request->ipedc,
            'NoCounter' => $request->nocounter,
            'Connection' => $request->connection,
            'SIMCard' => $request->simcard,
            'TypeEDC' => $request->typeedc,
            'StatusEDC' => $request->statusedc
        );

        EDCModel::updateOrCreate(['id'=>$request->edcid],$form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EDCModel  $eDCModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $data = EDCModel::findOrFail($id);
        return view('edc.EDCprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
      *
     * @param  \App\EDCModel  $eDCModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = EDCModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EDCModel  $eDCModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EDCModel $eDCModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EDCModel  $eDCModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = EDCModel::findOrFail($id);
        $data->delete();
    }
    public function moredelete(Request $request)
    {   
        $idarray = $request->input('id');
        $edc = EDCModel::whereIn('id',$idarray)->delete();
    }
}
