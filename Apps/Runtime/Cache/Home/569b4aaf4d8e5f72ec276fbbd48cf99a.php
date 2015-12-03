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


<div class="NewL">
    <div class="w1000">
        <div class="r rel">
            <div class="sCartBtn">
                <div class="sCB" id="cart_num_box">
                    <a href="<?php echo U('Cart/cart');?>">
                        <div class="l car indexPubTop"></div>
                        <div class="l line"></div>
                        <div class="l text">购物车
                                <span style="display:none;">
                                    <span id="cart_num">0</span>件
                                </span>
                        </div>
                        <div class="l dot indexPubTop"></div>
                    </a>
                    <div class="sCC sCartCon" id="shop_cart">
                    </div>
                    <div class="line2"></div>
                </div>
            </div>
            <div class="genuine">
                <a href="#"><img src="http://file01.miyabaobei.com/resources/images/index_icon06.gif?v=20151014" alt=""/></a>
                <a href="#"><img src="http://file01.miyabaobei.com/resources/images/index_icon07.gif?v=1" alt=""/></a>
                <a href="#"><img src="http://file01.miyabaobei.com/resources/images/index_icon08.gif?v=20151014" alt=""/></a></div>
            </div>
        <a href="/mia"><img src="/Public/images/logo.gif" alt="" class="nlogo"/></a> </div>
</div>

