<?php

namespace App\Http\Controllers;

use App\CashierModel;
use DataTables;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        return view('cashier.cashierdatatable');
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = CashierModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'" class="showcashier btn btn-warning waves-effect" data-type="with-custom-icon"><i class="fas fa-desktop"></i> Show</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="cashieredit btn btn-primary waves-effect"><i class="fas fa-edit"></i> Edit</button>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="cashierdelete btn btn-danger waves-effect js-sweetalert" data-type="cancel"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);

        }
        return view('cashier.cashierdatatable');
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
}
