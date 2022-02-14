<br><br><br>
<section class="content">

<?php 
// $api_categories_list ='https://www.emsifa.com/api-wilayah-indonesia/api/regencies/35.json';
//     $json_list = file_get_contents($api_categories_list);
//      $array = json_decode($json_list, true);

//         var_dump($array);
// echo $this->session->userdata('nik');
$l=''; $p='';
    foreach($data->result() as $data){
      if($data->JK==1){
        $l='selected';
        $jk='Laki-laki';
      }
      else if($data->JK==2){
        $p='selected';
        $jk='Perempuan';
      }
?>
<style type="text/css">
  input[type="text"] {
    readonly: readonly;
}

</style>
<?php 
  if($data->STS==2){
 ?>
<script>
$(document).ready(function() {
    $("input[type='text']").attr("readonly", true);
    $("input[type='nomerik']").attr("readonly", true);
    $("input[type='file']").attr("disabled", true);
    $("button[type='submit']").attr("disabled", true);
    $("select").attr("disabled", true);
    $("input[type='checkbox']").attr("disabled", true);
});
</script>
<?php } ?>

      <div class="row">
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <?php 
              $satu='';
              $dua='';
              $tiga='';
              $empat='';
              $lima='';
              $satu='';
              if($data->MENU==1 OR empty($data->MENU)){
                $satu='active';
              }
              else if($data->MENU==2){
                $dua='active';
              }
              else if($data->MENU==3){
                $tiga='active';
              }
              else if($data->MENU==4){
                $empat='active';
              }
              else if($data->MENU==5){
                $lima='active';
              }


               ?>
              <li class="<?= $satu?>"><a href="#activity" data-toggle="tab">Data Pribadi</a></li>
              <li class="<?= $dua?>" ><a href="#datapribadi" data-toggle="tab">Data Orang Tua/Wali</a></li>
              <li class="<?= $tiga?>"><a href="#dataperiodik" data-toggle="tab">Data Periodik</a></li>
              <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li> -->
              <li class="<?= $empat?>"><a href="#settings" data-toggle="tab">Upload Persyaratan</a></li>
              <li class="<?= $lima?>"><a href="#selesai" data-toggle="tab">Selesaikan Pendaftaran</a></li>
            </ul>
            <div class="tab-content">
              <div class="<?= $satu?> tab-pane" id="activity">
                <form class="form-horizontal" id="simpan" method="post" actison="<?= base_url('dashboard/simpandatapribadi')?>">
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>DATA PRIBADI</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">NIK</label>

                    <div class="col-sm-9">
                      <input type="text" readonly  class="form-control" value="<?= $data->NIK; ?>" id="nik" name="nik" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Tanggal Lahir</label>

                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control" value="<?= $data->TGLLAHIR; ?>" id="tgl" name="tgl" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Pilihan Jurusan</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        if($data->JURUSAN=='REKAYASA PERANGKAT LUNAK')
                          $a='selected';
                        else if($data->JURUSAN=='TEKNIK AUDIO VIDEO')
                          $b='selected';
                        else if($data->JURUSAN=='AGRIBISNIS PENGOLAHAN HASIL PERTANIAN')
                          $c='selected';
                        else if($data->JURUSAN=='BISNIS DARING DAN PEMASARAN')
                          $d='selected';
                        else if($data->JURUSAN=='KRIYA KREATIF BATIK DAN TEKSTIL')
                          $e='selected';
                       ?>
                      <select class="form-control select2" id="jurusan" name="jurusan">
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                        <option <?= $b?> value="TEKNIK AUDIO VIDEO">TEKNIK AUDIO VIDEO</option>
                        <option <?= $c?> value="AGRIBISNIS PENGOLAHAN HASIL PERTANIAN">AGRIBISNIS PENGOLAHAN HASIL PERTANIAN</option>
                        <option <?= $d?> value="BISNIS DARING DAN PEMASARAN">BISNIS DARING DAN PEMASARAN</option>
                        <option <?= $e?> value="KRIYA KREATIF BATIK DAN TEKSTIL">KRIYA KREATIF BATIK DAN TEKSTIL</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Nama Lengkap</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->NAMALENGKAP; ?>" id="nama" name="nama" plc="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">NISN</label>

                    <div class="col-sm-9">
                      <input type="nomerik"  class="form-control" value="<?= $data->NISN; ?>" id="nisn" name="nisn" plc="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Jenis Kelamin</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="jk" name="jk">
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $l?> value="1">Laki-laki</option>
                        <option <?= $p ?> value="2">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Tempat Lahir</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->TMPLAHIR; ?>" id="tmp" name="tmp" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email"  class="form-control" value="<?= $data->EMAIL; ?>" id="email" name="email" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Asal Sekolah</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->ASAL; ?>" id="asekolah" name="asekolah" plc="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. KK</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="16" class="form-control" value="<?= $data->NOKK; ?>" id="kk" name="kk" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No.Reg. Akta Lahir</label>

                    <div class="col-sm-9">
                      <input type="nomerik"  class="form-control" value="<?= $data->AKTA; ?>" id="akta" name="akta" plc="Name"> 
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Alamat Jalan</label>

                    <div class="col-sm-9">
                      <input type="all"  class="form-control" value="<?= $data->ALAMAT; ?>" id="jalan" name="jalan" plc="Name"> 
                    </div>
                  </div> -->
                  <input type="hidden"  class="form-control" value="<?= $data->ALAMAT; ?>" id="jalan" name="jalan" plc="Name"> 
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">RT</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="3" class="form-control" value="<?= $data->RT; ?>" id="rt" name="rt" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">RW</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="3" class="form-control" value="<?= $data->RW; ?>" id="rw" name="rw" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Dusun</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->DSN; ?>" id="dsn" name="dsn" plc="Name"> 
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Desa</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->DESA; ?>" id="desa" name="desa" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Kecamatan</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->KEC; ?>" id="kec" name="kec" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Kabupaten</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->KAB; ?>" id="kab" name="kab" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Provinsi</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PROV; ?>" id="prov" name="prov" plc="Name"> 
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Provinsi</label>

                    <div class="col-sm-9">
                      <!-- http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json -->
                      <?php $p= $data->PROV; 
                        $s='';
                      ?>
                      <select class="form-control select2" id="provinsi" name="provinsi" onchange="getkota(this.value)">
                        <option value="" selected>-- Silahkan Pilih --</option>

                     <?php

                      function http_request($url){
                          // persiapkan curl
                          $ch = curl_init(); 

                          // set url 
                          curl_setopt($ch, CURLOPT_URL, $url);
                          
                          // set user agent    
                          // curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                          // return the transfer as a string 
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

                          // $output contains the output string 
                          $output = curl_exec($ch); 

                          // tutup curl 
                          curl_close($ch);      

                          // mengembalikan hasil curl
                          return $output;
                      }

                      $profile = http_request("http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json");

                      // ubah string JSON menjadi array
                      $profile = json_decode($profile, TRUE);

                      foreach($profile as $prov){
                        
                      // }

                      // echo "<pre>";
                      // print_r($profile);
                      // echo "</pre>";
                        if($p==$prov['id'])
                          $s='selected';
                        else
                          $s='';

                        ?>
                        <option <?= $s?> value="<?php echo $prov['id']; ?>"><?php echo $prov['name']; ?></option>
                        <?php 
                        } ?>
                      </select>

                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Kabupaten / Kota</label>

                    <div class="col-sm-9">
                     <!--  <select class="form-control" id="kota" name="kota" >
                        <option value="" id="kotaku"></option>
                      </select> -->
                      <div id="dvkecamatan">
                        <?php 
                        $s='';
                        $p= $data->KAB;
                          if(!empty($data->PROV))
                          {                            
                            $id = $data->PROV;
                            $api_categories_list ='https://www.emsifa.com/api-wilayah-indonesia/api/regencies/'.$id.'.json';
                            $json_list = file_get_contents($api_categories_list);
                            $profile = json_decode($json_list, TRUE);
                          }
                         ?>
                      <select class="form-control" id="kota" name="kota" onchange="getcamat(this.value)">
                        <option value="" selected>-- Silahkan Pilih --</option>
                         <?php

                          foreach($profile as $r){
                            if($p==$r['id'])
                              $s='selected';
                            else
                              $s='';
                          ?>
                            <option <?= $s?> value="<?= $r['id'];?>"><?= $r['name']?></option>
                          <?php
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Kecamatan</label>

                    <div class="col-sm-9">
                     <!--  <select class="form-control" id="kota" name="kota" >
                        <option value="" id="kotaku"></option>
                      </select> -->
                      <div id="divcamat">

                        <?php 
                        $s='';
                        $p= $data->KEC;
                          if(!empty($data->KAB))
                          {                            
                            $id = $data->KAB;
                            $api_categories_list ='http://www.emsifa.com/api-wilayah-indonesia/api/districts/'.$id.'.json';
                            $json_list = file_get_contents($api_categories_list);
                            $profile = json_decode($json_list, TRUE);
                          }
                         ?>
                      <select class="form-control" id="camat" name="camat" onchange="getdesa(this.value)">
                        <option value="" selected>-- Silahkan Pilih --</option>
                         <?php

                          foreach($profile as $r){
                            if($p==$r['id'])
                              $s='selected';
                            else
                              $s='';
                          ?>
                            <option <?= $s?> value="<?= $r['id'];?>"><?= $r['name']?></option>
                          <?php
                          }
                          ?>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Kelurahan / Desa</label>

                    <div class="col-sm-9">
                     <!--  <select class="form-control" id="kota" name="kota" >
                        <option value="" id="kotaku"></option>
                      </select> -->
                      <div id="divdesa">
                        <?php 
                        $s='';
                        $p= $data->DESA;
                          if(!empty($data->KEC))
                          {                            
                            $id = $data->KEC;
                            $api_categories_list ='http://www.emsifa.com/api-wilayah-indonesia/api/villages/'.$id.'.json';
                            $json_list = file_get_contents($api_categories_list);
                            $profile = json_decode($json_list, TRUE);
                          }
                         ?>
                      <select class="form-control" id="desa" name="desa" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                         <?php

                          foreach($profile as $r){
                            if($p==$r['id'])
                              $s='selected';
                            else
                              $s='';
                          ?>
                            <option <?= $s?> value="<?= $r['id'];?>"><?= $r['name']?></option>
                          <?php
                          }
                          ?>
                      </select>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>
              <div class="<?= $dua?> tab-pane" id="datapribadi">
                <form class="form-horizontal" id="simpanwali" msethod="post" actsion="<?= base_url('dashboard/simpandatawali')?>">
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>DATA AYAH KANDUNG</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Ayah Kandung</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->AYAH; ?>" id="ayah" name="ayah" plc="Name"> 
                      <input type="hidden"  class="form-control" value="<?= $data->NIK; ?>" id="email" name="email" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">NIK Ayah</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="16" class="form-control" value="<?= $data->NIKAYAH; ?>" id="nikayah" name="nikayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tahun Lahir Ayah</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="4" class="form-control" value="<?= $data->TAHUNAYAH; ?>" id="tahunayah" name="tahunayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pendidikan Terakhir Ayah</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        $h='';
                        $i='';
                        $j='';
                        $k='';
                        if($data->PENDAYAH=='Tidak Sekolah')
                          $a='selected';
                        else if($data->PENDAYAH=='Putus SD')
                          $b='selected';
                        else if($data->PENDAYAH=='SD Sederajat')
                          $c='selected';
                        else if($data->PENDAYAH=='SLTP Sederajat')
                          $d='selected';
                        else if($data->PENDAYAH=='SLTA Sederajat')
                          $e='selected';
                        else if($data->PENDAYAH=='D1')
                          $f='selected';
                        else if($data->PENDAYAH=='D2')
                          $g='selected';
                        else if($data->PENDAYAH=='D3')
                          $h='selected';
                        else if($data->PENDAYAH=='D4/S1')
                          $i='selected';
                        else if($data->PENDAYAH=='S2')
                          $j='selected';
                        else if($data->PENDAYAH=='S3')
                          $k='selected';
                       ?>
                      <select id="pendayah" name="pendayah" class="form-control" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Tidak Sekolah">Tidak Sekolah</option>
                        <option <?= $b?> value="Putus SD">Putus SD</option>
                        <option <?= $c?> value="SD Sederajat">SD Sederajat</option>
                        <option <?= $d?> value="SMP Sederajat">SMP Sederajat</option>
                        <option <?= $e?> value="SMA Sederajat">SMA Sederajat</option>
                        <option <?= $f?> value="D1">D1</option>
                        <option <?= $g?> value="D2">D2</option>
                        <option <?= $h?> value="D3">D3</option>
                        <option <?= $i?> value="D4/S1">D4/S1</option>
                        <option <?= $j?> value="S2">S2</option>
                        <option <?= $k?> value="S3">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pekerjaan Ayah</label>

                    <div class="col-sm-9">

                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        $h='';
                        $i='';
                        $j='';
                        $k='';
                        $l='';
                        $m='';
                        $n='';
                        if($data->PEKERAYAH=='Tidak Sekolah')
                          $a='selected';
                        else if($data->PEKERAYAH=='Petani')
                          $b='selected';
                        else if($data->PEKERAYAH=='Nelayan')
                          $c='selected';
                        else if($data->PEKERAYAH=='Guru')
                          $d='selected';
                        else if($data->PEKERAYAH=='PNS/TNI/POLRI')
                          $e='selected';
                        else if($data->PEKERAYAH=='Karyawan Swasta')
                          $f='selected';
                        else if($data->PEKERAYAH=='Pedagang Kecil')
                          $g='selected';
                        else if($data->PEKERAYAH=='Pedagang Besar')
                          $h='selected';
                        else if($data->PEKERAYAH=='Wiraswasta')
                          $i='selected';
                        else if($data->PEKERAYAH=='Wirausaha')
                          $j='selected';
                        else if($data->PEKERAYAH=='Buruh')
                          $k='selected';
                        else if($data->PEKERAYAH=='Pensiunan')
                          $l='selected';
                        else if($data->PEKERAYAH=='Meninggal Dunia')
                          $m='selected';
                        else if($data->PEKERAYAH=='Lain-lain')
                          $n='selected';
                       ?>
                      <select id="pekerayah" name="pekerayah" class="form-control" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Tidak Bekerja">Tidak Bekerja</option>
                        <option <?= $b?> value="Petani">Petani</option>
                        <option <?= $c?> value="Nelayan">Nelayan</option>
                        <option <?= $d?> value="Guru">Guru</option>
                        <option <?= $e?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                        <option <?= $f?> value="Karyawan Swasta">Karyawan Swasta</option>
                        <option <?= $g?> value="Pedagang Kecil">Pedagang Kecil</option>
                        <option <?= $h?> value="Pedagang Besar">Pedagang Besar</option>
                        <option <?= $i?> value="Wiraswasta">Wiraswasta</option>
                        <option <?= $j?> value="Wirausaha">Wirausaha</option>
                        <option <?= $k?> value="Buruh">Buruh</option>
                        <option <?= $l?> value="Pensiunan">Pensiunan</option>
                        <option <?= $m?> value="Meninggal Dunia">Meninggal Dunia</option>
                        <option <?= $n?> value="Lain-lain">Lain-lain</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penghasilan Ayah Perbulan</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        if($data->HASILAYAH=='Kurang dari 500.000')
                          $a='selected';
                        else if($data->HASILAYAH=='500.000 - 999.999')
                          $b='selected';
                        else if($data->HASILAYAH=='1.000.000 - 1.999.999')
                          $c='selected';
                        else if($data->HASILAYAH=='2.000.000 - 5.000.000')
                          $d='selected';
                        else if($data->HASILAYAH=='5.000.000 - 20.000.000')
                          $e='selected';
                        else if($data->HASILAYAH=='Lebih dari 20.000.000')
                          $f='selected';
                        else if($data->HASILAYAH=='Tidak Berpenghasilan')
                          $g='selected';
                       ?>
                     <select id="hasilayah" name="hasilayah" class="form-control" >
                      <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Kurang dari 500.000">Kurang dari 500.000</option>
                        <option <?= $b?> value="500.000 - 999.999">500.000 - 999.999</option>
                        <option <?= $c?> value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                        <option <?= $d?> value="2.000.000 - 5.000.000">2.000.000 - 5.000.000</option>
                        <option <?= $e?> value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
                        <option <?= $f?> value="Lebih dari 20.000.000">Lebih dari 20.000.000</option>
                        <option <?= $g?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. Hp Ayah</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="15"  class="form-control" value="<?= $data->HPAYAH; ?>" id="hpayah" name="hpayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>DATA IBU KANDUNG</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Nama Ibu Kandung</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->IBU; ?>" id="ibu" name="ibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">NIK Ibu</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="16" class="form-control" value="<?= $data->NIKIBU; ?>" id="nikibu" name="nikibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tahun Lahir Ibu</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="4"  class="form-control" value="<?= $data->TAHUNIBU; ?>" id="tahunibu" name="tahunibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pendidikan Terakhir Ibu</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        $h='';
                        $i='';
                        $j='';
                        $k='';
                        if($data->PENDIBU=='Tidak Sekolah')
                          $a='selected';
                        else if($data->PENDIBU=='Putus SD')
                          $b='selected';
                        else if($data->PENDIBU=='SD Sederajat')
                          $c='selected';
                        else if($data->PENDIBU=='SLTP Sederajat')
                          $d='selected';
                        else if($data->PENDIBU=='SLTA Sederajat')
                          $e='selected';
                        else if($data->PENDIBU=='D1')
                          $f='selected';
                        else if($data->PENDIBU=='D2')
                          $g='selected';
                        else if($data->PENDIBU=='D3')
                          $h='selected';
                        else if($data->PENDIBU=='D4/S1')
                          $i='selected';
                        else if($data->PENDIBU=='S2')
                          $j='selected';
                        else if($data->PENDIBU=='S3')
                          $k='selected';
                       ?>
                      <select id="pendibu" name="pendibu" class="form-control" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Tidak Sekolah">Tidak Sekolah</option>
                        <option <?= $b?> value="Putus SD">Putus SD</option>
                        <option <?= $c?> value="SD Sederajat">SD Sederajat</option>
                        <option <?= $d?> value="SMP Sederajat">SMP Sederajat</option>
                        <option <?= $e?> value="SMA Sederajat">SMA Sederajat</option>
                        <option <?= $f?> value="D1">D1</option>
                        <option <?= $g?> value="D2">D2</option>
                        <option <?= $h?> value="D3">D3</option>
                        <option <?= $i?> value="D4/S1">D4/S1</option>
                        <option <?= $j?> value="S2">S2</option>
                        <option <?= $k?> value="S3">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pekerjaan Ibu</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        $h='';
                        $i='';
                        $j='';
                        $k='';
                        $l='';
                        $m='';
                        $n='';
                        if($data->PEKERIBU=='Tidak Sekolah')
                          $a='selected';
                        else if($data->PEKERIBU=='Petani')
                          $b='selected';
                        else if($data->PEKERIBU=='Nelayan')
                          $c='selected';
                        else if($data->PEKERIBU=='Guru')
                          $d='selected';
                        else if($data->PEKERIBU=='PNS/TNI/POLRI')
                          $e='selected';
                        else if($data->PEKERIBU=='Karyawan Swasta')
                          $f='selected';
                        else if($data->PEKERIBU=='Pedagang Kecil')
                          $g='selected';
                        else if($data->PEKERIBU=='Pedagang Besar')
                          $h='selected';
                        else if($data->PEKERIBU=='Wiraswasta')
                          $i='selected';
                        else if($data->PEKERIBU=='Wirausaha')
                          $j='selected';
                        else if($data->PEKERIBU=='Buruh')
                          $k='selected';
                        else if($data->PEKERIBU=='Pensiunan')
                          $l='selected';
                        else if($data->PEKERIBU=='Meninggal Dunia')
                          $m='selected';
                        else if($data->PEKERIBU=='Lain-lain')
                          $n='selected';
                       ?>
                      <select id="pekeribu" name="pekeribu" class="form-control" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Tidak Bekerja">Tidak Bekerja</option>
                        <option <?= $b?> value="Petani">Petani</option>
                        <option <?= $c?> value="Nelayan">Nelayan</option>
                        <option <?= $d?> value="Guru">Guru</option>
                        <option <?= $e?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                        <option <?= $f?> value="Karyawan Swasta">Karyawan Swasta</option>
                        <option <?= $g?> value="Pedagang Kecil">Pedagang Kecil</option>
                        <option <?= $h?> value="Pedagang Besar">Pedagang Besar</option>
                        <option <?= $i?> value="Wiraswasta">Wiraswasta</option>
                        <option <?= $j?> value="Wirausaha">Wirausaha</option>
                        <option <?= $k?> value="Buruh">Buruh</option>
                        <option <?= $l?> value="Pensiunan">Pensiunan</option>
                        <option <?= $m?> value="Meninggal Dunia">Meninggal Dunia</option>
                        <option <?= $n?> value="Lain-lain">Lain-lain</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penghasilan Ibu Perbulan</label>

                    <div class="col-sm-9"> 
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        if($data->HASILIBU=='Kurang dari 500.000')
                          $a='selected';
                        else if($data->HASILIBU=='500.000 - 999.999')
                          $b='selected';
                        else if($data->HASILIBU=='1.000.000 - 1.999.999')
                          $c='selected';
                        else if($data->HASILIBU=='2.000.000 - 5.000.000')
                          $d='selected';
                        else if($data->HASILIBU=='5.000.000 - 20.000.000')
                          $e='selected';
                        else if($data->HASILIBU=='Lebih dari 20.000.000')
                          $f='selected';
                        else if($data->HASILIBU=='Tidak Berpenghasilan')
                          $g='selected';
                       ?>
                     <select id="hasilibu" name="hasilibu" class="form-control" >
                      <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Kurang dari 500.000">Kurang dari 500.000</option>
                        <option <?= $b?> value="500.000 - 999.999">500.000 - 999.999</option>
                        <option <?= $c?> value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                        <option <?= $d?> value="2.000.000 - 5.000.000">2.000.000 - 5.000.000</option>
                        <option <?= $e?> value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
                        <option <?= $f?> value="Lebih dari 20.000.000">Lebih dari 20.000.000</option>
                        <option <?= $g?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. Hp Ibu</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="14" class="form-control" value="<?= $data->HPIBU; ?>" id="hpibu" name="hpibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>DATA WALI</b> Diisi Jika Ada</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Nama Wali</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->WALI; ?>" id="wali" name="wali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">NIK Wali</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="16" class="form-control" value="<?= $data->NIKWALI; ?>" id="nikwali" name="nikwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tahun Lahir Wali</label>

                    <div class="col-sm-9">
                      <input type="nomerik"  maxlength="4" class="form-control" value="<?= $data->TAHUNWALI; ?>" id="tahunwali" name="tahunwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pendidikan Terakhir WALI</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        $h='';
                        $i='';
                        $j='';
                        $k='';
                        if($data->PENDWALI=='Tidak Sekolah')
                          $a='selected';
                        else if($data->PENDWALI=='Putus SD')
                          $b='selected';
                        else if($data->PENDWALI=='SD Sederajat')
                          $c='selected';
                        else if($data->PENDWALI=='SLTP Sederajat')
                          $d='selected';
                        else if($data->PENDWALI=='SLTA Sederajat')
                          $e='selected';
                        else if($data->PENDWALI=='D1')
                          $f='selected';
                        else if($data->PENDWALI=='D2')
                          $g='selected';
                        else if($data->PENDWALI=='D3')
                          $h='selected';
                        else if($data->PENDWALI=='D4/S1')
                          $i='selected';
                        else if($data->PENDWALI=='S2')
                          $j='selected';
                        else if($data->PENDWALI=='S3')
                          $k='selected';
                       ?>
                      <select id="pendwali" name="pendwali" class="form-control" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Tidak Sekolah">Tidak Sekolah</option>
                        <option <?= $b?> value="Putus SD">Putus SD</option>
                        <option <?= $c?> value="SD Sederajat">SD Sederajat</option>
                        <option <?= $d?> value="SMP Sederajat">SMP Sederajat</option>
                        <option <?= $e?> value="SMA Sederajat">SMA Sederajat</option>
                        <option <?= $f?> value="D1">D1</option>
                        <option <?= $g?> value="D2">D2</option>
                        <option <?= $h?> value="D3">D3</option>
                        <option <?= $i?> value="D4/S1">D4/S1</option>
                        <option <?= $j?> value="S2">S2</option>
                        <option <?= $k?> value="S3">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pekerjaan WALI</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        $h='';
                        $i='';
                        $j='';
                        $k='';
                        $l='';
                        $m='';
                        $n='';
                        if($data->PEKERWALI=='Tidak Sekolah')
                          $a='selected';
                        else if($data->PEKERWALI=='Petani')
                          $b='selected';
                        else if($data->PEKERWALI=='Nelayan')
                          $c='selected';
                        else if($data->PEKERWALI=='Guru')
                          $d='selected';
                        else if($data->PEKERWALI=='PNS/TNI/POLRI')
                          $e='selected';
                        else if($data->PEKERWALI=='Karyawan Swasta')
                          $f='selected';
                        else if($data->PEKERWALI=='Pedagang Kecil')
                          $g='selected';
                        else if($data->PEKERWALI=='Pedagang Besar')
                          $h='selected';
                        else if($data->PEKERWALI=='Wiraswasta')
                          $i='selected';
                        else if($data->PEKERWALI=='Wirausaha')
                          $j='selected';
                        else if($data->PEKERWALI=='Buruh')
                          $k='selected';
                        else if($data->PEKERWALI=='Pensiunan')
                          $l='selected';
                        else if($data->PEKERWALI=='Meninggal Dunia')
                          $m='selected';
                        else if($data->PEKERWALI=='Lain-lain')
                          $n='selected';
                       ?>
                      <select id="pekerwali" name="pekerwali" class="form-control" >
                        <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Tidak Bekerja">Tidak Bekerja</option>
                        <option <?= $b?> value="Petani">Petani</option>
                        <option <?= $c?> value="Nelayan">Nelayan</option>
                        <option <?= $d?> value="Guru">Guru</option>
                        <option <?= $e?> value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                        <option <?= $f?> value="Karyawan Swasta">Karyawan Swasta</option>
                        <option <?= $g?> value="Pedagang Kecil">Pedagang Kecil</option>
                        <option <?= $h?> value="Pedagang Besar">Pedagang Besar</option>
                        <option <?= $i?> value="Wiraswasta">Wiraswasta</option>
                        <option <?= $j?> value="Wirausaha">Wirausaha</option>
                        <option <?= $k?> value="Buruh">Buruh</option>
                        <option <?= $l?> value="Pensiunan">Pensiunan</option>
                        <option <?= $m?> value="Meninggal Dunia">Meninggal Dunia</option>
                        <option <?= $n?> value="Lain-lain">Lain-lain</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penghasilan Wali Perbulan</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        if($data->HASILWALI=='Kurang dari 500.000')
                          $a='selected';
                        else if($data->HASILWALI=='500.000 - 999.999')
                          $b='selected';
                        else if($data->HASILWALI=='1.000.000 - 1.999.999')
                          $c='selected';
                        else if($data->HASILWALI=='2.000.000 - 5.000.000')
                          $d='selected';
                        else if($data->HASILWALI=='5.000.000 - 20.000.000')
                          $e='selected';
                        else if($data->HASILWALI=='Lebih dari 20.000.000')
                          $f='selected';
                        else if($data->HASILWALI=='Tidak Berpenghasilan')
                          $g='selected';
                       ?>
                     <select id="hasilwali" name="hasilwali" class="form-control" >
                      <option value="" selected>-- Silahkan Pilih --</option>
                        <option <?= $a?> value="Kurang dari 500.000">Kurang dari 500.000</option>
                        <option <?= $b?> value="500.000 - 999.999">500.000 - 999.999</option>
                        <option <?= $c?> value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
                        <option <?= $d?> value="2.000.000 - 5.000.000">2.000.000 - 5.000.000</option>
                        <option <?= $e?> value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
                        <option <?= $f?> value="Lebih dari 20.000.000">Lebih dari 20.000.000</option>
                        <option <?= $g?> value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. Hp Wali</label>

                    <div class="col-sm-9">
                      <input type="nomerik"  maxlength="14" class="form-control" value="<?= $data->HPWALI; ?>" id="hpwali" name="hpwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>

              <div class="<?= $tiga?> tab-pane" id="dataperiodik">
                <form class="form-horizontal" id="simpanperiodik" msethod="post" actsion="<?= base_url('dashboard/simpandataperiodik')?>">
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>DATA PERIODIK</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tinggi Badan (cm)</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="3" class="form-control" value="<?= $data->TINGGI; ?>" id="tinggi" name="tinggi" plc="Name"> 
                      <input type="hidden"  class="form-control" value="<?= $data->NIK; ?>" id="email" name="email" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Berat Badan (kg)</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="3" class="form-control" value="<?= $data->BERAT; ?>" id="berat" name="berat" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Jarak Ke Sekolah (km)</label>

                    <div class="col-sm-9">
                      <input type="nokartu" maxlength="4" class="form-control" value="<?= $data->JARAK; ?>" id="jarak" name="jarak" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Waktu Tempuh (jam:menit)</label>

                    <div class="col-sm-9">
                      <input type="waktu"  class="form-control" value="<?= $data->WAKTUTEMPUH; ?>" id="waktu" name="waktu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Rencana Tempat Tinggal</label>

                    <div class="col-sm-9">                     
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        if($data->TEMPATTINGGAL=='Bersama Orang Tua')
                          $a='selected';
                        else if($data->TEMPATTINGGAL=='Bersama Wali')
                          $b='selected';
                        else if($data->TEMPATTINGGAL=='Pesantren')
                          $c='selected';
                        else if($data->TEMPATTINGGAL=='Kos')
                          $d='selected';
                        else if($data->TEMPATTINGGAL=='Asrama')
                          $e='selected';
                        else if($data->TEMPATTINGGAL=='Panti Asuhan')
                          $f='selected';
                        else if($data->TEMPATTINGGAL=='Lainnya')
                          $g='selected';
                       ?>
                       <select id="tinggal" name="tinggal" class="form-control" >
                          <option value="" selected>-- Silahkan Pilih --</option>
                          <option <?= $a?> value="Bersama Orang Tua">Bersama Orang Tua</option>
                          <option <?= $b?> value="Bersama Wali">Bersama Wali</option>
                          <option <?= $c?> value="Pesantren">Pesantren</option>
                          <option <?= $d?> value="Kos">Kos</option>
                          <option <?= $e?> value="Asrama">Asrama</option>
                          <option <?= $f?> value="Panti Asuhan">Panti Asuhan</option>
                          <option <?= $g?> value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Moda Transportasi</label>

                    <div class="col-sm-9">
                      <?php 
                        $a='';
                        $b='';
                        $c='';
                        $d='';
                        $e='';
                        $f='';
                        $g='';
                        if($data->KENDARAAN=='Angkutan Umum')
                          $a='selected';
                        else if($data->KENDARAAN=='Mobil Antar Jemput')
                          $b='selected';
                        else if($data->KENDARAAN=='Ojek')
                          $c='selected';
                        else if($data->KENDARAAN=='Sepeda')
                          $d='selected';
                        else if($data->KENDARAAN=='Sepeda Motor')
                          $e='selected';
                        else if($data->KENDARAAN=='Jalan Kaki')
                          $f='selected';
                        else if($data->KENDARAAN=='Lainnya')
                          $g='selected';
                       ?>
                       <select id="transportasi" name="transportasi" class="form-control" >
                          <option value="" selected>-- Silahkan Pilih --</option>
                          <option value="Angkutan Umum">Angkutan Umum</option>
                          <option <?= $a?> value="Mobil Antar Jemput">Mobil Antar Jemput</option>
                          <option <?= $b?> value="Ojek">Ojek</option>
                          <option <?= $c?> value="Sepeda">Sepeda</option>
                          <option <?= $d?> value="Sepeda Motor">Sepeda Motor</option>
                          <option <?= $f?> value="Jalan Kaki">Jalan Kaki</option>
                          <option <?= $g?> value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Anak Ke Berapa</label>

                    <div class="col-sm-9">
                      <input type="nomerik" maxlength="2"  class="form-control" value="<?= $data->ANAKKE; ?>" id="anakke" name="anakke" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. KKS (Jika Ada)</label>

                    <div class="col-sm-9">
                      <input type="nokartu"  class="form-control" value="<?= $data->NOKKS; ?>" id="nokks" name="nokks" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penerima PKS / PKH</label>

                    <div class="col-sm-9">
                       <select id="pkh" name="pkh" class="form-control" >
                        <?php 
                        $a=''; $b='';
                          if($data->PKH=='Ya')
                            $a='selected';
                          else if($data->PKH=='Tidak')
                            $b='selected';
                         ?>
                          <option value="" selected>-- Silahkan Pilih --</option>
                          <option <?= $a?> value="Ya">Ya</option>
                          <option <?= $b?> value="Tidak">Tidak</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. PKS / PKH</label>

                    <div class="col-sm-9">
                      <input type="nokartu"  class="form-control" value="<?= $data->NOPKH; ?>" id="nopkh" name="nopkh" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>


              <div class="<?= $lima?> tab-pane" id="selesai">
                <form class="form-horizontal" id="simpanselesai" metshod="post" actiosn="<?= base_url('dashboard/simpanselesai')?>">
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>PERNYATAAN</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="cek" id="cek"> 
                      <input type="hidden"  class="form-control" value="<?= $data->NIK; ?>" id="email" name="email" plc="Name"> 
                          Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi berupa Pembatalan sebagai Calon Peserta Didik SMK Putra Bangsa
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary">Selsaikan Pendaftaran</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>

              <!-- /.tab-pane -->

              <div class="<?= $empat?> tab-pane" id="settings">
                <form class="form-horizontal" enctype="multipart/form-data"  id="fotopribadi">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FOTO PRIBADI</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
                      <i style="colosr:red"><b>Catatan : </b>Foto Pribadi Harus Bentuk Gambar Dengan Type JPG|PNG|JPEG</i>
                      <br>
                      <?php 
                      if(!empty($data->FOTO)){
                        $pch = explode('.',$data->FOTO);
                        if($pch[1]==="pdf"){
                         ?>
                         <b style="color:red">Maaf Foto Pribadi Harus Bentuk Gambar Dengan Type JPG|PNG|JPEG</b>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->FOTO)?>" width="40%" id="image2"><br>
                      <?php } }?>
                    </div>
                  </div>
                </form>
                <form class="form-horizontal" enctype="multipart/form-data"  id="fotokk">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FILE PDF / FOTO KARTU KELUARGA (KK)</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">

                         <i style="s:red"><b>Catatan : </b>Berkas KK Bentuk Gambar Dengan Type JPG|PNG|JPEG atau Bentuk File PDF</i>
                      <br>
                      <?php 
                      if(!empty($data->KK)){
                        $pch = explode('.',$data->KK);
                        if($pch[1]==="pdf"){
                         ?>
                         <iframe src="<?= base_url('upload/'.$data->KK)?>" height="750%" width="100%" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);'></iframe>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->KK)?>" width="400px" id="image2"><br>
                      <?php }
                      } ?>

                    </div>
                  </div>
                </form>

                <form class="form-horizontal" enctype="multipart/form-data"  id="fotoakta">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FILE PDF / FOTO AKTA KELAHIRAN</b> (Jika Ada)</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
                      <i style="s:red"><b>Catatan : </b>Berkas AKTA Kelahiran Bentuk Gambar Dengan Type JPG|PNG|JPEG atau Bentuk File PDF</i>
                      <br>
                      <?php 
                      if(!empty($data->FOTOAKTA)){
                        $pch = explode('.',$data->FOTOAKTA);
                        if($pch[1]==="pdf"){
                         ?>
                         <iframe src="<?= base_url('upload/'.$data->FOTOAKTA)?>" height="750%" width="100%" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);'></iframe>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->FOTOAKTA)?>" width="400px" id="image2"><br>
                      <?php } }?>

                    </div>
                  </div>
                </form>

                <form class="form-horizontal" enctype="multipart/form-data"  id="fotoskl">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FILE PDF / FOTO SURAT KETERANGAN LULUS</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
                      <i style="s:red"><b>Catatan : </b>Berkas SKL Bentuk Gambar Dengan Type JPG|PNG|JPEG atau Bentuk File PDF</i>
                      <br>
                      <?php 
                      if(!empty($data->SKL)){
                        $pch = explode('.',$data->SKL);
                        if($pch[1]==="pdf"){
                         ?>
                         <iframe src="<?= base_url('upload/'.$data->SKL)?>" height="750%" width="100%" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);'></iframe>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->SKL)?>" width="400px" id="image2"><br>
                      <?php } }?>

                    </div>
                  </div>
                </form>

                <form class="form-horizontal" enctype="multipart/form-data"  id="fotoijazah">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FILE PDF / FOTO IJAZAH</b> (Jika Ada)</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
                      <i style="s:red"><b>Catatan : </b>Berkas Ijazah Bentuk Gambar Dengan Type JPG|PNG|JPEG atau Bentuk File PDF</i>
                      <br>
                      <?php 
                      if(!empty($data->IJAZAH)){
                        $pch = explode('.',$data->IJAZAH);
                        if($pch[1]==="pdf"){
                         ?>
                         <iframe src="<?= base_url('upload/'.$data->IJAZAH)?>" height="750%" width="100%" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);'></iframe>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->IJAZAH)?>" width="400px" id="image2"><br>
                      <?php } }?>

                    </div>
                  </div>
                </form>

                <form class="form-horizontal" enctype="multipart/form-data"  id="fotoskhu">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FILE PDF / FOTO SKHUN</b> (Jika Ada)</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
                      <i style="s:red"><b>Catatan : </b>Berkas SKHUN Bentuk Gambar Dengan Type JPG|PNG|JPEG atau Bentuk File PDF</i>
                      <br>
                      <?php 
                      if(!empty($data->SKHU)){
                        $pch = explode('.',$data->SKHU);
                        if($pch[1]==="pdf"){
                         ?>
                         <iframe src="<?= base_url('upload/'.$data->SKHU)?>" height="750%" width="100%" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);'></iframe>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->SKHU)?>" width="400px" id="image2"><br>
                      <?php } }?>

                    </div>
                  </div>
                </form>
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url('upload/'.$data->FOTO)?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $data->NAMALENGKAP?></h3>

              <p class="text-muted text-center"><?= $data->JURUSAN?></p>

              <!-- <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    <?php } ?>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
  
  $('input[type="text"]').on('keyup',function(e){
    let teks = $(this).val();
    let charAggree = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWAXYZ. ";
     
    let teksSplit = teks.split("");
    let teksOke = [];
 
    for(let i=0;i<teksSplit.length;i++){
      if(charAggree.indexOf(teksSplit[i])!=-1){
        teksOke.push(teksSplit[i]);
      }
    }
 
  $(this).val(teksOke.join(""));        
  });

  $('input[type="nomerik"]').on('keyup',function(e){
    let teks = $(this).val();
    let charAggree = "1234567890";
     
    let teksSplit = teks.split("");
    let teksOke = [];
 
    for(let i=0;i<teksSplit.length;i++){
      if(charAggree.indexOf(teksSplit[i])!=-1){
        teksOke.push(teksSplit[i]);
      }
    }
 
  $(this).val(teksOke.join(""));        
  });$('input[type="nokartu"]').on('keyup',function(e){
    let teks = $(this).val();
    let charAggree = "1234567890.";
     
    let teksSplit = teks.split("");
    let teksOke = [];
 
    for(let i=0;i<teksSplit.length;i++){
      if(charAggree.indexOf(teksSplit[i])!=-1){
        teksOke.push(teksSplit[i]);
      }
    }
 
  $(this).val(teksOke.join(""));        
  });
  $('input[type="waktu"]').on('keyup',function(e){
    let teks = $(this).val();
    let charAggree = "1234567890:";
     
    let teksSplit = teks.split("");
    let teksOke = [];
 
    for(let i=0;i<teksSplit.length;i++){
      if(charAggree.indexOf(teksSplit[i])!=-1){
        teksOke.push(teksSplit[i]);
      }
    }
 
  $(this).val(teksOke.join(""));        
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

 

    $('#submit').change(function(e){
        e.preventDefault(); 
             $.ajax({
                 url:'<?php echo base_url('dashboard/tes');?>',
                 type:"post",
                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 async:false,
                  success: function(response){
                    var jsonData = JSON.parse(response);
                    if (jsonData.success == "1")
                    {
                      // $('#ggambar').src(jsonData.message);
                      $("#image2").attr("src",jsonData.message);
                      $("#ket").attr("value",jsonData.message);
                      $('#kt').text(jsonData.message);
                      // alert(jsonData.message);
                    }
               }
             });
        });

    

  });
  
