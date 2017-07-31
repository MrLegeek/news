<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {

    public function news_add(){

        $category=D('category');
        session('username','root');
        $category_list=$category->select();

        $role=D('role');
        $role_list=$role->select();


        if (IS_POST){
            $post=I("post.");
            $new=D("news");
            $post['add_time']=time();
            $post['author']= session('username');
            $file_name=$_FILES['news_img']['name'];
//            $post['content']=$post['editorValue'];
//            dump($post);
//            dump($_FILES['news_img']['name']);
//            die();
            //收集表单;
            if ($file_name==''){
                $res= $shuju = $new->add($post);
            }else{
                $res = $shuju = $new->addImg($post,$_FILES['news_img']);
            }
            if($res){
                $this ->success('添加成功！',U('news_list'),2);

            }else {
                $this ->error('添加失败！',U('news_add'),2);
            }
        }else{
            //展示表单
          $this->assign('role_list',$role_list);
          $this->assign('category_list',$category_list);
          $this->display();
        }

}
    /**
     * webuploader 上传文件
     */
//    public function ajax_upload(){
//        // 根据自己的业务调整上传路径、允许的格式、文件大小
//        $datapath=ajax_upload('Public/Uploads');
//        session('datapath',$datapath);
//        if($datapath){
//            $this->ajaxReturn($datapath);
//        }else{
//            $this->ajaxReturn(0);
//        }
//    }

    public function news_list(){
        $news=D('news');

        $newlist=$news->join("category on news.cate_id=category.cate_id")->where('del_flag=0')->select();

        $countList=count($newlist);


        $this->assign('newlist',$newlist);
        $this->assign('countList',$countList);
        $this->display();
    }
    //新闻单个删除
    function newsDel(){
        if(IS_AJAX){
            $id=$_POST['id'];
            $news=D("news");
            $map['id']=array("EQ",$id);
            $res=$news->where($map)->setField("del_flag","1");
            if ($res){
                $this->ajaxReturn($id);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }
    //新闻批量删除
    function batchDel(){
//        dump($_POST);die();
        if(IS_AJAX){
            $ids=$_POST['id'];
            $new=D("news");
            $ids=explode(",",$ids);
            $map['id']=array("in",$ids);
            $new->where($map)->setField("del_flag","1");
            if ($ids){
                $this->ajaxReturn($ids);
            }else{
                $this->ajaxReturn(0);
            }
        }
    }

    //点击修改按钮处理
    function news_edit(){
        $id=$_GET['id'];
        $new=D("news");
        $newsinfo=$new->find($id);
        $category=D("category");
        $cateInfo=$category->select();

        $role = D("role");
        $roleInfo= $role->select();

        if($newsinfo){
            $content=$newsinfo['content'];
            if(get_magic_quotes_gpc()){
                $content=stripslashes($content);
            }
            $newsinfo['content']=htmlspecialchars_decode($content);
			}
//        dump($cateInfo);
        $this->assign('roleInfo',$roleInfo);
        $this->assign('cateInfo',$cateInfo);
        $this->assign('newsinfo',$newsinfo);
        $this->display();
    }
    //修改新闻界面  点击保存处理
    function newsEditSave()
    {
        if (IS_POST) {
            $post = I("post.");
            $new = D("news");
            $post['update_time'] = time();
            $post['author'] = session('username');
//            $post['content'] = $post['editorValue'];
//            dump($_FILES['news_img']['name']);
//            dump($post);
//            die();

            $file_name = $_FILES['news_img']['name'];
            if ($file_name == '') {
                $res = $shuju = $new->where('id='.$post['id'])->save($post);
            } else {
                $res = $shuju = $new->where('id='.$post['id'])->updateImg($post, $_FILES['news_img']);
            }
            if ($res) {
                $this->success('修改成功！', U('news_list'), 2);

            } else {
                $this->success('修改成功！');
            }
        } else {

        }
    }
}