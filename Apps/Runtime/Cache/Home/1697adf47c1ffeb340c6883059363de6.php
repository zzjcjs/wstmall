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
                    <a href="<?php echo U('Mia/getCartInfo');?>">
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


        
    <div class="mainSlide" id="mainSlide">
    <div id="topslide">
        <div class="cell">
            <div class="prom" style="background-image:url(http://www.wstmall.local/public/images/1.jpg);"></div>
            <div class="w1004">
                <a target="_blank" href="http://www.mia.com/sale/thanDay/main/" id="__AD_focus729" title="" class="promLink" data-ref="729"></a>
            </div>
        </div>
        <div class="cell">
            <div class="prom" style="background-image:url(http://www.wstmall.local/public/images/2.jpg);"></div>
            <div class="w1004">
                <a target="_blank" href="http://www.mia.com/special/module/index/197/pc/" id="__AD_focus726" title="" class="promLink" data-ref="726"></a>
            </div>
        </div>
        <div class="cell">
            <div class="prom" style="background-image:url(http://www.wstmall.local/public/images/3.jpg);"></div>
            <div class="w1004">
                <a target="_blank" href="http://www.mia.com/special/module/index/275/pc/" id="__AD_focus727" title="" class="promLink" data-ref="727"></a>
            </div>
        </div>
        <div class="cell">
            <div class="prom" style="background-image:url(http://www.wstmall.local/public/images/4.jpg);"></div>
            <div class="w1004">
                <a target="_blank" href="http://www.mia.com/special/module/index/272/pc/" id="__AD_focus728" title="" class="promLink" data-ref="728"></a>
            </div>
        </div>
        <div class="cell cur">
            <div class="prom" style="background-image:url(http://www.wstmall.local/public/images/5.jpg);"></div>
            <div class="w1004">
                <a target="_blank" href="http://www.mia.com/list-21960.html" id="__AD_focus734" title="" class="promLink" data-ref="734"></a>
            </div>
        </div>
    </div>
    <div class="pgWidth">
        <div class="w1004">
            <span class="slideNum" id="slideNum">
                            <i class=""></i>
                            <i class=""></i>
                            <i class=""></i>
                            <i class=""></i>
                            <i class="cur"></i>
            </span>
        </div>
    </div>
    <div class="arNav">
        <div class="w1004">
            <a style="display: none;" href="#" class="leftAr"></a>
            <a style="display: none;" href="#" class="rightAr"></a>
        </div>
    </div>
</div>>
    <div class="today_title w1000"> 今日精选 </div>

    <div class="TodaySelected">
    <div id="TBBRim">
        <div class="fmRim TodayBoutique">
            <ul class="fmCon">
                <li class="HBSBlock">


                    <?php if(is_array($todaySelected)): $i = 0; $__LIST__ = $todaySelected;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="TBB">
                        <a target="_blank" href="<?php echo U('Mia/goodsDetails/',array('goodsId'=>$vo['goodsId']));?>" title="<?php echo ($vo['goodsName']); ?>">
                        <div class="Commodity rel">
                            <img src="<?php echo ($vo['goodsImg']); ?>" width="228" height="228" alt="<?php echo ($vo['goodsName']); ?>"/>
                            <div class="Nicon NI_hot">热</div>
                        </div>
                        <div class="price1">
                            <div class="r">
                                2440人喜欢
                            </div>
                            <span class="p1">￥</span><span class="p2"><?php echo ($vo['shopPrice']); ?></span><span class="originalPrice">￥<?php echo ($vo['marketPrice']); ?></span> </div>
                        <div class="intro"><p><?php echo ($vo['goodsName']); ?></p>
                            <p class="gray3"><?php echo ($vo['goodsBrief']); ?></p>
                        </div>
                        </a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>


                </li>
            </ul>

        </div>
    </div>
