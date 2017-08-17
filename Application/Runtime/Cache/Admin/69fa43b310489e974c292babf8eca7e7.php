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



<title>我的桌面</title>
</head>
<body>
<div style="float: right"><iframe width="420" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=5&site=12"></iframe></div>

<div class="page-container">
	<table class="table table-border table-bordered table-bg">
		<thead>
		<tr>
			<th colspan="7" scope="col">信息统计</th>
		</tr>
		<tr class="text-c">
			<th>统计</th>
			<th>总计新闻</th>
			<th>未审核</th>
			<th>通过审核</th>
			<th>未通过审核</th>
		</tr>
		</thead>
		<tbody>
		<tr class="text-c">
			<td>支队长新闻</td>
			<td><?php echo ($total["id"]); ?></td>
			<td><?php echo ($nopass["id"]); ?></td>
			<td><?php echo ($pass["id"]); ?></td>
			<td><?php echo ($fail["id"]); ?></td>
		</tr>
		<tr class="text-c">
			<td>地区新闻</td>
			<td><?php echo ($ltotal["id"]); ?></td>
			<td><?php echo ($lnopass["id"]); ?></td>
			<td><?php echo ($lpass["id"]); ?></td>
			<td><?php echo ($lfail["id"]); ?></td>
		</tr>
		<tr class="text-c">
			<td>支队长信箱</td>
			<td><?php echo ($lmsg["id"]); ?></td>
			<td><?php echo ($lmsgnopass["id"]); ?></td>
			<td><?php echo ($lmsgpass["id"]); ?></td>
			<td><?php echo ($lmsgfail["id"]); ?></td>
		</tr>
		<tr class="text-c">
			<td>政委信箱</td>
			<td><?php echo ($zlmsg["id"]); ?></td>
			<td><?php echo ($zlmsgnopass["id"]); ?></td>
			<td><?php echo ($zlmsgpass["id"]); ?></td>
			<td><?php echo ($zlmsgfail["id"]); ?></td>
		</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
		<tr>
			<th colspan="2" scope="col">服务器信息</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<th width="30%">服务器计算机名</th>
			<td><span id="lbServerName"><?php echo ($_SERVER['SERVER_NAME']); ?>/</span></td>
		</tr>
		<tr>
			<td>操作系统</td>
			<td>{PHP_OS}</td>
		</tr>
		<tr>
			<td>运行环境</td>
			<td><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></td>
		</tr>
		<tr>
			<td>当前登录时间</td>
			<td><?php echo date('Y年m月d日 H时i分s秒')?></td>
		</tr>
		<tr>
			<td>服务器域名/IP </td>
			<td><?php echo ($_SERVER['SERVER_NAME']); ?> <?php echo ($_SERVER['SERVER_ADDR']); ?></td>
		</tr>

		<tr>
			<td>Host </td>
			<td><?php echo ($_SERVER['SERVER_ADDR']); ?></td>
		</tr>
		</tbody>
	</table>


</div>
<footer class="footer mt-20">
	<div class="container">
		<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
			Copyright &copy;2015-2017 H-ui.admin v3.0 All Rights Reserved.  <a href="http://www.mycodes.net/" target="_blank">周口师范学院</a><br>
			本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">周口师范学院</a>提供前端技术支持</p>
	</div>
</footer>
<script type="text/javascript" src="/news/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
</body>
</html>