
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=11" id="mixia_vpid">
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/maina.css">
</head>

<body onload="javascript:window.alert('<?php echo $conf['gg']?>')">
    <span class="mobile btn-mobile-menu">
        <i class="fa fa-bars btn-mobile-menu__icon"></i>
        <i class="fa fa-chevron-circle-up btn-mobile-close__icon hidden"></i>
    </span>
  <div class="panel-main">
    <div class="panel-main__inner panel-inverted">
    <div class="panel-main__content">	    
        <a href="/" title=""><img src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $conf['kfqq']?>&amp;s=160" width="150" alt="LOGO" class="panel-cover__logo logo"></a>
	    <h1 class="panel-cover__title panel-title"><?php echo $conf['sitename']?></h1>
        <span class="panel-cover__subtitle panel-subtitle"><script>hitokoto()</script>
        <hr class="panel-cover__divider">
        <p class="panel-cover__description"><?php echo $conf['modal']?></p>
        <hr class="panel-cover__divider"> 
	<p class="footer"><a href="http://www.beian.miit.gov.cn" target="_blank">ICP备：<?php echo $conf['icp']?></a></p>	
        <div class="navigation-wrapper">
          <div>
            <nav class="cover-navigation cover-navigation--primary">
              <ul class="navigation">
                  <?php
$rs=$DB->query("SELECT * FROM web_dh WHERE active=1 order by id desc limit 7");
while($res = $DB->fetch($rs))
{
echo ' <li class="navigation__item"><a href="'.$res['url'].'" target="_blank">'.$res['name'].'</a></li>';
}
        ?>  
              </ul>
            </nav>
          </div>
          
<div>
<nav class="cover-navigation navigation--social">
  <ul class="navigation">
  <!-- QQ -->
  <li class="navigation__item">
    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['kfqq']?>&site=qq&menu=yes" title="@QQ交流" target="_blank">
      <i class="social fa fa-qq"></i>
    </a>
  </li>
  <!-- Weixin -->
  <li class="navigation__item">
    <a data-v="" href="#" title="扫一扫加我微信" class="wechat">
	<div data-v="" class="qrCode">
	 <img data-v="" src="/images/vx.jpg" width="92" onClick="window.open(&quot;images/vx.jpg&quot;)">
	  <div data-v="" class="triangle-down"></div>
	</div>
      <i class="social fa fa-weixin"></i>
    </a>
  </li>
  <!-- Email -->
  <li class="navigation__item">
    <a href="mailto:<?php echo $conf['kfqq']?>@qq.com" title="发邮件给我">
      <i class="social fa fa-envelope"></i>
    </a>
  </li>
  </ul>
</nav>
</div>
        </div>
      </div>
    </div>
    <div class="panel-cover--overlay cover-slate"></div>
  </div>
</header>

<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/main1.js"></script>
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