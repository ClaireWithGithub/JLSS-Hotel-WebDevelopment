<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);

	  if(!is_dir("images/tuozhantupian")){
		  mkdir("images/tuozhantupian");
		  }
		  $path1="backstage/images/tuozhantupian/".$_FILES["route"]["name"];
		   $path="images/tuozhantupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
		 //echo $path;
$sql="insert into tuozhan(pic_tuozhan_route) 
values('".$path1."')";
	
//values����һ��Ҫ������
$bool=mysql_query($sql);
//echo mysql_error();���Դ�������õ�һ�仰
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=tuozhan.php' />";
	}
	else{
	echo "<script>alert('���ʧ��');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=tuozhan_insert1.php' />";
	}
?>