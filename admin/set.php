<?php 
// +----------------------------------+
// | Uel：blog.qhyun.cc                |
// +----------------------------------+
// | By: 七鹤云科技  <3137636125@qq.com>   |
// +----------------------------------+
// | Date: 2022年4月11日             |
// +----------------------------------+
include("../includes/common.php");
$title='后台管理';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>

  <div class="container" style="padding-top:90px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
$mod=isset($_GET['mod'])?$_GET['mod']:null;
if($mod=='site_n'){
	$sitename=$_POST['sitename'];
	$title=$_POST['title'];
	$keywords=$_POST['keywords'];
	$description=$_POST['description'];
	$modal=$_POST['modal'];
	$url=$_POST['url'];
	$music=$_POST['music'];
	$kfqq=$_POST['kfqq'];
	$yzf=$_POST['yzf'];
	$icp=$_POST['icp'];
	$pwd=$_POST['pwd'];
	$gg=$_POST['gg'];
	$bj=$_POST['bj'];
	$template=$_POST['template'];
	saveSetting('sitename',$sitename);
	saveSetting('title',$title);
	saveSetting('keywords',$keywords);
	saveSetting('description',$description);
	saveSetting('modal',$modal);
	saveSetting('url',$url);
	saveSetting('music',$music);
	saveSetting('kfqq',$kfqq);
	saveSetting('yzf',$yzf);
	saveSetting('icp',$icp);
	saveSetting('gg',$gg);
	saveSetting('bj',$bj);
	saveSetting('template',$template);
	if(!empty($pwd))saveSetting('admin_pwd',$pwd);
	$ad=$CACHE->clear();
	if($ad)showmsg('修改成功！',1);
	else showmsg('修改失败！<br/>'.$DB->error(),4);
}elseif($mod=='site'){
?>
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4>网站信息配置</h4>	</div>
<div class="panel-body">
  <form action="./set.php?mod=site_n" method="post" class="form-horizontal" role="form">
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站名称</label>
	  <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $conf['sitename']; ?>" class="form-control" required/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">标题栏后缀</label>
	  <div class="col-sm-10"><input type="text" name="title" value="<?php echo $conf['title']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">关键字</label>
	  <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $conf['keywords']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">网站描述</label>
	  <div class="col-sm-10"><input type="text" name="description" value="<?php echo $conf['description']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">导航介绍语</label>
	  <div class="col-sm-10"><input type="text" name="modal" value="<?php echo $conf['modal']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">底部公告</label>
	  <div class="col-sm-10"><input type="text" name="gg" value="<?php echo $conf['gg']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">站长ＱＱ</label>
	  <div class="col-sm-10"><input type="text" name="kfqq" value="<?php echo $conf['kfqq']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">本站URL</label>
	  <div class="col-sm-10"><input type="text" name="url" value="<?php echo $conf['url']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
                    <label class="col-sm-2 control-label">首页背景</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="bj"
                                default="<?php echo $conf['bj']; ?>">
                            <option value="../images/bj.png">系统上传</option>
                            <option value="https://api.vvhan.com/api/view">风景图片</option>
                            <option value="https://i.xinger.ink:4443/images.php">动漫图片</option>
                            <option value="http://api.btstu.cn/sjbz/zsy.php">美女图片</option>
                        </select>
                    </div>
                </div>
                <br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">备案号</label>
	  <div class="col-sm-10"><input type="text" name="icp" value="<?php echo $conf['icp']; ?>" class="form-control"/></div>
	</div><br/>
		<div class="form-group">
	  <label class="col-sm-2 control-label">腾讯云智服</p><a href="http://music.clwl.online/" rel="noreferrer"
                             target="_blank">点击注册</a></label></label>
	  <div class="col-sm-10"><input type="text" name="yzf" value="<?php echo $conf['yzf']; ?>" class="form-control"/></div>
	</div><br/>

	<div class="form-group">
	  <label class="col-sm-2 control-label">播放器key</p><a href="http://music.clwl.online/" rel="noreferrer"
                             target="_blank">点击注册</a></label>
	  
	  <div class="col-sm-10"><input type="text" name="music" value="<?php echo $conf['music']; ?>" class="form-control"/></div>
	</div><br/>
	<div class="form-group">
                            <label class="col-sm-2 control-label">选择模板</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="template" default="<?php echo $conf['template']; ?>">
                                    <?php
                                    $scanPath  = SYSTEM_ROOT . '../template';
                                    $dirHandle = opendir($scanPath);
                                    while (($dirName = readdir($dirHandle)) !== false) {
                                        if ($dirName == '.' || $dirName == '..') continue;
                                        if (is_dir($scanPath . '/' . $dirName))
                                            echo '<option value="' . $dirName . '">' . $dirName . '</option>';
                                    }
                                    closedir($dirHandle);
                                    ?>
                                </select></div>
                                	  	</div><br/>
	<div class="form-group">
	  <label class="col-sm-2 control-label">密码重置</label>
	  <div class="col-sm-10"><input type="text" name="pwd" value="" class="form-control" placeholder="不修改请留空"/></div>
                        </div>
                        <br/>
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
	 </div>
	</div>
  </form>
</div>
            </div>


         
<?php
}

?>
<script>
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default")||0);
}
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="../assets/js/main.min.js"></script>
    </div>
  </div>