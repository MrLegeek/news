<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>已发稿件列表</title>
    <style>
        body{background-color: rgb(204,232,207);}
        .yfgj{border:0px solid red;width: 1100px;margin:  0 auto;    height: 40px;   background-color: gainsboro;font-size: 20px;font-weight: bold;line-height: 40px}
        .lbxq{ width: 1100px; height: 750px ;border: 1px solid  gray;margin: 0 auto }
        .lbtb{width: 100%; height: 600px;border: 1px solid  gainsboro}
        .lbtb  table{width: 100%; height: auto;  background-color: gainsboro;}
        .lbtb table  ,tr ,td  ,th{border-collapse: collapse; border: 2px solid #ffffff;text-align: center}
        .lbtb .lbtb_tr_nav{background-color: darkgrey;height:45px }
        .lbtb  .lbtb_td{width:auto;height: 25px}
        .lbrbcenter{width: 100%;height: 30px;border: 1px solid  gainsboro;margin-top: 10px}
        .lbrbcenter_l{width: 45%;height:30px;border: 0px solid  burlywood;float: left;text-align: center;font-size: 15px;line-height: 30px}
        .lbrbcenter_r{width: 38%;height: 30px;border: 0px solid  green;float: right}
        .lbrbcenter_r  a{color: darkgray;font-size: 15px;line-height: 30px;margin-left: 10px;text-decoration: none}
        .lbrbcenter_r span{font-size: 15px;margin-left: 10px}
        .lbrbcenter_r input{width: 16px;height: 12px;border: 1px solid  gray}
        .lbrbcenter_r a img{width: 25px;border: 0px}
        .lbbottom{border: 0px solid  red;height: 28px;margin-top: 10px;position: relative}
        .lbbottom .rqcj{height: 25px;border:0px solid  red;width: 40%;position: absolute;top: 1px;right: 10px}
        .lbbottom input,.lbbottom select{border: 1px solid  darkgray;}

    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
    <link href="css/lyz.calendar.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="/news/Application/Home/View/Layout/page.css"/>

    <script src="http://www.jq22.com/jquery/1.4.4/jquery.min.js"></script>


    <script src="js/lyz.calendar.min.js" type="text/javascript"></script>



    <script>

        $(function () {

            $("#txtBeginDate").calendar({

                controlId: "divDate",                                 // 弹出的日期控件ID，默认: $(this).attr("id") + "Calendar"

                speed: 200,                                           // 三种预定速度之一的字符串("slow", "normal", or "fast")或表示动画时长的毫秒数值(如：1000),默认：200

                complement: true,                                     // 是否显示日期或年空白处的前后月的补充,默认：true

                readonly: true,                                       // 目标对象是否设为只读，默认：true

                upperLimit: new Date(),                               // 日期上限，默认：NaN(不限制)

                lowerLimit: new Date("2011/01/01"),                   // 日期下限，默认：NaN(不限制)

                callback: function () {                               // 点击选择日期后的回调函数

                    alert("您选择的日期是：" + $("#txtBeginDate").val());

                }

            });

            $("#txtEndDate").calendar();

        });

    </script>
</head>
<body>
<!--头部开始-->
<div class="top">

    <!--头部导航栏开始-->
    
<link rel="stylesheet" href="/news/Public/Home/css/common.css">
<script type="text/javascript" src="/news/Public/Home/js/1.7.1.min.js"></script>
        <style>
            .top_bj img{width: 100%;height: 153px}
        </style>
<!--头部标题图开始-->
<div class="top_bj">
    <div class="banner">

        <!--ad end-->
        <div class="flash">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="520" height="180"
                    style="position:absolute; right:0px; bottom:0px;">
                <param name="movie" value="/news/Public/Home/images/xf.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="11.0.0.0" />
                <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="/news/Public/Home/images/xf.swf" width="520" height="180">
                    <!--<![endif]-->
                    <param name="quality" value="high" />
                    <param name="wmode" value="transparent" />
                    <param name="swfversion" value="11.0.0.0" />
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
                    <div>
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
                    </div>
                    <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
        <!--flash end-->
    </div>
    <!--banner end-->
</div>
<!--头部标题图结束-->
<!--头部导航栏开始-->
<div class="nav">
    <div  class="nav_menus">
        <div class="nav_buju">
            <ul>
                <li><a href="<?php echo U('Index/index');?>">首页</a></li>

                <li><a href="<?php echo U('Organization/index',array('id'=>'1'));?>">组织机构</a></li>
                <li><a href="#">法律法规</a></li>
                <li><a href="<?php echo U('Lmsg/lmsg_list',array('type'=>'0'));?>">支队长信箱</a></li>
                <li><a href="<?php echo U('Lmsg/lmsg_list',array('type'=>'1'));?>">政委信箱</a></li>
                <li><a href="/news<?php echo ($upload_url["upload_url"]); ?>">通信手册</a></li>
                <li><a href="<?php echo U('File/file_list');?>">下载中心</a></li>
                <li><a href="#">数据传输</a></li>
                <li><a href="<?php echo U('Video/video_list');?>">视频点播</a></li>
                <li><a href="<?php echo U('OfficeSys/index');?>">办公系统</a></li>
                <li><a href="<?php echo U('UserCenter/index');?>">在线投稿</a></li>
                <li><a href="#">旧版网站</a></li>
                <li><a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://10.62.227.101');">设为首页</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    function SetHomePage() {
        if (document.all) {
            document.body.style.behavior = 'url(#default#homepage)';
            document.body.setHomePage('http://www.qq.com');
        }
        else if (window.sidebar) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("该操作被浏览器拒绝，如果想启用该功能，请在地址栏内输入 about:config,然后将项 signed.applets.codebase_principal_support 值该为true");
                }
            }
            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
            prefs.setCharPref('browser.startup.homepage', 'http://www.qq.com');
        }
    }
