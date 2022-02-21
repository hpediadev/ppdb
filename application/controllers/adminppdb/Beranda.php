<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require FCPATH . '/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Html;

class Beranda extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Proses');
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
     
    // load form_validation library
    $this->load->library('form_validation');
    if(empty($this->session->userdata('user_logged')) ){
      redirect(base_url());
      echo "ss";

    }
  }

  function index(){

    
    $where = array(
    );
    // echo  $this->session->userdata('nik');
    $where2=array();
    $data['dataku'] = $this->Proses->getData('siswabaru', $where);
    $data['jurusan'] = $this->Proses->getData('tprodi_md', $where2);
    // foreach($this->session->userdata('user_logged') as $d)
    $data['akun'] = $this->session->userdata('user_logged');

    $this->load->view('header-adm', $data);
    $this->load->view('datappdb', $data);
    $this->load->view('footer-adm', $data);
  }


   public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url(''));
    }

     public function generateChar($num) {
    $numeric = ($num - 1) % 26;
    $letter = chr(65 + $numeric);
    $div = ($num - 1) / 26;
    $num2 = (int)$div;
    if ($num2 > 0) {
        return $this->generateChar($num2) . $letter;
    } else {
        return $letter;
    }
  }

  public function getLetters($num_col) {
    // initialize array to hold coloumn character
    $letters = [];

    // generate char based on coloumn in db
    for($i=1; $i <= $num_col; $i++) {
      $char = $this->generateChar($i);
      array_push($letters, $char);
    }

    return $letters;
  }
      public function export() {

    // get number & name fields
    $fields = $this->Proses->getFields();
    $num_col = $this->Proses->getCol();

    // get letters array
    $alphabet = $this->getLetters($num_col);

    // create object
    $xlsx = new Spreadsheet();
    $sheet = $xlsx->getActiveSheet();

    // give style
    $style = [
      'font' => [
        'bold' => true
      ], 
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
      ],
      'borders' => [
        'bottom' => [
          'borderstyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
          'color' => [ 'rgb' => 333333 ]
        ]
      ],
      'fill' => [
        'type'       => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation'   => 90,
        'startcolor' => array('rgb' => '0d0d0d'),
        'endColor'   => array('rgb' => 'f2f2f2'),
      ]
    ];
    // apply style to header
    $xlsx->getActiveSheet()->getStyle($alphabet[0].'1:'.$alphabet[$num_col-1].'1')->applyFromArray($style);

    // autofit coloumn
    foreach(range($alphabet[0], $alphabet[$num_col-1]) as $columnID) {
      $xlsx->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
    }


    // get data from db
    $where=array();
    $getdata = $this->Proses->getData('siswabaru', $where)->result();

    // push data
    $i = 2; //starting row
    $no=0;
    $sheet->setCellValue($alphabet[0].'1', 'NO');
      $sheet->setCellValue($alphabet[1].'1', 'NO. Peserta');
      $sheet->setCellValue($alphabet[2].'1', 'Nama Lengkap');
      $sheet->setCellValue($alphabet[3].'1', 'NISN');
      $sheet->setCellValue($alphabet[4].'1', 'NIK');
      $sheet->setCellValue($alphabet[5].'1', 'Tempat Lahir');
      $sheet->setCellValue($alphabet[6].'1', 'Tgl Lahir');
      $sheet->setCellValue($alphabet[7].'1', 'No. Akta');
      $sheet->setCellValue($alphabet[8].'1', 'Asal Sekolah');
      $sheet->setCellValue($alphabet[9].'1', 'Dusun');
      $sheet->setCellValue($alphabet[10].'1', 'Desa');
      $sheet->setCellValue($alphabet[11].'1', 'Kecamatan');
      $sheet->setCellValue($alphabet[12].'1', 'Kabupaten');
      $sheet->setCellValue($alphabet[13].'1', 'Provinsi');
      $sheet->setCellValue($alphabet[14].'1', 'Ayah');
      $sheet->setCellValue($alphabet[15].'1', 'Ibu');
    foreach( $getdata as $get ) {
      // $n=0;
      // foreach ($fields as $field) {
      //   $sheet->setCellValue("$alphabet[$n]$i", $get[$field]);
      //   $n++;
      // }
       // $sheet->setCellValue("1", $get->IDS);
      $no++;
          // $xlsx->getActiveSheet()->getStyle($alphabet[0].'1:'.$alphabet[$num_col-1].$i)->applyFromArray($style);
      $sheet->setCellValue($alphabet[0].$i, $no);
      $sheet->setCellValue($alphabet[1].$i, $get->NOPESERTA);
      $sheet->setCellValue($alphabet[2].$i, $get->NAMALENGKAP);
      $sheet->setCellValue($alphabet[3].$i, $get->NISN);
      $sheet->setCellValue($alphabet[4].$i, "'".$get->NIK);
      $sheet->setCellValue($alphabet[5].$i, $get->TMPLAHIR);
      $sheet->setCellValue($alphabet[6].$i, $get->TGLLAHIR);
      $sheet->setCellValue($alphabet[7].$i, "'".$get->AKTA);
      $sheet->setCellValue($alphabet[8].$i, $get->ASAL);
      $sheet->setCellValue($alphabet[9].$i, $get->DSN);
      $sheet->setCellValue($alphabet[10].$i, $get->DESA);
      $sheet->setCellValue($alphabet[11].$i, $get->KEC);
      $sheet->setCellValue($alphabet[12].$i, $get->KAB);
      $sheet->setCellValue($alphabet[13].$i, $get->PROV);
      $sheet->setCellValue($alphabet[14].$i, $get->AYAH);
      $sheet->setCellValue($alphabet[15].$i, $get->IBU);
      $i++;

    }

    // create excel
    $write = new Xlsx($xlsx);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="data_export.xlsx"');
    $write->save('php://output');
  
}
  public function zip()
  {

  $directory = 'http://localhost:8080/ppdb/upload';

  $data["images"] = glob($directory);
       $this->load->library('zip');


    $where = array();
    $sql = $this->Proses->getData('siswabaru', $where)->result();
    foreach($sql as $row){
          $this->zip->read_file($row->FOTO);
    }
       $this->zip->download(''.time().'.zip');


  }
  public function validasi($id)
  {
    $where = array('IDS'=> $id);
    $data['data'] = $this->Proses->getData('siswabaru', $where);
    $this->load->view('header-adm', $data);
    $this->load->view('formvalidasi', $data);
    $this->load->view('footer-adm', $data);
  }
  public function receiveValidasi($id, $ids)
  {
    $where = array('IDS'=> $ids);
    $data = array('VFOTO'=> '1');
    $sql = $this->Proses->updateData('siswabaru', $data, $where);
    if($sql>0)
        echo json_encode(array('success' => 1, 'message' => 'Selamat... Data Sukses Di Validasi'));
    else
        echo json_encode(array('success' => 2, 'message' => 'Selamat... Data Gagal Di Validasi'));
  }
}