</div>
<!--今日精选-结束-->

        <div class="Extension w1000 clearfix HBSBlock">
        <div  >
            <a target="_blank" href="http://www.miyabaobei.com/formulas.html">
                <img src="/Public/images/buy_everyday_1.jpg" data-src="http://img02.miyabaobei.com/d1/p2/2015/10/20/40/78/407868cd7990cbc293c79e6334d778f5.jpg" alt="" width="492" height="160" class="lazyload"/>
            </a>
        </div>
        <div  class="mr0" >
            <a target="_blank" href="http://www.miyabaobei.com/diapers.html">
                <img src="/Public/images/buy_everyday_2.jpg" data-src="http://img03.miyabaobei.com/d1/p2/2015/10/20/c4/50/c4509f325a8b9cb2878126ba60eab2c6.jpg" alt="" width="492" height="160" class="lazyload"/>
            </a>
        </div>
    </div>
    <!--天天特卖-结束-->

    <div class="topRanking w1000">
    <ul class="tabMenu">
        <li class="selected"><span>全球必Buy</span><!--<span class="line1 left"></span><span class="line1 right"></span>--></li>
        <!--<li class="line"></li>-->
        <li ><span>当季爆款</span><!--<span class="line1 left"></span><span class="line1 right"></span>--></li>
        <!--<li class="line"></li>-->
        <li ><span>新品推荐</span><!--<span class="line1 left"></span><span class="line1 right"></span>--></li>
        <!--<li class="line"></li>-->
        <li ><span>超值好物</span><!--<span class="line1 left"></span><span class="line1 right"></span>--></li>
        <!--<li class="line"></li>-->
    </ul>
    <div class="tabContent">
        <div class="parent HBSBlock clearfix" style="display:block;" >
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1105208.html">
                <div class="l">
                    <img src="http://img01.miyabaobei.com/d1/p2/2015/11/20/7f/dd/7fddbef412e0f6ac79d8a201a578ebe6.jpg" class="lazyload" alt="sk2神仙水精华露" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t1">top1</div>
                    <div class="title">sk2神仙水精华露</div>
                    <div class="SellingPoint">调理肌肤水油平衡<br/>促进肌肤新陈代谢</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">738.00</span><span class="originalPrice">￥1270.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1000978.html">
                <div class="l"><img src="http://img01.miyabaobei.com/d1/p2/2015/11/20/7f/dd/7fddbef412e0f6ac79d8a201a578ebe6.jpg" class="lazyload" alt="妙思乐洗发沐浴露" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t2">top2</div>
                    <div class="title">妙思乐洗发沐浴露</div>
                    <div class="SellingPoint">功效二合一<br/>无泪配方无刺激</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">99.00</span><span class="originalPrice">￥178.00</span></div>
                    <div class="Sales">
                        3353人已购买
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1109462.html">
                <div class="l"><img src="http://img02.miyabaobei.com/d1/p2/2015/11/20/62/d5/62d56e95e6bcf3c8a76534e16af37160.jpg" class="lazyload" alt="果蔬乐康膏250g*2盒" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t3">top3</div>
                    <div class="title">果蔬乐康膏250g*2盒</div>
                    <div class="SellingPoint">通便排毒<br/>净肠美肌补充能量</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">99.00</span><span class="originalPrice">￥196.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1027801.html">
                <div class="l"><img src="http://img03.miyabaobei.com/d1/p2/2015/11/20/db/76/db76281456d90c25bd1e0587a4dacc1c.jpg" class="lazyload" alt="JELLYCAT邦尼兔" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t4">top4</div>
                    <div class="title">JELLYCAT邦尼兔</div>
                    <div class="SellingPoint">可爱萌萌哒<br/>手感柔软</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">195.00</span><span class="originalPrice">￥269.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1019621.html">
                <div class="l"><img src="http://img04.miyabaobei.com/d1/p2/2015/11/20/7b/48/7b485014429b12279bb18724ccd0d4ff.jpg" class="lazyload" alt="多利科计量勺" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t5">top5</div>
                    <div class="title">多利科计量勺</div>
                    <div class="SellingPoint">制作辅食<br/>烹饪佐料称量</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">158.00</span><span class="originalPrice">￥248.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1070589.html">
                <div class="l"><img src="http://img01.miyabaobei.com/d1/p2/2015/11/20/29/87/29870a5ec8c9d42f52d9c41d58a18577.jpg" class="lazyload" alt="Schick乳木果刮毛刀" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t6">top6</div>
                    <div class="title">Schick乳木果刮毛刀</div>
                    <div class="SellingPoint">刀头自带润肤皂<br/>使用方便超级润滑</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">85.00</span><span class="originalPrice">￥150.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>

        </div>
        <div class="parent HBSBlock clearfix"  >
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1070102.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img02.miyabaobei.com/d1/p2/2015/11/20/ab/8d/ab8d3db8690c034c5830f3a5d23dad97.jpg" class="clicklazyload" alt="NENET新生儿5件套" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t1">top1</div>
                    <div class="title">NENET新生儿5件套</div>
                    <div class="SellingPoint">柔软低敏感安全材质<br/>自用送礼两相宜</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">228.00</span><span class="originalPrice">￥320.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1000341.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img03.miyabaobei.com/d1/p2/2015/11/20/c6/01/c60144e31dfeb359a44b6dea69b76858.jpg" class="clicklazyload" alt="智高彩虹夜灯" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t2">top2</div>
                    <div class="title">智高彩虹夜灯</div>
                    <div class="SellingPoint">发展宝宝视觉<br/>培养音乐乐感</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">220.00</span><span class="originalPrice">￥349.00</span></div>
                    <div class="Sales">
                        335人已购买
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1070106.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img04.miyabaobei.com/d1/p2/2015/11/20/b9/42/b9421c2900478f30e8a35b2df7206d22.jpg" class="clicklazyload" alt="薇婷沐浴用脱毛膏" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t3">top3</div>
                    <div class="title">薇婷沐浴用脱毛膏</div>
                    <div class="SellingPoint">坚果保湿精华<br/>光滑滋润效果持久</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">68.00</span><span class="originalPrice">￥158.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1070684.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img01.miyabaobei.com/d1/p2/2015/11/20/ce/20/ce20298307e2a215dde51831e528dd95.jpg" class="clicklazyload" alt="VEGE FRU酵素代餐粉" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t4">top4</div>
                    <div class="title">VEGE FRU酵素代餐粉</div>
                    <div class="SellingPoint">天然果蔬提取<br/>减少吸收多余糖分</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">228.00</span><span class="originalPrice">￥385.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1000459.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img02.miyabaobei.com/d1/p2/2015/11/20/7d/e7/7de71ac69a16d18f315d048bca7f979c.jpg" class="clicklazyload" alt="小林退热贴12+4枚" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t5">top5</div>
                    <div class="title">小林退热贴12+4枚</div>
                    <div class="SellingPoint">8小时清凉感<br/>2岁以上适用</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">36.00</span><span class="originalPrice">￥97.00</span></div>
                    <div class="Sales">
                        5962人已购买
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1116300.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img03.miyabaobei.com/d1/p2/2015/11/20/7b/5e/7b5eaa57c9ea6b460e676afd583399f6.jpg" class="clicklazyload" alt="洛斯小丁内衣套装" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t6">top6</div>
                    <div class="title">洛斯小丁内衣套装</div>
                    <div class="SellingPoint">罗纹收口防风钻入<br/>护肚设计防止受凉</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">119.00</span><span class="originalPrice">￥259.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>

        </div>
        <div class="parent HBSBlock clearfix"  >
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1070552.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img04.miyabaobei.com/d1/p2/2015/11/20/60/3c/603c092bd56df72af9b2536e2767f876.jpg" class="clicklazyload" alt="GOLDMASK活肤面膜" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t1">top1</div>
                    <div class="title">GOLDMASK活肤面膜</div>
                    <div class="SellingPoint">补水效果好<br/>无酒精无矿物油</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">75.00</span><span class="originalPrice">￥158.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1106020.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img01.miyabaobei.com/d1/p2/2015/11/20/b0/34/b03429ddeeb311aa002ccdabb39b189e.jpg" class="clicklazyload" alt="Boii创意马克杯" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t2">top2</div>
                    <div class="title">Boii创意马克杯</div>
                    <div class="SellingPoint">DIY跟着创意走<br/>拼出名字或图案</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">78.00</span><span class="originalPrice">￥98.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1121812.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img02.miyabaobei.com/d1/p2/2015/11/20/e3/ac/e3ace1cb91336b3cf9b5148cad17c44e.jpg" class="clicklazyload" alt="Dior魅惑润唇膏" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t3">top3</div>
                    <div class="title">Dior魅惑润唇膏</div>
                    <div class="SellingPoint">感应嘴唇含水量<br/>渐变效果改善唇色</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">198.00</span><span class="originalPrice">￥232.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1121780.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img03.miyabaobei.com/d1/p2/2015/11/20/5b/bc/5bbc35ce1d0046d7453b3c44d0a5a07f.jpg" class="clicklazyload" alt="IPSA流金岁月化妆水" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t4">top4</div>
                    <div class="title">IPSA流金岁月化妆水</div>
                    <div class="SellingPoint">强化角质保湿补水<br/>水油平衡控油抗痘</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">275.00</span><span class="originalPrice">￥350.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1099946.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img04.miyabaobei.com/d1/p2/2015/11/20/79/38/79380492e505cc3a5f74153abb7ed7d7.jpg" class="clicklazyload" alt="WubbaNub安抚奶嘴" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t5">top5</div>
                    <div class="title">WubbaNub安抚奶嘴</div>
                    <div class="SellingPoint">触感柔软有安全感<br/>防止奶嘴丢失</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">89.00</span><span class="originalPrice">￥159.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1108393.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img01.miyabaobei.com/d1/p2/2015/11/20/bc/bb/bcbbe7c5793453bdcc8322e4830d7ae3.jpg" class="clicklazyload" alt="健美生葡萄籽浓缩" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t6">top6</div>
                    <div class="title">健美生葡萄籽浓缩</div>
                    <div class="SellingPoint">抵抗自由基<br/>抗老化防辐射</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">95.00</span><span class="originalPrice">￥115.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>

        </div>
        <div class="parent HBSBlock clearfix"  >
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1047943.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img02.miyabaobei.com/d1/p2/2015/11/20/1b/60/1b60f297a92076aa7334930a70d64c69.jpg" class="clicklazyload" alt="贺寿利牛奶饼干" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t1">top1</div>
                    <div class="title">贺寿利牛奶饼干</div>
                    <div class="SellingPoint">淡淡奶香味道<br/>日常钙质补充</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">62.00</span><span class="originalPrice">￥98.00</span></div>
                    <div class="Sales">
                        3576人已购买
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow"> <a target="_blank" href="http://www.miyabaobei.com/item-1075779.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img03.miyabaobei.com/d1/p2/2015/11/20/ec/12/ec12230abf72228d89ddd748e3d9fc3e.jpg" class="clicklazyload" alt="Hellokitty零食盒" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t2">top2</div>
                    <div class="title">Hellokitty零食盒</div>
                    <div class="SellingPoint">原装进口外观时尚<br/>密封盖携带方便</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">58.00</span><span class="originalPrice">￥75.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1047946.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img04.miyabaobei.com/d1/p2/2015/11/20/b2/4c/b24c68d7e171bda8fcf83d016947db01.jpg" class="clicklazyload" alt="TOM成人无氟牙膏" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t3">top3</div>
                    <div class="title">TOM成人无氟牙膏</div>
                    <div class="SellingPoint">去除牙斑牙垢<br/>不伤害牙釉质</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">89.00</span><span class="originalPrice">￥100.00</span></div>
                    <div class="Sales">
                        481人已购买
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1064662.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img01.miyabaobei.com/d1/p2/2015/11/20/a1/58/a15828f7361dc22aca551c361e07166a.jpg" class="clicklazyload" alt="Nuby便携吸盘碗" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t4">top4</div>
                    <div class="title">Nuby便携吸盘碗</div>
                    <div class="SellingPoint">材质安全自带勺子<br/>底部吸盘稳稳吸住</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">35.00</span><span class="originalPrice">￥48.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1108177.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img02.miyabaobei.com/d1/p2/2015/11/20/e6/7b/e67b04994d97079bfdc1a911ca667bb1.jpg" class="clicklazyload" alt="菲拉思德椰子水" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t5">top5</div>
                    <div class="title">菲拉思德椰子水</div>
                    <div class="SellingPoint">排毒瘦身<br/>促进新陈代谢</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">229.00</span><span class="originalPrice">￥398.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>
            <div class="HBShadow bottomnone rightnone"> <a target="_blank" href="http://www.miyabaobei.com/item-1073589.html">
                <div class="l"><img src="http://file04.miyabaobei.com/resources/images/loading_166X194.gif?v=1" data-src="http://img03.miyabaobei.com/d1/p2/2015/11/20/d0/a9/d0a9342f27962b7c04d28924ce5a46f0.jpg" class="clicklazyload" alt="Nikken大折刀" width="166" height="194"/></div>
                <div class="l">
                    <div class="top t6">top6</div>
                    <div class="title">Nikken大折刀</div>
                    <div class="SellingPoint">决不会刮伤眉毛<br/>刀片快不留黑茬</div>
                    <div class="price1"><span class="p1">￥</span><span class="p2">29.00</span><span class="originalPrice">￥45.00</span></div>
                    <div class="Sales">
                        新品上线
                    </div>
                </div>
            </a> </div>

        </div>
    </div>
