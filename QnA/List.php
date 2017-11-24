<?php
 session_start();

 include '../Top.php';

$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");
$result=mysqli_query($conn,'select * from qna');
?>

<style>
	#aa {font-size:15px;background-color:#ffed57}
	#bb {font-size:13px;}
</style>

<script>
function cl(pp)
	{
		 pp.style.backgroundColor="#fcf8d8";
	}
function re(pp)
	{
		pp.style.backgroundColor="white";
	}
function nope()
	{
		alert("로그인을 해주세요");
	}
</script>

<body>
	
<table id=ta align=center width=450 celspacing=5>
	<caption><h1>
		<font color=red>Q</font>
		<font color=blue>n</font>
		<font color=orange>A</font>
	</h1></caption>
	<tr id=aa height=30>
 		<td align=center>제목</td>
 		<td align=center>이름</td>
 		<td align=center>날짜</td>
	</tr>
<?php
	
while($row=mysqli_fetch_assoc($result))
{
$writeday=substr($row['writeday'],0,11);
print_r("
<tr id=bb height=20 onmouseover=cl(this) onmouseout=re(this)>
	<td align=center><a href=\"Content.php?id={$row['id']}\">{$row['title']}</td>
	<td align=center width=70>{$row['name']}</td>
	<td align=center width=105>$writeday</td> 
<tr>
");
 }
?>
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
<?php
 if($_SESSION["userid"]=="")
 {	
?>
	<td colspan=3 align=right><a href="javascript:nope()">글쓰기</a></td>
<?php
 }
else
{
?>
	<td colspan=3 align=right><a href="Write.php">글쓰기</a></td>
<?php	
}
?>

</tr>
</table>
	</body>
<?php
	include '../Bottom.php';
?>