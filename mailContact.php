<?php
require 'phpmailer/PHPMailerAutoload.php';


$nm = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$email_pass = $_POST['visitor_email_pass'];
$email_title = $_POST['email_title'];
$visitor_msg = $_POST['visitor_message'];


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

$mail->Username = $email;//sender email id
$mail->Password = $email_pass;

$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->Subject = $email_title;
$mail->Body = $visitor_msg ;

$mail->setFrom($email,$nm);//sender email id

$mail->addAddress('poojagramo@gmail.com');//receiver email id


if ($mail->send())
{
    echo "Your Mail Sent Successfully".$mail->ErrorInfo;
	header("Location:index.html");
}
else 
	echo "Your Mail Not Sent, Please Try After Some Time ".$mail->ErrorInfo;
?>