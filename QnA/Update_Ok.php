<?php
include '../Inc.php';

$title=$_POST['title'];
$content=$_POST['content'];
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$id=$_POST['id'];

$sql="update qna set title='$title', content='$content', name='$name', pwd='$pwd' where id=$id";
mysqli_query($conn,$sql);
header("location:Content.php?id=$id");
?>