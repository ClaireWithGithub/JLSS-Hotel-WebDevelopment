<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql="update attention set attention_details='".$_POST["title"]."' where attention_id=".$_POST["update"];//�����ӷ�
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('�޸ĳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=attention.php' />";
	}
?>