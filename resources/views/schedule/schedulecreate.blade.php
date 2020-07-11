<!-- Add Schedule Table -->
<div class="row">
    <div class="preloader">
        <div class="loading">
            <div class="spinner-grow text-danger" role="status"></div>
            <div class="spinner-grow text-danger" role="status"></div>
            <div class="spinner-grow text-danger" role="status"><span class="sr-only">Loading...</span></div>
            <strong>Loading...</strong>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Schedule</h3>
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
            <form method="post" id="scheduleform" name="scheduleform">
            @csrf
            <div class="card-body">
                <!-- Date range -->
                <div class="form-group">
                    <label>Date range:</label>
                    <div class="row">
                        <div class="col-md-4">
                        <input type="text" name="fromdate" id="fromdate" class="form-control inputdaterange" placeholder="From Date" readonly />
                        </div>
                        <div class="col-md-4 todate2">
                        <input type="text" name="todate" id="todate" class="form-control todate" placeholder="To Date" readonly />
                        </div>
                        <div class="col-md-4">
                        <button type="button" name="scheduleapply" id="scheduleapply" class="btn btn-primary">Apply</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.form group -->
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="ScheduleAddDatatable">
                        <thead>
                            <tr>
                                <th><button type="submit" name="saveallschedule" id="saveallschedule" class="btn btn-success"  value="create">
                                Save Schedule
                                </button></th>
                                <th>Cashier</th>
                                <th><input type="text" name="day1" id="day1" class="form-control" value="Monday" readonly/></th>
                                <th><input type="text" name="day2" id="day2" class="form-control" value="Tuesday" readonly/></th>
                                <th><input type="text" name="day3" id="day3" class="form-control" value="Wednesday" readonly/></th>
                                <th><input type="text" name="day4" id="day4" class="form-control" value="Thursday" readonly/></th>
                                <th><input type="text" name="day5" id="day5" class="form-control" value="Friday" readonly/></th>
                                <th><input type="text" name="day6" id="day6" class="form-control" value="Saturday" readonly/></th>
                                <th><input type="text" name="day7" id="day7" class="form-control" value="Sunday" readonly/></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Detail</th>
                                <th>Cashier</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            </form>
            <!-- /.card-body -->
            <div class="card-footer">
                Project Website Cashier Carrefour Taman Palem
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<!-- Create Table -->
<div class="modal fade" id="modaladdschedule" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form method="post" id="scheduleform2" name="scheduleform2" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="scheduleid" id="scheduleid">
                    <label for="emp">Employee</label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-id-badge"></i></span>
                                </div>
                                <input type="text" id="emp" name="emp" class="form-control" data-inputmask='"mask": "(999)"' data-mask required>
                            </div>    
                        </div>
                    <label for="fullname">Full Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter your Full Name" required>
                                </div>
                            </div>
                            <label for="birth">Date Work</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker1" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="date" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <label for="birth">Start Work</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker2" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="start" name="start" class="form-control datetimepicker-input" data-target="#datetimepicker2" paceholder="Chosee Start Work">
                                </div>
                            </div>
                            <label for="birth">End Work</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker3" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="end" name="end" class="form-control datetimepicker-input" data-target="#datetimepicker3" paceholder="Chosee End Work">
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="schedulesave2" name="schedulesave2" value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<!-- Create Table -->
<div class="modal fade" id="modalcodeshift" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalheadingcodeshift"></h4>
            </div>
            <div class="modal-body">
                <button type="button" name="createcodeshift" id="createcodeshift" class="btn btn-success">Create Code Shift</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="CodeShiftDatatable">
                    <thead>
                        <tr>
                            <th>Code Shift</th>
                            <th>Start Shift</th>
                            <th>End Shift</th>
                            <th>Working Hour</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataworkinghour as $list)        
                        <tr>
                            <td><input type="text" name="code{{$list->id}}" id="code{{$list->id}}" class="form-control input-uppercase" value="{{$list->CodeShift}}" readonly/></td>
                            <td><input type="text" name="start{{$list->id}}" id="start{{$list->id}}" class="form-control input-uppercase" value="{{$list->StartShift}}" readonly/></td>
                            <td><input type="text" name="end{{$list->id}}" id="end{{$list->id}}" class="form-control input-uppercase" value="{{$list->EndShift}}" readonly/></td>
                            <td><div class="input-group">
                                    <input type="text" name="hour{{$list->id}}" id="hour{{$list->id}}" class="form-control input-uppercase" value="{{$list->WorkingHour}}" readonly/>
                                    <div class="input-group-prepend"><span class="input-group-text">Hour</span> </div>
                                </div>
                            </td>
                            <td><div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="scheduleedit dropdown-item" id="{{$list->id}}" onclick="editshift({{$list->id}})"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="schedulesave dropdown-item" id="{{$list->id}}" onclick="freezeshift({{$list->id}})"><i class="fas fa-desktop"></i> Save</a>
                                        <a class="scheduledelete dropdown-item" id="{{$list->id}}"><i class="fas fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Code Shift</th>
                            <th>Start Shift</th>
                            <th>End Shift</th>
                            <th>Working Hour</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>   
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<script>
var totaltimework=0;
var timework=0;
function format ( d ) {
    shifthour(d.id);
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td width="155px">Work Schedule :'+'</td>'+
            '<td id=childmon'+d.id+' width="75px"></td>'+
            '<td id=childtue'+d.id+' width="75px"></td>'+
            '<td id=childwed'+d.id+' width="93px"></td>'+
            '<td id=childthur'+d.id+' width="75px"></td>'+
            '<td id=childfri'+d.id+' width="75px"></td>'+
            '<td id=childsatur'+d.id+' width="75px"></td>'+
            '<td id=childsun'+d.id+' width="75px"></td>'+
        '</tr>'+
        '<tr>'+
            '<td>Working Hour:</td>'+
            '<td id=childhour'+d.id+'> Hour</td>'+
        '</tr>'+
    '</table>';
}
function shifthour(id){

    var datajs = {!! json_encode($dataworkinghour->toArray()) !!};
    var arrayday = ['monshift','tueshift','wedshift','thurshift','frishift','saturshift','sunshift'];
    var arrchild = ['childmon','childtue','childwed','childthur','childfri','childsatur','childsun'];
    for( a=0;a<7;a++)
    {
        joinday = arrayday[a].concat(id);
        joinchild = arrchild[a].concat(id);
        joinchildhour = 'childhour'.concat(id);
        shift = $('#'+joinday).val();
        shift = shift.toUpperCase(shift);
        timework = timework;
        for(b=0;b<22;b++)
        {
            if(shift==datajs[b]['CodeShift']){
                timework = datajs[b]['WorkingHour'];
                shiftstart = datajs[b]['StartShift'];
                shiftend = datajs[b]['EndShift'];
                shift=shiftstart.concat('-',shiftend);
                break;
            }
            else if(shift=="OFF"){
                shift="OFF Work";
            }
        }
        $('#'+joinchild).html(shift);
    }
    console.log('timework '+timework);
    totaltimework=totaltimework+timework;
    console.log('totaltimework '+totaltimework);
    timework=0;
    $('#'+joinchildhour).html(totaltimework);
}

