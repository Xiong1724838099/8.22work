<?php
namespace libs;
class smarty{
    function __construct(){
        global $config;
        $smarty=new \Smarty();
        $templateDir=isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"template";
        $compileDir=isset($config["smarty"]["compileDir"])?$config["smarty"]["compileDir"]:"compile";
        $cacheDir=isset($config["smarty"]["cacheDir"])?$config["smarty"]["cacheDir"]:"cache";
        $smarty->setTemplateDir($templateDir);
        $smarty->setCompileDir($compileDir);
        $smarty->setCacheDir($cacheDir);
        $this->smarty=$smarty;
    }
    function  assign($attr,$val){
        $this->smarty->assign($attr,$val);
    }
    function display($file){
        $this->smarty->display($file);
    }
}