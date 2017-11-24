<?php
	include '../Top.php';
?>
<script>
function id_check()
{
  //userid=document.pkc.userid.value;
  window.open("Id_Check.php?userid"+userid,"","width=300,height=200");
}
	
function chk(pp)
	{
		if(pp.userid.value.length<6||pp.userid.value.length>10)
			{
				alert("아이디는 6~10자 가능합니다");
    			pp.userid.value="";
    			pp.userid.focus();
    			return false;
			}
			else if(pp.pwd.value.length<6||pp.userid.value.length>10)
				{
					alert("비밀번호는 6~10자 가능합니다");
    				pp.pwd.value="";
    				pp.pwd.focus();
    				return false;
				}
				else if(pp.phone1.value==""||pp.phone2.value==""||pp.phone3.value=="")
					{
						alert("전화번호를 모두 입력하세요");
    					pp.phone1.focus();
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

<form name=pkc method=post action=Join_Ok.php onsubmit="return chk(this)">
<table align=center>
	<caption><h1>
		<font color=red>J</font>
		<font color=blue>O</font>
		<font color=orange>I</font>
		<font color=green>N</font>
		</h1></caption>
	<tr>
		<td>아이디</td>
		<td>
			<input type=text name=userid size=10>*6~10자&nbsp;&nbsp;
			<!--<input type=button value=중복체크 onclick=id_check()>-->
		</td>
	</tr>
	<tr>
		<td>비밀번호</td> 
		<td><input type=password name=pwd size=11>*6~10자</td>
	</tr>
	<tr>
		<td>전화번호</td>
		<td><input type=text size=4 name=phone1>
		-<input type=text size=4 name=phone2>
		-<input type=text size=4 name=phone3>
		</td>
	</tr>
	<tr>
		<td>성별</td>
		<td>
			<select name=sung>
				<option>선택</option>
				<option value=1>남자</option>
				<option value=2>여자</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td colspan=2 align=center height=40><input type=submit value=회원가입></td>
	</tr>
</table>
</form>
<?php
include '../Bottom.php';
?>