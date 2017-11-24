<?php
include '../Inc.php';

$id=$_GET["id"];
print($id);
$sql="delete from notice where id=$id";
mysqli_query($conn,$sql);
header("location:List.php");
mysqli_close();

?>