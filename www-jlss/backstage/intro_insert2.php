<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql="insert into intro(intro_details)
 values('".$_POST['editor01']."')";
		
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=intro.php' />";
	}
	else{
		?>
	<script>alert('���ʧ��');</script>
	<meta http-equiv='refresh' content='0;URL=intro_insert1.php?content=<?php echo $_POST[editor01];?>' />
	<?php
    }
?>