<?php
$mms = $_GET[mm];
$filename='mm_QM556';
$handle=fopen($filename,'r');
$mm=fread($handle,filesize($filename));
//$mm就是密码数值


if($mm==$mms)
{
echo "true";
}

//执行上面这段


?>