<div class="Nnav">
    <div class="w1000">
        <!-- 分类开始 -->
        <div class="CFBtn indexPubTop">
            <div class="dot indexPubTop sCB"> 商品分类
                <div class="CFCon dn">
                    <div class="l left">
                        <ul class="CateTitle">

                            <li class="current"><div class="ocicon"><div><img src="http://img.miyabaobei.com/other/15212054710946.png" img1="http://img.miyabaobei.com/other/15212054706985.png" img2="http://img.miyabaobei.com/other/15212054710946.png" alt="" style="max-height:22px;max-width:22px;"></div></div>宝宝吃什么</li>
                            <li><div class="ocicon"><div><img src="http://img.miyabaobei.com/d1/p1/2015/08/21/ce/a0/cea0cd9f1484f47bb60389a515b36770.png" img1="http://img.miyabaobei.com/d1/p1/2015/08/21/ce/a0/cea0cd9f1484f47bb60389a515b36770.png" img2="http://img.miyabaobei.com/other/15212062550131.png" alt="" style="max-height:22px;max-width:22px;"></div></div>宝宝用什么</li>
                            <li><div class="ocicon"><div><img src="http://img.miyabaobei.com/other/15212062719335.png" img1="http://img.miyabaobei.com/other/15212062719335.png" img2="http://img.miyabaobei.com/other/15212062722138.png" alt="" style="max-height:22px;max-width:22px;"></div></div>宝宝穿什么</li>
                            <li><div class="ocicon"><div><img src="http://img.miyabaobei.com/other/15212062901133.png" img1="http://img.miyabaobei.com/other/15212062901133.png" img2="http://img.miyabaobei.com/other/15212062904265.png" alt="" style="max-height:22px;max-width:22px;"></div></div>宝宝玩什么</li>
                            <li><div class="ocicon"><div><img src="http://img.miyabaobei.com/other/15212063403504.png" img1="http://img.miyabaobei.com/other/15212063403504.png" img2="http://img.miyabaobei.com/other/15212063406102.png" alt="" style="max-height:22px;max-width:22px;"></div></div>出行装备</li>
                            <li><div class="ocicon"><div><img src="http://img.miyabaobei.com/other/15212063504225.png" img1="http://img.miyabaobei.com/other/15212063504225.png" img2="http://img.miyabaobei.com/other/15212063507959.png" alt="" style="max-height:22px;max-width:22px;"></div></div>妈妈专区</li>
                            <li><div class="ocicon"><div><img src="http://img.miyabaobei.com/other/15212063602218.png" img1="http://img.miyabaobei.com/other/15212063602218.png" img2="http://img.miyabaobei.com/other/15212063604951.png" alt="" style="max-height:22px;max-width:22px;"></div></div>家居生活</li>
                        </ul>
                    </div>
                    <div class="l right CateCon">

                        <div class="tcate" style="display:block;">

                            <div class="ctitle">
                                <span>宝宝奶粉                        	                        	</span>
                            </div>
                            <div class="ccon pb0">
                                <a href="http://www.miyabaobei.com/s/cat12_b163_tid198.html" class="hot">德国Aptamil                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b661_tid199.html" class="">德国HIPP                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b516_tid200.html" class="">德国Topfer                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b175_tid201.html" class="">荷兰Nutrilon                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b189_tid202.html" class="">荷兰Herobaby                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b191_tid203.html" class="">澳洲BELLAMY\'S                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b517_tid204.html" class="">澳洲Aptamil                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b1814_tid205.html" class="">德国holle                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b192_tid206.html" class="">新西兰A2                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b267_tid207.html" class="">英国Aptamil                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b265_tid208.html" class="">英国Cow&Gate                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b243_tid516.html" class="">美国MeadJohnson                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b1800_tid670.html" class="">港版MeadJohnson美赞臣                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b526_tid210.html" class="">授权行货爱他美                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b173_tid211.html" class="">授权行货诺优能                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b539_tid212.html" class="">授权行货可瑞康                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat12_b524_tid213.html" class="">授权行货惠氏启赋                        	                        	</a>

                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat13_tid215.html" class="">pre                        	                        	</a>
                                <a href="http://www.mia.com/s/cat15_tid216.html" class="">1段                        	                        	</a>
                                <a href="http://www.mia.com/s/cat17_tid218.html" class="">2段                        	                        	</a>
                                <a href="http://www.mia.com/s/cat156_tid217.html" class="">3段                        	                        	</a>
                                <a href="http://www.mia.com/s/cat19_tid219.html" class="">4段                        	                        	</a>
                                <a href="http://www.mia.com/s/cat20_tid220.html" class="">5段                        	                        	</a>
                                <a href="http://www.mia.com/s/cat21_tid221.html" class="">成长1+                        	                        	</a>
                                <a href="http://www.mia.com/s/cat22_tid222.html" class="">成长2+                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>宝宝营养                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat157_tid639.html" class="">鱼油/DHA                        	                        	</a>
                                <a href="http://www.mia.com/s/cat29_tid640.html" class="">钙铁锌                        	                        	</a>
                                <a href="http://www.mia.com/s/cat31_tid641.html" class="">VD/维生素                        	                        	</a>
                                <a href="http://www.mia.com/s/cat32_tid642.html" class="">益生菌                        	                        	</a>
                                <a href="http://www.mia.com/s/cat33_tid643.html" class="">免疫力                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>宝宝食品                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat2_tid189.html" class="">米粉/面食                        	                        	</a>
                                <a href="http://www.mia.com/s/cat3_tid190.html" class="">果泥/果条                        	                        	</a>
                                <a href="http://www.mia.com/s/cat4_tid191.html" class="">肉泥/肉松                        	                        	</a>
                                <a href="http://www.mia.com/s/cat5_tid192.html" class="">鱼肠/海苔                        	                        	</a>
                                <a href="http://www.mia.com/s/cat6_tid193.html" class="">泡芙/饼干                        	                        	</a>
                                <a href="http://www.mia.com/s/cat7_tid194.html" class="">奶酪/溶豆                        	                        	</a>
                                <a href="http://www.mia.com/s/cat11_tid188.html" class="">糖果/零食                        	                        	</a>
                                <a href="http://www.mia.com/s/cat10_tid187.html" class="">果汁/饮品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat9_tid196.html" class="">食用油/调味品                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>休闲食品                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat171_tid649.html" class="">休闲零食                        	                        	</a>
                                <a href="http://www.mia.com/s/cat169_tid647.html" class="">糖果/巧克力                        	                        	</a>
                                <a href="http://www.mia.com/s/cat170_tid648.html" class="">冲调/饮品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat184_tid651.html" class="">面食/调味/油                        	                        	</a>
                                <a href="http://www.mia.com/s/cat253_tid652.html" class="">成人奶粉/酸奶粉                        	                        	</a>
                                <a href="http://www.mia.com/s/cat269_tid653.html" class="">麦片/蜂蜜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat167_tid645.html" class="">饼干/糕点                        	                        	</a>
                                <a href="http://www.mia.com/s/cat168_tid646.html" class="">干果/果干                        	                        	</a>

                            </div>

                            <a href="http://www.miyabaobei.com/list-12398.html"><img src="http://img.miyabaobei.com/d1/p2/2015/10/20/86/e4/86e47a08a9908ca81c9099cba63777fa.jpg" alt="" class="ader" width="220"></a>
                        </div>
                        <div class="tcate" style="">

                            <div class="ctitle">
                                <span>屁屁护理                        	                        	</span>
                            </div>
                            <div class="ccon pb0">
                                <a href="http://www.miyabaobei.com/s/cat16,18_b1_tid244.html" class="hot">merries花王                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b8_tid245.html" class="hot">Moony尤妮佳                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b182_tid247.html" class="hot">GOON大王天使                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b181_tid246.html" class="hot">GOON大王维E                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b425_tid249.html" class="">Pampers帮宝适                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b425_tid525.html" class="">Pampers care帮宝适棉柔                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b1207_tid446.html" class="">Singapore Huggies新加坡好奇                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b525_tid250.html" class="">Huggies Gold好奇金装                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b1206_tid445.html" class="">Huggies platinum好奇铂金装                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b1357_tid556.html" class="">Mamypoko 妈咪宝贝                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b88_tid248.html" class="">Libero丽贝乐                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b707_tid253.html" class="">Bella Baby Happy贝拉宝贝                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b1866_tid480.html" class="">BioFities爱婴舒坦                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat16,18_b53_tid251.html" class="">BAMBO班博                        	                        	</a>

                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat18_tid255.html" class="">纸尿裤                        	                        	</a>
                                <a href="http://www.mia.com/s/cat16_tid254.html" class="">拉拉裤                        	                        	</a>
                                <a href="http://www.mia.com/s/cat23_tid256.html" class="">宝宝湿巾                        	                        	</a>
                                <a href="http://www.mia.com/s/cat174_tid257.html" class="">家居纸品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat25_tid258.html" class="">布尿裤/隔尿垫                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>喂养用品                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.miyabaobei.com/sale/global/main/" class="hot">全球最热奶瓶精选                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.mia.com/s/cat44_tid482.html" class="">奶瓶/奶嘴                        	                        	</a>
                                <a href="http://www.mia.com/s/cat45_tid483.html" class="">安抚奶嘴                        	                        	</a>
                                <a href="http://www.mia.com/s/cat46_tid484.html" class="">碗碟餐具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat47_tid485.html" class="">食物制作                        	                        	</a>
                                <a href="http://www.mia.com/s/cat48_tid486.html" class="">食物储存                        	                        	</a>
                                <a href="http://www.mia.com/s/cat49_tid487.html" class="">水杯/水壶                        	                        	</a>
                                <a href="http://www.mia.com/s/cat50_tid488.html" class="">保温/消毒                        	                        	</a>
                                <a href="http://www.mia.com/s/cat51_tid489.html" class="">围兜/防溅衣                        	                        	</a>
                                <a href="http://www.mia.com/s/cat52_tid490.html" class="">辅助配件                        	                        	</a>
                                <a href="http://www.mia.com/s/cat53_tid491.html" class="">餐椅                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>母乳喂养                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat37_tid260.html" class="">吸奶器                        	                        	</a>
                                <a href="http://www.mia.com/s/cat38_tid261.html" class="">母乳存储                        	                        	</a>
                                <a href="http://www.mia.com/s/cat39_tid262.html" class="">乳头霜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat40_tid263.html" class="">防溢乳垫                        	                        	</a>
                                <a href="http://www.mia.com/s/cat41_tid264.html" class="">授乳枕                        	                        	</a>
                                <a href="http://www.mia.com/s/cat42_tid265.html" class="">矫正器/配件                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>宝宝洗护                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat55_tid511.html" class="">套装/礼盒                        	                        	</a>
                                <a href="http://www.mia.com/s/cat56_tid512.html" class="">洗发沐浴                        	                        	</a>
                                <a href="http://www.mia.com/s/cat57_tid513.html" class="">乳液/抚触油                        	                        	</a>
                                <a href="http://www.mia.com/s/cat58_tid514.html" class="">面霜/万用霜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat59_tid515.html" class="">爽身/防晒                        	                        	</a>
                                <a href="http://www.mia.com/s/cat268_tid510.html" class="">唇部护理                        	                        	</a>
                                <a href="http://www.mia.com/s/cat152_tid508.html" class="">驱蚊/驱虫                        	                        	</a>
                                <a href="http://www.mia.com/s/cat24_tid509.html" class="">屁屁霜/护臀霜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat149_tid663.html" class="">洗澡用品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat61_tid668.html" class="">口腔护理                        	                        	</a>
                                <a href="http://www.mia.com/s/cat62_tid669.html" class="">鼻腔护理                        	                        	</a>
                                <a href="http://www.mia.com/s/cat60_tid667.html" class="">理发/梳发                        	                        	</a>
                                <a href="http://www.mia.com/s/cat26_tid666.html" class="">如厕训练                        	                        	</a>
                                <a href="http://www.mia.com/s/cat150_tid664.html" class="">医护用品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat154_tid665.html" class="">日用配件                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>清洁消毒                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/list-2378.html" class="hot">清洁用品大集结                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.mia.com/s/cat118_tid517.html" class="">奶瓶清洁                        	                        	</a>
                                <a href="http://www.mia.com/s/cat119_tid518.html" class="">餐具/果蔬清洁                        	                        	</a>
                                <a href="http://www.mia.com/s/cat120_tid519.html" class="">洗衣粉/洗衣液                        	                        	</a>
                                <a href="http://www.mia.com/s/cat121_tid520.html" class="">洗衣皂                        	                        	</a>
                                <a href="http://www.mia.com/s/cat122_tid521.html" class="">柔顺剂                        	                        	</a>
                                <a href="http://www.mia.com/s/cat123_tid522.html" class="">洗手液                        	                        	</a>
                                <a href="http://www.mia.com/s/cat124_tid523.html" class="">消毒液/除臭剂                        	                        	</a>

                            </div>

                            <a href="http://www.miyabaobei.com/promotion/branch/znkform"><img src="http://img.miyabaobei.com/d1/p2/2015/10/20/23/64/2364a8642c5fa3cd5df78c5bef0d3f13.jpg" alt="" class="ader" width="220"></a>
                        </div>
                        <div class="tcate" style="width:663px;">

                            <div class="ctitle">
                                <span>服饰寝居                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat66_tid539.html" class="">口水巾/肚兜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat183_tid531.html" class="">婴幼儿礼盒                        	                        	</a>
                                <a href="http://www.mia.com/s/cat228_tid532.html" class="">连身衣/爬服                        	                        	</a>
                                <a href="http://www.mia.com/s/cat64_tid537.html" class="">婴童内衣                        	                        	</a>
                                <a href="http://www.mia.com/s/cat65_tid538.html" class="">婴幼外穿                        	                        	</a>
                                <a href="http://www.mia.com/s/cat67_tid540.html" class="">马甲/背心                        	                        	</a>
                                <a href="http://www.mia.com/s/cat68_tid541.html" class="">T恤/衬衫                        	                        	</a>
                                <a href="http://www.mia.com/s/cat69_tid542.html" class="">毛衣/针织衫                        	                        	</a>
                                <a href="http://www.mia.com/s/cat72_tid545.html" class="">外套/卫衣                        	                        	</a>
                                <a href="http://www.mia.com/s/cat70_tid543.html" class="">裤子                        	                        	</a>
                                <a href="http://www.mia.com/s/cat71_tid544.html" class="">裙子                        	                        	</a>
                                <a href="http://www.mia.com/s/cat73_tid546.html" class="">棉服/羽绒服                        	                        	</a>
                                <a href="http://www.mia.com/s/cat176_tid529.html" class="">亲子装                        	                        	</a>
                                <a href="http://www.mia.com/s/cat240_tid534.html" class="">运动鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat239_tid533.html" class="">机能/学步鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat75_tid548.html" class="">运动/机能鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat178_tid530.html" class="">皮鞋/公主鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat76_tid549.html" class="">休闲/帆布鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat165_tid527.html" class="">拖鞋/人字拖                        	                        	</a>
                                <a href="http://www.mia.com/s/cat241_tid535.html" class="">凉鞋/拖鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat77_tid550.html" class="">棉鞋/雪地靴                        	                        	</a>
                                <a href="http://www.mia.com/s/cat79_tid552.html" class="">袜子/裤袜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat80_tid553.html" class="">帽子/配饰                        	                        	</a>
                                <a href="http://www.mia.com/s/cat81_tid554.html" class="">雨具/雨鞋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat82_tid555.html" class="">泳衣/泳帽                        	                        	</a>
                                <a href="http://www.mia.com/s/cat140_tid526.html" class="">包巾/睡袋                        	                        	</a>
                                <a href="http://www.mia.com/s/cat267_tid536.html" class="">婴儿家居                        	                        	</a>
                                <a href="http://www.mia.com/s/cat78_tid551.html" class="">成人鞋服                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>热卖品牌                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.miyabaobei.com/s/b275_tid408.html" class="hot">dave&bella戴维贝拉                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.mia.com/s/b2245_tid671.html" class="hot">YEEHOO 英氏                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b551_tid409.html" class="hot">Yobeyi优贝宜                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b337_tid411.html" class="">Marc&Janie马克珍妮                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b512_tid439.html" class="hot">Augelute                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.mia.com/s/b322_tid481.html" class="">Gymboree金宝贝                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b335_tid412.html" class="">bornbay贝贝怡                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b164_tid413.html" class="">米卡乐智                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b339_tid410.html" class="">Angell                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b448_tid414.html" class="">BB.Park贝贝帕克                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b580_tid415.html" class="">舍予良仓                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b545_tid435.html" class="">Cicada bear知了熊                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b485_tid434.html" class="">Luvable Friends美国熊宝宝                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b269_tid423.html" class="">Finn+Emma芬妮爱玛                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b555_tid417.html" class="">Moonstar月星                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b510_tid418.html" class="">attipas阿弟葩鞋                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b414_tid419.html" class="">Hübsche惠步舒                        	                        	</a>

                            </div>

                        </div>
                        <div class="tcate" style="">

                            <div class="ctitle">
                                <span>玩具书籍                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat84_tid565.html" class="">摇铃/车床挂                        	                        	</a>
                                <a href="http://www.mia.com/s/cat85_tid566.html" class="">毛绒/安抚                        	                        	</a>
                                <a href="http://www.mia.com/s/cat87_tid568.html" class="">牙胶/咬咬胶                        	                        	</a>
                                <a href="http://www.mia.com/s/cat164_tid559.html" class="">学步车/摇马                        	                        	</a>
                                <a href="http://www.mia.com/s/cat255_tid561.html" class="">益智                        	                        	</a>
                                <a href="http://www.mia.com/s/cat257_tid562.html" class="">早教                        	                        	</a>
                                <a href="http://www.mia.com/s/cat258_tid563.html" class="">DIY手工                        	                        	</a>
                                <a href="http://www.mia.com/s/cat259_tid564.html" class="">绘画工具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat88_tid569.html" class="">爬行垫/游戏垫                        	                        	</a>
                                <a href="http://www.mia.com/s/cat89_tid570.html" class="">健身架/球类                        	                        	</a>
                                <a href="http://www.mia.com/s/cat91_tid572.html" class="">积木/拼插                        	                        	</a>
                                <a href="http://www.mia.com/s/cat86_tid567.html" class="">音乐玩具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat92_tid573.html" class="">模型玩具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat97_tid578.html" class="">遥控玩具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat94_tid575.html" class="">户外运动                        	                        	</a>
                                <a href="http://www.mia.com/s/cat96_tid577.html" class="">挖沙玩具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat95_tid576.html" class="">戏水/游泳装备                        	                        	</a>
                                <a href="http://www.mia.com/s/cat243_tid560.html" class="">绘本/科普                        	                        	</a>
                                <a href="http://www.mia.com/s/cat101_tid558.html" class="">幼儿读物                        	                        	</a>
                                <a href="http://www.mia.com/s/cat98_tid579.html" class="">布书                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>热卖品牌                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.miyabaobei.com/s/b82_tid449.html" class="hot">Fisher Price费雪                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b143_tid448.html" class="hot">Hape                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b105_tid450.html" class="">Little Tikes小泰克                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b270_tid451.html" class="hot">B.Toys                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b140_tid453.html" class="hot">BABYGREAT                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b154_tid452.html" class="hot">Vulli苏菲长颈鹿                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b452_tid432.html" class="">Beiens贝恩施                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b102_tid428.html" class="">vtech伟易达                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b278_tid429.html" class="">HABA                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b450_tid431.html" class="hot">auby澳贝                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b481_tid433.html" class="">topbright特宝儿                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b565_tid436.html" class="">hessie哈喜屋                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b568_tid437.html" class="">Lalababy拉拉布书                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b329_tid430.html" class="">MAMMA妈妈布书                        	                        	</a>

                            </div>

                            <a href="http://www.miyabaobei.com/list-12033.html"><img src="http://img.miyabaobei.com/d1/p1/2015/08/20/df/e3/dfe3a6fb5e5a611551a3eb6f67e1bf26.jpg" alt="" class="ader" width="220"></a>
                        </div>
                        <div class="tcate" style="">

                            <div class="ctitle">
                                <span>出行装备                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat109_tid581.html" class="">安全座椅                        	                        	</a>
                                <a href="http://www.mia.com/s/cat233_tid590.html" class="">推车/伞车                        	                        	</a>
                                <a href="http://www.mia.com/s/cat230_tid589.html" class="">电动车                        	                        	</a>
                                <a href="http://www.mia.com/s/cat235_tid592.html" class="">滑板车                        	                        	</a>
                                <a href="http://www.mia.com/s/cat245_tid593.html" class="">自行车                        	                        	</a>
                                <a href="http://www.mia.com/s/cat114_tid586.html" class="">出行箱包                        	                        	</a>
                                <a href="http://www.mia.com/s/cat115_tid587.html" class="">腰凳背带                        	                        	</a>
                                <a href="http://www.mia.com/s/cat116_tid588.html" class="">出行配件                        	                        	</a>
                                <a href="http://www.mia.com/s/cat234_tid591.html" class="">三轮车                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>安全座椅                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.miyabaobei.com/s/b26_tid388.html" class="hot">Britax宝得适                        	<img src="http://file01.miyabaobei.com/resources/images/index_ochot.gif" alt="">                        	</a>
                                <a href="http://www.miyabaobei.com/s/b29_tid389.html" class="">MAXI COSI迈可适                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat109_b34_tid390.html" class="">GRACO葛莱                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/cat109_tid330_b259.html" class="">Kiddy奇蒂                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b316_cat109_tid420.html" class="">Fedora飞多儿                        	                        	</a>
                                <a href="http://www.miyabaobei.com/s/b390_cat109_tid421.html" class="">STM斯迪姆                        	                        	</a>

                            </div>

                            <a href="http://www.miyabaobei.com/list-2058.html"><img src="http://img.miyabaobei.com/other/15323062603570.jpg" alt="" class="ader" width="220"></a>
                        </div>
                        <div class="tcate" style="">

                            <div class="ctitle">
                                <span>孕产待产                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat126_tid655.html" class="">孕期营养                        	                        	</a>
                                <a href="http://www.mia.com/s/cat262_tid662.html" class="">孕妈护肤                        	                        	</a>
                                <a href="http://www.mia.com/s/cat127_tid656.html" class="">孕妈内衣                        	                        	</a>
                                <a href="http://www.mia.com/s/cat128_tid657.html" class="">孕妈服饰                        	                        	</a>
                                <a href="http://www.mia.com/s/cat229_tid659.html" class="">产后收腹                        	                        	</a>
                                <a href="http://www.mia.com/s/cat261_tid661.html" class="">防辐射用品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat260_tid660.html" class="">待产新生                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>面部护肤                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat195_tid597.html" class="">洁面/卸妆                        	                        	</a>
                                <a href="http://www.mia.com/s/cat196_tid598.html" class="">化妆水/爽肤水                        	                        	</a>
                                <a href="http://www.mia.com/s/cat197_tid599.html" class="">面膜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat198_tid600.html" class="">乳液/面霜                        	                        	</a>
                                <a href="http://www.mia.com/s/cat201_tid603.html" class="">护肤套装                        	                        	</a>
                                <a href="http://www.mia.com/s/cat175_tid596.html" class="">防晒/隔离                        	                        	</a>
                                <a href="http://www.mia.com/s/cat202_tid604.html" class="">彩妆                        	                        	</a>
                                <a href="http://www.mia.com/s/cat199_tid601.html" class="">眼部护理                        	                        	</a>
                                <a href="http://www.mia.com/s/cat200_tid602.html" class="">唇部护理                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>身体护理                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat209_tid608.html" class="">手足保养                        	                        	</a>
                                <a href="http://www.mia.com/s/cat210_tid609.html" class="">美体塑身                        	                        	</a>
                                <a href="http://www.mia.com/s/cat216_tid610.html" class="">美容工具/防晒伞                        	                        	</a>
                                <a href="http://www.mia.com/s/cat134_tid614.html" class="">口腔护理                        	                        	</a>
                                <a href="http://www.mia.com/s/cat222_tid611.html" class="">洗发护发                        	                        	</a>
                                <a href="http://www.mia.com/s/cat223_tid612.html" class="">沐浴护肤                        	                        	</a>
                                <a href="http://www.mia.com/s/cat135_tid607.html" class="">私密护理                        	                        	</a>
                                <a href="http://www.mia.com/s/cat270_tid613.html" class="">卫生巾                        	                        	</a>

                            </div>
                            <div class="ctitle">
                                <span>营养健康                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat129_tid615.html" class="">鱼油/卵磷脂                        	                        	</a>
                                <a href="http://www.mia.com/s/cat205_tid616.html" class="">钙+维生素D                        	                        	</a>
                                <a href="http://www.mia.com/s/cat206_tid617.html" class="">胶原蛋白                        	                        	</a>
                                <a href="http://www.mia.com/s/cat207_tid618.html" class="">综合维生素                        	                        	</a>
                                <a href="http://www.mia.com/s/cat264_tid621.html" class="">蔓越莓/葡萄籽                        	                        	</a>
                                <a href="http://www.mia.com/s/cat265_tid622.html" class="">滋补养生                        	                        	</a>
                                <a href="http://www.mia.com/s/cat263_tid620.html" class="">酵素                        	                        	</a>
                                <a href="http://www.mia.com/s/cat266_tid623.html" class="">瘦身代餐                        	                        	</a>
                                <a href="http://www.mia.com/s/cat271_tid624.html" class="">益生菌                        	                        	</a>
                                <a href="http://www.mia.com/s/cat238_tid619.html" class="">男士保健                        	                        	</a>

                            </div>

                            <a href="http://www.miyabaobei.com/list-10226.html"><img src="http://img.miyabaobei.com/d1/p2/2015/10/20/2e/d4/2ed479ad1e12a45ad4fda1a1889a04ed.jpg" alt="" class="ader" width="220"></a>
                        </div>
                        <div class="tcate" style="">

                            <div class="ctitle">
                                <span>寝卧家居                        	                        	</span>
                            </div>
                            <div class="ccon">
                                <a href="http://www.mia.com/s/cat138_tid625.html" class="">浴巾/毛巾                        	                        	</a>
                                <a href="http://www.mia.com/s/cat141_tid626.html" class="">睡枕/抱枕                        	                        	</a>
                                <a href="http://www.mia.com/s/cat142_tid627.html" class="">家具/床椅                        	                        	</a>
                                <a href="http://www.mia.com/s/cat143_tid628.html" class="">床上用品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat144_tid629.html" class="">生活电器                        	                        	</a>
                                <a href="http://www.mia.com/s/cat254_tid638.html" class="">水杯/水壶                        	                        	</a>
                                <a href="http://www.mia.com/s/cat193_tid637.html" class="">厨房电器                        	                        	</a>
                                <a href="http://www.mia.com/s/cat145_tid630.html" class="">加湿/净化                        	                        	</a>
                                <a href="http://www.mia.com/s/cat147_tid632.html" class="">厨具                        	                        	</a>
                                <a href="http://www.mia.com/s/cat151_tid633.html" class="">安全防护                        	                        	</a>
                                <a href="http://www.mia.com/s/cat190_tid634.html" class="">收纳用品                        	                        	</a>
                                <a href="http://www.mia.com/s/cat191_tid635.html" class="">家装软饰                        	                        	</a>
                                <a href="http://www.mia.com/s/cat192_tid636.html" class="">家庭健康                        	                        	</a>

                            </div>

                            <a href="http://www.miyabaobei.com/list-2378.html"><img src="http://img.miyabaobei.com/d1/p2/2015/10/20/c9/08/c908839db079334f271a5c7147c548a4.jpg" alt="" class="ader" width="220"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- 分类结束 -->
        <script type="text/javascript">
            $(function(){
                replace_domain('.Nnav');
            });
        </script>


        <!-- 搜索框 -->
        <div class="Nsearch">
            <input type="button" id="searchButton" class="button">
            <input type="text" id='productWord'  class="text" value="面膜"   data-url="">
            <!--<div class="lenovoWord" style="display: none;">
            	<a href="#">1</a>
            </div>-->
            <div class="lenovoWord">
                <a href="javascript:void(0)" class="stylecolor">面膜</a>
                <a href="javascript:void(0)" >温奶器</a>
                <a href="javascript:void(0)" >妈咪包</a>
                <a href="javascript:void(0)" >DHA</a>
                <a href="javascript:void(0)" >浴巾</a>
                <a href="javascript:void(0)" >吸奶器</a>
                <a href="javascript:void(0)" >嘉宝</a>
                <a href="javascript:void(0)" >奶瓶</a>
            </div>

        </div>
        <!--END 搜索框 -->
        <ul>
            <li class="current"><a href="/mia">今日特卖</a></li>
            <li ><a href="/diapers.html">纸尿裤</a></li>
            <li class=""><a href="/formulas.html">奶粉</a></li>
            <li ><a href="/dutyfree.html">免税店</a></li>
            <li class="tag PubBtnHover"><a href="/zhuanqu">更多专区</a>
                <div class="showNavCon PubConHover dn">
                    <a href="#">用品专区</a>
                    <a href="#">海淘专区</a>
                    <a href="#">车床专区</a>
                    <a href="#">玩具专区</a>
                    <a href="#">食品专区</a>
                    <a href="#" class="bdbn">奶具专区</a>
                </div>
            </li>
            <li class="tag PubBtnHover "> <a href="/guarantee" class="indexPubTop">正品保证</a>
                <div class="showNavCon PubConHover dn">
                    <a href="/guarantee">正品保证</a>
                    <a href="/help-22.html">退货政策</a>
                    <a href="/help.html" class="bdbn">帮助中心</a>
                </div>
            </li>
        </ul>
    </div>
