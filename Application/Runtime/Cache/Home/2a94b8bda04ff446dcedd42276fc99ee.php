<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8"/>
<head>
    <title>周口市公安消防支队</title>
    <link rel="stylesheet" type="text/css" href="/news/Public/Home/css/index.css" />

</head>

<body >
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

    <!--标语开始-->
    <div class="biaoyu">
        <img src="/news/Public/Home/imgs/biaoyu.jpg"/>
    </div>
    <!--标语结束-->
    <!--公告开始 gongao-->
    <div class="gonggao">
    <div class="gonggao_left">
        <img src="/news/Public/Home/imgs/gonggao.gif"/>
        <style>
            .gonggao_left  span li{float: right;text-align: center}
        </style>
        <span style="width: 80%;height: 25px;font-size: 15px;margin-left: 70px">
           <?php if(is_array($gonggaotop)): foreach($gonggaotop as $key=>$vo): ?><li >
                   <a href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: #C40A07;"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?>...&nbsp;&nbsp;</a>
               </li><?php endforeach; endif; ?>
        </span>
    </div>
    <div class="gonggao_right"  >
        <div class="sjtp"><img src="/news/Public/Home/imgs/zhongbiao.png"/></div>
        <div id="showtime">2017-3-4</div>
    </div>
    </div>
    <!--公告结束-->
</div>
<!--头部结束-->
<!--主题内容开始-->
<div class="content">
    <!--左边内容开始-->
<div class="content_left">
<div  class="nav_input">
    <img src="/news/Public/Home/images2015/zhyw.gif"/>
    <form  class="ipt" action="<?php echo U('Search/search');?>" method="post">
        用户 <input type="text" name="firstname">
        密码 <input type="text" name="lastname">
        <button  class="bt" onclick="return false;">登录</button>
        <input class="ip1" type="text" name="title"  placeholder="请输入关键字">
        <button  class="bt" type="submit">搜索</button>
    </form>
    <div  style="float: right;border: 0px solid  red;position: absolute;right: 10px;top: 10px">
        <a  href="<?php echo U('Search/search');?>" style="color: #004c95;font-weight: bold;" >高级搜索</a></div>
