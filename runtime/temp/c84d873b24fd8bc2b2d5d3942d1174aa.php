<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:51:"./application/admin/view2/user\editWithdrawals.html";i:1499420862;s:44:"./application/admin/view2/public\layout.html";i:1499420862;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="__PUBLIC__/static/css/main.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/css/page.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/static/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="__PUBLIC__/static/font/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/static/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<script type="text/javascript" src="__PUBLIC__/static/js/admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/common.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/js/jquery.mousewheel.js"></script>
<script src="__PUBLIC__/js/myFormValidate.js"></script>
<script src="__PUBLIC__/js/myAjax2.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
						layer.closeAll();
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
						layer.closeAll();
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);	
    }
</script>  

</head>
<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
            <div class="subject">
                <h3>财务管理 - 提现申请</h3>
                <h5>网站系统财务管理提现申请</h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="editForm" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
        <input type="hidden" id="status" name="status" value="<?php echo $data[status]; ?>">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label>用户id</label>
                </dt>
                <dd class="opt">
                    <a class="open" href="<?php echo U('Admin/user/detail',array('id'=>$data[user_id])); ?>" target="blank">
                        <?php echo $data[user_id]; ?><i class="fa fa-external-link " title="新窗口打开"></i>
                    </a>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>用户名</label>
                </dt>
                <dd class="opt"><?php echo $data['user_name']; ?></dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>用户平台余额</label>
                </dt>
                <dd class="opt"><strong class="red"><?php echo $user['user_money']; ?></strong>元</dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>申请提现金额</label>
                </dt>
                <dd class="opt"><strong class="red"><?php echo $data['money']; ?></strong>元</dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>申请提现银行</label>
                </dt>
                <dd class="opt"><?php echo $data['bank_name']; ?></dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>银行账号</label>
                </dt>
                <dd class="opt"><?php echo $data['account_bank']; ?></dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>银行账户名</label>
                </dt>
                <dd class="opt"><?php echo $data['account_bank']; ?></dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>申请时间</label>
                </dt>
                <dd class="opt"><?php echo date("Y-m-d H:i",$data['create_time']); ?></dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>状态</label>
                </dt>
                <dd class="opt">
                    <?php if($data[status] == 0): ?>申请中<?php endif; if($data[status] == 1): ?>申请成功<?php endif; if($data[status] == 2): ?>申请失败<?php endif; ?>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">备注</dt>
                <dd class="opt">
                    <textarea class="input-txt" rows="4" cols="60" id="remark" name="remark"><?php echo $data['remark']; ?></textarea>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>提现流程</label>
                </dt>
                <dd class="opt">
                    1:用户前台申请提现<br/>
                    2:管理员审核生成转账记录 ( 生成时自动扣除用户平台余额 ) <br/>
                    3:财务转账给用户<br/>
                    或 2 , 3步可以调换,先转账后生成记录.<br/>
                </dd>
            </dl>
            <div class="bot">
                <?php if(in_array($data[status],array(0,2))): ?>
                    <a href="JavaScript:void(0);" onclick="confirm_withdrawals();" class="ncap-btn-big ncap-btn-green">去生成转账记录</a>
                <?php endif; if($data[status] == 0): ?>
                    <a href="JavaScript:void(0);" onclick="cancel_withdrawals();" class="ncap-btn-big ncap-btn-green">拒绝提现</a>
                <?php endif; if($data[status] == 1): ?>
                    <a href="JavaScript:void(0);" onclick="$('#editForm').submit();" class="ncap-btn-big ncap-btn-green">修改备注</a>
                <?php endif; ?>

            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    // 确定提现
    function confirm_withdrawals()
    {
        if ($.trim($('#remark').val()).length == 0) {
            layer.alert('请填写转账备注', {icon: 2});
            return false;
        }
        layer.confirm('确定将从平台扣除用户余额￥<?php echo $data['money']; ?>,确定吗?', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    // 确定
                    $('#status').val('1');
                    $('#editForm').submit();
                }, function (index) {
                    layer.close(index);
                }
        );
    }
    // 拒绝提现
    function cancel_withdrawals() {
        if ($.trim($('#remark').val()).length == 0) {
            layer.alert('请填写拒绝备注', {icon: 2});
            return false;
        }
        layer.confirm('确定要拒绝用户提现吗?', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    // 确定
                    $('#status').val('2');
                    $('#editForm').submit();
                }, function (index) {
                    layer.close(index);
                }
        );

    }
</script>
</body>
</html>