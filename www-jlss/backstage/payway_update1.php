<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="metinfotop">
	<div class="position">简体中文：支付管理 > <a href="payway.php">付款方式</a></div>
	</div>
	<div class="clear"></div>
<div class="stat_list">
	<ul>
		<li > <a href="payway.php">付款方式</a></li>
		<li class="now"><a href="#" >修改付款方式</a></li>
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
$sql="select * from payway where payway_id=".$_GET[id];
$result=mysql_query($sql);
$info=mysql_fetch_object($result);
?>
<!--<table height="30" border="0" cellspacing="0" style="font-size:18px;">
<tr><td>
<a href="news_insert1.php">增加一条新闻</a>
</tr></td></table>-->
<form method="POST" name="myform" action="payway_update2.php" target="_self">
<table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>付款方式名称：</td>
	      <td class="input"><input name="title" type="text" class="text" value="<?php echo $info->payway_name; ?>"/></td>
	      </tr>         
	    <tr>
	      <td class="text"></td>
           <td class="text"><input type="hidden" name="update" value="<?php echo $_GET[id]; ?>"></td>
	      <td class="submit"><input type="submit" name="submit1" value="确定" class="submit" /></td>
	      </tr>
  </table>
</form>
</body>
</html>
