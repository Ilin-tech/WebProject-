<?php
#region************** Other functions: Sign up, Login, Log out, Insert ************************ 
function getLogin($link){          
	if (isset($_POST['loginSubmit'])){
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];
	$sql="SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
	$result=$link->query($sql);
	if (mysqli_num_rows($result) > 0) {
		if($row = $result -> fetch_assoc()){
			$_SESSION['id'] = $row['id'];	
			$_SESSION['uid']=$row['uid'];		
			header("Location: WebNews.php?loginsuccess");
			exit();
	    }
	  }
	else{
          header("Location: HomePage.php?loginfailed");
			exit();        
	    }
	}
}

// Function for logging out
function userLogout(){        
 if (isset($_POST['logoutSubmit'])){
	session_start();
 	session_destroy();
 	header("Location: HomePage.php");
 	exit();
    }
} 

function insertNews($link){
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql ="INSERT INTO comments (uid , date , message) VALUES ('$uid','$date','$message')";
		$result = $link ->query($sql);
		if (!$result) {
			die("Query failed: " . mysqli_error($link));
		}
    }     
}

function createUser($link){
	if (isset($_POST['create'])) {
		$name= $_POST['userName'];
		$pass= $_POST['password'];

		$sql= "SELECT * FROM users WHERE uid ='$name'";
		$result = $link ->query($sql);
		$num= mysqli_num_rows($result);
		if($num == 1){
			echo "Username Already Taken";
		}else{
			$reg="INSERT INTO users (uid , pwd) VALUES('$name' , '$pass')";
			mysqli_query($link ,$reg);			
		}
		header("Location: HomePage.php");
    }     
}

// Function for retrieving messages

function getComments($link){
	$sql= "SELECT * FROM comments";
	$result=$link->query($sql);
	while ($row= $result->fetch_assoc()){
		echo "<div class='text-box2' type='text'><hr><p>";
		echo $row['uid'] . "<br>";
		echo $row['date'] . "<br><br>";
		echo nl2br($row['message']); 
		echo "</p>
		<form id='delete-form' method='POST' action='deleteComment.php'>
		<input type='hidden' name='cid' value='".$row['cid']."'>
		<button type='submit' name='commentDelete'>Delete</button>
		</form>

		<form class='edit-form' method='POST' action='editnews.php'>
		<input type='hidden' name='cid' value='".$row['cid']."'>
		<input type='hidden' name='uid' value='".$row['uid']."'>
		<input type='hidden' name='date' value='".$row['date']."'>
		<input type='hidden' name='message' value='".$row['message']."'>
		<button type='submit'>Edit</button><br><br>
		</form>
		</div>"; 
	}     
}

// Function to delete a comment

function deleteComments($link){
	if (isset($_POST['commentDelete'])) {
		$cid = $_POST['cid'];
		$sql ="DELETE FROM comments WHERE cid='$cid'";
		$result = $link->query($sql);
		if (!$result) {
			die("Query failed: " . mysqli_error($link));
		}
		header("Location: WebNews.php");
	}
}

// Function for retrieving, inserting, editing, and deleting articles

function getArticles($link){
	$sql ="SELECT * FROM post";
	$result = $link->query($sql);
	while ($row = $result->fetch_assoc()){
		echo "<div id='text-box1' type='text'><hr><p>";
		echo $row['uid'] . "<br>";
		echo $row['date'] . "<br><br>";
		echo nl2br($row['article']);             
		echo "</p>
		<form id='delete-form2' method='POST' action='deleteArticle.php'>
		<input type='hidden' name='cid' value='".$row['cid']."'>
		<button type='submit' name='articleDelete'>Delete</button>
		</form>
		
		<form id='edit-form2' method='POST' action='editArticles.php'>
		<input type='hidden' name='cid' value='".$row['cid']."'>
		<input type='hidden' name='uid' value='".$row['uid']."'>
		<input type='hidden' name='date' value='".$row['date']."'>
		<input type='hidden' name='article' value='".$row['article']."'>
		<button type='submit'>Edit</button><br><br>
		</form>
		</div>";
	}     
}
