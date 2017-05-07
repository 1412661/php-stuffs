<?php
session_start();
if ($_SESSION['access_check'] != '1') {header('location: index.html');} else {
include('function.php');
echo '
<html>
<head>
<title>Love Calculator</title>
</head>
<body>
<h2 align="center">Danh sách nạn nhân của <span style="color:red">Love Calculator</span></h2>
<table width="50%" align="center" border="3">
	<tr>
		<td style="font-weight:bold">Chào đại ca !<br /> Chúc đại ca một ngày tốt lành !</td>
	</tr>
	<tr>
		<td>';} ?> <? echo (get_filename('results')); ?> <? echo '</td>
		<td>
			<form method="post" action="show_victim.php" align="center">
				Nhập tên người muốn xem: <input type="text" name="victim_name" /><br />
				<input type="submit" value="Xem bí mật nào !" />
			</form>
		</td>
	</tr>
	<tr>
		<td>
			Tổng cộng có <span style="color:red; font-weight:bold;">'; ?> <? session_start(); $_SESSION['countfiles'] = countFiles('results'); echo $_SESSION['countfiles']; ?> <? echo '</span> người dính chưởng thưa đại ca !
		</td>
		<td>
			<form method="post" action="logout.php" align="center">
				<input type="submit" value="Thoát" />
			</form>
		</td>
	</tr>
</table>
	
</body>
</html>';?>
