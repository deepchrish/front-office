</div>
<!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<!-- All Jquery -->

<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!-- table -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- Select 2  -->
<script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="assets/libs/select2/dist/js/select2.min.js"></script>
<!-- Editor -->
<script src="assets/libs/quill/dist/quill.min.js"></script>
<!-- Color picker js-->
<script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script>
	/*select2*/ 
    $(".select2").select2();

    /*note editor*/
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    /*call editor*/
    var quill = new Quill('#attch_editor', {
        theme: 'snow'
    });

    /*colorpicker*/
    $('.demo').each(function() {
    $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
</script>
</body>

</html>