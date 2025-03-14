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
      $article = $_POST['article'];

echo "<form method='POST' action='".editArticles($link)."'>
 <input type='hidden' name='cid' value='".$cid."'>
 <input type='hidden' name='uid' value='".$uid."'>
 <input type='hidden' name='date' value='".$date."'>
 <textarea id='edit-textarea' name='article'>".$article."</textarea><br>
 <button type='submit' name='articleSubmit'>Edit</button>
</form>";
?>
</body>
</html>