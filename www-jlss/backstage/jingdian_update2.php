<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql="update jingdian set jingdian_name='".$_POST["title"]."',price='".$_POST["price"].
"',rank='".$_POST["rank"]."',theme='".$_POST["theme"]."',jingdian_dizhi='".$_POST["dizhi"].
"',jingdian_details='".$_POST["editor01"].
"' where jingdian_id=".$_POST["update"];
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('�޸ĳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=jingdian.php' />";
	}
?>