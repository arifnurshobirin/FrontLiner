@include('sweetalert::alert')
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
                <div>
                    <button type="button" name="managementcreate" id="managementcreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add Management</span>
                    </button>
                    <button type="button" name="managementsomedelete" id="managementsomedelete" class="btn btn-danger waves-effect">
                        <i class="fas fa-times"></i><span> Delete Some Managaement</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="ManagementDatatable">
                        <thead>
                            <tr>
                                <th>Checkbox</th>
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
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="managementsave" value="create">Save</button>
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
            "order": [[ 2, "asc" ]],
            columns: [
                { data: 'checkbox', name: 'checkbox', orderable:false, searchable: false},
                {
                        "render": function (data, type, JsonResultRow, meta) {
                            return '<img src="../../img/'+JsonResultRow.Avatar+'" class="avatar" width="50" height="50">';
                        }
                    },
                { data: 'IdCard', name: 'IdCard' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Position', name: 'Position' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
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
                $('#idcard').val(data.IdCard);
                $('#name').val(data.FullName);
                $('#position').val(data.Position);
            })
        });

        $(document).on('click', '.managementshow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('management'+'/'+id);
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
                    showSuccessMessage();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#managementsave').html('Save Changes');
                }
            });
        });

            var managementid;
            $(document).on('click', '.js-sweetalert', function(){
                managementid = $(this).attr('id');
                showDeleteTable()
        });


        function showDeleteTable() {
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
        }
        function showSuccessMessage() {
            swal.fire("Good job!", "You success update Management!", "success");
        }

    });

</script>
