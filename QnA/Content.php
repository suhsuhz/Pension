<?php
	include '../Top.php';
	
$id=$_GET['id'];
$sql="select * from qna where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<style>
#aa {background-color:#fcf8d8;}
#delt,#upt
	{
		display:none;
	}
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
input[type="submit"]{
		border:none;
		outline:none;
		background-color:#f5f2c9;
		font-size:1em;
		color:orange;
	}
input[type="submit"]:hover{
		text-decoration:underline;
	}
	input[type="password"]{
		border-color:#d8d7cf;
		border-width:0.05em;
	}
</style>
<script>
function del(pp)
	{
		document.getElementById(pp).style.display="inline";
	}
function upd()
	{
		location.href="Update.php?id="+<?=$id?>;
	}
function dat_del(id)
	{
		//alert(pp);
		window.open("Dat_Delete.php?id="+id,"","width=300,height=100");
	}
function dat_upd(id)
	{
		window.open("Dat_Update.php?id="+id,"","width=500,height=200");	
	}
</script>
<?php
$con_nl=nl2br($row['content']);
print_r("
<table align=center width=400 celspacing=5>
	<caption><h1>
		<font color=red>Q</font>
		<font color=blue>n</font>
		<font color=orange>A</font>
	</h1></caption>
	<tr>
		<td width=50 height=30 align=center>name</td>
		<td>{$row['name']}</td>
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
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=2 align=right>
			<input type=button value=수정 onclick=upd()></a> 
			<input type=button value=삭제 onclick=del(\"delt\")></a> 
		</td>
	</tr>
</table>
");
if($_GET['ch']==1)
{
?>
<style>
#delt
	{
		display:inline;
	}
</style>
<table align=center width=400 celspacing=5>
	<tr>
		<td align=center><font color=red>비밀번호가 일치하지 않습니다</font></td>
	</tr>
</table>
<?php
}
?>

<div id=delt>
<form name=pkc method=post action="Delete.php">
<input type=hidden name=id value=<?=$id?>>
<table width=200 align=center>
	<tr>
 		<td>비밀번호</td>
		<td><input type=password name=pwd size=9></td>
 		<td><input type=submit value="삭제"></td>
	</tr>
</table>
</form>
</div>

<!-- 댓글입력창 시작 -->

<form method=post action=Dat_Ok.php>
<input type=hidden name=review_id value=<?=$id?>>
<table width=400 align=center style="margin-top:10px">
 <tr> 
  <td width=10><input type=text name=name size=8 placeholder="이 름"></td>
  <td align=left><input type=text name=pwd size=8 placeholder="비밀번호"></td>
	 <td rowspan=2><input type=submit value=댓글달기></td>
 </tr>
 <tr> 
  <td colspan=2><textarea name=content rows=2 cols=40 placeholder="댓글을 적어주세요"></textarea></td>
 </tr>
</table>
</form>

<table width=400 align=center style="margin-top:10px">
<?php
$sql2="select * from dat where review_id=$id";
$result2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_assoc($result2))
{
	$datid=$row2['id'];
?>
 <tr>
  	<td><?=$row2['name']?></td>
  	<td><?=nl2br($row2['content'])?></td>
	<td width=5><input type=button value=수정 onclick="dat_upd(<?=$datid?>)"></td> 
	<td width=5><input type=button value=삭제 onclick="dat_del(<?=$datid?>)"></td>
 </tr> 
<?php
}
?>
</table>

<?php
include '../Bottom.php';
?>