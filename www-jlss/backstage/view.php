<?php
include("../include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
//创建视图，显示分店id，分店名称，房间id，房间名称，价格
$sql="create view v_fendian_fangjian
as
select fe.fendian_id,fendian_name,fa.fangjian_id,fangjian_name,price
from fendian fe,fangjian fa,relation_fendian re
where fe.fendian_id=re.fendian_id and fa.fangjian_id=re.fangjian_id";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示分店id，分店名称，房间id，房间名称，分店图片id，图片路径
$sql="create view v_pic_fendian
as
select fe.fendian_id,fendian_name,fa.fangjian_id,fangjian_name,pic_fendian_id,pic_fendian_route
from fendian fe,fangjian fa,pic_fendian pi
where fe.fendian_id=pi.fendian_id and fa.fangjian_id=pi.fangjian_id";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示分店id，分店名称，注意事项id，注意事项名称
$sql="create view v_attention
as
select fe.fendian_id,fendian_name,a.attention_id,attention_details
from fendian fe,attention a,relation_attention re
where fe.fendian_id=re.fendian_id and a.attention_id=re.attention_id";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示景点id，景点名称，景区级别，景区主题，图片id，图片名称
$sql="create view v_jingdian
as
select j.jingdian_id,jingdian_name,jingdian_details,rank,theme,p.pic_jingdian_id,pic_jingdian_route
from jingdian j,pic_jingdian p
where j.jingdian_id=p.jingdian_id";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示支付方式id，支付方式名称，分店id，分店名称
$sql="create view v_fendian_pay
as
select fe.fendian_id,fendian_name,p.payway_id,payway_name
from fendian fe,payway p,fendian_pay f
where fe.fendian_id=f.fendian_id and f.payway_id=p.payway_id";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示支付方式id，支付方式名称，景点id，景点名称
$sql="create view v_jingdian_pay
as
select ji.jingdian_id,jingdian_name,p.payway_id,payway_name
from jingdian ji,payway p,jingdian_pay j
where ji.jingdian_id=j.jingdian_id and j.payway_id=p.payway_id";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示分店id，分店名称，分店的详情，分店图片的路径
$sql="create view v_banner_fendian
as
select fe.fendian_id,fendian_name,fendian_details,min(pic_fendian_route) pic_fendian_route
from fendian fe,pic_fendian pi
where fe.fendian_id=pi.fendian_id
group by fe.fendian_id,fendian_name,fendian_details";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
	
//创建视图，显示景点id，景点名称，景点的详情，景点图片的路径，价格
$sql="create view v_banner_jingdian
as
select ji.jingdian_id,jingdian_name,jingdian_details,min(pic_jingdian_route) pic_jingdian_route,price
from jingdian ji,pic_jingdian pi
where ji.jingdian_id=pi.jingdian_id
group by ji.jingdian_id,jingdian_name,jingdian_details,price";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示分店id，分店名称，分店的最低价格，分店图片的路径（只选一张分店的图片），分店详情	
$sql="create view v_middle_fendian
as
select fe.fendian_id,fendian_name,min(price) price,min(pic_fendian_route) pic_fendian_route,fendian_details
from fendian fe,pic_fendian pi,relation_fendian re
where fe.fendian_id=pi.fendian_id and re.fendian_id=pi.fendian_id
group by fe.fendian_id,fendian_name,fendian_details";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
//创建视图，显示景点id，景点名称，景区级别，景区主题，景点介绍，景点图片的路径
$sql="create view v_jingdian1
as
select j.jingdian_id,jingdian_name,jingdian_details,rank,theme,min(pic_jingdian_route) pic_jingdian_route
from jingdian j,pic_jingdian p
where j.jingdian_id=p.jingdian_id
group by j.jingdian_id,jingdian_name,jingdian_details,rank,theme";
$bool=mysql_query($sql);
if($bool){
	echo "创建成功";
	}
	else{
		echo "创建失败";
		}
?>