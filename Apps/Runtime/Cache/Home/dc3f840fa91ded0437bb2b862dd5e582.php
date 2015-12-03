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


        
<div class="warp">
    <div class="content detail">
        <div class="w1004">
            <div class="h20" > </div>
            <div class="ic clearfix">
                <div class="left l">
                    <div class="title">我的交易</div>
                    <ul>
                        <li >
                            <a href="/order">我的订单</a>
                        </li>
                        <li >
                            <a href="/return_lists">退货退款</a>
                        </li>
                    </ul>
                    <div class="title">我的收藏</div>
                    <ul>
                        <li >
                            <a href="/my_brand">我收藏的品牌</a>
                        </li>
                        <li ><a href="/my_collect">我收藏的商品</a></li>
                    </ul>
                    <div class="title">我的分享</div>
                    <ul>
                        <li >
                            <a href="/my_invite">我邀请的朋友</a></li>
                        <li >
                            <a href="/my_koubei.html">商品口碑</a></li>
                    </ul>
                    <div class="title">我的优惠</div>
                    <ul>
                        <li >
                            <a href="/my_jifen.html">积分管理</a>
                        </li>
                        <li >
                            <a href="/my_coupon">代金券管理</a>
                        </li>
                        <li >
                            <a href="/my_getredbag">红包管理</a>
                        </li>
                        <li  style="text-indent:12px;">
                            <a href="/my_getredbag">我的红包</a>
                        </li>
                        <li  style="text-indent:12px;">
                            <a href="/my_shareredbag">分享红包</a>
                        </li>
                    </ul>
                    <div class="title">我的账户</div>
                    <ul>
                        <li >
                            <a href="/my_profile.html">账户信息</a>
                        </li>
                        <li >
                            <a href="/my_balance.html">账户余额</a>
                        </li>
                        <li >
                            <a href="/my_idstatus.html">实名认证</a>
                        </li>
                        <li >
                            <a href="/my_password.html">修改密码</a>
                        </li>
                        <li >
                            <a href="/my_address.html">地址管理</a>
                        </li>
                        <li >
                            <a href="/my_message.html">蜜芽消息</a>
                        </li>
                    </ul>
                </div>
                <div class="right l">
                    <div class="icmain clearfix">
                        <div class="photo l">
                            <img src="http://file01.miyabaobei.com/resources/images/icon_none.gif" alt="默认头像" width="120"/>
                            <a href="/home/profile/icon/?refer=home">修改头像</a></div>
                        <div class="intro l">
                            <div class="tit01"><?php echo ($WST_USER["loginName"]); ?>, 欢迎您! </div>
                            <p>会员等级：宝宝帝&emsp;&emsp;<a href="/help/9" target="_blank" class="gray">会员级别介绍</a><br/>
                                当前积分：<span class="pink">0</span>&emsp;&emsp;<a href="/help/10" target="_blank" class="gray">积分获取规则</a> </p>
                            <div class="iline"></div>
                            <p> 累计消费金额：
                                <span class="pink">&yen; 0.00</span><br/>
                            <div class="iline"></div>
            <span id="accountStatus">
                <span class="verify">
                                        手机已验证
                                    </span>
                <span class="verify">
                                        邮箱未验证 <a href="/my_emailverify" class="gray">去验证&gt;&gt;</a>&nbsp;&nbsp;[送50蜜豆]
                                    </span>
                <span class="verify">
                                        未实名认证 <a href="/my_identification.html" class="gray">去验证>></a>
                                    </span>
            </span>
                            </p>
                        </div>
                    </div>                    <link rel="stylesheet" href="http://file01.miyabaobei.com/resources/styles/account/account.css?v=3" type="text/css">
                    <style type="text/css">
                        .changeAddressBtn{margin-right: 2px;display: inline-block;font-size: 12px;height: 18px;line-height: 18px;padding: 3px 6px;text-align: center;color: #000;text-decoration: none;border-radius: 3px;border: 1px solid #e393bb;}
                        .orderListHead span a:hover{color:#000;}

                        .changeAddress{width:360px;height:425px;background-color:#fff;border:4px solid #a9a9a7;font-size:12px;overflow:auto;display: none;display: none;z-index: 111001;position: absolute;left: 50%;top: 50%;margin-left: -180px;margin-top: -212px;position: fixed!important;}
                        .changeAddTit{height:31px;background-color:#f7f7f7;border-bottom:1px solid #eaeaea;color:#666666;line-height: 31px;font-weight: bold;position: relative;padding-left:14px;}
                        .changeAddTit img{position:absolute;right:12px;top:6px;cursor:pointer;}
                        .changeAddress .changeAddh3{color:#999999;line-height:31px;padding-left:14px;margin-top:11px;}
                        .changeAddmake{width:330px;border:1px solid #eaeaea;background-color:#fcfcfc;margin:0 auto;margin-bottom:13px;position: relative;}
                        .changeAddmake ul{padding-top:14px;padding-left:13px;padding-right:54px;}
                        .changeAddmake ul li{color:#a9a9a7;list-style-type: none;line-height:20px;}
                        .changeAddmake ul li.changeSecondLi{margin-bottom:8px;}
                        .changeAddmake a{color:#f450a2;font-weight: bold;text-decoration:underline;position: absolute;top:36px;right:15px;}
                        .changeSecondH3{margin-top:8px;}
                        .changeSecondBox{background-color:#fff;cursor:pointer;position: relative;}
                        .changeSecondBox ul{padding-right:54px;}
                        .changeSecondBox img{position:absolute;right:0px;bottom: 0px;display: none;}    /* 选择增加的img */
                        .changeSecondBox ul li{color:#666666;}
                        .changeSecondBox ul li.changeFirstLi{color:#333333;}

                        .changeAddressForm{width:598px;border:4px solid #a9a9a7;font-size:12px;background-color:#fff;display: none;z-index: 111001;position: absolute;left: 50%;top: 50%;margin-left: -299px;margin-top: -139px;position: fixed!important;}
                        .changeAddUl{margin-top:21px;padding-left: 0px;color:#999999;line-height:31px;padding-left:26px;}
                        .changeAddUl ul li{list-style-type: none;margin-bottom:12px;float: left;margin-right:21px;}
                        .changeAddUl ul li input{margin-left:10px;border:1px solid #cccccc;color:#333333;padding-left: 4px;}
                        .changeAddUl .goodsMan{padding-left:13px;width:517px;}
                        #changeAddUl_but1{width:126px;height:24px;line-height: 24px;}
                        #changeAddUl_but2 label{padding-right:5px;}
                        #changeAddUl_but2 .select1{width:132px;height:17px;}
                        #changeAddUl_but2 .select2{width:79px;height:17px;}
                        #changeAddUl_but2 .select3{width:79px;height:17px;}
                        #changeAddUl_but2 .select4{width:119px;height:17px;}
                        #changeAddUl_but3{width:356px;height:24px;color:#333333;line-height: 24px;}
                        #changeAddUl_but4{width:194px;height:24px;color:#333333;line-height: 24px;}
                        #changeAddUl_but5{width:194px;height:24px;color:#333333;line-height: 24px;}
                        .changeAddressForm .Operation{margin-left: 63px;}
                        .Operation{margin:0 auto;clear: both;color:#fff;font-size: 14px;font-weight: bold;text-align: center;width:225px;line-height: 30px;}
                        .Operation .Determine{width:104px;height:30px;background-color:#f450a2;float: left;margin-right:17px;cursor: pointer;margin-bottom: 15px;}  /* 确定 */
                        .Operation .Cancel{width:104px;height:30px;background-color:#f450a2;float: left;cursor: pointer;margin-bottom: 15px;}  /* 取消*/

                        .changeAddressCon{width:367px;border:4px solid #a9a9a7;font-size:12px;background-color:#fff;display: none;z-index: 111001;position: absolute;left: 50%;top: 50%;margin-left: -183px;margin-top: -98px;position: fixed!important;}
                        .changeAddressCon .changeAddh3{color:#f450a2;font-weight: bold;line-height:31px;padding-left:20px;margin-top:8px;}
                        .changeAddressCon p{color:#666666;line-height:24px;padding-left:20px;padding-right:20px;}
                        .changeAddressCon .Operation{padding-top: 11px;}
                        .Operation .Determine.change_sur{background-color:#ff69b3;font-weight:normal;}
                        .Operation .Cancel.change_qx{background-color:#f9f9f9;color:#000000;font-weight:normal;border:1px solid #d5d5d5;width: 102px;height:28px;}


                        .changeAddressSF{width:367px;height:196px;border:4px solid #a9a9a7;font-size:12px;background-color:#fff;display: none;z-index: 111001;position: absolute;left: 50%;top: 50%;margin-left: -183px;margin-top: -98px;position: fixed!important;}
                        .changeAddZt{width:299px;height:60px;margin:0 auto;margin-top:14px;font-size:14px;}
                        .changeAddZt img{vertical-align: middle;margin-right:9px;color:#333333;font-size: 14px;}
                        .changeAddressSucD{width:100px;height:30px;background-color:#f450a2;cursor: pointer;line-height: 30px;color:#fff;font-size: 14px;font-weight: bold;text-align: center;margin:0 auto;margin-top:20px;}


                        /*遮罩*/
                        .popup_mask{display:none;width:100%;height: 100%;z-index: 111000;position: fixed;top:0;left:0;  background-color: #000;
                            filter:alpha(opacity=50);/*IE*/opacity:0.5;/*FF*/position:fixed!important;/*FF IE7*/position:absolute;/*IE6*/}
                        .popup_notice{display: none;z-index: 111001;height: 423px;position: absolute;left:50%;top:50%;margin-left: -260px;margin-top: -211px;position:fixed!important;/*FF IE7*/positiabsolute;/*IE6*/}
                        .popup_notice a#close_mia_popup{display: block;position: absolute;width: 50px;height: 50px;top:14px;right:12px;background:url(about:blank)}

                        /* 新增 */
                        .add_messages {
                            vertical-align: middle;
                            color: #F67649;
                            width:148px;
                            height:22px;
                            border: 1px solid #FEDBB1;
                            background: #FFFDE7;
                            margin: 15px 0 16px 0px;
                            padding: 0px 4px;
                            font-size: 12px;
                            font-family: Verdana, Geneva, sans-serif;
                            line-height: 22px;
                            font-weight: normal;
                        }
                    </style>
                    <div class="splist p20" id="orderList">
                        您还没有订单        <!-- 修改地址显示弹框 -->
                        <div class="changeAddress">
                            <div class="changeAddTit">修改地址<img src="resources/images/close.jpg"></div>       <!-- header -->
                            <div class="changeAddh3">修改订单收货地址</div>
                            <div class="changeAddmake addr1">
                                <ul>
                                    <li></li>
                                    <li class="changeSecondLi"></li>
                                </ul>
                                <a href="#" class="changeAddress_xg xgnew">修改</a>
                            </div>

                            <div class="changeAddh3 changeSecondH3">选择已有收货地址</div>
                            <!-- address list -->
                            <!-- end address list -->
                        </div>
                        <!-- 修改需要修改的弹框 -->
                        <div class="changeAddressForm">
                            <div class="changeAddTit">修改地址<img src="resources/images/close.jpg"></div>       <!-- header -->
                            <div class="changeAddUl">
                                <ul>
                                    <li class="goodsMan">收货人:<input type="text" value="" id='changeAddUl_but1' class="name"/></li>
                                    <li id='changeAddUl_but2'>
                                        <!--  <form action="" method="get">
                                          <label>所在地区:</label>
                                          <select name="" class="select1 province" onchange="change_province($(this),'province')">
                                              <option value="0">请选择</option>
                                          </select>
                                          <select name="" class="select2 city" onchange="change_province($(this),'city')">
                                              <option value="0">请选择</option>
                                          </select>
                                          <select name="" class="select3 area" onchange="change_province($(this),'area')">
                                                  <option value="0">请选择</option>
                                          </select>
                                          <select name="" class="select4 street">
                                              <option value="0">请选择</option>
                                          </select>
                                          </form> -->

                                        <tbody>
                                        <tr>
                                            <td align="right"><span class="pink"></span> 所在地区：</td>
                                            <td id="address_area">
                        <span id="span_province">
                        	<select id="ship_province" name="ship_province" class="province" onchange="change_province($(this),'province')">
                                <option value="0">请选择</option>
                            </select>
                        </span>
                        <span id="span_city">
	                        <select id="ship_city" name="ship_city" class="city" onchange="change_province($(this),'city')">
                                <option value="0">请选择</option>
                            </select>
                        </span>
                        <span id="span_area">
                        	<select id="ship_area" name="ship_area" class="area" onchange="change_province($(this),'area')">
                                <option value="0">请选择</option>
                            </select>
                        </span>
                        <span id="span_town">
                        <select id="ship_town" name="ship_town" class="street">
                            <option value="0">请选择</option>
                        </select></span>
                                                <span id="new_area_error"></span>
                                            </td>
                                        </tr>
                                        </tbody>

                                    </li>
                                    <li>详细地址:<input type="text" value=""  id='changeAddUl_but3' class="address"/></li>
                                    <li>手机号码:<input type="text" value=""  id='changeAddUl_but4' class="cell"/></li>
                                    <li>固定电话:<input type="text" value=""  id='changeAddUl_but5' class="phone"/></li>
                                </ul>

                                <div class="Operation">
                                    <div class="add_messages" style="display: none"></div>
                                    <div class="Determine">确定</div>
                                    <div class="Cancel">取消</div>
                                </div>
                            </div>
                        </div>
                        <!-- 修改地址确认弹框 -->
                        <div class="changeAddressCon">
                            <div class="changeAddTit">修改地址确认<img src="resources/images/close.jpg"></div>       <!-- header -->
                            <div class="changeAddh3">修改后地址如下</div>
                            <p id='newAddress'></p>
                            <div class="Operation">
                                <div class="Determine change_sur">确定</div>
                                <div class="Cancel change_qx">取消</div>
                            </div>
                        </div>
                        <!-- 修改地址成功弹框 -->
                        <div class="changeAddressSF changeAddressCG">
                            <div class="changeAddTit">修改地址成功<img src="resources/images/close.jpg"></div>       <!-- header -->
                            <div class="changeAddZt"><img src="resources/images/cg.jpg" />您的地址已经修改成功！</div>
                            <div class="changeAddressSucD">确定</div>
                        </div>
                        <!-- 修改地址失败弹框 -->
                        <div class="changeAddressSF changeAddressSB">
                            <div class="changeAddTit">修改地址失败<img src="resources/images/close.jpg"></div>       <!-- header -->
                            <div class="changeAddZt"><img src="resources/images/shb.jpg" /><span class="msg"></span></div>
                            <div class="changeAddressSucD">确定</div>
                        </div>
                        <!-- 遮罩 -->
                        <div id="mia_popup_mask" class="popup_mask" style="display: none;"></div>
                        <script>
                            var provinceJsonList = {};
                            var orderAddrInfo = {};

                            function change_province(obj,name){

                                var selectId = obj.val();
                                var ele = $('.changeAddressForm');

                                switch(name){
                                    case 'province':
                                        ele.find('.city option[value!="0"]').remove();
                                        ele.find('.area option[value!="0"]').remove();
                                        ele.find('.street option[value!="0"]').remove();

                                        getAddrJsonList({act:'get_cities_json',
                                            data:{province_id:selectId},
                                            'assign_ele' : ele.find('.city'),
                                        });

                                        break;
                                    case 'city':
                                        ele.find('.area option[value!="0"]').remove();
                                        ele.find('.street option[value!="0"]').remove();
                                        getAddrJsonList({act:'get_areas_json',
                                            data:{city_id:selectId},
                                            'assign_ele' : ele.find('.area'),
                                        });

                                        break;
                                    case 'area':
                                        ele.find('.street option[value!="0"]').remove();
                                        getAddrJsonList({act:'get_towns_json',
                                            data:{area_id:selectId},
                                            'assign_ele' : ele.find('.street'),
                                        });
                                        break;
                                }
                            }

                            function getAddrJsonList(argData){
                                //argData.act = get_cities_json
                                var selectId = false;

                                $.ajax({
                                    url:'/instant/order/' + argData.act,
                                    type:'post',
                                    data:argData.data,
                                    //async:false,
                                    dataType:'json',
                                    success:function(res){
                                        var plen = res.length;
                                        var pstr = '';
                                        for(var i = 0; i< plen; i++){
                                            var select = '';
                                            if(selectId === false){
                                                select = res[i].name == argData.selectName ? ' selected="selected"' : '';
                                                if(select != '')selectId = res[i].id;
                                            }
                                            pstr += '<option value="'+res[i].id+'" '+ ( select ) +'>'+res[i].name+'</option>';
                                        }
                                        argData.assign_ele.find('option[value!="0"]').remove();
                                        argData.assign_ele.append(pstr);
                                        if(selectId){
                                            if(argData.act == 'get_cities_json'){
                                                assign_addr_list(selectId,'city');
                                            }else if(argData.act == 'get_areas_json'){
                                                assign_addr_list(selectId,'area');
                                            }
                                        }
                                    }
                                });

                                return selectId;

                            }

                            function getAddrList(obj){
                                var par_code = obj.attr('data-oc');
                                $.ajax({
                                    url:'/instant/order/getEditOrderAddressList',
                                    type:'post',
                                    data:{'par_code':par_code},
                                    dataType:'json',
                                    success:function(res){
                                        $('#mia_popup_mask').show();

                                        var ele = $('.changeAddress');
                                        ele.find('.changeSecondBox').remove();
                                        ele.find('.changeSecondH3').hide();
                                        if(!res.code){
                                            tip_fail(res.msg);
                                            obj.parent().remove();
                                            return false;
                                        }
                                        ele.show();
                                        ele.find('.changeSecondH3').show();
                                        provinceJsonList = res.province_json;
                                        orderAddrInfo = res.orderAddrInfo;

                                        ele.find('.addr1 li').eq(0).html(res.orderAddrInfo.name +' '+ res.orderAddrInfo.cell);
                                        ele.find('.addr1 .changeSecondLi').html(res.orderAddrInfo.province + res.orderAddrInfo.city + res.orderAddrInfo.area + res.orderAddrInfo.street + res.orderAddrInfo.address);
                                        ele.find('.xgnew').attr('data-oc', par_code);
                                        var str = '';
                                        var len = res.addressList.length;
                                        if(len){
                                            for(var i = 0; i < len; i++){
                                                str += '<div class="changeAddmake changeSecondBox">';
                                                str += '<ul>';
                                                str += '<li class="changeFirstLi">'+res.addressList[i].name+'  '+res.addressList[i].cell+'</li>';
                                                str += '<li class="changeSecondLi">'+ (res.addressList[i].is_default == 1 ? '[默认]' : '')+ res.addressList[i].provname + res.addressList[i].cityname+ res.addressList[i].areaname+ res.addressList[i].townname+ res.addressList[i].address + '</li>';
                                                str += '<a href="#" class="changeAddress_xg xgodd" order_code="'+par_code+'" data-addrId="'+res.addressList[i].id+'">选择</a>';
                                                str += '</ul>';
                                                str += '</div>';

                                            }
                                            if(str){
                                                $('.changeAddress .changeSecondBox').remove();
                                                $(str).insertAfter($('.changeAddress .changeSecondH3'));
                                            }

                                        }



                                    }
                                });

                            }

                            function check_form(){
                                var prev_ele = $('.changeAddressForm');
                                var data = {};
                                var ret = {msg:'',pass:true, 'data': {}};
                                data.name = prev_ele.find('.name').val();
                                data.province = prev_ele.find('.province option:selected').text();
                                data.province_id = prev_ele.find('.province option:selected').val();
                                data.city = prev_ele.find('.city option:selected').text();
                                data.city_id = prev_ele.find('.city option:selected').val();
                                data.area = prev_ele.find('.area option:selected').text();
                                data.area_id = prev_ele.find('.area option:selected').val();
                                data.street = prev_ele.find('.street option:selected').text();
                                data.street_id = prev_ele.find('.street option:selected').val();
                                data.address = prev_ele.find('#changeAddUl_but3').val();

                                data.cell = prev_ele.find('.cell').val();
                                data.phone = prev_ele.find('.phone').val();

                                for(var f in data){
                                    if(!ret.pass)break;
                                    var v = data[f];
                                    switch(f){
                                        case 'name':
                                            if(isEmpty(v)){
                                                ret.msg = '收货人不能为空';
                                                ret.pass = false;
                                            }else if(!is_forbid(v)){
                                                ret.msg = '收货人中含有非法字符';
                                                ret.pass = false;
                                            }else if(v.length > 25){
                                                ret.msg = '收货人姓名不能大于25位';
                                                ret.pass = false;
                                            }
                                            break;
                                        case 'province':
                                            if(!data.province_id || parseInt(data.province_id) <= 0 || isEmpty(v)){
                                                ret.msg = '请选择所在省';
                                                ret.pass = false;
                                            }
                                            break;
                                        case 'city':
                                            if(!data.city_id || parseInt(data.city_id) <= 0 || isEmpty(v)){
                                                ret.msg = '请选择所在市';
                                                ret.pass = false;
                                            }
                                            break;
                                        case 'area':
                                            if(!data.area_id || parseInt(data.area_id) <= 0 || isEmpty(v)){
                                                ret.msg = '请选择所在区';
                                                ret.pass = false;
                                            }
                                            break;
                                        case 'street':
                                            if(!data.street_id || parseInt(data.street_id) <= 0 || isEmpty(v)){
                                                ret.msg = '请完善所在地区';
                                                ret.pass = false;
                                            }
                                            break;

                                        case 'address':
                                            if(isEmpty(v)){
                                                ret.msg = '详细地址不能为空';
                                                ret.pass = false;
                                            }else if(!is_forbid(v)){
                                                ret.msg = '详细地址中含有非法字符';
                                                ret.pass = false;
                                            }else if(v.length>50){
                                                ret.msg = '详细地址中过长';
                                                ret.pass = false;
                                            }
                                            break;

                                        case 'cell':
                                            if(isEmpty(v)){
                                                ret.msg = '手机号码不能为空';
                                                ret.pass = false;
                                            }else if(!check_mobile(v)){
                                                ret.msg = '手机号码格式不正确';
                                                ret.pass = false;
                                            }
                                            break;

                                        case 'phone':
                                            if(!isEmpty(v)){
                                                if(!is_forbid(v)){
                                                    ret.msg = '固定电话中含有非法字符';
                                                    ret.pass = false;
                                                }
                                                else if(!checkPhone(v)){
                                                    ret.msg = '"固定电话号码格式不正确';
                                                    ret.pass = false;
                                                }
                                            }
                                            break;

                                    }
                                }
                                ret.data = data;
                                return ret;
                            }

                            function submitAddr(){

                                var prev_ele = $('.changeAddressForm');
                                var con = $('.changeAddressCon');
                                var data = {};
                                if(con.attr('from') == 'edit'){
                                    var ck = check_form();
                                    if(!ck.pass){
                                        alert(ck.msg);
                                        return false;
                                    }

                                    /*data.province = prev_ele.find('.province option:selected').text();
                                     data.city = prev_ele.find('.city option:selected').text();
                                     data.area = prev_ele.find('.area option:selected').text();
                                     data.street = prev_ele.find('.street option:selected').text();
                                     data.address = prev_ele.find('#changeAddUl_but3').val();
                                     data.name = prev_ele.find('.name').val();
                                     data.cell = prev_ele.find('.cell').val();
                                     data.phone = prev_ele.find('.phone').val();
                                     */
                                    data.province = ck.data.province;
                                    data.city = ck.data.city;
                                    data.area = ck.data.area;
                                    data.street = ck.data.street;
                                    data.address = ck.data.address;
                                    data.name = ck.data.name;
                                    data.cell = ck.data.cell;
                                    data.phone = ck.data.phone;

                                    data.order_code = prev_ele.attr('order_code');
                                }else{
                                    data.address_id = con.attr('addrid');
                                    data.order_code = con.attr('order_code');
                                }


                                $.ajax({
                                    url:'/instant/order/change_order_addr',
                                    type:'post',
                                    data:data,
                                    //data:{'newAddrInfo':data,'order_code' : order_code},
                                    dataType:'json',
                                    success:function(res){
                                        if(res.status){                         //成功
                                            $('.changeAddressCon').hide();
                                            $('.changeAddressCG').show();
                                        }else{                             //失败
                                            $('.changeAddressCon').hide();
                                            tip_fail(res.msg);
                                        }

                                    }
                                });


                            }

                            function tip_fail(msg){
                                $('.changeAddressSB .msg').text(msg);
                                $('.changeAddressSB').show();
                            }


                            function showEdit(order_code){
                                var ele = $('.changeAddressForm');
                                ele.attr('order_code',order_code);
                                ele.find('.name').val(orderAddrInfo.name);
                                ele.find('.address').val(orderAddrInfo.address);
                                ele.find('.cell').val(orderAddrInfo.cell);
                                ele.find('.phone').val(orderAddrInfo.phone);
                                ele.find('.province option[value!="0"]').remove();
                                var plen = provinceJsonList.length;
                                var pstr = '';
                                var selectPro = false;
                                var	selectCity = false;
                                var selectArea = false;
                                for(var i = 0; i< plen; i++){
                                    var select = '';
                                    if(selectPro === false){
                                        select = provinceJsonList[i].name == orderAddrInfo.province ? ' selected="selected"' : '';
                                        if(select != ''){
                                            selectPro = provinceJsonList[i].id;
                                        }
                                    }
                                    pstr += '<option value="'+provinceJsonList[i].id+'"'+ ( select ) +'>'+provinceJsonList[i].name+'</option>';
                                }

                                ele.find('.province').append(pstr);
                                return selectPro;
                                if(selectPro){
                                    /*var cityId = getAddrJsonList({act:'get_cities_json',
                                     data:{province_id:selectPro},
                                     'assign_ele' : ele.find('.city'),
                                     'selectName' : orderAddrInfo.city
                                     });

                                     var areaId = getAddrJsonList({act:'get_areas_json',
                                     data:{city_id:cityId},
                                     'assign_ele' : ele.find('.area'),
                                     'selectName' : orderAddrInfo.area
                                     });

                                     getAddrJsonList({act:'get_towns_json',
                                     data:{area_id:areaId},
                                     'assign_ele' : ele.find('.street'),
                                     'selectName' : orderAddrInfo.street
                                     }); */

                                }
                            }

                            function assign_addr_list(id,from){

                                var ele = $('.changeAddressForm');
                                var select_id = 0;
                                switch(from){
                                    case 'province':
                                        select_id = getAddrJsonList({act:'get_cities_json',
                                            data:{province_id:id},
                                            'assign_ele' : ele.find('.city'),
                                            'selectName' : orderAddrInfo.city
                                        });
                                        //assign_addr_list(select_id,'city');
                                        break;

                                    case 'city':
                                        select_id = getAddrJsonList({act:'get_areas_json',
                                            data:{city_id:id},
                                            'assign_ele' : ele.find('.area'),
                                            'selectName' : orderAddrInfo.area
                                        });
                                        //assign_addr_list(select_id,'area');
                                        break;

                                    case 'area':
                                        getAddrJsonList({act:'get_towns_json',
                                            data:{area_id:id},
                                            'assign_ele' : ele.find('.street'),
                                            'selectName' : orderAddrInfo.street
                                        });

                                        break;
                                }
                                return select_id;
                            }


                            (function(){

                                function changeAddress(){
                                    this.changeAddressBtn='.changeAddressBtn';  //弹出层1
                                    this.closes='.changeAddTit img,.Operation .Cancel';
                                    this.xgnew='.xgnew'; //修改
                                    this.xgodd='.xgodd'; //选择
                                    this.Determine='.changeAddressForm .Determine';  //修改地址下的确定
                                    this.changeAddressCon='.changeAddressCon .Determine';    //点修改地址确认的确定
                                    this.changeAddressSF='.changeAddressSF .changeAddressSucD';   //最后取消
                                }
                                changeAddress.prototype={
                                    AddressBtn:function(){
                                        $(this.changeAddressBtn).click(function(){ //弹出层1
                                            $('.changeAddress .changeSecondBox').remove();
                                            getAddrList($(this));
                                            // $('#mia_popup_mask').show();
                                            // $('.changeAddress').show();

                                        })
                                        $(this.closes).click(function(){    //弹出层1关闭  //弹出层所有的取消按钮
                                            $('#mia_popup_mask').hide();
                                            $('.changeAddress').hide();
                                            $('.changeAddressForm').hide();
                                            $('.changeAddressCon').hide();
                                            $('.changeAddressCG').hide();
                                            $('.changeAddressSB').hide();
                                        })
                                        $(this.xgnew).click(function(){   //点修改

                                            $('.changeAddress').hide();
                                            $('.changeAddressForm').show();
                                            var select_id = showEdit($(this).attr('data-oc')); //edit
                                            assign_addr_list(select_id,'province');
                                        })
                                        $('.changeAddress').delegate('.xgodd','click',function(){   //点选择
                                            $('.changeAddress').hide();
                                            $('.changeAddressCon').show();
                                            $('.changeAddressCon').attr('from','select');
                                            $('.changeAddressCon').attr('order_code',  $(this).attr('order_code'));
                                            $('.changeAddressCon').attr('addrId', $(this).attr('data-addrId'));
                                            $('#newAddress').text($(this).siblings('.changeSecondLi').text()+' '+$(this).siblings('.changeFirstLi').text());
                                        })
                                        $(this.Determine).click(function(){   //点修改地址下的确定

                                            var result = check_form();
                                            if(!result.pass){
                                                var tipEle = $(this).prev('.add_messages');
                                                tipEle.text(result.msg).fadeIn();
                                                setTimeout(function(){
                                                    $('.changeAddressForm .add_messages').text('').fadeOut();
                                                },2000);
                                                return false;
                                            }

                                            $('.changeAddressForm').hide();
                                            $('.changeAddressCon').show();
                                            $('.changeAddressCon').attr('order_code', $('.changeAddressForm').attr('order_code'));
                                            $('.changeAddressCon').attr('from','edit');
                                            //修改html
                                            var str ='';
                                            var prev_ele = $('.changeAddressForm');
                                            str += prev_ele.find('.province option:selected').text();
                                            str += prev_ele.find('.city option:selected').text();
                                            str += prev_ele.find('.area option:selected').text();
                                            str += prev_ele.find('.street option:selected').text();
                                            str += prev_ele.find('#changeAddUl_but3').val();
                                            str += ' ' + prev_ele.find('.name').val();
                                            str += ' ' + prev_ele.find('.cell').val();
                                            str += ' ' + prev_ele.find('.phone').val();
                                            $('#newAddress').text(str);
                                        })
                                        //点修改地址确认的确定   可能显示成功也可能显示失败
                                        $(this.changeAddressCon).click(function(){

                                            //提交修改后的地址
                                            submitAddr();

                                            /*   if(true){                         //成功
                                             $('.changeAddressCon').hide();
                                             $('.changeAddressCG').show();
                                             }else{                             //失败
                                             $('.changeAddressCon').hide();
                                             $('.changeAddressSB').show();
                                             } */
                                        })
                                        //最后的点击取消
                                        $(this.changeAddressSF).click(function(){
                                            $('#mia_popup_mask').hide();
                                            $('.changeAddressSF').hide();
                                        })
                                    }
                                }
                                new changeAddress().AddressBtn()
                            })()


                        </script>                    <div class="more tr">
                        <a href="/order_lists.html" class="pink">查看更多&gt;&gt;</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rfrim">
    <div class="rightFunction dn">
        <div class="OnlineCS NFBpub service_mia_0">
            <div class="hide_button" style="position:absolute;top:0; left:0; width: 65px; height: 46px; z-index: 9;"></div>
            <a href="javascript:void(0)" class="cur NFBpub">在线咨询</a>
            <!-- online chat 开始-->
            <div style='display:none;'>
                <a href='http://www.live800.com'>在线聊天</a>
                <script type="text/JavaScript" language="javascript">
                    var live_c = getcookie('live_info');
                    if(live_c) {
                        document.write("<scr"+"ipt language=\"javascript\" src=\"http://chat800.mia.com/live800/chatClient/staticButton.js?companyID=424726&configID=7&codeType=custom&info=" + getcookie('live_info') + "\" charset=\"UTF-8\"></scr"+"ipt>");
                    } else {
                        document.write("<scr"+"ipt language=\"javascript\" src=\"http://chat800.mia.com/live800/chatClient/staticButton.js?companyID=424726&configID=7&codeType=custom\" charset=\"UTF-8\"></scr"+"ipt>");
                    }
                </script>
                <div style='display:none;'>
                    <a href='http://en.live800.com'>live chat</a>
                </div>

                <!--online chat 结束-->
                <!-- online chat 默认跟踪代码: 开始-->
                <script language="javascript" src="http://chat800.mia.com/live800/chatClient/monitor.js?companyID=424726&configID=3&codeType=custom"></script>
                <!-- online chat 默认跟踪代码: 结束-->
            </div>
        </div>
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
    <a href="/event/send_coupon" target="_blank" class="topImage xxx" style="display:none;"><img src="http://file01.miyabaobei.com/resources/images/index_left_wx3Dc.png?v=20150710" /></a>
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