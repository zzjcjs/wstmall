<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>注册 - 蜜芽，中国最领先的进口母婴限时特卖商城</title>
    <meta name="Keywords" content="进口母婴,限时特卖,日本进口,正品行货,花王,纸尿裤,拉拉裤,moony,大王,保宁,贝亲,britax湿巾,蜜芽,MIA,miababy" >
    <meta name="Description" content="100%正品保障！蜜芽为您精选全世界范围内质量最好、口碑最优的母婴产品，以远低于市场价的折扣，在72 小时内限量出售。每天上午10点准时开抢！">
    <link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/main.css?v=20151117" type="text/css">
    <link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/add.css?v=151124" type="text/css">
    <script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/header.js?v=20150706"></script>
    <script type="text/javascript">
        var _adwq = _adwq || [];
        _adwq.push(['_setAccount', 'v3akn']);
        _adwq.push(['_setDomainName', '.miyabaobei.com']);
        _adwq.push(['_trackPageview']);
    </script>
    <script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/lwt.js?v=20151113"></script>
</head>
<body class="bknone">
﻿<div class="loginWrap w965 rel h582">
    <a href="https://itunes.apple.com/cn/app/mi-ya-bao-bei-zhong-guo-zui/id973366293?mt=8" title="iPhone系列手机及ipad适用" target="_blank" style="display:block;left:385px;top:306px;width:136px;height:36px;position:absolute"></a>
    <a href="http://download.miyabaobei.com/Miababy_localhost_V3.3.0.apk" target="_blank" title="三星小米索尼华为等android手机适用" style="display:block;left:385px;top:357px;width:136px;height:36px;position:absolute"></a>
    <div class="logo"><a href="/" class="logolink">蜜芽</a></div>
    <div class="loginBord">
        <div class="loginTit">
            <span class="l yahei pink">注册蜜芽</span>
            <span class="r"> <i class="pink">已有蜜芽账号？ </i> <a href="/login">登录</a></span>
        </div>
        <!-- <p style=" text-align:right; padding:0 0 15px 0;"><img src="http://file02.miyabaobei.com/resources/images/register/titbg.png"></p>-->

        <form method="post" id="register_form" onsubmit="return false">
            <input type="hidden" id="url" name="url" value="/account/register/success/?url=http%3A%2F%2Fwww.mia.com%2F">
            <div class="inputGroup ok">
                <div class="inputWrap">
                    <div class="user-icon"></div>
                    <input type="text" placeholder="手机号码" id="login_username" name="username" class="input" validate="required|username">
                    <span class="tooltip-inner" id="inputEmail_msg" style="display:none;"></span>
                </div>
                <p class="registerNotice1 nameuser" style="display:none;">
                    <span  class="tipcon">用户名提示内容手机号</span>
                    <span class="rownotice" ><img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png"></span>
                </p>

            </div>

            <div id="verityGroup" class="inputGroup ok" style="height:56px">
                <div class="verityWrap clearfix" style="width:300px;">
                    <div class="inputWrap l">
                        <input type="text" placeholder="输入验证码" id="authcode" name="authcode" class="input">
                    </div>
                    <img id="register_verified_code" src="/account/login/authcode/" />
                    <a id="register_verified_refresh" href="javascript:void(0)">看不清</a>
                </div>
                <p class="registerNotice1  authcode tipauthcode" style="display:none;">
                    <span  class="tipcon"></span>
                    <span class="rownotice" ><img   src="http://file02.miyabaobei.com/resources/images/tipmessagebg.png"></span>
                </p>
                <p class="vcNotice"></p>
            </div>

            <div class="inputGroup">
                <div class="phonecodeWrap clearfix">
                    <div class="inputWrap l">
                        <input type="text" placeholder="短信验证码" id="phonecode" name="phonecode" class="input">
                    </div>
                    <a class="phonecode" id="sendVerifyCode" href="javascript:void(0)">获取短信验证码</a>
                </div>
                <p class="registerNotice1  tipphonecode" style="display:none">
                    <span  class="tipcon">短信验证码</span>
                    <span class="rownotice" ><img   src="http://file02.miyabaobei.com/resources/images/tipmessagebg.png"></span>
                </p>
            </div>
            <div class="inputGroup">
                <div class="inputWrap">
                    <div class="pass-icon"></div>
                    <input type="password" placeholder="密码" id="login_password" name="password" class="input" validate="required">
                </div>
                <p class="registerNotice1 password" style="display: none">
                    <span  class="tipcon">密码提示内容</span>
                    <span class="rownotice" ><img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png"></span>
                </p>
            </div>
            <div class="inputGroup">
                <div class="inputWrap">
                    <div class="pass-icon"></div>
                    <input type="password" placeholder="确认密码" id="confirm_password" name="confirm_password" class="input" validate="required">
                </div>
                <p class="registerNotice1 registerErrorNotice" style="display: none">
                    <span  class="tipcon">确认提示内容</span>
                    <span class="rownotice" ><img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png"></span>
                </p>
            </div>
            <div class="inputGroup otherInputGroup" style="height:35px;">
                宝宝关系：<input type="radio" checked name="relation" value="1" id="relation_mother" /><label for="relation_mother">妈妈</label>
                <input type="radio" name="relation" value="2" id="relation_father" /><label for="relation_father">爸爸</label>
                <input type="radio" name="relation" value="3" id="relation_other" /><label for="relation_other">其他</label>
            </div>
            <div class="inputGroup otherInputGroup h42">
                <div class="inputWrap">
                    <div class="pass-icon pass-icon_f"></div>
                    <input type="text" placeholder="宝宝生日" id="datepicker" name="birth_day_show" class="input inp"  readonly />
                </div>
                <input type="hidden" name="birth_day" id="realBirthday">
            </div>
            <!-- orig verify place -->

            <!-- /orig verify place -->


            <div class="inputGroup"   style="height:30px;">
                <div class="ceckboxmy">
                    <input type="checkbox" id="isagree" checked name="isagree"/> <label for="isagree">我已阅读并接受</label><a href="/help/?aid=35" target="_blank" class="pink" title="蜜芽服务条款" >《蜜芽服务条款》</a>
                    <p class="registerNotice1 agree" style="display:none;">
                        <span  class="tipcon">您未阅读并接受蜜芽服务条款</span>
                        <span class="rownotice" ><img src="http://file02.miyabaobei.com/resources/images/tipnamebg.png"></span>
                    </p>
                </div>
            </div>
            <p class="registerButton" >
                <a  id="register_submit" class="loginbtn shake-constant"  style="width:85%">注册</a>
            </p>

        </form>

    </div>
