<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
		$sql="insert into attention(attention_details) values('".$_POST['title']."')";	
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=attention.php' />";
	}
	else{
		?>
	<script>alert('���ʧ��');</script>
	<meta http-equiv='refresh' content='0;URL=attention_insert1.php?title=<?php echo $_POST[title];?>' />
	<?php
    }
?>