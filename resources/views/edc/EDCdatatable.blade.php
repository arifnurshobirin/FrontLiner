@include('sweetalert::alert')
<!-- EDC Table -->
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
                <h3 class="card-title">EDC DataTable</h3>
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
                        id="EDCDatatable">
                        <thead>
                            <tr>
                                <th><button type="button" name="edcmoredelete" id="edcmoredelete" class="btn btn-danger">
                                <i class="fas fa-times"></i><span></span>
                                </button></th>
                                <th></th>
                                <th>TID EDC</th>
                                <th>No Counter</th>
                                <th>Connection</th>
                                <th>SIM Card</th>
                                <th>Type EDC</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>TID EDC</th>
                                <th>No Counter</th>
                                <th>Connection</th>
                                <th>SIM Card</th>
                                <th>Type EDC</th>
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
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form method="post" id="edcForm" name="edcForm">
                    @csrf
                    <input type="hidden" name="edcid" id="edcid">
                    <label for="tid">TID EDC</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="tidedc" name="tidedc" class="form-control"
                                placeholder="Enter your TID EDC" required>
                        </div>
                    </div>
                    <label for="mid">MID EDC</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="midedc" name="midedc" class="form-control"
                                placeholder="Enter your MID EDC" required>
                        </div>
                    </div>
                    <label for="ipaddress">IP Adress</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="ipedc" name="ipedc" class="form-control"
                                placeholder="Enter your IP Adress" required>
                        </div>
                    </div>
                    <label for="no">No Counter</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="nocounter" name="nocounter" class="form-control"
                                placeholder="Enter your No Counter" required>
                        </div>
                    </div>
                    <label for="connection">Connection</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="connection" name="connection">
                                <option value="">-- Please select --</option>
                                <option value="GPRS">GPRS</option>
                                <option value="LAN">LAN</option>
                            </select>
                        </div>
                    </div>
                    <label for="sim card">Sim Card</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="simcard" name="simcard">
                                <option value="">-- Please select --</option>
                                <option value="LAN">LAN</option>
                                <option value="Telkomsel">Telkomsel</option>
                                <option value="Indosat">Indosat</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                    </div>
                    <label for="typeedc">Type EDC</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="typeedc" name="typeedc">
                                <option value="">-- Please select --</option>
                                <option value="WireCard">WireCard</option>
                                <option value="BCA">BCA</option>
                                <option value="Spots">Spots</option>
                            </select>
                        </div>
                    </div>
                    <label for="type">Status EDC</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="satusedc" name="statusedc">
                                <option value="">-- Please select --</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Normal">Normal</option>
                                <option value="Broken">Broken</option>
                                <option value="Queueing">Queueing</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="saveBtn"
                        value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<script>
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.TypeEDC+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.Connection+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}
    $(document).ready(function() {
        var table = $('#EDCDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('edc.index') }}",
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
                { data: 'TIDEDC', name: 'TIDEDC' },
                { data: 'NoCounter', name: 'NoCounter' },
                { data: 'Connection', name: 'Connection' },
                { data: 'SIMCard', name: 'SIMCard' },
                { data: 'TypeEDC', name: 'TypeEDC' },
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
                        text: '<i class="fas fa-plus"></i><span> Add EDC</span>',
                        className: 'btn btn-success',
                        action: function ( e, dt, node, config ) {
                            $('#saveBtn').val("create-edc");
                            $('#saveBtn').html('Save');
                            $('#edcid').val('');
                            $('#edcForm').trigger("reset");
                            $('#modelHeading').html("Create New EDC");
                            $('#ajaxModel').modal('show');
                        }
                    }
                ]
        });

        // Add event listener for opening and closing details
        $('#EDCDatatable').on('click', 'td.details-control', function () {
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

        $(document).on('click', '.editedc', function () {
            var edcid = $(this).attr('id');
            $.get("{{ route('edc.index') }}" +'/' + edcid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data EDC");
                $('#saveBtn').val("edit-edc");
                $('#saveBtn').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#edcid').val(data.id);
                $('#tidedc').val(data.TIDEDC);
                $('#midedc').val(data.MIDEDC);
                $('#ipedc').val(data.IPAdress);
                $('#nocounter').val(data.NoCounter);
                $('#connection').val(data.Connection);
                $('#simcard').val(data.SIMCard);
                $('#typeedc').val(data.TypeEDC);
            })
        });

        $(document).on('click', '.edcshow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('edc'+'/'+id);
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#edcForm').serialize(),
                url: "{{ route('edc.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {

                    $('#edcForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#saveBtn').html('Save');
                    table.draw();
                    swal.fire("Good job!", "You success update EDC!", "success");
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        var type;
        var edcid;
        $(document).on('click', '.deleteedc', function(){
            edcid = $(this).attr('id');
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this edc file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                url:"edc/destroy/"+edcid,
                success:function(data){
                    swal.fire("Deleted!", "Your edc file has been deleted.", "success")
                    $('#EDCDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal.fire("Cancelled", "Your edc file is safe :)", "error");
                }
            });
        });

        $(document).on('click', '#edcmoredelete', function(){
            var id = [];
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this EDC file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $('.edccheckbox:checked').each(function(){
                        id.push($(this).val());
                    });
                    if(id.length > 0)
                    {
                        $.ajax({
                        url:"{{ route('edc.moredelete')}}",
                        method:"get",
                        data:{id:id},
                        success:function(data){
                        swal.fire("Deleted!", "Your EDC file has been deleted.", "success")
                        $('#EDCDatatable').DataTable().ajax.reload();
                            }
                        });
                    }
                    else
                    {swal.fire("Please select atleast one checkbox");}
                } 
                else 
                {swal.fire("Cancelled", "Your EDC file is safe :)", "error");}
                });
            });

    });
    $(".preloader").fadeOut("slow");

</script>
