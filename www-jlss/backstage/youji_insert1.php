<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="metinfotop">
	<div class="position">�������ģ��������� > <a href="youji.php">�����μ�</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li><a href="youji.php">�����μ�</a></li>
		<li class="now"><a href="youji_insert1.php" >����һ���μ���Ϣ</a></li>
	</ul>
</div><?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
if($_SESSION["name"]==""){
echo "<script> alert('�Ƿ��û������÷���!').window.location.href='login/b_login.php';</script>";
exit();
}
?>
<form method="POST" name="myform" action="youji_insert2.php" target="_self"  onSubmit="return s();" enctype="multipart/form-data">
 <table cellpadding="2" cellspacing="1" class="table">
          <tr>
	      <td class="text"><span class="bi_tian">*</span>���⣺</td>
	      <td class="input"><input name="title" type="text" class="text" value="<?php echo $_GET[title]; ?>"/></td>
	      </tr>
          <?php 
date_default_timezone_set(PRC);
$year=date("Y");
$month=date("m");
$today=date("d");
$hour=date("H");
$min=date("i");
$second=date("s");
$issue_time="$year-$month-$today $hour:$min:$second";   //��ȡ���ŷ���ʱ�䣬ϵͳʱ�䡣
?>

           <tr>
	      <td class="text"><span class="bi_tian">*</span>ʱ�䣺</td>
	      <td class="input"><input name="time" type="text" class="text" value="<?php echo $issue_time; ?>"/>
         </td>
	      </tr>
           <tr>
	      <td class="text"><span class="bi_tian">*</span>���ߣ�</td>
	      <td class="input"><input name="author" type="text" class="text"/>
         </td>
	      </tr>
	    <tr>
	      <td class="text"><span class="bi_tian">*</span>���ݣ�</td>
	      <td class="input">&nbsp;</td>
	      </tr>
	    <tr>
	      <td colspan="2" class="text"><textarea rows="30" cols="50" name="editor01"><?php echo $_GET[content]; ?></textarea>
	        <script type="text/javascript">CKEDITOR.replace('editor01');</script>
	        <span class="tips">1000������</span></td>
	      </tr>
          <tr>
	      <td class="text"><span class="bi_tian">*</span>ͼƬ���·����</td>
          <td class="input"> <input name="route" type="file" class="text" />
          <span class="tips color390">��ѡ���ϴ�ͼƬ</span></td>
	      </tr>
	    <tr>
	      <td class="text"></td>
	      <td class="submit"><input type="submit" name="submit1" value="ȷ��" class="submit" /></td>
	      </tr>
  </table>
</form>
</body>
</html>
