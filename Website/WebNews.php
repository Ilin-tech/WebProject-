<?php
date_default_timezone_set('Europe/Bucharest');
include 'serverConnection.php';
include 'script.php';
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<title>WebNews</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="styleSheets.css">

<body>
 <p style="font-family: cursive; color: orange;" >Don't forget to logout.</p>

 <?php
 echo "<form class='form' method='POST' action='".userLogout($link)."'> 
    <button id='btn' type='submit' name='logoutSubmit'>Log out</button>  
  </form>";
 ?>


<?php
echo "<br><form method='POST' action='".insertArticles($link)."'>
      <input type='hidden' name='uid' value='Article'>
      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
      <textarea name='article' placeholder='write here...'></textarea><br>      
      <button type='submit' name='articleSubmit' >Write an new article article</button>
   </form>";
getArticles($link);
 ?>

<?php
echo "<br><form method='POST' action='".insertNews($link)."'>
      <input type='hidden' name='uid' value='Comment'>
      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
      <textarea name='message' placeholder='write a comment if you like...'></textarea><br>      
      <button type='submit' name='commentSubmit' >Write a comment</button>
   </form>";
getComments($link);

 ?>

</body>
</html>
