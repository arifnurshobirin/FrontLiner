<!-- Management Table -->
<div class="row">
    <div class="col-12">
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
                <div align="right">
                    <button type="button" name="managementcreate" id="managementcreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add Management</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="ManagementDatatable">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Id Card</th>
                                <th>Full Name</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Avatar</th>
                                <th>Id Card</th>
                                <th>Full Name</th>
                                <th>Position</th>
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
                <form method="post" id="managementform" name="managementform" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="managementid" id="managementid">
                    <label for="emp">Id Number</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="idnumber" name="idnumber" class="form-control"
                                    placeholder="Enter your Id Number" required>
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
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="cashiersave" value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<script>
    $(document).ready(function() {
            var table = $('#ManagementDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('management.index') }}",
            },
            "order": [[ 1, "asc" ]],
            columns: [
                {
                        "render": function (data, type, JsonResultRow, meta) {
                            return '<img src="../../img/'+JsonResultRow.Avatar+'" class="avatar" width="50" height="50">';
                        }
                    },
                { data: 'IdNumber', name: 'IdNumber' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Position', name: 'Position' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });


        $('#managementcreate').click(function () {
            $('#managementsave').val("create-management");
            $('#managementsave').html('Save');
            $('#managementid').val('');
            $('#managementform').trigger("reset");
            $('#modelHeading').html("Create New Management");
            $('#ajaxModel').modal('show');
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
                $('#idnumber').val(data.IdNumber);
                $('#name').val(data.FullName);
                $('#position').val(data.Position);
            })
        });

        $(document).on('click', '.managementshow', function () {
            var id = $(this).attr('id');
                $('#mainpage').load('management'+'/'+id);
        });


        $('#managementform').on("submit",function (event) {
            event.preventDefault();
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
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#managementsave').html('Save Changes');
                }
            });
        });

            var type;
            var managementid;
            $(document).on('click', '.js-sweetalert', function(){
                managementid = $(this).attr('id');
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
                text: "You will not be able to recover this Management file!",
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
                url:"management/destroy/"+managementid,
                success:function(data){
                    swal("Deleted!", "Your Management file has been deleted.", "success")
                    $('#ManagementDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your Management file is safe :)", "error");
                }
            });
        }

    });

</script>
