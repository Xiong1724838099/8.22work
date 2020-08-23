<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 09:27:48
  from '/Users/chaimengxin/Documents/php/service/mvc/application/template/admin/reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e42140df221_54871415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c39e5705d73aa0dc0517b00f91195e666e2503' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc/application/template/admin/reg.html',
      1 => 1597915666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e42140df221_54871415 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xx后台管理系统</title>
<!--    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">-->
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
<!--    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
reg.js"><?php echo '</script'; ?>
>-->
</head>
<body>
<?php echo '<script'; ?>
>
    $(function () {
        $("form").validate({
            rules: {
                uname: {
                    required: true,
                    minlength: 5,
                    remote:{
                        url:"/mvc2/index.php/admin/reg/checkName",
                        type:"post",
                        data:{
                            uname:function() {
                                return $("input[name=uname]").val()
                            }
                        }
                    }
                },
                pass: {
                    required: true,
                    rangelength:"[5, 10]",
                    equalTo: "#pass1",
                },
                pass1: {
                    required: true,
                    rangelength:"[5, 10]",
                    equalTo: "#pass",
                }
            },
            message: {
                uname: {
                    required: "用户名没有填写",
                    minlength: "用户名在5位以上",
                    remote: "用户名已存在",
                },
                pass: {
                    required: "密码没有填写",
                    rangelength: "密码在5-10之间",
                    equalTo: "两次输入的密码要保持一致",
                },
                pass1: {
                    required: "密码没有填写",
                    rangelength: "密码在5-10之间",
                    equalTo: "两次输入的密码要保持一致",
                },
            }
        })
    })
<?php echo '</script'; ?>
>
<form class="form-horizontal" action="/mvc2/index.php/admin/reg/addUser" method="post" style="height: 300px;">
    <h1>注册页面</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" placeholder="密码" name="pass" >
        </div>
    </div>
    <div class="form-group">
        <label for="pass1" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass1" placeholder="密码" name="pass1">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号？请
            <a href="/mvc2/index.php/admin" class="btn btn-default">登录</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
