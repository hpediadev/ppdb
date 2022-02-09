
<!-- jQuery 2.2.3 -->
<script src="<?= base_url('assets4/')?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets4/')?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets4/')?>plugins/iCheck/icheck.min.js"></script>

<!-- InputMask -->
<script src="<?= base_url('assets4/')?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url('assets4/')?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url('assets4/')?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

  $(function () {
     //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

  });
</script>


</body>
</html>
