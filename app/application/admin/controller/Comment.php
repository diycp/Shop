<?php
namespace app\admin\controller;
use think\Controller;

class Comment extends Controller {
        public function __construct(){
   parent::__construct();
   //登陆检查
   $this->checkUser();
    }
    //检查登陆
    private function checkUser(){
        if(!session('?admin')){
            echo "<script> alert('请先登录！');window.location.href='http://home.home.com/admin.php/login/login/login';</script>";
        
        }
    }

}