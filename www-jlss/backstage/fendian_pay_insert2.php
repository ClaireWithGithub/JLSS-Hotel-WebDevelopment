<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);

$sql="insert into fendian_pay(payway_id,fendian_id)
 values('".$_POST['payway']."','".$_POST['fendian']."')";
//values����һ��Ҫ������
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=fendian_pay.php' />";
	}
	else{
	echo "<script>alert('���ʧ��');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=fendian_pay_insert1.php' />";
	}
?>