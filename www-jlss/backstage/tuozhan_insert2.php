<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
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
	
//values里面一定要加引号
$bool=mysql_query($sql);
//echo mysql_error();测试错误很有用的一句话
if($bool){
	echo "<script>alert('添加成功');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=tuozhan.php' />";
	}
	else{
	echo "<script>alert('添加失败');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=tuozhan_insert1.php' />";
	}
?>