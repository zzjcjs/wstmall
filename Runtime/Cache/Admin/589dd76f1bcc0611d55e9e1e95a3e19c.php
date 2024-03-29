<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo ($CONF['shopTitle']['fieldValue']); ?>后台管理中心</title>
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
      <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=37f0869604ca86505487639427d52bf6"></script>
      <script type="text/javascript" src="/Apps/Admin/View/js/upload.js"></script>
      
   </head>
   <style>
   img {max-width: 100px;}
.ATRoot{height:22px;line-height:22px;margin-left:5px;clear:both;cursor:pointer;}
.ATNode{margin-left:5px;line-height:22px;margin-left:17px;clear:both;cursor:pointer;}
.Hide{display:none;}
dl.areaSelect{padding:0 5px; display: inline-block; width:100%; margin-bottom: 0;/*border:1px solid #eee;*/}
dl.areaSelect:hover{border:1px solid #E5CD29;}
dl.areaSelect:hover dd{display: block;}
dl.areaSelect dd{ float: left; margin-left: 20px; cursor: pointer;}
</style>
   <script>
   var shopMap = null;
   var toolBar = null;
   var filetypes = ["gif","jpg","png","jpeg"];
   var ThinkPHP = window.Think = {
	        "ROOT"   : ""
	}
   $(function () {
   		//展开按钮
   		$("#expendAll").click(function(){
   			if ($(this).prop('checked')==true) {$("dl.areaSelect dd").removeClass('Hide')}
   			else{$("dl.areaSelect dd").addClass('Hide')}
   		})
	   $.formValidator.initConfig({
		   theme:'Default',mode:'AutoTip',formID:"myform",debug:true,submitOnce:true,onSuccess:function(){
				   edit();
			       return false;
			},onError:function(msg){
		}});
	   $("#loginName").formValidator({onShow:"",onFocus:"会员账号应该为5-16字母、数字或下划线",onCorrect:"输入正确"}).inputValidator({min:5,max:16,onError:"会员账号应该为5-16字母、数字或下划线"}).regexValidator({
	       regExp:"username",dataType:"enum",onError:"会员账号格式错误"
		}).ajaxValidator({
			dataType : "json",
			async : true,
			url : "<?php echo U('Admin/Users/checkLoginKey');?>",
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
		}).defaultPassed();
	   $("#loginPwd").formValidator({
			onShow:"",onFocus:"登录密码长度应该为5-20位之间"
			}).inputValidator({
				min:5,max:50,onError:"登录密码长度应该为5-20位之间"
			});
		$("#userPhone").inputValidator({min:11,max:11,onError:"你输入的手机号码非法,请确认"}).ajaxValidator({
			dataType : "json",
			async : true,
			url : "<?php echo U('Admin/Users/checkLoginKey',array('id'=>$object['userId']));?>",
			success : function(data){
				var json = WST.toJson(data);
	            if( json.status == "1" ) {
	                return true;
				} else {
	                return false;
				}
				return "该手机号码已被使用";
			},
			buttons: $("#dosubmit"),
			onError : "该手机号码已存在。",
			onWait : "请稍候..."
		}).defaultPassed().unFormValidator(true);
		$("#shopSn").formValidator({onShow:"",onFocus:"店铺编号不能超过20个字符",onCorrect:"输入正确"}).inputValidator({min:1,max:20,onError:"店铺编号不符合要求,请确认"});
		$("#shopName").formValidator({onShow:"",onFocus:"店铺名称不能超过20个字符",onCorrect:"输入正确"}).inputValidator({min:1,max:20,onError:"店铺名称不符合要求,请确认"});
		$("#userName").formValidator({onShow:"",onFocus:"请输入店主姓名",onCorrect:"输入正确"}).inputValidator({min:1,max:20,onError:"店主姓名不能为空,请确认"});
		$("#shopCompany").formValidator({onShow:"",onFocus:"请输入公司名称",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"公司名称不能为空,请确认"});
		$("#shopTel").formValidator({onShow:"",onFocus:"请输入店铺电话",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"店铺电话不能为空,请确认"});
		$("#shopAddress").formValidator({onShow:"",onFocus:"请输入店铺地址",onCorrect:"输入正确"}).inputValidator({min:1,max:120,onError:"店铺地址不能为空,请确认"});
		$("#areaId3").formValidator({onFocus:"请选择所属地区"}).inputValidator({min:1,onError: "请选择所属地区"});
		$("#goodsCatId1").formValidator({onFocus:"请选择所属行业"}).inputValidator({min:1,onError: "请选择所属行业"});
		$("#bankId").formValidator({onFocus:"请选择所属银行"}).inputValidator({min:1,onError: "请选择所属银行"});
		$("#bankNo").formValidator({onShow:"",onFocus:"请输入银行卡号",onCorrect:"输入正确"}).inputValidator({min:16,max:19,onError:"银行卡号格式错误,请确认"});
	
		$("#serviceStartTime").formValidator({onShow:"",onFocus:"请选择营业时间"}).inputValidator({min:1,max:50,onError:"请选择营业时间"});
		$("#serviceEndTime").formValidator({onShow:"",onFocus:"请选择营业时间"}).inputValidator({min:1,max:50,onError:"请选择营业时间"});

		$("#userPhone").blur(function(){
			  if($("#userPhone").val()==''){
				  $("#userPhone").unFormValidator(true);
			  }else{
				  $("#userPhone").unFormValidator(false);
			  }
		});
		ShopMapInit();
		<?php if($object['shopId'] !=0 ): ?>getAreaList("areaId2",<?php echo ($object["areaId1"]); ?>,0,<?php echo ($object["areaId2"]); ?>);
		   getAreaList("areaId3",<?php echo ($object["areaId2"]); ?>,1,<?php echo ($object["areaId3"]); ?>);<?php endif; ?>
		
		initTime('serviceStartTime','<?php echo ($object['serviceStartTime']); ?>');
		initTime('serviceEndTime','<?php echo ($object['serviceEndTime']); ?>');
		getCommunitys();

		if ($("input[name='shopStatus']:checked").val() <= -1) {
			yj_unformValidator();
		};

		//拒绝申请要求填写拒绝理由
		$("input[name='shopStatus']").change(function(){
			if ($(this).val()<=-1) { //选择拒绝的时候
				$('#refuseMsg').show();
				yj_unformValidator();
			}else{ //恢复验证
				$('#refuseMsg').hide();
				reformValidator();
			}
		});	
   });
	//取消校验
	function yj_unformValidator(){
		$("#loginName").attr("disabled",true).unFormValidator(true); //解除校验
		$("#loginPwd").attr("disabled",true).unFormValidator(true); //解除校验
		$("#userPhone").attr("disabled",true).unFormValidator(true); //解除校验
		$("#shopSn").attr("disabled",true).unFormValidator(true); //解除校验
		$("#shopName").attr("disabled",true).unFormValidator(true); //解除校验
		$("#userName").attr("disabled",true).unFormValidator(true); //解除校验
		$("#shopCompany").attr("disabled",true).unFormValidator(true); //解除校验
		$("#shopAddress").attr("disabled",true).unFormValidator(true); //解除校验
		$("#areaId3").attr("disabled",true).unFormValidator(true); //解除校验
		$("#goodsCatId3").attr("disabled",true).unFormValidator(true); //解除校验
		$("#bankId").attr("disabled",true).unFormValidator(true); //解除校验
		$("#bankNo").attr("disabled",true).unFormValidator(true); //解除校验
		$("#serviceStartTime").attr("disabled",true).unFormValidator(true); //解除校验
		$("#serviceEndTime").attr("disabled",true).unFormValidator(true); //解除校验
	}
	//恢复校验
	function reformValidator(){
		$("#loginName").attr("disabled",false).unFormValidator(false); //解除校验
		$("#loginPwd").attr("disabled",false).unFormValidator(false); //解除校验
		$("#userPhone").attr("disabled",false).unFormValidator(false); //解除校验
		$("#shopSn").attr("disabled",false).unFormValidator(false); //解除校验
		$("#shopName").attr("disabled",false).unFormValidator(false); //解除校验
		$("#userName").attr("disabled",false).unFormValidator(false); //解除校验
		$("#shopCompany").attr("disabled",false).unFormValidator(false); //解除校验
		$("#shopAddress").attr("disabled",false).unFormValidator(false); //解除校验
		$("#areaId3").attr("disabled",false).unFormValidator(false); //解除校验
		$("#goodsCatId3").attr("disabled",false).unFormValidator(false); //解除校验
		$("#bankId").attr("disabled",false).unFormValidator(false); //解除校验
		$("#bankNo").attr("disabled",false).unFormValidator(false); //解除校验
		$("#serviceStartTime").attr("disabled",false).unFormValidator(false); //解除校验
		$("#serviceEndTime").attr("disabled",false).unFormValidator(false); //解除校验
	}
   function ShopMapInit(option){
	   var opts = {zoom:$('#mapLevel').val(),longitude:$('#longitude').val(),latitude:$('#latitude').val()};
	   if(shopMap)return;
	   $('#shopMap').show();
	   shopMap = new AMap.Map('mapContainer', {
			view: new AMap.View2D({
				zoom:opts.zoom
			})
	   });
	   if(opts.longitude!='' && opts.latitude!=''){
		   shopMap.setZoomAndCenter(opts.zoom, new AMap.LngLat(opts.longitude, opts.latitude));
		   var marker = new AMap.Marker({
				position: new AMap.LngLat(opts.longitude, opts.latitude), //基点位置
				icon:"http://webapi.amap.com/images/marker_sprite.png"
		   });
		   marker.setMap(shopMap);
	   }
	   shopMap.plugin(["AMap.ToolBar"],function(){		
			toolBar = new AMap.ToolBar();
			shopMap.addControl(toolBar);	
			toolBar.show();
	   });
	   
	   AMap.event.addListener(shopMap,'click',function(e){
			shopMap.clearMap();
			$('#longitude').val(e.lnglat.getLng());
			$('#latitude').val(e.lnglat.getLat());
			var marker = new AMap.Marker({
				position: e.lnglat, //基点位置
				icon:"http://webapi.amap.com/images/marker_sprite.png"
			});
			marker.setMap(shopMap);
	   });
	   AMap.event.addListener(shopMap,'zoomchange',function(e){
		   $('#mapLevel').val(this.getZoom());
	   })
   }
   function getAreaList(objId,parentId,t,id){
	   var params = {};
	   params.parentId = parentId;
	   $('#'+objId).empty();
	   if(t<1){
		   $('#areaId3').empty();
		   $('#areaId3').html('<option value="">请选择</option>');
	   }else{
		   if(t==1 && $('#areaId2').find("option:selected").text()!=''){
			   shopMap.setZoom();
			   shopMap.setCity($('#areaId2').find("option:selected").text());
			   $('#showLevel').val(shopMap.getZoom());
		   }
	   }
	   var html = [];
	   $.post("<?php echo U('Admin/Areas/queryShowByList');?>",params,function(data,textStatus){
		    html.push('<option value="">请选择</option>');
			var json = WST.toJson(data);
			if(json.status=='1' && json.list && json.list.length>0){
				var opts = null;
				for(var i=0;i<json.list.length;i++){
					opts = json.list[i];
					html.push('<option value="'+opts.areaId+'" '+((id==opts.areaId)?'selected':'')+'>'+opts.areaName+'</option>');
				}
			}
			$('#'+objId).html(html.join(''));
			if(id)getCommunitys();
	   });
   }
   
   var relateCommunity = "<?php echo ($object['relateCommunity']); ?>".split(',');
   var relateArea = "<?php echo ($object['relateArea']); ?>".split(',');
   //修改部分 2015-4-23 lijingwei
   function getCommunitys(){
		$('#areaTree').empty();
		var v = $('#areaId2').val();
		if(v!==-1){
			$.post("<?php echo U('Admin/Areas/queryAreaAndCommunitysByList');?>",{areaId:v},function(data,textStatus){
				var json = data;
				if(json.list){
					var html = [];
					json = json.list;
					for(var i=0;i<json.length;i++){
						var isAreaSelected = ($.inArray(json[i]['areaId'],relateArea)>-1)?" checked ":"";
						communitysCount = 0
						if (json[i].communitys) {
							for (var j =json[i].communitys.length - 1; j >= 0; j--) {
								if ($.inArray(json[i].communitys[j]['communityId'],relateCommunity) > -1 ) {communitysCount++;};
							};
						};
						html.push("<dl class='areaSelect' id='"+json[i]['areaId']+"'>");
						html.push("<dt class='ATRoot' id='node_"+json[i]['areaId']+"' isshow='0'>"+json[i]['areaName']+"：<span> <input type='checkbox' all='1' class='AreaNode' onclick='javascript:selectArea(this)' id='ck_"+json[i]['areaId']+"' "+isAreaSelected+" value='"+json[i]['areaId']+"'><label for='ck_"+json[i]['areaId']+"' "+isAreaSelected+" value='"+json[i]['areaId']+"'>全区配送</label></span> <small>(已选<span class='count'>"+communitysCount+"</span>个社区)</small></dt>");
						if(json[i].communitys && json[i].communitys.length){
							for(var j=0;j<json[i].communitys.length;j++){
								var isCommunitySelected = ($.inArray(json[i].communitys[j]['communityId'],relateCommunity)>-1)?" checked ":"";
								isCommunitySelected += (isAreaSelected!='')?" disabled ":"";
							    html.push("<dd id='node_"+json[i]['areaId']+"_"+json[i].communitys[j]['communityId']+"'><input type='checkbox' id='ck_"+json[i]['areaId']+"_"+json[i].communitys[j]['communityId']+"' all='0' class='AreaNode' "+isCommunitySelected+" onclick='javascript:selectArea(this)' value='"+json[i].communitys[j]['communityId']+"'><label for='ck_"+json[i]['areaId']+"_"+json[i].communitys[j]['communityId']+"'>"+json[i].communitys[j]['communityName']+"</label></dd>");
							}
						}
						html.push("</dl>");
					}
					$('#areaTree').html(html.join(''));
					$('#expendAll').parent().removeClass('Hide');
					$('#expendAll').attr('checked','checked');
				}
			});
		}
	}
   function selectArea(v){
		count = 0;
		if($(v).attr('all')=='1'){
			$('input[id^="'+$(v).attr('id')+'_"]').each(function(){
				$(this)[0].checked = $(v)[0].checked;
				$(this)[0].disabled = $(v)[0].checked;
				if ($(v)[0].checked) {count++};
			});
		}else{
			$(v).closest('dl').find('input[type="checkbox"]').each(function(){
				if ($(this).prop('checked') == true) { count++};
			});
		}
		$(v).closest('dl').find('.count:first').html(count);
	}
	//修改结束 2015-4-23
   function edit(){
	   var params = {};
	   params.id = $('#id').val();
	   <?php if($object['shopId'] ==0 ): ?>params.loginName = $('#loginName').val();
	   params.loginPwd = $('#loginPwd').val();<?php endif; ?>
	   params.userName = $('#userName').val();
	   params.userPhone = $('#userPhone').val();
	   params.shopSn = $('#shopSn').val();
	   params.areaId1 = $('#areaId1').val();
	   params.areaId2 = $('#areaId2').val();
	   params.areaId3 = $('#areaId3').val();//地区
	   params.goodsCatId1 = $('#goodsCatId1').val();
	   params.isSelf = $("input[name='isSelf']:checked").val();
	   params.shopName = $('#shopName').val();
	   params.shopCompany = $('#shopCompany').val();
	   params.shopStatus = $("input[name='shopStatus']:checked").val();
	   params.shopImg = $('#shopImg').val();
	   params.latitude = $('#latitude').val();
	   params.longitude = $('#longitude').val();
	   params.mapLevel = $('#mapLevel').val();
	   //拒绝的时候不用上传
	   if(params.shopImg=='' && params.shopStatus!=-1 ){
		   Plugins.Tips({title:'信息提示',icon:'error',content:'请上传店铺图片!',timeout:1000});
		   return;
	   }
	   params.shopTel = $('#shopTel').val();
	   params.qqNo = $('#qqNo').val();
	   params.shopAddress = $('#shopAddress').val();
	   params.deliveryFreeMoney = $('#deliveryFreeMoney').val();
	   params.deliveryMoney = $('#deliveryMoney').val();
	   params.avgeCostMoney = $('#avgeCostMoney').val();
	   params.deliveryCostTime = $('#deliveryCostTime').val();
	   params.deliveryStartMoney = $('#deliveryStartMoney').val();
	   params.bankId = $('#bankId').val();
	   params.bankNo = $('#bankNo').val();
	   params.isInvoice = $("input[name='isInvoice']:checked").val();
	   params.invoiceRemarks = $('#invoiceRemarks').val();
	   params.serviceStartTime = $('#serviceStartTime').val();
	   params.serviceEndTime = $('#serviceEndTime').val();	   
	   if(parseInt(params.serviceStartTime,10)>parseInt(params.serviceEndTime,10)){
		   Plugins.Tips({title:'信息提示',icon:'error',content:'开始营业时间不能大于结束营业时间!',timeout:1000});
		   return;
	   }
	   params.statusRemarks = $('#statusRemarks').val();
	   
	   if(params.shopStatus==1){
		   if(params.latitude=='' || params.longitude==''){
			   Plugins.Tips({title:'信息提示',icon:'error',content:'请在地图上标注店铺所在位置!',timeout:1000});
			   return;
		   }
	   }
	   params.shopAtive = $("input[name='shopAtive']:checked").val();
	   var relateArea = [0];
	   var relateCommunity = [0];
	   $('.AreaNode').each(function(){
			if($(this)[0].checked){
				if($(this).attr('all')==1){
					relateArea.push($(this).val());
				}else{
					relateCommunity.push($(this).val());
				}
			}
	   });
	   params.relateAreaId=relateArea.join(',');
	   params.relateCommunityId=relateCommunity.join(',');
	   if(params.relateAreaId=='0' && params.relateCommunityId=='0' && params.shopStatus!=-1){
		   Plugins.Tips({title:'信息提示',icon:'error',content:'请选择配送区域!',timeout:1000});
		   return;
	   }
	   //拒绝的时候要求写备注
	   if(params.shopStatus<=-1 && params.statusRemarks == ''){
		   Plugins.Tips({title:'信息提示',icon:'error',content:'请填写拒绝理由!',timeout:1000});
		   return;
	   }
	   Plugins.waitTips({title:'信息提示',content:'正在提交数据，请稍后...'});
	   $.post("<?php echo U('Admin/Shops/edit');?>",params,function(data,textStatus){
			var json = WST.toJson(data);
			if(json.status=='1'){
				Plugins.setWaitTipsMsg({ content:'操作成功',timeout:1000,callback:function(){
				   location.href='<?php echo U("Admin/Shops/$src");?>';
				}});
			}else if(json.status=='-2'){
				Plugins.closeWindow();
				Plugins.Tips({title:'信息提示',icon:'error',content:'登录账号或店主联系手机已存在!',timeout:1000});
			}else{
				Plugins.closeWindow();
				Plugins.Tips({title:'信息提示',icon:'error',content:'操作失败!',timeout:1000});
			}
		});
   }
   function initTime(objId,val){
	   val = parseInt(val,10);
	   for(var i=0;i<24;i++){
		   $('<option value="'+i+'" '+((val==i)?"selected":'')+'>'+i+':00</option>').appendTo($('#'+objId));
		   $('<option value="'+(i+".5")+'" '+((val==(i+".5"))?"selected":'')+'>'+i+':30</option>').appendTo($('#'+objId));
	   }
   }
   function isInvoce(v){
		  if(v){
			  $('#invoiceRemarkstr').show();
		  }else{
			  $('#invoiceRemarkstr').hide();
		  }
   }
   
   </script>
   <body class="wst-page" style="position:relative;">
   		<iframe name="upload" style="display:none"></iframe>
		<form id="uploadform_Filedata" autocomplete="off" style="<?php if($object[shopId] > 0): ?>top:204px;<?php else: ?>top:264px;<?php endif; ?>position:absolute;left:170px;z-index:10;" enctype="multipart/form-data" method="POST" target="upload" action="<?php echo U('Home/Shops/uploadPic');?>" >
			<div style="position:relative;">
			<input id="shopImg" name="shopImg" class="form-control wst-ipt" type="text" value="<?php echo ($object["shopImg"]); ?>" readonly style="margin-right:4px;float:left;margin-left:8px;width:250px;"/>
			<div class="div1">
				<div class="div2">浏览</div>
				<input type="file" class="inputstyle" id="Filedata" name="Filedata" onchange="updfile('Filedata');" >
			</div>
			<div style="clear:both;"></div>
			<div >&nbsp;图片大小:150 x 150 (px)(格式为 gif, jpg, jpeg, png)</div>
			<input type="hidden" name="dir" value="shops">
			<input type="hidden" name="width" value="150">
			<input type="hidden" name="folder" value="Filedata">
			<input type="hidden" name="sfilename" value="Filedata">
			<input type="hidden" name="fname" value="shopImg">
			<input type="hidden" id="s_Filedata" name="s_Filedata" value="">
			
			</div>
		</form>
       <form name="myform" method="post" id="myform" autocomplete="off">
        <input type='hidden' id='id' value='<?php echo ($object["shopId"]); ?>'/>

        <table class="table table-hover table-striped table-bordered wst-form">
           <?php if($object['shopId'] ==0 ): ?><tr>
             <th width='150' align='right'>登录账号<font color='red'>*</font>：</th>
             <td><input type='text' id='loginName' name='loginName' class="form-control wst-ipt" value='<?php echo ($object["loginName"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>登录密码<font color='red'>*</font>：</th>
             <td><input type='password' id='loginPwd' class="form-control wst-ipt" value='<?php echo ($object["loginPwd"]); ?>' maxLength='25'/></td>
           </tr><?php endif; ?>
           <tr>
             <th align='right'>店铺编号<font color='red'>*</font>：</th>
             <td><input type='text' id='shopSn' class="form-control wst-ipt" value='<?php echo ($object["shopSn"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>店铺名称<font color='red'>*</font>：</th>
             <td><input type='text' id='shopName' class="form-control wst-ipt" value='<?php echo ($object["shopName"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>店主姓名<font color='red'>*</font>：</th>
             <td><input type='text' id='userName' class="form-control wst-ipt" value='<?php echo ($object["userName"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>店主联系手机<font color='red'>*</font>：</th>
             <td><input type='text' id='userPhone' name='userPhone' class="form-control wst-ipt" value='<?php echo ($object["userPhone"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>公司名称<font color='red'>*</font>：</th>
             <td><input type='text' id='shopCompany' class="form-control wst-ipt" value='<?php echo ($object["shopCompany"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>是否自营店<font color='red'>*</font>：</th>
             <td>
             <label>
             <input type='radio' id='isSelf1' name='isSelf' value='1' <?php if($object['isSelf'] ==1 ): ?>checked<?php endif; ?> />是&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='isSelf0' name='isSelf' value='0' <?php if($object['isSelf'] ==0 ): ?>checked<?php endif; ?> />否
             </label>
             </td>
           </tr>
           <tr style="height:80px;">
             <th align='right'>店铺图标<font color='red'>*</font>：</th>
             <td>
	             <div id="preview_Filedata" style="margin-top: 70px;">
	             	<img id='preview' src='/<?php echo ($object["shopImg"]); ?>' ref='/<?php echo ($object["shopImg"]); ?>' height="152" <?php if($object['shopImg'] =='' ): ?>style='display:none'<?php endif; ?>/>
	             </div>
             </td>
           </tr>
           <tr>
             <th align='right'>店铺电话<font color='red'>*</font>：</th>
             <td><input type='text' id='shopTel' class="form-control wst-ipt" value='<?php echo ($object["shopTel"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>QQ：</th>
             <td><input type='text' id='qqNo' class="form-control wst-ipt" value='<?php echo ($object["qqNo"]); ?>' maxLength='25'/></td>
           </tr>
            <tr>
             <th align='right'>所属地区<font color='red'>*</font>：</th>
             <td>
             <select id='areaId1' onchange='javascript:getAreaList("areaId2",this.value,0)'>
               <option value=''>请选择</option>
               <?php if(is_array($areaList)): $i = 0; $__LIST__ = $areaList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo['areaId']); ?>' <?php if($object['areaId1'] == $vo['areaId'] ): ?>selected<?php endif; ?>><?php echo ($vo['areaName']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
             </select>
             <select id='areaId2' onchange='javascript:getAreaList("areaId3",this.value,1);getCommunitys()'>
               <option value=''>请选择</option>
             </select>
             <select id='areaId3'>
               <option value=''>请选择</option>
             </select>
             </td>
           </tr>
           <tr>
             <th align='right'>店铺地址<font color='red'>*</font>：</th>
             <td><input type='text' id='shopAddress' class="form-control wst-ipt" value='<?php echo ($object["shopAddress"]); ?>' maxLength='120'/></td>
           </tr>
           <tr id='shopMap' style='display:none'>
             <td>&nbsp;</td>
             <td>
             <div id="mapContainer" style='height:400px;width:90%;'>等待地图初始化...</div>
             <div style='display:none'>
             <input type='text' id='latitude' name='latitude' value="<?php echo ($object['latitude']); ?>"/>
             <input type='text' id='longitude' name='longitude' value="<?php echo ($object['longitude']); ?>"/>
             <input type='text' id='mapLevel' name='mapLevel' value="<?php echo ($object['mapLevel']); ?>"/>
             </div>
             </td>
           </tr>
           <tr>
             <th align='right'>所属行业<font color='red'>*</font>：</th>
             <td>
             <select id='goodsCatId1'>
                <option value=''>请选择</option>
                <?php if(is_array($goodsCatsList)): $i = 0; $__LIST__ = $goodsCatsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo['catId']); ?>' <?php if($object['goodsCatId1'] == $vo['catId'] ): ?>selected<?php endif; ?>><?php echo ($vo['catName']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
             </select>
             </td>
           </tr>
           <tr>
             <th align='right'>营业状态<font color='red'>*</font>：</th>
             <td>
             <label>
             <input type='radio' id='shopAtive1' name='shopAtive' value='1' <?php if($object['shopAtive'] ==1 ): ?>checked<?php endif; ?> />营业中&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='shopAtive0' name='shopAtive' value='0' <?php if($object['shopAtive'] ==0 ): ?>checked<?php endif; ?> />休息中
             </label>
             </td>
           </tr>
           <tr>
             <th align='right'>配送区域<font color='red'>*</font>：</th>
             <td>
             <div class="text-gray Hide">展开全部：<input type="checkbox" id="expendAll"></div>
             <div id='areaTree'>
             </div>
             </td>
           </tr>
           <tr>
             <th width='170' align='right'>订单配送起步价(元)<font color='red'>*</font>：</th>
             <td><input type='text' id='deliveryStartMoney' class="form-control wst-ipt" value='<?php echo ($object["deliveryStartMoney"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>包邮起步价(元)<font color='red'>*</font>：</th>
             <td><input type='text' id='deliveryFreeMoney' class="form-control wst-ipt" value='<?php echo ($object["deliveryFreeMoney"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>邮费(元)<font color='red'>*</font>：</th>
             <td><input type='text' id='deliveryMoney' class="form-control wst-ipt" value='<?php echo ($object["deliveryMoney"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>平均配送时间(分钟)<font color='red'>*</font>：</th>
             <td><input type='text' id='deliveryCostTime' class="form-control wst-ipt" value='<?php echo ($object["deliveryCostTime"]); ?>' onkeypress="return WST.isNumberKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>平均消费金额<font color='red'>*</font>：</th>
             <td><input type='text' id='avgeCostMoney' class="form-control wst-ipt" value='<?php echo ($object["avgeCostMoney"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>所属银行<font color='red'>*</font>：</th>
             <td>
             <select id='bankId'>
                <option value=''>请选择</option>
                <?php if(is_array($bankList)): $i = 0; $__LIST__ = $bankList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo['bankId']); ?>' <?php if($object['bankId'] == $vo['bankId'] ): ?>selected<?php endif; ?>><?php echo ($vo['bankName']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
             </select>
             </td>
           </tr>
           <tr>
             <th align='right'>银行卡卡号<font color='red'>*</font>：</th>
             <td><input type='text' id='bankNo' class="form-control wst-ipt" value='<?php echo ($object["bankNo"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>能否开发票<font color='red'>*</font>：</th>
             <td>
             <label>
             <input type='radio' id='isInvoice1' name='isInvoice' value='1' onclick='javascript:isInvoce(true)' <?php if($object['isInvoice'] ==1 ): ?>checked<?php endif; ?> />能&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='isInvoice0' name='isInvoice' value='0' onclick='javascript:isInvoce(false)' <?php if($object['isInvoice'] ==0 ): ?>checked<?php endif; ?> />否
             </label>
             </td>
           </tr>
           <tr id='invoiceRemarkstr' <?php if($object['isInvoice'] == 0 ): ?>style='display:none'<?php endif; ?>>
             <th align='right'>发票说明<font color='red'>*</font>：</th>
             <td><input type='text' id='invoiceRemarks' class="form-control wst-ipt" value='<?php echo ($object["invoiceRemarks"]); ?>' maxLength='25'/></td>
           </tr>
           <tr>
             <th align='right'>营业时间<font color='red'>*</font>：</th>
             <td>
             <select id='serviceStartTime'>
                <option>请选择</option>
             </select>
             至
             <select id='serviceEndTime'>
                <option>请选择</option>
             </select>
             </td>
           </tr>
            <tr>
             <th align='right'>店铺状态<font color='red'>*</font>：</th>
             <td>
             <label>
             <input type='radio' id='shopStatus1' name='shopStatus' value='-2' <?php if($object['shopStatus'] ==-2 ): ?>checked<?php endif; ?> />已停止&nbsp;&nbsp;
             </label>
             <label>
             <input type='radio' id='shopStatus0' name='shopStatus' value='-1' <?php if($object['shopStatus'] ==-1 ): ?>checked<?php endif; ?> />拒绝
             </label>
             <label>
             <input type='radio' id='shopStatus2' name='shopStatus' value='0' <?php if($object['shopStatus'] ==0 ): ?>checked<?php endif; ?> />待审核
             </label>
             <label>
             <input type='radio' id='shopStatus3' name='shopStatus' value='1' <?php if($object['shopStatus'] ==1 ): ?>checked<?php endif; ?> />已审核
             </label>
             </td>
           </tr>
           <tr id="refuseMsg" <?php if($object['shopStatus'] > -1 ): ?>style='display:none'<?php endif; ?>>
           	 <th>拒绝理由：</th>
           	 <td>
           	 	<input class="form-control wst-ipt" type="text" id="statusRemarks" name="statusRemarks" length="255" value="<?php echo ($object['statusRemarks']); ?>">
           	 </td>
           </tr>
           <tr>
             <td colspan='2' style='padding-left:250px;'>
                 <button type="submit" class="btn btn-success">保&nbsp;存</button>
                 <button type="button" class="btn btn-primary" onclick='javascript:location.href="<?php echo U('Admin/Shops/index');?>"'>返&nbsp;回</button>
             </td>
           </tr>
        </table>
       </form>
   </body>
</html>