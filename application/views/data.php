<br><br><br>
<section class="content">
<?php 
$l=''; $p='';
    foreach($data->result() as $data){
      if($data->JK==1){
        $l='selected';
        $jk='Laki-laki';
      }
      else{
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
                <form class="form-horizontal" id="simpan" methosd="post" actsion="<?= base_url('dashboard/simpandatapribadi')?>">
                  
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
                      <select class="form-control" id="jurusan" name="jurusan">
                        <option value="">Pilih Jurusan</option>
                        <?php foreach($jurusan->result() as $r){ ?>
                        <option value="<?= $r->IDPRODI?>"><?= $r->NAMAPRODI?></option>
                      <?php } ?>
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
                      <input type="text"  class="form-control" value="<?= $data->NISN; ?>" id="nisn" name="nisn" plc="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Jenis Kelamin</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="jk" name="jk">
                        <option value="">Pilih Jenis Kelamin</option>
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
                      <input type="text"  class="form-control" value="<?= $data->EMAIL; ?>" id="email" name="email" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Asal Sekolah</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->NAMALENGKAP; ?>" id="asekolah" name="asekolah" plc="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. KK</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->NOKK; ?>" id="kk" name="kk" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No.Reg. Akta Lahir</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->AKTA; ?>" id="akta" name="akta" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Alamat Jalan</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->ALAMAT; ?>" id="jalan" name="jalan" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">RT</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->RT; ?>" id="rt" name="rt" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">RW</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->RW; ?>" id="rw" name="rw" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Dusun</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->DSN; ?>" id="dsn" name="dsn" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
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
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Provinsi</label>

                    <div class="col-sm-9">
                      <!-- http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json -->
                      <select class="form-control">
                        <option value=""></option>

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

                        ?>
                        <option value=""><?php echo $prov['name']; ?></option>
                        <?php 
                        } ?>
                      </select>

                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Emailr</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="inputExperience" plc="Experience"></textarea>
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
                      <input type="text"  class="form-control" value="<?= $data->NIKAYAH; ?>" id="nikayah" name="nikayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tahun Lahir Ayah</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->TAHUNAYAH; ?>" id="tahunayah" name="tahunayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pendidikan Terakhir Ayah</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PENDAYAH; ?>" id="pendayah" name="pendayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pekerjaan Ayah</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PEKERAYAH; ?>" id="pekerayah" name="pekerayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penghasilan Ayah Perbulan</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->HASILAYAH; ?>" id="hasilayah" name="hasilayah" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. Hp Ayah</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->HPAYAH; ?>" id="hpayah" name="hpayah" plc="Name"> 
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
                      <input type="text"  class="form-control" value="<?= $data->NIKIBU; ?>" id="nikibu" name="nikibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tahun Lahir Ibu</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->TAHUNIBU; ?>" id="tahunibu" name="tahunibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pendidikan Terakhir Ibu</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PENDIBU; ?>" id="pendibu" name="pendibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pekerjaan Ibu</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PEKERIBU; ?>" id="pekeribu" name="pekeribu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penghasilan Ibu Perbulan</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->HASILIBU; ?>" id="hasilibu" name="hasilibu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. Hp Ibu</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->HPIBU; ?>" id="hpibu" name="hpibu" plc="Name"> 
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
                      <input type="text"  class="form-control" value="<?= $data->NIKWALI; ?>" id="nikwali" name="nikwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Tahun Lahir Wali</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->TAHUNWALI; ?>" id="tahunwali" name="tahunwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pendidikan Terakhir WALI</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PENDWALI; ?>" id="pendwali" name="pendwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Pekerjaan WALI</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PEKERWALI; ?>" id="pekerwali" name="pekerwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penghasilan Wali Perbulan</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->HASILWALI; ?>" id="hasilwali" name="hasilwali" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. Hp Wali</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->HPWALI; ?>" id="hpwali" name="hpwali" plc="Name"> 
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
                      <input type="text"  class="form-control" value="<?= $data->TINGGI; ?>" id="tinggi" name="tinggi" plc="Name"> 
                      <input type="hidden"  class="form-control" value="<?= $data->NIK; ?>" id="email" name="email" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Berat Badan (kg)</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->BERAT; ?>" id="berat" name="berat" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Jarak Ke Sekolah (km)</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->JARAK; ?>" id="jarak" name="jarak" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Waktu Tempuh (jam:menit)</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->WAKTUTEMPUH; ?>" id="waktu" name="waktu" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Rencana Tempat Tinggal</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->TEMPATTINGGAL; ?>" id="tinggal" name="tinggal" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Moda Transportasi</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->KENDARAAN; ?>" id="transportasi" name="transportasi" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Anak Ke Berapa</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->ANAKKE; ?>" id="anakke" name="anakke" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. KKS (Jika Ada)</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->NOKKS; ?>" id="nokks" name="nokks" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Penerima PKS / PKH</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->PKH; ?>" id="pkh" name="pkh" plc="Name"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">No. PKS / PKH</label>

                    <div class="col-sm-9">
                      <input type="text"  class="form-control" value="<?= $data->NOPKH; ?>" id="nopkh" name="nopkh" plc="Name"> 
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
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                      <br>
                      <?php 
                      if(!empty($data->FOTO)){
                        $pch = explode('.',$data->FOTO);
                        if($pch[1]==="pdf"){
                         ?>
                         <iframe src="<?= base_url('upload/'.$data->FOTO)?>" height="750%" width="100%" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);'></iframe>

                        <?php 
                        }
                        else{
                         ?>
                        <img src="<?= base_url('upload/'.$data->FOTO)?>" width="400px" id="image2"><br>
                      <?php } }?>
                    </div>
                  </div>
                </form>
                <form class="form-horizontal" enctype="multipart/form-data"  id="fotokk">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FOTO KARTU KELUARGA (KK)</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
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
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FOTO AKTA KELAHIRAN</b> (Jika Ada)</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
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
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FOTO SURAT KETERANGAN LULUS</b></button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
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
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FOTO IJAZAH</b> (Jika Ada)</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
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
                      <button type="button"  class="form-control btn-primary btn-xs btn-flat btn-block" ><b>FOTO SKHUN</b> (Jika Ada)</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">&nbsp;</label>

                    <div class="col-sm-10">
                      <input type="file" name="file">
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

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
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

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
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
      

    
$(document).ready(function() {

  //simpanfotopribadi
  $('#fotopribadi').change(function(e) {

            <?php 
                $this->session->set_userdata('val','datasave');
             ?>
            $.ajax({

            type: "POST",
            url:"<?= base_url('dashboard/tes//fp')?>",
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
                text: 'Email Tidak Boleh Kosong'+cek,
                customClass: 'swal-wide',
            });
            
        }
        else{

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


});



    

</script>
