<html>
<head>
<?php
require_once "connect.php";
$query="SELECT name FROM structure";
$result= mysqli_query($connect,$query);
$name= mysqli_fetch_assoc($result);
$n1="none";
if($name)
$n1=$name['name'];
$query="SELECT * FROM image WHERE type='room-a'";
$RroomA=mysqli_query($connect,$query);
$query="SELECT * FROM image WHERE type='room-b'";
$RroomB=mysqli_query($connect,$query);
$query="SELECT * FROM image WHERE type='room-c'";
$RroomC=mysqli_query($connect,$query);

$query="SELECT * FROM image WHERE type='room-d'";
$RrestA=mysqli_query($connect,$query);
$query="SELECT * FROM image WHERE type='room-e'";
$RrestB=mysqli_query($connect,$query);
$query="SELECT * FROM image WHERE type='room-f'";
$RrestC=mysqli_query($connect,$query);
?>
<title>Hotal Management</title>
<link href="icon/mainI/i1.jpg" rel="icon" />
<link href="main.css" rel="stylesheet"/>
<meta charset="UTF-8"/>
<meta name="content" content="Login for page hotel" />
<link rel="stylesheet" href="main.css"/>
</head>
<div class="title">
<h2>Welcome <?php echo "$n1" ?></h2>
</div>
<div class="row1">
<div class="innerR">
<?php
$count=1;
while($Results=mysqli_fetch_assoc($RroomA)){
if($count>3)
	break;
?>
<img class="p1-<?php echo $count;?>" src="icon/room/<?php echo $Results['name'];?>"/>
<?php
$count+=1;
}
while($count<=3){
	?>
<img class="p1-<?php echo $count;?>" src="icon/room/null.jpg"/>	
<?php
	$count+=1;
}
?>
</div>

<div class="innerR">
<?php
$count=1;
while($Results=mysqli_fetch_assoc($RroomB)){
if($count>3)
	break;
?>
<img class="p2-<?php echo $count;?>" src="icon/room/<?php echo $Results['name'];?>"/>
<?php
$count+=1;
}
while($count<=3){
	?>
<img class="p2-<?php echo $count;?>" src="icon/room/null.jpg"/>	
<?php
	$count+=1;
}
?>
</div>
<div class="innerR">
<?php
$count=1;
while($Results=mysqli_fetch_assoc($RroomC)){
if($count>3)
	break;
?>
<img class="p3-<?php echo $count;?>" src="icon/room/<?php echo $Results['name'];?>"/>
<?php
$count+=1;
}
while($count<=3){
	?>
<img class="p3-<?php echo $count;?>" src="icon/room/null.jpg"/>	
<?php
	$count+=1;
}
?>
</div>
</div>
<div class="row2">
<div class="innerR">
<div class="scrollA">
<div class="page">
<?php
$count=1;
while($Results=mysqli_fetch_assoc($RrestA)){
if($count>3)
	break;
?>
<img class="p1-<?php echo $count;?>" src="icon/room/<?php echo $Results['name'];?>"/>
<?php
$count+=1;
}
while($count<=3){
	?>
<img class="p1-<?php echo $count;?>" src="icon/room/null.jpg"/>	
<?php
	$count+=1;
}
?>
</div>
</div>
</div>

<div class="innerR">
<div class="scrollA">
<div class="page">
<?php
$count=1;
while($Results=mysqli_fetch_assoc($RrestB)){
if($count>3)
	break;
?>
<img class="p2-<?php echo $count;?>" src="icon/room/<?php echo $Results['name'];?>"/>
<?php
$count+=1;
}
while($count<=3){
	?>
<img class="p2-<?php echo $count;?>" src="icon/room/null.jpg"/>	
<?php
	$count+=1;
}
?>
</div>
</div>
</div>
<div class="innerR">
<div class="scrollA">
<div class="page">
<?php
$count=1;
while($Results=mysqli_fetch_assoc($RrestC)){
if($count>3)
	break;
?>
<img class="p3-<?php echo $count;?>" src="icon/room/<?php echo $Results['name'];?>"/>
<?php
$count+=1;
}
while($count<=3){
	?>
<img class="p3-<?php echo $count;?>" src="icon/room/null.jpg"/>	
<?php
	$count+=1;
}
?>
</div>
</div>
</div>

</div>
</html>