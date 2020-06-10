@include('sweetalert::alert')

<!-- POS Table -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">POS DataTable</h3>
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
                        id="POSDatatable">
                        <thead>
                            <tr>
                                <th><button type="button" name="posmoredelete" id="posmoredelete" class="btn btn-danger">
                                <i class="fas fa-times"></i><span></span>
                                </button></th>
                                <th>Detail</th>
                                <th>No POS</th>
                                <th>CPU</th>
                                <th>Printer</th>
                                <th>Drawer</th>
                                <th>Scanner</th>
                                <th>Monitor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Checkbox</th>
                                <th>Detail</th>
                                <th>No POS</th>
                                <th>CPU</th>
                                <th>Printer</th>
                                <th>Drawer</th>
                                <th>Scanner</th>
                                <th>Monitor</th>
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
                <form method="post" id="posform" name="posform">
                    @csrf
                    <input type="hidden" name="posid" id="posid">
                    <label for="nopos">No POS</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="nopos" name="nopos" class="form-control"
                                placeholder="Enter your No POS" required>
                        </div>
                    </div>
                    <label for="cpu">CPU POS</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="cpu" name="cpu">
                                <option value="">-- Please select --</option>
                                <option value="Zonerich">Zonerich</option>
                                <option value="IBM">IBM</option>
                                <option value="HP">HP</option>
                                <option value="Wincore M2">Wincore M2</option>
                                <option value="Wincore M3">Wincore M3</option>
                            </select>
                        </div>
                    </div>

                    <label for="printer">Printer</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="printer" name="printer">
                                <option value="">-- Please select --</option>
                                <option value="ND 77">ND 77</option>
                                <option value="Star">Star</option>
                                <option value="Zonerich">Zonerich</option>
                                <option value="Wincore Nixdrof">Wincore Nixdrof</option>
                                <option value="Epson">Epson</option>
                                <option value="HP">HP</option>
                            </select>
                        </div>
                    </div>

                    <label for="scanner">Scanner</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="scanner" name="scanner">
                                <option value="">-- Please select --</option>
                                <option value="Magellan 8100">Magellan 8100</option>
                                <option value="Magellan 2000">Magellan 2000</option>
                                <option value="Datalogic">Datalogic</option>
                                <option value="Zonerich">Zonerich</option>
                                <option value="HP">HP</option>
                            </select>
                        </div>
                    </div>

                    <label for="drawer">Drawer</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="drawer" name="drawer">
                                <option value="">-- Please select --</option>
                                <option value="Wincore">Wincore</option>
                                <option value="IBM">IBM</option>
                                <option value="HP">HP</option>
                            </select>
                        </div>
                    </div>


                    <label for="monitor">Monitor</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" id="monitor" name="monitor">
                                <option value="">-- Please select --</option>
                                <option value="TFT">TFT</option>
                                <option value="HP">HP</option>
                                <option value="Wincore">Wincore</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="possave"
                        value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->
<!-- <script id="details-template" type="text/x-handlebars-template">
    <table class="table">
        <tr>
            <td>data.id</td>
            <td>Printer</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>And any further details here images etc...</td>
        </tr>
        <tr>
            <td>Extra info:</td>
            <td>And any further details here images etc...</td>
        </tr>
    </table>
</script> -->
<script>
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.Printer+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.Printer+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}
    $(document).ready(function() {
        // var template = Handlebars.compile($("#details-template").html());
        var table = $('#POSDatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: { url:"{{ route('pos.index') }}",},
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
            { data: 'NoPOS', name: 'NoPOS' },
            { data: 'CPU', name: 'CPU' },
            { data: 'Printer', name: 'Printer' },
            { data: 'Drawer', name: 'Drawer' },
            { data: 'Scanner', name: 'Scanner' },
            { data: 'Monitor', name: 'Monitor' },
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
                            text: '<i class="fas fa-plus"></i><span> Add POS</span>',
                            className: 'btn btn-success',
                            action: function ( e, dt, node, config ) {
                                $('#possave').val("create POS");
                                $('#possave').html('Save');
                                $('#posid').val('');
                                $('#posform').trigger("reset");
                                $('#modelHeading').html("Create New POS");
                                $('#ajaxModel').modal('show');
                            }
                        }
                    ]
        
        });

        // Add event listener for opening and closing details
        $('#POSDatatable').on('click', 'td.details-control', function () {
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

        $(document).on('click', '.posedit', function () {
            var posid = $(this).attr('id');
            $.get("{{ route('pos.index') }}" +'/' + posid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data POS");
                $('#possave').val("edit-pos");
                $('#possave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#posid').val(data.id);
                $('#nopos').val(data.NoPOS);
                $('#cpu').val(data.CPU);
                $('#printer').val(data.Printer);
                $('#drawer').val(data.Drawer);
                $('#scanner').val(data.Scanner);
                $('#monitor').val(data.Monitor);
            })
        });

        $(document).on('click', '.posshow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('pos'+'/'+id);
        });


        $('#posform').on("submit",function (event) {
            event.preventDefault();
            $('#possave').html('Sending..');
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('pos.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#posform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#possave').html('Save');
                    table.draw();
                    swal.fire("Good job!", "You success update POS!", "success");
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#possave').html('Save Changes');
                    alert('Status: ' + data);
                }
            });
        });

            var posid;
            $(document).on('click', '.posdelete', function(){
            posid = $(this).attr('id');
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this POS file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                url:"pos/destroy/"+posid,
                success:function(data){
                    swal.fire("Deleted!", "Your Cashier file has been deleted.", "success")
                    $('#POSDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal.fire("Cancelled", "Your Cashier file is safe :)", "error");
                }
            });
        });

        $(document).on('click', '#posmoredelete', function(){
        
        if(confirm("Are you sure you want to Delete this data?"))
        {
            var id = [];
            $('.poscheckbox:checked').each(function(){
                id.push($(this).val());
            });
            if(id.length > 0)
            {
                $.ajax({
                    url:"{{ route('pos.moredelete')}}",
                    method:"get",
                    data:{id:id},
                    success:function(data)
                    {

                        swal.fire("Good job!", "You success delete POS!", "success");
                        $('#POSDatatable').DataTable().ajax.reload();
                        
                    }
                });
            }
            else
            {
                alert("Please select atleast one checkbox");
            }
        }
        });

    });

</script>
