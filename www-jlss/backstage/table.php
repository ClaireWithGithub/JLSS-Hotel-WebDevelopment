<?php 
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
$bool=mysql_select_db($database);
if($bool){
	$sql='drop database '.$database; //ǧ��Ҫ�ӿո�ע��ϸ�ڣ�
	mysql_query($sql);
}
$sql="create database ".$database;
mysql_query($sql);
mysql_select_db($database);
//mysql_query("set names gb2312");
//�ֵ��
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
//��������
$sql="create table fangjian(
fangjian_id int not null auto_increment primary key,
fangjian_name varchar(20) not null
)";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('���')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('�󴲷�')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('���Է�')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('��ͥ��')";
mysql_query($sql);
$sql="insert into fangjian(fangjian_name) values('�����׷�')";
mysql_query($sql);
//�ֵ귿���ϵ
$sql="create table relation_fendian(
fendian_id int not null,
fangjian_id int not null,
price varchar(20)
)";
mysql_query($sql);
//�ֵ�ͼƬ
$sql="create table pic_fendian(
pic_fendian_id int not null primary key auto_increment,
fendian_id int not null,
fangjian_id int not null,
pic_fendian_route varchar(100)
)";
mysql_query($sql);
//ע�������
$sql="create table attention(
attention_id int not null auto_increment primary key,
attention_details text
)";
mysql_query($sql);
$sql="insert into attention(attention_details) values('����������������ǰ3��Ԥ����')";
mysql_query($sql);
$sql="insert into attention(attention_details) values('������ס��Я����Ч���֤����')";
mysql_query($sql);
//ע�������ϵ��
$sql="create table relation_attention(
fendian_id int not null,
attention_id int not null
)";
mysql_query($sql);

//����
$sql="create table jingdian(
jingdian_id int not null auto_increment primary key,
jingdian_name varchar(50) not null,
price varchar(20),
rank varchar(20),
theme varchar(50),
jingdian_dizhi varchar(50),
jingdian_details text  
)";                  //�۸񣬾����ȼ����������⣬�����ַ��������Ϣ
mysql_query($sql);
//����ͼƬ
$sql="create table pic_jingdian(
pic_jingdian_id int not null auto_increment primary key,
jingdian_id int not null,
pic_jingdian_route varchar(100)
)";
mysql_query($sql);
//������·
$sql="create table xianlu(
xianlu_id int not null auto_increment primary key,
xianlu_title varchar(100),
xianlu_details text,
pic_xianlu_route varchar(100)
)";
mysql_query($sql);
//�����μ�
$sql="create table youji(
youji_id int not null auto_increment primary key,
youji_title varchar(100),
time datetime,
author varchar(20),
youji_details text,
pic_youji_route varchar(100)
)";
$bool=mysql_query($sql);

//֧����ʽ
$sql="create table payway(
payway_id int not null auto_increment primary key,
payway_name varchar(20)
)";
mysql_query($sql);
$sql="insert into payway(payway_name) values('֧����')";
mysql_query($sql);
$sql="insert into payway(payway_name) values('���֧��')";
mysql_query($sql);
$sql="insert into payway(payway_name) values('����֧��')";
mysql_query($sql);
$sql="insert into payway(payway_name) values('΢��֧��')";
mysql_query($sql);
//�ֵ�֧��
$sql="create table fendian_pay(
fendian_id int not null,
payway_id int not null
)";
mysql_query($sql);
//����֧��
$sql="create table jingdian_pay(
jingdian_id int not null,
payway_id int not null
)";
mysql_query($sql);
//��Ʒ�ز�
$sql="create table local(
local_id int not null auto_increment primary key,
local_title varchar(100),
local_details text,
pic_local_route varchar(100)
)";
mysql_query($sql);
//��չ�
$sql="create table tuozhan(
tuozhan_id int not null auto_increment primary key,
pic_tuozhan_route varchar(100)
)";
mysql_query($sql);
//����Ա
$sql="create table administrator(
admin_id int not null auto_increment primary key,
admin_name varchar(20) not null,
admin_psw varchar(20) not null
)";
mysql_query($sql);
$sql="insert into administrator(admin_name,admin_psw) values('admin','jlss')";
mysql_query($sql);
//��˾���
$sql="create table intro(
intro_id int not null auto_increment primary key,
intro_details text,
)";
mysql_query($sql);
$sql="insert into intro(intro_details) 
values('����ɽˮ���������Ƶ�������޹�˾��У�ѼΣ��������Ļ���չ�ɷ����޹�˾ �����ԾƵ�ֱӪ�͹���Ϊ��Ӫҵ�����Ŀ�ӹ�˾�� 
����ɽˮ�������������Ļ���չ���޹�˾���Ծ�Ӫ�������η�����չ��ѵ�Ž�Ϊ��Ӫҵ��Ĺ�˾��')";
mysql_query($sql);

?>