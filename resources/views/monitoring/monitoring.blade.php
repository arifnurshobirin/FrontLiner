@extends('layouts.app') 
@section('title tab','Monitoring Page')
@section('title page','Monitoring Page')

@section('css')
<!-- Page CSS -->
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="urlpage">Monitoring Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active urlpage">Monitoring Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content" id="contentpage">
    <!-- Default box -->
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
            <div>
                <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (RED) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (GREEN) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (YELLOW) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (GRAY)</a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="5"> Category 5 (BLACK)</a>
                </div>
                <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                    <div class="float-right">
                        <select class="custom-select" style="width: auto;" data-sortOrder>
                            <option value="index"> Sort by Position </option>
                            <option value="sortData"> Sort by Custom Data </option>
                        </select>
                        <div class="btn-group">
                            <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                            <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.form group -->
            <div class="form-group">
                <button type="button" name="infocolor" id="infocolor" class="btn btn-danger"><i
                        class="fas fa-User"></i></button>
                <label>POS Queueing</label>
                <button type="button" name="infocolor" id="infocolor" class="btn btn-success"><i
                        class="fas fa-User"></i></button>
                <label>POS Active</label>
                <button type="button" name="infocolor" id="infocolor" class="btn btn-warning"><i
                        class="fas fa-User"></i></button>
                <label>POS Inactive</label>
                <button type="button" name="infocolor" id="infocolor" class="btn btn-secondary"><i
                        class="fas fa-User"></i></button>
                <label>POS Ready</label>
                <button type="button" name="infocolor" id="infocolor" class="btn bg-black"><i
                        class="fas fa-User"></i></button>
                <label>POS Broken</label>
            </div>
            <div class="filter-container row">
                <?php
                        $oldcounter= 0;
                    ?>
                @foreach($data as $list)

                <?php
                        if($oldcounter != $list->NoCounter)
                        {
                            ?>
                @if($list->StatusCounter == 'Queueing')
                <div class="col-lg-2 col-6 filtr-item" data-category="1" data-sort="{{$list->NoCounter}}">
                    <!-- small card -->
                    <div id="changecolor" class="small-box bg-danger">
                        @elseif($list->StatusCounter == 'Active')
                        <div class="col-lg-2 col-6 filtr-item" data-category="2" data-sort="{{$list->NoCounter}}">
                            <!-- small card -->
                            <div id="changecolor" class="small-box bg-success">
                                @elseif($list->StatusCounter == 'Inactive')
                                <div class="col-lg-2 col-6 filtr-item" data-category="3"
                                    data-sort="{{$list->NoCounter}}">
                                    <!-- small card -->
                                    <div id="changecolor" class="small-box bg-warning">
                                        @elseif($list->StatusCounter == 'Ready')
                                        <div class="col-lg-2 col-6 filtr-item" data-category="4"
                                            data-sort="{{$list->NoCounter}}">
                                            <!-- small card -->
                                            <div id="changecolor" class="small-box bg-secondary">
                                                @elseif($list->StatusCounter == 'Broken')
                                                <div class="col-lg-2 col-6 filtr-item" data-category="5"
                                                    data-sort="{{$list->NoCounter}}">
                                                    <!-- small card -->
                                                    <div id="changecolor" class="small-box bg-black">
                                                        @endif
                                                        <div class="inner">
                                                            <h3>{{ $list->NoCounter }}</h3>

                                                            <p>{{ $list->TypeCounter }}</p>
                                                        </div>
                                                        <div class="icon">
                                                            @if($list->StatusCounter == 'Queueing')
                                                            <i class="fas fa-user"></i>
                                                            @elseif($list->StatusCounter == 'Active')
                                                            <i class="fas fa-user"></i>
                                                            @elseif($list->StatusCounter == 'Inactive')
                                                            <i class="fas fa-cash-register"></i>
                                                            @elseif($list->StatusCounter == 'Ready')
                                                            <i class="fas fa-cash-register"></i>
                                                            @elseif($list->StatusCounter == 'Broken')
                                                            <i class="fas fa-cash-register"></i>
                                                            @endif
                                                        </div>
                                                        <a class="small-box-footer nav-link" data-toggle="collapse"
                                                            href=".buka{{ $list->NoCounter }}">
                                                            More info <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- <a href="#" class="small-box-footer nav-link" data-toggle="dropdown">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                        <div class="box-body bg-white dropdown-menu">
                        <button class="btn-primary dropdown-item">Change Color</button>
                        </div> -->
                                                <div class="panel-collapse collapse in buka{{$list->NoCounter}}">
                                                    <div class="info-box bg-info">
                                                        <span class="info-box-icon"><i class="fas fa-fax"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{$list->TIDEDC}}</span>
                                                            <span class="info-box-text">{{$list->TypeEDC}}</span>
                                                            <span class="info-box-number">41,410</span>
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 70%"></div>
                                                            </div>
                                                            <span class="progress-description">
                                                                70%
                                                            </span>
                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>
                                                <?php
                        }
                    else
                    { ?>
                                                <div class="panel-collapse collapse in buka{{$list->NoCounter}}">
                                                    <div class="info-box bg-info">
                                                        <span class="info-box-icon"><i class="fas fa-fax"></i></span>
                                                        <div class="info-box-content">
                                                            <span class="info-box-text">{{$list->TIDEDC}}</span>
                                                            <span class="info-box-text">{{$list->TypeEDC}}</span>
                                                            <span class="info-box-number">41,410</span>
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 70%"></div>
                                                            </div>
                                                            <span class="progress-description">
                                                                70%
                                                            </span>
                                                        </div>
                                                        <!-- /.info-box-content -->
                                                    </div>
                                                    <!-- /.info-box -->
                                                </div>

                                                <?php
                        }
                            $oldcounter = $list->NoCounter;
                            ?>
                                                @endforeach

                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                Project Website Cashier Carrefour Taman Palem
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('javascript')
<!-- page script -->
<script>
    $(".preloader").fadeOut("slow");
    $(document).ready(function() {
        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function () {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
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
@endsection