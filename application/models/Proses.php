<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : mediadigitalofficial
 * | Email           : admin@mediadigitalofficial.com
 * | Filename        : Barang.php
 * | Instagram       : @mediadigitalofficial
 * | Blog            : http://www.mediadigitalofficial.com
 * | Info            : http://info.mediadigitalofficial.com
 * | Demo            : http://demo.mediadigitalofficial.com
 * | Youtube         : http://youtube.com/mediadigitalofficial
 * | File Created    : Thursday, 12th March 2020 9:33:56 pm
 * | Last Modified   : Thursday, 12th March 2020 9:54:10 pm
 * |==============================================================|
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Proses extends CI_Model{

  public function sendEmail($email, $pesan, $sub)
    {

        require APPPATH.'libraries/phpmailer/src/Exception.php';
        require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH.'libraries/phpmailer/src/SMTP.php';

        // PHPMailer object
        $response = false;
        $mail = new PHPMailer();

        // SMTP configuration
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail->isSMTP();
        $mail->Host     = 'mail.smkpbwaru.sch.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'info@smkpbwaru.sch.id'; // user email
        $mail->Password = 'PutraBangsa'; // password email
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('no-reply@smkpbwaru.sch.id', 'SMK Putra Bangsa'); // user email
        $mail->addReplyTo('no-reply@smkpbwaru.sch.id', ''); //user email


        // Add a recipient
        $mail->addAddress($email); //email tujuan pengiriman email

        // Email subject
        $mail->Subject = $sub; //subject email

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = $pesan; // isi email
        $mail->Body = $mailContent;
        $result = $mail->send();
        $p=0;
        if(!$result){

            $p=1;
            $this->session->set_flashdata('Message','Gagal'.$mail->ErrorInfo);
        }else{
            
            $p=2;
            $this->session->set_flashdata('Message','Terkirim');
        }
    }
    function inputData($table, $data)
    {
        $this->db->insert($table,$data);
        return $this->db->affected_rows();
    }
    function getData($table, $where){
        return $this->db->get_where($table, $where);
    }
    function updateData($table,$data,$where){
        $this->db->where($where);
        $this->db->update($table,$data);
        return $this->db->affected_rows();
    } 
}

	
        