<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);

	  if(!is_dir("images/jingdiantupian")){
		  mkdir("images/jingdiantupian");
		  }
		  $path1="backstage/images/jingdiantupian/".$_FILES["route"]["name"];
		   $path="images/jingdiantupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
		 //echo $path;
$sql="insert into pic_jingdian(jingdian_id,pic_jingdian_route) 
values('".$_POST['jingdian_id']."','".$path1."')";
	
//values����һ��Ҫ������
$bool=mysql_query($sql);
//echo mysql_error();���Դ�������õ�һ�仰
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_jingdian.php' />";
	}
	else{
	echo "<script>alert('���ʧ��');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_jingdian_insert1.php' />";
	}
?>