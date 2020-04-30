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
                <div align="right">
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
                                <th>TID EDC</th>
                                <th>NO Terminal</th>
                                <th>Connection</th>
                                <th>SIM Card</th>
                                <th>Type EDC</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>TID EDC</th>
                                <th>NO Terminal</th>
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
                    <input type="hidden" name="edc_id" id="edc_id">
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
                    <label for="no">No Terminal</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="noterminal" name="noterminal" class="form-control"
                                placeholder="Enter your No Terminal" required>
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
    var jq = jQuery.noConflict();
    jq(document).ready(function() {
        var table = jq('#EDCDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('edc.index') }}",
            },
            columns: [
                { data: 'TIDEDC', name: 'TIDEDC' },
                { data: 'NoTerminal', name: 'NoTerminal' },
                { data: 'Connection', name: 'Connection' },
                { data: 'SIMCard', name: 'SIMCard' },
                { data: 'TypeEDC', name: 'TypeEDC' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        jq('#create_edc').click(function () {
            $('#saveBtn').val("create-edc");
            $('#saveBtn').html('Save');
            $('#edc_id').val('');
            $('#edcForm').trigger("reset");
            $('#modelHeading').html("Create New EDC");
            $('#ajaxModel').modal('show');
        });

        $(document).on('click', '.editedc', function () {
            var edc_id = $(this).attr('id');
            $.get("{{ route('edc.index') }}" +'/' + edc_id +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data EDC");
                $('#saveBtn').val("edit-edc");
                $('#saveBtn').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#edc_id').val(data.id);
                $('#tidedc').val(data.TIDEDC);
                $('#midedc').val(data.MIDEDC);
                $('#ipedc').val(data.IPAdress);
                $('#noterminal').val(data.NoTerminal);
                $('#connection').val(data.Connection);
                $('#simcard').val(data.SIMCard);
                $('#typeedc').val(data.TypeEDC);
            })
        });

        $(document).on('click', '.showedc', function () {
            var id = $(this).attr('id');
                $('#mainpage').load('edc'+'/'+id);
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
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        var type;
        var edc_id;
        $(document).on('click', '.js-sweetalert', function(){
            edc_id = $(this).attr('id');
            var type = $(this).data('type');
            if (type === 'basic') {
            showBasicMessage();
            }
            else if (type === 'with-title') {
                showWithTitleMessage();
            }
            else if (type === 'success') {
                showSuccessMessage();
            }
            else if (type === 'confirm') {
                showConfirmMessage();
            }
            else if (type === 'cancel') {
                showCancelMessage();
            }
            else if (type === 'with-custom-icon') {
                showWithCustomIconMessage();
            }
            else if (type === 'html-message') {
                showHtmlMessage();
            }
            else if (type === 'autoclose-timer') {
                showAutoCloseTimerMessage();
            }
            else if (type === 'prompt') {
                showPromptMessage();
            }
            else if (type === 'ajax-loader') {
                showAjaxLoaderMessage();
            }
        });

        function showBasicMessage() {
            swal("Here's a message!");
        }

        function showWithTitleMessage() {
            swal("Here's a message!", "It's pretty, isn't it?");
        }

        function showSuccessMessage() {
            swal("Good job!", "You clicked the button!", "success");
        }

        function showConfirmMessage() {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                swal("Deleted!", "Your imaginary file has been deleted.", "success")
            });
        }

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
                url:"edc/destroy/"+edc_id,
                success:function(data){
                    swal("Deleted!", "Your edc file has been deleted.", "success")
                    jq('#EDCDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your edc file is safe :)", "error");
                }
            });
        }

        function showWithCustomIconMessage() {
            swal({
                title: "EDC "+edc_id,
                text: "TID EDC :<br>MID EDC :<br>NO Terminal :<br>Connection :<br>SIM Card :<br>Type EDC :<br>",
                html: true,
                imageUrl: "../../images/EDCBCA.jpg"
            });
        }

        function showHtmlMessage() {
            swal({
                title: "<small>From Create Data </small>EDC",
                text: "A custom <span style=\"color: #CC0000\">html<span> message.",
                html: true
            });
        }

        function showAutoCloseTimerMessage() {
            swal({
                title: "Auto close alert!",
                text: "I will close in 2 seconds.",
                timer: 2000,
                showConfirmButton: false
            });
        }

        function showPromptMessage() {
            swal({
                title: "An input!",
                text: "Write something interesting:",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                animation: "slide-from-top",
                inputPlaceholder: "Write something"
            }, function (inputValue) {
                if (inputValue === false) return false;
                if (inputValue === "") {
                    swal.showInputError("You need to write something!"); return false
                }
                swal("Nice!", "You wrote: " + inputValue, "success");
            });
        }

        function showAjaxLoaderMessage() {
            swal({
                title: "Ajax request example",
                text: "Submit to run ajax request",
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function () {
                setTimeout(function () {
                    swal("Ajax request finished!");
                }, 2000);
            });
        }


    });

</script>
