<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\{Consolidate,Cashier,Counter,Banknote,Coin};
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
        $datacashier = Cashier::orderBy('Employee','asc')->get();
        $datacounter = Counter::orderBy('NoCounter','asc')->get();
        $timenow = now()->locale('id_ID')->format('H:i');
        $id = IdGenerator::generate(['table' => 'consolidates', 'field'=>'NoDeposit', 'length' => 6, 'prefix' =>date('ym')]);
        return view('daily.deposit',compact('datacashier','datacounter','timenow','id'));
    }

    public function banana()
    {
        $datacashier = Cashier::orderBy('Employee','asc')->get();
        $datacounter = Counter::orderBy('NoCounter','asc')->get();
        $timenow = now()->locale('id_ID')->format('H:i');
        $id = IdGenerator::generate(['table' => 'consolidates', 'field'=>'NoDeposit', 'length' => 6, 'prefix' =>date('ym')]);
        return view('daily.deposit',compact('datacashier','datacounter','timenow','id'));
    }

    public function datatable()
    {
        $dataconsolidate = Consolidate::with('cashier','counter')->latest()->get();
            
        return DataTables::of($dataconsolidate)
        ->addColumn('action','<div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> </button>
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
        
        $banknoteform = array(
            'id' => $request->inputno,
            'seratusribu' => $number[0],
            'limapuluhribu' => $number[1],
            'duapuluhribu' => $number[2],
            'sepuluhribu' => $number[3],
            'limaribu' => $number[4],
            'duaribu' => $number[5],
            'seribu' => $number[6],
        );

        $coinform = array(
            'id' => $request->inputno,
            'seribu' => $number[7],
            'limaratus' => $number[8],
            'duaratus' => $number[9],
            'seratus' => $number[10],
            'limapuluh' => $number[11]
        );

        $consolidateform = array(
            'cashier_id' => $request->selectemp,
            'counter_id' => $request->selectcounter,
            'banknote_id' => $request->inputno,
            'coin_id' => $request->inputno,
            'NoDeposit' => $request->inputno,
            'Date' => $datetime->toDateString(),
            'Time' => $datetime->toTimeString(),
            'DepositType' => $request->selecttype,
            'Amount' => $request->inputtotalint
        );


        Banknote::updateOrCreate(['id'=>$request->iddeposit],$banknoteform);
        Coin::updateOrCreate(['id'=>$request->iddeposit],$coinform);
        Consolidate::updateOrCreate(['id'=>$request->iddeposit],$consolidateform);
        // dd("hai");
        Alert::success('Success Title', 'Success Message');
        return redirect('admin/deposit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consolidate  $consolidate
     * @return \Illuminate\Http\Response
     */
    public function show(Consolidate $consolidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consolidate  $consolidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Consolidate::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consolidate  $consolidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consolidate $consolidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consolidate  $consolidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consolidate $consolidate)
    {
        
        
    }
}
