<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="metinfotop">
	<div class="position">�������ģ��ֵ���� > <a href="relation_attention.php">ע�������ϵ</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li ><a href="relation_attention.php">�鿴</a></li>
		<li class="now"><a href="relation_attention_insert1.php" >����һ����¼</a></li>
	</ul>
</div>
<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
if($_SESSION["name"]==""){
echo "<script> alert('�Ƿ��û������÷���!').window.location.href='login/b_login.php';</script>";
exit();
}
?>
<form method="POST" name="myform" action="relation_attention_insert2.php" target="_self">
  <table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>�ֵ����ƣ�</td>
	      <td class="input"><select name="fendian">
<?php 
$sql="select * from fendian";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
$i=1;
while($i<=$num){
$info=mysql_fetch_object($result);
?>
<option value="<?php echo $info->fendian_id; ?>"><?php echo $info->fendian_name; ?></option>
<?php 
$i++;
}
?>
</select></td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>ע���������ݣ�</td>
	      <td class="input"><select name="attention">
<?php 
$sql="select * from attention";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
$i=1;
while($i<=$num){
$info=mysql_fetch_object($result);
?>
<option value="<?php echo $info->attention_id; ?>"><?php echo $info->attention_details; ?></option>
<?php 
$i++;
}
?></select>
         </td>
	      </tr>
	    <tr>
	      <td class="text"></td>
	      <td class="submit"><input type="submit" name="submit1" value="ȷ��" class="submit" onclick="return Smit($(this),'myform')" /></td>
	      </tr>
      
  </table>
</form>
</body>
</html>