</script>

    <script type="text/javascript">
      
    var ajaxku;
    function getkota(kab){
            ajaxku = createajax();
            var url="<?= base_url('dashboard/getkota')?>";
            url=url+"?id="+kab;
            url=url+"&sid="+Math.random();
            ajaxku.onreadystatechange=kecamatanChanged;
            ajaxku.open("GET",url,true);
            ajaxku.send(null);
        }
    function kecamatanChanged(){
            var data;
            document.getElementById("dvkecamatan").innerHTML= "Looading.......";
            if (ajaxku.readyState==4)
                {
                    data=ajaxku.responseText;
                    if(data.length>0)
                        {
                            document.getElementById("dvkecamatan").innerHTML = data
                            document.getElementById("divcamat").innerHTML= '<select id="camat" name="camat" class="form-control"><option value="">-- Silahkan Pilih --</option></select>';
                            document.getElementById("divdesa").innerHTML= '<select id="desa" name="desa" class="form-control"><option  value="">-- Silahkan Pilih --</option></select>';
                        }
                    else
                        {
                            document.getElementById("dvkecamatan").innerHTML= "";
                        }
                }
            else
                {
                    document.getElementById("dvkecamatan").innerHTML= "Looding";
                }           
            }       


    function getcamat(kab){
            ajaxku = createajax();
            var url="<?= base_url('dashboard/getcamat')?>";
            url=url+"?id="+kab;
            url=url+"&sid="+Math.random();
            ajaxku.onreadystatechange=camatanChanged;
            ajaxku.open("GET",url,true);
            ajaxku.send(null);
        }
    function camatanChanged(){
            var data;
            document.getElementById("divcamat").innerHTML= "Looading.......";
            if (ajaxku.readyState==4)
                {
                    data=ajaxku.responseText;
                    if(data.length>0)
                        {
                            document.getElementById("divcamat").innerHTML = data
                        }
                    else
                        {
                            document.getElementById("divcamat").innerHTML= "";
                        }
                }
            else
                {
                    document.getElementById("divcamat").innerHTML= "Looding";
                }           
            }  

    function getdesa(kab){
            ajaxku = createajax();
            var url="<?= base_url('dashboard/getdesa')?>";
            url=url+"?id="+kab;
            url=url+"&sid="+Math.random();
            ajaxku.onreadystatechange=desaCanged;
            ajaxku.open("GET",url,true);
            ajaxku.send(null);
        }
    function desaCanged(){
            var data;
            document.getElementById("divdesa").innerHTML= "Looading.......";
            if (ajaxku.readyState==4)
                {
                    data=ajaxku.responseText;
                    if(data.length>0)
                        {
                            document.getElementById("divdesa").innerHTML = data
                        }
                    else
                        {
                            document.getElementById("divdesa").innerHTML= "";
                        }
                }
            else
                {
                    document.getElementById("divdesa").innerHTML= "Looding";
                }           
            }                                           
      
    function createajax(){
            if (window.XMLHttpRequest){
                    return new XMLHttpRequest();
                }
            if (window.ActiveXObject){
                return new ActiveXObject("Microsoft.XMLHTTP");
                }
            return null;
        }
    
