<?php
//Đặt mật khẩu
$pass = 'quocbao747';
////////////////////

session_start();
$_SESSION['access_check'] = $_POST['access_check'];

if ($_POST['access_check'] != '1') {header('location: index.html');} else {

include('function.php');

if ($_POST['love1'] != $pass) {
	if ($_POST['love1'] != '' && $_POST['love2'] != '') {
		if ($_POST['checkcode'] != $_SESSION['captcha']) {
			$mess = 'Bạn đã nhập sai mã chống spam, hãy nhập lại cho chính xác !';
			include('outpage.php');
			print str_replace('{$mess}',$mess,$errorpage);
			} else {
				savedata();
				$percent = rand(1,101);
				include('outpage.php');
				print str_replace('{$percent}',$percent,$successpage);
				}
		} else {
			$mess = 'Bạn chưa nhập đầy đủ tên của hai người !';
			include('outpage.php');
			print str_replace('{$mess}',$mess,$errorpage);
			}
	} else {header('location: show_result.php');}
}
?>