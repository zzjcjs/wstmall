<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录 - 宝宝帝，中国最领先的进口母婴限时特卖商城</title>
    <meta name="Keywords" content="<?php echo ($CONF['mallKeywords']); ?>" >
    <meta name="Description" content="<?php echo ($CONF['mallDesc']); ?>">
    <link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/main.css?v=20151117" type="text/css">
    <link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/add.css?v=151124" type="text/css">
    <script>
    var ThinkPHP = window.Think = {
    "ROOT"   : "",
    "APP"    : "/index.php",
    "PUBLIC" : "/Public",
    "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>",
    "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
    "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
    }
    var domainURL = "<?php echo WSTDomain();?>";
    var publicurl = "/Public";
    var currCityId = "<?php echo ($currArea['areaId']); ?>";
    var currCityName = "<?php echo ($currArea['areaName']); ?>";
    var currDefaultImg = "<?php echo WSTDomain();?>/<?php echo ($CONF['goodsImg']); ?>";
    var wstMallName = "<?php echo ($CONF['mallName']); ?>";
    $(function() {
    $('.lazyImg').lazyload({ effect: "fadeIn",failurelimit : 10,threshold: 200,placeholder:currDefaultImg});
    });
    </script>
</head>
<body class="bknone">
<div class="loginWrap w965 rel">
    <div class="logo">
        <a href="<?php echo U('Index/index');?>" class="logolink">宝宝帝</a>
    </div>
    <div class="loginBord">
        <div class="loginTit">
            <span class="l yahei pink">登录宝宝帝</span>
            <span class="r">
                <i class="pink">还没有宝宝帝账号？</i>
                <a href="<?php echo U('Users/regist');?>">30秒注册</a>
            </span>
        </div>

        <form method="post" id="login_form" onsubmit="return false;">
            <input type="hidden" id="url" name="url" value="http://www.wstmall.local/">
            <div class="inputGroup ok ">
                <div class="inputWrap">
                    <div class="user-icon"></div>
                    <input type="text" placeholder="邮箱/用户名/手机" id="loginName" name="loginName" class="input" validate="required" tabIndex=1 value="<?php echo ($loginName); ?>" autocomplete="off" >
                </div>
                <p class="loginNotice"></p>
            </div>
            <div class="inputGroup">
                <div class="inputWrap">
                    <div class="pass-icon"></div>
                    <input type="password" placeholder="密码" id="loginPwd" name="loginPwd" class="input" validate="required" tabIndex=2 value="<?php echo ($loginPwd); ?>" autocomplete="off" type="password">
                </div>
                <p class="loginNotice loginErrorNotice"></p>
            </div>
            <div class="formLine clearfix">
                <div class="check_radio l">
                    <label for="agree_userterm">
                        <input type="checkbox" checked="checked" id="rememberPwd" name="rememberPwd">
                        &nbsp;自动登录
                    </label>
                </div>
                <a class="r" href="<?php echo U('Users/forgetPass');?>" target="_blank">忘记密码?</a>
            </div>
            <p class="loginButton">
                <a  id="login_submit" class="loginbtn" href="javascript:checkLoginInfo();">登 录</a>
            </p>
        </form>


    </div>
</div>
<div class="simpleVersionFooter  gray2">
    Copyright &copy;2015 北京花旺在线商贸有限公司 Miyabaobei.com 保留一切权利。客服热线： 400-789-2000。京ICP证140430号 京ICP备14006215号
</div>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/think.js"></script>
<script src="/Public/plugins/formValidator/formValidator-4.1.3.js"></script>
<script src="/Public/js/common.js"></script>
<!--<script src="/Apps/Home/View/default/js/common.js"></script>-->
<script src="/Apps/Home/View/default/js/login.js"></script>
</body>
</html>