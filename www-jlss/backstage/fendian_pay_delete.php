<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql='delete from fendian_pay where payway_id='.$_GET["id1"]." and fendian_id=".$_GET["id2"];//�����ӷ�
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('ɾ���ɹ�');window.location.href='fendian_pay.php';</script>";
	//echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
	}
?>