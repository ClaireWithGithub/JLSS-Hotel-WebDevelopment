<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);

	  if(!is_dir("images/fendiantupian")){
		  mkdir("images/fendiantupian");
		  }
		  $path="images/fendiantupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
		  $path1="backstage/images/fendiantupian/".$_FILES["route"]["name"];		 
$sql="insert into pic_fendian(fendian_id,fangjian_id,pic_fendian_route) 
values('".$_POST['fendian_id']."','".$_POST['fangjian_id']."','".$path1."')";
	
//values����һ��Ҫ������
$bool=mysql_query($sql);
//echo mysql_error();���Դ�������õ�һ�仰
if($bool){
	echo "<script>alert('��ӳɹ�');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_fendian.php' />";
	}
	else{
	echo "<script>alert('���ʧ��');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_fendian_insert1.php' />";
	}
?>