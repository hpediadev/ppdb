
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">

 
  <div class="login-logo">
    <img src="<?= base_url('logo.png')?>" styles="border-radius: 95px;" width="100px"><br>
    <a href=""  style="font-size:25px"><b>PPDB</b> SMK Putra Bangsa</a>
  </div>
    <!-- <p class="login-box-msg">Sign in to start your session</p> -->

    <form  id="simpan" method="post" actikon="<?= base_url()?>/daftar/simpanreg">
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tgl" id="tgl" placeholder="Tanggal Lahir">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success btn-block btn-flat">SELANJUTNYA</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- ATAU -</p>
     <!--  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a> -->
    </div>
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->
    
   <!--  Sudah Punya Akun ?
    <a type="button" href="<?= base_url('login')?>" class="btn btn-primary btn-block btn-flat">MASUK</a> -->
    <!-- <br><br> -->
    <a type="button" href="<?= base_url()?>" class="btn btn-danger btn-block btn-flat">Kembali Ke Halaman Utama</a>

  </div>

    <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


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
        var nik = document.getElementById('nik').value;
        var tgl = document.getElementById('tgl').value;
        if (nik.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'NIK Tidak Boleh Kosong',
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
                            // location.reload();
                            location.href = "<?= base_url('dashboard')?>";
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