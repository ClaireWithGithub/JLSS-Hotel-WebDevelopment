<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
$sql="delete from administrator where admin_id=".$_GET["id"];
if(mysql_query($sql)){
	echo"<script language='javascript'>alert('删除成功！')</script>";
	echo '<meta http-equiv="Refresh" content="0;URL=administrator.php" />';}
?>

