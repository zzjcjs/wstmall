<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
         <title>买家中心 - <?php echo ($CONF['mallTitle']); ?></title>
         <meta name="keywords" content="<?php echo ($CONF['mallKeywords']); ?>" />
      	 <meta name="description" content="<?php echo ($CONF['mallDesc']); ?>,买家中心" />
         <meta http-equiv="Expires" content="0">
		 <meta http-equiv="Pragma" content="no-cache">
		 <meta http-equiv="Cache-control" content="no-cache">
		 <meta http-equiv="Cache" content="no-cache">
         <link rel="stylesheet" href="/Apps/Home/View/default/css/common.css" />
         <link rel="stylesheet" href="/Apps/Home/View/default/css/user.css">
    </head>
	<?php echo WSTLoginTarget(0);?>
    <body>
        <div class="wst-wrap">
          <div class='wst-header'>
          <script src="/Public/js/jquery.min.js"></script>
<script src="/Public/plugins/lazyload/jquery.lazyload.min.js?v=1.9.1"></script>
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
    var wstMallName = "<?php echo ($CONF['mallName']); ?>";
    $(function() {
    	$('.lazyImg').lazyload({ effect: "fadeIn",failurelimit : 10,threshold: 200,placeholder:currDefaultImg});
    });
</script>
<script src="/Public/js/think.js"></script>
<div id="wst-shortcut">
	<div class="w">
		<ul class="fl lh">
			<li class="fore1 ld"><b></b><a href="javascript:addToFavorite()"
				rel="nofollow">收藏<?php echo ($CONF['mallName']); ?></a></li><s></s>
			<li class="fore3 ld menu" id="app-jd" data-widget="dropdown">
				<span class="outline"></span> <span class="blank"></span> 
				<a href="#" target="_blank"><img src="/Apps/Home/View/default/images/icon_top_02.png"/>&nbsp;<?php echo ($CONF['mallName']); ?> 手机版</a>
			</li>
			<li class="fore4" id="biz-service" data-widget="dropdown" style='padding:0;'>&nbsp;<s></s>&nbsp;&nbsp;&nbsp;
				所在城市
				【<span class='wst-city'>&nbsp;<?php echo ($currArea["areaName"]); ?>&nbsp;</span>】
				<img src="/Apps/Home/View/default/images/icon_top_03.png"/>	
				&nbsp;&nbsp;<a href="javascript:;" onclick="toChangeCity();">切换城市</a><i class="triangle"></i>
			</li>
		</ul>
	
		<ul class="fr lh" style='float:right;'>
			<li class="fore1" id="loginbar"><a href="<?php echo U('Home/Orders/queryByPage');?>"><span style='color:blue'><?php echo ($WST_USER['loginName']); ?></span></a> 欢迎您来到 <a href='<?php echo WSTDomain();?>'><?php echo ($CONF['mallName']); ?></a>！<s></s>&nbsp;
			<span>
				<?php if(!$WST_USER['userId']): ?><a href="<?php echo U('Home/Users/login');?>">[登录]</a>
				<a href="<?php echo U('Home/Users/regist');?>"	class="link-regist">[免费注册]</a><?php endif; ?>
				<?php if($WST_USER['userId'] > 0): ?><a href="javascript:logout();">[退出]</a><?php endif; ?>
			</span>
			</li>
			<li class="fore2 ld"><s></s>
			<?php if(session('WST_USER.userId')>0){ ?>
				<?php if(session('WST_USER.userType')==0){ ?>
				    <a href="<?php echo U('Home/Shops/toOpenShopByUser');?>" rel="nofollow">我要开店</a>
				<?php }else{ ?>
				    <?php if(session('WST_USER.loginTarget')==0){ ?>
				        <a href="<?php echo U('Home/Shops/index');?>" rel="nofollow">卖家中心</a>
				    <?php }else{ ?>
				        <a href="<?php echo U('Home/Users/index');?>" rel="nofollow">买家中心</a>
				    <?php } ?>
				<?php } ?>
			<?php }else{ ?>
			    <a href="<?php echo U('Home/Shops/toOpenShop');?>" rel="nofollow">我要开店</a>
			<?php } ?>
			</li>
		</ul>
		<span class="clr"></span>
	</div>
