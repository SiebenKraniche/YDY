<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
    <meta name="keywords" content="<?php echo $conf['keywords']?>">
    <meta name="description" content="<?php echo $conf['description']?>">
    <link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="/assets/css/swiper.min.css">
	<link rel="stylesheet" href="/assets/css/animate.compat.css" />
	<script src="/assets/js/swiper.min.js"></script>
	<script src="/assets/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}

		HTML,
		body,
		div,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		ul,
		ol,
		dl,
		li,
		dt,
		dd,
		p,
		blockquote,
		pre,
		form,
		fieldset,
		table,
		th,
		td {
			border: none;
			font-family: "微软雅黑", "黑体", "宋体";
			font-size: 14px;
			margin: 0px;
			padding: 0px;
		}

		html,
		body {
			height: 100%;
			width: 100%;
		}

		address,
		caption,
		cite,
		code,
		dfn,
		em,
		strong,
		th,
		var {
			font-style: normal;
			font-weight: normal;
		}

		a {
			text-decoration: none;
		}

		a:link {
			color: #fff;
		}

		a:visited {
			color: #fff;
		}

		a:hover {
			color: #fff;
		}

		a:active {
			color: #fff;
		}

		input::-ms-clear {
			display: none;
		}

		input::-ms-reveal {
			display: none;
		}

		input {
			-webkit-appearance: none;
			margin: 0;
			outline: none;
			padding: 0;
		}

		input::-webkit-input-placeholder {
			color: #ccc;
		}

		input::-ms-input-placeholder {
			color: #ccc;
		}

		input::-moz-placeholder {
			color: #ccc;
		}

		input[type=submit],
		input[type=button] {
			cursor: pointer;
		}

		button[disabled],
		input[disabled] {
			cursor: default;
		}

		img {
			border: none;
		}

		ul,
		ol,
		li {
			list-style-type: none;
		}

		/*公共方法*/
		.clear {
			clear: both;
		}

		.clearleft {
			clear: left;
		}

		.clearright {
			clear: right;
		}

		.floatleft {
			float: left;
		}

		.floatright {
			float: right;
		}

		.cursor {
			cursor: pointer;
		}

		/*背景及色值表*/
		.bg000 {
			background: #000;
		}

		.color000 {
			color: #000;
		}

		body {
			background-image: linear-gradient(to left, rgba(255, 0, 149, 0.2), rgba(0, 247, 255, 0.2)), url(#);
			/*background: #81a779;*/
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

		#box {
			width: 100%;
			min-height: calc(100% - 160px);
			margin: 0 auto;
			padding-top: 90px;
		}

		#footer {
			width: 100%;
			height: 50px;
			color: #000;
			text-align: center;
			font-size: 16px;
		}

		#footer a {
			color: #000000;
		}

		#boox {
			width: 450px;
			margin: 0 auto;
			margin-bottom: 20px;
			text-align: center;
			border-radius: 2%;
			background: white;
		}

		.touxiang {
			width: 150px;
			height: 150px;
			margin-top: -50px;
			border-radius: 100%;
		}

		.title {
			width: 75%;
			height: 55px;
			font-size: 25px;
			line-height: 55px;
			margin: 0 auto;
			font-weight: bold;
			margin-top: 5px;
			border-bottom: 3px solid #3192d2;
		}

		.lizhi {
			font-size: 15px;
			margin-top: 5px;
		}

		.titma {
			font-size: 16px;
			padding: 10px 0px;
		}

		/*看板娘*/
		#kbn {
			position: fixed;
			bottom: 0px;
			width: 290px;
			right: 0px;
			z-index: 999;
		}

		@media screen and (max-width: 700px) {
			#box {}

			#boox {
				width: 75%;
			}

			.touxiang {
				width: 100px;
				height: 100px;
			}

			.title {
				height: 40px;
				line-height: 40px;
				margin-top: 0px;
				font-size: 18px;
			}

			.lizhi {
				font-size: 14px;
			}

			#kbn {
				width: 90px;
				right: -20px;
			}
		}


		@media screen and (max-width: 320px) {
			.titma {
				font-size: 15px;
			}
		}

		#player .cover {
			height: 50px !important;
			width: 50px !important;
			margin-top: 5px;
			margin-left: 5px;
		}
	</style>
	
	<!--轮播css-->
	<style type="text/css">
		@charset "utf-8";
	
		#certify {
			position: relative;
			width: 100%;
			margin: 0 auto;
			margin-top: 30px;
		}
	
		#certify .swiper-container {
			padding-bottom: 50px;
			width: 85%;
		}
	
		#certify .swiper-slide {
			width: 90%;
			height: auto;
			background: #fff;
			border-radius: 2%;
			overflow: hidden;
			box-shadow: 0 8px 30px #ddd;
		}
	
		#certify .swiper-slide img {
			display: block;
			width: 100%;
		}
	
		#certify .swiper-slide p {
			line-height: 98px;
			padding-top: 0;
			text-align: center;
			color: #636363;
			font-size: 1.1em;
			margin: 0;
		}
	
		#certify .swiper-pagination {
			width: 100%;
			bottom: 20px;
		}
	
		#certify .swiper-pagination-bullets .swiper-pagination-bullet {
			margin: 0 5px;
			border: 2px solid #fff;
			background-color: #d5d5d5;
			width: 5px;
			height: 5px;
			opacity: 1;
		}
	
		#certify .swiper-pagination-bullets .swiper-pagination-bullet-active {
			border: 3px solid #00aadc;
			background-color: #fff;
		}
	
		#certify .swiper-button-prev {
			left: -30px;
			width: 45px;
			height: 45px;
			background: url(http://www.jq22.com/demo/swiperlbt201810230049/images/wm_button_icon.png) no-repeat;
			background-position: 0 0;
			background-size: 100%;
		}
	
		#certify .swiper-button-prev:hover {
			background-position: 0 -46px;
			background-size: 100%;
		}
	
		#certify .swiper-button-next {
			right: -30px;
			width: 45px;
			height: 45px;
			background: url(http://www.jq22.com/demo/swiperlbt201810230049/images/wm_button_icon.png) no-repeat;
			background-position: 0 -93px;
			background-size: 100%;
		}
	
		#certify .swiper-button-next:hover {
			background-position: 0 -139px;
			background-size: 100%;
		}
	
		#QPlayer {
			z-index: 999999;
		}
	
		@media screen and (min-width: 700px) {
			#certify {
				width: 900px;
			}
	
			#certify .swiper-slide {
				width: 80%;
			}
		}
	</style>
