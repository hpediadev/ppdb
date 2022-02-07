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
              <h3 class="box-title">Form Struktur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/profil/simpan')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masa Profil</label>
                  <input type="text" class="form-control" id="" p="Enter email" required  name="nama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Data Profil</label>
                  <input type="text" class="form-control" id="" p="Enter email" required  name="profil" >
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simmpan</button>
                 <a href="../../profilsekolah"><button type="button" class="btn btn-danger">Kembali</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
