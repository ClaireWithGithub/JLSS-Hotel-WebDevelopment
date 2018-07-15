<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
$sql="update relation_fendian set price='".$_POST["price"]."' where fendian_id=".$_POST["update1"].
" and fangjian_id=".$_POST["update2"];

$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('修改成功');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=relation_fendian.php'/>";
	}
	else{
		echo "<script>alert('修改失败');</script>";
		}
?>