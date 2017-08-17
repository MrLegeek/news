<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新闻列表</title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/header_footer.css" />
    <link rel="stylesheet" type="text/css" href="/news/Application/Home/View/Layout/news_list.css" />

    <link rel="stylesheet" href="/news/Application/Home/View/Layout/page.css"/>
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
    <div class="newsist">
        <div   class="biaolan">
            <div  class="biaolan_div">
                <a href="<?php echo U('Index/index');?>" style="color: #3389DE;font-weight: bold">主页</a>>>
                <a href="#"  style="color: #3389DE;font-weight: bold"><?php echo ($catemsgAll["cate_name"]); ?></a>
            </div>
        </div>
        <div class="content">
            <div class="content_left">
                <!--<div  class="content_left_nav"><?php echo ($catemsgAll["cate_name"]); ?></div>-->
                <div  class="content_left_content" >
                    <ul>
                        <?php if(is_array($newsmsg)): foreach($newsmsg as $key=>$vo): ?><li>
                            <img src="/news/Public/Home/imgs/xinxiang.png"/><a href="<?php echo U('Detail/detail',array('id'=>$vo['id']));?>"><?php echo (mb_substr($vo["title"],0,40,'utf-8')); ?>...</a>
                            <span>【<?php echo date('m-d',$vo['add_time']);?>】</span>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <span  class="pages" style="margin-right: 20px;float: right"> <?php echo ($pagelist); ?> </span>
            </div>
            <div class="content_right">
                <div class="box">
                    <!--频道开始-->
                    <div class="box_top">
                        <table width="100%"    border="0" cellspacing="0" cellpadding="0"  valign="middle">
                            <tr>
                                <td width="100%"><div class="center_top2_4">栏目导航
                                </div></td>
                                <td width="100%">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    <div class="box_content">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" >
                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'8'));?>" target='_self'>支队动态</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'17'));?>" target='_self'>灭火救援</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'16'));?>" target='_self'>媒体报道</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>

                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>
                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'7'));?>" target='_self'>消防要闻</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'22'));?>" target='_self'>警营文化</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'18'));?>" target='_self'>调研文章</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>

                            </tr>

                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'19'));?>" target='_self'>感悟消防</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td width="34"><div align="center"><img src="/news/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                                <td height="29"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'23'));?>" target='_self'>时政要闻　</a></td>
                                <td width="7">&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="1" colspan="2" background="/news/Public/Home/imgs/jt.png"></td>
                            </tr>

                            <tr>
                                <td height="2"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </TABLE>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--footer引入-->
        <div class="bottom">
    <div class="zi">
        Copyright (C) 2015 All Rights Reserved. 版权所有 河南消防总队  &nasp;&nasp; &nasp;&nasp;

            <a href="http://localhost:8080/news/index.php/Admin/Index/index.html" > 管理员登陆</a>
        <br/>
        联系地址：河南省郑州市福元路158号   联系电话：0371-66615111
    </div>
</div>

    </div>

</body>
</html>

<script language="JavaScript">
    function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
    {
        var arVersion = navigator.appVersion.split("MSIE")
        var version = parseFloat(arVersion[1])
        if ((version >= 5.5) && (document.body.filters))
        {
            for(var j=0; j<document.images.length; j++)
            {
                var img = document.images[j]
                var imgName = img.src.toUpperCase()
                if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
                {
                    var imgID = (img.id) ? "id='" + img.id + "' " : ""
                    var imgClass = (img.className) ? "class='" + img.className + "' " : ""
                    var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
                    var imgStyle = "display:inline-block;" + img.style.cssText
                    if (img.align == "left") imgStyle = "float:left;" + imgStyle
                    if (img.align == "right") imgStyle = "float:right;" + imgStyle
                    if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
                    var strNewHTML = "<span " + imgID + imgClass + imgTitle
                            + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
                            + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
                            + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
                    img.outerHTML = strNewHTML
                    j = j-1
                }
            }
        }
    }
    window.attachEvent("onload", correctPNG);
</script>