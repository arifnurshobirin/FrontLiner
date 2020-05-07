@include('sweetalert::alert')
<!-- Cashier Table -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cashier DataTable</h3>
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
                    <button type="button" name="cashiercreate" id="cashiercreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add Cashier</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="CashierDatatable">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Employee</th>
                                <th>Full Name</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Avatar</th>
                                <th>Employee</th>
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
                <form method="post" id="cashierform" name="cashierform" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="cashierid" id="cashierid">
                    <label for="emp">Employee</label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-id-badge"></i></span>
                                </div>
                                <input type="text" id="emp" name="emp" class="form-control" data-inputmask='"mask": "(999)"' data-mask required>
                            </div>    
                        </div>
                    <label for="fullname">Full Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter your Full Name" required>
                                </div>
                            </div>
                            <label for="birth">Date Of Birth</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker1" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="birth" name="birth" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <label for="address">Address</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <textarea rows="2" id="address" name="address" class="form-control no-resize" placeholder="Please input your Address..."></textarea>
                                </div>
                            </div>
                            <label for="phone">Phone Number</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                    </div>
                                        <input type="text" id="phone" name="phone" class="form-control" data-inputmask='"mask": "9999-99999999"' data-mask>
                                </div>
                            </div>
                            <label for="position">Position</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" id="position" name="position">
                                        <option value="">-- Please select --</option>
                                        <option value="Cashier">Cashier</option>
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="TDR">TDR</option>
                                        <option value="Senior Cashier">Senior Cashier</option>
                                        <option value="Cashier Head">Cashier Head</option>
                                    </select>
                                </div>
                            </div>
                            <label for="join">Join Date</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker2" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="join" name="join" class="form-control datetimepicker-input" data-target="#datetimepicker2" placeholder="dd/mm/yyyy">
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
            var table = $('#CashierDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('cashier.index') }}",
            },
            "order": [[ 1, "asc" ]],
            columns: [
                {
                        "render": function (data, type, JsonResultRow, meta) {
                            return '<img src="../../img/'+JsonResultRow.Avatar+'" class="avatar" width="50" height="50">';
                        }
                    },
                { data: 'Employee', name: 'Employee' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Position', name: 'Position' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        $('#cashiercreate').click(function () {
            $('#cashiersave').val("create-cashier");
            $('#cashiersave').html('Save');
            $('#cashierid').val('');
            $('#cashierform').trigger("reset");
            $('#modelHeading').html("Create New Cashier");
            $('#ajaxModel').modal('show');
        });

        $(document).on('click', '.cashieredit', function () {
            var cashierid = $(this).attr('id');
            $.get("{{ route('cashier.index') }}" +'/' + cashierid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data Cashier");
                $('#cashiersave').val("edit-cashier");
                $('#cashiersave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#cashierid').val(data.id);
                $('#emp').val(data.Employee);
                $('#name').val(data.FullName);
                $('#birth').val(data.DateOfBirth);
                $('#address').val(data.Address);
                $('#phone').val(data.PhoneNumber);
                $('#position').val(data.Position);
                $('#join').val(data.JoinDate);
            })
        });

        $(document).on('click', '.showcashier', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('cashier'+'/'+id);
        });


        $('#cashierform').on("submit",function (event) {
            event.preventDefault();
            $('#cashiersave').html('Sending..');
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('cashier.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#cashierform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#cashiersave').html('Save');
                    table.draw();
                    showSuccessMessage();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#cashiersave').html('Save Changes');
                }
            });
        });

            
            var cashierid;
            $(document).on('click', '.js-sweetalert', function(){
            cashierid = $(this).attr('id');
            showDeleteTable();
        });


        function showDeleteTable() {
            swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover this cashier file!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                url:"cashier/destroy/"+cashierid,
                success:function(data){
                    swal.fire("Deleted!", "Your Cashier file has been deleted.", "success")
                    $('#CashierDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal.fire("Cancelled", "Your Cashier file is safe :)", "error");
                }
            });
        }
        function showSuccessMessage() {
            swal.fire("Good job!", "You success update Cashier!", "success");
        }
        $('#datetimepicker1').datetimepicker({
                    format: 'L'
                });
        $('#datetimepicker2').datetimepicker({
                    format: 'L'
                });
        $('[data-mask]').inputmask()

    });

</script>
