<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="metinfotop">
	<div class="position">简体中文：景点管理 > <a href="pic_jingdian.php">景点图片</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li ><a href="pic_jingdian.php">景点图片</a></li>
		<li class="now"><a href="#" >修改图片</a></li>
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
$sql1="select * from v_jingdian where pic_jingdian_id=".$_GET[id];
$result1=mysql_query($sql1);
$info1=mysql_fetch_object($result1);

?>
<form method="POST" name="myform" action="pic_jingdian_update2.php" target="_self" enctype="multipart/form-data">
	
 <table cellpadding="2" cellspacing="1" class="table">
 <tr>
	      <td class="text"><span class="bi_tian">*</span>景点名称：</td>
	      <td class="input">
          <?php echo $info1->jingdian_name; ?>
          </td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>原路径：</td>
	      <td class="input">
         <?php echo $info1->pic_jingdian_route; ?>
          </td>
	      </tr>
         <tr>
	      <td class="text"><span class="bi_tian">*</span>修改后路径：</td>
          <td class="input"><input name="route" type="file" class="text" /></td>
          <td><span class="tips color390">请上传修改图片</span></td>
	      </tr>
         
	    <tr>
	      <td class="text"></td>
           <td class="text"><input type="hidden" name="update" value="<?php echo $_GET[id]; ?>">
           <input type="hidden" name="update1" value="<?php echo $info1->pic_jingdian_route; ?>"></td>
	      <td class="submit"><input type="submit" name="submit1" value="确定" class="submit" onclick="return Smit($(this),'myform')" /></td>
	      </tr>
    
  </table>
</form>
</body>
</html>
