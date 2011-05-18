<?php
/**
 * 全局配置文件
 *
 * @category jiuder
 * @package Widget
 * @copyright Copyright (c) 2010 Jiuder.inc (http://www.jiuder.com)
 * @version $Id$
 */
/** 定义根目录 */
error_reporting(E_ALL ^ E_NOTICE);
define('IN_D',1);
define('__Jiuder_ROOT_DIR__', dirname(__FILE__));
/** 定义模板目录(相对路径) */
define('__jiuder_THEME_DIR__', 'usr/themes/');
define('__Jiuder_PLUGIN_DIR__', 'usr/plugins/');

/** 设置包含路径 */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__Jiuder_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__Jiuder_ROOT_DIR__ . __Jiuder_THEME_DIR__);

/**载入数据库类文件*/
require_once 'Widget/Db/class.Mysql.php';
/** 载入模板支持 */
require_once 'inc/template.inc.php';
/**载入全局文件*/
require_once 'inc/core.inc.php';
require_once 'config/global.php';

/**载入类文件*/
require_once 'Widget/Abstract/class.Cookie.php';

require_once 'Widget/Abstract/Snoopy.class.php';
require_once 'Widget/Abstract/class.qq.oauth.php';
require_once 'Widget/Abstract/class.sync.php';
require_once 'Widget/class.Image.php';
require_once 'Widget/class.User.php';
require_once 'Widget/class.video.php';


?>
