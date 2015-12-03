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
        $this->display();
//        $this->show(var_dump($WST_USER));
    }

    public function userIndex(){
        $this->display('mia/user/mia_user_index');
    }

    public function goodsDetails(){
        $this->display('mia/mia_goods_details');
    }

}