<?php
	include '../Inc.php';

$content=$_POST['content'];
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$review_id=$_POST['review_id'];

$sql="insert into dat (review_id,content,name,pwd) values ('$review_id','$content','$name','$pwd')";
mysqli_query($conn,$sql);
header("location:Content.php?id=$review_id");
?>