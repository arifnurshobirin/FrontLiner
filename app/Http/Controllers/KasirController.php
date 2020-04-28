<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\KasirModel;
class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        return view('kasir.kasirdatatable');
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = KasirModel::latest()->get();
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
        return view('kasir.kasirdatatable');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KasirModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KasirModel::findOrFail($id);
        $data->delete();
    }
}
