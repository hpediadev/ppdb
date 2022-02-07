
    <!-- Main content -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <?php 
        if(!empty($this->session->flashdata("rubah"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Selamat...!. </b><?php echo $this->session->flashdata('rubah');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("data"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Selamat...!. </b><?php echo $this->session->flashdata('data');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("gagal"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('gagal');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("besar"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('besar');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("png"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('png');  ?>
              </div>
            <?php }
            ?> 
            
            <a href="<?= base_url('webadmsekolah/slide/tambah/')?>"><button class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i> Tambah Slide</button></a>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Aksi</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                </tr>
                </thead>
                <tbody> 
                  <?php foreach ($DataSlide as $row) {
                                        ?>
                <tr>
                  <td>
                    <div>
                    <a href="<?php echo base_url('webadmsekolah/slide/aksi/'.$row->IDSLIDE.'/'.$row->GAMBAR) ?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/slide/edit/'.$row->IDSLIDE) ?>"><button  type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                    </div>
                  </td>
                  <td><?php echo $row->JUDUL ?></td>
                  <td><img src="<?php echo BASE_URL('uploads/'.$row->GAMBAR)?>" width="200px" ></td>
                </tr>
                  <?php 
                }
                   ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
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
    