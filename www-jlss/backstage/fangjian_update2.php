<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql="update fangjian set fangjian_name='".$_POST["title"]."' where fangjian_id=".$_POST["update"];//�����ӷ�
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('�޸ĳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=fangjian.php' />";
	}
?>