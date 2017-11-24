<?php
	include '../Top.php';
?>
<script>
function chk(pp)
	{
		if(pp.userid.value=="")
			{
				alert("아이디를 입력하세요");
				pp.userid.focus();
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
<style>
input[type="submit"]{
		border:none;
		outline:none;
		background-color:white;
		font-size:1.3em;
		color:orange;
	}
	input[type="submit"]:hover{
		text-decoration:underline;
	}
</style>
<form name=pkc method=post action=Login_Ok.php onsubmit="return chk(this)">
<table align=center>
	<caption><h1>
		<font color=red>L</font>
		<font color=blue>O</font>
		<font color=orange>G</font>
		<font color=green>I</font>
		<font color=pink>N</font>
		</h1></caption>
	<tr>
		<td>아이디</td>
		<td>
			<input type=text name=userid size=10>
			<!--<input type=button value=중복체크 onclick=id_check()>-->
		</td>
	</tr>
	<tr>
		<td>비밀번호</td> 
		<td><input type=password name=pwd size=11></td>
	</tr>	
	<tr>
		<td colspan=2 align=center height=40><input type=submit value=로그인></td>
	</tr>
	<tr>	
		<td colspan=2 align=center>
		<?php
		$ch=$_GET['ch'];
		if($ch=='1')
		{
		?>
			<font color=red>아이디나 비밀번호가 틀립니다</font>
		<?php
		}
		?>
		</td>
	</tr>
	
</table>
</form>
<?php
include '../Bottom.php';
?>