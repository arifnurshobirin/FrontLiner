@extends('layouts.app') 
@section('title tab','Monitoring Page')
@section('title page','Monitoring Page')

@section('css')
<!-- Ekko Lightbox -->
<link href="{{ asset('plugins/ekko-lightbox/ekko-lightbox.css') }}" rel="stylesheet">
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
    <div class="card card-danger card-outline">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-desktop"></i> Monitoring</h3>
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
                    <a class="btn btn-primary active" href="javascript:void(0)" data-filter="all">All POS</a>
                    <a class="btn btn-danger" href="javascript:void(0)" data-filter="1">POS Queueing</a>
                    <a class="btn btn-success" href="javascript:void(0)" data-filter="2">POS Active </a>
                    <a class="btn btn-warning" href="javascript:void(0)" data-filter="3">POS Inactive</a>
                    <a class="btn btn-secondary" href="javascript:void(0)" data-filter="4">POS Broken</a>
                </div>
                <div class="mb-2">
                    <a class="btn btn-primary" href="javascript:void(0)" data-shuffle> Shuffle POS </a>
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
            
                <div class="row">
                    <div class="filter-container">
                    @foreach($data as $list)
                        @if($list->Status == 'Queueing')
                    <div class="col-lg-2 col-6 filtr-item" data-category="1" data-sort="{{$list->NoCounter}}">
                        <!-- small card -->
                        <div id="changecolor" class="small-box bg-danger">
                        @elseif($list->Status == 'Active')
                    <div class="col-lg-2 col-6 filtr-item" data-category="2" data-sort="{{$list->NoCounter}}">
                        <!-- small card -->
                        <div id="changecolor" class="small-box bg-success">
                        @elseif($list->Status == 'Inactive')
                    <div class="col-lg-2 col-6 filtr-item" data-category="3" data-sort="{{$list->NoCounter}}">
                        <!-- small card -->
                        <div id="changecolor" class="small-box bg-warning">
                        @elseif($list->Status == 'Broken')
                    <div class="col-lg-2 col-6 filtr-item" data-category="4" data-sort="{{$list->NoCounter}}">
                        <!-- small card -->
                        <div id="changecolor" class="small-box bg-secondary">
                        @endif

                            <div class="inner">
                                <h3>{{ $list->NoCounter }}</h3>
                                <p>{{ $list->TypeCounter }}</p>
                            </div>
                            <div class="icon">
                                @if($list->Status == 'Queueing')
                                <i class="fas fa-user"></i>
                                @elseif($list->Status == 'Active')
                                <i class="fas fa-user"></i>
                                @elseif($list->Status == 'Inactive')
                                <i class="fas fa-cash-register"></i>
                                @elseif($list->Status == 'Broken')
                                <i class="fas fa-cash-register"></i>
                                @endif
                            </div>
                            <button type="button" class="btn btn-block bg-dark" data-toggle="modal" data-target="#edcmodal{{$list->NoCounter}}">
                                EDC <i class="fas fa-fax"></i>
                            </button>
                            {{-- <button class="btn btn-block bg-dark" onclick="edcmodalshow({{$list->NoCounter}})"> --}}
                        </div>
                        
                    </div>
                    <!-- EDC Modal -->
                    <div class="modal fade" id="edcmodal{{$list->NoCounter}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="headingmodal">Detail EDC POS {{$list->NoCounter}}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="card bg-light">
                                        <div class="card-header text-muted border-bottom-0">
                                            Electronic Data Capture
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>EDC {{$list->TypeEDC}}</b></h2>
                                                    <p class="text-muted text-sm"><b>TID: </b> {{$list->TIDEDC}} </p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-fax"></i></span> Status: 
                                                            @if($list->StatusEDC == 'Active')
                                                            <a class="text-success">{{$list->StatusEDC}}</a>
                                                            @elseif($list->StatusEDC == 'Inactive')
                                                            <a class="text-danger">{{$list->StatusEDC}}</a>
                                                            @elseif($list->StatusEDC == 'Lock')
                                                            <a class="text-warning">{{$list->StatusEDC}}</a>
                                                            @elseif($list->StatusEDC == 'Broken')
                                                            <b class="text-dark">{{$list->StatusEDC}}</b>
                                                            @endif
                                                        </li>
                                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-sim-card"></i></span>
                                                            Connection: {{$list->SIMCard}}</li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="{{ asset('img/'.$list->TypeEDC.'.jpg') }}" alt="" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a href="{{ route('edc.index') }}" class="btn btn-sm bg-secondary">
                                                    <i class="fas fa-cogs"></i>
                                                </a>
                                                <a href="#" class="edcshow btn btn-sm btn-secondary" id="{{$list->idEDC}}">
                                                    <i class="fas fa-user"></i> View Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# EDC Modal -->
            @endforeach
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Project Website Cashier Carrefour Taman Palem
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

@endsection

@section('javascript')
<!-- Ekko Lightbox -->
<script src="{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- Filterizr-->
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- page script -->
<script>
    $(".preloader").fadeOut("slow");
    function edcmodalshow(nocounter){
        judul = 'Detail EDC POS '.concat(nocounter);
        $('#saveBtn').val("create-edc");
            $('#savebutton').html('Save');
            $('#edcid').val('');
            $('#edcForm').trigger("reset");
            $('#headingmodal').html(judul);
            $('#edcmodal').modal('show');
    }
    $(document).ready(function() {
        $('.filter-container').filterizr({
            gutterPixels: 3
        });

        $('.btn[data-filter]').on('click', function () {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });

        $(document).on('click', '.edcshow', function () {
            var id = $(this).attr('id');
                $('#contentpage').load('edc'+'/'+id);
        });
        
    });
</script>
@endsection