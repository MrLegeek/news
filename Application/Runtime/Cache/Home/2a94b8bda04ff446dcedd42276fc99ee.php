<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8"/>
<head>
    <style type="text/css">
        #tg_content1 {
            background: #FFF;
            overflow:hidden;
            border: 0px dashed #CCC;
            height: 100px;
            width: 100%;
        }
        #tg_content1 tr   {
            display: block;
        }
        #dd1  td{padding: 5px 15px}
        #dd2  td{padding: 5px 15px;text-align: center}
    </style>
    <title>河南省周口消防支队</title>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css" />

    <script type="text/javascript" src="/Public/Home/js/1.7.1.min.js"></script>
    <script>
        $(function(){
            $(".content_left1_left ol li").mouseenter(function(){
                $(this).addClass("current").siblings().removeClass("current");
                $(".content_left1_left ul li").eq($(this).index()).fadeIn("fast").siblings().fadeOut();
            });
        });


    </script>
    <script  type="text/javascript"  src="/Public/Home/js/index.js"> </script>
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
        $(function(){
            $(".navTitle ul li").mouseover(function(){
                var index = $(".navTitle ul li").index(this);
                $(".navTitle").siblings().hide().siblings("div").eq(index).show();

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var length
            var   currentIndex = 0,
                    interval,
                    hasStarted = false,//是否已经开始轮播
                    t = 2000; //轮播时间间隔
            length = $('.slider-panel').length;
            //将除了第一张图片隐藏
            $('.slider-panel:not(:first)').hide();
            //将第一个slider-item设为激活状态
            $('.slider-item:first').addClass('slider-item-selected');
            //鼠标上悬时显示向前、向后翻按钮,停止滑动，鼠标离开时隐藏向前、向后翻按钮，开始滑动
            $('.slider-panel').hover(function() {    stop();    $('.slider-page').show();   },
                    function() {    $('.slider-page').hide();    start();   });
            $('.slider-item').hover(function(e) {    stop();
                var preIndex = $(".slider-item").filter(".slider-item-selected").index();
                currentIndex = $(this).index();
                play(preIndex, currentIndex);   }, function() {    start();   });
            /**    * 向前翻页    */
            function pre() {    var preIndex = currentIndex;
                currentIndex = (--currentIndex + length) % length;
                play(preIndex, currentIndex);   }

            // 向后翻页

            function next() {    var preIndex = currentIndex;
                currentIndex = ++currentIndex % length;play(preIndex, currentIndex);   }
            // 从preIndex页翻到currentIndex页    * preIndex 整数，翻页的起始页    * currentIndex 整数，翻到的那页
            function play(preIndex, currentIndex) {    $('.slider-panel').eq(preIndex).fadeOut(500)
                    .parent().children().eq(currentIndex).fadeIn(1000);
                $('.slider-item').removeClass('slider-item-selected');
                $('.slider-item').eq(currentIndex).addClass('slider-item-selected');   }
            /**    * 开始轮播    */
            function start() {
                if(!hasStarted) {    hasStarted = true;    interval = setInterval(next, t);    }   }
            /**    * 停止轮播    */
            function stop() {    clearInterval(interval);    hasStarted = false;   }
            //开始轮播
            start();   });
    </script>
</head>
<body style="background: url('/Public/Home/imgs/bg.png') no-repeat">
<!--头部开始-->
<div class="center head logobg">
    <div><img src="/Public/Home/imgs/logo3.png"   /></div>
    <div class="tuchange">
        <div class="slider">
            <ul class="slider-main">
                <li class="slider-panel">
                    <img alt=""  src="/Public/Home/imgs/toubutu1.png">
                </li>
                <li class="slider-panel">
                    <img alt=""  src="/Public/Home/imgs/toubutu2.png">
                </li>

            </ul>
        </div>
    </div>
    <div  style="position: absolute; right: 0px;top: 10px;"><img src="/Public/Home/imgs/toubutu3.png"></div>
    <div style="position: absolute; right: 0px;top: 10px;">

    </div>
</div>

<!--头部结束-->
<!--头部导航栏开始-->
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
                <li><a href="#">下载中心</a></li>
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

<!--导航栏下边图片  结束-->
<!--content开始-->
<div class="content  clear">
    <!--整体布局左边内容开始-->
    <div class="content_left">

        <!--左边内容1开始-->
        <div class="content_left1">
            <div class="content_left1_left">
                <ul>
                    <?php if(is_array($rotaion)): foreach($rotaion as $key=>$vo): ?><li><img src="<?php echo ($vo["news_big_img"]); ?>" alt="图片<?php echo ($key+1); ?>"/></li><?php endforeach; endif; ?>
                </ul>

                <ol>
                    <li class="current">1</li>
                    <li>2</li>
                    <li>3</li>
                    <li >4</li>
                    <li>5</li>
                    <li>6</li>
                </ol>

            </div>
            <div  class="content_left1_right">

                <div class="tzgg_1">
                    <ul>
                        <li class="s" ><a href="http://www.sn119.gov.cn/index.php?m=content&c=index&a=lists&catid=2">消防要闻</a></li>
                        <div class="gengduo right"><a href="#">更多>></a></div>
                        <div class="clear"></div>
                    </ul>

                </div>
                <div id="yysweb_com_news2" class="yysweb_com_news2">
                    <div class="dis" name=f>
                        <h3 class="h3" ><a href="#">李彦军总队长亲临支队调研指导工作</a></h3>
                        <div class="xfyw_1">
                            <ul>
                                <li><span>[06-29]</span><a class="a_biaoqian" href="#" alt="关于举办全省灭火器维修技能人员培训的通知" target="_blank">关于举办全省灭火器维修技能...</a></li>
                                <li><span>[06-06]</span><a class="a_biaoqian" href="#" alt="关于办事直通车无法使用的通知" target="_blank">关于办事直通车无法使用的通...</a></li>
                                <li><span>[04-06]</span><a class="a_biaoqian" href="#" alt="清理整治全省一级注册消防工程师资格证书挂靠问题的通知" target="_blank">清理整治全省一级注册消防工...</a></li>
                                <li><span>[01-25]</span><a class="a_biaoqian" href="#" alt="关于继续实行消防技术服务机构临时资质管理的通知" target="_blank">关于继续实行消防技术服务机...</a></li>
                                <li><span>[01-06]</span><a class="a_biaoqian"  href="#" alt="陕西省公安消防总队二〇一七年接收普通高等学校毕业生简" target="_blank">陕西省公安消防总队二〇一七...</a></li>
                                <li><span>[12-23]</span><a class="a_biaoqian" href="#" alt="关于不再开展陕西消防产品流向信息服务平台有关事项的通" target="_blank">关于不再开展陕西消防产品流...</a></li>


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--左边内容1结束-->
        <!--左边内容2开始-->
        <div class="content_left2">
            <div class="content_left2_left">
                <div class="content_left2_left_top">
                    <ul>
                        <li style="float: left;margin-left: 5px;margin-top: 5px">支队动态</li>
                        <li style="float: right;margin-top: 5px"><a href="#">更多>></a></li>
                    </ul>
                </div>
                <div class="content_left2_left_main">
                    <ul>
                        <li><img src="/Public/Home/imgs/sousu.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通..</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/sousu.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/sousu.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/sousu.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/sousu.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                    </ul>
                </div>
            </div>
            <div class="content_left2_right">
                <div class="content_left2_right_top">
                    <ul>
                        <li style="float: left;margin-left: 5px;margin-top: 5px">推荐阅读</li>
                        <li style="float: right;margin-top: 5px"><a href="#">更多>></a></li>
                    </ul>
                </div>
                <div class="content_left2_right_main">
                    <ul>
                        <li><img src="/Public/Home/imgs/shuji.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通..</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/shuji.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/shuji.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/shuji.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                        <li><img src="/Public/Home/imgs/shuji.png"/><a class="a_biaoqian" href="#">关于办事直通车无法使用的通....</a><span>06-29</span></li>
                    </ul>
                </div>
            </div>


            <!--左边内容2结束-->

        </div>

        <!--左边内容3开始-->
        <div class="content_left3">

            <div id="r1_tabColumn" class="tabTurnPlay">
                <nav class="navTitle">
                    <ul class="nav_newstile">
                        <li class="cur"> <a href="/article/b/">政策发布</a> </li>
                        <li  > <a href="/article/zhengcejd/">政策解读</a> </li>
                        <li class="cur"><a href="http://diagram.mofcom.gov.cn/" target="_blank">政策图解</a></li>
                        <li> <a href="/article/h/">工作通知</a> </li>
                        <li    class="cur"> <a href="/article/jhguihua/">人事信息</a> </li>
                        <li> <a href="/article/cwgongzuo/">财务信息</a> </li>
                    </ul>
                </nav>
                <div rel="con1" class="con">
                    <ul>
                        <!--==1现在是显示静态的，2如果需要动态的，把下面一行里面的注释两字以及“下面一行字”之后的内容去掉及可。===-->
                        <!--注释#include virtual="/article/b/ini_f.html" -->

                        <li>
                            <a title="商务部公告2017年第34号 关于对产自朗盛德国有限公司和朗盛比利时有限公司的进口锦纶6切片倾销及倾销幅度期中复审裁定的公告" target="_blank" href="#">商务部公告2017年第34号 关于对产自朗盛德国有限公司和朗盛比利时有限公司的进口锦纶6切片倾销及倾销幅度期中复审裁定的公告</a><span>2017-7-20</span>
                        </li>

                        <li>
                            <a title="关于中国诉美国反倾销措施世贸争端案（DS471）涉及的美对中国油井管等13种产品反倾销措施后续执行工作的通知" target="_blank" href="#">关于中国诉美国反倾销措施世贸争端案（DS471）涉及的美对中国油井管等13种产品反倾销措施后续执行工作的通知</a><span>2017-6-22</span>
                        </li>

                        <li>
                            <a title="发展改革委 商务部令2017年第4号 外商投资产业指导目录（2017年修订）" target="_blank" href="#">发展改革委 商务部令2017年第4号 外商投资产业指导目录（2017年修订）</a><span>2017-6-28</span>
                        </li>

                        <li>
                            <a title="商务部公告2017年第30号　关于终止对原产于俄罗斯、韩国、日本和美国的进口环氧氯丙烷反倾销措施的公告" target="_blank" href="#">商务部公告2017年第30号　关于终止对原产于俄罗斯、韩国、日本和美国的进口环氧氯丙烷反倾销措施的公告</a><span>2017-6-27</span>
                        </li>

                        <li>
                            <a title="商务部公告2017年第32号 关于原产于韩国、泰国和马来西亚的进口共聚聚甲醛反倾销调查的初步裁定的公告" target="_blank" href="#">商务部公告2017年第32号 关于原产于韩国、泰国和马来西亚的进口共聚聚甲醛反倾销调查的初步裁定的公告</a><span>2017-6-26</span>
                        </li>


                        <li>
                            <a title="商务部公告2017年第31号 关于对原产于韩国、台湾地区和美国的进口苯乙烯进行反倾销立案调查的公告" target="_blank" href="http://www.mofcom.gov.cn/article/b/c/201706/20170602598198.shtml">商务部公告2017年第31号 关于对原产于韩国、台湾地区和美国的进口苯乙烯进行反倾销立案调查的公告</a><span>2016-6-23</span>
                        </li>
                        <li class="more01"> <a href="/article/b/">更多>></a> </li>
                    </ul>
                </div>
                <div rel="con2" class="con dsn">
                    <ul>

                        <li>
                            <a title="商务部服贸司负责人解读《国际服务外包产业发展&ldquo;十三五&rdquo;规划》" target="_blank" href="http://www.mofcom.gov.cn/article/zhengcejd/bj/201705/20170502570289.shtml">商务部服贸司负责人解读《国际服务外包产业发展“十三五”规划》</a><span>2017-05-05</span>
                        </li><li>
                        <a title="《工业和信息化部 商务部关于加快我国包装产业转型发展的指导意见》的解读" target="_blank" href="http://www.mofcom.gov.cn/article/zhengcejd/bp/201704/20170402557679.shtml">《工业和信息化部 商务部关于加快我国包装产业转型发展的指导意见》的解读</a><span>2017-04-14</span>
                    </li><li>
                        <a title="商务部服贸司负责人解读《服务贸易发展&ldquo;十三五&rdquo;规划》" target="_blank" href="http://www.mofcom.gov.cn/article/zhengcejd/bj/201703/20170302531282.shtml">商务部服贸司负责人解读《服务贸易发展“十三五”规划》</a><span>2017-03-09</span>
                    </li><li>
                        <a title="商务部世贸司负责人解读《贸易便利化协定》条款" target="_blank" href="http://www.mofcom.gov.cn/article/zhengcejd/bl/201703/20170302530476.shtml">商务部世贸司负责人解读《贸易便利化协定》条款</a><span>2017-03-08</span>
                    </li><li>
                        <a title="1128家中华老字号迎政策礼包" target="_blank" href="http://www.mofcom.gov.cn/article/zhengcejd/bp/201702/20170202510956.shtml">1128家中华老字号迎政策礼包</a><span>2017-02-07</span>
                    </li><li>
                        <a title="商务部市场建设司负责人谈取消二手车限迁政策相关问题" target="_blank" href="http://www.mofcom.gov.cn/article/zhengcejd/bp/201701/20170102505770.shtml">商务部市场建设司负责人谈取消二手车限迁政策相关问题</a><span>2017-01-22</span>
                    </li>

                        <li class="more01"> <a href="/article/zhengcejd/">更多>></a> </li>
                    </ul>
                </div>
                <div rel="con3" class="con dsn">
                    <ul class="Ajszn">
                        <LI><a href="http://diagram.mofcom.gov.cn/mcp/590975decd91895dfb785731" target="_blank">共同推进农产品和农村市场体系建设的通知</a></LI>

                        <LI><a href="http://diagram.mofcom.gov.cn/mcp/58f6f1b3cd9189201e9c7df8" target="_blank">进一步推进开放型经济新体制综合试点试验的若干意见</a></LI>

                        <LI><a href="http://diagram.mofcom.gov.cn/mcp/5875cd49cd91892425631c48" target="_blank">生活服务业发展“十三五”规划</a></LI>

                        <LI><a href="http://diagram.mofcom.gov.cn/mcp/583e67c0cd9189347dd4c6c6" target="_blank">2016年深化经济体制改革重点工作的意见</a></LI>

                        <LI><a href="http://diagram.mofcom.gov.cn/mcp/583e6468cd9189347dd4c6b2" target="_blank">推动国内贸易流通体制改革发展标准化工作方案</a></LI>

                        <LI><a href="http://diagram.mofcom.gov.cn/mcp/583e640ecd9189347dd4c6ae" target="_blank">自贸协定签署历程</a></LI>
                        <li class="more01"><a href="http://diagram.mofcom.gov.cn/" target="_blank">更多>></a></li>
                    </ul>
                </div>
                <div rel="con4" class="con dsn">
                    <ul>
                        <!--==1现在是显示静态的，2如果需要动态的，把下面一行里面的注释两字以及“下面一行字”之后的内容去掉及可。===-->

                        <li>
                            <a title="关于进一步做好行业协会商会政策和业务指导工作的通知" target="_blank" href="http://www.mofcom.gov.cn/article/h/redht/201707/20170702615636.shtml">关于进一步做好行业协会商会政策和业务指导工作的通知</a><span>2017-07-26</span>
                        </li><li>
                        <a title="商务部办公厅关于进一步加强对外劳务合作管理的通知" target="_blank" href="http://www.mofcom.gov.cn/article/h/redht/201707/20170702615045.shtml">商务部办公厅关于进一步加强对外劳务合作管理的通知</a><span>2017-07-24</span>
                    </li><li>
                        <a title="商务部 财政部办公厅关于2017年度外经贸发展专项资金（进口贴息事项）申报工作的通知" target="_blank" href="http://www.mofcom.gov.cn/article/h/redht/201707/20170702613415.shtml">商务部 财政部办公厅关于2017年度外经贸发展专项资金（进口贴息事项）申报工作的通知</a><span>2017-07-21</span>
                    </li><li>
                        <a title="商务部办公厅关于开展商贸领域安全生产大检查的通知" target="_blank" href="http://ltfzs.mofcom.gov.cn/article/smzx/201707/20170702611919.shtml">商务部办公厅关于开展商贸领域安全生产大检查的通知</a><span>2017-07-19</span>
                    </li><li>
                        <a title="商务部办公厅 国家标准委办公室关于商贸物流标准化专项行动第三批重点推进企业（协会）的通知" target="_blank" href="http://ltfzs.mofcom.gov.cn/article/smzx/201707/20170702609927.shtml">商务部办公厅 国家标准委办公室关于商贸物流标准化专项行动第三批重点推进企业（协会）的通知</a><span>2017-07-14</span>
                    </li><li>
                        <a title="商务部、中央文明办关于推动餐饮行业深入开展&ldquo;厉行勤俭节约 反对餐饮浪费&rdquo;工作的通知" target="_blank" href="http://www.mofcom.gov.cn/article/h/redht/201707/20170702608472.shtml">商务部、中央文明办关于推动餐饮行业深入开展“厉行勤俭节约 反对餐饮浪费”工作的通知</a><span>2017-07-12</span>
                    </li>

                        <li class="more01"> <a href="/article/h/">更多>></a> </li>
                    </ul>
                </div>
                <div rel="con5" class="con dsn">
                    <ul>

                        <li>
                            <a title="商务部2017年公开遴选面试和职位业务水平测试公告" target="_blank" href="http://rss.mofcom.gov.cn/article/c/f/j/201707/20170702612108.shtml">商务部2017年公开遴选面试和职位业务水平测试公告</a><span>2017-07-21</span>
                        </li><li>
                        <a title="关于转载《2017年中央机关公开遴选和公开选调公务员公告》的通知" target="_blank" href="http://rss.mofcom.gov.cn/article/c/f/j/201705/20170502573964.shtml">关于转载《2017年中央机关公开遴选和公开选调公务员公告》的通知</a><span>2017-05-12</span>
                    </li><li>
                        <a title="商务部关于为2017年度拟录用公务员办理签约商调等手续的通知" target="_blank" href="http://rss.mofcom.gov.cn/article/c/f/j/201705/20170502570380.shtml">商务部关于为2017年度拟录用公务员办理签约商调等手续的通知</a><span>2017-05-05</span>
                    </li><li>
                        <a title="关于王贵际、吴彤彫免职事项" target="_blank" href="http://rss.mofcom.gov.cn/article/xxfb/201705/20170502567364.shtml">关于王贵际、吴彤彫免职事项</a><span>2017-05-02</span>
                    </li><li>
                        <a title="商务部2017年拟录用公务员（第二批）公示公告" target="_blank" href="http://rss.mofcom.gov.cn/article/c/f/j/201704/20170402561420.shtml">商务部2017年拟录用公务员（第二批）公示公告</a><span>2017-04-20</span>
                    </li><li>
                        <a title="商务部2017年拟录用公务员（第一批）公示公告" target="_blank" href="http://rss.mofcom.gov.cn/article/c/f/j/201704/20170402554873.shtml">商务部2017年拟录用公务员（第一批）公示公告</a><span>2017-04-10</span>
                    </li>

                        <li class="more01"> <a href="/article/jhguihua/">更多>></a> </li>
                    </ul>
                </div>
                <div rel="con6" class="con dsn">
                    <ul>
                        <!--注释#include virtual="/article/cwgongzuo/ini_f.html" -->
                        <!--现在显示的是下面静态的-->

                        <li>
                            <a title="中国国际经济技术交流中心物资项目中标公告" target="_blank" href="http://www.mofcom.gov.cn/article/cwgongzuo/jingmaoluntan/zhongbiao/201707/20170702616094.shtml">中国国际经济技术交流中心物资项目中标公告</a><span>2017-7-26</span>
                        </li>

                        <li>
                            <a title="商务部对外投资和经济合作司修订《跨国经营管理人才培训教材》公开招标公告" target="_blank" href="http://www.mofcom.gov.cn/article/cwgongzuo/jingmaoluntan/zhaobiao/201707/20170702616093.shtml">商务部对外投资和经济合作司修订《跨国经营管理人才培训教材》公开招标公告</a><span>2017-7-26</span>
                        </li>


                        <li>
                            <a title="商务部机关服务局商务部方庄芳城园三区19号楼综合整治项目电梯采购及安装竞争性谈判公告" target="_blank" href="http://www.mofcom.gov.cn/article/cwgongzuo/jingmaoluntan/jzxtp/201707/20170702616092.shtml">商务部机关服务局商务部方庄芳城园三区19号楼综合整治项目电梯采购及安装竞争性谈判公告</a><span>2017-7-26</span>
                        </li>

                        <li>
                            <a title="商务部机关服务局商务部东四十条甲100号楼综合整治项目电梯采购及安装竞争性谈判公告" target="_blank" href="http://www.mofcom.gov.cn/article/cwgongzuo/jingmaoluntan/jzxtp/201707/20170702616089.shtml">商务部机关服务局商务部东四十条甲100号楼综合整治项目电梯采购及安装竞争性谈判公告</a><span>2017-7-26</span>
                        </li>

                        <li>
                            <a title="中国国际经济技术交流中心教学设备项目更正公告" target="_blank" href="http://www.mofcom.gov.cn/article/cwgongzuo/jingmaoluntan/gengzheng/201707/20170702615392.shtml">中国国际经济技术交流中心教学设备项目更正公告</a><span>2017-7-25</span>
                        </li>

                        <li>
                            <a title="中国国际经济技术交流中心物资项目更正公告" target="_blank" href="http://www.mofcom.gov.cn/article/cwgongzuo/jingmaoluntan/gengzheng/201707/20170702615388.shtml">中国国际经济技术交流中心物资项目更正公告</a><span>2017-7-25</span>
                        </li>
                        <li class="more01"> <a href="#">更多>></a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--左边内容3结束-->
        <!--左边标语开始-->
        <div class="biaoyu">
            <img src="/Public/Home/imgs/biaoyu.jpg"/>
        </div>

        <!--左边内容4开始-->
        <div class="content_left4">
            <div class="wrapper1">
                <ul class="wrapper1_top">
                    <li class="active">媒体报道<span>◆</span></li>
                    <li >灭火救援</li>

                </ul>
                <div class="wrapper1_news">
                    <div class="main1 selected">
                        <ul>
                            <li><img src="/Public/Home/imgs/meiti.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先利其器”----对 ...</a></li>
                            <li><img src="/Public/Home/imgs/meiti.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先利其器”---- ...</a></li>
                            <li><img src="/Public/Home/imgs/meiti.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先利其器”----对 ...</a></li>
                            <li><img src="/Public/Home/imgs/meiti.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先利其器”- ...</a></li>
                            <li><img src="/Public/Home/imgs/meiti.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先利其器”--- ...</a></li>
                            <li><img src="/Public/Home/imgs/meiti.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先利其器”- ...</a></li>


                        </ul>
                    </div>
                    <div class="main1">
                        <ul>
                            <li><img src="/Public/Home/imgs/miehuo.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结 维护</a></li>
                            <li><img src="/Public/Home/imgs/miehuo.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车 及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/miehuo.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的 能及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/miehuo.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、 用维护</a></li>
                            <li><img src="/Public/Home/imgs/miehuo.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防 使用维护</a></li>
                            <li><img src="/Public/Home/imgs/miehuo.png"><a class="a_biaoqian" href="###">黎维亮：浅 及使用维护</a></li>


                        </ul>
                    </div>

                </div>
            </div>
            <div class="wrapper2">
                <ul class="wrapper2_top">
                    <li class="active">调研文章<span>◆</span></li>
                    <li >感悟消防</li>

                </ul>
                <div class="wrapper2_news">
                    <div class="main2 selected">
                        <ul>
                            <li><img src="/Public/Home/imgs/diaoyan.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必层部队管...</a></li>
                            <li><img src="/Public/Home/imgs/diaoyan.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必先当前队管...</a></li>
                            <li><img src="/Public/Home/imgs/diaoyan.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，器”对当前管...</a></li>
                            <li><img src="/Public/Home/imgs/diaoyan.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事，必对当前基层部队管...</a></li>
                            <li><img src="/Public/Home/imgs/diaoyan.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其事器”对当前基层部队管...</a></li>
                            <li><img src="/Public/Home/imgs/diaoyan.png"><a class="a_biaoqian" href="###">刘奎林：“工欲善其器”对当前基层部队管...</a></li>

                        </ul>
                    </div>
                    <div class="main2">
                        <ul>
                            <li><img src="/Public/Home/imgs/ganwu.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、性能及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/ganwu.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、性能及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/ganwu.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、性能及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/ganwu.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、性能及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/ganwu.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、性能及使用维护</a></li>
                            <li><img src="/Public/Home/imgs/ganwu.png"><a class="a_biaoqian" href="###">黎维亮：浅谈举高消防车的结构、性能及使用维护</a></li>

                        </ul>
                    </div>

                </div>
            </div>

        </div> <!--左边内容4结束-->

        <!--左边内容5开始-->
        <div class="content_left5">
            <img src="/Public/Home/imgs/lanse.jpg">

            <div  class="content_left5_input">
                <p>友情链接:</p>
                <select style='width:200px;'onChange='goto1_site(this)'  >
                    <option value='' selected>---------各公安厅局---------</option>
                    <option value=''>———————————————</option>
                    <option value="http://www.people.com.cn/" >人民网</option>
                    <option value="http://www.sina.com.cn/" >新浪网</option>
                    <option value="http://www.sohu.com/" >搜狐网</option><option value="http://www.163.com" >网易</option>
                    <option value="http://ziyuan.eol.cn/index.shtml" >各类教育资源</option>
                    <option value="http://www.ha.edu.cn/front/Index.aspx" >教科网河南节点</option></select>
                <select style='width:200px;'onChange='goto2_site(this)'  >
                    <option value='' selected>---------各省市消防总队---------</option>
                    <option value=''>———————————————</option>
                    <option value="http://www.people.com.cn/" >人民网</option>
                    <option value="http://www.sina.com.cn/" >新浪网</option>
                    <option value="http://www.sohu.com/" >搜狐网</option><option value="http://www.163.com" >网易</option>
                    <option value="http://ziyuan.eol.cn/index.shtml" >各类教育资源</option>
                    <option value="http://www.ha.edu.cn/front/Index.aspx" >教科网河南节点</option></select>
                <select style='width:200px;'onChange='goto3_site(this)'  >
                    <option value='' selected>---------各地市消防总队---------</option>
                    <option value=''>———————————————</option>
                    <option value="http://www.people.com.cn/" >人民网</option>
                    <option value="http://www.sina.com.cn/" >新浪网</option>
                    <option value="http://www.sohu.com/" >搜狐网</option><option value="http://www.163.com" >网易</option>
                    <option value="http://ziyuan.eol.cn/index.shtml" >各类教育资源</option>
                    <option value="http://www.ha.edu.cn/front/Index.aspx" >教科网河南节点</option></select>
                <select style='width:200px;'onChange='goto4_site(this)'  >
                    <option value='' selected>---------其他链接---------</option>
                    <option value=''>———————————————</option>
                    <option value="http://www.people.com.cn/" >人民网</option>
                    <option value="http://www.sina.com.cn/" >新浪网</option>
                    <option value="http://www.sohu.com/" >搜狐网</option><option value="http://www.163.com" >网易</option>
                    <option value="http://ziyuan.eol.cn/index.shtml" >各类教育资源</option>
                    <option value="http://www.ha.edu.cn/front/Index.aspx" >教科网河南节点</option></select>

            </div>

        </div>
    </div>
    <!--整体布局左边内容结束-->
    <!--整体布局右边内容开始-->
    <div  class="content_right">
        <!--右边内容头部开始-->
        <div  class="content_right_top">
            <ul class="list-h">
                <li style="vertical-align:middle"><img src="/Public/Home/imgs/xiaolaba.jpg" alt="" /><a href="#" >领导讲话</a></li>
                <li style="vertical-align:middle"><img src="/Public/Home/imgs/xiaolaba.jpg" alt="" /><a href="#" >办公系统</a></li>
                <li style="vertical-align:middle"><img src="/Public/Home/imgs/xiaolaba.jpg" alt="" /><a href="#" >今日值班</a></li>
                <li style="vertical-align:middle"><img src="/Public/Home/imgs/tongzhi.png" alt="" /><a href="#">通知公告</a></li>
                <li style="vertical-align:middle"><img src="/Public/Home/imgs/xiaolaba.jpg" alt="" /><a href="#" >专项工作</a></li>
                <li style="vertical-align:middle"><img src="/Public/Home/imgs/xiaolaba.jpg" alt="" /><a href="#" >计划安排</a></li>
                <li  class="tougao" style="vertical-align:middle"><img src="/Public/Home/imgs/shuju.png" alt="" /><a href="#" >投稿统计</a>
                    <div class="tg">
                        <span  >名次</span>
                        <span  >单位名称</span>
                        <span >稿件数量</span>
                    </div>
                    <div class="tg_content"  id="tg_content1">
                        <div   id="dd1">
                            <table >
                                <?php if(is_array($cate_rank)): foreach($cate_rank as $key=>$vo): ?><tr>
                                        <td><?php echo ($key+1); ?></td>
                                        <td style="font-size: 10px"> <?php echo (mb_substr($vo["role_name"],0,4,'utf-8')); ?>..</td>
                                        <td > <?php echo ($vo["rank"]); ?></td>
                                    </tr><?php endforeach; endif; ?>

                            </table>
                        </div>
                        <div  id="dd2"></div>
                    </div>
                    <div class="tg1" >最近30天</div>
                </li>

            </ul>
        </div><!--右边内容头部开始-->
        <div class="jctj" ><span class="jingcai1">精彩图集</span><a class="yingwm1" href="###">more</a></div>
        <div   class="content_right_center">
            <div id="demo">
                <div id="demo1">
                    <a  href="#"><img src="/Public/Home/tt/gundongtu1.jpg"border="0"/>
                        <div>文字描述</div></a>
                    <a  href="#"><img  src="/Public/Home/tt/gundongtu2.jpg"border="0"/><div>文字描述</div></a>
                    <a href="#"><img  src="/Public/Home/tt/gundongtu3.jpg"border="0"/><div>文字描述</div></a>
                    <a  href="#"><img src="/Public/Home/tt/gundongtu4.jpg"border="0"/><div>文字描述</div></a>
                    <a  href="#"><img src="/Public/Home/tt/gundongtu5.jpg"border="0"/><div>文字描述</div></a>
                    <a  href="#"><img src="/Public/Home/tt/gundongtu6.jpg"border="0"/><div>文字描述</div></a>
                    <a  href="#"><img src="/Public/Home/tt/gundongtu7.jpg"border="0"/><div>文字描述</div></a>
                </div>
                <div id="demo2"></div>
            </div>
        </div>
        <div  style="clear: both"></div>
        <div class="jcsp"  style="margin-bottom: 10px"><span class="jingcai2">精彩视频</span><a class="yingwm2" href="###">more</a></div>
        <div  class="content_right_bottom" >
            <img src="/Public/Home/imgs/huojing.png" style="width: 100%;height:250px;">
        </div>
    </div>
    <!--整体布局右边内容结束-->
</div>
<div class="clear"  style="clear: both"></div>
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
<script>

    var speed=50; //数字越大速度越慢
    var tab=document.getElementById("demo");
    var tab1=document.getElementById("demo1");
    var tab2=document.getElementById("demo2");
    tab2.innerHTML=tab1.innerHTML;
    function Marquee(){
        if(tab2.offsetTop-tab.scrollTop<=0)//当滚动至demo1与demo2交界时
            tab.scrollTop-=tab1.offsetHeight //demo跳到最顶端
        else{
            tab.scrollTop++
        }
    }
    var MyMar=setInterval(Marquee,speed);
    tab.onmouseover=function() {clearInterval(MyMar)};//鼠标移上时清除定时器达到滚动停止的目的
    tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};//鼠标移开时重设定时器


</script>

<script>

    var speeds=50; //数字越大速度越慢
    var tab5=document.getElementById("tg_content1");
    var tab6=document.getElementById("dd1");
    var tab7=document.getElementById("dd2");
    tab7.innerHTML=tab6.innerHTML;
    function Marquee(){
        if(tab7.offsetTop-tab5.scrollTop<=0)//当滚动至demo1与demo2交界时
            tab5.scrollTop-=tab6.offsetHeight //demo跳到最顶端
        else{
            tab5.scrollTop++
        }
    }
    var MyMar=setInterval(Marquee,speeds);
    tab5.onmouseover=function() {clearInterval(MyMar)};//鼠标移上时清除定时器达到滚动停止的目的
    tab5.onmouseout=function() {MyMar=setInterval(Marquee,speeds)};//鼠标移开时重设定时器

</script>