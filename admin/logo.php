<?php 
// +----------------------------------+
// | Uel：blog.qhyun.cc                |
// +----------------------------------+
// | By: 七鹤云科技  <3137636125@qq.com>   |
// +----------------------------------+
// | Date: 2022年4月11日             |
// +----------------------------------+
include("../includes/common.php");
$title='站点管理';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <div class="container" style="padding-top:100px;">
    <div class="col-sm-12 col-md-10 center-block" style="float: none;">
<?php
$mod=isset($_GET['mod'])?$_GET['mod']:null;
if($mod=='logo'){
echo '<div class="col-lg-12">
<div class="card">
 <div class="card-header bg-primary">
<h4>微信设置</h4></div><div class="panel-body">提示：部分模板不显示微信图片，是正常现象！<br/>';
if($_POST['s']==1){
$extension=explode('.',$_FILES['file']['name']);
if (($length = count($extension)) > 1) {
$ext = strtolower($extension[$length - 1]);
}
copy($_FILES['file']['tmp_name'], ROOT.'images/vx.jpg');
echo "成功上传文件!<br>（可能需要清空浏览器缓存才能看到效果）";
}
if(file_exists(ROOT.'images/vx.jpg')){
	$logo = '../images/vx.jpg';
}else{
	$logo = '../images/vx.jpg';
}
echo '<form action="logo.php?mod=logo" method="POST" enctype="multipart/form-data"><label for="file"></label><input type="file" name="file" id="file" /><input type="hidden" name="s" value="1" /><br><input type="submit" class="btn btn-block btn-success" value="确认上传" /></form><br>现在的图片：<br><img src="'.$logo.'" style="max-width:100%">';
echo '</div></div>';
}elseif($mod=='bj'){
	
echo '<div class="col-lg-12">
<div class="card"> <div class="card-header bg-primary"><h3 class="panel-title">前台背景图</h3></div><div class="panel-body">';
if($_POST['s']==1){
$extension=explode('.',$_FILES['shoukuan']['name']);
if (($length = count($extension)) > 1) {
$ext = strtolower($extension[$length - 1]);
}
copy($_FILES['shoukuan']['tmp_name'], ROOT.'images/bj.png');
echo "成功上传文件!<br>（可能需要清空浏览器缓存才能看到效果）";
}
if(file_exists(ROOT.'images/bj.png')){
	$bj = '../images/bj.png';
}else{
	$bj = '../images/bj.png';
}
echo '<form action="logo.php?mod=bj" method="POST" enctype="multipart/form-data"><label for="file"></label><input type="file" name="shoukuan" id="shoukuan" /><input type="hidden" name="s" value="1" /><br><input type="submit" class="btn btn-block btn-success" value="确认上传" /></form><br>现在的背景图：<br><img src="'.$bj.'" style="max-width:100%">';
echo '
</div></div>';
}?>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="../assets/js/main.min.js"></script>
    </div>
  </div>