</script>


<SCRIPT>
    var NowFrame = 1;
    var MaxFrame = 3;
    var bStart = 0;
    function fnToggle() {
        var next = NowFrame + 1;
        if(next == MaxFrame+1)
        {
            NowFrame = MaxFrame;
            next = 1;
        }
        if(bStart == 0)
        {
            bStart = 1;

            setTimeout('fnToggle()', 1000);
            return;
        }
        else
        {
            $("#oTransContainer").filters[0].Apply();
            document.images['oDIV'+next].style.display = "";
            document.images['oDIV'+NowFrame].style.display = "none";
            $("#oTransContainer").filters[0].Play(duration=5);
            if(NowFrame == MaxFrame)
                NowFrame = 1;
            else
                NowFrame++;
        } setTimeout('fnToggle()', 6000);
    }
    fnToggle();
</SCRIPT>
<!--头部导航栏结束-->
    <!--头部导航栏结束-->
</div>

<div class="lbxq">
    <div  class="yfgj"> 已发稿件列表</div>
    <div class="lbtb">
        <table  >
            <tr class="lbtb_tr_nav">
                <th class="lbtb_td">标题</th>
                <th class="lbtb_td">投稿单位</th>
                <th class="lbtb_td">录用站点</th>
                <th class="lbtb_td">发布时间</th>
                <th class="lbtb_td">稿件状态</th>
                <!--<th class="lbtb_td5">录用栏目</th>-->
            </tr>
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="lbtb_tr" style="height: 25px">
                    <td class="lbtb_td"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?>...</td>
                    <td class="lbtb_td"><?php echo (session('local_name')); ?></td>
                    <td class="lbtb_td"><?php echo ($vo["role_name"]); ?></td>
                    <td class="lbtb_td"><?php echo date('Y-m-d',$vo['add_time']);?></td>
                    <td class="lbtb_td">
                        <?php switch($vo['status']): case "1": ?>审核通过<?php break;?>
                            <?php case "2": ?>审核不通过<?php break;?>
                            <?php case "3": ?>已审核,已回复<?php break;?>
                            <?php default: ?>审核中<?php endswitch;?>
                    </td>
                    <!--<td class="lbtb_td5">政治工作</td>-->
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <span  class="pages" style="margin-right: 20px;float: right"> <?php echo ($pagelist); ?> </span>
    </div>
    <div class="lbrbcenter">
        <div class="lbrbcenter_l">
            <!--共81条记录  第1页/共9页  10项/页-->
        </div>
        <div class="lbrbcenter_r">

        </div>
    </div>
    <!--<div class="lbbottom">-->
        <!--<form action="" method="post" >-->
            <!--<select style="width: 60px;margin: 0  10px;background-color: rgb(204,232,207);"  >-->
                <!--<option value="总站">总站</option>-->
                <!--<option value="旅游">旅游</option>-->
                <!--<option value="运动">运动</option>-->
                <!--<option value="购物">购物</option>-->
            <!--</select>-->
            <!--<select   style="width: 200px;margin: 0  10px;background-color: rgb(204,232,207);" >-->
                <!--<option  selected>&#45;&#45;&#45;&#45;请选择稿件类别&#45;&#45;&#45;&#45;</option>-->
                <!--<option  selected>-&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;</option>-->
                <!--<option value="旅游">旅游</option>-->
                <!--<option value="运动">运动</option>-->
                <!--<option value="购物">购物</option>-->
            <!--</select>-->

            <!--内容：<input   style="background-color: rgb(204,232,207);margin-left: 20px" type="text">-->

            <!--<div  class="rqcj">-->

                <!--<input id="txtBeginDate" value="2017-04-25" style="background-color: rgb(204,232,207)" />-->

                <!--&#45;&#45;  <input id="txtEndDate" value="2017-08-03"style="background-color: rgb(204,232,207)" />-->
                <!--<input  type="button"  value="查询">-->
            <!--</div>-->

        <!--</form>-->
    <!--</div>-->
</div>
<!--footer引入-->
<div class="bottom">
    <div class="zi">
        Copyright (C) 2015 All Rights Reserved. 版权所有 河南消防总队  &nasp;&nasp; &nasp;&nasp;

            <a href="http://localhost:8080/news/index.php/Admin/Index/index.html" > 管理员登陆</a>
        <br/>
        联系地址：河南省郑州市福元路158号   联系电话：0371-66615111
    </div>
</div>

</body>
</html>