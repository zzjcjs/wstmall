<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>蜜芽-母婴限时特卖商城-进口奶粉,纸尿裤,辅食,童装-100%正品、安全放心!</title>
<meta name="keywords" content="蜜芽,母婴商城,进口母婴,纸尿裤,奶粉,辅食,母婴用品,儿童玩具,童装,童鞋,母婴特卖" />
<meta name="description" content="蜜芽专业进口母婴特卖商城，为亿万中国妈妈提供进口奶粉、纸尿裤、儿童玩具、服饰等品牌母婴用品。100%正品，安全放心，让您享受轻松愉悦的 网上购物体验！">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="hujun2wwn">
<link href="/Public/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/images/favicon.ico" rel="icon" type="image/x-icon" />

<link href="/Public/css/newHeaderFooter.css" rel="stylesheet">
<link href="/Public/css/newPub.css" rel="stylesheet">
<link href="/Public/css/bannerState.css" rel="stylesheet">
<link href="/Public/css/mia_skin.css" rel="stylesheet">
<link href="/Public/css/newIndexMain.css" rel="stylesheet">
<link href="/Public/css/mymiacss.css" rel="stylesheet">
<link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/main.css?v=20151117" type="text/css">

<script type="text/javascript" src="/Public/js/jquery.1.11.3.min.js"></script>
<script type="text/javascript" src="/Public/js/cui.js"></script>
<script type="text/javascript" src="/Public/js/newMiYaPub.js"></script>
<script type="text/javascript" src="/Public/js/newIndex.js"></script>
<script type="text/javascript" src="/Public/js/init.js"></script>
<script type="text/javascript" src="/Public/js/topslide.js"></script>
<script type="text/javascript">
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
    var bbdMallName = "<?php echo ($CONF['mallName']); ?>";
    $(function() {
        $('.lazyImg').lazyload({ effect: "fadeIn",failurelimit : 10,threshold: 200,placeholder:currDefaultImg});
    });
</script>
<script type="text/javascript" src="/Public/js/mymiajs.js"></script>



</head>
<body>
<div class="newTN clearfix">
    <div class="w1000">
        <div class="r">
            <?php if(session('WST_USER.userId')>0){ ?>
            <ul >
                <li><a href="<?php echo U('Users/logout');?>">退出</a></li>
                <li class="line">|</li>
                <li><a href="/help.html" rel="nofollow">帮助中心</a></li>
                <li class="line">|</li>
                <li class="mymia mymiaBtn PubBtnHover">
                    <span class="indexPubTop">
                    <a href="<?php echo U('Users/index');?>" target="_blank" rel="nofollow">我的蜜芽</a>
                    </span>
                    <div class="mymiaCon PubConHover">
                        <a href="/order_lists" rel="nofollow">我的订单</a>
                        <a href="/my_getredbag" rel="nofollow">我的红包</a>
                        <a href="/my_coupon" rel="nofollow">我的代金券</a>
                        <a href="/my_brand" rel="nofollow">我收藏的品牌</a>
                        <a href="/my_collect" rel="nofollow">我收藏的商品</a>
                    </div>
                </li>
                <li class="line">|</li>
                <li>你好，<span ><?php echo ($WST_USER['loginName']); ?></span></li>
            </ul>
            <?php }else{ ?>
            <ul >
                <li><a href="/help.html">帮助中心</a></li>
                <li class="line">|</li>
                <li><a href="<?php echo U('Users/regist');?>" title="点击注册" rel="nofollow">免费注册</a></li>
                <li class="line">|</li>
                <li><a href="<?php echo U('Users/login');?>" title="点击登录" rel="nofollow">登录</a></li>
                <li class="line">|</li>
                <li>您好，欢迎来到宝宝帝母婴商城 </li>
            </ul>
            <?php } ?>
        </div>

        <div class="l">
            <ul>
                <li class="cur"><a href="/">宝宝帝首页</a></li>
                <li ><a href="javascript:addToFavorite()">收藏宝宝帝</a></li>
                <li class="phone">
                    <a href="#" data-html="true" tabindex="0" role="button" data-toggle="popover" data-trigger="hover" data-placement="bottom"
                       data-template='<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" style="padding:0px;width:200px;"></div></div>'
                       title="微信扫一扫" data-html="true" data-content="<img class='img-responsive' src='/Public/images/weixin.jpg'>">
                        宝宝帝微商城
                    </a>
                </li>
                <li style="background:url('/Public/images/phone.gif') no-repeat center center;width:120px;border-right:1px solid #e5e5e5;overflow:hidden;text-indent:-999px;">400-789-2000</li>
            </ul>
        </div>

    </div>
