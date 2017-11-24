<?php
include '../Inc.php';

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$content=$_POST["content"];

$sql="select * from dat where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sql2="update dat set content='$content' where id=$id";

if($pwd==$row['pwd'])
{
	mysqli_query($conn,$sql2);
?>
<script>
 opener.location.reload();
 window.close();
</script>
<?php
}
else
{
?>
<script>
 alert("비밀번호가 틀렸습니다");
 history.back();
</script>
<?php
}
?>
