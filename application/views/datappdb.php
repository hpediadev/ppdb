<br><br><br>
<section class="content">
<style type="text/css">
  input[type="text"] {
    readonly: readonly;
}

</style>

      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <?php 

echo $this->session->userdata('nik');
              $satu='active';
              $dua='';
              $tiga='';
              $empat='';
              $lima='';
              $satu='';


               ?>
              <li class=""active><a href="#activity" data-toggle="tab">Data Siswa Baru</a></li>
              <li class="" ><a href="#datapribadi" data-toggle="tab">Data Siswa Baru Tervalidasi</a></li>
              <li class=""><a href="#dataperiodik" data-toggle="tab">Data Periodik</a></li>
              <!-- <li><a href="#timeline" data-toggle="tab">Timeline</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                 
                   <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                       

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
                                  <th>KK</th>
                                  <th>SKL</th>
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
                                              ?>
                                            <tr>
                                              <td><?= $r->NIK?></td>
                                              <td><?= $r->NAMALENGKAP?></td>
                                              <td><?= $r->NAMALENGKAP?></td>
                                              <td><?= $r->NAMALENGKAP?></td>
                                              <td><?= $r->NAMALENGKAP?></td>
                                              <td><?= $r->NAMALENGKAP?></td>
                                            </tr>
                                          <?php } ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th>NIK</th>
                                  <th>Nama</th>
                                  <th>Asal Sekolah</th>
                                  <th>Jurusan</th>
                                  <th>KK</th>
                                  <th>SKL</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </section>
              </div>
              <div class=" tab-pane" id="datapribadi">
                <!-- /.post -->
              </div>

              <div class=" tab-pane" id="dataperiodik">
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        
        <!-- /.col -->
      </div>
      <!-- /.row -->

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
