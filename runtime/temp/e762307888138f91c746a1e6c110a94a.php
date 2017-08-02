<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"./application/admin/view2/user\withdrawals.html";i:1499420862;s:44:"./application/admin/view2/public\layout.html";i:1499420862;}*/ ?>
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
<script src="__ROOT__/public/static/js/layer/laydate/laydate.js"></script>
<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>会员提现申请记录</h3>
                <h5>网站系统会员提现申请记录索引与管理</h5>
            </div> 
        </div>
    </div>
    <!-- 操作说明 -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
			<li>提现申请流程，1:用户前台申请提现，2:管理员审核生成转账记录 ( 生成时自动扣除用户平台余额 )，3:财务转账给用户或 2 , 3步可以调换,先转账后生成记录</li>
		</ul>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>申请记录列表</h3>
                <h5>(共<?php echo $pager->totalRows; ?>条记录)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" id="search-form" method="get" action="<?php echo U('withdrawals'); ?>" onsubmit="return check_form();">
                <input type="hidden" name="create_time" id="create_time" value="<?php echo $create_time; ?>">
                <div class="sDiv">
                    <div class="sDiv2" style="margin-right: 10px;">
                        <input type="text" size="30" id="start_time" value="<?php echo $start_time; ?>" placeholder="起始时间" class="qsbox">
                        <input type="button" class="btn" value="起始时间">
                    </div>
                    <div class="sDiv2" style="margin-right: 10px;">
                        <input type="text" size="30" id="end_time" value="<?php echo $end_time; ?>" placeholder="截止时间" class="qsbox">
                        <input type="button" class="btn" value="截止时间">
                    </div>
                    <div class="sDiv2" style="margin-right: 10px;border: none;">
                        <select id="status" name="status" class="form-control">
                            <option value="-1">状态</option>
                            <option value="0" <?php if($_REQUEST['status'] === 0): ?>selected<?php endif; ?>>申请中</option>
                            <option value="1" <?php if($_REQUEST['status'] == 1): ?>selected<?php endif; ?>>申请成功</option>
                            <option value="2" <?php if($_REQUEST['status'] == 2): ?>selected<?php endif; ?>>申请失败</option>
                        </select>
                    </div>
                    <div class="sDiv2" style="margin-right: 10px;">
                        <input size="30" id="user_id" name="user_id" value="<?php echo \think\Request::instance()->request('user_id'); ?>" placeholder="用户ID" class="qsbox" type="text">
                    </div>
                    <div class="sDiv2" style="margin-right: 10px;">
                        <input size="30" placeholder="收款账户名" value="<?php echo \think\Request::instance()->request('account_name'); ?>" name="account_name" class="qsbox" type="text">
                    </div>
                    <div class="sDiv2">
                        <input size="30" value="<?php echo \think\Request::instance()->request('account_bank'); ?>" name="account_bank" placeholder="收款账号" class="qsbox" type="text">
                        <input class="btn" value="搜索" type="submit">
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th align="center" abbr="article_title" axis="col3" class="">
                            <div style="text-align: left; width: 50px;" class="">
                                <input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);">全选
                            </div>
                        </th>
                        <th align="center" abbr="article_title" axis="col3" class="">
                            <div style="text-align: center; width: 50px;" class="">申请ID</div>
                        </th>
                        <th align="center" abbr="ac_id" axis="col4" class="">
                            <div style="text-align: center; width: 50px;" class="">用户id</div>
                        </th>
                        <!--<th align="center" abbr="article_show" axis="col5" class="">-->
                            <!--<div style="text-align: center; width: 100px;" class="">用户昵称</div>-->
                        <!--</th>-->
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 80px;" class="">申请时间</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 100px;" class="">申请金额</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 100px;" class="">银行名称</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 100px;" class="">银行账号</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 100px;" class="">银行账户</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="">
                            <div style="text-align: center; width: 120px;" class="">状态</div>
                        </th>
                        <th align="center" axis="col1" class="handle">
                            <div style="text-align: center; width: 150px;">操作</div>
                        </th>
                        <th style="width:100%" axis="col7">
                            <div></div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton">
                    <a onclick="act_submit(1)">
                        <div class="add" title="提现通过">
                            <span><i class="fa fa-check"></i>提现通过</span>
                        </div>
                    </a>
                </div>
                <div class="fbutton">
                    <a onclick="act_submit(2)">
                        <div class="add" title="拒绝提现">
                            <span><i class="fa fa-ban"></i>拒绝提现</span>
                        </div>
                    </a>
                </div>
                <div class="fbutton">
                    <a onclick="act_submit(3)">
                        <div class="add" title="批量删除">
                            <span><i class="fa fa-close"></i>批量删除</span>
                        </div>
                    </a>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td align="left" class="">
                                <div style="text-align: left; width: 50px;">
                                    <?php if($v['status'] == 0): ?><input type="checkbox" name="selected[]" value="<?php echo $v['id']; ?>"><?php endif; ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 50px;">
                                    <?php echo $v['id']; ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 50px;">
                                    <a class="open" href="<?php echo U('Admin/user/detail',array('id'=>$v[user_id])); ?>" target="blank">
                                        <?php echo $v['user_id']; ?><i class="fa fa-external-link " title="新窗口打开"></i>
                                    </a>
                                </div>
                            </td>
                            <!--<td align="center" class="">-->
                                <!--<div style="text-align: center; width: 100px;">-->
                                    <!--<a class="open" href="<?php echo U('Admin/user/detail',array('id'=>$v[user_id])); ?>" target="blank">-->
                                        <!--<?php echo $v['nickname']; ?><i class="fa fa-external-link " title="新窗口打开"></i>-->
                                    <!--</a>-->
                                <!--</div>-->
                            <!--</td>-->
                            <td align="center" class="">
                                <div style="text-align: center; width: 80px;"><?php echo date("Y-m-d",$v['create_time']); ?></div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 100px;"><?php echo $v['money']; ?></div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 100px;"><?php echo $v['bank_name']; ?></div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 100px;"><?php echo $v['account_bank']; ?></div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 100px;">
                                    <?php echo $v['account_name']; ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div style="text-align: center; width: 120px;">
                                    <?php if($v[status] == 0): ?>申请中<?php endif; if($v[status] == 1): ?>申请成功<?php endif; if($v[status] == 2): ?>申请失败<?php endif; ?>
                                </div>
                            </td>
                            <td align="center" class="handle">
                                <div style="text-align: center; width: 170px; max-width:170px;">
                                    <a href="<?php echo U('editWithdrawals',array('id'=>$v['id'],'p'=>$_GET[p])); ?>" class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a>
                                    <?php if(in_array($v[status],array(0,2))): ?>
                                        <a class="btn red"  href="javascript:void(0)" onclick="del('<?php echo $v[id]; ?>')"><i class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td align="" class="" style="width: 100%;">
                                <div>&nbsp;</div>
                            </td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?> </div>
