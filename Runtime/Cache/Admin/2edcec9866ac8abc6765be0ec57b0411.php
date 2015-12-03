<?php if (!defined('THINK_PATH')) exit();?><script src="/Public/plugins/kindeditor/kindeditor.js"></script>
<script src="/Public/plugins/kindeditor/lang/zh_CN.js"></script>
<link rel="stylesheet" href="/Apps/Home/View/default/css/common.css" />
<link rel="stylesheet" href="/Apps/Home/View/default/css/shop.css">
<link rel="stylesheet" type="text/css" href="/Public/plugins/webuploader/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/plugins/webuploader/webuploader.css" />
<script type="text/javascript" src="/Public/plugins/webuploader/webuploader.js"></script>
<script type="text/javascript" src="/Apps/Home/View/default/js/goodsbatchupload.js"></script>
<script src="/Public/plugins/formValidator/formValidator-4.1.3.js"></script>
<script src="/Public/js/common.js"></script>
<script src="/Apps/Home/View/default/js/shopcom.js"></script>
<script src="/Apps/Home/View/default/js/head.js"></script>
<script src="/Apps/Home/View/default/js/common.js"></script>
<script src="/Public/plugins/layer/layer.min.js"></script>
<script>
$(function () {
	   $('#tab').TabPanel({tab:0});
	   $.formValidator.initConfig({
		   theme:'Default',mode:'AutoTip',formID:"myform",debug:true,submitOnce:true,onSuccess:function(){
			       editGoods('<?php echo ($umark); ?>');
			       return false;
			},onError:function(msg){
		}});
	   $("#goodsSn").formValidator({onShow:"",onFocus:"",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"请输入商品编号"});
	   $("#goodsName").formValidator({onShow:"",onFocus:"",onCorrect:"输入正确"}).inputValidator({min:1,max:200,onError:"请输入商品名称"});
	   $("#marketPrice").formValidator({onShow:"",onFocus:"",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"请输入市场价格"});
	   $("#shopPrice").formValidator({onShow:"",onFocus:"",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"请输入店铺价格"});
	   $("#goodsStock").formValidator({onShow:"",onFocus:"",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"请输入库存"});
	   $("#goodsUnit").formValidator({onShow:"",onFocus:"",onCorrect:"输入正确"}).inputValidator({min:1,max:50,onError:"请输入商品单位"});
	   $("#goodsCatId3").formValidator({onFocus:"请选择商城分类"}).inputValidator({min:1,onError: "请选择完整商城分类"});
	   $("#shopCatId2").formValidator({onFocus:"请选择本店分类"}).inputValidator({min:1,onError: "请选择完整本店分类"});
	   
	   KindEditor.ready(function(K) {
			editor1 = K.create('textarea[name="goodsDesc"]', {
				height:'250px',
				width:"800px",
				allowFileManager : false,
				allowImageUpload : true,
				items:[
				        'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'cut', 'copy', 'paste',
				        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
				        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
				        'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
				        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
				        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|','image','multiimage','table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
				        'anchor', 'link', 'unlink', '|', 'about'
				],
				afterBlur: function(){ this.sync(); }
			});
		});
	   <?php if($object['goodsId'] !=0 ): ?>getCatListForEdit("goodsCatId2",<?php echo ($object["goodsCatId1"]); ?>,0,<?php echo ($object["goodsCatId2"]); ?>);
	   getCatListForEdit("goodsCatId3",<?php echo ($object["goodsCatId2"]); ?>,1,<?php echo ($object["goodsCatId3"]); ?>);
	   getShopCatListForEdit(<?php echo ($object["shopCatId1"]); ?>,<?php echo ($object["shopCatId2"]); ?>);<?php endif; ?>
	
});

function imglimouseover(obj){
	if(!$(obj).find('.file-panel').html()){
		$(obj).find('.setdel').addClass('trconb');
		$(obj).find('.setdel').css({"display":""});
	}
}

function imglimouseout(obj){
	
	$(obj).find('.setdel').removeClass('trconb');
	$(obj).find('.setdel').css({"display":"none"});
}

function imglidel(obj){
	if (confirm('是否删除图片?')) {
		$(obj).parent().remove("li");
		return;
	}
}

function imgmouseover(obj){
	$(obj).find('.wst-gallery-goods-del').show();
}
function imgmouseout(obj){
	$(obj).find('.wst-gallery-goods-del').hide();
}
function delImg(obj){
	   $(obj).parent().remove();
}

