<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Resetpassword extends CI_Controller{

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
     $options = array(
    $this->load->view('login');
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
  function alur(){
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('alur');
    $this->load->view('footer');
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
