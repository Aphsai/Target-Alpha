<?php
$emailmanager = 'saksham.a@hotmail.ca';
error_reporting(0);
$email = trim($_POST['email']);
$name = trim($_POST['name']);
$check = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($check) {
	if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$name))
	{
		exit();
	}
} 
else {
	if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$name))
	{
	?>
<script language = 'javascript'>
	alert('Sorry, please provide a valid email address.');
	/*history.go(-1);*/
	</script>
<?
	exit();
	}
}
?>
