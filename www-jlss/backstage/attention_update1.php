<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="metinfotop">
	<div class="position">�������ģ��ֵ���� > <a href="attention.php">ע������</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li > <a href="attention.php">ע������</a></li>
		<li class="now"><a href="#" >�޸�һ��ע������</a></li>
	</ul>
</div><?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
if($_SESSION["name"]==""){
echo "<script> alert('�Ƿ��û������÷���!').window.location.href='login/b_login.php';</script>";
exit();
}
$sql="select * from attention where attention_id=".$_GET[id];
$result=mysql_query($sql);
$info=mysql_fetch_object($result);
?>
<form method="POST" name="myform" action="attention_update2.php" target="_self">
<table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>ע���������ݣ�</td>
	      <td class="input"><input name="title" type="text" class="text" value="<?php echo $info->attention_details; ?>"/></td>
	      </tr>         
	    <tr>
	      <td class="text"></td>
           <td class="text"><input type="hidden" name="update" value="<?php echo $_GET[id]; ?>"></td>
	      <td class="submit"><input type="submit" name="submit1" value="ȷ��" class="submit" /></td>
	      </tr>
  </table>
</form>
</body>
</html>
