<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <title><?php echo $conf['sitename']?> - <?php echo $conf['title']?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
  <link rel="shortcut icon" href="favicon.ico">
</head>
<body onload="javascript:window.alert('<?php echo $conf['gg']?>')" style="padding:12% 5% 5% 5%;background-image:url(<?php echo $conf['bj']?>);">
  <div style="text-align:center;border-width:3px;border-style:solid;border-color:rgb(2, 204, 245);background-color:#79918e6b;border-radius:20px;">
    <p>
      <img style="border-radius:50%;max-width:100px;max-height:100px;" src="http://q1.qlogo.cn/g?b=qq&amp;nk=<?php echo $conf['kfqq']?>&amp;s=160">
    </p>
      <h1 style="color:#fff;"><strong><?php echo $conf['sitename']?></strong></h1>
        <p style="font-size:3vh;color:#fff;"><?php echo $conf['modal']?></p>
        <p style="line-height:3;">
          <?php
$rs=$DB->query("SELECT * FROM web_dh WHERE active=1 order by id desc limit 7");
while($res = $DB->fetch($rs))
{
echo '<a href="'.$res['url'].'" style="padding:7px 30px;color:#fff;text-decoration:none;border-width:2px;border-style:solid;border-color:rgb(2, 204, 245);border-radius:20px;" >&nbsp'.$res['name'].'&nbsp</a>&nbsp&nbsp';
}
        ?>  
        </p>
    <p><script src="https://pv.sohu.com/cityjson?ie=utf-8"></script>
       <span style="color:#bd8787;">你的IP:
         <script>document.write(returnCitySN["cip"])</script>
       </span>
    </p>
<p style="color:#fff;">你的地址:
<script>document.write(returnCitySN["cname"])</script></p>
<div style="text-decoration:none;color:#fff;">ICP备：<a href="http://www.miitbeian.gov.cn/"><?php echo $conf['icp']?></a></div></p>
<div style="text-decoration:none;color:#fff;"> Copyright © 2022<a href="/"><?php echo $conf['sitename']?></a>版权所有</div>
<script type="text/javascript" color="255,255,255" opacity='0.7' zIndex="-2" count="200" src="/assets/js/canvas-nest.min.js"></script>
        </div>
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