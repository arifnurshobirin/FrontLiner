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
        $id = IdGenerator::generate(['table' => 'cashiertable', 'length' => 6, 'prefix' =>date('ym')]);
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
        //
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
