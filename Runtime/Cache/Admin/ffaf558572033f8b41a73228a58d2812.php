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
      <script src="/Public/plugins/kindeditor/kindeditor.js"></script>
      <script src="/Public/plugins/kindeditor/lang/zh_CN.js"></script>
   </head>
   <style>
    .wst-tab-box{width:100%; height:auto; margin:0px auto;}
	.wst-tab-nav{margin:0; padding:0; height:25px; line-height:24px;position: relative;top:2px;left:3px;}
	.wst-tab-nav li{cursor:pointer;float:left; margin:0 0px; list-style:none; border:1px solid #ddd; border-bottom:none; height:24px; width:100px; text-align:center; background:#eeeeee;color:#000000;}
	.wst-tab-nav .on{background:#ffffff;color:#000000;border-bottom:0 none;}
	.wst-tab-content{padding:5px;width:99%; height:auto; border:1px solid #ddd;background:#FFF;}
    .wst-gallery-imgs{width:770px;height:auto;}
    .wst-gallery-img{width:140px;height:100px;float:left;overflow:hidden;margin:10px 5px 5px 5px;}
   </style>
   <script>
   $(function () {
	   $('#tab').TabPanel({tab:0});
	   KindEditor.ready(function(K) {
			editor1 = K.create('textarea[name="goodsDesc"]', {
				height:'250px',
				allowFileManager : false,
				allowImageUpload : true,
				items:[
				        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
				        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
				        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
				        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
				        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
				        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|','image','table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
				        'anchor', 'link', 'unlink', '|', 'about'
				],
				afterBlur: function(){ this.sync(); }
			});
		});
   });
   function changeStatus(id,v){
	   Plugins.waitTips({title:'信息提示',content:'正在操作，请稍后...'});
	   $.post("<?php echo U('Admin/Goods/changePenddingGoodsStatus');?>",{id:id,status:v},function(data,textStatus){
				var json = WST.toJson(data);
				if(json.status=='1'){
					Plugins.setWaitTipsMsg({ content:'操作成功',timeout:1000,callback:function(){
						location.href="<?php echo U('Admin/Goods/queryPenddingByPage');?>";
					}});
				}else{
					Plugins.closeWindow();
					Plugins.Tips({title:'信息提示',icon:'error',content:'操作失败!',timeout:1000});
				
				}
	   });
   }
   </script>
   <body class="wst-page">
       <form name="myform" method="post" id="myform">
       <div id='tab' class="wst-tab-box">
		<ul class="wst-tab-nav">
	    	<li>商品信息</li>
	        <li>商品相册</li>
	    </ul>
    	<div class="wst-tab-content" style='width:98%;'>
    	<div class='wst-tab-item'>
	        <form name="myform" method="post" id="myform">
	        <input type='hidden' id='id' value='<?php echo ($object["goodsId"]); ?>'/>
	        <input type='hidden' id='shopId' value='<?php echo ($object["shopId"]); ?>'/>
	        <table class="table table-hover table-striped table-bordered wst-form">
	           <tr>
	             <th width='120'>商品编号：</th>
	             <td width='300'>
	             <?php echo ($object["goodsSn"]); ?>
	             </td>
	             <td rowspan='6' style='padding:5px;'>
	             <img id='goodsImgPreview' src='<?php if($object['goodsImg'] =='' ): ?>/Apps/Home/View/default/img/store_default_sign.png<?php else: ?>/<?php echo ($object['goodsImg']); endif; ?>' width='160' height='160'/><br/>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品名称<font color='red'>*</font>：</th>
	             <td><?php echo ($object["goodsName"]); ?></td>
	           </tr>
	            <tr>
	             <th width='120'>市场价<font color='red'>*</font>：</th>
	             <td><?php echo ($object["marketPrice"]); ?></td>
	           </tr>
	            <tr>
	             <th width='120'>店铺价格<font color='red'>*</font>：</th>
	             <td><?php echo ($object["shopPrice"]); ?></td>
	           </tr>
	            <tr>
	             <th width='120'>商品库存<font color='red'>*</font>：</th>
	             <td><?php echo ($object["goodsStock"]); ?></td>
	           </tr>
	            <tr>
	             <th width='120'>单位<font color='red'>*</font>：</th>
	             <td><?php echo ($object["goodsUnit"]); ?></td>
	           </tr>
	           <tr>
	             <th width='120'>商品信息：</th>
	             <td colspan='3'>
	             <?php echo ($object["goodsSpec"]); ?>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品状态<font color='red'>*</font>：</th>
	             <td colspan='3'>
	             <?php if($object['isSale'] ==1 ): ?>上架<?php endif; ?>
	             <?php if($object['isSale'] ==0 ): ?>下架<?php endif; ?>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>所属分类<font color='red'>*</font>：</th>
	             <td colspan='3'><?php echo ($object["goodsCats"]["goodsName1"]); ?>-><?php echo ($object["goodsCats"]["goodsName2"]); ?>-><?php echo ($object["goodsCats"]["goodsName3"]); ?></td>
	           </tr>
	           <tr>
	             <th width='120'>店铺分类<font color='red'>*</font>：</th>
	             <td colspan='3'><?php echo ($object["shopCats"]["goodsName1"]); ?>-><?php echo ($object["shopCats"]["goodsName2"]); ?></td>
	           </tr>
	           <tr>
	             <th width='120'>商品描述<font color='red'>*</font>：</th>
	             <td colspan='3'>
	             <?php echo (htmlspecialchars_decode($object["goodsDesc"])); ?>
	             </td>
	           </tr>
	           <tr>
	             <td colspan='3' style='padding-left:250px;'>
                     <button type="button" class="btn btn-success glyphicon glyphicon-pencil" onclick="javascript:changeStatus(<?php echo ($object['goodsId']); ?>,1)">通过</button>&nbsp;
	                 <button type="button" class="btn btn-primary" onclick='javascript:location.href="<?php echo U('Admin/Goods/queryPenddingByPage');?>"'>返&nbsp;回</button>
	             </td>
	           </tr>
	        </table>
	       </form>
	      </div>
	      <div class='wst-tab-item'>
	       <div id='galleryImgs' class='wst-gallery-imgs'>
	           <?php if(is_array($object['gallery'])): $i = 0; $__LIST__ = $object['gallery'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="wst-gallery-img">
			       <img class="gallery-img" width='140' height='100' iv="<?php echo ($vo["goodsThumbs"]); ?>" v="<?php echo ($vo["goodsImg"]); ?>" src="/<?php echo ($vo["goodsThumbs"]); ?>"/>
		       </div><?php endforeach; endif; else: echo "" ;endif; ?>
	       </div>
	       <div style='clear:both;'></div>
	      </div>
       </div>
       </div>
       </form>
   </body>
</html>