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

    /** 商品专场 **/
    public function goodsCollection(){
        $this->isAjaxLogin();
        self::WSTAssigns();
        $m = D('Admin/GoodsCollection');

        $object = array();
        $object = $m->queryByPage();
        $this->assign('object', $object);
//        $page = $m->queryByPage();
//        foreach ($page['root'] as &$value) {
//            $value['brandDesc'] = html_entity_decode(stripslashes($value['brandDesc']));
//        }
//        $pager = new \Think\Page($page['total'],$page['pageSize']);// 实例化分页类 传入总记录数和每页显示的记录数
//        $page['pager'] = $pager->show();
//        $this->assign('Page',$page);
        $this->display('/mia/goodsCollection/list');
//        $this->show(var_dump($object));
    }

    public function toEditGoodsCollection(){
        $this->isLogin();
        //获取品牌
        $m = D('Admin/GoodsCollection');
        $object = array();
        $cid = (int)I('id');
        if($cid>0) {
            $object = $m->get();
        }
        $this->assign('object',$object);
        $this->display('/mia/goodsCollection/edit');
    }
}
