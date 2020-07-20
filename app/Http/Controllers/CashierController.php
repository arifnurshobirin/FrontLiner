<?php

namespace App\Http\Controllers;

use App\CashierModel;
use DataTables;
use Illuminate\Http\Request;
use Validator;
Use Alert;
use Yajra\Datatables\Html\Builder;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return view('cashier.cashierdatatable');
    }

    public function index(Request $request)
    {
            $data = CashierModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action',
                '<div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a href="#" class="cashiershow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
                <a href="#" class="cashieredit dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
                <a href="#" class="cashierdelete dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
                </div></div>')
            ->addColumn('checkbox', '<input type="checkbox" name="cashiercheckbox[]" class="cashiercheckbox" value="{{$id}}" />')
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

        $birth = $request->birth;
        $join = $request->join;

        $newbirth=date("Y-m-d",strtotime($birth));
        $newjoin=date("Y-m-d",strtotime($join));

        $form_data = array(
            'Employee' => $request->emp,
            'FullName' => $request->name,
            'DateOfBirth' => $newbirth,
            'Address' => $request->address,
            'PhoneNumber' => $request->phone,
            'Position' => $request->position,
            'JoinDate' => $newjoin,
            'StatusCashier' => $request->statuscashier,
            'Avatar' => $imagename
        );

        CashierModel::updateOrCreate(['id'=>$request->cashierid],$form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CashierModel  $cashierModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CashierModel::findOrFail($id);
        return view('cashier.cashierprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CashierModel  $cashierModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CashierModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CashierModel  $cashierModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashierModel $cashierModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashierModel  $cashierModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CashierModel::findOrFail($id);
        $data->delete();
    }
    public function moredelete(Request $request)
    {   
        $idarray = $request->input('id');
        $pos = CashierModel::whereIn('id',$idarray)->delete();
    }
}
