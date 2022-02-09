<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Proses');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');
    $this->load->model('m_data');
  }

  function index(){
    
    $this->load->view('hee');
    $this->load->view('login');
    $this->load->view('foo');
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
        'EMAIL'=> $email
      );
      $sql = $this->Proses->getData('siswabaru', $where);
      if($sql->num_rows() >0){
        // $pass = password_hash('9000', PASSWORD_DEFAULT);
        $pwdb = 0;
        foreach($sql->result() as $r){
          $pwdb = $r->PASSWORD;
           if(password_verify($pass, $pwdb)){
            // $this->session->set_userdata('em',$)
            $this->session->set_userdata(['user_logged' => $r]);
            // $this->session->set_userdata('email', $user->EMAIL);
            // $this->session->set_userdata('pass', $user->PASSWORD);
            // $this->session->set_userdata('nama', $user->NAMALENGKAP);
            // $this->session->set_userdata('jk', $user->LEVEL);
            // $this->session->set_userdata('S', $user->STATUSLOGIN);
            // $this->session->set_userdata('G', $user->GAMBAR);
            // $this->_updateLastLogin($user->USERNAME);
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
  public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url(''));
    }

  
}
