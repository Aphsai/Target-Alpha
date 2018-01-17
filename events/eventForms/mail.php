<?php
$emailmanager = 'saksham.a@hotmail.ca';
$subject = "Signed Up";
$name = $_POST['name'];
$email = $_POST['email'];
$name2 = $_POST['name2'];
$email2 = $_POST['email2'];
$school = $_POST['school'];
$body = "Name 1: {$name}\n E-Mail: {$email}\n Name 2: {$name2}\n Email 2: {$email2}\n School: {$school}"; 
error_reporting(0);
mail($emailmanager, $subject, $body);
?>

