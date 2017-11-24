<?php
 //include '/suhsuhz/Pension/Inc.php';
$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");
$userid=$_GET["userid"];
$sql="selct * from member where userid='$userid'";
$result=mysqli_query($sql,$conn);
$total=mysqli_num_rows($result);
// total is NULL!!! solve this problem
?>
<script>
function check()
{
	opener.document.pkc.userid.value="<?=$userid?>";
	close();
}
</script>
<?php
if($total=="")
{
	print_r("
  			{$userid}→ 사용가능한 아이디<p><input type=button onclick=check() value=사용하기>
	");
}
else 
{
	print_r("
			{$userid} → 사용하지 못하는 아이디
	");
} 
?>