<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Daftar extends CI_Controller
{

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

  function index()
  {
             $data['chaptca'] = $this->get_chaptca(4).' '.$this->get_chaptca(3).' '.$this->get_chaptca(2);

    $this->load->view('hee');
    $this->load->view('register', $data);
    $this->load->view('foo');
  }
  function cekCaptcha()
  {
    $captcha = $this->input->post('captcha_code'); #mengambil value inputan pengguna
    $word = $this->session->userdata('mycaptcha'); #mengambil value captcha
    if (isset($captcha)) { #cek variabel $captcha kosong/tidak
      if (strtoupper($captcha) == strtoupper($word)) { #proses pencocokan captcha
        #terserah kalian mau diisi apa di sini
      }
    }
  }
      private function get_chaptca($param) // method pembuat chapta
       {
        $alphabet   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $num        = range(0, 35);
        $result     = '';
         shuffle($num);
         for ($x = 0; $x < $param; $x++)
          {
            $result .= substr($alphabet, $num[$x], 1);
          }
          return $result;
      }

  function simpanreg()
  {
    if ($this->session->userdata('val') == 'data') {
        
        $kodeak = md5("Tes");

      $this->session->set_userdata('val', 'data2');
      $nik = $this->input->post('nik');
      $tgl = $this->input->post('tgl');
      // dd/mm/yyyy
      $tgl = substr($tgl,6,4).'-'.substr($tgl,3,2).'-'.substr($tgl,0,2);

      $where = array(
      );
      $this->db->where('NIK', $email)
      ->or_where('TGLLAHIR', $tgl);
      $sql = $this->Proses->getData('siswabaru', $where);
      if($sql->num_rows()>0){
        echo json_encode(array('success' => 0, 'message' => 'Mohon Maaf Yaddd'));
      }
      else{

      $no = '2022.01';
      // $email = 'mashasin91@gmail.com';
      $sub = 'Pendaftaran Siswa Baru ';
      $pesan = '
<table cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;vertical-align:top;min-width:320px;Margin:0 auto;background-color:#ffffff;width:100%">
    <tbody>
        <tr style="vertical-align:top">
            <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center" style="background-color:#ffffff">
                            <div style="background-color:transparent">
                                <div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:transparent;word-break:break-word">
                                    <div style="display:table;border-collapse:collapse;width:100%;background-color:transparent">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center" style="background-color:transparent">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="width:600px">
                                                        <tr style="background-color:transparent">
                                                            <td align="center" style="width:600px;padding-right:0px;padding-left:0px;padding-top:5px;padding-bottom:5px;border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent" valign="top" width="600">
                                                                <div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
                                                                    <div style="width:100%!important;background-color:transparent">
                                                                        <div align="left" style="padding-left:0px;padding-right:0px">
                                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                <tr style="line-height:0px;line-height:0px">
                                                                                    <td align="left" style="padding-right:0px;padding-left:0px">
                                                                                        <img align="left" alt="Image" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/94/Screen_Shot_2018-06-04_at_17.50.17.png" style="outline:none;text-decoration:none;clear:both;display:block!important;border:0;height:auto;float:none;width:100%;max-width:291px" title="Image" width="291">
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color:transparent">
                                <div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:#f9f9f9;word-break:break-word">
                                    <div style="display:table;border-collapse:collapse;width:100%;background-color:#f9f9f9">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center" style="background-color:transparent">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="width:600px">
                                                        <tr style="background-color:#f9f9f9">
                                                            <td align="center" style="width:600px;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:15px;border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent" valign="top" width="600">
                                                                <div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
                                                                    <div style="width:100%!important;background-color:transparent">
                                                                        <div style="padding-top:0px;padding-right:0px;padding-left:0px;padding-bottom:15px">
                                                                            <div align="center" style="padding-left:0px;padding-right:0px">
                                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tr style="line-height:0px;line-height:0px">
                                                                                        <td align="center" style="padding-right:0px;padding-left:0px">
                                                                                            <img align="center" alt="Image" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/94/6d12f59b-7727-4c0c-b42a-d06d97a5b912.png" style="outline:none;text-decoration:none;clear:both;display:block!important;border:0;height:auto;float:none;width:100%;max-width:600px" title="Image" width="600">
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;vertical-align:top;min-width:100%" width="100%">
                                                                                <tbody>
                                                                                    <tr style="vertical-align:top">
                                                                                        <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-right:15px;padding-left:15px;padding-top:15px;padding-bottom:15px;min-width:100%">
                                                                                            <table align="center" border="0" cellpadding="0" cellspacing="0" height="0px" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;vertical-align:top;border-top:0px solid transparent" width="100%">
                                                                                                <tbody>
                                                                                                    <tr style="vertical-align:top">
                                                                                                        <td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;font-size:0px;line-height:0px">
                                                                                                            <span>
                                                                                                            </span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div>
                                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tr>
                                                                                        <td style="padding-right:30px;padding-left:30px;padding-top:10px;padding-bottom:5px">
                                                                                            <div style="color:#555555;line-height:150%;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif">
                                                                                                <div style="font-size:12px;line-height:18px;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif;text-align:left;color:#555555">
                                                                                                    <p style="margin:0;font-size:14px;line-height:21px">
                                                                                                        <span style="font-size:24px;line-height:36px">
                                                                                                            Selamat...! Nanda ' . $nama . '
                                                                                                        </span>
                                                                                                    </p>
                                                                                                    <p style="margin:0;font-size:14px;line-height:21px">
                                                                                                        Pendaftaran Akun Anda berhasil, Dengan Rincian Data Sebagai Berikut
                                                                                                    </p>
                                                                                                    <p style="margin:0;font-size:14px;line-height:21px">
                                                                                                    </p>
                                                                                                    <p style="margin:0;font-size:12px;line-height:18px">
                                                                                                        <span style="font-size:14px;line-height:21px">
                                                                                                            Hope you like it!
                                                                                                        </span>
                                                                                                    </p>
                                                                                                    <p style="margin:0;font-size:12px;line-height:18px">
                                                                                                        <strong>
                                                                                                            <em>
                                                                                                                <span style="font-size:14px;line-height:21px">
                                                                                                                    The Lighthouse Team
                                                                                                                </span>
                                                                                                            </em>
                                                                                                        </strong>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color:transparent">
                                <div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:transparent;word-break:break-word">
                                    <div style="display:table;border-collapse:collapse;width:100%;background-color:transparent">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center" style="background-color:transparent">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="width:600px">
                                                        <tr style="background-color:transparent">
                                                            <td align="center" style="width:598px;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;border-top:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-bottom:1px solid #dcdcdc;border-right:1px solid #dcdcdc" valign="top" width="598">
                                                                <div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
                                                                    <div style="width:100%!important;background-color:transparent">
                                                                        <div style="padding-top:0px;padding-right:0px;padding-left:0px;padding-bottom:0px">
                                                                            <div>
                                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tr>
                                                                                        <td style="padding-right:30px;padding-left:30px;padding-top:30px;padding-bottom:15px">
                                                                                            <div style="color:#555555;line-height:150%;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif">
                                                                                                <div style="font-size:12px;line-height:18px;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif;text-align:left;color:#555555">
                                                                                                    <p style="margin:0;font-size:12px;line-height:18px">
                                                                                                        <span style="font-size:14px;line-height:21px">
                                                                                                             <table align="centser">
              <tr>
                <td width=180px">Jenis Pendaftaran</td>
                <td>:</td>
                <td>' . $nama . '</td>
              </tr>
              <tr>
                <td>NISN</td>
                <td>:</td>
                <td>' . $nisn . '</td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>' . $nama . '</td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>' . $tmp . '</td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>' . $tgl . '</td>
              </tr>
              <tr>
                <td>No. HPr</td>
                <td>:</td>
                <td>' . $hp . '</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>' . $email . '</td>
              </tr>
              <tr>
                <td>Password</td>
                <td>:</td>
                <td>' . $pass .'</td>
              </tr>
            </table>
                                                                                                        </span>
                                                                                                    </p>
                                                                                                    <p style="margin:0;font-size:12px;line-height:18px">
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color:transparent">
                                <div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:#477bba;word-break:break-word">
                                    <div style="display:table;border-collapse:collapse;width:100%;background-color:#477bba">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center" style="background-color:transparent">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="width:600px">
                                                        <tr style="background-color:#477bba">
                                                            <td align="center" style="width:600px;padding-right:0px;padding-left:0px;padding-top:5px;padding-bottom:5px;border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent" valign="top" width="600">
                                                                <div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
                                                                    <div style="width:100%!important;background-color:transparent">
                                                                        <div align="center" style="padding-left:0px;padding-right:0px">
                                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                <tr style="line-height:0px;line-height:0px">
                                                                                    <td align="center" style="padding-right:0px;padding-left:0px">

                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>';

      $pass = password_hash($pass, PASSWORD_DEFAULT);

      $data = array(
        'JENISPENDAFTARAN' => $pdf,
        'NAMALENGKAP' => $nama,
        'NISN' => $nisn,
        'JK' => $jk,
        'TMPLAHIR' => $tmp,
        'TGLLAHIR' => $tgl,
        'HP' => $hp,
        'EMAIL' => $email,
        'PASSWORD' => $pass,
        'LINK'=> $kodeak
      );

      $s = $this->Proses->inputData('siswabaru', $data);
      if ($s > 0) {

        $this->Proses->sendEmail($email, $pesan, $sub);

        // Tampilkan pesan sukses atau error
        if ($this->session->flashdata('Message') == "Terkirim") {
          echo json_encode(array('success' => 1, 'message' => 'Pendaftaran Akun Berhasil, Silahkan Cek Emailnya Untuk Aktivasi Pendaftaran'));
        } else {
          echo json_encode(array('success' => 2, 'message' => 'Pendaftaran Akun Berhasil, Silihkan Klik Kirim Ulang Pendaftaran'));
        }
      } else {
        echo json_encode(array('success' => 0, 'message' => 'Pendaftaran Gagal, Cek Data Yang Dimasukkan'));
      }
  }
    } else
      echo json_encode(array('success' => 2, 'message' => 'Mohon Maaf Ya'));
  }
  function send()
  {
    $email = 'mashasin91@gmail.com';
    $sub = 'Tes';
    $pesan = '
    <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;vertical-align:top;min-width:320px;Margin:0 auto;background-color:#ffffff;width:100%">
<tbody>
<tr style="vertical-align:top">
<td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" style="background-color:#ffffff">
<div style="background-color:transparent">
<div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:transparent;word-break:break-word">
<div style="display:table;border-collapse:collapse;width:100%;background-color:transparent">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" style="background-color:transparent">
<table border="0" cellpadding="0" cellspacing="0" style="width:600px">
<tr style="background-color:transparent">
<td align="center" style="width:600px;padding-right:0px;padding-left:0px;padding-top:5px;padding-bottom:5px;border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent" valign="top" width="600">
<div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
<div style="width:100%!important;background-color:transparent">
<div align="left" style="padding-left:0px;padding-right:0px">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr style="line-height:0px;line-height:0px">
<td align="left" style="padding-right:0px;padding-left:0px">
<img align="left" alt="Image" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/94/Screen_Shot_2018-06-04_at_17.50.17.png" style="outline:none;text-decoration:none;clear:both;display:block!important;border:0;height:auto;float:none;width:100%;max-width:291px" title="Image" width="291">
</td>
</tr>
</table>
</div>
</div>
</div>ss
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div>
</div>
<div style="background-color:transparent">
<div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:#f9f9f9;word-break:break-word">
<div style="display:table;border-collapse:collapse;width:100%;background-color:#f9f9f9">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" style="background-color:transparent">
<table border="0" cellpadding="0" cellspacing="0" style="width:600px">
<tr style="background-color:#f9f9f9">
<td align="center" style="width:600px;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:15px;border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent" valign="top" width="600">
<div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
<div style="width:100%!important;background-color:transparent">
<div style="padding-top:0px;padding-right:0px;padding-left:0px;padding-bottom:15px">
<div align="center" style="padding-left:0px;padding-right:0px">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr style="line-height:0px;line-height:0px">
<td align="center" style="padding-right:0px;padding-left:0px">
<img align="center" alt="Image" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/94/6d12f59b-7727-4c0c-b42a-d06d97a5b912.png" style="outline:none;text-decoration:none;clear:both;display:block!important;border:0;height:auto;float:none;width:100%;max-width:600px" title="Image" width="600">
</td>
</tr>
</table>
</div>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;vertical-align:top;min-width:100%" width="100%">
<tbody>
<tr style="vertical-align:top">
<td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding-right:15px;padding-left:15px;padding-top:15px;padding-bottom:15px;min-width:100%">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="0px" style="border-collapse:collapse;table-layout:fixed;border-spacing:0;vertical-align:top;border-top:0px solid transparent" width="100%">
<tbody>
<tr style="vertical-align:top">
<td style="word-break:break-word;border-collapse:collapse!important;vertical-align:top;font-size:0px;line-height:0px">
<span>
</span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="padding-right:30px;padding-left:30px;padding-top:10px;padding-bottom:5px">
<div style="color:#555555;line-height:150%;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif">
<div style="font-size:12px;line-height:18px;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif;text-align:left;color:#555555">
<p style="margin:0;font-size:14px;line-height:21px">
<span style="font-size:24px;line-height:36px">
Personal Communication
</span>
</p>
<p style="margin:0;font-size:14px;line-height:21px">
Thanks for visiting our booth today. As promised, we are sending you a special offer that is only reserved to those who stopped by to meet us. Click on the button below to discover what this special deal is about!
</p>
<p style="margin:0;font-size:14px;line-height:21px">
</p>
<p style="margin:0;font-size:12px;line-height:18px">
<span style="font-size:14px;line-height:21px">
Hope you like it!
</span>
</p>
<p style="margin:0;font-size:12px;line-height:18px">
<strong>
<em>
<span style="font-size:14px;line-height:21px">
The Lighthouse Team
</span>
</em>
</strong>
</p>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div>
</div>
<div style="background-color:transparent">
<div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:transparent;word-break:break-word">
<div style="display:table;border-collapse:collapse;width:100%;background-color:transparent">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" style="background-color:transparent">
<table border="0" cellpadding="0" cellspacing="0" style="width:600px">
<tr style="background-color:transparent">
<td align="center" style="width:598px;padding-right:0px;padding-left:0px;padding-top:0px;padding-bottom:0px;border-top:1px solid #dcdcdc;border-left:1px solid #dcdcdc;border-bottom:1px solid #dcdcdc;border-right:1px solid #dcdcdc" valign="top" width="598">
<div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
<div style="width:100%!important;background-color:transparent">
<div style="padding-top:0px;padding-right:0px;padding-left:0px;padding-bottom:0px">
<div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td style="padding-right:30px;padding-left:30px;padding-top:30px;padding-bottom:15px">
<div style="color:#555555;line-height:150%;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif">
<div style="font-size:12px;line-height:18px;font-family:Georgia,Times,&#39;Times New Roman&#39;,serif;text-align:left;color:#555555">
<p style="margin:0;font-size:12px;line-height:18px">
<span style="font-size:14px;line-height:21px">
You are receiving this email because you visited our booth at a trade show and left your contact information with us. Not interested? Unsubscribe here.
</span>
</p>
<p style="margin:0;font-size:12px;line-height:18px">
</p>
</div>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div>
</div>
<div style="background-color:transparent">
<div class="m_4388540759868726434block-grid" style="Margin:0 auto;max-width:600px;word-wrap:break-word;min-width:320px;background-color:#477bba;word-break:break-word">
<div style="display:table;border-collapse:collapse;width:100%;background-color:#477bba">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" style="background-color:transparent">
<table border="0" cellpadding="0" cellspacing="0" style="width:600px">
<tr style="background-color:#477bba">
<td align="center" style="width:600px;padding-right:0px;padding-left:0px;padding-top:5px;padding-bottom:5px;border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent" valign="top" width="600">
<div class="m_4388540759868726434col m_4388540759868726434num12" style="min-width:320px;display:table-cell;max-width:600px;vertical-align:top">
<div style="width:100%!important;background-color:transparent">
<div align="center" style="padding-left:0px;padding-right:0px">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr style="line-height:0px;line-height:0px">
<td align="center" style="padding-right:0px;padding-left:0px">

</td>
</tr>
</table>
</div>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>

    ';
    $this->Proses->sendEmail('hsmanagemant@gmail.com', $pesan, $sub);

    // Tampilkan pesan sukses atau error
    if ($this->session->flashdata('Message') == "Terkirim") {
      echo json_encode(array('success' => 1, 'message' => 'Pendaftaran Akun Berhasil, Silahkan Cek Emailnya Untuk Aktivasi Pendaftaran'));
    } else {

      echo json_encode(array('success' => 2, 'message' => $this->session->flashdata('Message')));
    }
  }
  function pengumuman()
  {
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }
  function masuk()
  {
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }
  function kontak()
  {
    $this->load->view('header');
    $this->load->view('pages');
    $this->load->view('daftar');
    $this->load->view('footer');
  }
}
