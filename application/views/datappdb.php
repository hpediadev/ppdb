<br><br><br>
<section class="content">

  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Calon Peserta Didik Baru</h3>
                  <script src="geo-min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            div_isi=document.getElementById("div_isi");
            div_isi.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan='posisi:'+latitude+','+longitude;
            pesan = pesan + "<br/>";
            pesan = pesan + '<img src="https://maps.googleapis.com/maps/api/staticmap?size=400×400&amp;zoom=13&amp;markers=color:red%7Clabel:C%7C'+latitude +','+longitude+'"/>';
            div_isi=document.getElementById("div_isi");
            //alert(pesan);
            div_isi.innerHTML =pesan;
        }
        
        function error_callback(p)
        {
            div_isi=document.getElementById("div_isi");
            div_isi.innerHTML ='error='+p.message;
        }        
    </script>
    <div id="div_isi">
    </div>


            </div>
            <!-- /.box-header -->
            <div class="boxs-body table-responsive no-padding">
             <div class="box">
                          <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Jurusan</th>
                        <th>FT</th>
                        <th>KK</th>
                        <th>AT</th>
                        <th>SL</th>
                        <th>IJ</th>
                        <th>SH</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php 
                        $l=''; $p='';
                            foreach($dataku->result() as $r){
                              if($r->JK==1){
                                $l='selected';
                                $jk='Laki-laki';
                              }
                              else{
                                $p='selected';
                                $jk='Perempuan';
                              }
                              $ft='';
                              if(!empty($r->FOTO)){
                                if($r->VFOTO==1)
                                  $ft = '<span class="badge bg-green">&nbsp;</span>';
                                else
                                  $ft = '<span class="badge bg-blue">&nbsp;</span>';
                              }
                              else{
                                $ft='<span class="badge bg-red">&nbsp;</span>';
                              }
                              $kk='';
                              if(!empty($r->KK)){
                                if($r->VKK==1)
                                  $kk = '<span class="badge bg-green">&nbsp;</span>';
                                else
                                  $kk = '<span class="badge bg-blue">&nbsp;</span>';
                              }
                              else{
                                $kk='<span class="badge bg-red">&nbsp;</span>';
                              }
                              $ak='';
                              if(!empty($r->AKTA)){
                                if($r->VAKTA==1)
                                  $ak = '<span class="badge bg-green">&nbsp;</span>';
                                else
                                  $ak = '<span class="badge bg-blue">&nbsp;</span>';
                              }
                              else{
                                $ak='<span class="badge bg-red">&nbsp;</span>';
                              }
                              $sk='';
                              if(!empty($r->SKL)){
                                if($r->VSKL==1)
                                  $sk = '<span class="badge bg-green">&nbsp;</span>';
                                else
                                  $sk = '<span class="badge bg-blue">&nbsp;</span>';
                              }
                              else{
                                $sk='<span class="badge bg-red">&nbsp;</span>';
                              }
                              $ij='';
                              if(!empty($r->IJAZAH)){
                                if($r->VIJAZAH==1)
                                  $ij = '<span class="badge bg-green">&nbsp;</span>';
                                else
                                  $ij = '<span class="badge bg-blue">&nbsp;</span>';
                              }
                              else{
                                $ij='<span class="badge bg-red">&nbsp;</span>';
                              }
                              $sh='';
                              if(!empty($r->SKHU)){
                                if($r->VFOTO==1)
                                  $sh = '<span class="badge bg-green">&nbsp;</span>';
                                else
                                  $sh = '<span class="badge bg-blue">&nbsp;</span>';
                              }
                              else{
                                $sh='<span class="badge bg-red">&nbsp;</span>';
                              }
                        ?>
                      <tr>
                        <td><?= $r->NIK?></td>
                        <td><?= $r->NAMALENGKAP?></td>
                        <td><?= $r->ASAL?></td>
                        <td><?= $r->JURUSAN?></td>
                        <td><?= $ft?></td>
                        <td><?= $kk?></td>
                        <td><?= $ak?></td>
                        <td><?= $sk?></td>
                        <td><?= $ij?></td>
                        <td><?= $sh?></td>
                        <td>
                          <div style="width: 80px;">
                          <a data-toggle="tooltip" data-placement="top" title="Validasi Berkas" href="<?= base_url('adminppdb/beranda/validasi/'.$r->IDS) ?>" ><button type="button" class="btn btn-danger btn-xs"><i class="fa  fa-unlock"></i></button></a>
                          <a href="<?php echo base_url('webadmsekolah/artikel/edit/'.$r->IDS) ?>"><button  type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                          <a href="<?php echo base_url('webadmsekolah/artikel/lihat/'.$r->IDS) ?>"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-search"></i></button></a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Jurusan</th>
                        <th>FT</th>
                        <th>KK</th>
                        <th>AT</th>
                        <th>SL</th>
                        <th>IJ</th>
                        <th>SH</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

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
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>   