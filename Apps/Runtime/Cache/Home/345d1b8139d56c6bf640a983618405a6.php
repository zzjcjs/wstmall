<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <title>填写购物信息 - 蜜芽，中国最领先的进口母婴限时特卖商城</title>
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

                <li><a href="/register?url=http%3A%2F%2Fwww.mia.com%2Forder" title="点击注册" rel="nofollow">免费注册</a></li>
                <li class="line">|</li>

                <li><a href="/login?url=http%3A%2F%2Fwww.mia.com%2Forder" title="点击登录" rel="nofollow">登录</a></li>
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
<link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/cart/cartAdd.css?v=151124" type="text/css">
<!-- 2015.10.22修改 -->
<style type="text/css">
    body{background:#fff;}
    .bknone .w1004 .right{background:#fff;}
    .mscStep2 .rim{border-color: #ededed;}
    .mscStep2 .title{background: #fafafa;height:50px;line-height:50px;color:#555;}
    .conBlock{margin:0 20px;}
    .conBlock .tit a{color:#f53294}
    .sureaddress{padding-left:0;}
    .border{border-top:none;}
    .adressall{color:#333;width:960px;height: auto;}
    .adressall ul{width:975px;}
    .adressall ul li{height:160px;width:310px;margin-right: 15px;margin-top: 15px;}
    .addnewadress{color:#fa4b9b;padding-left: 20px;display: block;padding-bottom:40px;float:left;}
    .showAlladress,.hideAlladress{display:block;padding-right:34px;float:right;cursor:pointer;background:url(http://file04.miyabaobei.com/resources/images/shArrow.png) no-repeat 76px 5px;color:#999;}
    .hideAlladress{background-position: 76px -11px;}
    .adress{border:1px solid #eee;background:none;height:131px;width:270px;padding:16px 19px 11px 19px;}
    .f2{width:270px;height:133px;background:url(http://file04.miyabaobei.com/resources/images/borderbg-310.png) no-repeat;border:none;padding:17px 20px 12px 20px;}
    .adressover{ border:1px solid #fa4b9b;}
    .f2.adressover{border: none;}
    .szmr{float:right;display:none;}
    .adressover .szmr{ display: block;}
    .span1{font-weight: bold;}
    .area{border-top:1px solid #eeeeee;}
    .Consignee{padding-bottom:8px;}
    .tplNameN1,.phone,.span1{float:none;display: inline;}
    .editor a{float:none;color:#999;}
    .area{padding:10px 0 5px 0;}
    .adress .adr1{height:auto;line-height:18px;padding-bottom: 5px;}
    table.msctab th{background:#fbfbfb;}
    .freight .span1{font-weight: normal;}
    .tjdd{background: none;}
    .coupons{border-top: none;}
    .pink{color:#666;}
    .payTotol{float:right;padding-top:12px;}
    .tjdd .pink{float:right;font-size: 24px;color:#fa4b9b;padding-right:140px;}
    .taxrate{ position:relative;}
    .taxrate .span1 {height:26px; line-height:26px;font-weight: normal;}
    .taxrateip{ padding:4px 8px; text-align:left; border:1px solid #ffbdbf; background:#fffafa; display:none; border-radius:4px; position:absolute; z-index:10;right:95px; top:0px;line-height:20px;}
    .taxrateimg{ position:absolute; z-index:102; right:-7px; top:7px;}
    a.gotoSettlement{background:#fa4b9b;height: 42px;line-height: 40px;margin-left:15px;padding:3px 40px;margin-left: 19px;position: absolute;bottom:20px;right:20px;}
    .p20{padding:20px 0;}
    .sureaddress{padding-right:0;margin:0 20px;}
    .gift{color: #fa4b9b}
    .balance .cont{width:270px;}
</style>
<div class="mainHeader bknone">
    <div class="w1004">
        <div class="logo"><a href="/" class="logolink">蜜芽宝贝</a></div>
        <div class="right">
            <ul class="schedule songti step2">
                <li class="actived_f">1.我的购物车</li>
                <li class="current">2.填写核对订单信息</li>
                <li>3.成功提交订单</li>
            </ul>
        </div>
    </div>
</div>
<!--/.mainHeader-->
<div id="tplAddr" style="display:none;">
    <li rowid="">
        <div class="adress adressover">
            <p class="Consignee">
                <strong class="tplName"></strong>
                <span class="span1">收</span>
                <a href="javascript:void(0)" class="szmr setDefault">设为默认</a>
                <span class="moren" style="display:">默认地址</span>
            </p>
            <p class="tplArea area"></p>
            <p class="adr1" ></p>
            <span class="phone tplPhone"></span>
            <div class="editor" style="">
                <a href="javascript:void(0)" class="bianji">修改</a>
                <a href="javascript:void(0)" class="newdelete">删除</a>
            </div>
            <!--设为默认-->
            <!-- 2015.10.22 -->
            <!-- <div class="moren"><img src="http://file02.miyabaobei.com/resources/images/morenicon.png" alt=""></div> -->
            <input type="radio" name="defaultRad" class="defaultRad" checked="checked">
            <!--选中当前项-->
            <div class="adresssure"><img src="http://file02.miyabaobei.com/resources/images/select-46.png" alt=""></div>
            <input type="radio" name="curRadio" class="curRadio" checked="checked">
        </div>
    </li>

</div>

<div id="checkout" class="myShoppingCart w1004 mscStep2">
    <div class="rim">
        <div class="title yahei">填写并核对订单信息</div>

        <div class="conBlock con01 border"  id="ckstep1" data-ok="1" data-ck="1746167">


            <!-- last chg by ouyangyu @20150311 v1 -->
            <div class="titnew">收货人信息&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkerr">请确认收货地址</span></div>
            <!--左边箭头-->

            <!-- 2015.10.22 start-->
            <div style="position:relative; width:979px;height:187px; float:left; overflow:hidden;padding-bottom:22px;">
                <!-- <a href="javascript:void(0);" class="prev disabled" id="prev-01" style="display:none; position:absolute; left:0px; top:0px;">
                    <div class="leftsrow"> <img src="http://file02.miyabaobei.com/resources/images/leftsrow.png" alt=""/></div>
                </a> --><!-- 2015.10.22 end-->
                <div class="jCarouselLite adressall" id="demo-01">
                    <ul>
                        <!-- 地址列表新样式 -->
                        <!-- default -->
                        <li rowid="1746167">
                            <div class="adress f2">
                                <!-- 2015.10.22 start-->
                                <p class="Consignee">
                                    <strong class="tplNameN1">胡军</strong><span class="span1">收</span>
                                    <a href="javascript:void(0)" class="szmr isDefault setDefault">设为默认</a>
                                    <span class="moren" style="display:block">默认地址</span>
                                </p>
                                <p class="area"> 安徽省 马鞍山市  </p><p class="adr1">雨山区 向山镇 安徽工业大学东校区</p></p><span class="phone">15551053527</span>
                                <!-- 2015.10.22 end-->
                                <div class="editor"><a href="javascript:void(0)" class="bianji">修改</a><a href="javascript:void(0)" class="newdelete">删除</a><!-- <a href="javascript:void(0)" class="szmr isDefault setDefault">设为默认</a> --></div>


                                <input type="radio" name="defaultRad" class="defaultRad" checked="checked" />
                                <!-- 2015.10.22 -->
                                <div class="adresssure"><img src="http://file02.miyabaobei.com/resources/images/select-46.png" alt=""/></div>
                                <input type="radio" name="curRadio" class="curRadio" checked="checked" />
                            </div>
                        </li>
                        <!-- end default -->

                        <!-- end 地址列表新样式 -->



                        <!--<li>
                            <div class="adress f2">
                                <strong>李明3 </strong> 收 <span class="phone">13501586953</span>
                                <p class="area"> 北京市 北京市 </p><strong>朝阳区 南苑西路洗净宏源小区10号楼5单元109</strong></p>

                                <div class="editor"><a href="javascript:void(0)" class="bianji">编辑</a><a href="#">删除</a><a href="javascript:void(0)" class="szmr">设为默认</a></div>

                                <div class="moren" style="display:block;"><img src="http://file02.miyabaobei.com/resources/images/morenicon.png" alt=""/></div>
                                <input type="radio" name="defaultRad" class="defaultRad" checked="checked" />

                                <div class="adresssure"><img src="http://file02.miyabaobei.com/resources/images/select.png" alt=""/></div>
                                <input type="radio" name="curRadio" class="curRadio" checked="checked" />
                            </div>
                        </li>-->


                    </ul>
                    <div class="clear"></div>
                </div>        </div>
            <!-- 2015.10.22 start -->
            <span class="addnewadress" style="font-size:12px; font-weight:normal; cursor:pointer">+新增收货地址</span>
            <span class="showAlladress">显示全部地址</span>
            <!-- 2015.10.22 end -->
            <!-- <a href="javascript:void(0);" class="next" id="next-01"><div class="rightsrow"> <img src="http://file02.miyabaobei.com/resources/images/rightsrow.png" alt="" /></div></a> -->
            <div class="clear"></div>
            <script type="text/javascript" language="javascript">
                $(document).ready(function(){
                    //reloadCarouselLite();
                    showAddress();
                });
            </script>
            <script type="text/javascript" language="javascript">
                $(document).ready(function(){
                    $('.showAlladress').click(function() {

                        if($(this).hasClass('hideAlladress')) {
                            $('.jCarouselLite').parent().css('height','187px');
                            $(this).removeClass('hideAlladress').text('显示全部地址');
                        } else {
                            $('.jCarouselLite').parent().css('height','auto');
                            $(this).addClass('hideAlladress').text('收起全部地址');
                        }
                    });
                });
            </script>

            <!--新地址，编辑地址 2-->
            <div class="newadress" style="display:none;">
                <div class="tit">收货人信息</div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                    <input id="new_address_id" type="hidden" name="new_address_id">
                    <input id="new_address_type" type="hidden" name="new_address_type" value="add">
                    <tr id="new_name">
                        <td width="10%" align="right"><span class="pink">*</span> 收货人：</td>
                        <td width="90%"><input type="text" id="ship_name" class="inp w138" onblur="check_shipping('name')" />&nbsp;<span id="new_name_error" class="pink"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="pink">*</span> 所在地区：</td>
                        <td id="address_area">
                            <span id="span_province"><select id="ship_province"><option value="">请选择</option></select></span>
                            <span id="span_city"><select id="ship_city"><option value="">请选择</option></select></span>
                            <span id="span_area"><select id="ship_area"><option value="">请选择</option></select></span>
                            <span id="span_town" style="display:none"></span>
                            &nbsp;<span id="new_area_error" class="pink"></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><span class="pink">*</span> 详细地址：</td>
                        <td><span></span><input type="text" class="inp w308" id="ship_address_detail" onblur="check_shipping('address')" />&nbsp;<span id="new_address_error" class="pink"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="pink">*</span> 手机号码：</td>
                        <td><input type="text" class="inp w138" id="ship_mobile" onblur="check_shipping('mobile')"/>&nbsp;&nbsp;或&nbsp;&nbsp;&nbsp;&nbsp;
                            固定电话：<input type="text" id="ship_phone" class="inp w138" onblur="check_shipping('phone')"/>&nbsp;<span id="new_mobile_error" class="pink"></span></td>
                    </tr>

                    <tr>
                        <td align="left" >&nbsp;</td>
                        <td align="left" >
                            <div class="btn_02 save01" id="saveAddress" data-addid="0">保存收货人信息</div>
                            <div class="btn_02b save01" id="cancelAddress">取消</div>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- 2015.10.22 -->

            <!--新地址，编辑地址结束-->
            <div class="clearfix"></div>
            <!-- last chg by ouyangyu @20150311 v1 end -->


            <!--地址编辑-->

        </div>
        <div class="conBlock con01 p20 border" id="ckstep2" data-ok="1" data-ck='{"payway":"online","shipping":"common"}'>
            <div class="tit">
                支付及配送方式 &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="pink change" data-idx="2">[修改]</a>
                <span class="checkerr">请确认配送信息</span>
            </div>
            <div class="in">
                <div class="default"> 在线支付<br/>普通快递 免运费 </div>
                <div class="payment curSel">
                    <strong>支付方式</strong>
                    <div class="oldintro"><input type="radio" id="pay_online" name="payway" value="online" checked /><label for="pay_online"> 在线支付 即时到帐，支持绝大数银行借记卡及部分银行信用卡</label></div>
                    <strong>配送方式</strong>
                    <div class="pb10">
                        <div class="oldintro"><input type="radio" id="ship_common" name="shipping" value="common" checked /><label for="ship_common"> 普通快递</label><span class="shipping_info"> 免运费</span><span class="col999">（纸尿裤及拉拉裤满2包包邮，奶粉包邮，其他商品满88元包邮）</span></div>
                    </div>
                    <div class="btn_02" id="savePaywayAndShipping">保存支付及配送方式</div>
                </div>
            </div>
        </div>
        <!--发票信息-->

        <!--发票信息 end-->
        <input type="hidden" id="itemType" data-ck ="0"   data-warehouse="0" />
        <div class="conBlock con01 p20 border" id="ckContent">
            <div class="tit"><a href="/cart" class="pink r">返回修改购物车</a>商品清单</div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="msctab tab03 msctabf">
                <thead>
                <tr>
                    <th width="40%">商品</th>
                    <th width="18%">规格</th>
                    <th width="8%">单价</th>
                    <th width="12%">数量</th>
                    <th width="8%">小计</th>
                </tr>
                </thead>


                <!-- <tbody>
                                                <tr>
                                <td><div class="mysp clearfix"  <a href="/item-1064778.html" target="_blank"> <img src="http://img02.miyabaobei.com/d1/p1/item/10/1064/1064778_normal_1.jpg" alt="SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076" width="50" height="50"/> </a> <a href="/item-1064778.html" target="_blank"> SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076																</a> <span style="display: block;margin-top: 14px;color: #999;">商品编号：1064778</span> </div></td>
                                <td align="center"></td>
                                <td align="center">&yen;98.00</td>
                                <td align="center">1</td>
                                <td align="center">&yen;98</td>
                            </tr>
                                            </tbody>-->

                <!-- 20150417 -->
                <tbody class="table-suit">
                <tr>
                    <td>
                        <div class="mysp clearfix" >
                            <a href="/item-1064778.html" target="_blank"> <img src="http://img02.miyabaobei.com/d1/p1/item/10/1064/1064778_normal_1.jpg" alt="SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076" width="50" height="50"/> </a>
                            <div class="single-row">
                                <div class="txt">
                                    SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076
                                </div>
                                <b></b>
                            </div>
                        </div></td>
                    <td align="center"></td>
                    <td align="center">&yen;98.00</td>
                    <td align="center">1</td>

                    <td align="center">&yen;98</td>
                </tr>


                <!-- 赠品 start ,hidden -->
                <!-- 赠品 end -->
                </tbody>
                <!-- /20150417 -->



            </table>
        </div>

        <div class="coupons">
            <div class="left 1">
                <!-- 代金券 -->
                <div style="cursor: pointer;float:left;" id="getcouponlist">
                    <strong>+点击使用代金券</strong>
                </div>
                <div id="coupon_line" style="display:none;"></div>
                <div class="clearfix"></div>
                <div class="couponcon" style="display: none;border:0px solid #fff;">
                </div>
                <div id="couponDiv" class="ajaxcoupon" style=" position:relative; display:none; margin-top:20px;">
                    <div style="height:34px; overflow:hidden;">
                        <input type="text" value="" name="couponCode" placeholder="填写代金券兑换码" class="inp w138" style="float:left;" />
                        <a href="javascript:void(0)" id="useCoupon" style="float:left; margin-left:5px;">使用</a>

                        <span class="useCouErr"><img src="http://file02.miyabaobei.com/resources/images/tipnamebg2.png" class="useCouErrImg" /><span class="useCouErrHtm"></span></span>
                    </div>

                    <p style="line-height: 30px">小贴士：</p>
                    <p>每个订单只能使用一张代金券，订单取消或退货后，代金券不能恢复使用。</p>
                </div>
                <div  class="couponsucess" style="display: none;">
                    <span>代金券减免<strong>0</strong><b>元</b></span>
                    <a href="javascript:void(0)" class="delCoupon">取消</a>
                </div>
                <!---------------红包------------------>
                <div style="display:none; else block;;cursor: pointer; clear:both; margin-top:25px;" id="getRedPaperList">
                    <strong>+使用红包抵消部分总额（您有<font color='red'>0</font>个红包可用）</strong>
                </div>
                <div class="redPapercon" style="display:none;">
                    <div class="usertip2"><span class="usertipcon2">红包不存在！</span>
                        <span class="usertipimg2"> <img src="http://file02.miyabaobei.com/resources/images/icon2.png" alt=""></span>
                    </div>
                    <div class="redThead">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="position:relative; z-index:2">
                            <tbody><tr bgcolor="f5f5f5" height="35">
                                <td width="60">面额</td>
                                <td width="200">有效期</td>
                                <td width="200">来源</td>
                                <td width="">&nbsp;</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="redBody">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="position:relative; z-index:2">
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div  class="redbagsucess" style="display: none;">
                    <span>红包减免<strong>0</strong><b>元</b></span>
                    <a href="javascript:void(0)" class="delCoupon1">取消</a>
                </div>
                <!-- 账户余额 -->

                <div class="balance" id="balance"  >
                    <h5>+点击使用账户余额</h5>
                    <div class="cont" style="display: none">
                        <label for="c1" ><input type="checkbox" class="checkbox" id="c1" name="balance"   disabled="disabled" > 使用余额（账户当前可用余额：<font color="red">0</font>元）</label>
                        <i><b></b></i>
                    </div>
                </div>

            </div>

            <div class="right l">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <tr>
                        <td width="81%" align="right"><span class="pink">1</span> 件商品，总商品金额：</td>
                        <td width="19%" align="right"><span class="pink" id="deal_price" data-price="98.00">&yen;98.00</span></td>
                    </tr>
                    <!--<tr>
    <td align="right">活动优惠：</td>
    <td align="right" id="coupon_price" class="pink" data-price="0">&yen;<span>0</span></td>
  </tr>-->
                    <tr id="coupon_td" style="display:none;">
                        <td align="right">代金券：</td>
                        <td align="right" id="coupon_price" class="pink" data-price="0">-&yen;<span>0</span></td>
                    </tr>
                    <tr id="redbag_td" style="display:none;">
                        <td align="right">红包：</td>
                        <td align="right" id="redbag_price" class="pink" data-price="0">-&yen;<span>0</span></td>
                    </tr>


                    <!-- 2015.10.22 start-->
                    <tr>
                    <tr id="balance_td" style="display:none;">
                        <td align="right">账户余额：</td>
                        <td align="right" id="balance_price" class="pink" data-price="0" >-&yen;<span>0</span></td>
                    </tr>
                    <td height="24" align="right">应付总额：</td>
                    <td height="24" align="right" id="pay_total" data-price="98">
                        <span class="pink">&yen;<span>98.00</span></span>
                    </td>
                    </tr><!-- 2015.10.22 end-->
                </table>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.taxrate').find('.problemicon').mouseenter(function() {
                            $('.taxrateip').show();
                        }).mouseleave(function() {
                            $('.taxrateip').hide();
                        });
                    });
                </script>

            </div>
            <div class="clearfix"></div>
        </div>
        <!--地址-->
        <div class="payway sureaddress"></div>
        <!--地结束-->
        <div class="clearfix tjdd" id="lastPart">
            <span id="loading"  style="display: none;">载入中，请稍等...</span>
            <a href="/cart " class="ContinueToBuy">返回修改购物车</a>
            <a href="<?php echo U('Mia/submitOrder');?>" class="gotoSettlement yahei r" id="placeOrder" data-w="40">结算</a>
            <span class="pink yahei">&yen;<span>98.00</span></span>
            <span class="payTotol">应付总额：</span>
            <!-- 海关提醒 -->
            <div class="custWarning" style="display: none;">
                <i></i>
                <h5>温馨提示：</h5>
                <p>订单中 <span class="skus"></span> 为宁波保税区商品，您本账户的实名认证身份证号码已经被宁波海关判定为超出“个人自用”原则，身份证号码 / 账户 / 手机号 / 收件地址已经被宁波海关锁定且无法解锁，无法再购买宁波保税区的商品，请您谅解。如若购买其他商品请修改购物车。</p>
            </div>
            <!-- /海关提醒 -->
        </div>
    </div>
</div>
<link rel="stylesheet" href="http://file02.miyabaobei.com/resources/styles/jquery-ui.css" type="text/css">
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/jquery-dialog-min.js"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/jquery-confirm.js"></script>

<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/order/orderxg.js?v=151124"></script>
<script type="text/javascript" src="/Public/js/order_coupon.js"></script>
<script type="text/javascript" src="http://file01.miyabaobei.com/resources/scripts/order/jcarousellite.js?v=201508271622"></script>

<script type="text/javascript">// <![CDATA[
var google_tag_params = {
//BFD商品页参数开始
    bfd_sid : getcookie('sid'),
    bfd_cart_listgoods : "1064778,1 ",
    bfd_freight : "0",
    //晶赞
    jz_productId_list : "1064778,",
    jz_totalPrice : 98,
    jz_totalNum: 1,
//criteo购物车商品列表
    cr_cart_items :  [{id:1064778,price:98.00,quantity:1},],
    p_type :'d'
};
</script>
<div class="simpleVersionFooter  gray2">
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