<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
if(!is_dir("images/lipintupian")){
		  mkdir("images/lipintupian");
		  }
		  $path1="backstage/images/lipintupian/".$_FILES["route"]["name"];
		   $path="images/lipintupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
$sql="insert into local(local_title,local_details,pic_local_route)
 values('".$_POST['title']."','".$_POST['editor01']."','".$path1."')";
		
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=local.php' />";
	}
	else{
		?>
	<script>alert('���ʧ��');</script>
	<meta http-equiv='refresh' content='0;URL=local_insert1.php?title=<?php echo $_POST[title];?> & content=<?php echo $_POST[editor01];?>' />
	<?php
    }
?>