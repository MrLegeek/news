<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function __construct()
    {
        // 先调用父类的构造函数
        parent::__construct();
        // 获取当前管理员的ID
        $adminId = session('id');
        // 验证登录
        if(!$adminId)
            redirect(U('Admin/Login/login'));
        // 验证当前管理员是否有权限访问这个页面
        // 1. 先获取当前管理员将要访问的页面	 - TP带三个常量
        $url = MODULE_NAME .'/'. CONTROLLER_NAME . '/' . ACTION_NAME;
        // 查询数据库判断当前管理员有没有访问这个页面的权限
        $where = 'module_name="'.MODULE_NAME.'" AND controller_name="'.CONTROLLER_NAME.'" AND action_name="'.ACTION_NAME.'"';
        // 任何人只要登录了就可以进入后台
        if(CONTROLLER_NAME == 'Index')
            return TRUE;
//
//        if($adminId == 1)
//            $sql = 'SELECT COUNT(*) has FROM privilege WHERE '.$where;
//        else
//            $sql = 'SELECT COUNT(a.role_id) has
//			  FROM privilege_role a
//			   LEFT JOIN privilege b ON a.pri_id=b.id
//			   LEFT JOIN admin_role c ON a.role_id=c.role_id
//			    WHERE c.admin_id='.$adminId.' AND '.$where;
//        $db = M();
//        $pri = $db->query($sql);
//        if($pri[0]['has'] < 1)
//            $this ->error('你的身份目前无权访问，请联系超级管理员！',U('Index/round'));
    }

    public function index(){

        $roleModel=D('role');
        $rolemsg=$roleModel->select();
        $this->assign('rolemsg',$rolemsg);

        $this->display();
    }

  public function welcome(){
 //      支队新闻
      $totalnum='SELECT  COUNT(id) as id from news where   del_flag=0 AND local_id=0';
      $nopass='SELECT  COUNT(id) as id from news where status=0 AND del_flag=0 AND local_id=0';
      $passnum='SELECT  COUNT(id) as id from news where status=1 AND del_flag=0 AND local_id=0';
      $failnum='SELECT  COUNT(id) as id from news where status=2 AND del_flag=0 AND local_id=0';

 //     地区新闻
      $ltotalnum='SELECT  COUNT(id) as id from news where  del_flag=0 AND local_id!=0';
      $lnopassnum='SELECT  COUNT(id) as id from news where status=0 AND del_flag=0 AND local_id!=0';
      $lpassnum='SELECT  COUNT(id) as id from news where status=1 AND del_flag=0 AND local_id!=0';
      $lfailnum='SELECT  COUNT(id) as id from news where status=2 AND del_flag=0 AND local_id!=0';

       $newsModel=D('news');
       $total=$newsModel->query($totalnum);
       $nopass=$newsModel->query($nopass);
       $pass=$newsModel->query($passnum);
       $failnum=$newsModel->query($failnum);

       $ltotal=$newsModel->query($ltotalnum);
       $lnopass=$newsModel->query($lnopassnum);
       $lpass=$newsModel->query($lpassnum);
       $lfailnum=$newsModel->query($lfailnum);

//支队长信箱
      $Lmsgnum='SELECT  COUNT(id) as id from leave_msg where  del_flag=0 AND type=0';
      $Lmsgnopassnum='SELECT  COUNT(id) as id from leave_msg where status=0 AND del_flag=0 AND type=0';//留言审核
      $Lmsgpassnum='SELECT  COUNT(id) as id from leave_msg where status=1 AND del_flag=0 AND type=0';//留言审核
      $Lmsgfailnum='SELECT  COUNT(id) as id from leave_msg where status=2 AND del_flag=0 AND type=0';//留言审核不通过

//政委信箱
      $zlmsgtotalnum='SELECT  COUNT(id) as id from leave_msg where   del_flag=0 AND type=1';
      $zlmsgnopassnum='SELECT  COUNT(id) as id from leave_msg where status=1 AND del_flag=0 AND type=1';
      $zlmsgpassnum='SELECT  COUNT(id) as id from leave_msg where status=1 AND del_flag=0 AND type=1';
      $zlmsgfailnum='SELECT  COUNT(id) as id from leave_msg where  status=2 AND del_flag=0 AND type=1';
      $lmModel=D('LeaveMsg');

      $lmsg=$lmModel->query($Lmsgnum);
      $lmsgnopass=$lmModel->query($Lmsgnopassnum);
      $lmsgpass=$lmModel->query($Lmsgpassnum);
      $lmsgfail=$lmModel->query($Lmsgfailnum);

      $zlmsg=$lmModel->query($zlmsgtotalnum);
      $zlmsgnopass=$lmModel->query($zlmsgnopassnum);
      $zlmsgpass=$lmModel->query($zlmsgpassnum);
      $zlmsgfail=$lmModel->query($zlmsgfailnum);

      $this->assign(array(
          'lmsg'=>$lmsg[0],
          'lmsgpass'=>$lmsgpass[0],
          'lmsgnopass'=>$lmsgpass[0],
          'lmsgfail'=>$lmsgfail[0],

          'zlmsg'=>$zlmsg[0],
          'zlmsgpass'=>$zlmsgpass[0],
          'zlmsgnopass'=>$zlmsgpass[0],
          'zlmsgfail'=>$zlmsgfail[0],

          'total'=>$total[0],
          'pass'=>$pass[0],
          'nopass'=>$nopass[0],
          'fail'=>$failnum[0],

          'ltotal'=>$ltotal[0],
          'lpass'=>$lpass[0],
          'lnopass'=>$lnopass[0],
          'lfail'=>$lfailnum[0],

 ));


        $this->display();
    }
    //退出系统
    function login_out(){
        //清除session,同时跳转到登录页面
        session(null);
        $this -> redirect('Login/login');
    }

}