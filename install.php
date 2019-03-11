<?php
/*
'软件名称：大香蕉
'开发作者：Gary
'--------------------------------------------------------
'适用本程序需遵循 CC BY-ND 许可协议
'这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
'不允许对程序代码以任何形式任何目的的再发布。
'--------------------------------------------------------
*/
header('Content-Type:text/html;charset=utf-8');
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.6.0','<'))  die('PHP版本过低，最少需要PHP5.6，请升级PHP版本！');

// 定义应用目录
define('ROOT_PATH', __DIR__ . '/');
define('APP_PATH', __DIR__ . '/application/');
define('MAC_COMM', __DIR__.'/application/common/common/');
define('MAC_HOME_COMM', __DIR__.'/application/index/common/');
define('MAC_ADMIN_COMM', __DIR__.'/application/admin/common/');
define('MAC_START_TIME', microtime(true) );
define('IN_FILE',rtrim($_SERVER['SCRIPT_NAME'],'/'));
define('BIND_MODULE', 'install');
// 定义入口
define('ENTRANCE', 'install');

if(is_file('./application/data/install/install.lock')) {
	echo '如需重新安装请删除/application/data/install/install.lock文件';
	exit;
}

if(!is_writable('./runtime')) {
	echo '请开启[runtime]文件夹的读写权限';
	exit;
}

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