</div>
    <div class="content_left_toutiao">
      <div class="xinwentt">
          <img src="/news/Public/Home/imgs/xwtt.png">
      </div>
        <div class="xinennr">
            <div class="h2ziti">
                <h2><a href="<?php echo U('Detail/detail',array( 'id' => $topInfo1['id'] ));?>" style="color:#AA0000"><?php echo (mb_substr($topInfo1["title"],0,20,'utf-8')); ?>...</a></h2>
            </div>
            <div class="newneirong">
                <?php if(is_array($topInfo2)): $i = 0; $__LIST__ = $topInfo2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>">
                        <?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?>...
                    </a></span>
                    <span style="color:#AA0000 ">[图]</span><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <!--左边新闻1内容-->
    <div class="content_left1">
        <div class="dongtu_buju">
        <div class="content_left1_left">
            <ul>
                <?php if(is_array($rotaion)): foreach($rotaion as $key=>$vo): ?><li><a href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"><img src="/news<?php echo ($vo["news_big_img"]); ?>" alt="图片<?php echo ($key+1); ?>"/></a></li><?php endforeach; endif; ?>
            </ul>
            <ol>
                <?php if(is_array($rotaion)): foreach($rotaion as $key=>$vo): ?><li class="<?php echo ($key==0?'current':''); ?>"><?php echo ($key+1); ?></li><?php endforeach; endif; ?>
            </ol>
        </div>
            <div class="dtms">
                <?php if(is_array($rotaion)): foreach($rotaion as $key=>$vo): ?><ul>
                         <li>  <a href="##"><?php echo ($vo["title"]); ?></a></li>
                    </ul><?php endforeach; endif; ?>
                <style>
                    .dtms ul li{position: absolute;}
                </style>

            </div>
        </div>
        <div  class="content_left1_right">

            <div class="tzgg_1">

                <div style="float: left;margin-top: 6px"><img src="/news/Public/Home/imgs/xfyw.gif"></div>
                <div class="gengduo right" style="float: right;margin-top: 5px"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'7'));?>">更多>></a></div>
               <!--<div class="gengduo right"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'7'));?>">更多>></a></div>-->
                <div class="clear"></div>

            </div>
                <div class="xfyw_1">
                    <ul>
                        <?php if(is_array($info_xfyw)): $i = 0; $__LIST__ = $info_xfyw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <span style="float: right">[<?php echo date('m-d',$vo['add_time']);?>]</span><img src="/news/Public/Home/imgs/dian.png"/>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" alt="<?php echo (mb_substr($vo["title"],0,14,'utf-8')); ?>"
                               target="_blank" style="color: <?php echo ($vo['title_color']); ?>">
                                <?php echo (mb_substr($vo["title"],0,14,'utf-8')); ?>...
                            </a>
                            <span style="color:#AA0000 ">[图]</span>
                            <img src="/news/Public/Home/imgs/new1.gif"/>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
        </div>
    </div>
    <!--左边内容2-->
    <div class="content_left2">
        <div class="content_left2_left">
            <div class="content_left2_left_top">
                <ul>
                    <li style="float: left;margin-left: 5px;margin-top: 5px;color:#0075cf;font-weight: bold;font-size: 23px ">支队动态</li>
                    <li style="float: right;margin-top: 10px"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'8'));?>">更多>></a></li>
                </ul>
            </div>
            <div class="content_left2_left_main">
                <ul>
                    <?php if(is_array($info_zddt)): $i = 0; $__LIST__ = $info_zddt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span class="span_right">[<?php echo date('m-d',$vo['add_time']);?>]</span><img src="/news/Public/Home/imgs/dian.png"/>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>">
                                <?php echo (mb_substr($vo["title"],0,16,'utf-8')); ?>...
                            </a>
                            <img src="/news/Public/Home/imgs/new1.gif"/>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="content_left2_right">
            <div class="content_left2_right_top">
                <ul>
                    <li style="float: left;margin-left: 5px;margin-top: 5px;color:#0075cf;font-weight: bold;font-size: 23px">推荐阅读</li>
                    <li style="float: right;margin-top: 10px"><a href="<?php echo U('Newslist/news_list',array('cate_id'=>'99'));?>">更多>></a></li>
                </ul>
            </div>
            <div class="content_left2_right_main">
                <ul>
                    <?php if(is_array($info_tjyd)): $i = 0; $__LIST__ = $info_tjyd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <span class="span_right">[<?php echo date('m-d',$vo['add_time']);?>]</span>
                            <img src="/news/Public/Home/imgs/dian.png"/>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"
                               style="color: <?php echo ($vo['title_color']); ?>">
                                <?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...
                            </a>
                            <span style="color:#AA0000 ">[图]</span>
                            <img src="/news/Public/Home/imgs/new1.gif"/>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

    </div>
        <!--左边内容2结束-->

    <!--左边内容3-->
    <div class="content_left3">
        <div class="content_left3_tb"><img src="/news/Public/Home/imgs/slb.png"/></div>
        <div class="content_left3_tb"><img src="/news/Public/Home/imgs/zzc.png"/></div>
        <div class="content_left3_tb"><img src="/news/Public/Home/imgs/hqc.png"/></div>
        <div class="content_left3_tb"><img src="/news/Public/Home/imgs/fhc.png"/></div>
        <div class="content_left3_tb"><img src="/news/Public/Home/imgs/zdjw.png"/></div>
        <div class="content_left3_tb"><img src="/news/Public/Home/imgs/zhzx.png"/></div>
    </div>
    <script>
        $(function () {
            $(".mycontentbiji").hide();
            $(".mycontent0").show();
        });

        function change(_index) {
            $(".mycontentbiji").hide();
            $(".mycontent" + _index).show();
//            alert(_index);
        }
    </script>
    <!--左边内容4-->
    <div class="content_left4">
        <div class="content_left4_top">
            <div class="content_left4_gddt" >各地动态</div>
            <div class="content_left4_mues" style="float: right">
               <div><img src="/news/Public/Home/images2015/botm_bg.gif"/></div><div class="content_left4_mues_a"><a onmouseover="change(0)" href="##">综合信息</a></div>
               <div><img src="/news/Public/Home/images2015/botm_bg.gif"/></div><div class="content_left4_mues_a"><a onmouseover="change(1)" href="##">司令部工作</a></div>
               <div><img src="/news/Public/Home/images2015/botm_bg.gif"/></div><div class="content_left4_mues_a"><a onmouseover="change(2)" href="##">政治工作</a></div>
               <div><img src="/news/Public/Home/images2015/botm_bg.gif"/></div><div class="content_left4_mues_a"><a onmouseover="change(3)" href="##">后勤工作</a></div>
               <div><img src="/news/Public/Home/images2015/botm_bg.gif"/></div><div class="content_left4_mues_a"><a onmouseover="change(4)" href="##">防火工作</a></div>
               <div><img src="/news/Public/Home/images2015/botm_bg.gif"/></div><div class="content_left4_mues_a"><a onmouseover="change(5)" href="##">宣传工作</a></div>
            </div>
        </div>
        <!--地方新闻内容开始-->

        <!--1综合信息-->
        <div class="mycontentbiji mycontent0">
            <div class="content_left4_l">
                <ul>
                    <?php if(is_array($localInfo)): foreach($localInfo as $key=>$vo): ?><li>
                        <?php if($key == 0): ?>①
                            <?php elseif($key == 1): ?>②
                            <?php elseif($key == 2): ?>③
                            <?php else: endif; ?>
                        <span style="color: #BB5500;font-weight: bold;" ><?php echo (mb_substr($vo["local_name"],0,4,'utf-8')); ?></span>
                        <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"
                           style="color: <?php echo ($vo['title_color']); ?>">
                            <?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...
                        </a>
                        <span style="color:#AA0000 ">[图]</span>
                        <?php if(($key == 0) OR ($key == 1) OR ($key == 2)): ?><img src="/news/Public/Home/imgs/new1.gif"/><?php endif; ?>
                    </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <!--2司令部-->
        <div class="mycontentbiji mycontent1">
            <div class="content_left4_l">
                <ul>
                    <?php if(is_array($localInfo2)): foreach($localInfo2 as $key=>$vo): ?><li>
                            <?php if($key == 0): ?>①
                                <?php elseif($key == 1): ?>②
                                <?php elseif($key == 2): ?>③
                                <?php else: endif; ?>
                            <span style="color: #BB5500;font-weight: bold;"><?php echo (mb_substr($vo["local_name"],0,4,'utf-8')); ?>：</span>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"
                               style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a>
                            <span style="color:#AA0000 ">[图]</span>
                            <?php if(($key == 0) OR ($key == 1) OR ($key == 2)): ?><img src="/news/Public/Home/imgs/new1.gif"/><?php endif; ?>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <!--3政治-->
        <div class="mycontentbiji mycontent2">
            <div class="content_left4_l">
                <ul>
                    <?php if(is_array($localInfo3)): foreach($localInfo3 as $key=>$vo): ?><li>
                            <?php if($key == 0): ?>①
                                <?php elseif($key == 1): ?>②
                                <?php elseif($key == 2): ?>③
                                <?php else: endif; ?>
                            <span style="color: #BB5500;font-weight: bold;"><?php echo (mb_substr($vo["local_name"],0,4,'utf-8')); ?>：</span>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a><span style="color:#AA0000 ">[图]</span>
                            <?php if(($key == 0) OR ($key == 1) OR ($key == 2)): ?><img src="/news/Public/Home/imgs/new1.gif"/><?php endif; ?>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <!--4后勤-->
        <div class="mycontentbiji mycontent3">
            <div class="content_left4_l">
                <ul>
                    <?php if(is_array($localInfo4)): foreach($localInfo4 as $key=>$vo): ?><li>
                            <?php if($key == 0): ?>①
                                <?php elseif($key == 1): ?>②
                                <?php elseif($key == 2): ?>③
                                <?php else: endif; ?>
                            <span style="color: #BB5500;font-weight: bold;"><?php echo (mb_substr($vo["local_name"],0,4,'utf-8')); ?>：</span>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a><span style="color:#AA0000 ">[图]</span>
                            <?php if(($key == 0) OR ($key == 1) OR ($key == 2)): ?><img src="/news/Public/Home/imgs/new1.gif"/><?php endif; ?>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <!--5防火信息-->
        <div class="mycontentbiji mycontent4">
            <div class="content_left4_l">
                <ul>
                    <?php if(is_array($localInfo5)): foreach($localInfo5 as $key=>$vo): ?><li>
                            <?php if($key == 0): ?>①
                                <?php elseif($key == 1): ?>②
                                <?php elseif($key == 2): ?>③
                                <?php else: endif; ?>
                            <span style="color: #BB5500;font-weight: bold;"><?php echo (mb_substr($vo["local_name"],0,4,'utf-8')); ?>：</span>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a><span style="color:#AA0000 ">[图]</span>
                            <?php if(($key == 0) OR ($key == 1) OR ($key == 2)): if(($key == 0) OR ($key == 1) OR ($key == 2)): ?><img src="/news/Public/Home/imgs/new1.gif"/><?php endif; endif; ?>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <!--6宣传-->
        <div class="mycontentbiji mycontent5">
            <div class="content_left4_l">
                <ul>
                    <?php if(is_array($localInfo6)): foreach($localInfo6 as $key=>$vo): ?><li>
                            <?php if($key == 0): ?>①
                                <?php elseif($key == 1): ?>②
                                <?php elseif($key == 2): ?>③
                                <?php else: endif; ?>
                            <span style="color: #BB5500;font-weight: bold;"><?php echo (mb_substr($vo["local_name"],0,4,'utf-8')); ?>：</span>
                            <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a><span style="color:#AA0000 ">[图]</span>
                            <?php if(($key == 0) OR ($key == 1) OR ($key == 2)): ?><img src="/news/Public/Home/imgs/new1.gif"/><?php endif; ?>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

    </div>
    <!--地方新闻结束-->
    <!--左边内容5-->
    <!--图片栏目-->
    <div class="content_left5">
        <div class="content_left5_l" >
            <div class="wrap" >
                <img src="/news/Public/Home/images2015/tplmbg.gif">
                <div  class="tplm">
                    <img src="/news/Public/Home/images2015/tplm_sy01.jpg">
                </div>
                <div  class="inner"  id="inner">
                    <ul>
                        <?php if(is_array($info_tplm)): $i = 0; $__LIST__ = $info_tplm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>">
                                <img src="/news<?php echo ($vo["news_big_img"]); ?>" alt="<?php echo ($vo["title"]); ?>"> </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content_left5_r" >
            <div    class="spdb" >
                <img src="/news/Public/Home/imgs/tplmbg.gif">
                <div  class="spdb_img">
                    <img src="/news/Public/Home/imgs/spdb1.png">
                </div>
                <!--极酷阳光播放器/代码开始-->
                <div  class="sp">
                        <a  href="<?php echo U('Video/video_list');?>" >
                            <div><img style="width: 198px;height: 122px;" src="/news/Public/Home/imgs/player.jpg"/></div>
                        </a>

                </div>
                <!--极酷阳光播放器/代码结束-->
            </div>
        </div>
    </div>
    <!--左边内容6-->
    <div class="content_left6">
        <div class="wrapper1">
            <ul class="wrapper1_top">
                <li class="active">媒体报道</li>
                <li >灭火救援</li>
            </ul>
            <div class="wrapper1_news">
                <div class="main1 selected">
                    <ul>
                        <?php if(is_array($info_mtbd)): $i = 0; $__LIST__ = $info_mtbd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/news/Public/Home/imgs/dian.png">
                                <a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"
                                   style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?>...
                                </a> <img  src="/news/Public/Home/imgs/new1.gif"/></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="main1">
                    <ul>
                        <?php if(is_array($info_mhjy)): $i = 0; $__LIST__ = $info_mhjy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/news/Public/Home/imgs/dian.png"><a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?>...</a><img  src="/news/Public/Home/imgs/new1.gif"/></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div>
        </div>
        <div class="wrapper2">
            <ul class="wrapper2_top">
                <li class="active">调研文章</li>
                <li >感悟消防</li>
            </ul>
            <div class="wrapper2_news">
                <div class="main2 selected">
                    <ul>
                        <?php if(is_array($info_dywz)): $i = 0; $__LIST__ = $info_dywz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/news/Public/Home/imgs/dian.png"><a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?>...</a><img  src="/news/Public/Home/imgs/new1.gif"/></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="main2">
                    <ul>
                        <?php if(is_array($info_gwxf)): $i = 0; $__LIST__ = $info_gwxf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/news/Public/Home/imgs/dian.png"><a class="a_biaoqian" href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>"><?php echo (mb_substr($vo["title"],0,18,'utf-8')); ?>...</a><img  src="/news/Public/Home/imgs/new1.gif"/></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--左边内容结束-->
    <!--右边内容开始-->
    <div class="content_right">
        <!--/*领导讲话*/-->
        <!--/*领导讲话*/-->
        <div  class="r1">
            <style>
                .r1_img li { float: left}
            </style>
            <div  class="r1_img">
                <li style="float: left;margin-left: 5px;margin-top: 0px;width: 220px">
                    <img  src="/news/Public/Home/images2015/ldjh.jpg">
                </li>
                <li style="float: right;margin-top: 5px">
                    <a href="<?php echo U('Newslist/news_list',array('cate_id'=>'23'));?>">更多>></a>
                </li>
            </div>
            <ul>
                <?php if(is_array($news_leader)): foreach($news_leader as $key=>$vo): ?><li><img src="/news/Public/Home/imgs/dian.png"/>
                        <a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>">
                        <?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a>
                    <li><?php endforeach; endif; ?>

            </ul>
        </div>

        <!--      /*值班信息*/-->
        <table  class="tb">
            <tr>
                <td  style="height: 30px;"><a  href="今日值班.html"><img style="border: 0px"src="/news/Public/Home/images2015/zbxx.png"></a></td>
            </tr>
            <tr>
                <td   style="padding: 10px  5px">
                    <table  class="tb1">
                        <tr   class="tb1_tr">
                            <td  class="t1">带班首长：</td>
                            <td class="t2"><?php echo ($news_zr["db_leader"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">值班领导：</td>
                            <td class="t2"><?php echo ($news_zr["zb_leader"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">值班长：</td>
                            <td class="t2"><?php echo ($news_zr["zb_duty"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">指挥长：</td>
                            <td class="t2"><?php echo ($news_zr["zh_duty"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">指挥中心值班：</td>
                            <td class="t2"><?php echo ($news_zr["zh_center"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">机关值班：</td>
                            <td class="t2"><?php echo ($news_zr["jg_duty"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">通信值班：</td>
                            <td class="t2"><?php echo ($news_zr["tx_duty"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">宣传值班：</td>
                            <td  class="t2"><?php echo ($news_zr["xc_duty"]); ?></td>
                        </tr>
                        <tr>
                            <td  class="t1">车管值班：</td>
                            <td  class="t2"><?php echo ($news_zr["car_duty"]); ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--/*通知公告*/-->
        <div  class="r">
            <div  class="r2">
                <a href="<?php echo U('Newslist/news_list',array('cate_id'=>'26'));?>"><img src="/news/Public/Home/imgs/tzgg.bmp"></a>
            </div>
            <ul>
                <?php if(is_array($news_tzgg)): foreach($news_tzgg as $key=>$vo): ?><li><img src="/news/Public/Home/imgs/dian.png"/>
                        <a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>">
                        <?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a>
                    <li><?php endforeach; endif; ?>
            </ul>
        </div>

        <!--/*专项工作*/-->
        <div  class="zhuangxianggongzuo">
            <style>
                .zhuangxianggongzuo_img li { float: left}
            </style>
            <div  class="zhuangxianggongzuo_img">
                <li style="float: left;margin-left: 5px;margin-top: 0px;width: 210px"><img src="/news/Public/Home/images2015/zxgz.gif"></li>
                <li style="float: right;margin-top: 5px"> <a href="<?php echo U('Newslist/news_list',array('cate_id'=>'27'));?>">更多>></a></li>
            </div>
            <ul>
                <?php if(is_array($news_specical_work)): foreach($news_specical_work as $key=>$vo): ?><li><img src="/news/Public/Home/imgs/dian.png"/><a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>">
                        <?php echo (mb_substr($vo["title"],0,12,'utf-8')); ?>...</a>
                    <li><?php endforeach; endif; ?>
            </ul>
            <div  class="ysbg"><img src="/news/Public/Home/images2015/zx_bg.gif"></div>
        </div>

        <!--投稿统计-->
        <div  class="tgtj" style="height: 370px">
            <style>
                .tgtj_img li { float: left}
            </style>
            <div  class="tgtj_img">
                <li style="float: left;margin-left: 5px;margin-top: 0px;width: 220px"> <img src="/news/Public/Home/images2015/tgtj.jpg"></li>
                <li style="float: right;margin-top: 5px">
                    <a href="<?php echo U('LocalRank/rank_show');?>">详情>></a>
                </li>
            </div>
            <table class="tgbg" style="border: 0px">
                <tr  style="border: 0px">
                    <td  style="border: 0px" colspan="3" class="tgtd11">
                        <div class="tg">
                            <span  >名次</span>
                            <span  >单位名称</span>
                            <span >稿件数量</span>
                        </div>
                    </td>
                </tr>
                <?php if(is_array($local_rank)): foreach($local_rank as $key=>$vo): ?><tr class="tgbg_tr">
                    <td class="tgtd11"><img src="/news/Public/Home/imgs/dian.png"/>
                        <?php if(($key == 0) or ($key == 1) or ($key == 2) ): ?><i style="color: red"><?php echo ($vo['rownum']); ?></i>
                            <?php else: ?>
                            <?php echo ($vo['rownum']); endif; ?>
                    </td>
                    <td class="tgtd12"><?php echo (mb_substr($vo['local_name'],0,4,'utf-8')); ?></td>
                    <td class="tgtd13"><?php echo ($vo['news_sum']); ?></td>
                </tr><?php endforeach; endif; ?>
            </table>
        </div>

        <!--网站导航-->
        <div  class="wzdh">
            <div  class="wzdh1">
                <img src="/news/Public/Home/images2015/wzdh.gif">
            </div>
            <a href="http://10.56.25.129"><img class="wzdh_img1" src="/news/Public/Home/images2015/hnsxfzd.jpg"></a>
            <a href="http://www.xgc.en"><img class="wzdh_img2" src="/news/Public/Home/images2015/gabxfj.jpg"></a>
            <a href="http://www.zkga.gov.cn"><img   class="wzdh_img2" src="/news/Public/Home/images2015/zksgaj.jpg"></a>
        </div>
        <!--公共服务-->
        <div  class="ggfw">
            <div  class="ggwf_img">
                <img src="/news/Public/Home/images2015/ggfw.jpg">
            </div>
            <table  style="border: 0px">
                <tr class="ggfw_tr">
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034200system.gif" alt=""/></div><span>电子书籍</span></td>
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034313system.gif" alt=""/></div><span>电子报刊</span></td>
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034341system.gif" alt=""/></div><span>电子地图</span></td>
                </tr>
                <tr class="ggfw_tr">
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034418system.gif" alt=""/></div><span>网络电视</span></td>
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034506system.gif" alt=""/></div><span>百科常识</span></td>
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034551system.gif" alt=""/></div><span>新华字典</span></td>
                </tr>
                <tr class="ggfw_tr">
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034611system.gif" alt=""/></div><span>万年历</span></td>
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034635system.gif" alt=""/></div><span>软件下载</span></td>
                    <td class="ggfw_td"><div  class="ggwftd_img"><img src="/news/Public/Home/images2015/20150109034705system.gif" alt=""/></div><span>名人名言</span></td>
                </tr>
            </table>
        </div>
    </div>
    <!--右边内容结束-->
     <!--//底部 链接-->
    <style>

    </style>
    <div class="link_a">
        <select name=select4
                size=1 class="unnamed1"
                style="COLOR: #000000; TEXT-ALIGN: center"
                onchange="var jmpURL=this.options[this.selectedIndex].value; if(jmpURL!='') {window.open(jmpURL);} else {this.selectedIndex=0;}">
            <option selected>-=全国消防系统=-</option>
            <option value="http://10.2.60.1">中国消防网</option>
            <option
                    value=http://www.xf.bj/>
                北京消防网
            <option
                    value=http://10.40.48.248/gdxf/>
                广东消防网
            <option
                    value=http://10.88.161.9>天津消防网</option>
            <option
                    value=http://10.24.10.9/>
                河北消防网
            <option
                    value=http://10.78.63.9/>
                辽宁消防网
            <option
                    value=http://10.94.98.1/>山西消防网</option>
            <option
                    value=http://10.130.24.1/>
                福建消防网
            <option
                    value=http://10.48.54.119/sdxf/index.asp>
                山东消防网
            <option
                    value=http://10.112.24.1/>
                黑龙江消防网
            <option
                    value=http://10.142.6.1/>
                湖南消防网
            <option
                    value=http://10.148.128.11/>广西消防网</option>
            <option
                    value=http://10.72.25.16:8080/hbxf/>湖北消防网</option>
            <option
                    value=http://10.14.120.1/>上海消防网</option>
            <option value=http://10.227.33.2/>
                浙江消防网
            <option
                    value=http://10.196.64.9/>
                宁夏消防网
            <option
                    value=http://10.64.24.9/>
                四川消防网
            <option
                    value=http://10.166.9.9/>云南消防网</option>
            <option
                    value=http://10.178.45.8:8088/>甘肃消防网</option>
            <option value=http://10.124.129.1/>
                安徽消防网
            <option
                    value=http://10.32.24.11/>
                江苏消防网
            <option
                    value=http://10.154.55.2/>
                重庆消防网
            <option
                    value=http://10.188.16.9/>
                西藏消防网
            <option
                    value=http://10.106.119.181/>
                吉林消防网
            <option
                    value=http://10.100.67.10/>
                内蒙古消防网
            <option
                    value=http://10.185.101.119/main/index.asp>海南消防网</option>
            <option value=http://10.160.129.10/>
                贵州消防网
            <option
                    value=http://10.20.64.11/>
                新疆消防网




        </select>
        <select name=select
                size=1 class="unnamed1"
                style="FONT-SIZE: 9pt; COLOR: #000000"
                onchange=javascript:window.open(this.options[this.selectedIndex].value)>
            <option value="/" selected>-=全国公安导航=-</option>
            <option value="http://www.ga/">公安部</option>
            <option value=http://10.8.1.11/
                    target="_blank">北京市</option>
            <option value=http://10.88.1.9/
                    target="_blank">天津市</option>
            <option value=http://10.24.1.9/
                    target="_blank">河北省</option>
            <option value=http://10.94.1.9/
                    target="_blank">山西省</option>
            <option
                    value=http://www.nm/nmgat/index.asp target="_blank">内蒙古自治区</option>
            <option value=http://www.ln/72057594037927936/index.shtml
                    target="_blank">辽宁省</option>
            <option
                    value=http://www.jl/ target="_blank">吉林省</option>
            <option value=http://10.112.1.2/
                    target="_blank">黑龙江省</option>
            <option
                    value=http://www.sh/
                    target="_blank">上海市</option>
            <option
                    value=http://10.32.1.99:9080/ target="_blank">江苏省</option>
            <option value=http://10.118.1.12/
                    target="_blank">浙江省</option>
            <option
                    value=http://www.ah/ target="_blank">安徽省</option>
            <option value=http://10.130.1.9/
                    target="_blank">福建省</option>
            <option
                    value=http://10.136.1.60:2222/ target="_blank">江西省</option>
            <option value=http://10.48.1.9/ target="_blank">山东省</option>
            <option value=http://www.en/userSites/gat/default.html
                    target="_blank">河南省</option>
            <option
                    value=http://10.72.1.10/ target="_blank">湖北省</option>
            <option value=http://www.hn/
                    target="_blank">湖南省</option>
            <option
                    value=http://www.gd/  target="_blank">广东省</option>
            <option value=http://www.gx/WWW/
                    target="_blank">广西区</option>
            <option
                    value=http://10.184.10.2/ target="_blank">海南省</option>
            <option value=http://www.sc/ target="_blank">四川省</option>
            <option value=http://10.154.1.9/
                    target="_blank">重庆市</option>
            <option
                    value=http://www.gz/ target="_blank">贵州省</option>
            <option value=http://10.166.1.20/
                    target="_blank">云南省</option>
            <option
                    value=http://10.188.1.9/ target="_blank">西藏区</option>
            <option value=http://www.sn/gatweb2006/
                    target="_blank">陕西省</option>
            <option
                    value=http://10.178.1.61/plweb/sysIndex!toIndex.do target="_blank">甘肃省</option>
            <option value=http://www.qh
                    target="_blank">青海省</option>
            <option
                    value=http://10.196.1.9/ target="_blank">宁夏区</option>
            <option value=http://www.xj/
                    target="_blank">新疆自治区</option>
            <option
                    value=http://10.84.1.9
                    target="_blank">新疆建设兵团</option>
        </select>
        <select class=unnamed1
                style="FONT-SIZE: 9pt; BACKGROUND-COLOR: #ffffff"
                onchange="var jmpURL=this.options[this.selectedIndex].value; if(jmpURL!='') {window.open(jmpURL);} else {this.selectedIndex=0;}"
                size=1 name=hndh>
            <option selected>-=全省公安系统=-</option>
            <option
                    value=http://www.en/userSites/gat/default.html  />
            公安厅
            <option
                    value=http://www.cgo.en/>
                郑州市
            <option
                    value=http://10.58.45.9/>
                洛阳市
            <option
                    value=http://10.60.66.9/>
                濮阳市
            <option
                    value=http://10.59.121.9/>
                新乡市
            <option
                    value=http://10.59.51.9/>
                鹤壁市
            <option
                    value=http://10.61.131.9/>
                南阳市
            <option
                    value=http://10.57.151.5/>
                开封市
            <option
                    value=http://10.58.106.10/>
                平顶山市
            <option
                    value=http://www.zks.en>周口市</option>
            <option
                    value=http://10.61.51.9/>
                三门峡市
            <option
                    value=http://10.63.26.9/>
                驻马店市
            <option
                    value=http://10.62.81.9/>
                信阳市
            <option
                    value=http://10.59.221.9//>
                焦作市
            <option
                    value=http://10.60.226.9/>
                漯河市
            <option
                    value=http://10.60.146.9/>
                许昌市
            <option
                    value=http://10.63.126.9/>
                济源市
            <option
                    value=http://10.61.236.9/>
                商丘市

        </select>
        <select class=unnamed1 style="COLOR: #000000; font-family: 'Microsoft YaHei'"
                onChange=window.open(select5.options[select5.selectedIndex].value)
                size=1 name=select5>
            <option value=全国导航
                    selected>-=全省消防系统=-</option>
            <option
                    value=http://10.56.25.129/>河南省消防总队
            <option
                    value=http://10.57.105.202/>





                郑州支队





            <option
                    value=http://10.57.159.114/>





                开封支队





            <option
                    value=http://10.58.126.2/>





                平顶山支队





            <option
                    value=http://10.58.235.194/>





                安阳支队





            <option
                    value=http://10.59.139.28/>




                新乡支队

            <option value=http://10.60.19.4/>


                焦作支队


            <option     value=http://10.61.200.87/>







                南阳支队






            <option
                    value=http://10.59.54.5/>






                鹤壁支队





            <option
                    value=http://10.60.116.9/>





                濮阳支队





            <option
                    value=http://10.60.188.1/>





                许昌支队





            <option
                    value=http://10.60.232.3/>





                漯河支队





            <option
                    value=http://10.61.120.9/>





                三门峡支队





            <option
                    value=http://10.62.51.3/>





                商丘支队





            <option
                    value=http://10.58.52.119/>





                洛阳支队





            <option
                    value=http://10.63.43.1/>





                驻马店支队





            <option
                    value=http://10.62.81.171/>





                信阳支队





            <option
                    value=http://10.63.129.99/>





                济源支队







        </select>
        <select
                class=unnamed1 style="FONT-SIZE: 9pt; BACKGROUND-COLOR: #ffffff"
                onchange="var jmpURL=this.options[this.selectedIndex].value; if(jmpURL!='') {window.open(jmpURL);} else {this.selectedIndex=0;}"
                size=1 name=hndh>
            <option selected>-=全市公安导航=-</option>
            <option
                    value=http://www.gaj.zks.en/shanan/>
                沙南分局
            <option
                    value=http://www.zks.en/shabei/index/>沙北分局</option>
            <option value=http://www.xgc.en/>
                项城市
            <option
                    value=http://www.fug.en/>
                扶沟县
            <option
                    value=http://www.tkg.en/>
                太康县
            <option
                    value=http://www.luy.en/>
                鹿邑县
            <option
                    value=http://www.dnc.en/>
                郸城县
            <option
                    value=http://www.squ.en/>
                沈丘县
            <option
                    value=http://www.xih.en/>
                西华县
            <option
                    value=http://www.hyg.en>淮阳县</option>
            <option
                    value=http://www.ssu.en/>
                商水县
            <option
                    value=http://www.fqu.en/>
                泛区
        </select>
        <select
                class=unnamed1 style="FONT-SIZE: 9pt; BACKGROUND-COLOR: #ffffff"
                onchange="var jmpURL=this.options[this.selectedIndex].value; if(jmpURL!='') {window.open(jmpURL);} else {this.selectedIndex=0;}"
                size=1 name=hndh>
            <option selected>-=友情链接=-</option>
            <option
                    value=http://www.gaj.zks.en/shanan/>
                河南省公安局消防总队
            <option
                    value=http://www.zks.en/shabei/index/>沙北分局</option>
            <option value=http://www.xgc.en/>
                公安部消防局
            <option
                    value=http://www.fug.en/>
                精品网址
            <option
                    value=http://www.tkg.en/>
                看不清
            <option
                    value=http://www.luy.en/>
                河南省公安厅**
            <option
                    value=http://www.luy.en/>
                周口支队政工局
            <option
                    value=http://www.luy.en/>
                和谐
            <option
                    value=http://www.luy.en/>
                政治工作信息网


        </select>
    </div>

</div>
<!--主题内容结束-->

<!--侧边广告-->
<div class="ggadd">
    <span class="guanbi1"></span>
    <!--<h2  style="color: orange  ;text-align: center">巡视组联系方式</h2>-->
    <!--<div class="ggxiangqing">-->
        <!--　-->
    <!--</div>-->
    <br>
    <div class="classq">
        <?php if(is_array($zcbkxgt)): $i = 0; $__LIST__ = array_slice($zcbkxgt,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>"  style="color: <?php echo ($vo['title_color']); ?>"style="display: block">
                <?php echo (mb_substr($vo["title"],0,36,'utf-8')); ?>...</a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="ggadd2">
    <span class="guanbi2" ></span>
    <!--<div class="">-->
        <!--<?php if(is_array($ycbkxgt)): $i = 0; $__LIST__ = array_slice($ycbkxgt,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
            <!--<a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>" style="color:rgba(196, 44, 40, 0.91) ">-->
                <!--<span style="font-size: 15px"> <?php echo (mb_substr($vo["title"],0,36,'utf-8')); ?>..</span>-->
            <!--</a>-->
        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
    <!--</div>-->
    <style>
        .ggbtotm li{ margin-top: 20px}
    </style>
    <div class="ggbtotm">
        <?php if(is_array($ycbkxgt)): $i = 0; $__LIST__ = array_slice($ycbkxgt,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a  href="<?php echo U('Detail/detail',array( 'id' => $vo['id'] ));?>" style="color: <?php echo ($vo['title_color']); ?>" style="color:rgba(196, 44, 40, 0.91) ">
             <span style="font-size: 15px"> <?php echo (mb_substr($vo["title"],0,36,'utf-8')); ?>..</span>
         </a>
         </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".ggadd")
                .slideDown("normal")
                .slideUp("slow")
                .fadeIn(1000)
                .children(".guanbi1").click(function () {
            $(this).parent().fadeOut();
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".ggadd2")
                .slideDown("normal")
                .slideUp("slow")
                .fadeIn(1000)
                .children(".guanbi2").click(function () {
            $(this).parent().fadeOut();
        });
    });
</script>

<!--底部内容开始-->
<div style="clear: both"></div>
<br><br>
<!--footer引入-->
<div class="bottom">
    <div class="zi">
        Copyright (C) 2015 All Rights Reserved. 版权所有 河南消防总队  &nasp;&nasp; &nasp;&nasp;

            <a href="http://localhost:8080/news/index.php/Admin/Index/index.html" > 管理员登陆</a>
        <br/>
        联系地址：河南省郑州市福元路158号   联系电话：0371-66615111
    </div>
</div>


<!--底部内容开始-->
</body>
<script  type="text/javascript"  src="/news/Public/Home/js/index.js"> </script>
<script>
    $(function(){
        $(".dtms ul li").hide();
        $(".dtms ul li").eq(0).show();
        $(".content_left1_left ol li").mouseenter(function(){
            $(this).addClass("current").siblings().removeClass("current");
            $(".content_left1_left ul li").eq($(this).index()).fadeIn("fast").siblings().fadeOut();
            $(".dtms ul li").hide();
            $(".dtms ul li").eq($(this).index()).show();
        });
    });
</script>
<script type="text/javascript">
    $(function(){
        $(".wrapper1_top>li").mouseenter(function(){
            //给当前元素添加active这个样式
            //给当前这个元素的所有兄弟元素移除active这个样式
            $(this).addClass("active").siblings().removeClass("active");
            //让下面的div内容，根据上面tab栏菜单展示相应内容
            var index=$(this).index();
            $(".main1")
                    .eq(index).addClass("selected")
                    .siblings(".main1").removeClass("selected");

        });
    });

</script>
<script type="text/javascript">
    $(function(){
        $(".wrapper2_top>li").mouseenter(function(){
            //给当前元素添加active这个样式
            //给当前这个元素的所有兄弟元素移除active这个样式
            $(this).addClass("active").siblings().removeClass("active");
            //让下面的div内容，根据上面tab栏菜单展示相应内容
            var index=$(this).index();
            $(".main2")
                    .eq(index).addClass("selected")
                    .siblings(".main2").removeClass("selected");
        });
    });
</script>
<script>
    window.onload=function(){
        var oBox=document.getElementById('inner');
        var oUl=oBox.children[0];
        var aLi=oUl.children;
        //复制一份内容
        oUl.innerHTML+=oUl.innerHTML;
        oUl.style.width=aLi.length*aLi[0].offsetWidth+'px';

        function Marquee(){
            var l=oUl.offsetLeft+5;
            if(l>=0){
                l=-oUl.offsetWidth/2;
            }
            oUl.style.left=l+'px';
        }
        var MyMar=setInterval(Marquee,150);
        oBox.onmouseover=function() {clearInterval(MyMar)};//鼠标移上时清除定时器达到滚动停止的目的
        oBox.onmouseout=function() {MyMar=setInterval(Marquee,150)};//鼠标移开时重设定时器
    };

</script>
        <script>
            startTime();
             function startTime()
              {
                 var today=new Date();//定义日期对象-->
                 var yyyy = today.getFullYear();//通过日期对象的getFullYear()方法返回年-->
                var MM = today.getMonth()+1;//通过日期对象的getMonth()方法返回年-->
                var dd = today.getDate();//通过日期对象的getDate()方法返回年-->
                var day; //用于保存星期（getDay()方法得到星期编号）-->
                if(today.getDay()==0)   day   =   "星期日 "
                if(today.getDay()==1)   day   =   "星期一 "
                if(today.getDay()==2)   day   =   "星期二 "
                if(today.getDay()==3)   day   =   "星期三 "
               if(today.getDay()==4)   day   =   "星期四 "
                if(today.getDay()==5)   day   =   "星期五 "
                if(today.getDay()==6)   day   =   "星期六 "
               document.getElementById('showtime').innerHTML=yyyy+"-"+MM +"-"+ dd +" "  + day;
                setTimeout('startTime()',1000);//每一秒中重新加载startTime()方法
             }

            function checkTime(i)
            {
               if (i<10){
                    i="0" + i;
                }
               return i;
           }
        </script>
<script language=Javascript>
    function time(){
        //获得显示时间的div
       var t_div = document.getElementById('showtime');
        var now=new Date()
        //替换div内容
        t_div.innerHTML = now.getFullYear()
                +"年"+(now.getMonth()+1)+"月"+now.getDate()
                +"日"+' 星期'+'日一二三四五六'.charAt(now.getDay());
        //等待一秒钟后调用time方法，由于settimeout在time方法内，所以可以无限调用
        setTimeout(time,1000);
    }
</script>
</html>