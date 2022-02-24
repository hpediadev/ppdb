
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">

  <div class="login-logo">
    <img src="<?= base_url('logo.png')?>" styles="border-radius: 95px;" width="100px"><br>
    <a href=""  style="font-size:25px"><b>PPDB</b> SMK Putra Bangsa</a>
  </div>
    <!-- <p class="login-box-msg">Sign in to start your session</p> -->

    <form id="logisn" method="post" action="<?= base_url('adminku/login')?>">
      <div class="form-group has-feedback">
        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <!-- <div class="form-group has-feedback pull-right">
        <a href="<?= base_url('daftar')?>" class="text-center">Saya Lupa Password</a><br>
      </div> -->
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">MASUK</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <!-- <p>- ATAU -</p> -->
     <!--  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a> -->
    </div>
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->
    
    <!-- Belum Punya Akun ?
    <a type="button" href="<?= base_url('daftar')?>" class="btn btn-success btn-block btn-flat">DAFTAR SEKARANG</a>
    <br><br>
    <a type="button" href="<?= base_url()?>" class="btn btn-danger btn-block btn-flat">Kembali Ke Halaman Utama</a>
 -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script type="text/javascript">

    
$(document).ready(function() {
    $('#login').submit(function(e) {
        e.preventDefault();
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
       if (email.length=='') {

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
        else{

            <?php 
                $this->session->set_userdata('val','datalogin');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('adminku/login')?>",
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
                            location.href = "<?= base_url('adminppdb')?>";
                        }
                       });
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
