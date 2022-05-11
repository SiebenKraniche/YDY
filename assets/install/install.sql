DROP TABLE IF EXISTS `web_config`;
create table `web_config` (
`k` varchar(32) NOT NULL,
`v` text NULL,
PRIMARY KEY  (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `web_config` VALUES ('cache', '');
INSERT INTO `web_config` VALUES ('version', '1025');
INSERT INTO `web_config` VALUES ('admin_user', 'admin');
INSERT INTO `web_config` VALUES ('admin_pwd', '123456');
INSERT INTO `web_config` VALUES ('style', '1');
INSERT INTO `web_config` VALUES ('sitename', '七鹤引导页导航系统');
INSERT INTO `web_config` VALUES ('title', '专业的开源导航系统');
INSERT INTO `web_config` VALUES ('keywords', '七鹤导航系统');
INSERT INTO `web_config` VALUES ('description', '专业网站导航系统查找站点点击出发！');
INSERT INTO `web_config` VALUES ('anounce', '');
INSERT INTO `web_config` VALUES ('kfqq', '3137636125');
INSERT INTO `web_config` VALUES ('yzf', '');
INSERT INTO `web_config` VALUES ('icp', '闽ICP备66666666666号');
INSERT INTO `web_config` VALUES ('modal', '最新引导导航页+音乐+留言+后台+多模板源码');
INSERT INTO `web_config` VALUES ('gg', '欢迎来到本网站，有任何问题请与我们联系。');
INSERT INTO `web_config` VALUES ('music', '127');
INSERT INTO `web_config` VALUES ('url', 'blog.qhyun.cc');
INSERT INTO `web_config` VALUES ('bottom', '');
INSERT INTO `web_config` VALUES ('bj', 'http://api.btstu.cn/sjbz/zsy.php');
INSERT INTO `web_config` VALUES ('template', '模板4号');

DROP TABLE IF EXISTS `web_dh`;
create table `web_dh` (
`id` int(1) NOT NULL AUTO_INCREMENT,
`url` varchar(255) NULL,
`name` text NULL,
`active` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
