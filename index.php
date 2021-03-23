<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();



$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;


$mail->Username = 'duskdreamers@gmail.com';//sender email id
$mail->Password = 'dusk_dreamers';

$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->Subject = 'Web Technology2';
$mail->Body = 'Hello Pooja this is some body';

$mail->setFrom('duskdreamers@gmail.com','Pooja Gramopadhye');//sender email id

$mail->addAddress('poojagramo@gmail.com');//receiver email id


if ($mail->send())
    echo "your Mail sent ".$mail->ErrorInfo;
else 
	echo "not sent ur mail ".$mail->ErrorInfo;
?>