var filetypes = ["gif","jpg","png","jpeg"];
</script>
<script>
    var publicurl = '/Public/';
    var shopId = '<?php echo ($orderInfo["order"]["shopId"]); ?>';
    var pageCount='<?php echo ($receiveOrders["totalPage"]); ?>';
    var current='<?php echo ($receiveOrders["currPage"]); ?>';
</script>
<div class="wst-body">
    <div class='wst-page-content'>
       <div id='tab' class="wst-tab-box">
            <ul class="wst-tab-nav">
                <li>商品信息</li>
                <li>属性</li>
                <li>商品相册</li>
            </ul>
    	<div class="wst-tab-content" style='width:99%;margin-bottom: 10px;'>

    	<!-- 商品基础信息 -->
    	<div class='wst-tab-item' style="position: relative;">
    		<iframe name="upload" style="display:none"></iframe>
			<form id="uploadform_Filedata" autocomplete="off" style="position:absolute;top:155px;left:417px;z-index:10;" enctype="multipart/form-data" method="POST" target="upload" action="<?php echo U('Goods/uploadPic');?>" >
				<div style="position:relative;">
				<input id="goodsImg" name="goodsImg" type="text" value="<?php echo ($object["goodsImg"]); ?>" readonly style="margin-right:4px;float:left;margin-left:8px;width:140px;"/>
				<div class="div1">
					<div class="div2">浏览</div>
					<input type="file" class="inputstyle" id="Filedata" name="Filedata" onchange="updfile('Filedata');" >
				</div>
				<div style="clear:both;"></div>
				<div >&nbsp;图片大小:150 x 120 (px)(格式为 gif, jpg, jpeg, png)</div>
				<input type="hidden" name="dir" value="goods">
				<input type="hidden" name="width" value="500">
				<input type="hidden" name="folder" value="Filedata">
				<input type="hidden" name="sfilename" value="Filedata">
				<input type="hidden" name="fname" value="goodsImg">
				<input type="hidden" id="s_Filedata" name="s_Filedata" value="">
				
				</div>
			</form>
	       <form name="myform" method="post" id="myform" autocomplete="off">
	        <input type='hidden' id='id' value='<?php echo ($object["goodsId"]); ?>'/>
	      
	        <input type='hidden' id='goodsThumbs' value='<?php echo ($object["goodsThums"]); ?>'/>
	        <table class="wst-form" >
	           <tr>
	             <th width='120'>商品编号<font color='red'>*</font>：</th>
	             <td width='300'>
	             <input type='text' id='goodsSn' name='goodsSn' class="form-control wst-ipt" value='<?php echo ($object["goodsSn"]); ?>' maxLength='25'/>
	             </td>
	             <td rowspan='7' valign='top'>
	               <div id="preview_Filedata">
		           <img id='goodsImgPreview' src='<?php if($object['goodsImg'] =='' ): ?>/<?php echo ($CONF['goodsImg']); else: ?>/<?php echo ($object['goodsImg']); endif; ?>' height='152'/><br/>
	               </div>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品名称<font color='red'>*</font>：</th>
	             <td><input type='text' id='goodsName' name='goodsName' class="form-control wst-ipt" value='<?php echo ($object["goodsName"]); ?>' maxLength='100'/></td>
	           </tr>
	            <tr>
	             <th width='120'>市场价格<font color='red'>*</font>：</th>
	             <td>
	             	<input type='text' id='marketPrice' name='marketPrice' class="form-control wst-ipt" value='<?php echo ($object["marketPrice"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='10'/>
	             </td>
	           </tr>
	            <tr>
	             <th width='120'>店铺价格<font color='red'>*</font>：</th>
	             <td>
	             	<?php if($object["recommPrice"] > 0): ?><input type='text' id='shopPrice' name='shopPrice' disabled="disabled" class="form-control wst-ipt" value='<?php echo ($object["recommPrice"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='10'/>
	             	<?php else: ?>
	             		<input type='text' id='shopPrice' name='shopPrice' class="form-control wst-ipt" value='<?php echo ($object["shopPrice"]); ?>' onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='10'/><?php endif; ?>
	             	
	             </td>
	           </tr>
	            <tr>
	             <th width='120'>商品库存<font color='red'>*</font>：</th>
	             <td><input type='text' id='goodsStock' name='goodsStock' class="form-control wst-ipt" value='<?php echo ($object["goodsStock"]); ?>' onkeypress="return WST.isNumberKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength='25' <?php if(count($object['priceAttrs']) > 0 ): ?>disabled<?php endif; ?> /></td>
	           </tr>
	           <tr>
	             <th width='120'>单位<font color='red'>*</font>：</th>
	             <td><input type='text' id='goodsUnit' name='goodsUnit' class="form-control wst-ipt" value='<?php echo ($object["goodsUnit"]); ?>'  maxLength='25'/></td>
	           </tr>
	           <tr>
	             <th width='120'>商品SEO关键字：</th>
	             <td colspan='3'>
	             <input type='text' style="width:788px" id='goodsKeywords' name='goodsKeywords' value='<?php echo ($object["goodsKeywords"]); ?>' maxlength="100">
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品信息：</th>
	             <td colspan='3'>
	             <textarea rows="2" style="width:788px" id='goodsSpec' name='goodsSpec'><?php echo ($object["goodsSpec"]); ?></textarea>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品状态<font color='red'>*</font>：</th>
	             <td colspan='3'>
	             <label>
	             <input type='radio' id='isSale1' name='isSale' <?php if($object['isSale'] ==1 ): ?>checked<?php endif; ?> value='1'/>上架
	             </label>
	             <label>
	             <input type='radio' id='isSale0' name='isSale' <?php if($object['isSale'] ==0 ): ?>checked<?php endif; ?> value='0'/>下架
	             </label>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品属性：</th>
	             <td colspan='3'>
	             <label>
	             <input type='checkbox' id='isRecomm' name='isRecomm' <?php if($object['isRecomm'] ==1 ): ?>checked<?php endif; ?> value='1'/>推荐
	             </label>
	             <label>
	             <input type='checkbox' id='isBest' name='isBest' <?php if($object['isBest'] ==1 ): ?>checked<?php endif; ?> value='1'/>精品
	             </label>
	             <label>
	             <input type='checkbox' id='isNew' name='isNew' <?php if($object['isNew'] ==1 ): ?>checked<?php endif; ?> value='1'/>新品
	             </label>
	             <label>
	             <input type='checkbox' id='isHot' name='isHot' <?php if($object['isHot'] ==1 ): ?>checked<?php endif; ?> value='1'/>热销
	             </label>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商城分类<font color='red'>*</font>：</th>
	             <td colspan='3'>
	             <select id='goodsCatId1' onchange='javascript:getCatListForEdit("goodsCatId2",this.value,0)'>
	                <option value=''>请选择</option>
	                <?php if(is_array($goodsCatsList)): $i = 0; $__LIST__ = $goodsCatsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo['catId']); ?>' <?php if($object['goodsCatId1'] == $vo['catId'] ): ?>selected<?php endif; ?>><?php echo ($vo['catName']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	             </select>
	             <select id='goodsCatId2' onchange='javascript:getCatListForEdit("goodsCatId3",this.value,1);'>
	                <option value=''>请选择</option>
	             </select>
	             <select id='goodsCatId3'>
	                <option value=''>请选择</option>
	             </select>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>本店分类<font color='red'>*</font>：</th>
	             <td colspan='3'>
	             <select id='shopCatId1' onchange='javascript:getShopCatListForEdit(this.value,"<?php echo ($object['shopCatId2']); ?>")'>
	                <option value='0'>请选择</option>
	                <?php if(is_array($shopCatsList)): $i = 0; $__LIST__ = $shopCatsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo['catId']); ?>' <?php if($object['shopCatId1'] == $vo['catId'] ): ?>selected<?php endif; ?>><?php echo ($vo['catName']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	             </select>
	             <select id='shopCatId2'>
	                <option value='0'>请选择</option>
	             </select>
	             </td>
	           </tr>
	           <tr>
	             <th width='120' align='right'>品牌：</th>
	             <td>
	             <select id='brandId' dataVal='<?php echo ($object["brandId"]); ?>'>
	                <option value='0'>请选择</option>
	             </select>
	             </td>
	           </tr>
	           <tr>
	             <th width='120'>商品描述<font color='red'>*</font>：</th>
	             <td colspan='3'>
	             <textarea rows="2" cols="60" id='goodsDesc' name='goodsDesc'><?php echo ($object["goodsDesc"]); ?></textarea>
	             </td>
	           </tr>
	           <tr>
	             <td colspan='3' style='padding-left:320px;'>
	                 <button class='wst-btn-query' type="submit">保&nbsp;存</button>
	                 <?php if($umark !='toEdit' ): ?><button class='wst-btn-query' type="button" onclick='javascript:location.href="/index.php/Home/Goods/<?php echo ($umark); ?>"'>返&nbsp;回</button><?php endif; ?>
	             </td>
	           </tr>
	        </table>
	        </form>
	      </div>
	     
	      <div class='wst-tab-item'>
	      商品类型：<select id='attrCatId' onchange='javascript:getAttrList(this.value)'>
	         <option value='0'>请选择</option>
	         <?php if(is_array($attributeCatsCatsList)): $i = 0; $__LIST__ = $attributeCatsCatsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["catId"]); ?>' <?php if($object['attrCatId'] == $vo['catId'] ): ?>selected<?php endif; ?>><?php echo ($vo["catName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	      </select>
	      <div>
	        <fieldset id='priceContainer' class='wst-goods-fieldset' <?php if(count($object['priceAttrs']) > 0): ?>style='display:block'<?php endif; ?>>
			    <legend>价格类型</legend>
			    <input type='hidden' class="hiddenPriceAttr" dataId='<?php echo ($object["priceAttrId"]); ?>' dataNo="<?php echo (count($object['priceAttrs'])); ?>" value='<?php echo ($object["priceAttrName"]); ?>'/>
			    <table class="wst-form wst-goods-price-table">
	             <thead><tr><th>属性</th><th>规格</th><th>价格</th><th>推荐</th><th>库存</th><th>操作</th></tr></thead>
	             <tbody id="priceConent">
	             <?php if(is_array($object['priceAttrs'])): $i = 0; $__LIST__ = $object['priceAttrs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		              <td style="text-align:right"><?php echo ($vo['attrName']); ?>：</td>
		              <td><input type="text" id="price_name_<?php echo ($vo['attrId']); ?>_<?php echo ($i); ?>" value="<?php echo ($vo['attrVal']); ?>"/></td>
		              <td><input type="text" id="price_price_<?php echo ($vo['attrId']); ?>_<?php echo ($i); ?>" value="<?php echo ($vo['attrPrice']); ?>" onblur="checkAttPrice(<?php echo ($vo['attrId']); ?>,<?php echo ($i); ?>);" onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength="10"/></td>
		              <td><input type="radio" id="price_isRecomm_<?php echo ($vo['attrId']); ?>_<?php echo ($i); ?>" name="price_isRecomm" onclick="checkAttPrice(<?php echo ($vo['attrId']); ?>,<?php echo ($i); ?>);" <?php if($vo['isRecomm'] == 1): ?>checked<?php endif; ?>/></td>
		              <td><input type="text" id="price_stock_<?php echo ($vo['attrId']); ?>_<?php echo ($i); ?>" onblur="getTstock();" value="<?php echo ($vo['attrStock']); ?>" onblur="javascript:statGoodsStaock()" onkeypress="return WST.isNumberdoteKey(event)" onkeyup="javascript:WST.isChinese(this,1)" maxLength="10"/></td>
		              <td>
		              <?php if($i == 1): ?><a title="新增" class="add btn" href="javascript:addPriceAttr()"></a>
		              <?php else: ?>
		              <a title="删除" class="del btn" href="javascript:delPriceAttr(<?php echo ($i); ?>)"></a><?php endif; ?>
		              </td>
		           </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	             </tbody>
	            </table>
			</fieldset>
			<fieldset id='attrContainer' class='wst-goods-fieldset' <?php if(count($object['attrs']) > 0): ?>style='display:block'<?php endif; ?>>
			    <legend>属性类型</legend>
			    <table class="wst-form" style='width:100%'>
	              <tbody id='attrConent'>
	              <?php if(is_array($object['attrs'])): $i = 0; $__LIST__ = $object['attrs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		              <td style="width:80px;text-align:right" nowrap><?php echo ($vo['attrName']); ?>：</td>
		              <td>
		              <?php if($vo['attrType']==0){ ?>
		              <input type="text" style='width:70%;' class="attrList" id="attr_name_<?php echo ($vo['attrId']); ?>_<?php echo ($i); ?>" value="<?php echo ($vo['attrVal']); ?>" dataId="<?php echo ($vo['attrId']); ?>"/>
		              <?php }else if($vo['attrType']==2){ ?>
		              <select class="attrList" id="attr_name_<?php echo ($vo['attrId']); ?>_<?php echo ($i); ?>" dataId="<?php echo ($vo['attrId']); ?>">
		              <?php if(is_array($vo['opts']['txt'])): $i = 0; $__LIST__ = $vo['opts']['txt'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attrvo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($attrvo); ?>' <?php if($attrvo == $vo['attrVal']): ?>selected<?php endif; ?> ><?php echo ($attrvo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		              </select>
		              <?php }else if($vo['attrType']==1){ ?>
		              <input type='hidden' class="attrList" dataId='<?php echo ($vo['attrId']); ?>' dataType="1"/>
		              <?php if(is_array($vo['opts']['txt'])): $i = 0; $__LIST__ = $vo['opts']['txt'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attrvo): $mod = ($i % 2 );++$i;?><label><input type='checkbox' name="attrTxtChk_<?php echo ($vo['attrId']); ?>" value="<?php echo ($attrvo); ?>" <?php if($vo['opts']['val'][$attrvo] == 1): ?>checked<?php endif; ?>/><?php echo ($attrvo); ?></label>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
		              <?php } ?>
		              </td>
		             </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	              </tbody>
	            </table>
			</fieldset>
			<div style='width:100%;text-align:center;'>
			<button class='wst-btn-query' type="button" onclick='javascript:$("#myform").submit()'>保&nbsp;存</button>
	        <?php if($umark !='toEdit' ): ?><button class='wst-btn-query' type="button" onclick='javascript:location.href="/index.php/Home/Goods/<?php echo ($umark); ?>"'>返&nbsp;回</button><?php endif; ?>
			</div>
	      </div>
	      </div>
	      
	      <!-- 相册 -->
	      <div class='wst-tab-item'>
	       <div id='galleryImgs' class='wst-gallery-imgs'>
           <div id="tt"></div>
               <?php if(count($object['gallery']) == 0): ?><div id="wrapper">
                           <div id="container">
            <!--头部，相册选择和格式选择-->
                              <div id="uploader">
                               <div class="queueList">
                                   <div id="dndArea" class="placeholder">
                                      <div id="filePicker"></div>
                                      </div>
                                   <ul class="filelist"></ul>
                               </div>
                             <div class="statusBar" style="display:none">
                               <div class="progress">
                                    <span class="text">0%</span>
                                    <span class="percentage"></span>
                               </div>
                                    <div class="info"></div>
                               <div class="btns">
                                 <div id="filePicker2" class="webuploader-containe webuploader-container"></div><div class="uploadBtn state-finish">开始上传</div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
               <?php else: ?>
               	<div id="wrapper">
                       <div id="container">
                          <div id="uploader">
                             <div class="queueList">
                                 <div id="dndArea" class="placeholder element-invisible">
                                    <div id="filePicker" class="webuploader-container"></div>
                                    </div>
                                 <ul class="filelist">
                                 	<?php if(is_array($object['gallery'])): $i = 0; $__LIST__ = $object['gallery'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="border: 1px solid rgb(59, 114, 165)" order="100" onmouseover="imglimouseover(this)" onmouseout="imglimouseout(this)">
	                                 		<input type="hidden" class="gallery-img" iv="<?php echo ($vo["goodsThumbs"]); ?>" v="<?php echo ($vo["goodsImg"]); ?>" />
	                                 		<img width="152" height="152" src="/<?php echo ($vo["goodsThumbs"]); ?>"><span class="setdef" style="display:none">默认</span><span class="setdel" onclick="imglidel(this)" style="display:none">删除</span>
                                 		</li><?php endforeach; endif; else: echo "" ;endif; ?>
                                 </ul>
                            </div>
                            <div class="statusBar" style="">
                               <div class="progress">
                                    <span class="text"></span>
                                    <span class="percentage"></span>
                               </div>
                               <div class="info"></div>
                               <div class="btns">
                                  <div id="filePicker2" class="webuploader-containe webuploader-container"></div>
                                  <div class="uploadBtn state-finish">开始上传</div>
                               </div>
                            </div>
                        </div>
                    </div>
                 </div><?php endif; ?>
	       </div>
              <div style='clear:both;'></div>
	      </div>
	      
       </div>
       </div>
       
    </div>
    <div style='clear:both;'></div>
</div>