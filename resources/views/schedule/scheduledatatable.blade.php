<!-- Schedule Table -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Schedule DataTable</h3>
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
                    <button type="button" name="schedulecreate" id="schedulecreate" class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add Schedule</span>
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="ScheduleDatatable">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Full Name</th>
                                <th>Date Work</th>
                                <th>Start Work</th>
                                <th>End Work</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Employee</th>
                                <th>Full Name</th>
                                <th>Date Work</th>
                                <th>Start Work</th>
                                <th>End Work</th>
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
                <form method="post" id="scheduleform" name="scheduleform" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="scheduleid" id="scheduleid">
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
                            <label for="birth">Date Work</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker1" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="date" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <label for="birth">Start Work</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker2" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="start" name="start" class="form-control datetimepicker-input" data-target="#datetimepicker2" paceholder="Chosee Start Work">
                                </div>
                            </div>
                            <label for="birth">End Work</label>
                            <div class="form-group">
                                <div class="input-group" id="datetimepicker3" data-target-input="nearest">
                                    <div class="input-group-prepend" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    </div>
                                        <input type="text" id="end" name="end" class="form-control datetimepicker-input" data-target="#datetimepicker3" paceholder="Chosee End Work">
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" id="schedulesave" value="create">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Create Table -->

<script>
    $(document).ready(function() {
            var table = $('#ScheduleDatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url:"{{ route('schedule.index') }}",
            },
            "order": [[ 1, "asc" ]],
            columns: [
                { data: 'Employee', name: 'Employee' },
                { data: 'FullName', name: 'FullName' },
                { data: 'Date', name: 'Date' },
                { data: 'StartWork', name: 'StartWork' },
                { data: 'EndWork', name: 'EndWork' },
                { data: 'action', name: 'action', orderable: false}
            ]
        });

        $('.datepicker').datepicker({
            format: 'dddd DD MMMM YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
        });

        $('#schedulecreate').click(function () {
            $('#schedulesave').val("create-schedule");
            $('#schedulesave').html('Save');
            $('#scheduleid').val('');
            $('#scheduleform').trigger("reset");
            $('#modelHeading').html("Create New Schedule");
            $('#ajaxModel').modal('show');
        });

        $(document).on('click', '.scheduleedit', function () {
            var scheduleid = $(this).attr('id');
            $.get("{{ route('schedule.index') }}" +'/' + scheduleid +'/edit', function (data)
            {
                $('#modelHeading').html("Edit Data Schedule");
                $('#schedulesave').val("edit-schedule");
                $('#schedulesave').html('Save Changes');
                $('#ajaxModel').modal('show');
                $('#scheduleid').val(data.id);
                $('#emp').val(data.Employee);
                $('#name').val(data.FullName);
                $('#birth').val(data.DateOfBirth);
                $('#address').val(data.Address);
                $('#phone').val(data.PhoneNumber);
                $('#position').val(data.Position);
                $('#join').val(data.JoinDate);
            })
        });

        $(document).on('click', '.showschedule', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('schedule'+'/'+id);
        });


        $('#scheduleform').on("submit",function (event) {
            event.preventDefault();
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('schedule.store') }}",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (data) {

                    $('#scheduleform').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    $('#schedulesave').html('Save');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#schedulesave').html('Save Changes');
                }
            });
        });

            var type;
            var schedule_id;
            $(document).on('click', '.js-sweetalert', function(){
            schedule_id = $(this).attr('id');
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
                url:"schedule/destroy/"+schedule_id,
                success:function(data){
                    swal("Deleted!", "Your Schedule file has been deleted.", "success")
                    $('#ScheduleDatatable').DataTable().ajax.reload();
                }
                });
                } else {
                    swal("Cancelled", "Your Schedule file is safe :)", "error");
                }
            });
        }
        $('#datetimepicker1').datetimepicker({
                    format: 'L'
                });
        $('#datetimepicker2').datetimepicker({
                    format: 'LT'
                });
        $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
        $('[data-mask]').inputmask()

    });

</script>
