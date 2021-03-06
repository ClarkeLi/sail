<?php
/**
 * 主引导类
 * @author limingyou
 * @since 2014-06-06
 */

class Sail {
    //扩展名
    const CONF_EXT = '.conf.php';
    const ROUTES_EXT = '.routes.php';

    //框架参数
    private static $_PARAMS = array();

    //当前页面url
    private static $url = '';

    /**
     * 引导程序
     */
    public static function run() {
        require FRAMEWORK_PATH . 'core/BaseException.class.php';
        try {
            self::appInit();
            $cParams = Router::getParams();
            self::$_PARAMS = $cParams;
            //print_r($cParams);
            //print_r(Router::getRoutes());

            Dispather::run($cParams);
        }catch( BaseException $e) {
            echo $e->errMsg();
        }catch( Exception $e ) {
            echo $e->getMessage();
        }
    }

    /**
     * 初始化项目
     */
    public static function appInit() {
        $appConfFile = APP_CONF_PATH . APP_NAME . self::CONF_EXT;
        if( !file_exists($appConfFile) ) {
            throw new BaseException('没有找到' . $appConfFile . ' 项目配置文件');
        }
        $routeConfFile = ROUTE_PATH . APP_NAME . self::ROUTES_EXT;
        if( !file_exists($routeConfFile) ) {
            throw new BaseException('没有找到' . $routeConfFile . ' 路由配置文件');
        }
        require $appConfFile;
        require FRAMEWORK_PATH . 'util/common/Autoload.class.php';
        require $routeConfFile;
    }

    /**
     * @desc 获得当前controller名
     */
    public static function getController() {
        return self::$_PARAMS['controller'];
    }

    /**
     * @desc 获得当前action名
     */
    public static function getAction() {
        return self::$_PARAMS['action'];
    }

    /**
     * @desc 获得当前框架相关变量数组
     */
    public static function getParams() {
        return self::$_PARAMS;
    }
}
