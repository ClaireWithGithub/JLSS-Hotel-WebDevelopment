<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<?php 
include("include/parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);
?>

<!-- Beautiful - Responsive HTML5/CSS3 Template by WebVision -->

	<!-- ~~~~~~ META & TITLE ~~~~~~ -->
	<meta charset="gb2312" />
	<title>景邻山水度假连锁酒店</title>
	<meta name="description" content="Beautiful is a responsive, clean, creative, HTML5 / CSS3 template." />
	<meta name="author" content="Roman Polyarush, WebVision" />
	
	<!-- ~~~ MOBILE ~~~ -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- ~~~ HTML5 FOR IE7 & IE8 ~~~  -->

	<!-- ~~~~~~ FAVICONS ~~~~~~ -->
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

	<!-- ~~~~~~ CSS ~~~~~~ -->
	<link rel="stylesheet" href="layout/styles/base.css" />
	<link rel="stylesheet" href="layout/styles/skeleton.css" />
	<link rel="stylesheet" href="layout/styles/layout.css" />
	
		<!-- Fancybox plugin -->
	<link rel="stylesheet" href="layout/scripts/fancybox/styles/jquery.fancybox.css" type="text/css" media="screen" />
    
    <!-- Isotop plugin -->
	<link rel="stylesheet" href="layout/scripts/isotop/isotop.css" type="text/css" media="screen" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="layout/styles/ie7.css" >
	<![endif]-->
	
	
	<link href="layout/styles/fonts.css" rel="stylesheet" type="text/css" />
	
	<!-- ~~~~~~ COLORS ~~~~~~ -->
	<link href="layout/styles/colors.css" rel="stylesheet" type="text/css" />
	
	
		<!-- Modernizr -->
	<script type="text/javascript" src="layout/scripts/lib/modernizr.js"></script>
	
	
	
	<script type="text/javascript" src="layout/scripts/lib/jquery-latest.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /></head>
<body>
<center>
<div class="wrapper">
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ PAGE -->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
											 HEADER
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	
    <header id="header-wrapper">
		<div style="float: right; margin-right: 12px;cursor: pointer;">
			<span style="margin-right: 10px;"><a onclick="AddFavorite(&#39;景邻山水&#39;, &#39;http://www.jlsshotel.com&#39;);" title="收藏本站" herf="javascript:void(0)">收藏本站</a></span>
			<a href="#columnsus" style="margin-right: 10px;text-decoration: none;">联系我们</a>
			<span href="javascript:void(0)" onMouseOut="hideImg()"  onmouseover="showImg()">微信我们</span>
			<div id="wxImg" style="display:none;height:50px;back-ground:#f00;position:absolute;z-index: 320;margin-left: 98px;">
				<img src="layout/styles/images/backgrounds/erweima.jpg" alt="" />
			</div>
		</div>
	
		<!-- top part: sign / registration -->
		
		<!-- middle part: logo / tagline / contact info / menu -->
		<div id="header-middle">
			<div class="container">
				<!-- logo / tagline-->
				<div class="two-thirds column">
					<div class="logo-slogan">
						<div class="logo"><a href="index.php"><img src="layout/styles/images/blue/logo.png" width="500" height="100" alt="" /></a></div>
						<!-- text: <div class="logo font_gautami"><a href="index.html"><img src="layout/styles/images/blue/footer-logo.png" alt="BeautyMind"></a></div> -->
					</div>
				</div>
				<!-- contact info -->
				<div class="one-third column info">
					<div class="phone">
						<img src="layout/styles/images/backgrounds/kefu.png">客服电话: <strong><mark>96940651</mark></strong>
					</div>
					<div >
						<!-- src ->  grey; 
							 data-icon -> colored -->
						<a href="http://weidian.com/?userid=838165702" target="_blank">
                        <img src="layout/styles/images/backgrounds/ico/pay.png" width="156" height="35"alt="微店" /></a>
						</div>
				</div>
			</div>
		</div>
		
	<!-- middle part: logo / tagline / contact info / menu -->
		<div id="header-bottom" class="container">
			<div class="header-bottom-wrapper">
				<div class="twelve columns alpha" id="main-menu-wrapper">
					<ul id="main-menu">
                    <li>
							<a href="#">酒店快捷导航</a>
							<ul>
								<li><a href="beijingfendian.php">北京</a></li>
								<li><a href="hebeifendian.php">河北</a></li>
							</ul>						
						</li>
						<li><a href="index.php">首页</a></li>
						<li><a class="active" href="fendianjianjie.php">分店简介</a></li>
						<li><a href="jingdianmenpiao.php">景点门票</a></li>
                        <li><a href="lvyouxianlu.php">旅游线路</a></li>
						<li><a href="tuozhanhuodong.php">拓展活动</a></li>
						<li><a href="lipintechan.php">礼品特产</a></li>
						<li><a href="gonglueyouji.php">攻略游记</a></li>
					</ul>
					<select id="main-menu-mobile">
						<option value="#" />Navigate to
						<option value="index.html" />&nbsp;-&nbsp;Home
						<option value="slider.html" />&nbsp;-&nbsp;Sliders
						
							<option value="index.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Basic Slider
							<option value="slider.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Creative Slider
							<option value="home.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Photos Slider
						
						<option value="typography.html" />&nbsp;-&nbsp;Features
						
							<option value="typography.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Typography
							<option value="info-boxes.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Elements
								<option value="info-boxes.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;Info Boxes
								<option value="columns.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;Columns
								<option value="tabs.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;Tabs&amp;Toggle
								<option value="pricing.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;Pricing Table	
							<option value="about.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Template Pages
								<option value="about.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;About Us
								<option value="services.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;Services
								<option value="faq.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;FAQ
								<option value="404.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;404 Error Page
							<option value="home.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Alternate Home Layout
						
						<option value="portfolio-2c.html" />&nbsp;-&nbsp;Portfolio
							<option value="portfolio-2c.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Portfolio 2 Columns
							<option value="portfolio-3c.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Portfolio 3 Columns
							<option value="portfolio-4c.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Portfolio 4 Columns
							<option value="portfolio-page.html" />Portfolio Item Page
						<option value="blog.html" />&nbsp;-&nbsp;Blog
							<option value="blog-page.html" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;Single Post		
						<option value="contact.html" />&nbsp;-&nbsp;Contact
					</select>
				</div>
				<!--<div class="four columns omega">
					<form action="#" method="post" class="search_block" />
						<input type="text" value="Search site " onFocus="if(this.value=='Search site ')this.value='';" onBlur="if(this.value=='')this.value='Search site ';" />
						<input type="submit" value="" />
					</form>
				</div>-->
			</div>					
		</div>		
	</header>
	<!-- end header -->
	
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
										 CONTENT
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<div id="content-wrapper">
		<div class="container">
			<!-- crumbs -->
			<div class="whole-width crumbs">
				 <a href="index.php">首页</a>  分店简介
			</div>
		</div>
		<!-- title -->
		<div class="title">
			<div class="left-arr"></div>
			<div class="right-arr"></div>
			<div class="container">
				<div class="columns six alpha title-inner">
					<h1>本季热推</h1>
					<!--<p>This is Beautiful a very clean, responsive theme. </p>-->
				</div>
				<!--<div class="columns ten omega">
					<div class="filtr-block">
						<div class="filtr-text-general">Filter:</div>
						<div class="filtr-categories" id="filter-cats">
							<div class="filtr-categories-container" id="filter-cats-cont">
								<a href="all" class="active"><span>All</span></a>
								<a href="webdesign"><span>Web Design</span></a>
								<a href="photography"><span>Photography</span></a>
								<a href="illustration"><span>Illustration</span></a>
								<a href="video"><span>Video</span></a>
							</div>
						</div>
						<a href="#filter-cats" id="filtr-ico">Hide/Show Filtr</a>
					</div>
				</div>
				<div class="clear"><!-- clear floats </div>
			<div class="clear"></div>-->
			</div>
		</div>
		<!-- /title -->
		
		<div class="container">
			<div class="separator39"></div>
			
			<!-- portfolio [4 columns] -->
			<div class="full-width">
				<div class="portf">
				<ul class="block-filtered-items portfolio-4c">
				 <?php 
			$sql="select * from v_middle_fendian where fendian_name like '%推%'";
			$result=@mysql_query($sql) or die(mysql_error());
			$num=mysql_num_rows($result);
			$i=1;
			while($i<=$num){
			$info=mysql_fetch_object($result);
				?>
					<li class="element photography">
						<div class="portfolio-shadow">
							<a href="fendian_details.php?id1=<?php echo $info->fendian_id;?>" class="">
                            <img src="<?php echo $info->pic_fendian_route;?>" alt="" /> 
                            <span class="over-bg-portfolio"></span></a>
						</div>
						<div class="portfolio-page-link">
                        <a href="fendian_details.php?id1=<?php echo $info->fendian_id;?>">
                        <?php echo $info->fendian_name;?></a></div>
						<div class="rec_category">价格：<?php echo $info->price;?>起</div>
					<?php 
            $i++;
            }
			?>
				</ul><!--000000000000000000000000000000000000000-->
       
			<!-- /portfolio [2 columns] -->
			
		</div>
	</div>
   	</div>
    
    
    <div class="title">
			<div class="left-arr"></div>
			<div class="right-arr"></div>
			<div class="container">
				<div class="columns six alpha title-inner">
					<h1>特惠活动</h1>
					<!--<p>This is Beautiful a very clean, responsive theme. </p>-->
				</div>
                </div>
		</div>
     <div class="container">
			<div class="separator39"></div>
			
			<!-- portfolio [4 columns] -->
			<div class="full-width">
				<div class="portf">
                	<ul class="block-filtered-items portfolio-4c">
				 <?php 
			$sql="select * from v_middle_fendian where fendian_name like '%活动%'";
			$result=@mysql_query($sql) or die(mysql_error());
			$num=mysql_num_rows($result);
			$i=1;
			while($i<=$num){
			$info=mysql_fetch_object($result);
				?>
					<li class="element photography">
						<div class="portfolio-shadow">
							<a href="fendian_details.php?id1=<?php echo $info->fendian_id;?>">
                            <img src="<?php echo $info->pic_fendian_route;?>" alt="" /> 
                            <span class="over-bg-portfolio"></span></a>
						</div>
						<div class="portfolio-page-link">
                        <a href="fendian_details.php?id1=<?php echo $info->fendian_id;?>">
                        <?php echo $info->fendian_name;?></a></div>
						<div class="rec_category">价格：<?php echo $info->price;?>起</div>
					<?php 
            $i++;
            }
			?>
				</ul>
                </div>
            </div>
     </div>
	<!-- end content -->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
										 FOOTER
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<?php include("include/footer.php");?>
	<!-- end footer -->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Document -->
</div>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ JS -->
<!-- ~~~ LIBS ~~~ -->
<script type="text/javascript" src="layout/scripts/lib/jquery-latest.min.js"></script>
<script type="text/javascript" src="layout/scripts/lib/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="layout/scripts/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="layout/scripts/lib/jquery.backgroundPosition.js"></script>
<script type="text/javascript" src="layout/scripts/lib/respond.src.js"></script>
<!-- ~~~ FANCYBOX PLUGIN ~~~ -->
<script type="text/javascript" src="layout/scripts/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="layout/scripts/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script>
<!-- ~~~ Necessary for Sorted ~~~ -->
<script type="text/javascript" src="layout/scripts/lib/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="layout/scripts/isotop/jquery.isotope.min.js"></script>
<script type="text/javascript" src="layout/scripts/isotop/isotop.js"></script>
<!-- ~~~ BEAUTYMIND JS ~~~ -->
<script type="text/javascript" src="layout/scripts/beautymind.js"></script>
<!-- Beautiful - Responsive HTML5/CSS3 Template by WebVision -->

<!-- ~~~~~~ LOAD FONTS ~~~~~~ -->
<link href="http://fonts.googleapis.com/css?family=Dosis:300,600,700,800" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css" />
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</center>
</body>
</html>