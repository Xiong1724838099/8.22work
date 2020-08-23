<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-19 10:52:04
  from '/Users/chaimengxin/Documents/php/service/mvc/application/template/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3d0454809ee9_91867147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86331cfd9435404671604ff47e6a8c1ab21acf23' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc/application/template/index.html',
      1 => 1597834322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d0454809ee9_91867147 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--

确实能够让前后端分离，但是运行的效率不高，但是开发效率高了
但是同时造成了程序的运行效率下降，多执行了5步
1.加载原内容
2.正则替换原内容
3.写入compile里面
4.分配变量
5.载入进来

编译文件刚开始是不存在的，但是只要我们程序运行，编译文件就会生成
如果编译文件不存在，就生成编译文件，如果存在，直接运行

只有第一次访问的时候，会编译一下

php能获得文件的创建时间和修改时间吗？

能继续提高程序的运行效率吗？
模板引擎的解析-》自己写的模板引擎

html文件-》不解析的，直接返回客户端
php文件->  （php模块）解析成html-》客户端

-->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>
    <li>姓名:<?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li>年龄:<?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li>
        <?php if ($_smarty_tpl->tpl_vars['v']->value["sex"] == "man") {?>
        男
        <?php } else { ?>
        女
        <?php }?>
    </li>
    <li>
        <a href="index.php/index/index/del">删除</a>
    </li>
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<a href="index.php/teach/log/add">添加日报</a>
</body>
</html><?php }
}
