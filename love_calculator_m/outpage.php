<?php
session_start();
if ($_SESSION['access_check'] != '1') {header('location: index.html');} else {
$errorpage = '
<html>
<head>
	<title>The Love Calculator</title>
	<meta http-equiv="refresh" content="4; url=index.html">
</head>
<body bgcolor="pink">
<table align="center" width="30%">
<tr>
<td>
<h3>
<span style="color:red">{$mess}</span>
	<br />
	Bạn sẽ tự động được chuyển về trang trước trong 3 giây nữa ...
</h3>
</td>
</tr>
</table>
</body>
</html>
';

$successpage = '
<html>
<head>
<title>The Love Calculator</title>
</head>
<body bgcolor="pink">
<table align="center" width="30%">
<tr>
<td>
<h3 align="center">Bạn và người ấy hợp nhau ở mức {$percent}%</h3>
<p align="center">
Cảm ơn bạn đã dùng thử phần mềm của mình, <a href="index.html">bấm vào đây</a> để quay lại trang trước.
</p>
</td>
</tr>
</table>
<span align="center">
	<form name="Tick">
		Bây giờ là: <input type="button" size="11" name="Clock">
	</form>
</span>
<script>
function show(){
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
document.Tick.Clock.value=hours+":"+minutes+":"
+seconds+" "+dn
setTimeout("show()",1000)
}
show()
</script>
</body>
</html>
';
}
?>