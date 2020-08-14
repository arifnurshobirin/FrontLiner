<?php

namespace App\Http\Controllers;

use App\ManagementModel;
use DataTables;
use Illuminate\Http\Request;
use Validator;
Use Alert;
use Yajra\Datatables\Html\Builder;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable(Request $request)
    {
        $data = ManagementModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action',
                '<div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a href="#" class="managementshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
                <a href="#" class="managementedit dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
                <a href="#" class="managementdelete dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
                </div></div>')
            ->addColumn('checkbox', '<input type="checkbox" name="managementcheckbox[]" class="managementcheckbox" value="{{$id}}" />')
            ->rawColumns(['checkbox','action'])
            ->make(true);
    }
    public function index(Request $request)
    {
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
    public function moredelete(Request $request)
    {   
        $idarray = $request->input('id');
        $management = ManagementModel::whereIn('id',$idarray)->delete();
    }
}
