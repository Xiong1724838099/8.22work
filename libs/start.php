<?php
header("content-type:text/html;charset=utf8");

if(!defined("MVC")){
    die("路径不合法");
};
//服务器所在的根路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
//入口文件的路径
define("ENTER_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);
//框架所在的路径
define("MAIN_PATH",dirname(ENTER_PATH).DIRECTORY_SEPARATOR);
//核心库所在的路经
define("LIBS_PATH",MAIN_PATH."libs".DIRECTORY_SEPARATOR);
//插件所在路径
define("PLU_PATH",MAIN_PATH."plugins".DIRECTORY_SEPARATOR);
//模板所在的路径
define("TPL_PATH",APP_NAME."template".DIRECTORY_SEPARATOR);
//编译文件所在的目录
define("COMPILE_PATH",APP_NAME."compile".DIRECTORY_SEPARATOR);
//缓存文件所在的目录
define("CACHE_PATH",APP_NAME."cache".DIRECTORY_SEPARATOR);

//定义smarty的路径
define("SMARTY_PATH",LIBS_PATH."smarty".DIRECTORY_SEPARATOR);
//定义字体的路径
define("FONT_PATH",APP_NAME."static/font/");

//以上定义的就是各种文件所在的本地的路径

//以下定义通过http协议访问的路径
define("HOST_ADD","http://".$_SERVER["HTTP_HOST"]);
//单入口文件地址
define("ENTER_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);
//框架入口地址
define("MAIN_ADD",dirname(HOST_ADD.$_SERVER["SCRIPT_NAME"]).DIRECTORY_SEPARATOR);
//当前应用的地址
define("APP_ADD",MAIN_ADD.APP_DIR_NAME.DIRECTORY_SEPARATOR);


//静态文件的地址
define("STATIC_ADD",APP_ADD."static".DIRECTORY_SEPARATOR);
//css地址
define("CSS_ADD",STATIC_ADD."css".DIRECTORY_SEPARATOR);
//js地址
define("JS_ADD",STATIC_ADD."js".DIRECTORY_SEPARATOR);
//font的地址
define("FONT_ADD",STATIC_ADD."font".DIRECTORY_SEPARATOR);
//image的地址
define("IMG_ADD",STATIC_ADD."img".DIRECTORY_SEPARATOR);


//include_once LIBS_PATH."engine.class.php";
$config=include_once APP_NAME."config.php";
include_once SMARTY_PATH."Smarty.class.php";
include_once LIBS_PATH."route.class.php";
//include_once LIBS_PATH."main.class.php";

function auto($classname){//类的自动载入 按需加载的方法
    include_once MAIN_PATH.str_replace("\\",DIRECTORY_SEPARATOR,$classname).".class.php";
}
spl_autoload_register("auto");

$router = new \libs\route();
$router->run();


?>