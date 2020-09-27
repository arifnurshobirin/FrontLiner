<!-- Add Picasso Report -->
<div class="row">
    <div class="preloader">
        <div class="loading">
            <div class="spinner-grow text-danger" role="status"></div>
            <div class="spinner-grow text-danger" role="status"></div>
            <div class="spinner-grow text-danger" role="status"><span class="sr-only">Loading...</span></div>
            <strong>Loading...</strong>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-clipboard-check"></i> Picasso Datatable</h3>
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
            <form method="post" id="scheduleform" name="scheduleform">
            @csrf
            <div class="card-body">
                <!-- Date range -->
                <div class="form-group">
                    <label>Hour range:</label>
                    <div class="row">
                        <div class="col-md-4">
                        <input type="text" name="fromdate" id="fromdate" class="form-control inputdaterange" placeholder="From Date" readonly />
                        </div>
                        <div class="col-md-4 todate2">
                        <input type="text" name="todate" id="todate" class="form-control todate" placeholder="To Date" readonly />
                        </div>
                        <div class="col-md-4">
                        <button type="button" name="scheduleapply" id="scheduleapply" class="btn btn-primary">Apply</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                        </div>
                    </div>
                </div>

                    <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="CodeShiftDatatable">
                        <thead>
                            <tr>
                                <th>Hour</th>
                                <th>jumlah cashier</th>
                                <th>jumlah customer</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            <tr>
                                <td><input type="text" name="codetes" id="codetes" class="form-control input-uppercase" value="tes" readonly/></td>
                                <td><input type="text" name="starttes" id="starttes" class="form-control input-uppercase" value="tes" readonly/></td>
                                <td><input type="text" name="endtes" id="endtes" class="form-control input-uppercase" value="tes" readonly/></td>
                                <td><div class="input-group">
                                        <input type="text" name="hourtes" id="hourtes" class="form-control input-uppercase" value="tes" readonly/>
                                        <div class="input-group-prepend"><span class="input-group-text">Hour</span> </div>
                                    </div>
                                </td>
                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="scheduleedit dropdown-item" id="tes" onclick="editshift(tes)"><i class="fas fa-edit"></i> Edit</a>
                                            <a class="schedulesave dropdown-item" id="tes" onclick="freezeshift(tes)"><i class="fas fa-desktop"></i> Save</a>
                                            <a class="scheduledelete dropdown-item" id="tes"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Hour</th>
                                <th>jumlah cashier</th>
                                <th>jumlah customer</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table> 

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
    $(".preloader").fadeOut("slow");
    $(document).ready(function() {

    });

</script>