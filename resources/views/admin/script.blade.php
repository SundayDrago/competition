 <!-- plugins:js -->
    <script src="dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="dist/assets/js/off-canvas.js"></script>
    <script src="dist/assets/js/misc.js"></script>
    <script src="dist/assets/js/settings.js"></script>
    <script src="dist/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="dist/assets/js/proBanner.js"></script>
    <script src="dist/assets/js/dashboard.js"></script>
    <!-- Include Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
    })();
</script>
