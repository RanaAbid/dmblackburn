</div>
<!-- End Main Content-->

<!-- Main Footer-->
<div class="main-footer text-center">
  <div class="container">
    <div class="row row-sm">
      <div class="col-md-12">
        <span>Copyright © <?= $current_year ?> DMblackburn All rights reserved.</span>
      </div>
    </div>
  </div>
</div>
<!--End Footer-->

</div>
<!-- End Page -->

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="<?= $app_path ?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="<?= $app_path ?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= $app_path ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 js-->
<script src="<?= $app_path ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?= $app_path ?>assets/js/select2.js"></script>

<!-- Perfect-scrollbar js -->
<script src="<?= $app_path ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Sidemenu js -->
<script src="<?= $app_path ?>assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Sidebar js -->
<script src="<?= $app_path ?>assets/plugins/sidebar/sidebar.js"></script>

<!-- Internal Sweet-Alert js-->
<script src="<?= $app_path ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Toastify js -->
<script src='https://cdn.jsdelivr.net/npm/toastify-js'></script>

<!-- Sticky js -->
<script src="<?= $app_path ?>assets/js/sticky.js"></script>

<!-- tinymce -->
<script src="https://cdn.tiny.cloud/1/w395mvczmjfpberas5p9vhfqceu4ciwb6nq1eaxwpxwjross/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Internal Data Table js -->
<script src="<?= $app_path ?>assets/plugins/DataTables/datatables.min.js"></script>


<script src="<?= $app_path ?>assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="<?= $app_path ?>assets/plugins/fileuploads/js/file-upload.js"></script>


<!--Bootstrap-datepicker js-->
<script src="<?= $app_path ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<!-- Internal jquery-simple-datetimepicker js -->
<script src="<?= $app_path ?>assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

<!-- Internal Parsley js-->
<script src="<?= $app_path ?>assets/plugins/parsleyjs/parsley.min.js"></script>

<!-- Internal Form-validation js-->
<script src="<?= $app_path ?>assets/js/form-validation.js"></script>

<script src="<?= $app_path ?>assets/js/lord-icon-2.1.0.js"></script>
<!-- Custom js -->
<script src="<?= $app_path ?>assets/js/custom.js"></script>

<script type="text/javascript">
  var toastType = "<?php echo (isset($_SESSION['toast_type']) ? $_SESSION['toast_type'] : ''); ?>";
  var toast_msg = "<?php echo (isset($_SESSION['toast_msg']) ? $_SESSION['toast_msg'] : ''); ?>";
  if (toastType != "" && toast_msg != "") {
    window.onload = (event) => {
      Toastify({
        newWindow: !0,
        text: toast_msg,
        gravity: "top",
        position: "center",
        className: "bg-" + toastType,
        stopOnFocus: !0,
        offset: {
          x: "50 : 0",
          y: "10 : 0"
        },
        duration: "3000",
        close: "close" == "close",
        style: {
          background: toastType == 'danger' ? '#dc3545' : toastType == 'success' ? '#198754' : '',
        }
      }).showToast();
    }
  }
</script>
<?php
unset($_SESSION["toast_type"]);
unset($_SESSION["toast_msg"]);
?>
</body>

</html>