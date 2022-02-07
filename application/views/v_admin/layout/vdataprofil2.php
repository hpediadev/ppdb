
    <!-- Main content -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
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
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?= base_url('webadmsekolah/profil/simpanedit')?>">
              <div class="box-body">
                 <?php 
                  $no=0;
                  foreach ($DataArtikel as $row) {
                    $no++;
                    ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><?= $row->NAMAPROFIL?></label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row->DATAPROFIL ?>" name="data[]">
                    <input type="hidden" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row->IDPROFIL ?>" name="id[]">
                  </div>
                </div>
              <?php } ?>
              <input type="hidden" name="j" value="<?= $no?>">
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button>
                 <a href="<?= base_url('webadmsekolah/artikel')?>"><button type="button" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</button></a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

       </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    