<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
$admin_id=$_POST["admin_id"];
//echo $admin_id;

$admin_name=$_POST["admin_name"];
$admin_code=$_POST["admin_code"];
$sql="update administrator set admin_name='$admin_name',admin_psw='$admin_code' where admin_id='$admin_id'";
if(mysql_query($sql)){
	echo"<script language='javascript'>alert('修改成功！')</script>";
	echo '<meta http-equiv="Refresh" content="0;URL=administrator.php" />';}

?>