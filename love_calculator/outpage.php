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
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
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
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
</body>
</html>
';

$successpage = '
<html>
<head>
<title>The Love Calculator</title>
</head>
<body bgcolor="pink">
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
<table align="center" width="30%">
<tr>
<td>
<h2>Bạn và người ấy hợp nhau ở mức {$percent}%</h2>
<p align="center">
Cảm ơn bạn đã dùng thử phần mềm của mình, <a href="http://lop10tl4.net46.net/love_calculator/">bấm vào đây</a> để quay lại trang trước.
</p>
<b>Lưu ý tỉ lệ thay đổi theo thời gian, cũng một tên nhưng có thể khác tỉ lệ ở các khoảng thời
 gian bạn sử dụng phần mềm khác nhau. Do đó bạn không nên sử dụng phần mềm nhiều lần cho
 một người vì kết quả sẽ mất tính chính xác, biến thành "hên xui".
</b>
</td>
</tr>
</table>
<span align="center">
<form name="Tick">
	Bây giờ là: <input type="button" size="11" name="Clock" style="color: #000000;font: normal 8pt Verdana, Arial, Helvetica, sans-serif;text-decoration: none;background: #ffffff;border: 1px solid #555555;padding: 2px;">
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
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="left" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
<img src="img/heart.png" height="32" align="right" />
</body>
</html>
';
}
?>