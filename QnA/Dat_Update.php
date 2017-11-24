<?php
include '../Inc.php';

$id=$_GET['id'];
$sql="select * from dat where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$content=$row['content'];
$title=$row['title'];
$name=$row['name'];
$pwd=$row['pwd'];
?>

<form method=post action=Dat_Update_Ok.php>
<input type=hidden name=id value=<?=$id?>>
	<table width=300 align=center>
 		<tr> 
  			<td width=100><?=$name?></td>
  			<td align=left><input type=text name=pwd size=10 placeholder="비밀번호입력"></td>
	 		<td rowspan=2><input type=submit value=댓글달기></td>
 		</tr>
 		<tr> 
  			<td colspan=2><textarea name=content rows=2 cols=40><?=$content?></textarea></td>
 		</tr>
</table>
</form>