<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($datautabel as $row) {
              $sadmin = '';
              $admin='';
              $pili = '';
              $pas = password_verify('admin','$2y$10$rCbeAAhaK4N0QjGEs5v95eeaW3Th6eIjgk6H2adqTeE59w.f0Ok7G');
                                        ?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/profiluser/simpan')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="" value="<?= $row->NAMA?>"  required p="Enter email" name="nama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" readonly id=""  value="<?= $row->USERNAME?>@smkpbwaru.sch.id" p="Enter email" name="username" >
                </div>

              <div class="form-group">
                  <label>Hak Akses</label>
                  <select class="form-control" name="level" required>
                    <?php
                    if($row->LEVEL==2){

                      $sadmin = '';
                      $admin='selected';
                      $pilh='';
                    }
                    else if($row->LEVEL==1){

                      $sadmin = 'selected';
                      $admin='';
                      $pilh='';
                    }
                    else{

                      $sadmin = '';
                      $admin='';
                      $pilh='selected';
                    }

                    


                    ?>

                    <option <?= $pilh ?> value="">Hak Akses</option>
                    <option <?= $sadmin ?> value="1">Super Admin</option>
                    <option <?= $admin ?> value="2">Admin</option>
                  </select>
                </div>
                <!-- <?php
                if($row->USERNAME==$this->session->userdata("U")){

                    ?>
                    <?php

                  }
                  else{
                    ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password Lama</label>
                  <input type="text" class="form-control" id="" required p="Password Lama" name="plama" >
                </div>
                    <?php

                  }
                  ?> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Password Baru</label>
                  <input type="passsword" class="form-control"  id="" resquired p="Password Baru" name="pbaru" >
                  <input type="hidden" class="form-control" value="<?= $row->PASSWORD?>" id="" required p="Password Baru" name="plama" >
                  <p style="color: red">Jika password kosong, password tetap yang lama</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="hidden" value="<?= $row->USERNAME?>"  name="id" >
                  <input type="hidden" value="<?= $row->GAMBAR?>"  name="gambarasli" >
                  <input type="file" id="exampleInputFile"  value="" name="gambar" >

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/profiluser')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button>
              </div>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>