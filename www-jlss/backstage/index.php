<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
@session_start();
if($_SESSION['name']==""){
?><script type="text/javascript">
alert("�Ƿ��û�����ֹ���ʣ�");
</script>
<!--<meta http-equiv="refresh" content="0;URL=login/b_login.php" />-->
<?php
//exit();
}
?>
<title>����ɽˮ��̨����ϵͳ</title>
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
				����  <?php echo$_GET[name];?><span>--</span><a target="_top" href="login/b_login.php" id="outhome" title="�˳�" class='tui'>�˳�</a><span>
			</div>
	      <div class="langs">

        <div class="langtxt">
			<div class="langkkkbox">
				<div id="langcig">
					<span id="langcion" title="cn">��������</span>
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
					�������
					</a>
			</li>
            <li id="metnav_4" class="list">
            <a href="javascript:;" id="nav_4"  hidefocus="true">
					<span class="c4"></span>
					�ֵ����
					</a>	
			</li>
            <li id="metnav_1" class="list">
					<a href="javascript:;" id="nav_1"  hidefocus="true">
					<span class="c7"></span>
					Ȩ�޹���
					</a>
			</li>
            <li id="metnav_5" class="list">
					<a href="javascript:;" id="nav_5"  hidefocus="true">
					<span class="c5"></span>
					��·����
					</a>
			</li>
          <li id="metnav_6" class="list">
					<a href="javascript:;" id="nav_6"  hidefocus="true">
					<span class="c6"></span>
					֧������
					</a>
			</li>
          <li id="metnav_3" class="list">
					<a href="javascript:;" id="nav_3"  hidefocus="true">
					<span class="c3"></span>
					��������
					</a>
			</li>
<!--              <li id="metnav_2" class="list">
			<a href="javascript:;" id="nav_2"  hidefocus="true">
					<span class="c2"></span>
					������
					</a>		
			</li>
-->
          </ul>
		</div>
	  </div>
    </div>
    <div class="floatl">
	    <a href="#" hidefocus="true" id="met_logo"><img src="images/logoen.gif" alt="����ɽˮ�����Ƶ�" title="����ɽˮ�����Ƶ�" /></a>
	</div>
</div>
<div id="content">
    <div class="floatl" id="metleft">
        <div class="fast">
        <a href="../frontstage/index.php" id="hthome" title="��̨��ҳ">ǰ̨��ҳ</a>
			<span></span>
			<a href="index.php" id="hthome" title="��̨��ҳ">��̨��ҳ</a>
		</div>
	    <div class="nav_list" id="leftnav">

<ul  id="ul_1">
<li ><a href="administrator.php" target='main' id='nav_1_8' class="on" title="����Ա" hidefocus="true">����Ա</a></li>
</ul>

<!--
<ul style="display:none;" id="ul_2">
<li ><a href="1.html" target='main' id='nav_2_18' title="ģ����" hidefocus="true">ģ����</a></li>
 <li ><a href="1.html" target='main' id='nav_2_19' title="��ҳ����" hidefocus="true">��ҳ����</a></li>
 <li ><a href="1.html" target='main' id='nav_2_20' title="�б�ҳ����" hidefocus="true">�б�ҳ����</a></li>
 <li ><a href="1.html" target='main' id='nav_2_21' title="����ҳ����" hidefocus="true">����ҳ����</a></li>
<li ><a href="1.html" target='main' id='nav_2_22' title="Flash����" hidefocus="true">Flash����</a></li>
<li ><a href="1.html" target='main' id='nav_2_23' title="���߽�������" hidefocus="true">���߽�������</a></li>
<li ><a href="1.html" target='_blank' id='nav_2_24' title="ģ������˵��" hidefocus="true">ģ������˵��</a></li>
</ul>-->

<ul style="display:none;" id="ul_3">
<li ><a href="tuozhan.php" target='main' id='nav_3_25' title="��չ�" hidefocus="true">��չ�</a></li>
<li ><a href="local.php" target='main' id='nav_3_26' title="��Ʒ�ز�" hidefocus="true">��Ʒ�ز�</a></li>
<li ><a href="youji.php" target='main' id='nav_3_27' title="�����μ�" hidefocus="true">�����μ�</a></li>
<li ><a href="intro.php" target='main' id='nav_3_27' title="��˾���" hidefocus="true">��˾���</a></li>

</ul>
<ul style="display:none;" id="ul_4">
<li ><a href="fendian.php" target='main' id='nav_4_29' title="�ֵ��" hidefocus="true">�ֵ��</a></li>
<li ><a href="fangjian.php" target='main' id='nav_4_30' title="�������" hidefocus="true">�������</a></li>
<li ><a href="relation_fendian.php" target='main' id='nav_4_31' title="�ֵ귿���ϵ" hidefocus="true">�ֵ귿���ϵ</a></li>
<li ><a href="pic_fendian.php" target='main' id='nav_4_32' title="�ֵ�ͼƬ" hidefocus="true">�ֵ�ͼƬ</a></li>
<li ><a href="attention.php" target='main' id='nav_4_9' title="ע�������" hidefocus="true">ע�������</a></li>
<li ><a href="relation_attention.php" target='main' id='nav_4_9' title="ע�������ϵ" hidefocus="true">ע�������ϵ</a></li>
</ul>

<ul style="display:none;" id="ul_5">
<li ><a href="xianlu.php" target='main' id='nav_7_50' title="��·��" hidefocus="true">��·��</a></li>
</ul>

<ul style="display:none;" id="ul_6">
<li ><a href="payway.php" target='main' id='nav_5_34' title="���ʽ" hidefocus="true">���ʽ</a></li>
<li ><a href="fendian_pay.php" target='main' id='nav_5_35' title="�ֵ�֧��" hidefocus="true">�ֵ�֧��</a></li>
<li ><a href="jingdian_pay.php" target='main' id='nav_5_35' title="����֧��" hidefocus="true">����֧��</a></li>
</ul>
<ul style="display:none;" id="ul_7">
<li ><a href="jingdian.php" target='main' id='nav_5_34' title="������Ϣ" hidefocus="true">������Ϣ</a></li>
<li ><a href="pic_jingdian.php" target='main' id='nav_5_35' title="����ͼƬ" hidefocus="true">����ͼƬ</a></li>
</ul>

</div>
        
<div class="claer"></div>
<div class="left_footer">��лʹ��ROSE NEWS</a><span class="none">Powered by <b><a href=http://www.metinfo.cn target=_blank>ROSE NEWS 5.1.7</a></b> &copy;2008-2013 &nbsp;<a href=http://www.metinfo.cn target=_blank>ROSE NEWS Inc.</a></span></div>
		
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