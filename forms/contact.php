<?php
$emailFrom = $_POST['email'];
$nameFrom = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$receiving_email_address = 'svrizkyp007@gmail.com';
include "../assets/vendor/php-email-form/classes/class.phpmailer.php";
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com"; //hostname masing-masing provider email
// $mail->SMTPDebug = 4;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "uchiharizky2014@gmail.com"; //user email
$mail->Password = "Kalamani2"; //password email
$mail->SetFrom($emailFrom, $emailFrom); //set email pengirim
$mail->Subject = $subject; //subyek email
$mail->AddAddress($receiving_email_address,'Rizky Pratama'); //tujuan email
$mail->MsgHTML($message);
if($mail->Send()) echo 'OK';
else echo 'Failed to sending message';
?>
