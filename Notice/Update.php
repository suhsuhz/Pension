<?php
	include '../Top.php';
	$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");
$id=$_GET['id'];
$sql="select * from notice where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$content=$row['content'];
$title=$row['title'];
?>

<script>
	
function chk(pp)
	{
		if(pp.title.value=="")
			{
				alert("제목을 입력하세요");
				pp.title.focus();
				return false;
			}
			if(pp.content.value=="")
			{
				alert("내용을 입력하세요");
				pp.content.focus();
				return false;
			}
				else 
					return true;
	}
</script>

<form method=post action="Update_Ok.php?id" onsubmit="return chk(this)">
<input type=hidden name=id value=<?=$row['id']?>>
<table align=center>
	<tr>
		<td width=50 height=30 align=center>name</td>
		<td>admin</td>
	</tr>
	<tr>
		<td width=50 height=30 align=center>title</td>
		<td><input type=text name=title  size=30 value="<?=$title?>"></td>
	</tr>
	<tr>
		<td colspan=2><textarea name=content cols=30 rows=10><?=$content?></textarea></td>
	</tr>
	<tr>
		<td colspan=2 align=center height=40><input type=submit value=submit>&nbsp;&nbsp;<input type=reset value=cancel></td>
	</tr>
</table>
</form>
<?php
include '../Bottom.php';
?>