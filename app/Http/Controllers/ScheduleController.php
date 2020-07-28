<?php

namespace App\Http\Controllers;

use App\ScheduleModel;
use App\CashierModel;
use App\WorkingHourModel;
use DataTables;
use Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return view('schedule.scheduledatatable');
        // "'.$data->id.'"
    }
    
    public function index(Request $request)
    {
        $data = DB::table('scheduletable')
            ->select('scheduletable.id','scheduletable.Employee','scheduletable.FullName','scheduletable.Date','scheduletable.CodeShift',
                    'workinghourtable.id as idWH','workinghourtable.StartShift', 'workinghourtable.EndShift','workinghourtable.WorkingHour')
            ->leftJoin('workinghourtable', 'scheduletable.CodeShift', '=', 'workinghourtable.CodeShift')->orderBy('scheduletable.Employee','asc')
            ->get();
            //$data = ScheduleModel::latest()->get();
        return DataTables::of($data)
            ->addColumn('attendance',
                '<button type="button" class="btn btn-primary"><i class="fas fa-wrench"></i> Masuk</button>')
            ->addColumn('activity', '<input type="text" name="activity{{$id}}" id="activity{{$id}}" class="form-control" />')
            ->addColumn('shift', '<label for="shift">{{$StartShift}} - {{$EndShift}}</label>')
            ->rawColumns(['shift','activity','attendance'])
            ->make(true);


    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $dataschedule = ScheduleModel::latest()->get();
         // $datacashier = CashierModel::latest()->get();
        $dataworkinghour = WorkingHourModel::all();
        return view('schedule.schedulecreate',compact('dataworkinghour'));
    }

    public function datatablecreate()
    {
            // $dataworkinghour = WorkingHourModel::all();
            $data = CashierModel::where('Status','Active')->get();
            return DataTables::of($data)
            ->addColumn('cashier', '{{$Employee}} {{$FullName}}')
            ->addColumn('monday', '<input type="text" name="monshift{{$id}}" id="monshift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})"/>')
            ->addColumn('tuesday', '<input type="text" name="tueshift{{$id}}" id="tueshift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})" />')
            ->addColumn('wednesday', '<input type="text" name="wedshift{{$id}}" id="wedshift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})" />')
            ->addColumn('thursday', '<input type="text" name="thurshift{{$id}}" id="thurshift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})" />')
            ->addColumn('friday', '<input type="text" name="frishift{{$id}}" id="frishift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})" />')
            ->addColumn('saturday', '<input type="text" name="saturshift{{$id}}" id="saturshift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})" />')
            ->addColumn('sunday', '<input type="text" name="sunshift{{$id}}" id="sunshift{{$id}}" class="form-control input-uppercase" oninput="shifthour({{$id}})" />')
            ->addColumn('action',
                '<div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a class="schedulesave dropdown-item" id="{{$id}}" onclick="freezeschedule({{$id}})"><i class="fas fa-desktop"></i> Save</a>
                <a class="scheduleedit dropdown-item" id="{{$id}}" onclick="editschedule({{$id}})"><i class="fas fa-edit"></i> Edit</a>
                <a class="scheduledelete dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
                </div></div>')
            ->rawColumns(['monday','tuesday','wednesday','thursday','friday','saturday','sunday','action'])
            ->make(true);

    }

    // public function create(Request $request)
    // {
    
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrayday = ['monshift','tueshift','wedshift','thurshift','frishift','saturshift','sunshift'];
        for($a=0;$a<7;$a++)
        {
            $fromdatedb = $request->fromdate;
            $startdate = Carbon::parse($fromdatedb);
            if($a==0){
                $date[$a] = $startdate;
            }
            else{
                $date[$a] =  $startdate->add($a, 'day');
            }
        }
        dd($date[6]);


        //$date[$a]= $newnextdate->isoFormat('YYYY-MM-DD');

        // for($a=1;$a<7;$a++)
        // {
        // $date[$a] = $request->day+$a;
        // $newdate[$a]=date("Y-m-d",strtotime($date[$a]));
        // }
        
        
        
        // $form_data = array(
        //     'Employee' => $emp,
        //     'FullName' => $name,
        //     'Date' => $date,
        //     'CodeShift' => $codeshift
        // );

        // ScheduleModel::updateOrCreate($form_data);

        // return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ScheduleModel::findOrFail($id);
        return view('schedule.scheduleprofile',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ScheduleModel::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduleModel $scheduleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ScheduleModel  $scheduleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ScheduleModel::findOrFail($id);
        $data->delete();
    }
    public function destroydatatable    ($id)
    {
        $data = ScheduleModel::findOrFail($id);
        $data->delete();
    }
    public function day($monday)
    {
        $data = ScheduleModel::findOrFail($id);
        $data->delete();
    }
}
