<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="metinfotop">
	<div class="position">简体中文：分店管理 > <a href="relation_fendian.php">分店房间关系</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li ><a href="relation_fendian.php">查看</a></li>
		<li class="now"><a href="#" >修改一条记录</a></li>
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
$sql="select * from v_fendian_fangjian where fendian_id=".$_GET[id1]." and fangjian_id=".$_GET[id2];
$result=mysql_query($sql);
$info=mysql_fetch_object($result);

?>
<form method="POST" name="myform" action="relation_fendian_update2.php" target="_self">
  <table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>分店名称：</td>
	      <td class="input"><?php echo $info->fendian_name; ?></td>
	      </tr>
         <tr>
	      <td class="text"><span class="bi_tian">*</span>房间类型：</td>
	      <td class="input"><?php echo $info->fangjian_name; ?></td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>房间价格：</td>
	      <td class="input"><input name="price" type="text" class="text" value="<?php echo $info->price; ?>"/></td>
	      </tr>
	    <tr>
          <td class="text">
          <input type="hidden" name="update1" value="<?php echo $_GET[id1]; ?>"></td>
          <input type="hidden" name="update2" value="<?php echo $_GET[id2]; ?>">
	      <td class="submit"><input type="submit" name="submit1" value="确定" class="submit" onclick="return Smit($(this),'myform')" /></td>
	      </tr>
      
  </table>
</form>
</body>
</html>
