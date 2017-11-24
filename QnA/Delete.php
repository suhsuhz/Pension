<?php
include '../Inc.php';

$id=$_POST["id"];
$pwd=$_POST["pwd"];

$sql="select * from qna where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($pwd==$row['pwd'])
{
	$sql2="delete from qna where id=$id";
	//print($sql2);
	mysqli_query($conn,$sql2);
	header("location:List.php");
	mysqli_close();
}
else
	header("location:Content.php?id=$id&ch=1"); 
?>