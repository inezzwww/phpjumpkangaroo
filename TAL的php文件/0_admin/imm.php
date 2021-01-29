<?php
//读取密码
$filename='mm_QM556';
$handle=fopen($filename,'r');
$mmi=fread($handle,filesize($filename));
$mm= $_GET['mm'];
//判断密码是否正确
//$mm是参数

if ($mm!=$mmi)
{
echo "false";
}
else
{
$mmx= $_GET['xmm'];
file_put_contents('mm_QM556',$mmx);
echo "true";
}

?>