</div>


        
    <link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/jqwin.css">
    <link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/item/iteminfo.css?v=20150602">
    <input id="shopId" type="hidden" value="<?php echo ($goodsDetails['shopId']); ?>"/>
    <input id="goodsId" type="hidden" value="<?php echo ($goodsDetails['goodsId']); ?>"/>

    <div class="warp">
        <div class="breadCrumbs">
    <div class="w1004 songti">
        <a href="/">宝宝帝首页</a> &gt;
        <a href="<?php echo U('Home/Goods/getGoodsList/',array('c1Id'=>$goodsNav[0]['catId']));?>"><?php echo ($goodsNav[0]["catName"]); ?></a> &gt;
        <a href="<?php echo U('Home/Goods/getGoodsList/',array('c1Id'=>$goodsNav[0]['catId'],'c2Id'=>$goodsNav[1]['catId']));?>"><?php echo ($goodsNav[1]["catName"]); ?></a> &gt;
        <a href="<?php echo U('Home/Goods/getGoodsList/',array('c1Id'=>$goodsNav[0]['catId'],'c2Id'=>$goodsNav[1]['catId'],'c3Id'=>$goodsNav[2]['catId']));?>"><?php echo ($goodsNav[2]["catName"]); ?></a>
    </div>
</div>
        <div class="content detail">
    <div class="w1004">
        <div class="titlecon clearfix">
            <div class="left yahei l">

                <a href="/list-22326.html" class="pink">瘦身代餐专场 </a>

                <font style="color:#333;">Nu-Lax 乐康膏 果蔬乐康膏250g*2盒</font>

                （本品不能代替药物）由澳洲hujun原产的多种水果和天然植物赛纳叶混合而成，不含人工添加剂。净肠美肌补能量，通便排毒，改善便秘、腹胀、口臭、青春痘等问题。睡前服用效果更好~！

            </div>
            <div class="right l">
                <div id="detailOutletInfo" class="countdown" style="display:none">
                    <h5 ></h5>
                    <div id="counter">
                        <img src="http://file04.miyabaobei.com/resources/images/dot.gif" alt="" width="20" height="20"/>
                    </div>
                    <input type="hidden" id="outletStart" value="" />
                    <input type="hidden" id="outletEnd" value="" />
                </div>
            </div>
        </div>
        <!--/.title-->






        <div class="show clearfix">
            <div class="left l rel">
                <div class="mark_wrap_x60">
                    <span class="mark_item mark_dutyfree"></span>
                </div>
                <div class="big rel">
                    <img src="/<?php echo ($goodsDetails['goodsImg']); ?>" width="447" height="447" alt="<?php echo ($goodsDetails['goodsName']); ?>"/>
                </div>
            </div>

            <div class="right l">
                <div class="M_productInfo">
                    <div class="pi_price_box">
                        <span class="pbox_price"><i class="pbox_yen">&yen;</i><em id="item_price"><?php echo ($goodsDetails['shopPrice']); ?></em></span>
                        <span class="pbox_off">5.1折</span>

                        <span class="pbox_market">&yen;<del><?php echo ($goodsDetails['marketPrice']); ?></del></span>

                    </div>

                    <div class="pi_attr_box">
                        <div class="clearfix discount_f">

                        </div>
                        <input type="hidden" value="add" name="act">
                        <input type="hidden" value="" name="client_time">
                        <!-- 20150915 -->
                        <dl id="i_youhui" class="i_youhui clearfix" style="display: none">
                            <dt class="num_name">优惠：</dt>
                            <dt>
                                <div class="iyh_tuan"><i>团</i>下载蜜芽APP立享团购优惠，3人成团可低至 ¥69 元 </div>
                                <div class="iyh_quan"><i>券</i>满100减5元优惠券 立即领取</div>
                            </dt>
                        </dl>
                        <dl class="color new_gg">
                            <dt class="color_name">套装：</dt>
                            <dd class="color_list">
                                <ul>
                                    <li class="color_list_item">
                                        <a class="selected">
                                            <em>2</em>件套<br>￥50/件
                                            <span class="i_select"></span>
                                        </a>
                                    </li>
                                </ul>
                            </dd>
                        </dl>

                        <dl class="color">
                            <dt class="color_name">可选：</dt>
                            <dd class="color_list">
                                <ul>
                                    <li class="color_list_item">
                                        <a class="selected" title="<?php echo ($goodsDetails['goodsName']); ?>" href="javascript:void(0)">
                                            <img width="42" height="43" alt="<?php echo ($goodsDetails['goodsName']); ?>" src="/<?php echo ($vo['goodsThumb']); ?>" class="fl">
                                            <span class="i_select"></span>
                                        </a>
                                    </li>
                                </ul>
                            </dd>
                        </dl>
                        <dl id="detail_size" style="display:none;"></dl>
                        <dl id="J_num_select" class="i_num clearfix">
                            <dt class="num_name">数量：</dt>
                            <dd class="i_notice_msg J_num_tips"></dd>
                            <dd class="num_box">
                                <span class="num_reduce num_reduce_disabled J_num_act_reduce"></span>
                                <em class="num_input" id="buyAmount">1</em>
                                <span class="num_add J_num_act_add"></span>
                            </dd>
                            <dd id="stockTips" class="num_msg f12">还剩<span id="stock"></span>件</dd>
                        </dl>
                        <dl class="other">
                            <dt class="other_name">编码：</dt>
                            <dd class="other_box">1109462</dd>
                        </dl>



                        <!-- 税率-->
                        <dl class="other">
                            <dt class="other_name">关税：</dt>
                            <dd class="other_box" style="text-align:left;height:auto">本商品重庆综合保税仓税率10%，订单关税≤50免征</dd>
                        </dl>

                        <div class="clearfix">
                            <div class="service_mia" style="position: relative;">
                                <div class="hide_button" style="position:absolute;top:0; left:0; width: 60px; height: 36px; z-index: 9;"></div>
                                <!-- Live800在线客服图标:勿删[固定型] 开始-->
                                <div id='live7'>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix">
                            <div class="button_f" id="itemProcess">
                                <a href="javascript:void(0)" class="btn_07" disabled id="J_cartAdd_submit">载入中</a>
                                <p id="sepcailNotice"></p>
                            </div>
                            <div class="button_f" id="itemAttention">
                                <a href="javascript:void(0)" class="btn_07_f" id="attend_submit">收藏</a>
                                <p id="sepcailNotice1"></p>
                            </div>
                        </div>
                        <div class="pbox_pms">
                            <dl>
                                <dt>包邮</dt>
                                <dd>不含纸尿裤、拉拉裤及直邮奶粉的单笔订单满88免运费</dd>
                            </dl>
                        </div>
                        <div id="J_detailShare_wrap" class="pi_share_box">
                            <span class="share_tit widget_share_txt">告诉小伙伴：</span>
                            <span class="jiaaa jiathis_style_24x24" >
                                <a href="javascript:void(0)" class="jiathis_button_weixin"></a>
                                <a href="javascript:void(0)" mars_sead="m_account_invite_sina" class="share_button_tsina"></a>
                                <a href="javascript:void(0)" mars_sead="m_account_invite_tweibo" class="share_button_tqq"></a>
                                <a href="javascript:void(0)" mars_sead="m_account_invite_qzone" class="share_button_qzone"></a>
                                <a href="javascript:void(0)" mars_sead="m_account_invite_renren" class="share_button_renren"></a>
                                <a href="javascript:void(0)" mars_sead="m_account_invite_douban" class="share_button_douban"></a>
                                <a href="javascript:void(0)" class="jiathis_button_meilishuo"></a>
                            </span>
                        </div>
                        <input type="hidden" id="share_pic" value="http://img01.miyabaobei.com/d1/p2/item/11/1109/1109462_topic_1.jpg">
                        <input type="hidden" id="share_name" value="刚刚在蜜芽宝贝上发现了这个#Nu-Lax 乐康膏 果蔬乐康膏250g*2盒# 好喜欢，求特卖求好价!">
                    </div>
                </div>
            </div>
        </div>



        <!--/.show-->
        <div class="poppro">
    <div class="cell"><a href="/item-1000458.html" target='_blank' title="退热贴 蓝色  适用年龄2岁+ 12+4枚"><img src="http://img01.miyabaobei.com/item/10/1000/1000458_normal_4.jpg" alt="退热贴 蓝色  适用年龄2岁+ 12+4枚" width="217" class="img"></a>
        <p class="p1"><a href="/item-1000458.html">小林 退热贴 蓝色  适用年龄2岁+ 12+4枚</a></p>
        <p class="p2">&yen;35.00                                                       		 （3.7折）                            </p>
        <span class="mk mkb"></span>
        <span class="mk">爆款!必抢!</span>
    </div>
    <div class="cell"><a href="/item-1000647.html" target='_blank' title="洗手液无香型50ml"><img src="http://img01.miyabaobei.com/item/10/1000/1000647_normal_4.jpg" alt="洗手液无香型50ml" width="217" class="img"></a>
        <p class="p1"><a href="/item-1000647.html">Baby Ganics 甘尼克 洗手液无香型50ml</a></p>
        <p class="p2">&yen;28.00                                                       		 （3.8折）                            </p>
        <span class="mk mkb"></span>
        <span class="mk">爆款!必抢!</span>
    </div>
    <div class="cell"><a href="/item-1001109.html" target='_blank' title="婴幼儿鳕鱼肝油 DHA+维生素AD 60ml"><img src="http://img01.miyabaobei.com/item/10/1001/1001109_normal_4.jpg" alt="婴幼儿鳕鱼肝油 DHA+维生素AD 60ml" width="217" class="img"></a>
        <p class="p1"><a href="/item-1001109.html">Nordic Naturals 挪帝克 婴幼儿鳕鱼肝油 DHA+维生素AD 60ml</a></p>
        <p class="p2">&yen;89.00                                                        		 （5.6折）                            </p>
        <span class="mk mkb"></span>
        <span class="mk">囤货必备</span>
    </div>
    <div class="cell"><a href="/item-1028026.html" target='_blank' title="牛乳钙90粒"><img src="http://img01.miyabaobei.com/d1/p2/item/10/1028/1028026_normal_4.jpg" alt="牛乳钙90粒" width="217" class="img"></a>
        <p class="p1"><a href="/item-1028026.html">Bio island 牛乳钙90粒</a></p>
        <p class="p2">&yen;156.00                                                        		 （8.3折）                            </p>
        <span class="mk mkb"></span>
        <span class="mk">囤货必备</span>
    </div>
    <div class="cell"><a href="/item-1125293.html" target='_blank' title="凝脂恒久粉饼 10g 010象牙白"><img src="http://img01.miyabaobei.com/d1/p2/item/11/1125/1125293_normal_4.jpg" alt="凝脂恒久粉饼 10g 010象牙白" width="217" class="img"></a>
        <p class="p1"><a href="/item-1125293.html">Dior 迪奥 凝脂恒久粉饼 10g 010象牙白</a></p>
        <p class="p2">&yen;499.00                                                        		 （8.8折）                            </p>
        <span class="mk mkb"></span>
        <span class="mk">新品上市，火热出炉</span>
    </div>
    <div class="cell"><a href="/item-1124452.html" target='_blank' title="企鹅少儿进阶读物Level2（上）10册 绿"><img src="http://img01.miyabaobei.com/d1/p2/item/11/1124/1124452_normal_4.jpg" alt="企鹅少儿进阶读物Level2（上）10册 绿" width="217" class="img"></a>
        <p class="p1"><a href="/item-1124452.html">孩宝小镇 企鹅少儿进阶读物Level2（上）10册 绿</a></p>
        <p class="p2">&yen;128.00                                                        		 （4.3折）                            </p>
        <span class="mk mkb"></span>
        <span class="mk">新品上市，火热出炉</span>
    </div>
