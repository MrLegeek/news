<?php
namespace Home\Controller;

use Home\Controller;
//use Think\Controller;
class IndexController extends CommonController   {
    public function index(){
        //通信录手册
        $this->upload_url=$this->gettxl();


        //精彩视频获取
        $newsModel=D('News');
        $sql="select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=21 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,1";
        $videoOne=$newsModel->query($sql);
        $this->assign('video',$videoOne[0]);

        //新闻头条显示部分
//        $topInfo1=$newsModel->query("SELECT * from news where del_flag=0 and is_top=1 AND sort_id =1 limit 1");
        $topInfo1=$newsModel->query(" SELECT * 
             from (SELECT *  from news  where del_flag=0 and is_top=1 and sort_id>=0 ) as a
             WHERE a.sort_id=(SELECT MAX(sort_id) FROM news where del_flag=0 and is_top=1) limit 1");
//        $topInfo2=$newsModel->query("SELECT * from news where del_flag=0 and is_top=1 and status=1  AND sort_id =2 ORDER BY add_time desc");
        $topInfo2=$newsModel->query(" SELECT * from ( SELECT * from news where del_flag=0 and is_top=1 and sort_id>=0) as a
            WHERE a.sort_id<(SELECT MAX(sort_id) FROM news where del_flag=0 and is_top=1)
            ORDER BY a.sort_id desc limit 0,2");
//        dump($topInfo1);
        $this->topInfo1=$topInfo1[0];
        $this->topInfo2=$topInfo2;

        //头条显示  no use
        $newstop=$newsModel->where('is_top=1 and  status=1')->order('id desc')->find();
        $this->assign('newstop',$newstop);

        //轮播图
        $rotaion_sql='SELECT * FROM news where is_rotaion=1 AND del_flag=0 and status=1 ORDER BY sort_id DESC limit 0,4';
        $rotaion=$newsModel->query($rotaion_sql);
        $this->assign('rotaion',$rotaion);

        //消防要闻
        $info_xfywsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=7 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,8';
        $info_xfyw=$newsModel->query($info_xfywsql);
        $this->assign('info_xfyw',$info_xfyw);

        //支队动态
        $info_zddtsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=8 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,8';
        $info_zddt=$newsModel->query($info_zddtsql);
        $this->assign('info_zddt',$info_zddt);

        //推荐阅读
        $info_tjydsql='SELECT news.local_id,`local`.local_name,news.title,news.is_top,news.id,news.sort_id,news.title_color
                FROM news,`local`  
                WHERE news.local_id=`local`.local_id AND news.is_top=1  AND news.`status`=1  AND del_flag=0
                ORDER BY sort_id DESC  LIMIT 0,8';
        $info_tjyd=$newsModel->query($info_tjydsql);
        $this->assign('info_tjyd',$info_tjyd);

        //媒体报道
        $info_mtbdsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=16 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,6';
        $info_mtbd=$newsModel->query($info_mtbdsql);
        $this->assign('info_mtbd',$info_mtbd);

        //灭火救援
        $info_mhjysql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=17 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,6';
        $info_mhjy=$newsModel->query($info_mhjysql);
        $this->assign('info_mhjy',$info_mhjy);

        //调研文章
        $info_tywzsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=18 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,6';
        $info_dywz=$newsModel->query($info_tywzsql);
        $this->assign('info_dywz',$info_dywz);

        //感悟消防
        $info_gwxfsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=19 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,6';
        $info_gwxf=$newsModel->query($info_gwxfsql);
        $this->assign('info_gwxf',$info_gwxf);

        //图片栏目
        $info_tplmsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=20 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,6';
        $info_tplm=$newsModel->query($info_tplmsql);
        $this->assign('info_tplm',$info_tplm);


        //栏目排名  同数量并排名次
//        $rank_sql="SELECT  obj.local_id, obj.news_sum, obj.local_name,
//                    CASE
//                    WHEN @rowtotal = obj.news_sum THEN
//                         @local_rank
//                    WHEN @rowtotal := obj.news_sum THEN
//                         @local_rank :=@local_rank + 1
//                    WHEN @rowtotal = 0 THEN
//                         @local_rank :=@local_rank + 1
//                    END AS local_rank
//                    FROM(
//                    SELECT news.local_id,local.local_name,COUNT(news.local_id) as news_sum
//                    FROM news,local
//                    WHERE del_flag=0 AND `status`=1 AND news.local_id=local.local_id
//                    GROUP BY news.local_id ORDER BY news_sum DESC
//                    ) AS obj,
//                    (SELECT @local_rank := 0 ,@rowtotal := NULL) r";

//        $rank_sql="SELECT
//        obj.local_id,obj.news_sum,obj.local_name,@rownum := @rownum + 1 AS rownum
//        FROM
//        (
//         SELECT news.local_id,local.local_name,COUNT(news.local_id) as news_sum
//             FROM news,local
//             WHERE del_flag=0 AND `status`=1 AND news.local_id=local.local_id
//             GROUP BY news.local_id ORDER BY news_sum DESC  LIMIT 1,10
//        ) AS obj,
//        (SELECT @rownum := 0) r";

        $rank_sql="SELECT
            obj.local_id,obj.news_sum,obj.local_name,@rownum := @rownum + 1 AS rownum
            FROM(
                SELECT news.local_id,local.local_name,COUNT(news.local_id) as news_sum  
                FROM news,local 
                WHERE del_flag=0 AND `status`=1 AND news.local_id=local.local_id and news.add_time>=".(time()-30*86400).
            " and news.add_time<=".time()."
                GROUP BY news.local_id ORDER BY news_sum DESC LIMIT 1,10
            ) AS obj,
            (SELECT @rownum := 0) r";

        $local_rank=$newsModel->query($rank_sql);
//        dump($newsModel->getLastSql());
//        dump($local_rank);
        $this->assign('local_rank',$local_rank);

 //     1综合新闻
        $maxIdSql="SELECT news.local_id,`local`.local_name,news.title,news.id,news.sort_id,news.add_time ,news.title_color
            FROM news,`local` 
            WHERE news.local_id=`local`.local_id AND role_id=1  AND news.`status`=1  AND del_flag=0
            ORDER BY news.add_time DESC LIMIT 0,16";
        $maxIdRes=$newsModel->query($maxIdSql);
        foreach ($maxIdRes as $k=>$v){
            $info=$newsModel->field('title')->where('id='.$v['id'])->find();
            $maxIdRes[$k]['title']=$info['title'];
        }
//        dump($maxIdRes);
        $this->localInfo=$maxIdRes;

//       2司令部
        $maxIdSql2="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=1  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes2=$newsModel->query($maxIdSql2);
        foreach ($maxIdRes2 as $k=>$v){
            $info2=$newsModel->field('title,title_color')->where('id='.$v['id'])->find();
            $maxIdRes2[$k]['title']=$info2['title'];
            $maxIdRes2[$k]['title_color']=$info2['title_color'];
        }
//        dump($maxIdRes);
        $this->localInfo2=$maxIdRes2;

//       3政治
        $maxIdSql3="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=2  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes3=$newsModel->query($maxIdSql3);
        foreach ($maxIdRes3 as $k=>$v){
            $info3=$newsModel->field('title,title_color')->where('id='.$v['id'])->find();
            $maxIdRes3[$k]['title']=$info3['title'];
            $maxIdRes3[$k]['title_color']=$info3['title_color'];
        }
//        dump($maxIdRes3);
        $this->localInfo3=$maxIdRes3;

//       4后勤
        $maxIdSql4="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=3  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes4=$newsModel->query($maxIdSql4);
        foreach ($maxIdRes4 as $k=>$v){
            $info4=$newsModel->field('title,title_color')->where('id='.$v['id'])->find();
            $maxIdRes4[$k]['title']=$info4['title'];
            $maxIdRes4[$k]['title_color']=$info4['title_color'];
        }
//        dump($maxIdRes3);
        $this->localInfo4=$maxIdRes4;

//      5防火

        $maxIdSql5="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=4  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes5=$newsModel->query($maxIdSql5);
        foreach ($maxIdRes5 as $k=>$v){
            $info5=$newsModel->field('title,title_color')->where('id='.$v['id'])->find();
            $maxIdRes5[$k]['title']=$info5['title'];
            $maxIdRes5[$k]['title_color']=$info5['title_color'];
        }
//        dump($maxIdRes3);
        $this->localInfo5=$maxIdRes5;

//      6宣传

        $maxIdSql6="SELECT max(id) as id,news.local_id,`local`.local_name
                    FROM news,`local` 
                    WHERE news.local_id=`local`.local_id AND role_id=5  AND news.`status`=1  AND del_flag=0
                    GROUP BY local_id ORDER BY id DESC";
        $maxIdRes6=$newsModel->query($maxIdSql6);
        foreach ($maxIdRes6 as $k=>$v){
            $info6=$newsModel->field('title,title_color')->where('id='.$v['id'])->find();
            $maxIdRes6[$k]['title']=$info6['title'];
            $maxIdRes6[$k]['title_color']=$info6['title_color'];
        }
//        dump($maxIdRes3);
        $this->localInfo6=$maxIdRes6;

        //领导讲话
        $ldjh_sql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=23 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,2';
        $news_leader=$newsModel->query($ldjh_sql);
        $this->assign('news_leader',$news_leader);

        //值日
        $duty=D('duty');
        $today_time=mktime(0,0,0,date('m'),date('d'),date('Y'));
        $news_zr=$duty->where('duty_time='.$today_time)->select();
//        $news_zr=$newsModel->query($zr_sql);
        $this->assign('news_zr',$news_zr[0]);

//         dump($news_zr[0]);
//        echo "**********";
//        dump($beginToday=mktime(0,0,0,date('m'),date('d'),date('Y')));
//        echo "**********";
//
//        dump(time());
//        dump(date('Y-m-d',time()));
//        dump(date('Y-m-d',1506096000));

        //通知公告
        $news_tzggsql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=26 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,5';
        $news_tzgg=$newsModel->query($news_tzggsql);
        $this->assign('news_tzgg',$news_tzgg);
//        dump($news_tzgg);
        //头条通知公告
        $gonggaotopsql='select * from   news,news_cate 
            where news.id=news_cate.news_id  
            and news_cate.cate_id=26 and STATUS=1 and news.del_flag=0 AND is_top=1
            ORDER BY sort_id limit 0,2';
        $gonggaotop=$newsModel->query($gonggaotopsql);
        $this->assign('gonggaotop',$gonggaotop);

        //专项工作
        //select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=21 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,1"
        $zxgz_sql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=27 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,8';
        $news_specical_work=$newsModel->query($zxgz_sql);
        $this->assign('news_specical_work',$news_specical_work);

        //左侧边栏悬浮图
        $zcbkxgt_sql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=29 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,3';
        $zcbkxgt=$newsModel->query($zcbkxgt_sql);
        $this->assign('zcbkxgt',$zcbkxgt);
//      dump($zcbkxgt);
        //右侧边栏悬浮图
        $ycbkxgt_sql='select * from   news,news_cate where news.id=news_cate.news_id  and news_cate.cate_id=30 and STATUS=1 and news.del_flag=0 ORDER BY sort_id limit 0,2';
        $ycbkxgt=$newsModel->query($ycbkxgt_sql);
        $this->assign('ycbkxgt',$ycbkxgt);
//      dump($ycbkxgt);




        $this->display();

    }
}