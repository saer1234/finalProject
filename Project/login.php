<html>
<head>
<?php
require_once"connect.php";
session_start();

if(isset($_SESSION['type']))
switch($_SESSION['type']){
			case 'user':
	header('location: user.php');
	break;
	case 'it':
	header('location: it.php');
	break;
	case 'manager':
	header('location: manager.php');
	break;
			
		}
?>
<title> login Page</title>
<meta charset="UTF-8"/>
<meta name="content" content="Login for page hotel" />
<link type="text/css" rel="stylesheet" href="longS.css"/>
</head>
<div>
<form action="login.php" method="POST"/>
<label for="n1">Username:</label>
<input  id="n1"placeholder="Enter your name" type="text" size="30" name="n"/>
<label for="n2">Password</label>
<input type="password" name="pw" size="30" placeholder="Your password"/>
<input type="submit" value="Log-In" />
<a href="signup.php">Sign-Up</a>
<?php
if(isset($_POST['n'])&&isset($_POST['pw'])){
	extract($_POST);
	$query="SELECT * FROM login WHERE user='$n' and pw='$pw'";
	$Result=mysqli_query($connect,$query);
	if($rows= mysqli_fetch_assoc($Result)){
		
		$_SESSION['ID']=$rows['ID'];
		$_SESSION['email']=$rows['email'];
		$_SESSION['user']=$rows['user'];
		$_SESSION['type']=$rows['type'];
		
		switch($_SESSION['type']){
			case 'user':
	header('location: user.php');
	break;
	case 'it':
	header('location: it.php');
	break;
	case 'manager':
	header('location: manager.php');
	break;
			
		}
		
	}else{
		echo'<p>Wrong Username and password please sign-up before login or try again</p>';
		
	}
	
}

?>

</form>
</div>
</html>