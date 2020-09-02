@extends('layouts.app')
@section('title tab','Cashier Page')
@section('title page','Cashier Page')

@section('css')
<!-- Tempusdominus Bbootstrap 4 -->
<link href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
<!-- Page CSS -->
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="urlpage">Cashier Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active urlpage">Cashier Page</li>
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
            <h3 class="card-title">Cashier DataTable</h3>
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
                    id="CashierDatatable">
                    <thead>
                        <tr>
                            <th><button type="button" name="cashiermoredelete" id="cashiermoredelete"
                                    class="btn btn-danger">
                                    <i class="fas fa-times"></i><span></span>
                                </button></th>
                            <th>Detail</th>
                            <th>Avatar</th>
                            <th>Employee</th>
                            <th>Full Name</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Checkbox</th>
                            <th>Detail</th>
                            <th>Avatar</th>
                            <th>Employee</th>
                            <th>Full Name</th>
                            <th>Position</th>
                            <th>Status</th>
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
                            <form method="post" id="cashierform" name="cashierform" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="cashierid" id="cashierid">
                                <label for="emp">Employee</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-id-badge"></i></span>
                                        </div>
                                        <input type="text" id="emp" name="emp" class="form-control"
                                            data-inputmask='"mask": "999"' data-mask required>
                                    </div>
                                </div>
                                <label for="fullname">Full Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Enter your Full Name" required>
                                    </div>
                                </div>
                                <label for="birth">Date Of Birth</label>
                                <div class="form-group">
                                    <div class="input-group" id="datetimepicker1" data-target-input="nearest">
                                        <div class="input-group-prepend" data-target="#datetimepicker1"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="birth" name="birth"
                                            class="form-control datetimepicker-input" data-target="#datetimepicker1"
                                            placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <label for="address">Address</label>
                                <div class="input-group">
                                    <div class="form-line">
                                        <textarea rows="2" id="address" name="address" class="form-control no-resize"
                                            placeholder="Please input your Address..."></textarea>
                                    </div>
                                </div>
                                <label for="phone">Phone Number</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            data-inputmask='"mask": "9999-99999999"' data-mask>
                                    </div>
                                </div>
                                <label for="position">Position</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id="position" name="position">
                                            <option value="">-- Please select --</option>
                                            <option value="Cashier">Cashier</option>
                                            <option value="Customer Service">Customer Service</option>
                                            <option value="TDR">TDR</option>
                                            <option value="Senior Cashier">Senior Cashier</option>
                                            <option value="Cashier Head">Cashier Head</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="join">Join Date</label>
                                <div class="form-group">
                                    <div class="input-group" id="datetimepicker2" data-target-input="nearest">
                                        <div class="input-group-prepend" data-target="#datetimepicker2"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="join" name="join"
                                            class="form-control datetimepicker-input" data-target="#datetimepicker2"
                                            placeholder="dd/mm/yyyy">
                                    </div>
                                    <label for="position">Status</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="statuscashier"
                                                name="statuscashier">
                                                <option value="">-- Please select --</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label for="image">Select Profile Image</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="cashiersave"
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
<!-- page script -->
<script>
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.FullName+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.Position+'</td>'+
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
            
            var table = $('#CashierDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('cashier.datatable') }}",
            },
            "order": [[ 3, "asc" ]],
            columns: [
                { data: 'checkbox', name: 'checkbox', orderable:false, searchable: false},
                {
                "className":      'details-control',
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": ''
                },
                {
                    "render": function (data, type, JsonResultRow, meta) {
                        return '<img src="../../img/'+JsonResultRow.Avatar+'" class="avatar" width="50" height="50">';
                    }
                },
                { data: 'Employee', name: 'Employee' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Position', name: 'Position' },
                { data: 'Status', name: 'Status' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
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
                        text: '<i class="fas fa-plus"></i><span> Add Cashier</span>',
                        className: 'btn btn-success',
                        action: function ( e, dt, node, config ) {
                            $('#cashiersave').val("create-cashier");
                            $('#cashiersave').html('Save');
                            $('#cashierid').val('');
                            $('#cashierform').trigger("reset");
                            $('#modelHeading').html("Create New Cashier");
                            $('#ajaxModel').modal('show');
                        }
                    }
                ]
        });

         // Add event listener for opening and closing details
        $('#CashierDatatable').on('click', 'td.details-control', function () {
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

        $('#cashierform').on("submit",function (event) {
            event.preventDefault();
            $('#cashiersave').html('Sending..');
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('cashier.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#cashierform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#cashiersave').html('Save');
                    table.draw();
                    swal.fire("Good job!", "You success update Cashier!", "success");
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#cashiersave').html('Save Changes');
                }
            });
        });


        $(document).on('click', '.cashieredit', function () {
            var cashierid = $(this).attr('id');
            $.get("{{ route('cashier.index') }}" +'/' + cashierid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data Cashier");
                $('#cashiersave').val("edit-cashier");
                $('#cashiersave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#cashierid').val(data.id);
                $('#emp').val(data.Employee);
                $('#name').val(data.FullName);
                $('#birth').val(data.DateOfBirth);
                $('#address').val(data.Address);
                $('#phone').val(data.PhoneNumber);
                $('#position').val(data.Position);
                $('#join').val(data.JoinDate);
                $('#statuscashier').val(data.StatusCashier);
                $('#image').val(data.Avatar);
            })
        });

        $(document).on('click', '.cashiershow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('cashier'+'/'+id);
        });

            var cashierid;
            $(document).on('click', '.cashierdelete', function(){
            cashierid = $(this).attr('id');
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this cashier file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                url:"cashier/"+cashierid,
                type: "DELETE",
                success:function(data){
                    swal.fire("Deleted!", "Your Cashier file has been deleted.", "success")
                    $('#CashierDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal.fire("Cancelled", "Your Cashier file is safe :)", "error");
                }
            });
        });

        $(document).on('click', '#cashiermoredelete', function(){
            var id = [];
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this Cashier file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $('.cashiercheckbox:checked').each(function(){
                        id.push($(this).val());
                    });
                    if(id.length > 0)
                    {
                        $.ajax({
                        url:"{{ route('cashier.moredelete')}}",
                        method:"get",
                        data:{id:id},
                        success:function(data){
                        swal.fire("Deleted!", "Your Cashier file has been deleted.", "success")
                        $('#CashierDatatable').DataTable().ajax.reload();
                            }
                        });
                    }
                    else
                    {swal.fire("Please select atleast one checkbox");}
                } 
                else 
                {swal.fire("Cancelled", "Your Cashier file is safe :)", "error");}
                });
            });


        $('#datetimepicker1').datetimepicker({
                    format: 'L'
                });
        $('#datetimepicker2').datetimepicker({
                    format: 'L'
                });
        $('[data-mask]').inputmask()

    });
    $(".preloader").fadeOut("slow");

</script>
@endsection
