<?php
namespace Admin\Action;
/**
 * Class MiaGoodsAction
 * @package Admin\Action
 * @author  hujun123qwe@163.com
 * @time:   2015-12-01 15:37:31
 */

class MiaGoodsAction extends BaseAction{

    /** 今日精选 **/
    public function todaySelectd(){
        $this->isAjaxLogin();               //检查登陆
        $this->display('/mia/todayselected/list');
    }
}
