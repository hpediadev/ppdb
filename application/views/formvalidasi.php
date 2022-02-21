<br><br><br>
<section class="content">
  <?php 
    foreach($data->result() as $row){
     ?>
  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Validasi Data Pendaftaran</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
             <table class="table table-bordered table-striped">
               <tr>
                 <td colspan="2" class="bg-primary">DATA DIRI</td>
               </tr>
               <tr>
                 <td>No. Peserta</td>
                 <td><?= $row->NOPESERTA?></td>
               </tr>
               <tr>
                 <td>Nama Lengkap</td>
                 <td><?= $row->NAMALENGKAP?></td>
               </tr>
               <tr>
                 <td>NISN</td>
                 <td><?= $row->NISN?></td>
               </tr>
               <tr>
                 <td>NIK</td>
                 <td><?= $row->NIK?></td>
               </tr>
               <tr>
                 <td>Tempat Lahir</td>
                 <td><?= $row->TMPLAHIR?></td>
               </tr>
               <tr>
                 <td>Tanggal Lahir</td>
                 <td><?= $row->TGLLAHIR?></td>
               </tr>
               <tr>
                 <td>Jurusan</td>
                 <td><?= $row->JURUSAN?></td>
               </tr>
               <tr>
                 <td>Asal Sekolah</td>
                 <td><?= $row->ASAL?></td>
               </tr>
               <tr>
                 <td>Email Pribadi</td>
                 <td><?= $row->EMAIL?></td>
               </tr>
               <tr>
                 <td>No. Hp Pribadi</td>
                 <td><?= $row->HP?></td>
               </tr>
               <tr>
                 <td>No. Kartu Keluarga</td>
                 <td><?= $row->NOKK?></td>
               </tr>
               <tr>
                 <td>No. Akta Kelahiran</td>
                 <td><?= $row->AKTA?></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td>RT : <?= $row->RT.' / RW : '.$row->RW?></td>
               </tr>
               <tr>
                 <td>Dusun</td>
                 <td><?= $row->DSN?></td>
               </tr>
               <tr>
                 <td>Kelurahan / Desa</td>
                 <td><?= $row->DESA?></td>
               </tr>
               <tr>
                 <td>Kecamatan</td>
                 <td><?= $row->KEC?></td>
               </tr>
               <tr>
                 <td>Kabupaten / Kota</td>
                 <td><?= $row->KAB?></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><?= $row->PROV?></td>
               </tr>
               <tr>
                 <td colspan="2" class="bg-primary">DATA ORANG TUA / WALI</td>
               </tr>
               <tr>
                 <td>Ayah Kandung</td>
                 <td><?= $row->AYAH?></td>
               </tr>
               <tr>
                 <td>NIK Ayah</td>
                 <td><?= $row->NIKAYAH?></td>
               </tr>
               <tr>
                 <td>Tahun Lahir Ayah</td>
                 <td><?= $row->TAHUNAYAH?></td>
               </tr>
               <tr>
                 <td>Pendidikan Akhir Ayah</td>
                 <td><?= $row->PENDAYAH?></td>
               </tr>
               <tr>
                 <td>Pekerjaan Ayah</td>
                 <td><?= $row->PEKERAYAH?></td>
               </tr>
               <tr>
                 <td>Penghasilan Ayah</td>
                 <td><?= $row->HASILAYAH?></td>
               </tr>
               <tr>
                 <td>No. Hp Ayah</td>
                 <td><?= $row->HPAYAH?></td>
               </tr>
               <tr>
                 <td>Ibu Kandung</td>
                 <td><?= $row->IBU?></td>
               </tr>
               <tr>
                 <td>NIK Ibu</td>
                 <td><?= $row->NIKIBU?></td>
               </tr>
               <tr>
                 <td>Tahun Lahir Ibu</td>
                 <td><?= $row->TAHUNIBU?></td>
               </tr>
               <tr>
                 <td>Pendidikan Akhir Ibu</td>
                 <td><?= $row->PENDIBU?></td>
               </tr>
               <tr>
                 <td>Pekerjaan Ibu</td>
                 <td><?= $row->PEKERIBU?></td>
               </tr>
               <tr>
                 <td>Penghasilan Ibu</td>
                 <td><?= $row->HASILIBU?></td>
               </tr>
               <tr>
                 <td>No. Hp Ibu</td>
                 <td><?= $row->HPIBU?></td>
               </tr>
               <tr>
                 <td>Wali Kandung</td>
                 <td><?= $row->WALI?></td>
               </tr>
               <tr>
                 <td>NIK Wali</td>
                 <td><?= $row->NIKWALI?></td>
               </tr>
               <tr>
                 <td>Tahun Lahir Wali</td>
                 <td><?= $row->TAHUNWALI?></td>
               </tr>
               <tr>
                 <td>Pendidikan Akhir Wali</td>
                 <td><?= $row->PENDWALI?></td>
               </tr>
               <tr>
                 <td>Pekerjaan Wali</td>
                 <td><?= $row->PEKERWALI?></td>
               </tr>
               <tr>
                 <td>Penghasilan Wali</td>
                 <td><?= $row->HASILWALI?></td>
               </tr>
               <tr>
                 <td>No. Hp Wali</td>
                 <td><?= $row->HPWALI?></td>
               </tr>
               <tr>
                 <td colspan="2" class="bg-primary">DATA PERIODIK DIRI</td>
               </tr>
               <tr>
                 <td>Tinggi Badan</td>
                 <td><?= $row->TINGGI?> CM</td>
               </tr>
               <tr>
                 <td>Berat Badan</td>
                 <td><?= $row->BERAT?> KG</td>
               </tr>
               <tr>
                 <td>Jarak Ke Sekolah</td>
                 <td><?= $row->JARAK?></td>
               </tr>
               <tr>
                 <td>Waktu Tempuh</td>
                 <td><?= $row->WAKTUTEMPUH?></td>
               </tr>
               <tr>
                 <td>Rencana Tempat Tinggal</td>
                 <td><?= $row->TEMPATTINGGAL?></td>
               </tr>
               <tr>
                 <td>Moda Transportasi</td>
                 <td><?= $row->KENDARAAN?></td>
               </tr>
               <tr>
                 <td>Anak Ke</td>
                 <td><?= $row->ANAKKE?></td>
               </tr>
               <tr>
                 <td>No. KKS</td>
                 <td><?= $row->NOKKS?></td>
               </tr>
               <tr>
                 <td>Penerima PKH</td>
                 <td><?= $row->PKH?></td>
               </tr>
               <tr>
                 <td>No. PKH</td>
                 <td><?= $row->NOPKH?></td>
               </tr>
             </table>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
             <table class="table table-bordered table-striped">
               <tr>
                 <td><img src="<?= base_url('upload/'.$row->FOTO)?>" width="50%"><br></td>
               </tr>
               <tr>
                <td>
                  <?php 
                    if($row->VFOTO==1){
                      echo '<a type="button" class="btn btn-success btn-sm btn-block">Foto Sudah Divalidasi</a>';
                    }
                    else{
                   ?>
                  <input type="text" name="ketfoto" id="ketfoto" class="form-control" placeholder="Isi Catatan Jika Berkas Foto Ditolak">
                  <input type="hidden" name="ids" id="ids" value="<?= $row->IDS?>" class="form-control" placeholder="Isi Catatan Jika Berkas Foto Ditolak">
                  <input type="hidden" name="link" id="link" value="<?= base_url('adminppdb/beranda/receivevalidasi')?>" class="form-control" placeholder="Isi Catatan Jika Berkas Foto Ditolak">
                  <br>
                 <a type="button" class="btn-terima btn btn-primary btn-sm">Terima Foto</a>
                 <button class="btn btn-danger btn-sm">Tolak Foto</button>
                 <button class="btn btn-info btn-sm">Lihat Foto</button>
               <?php } ?>
                </td>
               </tr>
               <tr>
                 <td>
               <?php 
                if(!empty($row->KK)){
                  $pch = explode('.',$row->KK);
                  if($pch[1]==="pdf"){
                   ?>
                    <embed src="<?= base_url('upload/'.$row->KK)?>" type="application/pdf" width="100%" height="100"></embed>

                  <?php 
                  }
                  else{
                   ?>
                  <img src="<?= base_url('upload/'.$row->KK)?>" width="100%" id="image2"><br>
                <?php } }?>
               </tr>
               <tr>
                <td>
                  <input type="text" name="" class="form-control" placeholder="Isi Catatan Jika Berkas KK Ditolak">
                  <br>
                 <button class="btn btn-primary btn-sm">Terima KK</button>
                 <button class="btn btn-danger btn-sm">Tolak KK</button>
                 <button value="klkl" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Lihat KK</button>

                </td>
               </tr>
               <tr>
                 <td>
               <?php 
                if(!empty($row->FOTOKATA)){
                  $pch = explode('.',$row->FOTOKATA);
                  if($pch[1]==="pdf"){
                   ?>
                    <embed src="<?= base_url('upload/'.$row->FOTOKATA)?>" type="application/pdf" width="100%" height="100"></embed>

                  <?php 
                  }
                  else{
                   ?>
                  <img src="<?= base_url('upload/'.$row->FOTOKATA)?>" width="100%" id="image2"><br>
                <?php } }?>
               </tr>
               <tr>
                <td>
                  <input type="text" name="" class="form-control" placeholder="Isi Catatan Jika Berkas AKTA Ditolak">
                  <br>
                 <button class="btn btn-primary btn-sm">Terima FOTOKATA</button>
                 <button class="btn btn-danger btn-sm">Tolak FOTOKATA</button>
                 <button class="btn btn-info btn-sm">Lihat FOTOKATA</button>
                </td>
               </tr>
               <tr>
                 <td>
               <?php 
                if(!empty($row->SKL)){
                  $pch = explode('.',$row->SKL);
                  if($pch[1]==="pdf"){
                   ?>
                    <embed src="<?= base_url('upload/'.$row->SKL)?>" type="application/pdf" width="100%" height="100"></embed>

                  <?php 
                  }
                  else{
                   ?>
                  <img src="<?= base_url('upload/'.$row->SKL)?>" width="100%" id="image2"><br>
                <?php } }?>
               </tr>
               <tr>
                <td>
                  <input type="text" name="" class="form-control" placeholder="Isi Catatan Jika Berkas SKL Ditolak">
                  <br>
                 <button class="btn btn-primary btn-sm">Terima SKL</button>
                 <button class="btn btn-danger btn-sm">Tolak SKL</button>
                 <button class="btn btn-info btn-sm">Lihat SKL</button>
                </td>
               </tr>
               <tr>
                 <td>
               <?php 
                if(!empty($row->IJAZAH)){
                  $pch = explode('.',$row->IJAZAH);
                  if($pch[1]==="pdf"){
                   ?>
                    <embed src="<?= base_url('upload/'.$row->IJAZAH)?>" type="application/pdf" width="100%" height="100"></embed>

                  <?php 
                  }
                  else{
                   ?>
                  <img src="<?= base_url('upload/'.$row->IJAZAH)?>" width="100%" id="image2"><br>
                <?php } }?>
               </tr>
               <tr>
                <td>
                  <input type="text" name="" class="form-control" placeholder="Isi Catatan Jika Berkas IJAZAH Ditolak">
                  <br>
                 <button class="btn btn-primary btn-sm">Terima IJAZAH</button>
                 <button class="btn btn-danger btn-sm">Tolak IJAZAH</button>
                 <button class="btn btn-info btn-sm">Lihat IJAZAH</button>
                </td>
               </tr>
               <tr>
                 <td>
               <?php 
                if(!empty($row->SKHU)){
                  $pch = explode('.',$row->SKHU);
                  if($pch[1]==="pdf"){
                   ?>
                    <embed src="<?= base_url('upload/'.$row->SKHU)?>" type="application/pdf" width="100%" height="100"></embed>

                  <?php 
                  }
                  else{
                   ?>
                  <img src="<?= base_url('upload/'.$row->SKHU)?>" width="100%" id="image2"><br>
                <?php } }?>
               </tr>
               <tr>
                <td>
                  <input type="text" name="" class="form-control" placeholder="Isi Catatan Jika Berkas SKHU Ditolak">
                  <br>
                 <button class="btn btn-primary btn-sm">Terima SKHU</button>
                 <button class="btn btn-danger btn-sm">Tolak SKHU</button>
                 <button class="btn btn-info btn-sm">Lihat SKHU</button>
                </td>
               </tr>
             </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a type="button" href="<?= base_url('adminppdb/beranda')?>" class="btn btn-danger btn-block">Kembali</a>
          

        </div>
      </div>
      <!-- /.box -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" style="width:90%; text-align:center;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

               <?php 
                if(!empty($row->KK)){
                  $pch = explode('.',$row->KK);
                  if($pch[1]==="pdf"){
                   ?>
                    <embed src="<?= base_url('upload/'.$row->KK)?>" type="application/pdf" width="100%" height="500"></embed>

                  <?php 
                  }
                  else{
                   ?>
                  <img src="<?= base_url('upload/'.$row->KK)?>" width="100%" id="image2"><br>
                <?php } }?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <!-- Full screen modal -->
</section>


<script type="text/javascript">

$('.lihat-kk').click(function(e){
  id = document.querySelector('button[class="lihat-kk"]');

  alert(id);

});
$('.btn-terima').click(function(e){
        e.preventDefault();
        id = document.getElementById('ketfoto').value;
        link = document.getElementById('link').value;
        ids = document.getElementById('ids').value;
        if(id.length=="")
          id="1";
        link = link+"/"+id+"/"+ids;
    Swal.fire({
          title: 'Yakin Anda Mau Kembali?'+link,
        type: 'question',
        customClass: 'swal-wide',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Kembali',
        cancelButtonText: 'Tidak'
   }).then((result) => {
    if (result.value) {
     // location.href=link;
      $.ajax({
            type:'get',
            url:link,
            data: $(this).serialize(),


             beforeSend:function()
             {
                Swal.fire({
                    customClass: 'swal-loading',
                    text: 'Mohon Tunggu Sebentar... ' ,
                    allowOutsideClick: false,

                    onOpen: function () {
                       swal.showLoading()
                    }
                });
             },         

            success: function(response)
            {
                var jsonData = JSON.parse(response);
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
                            // location.href = "<?= base_url('dashboard')?>";
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
    
$(document).ready(function() {
    $('#simpan').submit(function(e) {
        e.preventDefault();
        var nik = document.getElementById('nik').value;
        var tgl = document.getElementById('tgl').value;
        if (nik.length=='') {

            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'NIK Tidak Boleh Kosong'+tgl,
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
        else if(tgl.includes("d")){
            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Silahkan Isi Tanggal Lahir Dengan Tepat',
                customClass: 'swal-wide',
            });
        }
        else if(tgl.includes("m")){
            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Silahkan Isi Tanggal Lahir Dengan Tepat',
                customClass: 'swal-wide',
            });
        }
        else if(tgl.includes("y")){
            Swal.fire({
                type: 'warning',
                title: 'Peringtan',
                text: 'Silahkan Isi Tanggal Lahir Dengan Tepat',
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
