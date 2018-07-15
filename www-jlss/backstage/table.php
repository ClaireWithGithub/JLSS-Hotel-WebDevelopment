<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
$bool=mysql_select_db($database);
if($bool){
	$sql='drop database '.$database; //千万要加空格，注意细节！
	mysql_query($sql);
}
$sql="create database ".$database;
mysql_query($sql);
mysql_select_db($database);
//mysql_query("set names gb2312");
//分店表
$sql="create table fendian(
fendian_id int not null auto_increment primary key,
fendian_name varchar(50) not null,
fendian_dizhi varchar(200),
jiudianxingji varchar(20),
kaiyeshijian varchar(20),
tesefuwu varchar(50),
fendian_details text
)";
mysql_query($sql);
//$sql="drop table fangjian";
//mysql_query($sql);
//房间类别表
$sql="create table fangjian(
fangjian_id int not null auto_increment primary key,
fangjian_name varchar(20) not null
)";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('标间')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('大床房')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('电脑房')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('家庭房')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('豪华套房')";
mysql_query($sql);
//分店房间关系
$sql="create table relation_fendian(
fendian_id int not null,
fangjian_id int not null,
price varchar(20)
)";
mysql_query($sql);
//分店图片
$sql="create table pic_fendian(
pic_fendian_id int not null primary key auto_increment,
fendian_id int not null,
fangjian_id int not null,
pic_fendian_route varchar(100)
)";
mysql_query($sql);
//注意事项表
$sql="create table attention(
attention_id int not null auto_increment primary key,
attention_details text
)";
mysql_query($sql);
$sql="insert into attention(attention_details) values('游玩旺季请至少提前3天预订。')";
mysql_query($sql);
$sql="insert into attention(attention_details) values('办理入住请携带有效身份证件。')";
mysql_query($sql);
//注意事项关系表
$sql="create table relation_attention(
fendian_id int not null,
attention_id int not null
)";
mysql_query($sql);

//景点
$sql="create table jingdian(
jingdian_id int not null auto_increment primary key,
jingdian_name varchar(50) not null,
price varchar(20),
rank varchar(20),
theme varchar(50),
jingdian_dizhi varchar(50),
jingdian_details text  
)";                  //价格，景区等级，景区主题，景点地址，景区信息
mysql_query($sql);
//景点图片
$sql="create table pic_jingdian(
pic_jingdian_id int not null auto_increment primary key,
jingdian_id int not null,
pic_jingdian_route varchar(100)
)";
mysql_query($sql);
//旅游线路
$sql="create table xianlu(
xianlu_id int not null auto_increment primary key,
xianlu_title varchar(100),
xianlu_details text,
pic_xianlu_route varchar(100)
)";
mysql_query($sql);
//攻略游记
$sql="create table youji(
youji_id int not null auto_increment primary key,
youji_title varchar(100),
time datetime,
author varchar(20),
youji_details text,
pic_youji_route varchar(100)
)";
$bool=mysql_query($sql);

//支付方式
$sql="create table payway(
payway_id int not null auto_increment primary key,
payway_name varchar(20)
)";
mysql_query($sql);
$sql="insert into payway(payway_name) values('支付宝')";
mysql_query($sql);
$sql="insert into payway(payway_name) values('快捷支付')";
mysql_query($sql);
$sql="insert into payway(payway_name) values('网银支付')";
mysql_query($sql);
$sql="insert into payway(payway_name) values('微信支付')";
mysql_query($sql);
//分店支付
$sql="create table fendian_pay(
fendian_id int not null,
payway_id int not null
)";
mysql_query($sql);
//景点支付
$sql="create table jingdian_pay(
jingdian_id int not null,
payway_id int not null
)";
mysql_query($sql);
//礼品特产
$sql="create table local(
local_id int not null auto_increment primary key,
local_title varchar(100),
local_details text,
pic_local_route varchar(100)
)";
mysql_query($sql);
//拓展活动
$sql="create table tuozhan(
tuozhan_id int not null auto_increment primary key,
pic_tuozhan_route varchar(100)
)";
mysql_query($sql);
//管理员
$sql="create table administrator(
admin_id int not null auto_increment primary key,
admin_name varchar(20) not null,
admin_psw varchar(20) not null
)";
mysql_query($sql);
$sql="insert into administrator(admin_name,admin_psw) values('admin','jlss')";
mysql_query($sql);
//公司简介
$sql="create table intro(
intro_id int not null auto_increment primary key,
intro_details text,
)";
mysql_query($sql);
$sql="insert into intro(intro_details) 
values('景邻山水（北京）酒店管理有限公司是校友嘉（北京）文化发展股份有限公司 旗下以酒店直营和管理为主营业务的项目子公司。 
景邻山水（北京）旅游文化发展有限公司是以经营会议旅游服务、拓展培训团建为主营业务的公司。')";
mysql_query($sql);

?>