@include('sweetalert::alert')
<!-- EDC Table -->
<div class="row">
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
                <div>
                    <button type="button" name="edccreate" id="edccreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add EDC</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="EDCDatatable">
                        <thead>
                            <tr>
                                <th><button type="button" name="edcsomedelete" id="edcsomedelete" class="btn btn-danger">
                                <i class="fas fa-times"></i><span></span>
                                </button></th>
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
                                <th>Checkbox</th>
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
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="saveBtn"
                        value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<script>
    $(document).ready(function() {
        var table = $('#EDCDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('edc.index') }}",
            },
            "order": [[ 1, "asc" ]],
            columns: [
                { data: 'checkbox', name: 'checkbox', orderable:false, searchable: false},
                { data: 'TIDEDC', name: 'TIDEDC' },
                { data: 'NoCounter', name: 'NoCounter' },
                { data: 'Connection', name: 'Connection' },
                { data: 'SIMCard', name: 'SIMCard' },
                { data: 'TypeEDC', name: 'TypeEDC' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        $('#edccreate').click(function () {
            $('#saveBtn').val("create-edc");
            $('#saveBtn').html('Save');
            $('#edcid').val('');
            $('#edcForm').trigger("reset");
            $('#modelHeading').html("Create New EDC");
            $('#ajaxModel').modal('show');
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
                    showSuccessMessage();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        var type;
        var edcid;
        $(document).on('click', '.js-sweetalert', function(){
            edcid = $(this).attr('id');
            showDeleteTable();
        });


        function showDeleteTable() {
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
        }   
        function showSuccessMessage() {
            swal.fire("Good job!", "You success update EDC!", "success");
        }

    });

</script>
