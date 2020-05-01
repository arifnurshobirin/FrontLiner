<?php

namespace App\Http\Controllers;

use App\POSModel;
use DataTables;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        return view('pos.POSdatatable');
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = POSModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'" class="showpos btn btn-warning waves-effect" data-type="with-custom-icon"><i class="fas fa-desktop"></i> Show</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="posedit btn btn-primary waves-effect"><i class="fas fa-edit"></i> Edit</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="posdelete btn btn-danger waves-effect js-sweetalert" data-type="cancel"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);


        }
        return view('pos.POSdatatable');
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

        POSModel::updateOrCreate($form_data);

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
        return view('pos.POSprofile',compact('data'));
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
}
