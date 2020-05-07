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
                <div align="right">
                    <button type="button" name="poscreate" id="poscreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add POS</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="POSDatatable">
                        <thead>
                            <tr>
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
        <<!-- /.card-body -->
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
                            <input type="number" id="nopos" name="nopos" class="form-control"
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

<script>
    $(document).ready(function() {
            var table = $('#POSDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('pos.index') }}",
            },
            "order": [[ 0, "asc" ]],
            columns: [
                { data: 'NoPOS', name: 'NoPOS' },
                { data: 'CPU', name: 'CPU' },
                { data: 'Printer', name: 'Printer' },
                { data: 'Drawer', name: 'Drawer' },
                { data: 'Scanner', name: 'Scanner' },
                { data: 'Monitor', name: 'Monitor' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        $('#poscreate').click(function () {
            $('#possave').val("create POS");
            $('#possave').html('Save');
            $('#posid').val('');
            $('#posform').trigger("reset");
            $('#modelHeading').html("Create New POS");
            $('#ajaxModel').modal('show');
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

        $(document).on('click', '.showpos', function () {
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
                    showSuccessMessage();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#possave').html('Save Changes');
                    alert('Status: ' + data);
                }
            });
        });

            var posid;
            $(document).on('click', '.js-sweetalert', function(){
            posid = $(this).attr('id');
            showDeleteTable();
        });


        function showDeleteTable() {
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
        }
        function showSuccessMessage() {
            swal.fire("Good job!", "You success update POS!", "success");
        }
    });

</script>
