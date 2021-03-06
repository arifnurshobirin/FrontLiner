@extends('layouts.app')
@section('title page','Counter Page')
@section('title tab','Counter')


@section('css')
<!-- Page CSS -->
@endsection

@section('content')
<!-- Main content -->
<section class="content" id="contentpage">
    <!-- Default box -->
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-box"></i> Counter DataTable</h3>
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
                    id="CounterDatatable" style="width:100%">
                    <thead>
                        <tr>
                            <th><button type="button" name="countermoredelete" id="countermoredelete"
                                    class="btn btn-danger btn-sm">
                                    <i class="fas fa-times"></i><span></span>
                                </button></th>
                            <th></th>
                            <th>No Counter</th>
                            <th>Ip Address</th>
                            <th>Mac Address</th>
                            <th>Type Counter</th>
                            <th>Status Counter</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>No Counter</th>
                            <th>Ip Address</th>
                            <th>Mac Address</th>
                            <th>Type Counter</th>
                            <th>Status Counter</th>
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
                            <form method="post" id="counterform" name="counterform">
                                @csrf
                                <input type="hidden" name="counterid" id="counterid">
                                <label for="nopos">No Counter</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="nocounter" name="nocounter" class="form-control"
                                            placeholder="Enter your No Counter" required>
                                    </div>
                                </div>
                                <label for="ip">Ip Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control ip" id="ipaddress" name="ipaddress"
                                            placeholder="Enter your Ip Address">
                                    </div>
                                </div>
                                <label for="mac">Mac Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="macaddress" name="macaddress"
                                            placeholder="Enter your Mac Address">
                                    </div>
                                </div>
                                <label for="type">Type Counter</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value="">-- Please select --</option>
                                            <option value="Regular">Regular</option>
                                            <option value="SaladBar">SaladBar</option>
                                            <option value="Milk">Milk</option>
                                            <option value="Wine">Wine</option>
                                            <option value="Deptstore">Deptstore</option>
                                            <option value="Electronic">Electronic</option>
                                            <option value="TransHello">TransHello</option>
                                            <option value="Homedel">Homedel</option>
                                            <option value="Cigarette">Cigarette</option>
                                            <option value="TransLiving">TransLiving</option>
                                            <option value="TransHardware">TransHardware</option>
                                            <option value="Bakery">Bakery</option>
                                            <option value="Dokar">Dokar</option>
                                            <option value="Canvasing">Canvasing</option>
                                            <option value="Backup">Backup</option>
                                        </select>
                                    </div>
                                </div>

                                <label for="type">Status Counter</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" id="statuscounter" name="statuscounter">
                                            <option value="">-- Please select --</option>
                                            <option value="Queueing">Queueing</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Broken">Broken</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="countersave"
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
            '<td>'+d.TypeCounter+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.Status+'</td>'+
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
            
        var table = $('#CounterDatatable').DataTable({
        processing: true,
        serverSide: true,
        "responsive": true,
        paging: true,
        ajax: { url:"{{ route('counter.datatable') }}",},
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
            { data: 'NoCounter', name: 'NoCounter' },
            { data: 'IpAddress', name: 'IpAddress' },
            { data: 'MacAddress', name: 'MacAddress' },
            { data: 'TypeCounter', name: 'TypeCounter' },
            { data: 'Status', name: 'Status' },
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
                            text: '<i class="fas fa-plus"></i><span> Add Counter</span>',
                            className: 'btn btn-success',
                            action: function ( e, dt, node, config ) {
                                $('#countersave').val("create Counter");
                                $('#countersave').html('Save');
                                $('#counterid').val('');
                                $('#counterform').trigger("reset");
                                $('#modelHeading').html("Create New Counter");
                                $('#ajaxModel').modal('show');
                            }
                        }
                    ]
        });

        // Add event listener for opening and closing details
        $('#CounterDatatable').on('click', 'td.details-control', function () {
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

        $('#counterform').on("submit",function (event) {
            event.preventDefault();
            $('#countersave').html('Sending..');
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('counter.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#counterform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#possave').html('Save');
                    table.draw();
                    swal.fire("Good job!", "You success update Counter!", "success");
                },
                error: function (data) {
                    console.log('Error:', data);
                    alert('Status: ' + data);
                }
            });
        });

        $(document).on('click', '.counteredit', function () {
            var counterid = $(this).attr('id');
            $.get("{{ route('counter.index') }}" +'/' + counterid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data Counter");
                $('#countersave').val("edit-counter");
                $('#countersave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#counterid').val(data.id);
                $('#nocounter').val(data.NoCounter);
                $('#ipaddress').val(data.IpAddress);
                $('#macaddress').val(data.MacAddress);
                $('#typecounter').val(data.TypeCounter);
                $('#Status').val(data.Status);
            })
        });

        $(document).on('click', '.countershow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('counter'+'/'+id);
        });

            var counterid;
            $(document).on('click', '.counterdelete', function(){
            counterid = $(this).attr('id');
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this Counter file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                url:"counter/"+counterid,
                type: "DELETE",
                success:function(data){
                    swal.fire("Deleted!", "Your Counter file has been deleted.", "success")
                    $('#CounterDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal.fire("Cancelled", "Your Counter file is safe :)", "error");
                }
            });
        });

        $(document).on('click', '#countermoredelete', function(){
            var id = [];
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this Counter file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $('.countercheckbox:checked').each(function(){
                        id.push($(this).val());
                    });
                    if(id.length > 0)
                    {
                        $.ajax({
                        url:"{{ route('counter.moredelete')}}",
                        method:"get",
                        data:{id:id},
                        success:function(data){
                        swal.fire("Good job!", "You success delete Counter!", "success");
                        $('#CounterDatatable').DataTable().ajax.reload();           
                            }
                        });
                    }
                    else
                    {swal.fire("Please select atleast one checkbox");}
                }
                else
                swal.fire("Cancelled", "Your Counter file is safe :)", "error");
            });
        });

    });
</script>
@endsection