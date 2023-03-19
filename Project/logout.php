<?php
if(isset($_GET['log'])){
	if($_GET['log']=='1'){
		session_start();
		session_destroy();
		
	}
	
}
header('location: user.php');
?>