$(document).ready(function() {

  //simpanfotopribadi
  $('#fotopribadi').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes/fp')?>",
            data: $(this).serialize(),

                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 // async:false,


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
                            // location.href = "<?= base_url('dashboard')?>";
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
        // }
        
     });

  //kk
  $('#fotokk').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes//kk')?>",
            data: $(this).serialize(),

                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 // async:false,


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
                            // location.href = "<?= base_url('dashboard')?>";
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
        // }
        
     });


  //AKTA
  $('#fotoakta').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes//fa')?>",
            data: $(this).serialize(),

                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 // async:false,


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
                            // location.href = "<?= base_url('dashboard')?>";
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
        // }
        
     });


  //SKL
  $('#fotoskl').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes//sk')?>",
            data: $(this).serialize(),

                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 // async:false,


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
                            // location.href = "<?= base_url('dashboard')?>";
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
        // }
        
     });


  //IJAZAH
  $('#fotoijazah').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes//ij')?>",
            data: $(this).serialize(),

                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 // async:false,


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
                            // location.href = "<?= base_url('dashboard')?>";
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
        // }
        
     });


  //SKHU
  $('#fotoskhu').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes//sh')?>",
            data: $(this).serialize(),

                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 // async:false,


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
                            // location.href = "<?= base_url('dashboard')?>";
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
        // }
        
     });


  //simpandatapribadi
    $('#simpan').submit(function(e) {
        e.preventDefault();
       //  var email = document.getElementById('email').value;
       //  var pass = document.getElementById('pass').value;
       // if (email.length=='') {

       //      Swal.fire({
       //          type: 'warning',
       //          title: 'Peringtan',
       //          text: 'Email Tidak Boleh Kosong',
       //          customClass: 'swal-wide',
       //      });
            
       //  }
       //  else if (pass.length=='') {

       //      Swal.fire({
       //          type: 'warning',
       //          title: 'Peringtan',
       //          text: 'password Tidak Boleh Kosong',
       //          customClass: 'swal-wide',
       //      });
            
       //  }
       //  else{

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/simpandatapribadi')?>",
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
        // }
        
     });

    //Wali

    $('#simpanwali').submit(function(e) {
        e.preventDefault();
       //  var email = document.getElementById('email').value;
       //  var pass = document.getElementById('pass').value;
       // if (email.length=='') {

       //      Swal.fire({
       //          type: 'warning',
       //          title: 'Peringtan',
       //          text: 'Email Tidak Boleh Kosong',
       //          customClass: 'swal-wide',
       //      });
            
       //  }
       //  else if (pass.length=='') {

       //      Swal.fire({
       //          type: 'warning',
       //          title: 'Peringtan',
       //          text: 'password Tidak Boleh Kosong',
       //          customClass: 'swal-wide',
       //      });
            
       //  }
       //  else{

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/simpandatawali')?>",
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
        // }
        
     });


    //periodik

  //simpandatapribadi
    $('#simpanperiodik').submit(function(e) {
        e.preventDefault();
       //  var email = document.getElementById('email').value;
       //  var pass = document.getElementById('pass').value;
       // if (email.length=='') {

       //      Swal.fire({
       //          type: 'warning',
       //          title: 'Peringtan',
       //          text: 'Email Tidak Boleh Kosong',
       //          customClass: 'swal-wide',
       //      });
            
       //  }
       //  else if (pass.length=='') {

       //      Swal.fire({
       //          type: 'warning',
       //          title: 'Peringtan',
       //          text: 'password Tidak Boleh Kosong',
       //          customClass: 'swal-wide',
       //      });
            
       //  }
       //  else{

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/simpandataperiodik')?>",
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
        // }
        
     });

    //Selesai


  //simpandatapribadi
    $('#simpanselesai').submit(function(e) {
        e.preventDefault();
        // var cek = document.getElementById('cek');
       if (!document.getElementById('cek').checked) {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Silahkan Centang Dulu',
                customClass: 'swal-wide',
            });
            
        }
        else{
          Swal.fire({
          title: 'Apakah Anda Yakin??',
        type: 'question',
        text: 'Setelah Anda Menyelesaikan Pendaftaran Ini Anda Tidak Bisa Mengedit Kembali Data Anda. Mohon Cek Kembali Kelengkapan Data Anda',
        customClass: 'swal-wide',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Yakin',
        cancelButtonText: 'Tidak'
   }).then((result) => {
    if (result.value) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/simpanselesai')?>",
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
        }
        
     });


});



    

</script>
