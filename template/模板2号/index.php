<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
  <link rel="shortcut icon" href="favicon.ico">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="wrapper">
	 <header id="header" class="alt">
		 <nav>
	   	  <a href="#menu">菜单</a>
		 </nav>
	 </header>
	<nav id="menu">
		<ul class="links">
			<li><a href="/">主页</a></li>
						 <?php
$rs=$DB->query("SELECT * FROM web_dh WHERE active=1 order by id desc limit 7");
while($res = $DB->fetch($rs))
{
echo '<li><a href="'.$res['url'].'">'.$res['name'].'</a></li>';
}
        ?> 
		</ul>
		<ul class="actions vertical">
			<li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" class="button fit">在线客服</a></li>
			<li><a href="mailto:<?php echo $conf['kfqq']?>@qq.com" class="button fit">留言邮箱</a></li>
		</ul>
	</nav>
	<section id="banner" class="major">
	    <span class="image">
		 <img src="<?php echo $conf['bj']?>">
		</span>
		<div class="inner">
			<header class="major">
				<h1><?php echo $conf['sitename']?></h1>
			</header>
			<div class="content">
				<p><?php echo $conf['gg']?></p>
					<ul class="actions">
						<li><a href="#one" class="button next scrolly">查看我们的产品</a></li>
					</ul>
			</div>
		</div>
	</section>
	<div id="main">
		<section id="one" class="tiles">
		    <?php
$rs=$DB->query("SELECT * FROM web_dh WHERE active=1 order by id desc limit 7");
while($res = $DB->fetch($rs))
{
echo '<article><span class="image"><img src="http://api.btstu.cn/sjbz/zsy.php" alt="" /></span><header class="major"><h3><a href="'.$res['url'].'" class="link">'.$res['name'].'</a></h3><p>'.$res['url'].'</p> </header></article>';
}
        ?> 
	</div>
	<footer id="footer">
		<div class="inner">
			<ul class="icons">
				<center>
					<li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" class="social fa fa-qq"></a></li>
					<li><a href="https://<?php echo $conf['kfqq']?>.qzone.qq.com/" class="social fa fa-star"></a></li>
				
    <a data-v="" href="#" title="扫一扫加我微信" class="wechat">
	<div data-v="" class="qrCode">
	 <img data-v="" src="/images/vx.jpg" width="92" onClick="window.open(&quot;images/vx.jpg&quot;)">
	  <div data-v="" class="triangle-down"></div>
	</div>
      <i class="social fa fa-weixin"></i>
    </a>

				</center>
			</ul>
			<ul class="copyright">
				<center>
					<li>&copy; ICP备：<a href="http://www.miitbeian.gov.cn/"><?php echo $conf['icp']?></a></li>
					<li>Design: <a href="/"><?php echo $conf['sitename']?></a></li>
				</center>
			</ul>
		</div>
	</footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://yzf.qq.com/xv/web/static/chat_sdk/yzf_chat.min.js"></script>
<script src="https://music.clwl.online/Player/player.min.js" id="SinKingMusic" key="<?php echo $conf['music']?>"></script>
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
	</body>
</html>