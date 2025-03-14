
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
	<title>LoginPage</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>

<body>  
<?php	
	echo "<div class='home-box'>
	<p>If you don't have an account, try to create one <a href='Signup.php' target='_self' style='font-family: cursive; color: orange;' >here.</a></p> 
	<h1>Wellcome to my Blog !</h1>
	<p><i>Subiect:80 de ani de la cedarea Basarabiei sub presiunea ultimatumului sovietic(28 iunie 1940)</p>
	<hr>
	<form class='form' method='POST' action='".getLogin($link)."'> 
		<input type='text' name='uid' placeholder='UserName...' required>
		<input type='password' name='pwd' placeholder='password..' required><br><br>
				<button id='btn' type='submit' name='loginSubmit'>Log in</button>
	</form>		
    </div>";

    if (isset($_SESSION['id'])) {    
		echo" You are logged in!";

	}else{
		echo"You are not logged in!";
	}
?>
</body>
</html>

