<!-- Add Schedule Table -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Schedule</h3>
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
                    <button type="button" name="schedulecreate" id="schedulecreate"
                        class="btn btn-success waves-effect">
                        <i class="fas fa-plus"></i><span> Add Schedule</span>
                    </button>
                </div>
                <!-- Date range -->
                <div class="form-group">
                    <label>Date range:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        id="ScheduleAdd">
                        <thead>
                            <tr>
                                <th>Cashier</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                                <th>Minggu</th>
                                <th>Working Hour</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datacashier as $listcashier) 
                            <tr>
                                <td>{{ $listcashier->Employee }} {{ $listcashier->FullName }}</td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="typecounter" name="typecounter">
                                            <option value=""></option>
                                            <option value="Off">Off</option>
                                            <option value="7:00-12:00-13:00-15:00">7:00-12:00-13:00-15:00</option>
                                            <option value="8:00-12:00-13:00-16:00">8:00-12:00-13:00-16:00</option>
                                            <option value="9:00-12:00-13:00-17:00">9:00-12:00-13:00-17:00</option>
                                            <option value="10:00-12:00-13:00-1800">10:00-12:00-13:00-1800</option>
                                            <option value="11:00-12:00-13:00-19:00">11:00-12:00-13:00-19:00</option>
                                            <option value="12:00-12:00-13:00-20:00">12:00-12:00-13:00-20:00</option>
                                            <option value="13:00-12:00-13:00-21:00">13:00-12:00-13:00-21:00</option>
                                            <option value="14:00-12:00-13:00-22:00">14:00-12:00-13:00-22:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                                <td>40 Jam</td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="#" class="countershow dropdown-item" id="{{ $listcashier->id }}"><i class="fas fa-desktop"></i> Show</a>
                                                <a href="#" class="counteredit dropdown-item" id="{{ $listcashier->id }}"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="#" class="counterdelete dropdown-item sweetalert" id="{{ $listcashier->id }}"><i class="fas fa-trash"></i> Delete</a>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Cashier</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                                <th>Minggu</th>
                                <th>Working Hour</th>
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



<script>
    $(document).ready(function() {
        

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

        //Date range picker
        $('#reservation').daterangepicker()
    });

</script>
