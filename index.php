<?php
include 'Top.php';
?>
<style>
	#aa {
		margin:0px;
	}
	
li {
	list-style-type: none;
	padding: 1.2px;
	padding-left: 0px;
}
ol {
	padding-left: 0px;
}

</style>
<table width=100% height=500>
<tr>
	<td rowspan=4 width=60% height=100% align=center><img width=700 src="https://user-images.githubusercontent.com/31497805/31307860-18494ed2-aba7-11e7-84c0-6edb7493441c.jpg"><br>
		<font color=red>w</font>
		<font color=blue>e</font>
		<font color=orange>l</font>
		<font color=green>c</font>
		<font color=pink>o</font>
		<font color=violet>m</font>
		<font color=orange>e</font>
	</td>
	<td height=10 align=center><font color=#f2bd56>NOTICE</font></td>
</tr>
<tr valign=top>
	<td align=center height=50>
<?php
	 $result=mysqli_query($conn,'select title,id from notice');
	 while($row=mysqli_fetch_assoc($result))
	{
	print_r("
	<li>
		<ol id=aa align=center><a href=\"../Pension/Notice/Content.php?id={$row['id']}\">{$row['title']}</ol>
	</li>
	");
 }
?></td>
</tr>
<tr valign=top>
	<td height=10 align=center><font color=#f2bd56>QnA</font></td>
</tr>
<tr>
	<td align=center valign=top height=50>
<?php
	 $result2=mysqli_query($conn,'select title,id from qna');
	 while($row2=mysqli_fetch_assoc($result2))
	{
	print_r("
	<li>
		<ol id=aa align=center><a href=\"../Pension/QnA/Content.php?id={$row2['id']}\">{$row2['title']}</ol>
	</li>
	");
 }
?></td>
</tr>
</table>
<?php
include 'Bottom.php';
?>