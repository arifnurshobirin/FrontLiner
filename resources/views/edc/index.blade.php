@extends('layouts.app')
@section('title tab','EDC Page')
@section('title page','EDC Page')

@section('css')
<!-- Page CSS -->
{{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="urlpage">EDC Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active urlpage">EDC Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content" id="contentpage">
    <!-- Default box -->
    {{$dataTable->table()}}
</section>
<!-- /.content -->
@endsection

@section('javascript')
<!-- page script -->
 <!-- Yajra DataTables -->
 {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
 <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endsection

@push('scripts')
<script>
    $(".preloader").fadeOut("slow");
    
</script>
{{$dataTable->scripts()}}
@endpush