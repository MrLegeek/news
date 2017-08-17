<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/8/14
 * Time: 9:43
 */
namespace Admin\Controller;
use Boris\DumpInspector;
use Think\Controller;

class DutyController extends Controller
{
    public function duty_list()
    {
        $dutyModel=D('Duty');
        $dutymsg=$dutyModel->search();
        $this->assign(array(
            'dutymsg' => $dutymsg['duty_msg'],
            'page' => $dutymsg['page'],
        ));
        $this->display();
    }

//
////    //搜索内容的回显
//    public function duty_search()
//    {
//        if(IS_AJAX){
//            $logmin=$_GET['logmin'];
//            $logmax=$_GET['logmax'];
//
//            $time=array();
//            $time['cate_name']=$logmin;
//            $time['role_name']=$logmax;
//            if($time){
//                $this->ajaxReturn($time);
//            }else{
//                $this->ajaxReturn(0);
//            }
//        }
//    }

//    值班信息添加
    public function duty_add()
    {
       //判断新添加值班信息日期是否存在，不能重复添加
        $dutyModel=D('Duty');
        $_POST['duty_time']=strtotime($_POST['duty_time']);
         if(IS_POST)
        {
            if($dutyModel->create(I('post.'), 1))
            {
                if($id = $dutyModel->add())
                {
                    $this->success('添加成功，返回继续添加！');
                    exit;
                }
            }
            $this->error($dutyModel->getError());
        }
        $this->display();
    }
//根据获取到的日期查找对应时间的值班信息
    public function duty_find()
    {
     if(IS_AJAX){
            $duty_time=strtotime($_GET['duty_time']);
            if(!$duty_time){
                $this->error('时间不能为空!');
            }
            $dutyModel=D('Duty');
            $dutymsg=$dutyModel->where('duty_time='.$duty_time)->find();
            if($dutymsg){
                $this->ajaxReturn($dutymsg);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }


 //值班信息编辑
  public function duty_edit()
    {
  $id = I('get.id');
        $model = M('Duty');
        $data = $model->find($id);
        $this->assign('duty_msg', $data);
        if(IS_POST)
        {
       if($model->create(I('post.'), 2))
            {
               // dump(I('post.'));
                if($model->save() !== false)
                {
                    $this->success('修改成功！', U('Duty/duty_list'));
                    exit;
                }
            }
            $this->error($model->getError());
        }
       $this->display();
    }
//留言信息删除
    function duty_del(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $news=D("duty");
            $map['id']=array("EQ",$id);
            $res=$news->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($id);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }
}