</div>
        <div class="introduction clearfix">
            <div class="left l">
    <div class="moduleFixed">
        <div class="moFixed">
            <ul class="title yahei">
                <li class="current">商品参数</li>
                <li>商品详情</li>
                <li>蜜芽口碑</li>
                <li>蜜芽优势</li>
            </ul>
        </div>
    </div>
    <div class="p10">
        <div class="datacon area0 clearfix cs rel">
            <!-- <div class="dtit"><img src="images/sp02.gif" alt="商品详情"/></div>-->
            <ul class="clearfix">
                <li class="width"><b>商品名称:</b>Nu-Lax 乐康膏 果蔬乐康膏250g*2盒</li>
                <li><b>品牌:</b>Nu-Lax 乐康膏</li>
                <li><b>分类:</b>瘦身代餐</li>
                <li><b>商品条码:</b></li>
            </ul>
            <div class="clearfix">
                <!-- <img src="http://file01.miyabaobei.com/resources/images/pingan.jpg?v=111" /> -->
            </div>
            <div class="pointOfView clearfix">
                <img src="http://img01.miyabaobei.com/d1/p2/item/11/1109/1109462_normal_5.jpg" width="113" height="130" />
                <div class="l">
                    <h4>蜜芽观点：</h4>
                    <p>体内毒素堆积就会导致一系列肌肤问题，所以常排毒是必要的。这款产品由澳洲原产的多种水果和天然植物赛纳叶混合而成，不含人工添加剂，口感如同吃果脯零食。睡前服用，早起轻松如厕，解决便秘烦恼；排除体内毒素，净化体内环境。可缓解皱纹、色斑、腹胀、便秘、口臭、青春痘等问题，增强胃肠道活力，皮肤变得红润光泽。</p>
                </div>
            </div>
        </div>

        <div class="area1 clearfix datacon">
            <div class="dtit"><img src="/resources/images/sp02.gif" alt="商品详情"/></div>
            <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/e2/a3/e2a3aafd24346c00f94972e306fb2e51.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/8b/d1/8bd18ff860b2f58025d94bc2416c4346.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/f5/1d/f51d034d19422b88ef90787c1f77afb4.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/20/e9/20e97863547568780c60f0955a1e4d34.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/ba/59/ba59bc0c706c0157320f776aac9ce1d5.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/50/a6/50a623d65f6a9f4564b58a9dd33d32d5.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/37/00/3700ba02ec868b511227fa627b3043c4.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/e9/ac/e9acdebfef9089ba17e7f5e7b647cbd7.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/b0/77/b077bcc62b5dadb8edf3ed46b069250a.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                    <img data-src="http://img01.miyabaobei.com/d1/p2/2015/10/26/38/98/3898fab7d9a12760601fb01207ebabb4.jpg" src=""  class="lazyload" width="750px" alt="loading" />                                                                                                    <img data-src="http://img.miyabaobei.com/d1/p2/2015/10/15/95/0a/950a4e005ca0c755e06100520440d451.jpg" src="http://img.miyabaobei.com/d1/p2/2015/10/15/95/0a/950a4e005ca0c755e06100520440d451.jpg" class="lazyload" width="750px" alt="loading">
            <img data-src="http://img.miyabaobei.com/d1/p2/2015/10/15/14/bf/14bfff0109df79a0bad676fb5bbbf361.jpg" src="http://img.miyabaobei.com/d1/p2/2015/10/15/14/bf/14bfff0109df79a0bad676fb5bbbf361.jpg" class="lazyload" width="750px" alt="loading">
            <div style="clear:both;"></div>
        </div>

        <div class="area2 clearfix wordOfMouth datacon" id ='test'>
            <div class="dtit"><img src="/resources/images/sp03.gif" alt="蜜芽口碑"/></div>
            <div class="nonekb">还没有人点评此商品！  <a href="mykoubei-1109462.html" class="pink_mid_btn">去写口碑</a></div>
        </div>
        <div class="area3 clearfix datacon">
            <div class="dtit"><img src="/resources/images/sp04.gif" alt="蜜芽优势"/></div>
            <ul class="mia_advantage" id="advantageTitle">
                <!--<li class="mia_current"><span class="myys1"></span></li>-->
                <li class="mia_current"><span class="myys2"></span></li>
                <li class=" "><span class="myys3"></span></li>
                <li class=" "><span class="myys4"></span></li>
                <li class=" "><span class="myys5"></span></li>
                <li class=" "><span class="myys6"></span></li>
            </ul>
            <div class="imgblock" id="imgBlock">
                <!--<div class="mia_advant1">
                  <img src="" data-src="http://img.miyabaobei.com/other/14124023248129.jpg" alt="蜜芽优势" class="lazyload" width="750" height="266"/>
                  <img src="" data-src="http://img.miyabaobei.com/other/14122033020497.jpg" alt="蜜芽优势" class="lazyload" width="750" height="300"/>
                </div>-->
                <div class="mia_advant2">
                    <img src="" data-src="http://img.miyabaobei.com/other/15421105031323.jpg" alt="蜜芽优势" class="lazyload" width="750" height="280"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/15421105055295.jpg" alt="蜜芽优势" class="lazyload" width="750" height="440"/>
                    <!--                                    <img src="" data-src="http://img.miyabaobei.com/other/141120060827244.jpg" alt="蜜芽优势" class="lazyload" width="750" height="232"/>-->
                </div>
                <div class="mia_advant3">
                    <img src="" data-src="http://img.miyabaobei.com/other/14124055750549.jpg" alt="蜜芽优势" class="lazyload" width="750" height="320"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120061221246.jpg" alt="蜜芽优势" class="lazyload" width="750" height="320"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120061245365.jpg" alt="蜜芽优势" class="lazyload" width="750" height="258"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120061345425.jpg" alt="蜜芽优势" class="lazyload" width="750" height="240"/>
                </div>
                <div class="mia_advant4">
                    <img src="" data-src="http://img.miyabaobei.com/other/14124060052930.jpg" alt="蜜芽优势" class="lazyload" width="750" height="347"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120061644197.jpg" alt="蜜芽优势" class="lazyload" width="750" height="288"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120061716569.jpg" alt="蜜芽优势" class="lazyload" width="750" height="280"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120062627883.jpg" alt="蜜芽优势" class="lazyload" width="750" height="300"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120062653315.jpg" alt="蜜芽优势" class="lazyload" width="750" height="280"/>
                </div>
                <div class="mia_advant5">
                    <img src="" data-src="http://img.miyabaobei.com/other/14124060208177.jpg" alt="蜜芽优势" class="lazyload" width="750" height="308"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120062813102.jpg" alt="蜜芽优势" class="lazyload" width="750" height="344"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/14122033234281.jpg" alt="蜜芽优势" class="lazyload" width="750" height="314"/>
                </div>
                <div class="mia_advant6">
                    <img src="" data-src="http://img.miyabaobei.com/other/14124060242928.jpg" alt="蜜芽优势" class="lazyload" width="750" height="301"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/14123023907162.jpg" alt="蜜芽优势" class="lazyload" width="750" height="258"/>
                    <img src="" data-src="http://img.miyabaobei.com/other/141120063034219.jpg" alt="蜜芽优势" class="lazyload" width="750" height="253"/>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="right l">
    <div class="pubtitle yahei">热卖单品</div>
    <div class="pubcon cp">
        <div class="block clearfix">
            <a href="/item-1057502" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/10/1057/1057502_normal_1.jpg" alt="爽快酵素60粒(30日)" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1057502" target="_blank" title="爽快酵素60粒(30日)">
                    爽快酵素60粒(30日)                                        </a>
            </p>
            <span class="pink">&yen; 85.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1061208" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/10/1061/1061208_normal_1.jpg" alt="代餐酵素 柠檬口味 200g" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1061208" target="_blank" title="代餐酵素 柠檬口味 200g">
                    代餐酵素 柠檬口味 200g                                        </a>
            </p>
            <span class="pink">&yen; 199.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1084547" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/10/1084/1084547_normal_1.jpg" alt="Burn60燃脂配方 60粒" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1084547" target="_blank" title="Burn60燃脂配方 60粒">
                    Burn60燃脂配方 60粒                                        </a>
            </p>
            <span class="pink">&yen; 129.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1116676" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p2/item/11/1116/1116676_normal_1.jpg" alt="仙人掌精华代餐片50片" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1116676" target="_blank" title="仙人掌精华代餐片50片">
                    仙人掌精华代餐片50片                                        </a>
            </p>
            <span class="pink">&yen; 168.00</span><br/>
        </div>
        <div class="block clearfix">
            <a href="/item-1110118" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/11/1110/1110118_normal_1.jpg" alt="健康瘦身茶 16*2盒" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1110118" target="_blank" title="健康瘦身茶 16*2盒">
                    健康瘦身茶 16*2盒                                        </a>
            </p>
            <span class="pink">&yen; 69.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1061206" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/10/1061/1061206_normal_1.jpg" alt="代餐酵素 巧克力口味 200g" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1061206" target="_blank" title="代餐酵素 巧克力口味 200g">
                    代餐酵素 巧克力口味 200g                                        </a>
            </p>
            <span class="pink">&yen; 199.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1061204" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/10/1061/1061204_normal_1.jpg" alt="代餐酵素 香蕉口味 200g" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1061204" target="_blank" title="代餐酵素 香蕉口味 200g">
                    代餐酵素 香蕉口味 200g                                        </a>
            </p>
            <span class="pink">&yen; 199.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1105469" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/11/1105/1105469_normal_1.jpg" alt="果蔬乐康膏250g" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1105469" target="_blank" title="果蔬乐康膏250g">
                    果蔬乐康膏250g                                        </a>
            </p>
            <span class="pink">&yen; 58.00</span><br/>
            <span class="gray">&nbsp;</span>
        </div>
        <div class="block clearfix">
            <a href="/item-1100870" target="_blank">
                <img src="http://img01.miyabaobei.com/d1/p1/item/11/1100/1100870_normal_1.jpg" alt="椰子水750ml" width="80" height="80"/>
            </a>
            <p class="tit">
                <a href="/item-1100870" target="_blank" title="椰子水750ml">
                    椰子水750ml                                        </a>
            </p>
            <span class="pink">&yen; 129.00</span><br/>
        </div>
    </div>
