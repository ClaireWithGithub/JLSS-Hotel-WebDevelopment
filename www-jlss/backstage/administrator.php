<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="images/metinfo.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>



	<div class="metinfotop">
	<div class="position">�������ģ�Ȩ�޹��� > <a href="administrator.php">����Ա</a></div>
	</div>
	<div class="clear"></div>


<div class="stat_list">
	<ul>
		<li class="now"><a href="administrator.php">����Ա</a></li>
		<li ><a href="administrator_insert1.php" >��������Ա</a></li>
	</ul>
</div>
<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
@session_start();
if($_SESSION['name']==''){
?>
<script type="text/javascript">
alert("�Ƿ��û�����ֹ���ʣ�");
</script>
<meta http-equiv="refresh" content="0;URL=login/b_login.php" />";
<?php
}
if($_GET["page"]==""){
$cur=1;
}
else{
$cur=$_GET["page"];//��ǰҳ
}
$sql='select * from administrator';
$result=mysql_query($sql);
$total=mysql_num_rows($result);//�ܼ�¼��
$pagesize=5;//ÿҳ��¼��
$pagecount=ceil($total/$pagesize);//��ҳ��
$page_start=($cur-1)*$pagesize;//limit��һ����������ÿҳ��һ����¼���-1
$sql="select * from administrator limit $page_start,$pagesize";
$result=mysql_query($sql);
$j=$page_start+1;
$i=1;
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

<table align="center" border="1" height="auto" width="80%" bordercolor="#4169E1" cellspacing="0" style="font-size:18px" >
<tr>
<th >���</th>
<th >����Ա���</th>
<th>��¼�ʺ�</th>
<th >����</th>
<th>�޸�</th>
<th>ɾ��</th>
</tr>
<?php 
while($i<=$pagesize && $j<=$total){ //and
$info=mysql_fetch_object($result);//��仰Ҫд��while��
?>
<tr align="center" class="d"> 
<td><?php echo $j++;?></td>
<td><?php echo $info->admin_id;?></td>
<td><?php echo $info->admin_name;?></td>
<td><?php echo $info->admin_psw;?></td>
<td><a href='administrator_update1.php?id=<?php echo $info->admin_id;?>'>�޸�</a></td>
 <td><a href='administrator_delete.php?id=<?php echo $info->admin_id;?>'>ɾ��</a></td>
</tr>
<?php 
$i++;
}
?>
</table>
<table height="100" border="0" cellspacing="0" style="font-size:18px;" align="center">
<tr align="center"><!--������ʹ���ڱ���м� -->
<!--ǧ��Ҫע�ⳬ������˫���ŵ�λ�ã���ǰ�棬page=���涼û��"!!! -->
                                    <td><a href="administrator.php?page=1"> ��ҳ</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="administrator.php?page=<?php echo $last; ?>">��һҳ</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="administrator.php?page=<?php echo $next; ?>">��һҳ</a>&nbsp;&nbsp;&nbsp;</td>
                                    <td><a href="administrator.php?page=<?php echo $pagecount; ?>">βҳ</a></td>
                             
</tr>
</table>
    
   
               
</body>
</html>
