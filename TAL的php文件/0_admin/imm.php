<?php
//��ȡ����
$filename='mm_QM556';
$handle=fopen($filename,'r');
$mmi=fread($handle,filesize($filename));
$mm= $_GET['mm'];
//�ж������Ƿ���ȷ
//$mm�ǲ���

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