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

            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/struktur/simpan')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masa Priode</label>
                  <input type="text" class="form-control" id="" value="" p="Periode" required  name="periode" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Logo Jurusan</label>
                  <input type="file" id="exampleInputFile" required=""  value="" name="gambar" >

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
