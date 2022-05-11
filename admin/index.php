<?php 
// +----------------------------------+
// | Uel：blog.qhyun.cc                |
// +----------------------------------+
// | By: 七鹤云科技  <3137636125@qq.com>   |
// +----------------------------------+
// | Date: 2022年4月11日             |
// +----------------------------------+
include("../includes/common.php");
$title='管理中心';
include './head.php';
?>
<?php
$count1=$DB->count("SELECT count(*) from web_dh");
$count2=$DB->count("SELECT count(*) from web_dh where active=1");
$mysqlversion=$DB->count("select VERSION()");
?>
<main class="lyear-layout-content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<link rel="shortcut icon" href="favicon.ico">
<h4>用户资料</h4>
 <ul class="card-actions"><li><span>当前时间：<?=$date?></span> </li></ul>
</div>
<div class="card-body">
<a href="javascript:void(0)" class="widget">
<div class="widget-content text-center">
<img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['kfqq']?>&amp;spec=100" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
<h2 class="widget-heading h3 text-muted"></h2>
</div>
<div class="widget-content themed-background-muted text-dark text-center">
</div>
<div class="widget-content">
<div class="row text-center">
<div class="col-xs-6">
    <h3 class="widget-heading"><i class="fa fa-plus-square text-primary"></i> <br><small>导航按钮总数</br><font><span class='label label-info'><?php echo $count1?>/个</span></font></small></h3>
</div>
<div class="col-xs-6">
    <h3 class="widget-heading"><i class="fa fa-vimeo-square text-primary"></i><br><small>已显示总数</br><font STYLE='color:green;'><span class='label label-warning'><?php echo $count2?>/个</span></font></small></h3>
</div>
</div>
</div></div></div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4>服务器信息</h4>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<b>PHP 版本：</b><?php echo phpversion() ?>
			<?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>
		</li>
		<li class="list-group-item">
			<b>MySQL 版本：</b><?php echo $mysqlversion ?>
		</li>
		<li class="list-group-item">
			<b>服务器软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
		</li>
		<li class="list-group-item">
			<b>系统名称：</b>七鹤导航系统
		</li>
		<li class="list-group-item">
			<b>版本信息：</b>V 1.3
	    </li>
		<li class="list-group-item">
			<b><a href="https://blog.qhyun.cc/193.html">点我检查更新</a></b>
		</li>
	</ul>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="../assets/js/main.min.js"></script>
</body>
</html>