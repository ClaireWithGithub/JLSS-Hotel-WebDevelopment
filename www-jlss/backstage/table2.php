<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
$sql='select * from intro';
$result=@mysql_query($sql);
if($result){
$sql="drop table intro";
@mysql_query($sql);
	}
	else{
			//��˾���
$sql="create table intro(
intro_id int not null auto_increment primary key,
intro_details text
)";
$result=@mysql_query($sql);

		}
if($result){
echo "�ɹ�";
}
else
echo "failed";

?>