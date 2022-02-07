
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

            <a href="<?= base_url('webadmsekolah/guru/tambah/')?>"><button class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i> Tambah Guru Baru</button></a>
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Guru</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="80px">Aksi</th>
                  <!-- <th>Foto</th> -->
                  <th>NIG</th>
                  <th>Nama</th>
                  <th>L/P</th>
                  <th>Jabatan</th>
                </tr>
                </thead>
                <tbody> 
                  <?php foreach ($data as $row) {
                    $jk='';
                    if($row->JKGURU==1){
                      $jk = 'Laki-laki';
                    }
                    else if($row->JKGURU==2){
                      $jk = 'Perempuan';
                    }
                    $jb='';
                    if($row->JABATAN==1){
                      $jb = 'Kepala Sekolah';
                    }
                    else if($row->JABATAN==2){
                      $jb = 'Waka Kurikulum';
                    }
                    else if($row->JABATAN==3){
                      $jb = 'Waka Humas';
                    }
                    else if($row->JABATAN==4){
                      $jb = 'Waka Kesiswaan';
                    }
                    else if($row->JABATAN==5){
                      $jb = 'BK';
                    }
                    else if($row->JABATAN==6){
                      $jb = 'Tata Usaha';
                    }
                    else if($row->JABATAN==7){
                      $jb = 'Operator';
                    }
                    else if($row->JABATAN==8){
                      $jb = 'Guru';
                    }
                                        ?>
                <tr>
                  <td>
                    <div>
                    <a href="<?php echo base_url('webadmsekolah/guru/aksi/'.$row->IDGURU) ?>"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/guru/edit/'.$row->IDGURU) ?>"><button  type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/guru/hapus/'.$row->IDGURU) ?>"><button  type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                    </div>
                  </td>
                  <!-- <td><img src="<?php echo BASE_URL('uploads/artikel/'.$row->GAMBARGURU)?>" width="100px" ></td> -->
                  <td><?= $row->NIG ?></td>
                  <td><?= $row->NAMAGURU ?></td>
                  <td><?= $jk ?></td>
                  <td><?= $jb ?></td>
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
    