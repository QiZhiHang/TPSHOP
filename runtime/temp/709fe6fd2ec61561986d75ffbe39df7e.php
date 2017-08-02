<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:48:"./application/admin/view2/comment\ajaxindex.html";i:1499420862;}*/ ?>
<table>
 	<tbody>
 	<?php if(empty($comment_list) == true): ?>
 		<tr data-id="0">
	        <td class="no-data" align="center" axis="col0" colspan="50">
	        	<i class="fa fa-exclamation-circle"></i>没有符合条件的记录
	        </td>
	     </tr>
	<?php else: if(is_array($comment_list) || $comment_list instanceof \think\Collection || $comment_list instanceof \think\Paginator): $i = 0; $__LIST__ = $comment_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
  	<tr data-id="<?php echo $list['comment_id']; ?>">
        <td class="sign" axis="col0">
          <div style="width: 24px;"><i class="ico-check" ></i></div>
        </td>
        <td align="left" abbr="nickname" axis="col3" class="">
          <div style="text-align: left; width: 100px;" class=""><?php echo $list['username']; ?></div>
        </td>        
        <td align="left" abbr=content axis="col4" class="">
          	<div style="text-align: left; width: 200px;" class=""><?php echo $list['content']; ?></div>
        </td> 
        <td align="center" abbr="article_show" axis="col5" class="" style="white-space: normal;">
            <div style="text-align: left; width: 200px;white-space: normal;height:inherit;line-height: inherit;" class="">
          		<a target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$list[goods_id])); ?>"><?php echo $goods_list[$list[goods_id]]; ?></a>
          	</div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 50px;">
                    <?php if($list[is_show] == 1): ?>
                      <span class="yes" onClick="changeTableVal('Comment','comment_id','<?php echo $list['comment_id']; ?>','is_show',this)" ><i class="fa fa-check-circle"></i>是</span>
                      <?php else: ?>
                      <span class="no" onClick="changeTableVal('Comment','comment_id','<?php echo $list['comment_id']; ?>','is_show',this)" ><i class="fa fa-ban"></i>否</span>
                    <?php endif; ?>
        </div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 120px;" class=""><?php echo date('Y-m-d H:i:s',$list['add_time']); ?></div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
          <div style="text-align: center; width: 120px;" class=""><?php echo $list['ip_address']; ?></div>
        </td>
        <td align="center" abbr="article_time" axis="col6" class="">
               <div style="text-align: center; width: 160px;" class="">
       			<a class="btn green" style="display:"  href="<?php echo U('Admin/comment/detail',array('id'=>$list[comment_id])); ?>"><i class="fa fa-list-alt"></i>查看</a>
       			<a class="btn red"  href="javascript:void(0);" data-href="<?php echo U('Admin/comment/del',array('id'=>$list[comment_id])); ?>" onclick="del('<?php echo $list[comment_id]; ?>',this)" ><i class="fa fa-trash-o"></i>删除</a> 
       		</div>
           </td>
         <td align="" class="" style="width: 100%;">
            <div>&nbsp;</div>
          </td>
      </tr>
      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </tbody>
</table>
<div class="sDiv" style="float:left;margin-top:10px">
        <?php if(empty($comment_list) != true): ?>
        <div class="sDiv2">
        		<select name="operate" id="operate" class="select"> 
			        <option value="0">操作选择</option>
			        <option value="show">显示</option>
			        <option value="hide">隐藏</option>
			        <option value="del">删除</option>
			    </select>
		</div>
        <div class="sDiv2">
			    <input type="button" onclick="op()"  class="btn" value="确定">
			    <form id="op" action="<?php echo U('Comment/op'); ?>" method="post">
			        <input type="hidden" name="selected">
			        <input type="hidden" name="type">
			    </form>
        </div>
        <?php endif; ?>
 </div>
	
<div class="row">
    <div class="col-sm-6 text-left"></div>
    <div class="col-sm-6 text-right"><?php echo $page; ?></div>
</div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        ajax_get_table('search-form2',page);
    }); 
    
    $( 'h5', '.ftitle').empty().html("(共<?php echo $pager->totalRows; ?>条记录)");
   
</script>