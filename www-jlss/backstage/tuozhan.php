<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<div class="metinfotop">
	<div class="position">�������ģ��������� > <a href="tuozhan.php">��չ�</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li class="now"><a href="tuozhan.php">��չ�</a></li>
		<li><a href="tuozhan_insert1.php" >����һ��ͼƬ</a></li>
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
if($_GET["page"]==""){
$cur=1;
}
else{
$cur=$_GET["page"];//��ǰҳ
}
$sql='select * from tuozhan';
$result=mysql_query($sql);
$total=mysql_num_rows($result);//�ܼ�¼��
$pagesize=6;//ÿҳ��¼��
$pagecount=ceil($total/$pagesize);//��ҳ��
$page_start=($cur-1)*$pagesize;//limit��һ����������ÿҳ��һ����¼���-1
$sql1="select * from tuozhan limit $page_start,$pagesize";
$result1=mysql_query($sql1);
$last=$cur-1;
if($last<=0){     //һ��Ҫд=
$last=1;
}
$next=$cur+1;
if($next>$pagecount){
$next=$pagecount;
}
?>
</table>
<table align="center" border="1" height="auto" width="80%" bordercolor="#4169E1" cellspacing="0" style="font-size:18px">
<tr>
<th width="30">���</th>
<th width="200">�ͼƬ·��</th>
<th width="50">�޸�</th>
<th width="50">ɾ��</th>
</tr>
<?php 
$j=$page_start+1;
$i=1;
while($i<=$pagesize && $j<=$total){ //and
$info=mysql_fetch_object($result1);//��仰Ҫд��while��
?>
<tr align="center" class="d"> 
<td><?php echo $j++;?></td>
<td><?php echo $info->pic_tuozhan_route;?></td>
<td><a href="tuozhan_update1.php?id=<?php echo $info->tuozhan_id ;?>">�޸�</a></td>
<td><a href="tuozhan_delete.php?id=<?php echo $info->tuozhan_id ;?>">ɾ��</a></td>
</tr>
<?php 
$i++;
}
?>
</table>
<table height="100" border="0" cellspacing="0" style="font-size:18px;" align="center">
<tr align="center"><!--������ʹ���ڱ���м� -->
<!--ǧ��Ҫע�ⳬ������˫���ŵ�λ�ã���ǰ�棬page=���涼û��"!!! -->
                                    <td><a href="tuozhan.php?page=1"> ��ҳ</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="tuozhan.php?page=<?php echo $last; ?>">��һҳ</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="tuozhan.php?page=<?php echo $next; ?>">��һҳ</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="tuozhan.php?page=<?php echo $pagecount; ?>">βҳ</a></td>
</tr>
</table>
</body>
</html>
