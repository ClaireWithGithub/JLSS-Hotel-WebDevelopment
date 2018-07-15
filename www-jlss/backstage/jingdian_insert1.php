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
		alert("景点名称为必填项！");
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
	<div class="position">简体中文：景点管理 > <a href="jingdian.php">景点信息</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li><a href="jingdian.php">景点信息</a></li>
		<li  class="now"><a href="jingdian_insert1.php" >增加一个景点</a></li>
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
<form method="POST" name="myform" action="jingdian_insert2.php" target="_self"  onSubmit="return s();">
 <table cellpadding="2" cellspacing="1" class="table">
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>景点名称：</td>
	      <td class="input"><input name="title" type="text" class="text" value="<?php echo $_GET[title]; ?>"/></td>
	      </tr>
           <tr>
	      <td class="text"><span class="bi_tian">*</span>价格：</td>
	      <td class="input"><input name="price" type="text" class="text"/></td>
	      </tr>
         <tr>
	      <td class="text"><span class="bi_tian">*</span>景区等级：</td>
	      <td class="input"><input name="rank" type="text" class="text" /></td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>景区主题：</td>
	      <td class="input"><input name="theme" type="text" class="text" />
         </td>
	      </tr>
          
          <tr>
	      <td class="text"><span class="bi_tian">*</span>景点地址：</td>
	      <td class="input"><input name="dizhi" type="text" class="text" /></td>
	      </tr>
         
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>景区详情：</td>
	      <td class="input">&nbsp;</td>
	      </tr>
	    <tr>
	      <td colspan="2" class="text"><textarea rows="30" cols="50" name="editor01"><?php echo $_GET[content]; ?></textarea>
	        <script type="text/javascript">CKEDITOR.replace('editor01');</script>
	        <span class="tips">1000字以内</span></td>
	      </tr>
	    <tr>
	      <td class="text"></td>
	      <td class="submit"><input type="submit" name="submit1" value="确定" class="submit" /></td>
	      </tr>
  </table>
</form>
</body>
</html>
