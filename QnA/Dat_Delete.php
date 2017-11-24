<?php
$id=$_GET['id'];
?>

<form method=post action="Dat_Delete_Ok.php">
<input type=hidden name=id value=<?=$id?>
	<table>
		<tr>
			<td>비밀번호입력</td>
			<td><input type=password name=pwd size=11>
			</td>
		</tr>
		<tr>
			<td colspan=2><input type=submit value="삭제"></td>
		</tr>
	</table>
</form>