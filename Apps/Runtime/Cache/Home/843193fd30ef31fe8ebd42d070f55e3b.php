<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>蜜芽，中国最领先的进口母婴限时特卖商城</title>
    <meta name="Keywords" content="进口母婴,限时特卖,日本进口,正品行货,花王,纸尿裤,拉拉裤,moony,大王,保宁,贝亲,britax湿巾,蜜芽,MIA,miababy" >
    <meta name="Description" content="100%正品保障！蜜芽为您精选全世界范围内质量最好、口碑最优的母婴产品，以远低于市场价的折扣，在72 小时内限量出售。每天上午10点准时开抢！">
    <link rel="stylesheet" type="text/css" href="http://file02.miyabaobei.com//resources/styles/newPub.css?v=1">
    <link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/main.css?v=20151117" type="text/css">
    <link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/add.css?v=151124" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://file02.miyabaobei.com//resources/styles/newHeaderFooter.css?v=20150323">
    <script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/header.js?v=20150821"></script>
    <script src="http://file01.miyabaobei.com//resources/scripts/newMiYaPub.js?v=20151102" type="text/javascript"></script>
    <script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/lwt.js?v=20151113"></script>
</head>
<body>
<div class="newTN clearfix">
    <div class="w1000">
        <div class="r">
            <ul id="loginedBox" class="dn">
                <li><a href="/logout">退出</a></li>
                <li class="line">|</li>
                <li><a href="/help/">帮助中心</a></li>
                <li class="line">|</li>
                <li class="mymia mymiaBtn PubBtnHover"><span class="indexPubTop"><a href="/home" target="_blank">我的蜜芽</a></span>
                    <div class="mymiaCon PubConHover"> <a href="/order_lists.html">我的订单</a> <a href="/my_getredbag">我的红包</a> <a href="/my_coupon.html">我的代金券</a> <a href="/my_brand.html">我收藏的品牌</a> <a href="/my_collect.html">我收藏的商品</a></div>
                </li>
                <li class="line">|</li>
                <li>你好，<span id="logined_username"></span></li>
            </ul>
            <ul class="dn" id="unloginBox">
                <li><a href="/help/">帮助中心</a></li>
                <li class="line">|</li>

                <li><a href="/register?url=http%3A%2F%2Fwww.mia.com%2Forder%2Fsuccess%2F20151204123612695" title="点击注册" rel="nofollow">免费注册</a></li>
                <li class="line">|</li>

                <li><a href="/login?url=http%3A%2F%2Fwww.mia.com%2Forder%2Fsuccess%2F20151204123612695" title="点击登录" rel="nofollow">登录</a></li>
                <li class="line">|</li>
                <li>您好，欢迎来到蜜芽 </li>

            </ul>
        </div>
        <div class="l">
            <ul>
                <li ><a href="/">蜜芽首页</a></li>
                <li ><a href="/koubei.html">蜜芽口碑</a></li>
                <!-- <li class="w88"><a href="/brand">种草机</a></li> -->
                <li class="phone"><a href="/app.html"  class="indexPubTop">手机蜜芽</a></li>
                <li class="top400">400-789-2000</li>
            </ul>
        </div>
    </div>