</div>
        </div>

    </div>
</div>
<!--/.content-->

    </div>


    <div class="dialogAddTelW" style="display:none">
        <div class="dialogAddTel">
            <h3 class="tit2">免费订阅<span class="close" onclick="closeAddTelW()"></span></h3>
            <div class="covDiv1">喜欢的宝贝卖光了，想买怎么办？快快订阅免费开售通知，商品参加特卖时会通知你哦~</div>
            <div class="covDiv2">
                <span class="spa1">手机短信：</span>
                <input type="text" value="" class="inp1" onblur="yTel()" id="telInp" placeholder="请输入手机" />
                <p class="erro pink">请输入正确的手机号码</p>
            </div>
            <div class="covDiv3"><input type="submit" value="确定" class="sub1" id="telSub" onclick="telSub()" /></div>
        </div>
    </div>

    <div class="dialogAddTelWoverlay" style="display:none"></div>

<script>
        var NO_MARKET_PRICE = true; //不用ajax计算折扣
        //蜜芽优势切换
        $("#advantageTitle").tabs({
            cntSelect: "#imgBlock",
            tabEvent: "click",
            tabStyle: "normal",
            onStyle : "mia_current"
        });
        $("#kjghelp-button").mouseover(function(){
            $("#kjghelp").show();
        });
        $("#kjghelp-button").mouseout(function(){
            $("#kjghelp").hide();
        });
        //口碑跳转
        $('#review_num_f').click(function(){
            var scrollTop_f=$('#test').offset().top;
            //alert(scrollTop_f);
            $('html,body').animate({
                scrollTop:scrollTop_f-50
            },1000);
        });

        var jiathis_config = {
            url: document.location.href,
            title: $("#share_name").val(),
            shortUrl:false,
            hideMore:false,
            appkey:{
                "tsina":"1042539293"
            },
            pic:$("#share_pic").val()
        }
</script>


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