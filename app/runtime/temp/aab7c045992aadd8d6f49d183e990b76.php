<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp\www\app\public/../application/admin\view\login\login.html";i:1525425873;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/admin/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/admin/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/admin/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/app.css">
    <script src="/admin/assets/js/jquery.min.js"></script>

</head>

<body data-type="login" >
    <script src="/admin/assets/js/theme.js"></script>
    <center>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        
                <div class="tpl-skiner-content-title">
                    <p style="font-Size:20px">后台登陆</p>
                </div>
               
            <div class="tpl-login-content">              
             <form class="am-form tpl-form-line-form" method="post" action="<?php echo url('admin/login/login'); ?>">
                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" name="name"  placeholder="请输入账号" style="width:250px">

                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" name="password" placeholder="请输入密码" style="width:250px">

                    </div>
                     
                        <input type="text" class="tpl-form-input" name="verify" placeholder="请输入验证码" style="width:120px">
                        <img id="verifycode_img" title="点击更换" src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?seed='+Math.random()">

                   
                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox" >
                        <label for="remember-me"> 记住密码</label>
                    </div>
                     <div class="am-form-group">
                        <button type="submit" value="登陆" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" style="width:250px">登陆</button>
                    </div>
                
            </div>
        </div>
        </form>
    </center>
    <script src="/admin/assets/js/amazeui.min.js"></script>
    <script src="/admin/assets/js/app.js"></script>

</body>

</html>