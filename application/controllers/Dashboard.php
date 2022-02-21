<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Proses');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');
    if(empty($this->session->userdata('nik')) OR empty($this->session->userdata('tgl')))
      redirect(base_url());
  }

  function index(){
    $nik = $this->session->userdata('nik');
    $tgl = $this->session->userdata('tgl');
    $where = array(
      'NIK'=> $nik,
      'TGLLAHIR'=> $tgl
    );
    // echo  $this->session->userdata('nik');
    $where2=array();
    $data['data'] = $this->Proses->getData('siswabaru', $where);
    $data['jurusan'] = $this->Proses->getData('tprodi_md', $where2);

    $this->load->view('header-das', $data);
    $this->load->view('data', $data);
    $this->load->view('footer-das', $data);
  }
  function profil(){
    $this->load->view('profil');
  }
  function simpandatapribadi(){
    $post = $this->input->post();
    $nama = $post['nama'];
    $nisn = $post['nisn'];
    $jk = $post['jk'];
    $tmp = $post['tmp'];
    $email = $post['email'];
    $kk = $post['kk'];
    $akta = $post['akta'];
    $jalan = $post['jalan'];
    $rt = $post['rt'];
    $rw = $post['rw'];
    $dsn = $post['dsn'];
    $desa = $post['desa'];
    $kec = $post['camat'];
    $kab = $post['kota'];
    $asal = $post['asekolah'];
    $prov = $post['provinsi'];

    $data =array(
      'NAMALENGKAP'=> $nama,
      'JURUSAN'=> $post['jurusan'],
      'NISN'=> $nisn,
      'JK'=> $jk,
      'TMPLAHIR'=> $tmp,
      'EMAIL'=> $email,
      'NOKK'=> $kk,
      'AKTA'=> $akta,
      'ALAMAT'=> $jalan,
      'HP'=> $post['hp'],
      'RT'=> $rt,
      'RW'=> $rw,
      'DSN'=> $dsn,
      'DESA'=> $desa,
      'KEC'=> $kec,
      'KAB'=> $kab,
      'ASAL'=> $asal,
      'PROV'=> $prov,
              'MENU'=> 1
    );
    $nik = $this->session->userdata('nik');
    $tgl = $this->session->userdata('tgl');
    $where = array(
      'NIK'=> $nik,
      'TGLLAHIR'=> $tgl
    );
    $sql = $this->Proses->updateData('siswabaru', $data, $where);
    if($sql>0)
    echo json_encode(array('success' => 1, 'message' => 'Data Sudah Tersimpan'));
    else
    echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
  }
  function simpandatawali(){
    $post = $this->input->post();

    $data =array(
      'AYAH'=> $post['ayah'],
      'NIKAYAH'=> $post['nikayah'],
      'TAHUNAYAH'=> $post['tahunayah'],
      'PENDAYAH'=> $post['pendayah'],
      'PEKERAYAH'=> $post['pekerayah'],
      'HASILAYAH'=> $post['hasilayah'],
      'HPAYAH'=> $post['hpayah'],
      'IBU'=> $post['ibu'],
      'NIKIBU'=> $post['nikibu'],
      'TAHUNIBU'=> $post['tahunibu'],
      'PENDIBU'=> $post['pendibu'],
      'PEKERIBU'=> $post['pekeribu'],
      'HASILIBU'=> $post['hasilibu'],
      'HPIBU'=> $post['hpibu'],
      'WALI'=> $post['wali'],
      'NIKWALI'=> $post['nikwali'],
      'TAHUNWALI'=> $post['tahunwali'],
      'PENDWALI'=> $post['pendwali'],
      'PEKERWALI'=> $post['pekerwali'],
      'HASILWALI'=> $post['hasilwali'],
      'HPWALI'=> $post['hpwali'],
              'MENU'=> 2
    );
    $nik = $this->session->userdata('nik');
    $tgl = $this->session->userdata('tgl');
    $where = array(
      'NIK'=> $nik,
      'TGLLAHIR'=> $tgl
    );

    $sql = $this->Proses->updateData('siswabaru', $data, $where);
    if($sql>0)
    echo json_encode(array('success' => 1, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
    else
    echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
  }
  function simpandataperiodik(){
    $post = $this->input->post();

    $data =array(
      'TINGGI'=> $post['tinggi'],
      'BERAT'=> $post['berat'],
      'JARAK'=> $post['jarak'],
      'WAKTUTEMPUH'=> $post['waktu'],
      'TEMPATTINGGAL'=> $post['tinggal'],
      'KENDARAAN'=> $post['transportasi'],
      'ANAKKE'=> $post['anakke'],
      'NOKKS'=> $post['nokks'],
      'PKH'=> $post['pkh'],
      'NOPKH'=> $post['nopkh'],
              'MENU'=> 3
    );
    $nik = $this->session->userdata('nik');
    $tgl = $this->session->userdata('tgl');
    $where = array(
      'NIK'=> $nik,
      'TGLLAHIR'=> $tgl
    );

    $sql = $this->Proses->updateData('siswabaru', $data, $where);
    if($sql>0)
    echo json_encode(array('success' => 1, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
    else
    echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
  }

  function simpanselesai(){

    $data =array(
      'STS'=> 2
    );
    $nik = $this->session->userdata('nik');
    $tgl = $this->session->userdata('tgl');
    $where = array(
      'NIK'=> $nik,
      'TGLLAHIR'=> $tgl
    );

    $sql = $this->Proses->updateData('siswabaru', $data, $where);
    if($sql>0)
    echo json_encode(array('success' => 1, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
    else
    echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
  }
  function tes($id){
     $config['upload_path']="./upload/";
        $config['allowed_types']='gif|jpg|png|jpeg|pdf';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
      if($this->upload->do_upload("file")){
          $data = array('upload_data' => $this->upload->data());

          $judul= 'lll';
          $image= $data['upload_data']['file_name']; 
          
          if($id==='fp'){
            $dataku = array(
              'FOTO'=> $image,
              'MENU'=> 4
            );
          }
          else if($id==='kk'){
            $dataku = array(
              'KK'=> $image,
              'MENU'=> 4
            );
          }
          else if($id==='fa'){
            $dataku = array(
              'FOTOAKTA'=> $image,
              'MENU'=> 4
            );
          }
          else if($id==='sk'){
            $dataku = array(
              'SKL'=> $image,
              'MENU'=> 4
            );
          }
          else if($id==='ij'){
            $dataku = array(
              'IJAZAH'=> $image,
              'MENU'=> 4
            );
          }
          else if($id==='sh'){
            $dataku = array(
              'SKHU'=> $image,
              'MENU'=> 4
            );
          }
                   // var_dump($data);
                  // echo $data->NAMALENGKAP;
          
    $nik = $this->session->userdata('nik');
    $tgl = $this->session->userdata('tgl');
    $where = array(
      'NIK'=> $nik,
      'TGLLAHIR'=> $tgl
    );

          $result= $this->Proses->updateData('siswabaru',$dataku, $where);
          if($result>0){
            echo json_encode(array('success' => 1, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
          }else{
            echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
          }
        }
        else{
          echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
        }
  }


   public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url(''));
    }

    public function getkota()
    {
     try {
        if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $api_categories_list ='https://www.emsifa.com/api-wilayah-indonesia/api/regencies/'.$id.'.json';
        $json_list = file_get_contents($api_categories_list);
        $profile = json_decode($json_list, TRUE);
        ?>
        <select name="kota" id="kota" class="form-control" onchange="getcamat(this.value)">
                          <option value="" selected>-- Silahkan Pilih --</option>
        <?php
        foreach($profile as $r){
        ?>
          <option value="<?= $r['id'];?>"><?= $r['name']?></option>
        <?php
        }
        ?>
      </select>
        <?php
      }
     } catch (Exception $e) {
       
     }
    }
    public function getcamat()
    {
      if(!empty($_GET['id'])){
      $id = $_GET['id'];
      $api_categories_list ='http://www.emsifa.com/api-wilayah-indonesia/api/districts/'.$id.'.json';
      $json_list = file_get_contents($api_categories_list);
      $profile = json_decode($json_list, TRUE);
      ?>
      <select name="camat" id="camat" class="form-control" onchange="getdesa(this.value)">
        <option value="" selected>-- Silahkan Pilih --</option>
      <?php
      foreach($profile as $r){
      ?>
        <option value="<?= $r['id'];?>"><?= $r['name']?></option>
      <?php
      }
      ?>
    </select>
      <?php
    }
    }
    public function getdesa()
    {
      if(!empty($_GET['id'])){
      $id = $_GET['id'];
      // echo $id;
      $api_categories_list ='http://www.emsifa.com/api-wilayah-indonesia/api/villages/'.$id.'.json';
      $json_list = file_get_contents($api_categories_list);
      $profile = json_decode($json_list, TRUE);
      ?>
      <select name="desa" id="desa" class="form-control">
        <option value="" selected>-- Silahkan Pilih --</option>
      <?php
      foreach($profile as $r){
      ?>
        <option value="<?= $r['id'];?>"><?= $r['name']?></option>
      <?php
      }
      ?>
    </select>
      <?php
    }
    }
    public function cetak(){


      $nik = $this->session->userdata('nik');
      $tgl = $this->session->userdata('tgl');

      $this->load->library('ciqrcode');
  
    $params['data'] = $nik.' TERVERIFIKASI';
    $params['level'] = 'H';
    $params['size'] = 10;
    $params['savename'] ='upload/'.$nik.'-TERVERIFIKASI.png';
    $this->ciqrcode->generate($params);


      $where = array(
        'NIK'=> $nik,
        'TGLLAHIR'=> $tgl
      );
      // echo  $this->session->userdata('nik');
      $where2=array();
      $data['data'] = $this->Proses->getData('siswabaru', $where);
      $data['jurusan'] = $this->Proses->getData('tprodi_md', $where2);

      $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "Formulir-Pendaftaran-Peserta-Didik-Baru.pdf";
    $this->pdf->load_view('cetak', $data);

      // $this->load->view('cetak', $data);

    }

    function qr(){
      $this->load->library('ciqrcode');
  
    $params['data'] = 'This is a text to encode become QR Code';
    $params['level'] = 'H';
    $params['size'] = 10;
    $params['savename'] ='upload/tes.png';
    $this->ciqrcode->generate($params);
    
    echo '<img src="'.base_url('upload/').'tes.png" />';
    }
  
}
