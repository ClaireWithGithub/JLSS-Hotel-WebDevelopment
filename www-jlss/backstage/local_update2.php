<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
 if(!is_dir("images/lipintupian")){
		  mkdir("images/lipintupian");
		  }
		  if($_FILES["route"]["name"]==""){
			  $path1=$_POST["update1"];}
			  else{
		  $path1="backstage/images/lipintupian/".$_FILES["route"]["name"];
		  $path="images/lipintupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
		  }
$sql="update local set local_title='".$_POST["title"]."',local_details='".$_POST["editor01"].
"',pic_local_route='".$path1."' where local_id=".$_POST["update"];
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('修改成功');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=local.php' />";
	}
?>