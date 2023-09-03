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


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Productos</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
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
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php require_once INCLUDES_TEMPLADE . "scripts.php"; ?></php>
    <!-- Page specific script -->
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