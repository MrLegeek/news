<?php

namespace Home\Controller;
use Think\Controller;
class NewslistController extends CommonController{
    public function news_list()
    {
        //通信手册
        $this->upload_url = $this->gettxl();

        $category = D('category');
        // $maps['id']=array('between','1,5');
        $catemsg = $category->where('cate_id>1 and cate_id<7')->select();
        $this->assign('catemsg', $catemsg);

        $cate_id = I('get.cate_id');
        $catemsgAll = $category->find($cate_id);

        $news = D('News');
//        $news_cate = D('news_cate');
        if ($cate_id == 99) {//  地方推荐阅读  $cate_id 随意定义为99
            $cate_news_sql = "SELECT news.local_id,`local`.local_name,news.title,news.is_top,news.id,news.sort_id
                FROM news,`local`  WHERE news.local_id=`local`.local_id AND role_id=1  AND news.`status`=1  AND del_flag=0
                ORDER BY add_time DESC ";
        }
        else {
            $cate_news_sql = "select news.id,news.add_time,news.title,news.sort_id from news 
                where news.id in (SELECT news_cate.news_id from  news_cate WHERE news_cate.cate_id=" . $cate_id . ")
                and del_flag=0 and status=1 ORDER BY add_time desc ";
         }
        $info=$news->query($cate_news_sql);
//        dump($info);

        //实现数据分页效果
        //① 获得总记录数目
        $total = count($info);
//                dump($news->getLastSql());
        $per = 10;//每页显示7条数据
        //② 实例化分页类对象
        $page_obj = new \Common\Common\Page($total, $per);
        //③ 自定义sql语句，获得每页信息
        
        $sql2 = $cate_news_sql.$page_obj->limit;
        $newsmsg = $news -> query($sql2);

        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);


         $this->assign('catemsgAll',$catemsgAll);
         $this->assign('newsmsg',$newsmsg);

        $this->display();
    }
}