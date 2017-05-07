<?php
session_start();
if ($_SESSION['access_check'] != 1) {header('location: index.html');} else {
include('function.php');
echo '
<html>
<head>
<title>Love Calculator</title>
</head>
<body>
<form>
<h2 align="center">Danh sách nạn nhân của <span style="color:red">Love Calculator</span></h2>
<table width="50%" align="center" border="3">
	<tr>
		<td style="font-weight:bold">Chào đại ca !<br /> Chúc ông một ngày tốt lành !</td>
	</tr>
	<tr>
		<td>Nạn nhân <span style="color:red; font-weight:bold">'; ?> <? echo ($_POST['victim_name']); echo '</span></td>
		<td>'; ?> <? chdir('results'); openfile($_POST['victim_name']); echo '</td>
	</tr>
	<tr>
		<td>
			Tổng cộng có <span style="color:red; font-weight:bold;">'; ?> <? session_start(); echo $_SESSION['countfiles']; ?> <? echo '</span> người dính chưởng thưa đại ca !
		</td>
		<td align="middle">
			<input type="button" value="  Trở lại  " onclick="history.go(-1);return false;" />
		</td>
	</tr>	
</table>
</form>
</body>
</html>
';
}
?>