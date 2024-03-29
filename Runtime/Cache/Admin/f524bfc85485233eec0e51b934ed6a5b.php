<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo ($CONF['shopTitle']['fieldValue']); ?>后台管理中心</title>
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
   <style>
   input[type=checkbox] {margin-right:2px;}
   </style>
   <script>
   $(function () {
	   $.formValidator.initConfig({
		   theme:'Default',mode:'AutoTip',formID:"myform",debug:true,submitOnce:true,onSuccess:function(){
				   edit();
			       return false;
			},onError:function(msg){
		}});
	   $("#roleName").formValidator({onFocus:"角色名称至少要输入1个字符",onCorrect:"输入正确"}).inputValidator({min:1,max:20,onError:"你输入的长度不正确,请确认"});
	   var grant = '<?php echo ($object["grant"]); ?>'.split(',');
	   for(var i=0;i<grant.length;i++){
			$('#'+grant[i]).prop('checked',true);
	   }
   });
   function edit(){
	   var params = {};
	   params.id = $('#id').val();
	   params.roleName = $('#roleName').val();
	   var grant = [];
	   $('.grant').each(function(){
		   if($(this).prop('checked'))grant.push($(this).val());
	   });
	   params.grant = grant.join(',');
	   if(grant.length==0){
		   Plugins.Tips({title:'信息提示',icon:'error',content:'请至少选择一个权限!',timeout:1000});
		   return;
	   }
	   Plugins.waitTips({title:'信息提示',content:'正在提交数据，请稍后...'});
		$.post("<?php echo U('Admin/Roles/edit');?>",params,function(data,textStatus){
			var json = WST.toJson(data);
			if(json.status=='1'){
				Plugins.setWaitTipsMsg({ content:'操作成功',timeout:1000,callback:function(){
				   location.href="<?php echo U('Admin/Roles/index');?>";
				}});
			}else{
				Plugins.closeWindow();
				Plugins.Tips({title:'信息提示',icon:'error',content:'操作失败!',timeout:1000});
			}
		});
   }
   function checkModel(v){
		$('.'+$(v).val()).each(function(){
			$(this).prop('checked',$(v).prop('checked'));
		})
	}
   </script>
   <body class="wst-page">
       <form name="myform" method="post" id="myform" autocomplete="off">
        <input type='hidden' id='id' value='<?php echo ($object["roleId"]); ?>'/>
        <table class="table table-hover table-striped table-bordered wst-form">
           <tr>
             <th width='120' align='right'>角色名称<font color='red'>*</font>：</th>
             <td><input type='text' id='roleName' class="form-control wst-ipt" value='<?php echo ($object["roleName"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>权限列表<font color='red'>*</font>：</th>
             <td>
             <table width='100%'>
                <tr>
                   <td rowspan='6' valign='top' width='100'><label><input type='checkbox' class='chk' onclick='javascript:checkModel(this)' value='spgl'/>商品管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' id='spgl_00' class='chk grant spgl' value='spgl_00' onclick='javascript:checkModel(this)'/>查看商品管理栏目</label></td>                   
                </tr>
                <tr>
                  <td width='90'><label><input type='checkbox' class='chk spgl spfl' value='spfl' onclick='javascript:checkModel(this)'/>商品分类</label></td>
                  <td>    
                   <label><input type='checkbox' class='chk grant spgl spfl' id='spfl_00' value='spfl_00'/>分类列表</label>
                   <label><input type='checkbox' class='chk grant spgl spfl' id='spfl_01' value='spfl_01'/>新增分类</label>
                   <label><input type='checkbox' class='chk grant spgl spfl' id='spfl_02' value='spfl_02'/>修改分类</label>
                   <label><input type='checkbox' class='chk grant spgl spfl' id='spfl_03' value='spfl_03'/>删除分类</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk spgl ppgl' value='ppgl' onclick='javascript:checkModel(this)'/>品牌管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant spgl ppgl' id='ppgl_00' value='ppgl_00'/>品牌列表</label>
                   <label><input type='checkbox' class='chk grant spgl ppgl' id='ppgl_01' value='ppgl_01'/>新增品牌</label>
                   <label><input type='checkbox' class='chk grant spgl ppgl' id='ppgl_02' value='ppgl_02'/>修改品牌</label>
                   <label><input type='checkbox' class='chk grant spgl ppgl' id='ppgl_03' value='ppgl_03'/>删除品牌</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk spgl splb' value='splb' onclick='javascript:checkModel(this)'/>商品列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant spgl splb' id='splb_00' value='splb_00'/>商品列表</label>
                   <label><input type='checkbox' class='chk grant spgl splb' id='splb_04' value='splb_04'/>商品操作</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk spgl spsh' value='spsh' onclick='javascript:checkModel(this)'/>商品审核</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant spgl spsh' id='spsh_00' value='spsh_00'/>商品列表</label>
                   <label><input type='checkbox' class='chk grant spgl spsh' id='spsh_04' value='spsh_04'/>商品审核</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk spgl sppl' value='sppl' onclick='javascript:checkModel(this)'/>商品评论</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant spgl sppl' id='sppl_00' value='sppl_00'/>评论列表</label>
                   <label><input type='checkbox' class='chk grant spgl sppl' id='sppl_04' value='sppl_04'/>评论操作</label>
                   <label><input type='checkbox' class='chk grant spgl sppl' id='sppl_03' value='sppl_03'/>删除评论</label>
                   </td>
                </tr>
                <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='3' valign='top' width='100'><label><input type='checkbox' value='ddgl' class='chk' onclick='javascript:checkModel(this)'/>订单管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant ddgl' id='ddgl_00' value='ddgl_00' onclick='javascript:checkModel(this)'/>查看订单管理栏目</label></td> 
                </tr>
                <tr>
                   <td width='90'><label><input type='checkbox' class='chk ddgl' value='ddlb' onclick='javascript:checkModel(this)'/>订单列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant ddgl ddlb' id='ddlb_00' value='ddlb_00'/>订单列表</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk ddgl tk' value='tk' onclick='javascript:checkModel(this)'/>退款列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant ddgl tk' id='tk_00' value='tk_00'/>退款列表</label>
                   <label><input type='checkbox' class='chk grant ddgl tk' id='tk_04' value='tk_04'/>确认退款</label>
                   </td>
                </tr>
                <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='3' valign='top' width='100'><label><input type='checkbox' class='chk' value='dpgl' onclick='javascript:checkModel(this)'/>店铺管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant dpgl' id='dpgl_00' value='dpgl_00' onclick='javascript:checkModel(this)'/>查看店铺管理栏目</label></td> 
                </tr>
                <tr> 
                   <td width='90'><label><input type='checkbox' class='chk dpgl' value='dplb' onclick='javascript:checkModel(this)'/>店铺列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant dpgl dplb' id='dplb_00' value='dplb_00'/>店铺列表</label>
                   <label><input type='checkbox' class='chk grant dpgl dplb' id='dplb_01' value='dplb_01'/>新增店铺</label>
                   <label><input type='checkbox' class='chk grant dpgl dplb' id='dplb_02' value='dplb_02'/>修改店铺</label>
                   <label><input type='checkbox' class='chk grant dpgl dplb' id='dplb_03' value='dplb_03'/>删除店铺</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk dpgl'  value='dpsh' onclick='javascript:checkModel(this)'/>店铺审核</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant dpgl dpsh' id='dpsh_00' value='dpsh_00'/>店铺列表</label>
                   </td>
                </tr>
                <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='3' valign='top' width='100'><label><input type='checkbox' value='dqgl' onclick='javascript:checkModel(this)'/>地区管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant dqgl' id='dqgl_00' value='dqgl_00' onclick='javascript:checkModel(this)'/>查看地区管理栏目</label></td>
                </tr>
                <tr>
                   <td width='90'><label><input type='checkbox' class='chk dqgl' value='dqlb' onclick='javascript:checkModel(this)'/>地区列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant dqgl dqlb' id='dqlb_00' value='dqlb_00'/>地区列表</label>
                   <label><input type='checkbox' class='chk grant dqgl dqlb' id='dqlb_01' value='dqlb_01'/>新增地区</label>
                   <label><input type='checkbox' class='chk grant dqgl dqlb' id='dqlb_02' value='dqlb_02'/>修改地区</label>
                   <label><input type='checkbox' class='chk grant dqgl dqlb' id='dqlb_03' value='dqlb_03'/>删除地区</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk dqgl' value='sqlb' onclick='javascript:checkModel(this)'/>社区列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant dqgl sqlb' id='sqlb_00' value='sqlb_00'/>社区列表</label>
                   <label><input type='checkbox' class='chk grant dqgl sqlb' id='sqlb_01' value='sqlb_01'/>新增社区</label>
                   <label><input type='checkbox' class='chk grant dqgl sqlb' id='sqlb_02' value='sqlb_02'/>修改社区</label>
                   <label><input type='checkbox' class='chk grant dqgl sqlb' id='sqlb_03' value='sqlb_03'/>删除社区</label>
                   </td>
                </tr>
                <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='3' valign='top' width='100'><label><input type='checkbox' class='chk wzgl' value='wzgl' onclick='javascript:checkModel(this)'/>文章管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant wzgl' id='wzgl_00' value='wzgl_00' onclick='javascript:checkModel(this)'/>查看文章管理栏目</label></td>
                </tr>
                <tr>
                   <td width='90'><label><input type='checkbox' class='chk wzgl' value='wzlb' onclick='javascript:checkModel(this)'/>文章列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant wzgl wzlb' id='wzlb_00' value='wzlb_00'/>文章列表</label>
                   <label><input type='checkbox' class='chk grant wzgl wzlb' id='wzlb_01' value='wzlb_01'/>新增文章</label>
                   <label><input type='checkbox' class='chk grant wzgl wzlb' id='wzlb_02' value='wzlb_02'/>修改文章</label>
                   <label><input type='checkbox' class='chk grant wzgl wzlb' id='wzlb_03' value='wzlb_03'/>删除文章</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk wzgl' value='wzfl' onclick='javascript:checkModel(this)'/>文章分类</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant wzgl wzfl' id='wzfl_00' value='wzfl_00'/>分类列表</label>
                   <label><input type='checkbox' class='chk grant wzgl wzfl' id='wzfl_01' value='wzfl_01'/>新增分类</label>
                   <label><input type='checkbox' class='chk grant wzgl wzfl' id='wzfl_02' value='wzfl_02'/>修改分类</label>
                   <label><input type='checkbox' class='chk grant wzgl wzfl' id='wzfl_03' value='wzfl_03'/>删除分类</label>
                   </td>
                </tr>
                <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='4' valign='top' width='100'><label><input type='checkbox' class='chk hygl' value='hygl' onclick='javascript:checkModel(this)'/>会员管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant hygl' id='hygl_00' value='hygl_00' onclick='javascript:checkModel(this)'/>查看会员管理栏目</label></td>
                </tr>
                <tr>
                   <td width='90'><label><input type='checkbox' class='chk hygl' value='hydj' onclick='javascript:checkModel(this)'/>会员等级</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant hygl hydj' id='hydj_00' value='hydj_00'/>等级列表</label>
                   <label><input type='checkbox' class='chk grant hygl hydj' id='hydj_01' value='hydj_01'/>新增等级</label>
                   <label><input type='checkbox' class='chk grant hygl hydj' id='hydj_02' value='hydj_02'/>修改等级</label>
                   <label><input type='checkbox' class='chk grant hygl hydj' id='hydj_03' value='hydj_03'/>删除等级</label>
                   </td>
                </tr>
                <tr>
                <td ><label><input type='checkbox' class='chk hygl' value='hylb' onclick='javascript:checkModel(this)'/>会员列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant hygl hylb' id='hylb_00' value='hylb_00'/>会员列表</label>
                   <label><input type='checkbox' class='chk grant hygl hylb' id='hylb_01' value='hylb_01'/>新增会员</label>
                   <label><input type='checkbox' class='chk grant hygl hylb' id='hylb_02' value='hylb_02'/>修改会员</label>
                   <label><input type='checkbox' class='chk grant hygl hylb' id='hylb_03' value='hylb_03'/>删除会员</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk hygl' value='hyzh' onclick='javascript:checkModel(this)'/>账号管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant hygl hyzh' id='hyzh_00' value='hyzh_00'/>账号列表</label>
                   <label><input type='checkbox' class='chk grant hygl hyzh' id='hyzh_04' value='hyzh_04'/>账号操作</label>
                   </td>
                </tr>
                <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='4' valign='top' width='100'><label><input type='checkbox' class='chk' value='xtgl' onclick='javascript:checkModel(this)'/>系统管理</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant xtgl' id='xtgl_00' value='xtgl_00' onclick='javascript:checkModel(this)'/>查看系统管理栏目</label></td>
                </tr>
                <tr>
                   <td width='90'><label><input type='checkbox' class='chk xtgl' value='jsgl' onclick='javascript:checkModel(this)'/>角色管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant xtgl jsgl' id='jsgl_00' value='jsgl_00'/>角色列表</label>
                   <label><input type='checkbox' class='chk grant xtgl jsgl' id='jsgl_01' value='jsgl_01'/>新增角色</label>
                   <label><input type='checkbox' class='chk grant xtgl jsgl' id='jsgl_02' value='jsgl_02'/>修改角色</label>
                   <label><input type='checkbox' class='chk grant xtgl jsgl' id='jsgl_03' value='jsgl_03'/>删除角色</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk xtgl' value='zylb' onclick='javascript:checkModel(this)'/>职员列表</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant xtgl zylb' id='zylb_00' value='zylb_00'/>职员列表</label>
                   <label><input type='checkbox' class='chk grant xtgl zylb' id='zylb_01' value='zylb_01'/>新增职员</label>
                   <label><input type='checkbox' class='chk grant xtgl zylb' id='zylb_02' value='zylb_02'/>修改职员</label>
                   <label><input type='checkbox' class='chk grant xtgl zylb' id='zylb_03' value='zylb_03'/>删除职员</label>
                   </td>
                </tr>
                <tr>
                   <td><label><input type='checkbox' class='chk xtgl' value='dlrz' onclick='javascript:checkModel(this)'/>登录日志</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant xtgl dlrz' id='dlrz_00' value='dlrz_00'/>日志列表</label>
                   </td>
                </tr>
                 <tr style='border-top:1px solid #dddddd'>
                   <td rowspan='7' valign='top' width='100'><label><input type='checkbox' class='chk scsz' value='scsz' onclick='javascript:checkModel(this)'/>商城设置</label></td>
                   <td width='90' colspan='2'><label><input type='checkbox' class='chk grant scsz' id='scsz_00' value='scsz_00' onclick='javascript:checkModel(this)'/>查看商城设置栏目</label></td>                   
                </tr>
                <tr>
                   <td width='90'><label><input type='checkbox' class='chk scsz' value='scxx' onclick='javascript:checkModel(this)'/>商城信息</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant scsz scxx' id='scxx_00' value='scxx_00'/>商城信息</label>
                   <label><input type='checkbox' class='chk grant scsz scxx' id='scxx_02' value='scxx_02'/>商城信息修改</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk scsz' value='dhgl' onclick='javascript:checkModel(this)'/>导航管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant scsz dhgl' id='dhgl_00' value='dhgl_00'/>导航列表</label>
                   <label><input type='checkbox' class='chk grant scsz dhgl' id='dhgl_01' value='dhgl_01'/>新增导航</label>
                   <label><input type='checkbox' class='chk grant scsz dhgl' id='dhgl_02' value='dhgl_02'/>修改导航</label>
                   <label><input type='checkbox' class='chk grant scsz dhgl' id='dhgl_03' value='dhgl_03'/>删除导航</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk scsz' value='yqlj' onclick='javascript:checkModel(this)'/>友情链接</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant scsz yqlj' id='yqlj_00' value='yqlj_00'/>链接列表</label>
                   <label><input type='checkbox' class='chk grant scsz yqlj' id='yqlj_01' value='yqlj_01'/>新增链接</label>
                   <label><input type='checkbox' class='chk grant scsz yqlj' id='yqlj_02' value='yqlj_02'/>修改链接</label>
                   <label><input type='checkbox' class='chk grant scsz yqlj' id='yqlj_03' value='yqlj_03'/>删除链接</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk scsz' value='gggl' onclick='javascript:checkModel(this)'/>广告管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant scsz gggl' id='gggl_00' value='gggl_00'/>广告列表</label>
                   <label><input type='checkbox' class='chk grant scsz gggl' id='gggl_01' value='gggl_01'/>新增广告</label>
                   <label><input type='checkbox' class='chk grant scsz gggl' id='gggl_02' value='gggl_02'/>修改广告</label>
                   <label><input type='checkbox' class='chk grant scsz gggl' id='gggl_03' value='gggl_03'/>删除广告</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk scsz' value='yhgl' onclick='javascript:checkModel(this)'/>银行管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant scsz yhgl' id='yhgl_00' value='yhgl_00'/>银行列表</label>
                   <label><input type='checkbox' class='chk grant scsz yhgl' id='yhgl_01' value='yhgl_01'/>新增银行</label>
                   <label><input type='checkbox' class='chk grant scsz yhgl' id='yhgl_02' value='yhgl_02'/>修改银行</label>
                   <label><input type='checkbox' class='chk grant scsz yhgl' id='yhgl_03' value='yhgl_03'/>删除银行</label>
                   </td>
                </tr>
                <tr>
                   <td ><label><input type='checkbox' class='chk scsz' value='zfgl' onclick='javascript:checkModel(this)'/>支付管理</label></td>
                   <td>
                   <label><input type='checkbox' class='chk grant scsz zfgl' id='zfgl_00' value='zfgl_00'/>支付列表</label>
                   <label><input type='checkbox' class='chk grant scsz zfgl' id='zfgl_01' value='zfgl_01'/>安装支付</label>
                   <label><input type='checkbox' class='chk grant scsz zfgl' id='zfgl_02' value='zfgl_02'/>编辑支付</label>
                   <label><input type='checkbox' class='chk grant scsz zfgl' id='zfgl_03' value='zfgl_03'/>卸载支付</label>
                   </td>
                </tr>
             </table>
             </td>
           </tr>
           <tr>
             <td colspan='2' style='padding-left:250px;'>
                 <button type="submit" class="btn btn-success">保&nbsp;存</button>
                 <button type="button" class="btn btn-primary" onclick='javascript:location.href="<?php echo U('Admin/Roles/index');?>"'>返&nbsp;回</button>
             </td>
           </tr>
        </table>
       </form>
   </body>
</html>