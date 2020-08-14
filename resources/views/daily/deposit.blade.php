@extends('layouts.app') 
@section('title tab','Deposit Page')
@section('title page','Deposit Page')

@section('css')
<!-- Page CSS -->
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="urlpage">Deposit Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active urlpage">Deposit Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content" id="contentpage">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cash Deposit Report</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Deposit Form-->
            <form method="post" id="counterform" name="counterform">
                @csrf
                <input type="hidden" name="hiddeniddeposit" id="hiddeniddeposit">

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">No Deposit :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputname" name="inputname" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labelcashiercode" class="col-sm-2 col-form-label">Cashier Employee :</label>
                    <div class="form-line">
                        <select class="custom-select" id="selectemp" name="selectemp" onclick="inputname()">
                            <option value="">-- Please select --</option>
                            @foreach($data as $datadeposit)
                            <option value="{{$datadeposit->Employee}}">{{$datadeposit->Employee}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeltype" class="col-sm-2 col-form-label">Deposit Type:</label>
                    <div class="form-line">
                        <select class="custom-select" id="selecttype" name="selecttype">
                            <option value="">-- Please select --</option>
                            <option value="Active">MDS</option>
                            <option value="Inactive">CVS</option>
                            <option value="Normal">OP</option>
                            <option value="Broken">SC</option>
                            <option value="Broken">TH</option>
                            <option value="Broken">Billpayment</option>
                            <option value="Queueing">Warung</option>
                            <option value="Broken">Simpatindo</option>
                            <option value="Broken">Antum</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">Date :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputdate" name="inputdate"
                            placeholder="Enter Date">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">Time :</label>
                    <div class="form-line">
                        <input type="time" class="form-control inputtime" id="inputtime" name="inputtime"
                            placeholder="Enter Time">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">Cashier Name :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputname" name="inputname"
                            placeholder="Cashier Name" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">Counter Number :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputcounter" name="inputcounter"
                            placeholder="Enter Counter Number">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="buttonsave" id="buttonsave"
                    value="create">Save</button>
            </form>


            <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                id="CodeShiftDatatable">
                <thead>
                    <tr>
                        <th>Currency Type</th>
                        <th>Denomination</th>
                        <th>Number Of Unit</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 100.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(1)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 50.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(2)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 20.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(3)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 10.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(4)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 5.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(4)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 2.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(5)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control"
                                value="Banknote" readonly /></td>
                        <td>Rp. 1.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(6)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin"
                                readonly /></td>
                        <td>Rp. 1.000</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(7)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin"
                                readonly /></td>
                        <td>Rp. 500</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(8)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin"
                                readonly /></td>
                        <td>Rp. 200</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(9)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin"
                                readonly /></td>
                        <td>Rp. 100</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(10)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="inputbanknote" id="inputbanknote" class="form-control" value="Coin"
                                readonly /></td>
                        <td>Rp. 50</td>
                        <td><input type="text" name="inputunit" id="inputunit" class="form-control" /></td>
                        <td><input type="text" name="autoamount" id="autoamount" class="form-control"
                                onclick="autoamount(11)" readonly /></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                        class="fas fa-wrench"></i> Option</button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                        onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                        onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                    <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                            class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Currency Type</th>
                        <th>Denomination</th>
                        <th>Number Of Unit</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

            <div class="card-footer">
                Project Website Cashier Carrefour Taman Palem
            </div>
        </div>
        <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('javascript')
<!-- page script -->
<script>
    $(".preloader").fadeOut("slow");
function inputname(){
    var datajs = {!! json_encode($data->toArray()) !!};
    emp = $('#selectemp').val();
    // if(shift==datajs[b]['CodeShift']){
    //             timework = datajs[b]['WorkingHour'];
    //             shiftstart = datajs[b]['StartShift'];
    //             shiftend = datajs[b]['EndShift'];
    //             shift=shiftstart.concat(' - ',shiftend);
    //             break;
    //         }
    //         else if(shift=="OFF"){
    //             shift="OFF Work";
    //         }
}
  
    $(document).ready(function() {

        $('#inputdate').datepicker({
            todayBtn:'linked',
            todayHighlight:'true',
            calendarWeeks:'true',
            format:'dd MM yyyy',
            autoclose:true
        });

    });
</script>
@endsection