<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);

$sql="insert into jingdian_pay(payway_id,jingdian_id)
 values('".$_POST['payway']."','".$_POST['jingdian']."')";
//values����һ��Ҫ������
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=jingdian_pay.php' />";
	}
	else{
	echo "<script>alert('���ʧ��');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=jingdian_pay_insert1.php' />";
	}
?>