</div>
<link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/jquery-ui.css" type="text/css">
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/jquery-ui.js"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/validate.js"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/validate.en.js?v=1"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/account/register.js?v=2015070618431"></script>
<script>
    var login = {
        'qq' : '/oauth/member/qq',
        'weibo' : '/oauth/member/weibo',
        'weixin' : '/oauth/member/weixin'
    };
    $(document).ready(function(){
        $('.third_login a').bind('click',function(e){
            e.preventDefault();
            window.location.href = login[$(this).attr('data-tag')];
        });

    });


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
</script><div class="simpleVersionFooter  gray2">
    Copyright &copy;2015 北京花旺在线商贸有限公司 Miyabaobei.com 保留一切权利。客服热线： 400-789-2000。京ICP证140430号 京ICP备14006215号
</div>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/footer.js?v=2015113001"></script>
<!--<script type="text/javascript" src="resources/scripts/seo.js?v=201506301215"></script>
--><!--<script type="text/javascript" src="--><!--resources/scripts/s/o_code.js"></script>-->
<!--<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-48167462-1', 'miyabaobei.com');
ga('send', 'pageview');
</script>-->
<div style="display:none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3be40858b0c48ceaa09f8d7db4e1dae1' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>


<script type="text/javascript">
    //默认百分点参数
    if(typeof(google_tag_params) == "undefined"){
        var google_tag_params = {
            bfd_sid : getcookie('sid'),
            p_type :'d',
            cell : ''    }
    };
</script>
<script type="text/JavaScript" language="javascript">
    (function() {
        var ia = document.createElement('script');ia.type = 'text/javascript';ia.async = true;
        ia.charset = 'utf-8';
        ia.src = 'http://file01.miyabaobei.com/resources/scripts/miytj.js?v=20150917';
        var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ia,s);
    })();
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KRX7GN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KRX7GN');</script>
<!-- End Google Tag Manager -->


<script type="text/javascript" src="http://s.emarbox.com/js/adw_miya.js"></script>


</body>
</html>