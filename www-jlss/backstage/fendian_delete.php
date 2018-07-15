<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
$sql='delete from fendian where fendian_id='.$_GET["id"];//用连接符
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('删除成功');window.location.href='fendian.php';</script>";
	}
?>