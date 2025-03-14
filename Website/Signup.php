
<?php
date_default_timezone_set('Europe/Bucharest');
include 'serverConnection.php';
include 'script.php';

session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styleSignup.css">
	<title>Signup</title>
</head>
<body>
<?php
echo"<div>
	<form class='form-box' method='POST' action='".createUser($link)."'>
		<div class='container'>
			<h1><i>Register Here</h1>
			<p style='font-family: cursive;''><ins>Fill up the form with correct values</p>
			<label for='userName'>UserName</label>
			<input type='text' name='userName' required placeholder='write...'>

			<label for='password'>Password</label>
			<input type='text' name='password' required placeholder='password...'><br>
			<br><hr><br><button id='btnSubmit' type='submit' name='create' >Sign Up</button>
		</div>
	</form>
</div>";
?>
</body>
</html>