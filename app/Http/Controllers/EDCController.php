<?php

namespace App\Http\Controllers;

use App\EDCModel;
use DataTables;
use Illuminate\Http\Request;
use Validator;

class EDCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function table()
    {
        return view('edc.EDCdatatable');
    }
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = EDCModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'" class="showedc btn btn-warning waves-effect" data-type="with-custom-icon"><i class="material-icons">airplay</i> Show</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="editedc btn btn-primary waves-effect"><i class="material-icons">border_color</i> Edit</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="deleteedc btn btn-danger waves-effect js-sweetalert" data-type="cancel"><i class="material-icons">delete</i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);


        }
        return view('edc.EDCdatatable');
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
            'NoTerminal' => $request->noterminal,
            'Connection' => $request->connection,
            'SIMCard' => $request->simcard,
            'TypeEDC' => $request->typeedc
        );

        EDCModel::updateOrCreate($form_data);

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
}
