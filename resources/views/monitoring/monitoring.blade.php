<!-- Monitoring Data -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Monitoring</h3>
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
                <!-- Date range -->
                <div class="form-group">
                    <label>Date range:</label>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="fromdate" id="fromdate" class="form-control inputdaterange"
                                placeholder="From Date" readonly />
                        </div>
                        <div class="col-md-4 todate2">
                            <input type="text" name="todate" id="todate" class="form-control todate"
                                placeholder="To Date" readonly />
                        </div>
                        <div class="col-md-4">
                            <button type="button" name="scheduleapply" id="scheduleapply"
                                class="btn btn-primary">Apply</button>
                            <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                        </div>
                    </div>
                </div>
                <!-- /.form group -->
                <br>
                <div class="row">
                    @foreach($data as $list)
                    <div class="col-lg-2 col-6">
                        <!-- small card -->
                        @if($list->StatusCounter == 'Queueing')
                        <div id="changecolor" class="small-box bg-danger">
                        @elseif($list->StatusCounter == 'Active')
                        <div id="changecolor" class="small-box bg-success">
                        @elseif($list->StatusCounter == 'Inactive')
                        <div id="changecolor" class="small-box bg-warning">
                        @elseif($list->StatusCounter == 'Ready')
                        <div id="changecolor" class="small-box bg-secondary">
                        @elseif($list->StatusCounter == 'Broken')
                        <div id="changecolor" class="small-box bg-black">
                        @endif
                            <div class="inner">
                                <h3>{{ $list->NoCounter }}</h3>

                                <p>{{ $list->TypeCounter }}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-cash-register"></i>
                            </div>
                            <a class="small-box-footer nav-link" data-toggle="collapse" data-parent="#accordion"
                                href="#collapse{{ $list->id }}">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                            <!-- <a href="#" class="small-box-footer nav-link" data-toggle="dropdown">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                        <div class="box-body bg-white dropdown-menu">
                        <button class="btn-primary dropdown-item">Change Color</button>
                        </div> -->
                            <div id="collapse{{ $list->id }}" class="panel-collapse collapse in">
                                <div class="card-body">
                                    Anim pariatur
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Project Website Cashier Carrefour Taman Palem
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->


<script>
    $(document).ready(function() {
        // var datapos = new Array();
        // var status = $(this).attr('list->StatusCounter');

        // conslole log('StatusCounter');
        // if (status === 'Queueing') {
        //     $("#changecolor").removeClass("bg-secondary");
        //     $("#changecolor").addClass("bg-danger");
        //     }
        // else if (status === 'Active') {
        //     $("#changecolor").removeClass("bg-secondary");
        //     $("#changecolor").addClass("bg-success");
        //     // $( ".bg-success" ).switchClass( "bg-success", "bg-info", 1000 );
        //     }
        // else if (status === 'Inaktive') {
        //     $("#changecolor").removeClass("bg-secondary");
        //     $("#changecolor").addClass("bg-warning");
        //     }
        // else if (status === 'Broken') {
        //     $("#changecolor").removeClass("bg-secondary");
        //     $("#changecolor").addClass("bg-black");
        //     }

    });
</script>