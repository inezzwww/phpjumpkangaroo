<?php
$mms = $_GET[mm];
$filename='mm_QM556';
$handle=fopen($filename,'r');
$mm=fread($handle,filesize($filename));
//$mm����������ֵ


if($mm==$mms)
{
echo "true";
}

//ִ���������


?>