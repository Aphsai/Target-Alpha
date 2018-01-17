<?php
$emailmanager = 'saksham.a@hotmail.ca';
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$body = "From: {$name}\n E-Mail: {$email}\n Message: {$message}"; 
error_reporting(0);
mail($emailmanager, $subject, $body);
?>

