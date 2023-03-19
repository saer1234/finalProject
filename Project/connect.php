<?php
$_HOST="localhost";
$_UDB="root";
$_PDB="";
$_DB="project";

$connect= mysqli_connect($_HOST,$_UDB,$_PDB,$_DB);

if(!$connect){
	die("Connection failed".mysqli_connect_error());
}
?>