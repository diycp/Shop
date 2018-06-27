<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
use app\admin\model\Login as log;
class Login extends Controller
{

    

    public function login()
    {
         //判断是否提交表单
    	      if (request()->isPost()){
       //实例化login模型类
       $login=new log;
       //使用方法接受input提交过来的值
       $user=$_POST['name'];
       $log=$login->login(input('name'),input('password'));
       $captcha=input('verify');
       if(empty($captcha)){
       	echo "<script> alert('验证码不能为空'); window.history.back(-1);</script>";
        }else if(!captcha_check($captcha)){
       	echo "<script> alert('验证码错误！'); window.history.back(-1);</script>";
       	
	    }else
	    if($log==1) {
	    	
	    	echo "<script> alert('欢迎.$user.登录本系统');window.location.href='http://home.home.com/admin.php';</script>";
       	}
       	else if($log==2) {
       		echo "<script> alert('用户名或密码错误！'); window.history.back(-1);</script>";
       	}
       	else{
       		echo "<script> alert('用户名不存在！'); window.history.back(-1);</script>";
       	}
    }
      return $this->fetch();
   }



    public function out(){

    }

    
     
}