</div>

          <div class='wst-user-top'>
			<div class="wst-user-top-main">
					<div class='wst-user-top-logo'>
						<a href="<?php echo WSTDomain();?>"  title='商城首页'>
						<img src="<?php echo WSTDomain();?>/<?php echo ($CONF['mallLogo']); ?>" height="132" width='240'/>	
						</a>
					</div>
					<div class='wst-user-top-search'>
						<div class="search-box">
							<input id="wst-search-type" type="hidden" value="1"/>
							<input id="keyword" class="wst-search-ipt" me="q" tabindex="9" placeholder="搜索 商品" autocomplete="off" >
							<div id="btnsch" class="wst-search-btn">搜&nbsp;索</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="wst-shop-nav">
				<div class="wst-nav-box">
					<li class="liselect"><a href="<?php echo U('Home/Orders/queryByPage');?>">买家首页</a></li>
					<div class="wst-clear"></div>
				</div>
			</div>
          </div>
          <div class='wst-nav'></div>
          <div class='wst-main'>
            <div class='wst-menu'>
            <span class='wst-menu-title' style='border-top:0px;'><span></span>交易信息</span>
            
               <a href="<?php echo U('Home/Orders/queryPayByPage/');?>"><li id="li_queryPayByPage" <?php if($umark == "queryPayByPage"): ?>class='selected'<?php endif; ?>>待付款订单<span style="display:none;" class="wst-msg-tips-box"></span></li></a>
               <a href="<?php echo U('Home/Orders/queryDeliveryByPage/');?>"><li id="li_queryDeliveryByPage" <?php if($umark == "queryDeliveryByPage"): ?>class='selected'<?php endif; ?>>待发货订单<span style="display:none;" class="wst-msg-tips-box"></span></li></a>
               <a href="<?php echo U('Home/Orders/queryReceiveByPage/');?>"><li id="li_queryReceiveByPage" <?php if($umark == "queryReceiveByPage"): ?>class='selected'<?php endif; ?>>待确认收货<span style="display:none;" class="wst-msg-tips-box"></span></li></a>
               <a href="<?php echo U('Home/Orders/queryAppraiseByPage/');?>"><li id="li_queryAppraiseByPage" <?php if($umark == "queryAppraiseByPage"): ?>class='selected'<?php endif; ?>>待评价交易<span style="display:none;" class="wst-msg-tips-box"></span></li></a>
               <a href="<?php echo U('Home/Orders/queryCancelOrders/');?>"><li id="li_queryCancelOrders" <?php if($umark == "queryCancelOrders"): ?>class='selected'<?php endif; ?>>已取消订单</li></a>
               <span class='wst-menu-title'><span></span>交易操作</span>
           
               <a href="<?php echo U('Home/Orders/queryRefundByPage/');?>"><li <?php if($umark == "queryRefundByPage"): ?>class='selected'<?php endif; ?>>拒收/退款</li></a>
               <a href="<?php echo U('Home/UserAddress/queryByPage/');?>"><li <?php if($umark == "addressQueryByPage"): ?>class='selected'<?php endif; ?>>收货地址</li></a>
               <a  href="<?php echo U('Home/GoodsAppraises/getAppraisesList/');?>"><li <?php if($umark == "getAppraisesList"): ?>class='selected'<?php endif; ?>>评价管理</li></a>
               <a  href="<?php echo U('Home/Favorites/queryByPage/');?>"><li <?php if($umark == "queryFavoritesByPage"): ?>class='selected'<?php endif; ?>>我的关注</li></a>
               <a href="<?php echo U('Home/Messages/queryByPage/');?>"><li id='li_queryMessageByPage' <?php if($umark == "queryMessageByPage"): ?>class='liselect'<?php endif; ?>>商城消息<span style="display:none;" class="wst-msg-tips-box"></span></li></a>
               <a href="<?php echo U('Home/Users/toEdit/');?>"><li <?php if($umark == "toEditUser"): ?>class='selected'<?php endif; ?>>个人资料</li></a>
               <a href="<?php echo U('Home/Users/toEditPass/');?>"><li <?php if($umark == "toEditPass"): ?>class='selected'<?php endif; ?>>修改密码</li></a>
             <?php if($WST_USER["userType"] == 0): ?><div class="wst-appsaler">
				<div>您目前不是卖家，您可以</div>
				<div><a href="<?php echo U('Home/Shops/toOpenShopByUser/');?>"><img src="/Apps/Home/View/default/images/btn_setshop.png" height="38" width="134" /></a></div>
			 </div><?php endif; ?>
            </div>
            <div class='wst-content'>
            
	<script>
	var statusMark = 0;
	$(function () {
		$('#tab').TabPanel({tab:statusMark,callback:function(tab){
			statusMark = tab;
			if(statusMark==0){
				queryFavoriteGoods();
			}else{
				queryFavoriteShops();
			}
		}});
	});
	</script>
	<style>
