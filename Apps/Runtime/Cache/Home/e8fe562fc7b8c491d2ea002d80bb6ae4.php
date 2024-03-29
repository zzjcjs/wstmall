<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>注册 - 宝宝帝，中国最领先的进口母婴限时特卖商城</title>
    <meta name="Keywords" content="<?php echo ($CONF['mallKeywords']); ?>" >
    <meta name="Description" content="<?php echo ($CONF['mallDesc']); ?>">
    <link rel="stylesheet" href="/Public/css/mia_main.css" type="text/css">
    <link rel="stylesheet" href="/Public/css/mia_add.css" type="text/css">
    <script type="text/javascript" src="http://file02.miyabaobei.com/resources/scripts/jquery-1.8.2.min.js"></script>
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
    </script>
</head>
<body class="bknone">
﻿<div class="loginWrap w965 rel h582" id="regist">
    <div class="logo">
        <a href="/" class="logolink">宝宝帝</a>
    </div>
    <div class="loginBord">
        <div class="loginTit">
            <span class="l yahei pink">注册宝宝帝</span>
            <span class="r">
                <i class="pink">已有宝宝帝账号？ </i>
                <a href="<?php echo U('Users/login');?>">登录</a>
            </span>
        </div>
        <form method="post" id="register" autocomplete="off">
            <input name="regType" id="regType" value="person" type="hidden"/>
            <input name="nameType" id="nameType" value="3"  type="hidden" />

            <div class="inputGroup ok">
                <div class="inputWrap">
                    <div class="user-icon"></div>
                    <input id="userPhone" name="userPhone" class="input" placeholder="手机号码" tabindex="3" autocomplete="off" type="text" maxlength="11" validate="required|username"/>
                    <span class="tooltip-inner" id="inputEmail_msg" style="display:none;"></span>
                </div>
                <p class="registerNotice1 nameuser" style="display:none;">
                    <span  class="tipcon">用户名提示内容手机号</span>
                    <span class="rownotice" >
                        <img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png">
                    </span>
                </p>
            </div>

            <div id="authcodeDiv" class="inputGroup ok" style="height:56px">
                <div class="verityWrap clearfix" style="width:300px;">
                    <div class="inputWrap l">
                        <input type="text" placeholder="输入验证码" id="authcode" name="authcode" class="input">
                    </div>
                    <img class="verifyImg" style='vertical-align:middle;cursor:pointer;height:39px;width:116px' src="/Apps/Home/View/default/images/clickForVerify.png" title='刷新验证码' onclick='javascript:getVerify()'/>
                    <a href="javascript:getVerify();">看不清</a>
                </div>
                <p class="registerNotice1  authcode tipauthcode" style="display:none;">
                    <span  class="tipcon"></span>
                    <span class="rownotice" >
                        <img   src="http://file02.miyabaobei.com/resources/images/tipmessagebg.png">
                    </span>
                </p>
                <p class="vcNotice"></p>
            </div>

            <div class="inputGroup" id="mobileCodeDiv">
                <div class="phonecodeWrap clearfix">
                    <div class="inputWrap l">
                        <input maxlength="6" autocomplete="off" placeholder="短信验证码" tabindex="6" class="input" name="mobileCode" style="ime-mode:disabled" id="mobileCode" type="text"/>
                    </div>
                    <a class="phonecode" href="javascript:void(0);" onclick="getVerifyCode();" id="sendMobileCode">
                        <span id="timeTips">获取短信验证码</span>
                    </a>
                </div>
                <p class="registerNotice1  tipphonecode" style="display:none">
                    <span  class="tipcon">短信验证码</span>
                    <span class="rownotice" >
                        <img   src="http://file02.miyabaobei.com/resources/images/tipmessagebg.png">
                    </span>
                </p>
            </div>

            <div class="inputGroup" id="o-password">
                <div class="inputWrap">
                    <div class="pass-icon"></div>
                    <input id="loginPwd" name="loginPwd" placeholder="密码" class="input" tabindex="2" style="ime-mode:disabled;" autocomplete="off" validate="required" type="password"/>
                </div>
                <p class="registerNotice1 password" style="display: none">
                    <span  class="tipcon">密码提示内容</span>
                    <span class="rownotice" >
                        <img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png">
                    </span>
                </p>
            </div>
            <div class="inputGroup">
                <div class="inputWrap">
                    <div class="pass-icon"></div>
                    <input id="reUserPwd" name="reUserPwd"  placeholder="确认密码" class="input" tabindex="3" autocomplete="off"  validate="required" type="password"/>
                </div>
                <p class="registerNotice1 registerErrorNotice" style="display: none">
                    <span  class="tipcon">确认提示内容</span>
                    <span class="rownotice" >
                        <img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png">
                    </span>
                </p>
            </div>
            <div class="inputGroup otherInputGroup" style="height:35px;">
                宝宝关系：
                <input type="radio" checked name="relation" value="1" id="relation_mother" />
                <label for="relation_mother">妈妈</label>
                <input type="radio" name="relation" value="2" id="relation_father" />
                <label for="relation_father">爸爸</label>
                <input type="radio" name="relation" value="3" id="relation_other" />
                <label for="relation_other">其他</label>
            </div>
            <div class="inputGroup otherInputGroup h42">
                <div class="inputWrap">
                    <div class="pass-icon pass-icon_f"></div>
                    <input type="text" placeholder="宝宝生日" id="datepicker" name="birth_day_show" class="input inp"  readonly />
                </div>
                <input type="hidden" name="birth_day" id="realBirthday">
            </div>

            <div class="inputGroup"   style="height:30px;">
                <div class="ceckboxmy">
                    <input class="checkbox" id="protocol" name="protocol" type="checkbox"/>
                    <label for="isagree">我已阅读并接受</label>
                    <a href="/help/?aid=35" target="_blank" class="pink" title="蜜芽服务条款" >《宝宝帝服务条款》</a>
                    <p class="registerNotice1 agree" style="display:none;">
                        <span  class="tipcon">您未阅读并接受蜜芽服务条款</span>
                        <span class="rownotice" >
                            <img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png">
                        </span>
                    </p>
                </div>
            </div>
            <p class="registerButton" >
                <input class="loginbtn shake-constant"  style="width:100%" id="registsubmit" value="注册" tabindex="8"  type="submit"/>
            </p>

        </form>

    </div>
