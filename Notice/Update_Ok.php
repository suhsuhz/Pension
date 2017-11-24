<?php
	include '../Inc.php';

$title=$_POST['title'];
$content=$_POST['content'];
$name="admin";
$id=$_POST['id'];

$sql="update notice set title='$title', content='$content', name='$name' where id=$id";
mysqli_query($conn,$sql);
header("location:Content.php?id=$id");
?>