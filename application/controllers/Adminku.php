<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Adminku extends CI_Controller{

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
              echo json_encode(array('success' => 1, 'message' => 'Selamat...! Login Berhas'));
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
  function daftar(){
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }
  function pengumuman(){
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }
  function masuk(){
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }
  function kontak(){
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }

  
}