</div>
<link rel="stylesheet" href="http://file03.miyabaobei.com/resources/styles/jquery-ui.css" type="text/css">
<script type="text/javascript" src="http://file02.miyabaobei.com/resources/scripts/jquery-ui.js"></script>
<script type="text/javascript" src="http://file02.miyabaobei.com/resources/scripts/validate.js"></script>
<script type="text/javascript" src="http://file02.miyabaobei.com/resources/scripts/validate.en.js?v=1"></script>
<script type="text/javascript" src="http://file02.miyabaobei.com/resources/scripts/account/register.js?v=2015070618431"></script>
<script>
    $(function() {
        $((function($){
            $.datepicker.regional['zh-CN'] = {
                clearText: '清除',
                clearStatus: '清除已选日期',
                closeText: '关闭',
                closeStatus: '不改变当前选择',
                prevText: '<上月',
                prevStatus: '显示上月',
                prevBigText: '<<',
                prevBigStatus: '显示上一年',
                nextText: '下月>',
                nextStatus: '显示下月',
                nextBigText: '>>',
                nextBigStatus: '显示下一年',
                currentText: '今天',
                currentStatus: '显示本月',
                monthNames: ['一月','二月','三月','四月','五月','六月', '七月','八月','九月','十月','十一月','十二月'],
                monthNamesShort: ['一','二','三','四','五','六', '七','八','九','十','十一','十二'],
                monthStatus: '选择月份',
                yearStatus: '选择年份',
                weekHeader: '周',
                weekStatus: '年内周次',
                dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
                dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
                dayNamesMin: ['日','一','二','三','四','五','六'],
                dayStatus: '设置 DD 为一周起始',
                dateStatus: '选择 m月 d日, DD',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                initStatus: '请选择日期',
                isRTL: false};
            $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
        })(jQuery));
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            onSelect:function(date, inst) {
                var selectedDay = inst.selectedDay;
                var selectedMonth = inst.selectedMonth;
                var selectedYear = inst.selectedYear;
                selectedMonth = parseInt(selectedMonth)+1;
                if (parseInt(selectedDay) <= 9) {
                    var selectedDay = "0"+selectedDay;
                }
                if (parseInt(selectedMonth) <= 9) {
                    var selectedMonth = "0"+selectedMonth;
                }
                var curDate = selectedYear+"-"+selectedMonth+"-"+selectedDay;
                $("#realBirthday").val(curDate);
            }
        });
        $( "#datepicker" ).datepicker( "option", "dateFormat", 'yy年mm月dd日');
        $(window).keydown(function(event){
            switch(event.keyCode) {
                case 13:
                    doReg();
                    break;
            }
        });
    });
</script>
<script src="/Public/plugins/layer/layer.min.js"></script>
<script src="/Public/js/think.js"></script>
<script src="/Public/js/common.js"></script>
<script src="/Apps/Home/View/default/js/common.js"></script/>
<script src="/Apps/Home/View/default/js/regist.js"></script>
<script src="/Public/plugins/formValidator/formValidator-4.1.3.js"></script>
<!--<script type="text/javascript" src="/Public/js/mymiajs.js"></script>-->
<div class="simpleVersionFooter  gray2">
    Copyright &copy;2015 北京花旺在线商贸有限公司 Miyabaobei.com 保留一切权利。客服热线： 400-789-2000。京ICP证140430号 京ICP备14006215号
</div>
</body>
</html>