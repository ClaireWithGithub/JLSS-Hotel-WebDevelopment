<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="metinfotop">
	<div class="position">简体中文：景点管理 > <a href="jingdian.php">景点信息</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li class="now"><a href="jingdian.php">景点信息</a></li>
		<li ><a href="#" >修改景点信息</a></li>
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
$sql="select * from jingdian where jingdian_id=".$_GET[id];
$result=mysql_query($sql);
$info=mysql_fetch_object($result);
?>
<form method="POST" name="myform" action="jingdian_update2.php" target="_self">
 <table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>景点名称：</td>
	      <td class="input"><input name="title" type="text" class="text" value="<?php echo $info->jingdian_name; ?>" /></td>
	      </tr>
           <tr>
	      <td class="text"><span class="bi_tian">*</span>价格：</td>
	      <td class="input"><input name="price" type="text" class="text" value="<?php echo $info->price; ?>" /></td>
	      </tr>
         <tr>
	      <td class="text"><span class="bi_tian">*</span>景区等级：</td>
	      <td class="input"><input name="rank" type="text" class="text" value="<?php echo $info->rank; ?>" /></td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>景区主题：</td>
	      <td class="input"><input name="theme" type="text" class="text" value="<?php echo $info->theme; ?>"  />
         </td>
	      </tr>
          
          <tr>
	      <td class="text"><span class="bi_tian">*</span>景点地址：</td>
	      <td class="input"><input name="dizhi" type="text" class="text" value="<?php echo $info->jingdian_dizhi; ?>" /></td>
	      </tr>
         
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>景区详情：</td>
	      <td class="input">&nbsp;</td>
	      </tr>
	    <tr>
	      <td colspan="2" class="text"><textarea rows="30" cols="50" name="editor01"><?php echo $info->jingdian_details; ?></textarea>
	        <script type="text/javascript">CKEDITOR.replace('editor01');</script>
	        <span class="tips">1000字以内</span></td>
	      </tr>
	      <tr>
	      <td class="text"><input type="hidden" name="update" value="<?php echo $_GET[id]; ?>"></td>
	      <td class="submit"><input type="submit" name="submit1" value="确定" class="submit" onclick="return Smit($(this),'myform')" /></td>
	      </tr>
  </table>
</form>
</body>
</html>
