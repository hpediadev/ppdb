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
  function cekCaptcha(){
    $captcha = $this->input->post('captcha_code'); #mengambil value inputan pengguna
    $word = $this->session->userdata('mycaptcha'); #mengambil value captcha
    if (isset($captcha)) { #cek variabel $captcha kosong/tidak
     if (strtoupper($captcha)==strtoupper($word)) { #proses pencocokan captcha
          #terserah kalian mau diisi apa di sini
     }
    }
    }
  function simpan(){
      $email = $this->input->post('email');
      $pass = $this->input->post('pass');
      $where = array(
        'NIK'=> $nik,
        'TGLLAHIR'=> $tgl
      );
      $sql = $this->Proses->getData('siswabaru', $where);
      if($sql->num_rows() >0){
        // $pass = password_hash('9000', PASSWORD_DEFAULT);
        $pwdb = 0;
        foreach($sql->result() as $r){
          $pwdb = $r->PASSWORD;
           if(password_verify($pass, $pwdb)){
              echo json_encode(array('success' => 1, 'message' => 'Selamat...! Login Berhasil'));
           }
           else{
              echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
           }
        }
       
      }
      else{
       echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
      }
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
    $kec = $post['kec'];
    $kab = $post['kab'];
    $prov = $post['prov'];

    $data =array(
      'NAMALENGKAP'=> $nama,
      'NISN'=> $nisn,
      'JK'=> $jk,
      'TMPLAHIR'=> $tmp,
      'EMAIL'=> $email,
      'NOKK'=> $kk,
      'AKTA'=> $akta,
      'ALAMAT'=> $jalan,
      'RT'=> $rt,
      'RW'=> $rw,
      'DSN'=> $dsn,
      'DESA'=> $desa,
      'KEC'=> $kec,
      'KAB'=> $kab,
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

  
}
