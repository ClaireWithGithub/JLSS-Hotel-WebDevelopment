<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="metinfotop">
	<div class="position">简体中文：其他管理 > <a href="intro.php">公司简介</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li class="now"><a href="intro.php">公司简介</a></li>
		<li><a href="intro_insert1.php" >增加一条信息</a></li>
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
if($_GET["page"]==""){
$cur=1;
}
else{
$cur=$_GET["page"];//当前页
}
$sql='select * from intro';
$result=@mysql_query($sql);
$total=@mysql_num_rows($result);//总记录数
$pagesize=3;//每页记录数
$pagecount=ceil($total/$pagesize);//总页数
$page_start=($cur-1)*$pagesize;//limit第一个参数，即每页第一条记录编号-1
$sql1="select * from intro limit $page_start,$pagesize";
$result1=@mysql_query($sql1);
$j=$page_start+1;
$i=1;
$last=$cur-1;
if($last<=0){     //一定要写=
$last=1;
}
$next=$cur+1;
if($next>$pagecount){
$next=$pagecount;
}
?>
</table>
<table align="center" border="1" height="auto" bordercolor="#4169E1" cellspacing="0" style="font-size:16px">
<tr>
<th width="50">序号</th>
<th width="400">公司简介</th>
<th width="50">修改</th>
<th width="50">删除</th>
</tr>
<?php 
while($i<=$pagesize && $j<=$total){ //and
$info=mysql_fetch_object($result1);//这句话要写在while中
?>
<tr align="center" class="d"> 
<td><?php echo $j++;?></td>
<td><?php echo $info->intro_details;?></td>
<td><a href="intro_update1.php?id=<?php echo $info->intro_id ;?>">修改</a></td>
<td><a href="intro_delete.php?id=<?php echo $info->intro_id ;?>">删除</a></td>
</tr>
<?php 
$i++;
}
?>
</table>
<table height="100" border="0" cellspacing="0" style="font-size:18px;" align="center">
<tr align="center"><!--用这行使字在表格中间 -->
<!--千万要注意超链接中双引号的位置，？前面，page=后面都没有"!!! -->
                                    <td><a href="intro.php?page=1"> 首页</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="intro.php?page=<?php echo $last; ?>">上一页</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="intro.php?page=<?php echo $next; ?>">下一页</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="intro.php?page=<?php echo $pagecount; ?>">尾页</a></td>
</tr>
</table>
</body>
</html>
