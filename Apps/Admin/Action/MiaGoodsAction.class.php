<?php
namespace Admin\Action;
/**
 * Class MiaGoodsAction
 * @package Admin\Action
 * @author  hujun123qwe@163.com
 * @time:   2015-12-01 15:37:31
 */

class MiaGoodsAction extends BaseAction{

    /** ���վ�ѡ **/
    public function todaySelectd(){
        $this->isAjaxLogin();               //����½
        $this->display('/mia/todayselected/list');
    }
}
