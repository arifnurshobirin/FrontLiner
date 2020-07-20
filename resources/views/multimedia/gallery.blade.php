@section('title page','Gallery Page')

<div class="container-fluid">
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
                                <a href="img/training1.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                    <img src="img/training1.jpg" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="img/training2.jpg" data-toggle="lightbox" data-title="sample 2 - black">
                                    <img src="img/training2.jpg" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="img/training3.jpg" data-toggle="lightbox" data-title="sample 3 - red">
                                    <img src="img/training3.jpg" class="img-fluid mb-2" alt="red sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="img/training4.jpg" data-toggle="lightbox" data-title="sample 4 - red">
                                    <img src="img/training4.jpg" class="img-fluid mb-2" alt="red sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="img/training5.jpg" data-toggle="lightbox" data-title="sample 5 - black">
                                    <img src="img/training5.jpg" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="img/training6.jpg" data-toggle="lightbox" data-title="sample 6 - white">
                                    <img src="img/training6.jpg" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="img/training7.jpg" data-toggle="lightbox" data-title="sample 7 - white">
                                    <img src="img/training7.jpg" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="img/training8.jpg" data-toggle="lightbox" data-title="sample 8 - black">
                                    <img src="img/training8.jpg" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                                <a href="img/training9.jpg" data-toggle="lightbox" data-title="sample 9 - red">
                                    <img src="img/training9.jpg" class="img-fluid mb-2" alt="red sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="img/training10.jpg" data-toggle="lightbox" data-title="sample 10 - white">
                                    <img src="img/training10.jpg" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                <a href="img/training11.jpg" data-toggle="lightbox" data-title="sample 11 - white">
                                    <img src="img/training11.jpg" class="img-fluid mb-2" alt="white sample" />
                                </a>
                            </div>
                            <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                                <a href="img/training12.jpg" data-toggle="lightbox" data-title="sample 12 - black">
                                    <img src="img/training12.jpg" class="img-fluid mb-2" alt="black sample" />
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div><!-- /.container-fluid -->
<script>
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
    $(".preloader").fadeOut("slow"); 
</script>