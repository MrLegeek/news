<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/news/Public/Admin//favicon.ico" >
<link rel="Shortcut Icon" href="/news/Public/Admin//favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/news/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/news/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/news/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->



<link rel="stylesheet" href="/news/Public/Admin/css/page.css">
<title>新闻列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 新闻管理 <span class="c-gray en">&gt;</span> 新闻列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
	 <div >
		<form method="get" action="/news/index.php/Admin/News/news_list.html">
			<div style="width: 120px; margin-left: 250px" class="formControls col-xs-6 col-sm-1">
			<span class="select-box">
				<select name="cate_name"  class="select"  >
                    <option value="0">栏目分类</option>
					 <?php if(is_array($cateInfo)): foreach($cateInfo as $key=>$vo): ?><option value="<?php echo ($vo["cate_name"]); ?>" <?php if($vo['cate_name'] == I('get.cate_name')): ?>selected<?php endif; ?> ><?php echo ($vo["cate_name"]); ?></option><?php endforeach; endif; ?>
				</select>
				</span>
		    </div>
		<div style="width: 120px;" class="formControls col-xs-6 col-sm-1">
			<span class="select-box">
				<select name="role_name"  class="select" >
                    <option value="0">所在部门</option>
					 <?php if(is_array($roleInfo)): foreach($roleInfo as $key=>$vo): ?><option value="<?php echo ($vo["role_name"]); ?>" id="role_name" <?php if($vo['role_name'] == I('get.role_name')): ?>selected<?php endif; ?>><?php echo ($vo["role_name"]); ?></option><?php endforeach; endif; ?>
				</select>
				</span>
		</div>
		  <input type="text" name="title" value="<?php echo I('get.title'); ?>" id="title" placeholder="按新闻标题查询" style="width:250px" class="input-text">
		<button  class="btn btn-success"  type="submit" ><i class="Hui-iconfont">&#xe665;</i> 搜新闻</button>
		</form>
	</div>

	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l"><a href="javascript:;" onclick="batchDel('/news/index.php/Admin/News/batchDel')" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		<a class="btn btn-primary radius" data-title="添加资讯"  href="<?php echo U('News/news_add');?>"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20">

		<table class="table table-border table-bordered table-bg table-hover  table-responsive"  id="example">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="40">排序</th>
					<th>ID</th>
					<th>标题</th>
					<th>图片</th>
					<th>分类</th>
					<th >添加时间</th>
					<th >添加者</th>
					<th >所在部门</th>
					<th >是否置顶</th>
					<th >是否轮播图</th>
					<th >审核状态</th>
					<th >审核人</th>
					<th >操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($newlist)): foreach($newlist as $key=>$vo): ?><tr class="text-c va-m check-tr">
					<td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name=""></td>
				    <td> <input type="text"  class="input-text" onchange="changeOrder(this,'<?php echo ($vo["id"]); ?>')" value="<?php echo ($vo["sort_id"]); ?>"></td>
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo (mb_substr($vo["title"],0,8,'utf-8')); ?>...</td>
					<td><img src="<?php echo ($vo["news_small_img"]); ?>" style="width: 50px;height: 50px" alt="新闻图片"></td>
					<td><?php echo ($vo["cate_name"]); ?></td>
					<td><?php echo date('Y-m-d H:i:s',$vo['add_time']);?></td>
					<td><?php echo ($vo["author"]); ?></td>
				    <td><?php echo ($vo["role_name"]); ?></td>
					<td><?php if($vo['is_top'] == 1): ?>置顶<?php else: ?> 不置顶<?php endif; ?></td>
					<td><?php if($vo['is_rotaion'] == 1): ?>轮播图<?php else: ?> 不是轮播图<?php endif; ?></td>
				    <td class="td-status">
					   <?php if($vo[status]==0 ): ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='文章预览审核'>审核并查看详情</a>
						   <?php else: ?>
						   <?php if($vo[status]==1): ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='已经审核通过'><span class="label label-success radius">审核通过</span></a>
							   <?php else: ?>
							   <?php if($vo[status]==2 ): ?><a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='审核未通过'><span class="label label-danger radius">审核未通过</span></a>
								   <a  style="text-decoration:none" onclick="replay_msg('回复消息','/news/index.php/Admin/News/replay/id/<?php echo ($vo["id"]); ?>',500,380)" href="javascript:;" title='审核未通过'><span class="label label-danger radius">回复消息</span></a>
								   <?php else: ?>
								   <a  style="text-decoration:none"  href="<?php echo U('Local/local_view',array('id'=>$vo['id']));?>"  title='审核未通过'><span class="label label-danger radius">审核未通过</span></a><?php endif; endif; endif; ?>
				   </td>
				    <td><?php echo ($vo["verifier"]); ?></td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5" href="<?php echo U('News/news_edit',array('id'=>$vo['id']));?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="news_del(this,'/news/index.php/Admin/News/news_del','<?php echo ($vo["id"]); ?>')"title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr><?php endforeach; endif; ?>
			</tbody>
			<tfoot>
			<!--分页显示？-->
			<tr><td textalign="center" cl nowrap="true" colspan="14" height="20"><div class="pages"><?php echo $page; ?></div></td></tr>
			</tfoot>
		</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/news/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"pading":false,
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  //{"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});
//
//function onChange(obj){
//	document.getElementById("select1").value = obj;
//}

//消息回复
function replay_msg(title,url,w,h){
	layer.open({
		title:title,
		type: 2,
		area: [w+'px',h+'px'],
		closeBtn:1,
		shadeClose: true, //点击遮罩关闭
		content: url,
		yes:function (index) {
			location.reload();
		},
		cancel:function(index){
		}
	});
}
/*新闻-删除*/
function news_del(obj,url,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: url,
			data:{id:id},
			dataType: 'json',
			success: function(data){
				if(data!=5){
					layer.msg('该条组织机构新闻不能删除！',{icon:2,time:1000});
				}else {
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}


			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}


//排序
function changeOrder(obj,id){
	var sort_id = $(obj).val();
	//alert(sort_id);
	$.post("/news/index.php/Admin/News/changeOrder",{'id':id,'sort_id':sort_id},function(data){
		if(data){
			layer.msg('排序修改成功!',{icon:6,time:1000});
		}else{
			layer.msg('排序修改失败!!!',{icon:5,time:1000});
		}
	});
}
/*新闻-批量删除*/
function batchDel(url){
	var arr=  new Array();
	var i=0;
	$(".check-tr input[type='checkbox']").each(function () {
		if ($(this).is(':checked')){
			arr[i]=$(this).val();
			i++;
		}
	});
	var la='';
	for (var a=0;a<arr.length;a++){
		la+=arr[a]+',';
	}
	if(la.length>0){
		la=la.substring(0,la.length-1);
		layer.confirm('确认要删除吗？',function(){
			$.ajax({
				type: 'POST',
				url: url,
				data:{id:la},
				success: function(data){
					if(data==1){
						layer.msg('该批量删除中含有组织机构的新闻不能删除!',{icon:2,time:1000});
					}else{
					$(".check-tr input[type='checkbox']").each(function () {
						if ($(this).is(':checked')){
							$(this).parents("tr").remove();
						}
					});
					layer.msg('已删除!',{icon:1,time:1000});
				 }
				}
				,
				error:function(data) {
					layer.msg('删除失败!',{icon:0,time:1000});
					console.log(data.msg);
				}
			});
		});
	}
}
</script> 
</body>
</html>