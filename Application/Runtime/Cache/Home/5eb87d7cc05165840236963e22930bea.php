<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
<style>
.content_left_content ul li a:hover{color: red;font-size: 15px}
</style>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/ym2.css" />
</head>
<body>
<div class="nav">
    <div  class="nav_menus">
        <div class="nav_buju">
            <ul>
                <li><a href="#">首页</a></li>
                <li><a href="#">组织机构</a></li>
                <li><a href="#">法律法规</a></li>
                <li><a href="#">总队长信箱</a></li>
                <li><a href="#">政委信箱</a></li>
                <li><a href="#">通信手册</a></li>
                <li><a href="javascript:location.replace(location.href)">下载中心</a></li>
                <li><a href="#">数据传输</a></li>
                <li><a href="#">办公系统</a></li>
                <li><a href="#">在线投稿</a></li>
                <li><a href="#">搜索引擎</a></li>
                <li><a href="#">在线投稿</a></li>
                <li><a href="#">怀念旧版</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="newsist">
<div   class="biaolan">
    <div  class="biaolan_div">
        <a>主页</a> ><a> 下载中心</a> >
    </div>
</div>
<div class="content">
      <div class="content_left">
          <div  class="content_left_nav">下载中心<span>  >> </span></div>
          <div   class="content_left_content" >
              <ul>
                <?php if(is_array($fileInfo)): $i = 0; $__LIST__ = $fileInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <img src="/Public/Home/imgs/icon.gif"/>
                        <a class="a_biaoqian" href="<?php echo U('File/download_file',array('id'=>$vo['id']));?>"><?php echo ($vo["file_name"]); ?></a>
                        <span><?php echo date('Y-m-d ',$vo['add_time']);?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
              <br>
              <span  style="margin-right: 20px;float: right"> <?php echo ($pagelist); ?> </span>
          </div>
      </div>
      <div class="content_right">
          <div class="sousuokuang">
              <form method="get" id="searchform" action="https://www.baidu.com/">
                  <fieldset class="search">
                      <input type="text" class="box" name="s" id="s" class="inputText" placeholder="搜索" >
                      <button class="btn" title="search"> 搜索</button>
                  </fieldset>
              </form>
          </div>
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
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>支队动态</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>灭火救援</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>媒体报道</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>警营文化</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>调研文章</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>消防视频</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>精品导读</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
                      </tr>

                      <tr>
                          <td height="2"></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="34"><div align="center"><img src="/Public/Home/imgs/jt.png" width="8" height="14" /></div></td>
                          <td height="29"><a href='#' target='_self'>时政要闻　</a></td>
                          <td width="7">&nbsp;</td>
                      </tr>
                      <tr>
                          <td height="1" colspan="2" background="/Public/Home/imgs/jt.png"></td>
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
</div>

<div class="bottom">
    <!--底部开始-->
    <div class="zi">
        版权所有：周口市消防支队 All Rights Reserved @ 周口消防网
        <br/>
        未经周口消防网书面特别授权，请勿转载或建立镜像
        <br/>
        违者依法追究相关法律责任
    </div>
    <!--底部结束-->
</div>
</body>
</html>