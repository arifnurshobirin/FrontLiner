<?php

namespace App\Http\Controllers;

use App\ManagementModel;
use DataTables;
use Illuminate\Http\Request;
Use Alert;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        return view('management.managementdatatable');
    }
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = ManagementModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'" class="managementshow btn btn-warning waves-effect"><i class="fas fa-desktop"></i> Show</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="managementedit btn btn-primary waves-effect"><i class="fas fa-edit"></i>  Edit</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="managementdelete btn btn-danger waves-effect js-sweetalert"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
        return view('management.managementdatatable');
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
        if($request->hasFile("image"))
        {
        $file= $request->file("image");
        $imagename =$file->getClientOriginalName();
        $file->move(public_path().'/images/', $imagename);
        }
        else
        {
            $imagename ="avatar.png";
        }

        $form_data = array(
            'IdCard' => $request->idcard,
            'FullName' => $request->name,
            'Position' => $request->position,
            'Avatar' => $imagename
        );

        ManagementModel::updateOrCreate(['id'=>$request->managementid],$form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManagementModel  $managementModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ManagementModel::findOrFail($id);
        return view('management.managementprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManagementModel  $managementModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ManagementModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManagementModel  $managementModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManagementModel $managementModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManagementModel  $managementModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ManagementModel::findOrFail($id);
        $data->delete();
    }
}
