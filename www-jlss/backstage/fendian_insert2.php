<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
$sql="insert into fendian(fendian_name,fendian_dizhi,jiudianxingji,kaiyeshijian,tesefuwu,fendian_details)
 values('".$_POST['title']."','".$_POST['dizhi']."','".$_POST['rank']."',
 '".$_POST['time']."','".$_POST['service']."','".$_POST['editor01']."')";
		
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('添加成功');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=fendian.php' />";
	}
	else{
		?>
	<script>alert('添加失败');</script>
	<meta http-equiv='refresh' content='0;URL=fendian_insert1.php?
    title=<?php echo $_POST[title];?> & content=<?php echo $_POST[editor01];?>' />
	<?php
    }
?>