</div>
<!--全球必Buy-结束-->

    <div class="NContent w1000 clearfix">
    <div class="l left clearfix">
        <div class="Aresale">
            <div class="r">纸尿裤及拉拉裤满 <span class="pink">2包</span> 包邮，奶粉包邮，其他品类全场满<span class="pink">88</span>包邮哦~</div>
            <div class="l yahei">正在特卖</div>
        </div>
        <div class="HBSBlock">
            <div class="ntblock" id="outlets_box_22039">
                <div class="img"><a target="_blank" href="/list-22039.html">
                    <img src="http://img04.miyabaobei.com/d1/p1/2015/10/08/d4/12/d412ef78fc3d72697c2fc9abb05bb1d4.jpg" data-src="" alt="百亿欧涂鸦粉笔特卖" width="670" height="292" class="lazyload"/></a>
                    <div class="SoldOut dn">抢光了</div></div>
                <div class="text">
                    <div class="djs"><span id="counter_22039" style="display:none;"> </span></div>
                    <span class="price"><span class="pink">6.5</span>折起</span><a target="_blank" href="/list-22039.html">百亿欧涂鸦粉笔特卖</a>
                </div>
            </div>
        </div>
    </div>

    <div class="l right">

        <div class="NHotA block">
            <div class="title yahei">蜜芽免税店</div>
            <div class="content"> <a target="_blank" href="http://www.miyabaobei.hk/dutyfree.html" title="蜜芽免税店"><img src="http://img01.miyabaobei.com/d1/p1/2015/10/12/b2/2f/b22f47f7e37786af84fcf8fb7c0310f8.jpg" alt="蜜芽免税店" width="290" height="220"/></a> </div>
        </div>
        <div class="moduleFixed idmod">
            <div class="moFixed">
                <ul>
                    <li  class="current pink" >
                        <div class="data">明天</div>
                        <div class="time">11/24</div>
                    </li>
                    <li  >
                        <div class="data">后天</div>
                        <div class="time">11/25</div>
                    </li>
                    <li   class="brn">
                        <div class="data">周四</div>
                        <div class="time">11/26</div>
                    </li>
                </ul>
                <div class="brandCon dn clearfix" style="display: block;">
                    <p class="spline"><b>品牌特卖</b></p>
                    <div class="bc rel">
                        <div class="rcn"> <a style="cursor:pointer;" target="_blank" href="/list-21719.html"> <img width="80" height="29" alt="全棉时代婴幼儿用品特卖" src="http://file04.miyabaobei.com/resources/images/loading_492X160.gif?v=1" data-src="http://img02.miyabaobei.com/d1/p2/2015/11/17/bb/fb/bbfb8614afa2745e136a97b811758b77.png" class="lazyload"> </a> </div>
                        <div class="yd pos dn"> <a style="cursor:pointer;" target="_blank" href="/list-21719.html"> <img width="310" height="135" src="http://file04.miyabaobei.com/resources/images/loading_492X160.gif?v=1" data-src="http://img03.miyabaobei.com/d1/p2/2015/11/17/07/f9/07f9e7919535b98f0e49d11b36a5ce8c.jpg" data-pinit="registered" class="mouselazyload">
                            <p class="p1">全棉时代婴幼儿用品特卖</p>
                            <div class="zk">58元起</div>
                        </a> </div>
                    </div>
                    <div class="SelectedTopics">
                        <p class="spline"><b>精选专题</b></p>
                        <a href="/list-22124.html" target="_blank" title="感恩节特辑"><img src="http://img04.miyabaobei.com/d1/p2/2015/11/23/d7/82/d7827a59a51e9e43c81d733d5b0a9e71.jpg" alt="感恩节特辑" width="288" class="lazyload"/></a>
                        <a href="/list-21959.html" target="_blank" title="柔顺剂专场"><img src="http://img01.miyabaobei.com/d1/p2/2015/11/19/8f/55/8f55b09bd6f4b2664ed3e05d3473c95c.jpg" alt="柔顺剂专场" width="288" class="lazyload"/></a>
                        <a href="/list-21930.html" target="_blank" title="鱼肠海苔专场"><img src="http://img02.miyabaobei.com/d1/p2/2015/11/19/11/30/1130681e95591eeb2d4fc52b145889e8.jpg" alt="鱼肠海苔专场" width="288" class="lazyload"/></a>
                        <a href="/list-21892.html" target="_blank" title="韩国妈妈育儿经"><img src="http://img03.miyabaobei.com/d1/p1/2015/05/29/1c/aa/1caa439cf05f989daaae459cd1e8916b.jpg" alt="韩国妈妈育儿经" width="288" class="lazyload"/></a>
                        <a href="/list-20588.html" target="_blank" title="外出美包专场"><img src="http://img04.miyabaobei.com/d1/p2/2015/11/18/80/e1/80e19aa54bbac988267ea2d84a292d15.jpg" alt="外出美包专场" width="288" class="lazyload"/></a>
                    </div>

                </div>
            </div>

        </div>



        <div class="NHotA block NRecommend clearfix">
            <div class="title yahei">大家都在买</div>
            <div class="content noneline">
                <a target="_blank" href="/koubei-138788.html" title="首先得承认B家的这款围兜是妈妈们海淘的一款热门单品，我在孩子三个月左右就一直关注这款围兜，之所以迟迟没有入手…" class="NRblock"> <img src="http://img04.miyabaobei.com/item/10/1093/1093254_normal_2.jpg" class="lazyload" alt="首先得承认B家的这款围兜是妈妈们海淘的一款热门单品，我在孩子三个月左右就一直关注这款围兜，之所以迟迟没有入手…" width="72" height="72"/> <span class="pink ver">ddilx：</span>首先得承认B家的这款围兜是妈妈们海淘的一款热门单品，我在孩子三个月左右就一直关注这款围兜，之所以迟迟没有入手… </a>
                <a target="_blank" href="/koubei-138542.html" title="第一次没有买到，第二次一气抢了四个颜色，因为觉得每个颜色都好看，除了粉色不太适合男孩戴，这个围嘴真是太好用…" class="NRblock"> <img src="http://img01.miyabaobei.com/item/10/1093/1093255_normal_2.jpg" class="lazyload" alt="第一次没有买到，第二次一气抢了四个颜色，因为觉得每个颜色都好看，除了粉色不太适合男孩戴，这个围嘴真是太好用…" width="72" height="72"/> <span class="pink ver">Bonnie：</span>第一次没有买到，第二次一气抢了四个颜色，因为觉得每个颜色都好看，除了粉色不太适合男孩戴，这个围嘴真是太好用… </a>
                <a target="_blank" href="/koubei-138453.html" title="大爱啊~之前买了粉色的~特别喜欢自己留下了~这次给儿子备一套~太好看了这颜色~质量也和您…" class="NRblock"> <img src="http://img02.miyabaobei.com/item/10/1099/1099402_normal_2.jpg" class="lazyload" alt="大爱啊~之前买了粉色的~特别喜欢自己留下了~这次给儿子备一套~太好看了这颜色~质量也和您…" width="72" height="72"/> <span class="pink ver">miya135****1908：</span>大爱啊~之前买了粉色的~特别喜欢自己留下了~这次给儿子备一套~太好看了这颜色~质量也和您… </a>
                <a target="_blank" href="/koubei-138322.html" title="不锈钢的材质，不会因为温度高而产生什么有害的物质，宝宝的东西，最重要的就是放心，一套四样东西，都有自己…" class="NRblock"> <img src="http://img03.miyabaobei.com/item/10/1099/1099401_normal_2.jpg" class="lazyload" alt="不锈钢的材质，不会因为温度高而产生什么有害的物质，宝宝的东西，最重要的就是放心，一套四样东西，都有自己…" width="72" height="72"/> <span class="pink ver">小妖晶Jutta：</span>不锈钢的材质，不会因为温度高而产生什么有害的物质，宝宝的东西，最重要的就是放心，一套四样东西，都有自己… </a>
                <a target="_blank" href="/koubei-138111.html" title="颜色很靓丽，橙色的超炫哦！质量很好！不锈钢的材质，不会因为温度高而产生有毒有害物质，不锈钢的部分可以拆下来，放到…" class="NRblock"> <img src="http://img04.miyabaobei.com/item/10/1099/1099404_normal_2.jpg" class="lazyload" alt="颜色很靓丽，橙色的超炫哦！质量很好！不锈钢的材质，不会因为温度高而产生有毒有害物质，不锈钢的部分可以拆下来，放到…" width="72" height="72"/> <span class="pink ver">小粽子：</span>颜色很靓丽，橙色的超炫哦！质量很好！不锈钢的材质，不会因为温度高而产生有毒有害物质，不锈钢的部分可以拆下来，放到… </a>
            </div>
        </div>
    </div>
