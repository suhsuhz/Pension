<?php
	include '../Inc.php';

$userid=$_POST['userid'];
$pwd=$_POST['pwd'];
$phone=$_POST['phone1'].$_POST['phone2'].$_POST['phone3'];
$sung=$_POST['sung'];


$sql="update member set pwd='$pwd', phone='$phone', sung='$sung' where userid='$userid'";
mysqli_query($conn,$sql);
header("location:/suhsuhz/Pension/index.php");
?>