function freezeschedule(id){

    var datajs = {!! json_encode($dataworkinghour->toArray()) !!};
    var totaltimework=0;
    var timework=0;
    var arrayday = ['monshift','tueshift','wedshift','thurshift','frishift','saturshift','sunshift']
    var arraychild = ['childmon','childtue','childwed','childthur','childfri','childsatur','childsun']
    for( a=0;a<7;a++)
    {
        joinday = arrayday[a].concat(id);
        joinchild = arraychild[a].concat(id);
        joinchildhour = 'childhour'.concat(id);

        $('#'+joinday).attr("readonly",true);
        document.getElementById(joinday).className = "form-control is-valid input-uppercase";
        shift = $('#'+joinday).val();
        shift = shift.toUpperCase(shift);
        for(b=0;b<22;b++)
        {
            if(shift==datajs[b]['CodeShift']){
                timework = datajs[b]['WorkingHour'];
                shiftstart = datajs[b]['StartShift'];
                shiftend = datajs[b]['EndShift'];
                shift=shiftstart.concat('-',shiftend);
            }
            else if(shift=="OFF"){
                shift="OFF Work";
            }
        }
        totaltimework=totaltimework+timework;
        $('#'+joinchild).html(shift);
        $('#'+joinchildhour).html(totaltimework);
    }
    
}
function freezeshift(id){
    var arrayshift = ['code','start','end','hour']
    for( a=0;a<4;a++)
    {
        joinshift = arrayshift[a].concat(id);
        
        $('#'+joinshift).attr("readonly",true);
        document.getElementById(joinshift).className = "form-control input-uppercase";
    }

}

function editschedule(id){
    var arrayday = ['monshift','tueshift','wedshift','thurshift','frishift','saturshift','sunshift']
    for( a=0;a<7;a++)
    {
        joinday = arrayday[a].concat(id);
        $('#'+joinday).removeAttr("readonly");
        document.getElementById(joinday).className = "form-control is-warning input-uppercase";
    }   
}

