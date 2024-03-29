<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo ($CONF['mallTitle']); ?>后台管理中心</title>
      <link href="/Public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/Apps/Admin/View/css/AdminLTE.css" rel="stylesheet" type="text/css" />
      <!--[if lt IE 9]>
      <script src="/Public/js/html5shiv.min.js"></script>
      <script src="/Public/js/respond.min.js"></script>
      <![endif]-->
      <script src="/Public/js/jquery.min.js"></script>
      <script src="/Public/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="/Public/js/common.js"></script>
      <script src="/Public/plugins/plugins/plugins.js"></script>
      <script src="/Public/plugins/formValidator/formValidator-4.1.3.js"></script>
   </head>
   <script>
   $(function () {
	   $.formValidator.initConfig({
		   theme:'Default',mode:'AutoTip',formID:"myform",debug:true,submitOnce:true,onSuccess:function(){
				   edit();
			       return false;
			},onError:function(msg){
		}});
	   $("#areaName").formValidator({onShow:"",onFocus:"地区名称至少要输入1个字符",onCorrect:"输入正确"}).inputValidator({min:1,max:20,onError:"你输入的长度不正确,请确认"});
	   
   });
   function edit(){
	   var params = {};
	   params.id = $('#id').val();
	   params.areaName = $('#areaName').val();
	   params.parentId = $('#parentId').val();
	   params.isShow = $("input[name='isShow']:checked").val();
	   params.areaSort = $('#areaSort').val();
	   Plugins.waitTips({title:'信息提示',content:'正在提交数据，请稍后...'});
	   $.post("<?php echo U('Admin/Areas/edit');?>",params,function(data,textStatus){
			var json = WST.toJson(data);
			if(json.status=='1'){
				Plugins.setWaitTipsMsg({ content:'操作成功',timeout:1000,callback:function(){
				   location.href='<?php echo U("Admin/Areas/index",array("parentId"=>$object["parentId"]));?>';
				}});
			}else{
				Plugins.closeWindow();
				Plugins.Tips({title:'信息提示',icon:'error',content:'操作失败!',timeout:1000});
			}
		});
   }
   </script>
   <body class="wst-page">
       <form name="myform" method="post" id="myform" autocomplete="off">
        <input type='hidden' id='id' value='<?php echo ($object["areaId"]); ?>'/>
        <input type='hidden' id='parentId' value='<?php echo ($object["parentId"]); ?>'/>
        <div class="wst-body">
        <table class="table table-hover table-striped table-bordered wst-form">
           <tr>
             <th width='120' align='right'>地区名称<font color='red'>*</font>：</th>
             <td><input type='text' id='areaName' class="form-control wst-ipt" value='<?php echo ($object["areaName"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>是否显示<font color='red'>*</font>：</th>
             <td>
             <label>
             <input type='radio' id='isShow1' name='isShow' value='1' <?php if($object['isShow'] ==1 ): ?>checked<?php endif; ?> />显示&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='isShow0' name='isShow' value='0' <?php if($object['isShow'] ==0 ): ?>checked<?php endif; ?> />隐藏
             </label>
             </td>
           </tr>
           <tr>
             <th align='right'>排序号<font color='red'>*</font>：</th>
             <td>
             <input type='text' id='areaSort' class="form-control wst-ipt" value='<?php echo ($object["areaSort"]); ?>' style='width:80px' onkeypress="return WST.isNumberKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='8'/>
             </td>
           </tr>
           <tr>
             <td colspan='2' style='padding-left:250px;'>
                 <button type="submit" class="btn btn-success">保&nbsp;存</button>
                 <button type="button" class="btn btn-primary" onclick='javascript:location.href="<?php echo U('Admin/Areas/index');?>"'>返&nbsp;回</button>
             </td>
           </tr>
        </table>
       </form>
   </body>
</html>