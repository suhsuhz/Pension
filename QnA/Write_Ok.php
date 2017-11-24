<?php
	include '../Inc.php';

$title=$_POST['title'];
$content=$_POST['content'];
$name=$_POST['name'];
$pwd=$_POST['pwd'];
//echo "$name";
$sql="insert into qna (title,content,name,pwd) values ('$title','$content','$name','$pwd')";
mysqli_query($conn,$sql);
header("location:List.php");
?>