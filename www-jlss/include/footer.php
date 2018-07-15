<footer id="footer-wrapper">
		<!-- top part [tweeter] -->
		<div id="footer-top">
			<div class="footer-tweet-left"></div>
			<div class="footer-tweet-right"></div>
			
			<div class="container">
				<script type="text/javascript">
					// ('YOUR USERNAME','NUMBER OF POSTS');
					AddTweet('Web_Visions',1);
				</script>
			</div>
		</div>
		<!-- middle part -->
		<div id="footer-middle">
			<div class="container">
				<!-- logo & some text -->
				<div class="four columns" >
					<h3 class="logo font_gautami"><a href="index.php"><img src="layout/styles/images/blue/logo.jpg" alt="" /></a></h3>
					<span>扫一扫，关注微信</span>
					<p class="flogo-text"><img src="layout/styles/images/backgrounds/erweima.jpg" alt="" /></p>
				</div>
				<!-- links -->
				<div class="four columns">
					<h3><a href="jianjie.php">酒店简介</a></h3>
					<ul class="latest_blog"><center>
							<!--景邻山水（北京）酒店管理有限公司是校友嘉（北京）文化发展股份有限公司
                            旗下以酒店直营和管理为主营业务的项目子公司。
                            景邻山水（北京）旅游文化发展有限公司是以经营会议旅游服务、拓展培训团建为主营业务的公司。-->
                             <?php 
							 include("parameter.php");
mysql_connect($host,$user,$psw) or die("数据库服务器连接失败".mysql_error());
mysql_select_db($database);

			$sql="select * from intro ";
			$result=@mysql_query($sql) or die(mysql_error());
			$num=mysql_num_rows($result);
			
			$info=mysql_fetch_object($result);
			echo $info->intro_details;
		
				?>
					</center></ul>
				</div>
				<!-- news -->
				<div class="four columns">
					<h3>付款方式</h3>
					<ul class="list_type2 latest_news">
						<li>
							
							<div class="time"><a id="weidian" href="#">微店付款</a></div>
						</li>
						
					</ul>
				</div>

				<script>
					$("#weidian").click(function(){alert("请到网页右上角点微店预定支付!");});
				</script>
				<!-- info -->
				<div class="four columns" id="columnsus">
					<h3>联系我们</h3>
					<div class="separator3"></div>
					<div class="address">
					 <p>电话: 69940651<br />
                        电话: 69940652<br />
                        电话: 69940653<br />
						传真: 010-80258239</p>
						<p>电子邮件: <a href="mailto:jlss@jlsshotel.com">jlss@jlsshotel.com</a></p>
					</div>
					<div class="social_links">
						<!-- src ->  grey; 
							 data-icon -> colored
						<a href="#"><img src="layout/styles/images/backgrounds/ico/ico.png" data-icon="layout/styles/images/blue/ico.png" alt="twitter" /></a>
						<a href="#"><img src="layout/styles/images/backgrounds/ico/ico-02.png" data-icon="layout/styles/images/blue/ico-02.png" alt="facebook" /></a>
						<a href="#"><img src="layout/styles/images/backgrounds/ico/ico-03.png" data-icon="layout/styles/images/blue/ico-03.png" alt="StubleUpon" /></a>
						<a href="#"><img src="layout/styles/images/backgrounds/ico/ico-04.png" data-icon="layout/styles/images/blue/ico-04.png" alt="digg" /></a>
						<a href="#"><img src="layout/styles/images/backgrounds/ico/ico-05.png" data-icon="layout/styles/images/blue/ico-05.png" alt="vimeo" /></a>
						<a href="#"><img src="layout/styles/images/backgrounds/ico/ico-06.png" data-icon="layout/styles/images/blue/ico-06.png" alt="youtube" /></a>
					 --></div>
				</div>
			</div>
			
			<!-- to top -->
			<a href="#top" class="backtop" title="Page Up"><!-- Upper --></a>
		</div>
		<!-- bottom part --> 
		<div id="footer-bottom">
			<div id="footer-bottom-arr"></div>
			<div class="container">
				<!-- menu 
				<div class="two-thirds column">
					<ul id="footer-menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="slider.html">Sliders</a></li>
						<li><a href="typography.html">Features</a></li>
						<li><a href="portfolio-2c.html">Portfolio</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>-->
				<!-- copyrights -->
				<div class="onethird3">
					<p style="float: left;font-size: 10px;">友情链接：<a target="_blank" href="http://www.qinglongyuan.com/">北京青龙园饭庄</a></p>
				</div>
				<div class="one-third2 column copyrights">
					<p>&copy; Copyright &copy;景邻山水度假连锁酒店 All rights reserved.<a target="_blank" href="http://www.jlsshotel.com/index.php"></a></p>
				</div>
			</div>
		</div>
	</footer>