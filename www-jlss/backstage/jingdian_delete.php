<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql='delete from jingdian where jingdian_id='.$_GET["id"];//�����ӷ�
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('ɾ���ɹ�');window.location.href='jingdian.php';</script>";
	//echo "<meta http-equiv='refresh' content='0;URL=index.php' />";
	}
?>