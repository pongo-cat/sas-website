<!--Sends email to user (confirming message) and me-->

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
include dirname(__DIR__) .'/PHPMAILER/PHPMailer.php';
include dirname(__DIR__) .'/PHPMAILER/Exception.php';
include dirname(__DIR__) .'/PHPMAILER/SMTP.php';

function checkSend($mail){
    if( !$mail->send() ){
        $tab = array('error' => 'Mailer Error: '.$mail->ErrorInfo );
        echo json_encode($tab);
        return false;
    }
    else{
        echo "<script>alert('Message sent successfully!')</script>";
        return true;
    }
}

$username = getenv('PHPMailer_USERNAME');
$password = getenv('PHPMailer_APPPASSWORD');
$port = getenv('PHPMailer_PORT');

$cmail = new PHPMailer();
$cmail->CharSet = 'UTF-8';
$cmail->STMPSecure = 'tls';
$cmail->Host = 'smtp.gmail.com';
$cmail->SMTPAuth = true;
$cmail->Username = $username;
$cmail->Password = $password;
$cmail->Port = $port;
$cmail->setFrom('sleipnirartstudio@gmail.com', 'Sleipnir Art Studio');
$cmail->addAddress($_POST['email']);
$cmail->addReplyTo('sleipnirartstudio@gmail.com', 'Sleipnir Art Studio');
$cmail->isHTML(true);
$cmail->Subject = 'Message Confirmation';
$cmail->Body = "Thank you for your message, " . $_POST['name'] . "! We will get back to you as soon as possible.";

$smail = new PHPMailer();
$smail->CharSet = 'UTF-8';
$smail->STMPSecure = 'tls';
$smail->Host = 'smtp.gmail.com';
$smail->SMTPAuth = true;
$smail->Username = $username;
$smail->Password = $password;
$smail->Port = $port;
$smail->setFrom('sleipnirartstudio@gmail.com', 'Sleipnir Art Studio');
$smail->addAddress('sleipnirartstudio@gmail.com');
$smail->addReplyTo('sleipnirartstudio@gmail.com', 'Sleipnir Art Studio');
$smail->isHTML(true);
$smail->Subject = 'New Message from ' . $_POST['name'];
$smail->Body = "You have a new message from " . $_POST['name'] . ". Here is the message: " . $_POST['message'] . ". You can reply to them at " . $_POST['email'] . ".";

checkSend($cmail);
checkSend($smail);

echo"<script>window.location.href='contact.php'</script>";