</div>
<!--正在特买-结束-->


    <div class="LastBuy w1000 clearfix">
    <div class="title yahei">
        <div class="l left">最后机会</div>
        <div class="l"></div>
    </div>
    <div class="clearfix LBCon HBSBlock">
        <div class="block" id="outlets_box_19906"> <a target="_blank" href="/list-19906.html">
            <div class="indexPubTop"><img src="http://img01.miyabaobei.com/d1/p2/2015/10/15/16/fe/16fe95545dc3130943b6c0573b1f67f9.jpg" alt="孕妇装专场" width="323" height="141" class="lazyload"/><div class="SoldOut dn">抢光了</div></div>
            <div class="text">
                <div class="r"><span class="price"><span class="pink">39</span>元起</span></div>
                <div class="l" style="background:none;"><span>孕妇装专场</span>
                    <br/>
                    <span class="djs" style="background:none;padding:0;">剩余时间：<span id="counter_19906" style="display:none;"> </span></span></div>
            </div>
        </a> </div>
        <div class="block" id="outlets_box_20512"> <a target="_blank" href="/list-20512.html">
            <div class="indexPubTop"><img src="http://img02.miyabaobei.com/d1/p2/2015/11/10/f6/f3/f6f3200baf061843d547395fe9050bfa.jpg" alt="美国潮牌宝宝用品专场" width="323" height="141" class="lazyload"/><div class="SoldOut dn">抢光了</div></div>
            <div class="text">
                <div class="r"><span class="price"><span class="pink">44</span>元起</span></div>
                <div class="l" style="background:none;"><span>美国潮牌宝宝用品专场</span>
                    <br/>
                    <span class="djs" style="background:none;padding:0;">剩余时间：<span id="counter_20512" style="display:none;"> </span></span></div>
            </div>
        </a> </div>
        <div class="block mr0" id="outlets_box_19639"> <a target="_blank" href="/list-19639.html">
            <div class="indexPubTop"><img src="http://img03.miyabaobei.com/d1/p2/2015/11/11/42/a7/42a7ff52e9148d54177763979249d6c8.jpg" alt="冬季补水专场" width="323" height="141" class="lazyload"/><div class="SoldOut dn">抢光了</div></div>
            <div class="text">
                <div class="r"><span class="price"><span class="pink">34</span>元起</span></div>
                <div class="l" style="background:none;"><span>冬季补水专场</span>
                    <br/>
                    <span class="djs" style="background:none;padding:0;">剩余时间：<span id="counter_19639" style="display:none;"> </span></span></div>
            </div>
        </a> </div>
        <div class="block" id="outlets_box_19611"> <a target="_blank" href="/list-19611.html">
            <div class="indexPubTop">
                <img src="http://img04.miyabaobei.com/d1/p2/2015/11/06/5c/77/5c77b5a6941512d7beb9e12059bba1f0.jpg" alt="美国辅食专场" width="323" height="141" class="lazyload"/>
                <div class="SoldOut dn">抢光了</div>
            </div>
            <div class="text">
                <div class="r"><span class="price"><span class="pink">23</span>元起</span>
                </div>
                <div class="l" style="background:none;"><span>美国辅食专场</span>
                    <br/>
                    <span class="djs" style="background:none;padding:0;">剩余时间：<span id="counter_19611" style="display:none;"> </span></span>
                </div>
            </div>
        </a> </div>
    </div>
</div>
<!--最后机会-结束-->



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