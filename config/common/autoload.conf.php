<?php
/**********
	功能：自动加载配置文件
	作者：limingyou
	日期：2012-06-01
**********/

return array(
    //核心库
	'Sail'              => FRAMEWORK_PATH . 'core/Sail.class.php',
	'Router'            => FRAMEWORK_PATH . 'core/Router.class.php',
	'Dispather'         => FRAMEWORK_PATH . 'core/Dispather.class.php',
	'BaseException'     => FRAMEWORK_PATH . 'core/BaseException.class.php',
	'Controller'        => FRAMEWORK_PATH . 'core/Controller.class.php',
	'View'              => FRAMEWORK_PATH . 'core/View.class.php',

    //框架下自动加载
	'Pinyin'            => FRAMEWORK_PATH . 'util/common/Pinyin.class.php',
	'Ip'                => FRAMEWORK_PATH . 'util/common/Ip.class.php',
	'Session'           => FRAMEWORK_PATH . 'util/common/Session.class.php',
	'Util'              => FRAMEWORK_PATH . 'util/common/Util.class.php',
	'Helper'            => FRAMEWORK_PATH . 'util/common/Helper.class.php',

	'Http'              => FRAMEWORK_PATH . 'util/http/Http.class.php',
	'Request'           => FRAMEWORK_PATH . 'util/http/Request.class.php',


);

