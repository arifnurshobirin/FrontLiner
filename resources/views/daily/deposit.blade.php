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
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-clipboard-check"></i> Cash Deposit Report</h3>
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
            <form method="post" id="depositform" name="depositform" action="{{ route('consolidate.store') }}">
                @csrf
                <input type="hidden" name="iddeposit" id="iddeposit">

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">No Deposit :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputno" name="inputno" value="{{ $id }}"readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labelcashiercode" class="col-sm-2 col-form-label">Cashier Employee :</label>
                    <div class="form-line">
                        <select class="custom-select" id="selectemp" name="selectemp" onchange="setFullName();">
                            @foreach($datacashier as $cashier)
                            <option value="{{$cashier->Employee}}">{{$cashier->Employee}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeltype" class="col-sm-2 col-form-label">Deposit Type:</label>
                    <div class="form-line">
                        <select class="custom-select" id="selecttype" name="selecttype">
                            <option value="MDS">MDS</option>
                            <option value="CVS">CVS</option>
                            <option value="OP">OP</option>
                            <option value="SC">SC</option>
                            <option value="TH">TH</option>
                            <option value="Billpayment">Billpayment</option>
                            <option value="Warung">Warung</option>
                            <option value="Simpatindo">Simpatindo</option>
                            <option value="Antum">Antum</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeldate" class="col-sm-2 col-form-label">Date Time :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputdatetime" name="inputdatetime"
                            placeholder="Enter Date Time" readonly>
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
                        <select class="custom-select" id="selectcounter" name="selectcounter">
                            @foreach($datacounter as $counter)
                            <option value="{{$counter->TypeCounter}}">{{$counter->TypeCounter}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="labeltotal" class="col-sm-2 col-form-label">Total Amount :</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="inputtotal" name="inputtotal"
                            placeholder="Rp. " readonly>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="depositsave" id="depositsave"
                    value="create">Save</button>
            
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
                            <td rowspan="7">Banknote</td>
                            <td>Rp. 100.000</td>
                            <td><input type="text" name="inputunit0" id="inputunit0" class="form-control" oninput="autoamount(0)"/></td>
                            <td><input type="text" name="amount0" id="amount0" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(0)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(0)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 50.000</td>
                            <td><input type="text" name="inputunit1" id="inputunit1" class="form-control" oninput="autoamount(1)"/></td>
                            <td><input type="text" name="amount1" id="amount1" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(1)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(1)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 20.000</td>
                            <td><input type="text" name="inputunit2" id="inputunit2" class="form-control" oninput="autoamount(2)"/></td>
                            <td><input type="text" name="amount2" id="amount2" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(2)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(2)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 10.000</td>
                            <td><input type="text" name="inputunit3" id="inputunit3" class="form-control" oninput="autoamount(3)"/></td>
                            <td><input type="text" name="amount3" id="amount3" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(3)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(3)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 5.000</td>
                            <td><input type="text" name="inputunit4" id="inputunit4" class="form-control" oninput="autoamount(4)"/></td>
                            <td><input type="text" name="amount4" id="amount4" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(4)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(4)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 2.000</td>
                            <td><input type="text" name="inputunit5" id="inputunit5" class="form-control" oninput="autoamount(5)"/></td>
                            <td><input type="text" name="amount5" id="amount5" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(5)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(5)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 1.000</td>
                            <td><input type="text" name="inputunit6" id="inputunit6" class="form-control" oninput="autoamount(6)"/></td>
                            <td><input type="text" name="amount6" id="amount6" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(6)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(6)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="5">Coin</td>
                            <td>Rp. 1.000</td>
                            <td><input type="text" name="inputunit7" id="inputunit7" class="form-control" oninput="autoamount(7)"/></td>
                            <td><input type="text" name="amount7" id="amount7" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(7)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(7)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 500</td>
                            <td><input type="text" name="inputunit8" id="inputunit8" class="form-control" oninput="autoamount(8)"/></td>
                            <td><input type="text" name="amount8" id="amount8" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(8)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(8)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 200</td>
                            <td><input type="text" name="inputunit9" id="inputunit9" class="form-control" oninput="autoamount(9)"/></td>
                            <td><input type="text" name="amount9" id="amount9" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(9)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(9)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 100</td>
                            <td><input type="text" name="inputunit10" id="inputunit10" class="form-control" oninput="autoamount(10)"/></td>
                            <td><input type="text" name="amount10" id="amount10" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(10)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(10)"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="dropdown-item" name="deletedeposit" id="deletedeposit"><i
                                                class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Rp. 50</td>
                            <td><input type="text" name="inputunit11" id="inputunit11" class="form-control" oninput="autoamount(11)"/></td>
                            <td><input type="text" name="amount11" id="amount11" class="form-control" value= "@currency(0)" readonly /></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i
                                            class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" name="editdeposit" id="editdeposit"
                                            onclick="editshift(11)"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" name="savedeposit" id="savedeposit"
                                            onclick="freezeshift(11)"><i class="fas fa-desktop"></i> Save</a>
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
            </form>    

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
    var datacashierjs = {!! json_encode($datacashier) !!};
    setFullName();
    var amount=[0,0,0,0,0,0,0,0,0,0,0,0];
    const formatRupiah = (rupiah) => { return new Intl.NumberFormat('id-ID',{ style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(rupiah); }

    function autoamount(nilai){
        var denom = [100000,50000,20000,10000,5000,2000,1000,1000,500,200,100,50];
        var total = 0;  
        var unit = $('#inputunit'+nilai).val();

        for(a=0;a<denom.length;a++){

            if (a==nilai) {
                amount[a] = unit*denom[a];
            }

            $('#amount'+nilai).val(formatRupiah( amount[nilai]));
        }

        for(b=0;b<amount.length;b++){
        total += amount[b];
        $('#inputtotal').val(formatRupiah(total));
        }

    }
    function setFullName(){
        var selectemp = $('#selectemp').val();
        for(i=0;i<datacashierjs.length;i++){
            if(selectemp == datacashierjs[i]['Employee']){
                $('#inputname').val(datacashierjs[i]['FullName']);
                break;
            }
        }
    }
    $(document).ready(function() {
        var currentdate = new Date();
        var hr = currentdate.getHours();
        var min = currentdate.getMinutes();
        // var now = currentdate.toLocaleTimeString();
        var now = currentdate.toLocaleString();

        $('#inputdatetime').val(now);

        // $('#inputdate').datepicker({
        //     todayBtn:'linked',
        //     todayHighlight:'true',
        //     calendarWeeks:'true',
        //     format:'dd MM yyyy',
        //     autoclose:true
        // });
        
        // $('#selectemp').change(function(){
        //     var selectemp = $('#selectemp').val();
        //     for(i=0;i<datacashierjs.length;i++){
        //         if(selectemp == datacashierjs[i]['Employee']){
        //             $('#inputname').val(datacashierjs[i]['FullName']);
        //             break;
        //         }
        //     }
        // });
  


    });
</script>
@endsection