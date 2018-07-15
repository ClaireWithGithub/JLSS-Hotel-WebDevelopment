<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
$sql='select * from intro';
$result=@mysql_query($sql);
if($result){
$sql="drop table intro";
@mysql_query($sql);
	}
	else{
			//公司简介
$sql="create table intro(
intro_id int not null auto_increment primary key,
intro_details text
)";
$result=@mysql_query($sql);

		}
if($result){
echo "成功";
}
else
echo "failed";

?>