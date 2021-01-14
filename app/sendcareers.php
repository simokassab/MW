<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPmailer/Exception.php';
require '../PHPmailer/PHPMailer.php';
require '../PHPmailer/SMTP.php';

$target_dir = "CVs/";
$target_file = $target_dir . basename($_FILES["cv"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
    $email = new PHPMailer();
    $email->IsSMTP(); // enable SMTP
    $email->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $email->Host = "smtp.gmail.com";
    $email->Port = 587;
    $email->SMTPAuth = true;
    $email->IsHTML(true);
    $email->Username = "mohammad.kassab@mediaworldiq.com";
    $email->Password = "Rabih2018*";
    $email->SetFrom($_POST['email'], $_POST['name']); //Name is optional
    $email->Subject   = "New CV from ".$_POST['name'];
    $email->Body      = $_POST['message'];
    $email->AddAddress('careers@mediaworldiq.com', "Careers");
    $file_to_attach = $target_file;
    
    $email->AddAttachment( $file_to_attach );
    
    if($email->Send()){
        header("Location: ../careers.php?m=1#careers_title");
    }
 }



?>