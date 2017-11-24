<?php
	include '../Top.php';
	$userid=$_SESSION["userid"];

	$sql="select * from member where userid='$userid'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
?>
<script>
function chk(pp)
	{
			if(pp.pwd.value.length<6||pp.userid.value.length>10)
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
function chk_sung()
	{
		if(<?=$row['sung']?>==1)
			{
				document.pkc.sung.selectedIndex=1;
			}
		else if(<?=$row['sung']?>==2)
			{
				document.pkc.sung.selectedIndex=2;
			}
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

<body onload=chk_sung()>
<form name=pkc method=post action=Member_Edit_Ok.php onsubmit="return chk(this)">
<input type=hidden name=userid value=<?=$userid?>>
<table align=center>
	<caption><h1>
		<font color=red>M</font>
		<font color=blue>E</font>
		<font color=orange>M</font>
		<font color=green>B</font>
		<font color=pink>E</font>
		<font color=violet>R</font>
		</h1></caption>
	<tr>
		<td>아이디</td>
		<td>
			<?=$userid?>
		</td>
	</tr>
	<tr>
		<td>비밀번호</td> 
		<td><input type=password name=pwd size=11>*6~10자</td>
	</tr>
	<tr>
<?php
$phone=$row['phone'];
$phone1=substr($phone,0,3);
$phone2=substr($phone,3,4);
$phone3=substr($phone,7,8);
?>
		<td>전화번호</td>
		<td><input type=text size=4 name=phone1 value="<?=$phone1?>">
		-<input type=text size=4 name=phone2 value="<?=$phone2?>">
		-<input type=text size=4 name=phone3 value="<?=$phone3?>">
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
		<td colspan=2 align=center height=40><input type=submit value=정보수정></td>
	</tr>
</table>
</form>
</body>
<?php
include '../Bottom.php';
?>