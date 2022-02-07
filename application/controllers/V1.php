<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class V1 extends CI_Controller{

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
        'img_path'=>'./captcha/', #folder captcha yg sudah dibuat tadi
        'img_url'=>base_url('captcha'), #ini arahnya juga ke folder captcha
        'img_width'=>'145', #lebar image captcha
        'img_height'=>'45', #tinggi image captcha
        'expiration'=>7200, #waktu expired
        'font_size'=>64,
        'font_path' => FCPATH . 'assets/font/FontsFree-Net-Roblox-Black-RoundFontsFree-Net-Roblox-Black-Round.ttf', #load font jika mau ganti fontnya
        'pool' => 'ABCDEFGHIJ', #tipe captcha (angka/huruf, atau kombinasi dari keduanya)
 
        # atur warna captcha-nya di sini ya.. gunakan kode RGB
        'colors' => array(
                'background' => array(242, 242, 242),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40))
           );
    $cap = create_captcha($options);
    $data['image'] = $cap['image'];
    $this->session->set_userdata('mycaptcha', $cap['word']);
    $data['word'] = $this->session->userdata('mycaptcha');
    //$this->load->view('loginView',$data);

    $this->load->view('header');
    $this->load->view('home', $data);
    // $this->load->view('isi');
    $this->load->view('footer');
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
