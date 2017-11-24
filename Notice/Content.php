<?php
 session_start();

include '../Top.php';
$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");
$id=$_GET['id'];
$sql="select * from notice where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<style>
#aa {background-color:#fcf8d8}
input[type="button"]{
		border:none;
		outline:none;
		background-color:white;
		font-size:1em;
		color:orange;
	}
	input[type="button"]:hover{
		text-decoration:underline;
	}
</style>
<script>
function del()
	{
		var chk_d=confirm("삭제 하시겠습니까?");
		if(chk_d==true)
			location.href="Delete.php?id="+<?=$id?>;
		else
			return false;
	}
function upd()
	{
		location.href="Update.php?id="+<?=$id?>;
	}
</script>
<?php
$con_nl=nl2br($row['content']);
print_r("
<table  align=center width=400 celspacing=5>
	<caption><h1>
		<font color=red>N</font>
		<font color=blue>O</font>
		<font color=orange>T</font>
		<font color=green>I</font>
		<font color=pink>C</font>
		<font color=violet>E</font>
	</h1></caption>
	<tr>
		<td width=50 height=30 align=center>name</td>
		<td>admin</td>
	</tr>
	<tr>
		<td width=50 height=30 colspan=2>{$row['title']}</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=2 id=aa>{$con_nl}</td>  
	</tr>
	<tr>
		<td colspan=2>&nbsp;</td>
	</tr>
</table>
");
if($_SESSION["userid"]=="admin1")
 		{
?>
 	<table  align=center width=400 celspacing=5>
	<tr>
		<td colspan=2 align=right>	
			<input type=button value=수정 onclick=upd()></a> 
			<input type=button value=삭제 onclick=del()></a> 
		</td>
	</tr> 
	<tr>
		<td colspan=2>&nbsp;</td>
	</tr>
	<table  align=center width=400 celspacing=5>
<?php
}
include '../Bottom.php';
?>