<?php
 namespace Admin\Model;
/**
 * ============================================================================
 * WSTMall开源商城
 * 官网地址:http://www.wstmall.com 
 * 联系QQ:707563272
 * ============================================================================
 * 职员服务类
 */
class StaffsModel extends BaseModel {
    /**
	  * 新增
	  */
	 public function insert(){
	 	$rd = array('status'=>-1);
	 	$id = I("id",0);
		$data = array();
		$data["loginName"] = I("loginName");
		$data["secretKey"] = rand(1000,9999);
		$data["loginPwd"] = md5(I("loginPwd").$data["secretKey"]);
		$data["staffName"] = I("staffName");
		$data["staffRoleId"] = (int)I("staffRoleId");
		$data["workStatus"] = (int)I("workStatus");
		$data["staffStatus"] = (int)I("staffStatus");
		$data["staffFlag"] = 1;
		$data["createTime"] = date('Y-m-d H:i:s');
	    if($this->checkEmpty($data,true)){
	    	$data["staffNo"] = I("staffNo");
	    	$data["staffPhoto"] = I("staffPhoto");
			$m = M('staffs');
			$rs = $m->add($data);
			if(false !== $rs){
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
	 	$m = M('staffs');
		$data = array();
		$data["loginName"] = I("loginName");
		$data["staffName"] = I("staffName");
		$data["staffRoleId"] = (int)I("staffRoleId");
		$data["workStatus"] = (int)I("workStatus");
		$data["staffStatus"] = (int)I("staffStatus");
	    if($this->checkEmpty($data)){
	    	$data["staffNo"] = I("staffNo");
	    	$data["staffPhoto"] = I("staffPhoto");
			$rs = $m->where("staffId=".I('id'))->save($data);
			if(false !== $rs){
				$rd['status']= 1;
				$staffId = (int)session('WST_STAFF.staffId');
		        if($staffId==$id){
		        	 session('WST_STAFF.loginName',$data["loginName"]);
		        	 session('WST_STAFF.staffName',$data["staffName"]);
		        	 session('WST_STAFF.staffRoleId',$data["staffRoleId"]);
		        	 session('WST_STAFF.workStatus',$data["workStatus"]);
		        	 session('WST_STAFF.staffStatus',$data["staffStatus"]);
		        	 session('WST_STAFF.staffNo',$data["staffNo"]);
		        	 session('WST_STAFF.staffPhoto',$data["staffPhoto"]);
		        }
				
			}
		}
		return $rd;
	 } 
	 /**
	  * 获取指定对象
	  */
     public function get(){
	 	$m = M('staffs');
		return $m->where("staffId=".(int)I('id'))->find();
	 }
	 /**
	  * 分页列表
	  */
     public function queryByPage(){
        $m = M('staffs');
	 	$sql = "select s.*,r.roleName from __PREFIX__staffs s left join  __PREFIX__roles r on s.staffRoleId=r.roleId where staffFlag=1 ";
	 	if(I('loginName')!='')$sql.=" and loginName LIKE '%".I('loginName')."%'";
	 	if(I('staffName')!='')$sql.=" and staffName LIKE '%".I('staffName')."%'";
	 	$sql .=" order by staffId desc ";
		return $m->pageQuery($sql);
	 }
	 /**
	  * 获取列表
	  */
	  public function queryByList(){
	     $m = M('staffs');
	     $sql = "select * from __PREFIX__staffs order by staffId desc";
		 return $m->find($sql);
	  }
	  
	 /**
	  * 删除
	  */
	 public function del(){
	 	$rd = array('status'=>-1);
	 	if(I('id')==session('WST_STAFF.staffId'))return $rd;
	 	$m = M('staffs');
	 	$data = array();
		$data["staffFlag"] = -1;
	 	$rs = $m->where("staffId=".(int)I('id'))->save($data);
	    if(false !== $rs){
			$rd['status']= 1;
		}
		return $rd;
	 }
	 
     /**
	  * 查询登录关键字
	  */
	 public function checkLoginKey(){
	 	$rd = array('status'=>-1);
	 	$key = I('clientid');
	 	if($key!=''  && I($key)=='')return $rd;
	 	$m = M('staffs');
	 	$rs = $m->where(" loginName ='%s'",array(I("loginName")))->count();
	    if($rs==0)$rd['status'] = 1;
	    return $rd;
	 }
	 
	 /**
	  * 登录验证
	  */
	 public function login(){
	 	$rd = array('status'=>-1);
	 	$m = M('staffs');
	 	$staff = $m->where('loginName="'.I('loginName').'" and staffFlag=1 and staffStatus=1')->find();
	 	if($staff['loginPwd']==md5(I('loginPwd').$staff['secretKey'])){
	 		//获取角色权限
	 		$r = M('roles');
	 		$rrs = $r->where('roleFlag =1 and roleId='.$staff['staffRoleId'])->find();
	 		$staff['roleName'] = $rrs['roleName'];
	 		$staff['grant'] = explode(',',$rrs['grant']);
	 		$rd['staff'] = $staff;
	 		$rd['status'] = 1;
	 		$m->lastTime = date('Y-m-d H:i:s');
	 		$m->lastIP = get_client_ip();
	 		$m->where(' staffId='.$staff['staffId'])->save();
	 		//记录登录日志
		 	$data = array();
			$data["staffId"] = $staff['staffId'];
			$data["loginTime"] = date('Y-m-d H:i:s');
			$data["loginIp"] = get_client_ip();
			$m = M('log_staff_logins');
			$m->add($data);
	 	}
	 	return $rd;
	 }
	 /**
	  * 显示否显示/隐藏
	  */
	 public function editStatus(){
	 	$rd = array('status'=>-1);
	 	if(I('id',0)==0)return $rd;
	 	$m = M('staffs');
	 	$m->staffStatus = (I('staffStatus')==1)?1:0;
	 	$rs = $m->where("staffId=".(int)I('id',0))->save();
	    if(false !== $rs){
			$rd['status']= 1;
		}
	 	return $rd;
	 }
	/**
	 * 修改职员密码
	 */
	public function editPass($id = ''){
		$id = ($id == '') ? I('staffId') : $id;
		$rd = array('status'=>-1);
		$data = array();
		$newPass = I('newPass');
		$reNewPass = I('reNewPass');
		if ($newPass == $reNewPass) {
			$data['loginPwd'] = $newPass;
			if ($this->checkEmpty($data,true)) {
				$rs = $this->where('staffId=%d',$id)->find();
				if ($rs['loginPwd']==md5(I("oldPass").$rs['secretKey'])) {
					$data["loginPwd"] = md5($newPass.$rs['secretKey']);
					$rs = $this->where("staffId = %d",$id)->save($data);
					if ($rs !== false) {
						$rd['status']= 1;
					}
				}
			}
		}		
		return $rd;
	}
};
?>