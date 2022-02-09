
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">

 
  <div class="login-logo">
    <img src="<?= base_url('logo.png')?>" styles="border-radius: 95px;" width="100px"><br>
    <a href=""  style="font-size:25px"><b>PPDB</b> SMK Putra Bangsa</a>
  </div>
    <!-- <p class="login-box-msg">Sign in to start your session</p> -->

    <form  id="simpan" method="post" actikon="http://192.168.42.77:8080/ppdb/daftar/simpanre">
      <div class="form-group has-feedback">
        
        <select class="form-control" name="pdf" id="pdf">
          <option value="">Jenis Pendaftaran</option>
          <option value="1">Siswa Baru</option>
          <option value="2">Siswa Pindahan</option>
        </select>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select class="form-control" name="jk" id="jk">
          <option value="">Jenis Kelamin</option>
          <option value="1">Laki-laki</option>
          <option value="2">Peremepuan</option>
        </select>
        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="tmp" id="tmp" placeholder="Tempat Lahir">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="tgl" id="tgl" placeholder="Tanggal Lahir">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="hp" id="hp" placeholder="hp">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
<div class="g-recaptcha" data-sitekey="yaaaaaaaaaaaour_key" style="transform:scale(0.50);-webkit-transform:scale(0.50);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>

        <input type="password" class="form-control" name="rpass" id="rpass" placeholder="Ulangi password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success btn-block btn-flat">DAFTAR</button>
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
    
    Sudah Punya Akun ?
    <a type="button" href="<?= base_url('login')?>" class="btn btn-primary btn-block btn-flat">MASUK</a>
    <br><br>
    <a type="button" href="<?= base_url()?>" class="btn btn-danger btn-block btn-flat">Kembali Ke Halaman Utama</a>

  </div>

    <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script type="text/javascript">
 $(function(){
  function rescaleCaptcha(){
    var width = $('.g-recaptcha').parent().width();
    var scale;
    if (width < 302) {
      scale = width / 302;
    } else{
      scale = 1.0; 
    }

    $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
    $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
    $('.g-recaptcha').css('transform-origin', '0 0');
    $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
  }

  rescaleCaptcha();
  $( window ).resize(function() { rescaleCaptcha(); });

});

</script>