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
	<meta name="description" content="" />
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
						<img src="layout/styles/images/backgrounds/kefu.png">客服电话: <strong><mark>69940652</mark></strong>
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
						<li><a class="active" href="index.php">首页</a></li>
						<li><a href="fendianjianjie.php">分店简介</a></li>
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
		
			<!-- slider -->
			<div id="slider">
				<ul>
                <?php 
			$sql="select * from v_banner_fendian";
			$result=mysql_query($sql);
			$i=1;
			while($i<=3){
			$info=mysql_fetch_object($result);
				?>
					<li><a href="fendian_details.php?id1=<?php echo $info->fendian_id;?>">
						<img src="<?php echo $info->pic_fendian_route;?>" alt="" /></a>
						<div class="slider-text">
							<h3><a href="fendian_details.php?id1=<?php echo $info->fendian_id;?>"><?php echo $info->fendian_name;?></a></h3>
							<p><?php echo iconv_substr($info->fendian_details,0,18,'gbk'); ?></p>
						</div>
					</li>
					<?php 
            $i++;
            }
			$sql1="select * from v_banner_jingdian";
			$result1=mysql_query($sql1);
			$i1=1;
			while($i1<=2){
			$info1=mysql_fetch_object($result1);
            ?>
					<li><a href="jingdian_details.php?id2=<?php echo $info1->jingdian_id;?>">
						<img src="<?php echo $info1->pic_jingdian_route;?>" alt=""  width="450" height="300"/></a>
						<div class="slider-text">
							<h3><a href="jingdian_details.php?id2=<?php echo $info1->jingdian_id;?>"><?php echo $info1->jingdian_name;?></a></h3>
							<p><?php echo iconv_substr($info1->jingdian_details,0,18,'gbk'); ?></p>
						</div>
					</li>
                    <?php 
            $i1++;
            }
			?>
				</ul>
			</div>
			<!-- end slider -->
			
			<!-- page-slogan -->
		<!--	<div class="box-page-slogan">
				<div id="slogan-slider-box">
					<ul class="slogan-slider">
						<li>
							<div class="text-top">Beautiful a very clean, responsive theme perfect solution for your business &amp; portfolio website.</div>
							<div class="text-bottom">Look at all the pages and you will love this theme!</div>
						</li>
						<li>
							<div class="text-top">Freedom is life's great lie. Once you accept that, in your heart, you will know peace.</div>
							<div class="text-bottom">Yeah, you say peace. I kinda think you mean the other thing.</div>
						</li>
						<li>
							<div class="text-top">Powerful HTML5 Site Template designed in a clean and minimalistic style.</div>
							<div class="text-bottom">This template fully responsive and easy for customizing.</div>
						</li>
					</ul>
				</div>
			</div>-->
			<!-- end page-slogan -->
			
			<!-- Recent Projects -->
			<div class="full-width sub-title">
				<h3>酒店特惠</h3>
				<div id="recent-navi"></div>
			</div>
			<div class="separator2"></div>
			<div class="recent-box">
				<div class="list_recent_over" id="recent-blog">
				<ul class="list_recent">
                 <?php 
			$sql2="select * from v_middle_fendian";
			$result2=mysql_query($sql2);
			$num=mysql_num_rows($result2);
			$i2=1;
			while($i2<=$num){    
			$info2=mysql_fetch_object($result2);
				?>
					<li>
						<div class="rec_img"> <img src="<?php echo $info2->pic_fendian_route;?>" alt="" /> </div>
						<h5><a href="fendian_details.php?id1=<?php echo $info2->fendian_id;?>">
						<?php echo $info2->fendian_name;?></a></h5>
						<div class="rec_fade_context">
							<div class="rec_fade_context_arrow"></div>
							<p><?php echo iconv_substr($info2->fendian_details,0,30,'gbk'); ?></p>
							</div>
						<div class="rec_category">价格：<?php echo $info2->price;?>起</div>
					</li>
                     <?php 
            $i2++;
            }
			?>
			<!--		<li>
						<div class="rec_img"> <img src="images/recent_projects/recent_project-02.jpg" alt="" /> </div>
						<h5><a href="#">Walking on a dream</a></h5>
						<div class="rec_fade_context">
							<div class="rec_fade_context_arrow"></div>
							<p>Reader will be distracted by the readable content of a page when looking at its layout. The point of using is that it has.</p>
							<a href="images/large/im6.jpg" class="ico_link fancybox"><img src="layout/styles/images/backgrounds/ico/zoom.png" alt="" /></a>
							<a href="#" class="ico_link"><img src="layout/styles/images/backgrounds/ico/details.png" alt="" /></a> </div>
						<div class="rec_category">illustration</div>
					</li>-->					
				</ul>
			</div>
			<div class="hidder-right"></div>
			<div class="hidder-left"></div>
			</div>
			<!-- end Recent Projects -->
            
            <!-- Recent Projects -->
			<div class="full-width sub-title">
				<h3>景点特惠</h3>
				<div id="recent-navi"></div>
			</div>
			<div class="separator2"></div>
			<div class="recent-box">
				<div class="list_recent_over" id="recent-blog">
				<ul class="list_recent">
                 <?php 
			$sql2="select * from v_banner_jingdian";
			$result2=mysql_query($sql2);
			$num=mysql_num_rows($result2);
			$i2=1;
			while($i2<=$num){    
			$info2=mysql_fetch_object($result2);
				?>
					<li>
						<div class="rec_img"> <img src="<?php echo $info2->pic_jingdian_route;?>" alt="" /> </div>
						<h5><a href="jingdian_details.php?id2=<?php echo $info2->jingdian_id;?>">
						<?php echo $info2->jingdian_name;?></a></h5>
						<div class="rec_fade_context">
							<div class="rec_fade_context_arrow"></div>
							<p><?php echo iconv_substr($info2->jingdian_details,0,30,'gbk'); ?></p>
							</div>
						<div class="rec_category">价格：<?php echo $info2->price;?>起</div>
					</li>
                     <?php 
            $i2++;
            }
			?>	
				</ul>
			</div>
			<div class="hidder-right"></div>
			<div class="hidder-left"></div>
			</div>
			<!-- end Recent Projects -->
            
            <!-- Recent Projects -->
			<div class="full-width sub-title">
				<h3>攻略游记</h3>
				<div id="recent-navi"></div>
			</div>
			<div class="separator2"></div>
			<div class="recent-box">
				<div class="list_recent_over" id="recent-blog">
				<ul class="list_recent">
					<?php 
			$sql2="select * from youji";
			$result2=mysql_query($sql2);
			$num=mysql_num_rows($result2);
			$i2=1;
			while($i2<=$num){    
			$info2=mysql_fetch_object($result2);
				?>
					<li>
						<div class="rec_img"> <img src="<?php echo $info2->pic_youji_route;?>" alt="" /> </div>
						<h5><a href="youji_details.php?id4=<?php echo $info2->youji_id;?>">
						<?php echo $info2->youji_title;?></a></h5>
						<div class="rec_fade_context">
							<div class="rec_fade_context_arrow"></div>
							<p><?php echo iconv_substr($info2->youji_details,0,30,'gbk'); ?></p>
							</div>
						<div class="rec_category">时间：<?php echo $info2->time;?></div>
					</li>
                     <?php 
            $i2++;
            }
			?>		
				</ul>
			</div>
			<div class="hidder-right"></div>
			<div class="hidder-left"></div>
			</div>
			<!-- end Recent Projects -->
			
			<!-- Blog, Service, Testemonials -->
		<!--<div class="eight columns">
				<h3 class="sub-title">Recent from the blog</h3>
				<div class="separator9"></div>
			<ul class="recent_blog">
					<li>
						<a href="images/large/im9.jpeg" class="fancybox"><img src="images/recent_blog/recent_blog.jpg" alt="" /><span class="over_bg"></span></a>
						<h5><a href="#">Readable content of a page when randomised. which.</a></h5>
						<div class="details"><a href="#">Bussines</a> by <mark>Josh Dickens</mark> on <span class="time">Mar 27, 2012</span></div>
						<p>Distracted by the readable content of a page when looking at its layout. The point of using is that it has more normal.</p>
					</li>
					<li>
						<a href="images/large/im6.jpg" class="fancybox"><img src="images/recent_blog/recent_blog-02.jpg" alt="" /><span class="over_bg"></span></a>
						<h5><a href="#">Many variations of passages randomised words.</a></h5>
						<div class="details"><a href="#">Web Design</a> by <mark>Roman</mark> on <span class="time">Mar 22, 2012</span></div>
						<p>Variations of passages of Lorem Ipsum available, but the majority suffered alteration in some form, by injected...</p>
					</li>
				</ul>
			</div>-->
		<!--	<div class="four columns service-box">
				<h3 class="sub-title">Our Services</h3>
				<div class="separator10"></div>
				<ul class="service_list">
					<li>
						<h6><a href="#Web" class="toggle-link">Web development</a></h6>
						<div class="sub-text" id="Web">
							Variations of passages of Lorem Ipsum available, but the majority suffered alteration in some form;
						</div>
					</li>
					<li>
						<h6><a href="#SEO" class="toggle-link active">SEO Optimization</a></h6>
						<div class="sub-text" id="SEO">
							Distracted by the readable content of a page when looking at its layout. The point of using Ipsum is that it
						</div>
					</li>
					
				</ul>
			</div>
			<div class="four columns testim-box">
				<h3 class="sub-title">Testimonials <span id="testim_navi"></span></h3>
				<div class="separator9"></div>
				<div id="testimonials">
					<ul>
						<li>
							<p><img src="layout/styles/images/backgrounds/ico/quote.png" alt="" /> There are many variations passages of available, but the majority have suffered alteration in some form,  injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of you need to be sure there isn't anything.</p>
							<div class="info_text"><strong>John</strong>, BusinessMan</div>
						</li>
						<li>
							<p><img src="layout/styles/images/backgrounds/ico/quote.png" alt="" /> There are many variations passages of available, but the majority have suffered alteration in some form,  injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of you need to be sure there isn't anything.</p>
							<div class="info_text"><strong>John</strong>, BusinessMan</div>
						</li>						
					</ul>
				</div>
			</div>
			<div class="clear"></div>-->
			<!-- end Blog, Service, Testemonials -->
			
		</div>
	</div>
	<!-- end content -->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
										 FOOTER
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<?php include("include/footer.php");?>
	<!-- end footer -->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Document -->
</div><!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ JS -->
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
<script type="text/javascript" src="layout/scripts/quicksand/jquery.quicksand.js"></script>
<script type="text/javascript" src="layout/scripts/quicksand/quicksand.js"></script>
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