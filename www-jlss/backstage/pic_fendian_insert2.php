<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);

	  if(!is_dir("images/fendiantupian")){
		  mkdir("images/fendiantupian");
		  }
		  $path="images/fendiantupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
		  $path1="backstage/images/fendiantupian/".$_FILES["route"]["name"];		 
$sql="insert into pic_fendian(fendian_id,fangjian_id,pic_fendian_route) 
values('".$_POST['fendian_id']."','".$_POST['fangjian_id']."','".$path1."')";
	
//values里面一定要加引号
$bool=mysql_query($sql);
//echo mysql_error();测试错误很有用的一句话
if($bool){
	echo "<script>alert('添加成功');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_fendian.php' />";
	}
	else{
	echo "<script>alert('添加失败');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_fendian_insert1.php' />";
	}
?>