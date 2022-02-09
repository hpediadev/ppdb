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
              $satu='active';
              $dua='';
              $tiga='';
              $empat='';
              $lima='';
              $satu='';


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
                 <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                        

                        <!-- <div class="box"> -->
                          <!-- /.box-header -->
                          <!-- <div class="box-body"> -->
                            <table id="example2" class="table table-bordered table-striped">
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
                              <tr>
                                <td><?= $data->NIK?></td>
                                <td><?= $data->NAMALENGKAP?></td>
                                <td><?= $data->NAMALENGKAP?></td>
                                <td><?= $data->NAMALENGKAP?></td>
                                <td><?= $data->NAMALENGKAP?></td>
                                <td><?= $data->NAMALENGKAP?></td>
                              </tr>
                            <?php } ?>
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Jurusan</th>
                                <th>Berkas</th>
                                <th>SKL</th>
                              </tr>
                              </tfoot>
                            </table>
                          <!-- </div> -->
                          <!-- /.box-body -->
                        <!-- </div> -->
                        <!-- /.box -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </section>
              </div>
              <div class="<?= $dua?> tab-pane" id="datapribadi">
                <!-- /.post -->
              </div>

              <div class="<?= $tiga?> tab-pane" id="dataperiodik">
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
