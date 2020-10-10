@extends('layouts.app')
@section('title page','Consolidate Page')
@section('title tab','Consolidate')


@section('css')
<!-- Tempusdominus Bbootstrap 4 -->
<link href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
<!-- datepicker -->
<link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<!-- Page CSS -->
@endsection

@section('content')
<!-- Main content -->
<section class="content" id="contentpage">
    <!-- Default box -->
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-clipboard-check"></i> Consolidate Page</h3>
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
                    id="ConsolidateDatatable">
                    <thead>
                        <tr>
                            <th><button type="button" name="consolidatemoredelete" id="consolidatemoredelete"
                                    class="btn btn-danger">
                                    <i class="fas fa-times"></i><span></span>
                                </button></th>
                            <th>Detail</th>
                            <th>Deposit Type</th>
                            <th>Employee</th>
                            <th>Full Name</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Checkbox</th>
                            <th>Detail</th>
                            <th>Deposit Type</th>
                            <th>Employee</th>
                            <th>Full Name</th>
                            <th>Amount</th>
                            <th>Action</th>
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
                            <form method="post" id="consolidateform" name="consolidateform" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="consolidateid" id="consolidateid">
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
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="consolidatesave"
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
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
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
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var table = $('#ConsolidateDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('consolidate.datatable') }}",
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
                { data: 'DepositType', name: 'DepositType' },
                { data: 'Employee', name: 'Employee' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Amount', name: 'Amount' },
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
                        text: '<i class="fas fa-plus"></i><span> Add consolidate</span>',
                        className: 'btn btn-success',
                        action: function ( e, dt, node, config ) {
                            $('#consolidatesave').val("create-consolidate");
                            $('#consolidatesave').html('Save');
                            $('#consolidateid').val('');
                            $('#consolidateform').trigger("reset");
                            $('#modelHeading').html("Create New consolidate");
                            $('#ajaxModel').modal('show');
                        }
                    }
                ]
        });

         // Add event listener for opening and closing details
         $('#ConsolidateDatatable').on('click', 'td.details-control', function () {
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

        $(document).on('click', '.consolidateedit', function () {
            var consolidateid = $(this).attr('id');
            $.get("{{ route('consolidate.index') }}" +'/' + consolidateid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data consolidate");
                $('#consolidatesave').val("edit-consolidate");
                $('#consolidatesave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#consolidateid').val(data.id);
                $('#emp').val(data.Employee);
                $('#name').val(data.FullName);
                $('#birth').val(data.DateOfBirth);
                $('#address').val(data.Address);
                $('#phone').val(data.PhoneNumber);
                $('#position').val(data.Position);
                $('#join').val(data.JoinDate);
            })
        });

        $(document).on('click', '.showconsolidate', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('consolidate'+'/'+id);
        });


        $('#consolidateform').on("submit",function (event) {
            event.preventDefault();
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('consolidate.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#consolidateform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#consolidatesave').html('Save');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#consolidatesave').html('Save Changes');
                }
            });
        });

            var type;
            var consolidate_id;
            $(document).on('click', '.js-sweetalert', function(){
            consolidate_id = $(this).attr('id');
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
                url:"consolidate/"+consolidate_id,
                type: "DELETE",
                success:function(data){
                    swal("Deleted!", "Your consolidate file has been deleted.", "success")
                    $('#ConsolidateDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your consolidate file is safe :)", "error");
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
