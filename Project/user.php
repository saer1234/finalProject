<html>
<head>
<?php
require_once"connect.php";
session_start();
if($_SESSION['type']!="user")
switch($_SESSION['type']){
	case 'it':
	header('location: it.php');
	break;
	case 'manager':
	header('location: manager.php');
	break;
	default:
	header('location: login.php');
	break;
		}
?>
<title> login Page</title>
<meta charset="UTF-8"/>
<meta name="content" content="Login for page hotel" />
<link type="text/css" rel="stylesheet" href="longS.css"/>
</head>
<div>
<a href='logout.php?log=1'> Logout</a>
</div>
</html>