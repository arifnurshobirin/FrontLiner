@extends('layouts.app')
@section('title tab','Management Page')
@section('title page','Management Page')

@section('css')
<!-- Page CSS -->
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="urlpage">Management Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active urlpage">Management Page</li>
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
            <h3 class="card-title">Management DataTable</h3>
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
                    id="ManagementDatatable">
                    <thead>
                        <tr>
                            <th><button type="button" name="managementmoredelete" id="managementmoredelete"
                                    class="btn btn-danger">
                                    <i class="fas fa-times"></i><span></span>
                                </button></th>
                            <th>Detail</th>
                            <th>Avatar</th>
                            <th>Id Card</th>
                            <th>Full Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Checkbox</th>
                            <th>Detail</th>
                            <th>Avatar</th>
                            <th>Id Card</th>
                            <th>Full Name</th>
                            <th>Position</th>
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
                            <form method="post" id="managementform" name="managementform" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="managementid" id="managementid">
                                <label for="emp">Id Card</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="idcard" name="idcard" class="form-control"
                                            placeholder="Enter your Id Card" required>
                                    </div>
                                </div>
                                <label for="fullname">Full Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Enter your Full Name" required>
                                    </div>
                                </div>
                                <label for="position">Position</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id="position" name="position">
                                            <option value="">-- Please select --</option>
                                            <option value="Store General Manager">Store General Manager</option>
                                            <option value="Secretary">Secretary</option>
                                            <option value="Divisi Manager">Divisi Manager</option>
                                            <option value="Sales Manager">Sales Manager</option>
                                            <option value="Store Controller">Store Controller</option>
                                            <option value="RPM">RPM</option>
                                            <option value="aintenance Head">aintenance Head</option>
                                            <option value="OSS Manager">OSS Manager</option>
                                            <option value="Receiving Head">Receiving Head</option>
                                            <option value="TVS Manager">TVS Manager</option>
                                            <option value="Warung Manager">Warung Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="image">Select Profile Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="image" name="image" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="managementsave"
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
            '<td>'+d.IdCard+'</td>'+
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
            var table = $('#ManagementDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('management.datatable') }}",
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
                { data: 'IdCard', name: 'IdCard' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Position', name: 'Position' },
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
                        text: '<i class="fas fa-plus"></i><span> Add Management</span>',
                        className: 'btn btn-success',
                        action: function ( e, dt, node, config ) {
                            $('#managementsave').val("create-management");
                            $('#managementsave').html('Save');
                            $('#managementid').val('');
                            $('#managementform').trigger("reset");
                            $('#modelHeading').html("Create New Management");
                            $('#ajaxModel').modal('show');
                        }
                    }
                ]
        });

        // Add event listener for opening and closing details
        $('#ManagementDatatable').on('click', 'td.details-control', function () {
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


        $('#managementform').on("submit",function (event) {
            event.preventDefault();
            $('#managementsave').html('Sending..');
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('management.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#managementform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#managementsave').html('Save');
                    table.draw();
                    swal.fire("Good job!", "You success update Management!", "success");
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#managementsave').html('Save Changes');
                }
            });
        });

        $(document).on('click', '.managementedit', function () {
            var managementid = $(this).attr('id');
            $.get("{{ route('management.index') }}" +'/' + managementid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data Management");
                $('#managementsave').val("edit-management");
                $('#managementsave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#managementid').val(data.id);
                $('#idcard').val(data.IdCard);
                $('#name').val(data.FullName);
                $('#position').val(data.Position);
            })
        });

        $(document).on('click', '.managementshow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('management'+'/'+id);
        });




        var managementid;
        $(document).on('click', '.managementdelete', function(){
            managementid = $(this).attr('id');
            swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel!"
            }).then((result) => {
            if (result.value) {
                $.ajax({
            url:"management/destroy/"+managementid,
            success:function(data){
                swal.fire("Deleted!", "Your Management file has been deleted.", "success")
                $('#ManagementDatatable').DataTable().ajax.reload();
            }
            });
            } else {
                swal.fire("Cancelled", "Your Management file is safe :)", "error");
            }
            });
        });

        $(document).on('click', '#managementmoredelete', function(){
            var id = [];
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this Management file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $('.managementcheckbox:checked').each(function(){
                        id.push($(this).val());
                    });
                    if(id.length > 0)
                    {
                        $.ajax({
                        url:"{{ route('management.moredelete')}}",
                        method:"get",
                        data:{id:id},
                        success:function(data){
                        swal.fire("Deleted!", "Your Management file has been deleted.", "success")
                        $('#ManagementDatatable').DataTable().ajax.reload();
                            }
                        });
                    }
                    else
                    {swal.fire("Please select atleast one checkbox");}
                } 
                else 
                {swal.fire("Cancelled", "Your management file is safe :)", "error");}
                });
            });

        
    });

</script>
@endsection
