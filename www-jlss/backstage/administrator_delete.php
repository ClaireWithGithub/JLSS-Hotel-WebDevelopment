<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql="delete from administrator where admin_id=".$_GET["id"];
if(mysql_query($sql)){
	echo"<script language='javascript'>alert('ɾ���ɹ���')</script>";
	echo '<meta http-equiv="Refresh" content="0;URL=administrator.php" />';}
?>

