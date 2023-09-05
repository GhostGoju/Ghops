    <!-- jQuery -->
    <script src="<?php echo URL; ?>public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo URL; ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="<?php echo URL; ?>public/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo URL; ?>public/dist/js/adminlte.min.js"></script>
    <!-- Filterizr-->
    <script src="<?php echo URL; ?>public/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo URL; ?>public/dist/js/demo.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo URL; ?>public/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo URL; ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <!-- AdminLTE App -->
    <script src="public/js/adminlte.min.js"></script>

    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            <?php if (isset($d) && $d->message != "") : ?>
                Toast.fire({
                    icon: 'success',
                    title: '<?php echo $d->message; ?>'
                })
            <?php endif ?>
        });
    </script>