<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql="update fendian set fendian_name='".$_POST["title"]."',fendian_dizhi='".$_POST["dizhi"].
"',jiudianxingji='".$_POST["rank"]."',kaiyeshijian='".$_POST["time"].
"',tesefuwu='".$_POST["service"]."',fendian_details='".$_POST["editor01"].
"' where fendian_id=".$_POST["update"];
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('�޸ĳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=fendian.php' />";
	}
?>