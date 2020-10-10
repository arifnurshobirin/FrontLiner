@extends('layouts.app')
@section('title page','EDC Page')
@section('title tab','EDC')


@section('css')
<!-- Page CSS -->
{{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
@endsection

@section('content')

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