.wst-goods-item {
    border: 2px solid #ffffff;
    float: left;
    height: 272px;
    margin-left: 2px;
    margin-top: 4px;
    text-align: center;
}
.wst-shops-item {
    border: 2px solid #ffffff;
    float: left;
    height: 212px;
    margin-left: 2px;
    margin-top: 4px;
    text-align: center;
}
.wst-goods-page li {
    border: 2px solid #ffffff;
    border-radius: 5px;
    transition: all 0.1s ease 0s;
}
.wst-goods-item .goods-img, .wst-shops-item .goods-img{
    height: 172px;
    line-height: 172px;
    padding: 4px;
    width: 172px;
    max-height: 172px;
    max-width: 172px;
}
.wst-goods-page .wst-goods-item .goods-des, .wst-shops-page .wst-shops-item .goods-des{
    margin-top: 5px;
}

.wst-goods-page .wst-goods-item .goods-title {
    height: 36px;
    overflow: hidden;
    padding-left: 2px;
    text-align: left;
    width: 172px;
}
.wst-goods-page .wst-goods-item .goods-price {
    text-align: left;
}
.wst-goods-page .wst-goods-item .goods-buy {
    text-align: left;
    color: green;
    margin-left: 2px;
}
.wst-goods-item .goods-buy .goods-left{
    float: left;
    font-size: 12px;
    width: 90px;
    margin-left:2px;
    text-align:left;
}
.wst-shops-item .goods-des .goods-left{
    float: left;
    font-size: 12px;
    width: 120px;
    height:20px;
    overflow:hidden;
    margin-left:2px;
    text-align:left;
}
.wst-goods-item .goods-buy .goods-right,.wst-shops-item .goods-des .goods-right {
    float: right;
    margin-right: 2px;
    width: 85px;
}

