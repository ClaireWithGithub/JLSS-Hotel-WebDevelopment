<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);

$sql="insert into relation_fendian(fendian_id,fangjian_id,price)
 values('".$_POST['fendian']."','".$_POST['fangjian']."','".$_POST['price']."')";
//values����һ��Ҫ������
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=relation_fendian.php' />";
	}
	else{
	echo "<script>alert('���ʧ��');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=relation_fendian_insert1.php' />";
	}
?>