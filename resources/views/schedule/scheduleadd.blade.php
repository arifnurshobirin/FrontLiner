<!-- Add Schedule Table -->
<div class="row">
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
                                <th><button type="button" name="posmoredelete" id="posmoredelete" class="btn btn-success">
                                <i class="fas fa-plus"></i><span></span>
                                </button></th>
                                <th>Cashier</th>
                                <th id="day1">Mon</th>
                                <th id="day2">Tues</th>
                                <th id="day3">Wednes</th>
                                <th id="day4">Thurs</th>
                                <th id="day5">Fri</th>
                                <th id="day6">Satur</th>
                                <th id="day7">Sun</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Detail</th>
                                <th>Cashier</th>
                                <th>Mon</th>
                                <th>Tues</th>
                                <th>Wednes</th>
                                <th>Thurs</th>
                                <th>Fri</th>
                                <th>Satur</th>
                                <th>Sun</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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
                <form method="post" id="scheduleform" name="scheduleform" enctype="multipart/form-data">
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
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="schedulesave" value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<!-- Create Table -->
<div class="modal fade" id="modalcodeshift" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalheadingcodeshift"></h4>
            </div>
            <div class="modal-body">
            @foreach($dataworkinghour as $list)
                    <div>
                    <label id="{{$list->id}}">{{$list->CodeShift}} : {{$list->StartShift}} - {{$list->EndShift}} ({{$list->WorkingHour}} Hour)</label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<script>
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
            '<td id=childhour>40 Hour</td>'+
        '</tr>'+
    '</table>';
}
function shifthour(id){

    var datajs = {!! json_encode($dataworkinghour->toArray()) !!};

    var arrshift = ['monshift','tueshift','wedshift','thurshift','frishift','saturshift','sunshift'];
    var arrchild = ['childmon','childtue','childwed','childthur','childfri','childsatur','childsun'];
    for( a=0;a<7;a++)
    {
        str1 = arrshift[a].concat(id);
        str2 = arrchild[a].concat(id);

        shift = $('#'+str1).val();
        shift = shift.toUpperCase(shift);
        for(b=0;b<22;b++)
        {
            if(shift==datajs[b]['CodeShift']){
                shiftstart = datajs[b]['StartShift'];
                shiftend = datajs[b]['EndShift'];
                shift=shiftstart.concat('-',shiftend);
            }
            else if(shift=="OFF"){
                shift="OFF Work";
            }
        }
        $('#'+str2).html(shift);
    }

}
function freezeschedule(id){

    var arrshift = ['monshift','tueshift','wedshift','thurshift','frishift','saturshift','sunshift']
    var arrchild = ['childmon','childtue','childwed','childthur','childfri','childsatur','childsun']
    for( a=0;a<7;a++)
    {
        str1 = arrshift[a].concat(id);
        str2 = arrchild[a].concat(id);

        $('#'+str1).attr("readonly",true);
        shift = $('#'+str1).val();
        shift = shift.toUpperCase(shift);
        for(b=0;b<22;b++)
        {
            if(shift==datajs[b]['CodeShift']){
                shiftstart = datajs[b]['StartShift'];
                shiftend = datajs[b]['EndShift'];
                shift=shiftstart.concat('-',shiftend);
            }
            else if(shift=="OFF"){
                shift="OFF Work";
            }
        }
        $('#'+str2).html(shift);
    }
    
}
function editschedule(id){
    $("#monshift"+id).removeAttr("readonly");
    $("#tueshift"+id).removeAttr("readonly");
    $("#wedshift"+id).removeAttr("readonly");
    $("#thurshift"+id).removeAttr("readonly");
    $("#frishift"+id).removeAttr("readonly");
    $("#saturshift"+id).removeAttr("readonly");
    $("#sunshift"+id).removeAttr("readonly");
}

    $(document).ready(function() {
        var table = $('#ScheduleAddDatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: { url:"{{ route('schedule.getBasicData') }}",},
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
            { data: 'monday', name: 'monday' },
            { data: 'tuesday', name: 'tuesday' },
            { data: 'wednesday', name: 'wednesday' },
            { data: 'thursday', name: 'thursday' },
            { data: 'friday', name: 'friday' },
            { data: 'saturday', name: 'saturday' },
            { data: 'sunday', name: 'sunday' },
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
            console.log('details');
            // addshift(id);
        });



        $(document).on('click', '.scheduleedit', function () {
            var scheduleid = $(this).attr('id');
            $.get("{{ route('schedule.index') }}" +'/' + scheduleid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data Schedule");
                $('#schedulesave').val("edit-schedule");
                $('#schedulesave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#scheduleid').val(data.id);
                $('#emp').val(data.Employee);
                $('#name').val(data.FullName);
                $('#birth').val(data.DateOfBirth);
                $('#address').val(data.Address);
                $('#phone').val(data.PhoneNumber);
                $('#position').val(data.Position);
                $('#join').val(data.JoinDate);
            })
        });

        // $(document).on('click', '.showschedule', function () {
        //     var id = $(this).attr('id');
        //         $('#contentpage').load('schedule'+'/'+id);
        // });


        $('.scheduleform2').on("submit",function (event) {
            event.preventDefault();
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
                    $('#schedulesave').html('Save');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#schedulesave').html('Save Changes');
                }
            });
        });

            var type;
            var schedule_id;
            $(document).on('click', '.js-sweetalert', function(){
            schedule_id = $(this).attr('id');
            var type = $(this).data('type');
            if (type === 'basic') {
                showBasicMessage();
            }
            else if (type === 'cancel') {
                showCancelMessage();
            }
        });


        function showCancelMessage() {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this edc file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: false,
                showLoaderOnConfirm: true
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                url:"schedule/destroy/"+schedule_id,
                success:function(data){
                    swal("Deleted!", "Your Schedule file has been deleted.", "success")
                    $('#ScheduleDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your Schedule file is safe :)", "error");
                }
            });
        }
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
                $('#day'+i).html(formatday);
            }
            var enddate = moment(day).format('MMMM DD YYYY');
            $('#todate').val(enddate);

        });


    });
</script>