</div>





    <!--需要引入的文件-->
<link rel="stylesheet" href="/Public/css/mia_cart_new.css" type="text/css">
<link rel="stylesheet" href="/Public/css/mia_cart.css" type="text/css">
<link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/jqwin.css?v=151124">
<style>
    #confirmDiv .ok { display:inline-block; zoom:1; *display:inline; border:1px #ff69b3 solid; margin:0 5px;
        background:#ff69b3;width:63px; height:24px; line-height:24px; text-align:center; color:#fff; border-radius:3px;
    }
    #confirmDiv .cancel { display:inline-block; zoom:1; *display:inline; border:1px #d6d6d6 solid; margin:0 5px;
        background:#fcfcfc;width:63px; height:24px; line-height:24px; text-align:center; color:#000; border-radius:3px;
    }
    .fixed_c_count{position: fixed;background-color: #fff;z-index: 9;bottom: 0;width: 1000px}
    /*
    #confirmDiv { position:absolute; top:50%; left:50%; margin:-87px 0 0 -183px; width:367px; height:174px;}
    */
    .dpyushou{margin-top: 5px;color:#999;}
    .tzyushou{float:left;margin-top: 10px;margin-left:-44px;color:#999;}

    /* 20151021购物车修改-lz */
    body,.bknone .w1004 .right,.c_title,.cl_tit_Newbg{background: #fff;}
    .cl_items .gooditem,.c_list{overflow:inherit;}
    .it_operate{width:48px;}
    .cl_0{background: #fafafa;}
    .c_title{border-bottom:2px solid #eaeaea;border-top:none;padding: 10px 0px;margin-left: 10px;margin-right: 10px;}
    .c_title span{border-bottom: 2px solid #fa4b9b;padding-bottom: 10px;padding-right: 10px;color: #333;}
    .ci input,.ci label{display: none;}
    .cl_wordsNew{margin-left: 5px;margin-top: 4px!important;font-size:18px;color:#333;font-family: 'Microsoft YaHei';}
    .c_list .cl_con{margin-bottom:0px;border:1px solid #ededed;}
    .c_count{background: #f8f8f8;border-left:1px solid #ededed;border-right:1px solid #ededed;margin: 0 15px; padding-bottom: 15px;}
    .c_count .funcs,.c_count .statistics{border-top:none;font-size:12px;color: #999;}
    .c_count .statistics{float: right;padding-right: 18px;}
    .funcs label{font-size:14px;font-weight: bold;}
    .newCart_ze{margin-top: 28px;margin-bottom: 8px;}
    .newCart_ze,.newCart_yh,.newCart_sf{float: right;width:100%;}
    .newCart_zespan,.newCart_yhspan{width: 383px;float: left;}
    .newCart_jies{float: right;}
    .c_count .statistics .totals1{margin-top: 8px;}
    .c_count .statistics .totals0{width: 320px;margin-top: 11px;}
    .newCart_jies{margin-top: 10px;}
    .schedule{background: url(http://www.wstmall.local/Public/images/cart_step_fN.png) no-repeat;clear: both;}
    .cl_tag.disabled{background: none;width:58px;height:28px;margin-left:19px;margin-right:10px;}
    .cl_tag.disabled span{background: #fb5b71;color: #fff;text-align: center;height:28px;width:58px;padding: 0;line-height: 28px;font-size: 14px;}
    .goodno_sl{position:relative;*zoom:1;}
    .goodno_sl span{background: url(/resources/images/cart_sl_up.png) no-repeat right center;width: 46px;display: inline-block;cursor: pointer;}
    .it_des .goodno{margin-top: 6px;}
    .it_des .goodno.goodno_color{color: #fa4b9b}
    .cart_sl_over{background: url(/resources/images/cart_sl_over.png) no-repeat;width: 212px;height:44px;line-height:2;position: absolute;top: 17px;color: #fa4b9b;padding: 12px;left:0;display: none;}
    /* 满减---如果不是高亮，在span的父级增加.disabled_h */
    .cl_tag.disabled_h span{background: #bbbbbb;}
    /* 满减---.cl_words里加颜色加.cl_wordsc, */
    .cl_wordsc{color: #999999;}
    /* 选中状态---.gooditem里加颜色加.newCart_xz, */
    .cl_words em{font-size: 12px;font-family: Verdana, Geneva, sans-serif;color: #666;}
    .newCart_xz{background-color: #fffaf3;}
    .cl_tit{padding: 14px 26px;}
    .cl_words{margin-top: 8px!important;}
    .cl_words_new{margin-top: 4px!important;}
    .cl_words a{color: #fa4b9b;font-size: 14px;margin-left: 17px;}
    .cl_words a:hover{text-decoration: underline;}

    /*"蜜芽广州保税仓发货"失效版块样式*/
    .cl_items_SX{background: #fafafa;border-bottom: 1px dashed #e6e6e6;border-top: 1px dashed #e6e6e6;}
    .it_mck .mck{margin-left: 15px;}
    .it_mck_SX{margin-top: 34px;width: 41px;height: 22px;margin-right: 9px;background: url(/resources/images/cart_sx_f.png) no-repeat;}
    .cl_items .gooditem{margin:0;padding-left: 15px;}
    .c_count_gz{background: #fff;}
    .c_count_gz  .statistics{color: #333333}
    .c_count_gz .funcs,.c_count_gz .statistics{height: 209px;}
    .newCart_sf{position: relative;margin-top: 10px;}
    .cart_sf_bg{background: url(/resources/images/cart_sx_sf.png) no-repeat;display: block;width: 153px;height: 24px;color: #fa4b9b;text-align: center;line-height: 24px;position: absolute;top:-5px;left:166px;}
    /*"蜜芽重庆保税仓赠品样式*/
    a.cart_zp_btn{background: url(/resources/images/cart_zp.png) no-repeat;display: inline-block;width: 68px;height:28px;font-size: 12px;text-align: center;line-height: 28px;cursor: pointer;}
    a.cart_zp_btn:hover{text-decoration: none;}
    /*"蜜芽宁波保税仓赠品样式*/
    .cl_words_zp em{font-size: 12px;}
    .cl_words_zp{color: #999999;display: block;}

    /*展示大图样式*/
    .viewpic_block{width: 320px;background: #fff;padding:10px;box-shadow: 2px 2px 5px #999;-webkit-box-shadow: 2px 2px 5px #999;display: block;position: absolute;z-index: 100000; display: none;border:1px solid #f3f3f3;}

    .viewpic_con{background:#fff;width: 100%;min-height: 200px;margin:0;padding: 0}
    .viewpic_con img{width:100%;}
    .viewpic_arrow{position: absolute;left: -10px;top:45%;display: block;width: 10px;height:15px;background: url(/resources/images/cart_viewpic_arrow.png) no-repeat;}
    /*无货异常*/
    .tzlist{overflow: hidden;}
</style>
<script type="text/javascript" src="/resources/scripts/cart/listscroll.js?v=151124"></script><!--商品滚动js-->
<div class="mainHeader bknone">
    <div class="w1004">
        <div class="logo"><a href="/" class="logolink">蜜芽宝贝</a></div>
        <div class="right">
            <ul class="schedule songti step1">
                <li class="current">1.我的购物车</li>
                <li>2.填写核对订单信息</li>
                <li>3.成功提交订单</li>
            </ul>
        </div>

    </div>
</div>
<div class="c_wrap w1004" id="shopping_cart">
    <div class="c_title yahei">
        <span>我的购物车</span><!--  <span class="nums">(<span><em>30</em>/99</span>)</span> -->
    </div>
    <div class="c_menu">
        <div class="ci ci0"><input class="mckall" type="checkbox" value="0"><label>全选</label></div>
        <div class="ci ci1">商品</div>
        <div class="ci ci2">规格</div>
        <div class="ci ci3">单价</div>
        <div class="ci ci4">数量</div>
        <div class="ci ci5">小计</div>
        <div class="ci ci6">操作</div>
    </div>
    <div class="c_list" data-warehouse="all" data-warehouse_id="40" >
        <div class="cl_con">
            <div class="cl_tit cl_">
                <div class=""><input class="mckall" type="checkbox" value="0"></div>

                <!-- 20151021修改 lz begin -->
                <div class="cl_wordsNew"><!-- <span>0</span>件商品</span> --><span>蜜芽北京仓/商家发货</span></div>
                <!-- 20151021修改 lz end -->
            </div>

            <div class="cl_promotion">
                <div class="cl_items ">
                    <div class="gooditem clearfix " >
                        <div class="it_mck"><input name="productcheck" class="mck" type="checkbox" checked cart-sku="1064778" value="cc6a47925bcde7284257d726cd6d4889"></div>
                        <div class="it_img"><a href="/item-1064778.html" title="SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076" target="_blank"> <img src="http://img01.miyabaobei.com/d1/p1/item/10/1064/1064778_normal_1.jpg" alt="SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076" ></a></div>
                        <div class="it_des">
                            <p class="goodname">
                                <a href="/item-1064778.html" title="SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076" target="_blank">
                                    SHILOH婴儿摇铃玩具套装 马戏团 黄色 SH00-12YL0076                                                    </a>
                            </p>
                            <p class="goodno">
                                商品编号：1064778</p>

                        </div>
                        <div class="it_size"></div>
                        <div class="it_price"><p class="goodsp">98.00</p><p class="goodmp">268.00</p></div>
                        <div class="it_num">
                            <div class="dp_bt">
                                <span class="dpcom dp_jian disabled" id="cart_deduct"></span>
                                <input autocomplete="off" name="count" type="text" class="dp_num" maxlength="2" value="1" rowid="1064778" warehouse_id="40" readonly/>
                                <span class="dpcom dp_jia" id="cart_add"></span>
                            </div>
                        </div>
                        <div class="it_total subTotal">&yen;98</div>
                        <div class="it_operate"><p class="sc"><a href="javascript:;" class="delete">删除</a></p><p class="xgyh">
                        </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="c_count cashier_part" id="cashier_part">
        <div class="funcs">
            <input class="mckall" type="checkbox" value="0" id="mckall"><label>全选</label>
            <a href="javascript:;" id="removeAll" class="removeAll">删除选择商品</a>
            <a href="javascript:;" id="batchAddMine" class="batchAddMine">移入收藏夹</a>
        </div>
        <div class="statistics">
            <!-- 增加商品总额和活动优惠 20151021 lz begin -->
            <div class="newCart_ze"><span class="newCart_zespan">商品总额：</span><span id="product_total_price_all">¥98</span></div>
            <div class="newCart_yh"><span class="newCart_yhspan">活动优惠：</span><span id="thrift_price_all">-¥0</span></div>
            <div class="newCart_sf" style="display:none;">
                <span class="cart_sf_bg" >关税≤50，才能免征哦</span>
                <span class="newCart_yhspan">订单关税：</span><span  id="taxes_price_all">¥</span></div>
            <div class="totals1">¥<span id="total_pay_all">98</span></div>
            <div class="totals0">已选择商品<em id="total_quantity_all">1</em>件&nbsp;&nbsp;合计（不含运费）：</div>
            <div class="clearfix" style="clear:both;height:0;font-size:0;"></div>
            <div class="newCart_jies">
                <a href="<?php echo U('Mia/checkOrderInfo');?>" id="btnJieSuan" class="btnorder btnJieSuan" data-warehouse="40"></a>
            </div>
            <!-- 增加商品总额和活动优惠 20151021 lz end -->
        </div>
    </div>
</div>
<!--凑单列表-->
<div class="c_combin w1004" id="combination" style="margin-top:20px;">
    <h4>凑单商品</h4>
    <div class="cblist">
        <div class="scrollwrap">
            <ul id="cdspscroll">
                <li>
                    <div class="cb_img"><a href="/item-1043147.html" title="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 红底荷花边" target="_blank"><img src="http://img01.miyabaobei.com/item/10/1043/1043147_normal_2.jpg" alt="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 红底荷花边"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">海绵泡泡 himipopo立体袜新生宝宝</div>
                        <div class="cb_botm">
                            <span class="sp">¥19.00</span><span class="mp">¥68.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1043147">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1043154.html" title="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 黑底粉格带" target="_blank"><img src="http://img01.miyabaobei.com/item/10/1043/1043154_normal_2.jpg" alt="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 黑底粉格带"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">海绵泡泡 himipopo立体袜新生宝宝</div>
                        <div class="cb_botm">
                            <span class="sp">¥19.00</span><span class="mp">¥68.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1043154">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1043158.html" title="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 黑底大红花边" target="_blank"><img src="http://img01.miyabaobei.com/item/10/1043/1043158_normal_2.jpg" alt="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 黑底大红花边"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">海绵泡泡 himipopo立体袜新生宝宝</div>
                        <div class="cb_botm">
                            <span class="sp">¥19.00</span><span class="mp">¥68.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1043158">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1043160.html" title="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 绿点玫红花边" target="_blank"><img src="http://img01.miyabaobei.com/item/10/1043/1043160_normal_2.jpg" alt="海绵泡泡 himipopo 立体袜新生宝宝3D立体造型鞋袜 绿点玫红花边"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">海绵泡泡 himipopo立体袜新生宝宝</div>
                        <div class="cb_botm">
                            <span class="sp">¥19.00</span><span class="mp">¥68.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1043160">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1106308.html" title="pure's 漂儿适 韩国进口婴儿手口湿巾尊贵便携装 20片" target="_blank"><img src="http://img01.miyabaobei.com/d1/p2/item/11/1106/1106308_normal_2.jpg" alt="pure's 漂儿适 韩国进口婴儿手口湿巾尊贵便携装 20片"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">pure's 漂儿适韩国进口婴儿手口湿巾</div>
                        <div class="cb_botm">
                            <span class="sp">¥12.00</span><span class="mp">¥28.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1106308">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1108981.html" title="runben润本 婴儿手口湿巾无盖80片装" target="_blank"><img src="http://img01.miyabaobei.com/d1/p2/item/11/1108/1108981_normal_2.jpg" alt="runben润本 婴儿手口湿巾无盖80片装"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">runben润本婴儿手口湿巾无盖80片装</div>
                        <div class="cb_botm">
                            <span class="sp">¥8.90</span><span class="mp">¥18.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1108981">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1116904.html" title="GL 格朗 4片装宝宝退热贴 安全物理退烧TR-01 蓝" target="_blank"><img src="http://img01.miyabaobei.com/d1/p2/item/11/1116/1116904_normal_2.jpg" alt="GL 格朗 4片装宝宝退热贴 安全物理退烧TR-01 蓝"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">GL 格朗4片装宝宝退热贴 安全物理退烧</div>
                        <div class="cb_botm">
                            <span class="sp">¥18.00</span><span class="mp">¥39.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1116904">加入购物车</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cb_img"><a href="/item-1122155.html" title="巧尼熊 新生儿秋冬保暖帽子双耳帽初生儿用品 粉" target="_blank"><img src="http://img01.miyabaobei.com/d1/p2/item/11/1122/1122155_normal_2.jpg" alt="巧尼熊 新生儿秋冬保暖帽子双耳帽初生儿用品 粉"></a></div>
                    <div class="cb_des">
                        <div class="cb_name">巧尼熊新生儿秋冬保暖帽子双耳帽初生儿用品</div>
                        <div class="cb_botm">
                            <span class="sp">¥18.00</span><span class="mp">¥59.00</span>
                            <a href="javascript:;" class="btngwc addToCart" data-id="1122155">加入购物车</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <a href="javascript:;" class="arow arow_left" id="arrowl"></a>
        <a href="javascript:;" class="arow arow_right" id="arrowr"></a>
    </div>
</div>
<div style="margin-top:20px;"></div>
<!--还购买的列表-->
<!-- 弹层阴影 -->
<div class="popBg"></div>
<!-- 温馨提示弹层 start -->
<div class="popCart" style="margin-top:-170px;">
    <span class="pop_closeBtn"></span>
    <img src="/resources/images/pop_rbsmaile.png" alt="">
    <h3 class="pop_tit">温馨提示</h3>
    <div class="pop_txt">
        <p>免税店和直邮商品需要办理清关手续，请您配合实名认证，以确保您购买的商品顺利通过海关检查。</p>
        <p>如有疑问，请您随时拨打蜜芽客服热线400-789-2000咨询。</p>
    </div>
    <a class="popGo" href="/my_identification.html" target="_blank" title=""></a>
</div>
<!-- 实名认证 start -->
<div class="popCart_name" style="margin-top:-110px;display:none;">
    <span class="pop_closeBtn"></span>
    <img class="popImg" src="/resources/images/pop_rb.png" alt="">
    <h3 class="pop_tit">温馨提示</h3>
    <div class="pop_txt">免税店和直邮商品需要办理清关手续，请您配合<a href="/my_identification.html" target="_blank" title="">实名认证</a>以确保您购买的商品顺利通过海关检查。</div>
    <a class="popGo" href="/my_identification.html" target="_blank" title=""></a>
</div>

<!-- 关税提示 start -->
<div class="popShui">
    <div class="head"><i class="icon-off"></i></div>
    <div class="cont">
        <h3>省钱小提示</h3>
        <p>当前关税已超50元，只有小于等于50元时才能免征哦！</p>
        <div class="btns">
            <a href="#" title="" class="btn1">分单购买</a>
            <a href="#" title="" class="btn2">继续结算</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('span.pop_closeBtn').mouseover(function() {
            $(this).addClass('pop_closeBtnH');
        }).mouseleave(function() {
            $(this).removeClass('pop_closeBtnH');
        }).click(function() {
            $(this).parent().hide();
            $('.popBg').hide();
        });
        $('.popGo').mouseover(function() {
            $(this).addClass('popGoH');
        }).mouseleave(function() {
            $(this).removeClass('popGoH');
        });
    });
</script>
<!-- 实名认证 end -->
<!-- 温馨提示弹层 end -->
<script type="text/javascript" src="http://file03.miyabaobei.com/resources/scripts/jquery-dialog-min.js"></script>
<script type="text/javascript" src="/Public/js/cart.js"></script>
<script type="text/javascript" src="http://file03.miyabaobei.com/resources/scripts/cart/cart.js?v=151125"></script>
<!--展示大图-->
<script type="text/javascript" src="http://file03.miyabaobei.com/resources/scripts/cart/viewpic.js"></script>
<script>
    (function(){
        $('.it_img').viewPic();
    })();
</script>

<!-- 优惠活动列表 -->

<div class="promotionLists" id="promotionLists"> </div>
<!-- 优惠活动列表 -->
<div id="dialog"></div>

<div class="rfrim">
    <div class="rightFunction dn">
        <div class="CustomerPhone NFBpub"> <a href="javascript:void(0);" class="cur NFBpub">客服电话</a>
            <div class="phone400 NFBpub pop">400-789-2000</div>
        </div>
        <div class="Mobilephone NFBpub"> <a href="javascript:void(0);" class="cur NFBpub">手机逛蜜芽</a>
            <div class="phoneewm NFBpub pop">400-789-2000</div>
        </div>
        <div class="ShoppingCart NFBpub"> <a href="/cart" class="cur NFBpub">购物车</a>
            <div class="Nnum" id="rightFunctionCartNum" style="display:none;">0</div>
            <!--        <div class="Nnum" id="rightFunctionCartNum">0</div>-->
        </div>
        <div class="Ngotop NFBpub"> <a href="javascript:void(0)" class="cur NFBpub">返回顶部</a> </div>
    </div>
</div>
<!--last change by ou,lzj @ 20151014-->
<div class="leftExtension dn" >
    <!--
    <a href="/event/send_coupon" target="_blank" class="topImage xxx" style="display:none;"><img src="http://file03.miyabaobei.com/resources/images/index_left_wx3Dc.png?v=20150710" /></a>
    -->
    <div class="LEwx"></div>
</div>
<style>
    .leftExtension { bottom:443px; /*bottom:290px;*/}
</style>


<div class="Nfooter">
    <div class="Genuine">
        <div class="w1000">
            <a href="/guarantee" rel="nofollow"  target="_blank">
                <img src=http://file01.miyabaobei.com/resources/images/index_footer_gen01.jpg?v=20151014" class="lazyload" alt=""/></a>
            <a href="/guarantee#area3" rel="nofollow"  target="_blank">
                <img src=http://file01.miyabaobei.com/resources/images/index_footer_gen02.gif?v=20151014" class="lazyload" alt=""/></a>
            <a href="/guarantee#area7" rel="nofollow"  target="_blank">
                <img src="http://file01.miyabaobei.com/resources/images/index_footer_gen03.gif" class="lazyload" alt=""/></a>
            <a href="/guarantee#area6" rel="nofollow"  target="_blank">
                <img src="http://file01.miyabaobei.com/resources/images/index_footer_gen04.jpg?v=20151014" class="lazyload" alt=""/></a>
            <a href="/guarantee#area5" rel="nofollow" target="_blank">
                <img src="http://file01.miyabaobei.com/resources/images/index_footer_gen05.jpg" class="lazyload" alt=""/></a>
            <a href="/guarantee#area8" rel="nofollow" target="_blank">
                <img src="http://file01.miyabaobei.com/resources/images/index_footer_gen06.jpg?v=2" class="lazyload" alt=""/></a>
        </div>
    </div>
    <div class="Nhelp">
        <div class="w1000 clearfix">
            <div class="r" style="margin-right: 90px;">
                <ul class="EWM">
                    <li class="strong">关注宝宝帝</li>
                    <li>
                        <img src="http://file01.miyabaobei.com/resources/images/index_fd_sj.gif?v=1" alt="宝宝帝微商城"/>
                        <div class="right">
                            <a href="http://weibo.com/miyabaobei2014" target="_blank"><img src="http://file01.miyabaobei.com/resources/images/index_fd_wb.gif" alt="官方微博"/></a>
                            <div class="PubBtnHover">
                                <img src="http://file01.miyabaobei.com/resources/images/index_fd_wx.gif" alt="官方微信"/>
                                <img src="http://file01.miyabaobei.com/resources/images/index_fd_wx_more.gif?v=2" class="wxmore" alt=""/>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="l">
                <ul>
                    <li class="strong">使用帮助</li>
                    <li><a href="/help-9.html" rel="nofollow">会员等级</a></li>
                    <li><a href="/help-10.html" rel="nofollow">会员积分</a></li>
                    <li><a href="/help-147.html" rel="nofollow">常见问题</a></li>
                    <li><a href="/help.html" rel="nofollow">帮助中心</a></li>
                </ul>
                <ul>
                    <li class="strong">支付方式</li>
                    <li><a href="/help-11.html" rel="nofollow">在线支付</a></li>
                    <li><a href="/help-13.html" rel="nofollow">代金券支付</a></li>
                </ul>
                <ul>
                    <li class="strong">配送方式</li>
                    <li><a href="/help-15.html" rel="nofollow">包邮政策</a></li>
                    <li><a href="/help-16.html" rel="nofollow">配送说明</a></li>
                    <li><a href="/help-17.html" rel="nofollow">发货时间</a></li>
                    <li><a href="/help-20.html" rel="nofollow">验货签收</a></li>
                </ul>
                <ul>
                    <li class="strong">售后服务</li>
                    <li><a href="/help-21.html" rel="nofollow">正品承诺</a></li>
                    <li><a href="/help-22.html" rel="nofollow">售后咨询</a></li>
                    <li><a href="/help-22.html" rel="nofollow">退货政策</a></li>
                    <li><a href="/help-23.html" rel="nofollow">退货流程</a></li>
                    <li><a href="/help-24.html" rel="nofollow">退款方式</a></li>
                </ul>
                <ul class="NContact" style="width:196px;">
                    <li class="strong">联系方式</li>
                    <li>总裁邮箱 ceo@mia.com</li>
                    <li>商务合作 bd@mia.com</li>
                    <li>媒体合作 pr@mia.com</li>
                    <li>采购中心 cx@mia.com</li>
                    <li>企业采购 qiye@mia.com</li>
                </ul>
            </div>
        </div>
        <div class="Nfriend w1000">
            <dl>
                <dt>友情链接</dt>
                <dd>
                    <a href="http://www.mia.com/diapers.html" target="_blank" title="">纸尿裤</a>
                    <a href="http://www.youjiao.com/" target="_blank" title="">幼教网</a>
                    <a href="http://www.mia.com/formulas.html" target="_blank" title="">奶粉</a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="Nlink">
        <div class="w1000">
            <p><a href="/help-34.html" rel="nofollow">关于宝宝帝</a> |
                <a href="/help-43.html" rel="nofollow" >加入宝宝帝</a> |
                <a href="/help-42.html" rel="nofollow">商务合作</a> |
                <a href="/help.html" rel="nofollow">帮助中心</a> |
                <a href="/help-44.html" rel="nofollow">联系我们</a> |
                <a href="/links.html" target="_blank">友情链接</a> |
                <a href="javascript:void(0)" id="backToMobile" target="_blank" rel="nofollow" data-domain="mia.com">触屏版</a> |
                <a href="/media.html" target="_blank" rel="nofollow">媒体报道</a> |
                <a href="http://www.mmjihua.com" rel="nofollow" >妈米计划</a></p>
            京公网安备：11010502027270 | 营业执照：110105014191741 | 食品流通许可证：SP1101051410296669 | 京ICP证140430号 | 京ICP备14006215号<br/>
            Copyright &copy; 2015 北京花旺在线商贸有限公司 Miyabaobei.com 保留一切权利。 客服热线： 400-789-2000<br/>
            地址：北京市朝阳区朝外大街10号（A1区）7层704单元 &emsp;&emsp;&emsp;电话：010-56733456
            <p class="cert">
                <a target="_blank" href="http://www.ectrustprc.org.cn/certificate.id/certificateb.php?id=20035358">
                    <img width="105" border="0" src="http://www.ectrustprc.org.cn/logo/bluelogo.gif"></a>
                <span style="display:inline-block;position:relative;width:auto;">
                    <a style="display:inline-block;" kx_type="图标式" target="_blank" tabindex="-1" id="kx_verify" href="https://ss.knet.cn/verifyseal.dll?sn=e1410211101055522320bq000000&amp;ct=df&amp;a=1&amp;pa=0.9654322788119316">
                        <img width="80" alt="可信网站" oncontextmenu="return false;" style="border:none;" src="http://rr.knet.cn/static/images/logo/cnnic.png"></a></span>
                <a target="_blank" href="https://search.szfw.org/cert/l/CX20141201005712006003" id="___szfw_logo___">
                    <img src="http://file01.miyabaobei.com/resources/images/res/chengxin.jpg"></a>
                <script type="text/javascript">(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
                <img width="105" src="http://file01.miyabaobei.com/resources/images/res/alipay.jpg"></p>
        </div>
    </div>
</div>
</body>
</html>