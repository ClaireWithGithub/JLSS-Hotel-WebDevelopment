<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<?
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);

	if(!is_dir("images/jingdiantupian")){
		  mkdir("images/jingdiantupian");
		  }
		   if($_FILES["route"]["name"]==""){
			  $path1=$_POST["update1"];}
			  else{
		  $path1="backstage/images/jingdiantupian/".$_FILES["route"]["name"];
		  $path="images/jingdiantupian/".$_FILES["route"]["name"];
		  copy($_FILES["route"]["tmp_name"],$path); 	
			  }
$sql="update pic_jingdian set pic_jingdian_route='".$path1."' where pic_jingdian_id=".$_POST["update"];
$bool=mysql_query($sql);
if($bool){
	echo "<script>alert('修改成功');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=pic_jingdian.php' />";
	}
?>