<body>
	<div id="box">
		<div id="boox" class="animated swing">
			<img class="touxiang" src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $conf['kfqq']?>&amp;s=160">
			<p class="title animated bounceInLeft"><?php echo $conf['sitename']?></p>
			<p class="lizhi"><?php echo $conf['modal']?></p>
			<p class="titma animated"><span id="span">本站已运行: 00天0小时00分00秒</span></p>
		</div>
		<div id="certify">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					    <?php
$rs=$DB->query("SELECT * FROM web_dh WHERE active=1 order by id desc limit 7");
while($res = $DB->fetch($rs))
{
echo '<div class="swiper-slide"><a href="'.$res['url'].'"><img src="https://cdn.seovx.com/ha/?mom=302" /><p>'.$res['name'].'</p></a></div>';
}
        ?>  
				</div>
			</div>
			    <div class="swiper-pagination"></div>
		</div>
			<script>
				var certifySwiper = new Swiper('#certify .swiper-container', {
					watchSlidesProgress: true,
					slidesPerView: 'auto',
					centeredSlides: true,
					loop: true,
					autoplay: true,
					loopedSlides: 5,
					autoplay: true,
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},
					pagination: {
						el: '.swiper-pagination',
						//clickable :true,
					},
					on: {
						progress: function(progress) {
							for (i = 0; i < this.slides.length; i++) {
								var slide = this.slides.eq(i);
								var slideProgress = this.slides[i].progress;
								modify = 1;
								if (Math.abs(slideProgress) > 1) {
									modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
								}
								translate = slideProgress * modify * 260 + 'px';
								scale = 1 - Math.abs(slideProgress) / 5;
								zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
								slide.transform('translateX(' + translate + ') scale(' + scale + ')');
								slide.css('zIndex', zIndex);
								slide.css('opacity', 1);
								if (Math.abs(slideProgress) > 3) {
									slide.css('opacity', 0);
								}
							}
						},
						setTransition: function(transition) {
							for (var i = 0; i < this.slides.length; i++) {
								var slide = this.slides.eq(i)
								slide.transition(transition);
							}

						}
					}

				})
			</script>
		</div>
		<div id="footer">
			<p>© 2020 <?php echo $conf['url']?> | <a href="http://beian.miit.gov.cn"><?php echo $conf['icp']?></a></p>
			<p><?php echo $conf['sitename']?></p>
		</div>
		<img id="kbn" class="animated bounceInRight" src="/images/kbn.png">
		<div style="height:100%; width:100%;display: none;">花瓣飘落</div>
		<script src="/assets/js/snowfall.jquery.js"></script>
		<script>
			$(document).snowfall('clear');
			$(document).snowfall({
				image: "https://pic.kuaizhan.com/g3/c3/9b/3f72-60cf-4d91-8500-4f193c67c59205",
				flakeCount: 10,
				minSize: 5,
				maxSize: 22
			});
		</script>
	</body>
	<script src="/assets/js/jquery.marquee.min.js"></script>
	<script type="text/javascript">
		runtime();
		function runtime() {
			// 初始时间，月/日/年 时:分:秒
			X = new Date("04/1/2022 24:00:00");
			Y = new Date();
			T = (Y.getTime() - X.getTime());
			M = 24 * 60 * 60 * 1000;
			a = T / M;
			A = Math.floor(a);
			b = (a - A) * 24;
			B = Math.floor(b);
			c = (b - B) * 60;
			C = Math.floor((b - B) * 60);
			D = Math.floor((c - C) * 60);
			//信息写入到DIV中
			span.innerHTML = "本站已运行: " + A + "天" + B + "小时" + C + "分" + D + "秒"
		}
		setInterval(runtime, 1000);
	</script>
<script>
    window.yzf && window.yzf.init({
      sign: '<?php echo $conf['yzf']?>',
      uid: '1',
      data: {
        c1: '',
        c2: '',
        c3: '',
        c4: '',
        c5: ''
      },
      selector: '',
      callback: function(type, data){}
    })
    //window.yzf.close() 关闭1已打开的回话窗口
</script>
<!--自适应-->
<script>
$("#if-gg")['append']('<iframe style="width:0px;height:0px;" frameborder="no" border="0"  src="//www.w3cschool.cn"></iframe>');
</script>

</html>
