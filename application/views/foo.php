
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


<script type="text/javascript">

$('.btn-kembali').click(function(e){
        e.preventDefault();
    Swal.fire({
          title: 'Yakin Anda Mau Kembali?',
        type: 'question',
        customClass: 'swal-wide',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Kembali',
        cancelButtonText: 'Tidak'
   }).then((result) => {
    if (result.value) {
     location.href=$(this).data('href');
    }
   })
})
    
$(document).ready(function() {
    $('#simpan').submit(function(e) {
        e.preventDefault();
        var pdf = document.getElementById('pdf').value;
        var nama = document.getElementById('nama').value;
        var nisn = document.getElementById('nisn').value;
        var jk = document.getElementById('jk').value;
        var tmp = document.getElementById('tmp').value;
        var tgl = document.getElementById('tgl').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var rpass = document.getElementById('rpass').value;
        if (pdf.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Jenis Pendaftaran Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (nama.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Nama Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (nisn.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'NISN Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (jk.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Jenis Kelamin Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (tmp.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Tempat Lahir Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (tgl.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Tanggal Lahir Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (hp.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'No Hp Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (email.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Email Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (pass.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'password Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (rpass.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Ulangi password Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else if (rpass!=pass) {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Status Tidak Boleh Kosong',
                customClass: 'swal-wide',
            });
            
        }
        else{

            <?php 
                $this->session->set_userdata('val','data');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('daftar/simpanreg')?>",
            data: $(this).serialize(),


             beforeSend:function()
             {
                Swal.fire({
                    customClass: 'swal-loading',
                    text: 'Mohon Tunggu Sebentar...',
                    allowOutsideClick: false,

                    onOpen: function () {
                       swal.showLoading()
                    }
                });
             },         

            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                { 
                    Swal.fire({
                        type: 'success',
                        title: 'Sukses',
                        text: jsonData.message,
                        customClass: 'swal-wide',
                        showCancelButton: false,
                        confirmButtonColor: 'primary',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        }
                       })
                }
                else if (jsonData.success == "0")
                {
                    Swal.fire({
                        type: 'error',
                        title: 'Gagal',
                        text: jsonData.message,
                        customClass: 'swal-wide',
                    });
                }
                else if (jsonData.success == "2")
                {
                    Swal.fire({
                        type: 'warning',
                        title: 'Peringtan',
                        text: jsonData.message,
                        customClass: 'swal-wide',
                    });
                }
               }
           });
        }
        
     });
});

    

</script>

</body>
</html>
