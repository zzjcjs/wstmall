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
</head>
<script>
    function del(id){
        Plugins.confirm({title:'信息提示',content:'您确定要删除该专场吗?',okText:'确定',cancelText:'取消',okFun:function(){
            Plugins.closeWindow();
            Plugins.waitTips({title:'信息提示',content:'正在操作，请稍后...'});
            $.post("<?php echo U('Admin/Brands/del');?>",{id:id},function(data,textStatus){
                var json = WST.toJson(data);
                if(json.status=='1'){
                    Plugins.setWaitTipsMsg({content:'操作成功',timeout:1000,callback:function(){
                        location.reload();
                    }});
                }else{
                    Plugins.closeWindow();
                    Plugins.Tips({title:'信息提示',icon:'error',content:'操作失败!',timeout:1000});
                }
            });
        }});
    }
</script>
<body class='wst-page'>
<div style="padding: 6px;">
    <div class='wst-tbar' style='height:25px;'>
        <form method='post' action='<?php echo U("Admin/Brands/index");?>' autocomplete="off">
            <div style="float:left;width:550px;">
                专场名称：<input type='text' id='brandName' name='brandName' value='<?php echo ($params[brandName]); ?>' autocomplete="off"/>
                <button type="submit" class="btn btn-primary glyphicon glyphicon-search">查询</button>
        </form>
    </div>
    <div style="float:right;width:120px;">
        <?php if(in_array('ppgl_01',$WST_STAFF['grant'])){ ?>
        <a class="btn btn-success glyphicon glyphicon-plus" href="<?php echo U('Admin/MiaGoods/toEditGoodsCollection');?>" style='float:right'>新增</a>
        <?php } ?>
    </div>
    <div style="clear:both;"></div>
</div>
<div class='wst-body'>
    <table class="table table-hover table-striped table-bordered wst-list">
        <thead>
        <tr>
            <th width='30'>序号</th>
            <th width='150'>专场名称</th>
            <th width='80'>专场价格</th>
            <th width="300">专场商品</th>
            <th width='150'>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($object['root'])): $i = 0; $__LIST__ = $object['root'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($vo['cid']); ?></td>
                <td><?php echo ($vo['collection_describe']); ?></td>
                <td><?php echo ($vo['collection_price']); ?></td>
                <td style="height:100px; overflow:hidden;"><?php echo (substr(strip_tags($vo['goods_ids']),0,360)); ?></td>
                <td>
                    <?php if(in_array('ppgl_02',$WST_STAFF['grant'])){ ?>
                    <a class="btn btn-default glyphicon glyphicon-pencil" href="<?php echo U('Admin/MiaGoods/toEditGoodsCollection',array('id'=>$vo['cid']));?>">修改</a>&nbsp;
                    <?php } ?>
                    <?php if(in_array('ppgl_03',$WST_STAFF['grant'])){ ?>
                    <a class="btn btn-default glyphicon glyphicon-trash" onclick="javascript:del(<?php echo ($vo['cid']); ?>)"">刪除</a>
                    <?php } ?>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <tr>
            <td colspan='5' align='center'><?php echo ($Page['pager']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>