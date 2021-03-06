<div class="page-header header-filter clear-filter purple-filter" data-parallax="true"
    style="background-image: url({{ asset('img/bg2.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>Form Obat</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="" class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 ml-auto mr-auto">
                <div class="main main-raised">
                    <div class="section section-basic">
                        <div class="container" style="max-width:900px">
                            <div class="space-50">
                                <h5 class="card-category card-category-social">
                                    <div>
                                        <span class="material-icons">medication</span> <i>Tambah Obat</i>
                                    </div>
                                </h5>
                            </div>
                            <div class="form-group text-center">
                                <a href="/tambahObatManual" type="submit" class="btn btn-round btn-success" style="width:50%">Manual</a>
                            </div>
                            <div class="form-group text-center">
                                <a href="" type="submit" class="btn btn-round btn-success" style="width:50%">Excel</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <input type="submit" class="btn btn-round btn-success" value="Tambah Obat"
                            style="margin-bottom:20px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    $(document).ready(function() {
        $(function() {
            $('#exp').datetimepicker({
                defaultDate: Date(),
                format: 'YYYY-MM-DD'
            });
        });
        // //init DateTimePickers
        // materialKit.initFormExtendedDatetimepickers();

    });

    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }

</script>
