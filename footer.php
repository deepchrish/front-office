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
<!-- Date picker js-->
<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/timepicker@1.13.15/jquery.timepicker.js'></script>
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
  /*History editor*/
  var quill = new Quill('#history-editor', {
    theme: 'snow'
  });

  /*colorpicker*/
  $('.demo').each(function () {
    $(this).minicolors({
      control: $(this).attr('data-control') || 'hue',

      change: function (value, opacity) {
        if (!value) return;
        if (opacity) value += ', ' + opacity;
        if (typeof console === 'object') {
          console.log(value);
        }
      },
      theme: 'bootstrap'
    });

  });

  //Recurrence tab section show and hide
  $(document).ready(function () {
    $(".daily, .weekly, .monthly, .yearly").hide("fast");

    $("#once").click(function () {
      $(".once").show("fast");
      $(".daily, .weekly, .monthly, .yearly, .daily-everyday, .daily-weekday").hide("fast");

    });
    $("#daily").click(function () {
      $(".once").hide("fast");
      $(".daily").show("fast");
      $(".weekly").hide("fast");
      $(".monthly").hide("fast");
      $(".yearly").hide("fast");
      $('.daily-everyday').show("fast");
    });
    $("#weekly").click(function () {
      $(".once").hide("fast");
      $(".daily").hide("fast");
      $(".weekly").show("fast");
      $(".monthly").hide("fast");
      $(".yearly").hide("fast");
    });
    $("#monthly").click(function () {
      $(".once").hide("fast");
      $(".daily").hide("fast");
      $(".weekly").hide("fast");
      $(".monthly").show("fast");
      $(".yearly").hide("fast");
    });
    $("#yearly").click(function () {
      $(".once").hide("fast");
      $(".daily").hide("fast");
      $(".weekly").hide("fast");
      $(".monthly").hide("fast");
      $(".yearly").show("fast");
    });
  });

  //Monthly recurrence radio button active or not
  $("#every_weekday").click(function () {
    $('#days').attr('disabled', 'disabled');
  });

  $("#every").click(function () {
    $('#days').removeAttr('disabled');
  });

  $("#ddNumberedDays").click(function () {
    $("#ddModifierday_value").attr("disabled", "disabled");
    $('#ddTypedDays').attr('disabled', 'disabled');
  });
  $("#ddModifierday").click(function () {
    $('#ddModifierday_value').removeAttr('disabled');
    $('#ddTypedDays').removeAttr('disabled');
    $('#ddNumberedDays_num').attr('disabled', 'disabled');
  });

  //Yearly recurrence radio button active or not
  $("#ddYearModifier").click(function () {
    $("#yearNum").attr("disabled", "disabled");
    $('#ddTypedYearlyDays').attr('disabled', 'disabled');
    $('#yearlymonths').attr('disabled', 'disabled');
    $('#months').removeAttr('disabled');
    $('#ddnumbereddaysmonthly').removeAttr('disabled');
  });

  $("#ddYearModifierSecond").click(function () {
    $("#months").attr("disabled", "disabled");
    $('#ddnumbereddaysmonthly').attr('disabled', 'disabled');
    $("#yearNum").removeAttr('disabled');
    $('#ddTypedYearlyDays').removeAttr('disabled');
    $('#yearlymonths').removeAttr('disabled');
  });


  //Range recurrence radio button active or not
  $("#noend_date").click(function () {
    $("#end_Date").attr("disabled", "disabled");
  });
  $("#ends").click(function () {
    $('#end_Date').removeAttr('disabled');
  });

  /*datwpicker*/
  jQuery('.mydatepicker').datepicker({
    format: 'dd-mm',
    maxViewMode: "date",
    maxViewMode: "months"
  });

  // timepicker
  $(function () {
    $('.addtime').timepicker();
    // Comment out the following line and you will see that normally the event will fire even if selecting the same time again
    $('.addtime').timepicker('option', {
      useSelect: true,
      step: 10,
    });
  });
</script>
</body>

</html>