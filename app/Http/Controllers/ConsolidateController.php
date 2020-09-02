<?php

namespace App\Http\Controllers;

use App\{ConsolidateModel, CashierModel, CounterModel};
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
Use Alert;
use Illuminate\Support\Carbon;

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
        //
    }

    public function deposit()
    {
        $datacashier = CashierModel::latest()->orderBy('Employee','asc')->get();
        $datacounter = CounterModel::latest()->orderBy('NoCounter','asc')->get();
        $timenow = now()->locale('id_ID')->format('H:i');
        $id = IdGenerator::generate(['table' => 'consolidatetable', 'length' => 6, 'prefix' =>date('ym')]);
        return view('daily.deposit',compact('datacashier','datacounter','timenow','id'));
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
            'Coin100' => $number[1],
            'Coin50' => $number[1],
            'Amount' => $request->inputtotal

        );

        ConsolidateModel::updateOrCreate(['id'=>$request->iddeposit],$form_data);
        return response()->json(['success' => 'Data Added successfully.']);
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
    public function edit(ConsolidateModel $consolidateModel)
    {
        //
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
        //
    }
}
