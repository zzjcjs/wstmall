<?php
namespace Home\Action;
/**
 * ============================================================================
 * @author: hujun123qwe
 * @url:    http://www.wstmall.local/mia
 * @time:   2015-11-29 18:08:41
 * ============================================================================
 * 蜜牙控制器
 */

class MiaAction extends BaseAction{

    /**
     * 网页入口
     */
    public function mia(){
        //数据库链接
        $goods_db = D('Home/Goods');
        //调用方法，得到想要的数据
        $today_selected = $goods_db->getTodaySelected();
        //在页面标记传递
        $this->assign('todaySelected',$today_selected);
        $this->display();
//        $this->show(var_dump($WST_USER));
    }

    public function userIndex(){
        $this->display('mia/user/mia_user_index');
    }

    public function goodsDetails(){
        $goods = D('Home/Goods');
        $kcode = I("kcode");
        $scrictCode = base64_encode(md5("wstmall".date("Y-m-d")));

        //查询商品详情
        $goodsId = (int)I("goodsId");
        $this->assign('goodsId',$goodsId);
        $obj["goodsId"] = $goodsId;
        $goodsDetails = $goods->getGoodsDetails($obj);
        if($kcode==$scrictCode || ($goodsDetails["isSale"]==1 && $goodsDetails["goodsStatus"]==1)){
            if($kcode==$scrictCode){//来自后台管理员
                $this->assign('comefrom',1);
            }

            $shopServiceStatus = 1;
            if($goodsDetails["shopAtive"]==0){
                $shopServiceStatus = 0;
            }
            $goodsDetails["serviceEndTime"] = str_replace('.5',':30',$goodsDetails["serviceEndTime"]);
            $goodsDetails["serviceEndTime"] = str_replace('.0',':00',$goodsDetails["serviceEndTime"]);
            $goodsDetails["serviceStartTime"] = str_replace('.5',':30',$goodsDetails["serviceStartTime"]);
            $goodsDetails["serviceStartTime"] = str_replace('.0',':00',$goodsDetails["serviceStartTime"]);
            $goodsDetails["shopServiceStatus"] = $shopServiceStatus;
            $goodsDetails['goodsDesc'] = htmlspecialchars_decode($goodsDetails['goodsDesc']);

            $areas = D('Home/Areas');
            $shopId = intval($goodsDetails["shopId"]);
            $obj["shopId"] = $shopId;
            $obj["areaId2"] = $this->getDefaultCity();
            $obj["attrCatId"] = $goodsDetails['attrCatId'];
            $shops = D('Home/Shops');
            $shopScores = $shops->getShopScores($obj);
            $this->assign("shopScores",$shopScores);

            $shopCity = $areas->getDistrictsByShop($obj);
            $this->assign("shopCity",$shopCity[0]);

            $shopCommunitys = $areas->getShopCommunitys($obj);
            $this->assign("shopCommunitys",json_encode($shopCommunitys));

            $this->assign("goodsImgs",$goods->getGoodsImgs());
            $this->assign("hotgoods",$goods->getHotGoods($goodsDetails['shopId']));
            $this->assign("relatedGoods",$goods->getRelatedGoods($goodsId));
            $this->assign("goodsNav",$goods->getGoodsNav());
            $this->assign("goodsAttrs",$goods->getAttrs($obj));
            $this->assign("goodsDetails",$goodsDetails);

            $viewGoods = cookie("viewGoods");
            if(!in_array($goodsId,$viewGoods)){
                $viewGoods[] = $goodsId;
            }
            if(!empty($viewGoods)){
                cookie("viewGoods",$viewGoods,25920000);
            }
            //获取关注信息
            $m = D('Home/Favorites');
            $this->assign("favoriteGoodsId",$m->checkFavorite($goodsId,0));
            $m = D('Home/Favorites');
            $this->assign("favoriteShopId",$m->checkFavorite($shopId,1));
            //客户端二维码
            $this->assign("qrcode",base64_encode("{type:'goods',content:'".$goodsId."',key:'wstmall'}"));
            $this->display('mia/mia_goods_details');
        }else{
            $this->display('default/goods_notexist');
        }
    }

    public function getCartInfo(){
        $this->display('mia/mia_get_cart_info');
    }
    public function checkOrderInfo(){
        $this->display('mia/mia_check_order_info');
    }
    public function submitOrder(){
        $orderIds = 1;
        if($orderIds){
            $this->redirect("Mia/toPay",array("orderIds"=>implode(",",$orderIds))); //直接跳转，不带计时后跳转
        }else{
            $this->display('mia/mia_check_order_info');
        }
    }
    public function toPay(){
        $this->display('mia/mia_order_pay');
    }
    public function getAlipayURL(){

    }
    public function getWeixinURL(){

    }
    /** 支付成功后跳转到待发货页面*/
    public function queryDelivery(){
        $this->display('mia/mia_order_delivery');
    }
    public function orderList(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function returnLists(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myBrand(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myCollect(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myInvite(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myKoubei(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myJifen(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myCoupon(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myRedBag(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myShareRedBag(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myProfile(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myBalance(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myPassword(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myIdStatus(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myAddress(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }
    public function myMassage(){
        $this->show("<h1 style='text-align: center;margin-top: 300px;'>网站正在建设</h1>");
    }

}