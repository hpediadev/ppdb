<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 

class Zip_file extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Proses');
}
 

 function index(){

  $directory = 'upload';

  $data["images"] = glob($directory . "/*.*");

  $where = array();
    $sql = $this->Proses->getData('siswabaru', $where)->result();

  $this->load->view('zip_file', $data);

 }

 

 function download(){

  if($this->input->post('images')) {

   $this->load->library('zip');

   $images = $this->input->post('images');

   foreach($images as $image) {

    $this->zip->read_file($image);

   }

   $this->zip->download('data'.time().'.zip');

  }

 }

}

?>