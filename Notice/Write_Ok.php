<?php
	include '../Inc.php';

$title=$_POST['title'];
$content=$_POST['content'];
$name="admin";

$sql="insert into notice (title,content,name) values ('$title','$content','$name')";
mysqli_query($conn,$sql);
header("location:List.php");
?>