function editshift(id){
    var arrayshift = ['code','start','end','hour']
    for( a=0;a<4;a++)
    {
        joinshift = arrayshift[a].concat(id);
        
        $('#'+joinshift).removeAttr("readonly");
        document.getElementById(joinshift).className = "form-control is-warning input-uppercase";
    }
}

    $(document).ready(function() {
        var table = $('#ScheduleAddDatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: { url:"{{ route('schedule.datatablecreate') }}",},
        "order": [[ 1, "asc" ]],
        columns: [
            {
                "className":      'details-control',
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": '',
            },
            { data: 'cashier', name: 'cashier' },
            { data: 'monday', name: 'monday', orderable: false },
            { data: 'tuesday', name: 'tuesday', orderable: false },
            { data: 'wednesday', name: 'wednesday' , orderable: false},
            { data: 'thursday', name: 'thursday', orderable: false },
            { data: 'friday', name: 'friday', orderable: false },
            { data: 'saturday', name: 'saturday' , orderable: false},
            { data: 'sunday', name: 'sunday', orderable: false },
            { data: 'action', name: 'action', orderable: false,searchable: false}
            ],
            dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons:['pageLength',
                    
                        {
                            extend: 'collection',
                            text: 'Export',
                            className: 'btn btn-danger',
                            buttons:[ 'copy', 'csv', 'excel', 'pdf', 'print',
                                        {
                                            collectionTitle: 'Visibility control',
                                            extend: 'colvis',
                                            collectionLayout: 'two-column'
                                        }
                                    ]
                        },
                        {
                            text: '<i class="fas fa-plus"></i><span> Add Schedule</span>',
                            className: 'btn btn-success',
                            action: function ( e, dt, node, config ) {
                                $('#schedulesave').val("create-schedule");
                                $('#schedulesave').html('Save');
                                $('#scheduleid').val('');
                                $('#scheduleform').trigger("reset");
                                $('#modelHeading').html("Create New Schedule");
                                $('#modaladdschedule').modal('show');
                            }
                        },
                        {
                            text: '<i class="fas fa-calendar"></i><span> Code Shift</span>',
                            className: 'btn btn-info',
                            action: function ( e, dt, node, config ) {
                                $('#schedulesave').val("create-schedule");
                                $('#schedulesave').html('Save');
                                $('#scheduleid').val('');
                                $('#scheduleform').trigger("reset");
                                $('#modalheadingcodeshift').html("Daftar Shift Schedule");
                                $('#modalcodeshift').modal('show');
                            }
                        }
                    ]
        
        });

        // Add event listener for opening and closing details
        $('#ScheduleAddDatatable').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );
            
            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
            // $("").append("11.00=17.00");
            // addshift(id);
        });


        $('#scheduleform').on("submit",function (event) {
            console.log("ababa");
            event.preventDefault();
            $('#saveallschedule').html('Sending..');
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('schedule.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#scheduleform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#saveallschedule').html('Save Schedule');
                    table.draw();
                    swal.fire("Good job!", "You success update Schedule!", "success");
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#schedulesave').html('Save Changes');
                    alert('Status: ' + data);
                }
            });
        });

        
        var scheduleid;
            $(document).on('click', '.scheduledelete', function(){
            scheduleid = $(this).attr('id');
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this Schedule file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                url:"scheduledatatable/destroy/"+scheduleid,
                success:function(data){
                    swal.fire("Deleted!", "Your Schedule file has been deleted.", "success")
                    $('#ScheduleDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal.fire("Cancelled", "Your Schedule file is safe :)", "error");
                }
            });
        });


        $('#datetimepicker1').datetimepicker({
                    format: 'L'
                });
        $('#datetimepicker2').datetimepicker({
                    format: 'LT'
                });
        $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
        $('#timepicker').datetimepicker({
                    format: 'LT'
                });
        $('[data-mask]').inputmask()

        //Date range picker
        $('.inputdaterange').datepicker({
            todayBtn:'linked',
            todayHighlight:'true',
            calendarWeeks:'true',
            format:'MM dd yyyy',
            autoclose:true
        });

        $('.datepicker').datepicker({
            format: 'dddd DD MMMM YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
        });

        $(document).on('click', '#scheduleapply', function () {
            var startdate = $('#fromdate').val();
            var day;

            for( i=1;i<=7;i++)
            {
                if(i==1){
                    day = new Date(startdate);
                }
                else{
                    day = new Date(day);
                    day.setDate(day.getDate()+1);
                }
                formatday = moment(day).format('dddd DD MMMM YYYY');    
                $('#day'+i).val(formatday);
            }
            var enddate = moment(day).format('MMMM DD YYYY');
            $('#todate').val(enddate);

        });

    });
    $(".preloader").fadeOut("slow");
</script>
