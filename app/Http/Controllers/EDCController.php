<?php

namespace App\Http\Controllers;

use App\{Edc, Counter};
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
        $dataedc = Edc::latest()->get();
        //$caricounter=array_column($dataedc, 'id');
        //dd($dataedc);
        //$carinocounter =  Counter::find($dataedc->id)->edcs;
        return DataTables::of($dataedc)
        ->addColumn('action','<div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
            <a href="edc/{{$id}}" class="edcshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
            <a href="#" class="editedc dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
            <a href="#" class="deleteedc dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
            </div></div>')
        ->addColumn('checkbox', '<input type="checkbox" name="edccheckbox[]" class="edccheckbox" value="{{$counter_id}}" />')
        ->addColumn('nocounter', '<input type="checkbox" name="edccheckbox[]" class="edccheckbox" value="{{$counter_id}}" />')
        ->rawColumns(['action','checkbox','nocounter'])
        ->make(true);

    }
    public function index(Request $request)
    {
        $datacounter = Counter::latest()->orderBy('NoCounter','asc')->get();
        return view('edc.edcdatatable',compact('datacounter'));
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
            'NoCounter' => $request->selectnocounter,
            'Connection' => $request->connection,
            'SIMCard' => $request->simcard,
            'TypeEDC' => $request->typeedc,
            'Status' => $request->statusedc
        );

        Edc::updateOrCreate(['id'=>$request->edcid],$form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edc  $Edc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $data = Edc::findOrFail($id);
        return view('edc.edcprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
      *
     * @param  \App\Edc  $Edc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Edc::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edc  $Edc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edc $Edc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edc  $Edc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Edc::findOrFail($id);
        $data->delete();
    }
    public function moredelete(Request $request)
    {   
        $idarray = $request->input('id');
        $edc = Edc::whereIn('id',$idarray)->delete();
    }
}
