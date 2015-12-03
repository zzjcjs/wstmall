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
        $this->display('mia/mia_goods_details');
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