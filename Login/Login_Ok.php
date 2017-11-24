<?php
	//include '../Inc.php';
	session_start();
$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");

$userid=$_POST['userid'];
$pwd=$_POST['pwd'];

$sql="select * from member where userid='$userid' and pwd='$pwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row['userid']=="") 
{
	//alert("아이디나 비밀번호가 틀립니다");
	Header("location:Login.php?ch=1");
}
else
{
	$_SESSION["userid"]=$row['userid'];
	$_SESSION["pwd"]=$row['pwd'];
	Header("location:/suhsuhz/Pension/index.php");
}

?>

