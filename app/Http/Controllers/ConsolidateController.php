<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\{ConsolidateModel, CashierModel, CounterModel};
use DataTables;

class ConsolidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show',]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daily.consolidatedatatable');
    }

    public function deposit()
    {
        $datacashier = CashierModel::latest()->orderBy('Employee','asc')->get();
        $datacounter = CounterModel::latest()->orderBy('NoCounter','asc')->get();
        $timenow = now()->locale('id_ID')->format('H:i');
        $id = IdGenerator::generate(['table' => 'consolidatetable', 'field'=>'NoDeposit', 'length' => 6, 'prefix' =>date('ym')]);
        return view('daily.deposit',compact('datacashier','datacounter','timenow','id'));
    }

    public function banana()
    {
        $datacashier = CashierModel::latest()->orderBy('Employee','asc')->get();
        $datacounter = CounterModel::latest()->orderBy('NoCounter','asc')->get();
        $timenow = now()->locale('id_ID')->format('H:i');
        $id = IdGenerator::generate(['table' => 'consolidatetable', 'field'=>'NoDeposit', 'length' => 6, 'prefix' =>date('ym')]);
        return view('daily.deposit',compact('datacashier','datacounter','timenow','id'));
    }

    public function datatable(Request $request)
    {
        $data = ConsolidateModel::latest()->get();
        return DataTables::of($data)
        ->addColumn('action','<div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
            <a href="#" class="edcshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
            <a href="#" class="editedc dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
            <a href="#" class="deleteedc dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
            </div></div>')
        ->addColumn('checkbox', '<input type="checkbox" name="edccheckbox[]" class="edccheckbox" value="{{$id}}" />')
        ->rawColumns(['action','checkbox'])
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
        $datetime= Carbon::now();
        $arrayjoin = [  $request->amount0,
                        $request->amount1,
                        $request->amount2,$request->amount3,$request->amount4,$request->amount5,$request->amount6,
                        $request->amount7,$request->amount8,$request->amount9,$request->amount10,$request->amount11];
        for ($a=0; $a < 12; $a++) { 
            $alphabet = preg_replace("/[^0-9]/", "",  $arrayjoin[$a]);
            $number[$a] = (int) $alphabet;
            var_dump($number);
        }
        
        $form_data = array(
            'NoDeposit' => $request->inputno,
            'Date' => $datetime->toDateString(),
            'Time' => $datetime->toTimeString(),
            'Employee' => $request->selectemp,
            'FullName' => $request->inputname,
            'DepositType' => $request->selecttype,
            'Counter' => $request->selectcounter,
            'Banknote100000' => $number[0],
            'Banknote50000' => $number[1],
            'Banknote20000' => $number[2],
            'Banknote10000' => $number[3],
            'Banknote5000' => $number[4],
            'Banknote2000' => $number[5],
            'Banknote1000' => $number[6],
            'Coin10000' => $number[7],
            'Coin500' => $number[8],
            'Coin200' => $number[9],
            'Coin100' => $number[10],
            'Coin50' => $number[11],
            'Amount' => $request->inputtotal

        );
        ConsolidateModel::updateOrCreate(['id'=>$request->iddeposit],$form_data);
        // dd("hai");
        Alert::success('Success Title', 'Success Message');
        return redirect('admin/deposit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsolidateModel  $consolidateModel
     * @return \Illuminate\Http\Response
     */
    public function show(ConsolidateModel $consolidateModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsolidateModel  $consolidateModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ConsolidateModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsolidateModel  $consolidateModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsolidateModel $consolidateModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsolidateModel  $consolidateModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsolidateModel $consolidateModel)
    {
        
        
    }
}
