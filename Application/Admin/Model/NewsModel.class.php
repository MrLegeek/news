<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/07/28
 * Time: 13:34
 */
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
    public  function addImg($post,$file){
        if ($file['news_img']['error']<4) {
            //A. 处理上传的图片附件
            $cfg = array(
                'rootPath' => './Public/Uploads/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
            $z = $up->uploadOne($file);
            $bigimg = $up->rootPath . $z['savepath'] . $z['savename'];//大图路径名
            $smallimg = $up->rootPath . $z['savepath'] . 'small_' . $z['savename'];//小图路径名

            //B. 对上传好的图片制作缩略图
            $im = new \Think\Image();  //实例化Image对象
            $im->open($bigimg);//打开被处理的图片
            $im->thumb(100, 100, 6);//制作缩略图(默认有等比例缩放效果)
            $im->save($smallimg);//保存缩略图到服务器
            //把上传好的附件存储到数据库里边
            $post['news_big_img'] = ltrim($bigimg, '.');
            $post['news_small_img'] = ltrim($smallimg, '.');
        }
        return $this->add($post);
    }

    public  function updateImg($post,$file){
        if ($file['news_img']['error']<4) {
            //A. 处理上传的图片附件
            $cfg = array(
                'rootPath' => './Public/Uploads/', //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //uploadOne()方法执行成功后会把附件(在服务器上)的名字和路径等相关信息给我们返回
            $z = $up->uploadOne($file);
            $bigimg = $up->rootPath . $z['savepath'] . $z['savename'];//大图路径名
            $smallimg = $up->rootPath . $z['savepath'] . 'small_' . $z['savename'];//小图路径名

            //B. 对上传好的图片制作缩略图
            $im = new \Think\Image();  //实例化Image对象
            $im->open($bigimg);//打开被处理的图片
            $im->thumb(100, 100, 6);//制作缩略图(默认有等比例缩放效果)
            $im->save($smallimg);//保存缩略图到服务器
            //把上传好的附件存储到数据库里边
            $post['news_big_img'] = ltrim($bigimg, '.');
            $post['news_small_img'] = ltrim($smallimg, '.');
        }
        return $this->save($post);
    }
}