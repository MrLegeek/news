<?php
/**
 * Created by PhpStorm.
 * User: Hello Warm
 * Date: 2017/7/30
 * Time: 18:16
 */

namespace Home\Controller;
use Think\Controller;

class LmsgController extends CommonController{

    public function lmsg_add(){
        //通信手册
        $this->upload_url=$this->gettxl();
        $type=session('zktype');
//        dump($type);

//        dump($_POST);
        if(IS_POST){
            if(session('zhusername')==null){
                $this->success("登陆后才能留言，请登录！！",U('login/login'));
                exit();
            }
            $info=$_POST;
            $info['leaver']=session('zhusername');
            $info['admin_id']=session('zhuserid');
            $info['leave_time']=time();
            $info['type']=$type;
            $lmsgModel=D('leave_msg');
            //dump($info);die;
            $res=$lmsgModel->add($info);
            if ($res){
                $this->success("留言成功！！",U('Lmsg/lmsg_list',array( 'type' => $type )));
            }else{
                $this->error("留言失败！！");
            }
        }else{
            $this->display();
        }

    }
    public function lmsg_list(){
        //通信手册
        $this->upload_url=$this->gettxl();

        if ($_GET['type']==0){
            $lmsgModel=D('LeaveMsg');
            session('zktype','0');
//            dump(session('zktype'));
            $total = $lmsgModel->where('del_flag=0 and status=1 and type=0')->count();
//                dump($total);
            $per = 10;//每页显示7条数据
            //② 实例化分页类对象
            $page_obj = new \Common\Common\Page($total, $per);
            //③ 自定义sql语句，获得每页信息

            $sql1 = $lmsgModel->where("del_flag=0 and status=1 and type =0")->fetchSql(true)->select();

            $sql2 =$sql1.$page_obj->limit;

            $lmsg = $lmsgModel -> query($sql2);
//        dump($lmsg);
            $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
            $this -> assign('pagelist',$pagelist);

            $this->assign('lmsg',$lmsg);
            $this->display();
        }elseif($_GET['type']==1){
            $lmsgModel=D('LeaveMsg');
            session('zktype','1');
//            dump(session('zktype'));
            $total = $lmsgModel->where('del_flag=0 and status=1 and type=1')->count();
//                dump($total);
            $per = 10;//每页显示7条数据
            //② 实例化分页类对象
            $page_obj = new \Common\Common\Page($total, $per);
            //③ 自定义sql语句，获得每页信息

            $sql1 = $lmsgModel->where("del_flag=0 and status=1 and type =1")->fetchSql(true)->select();

            $sql2 =$sql1.$page_obj->limit;

            $lmsg = $lmsgModel -> query($sql2);
//        dump($lmsg);
            $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
            $this -> assign('pagelist',$pagelist);

            $this->assign('lmsg',$lmsg);
            $this->display();
        }else{
//            session('zktype','0');
            $this->error("请输入正确的地址！！",U('Index/index'));
        }


   }
    public function lmsg_detail(){
        //通信手册
        $this->upload_url=$this->gettxl();

        $lmsgModel=D('LeaveMsg');
        $lmsg_id=$_GET['id'];

        $lmsg=$lmsgModel->alias('a')->join('left join replay b on b.lmsg_id=a.id left join admin c on b.admin_id=c.id')
            ->where('a.id='.$lmsg_id)->find();

//        dump($lmsg);
//        dump($lmsgModel->getLastSql());
//        die;

        $this->assign('lmsg',$lmsg);
        $this->display();
    }

}