<?php
date_default_timezone_set('Europe/Bucharest');
include 'serverConnection.php';
include 'script.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleSheets.css">
</head>

<body>
<?php
      $cid = $_POST['cid'];
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

echo "<form method='POST' action='".editNews($link)."'>
 <input type='hidden' name='cid' value='".$cid."'>
 <input type='hidden' name='uid' value='".$uid."'>
 <input type='hidden' name='date' value='".$date."'>
 <textarea id='edit-textarea' name='message'>".$message."</textarea><br>
 <button  type='submit' name='commentSubmit'>Edit</button>
</form>";
?>
</body>
</html>