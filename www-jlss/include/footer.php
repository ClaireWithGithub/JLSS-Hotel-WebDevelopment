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
					<span>ɨһɨ����ע΢��</span>
					<p class="flogo-text"><img src="layout/styles/images/backgrounds/erweima.jpg" alt="" /></p>
				</div>
				<!-- links -->
				<div class="four columns">
					<h3><a href="jianjie.php">�Ƶ���</a></h3>
					<ul class="latest_blog"><center>
							<!--����ɽˮ���������Ƶ�������޹�˾��У�ѼΣ��������Ļ���չ�ɷ����޹�˾
                            �����ԾƵ�ֱӪ�͹���Ϊ��Ӫҵ�����Ŀ�ӹ�˾��
                            ����ɽˮ�������������Ļ���չ���޹�˾���Ծ�Ӫ�������η�����չ��ѵ�Ž�Ϊ��Ӫҵ��Ĺ�˾��-->
                             <?php 
							 include("parameter.php");
mysql_connect($host,$user,$psw) or die("���ݿ����������ʧ��".mysql_error());
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
					<h3>���ʽ</h3>
					<ul class="list_type2 latest_news">
						<li>
							
							<div class="time"><a id="weidian" href="#">΢�긶��</a></div>
						</li>
						
					</ul>
				</div>

				<script>
					$("#weidian").click(function(){alert("�뵽��ҳ���Ͻǵ�΢��Ԥ��֧��!");});
				</script>
				<!-- info -->
				<div class="four columns" id="columnsus">
					<h3>��ϵ����</h3>
					<div class="separator3"></div>
					<div class="address">
					 <p>�绰: 69940651<br />
                        �绰: 69940652<br />
                        �绰: 69940653<br />
						����: 010-80258239</p>
						<p>�����ʼ�: <a href="mailto:jlss@jlsshotel.com">jlss@jlsshotel.com</a></p>
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
					<p style="float: left;font-size: 10px;">�������ӣ�<a target="_blank" href="http://www.qinglongyuan.com/">��������԰��ׯ</a></p>
				</div>
				<div class="one-third2 column copyrights">
					<p>&copy; Copyright &copy;����ɽˮ�ȼ������Ƶ� All rights reserved.<a target="_blank" href="http://www.jlsshotel.com/index.php"></a></p>
				</div>
			</div>
		</div>
	</footer>