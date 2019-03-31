<?php
require_once ('PHPMailer-master/class.pop3.php');
require_once ('PHPMailer-master/class.smtp.php');
require_once ("PHPMailer-master/class.phpmailer.php");
require_once ("PHPMailer-master/PHPMailerAutoload.php");

$email_id = $_POST['email_id'];
$info = $_POST['data'];
//$email_id = "parth4299shah@gmail.com";
echo $email_id;
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; 
$mail->IsHTML(true);
$mail->Username = "rentacar4299@gmail.com";
$mail->Password = "your password";
$mail->SetFrom("rentacar4299@gmail.com");
$mail->Subject = "Regarding Attendance";
$mail->Body = "Dear sir/Madam<br>Attendance is below 75%. YOUR MESSAGE";
$mail->AddAddress($email_id);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    
 } else {
    echo "Message has been sent";
    header('location:admin_option.php?option=Send Mail');
 }

 ?>