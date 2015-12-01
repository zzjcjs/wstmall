<?php
namespace Admin\Model;
/**
 * ============================================================================
 * @author  hujun123qwe@163.com
 * @time    2015-12-01 20:40:00
 * ============================================================================
 * 商品专场数据库操作
 */
class GoodsCollectionModel extends BaseModel {
    /**
     * 新增
     */
    public function insert(){
        $rd = array('status'=>-1);
        $id = (int)I("id",0);
        $idsStr = I("catIds");
        $ids = array();
        if($idsStr!=''){
            $idsStr = explode(',',$idsStr);
            foreach ($idsStr as $key =>$v){
                if((int)$v>0)$ids[] = (int)$v;
            }
        }
        $data = array();
        $data["brandName"] = I("brandName");
        $data["brandIco"] = I("brandIco");
        $data["brandDesc"] = I("brandDesc");
        $data["createTime"] = date('Y-m-d H:i:s');
        $data["brandFlag"] = 1;
        if($this->checkEmpty($data) && count($ids)>0){
            $m = M('brands');
            $rs = $m->add($data);
            if(false !== $rs){
                $m = M('goods_cat_brands');
                foreach ($ids as $key =>$v){
                    $d = array();
                    $d['catId'] = $v;
                    $d['brandId'] = $rs;
                    $m->add($d);
                }
                $rd['status']= 1;
            }
        }
        return $rd;
    }
    /**
     * 修改
     */
    public function edit(){
        $rd = array('status'=>-1);
        $id = (int)I("id",0);
        $idsStr = I("catIds");
        $ids = array();
        if($idsStr!=''){
            $idsStr = explode(',',$idsStr);
            foreach ($idsStr as $key =>$v){
                if((int)$v>0)$ids[] = (int)$v;
            }
        }
        $filter = array();
        //获取品牌的关联分类
        $sql = "select catId from __PREFIX__goods_cat_brands where brandId=".$id;
        $catBrands = $this->query($sql);
        foreach ($catBrands as $key =>$v){
            if(!in_array($v['catId'],$ids))$filter[] = $v['catId'];
        }
        //查询指定的分类下是否有品牌被引用了
        if(count($filter)>0){
            $sql = "select count(*) counts from __PREFIX__goods where brandId =".$id." and goodsCatId1 in(".implode(',',$filter).") and goodsFlag=1 ";
            $grs = $this->queryRow($sql);
            if($grs['counts']>0){
                $rd['status'] = -2;
                return $rd;
            }
        }
        $m = M('brands');
        $m->brandName = I("brandName");
        $m->brandIco = I("brandIco");
        $m->brandDesc = I("brandDesc");
        if($this->checkEmpty($data) && count($ids)>0){
            $rs = $m->where("brandId=".$id)->save();
            if(false !== $rs){
                $cm = M('goods_cat_brands');
                $cm->where('brandId='.$id)->delete();
                foreach ($ids as $key =>$v){
                    $d = array();
                    $d['catId'] = $v;
                    $d['brandId'] = $id;
                    $cm->add($d);
                }
                $rd['status']= 1;
            }
        }
        return $rd;
    }
    /**
     * 获取指定对象
     */
    public function get(){
        $m = M('goods_collection');
        $rs = $m->where("cid=".(int)I('id'))->find();
        return $rs;
    }
    /**
     * 分页列表
     */
    public function queryByPage(){
        $m = M('goods_collection');
        $brandName = I("brandName");
        $catId = (int)I("catId");
        $sql = "select b.* from __PREFIX__goods_collection b";
        $sql .= " order by b.cid desc";
        return $m->pageQuery($sql);
    }

    /**
     * 获取列表
     */
    public function queryByList(){
        $m = M('brands');
        return $m->where('brandFlag=1')->select();
    }

    /**
     * 删除
     */
    public function del(){
        $rd = array('status'=>-1);
        if(I('id',0)==0)return $rd;
        $m = M('brands');
        $m->brandFlag = -1;
        $rs = $m->where("brandId=".(int)I('id',0))->save();
        if(false !== $rs){
            $rd['status']= 1;
        }
        return $rd;
    }
};
?>