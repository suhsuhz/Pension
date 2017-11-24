<?php
 session_start();

$conn = mysqli_connect('localhost','root','apmsetup');
mysqli_select_db($conn,"suhz");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charet="utf-8">
<style>
div.container {
	width: 96%;
	border: 1px solid white;
}

header,footer {
	padding: 1em;
	color: #78766e;
	background-color: #f2bd56;
	clear: left;
	text-align: center;
}
table,tr,td {
  border-color: #fcf3d5;
  border-spacing: 0px;
}

nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1em;
	height:400px;
}

nav ul {
	list-style-type: none;
	padding: 0;
}

article {
	margin-left: 170px;
	border-left: 2px solid #fcf3d5;
	padding: 1em;
	overflow: hidden;
}

#re {
	display: none;
}
	
#log {
	font-size:14px;	
}
 a {text-decoration:none;color:#78766e}
 a:hover {text-decoration:underline;color:#917649}
 body {font-size:9pt}
</style>

<script>
function view(pp)
{
	document.getElementById(pp).style.display="inline";
}
function hid(pp)
{
	document.getElementById(pp).style.display="none";
}
</script>
</head>

<body>

<div class="container">

<header>
	<?php
	if($_SESSION["userid"]=="")
	{
	?>
	<div id=log>
	<table width=100 height=40 align=left>
		<tr>
			<td><a href="/suhsuhz/Pension/Login/Login.php">login</a> 
			&nbsp;/ &nbsp;
				<a href="/suhsuhz/Pension/Member/Join.php">join</a></td>
		</tr>
	</table>
	</div>
	<?php 
	}
	else
	{
	?>
	<table width=120 height=40 align=left>
	 	<tr>
      		<td colspan=2 height=30><?=$_SESSION["userid"]?>님</td>
     	</tr>
     	<tr>
			<td> <a href="/suhsuhz/Pension/Member/Member_Edit.php">정보수정</a>&nbsp;&nbsp;/</td>
      		<td align=left> <a href="/suhsuhz/Pension/Login/Logout.php">로그아웃</a></td>
		</tr>	
	</table>
	<?php
	}
	?>
  		<a href="/suhsuhz/Pension/index.php"><h1>CHEESE Pension</h1></a>
</header>

<nav>
<ul>
  <li><a href="/suhsuhz/Pension/Notice/List.php">NOTICE</a></li>
  <li><a href="#" onmouseover=view("re") onmouseout=hid("re")>예약</a></li>
	<li id=re onmouseover=view("re") onmouseout=hid("re")>
      <ul>
          <li>&nbsp;&nbsp;<a href="/suhsuhz/Pension/Reser/Reservation.php">예약하기</a></li>
          <li>&nbsp;&nbsp;<a href="/suhsuhz/Pension/Reser/View_Reser.php">예약현황</a></li>
      </ul>
	</li>
  <li><a href="/suhsuhz/Pension/QnA/List.php">QnA</a></li>
  	<?php
		if($_SESSION["userid"]==admin1)
		{
	?>
	 <li><a href="/suhsuhz/Pension/Admin/Room.php">객실등록</a></li>
	<?php
		}
	?>
</ul>
</nav>

<article>