<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0053)http://www.tabuzhe.com/account/login/url-L3B1Ymxpc2g= -->
<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="renderer" content="webkit">
    <title>注册 - E-logel</title>
    <meta name="keywords" content="">
    <meta name="description" content="E-logel是一个分享生活信息的网站,通过它您可以与朋友、同学、同事、家人保持更紧密的联系,及时了解他们的动态;还能结交新的朋友与他们分享你的照片、心情、快乐。">
    <meta property="qc:admins" content="1543437157611256216375">
    <meta property="wb:webmaster" content="d550602d19a4cb44">
    <!--<base href="http://www.tabuzhe.com/">--><base href="."><!--[if IE]></base><![endif]-->
    <!--<link href="http://www.tabuzhe.com/static/css/default/img/favicon.ico?v=20150409" rel="shortcut icon" type="image/x-icon">-->

    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/icon.css">

    <link href="/Public/css/common.css" rel="stylesheet" type="text/css">
    <link href="/Public/css/link.css" rel="stylesheet" type="text/css">
    <link href="/Public/css/style.css" rel="stylesheet" type="text/css">
    <link href="/Public/css/login.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/Public/css/fox.css">


    <script src="/Public/js/hm.js"></script><script type="text/javascript">
//        var _3722F3D6B1A9B84BDD696EFA54BD068D="";
//        var G_POST_HASH=_3722F3D6B1A9B84BDD696EFA54BD068D;
//        var G_INDEX_SCRIPT = "";
//        var G_SITE_NAME = "TABUZHE";
//
//        var G_USER_ID = "";
//        var G_USER_NAME = "";
//        var G_UPLOAD_ENABLE = "N";
//        var G_UNREAD_NOTIFICATION = 0;
//        var G_NOTIFICATION_INTERVAL = 100000;
//        var G_CAN_CREATE_TOPIC = "";
//        var G_INDEX_EDITOR = "0";
//        var G_ADVANCED_EDITOR_ENABLE = "Y";
//        G_USER_ID=G_USER_ID==''?'':parseInt(G_USER_ID);

    </script>
    <script src="/Public/js/jquery.2.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.form.js" type="text/javascript"></script>
    <script src="/Public/js/plug-in_module.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="/Public/js/aws.js" type="text/javascript"></script>
    <script src="/Public/js/aw_template.js" type="text/javascript"></script>
    <script src="/Public/js/app.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.lazyload.js" type="text/javascript"></script>
    <script src="/Public/js/md5.js" type="text/javascript"></script>

    <script type="text/javascript" src="/Public/js/compatibility.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/Public/js/respond.js"></script>
    <![endif]-->
    <script>
        $(function() {
            //图片延时加载
            $(".shibox img").lazyload({
                placeholder : G_STATIC_URL+"/common/grey.gif",
                effect : "fadeIn"
            });
            $(".aw-article-list img").lazyload({
                placeholder : G_STATIC_URL+"/common/grey.gif",
                effect : "fadeIn"
            });
            $(".markitup-box img").lazyload({
                placeholder : G_STATIC_URL+"/common/grey.gif",
                effect : "fadeIn"
            });
        });
    </script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?7c7828075bb29d18aaf8db35d204d643";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
<body><noscript unselectable="on" id="noscript">
    &lt;div class="aw-404 aw-404-wrap container"&gt;
    &lt;img src="http://www.tabuzhe.com/static/common/no-js.jpg"&gt;
    &lt;p&gt;你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!&lt;/p&gt;
    &lt;/div&gt;
</noscript><div id="body-wrapper">
    <div class="aw-login-box foxbox" style="background-color: #4d4d4d">
        <div class="mod-footer" style="background-color: #4d4d4d">
            <span style="font-size:20px;color:#fff;"><i class="icon icon-user"></i> 注册</span>
        </div>
        <div class="mod-body clearfix">
            <div class="content" style="background-color: #4d4d4d">
                <p class="logo" style="color: #ffffff;font-size: 75px;margin-top: 40px"><!--<img src="./images/E-logel.png"></img>-->E-logel</p>
                <h2 style="margin: -35px 0 22px;">E-logel</h2>
                <form  action="/index.php/home/register/doregister" id="login_form" method="post" >
                    <input type="hidden" name="users_pic" value="/images/personal.png">
                    <ul>

                        <li>
                            <input type="text" id="aw-login-user-name" class="form-control" placeholder="用户名" name="users_name">
                        </li>
                        <li>
                            <input type="text" id="aw-login-user-address" class="form-control" placeholder="邮箱" name="users_address">
                        </li>
                        <li>
                            <input type="password" id="aw-login-user-password" class="form-control" placeholder="密码" name="users_password">
                        </li>
                        <li>
                            <input type="password" id="aw-login-user-password-r" class="form-control" placeholder="确认密码" name="repassword">
                        </li>
                        <li class="alert alert-danger hide error_message">
                            <i class="icon icon-delete"></i> <em></em>
                        </li>
                        <li class="last">
                            <button type="submit" id="login_submit" class="pull-right btn btn-large btn-orange">注册</button>


                        </li>
                    </ul>
                </form>

            </div>
        </div>
        <div class="mod-footer">
            <span>已经有账号?</span>&nbsp;&nbsp;
            <a href="/index.php/home/index/login">立即登录</a>&nbsp;&nbsp;•&nbsp;&nbsp;
            <a href="/index.php/home/index/index">游客访问</a>&nbsp;&nbsp;
            <!--•&nbsp;&nbsp;
            <a href="http://www.tabuzhe.com/reader/">问答阅读</a>-->
        </div>
    </div>
    <div id="bgPattern"></div>
</div>
<script type="text/javascript" src="/Public/js/jquery.backstretch.js"></script>
<script type="text/javascript" src="/Public/js/fox.js"></script>
<script type="text/javascript" src="/Public/js/login.js"></script><div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 636px; width: 1349px; z-index: -999999; position: fixed;"><img src="/Public/images/dbg.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1349px; height: 758.8125px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -61.40625px;"></div></body></html>