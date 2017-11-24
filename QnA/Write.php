<?php
	include '../Top.php';
	$userid=$_SESSION["userid"];
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
			else if(pp.content.value=="")
			{
				alert("내용을 입력하세요");
				pp.content.focus();
				return false;
			}
				else if(pp.pwd.value=="")
					{
						alert("비밀번호를 입력하세요");
						pp.pwd.focus();
						return false;
					}
						else 
							return true;
	}
</script>
<form method=post action=Write_Ok.php onsubmit="return chk(this)">
<table align=center>
	<tr>
		<td width=50 height=30 align=center>name</td>
		<td><input type=text name=name value="<?=$userid?>" size=10></td>
	</tr>
	<tr>
		<td width=50 height=30 align=center>password</td>
		<td><input type=password name=pwd size=11></td>
	</tr>
	<tr>
		<td width=50 height=30 align=center>title</td>
		<td><input type=text name=title size=30></td>
	</tr>
	<tr>
		<td colspan=2><textarea name=content cols=30 rows=10></textarea></td>
	</tr>
	<tr>
		<td colspan=2 align=center height=40><input type=submit value=submit>&nbsp;&nbsp;<input type=reset value=cancel></td>
	</tr>
</table>
</form>
<?php
include '../Bottom.php';
?>