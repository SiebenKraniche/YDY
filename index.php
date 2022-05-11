<?php 
// +----------------------------------+
// | Uel：blog.qhyun.cc                |
// +----------------------------------+
// | By: 七鹤云科技  <3137636125@qq.com>   |
// +----------------------------------+
// | Date: 2022年4月11日             |
// +----------------------------------+
include("./includes/common.php");
include("./includes/txprotect.php");
if(!empty($conf['template']) && $conf['template'] != ""){
    $t = $conf['template'];
}else{
    $t = "default";
}
include 'template/'.$t.'/index.php';
?>