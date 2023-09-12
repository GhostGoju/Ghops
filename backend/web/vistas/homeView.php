<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <?php require_once INCLUDES_TEMPLADE . "header.php"; ?></php>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php require_once INCLUDES_TEMPLADE . "navbar.php"; ?></php>
        <?php require_once INCLUDES_TEMPLADE . "aside.php"; ?></php>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Catalogo</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Camisetas</h3>
                                    <div class="card-tools">
                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="web/cmdDefaultEcommerce" s data-gallery="gallery">
                                                <img src="public/img/productos/ropaf.png" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="web/cmdDefaultEcommerce" s data-gallery="gallery">
                                                <img src="public/img/productos/ropaf.png" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="web/cmdDefaultEcommerce" s data-gallery="gallery">
                                                <img src="public/img/productos/ropaf.png" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="web/cmdDefaultEcommerce" s data-gallery="gallery">
                                                <img src="public/img/productos/ropaf.png" class="img-fluid mb-2" alt="black sample" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Pocillos</h3>
                                    <div class="card-tools">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php require_once INCLUDES_TEMPLADE . "footer.php"; ?></php>
    </div>


    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
</body>

</html>