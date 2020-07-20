<?php

namespace App\Http\Controllers;

use App\POSModel;
use DataTables;
use Illuminate\Http\Request;
use Validator;
Use Alert;
use Yajra\Datatables\Html\Builder;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return view('pos.posdatatable');
    }

    public function index(Request $request)
    {  
            $data = POSModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action',
                '<div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a href="#" class="posshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
                <a href="#" class="posedit dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
                <a href="#" class="posdelete dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
                </div></div>')
            ->addColumn('checkbox', '<input type="checkbox" name="poscheckbox[]" class="poscheckbox" value="{{$id}}" />')
            ->rawColumns(['checkbox','action'])
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
        $form_data = array(
            'NoPOS' => $request->nopos,
            'CPU' => $request->cpu,
            'Printer' => $request->printer,
            'Drawer' => $request->drawer,
            'Scanner' => $request->scanner,
            'Monitor' => $request->monitor
        );

        POSModel::updateOrCreate(['id'=>$request->posid],$form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\POSModel  $pOSModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = POSModel::findOrFail($id);
        return view('pos.posprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\POSModel  $pOSModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = POSModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\POSModel  $pOSModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, POSModel $pOSModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\POSModel  $pOSModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = POSModel::findOrFail($id);
        $data->delete();
    }
    public function moredelete(Request $request)
    {   
        $idarray = $request->input('id');
        $pos = POSModel::whereIn('id',$idarray)->delete();
    }
}
