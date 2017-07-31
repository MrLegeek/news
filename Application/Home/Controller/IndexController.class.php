<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $new=D('news');
        //轮播图
        $rotaion_sql='SELECT * FROM news where is_rotaion=1 ORDER BY add_time DESC ';
        $rotaion=$new->query($rotaion_sql);
//        dump($rotaion);die;
        $this->assign('rotaion',$rotaion);
        //栏目排名
        $cate_sql='SELECT news.role_id,role.role_name,COUNT(role.role_name) as rank  
                FROM news,role WHERE del_flag=0 AND news.role_id=role.id 
                GROUP BY role_id ORDER BY rank DESC';
        $cate_rank=$new->query($cate_sql);
//        dump($cate_rank);die;
        $this->assign('cate_rank',$cate_rank);

        $this->display();
    }


}