<!-- EDC Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CASHIER TABLE
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div align="right">
                    <button type="button" name="cashiercreate" id="cashiercreate"  class="btn btn-success waves-effect">
                        <i class="material-icons">add</i><span>Add Cashier</span>
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
        </div>
    </div>
</div>
<!-- #END# EDC Table -->

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
                            <div class="form-line">
                                <input type="number" id="emp" name="emp" class="form-control"
                                    placeholder="Enter your Employee" required>
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
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" id="birth" name="birth" class="datepicker form-control" placeholder="Please choose a date...">
                                    </div>
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
                                    <span class="input-group-addon">
                                        <i class="material-icons">phone_iphone</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Please input Your Number">
                                    </div>
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
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" id="join" name="join" class="datepicker form-control" placeholder="Please choose a date...">
                                    </div>
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
    var jq = jQuery.noConflict();
    jq(document).ready(function() {
            var table = jq('#CashierDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('cashier.index') }}",
            },
            "order": [[ 1, "asc" ]],
            columns: [
                {
                        "render": function (data, type, JsonResultRow, meta) {
                            return '<img src="../../images/'+JsonResultRow.Avatar+'" class="avatar" width="50" height="50">';
                        }
                    },
                { data: 'Employee', name: 'Employee' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Position', name: 'Position' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        jq('.datepicker').bootstrapMaterialDatePicker({
            format: 'dddd DD MMMM YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
        });

        jq('#cashiercreate').click(function () {
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
                $('#mainpage').load('cashier'+'/'+id);
        });


        $('#cashierform').on("submit",function (event) {
            event.preventDefault();
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
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#cashiersave').html('Save Changes');
                }
            });
        });

            var type;
            var cashier_id;
            $(document).on('click', '.js-sweetalert', function(){
            cashier_id = $(this).attr('id');
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
                url:"cashier/destroy/"+cashier_id,
                success:function(data){
                    swal("Deleted!", "Your Cashier file has been deleted.", "success")
                    jq('#CashierDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your Cashier file is safe :)", "error");
                }
            });
        }

    });

</script>
