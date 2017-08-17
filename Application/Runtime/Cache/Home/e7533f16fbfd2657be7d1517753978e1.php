<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php if($_SESSION['zktype']== 0): ?>支队长<?php else: ?>政委<?php endif; ?>留言板</title>
    <style>
        .xinx{width: 1100px;margin: 0  auto;border:0px  solid  red;height: 520px;background-color:rgb(204,232,207);}
        .xinx_nav{width: 95%;height: 50px;margin:0 auto;border: 0px  solid  #000000;}
        /*.xinx_nav a {color: #fff}*/
        .xinx form{width: 800px;height: 600px;margin: 0 auto;margin-top:3%;}
        .xinx1 span{font-size: 20px;}
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
</head>

<body style="background-color: rgb(204,232,207)">
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
   <div  class="xinx">
       <div class="xinx_nav">
           <a href="<?php echo U('Lmsg/lmsg_list');?>" ><img  style="float: left;border: 0 solid #CCE8CF"
               <?php if($_SESSION['zktype']== 0): ?>src="/news/Public/Home/spbf/zdzxx.png">
                   <?php else: ?>   src="/news/Public/Home/spbf/zwxx.png"><?php endif; ?>
           </a>
       </div>
       <form action="<?php echo U('Lmsg/lmsg_add');?>" method="post" enctype="multipart/form-data" id="leave_msg">
            <h5 style="color: red;margin-left: 35%">请注意：留言提交成功后不能修改！！！</h5>
            <div class="xinx1">
                <span>信箱标题：&nbsp;&nbsp;</span>
                <input style="width: 650px;height: 25px" type="text" name="title" id="title" placeholder="请输入信箱标题">
            </div><br>
            <div class="xinx1">
                <span>信箱请输入：</span>
                <textarea name="content" id="content" cols="110" rows="20" placeholder="请输入信箱内容......"></textarea>
            </div>
            <div class="xinx1" style="margin-left: 30%;">
                <button type="submit" value="提交" style="height: 25px;width: 40px;border-radius: 5px;">提交</button>
                <button type="reset" value="重置" style="height: 25px;width: 40px;border-radius: 5px;">重置</button>
                <!--<a href="<?php echo U('Lmsg/lmsg_list');?>"><button value="返回" style="height: 25px;width: 40px;border-radius: 5px;">返回</button></a>-->
            </div>
           <br>
       </form>

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

<script>
    $(function () {
        //表单验证
        $("#leave_msg").submit(function () {
            if($("#title").val()==""){
                alert('请输入留言标题！！');
               return false;
            }else if($("#content").val()==""){
                alert('请输入留言内容！！');
                return false;
            }else {
                return true;
            }
        })
    })
</script>
</body>
</html>