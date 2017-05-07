<?php

if (($_POST['namsinh'] != '') || ($_POST['thangsinh'] != '') || ($_POST['ngaysinh'] != ''))	{

$array_nam = array(
	0 => 'Hồng Bàng',
	1 => 'Ngô',
	2 => 'Đinh',
	3 => 'Tiền Lê',
	4 => 'Lý',
	5 => 'Trần',
	6 => 'Hồ',
	7 => 'Hậu Lê',
	8 => 'Tây Sơn',
	9 => 'Nguyễn',
);

$array_ngay = array(
	1 => 'Nhà sư',
	2 => 'Nông dân',
	3 => 'Thái giám',
	4 => 'Nô tì',
	5 => 'Hoàng hậu',
	6 => 'Tri phủ',
	7 => 'Đại phu',
	8 => 'Lính',
	9 => 'Vua',
	10 => 'Hiệp khách',
	11 => 'Kĩ nữ',
);

$array_thang = array(
	'01' => 'Chém đầu',
	'1' => 'Chém đầu',
	'02' => 'Té ',
	'2' => 'Té',
	'03' => 'Treo cổ',
	'3' => 'Treo cổ',
	'04' => 'Bị giặc giết',
	'4' => 'Bị giặc giết',
	'05' => 'Trúng độc',
	'5' => 'Trúng độc',
	'06' => 'Chết đuối',
	'6' => 'Chết đuối',
	'07' => 'Bị cắt tiết',
	'7' => 'Bị cắt tiết',
	'08' => 'Chết già',
	'8' => 'Chết già',
	'09' => 'Bị bệnh nặng',
	'9' => 'Bị bệnh nặng',
	'10' => 'Bị rắn độc cắn',
	'11' => 'Tự sát',
	'12' => 'Bị sét đánh',
);

$xulingay = array (
	'01' => '1',
	'1' => '1',
	'02' => '2',
	'2' => '2',
	'03' => '3',
	'3' => '3',
	'04' => '4',
	'4' => '4',
	'05' => '5',
	'5' => '5',
	'06' => '6',
	'6' => '6',
	'07' => '7',
	'7' => '7',
	'08' => '8',
	'8' => '8',
	'09' => '9',
	'9' => '9',
	'10' => '10',
	'11' => '11',
	'12' => '12',
	'13' => '13',
	'14' => '14',
	'15' => '15',
	'16' => '16',
	'17' => '17',
	'18' => '18',
	'19' => '19',
	'20' => '20',
	'21' => '21',
	'22' => '22',
	'23' => '23',
	'24' => '24',
	'25' => '25',
	'26' => '26',
	'27' => '27',
	'28' => '28',
	'29' => '29',
	'30' => '30',
	'31' => '31',
);


$namsinh = $_POST['namsinh'];
$end_namsinh = $namsinh % 10;
$trieudai = $array_nam["$end_namsinh"];

///////////////////////////////////////////////////////

$ngaysinh = $_POST['ngaysinh'];
if ($ngaysinh > 31) {
	echo str_replace('</form>', '<br /></br /><div align="center" style="color:red">Ngày sinh của bạn phải nằm trong khoảng từ 1 dến 31. Cảm ơn</div>', file_get_contents('index.html'));
	die();
	}
$ngaysinh = $xulingay["$ngaysinh"];
$ngaysinh_n = intval($ngaysinh/10);
if ($ngaysinh >= 10) {$ngaysinh = $ngaysinh_n + $ngaysinh - 10*$ngaysinh_n;}
$nghe = $array_ngay["$ngaysinh"];

/////////////////////////////////////////////////////

$thangsinh = $_POST['thangsinh'];
if ($thangsinh > 12) {
	echo str_replace('</form>', '<br /></br /><div align="center" style="color:red">Tháng sinh của bạn phải nằm trong khoảng từ 1 dến 12. Cảm ơn</div>', file_get_contents('index.html'));
	die();
	}
$chet = $array_thang["$thangsinh"];

///////////////////////////////////////////////////

$output = '<b>Kiếp trước bạn sống ở thời <span style="color:red">'.$trieudai.'</span>, làm <span style="color:red">'.$nghe.'</span>, lí do chết: <span style="color:red">'.$chet.'</span>.</b>';

echo str_replace('&nbsp;', $output, file_get_contents('index.html'));
	
} else {
	echo str_replace('</form>', '<br /></br /><div align="center" style="color:red">Bạn không được bỏ trống Ngày/Tháng/Năm sinh của mình. Cảm ơn</div>', file_get_contents('index.html'));
		}
?>