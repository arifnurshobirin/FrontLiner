@extends('layouts.app') 
@section('title tab','Schedule Datatable Page')
@section('title page','Schedule Datatable Page')

@section('css')
<!-- Page CSS -->
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="urlpage">Schedule Datatable Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active urlpage">Schedule Datatable Page</li>
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
            <h3 class="card-title">Schedule DataTable</h3>
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
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                    id="ScheduleDatatable">
                    <thead>
                        <tr>
                            <th><button type="button" name="schedulemoredelete" id="schedulemoredelete"
                                    class="btn btn-danger">
                                    <i class="fas fa-times"></i><span></span>
                                </button></th>
                            <th>Detail</th>
                            <th>Employee</th>
                            <th>Full Name</th>
                            <th>Date Work</th>
                            <th>Shift</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Checkbox</th>
                            <th>Detail</th>
                            <th>Employee</th>
                            <th>Full Name</th>
                            <th>Date Work</th>
                            <th>Shift</th>
                            <th>Action</t>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- Create Table -->
            <div class="modal fade" id="ajaxModel" aria-hidden="true">
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
                                        <input type="text" id="emp" name="emp" class="form-control"
                                            data-inputmask='"mask": "(999)"' data-mask required>
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
                                        <div class="input-group-prepend" data-target="#datetimepicker1"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="date" name="date"
                                            class="form-control datetimepicker-input" data-target="#datetimepicker1"
                                            placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <label for="birth">Start Work</label>
                                <div class="form-group">
                                    <div class="input-group" id="datetimepicker2" data-target-input="nearest">
                                        <div class="input-group-prepend" data-target="#datetimepicker2"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="far fa-clock"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="start" name="start"
                                            class="form-control datetimepicker-input" data-target="#datetimepicker2"
                                            paceholder="Chosee Start Work">
                                    </div>
                                </div>
                                <label for="birth">End Work</label>
                                <div class="form-group">
                                    <div class="input-group" id="datetimepicker3" data-target-input="nearest">
                                        <div class="input-group-prepend" data-target="#datetimepicker3"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="far fa-clock"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="end" name="end" class="form-control datetimepicker-input"
                                            data-target="#datetimepicker3" paceholder="Chosee End Work">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="schedulesave"
                                    value="create">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Create Table -->

        </div>
        <!-- /.card-body -->
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
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.FullName+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.FullName+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}
    $(document).ready(function() {
            var table = $('#ScheduleDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('schedule.datatable') }}",
            },
            "order": [[ 2, "asc" ]],
            columns: [
                { data: 'checkbox', name: 'checkbox', orderable:false, searchable: false},
                {
                "className":      'details-control',
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": ''
                },
                { data: 'Employee', name: 'Employee' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Date', name: 'Date' },
                { data: 'CodeShift', name: 'CodeShift' },
                { data: 'action', name: 'action', orderable: false}
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
                        className: 'btn btn-info',
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
                            $('#ajaxModel').modal('show');
                        }
                    }
                ]
        });

         // Add event listener for opening and closing details
         $('#ScheduleDatatable').on('click', 'td.details-control', function () {
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
        });

        $('.datepicker').datepicker({
            format: 'dddd DD MMMM YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
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

        $(document).on('click', '.showschedule', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('schedule'+'/'+id);
        });


        $('#scheduleform').on("submit",function (event) {
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
        $('[data-mask]').inputmask()

    });
</script>
@endsection
