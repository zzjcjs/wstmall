<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo ($CONF['mallTitle']); ?>后台管理中心</title>
      <link href="/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/Apps/Admin/View/css/AdminLTE.css" rel="stylesheet" type="text/css" />
      <link href="/Apps/Admin/View/css/upload.css" rel="stylesheet" type="text/css" />
      
      <!--[if lt IE 9]>
      <script src="/Public/js/html5shiv.min.js"></script>
      <script src="/Public/js/respond.min.js"></script>
      <![endif]-->
      <script src="/Public/js/jquery.min.js"></script>
      <script src="/Public/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="/Public/js/common.js"></script>
      <script src="/Public/plugins/plugins/plugins.js"></script>
      <script src="/Public/plugins/formValidator/formValidator-4.1.3.js"></script>
      <script src="/Public/plugins/kindeditor/kindeditor.js"></script>
      <script src="/Public/plugins/kindeditor/lang/zh_CN.js"></script>
      <script type="text/javascript" src="/Apps/Admin/View/js/upload.js"></script>
      
   </head>
   <script>
   var filetypes = ["gif","jpg","png","jpeg"];
   var ThinkPHP = window.Think = {
	        "ROOT"   : ""
	}
   $(function () {
	   $.formValidator.initConfig({
		   theme:'Default',mode:'AutoTip',formID:"myform",debug:true,submitOnce:true,onSuccess:function(){
				   edit();
			       return false;
			}});
	   
	   $("#loginName").formValidator({onShow:"",onFocus:"会员账号应该为5-16字母、数字或下划线",onCorrect:"输入正确"}).inputValidator({min:5,max:16,onError:"会员账号应该为5-16字母、数字或下划线"}).regexValidator({
	       regExp:"username",dataType:"enum",onError:"会员账号格式错误"
		}).ajaxValidator({
			dataType : "json",
			async : true,
			url : "<?php echo U('Admin/Staffs/checkLoginKey');?>",
			success : function(data){
				var json = WST.toJson(data);
	            if( json.status == "1" ) {
	                return true;
				} else {
	                return false;
				}
				return "该账号已被使用";
			},
			buttons: $("#dosubmit"),
			onError : "该账号已存在。",
			onWait : "请稍候..."
		});
	  
	   <?php if($object['staffId'] !=0 ): ?>$("#loginName").defaultPassed();<?php endif; ?>
	   $("#loginPwd").formValidator({
			onShow:"",onFocus:"登录密码长度应该为5-20位之间"
			}).inputValidator({
				min:5,max:50,onError:"登录密码长度应该为5-20位之间"
			});
	   $("#staffName").formValidator({empty:false,onFocus:"请输入职员名称"}).inputValidator({min:1,onError: "请输入职员名称"});
	   $("#staffRoleId").formValidator({onFocus:"请选择角色"}).inputValidator({min:1,onError: "请选择角色"});
   });
   function edit(){
	   var params = {}; 
	   params.loginPwd = $.trim($('#loginPwd').val());
	   params.loginName = $.trim($('#loginName').val());
	   params.staffName = $.trim($('#staffName').val());
	   params.staffRoleId = $.trim($('#staffRoleId').val());
	   params.workStatus = $("input[name='workStatus']:checked").val();
	   params.staffStatus = $("input[name='staffStatus']:checked").val();
	   params.staffNo = $.trim($('#staffNo').val());  
	   params.staffPhoto = $.trim($('#staffPhoto').val());  
	   params.id = $('#id').val();
	   Plugins.waitTips({title:'信息提示',content:'正在提交数据，请稍后...'});
		$.post("<?php echo U('Admin/Staffs/edit');?>",params,function(data,textStatus){
			var json = WST.toJson(data);
			if(json.status=='1'){
				Plugins.setWaitTipsMsg({ content:'操作成功',timeout:1000,callback:function(){
				   location.href='<?php echo U("Admin/Staffs/index");?>';
				}});
			}else{
				Plugins.closeWindow();
				Plugins.Tips({title:'信息提示',icon:'error',content:'操作失败!',timeout:1000});
			}
		});
   }
   </script>
   <body class="wst-page" style="position:relative;">
   		<iframe name="upload" style="display:none"></iframe>
		<form id="uploadform_Filedata" autocomplete="off" style="<?php if($object[staffId] > 0): ?>top:139px;<?php else: ?>top:169px;<?php endif; ?>position:absolute;left:121px;z-index:10;" enctype="multipart/form-data" method="POST" target="upload" action="<?php echo U('Home/Shops/uploadPic');?>" >
			<div style="position:relative;">
			<input id="staffPhoto" name="staffPhoto" class="form-control wst-ipt" type="text" value="<?php echo ($object["staffPhoto"]); ?>" readonly style="margin-right:4px;float:left;margin-left:8px;width:250px;"/>
			<div class="div1">
				<div class="div2">浏览</div>
				<input type="file" class="inputstyle" id="Filedata" name="Filedata" onchange="updfile('Filedata');" >
			</div>
			<div style="clear:both;"></div>
			<div >&nbsp;图片大小:150 x 150 (px)(格式为 gif, jpg, jpeg, png)</div>
			<input type="hidden" name="dir" value="staffs">
			<input type="hidden" name="width" value="150">
			<input type="hidden" name="folder" value="Filedata">
			<input type="hidden" name="sfilename" value="Filedata">
			<input type="hidden" name="fname" value="staffPhoto">
			<input type="hidden" id="s_Filedata" name="s_Filedata" value="">
			
			</div>
		</form>
       <form name="myform" method="post" id="myform" autocomplete="off">
        <input type='hidden' id='id' value='<?php echo ($object["staffId"]); ?>'/>
        <input type='hidden' id='staffPhoto' value='<?php echo ($object["staffPhoto"]); ?>'/>
        <table class="table table-hover table-striped table-bordered wst-form">
           <tr>
             <th width='120' align='right'>账号<font color='red'>*</font>：</th>
             <td><input type='text' id='loginName' name='loginName' class="form-control wst-ipt" value='<?php echo ($object["loginName"]); ?>'></td>
             <td rowspan='6'>
             	<div id="preview_Filedata">
                 <img id='staffPhotoPreview' src='<?php if($object['staffPhoto'] =='' ): ?>/Apps/Admin/View/img/staff.png<?php else: ?>/<?php echo ($object['staffPhoto']); endif; ?>'  height='152'/><br/>
	             </div>
             </td>
           </tr>
           <?php if($object['staffId'] ==0 ): ?><tr>
             <th width='120' align='right'>密码<font color='red'>*</font>：</th>
             <td>
             <input type='password' id='loginPwd' class="form-control wst-ipt" maxLength='20'/>
             <?php if($object['staffId'] !=0 ): ?>(为空则说明不修改密码)<?php endif; ?></td>
           </tr><?php endif; ?>
           <tr>
             <th align='right'>姓名<font color='red'>*</font>：</th>
             <td>
             <input type='text' id='staffName' class="form-control wst-ipt" value='<?php echo ($object["staffName"]); ?>' maxLength='20'/>
             </td>
           </tr>
           <tr>
             <th align='right'>角色<font color='red'>*</font>：</th>
             <td>
             <select id='staffRoleId' name='staffRoleId'>
                 <option value=''>请选择</option>
                 <?php if(is_array($roleList)): $i = 0; $__LIST__ = $roleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rvo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($rvo['roleId']); ?>' <?php if($object['staffRoleId'] == $rvo['roleId'] ): ?>selected<?php endif; ?>><?php echo ($rvo['roleName']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
             </select>
             </td>
           </tr>
           <tr>
             <th align='right'>职员编号：</th>
             <td>
             <input type='text' id='staffNo' class="form-control wst-ipt" value='<?php echo ($object["staffNo"]); ?>' maxLength='20'/>
             </td>
           </tr>
           <tr style="height:60px;">
             <th align='right'>职员头像：</th>
             <td>
             	
             </td>
           </tr>
           <tr>
             <th align='right'>工作状态<font color='red'>*</font>：</th>
             <td>
             <label>
             <input type='radio' id='workStatus1' name='workStatus' value='1' <?php if($object['workStatus'] ==1 ): ?>checked<?php endif; ?> />在职&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='workStatus0' name='workStatus' value='0' <?php if($object['workStatus'] ==0 ): ?>checked<?php endif; ?> />离职
             </label>
             </td>
           </tr>
           <tr>
             <th align='right'>账号状态<font color='red'>*</font>：</th>
             <td <?php if($object['staffId'] !=0 ): ?>colspan='2'<?php endif; ?>> 
             <label>
             <input type='radio' id='staffStatus1' name='staffStatus' value='1' <?php if($object['staffStatus'] ==1 ): ?>checked<?php endif; ?> />启用&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='staffStatus0' name='staffStatus' value='0' <?php if($object['staffStatus'] ==0 ): ?>checked<?php endif; ?> />停用
             </label>
             </td>
           </tr>
           <tr>
             <td colspan='3' style='padding-left:250px;'>
                 <button type="submit" class="btn btn-success">保&nbsp;存</button>
                 <button type="button" class="btn btn-primary" onclick='javascript:location.href="<?php echo U('Admin/Staffs/index');?>"'>返&nbsp;回</button>
             </td>
           </tr>
        </table>
       </form>
   </body>
</html>