</div>
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        $('#start_time').layDate();
        $('#end_time').layDate();
    });


    // 删除操作
    function del(id)
    {
        layer.confirm('确定要删除吗？', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    // 确定
                    $.ajax({
                        url:"/index.php?m=Admin&c=user&a=delWithdrawals&id="+id,
                        success: function(v){
                            layer.closeAll();
                            var v =  eval('('+v+')');
                            if(v.hasOwnProperty('status') && (v.status == 1))
                                location.href="<?php echo U('Admin/user/withdrawals'); ?>";
                            else
                                layer.msg(v.msg, {icon: 2,time: 1000}); //alert(v.msg);
                        }
                    });
                }, function(index){
                    layer.close(index);
                }
        );
    }
    function check_form(){
        var start_time = $.trim($('#start_time').val());
        var end_time =  $.trim($('#end_time').val());
        if(start_time == '' ^ end_time == ''){
            layer.alert('请选择完整的时间间隔', {icon: 2});
            return false;
        }
        if(start_time !== '' && end_time !== ''){
            $('#create_time').val(start_time+" - "+end_time);
        }
        if(start_time == '' && end_time == ''){
            $('#create_time').val('');
        }

        return true;
    }

    //批量操作提交
    function act_submit(wst) {
        var a = [];
        $('input[name*=selected]').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('少年，请至少选择一项', {icon: 2});
            return;
        }
        $.ajax({
            type: "POST",
            url: "/index.php?m=Admin&c=user&a=withdrawals_update",//+tab,
            data: {id:a,status:wst},
            dataType: 'json',
            success: function (data) {
                if(data.status == 1){
                    layer.alert(data.msg, {
                        icon: 1,
                        closeBtn: 0
                    }, function(){
                        window.location.reload();
                    });
                }else{
                    layer.alert(data.msg, {icon: 2,time: 3000});
                }

            },
            error:function(){
                layer.alert('网络异常', {icon: 2,time: 3000});
            }
        });

    }

</script>
</body>
</html>