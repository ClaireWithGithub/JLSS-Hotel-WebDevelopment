<meta http-equiv="Content-Type" content="text/html"; charset="gb2312" />

<?php
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$admin_name=$_POST["admin_name"];
$admin_code=$_POST["admin_code"];

$sql="insert into administrator(admin_name,admin_psw)
values('$admin_name','$admin_code')";
if(mysql_query($sql)){
	echo"<script language='javascript'>alert('��ӳɹ���')</script>";
	echo '<meta http-equiv="Refresh" content="0;URL=administrator.php" />';}
?>
