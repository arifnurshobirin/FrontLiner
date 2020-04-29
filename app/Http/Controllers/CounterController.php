<?php

namespace App\Http\Controllers;

use App\CounterModel;
use DataTables;
use Illuminate\Http\Request;

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
            ->addColumn('action', function($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'" class="showcounter btn btn-warning waves-effect" data-type="with-custom-icon"><i class="fas fa-desktop"></i> Show</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="counteredit btn btn-primary waves-effect"><i class="fas fa-edit"></i> Edit</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="counterdelete btn btn-danger waves-effect js-sweetalert" data-type="cancel"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
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

        CounterModel::updateOrCreate($form_data);

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
}