</div><link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/cart/cart.css?v=151124" type="text/css">
<style type="text/css">
    body,.bknone .w1004 .right{background: #fff;}
</style>
<div class="mainHeader bknone">
    <div class="w1004">
        <div class="logo"><a href="/" class="logolink">蜜芽宝贝</a></div>
        <div class="right">
            <ul class="schedule songti step3">
                <li class="actived_f">1.我的购物车</li>
                <li class="actived_f">2.填写核对订单信息</li>
                <li class="current">3.成功提交订单</li>
            </ul>
        </div>
    </div>
</div>
<!--/.mainHeader-->
<div class="myShoppingCart w1004 mscStep2">
    <div class="rim" id="successPay">
        <div class="cartNoticehint">
            <h4 class="yahei">订单提交成功，仅差一步完成购物，请尽快支付！</h4>
            <div class="tomorrow_timer"></div>
            <div class="spvm"><span>请在<span class="TheCountdown"><span id="timerTitleColumn"></span>
              <span id="counterColumn">??时??分??秒</span></span>内完成支付。</span>
                <b>待支付：<em>￥98.00</em> </b>
            </div>
            <div class="spvm_f">到期未付款订单将会被取消。</div>
        </div>
        <div class="cartNotice">
            <div class="paytype">
                <div class="tit">选择支付方式</div>
                <input type="hidden" id="success_ordercode" value="20151204123612695" />
                <div class="otherbc rel">
                    <span class="toparrow"><span></span></span>
                    <div class="cblock">
                        <div class="tit">平台支付</div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>

                                <td height="56" width="25%"><input type="radio" name="payway" value ="alipay" checked="checked" id="bank_alipay"/><label for="bank_alipay" class="bankCards bcurrent"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_a01.png"  alt="支付宝" disabled /></label></td>

                                <td height="56" width="25%"><input type="radio" name="payway" value ="unionpay" id="unionpay"/><label for="unionpay" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_a02.png" alt="银联支付" disabled /></label></td>
                                <td height="56" width="25%">
                                    <input type="radio" name="payway" value ="yihuijin_pay" id="yihuijin_pay"/><label for="yihuijin_pay" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_a03.png?t=1" alt="易宝支付" disabled /></label>
                                </td>
                                <td height="56"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="cblock cblock-f" id="payTab">

                        <!--这里是付款的方式Tab-->
                        <div class="tabLi">
                            <ul class="tab">
                                <li class="curr" onclick="tabs('#payTab',0)">网银支付</li>
                                <li onclick="tabs('#payTab',1)">快捷支付</li>
                            </ul>
                            <p class="ico0A2">不需要开通网银，有卡就能付哦<img src="http://img.miyabaobei.com/d1/p2/2015/11/17/54/6a/546a181df6eae17d1e7b54076926f17d.png" class="ico0A2Img"></p>
                        </div>
                        <div class="tabcon">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><input type="radio" name="payway" value="cb_ICBCB2C" id="bank_1"/><label for="bank_1" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b01.png" alt="中国工商银行" disabled></label></td>
                                    <td><input type="radio" name="payway" value="cb_ABC" id="bank_2"/><label for="bank_2" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b04.png" alt="中国农业银行" disabled /></label></td>
                                    <td><input type="radio" name="payway" value="cb_BOCB2C" id="bank_3"/><label for="bank_3" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b06.png" alt="中国银行" disabled /></label></td>
                                    <td><input type="radio" name="payway" value="cb_CCB" id="bank_4"/><label for="bank_4" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b02.png" alt="中国建设银行" disabled /></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="payway" value="cb_CMB" id="bank_5"/><label for="bank_5" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b03.png" alt="招商银行" disabled /></label></td>
                                    <td><input type="radio" name="payway" value="cb_COMM" id="bank_6"/><label for="bank_6" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b17.png" alt="交通银行" disabled /></label></td>
                                    <td><input type="radio" name="payway" value="cb_SPDB" id="bank_7"/><label for="bank_7" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b14.png" alt="上海浦东发展银行" disabled /></label></td>
                                    <td><input type="radio" name="payway" value="cb_CITIC" id="bank_8"/><label for="bank_8" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b12.png" alt="中信银行" disabled /></label></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tabcon q_payway_d" style="display:none;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b01"/><label for="pay_b01" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b01.png" alt="中国工商银行" disabled><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b02"/><label for="pay_b02" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b02.png" alt="中国建设银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b03"/><label for="pay_b03" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b03.png" alt="招商银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b04"/><label for="pay_b04" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b04.png" alt="中国农业银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b05"/><label for="pay_b05" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b05.png" alt="广发银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b06"/><label for="pay_b06" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b06.png" alt="中国银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b07"/><label for="pay_b07" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b07.png" alt="中国民生银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b08"/><label for="pay_b08" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b08.png" alt="平安银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                </tr>
                                <tr style="display:none;">
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b09"/><label for="pay_b09" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b09.png" alt="上海银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b10"/><label for="pay_b10" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b10.png" alt="中国邮政储蓄银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b11"/><label for="pay_b11" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b11.png" alt="中国光大银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b12"/><label for="pay_b12" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b12.png" alt="中信银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                </tr>
                                <tr style="display:none;">
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b13"/><label for="pay_b13" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b13.png" alt="兴业银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b14"/><label for="pay_b14" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b14.png" alt="浦发银行" disabled /><span class="spanf">支持：储蓄卡 信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b15"/><label for="pay_b15" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b15.png" alt="北京银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                    <td><input type="radio" name="payway" value="BANK_CARD-EXPRESS" id="pay_b16"/><label for="pay_b16" class="bankCards"><img src="http://file02.miyabaobei.com/resources/images/bank/pay_b16.png" alt="华夏银行" disabled /><span class="spanf">支持：信用卡</span></label></td>
                                </tr>
                            </table>
                            <p class="moreBank"><span class="moreS1">展开更多银行<span class="icoA03"></span></span></p>
                        </div>





                    </div>
                    <!--<p class="f12 pink" style="margin-top:8px;">目前金额500元以上订单，暂不支持信用卡的网银支付，请您使用支付宝或储蓄卡的网银付款。敬请谅解！</p>-->
                </div>
                <div class="ddxx">
                    收货信息：胡军    安徽省-马鞍山市-雨山区向山镇  安徽工业大学东校区 15551053527<br/>
                    支付配送：在线支付 - 普通快递<br>
                    应付金额：<span class="pink ver f20">98.00</span> 元<br />
                    您还可以：<a href="/order_lists.html" class="pink" target="_blank">查看订单&gt;&gt;</a>&nbsp;&nbsp;&nbsp;<a href="/home" class="pink" target="_blank">个人中心&gt;&gt;</a><br/>
                </div>
                <div class="btn_04 clearfix">
                    <span id="paywayimg"></span>
                    <a href="javascript:void(0)" data-def="#" target="_blank" class="gotoSettlement yahei l" id="checkPay" style="display:none">立即付款</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dialog" style="display:none">
    <div class="cart_dialog">
        <p class="txt">请您在新打开的网上银行页面进行支付，支付完成前请不要关闭该窗口。</p>
        <input type="hidden" name="pay_sign" value="">
        <p class="info" style="position: relative;">
            <a class="dia_btn dia_btn2 refs" href="javascript:void(0)">已完成支付</a><!-- <a href="#" class="dia_btn refs ">支付遇到问题</a> -->
        </p>
        <p class="link"><a href="javascript:void(0)" class="refs">&lt;&lt;返回重新选择银行</a></p>
    </div>
</div>
<link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/jquery-ui.css" type="text/css">
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/jquery-dialog-min.js"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/main.js"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/order/success.js?v=2015061814"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/full_column.js"></script>
<script type="text/javascript">

    $('.q_payway_d .bankCards').mouseenter(function(event) {
        if($(this).find('.spanf').length) {
            $(this).find('.spanf').show();
        }
    }).mouseleave(function(event) {
        if($(this).find('.spanf').length) {
            $(this).find('.spanf').hide();
        }
    });;

    //Tab 切换
    function tabs(tabId, tabNum){
        $(tabId + " .tab li").removeClass("curr");
        $(tabId + " .tab li").eq(tabNum).addClass("curr");
        $(tabId + " .tabcon").hide();
        $(tabId + " .tabcon").eq(tabNum).show();
    }

    var len = $('.q_payway_d tr').length;
    var morehtml = $('.moreS1').html();
    var moreBankNu = 1;
    $('.moreBank').click(function(){
        if (moreBankNu == 1){
            moreBankNu = 0;
            for (i=0;i<len;i++){
                if(i>=2){
                    $('.q_payway_d tr').eq(i).show();
                    $('.moreS1').html('收起更多银行<span class="icoA03 icoA03b"></span>');
                }
            }
        } else {
            moreBankNu = 1;
            for (i=0;i<len;i++){
                if(i>=2){
                    $('.q_payway_d tr').eq(i).hide();
                    $('.moreS1').html(morehtml);
                }
            }
        }
    });

    var _ozprm="orderid=20151204123612695&ordertotal=98&skulist=1064778,98.00,1,,,SINGLE;";
    var _ozurltail='#ordersuc';

    $(function(){
        var order_code=$('#success_ordercode').val();
        $.ajax({
            url:'/instant/order/getOrderProcessState',
            type:'post',
            dataType:'json',
            data: {order_code:order_code},
            success:function(msg){
                if (msg.state == 1) {
                    var timeInterval = msg.data;
                    $('#counterColumn').html('');
                    $('#counterColumn').Column({
                        starTime: timeInterval.start,
                        endTime: timeInterval.end,
                        nowTime: timeInterval.now,
                        msgtext: timeInterval.course,
                        digitItvWidth: 25,
                        digitWidth: 45,
                        digitHeight: 46,
                        id: 1,
                        timerEnd:function(){}
                    });
                    $('#counterColumn').find('span').eq(1).hide();
                }
            }
        });

    });
</script>

<script type="text/javascript">// <![CDATA[
var google_tag_params = {
//结算状态
    ym_static : 1,
//BFD商品页参数开始
    bfd_sid : getcookie('sid'),
//AdWiser
    ad_setCustomer :  "miya15551053527",
    ad_setOrder :  "20151204123612695, 98.00, 2015-12-04 12:56:20",
//我要投广告
    agt_atssum : "98.00",
    agt_atsnum : '20151204123612695',
//晶赞
    jz_productId_list : "1064778,",
    jz_totalPrice : 98,
    jz_totalNum: 1,
    jz_zp_convinfo : '20151204123612695' + ',' + '98',
//聚效DSP
    mvq_order_code : 98,
    mvq_need_to_pay : 98,
    mvq_itemIds : "1064778",
//公共变量
    bfd_cart_listgoods :  "1064778,1;",
//criteo购物车商品列表
    cr_cart_items :  [{id:1064778,price:98.00,quantity:1},],
    isolduser : 1,
    p_type :'d',
};
</script>

<script language=javascript>_tag.dcsMultiTrack("WT.order_id", '20151204123612695', "WT.prod_fee", 98, "wt.dl", "51");</script><div class="simpleVersionFooter  gray2">
    Copyright &copy;2015 北京花旺在线商贸有限公司 Miyabaobei.com 保留一切权利。客服热线： 400-789-2000。京ICP证140430号 京ICP备14006215号
</div>
<script type="text/javascript">
    var _ozuid="4977065";
</script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/footer.js?v=20151203"></script>
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


</body>
</html>