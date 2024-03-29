<?php
 namespace Admin\Action;
/**
 * ============================================================================
 * WSTMall开源商城
 * 官网地址:http://www.wstmall.com 
 * 联系QQ:707563272
 * ============================================================================
 * 商品控制器
 */
class GoodsAction extends BaseAction{

   /**
	 * 查看
     */
	public function toView(){
		$this->isLogin();
		$m = D('Admin/Goods');
		if(I('id')>0){
			$object = $m->get();
			$this->assign('object',$object);
		}else{
			die("商品不存在!");
		}
		$this->view->display('/goods/view');
	}
    /**
	 * 查看
	 */
	public function toPenddingView(){
		$this->isLogin();
		$m = D('Admin/Goods');
		if(I('id')>0){
			$object = $m->get();
			$this->assign('object',$object);
			//获取商品分类信息
			$m = D('Admin/GoodsCats');
			$this->assign('goodsCatsList',$m->queryByList());
			//获取商家商品分类
			$m = D('Admin/ShopsCats');
			$this->assign('shopCatsList',$m->queryByList($object['shopId'],0));
		}else{
			die("商品不存在!");
		}
		$this->view->display('/goods/view_pendding');
	}
	/**
	 * 分页查询
	 */
	public function index(){
		$this->isLogin();
		$this->checkPrivelege('splb_00');
		//获取地区信息
		$m = D('Admin/Areas');
		$this->assign('areaList',$m->queryShowByList(0));
		//获取商品分类信息
		$m = D('Admin/GoodsCats');
		$this->assign('goodsCatsList',$m->queryByList());
		$m = D('Admin/Goods');
    	$page = $m->queryByPage();
    	$pager = new \Think\Page($page['total'],$page['pageSize']);// 实例化分页类 传入总记录数和每页显示的记录数
    	$page['pager'] = $pager->show();
    	$this->assign('Page',$page);
    	$this->assign('shopName',I('shopName'));
    	$this->assign('goodsName',I('goodsName'));
    	$this->assign('areaId1',I('areaId1',0));
    	$this->assign('areaId2',I('areaId2',0));
    	$this->assign('goodsCatId1',I('goodsCatId1',0));
    	$this->assign('goodsCatId2',I('goodsCatId2',0));
    	$this->assign('goodsCatId3',I('goodsCatId3',0));
    	$this->assign('isAdminBest',I('isAdminBest',-1));
    	$this->assign('isAdminRecom',I('isAdminRecom',-1));
        $this->display("/goods/list");
	}
    /**
	 * 分页查询
	 */
	public function queryPenddingByPage(){
		$this->isLogin();
		$this->checkPrivelege('spsh_00');
		//获取地区信息
		$m = D('Admin/Areas');
		$this->assign('areaList',$m->queryShowByList(0));
		//获取商品分类信息
		$m = D('Admin/GoodsCats');
		$this->assign('goodsCatsList',$m->queryByList());
		$m = D('Admin/Goods');
    	$page = $m->queryPenddingByPage();
    	$pager = new \Think\Page($page['total'],$page['pageSize']);// 实例化分页类 传入总记录数和每页显示的记录数
    	$pager->setConfig('header','个会员');
    	$page['pager'] = $pager->show();
    	$this->assign('Page',$page);
    	$this->assign('shopName',I('shopName'));
    	$this->assign('goodsName',I('goodsName'));
    	$this->assign('areaId1',I('areaId1',0));
    	$this->assign('areaId2',I('areaId2',0));
    	$this->assign('goodsCatId1',I('goodsCatId1',0));
    	$this->assign('goodsCatId2',I('goodsCatId2',0));
    	$this->assign('goodsCatId3',I('goodsCatId3',0));
        $this->display("/goods/list_pendding");
	}
	/**
	 * 列表查询
	 */
    public function queryByList(){
    	$this->isAjaxLogin();
		$m = D('Admin/Goods');
		$list = $m->queryByList();
		$rs = array();
		$rs['status'] = 1;
		$rs['list'] = $list;
		$this->ajaxReturn($rs);
	}
    /**
	 * 列表查询[获取启用的区域信息]
	 */
    public function queryShowByList(){
    	$this->isAjaxLogin();
		$m = D('Admin/Goods');
		$list = $m->queryShowByList();
		$rs = array();
		$rs['status'] = 1;
		$rs['list'] = $list;
		$this->ajaxReturn($rs);
	}
	/**
	 * 修改待审核商品状态
	 */
	public function changePenddingGoodsStatus(){
		$this->isAjaxLogin();
		$this->checkAjaxPrivelege('spsh_04');
		$m = D('Admin/Goods');
		$rs = $m->changeGoodsStatus();
		$this->ajaxReturn($rs);
	}
    /**
	 * 修改商品状态
	 */
	public function changeGoodsStatus(){
		$this->isAjaxLogin();
		$this->checkAjaxPrivelege('splb_04');
		$m = D('Admin/Goods');
		$rs = $m->changeGoodsStatus();
		$this->ajaxReturn($rs);
	}
    /**
	 * 获取待审核的商品数量
	 */
	public function queryPenddingGoodsNum(){
		$this->isAjaxLogin();
    	$m = D('Admin/Goods');
    	$rs = $m->queryPenddingGoodsNum();
    	$this->ajaxReturn($rs);
	}
    /**
	 * 批量设置精品
	 */
	public function changeBestStatus(){
		$this->isAjaxLogin();
		$this->checkAjaxPrivelege('splb_04');
		$m = D('Admin/Goods');
		$rs = $m->changeBestStatus();
		$this->ajaxReturn($rs);
	}
    /**
	 * 批量设置推荐
	 */
	public function changeRecomStatus(){
		$this->isAjaxLogin();
		$this->checkAjaxPrivelege('splb_04');
		$m = D('Admin/Goods');
		$rs = $m->changeRecomStatus();
		$this->ajaxReturn($rs);
	}

    /**
     * 跳到新增/编辑商品
     */
    public function toEdit(){
        $this->isAjaxLogin();
        //获取商品分类信息
        $m = D('Admin/GoodsCats');
        $this->assign('goodsCatsList',$m->queryByList());
        //获取商品类型
        $m = D('Admin/AttributeCats');
        $this->assign('attributeCatsCatsList',$m->queryByList());
        $m = D('Admin/Goods');
        $object = array();
        if(I('id',0)>0){
            $object = $m->get();
        }else{
            $object = $m->getModel();
        }
        $this->assign('object',$object);
        $this->assign("umark",I('umark'));
        $this->display("/goods/edit");
    }
    /**
     * 新增商品
     */
    public function edit(){
        $this->isAjaxLogin();
        $m = D('Admin/Goods');
        $rs = array();
        if((int)I('id',0)>0){
            $rs = $m->edit();
        }else{
            $rs = $m->insert();
        }
        $this->ajaxReturn($rs);
    }
}
