<?php

namespace App\Http\Controllers;

use App\ScheduleModel;
use App\CashierModel;
use App\WorkingHourModel;
use DataTables;
use Alert;
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
        
            $data = ScheduleModel::latest()->get();
            return DataTables::of($data)
            ->addColumn('action',
                '<div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a href="#" class="scheduleshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
                <a href="#" class="scheduleedit dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
                <a href="#" class="scheduledelete dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
                </div></div>')
            ->addColumn('checkbox', '<input type="checkbox" name="schedulecheckbox[]" class="poscheckbox" value="{{$id}}" />')
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

        $date[$a] = $request->day+$a;
        for($a=1;$a<7;$a++)
        {
        $date[$a] = $request->day+$a;
        $newdate[$a]=date("Y-m-d",strtotime($date[$a]));
        }
        dd($date);
        
        
        
        // $form_data = array(
        //     'Employee' => $request->emp,
        //     'FullName' => $request->name,
        //     'Date' => $newdate,
        //     'StartWork' => $request->startwork,
        //     'EndWork' => $request->endwork,
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
