<?php
	session_start();  
    /*************************************************************** 
    * Decription    : Generate captcha image 
    * Programmer    : khoiNguonIT.com 
    * Create date    : 2011/06/05 
    ***************************************************************/ 
    //imagecreatefrompng :: create a new image  
    //from file or URL 
    $img = imagecreatefrompng('./img/captcha.png');  
    //displaying the random text on the captcha  
    $captcha = rand(10000000, 99999999);  
    $_SESSION['captcha'] = ($captcha);  
    //The function imagecolorallocate creates a  
    //color using RGB (red,green,blue) format. 
    $color = imagecolorallocate($img, 255, 255, 255);  
    imagestring($img, 10, 8, 3, $captcha, $color); 
    header ('Content-type: image/png');
    imagepng($img);
?>