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
	<div class="position">�������ģ��ֵ���� > <a href="pic_fendian.php">�ֵ�ͼƬ</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li ><a href="pic_fendian.php">�ֵ�ͼƬ</a></li>
		<li class="now"><a href="#" >����ͼƬ</a></li>
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
$sql="select * from v_pic_fendian where pic_fendian_id=".$_GET[id];
$result=mysql_query($sql);
$info=mysql_fetch_object($result);

?>
<form method="POST" name="myform" action="pic_fendian_update2.php" target="_self" enctype="multipart/form-data">
	
 <table cellpadding="2" cellspacing="1" class="table">
 <tr>
	      <td class="text"><span class="bi_tian">*</span>�ֵ����ƣ�</td>
	      <td class="input"><?php echo $info->fendian_name; ?></td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>�������ͣ�</td>
	      <td class="input"><?php echo $info->fangjian_name; ?></td>
	      </tr>
           <tr>
	      <td class="text"><span class="bi_tian">*</span>ԭ·����</td>
	      <td class="input">
         <?php echo $info->pic_fendian_route; ?>
          </td>
	      </tr>
         <tr>
	      <td class="text"><span class="bi_tian">*</span>�޸ĺ�·����</td>
          <td class="input"> <input name="route" type="file" class="text" />
          <span class="tips color390">���ϴ��޸ĵ�ͼƬ</span></td>
	      </tr>
         
	    <tr>
	      <td class="text"><input type="hidden" name="update" value="<?php echo $_GET[id]; ?>">
          <input type="hidden" name="update1" value="<?php echo $info->pic_fendian_route; ?>"></td>
	      <td class="submit"><input type="submit" name="submit1" value="ȷ��" class="submit" onclick="return Smit($(this),'myform')" /></td>
	      </tr>
    
  </table>
</form>
</body>
</html>
