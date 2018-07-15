<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
@session_start();
if($_SESSION['name']==""){
?><script type="text/javascript">
alert("非法用户，禁止访问！");
</script>
<!--<meta http-equiv="refresh" content="0;URL=login/b_login.php" />-->
<?php
//exit();
}
?>
<title>景邻山水后台管理系统</title>
<link href="images/metinfo.css" rel="stylesheet" />
</head>
<script type="text/javascript" src="images/jQuery1.7.2.js"></script>
<script type="text/javascript" src="images/cookie.js"></script>
<body id="indexid">
<div id="metcmsbox">
<div id="top"> 
    <div class="floatr">
	  <div class="top-r-box">
		<div class="top-right-boxr">
			<div class="top-r-t">
				您好  <?php echo$_GET[name];?><span>--</span><a target="_top" href="login/b_login.php" id="outhome" title="退出" class='tui'>退出</a><span>
			</div>
	      <div class="langs">

        <div class="langtxt">
			<div class="langkkkbox">
				<div id="langcig">
					<span id="langcion" title="cn">简体中文</span>
				</div>
				<div class="langlist shadow" style="display:none;"></div>
			</div>
		</div>

		  </div>
		</div>
		<div class="nav">
          <ul id="topnav">

            <li id="metnav_7" class="list">
					<a href="javascript:;" id="nav_7" class="onnav" hidefocus="true">
					<span class="c1"></span>
					景点管理
					</a>
			</li>
            <li id="metnav_4" class="list">
            <a href="javascript:;" id="nav_4"  hidefocus="true">
					<span class="c4"></span>
					分店管理
					</a>	
			</li>
            <li id="metnav_1" class="list">
					<a href="javascript:;" id="nav_1"  hidefocus="true">
					<span class="c7"></span>
					权限管理
					</a>
			</li>
            <li id="metnav_5" class="list">
					<a href="javascript:;" id="nav_5"  hidefocus="true">
					<span class="c5"></span>
					线路管理
					</a>
			</li>
          <li id="metnav_6" class="list">
					<a href="javascript:;" id="nav_6"  hidefocus="true">
					<span class="c6"></span>
					支付管理
					</a>
			</li>
          <li id="metnav_3" class="list">
					<a href="javascript:;" id="nav_3"  hidefocus="true">
					<span class="c3"></span>
					其他管理
					</a>
			</li>
<!--              <li id="metnav_2" class="list">
			<a href="javascript:;" id="nav_2"  hidefocus="true">
					<span class="c2"></span>
					界面风格
					</a>		
			</li>
-->
          </ul>
		</div>
	  </div>
    </div>
    <div class="floatl">
	    <a href="#" hidefocus="true" id="met_logo"><img src="images/logoen.gif" alt="景邻山水连锁酒店" title="景邻山水连锁酒店" /></a>
	</div>
</div>
<div id="content">
    <div class="floatl" id="metleft">
        <div class="fast">
        <a href="../frontstage/index.php" id="hthome" title="后台首页">前台首页</a>
			<span></span>
			<a href="index.php" id="hthome" title="后台首页">后台首页</a>
		</div>
	    <div class="nav_list" id="leftnav">

<ul  id="ul_1">
<li ><a href="administrator.php" target='main' id='nav_1_8' class="on" title="管理员" hidefocus="true">管理员</a></li>
</ul>

<!--
<ul style="display:none;" id="ul_2">
<li ><a href="1.html" target='main' id='nav_2_18' title="模板风格" hidefocus="true">模板风格</a></li>
 <li ><a href="1.html" target='main' id='nav_2_19' title="首页设置" hidefocus="true">首页设置</a></li>
 <li ><a href="1.html" target='main' id='nav_2_20' title="列表页设置" hidefocus="true">列表页设置</a></li>
 <li ><a href="1.html" target='main' id='nav_2_21' title="内容页设置" hidefocus="true">内容页设置</a></li>
<li ><a href="1.html" target='main' id='nav_2_22' title="Flash设置" hidefocus="true">Flash设置</a></li>
<li ><a href="1.html" target='main' id='nav_2_23' title="在线交流设置" hidefocus="true">在线交流设置</a></li>
<li ><a href="1.html" target='_blank' id='nav_2_24' title="模板配置说明" hidefocus="true">模板配置说明</a></li>
</ul>-->

<ul style="display:none;" id="ul_3">
<li ><a href="tuozhan.php" target='main' id='nav_3_25' title="拓展活动" hidefocus="true">拓展活动</a></li>
<li ><a href="local.php" target='main' id='nav_3_26' title="礼品特产" hidefocus="true">礼品特产</a></li>
<li ><a href="youji.php" target='main' id='nav_3_27' title="攻略游记" hidefocus="true">攻略游记</a></li>
<li ><a href="intro.php" target='main' id='nav_3_27' title="公司简介" hidefocus="true">公司简介</a></li>

</ul>
<ul style="display:none;" id="ul_4">
<li ><a href="fendian.php" target='main' id='nav_4_29' title="分店表" hidefocus="true">分店表</a></li>
<li ><a href="fangjian.php" target='main' id='nav_4_30' title="房间类别" hidefocus="true">房间类别</a></li>
<li ><a href="relation_fendian.php" target='main' id='nav_4_31' title="分店房间关系" hidefocus="true">分店房间关系</a></li>
<li ><a href="pic_fendian.php" target='main' id='nav_4_32' title="分店图片" hidefocus="true">分店图片</a></li>
<li ><a href="attention.php" target='main' id='nav_4_9' title="注意事项表" hidefocus="true">注意事项表</a></li>
<li ><a href="relation_attention.php" target='main' id='nav_4_9' title="注意事项关系" hidefocus="true">注意事项关系</a></li>
</ul>

<ul style="display:none;" id="ul_5">
<li ><a href="xianlu.php" target='main' id='nav_7_50' title="线路表" hidefocus="true">线路表</a></li>
</ul>

<ul style="display:none;" id="ul_6">
<li ><a href="payway.php" target='main' id='nav_5_34' title="付款方式" hidefocus="true">付款方式</a></li>
<li ><a href="fendian_pay.php" target='main' id='nav_5_35' title="分店支付" hidefocus="true">分店支付</a></li>
<li ><a href="jingdian_pay.php" target='main' id='nav_5_35' title="景点支付" hidefocus="true">景点支付</a></li>
</ul>
<ul style="display:none;" id="ul_7">
<li ><a href="jingdian.php" target='main' id='nav_5_34' title="景点信息" hidefocus="true">景点信息</a></li>
<li ><a href="pic_jingdian.php" target='main' id='nav_5_35' title="景点图片" hidefocus="true">景点图片</a></li>
</ul>

</div>
        
<div class="claer"></div>
<div class="left_footer">感谢使用ROSE NEWS</a><span class="none">Powered by <b><a href=http://www.metinfo.cn target=_blank>ROSE NEWS 5.1.7</a></b> &copy;2008-2013 &nbsp;<a href=http://www.metinfo.cn target=_blank>ROSE NEWS Inc.</a></span></div>
		
	</div>
    <div class="floatr" id="metright">
      <div class="iframe">
	    <div class="min"><iframe frameborder="0" id="main" name="main" src="administrator.php" scrolling="no"></iframe></div>
		</div>
    </div>
	<div class="clear"></div>
	</div>
</div>
<script src="images/metinfo.js" type="text/javascript"></script>

</body>
</html>