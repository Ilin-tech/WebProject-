<?php
$link = mysqli_connect('localhost','root','','user');
if (!$link) {
	die("Connection failed" .mysqli_connect_error());
	
}
?>