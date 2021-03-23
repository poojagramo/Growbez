<?php
require 'phpmailer/PHPMailerAutoload.php';


$nm = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$email_pass = $_POST['visitor_email_pass'];
$email_title = $_POST['email_title'];//Domain Name
$visitor_msg = $_POST['visitor_message'];
$dob = $_POST['dob'];
// $filename = $_FILES['resume']['name'];
// $attachment = 'E:\Files\Final_Report.pdf';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

$mail->Username = $email;//sender email id
$mail->Password = $email_pass;

$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->Subject = $email_title." Internship";
$mail->Body = "Date of Birth = ".$dob.$visitor_msg;

$mail->setFrom($email,$nm);//sender email id

$mail->addAddress('poojagramo@gmail.com');//receiver email id
// $mail->AddAttachment($filename);

if ($mail->send())
{
    echo "Your Mail Sent Successfully".$mail->ErrorInfo;
    // echo "<br>".$filename;
	header("Location:index.html");
}
else 
	echo "Your Mail Not Sent, Please Try After Some Time ".$mail->ErrorInfo;
?>