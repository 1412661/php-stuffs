<?php
session_start();
if ($_SESSION['access_check'] != 1) {header('location: index.html');} else {
function countFiles($dir){ 
    $files = array(); 
    $directory = opendir($dir);
    while($item = readdir($directory)){ 
         if(($item != ".") && ($item != "..") && ($item != ".svn") ){ //Lệnh if để lọc tên file
              $files[] = $item; 
         } 
    } 
    $numFiles = count($files); 
    return $numFiles; 
}

function openfile($filename) {
$fp = fopen($filename, r);
while(!feof($fp)) {
	echo fgets($fp);
	}
fclose($fp);
}

function get_filename($dir) {
	if ($handle = opendir($dir)) {
		while (false !== ($file = readdir($handle))) {
			echo ($file.'<br />');
		}
	}
}

function savedata() {
if (!is_dir('results')) {mkdir('results', 0777);}
chdir('results');
$love1 = stripInput($_POST['love1']);
$love2 = stripInput($_POST['love2']).' <br /> ';
$f = fopen($love1, 'a');
fwrite($f, $love2);
fclose($f);
}

function stripInput($str) {
    $unicode = array(
    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
    'd'=>'đ',
    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
    'i'=>'í|ì|ỉ|ĩ|ị',
    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
    'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
	''=>'1|2|3|4|5|6|7|8|9|0',
    );
    foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
    for ($i=1; $i <= (strlen($str))-1; $i++) {
		for ($k=1; $k<=(strlen($strl)-1); $k++) {
			if (($str[i] == ' ') && ($str[i+1] == ' ')) {
				supstr($str, i, -1);
				}
			}
		}
	$str = trim($str);
	return $str;
}

}
?>
