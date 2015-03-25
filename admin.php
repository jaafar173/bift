<?php
/**
 * 后台入口文件
 * @jaafar<huangjq173@gmail.com>
 * @date: 2015-3-3
 * @version 0.0.1
 */
define('BIND_MODULE', 'Admin');
//define('BUILD_CONTROLLER_LIST','Index,Base,Blog,Public,Empty');
/**
 * 系统状态配置
 * local   本地开发环境配置
 */
define('APP_STATUS', 'local');

/**
 * 系统调试设置
 * 项目正式部署后请设置为false
 * 会加载调试配置文件 debug.php
 */
if (APP_STATUS === 'online') {
    define('APP_DEBUG', false);
} else {
    define('APP_DEBUG', true);
}

/**
 * 应用目录设置
 * 安全期间，建议安装调试完成后移动到非WEB目录
 */
define('APP_PATH', __DIR__ . '/Application/');

/**
 * 缓存目录设置
 * 此目录必须可写，建议移动到非WEB目录
 */
define('RUNTIME_PATH', __DIR__ . '/Runtime/');

/**
 * 引入核心入口
 * ThinkPHP亦可移动到WEB以外的目录
 */
define('thinkphp_PATH', __DIR__ . '/thinkphp/ThinkPHP/');
require thinkphp_PATH . 'ThinkPHP.php';