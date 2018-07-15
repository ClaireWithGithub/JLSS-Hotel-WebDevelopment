<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript" type="text/javascript">
function s(){
	var myform=document.myform;
	if(myform.title.value==""){
		alert("房间名称为必填项！");
		return false;}
		
						else return true;}
</script>
<!--else{
			if(myform.editor01.value==""){
						alert("新闻内容为必填项！");
						return false;}-->
</head>
<body>

	<div class="metinfotop">
	<div class="position">简体中文：分店管理 > <a href="fangjian.php">房间类别</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li> <a href="fangjian.php">房间类别</a></li>
		<li  class="now"><a href="fangjian_insert1.php" >增加一种房间类别</a></li>
	</ul>
</div>
<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
if($_SESSION["name"]==""){
echo "<script> alert('非法用户，不得访问!').window.location.href='login/b_login.php';</script>";
exit();
}
?>
<form method="POST" name="myform" action="fangjian_insert2.php" target="_self"  onSubmit="return s();">
 <table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>房间名称：</td>
	      <td class="input"><input name="title" type="text" class="text" value="<?php echo $_GET[title]; ?>"/></td>
	      </tr>
	    <tr>
	      <td class="text"></td>
	      <td class="submit"><input type="submit" name="submit1" value="确定" class="submit" /></td>
	      </tr>
  </table>
</form>
</body>
</html>
