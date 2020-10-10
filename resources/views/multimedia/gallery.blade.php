@extends('layouts.app')
@section('title page','Gallery Page')
@section('title tab','Gallery')


@section('css')
<!-- Ekko Lightbox -->
<link href="{{ asset('plugins/ekko-lightbox/ekko-lightbox.css') }}" rel="stylesheet">
<!-- Page CSS -->
@endsection

@section('content')
<!-- Main content -->
<section class="content" id="contentpage">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Gallery Training Cashier
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="btn-group w-100 mb-2">
                            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                            <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED,
                                BLACK)
                            </a>
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
                    <div>
                        <div class="filter-container p-0 row">
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="{{ asset('img/training1.jpg') }}" data-toggle="lightbox" data-title="sample 1 - white">
                                    <img src="{{ asset('img/training1.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="{{ asset('img/training2.jpg') }}" data-toggle="lightbox" data-title="sample 2 - black">
                                    <img src="{{ asset('img/training2.jpg') }}" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="{{ asset('img/training3.jpg') }}" data-toggle="lightbox" data-title="sample 3 - red">
                                    <img src="{{ asset('img/training3.jpg') }}" class="img-fluid mb-2" alt="red sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="{{ asset('img/training4.jpg') }}" data-toggle="lightbox" data-title="sample 4 - red">
                                    <img src="{{ asset('img/training4.jpg') }}" class="img-fluid mb-2" alt="red sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="{{ asset('img/training5.jpg') }}" data-toggle="lightbox" data-title="sample 5 - black">
                                    <img src="{{ asset('img/training5.jpg') }}" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="{{ asset('img/training6.jpg') }}" data-toggle="lightbox" data-title="sample 6 - white">
                                    <img src="{{ asset('img/training6.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="{{ asset('img/training7.jpg') }}" data-toggle="lightbox" data-title="sample 7 - white">
                                    <img src="{{ asset('img/training7.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="{{ asset('img/training8.jpg') }}" data-toggle="lightbox" data-title="sample 8 - black">
                                    <img src="{{ asset('img/training8.jpg') }}" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="{{ asset('img/training9.jpg') }}" data-toggle="lightbox" data-title="sample 9 - red">
                                    <img src="{{ asset('img/training9.jpg') }}" class="img-fluid mb-2" alt="red sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="{{ asset('img/training10.jpg') }}" data-toggle="lightbox" data-title="sample 10 - white">
                                    <img src="{{ asset('img/training10.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="{{ asset('img/training11.jpg') }}" data-toggle="lightbox" data-title="sample 11 - white">
                                    <img src="{{ asset('img/training11.jpg') }}" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="{{ asset('img/training12.jpg') }}" data-toggle="lightbox" data-title="sample 12 - black">
                                    <img src="{{ asset('img/training12.jpg') }}" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
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
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function () {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>
@endsection