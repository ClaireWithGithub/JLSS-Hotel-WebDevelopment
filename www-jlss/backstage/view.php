<?php
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
mysql_select_db($database);
//������ͼ����ʾ�ֵ�id���ֵ����ƣ�����id���������ƣ��۸�
$sql="create view v_fendian_fangjian
as
select fe.fendian_id,fendian_name,fa.fangjian_id,fangjian_name,price
from fendian fe,fangjian fa,relation_fendian re
where fe.fendian_id=re.fendian_id and fa.fangjian_id=re.fangjian_id";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ�ֵ�id���ֵ����ƣ�����id���������ƣ��ֵ�ͼƬid��ͼƬ·��
$sql="create view v_pic_fendian
as
select fe.fendian_id,fendian_name,fa.fangjian_id,fangjian_name,pic_fendian_id,pic_fendian_route
from fendian fe,fangjian fa,pic_fendian pi
where fe.fendian_id=pi.fendian_id and fa.fangjian_id=pi.fangjian_id";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ�ֵ�id���ֵ����ƣ�ע������id��ע����������
$sql="create view v_attention
as
select fe.fendian_id,fendian_name,a.attention_id,attention_details
from fendian fe,attention a,relation_attention re
where fe.fendian_id=re.fendian_id and a.attention_id=re.attention_id";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ����id���������ƣ��������𣬾������⣬ͼƬid��ͼƬ����
$sql="create view v_jingdian
as
select j.jingdian_id,jingdian_name,jingdian_details,rank,theme,p.pic_jingdian_id,pic_jingdian_route
from jingdian j,pic_jingdian p
where j.jingdian_id=p.jingdian_id";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ֧����ʽid��֧����ʽ���ƣ��ֵ�id���ֵ�����
$sql="create view v_fendian_pay
as
select fe.fendian_id,fendian_name,p.payway_id,payway_name
from fendian fe,payway p,fendian_pay f
where fe.fendian_id=f.fendian_id and f.payway_id=p.payway_id";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ֧����ʽid��֧����ʽ���ƣ�����id����������
$sql="create view v_jingdian_pay
as
select ji.jingdian_id,jingdian_name,p.payway_id,payway_name
from jingdian ji,payway p,jingdian_pay j
where ji.jingdian_id=j.jingdian_id and j.payway_id=p.payway_id";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ�ֵ�id���ֵ����ƣ��ֵ�����飬�ֵ�ͼƬ��·��
$sql="create view v_banner_fendian
as
select fe.fendian_id,fendian_name,fendian_details,min(pic_fendian_route) pic_fendian_route
from fendian fe,pic_fendian pi
where fe.fendian_id=pi.fendian_id
group by fe.fendian_id,fendian_name,fendian_details";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
	
//������ͼ����ʾ����id���������ƣ���������飬����ͼƬ��·�����۸�
$sql="create view v_banner_jingdian
as
select ji.jingdian_id,jingdian_name,jingdian_details,min(pic_jingdian_route) pic_jingdian_route,price
from jingdian ji,pic_jingdian pi
where ji.jingdian_id=pi.jingdian_id
group by ji.jingdian_id,jingdian_name,jingdian_details,price";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ�ֵ�id���ֵ����ƣ��ֵ����ͼ۸񣬷ֵ�ͼƬ��·����ֻѡһ�ŷֵ��ͼƬ�����ֵ�����	
$sql="create view v_middle_fendian
as
select fe.fendian_id,fendian_name,min(price) price,min(pic_fendian_route) pic_fendian_route,fendian_details
from fendian fe,pic_fendian pi,relation_fendian re
where fe.fendian_id=pi.fendian_id and re.fendian_id=pi.fendian_id
group by fe.fendian_id,fendian_name,fendian_details";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
//������ͼ����ʾ����id���������ƣ��������𣬾������⣬������ܣ�����ͼƬ��·��
$sql="create view v_jingdian1
as
select j.jingdian_id,jingdian_name,jingdian_details,rank,theme,min(pic_jingdian_route) pic_jingdian_route
from jingdian j,pic_jingdian p
where j.jingdian_id=p.jingdian_id
group by j.jingdian_id,jingdian_name,jingdian_details,rank,theme";
$bool=mysql_query($sql);
if($bool){
	echo "�����ɹ�";
	}
	else{
		echo "����ʧ��";
		}
?>