.wst-goods-page li:hover {
    background-color: #ffffff;
    border: 2px solid #e23e3d;
    transform: scale3d(1.2, 1.2, 1);
}

	</style>
	<div class="wst-body" style="margin-bottom: 8px;"> 
		<div class='wst-page-header'>买家中心 > 我的关注</div>
		<div class='wst-page-content' style="padding-top:10px;">
		   <div id='tab' class="wst-tab-box">
			<ul class="wst-tab-nav">
				<li id="wst-msg-li-0">关注的商品<span style="display:none;" class="wst-order-tips-box"></span></li>
				<li id="wst-msg-li-1">关注的店铺<span style="display:none;"></span></li>
			</ul>
			<div class="wst-tab-content" style='width:98%;padding:0px 5px 5px 5px;'>
			    <!-- 关注的商品 -->
				<div class='wst-tab-item'>
					   <div class='wst-list-tbar'>
						商品名称：<input type="text" id="key_0" style='width:120px;' autocomplete="off"/>
						<button class='wst-btn-query' onclick="queryFavoriteGoods()">查询</button>
					   </div>
					   <div class='wst-list-content'>
						<script id="tblist" type="text/html">
                                    {{# for(var i = 0; i < d.length; i++){ }}
                                    <li class="wst-goods-item">
                                      <div class="goods-img">
										<a href="{{ Think.U('Home/Goods/getGoodsDetails','goodsId='+d[i].goodsId)}}">
											<img class='lazyImg' data-original="/{{d[i].goodsThums}}" width="170" />
										</a>
									  </div>
                                      <div class="goods-des">
										<div class="goods-title"><a href="{{ Think.U('Home/Goods/getGoodsDetails','goodsId='+d[i].goodsId)}}">{{d[i].goodsName}}</a></div>
										<div class="goods-price"><span class="span1" id='shopGoodsPrice_{{d[i].goodsId}}' dataId='{{d[i].goodsAttrId}}'>￥{{d[i].shopPrice}}</span>&nbsp;&nbsp;&nbsp;&nbsp;</div>
										<div class="goods-buy">
                                            {{#if(d[i].isSale==1){ }}
											<div class="goods-left">
                                               <a href='javascript:;' onclick='javascript:cancelGoodsFavorites(this,{{d[i].favoriteId}},0)'>取消关注</a>
											</div>
											<div class="goods-right">
											   <a href="javascript:addCart({{d[i].goodsId}},1,'/{{d[i].goodsThums}}')" class="btnCart">
												<img src="/Apps/Home/View/default/images/btn_addcart.png" width="85"/>
											   </a>
											</div>
                                            {{#}else{}}
                                            <div class="goods-left">
											已下架
											</div>
                                            <div class="goods-right" style='width:58px;'>
                                            <a href='javascript:;' onclick='javascript:cancelGoodsFavorites(this,{{d[i].favoriteId}},0)'>取消关注</a>
                                            </div>
                                            {{#} }}
											<div class="wst-clear"></div>
										</div>
									  </div>
                                    </li>
                                    {{# } }}
                       </script>
					   <ul class='wst-goods-page' style='width:950px;border:1px soild blue;'></ul>
					   <div style='clear:both;'></div>
					</div>
					<div id="wst-page-0" class='wst-page' style="padding-bottom:10px;"></div>		
				</div>
				<!-- 关注的店铺 -->
				<div class='wst-tab-item' style="display:none;">
					<div class='wst-list-tbar'>
						店铺名称：<input type="text" id="key_1" style='width:120px;' autocomplete="off"/>
						<button class='wst-btn-query' onclick="queryFavoriteShops()">查询</button>
					   </div>
					   <div class='wst-list-content'>
						<script id="tblist2" type="text/html">
                             {{# for(var i = 0; i < d.length; i++){ }}
                             <li class="wst-shops-item">
                                <div class="goods-img">
									<a href="{{ Think.U('Home/Shops/toShopHome','shopId='+d[i].shopId)}}">
										<img class='lazyImg' data-original="/{{d[i].shopImg}}" width="170" />
									</a>
								</div>
                                <div class="goods-des">
									<div class="goods-left">
                                        <a href="{{ Think.U('Home/Shops/toShopHome','shopId='+d[i].shopId)}}" title='{{d[i].shopName}}'>{{WST.cutStr(d[i].shopName,15)}}</a>
                                    </div>
                                    <div class="goods-right" style='width:58px;'>
                                    <a href='javascript:;' onclick='javascript:cancelShopFavorites(this,{{d[i].favoriteId}})'>取消关注</a>
                                    </div>
								</div>
                            </li>
                            {{# } }}
                       </script>
					   <ul class='wst-shops-page' style='width:950px;border:1px soild blue;'></ul>
					   <div style='clear:both;'></div>
					</div>
					<div id="wst-page-1" class='wst-page' style="padding-bottom:10px;"></div>
				</div>
				
			</div>
			</div>
		</div>
		<div style='clear:both;'></div>
	</div>

            </div>
          </div>
          <div style='clear:both;'></div>
          <br/>
           <div class='wst-footer'>
          	<div class="wst-footer-fl-box">
	<div class="wst-footer" >
		<div class="wst-footer-cld-box">
			<div class="wst-footer-fl">友情链接：</div>
			<div style="padding-left:30px;">
				<?php if(is_array($friendLikds)): $k = 0; $__LIST__ = $friendLikds;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div style="float:left;"><a href="<?php echo ($vo["friendlinkUrl"]); ?>" target="_blank"><?php echo ($vo["friendlinkName"]); ?></a>&nbsp;&nbsp;</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="wst-clear"></div>
			</div>
		</div>
	</div>
</div>

<div class="wst-footer-hp-box">
	<div class="wst-footer">
		<div class="wst-footer-hp-ck1">
			<?php if(is_array($helps)): $k1 = 0; $__LIST__ = $helps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($k1 % 2 );++$k1;?><div class="wst-footer-wz-ca">
				<div class="wst-footer-wz-pt">
				    <img src="/Apps/Home/View/default/images/a<?php echo ($k1); ?>.jpg" height="18" width="18"/>
					<span class="wst-footer-wz-pn"><?php echo ($vo1["catName"]); ?></span>
					<div style='margin-left:30px;'>
						<?php if(is_array($vo1['articlecats'])): $k2 = 0; $__LIST__ = $vo1['articlecats'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($k2 % 2 );++$k2;?><a href="<?php echo U('Home/Articles/index/',array('articleId'=>$vo2['articleId']));?>"><?php echo ($vo2['articleTitle']); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
			<div class="wst-footer-wz-clt">
				<div style="padding-top:5px;line-height:25px;">
				    <img src="/Apps/Home/View/default/images/a6.jpg" height="18" width="18"/>
					<span class="wst-footer-wz-kf">联系客服</span>
					<div style='margin-left:30px;'>
						<a href="#">联系电话</a><br/>
						<?php if($CONF['phoneNo'] != ''): ?><span class="wst-footer-pno"><?php echo ($CONF['phoneNo']); ?></span><br/><?php endif; ?>
						<?php if($CONF['qqNo'] != ''): ?><a href="tencent://message/?uin=<?php echo ($CONF['qqNo']); ?>&Site=QQ交谈&Menu=yes">
						<img border="0" src="http://wpa.qq.com/pa?p=1:<?php echo ($CONF['qqNo']); ?>:7" alt="QQ交谈" width="71" height="24" />
						</a><br/><?php endif; ?>
						
					</div>
				</div>
			</div>
			<div class="wst-clear"></div>
		</div>
	    
		<div class="wst-footer-hp-ck2">
			<img src="/Apps/Home/View/default/images/alipay.jpg" height="40" width="120"/>支付宝签约商家&nbsp;|&nbsp;
			<span class="wst-footer-frd">正品保障</span><span >100%原产地</span>&nbsp;|&nbsp;
			<span class="wst-footer-frd">7天退货保障</span>购物无忧&nbsp;|&nbsp;
			<span class="wst-footer-frd">免费配送</span>满98包邮&nbsp;|&nbsp;
			<span class="wst-footer-frd">货到付款</span>400城市送货上门
		</div>
	    <div class="wst-footer-hp-ck3">
	        <div class="links"> 
	            <?php $_result=WSTNavigation(1);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a rel="nofollow" <?php if($vo['isOpen'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo ($vo['navUrl']); ?>"><?php echo ($vo['navTitle']); ?></a>&nbsp;<?php if($vo['end'] == 0): ?>|&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	        </div>
	        
	        <div class="copyright">
	         
	         <?php if($CONF['mallFooter']!=''){ echo htmlspecialchars_decode($CONF['mallFooter']); } ?>
	      	<?php if($CONF['visitStatistics']!=''){ echo htmlspecialchars_decode($CONF['visitStatistics'])."<br/>"; } ?>
	        <?php if($CONF['mallLicense'] ==''): ?><div>
				Copyright©2015 Powered By <a target="_blank" href="http://www.wstmall.com">WSTMall</a>
			</div>
			<?php else: ?>
				<div id="wst-mallLicense" data='1' style="display:none;">Copyright©2015 Powered By <a target="_blank" href="http://www.wstmall.com">WSTMall</a></div><?php endif; ?>
	        </div>
	    	
	        	 
	     
	    </div>
	</div>
</div>

          </div>
        </div>
    </body>
    <script src="/Public/plugins/formValidator/formValidator-4.1.3.js"></script>
   	<script src="/Public/js/common.js"></script>
   	<script src="/Apps/Home/View/default/js/usercom.js"></script>
   	<script src="/Apps/Home/View/default/js/head.js"></script>
   	<script src="/Public/plugins/layer/layer.min.js"></script>
  	<script src="/Apps/Home/View/default/js/common.js"></script>
     <script type="text/javascript">
		var publicurl = '/Public/';
		var shopId = '<?php echo ($orderInfo["order"]["shopId"]); ?>';
		checkLogin();
	</script>
</html>