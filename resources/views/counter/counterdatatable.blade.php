<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Counter DataTable</h3>
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
                    <button type="button" name="countercreate" id="countercreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add Counter</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="CounterDatatable">
                        <thead>
                            <tr>
                                <th>No Counter</th>
                                <th>Ip Address</th>
                                <th>Mac Address</th>
                                <th>Type Counter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No Counter</th>
                                <th>Ip Address</th>
                                <th>Mac Address</th>
                                <th>Type Counter</th>
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

<script>
    $(document).ready(function() {
            var table = $('#CounterDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('counter.index') }}",
            },
            "order": [[ 0, "asc" ]],
            columns: [
                { data: 'NoCounter', name: 'NoCounter' },
                { data: 'IpAddress', name: 'IpAddress' },
                { data: 'MacAddress', name: 'MacAddress' },
                { data: 'TypeCounter', name: 'TypeCounter' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        $('#countercreate').click(function () {
            $('#countersave').val("create Counter");
            $('#countersave').html('Save');
            $('#counterid').val('');
            $('#counterform').trigger("reset");
            $('#modelHeading').html("Create New Counter");
            $('#ajaxModel').modal('show');
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
            })
        });

        $(document).on('click', '.showcounter', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('counter'+'/'+id);
        });


        $('#counterform').on("submit",function (event) {
            event.preventDefault();
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
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#countersave').html('Save Changes');
                }
            });
        });

            var type;
            var counterid;
            $(document).on('click', '.js-sweetalert', function(){
            counterid = $(this).attr('id');
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
                text: "You will not be able to recover this POS file!",
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
                url:"counter/destroy/"+counterid,
                success:function(data){
                    swal("Deleted!", "Your Counter file has been deleted.", "success")
                    $('#CounterDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your Cashier file is safe :)", "error");
                }
            });
        }
        $('.ip').inputmask('999.999.999.999', { placeholder: '___.___.___.___' });
    });

</script>