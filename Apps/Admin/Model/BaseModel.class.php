<?php
 namespace Admin\Model;
/**
 * ============================================================================
 * WSTMall开源商城
 * 官网地址:http://www.wstmall.com 
 * 联系QQ:707563272
 * ============================================================================
 * 基础服务类
 */
use Think\Model;
class BaseModel extends Model {
    /**
     * 用来处理内容中为空的判断
     */
	public function checkEmpty($data,$isDie = false){
	    foreach ($data as $key=>$v){
			if(trim($v)==''){
				if($isDie)die("{'status':-1,'key':'$key'}");
				return false;
			}
		}
		return true;
	}
	
	/**
	 * 输入sql调试信息
	 */
	public function logSql($m){
		echo $m->getLastSql();
	}
    /**
	 * 获取一行记录
	 */
	public function queryRow($sql){
		$plist = $this->query($sql);
		return empty($plist)?array():$plist[0];
	}
    /**
     * 单个上传图片
     */
    public function uploadPic(){
        $config = array(
            'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
            'exts'          =>  array('jpg','png','gif','jpeg'), //允许上传的文件后缀
            'rootPath'      =>  './Upload/', //保存根路径
            'driver'        =>  'LOCAL', // 文件上传驱动
            'subName'       =>  array('date', 'Y-m'),
            'savePath'      =>  I('dir','uploads')."/"
        );
        $folder = I("folder");
        $upload = new \Think\Upload($config);
        $rs = $upload->upload($_FILES);
        $Filedata = key($_FILES);
        if(!$rs){
            $this->error($upload->getError());
        }else{
            $images = new \Think\Image();
            $images->open('./Upload/'.$rs[$Filedata]['savepath'].$rs[$Filedata]['savename']);
            $newsavename = str_replace('.','_thumb.',$rs[$Filedata]['savename']);
            $vv = $images->thumb(I('width',300), I('height',300))->save('./Upload/'.$rs[$Filedata]['savepath'].$newsavename);
            if(C('WST_M_IMG_SUFFIX')!=''){
                $msuffix = C('WST_M_IMG_SUFFIX');
                $mnewsavename = str_replace('.',$msuffix.'.',$rs[$Filedata]['savename']);
                $mnewsavename_thmb = str_replace('.',"_thumb".$msuffix.'.',$rs[$Filedata]['savename']);
                $images->open('./Upload/'.$rs[$Filedata]['savepath'].$rs[$Filedata]['savename']);
                $images->thumb(I('width',700), I('height',700))->save('./Upload/'.$rs[$Filedata]['savepath'].$mnewsavename);
                $images->thumb(I('width',250), I('height',250))->save('./Upload/'.$rs[$Filedata]['savepath'].$mnewsavename_thmb);
            }
            $rs[$Filedata]['savepath'] = "Upload/".$rs[$Filedata]['savepath'];
            $rs[$Filedata]['savethumbname'] = $newsavename;
            $rs['status'] = 1;
            if($folder=="Filedata"){
                $sfilename = I("sfilename");
                $fname = I("fname");
                $srcpath = $rs[$Filedata]['savepath'].$rs[$Filedata]['savename'];
                $thumbpath = $rs[$Filedata]['savepath'].$rs[$Filedata]['savethumbname'];
                echo "<script>parent.getUploadFilename('$sfilename','$srcpath','$thumbpath','$fname');</script>";
            }else{
                echo json_encode($rs);
            }

        }
    }

};
?>