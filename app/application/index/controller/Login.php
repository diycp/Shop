<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\model\Login as log;
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
	    	
	    	echo "<script> alert('欢迎.$user.来到黑猫零食铺');window.location.href='http://home.home.com';</script>";
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
    	\think\Session::delete('name');
     echo "<script> alert('已退出！');window.history.back(-1);</script>";

    }

    public function register(){
        if(request()->isPost()){
         	$email = $_POST['email'];
         	$pwd = md5($_POST['password']);
         	$pwd_a = md5($_POST['password_a']);
         	if($pwd !=$pwd_a){
         		echo "<script> alert('两次输入密码不一样！'); window.history.back(-1);</script>";
         	}else{
            
            $data=['email'=>$email,'password'=>$pwd];
           $res=Db::name('member')->insert($data);
    
    	       if($res==1){
                echo "<script> alert('注册成功！前往登陆'); window.location.href='http://home.home.com/login/login';</script>";
              }
             else{
	             echo "<script> alert('添加失败！'); window.history.back(-1);</script>";
             } 

          }
        }




    	return $this->fetch();
    }
     public function phone(){
        if(request()->isPost()){
         	$phone = $_POST['phone'];
         	$pwd = md5($_POST['password']);
         	$pwd_a = md5($_POST['password_a']);
         	if($pwd !=$pwd_a){
         		echo "<script> alert('两次输入密码不一样！'); window.history.back(-1);</script>";
         	}else{

            $data=['phone'=>$phone,'password'=>$pwd];
           $res=Db::name('member')->insert($data);
     
    	       if($res==1){
                echo "<script> alert('注册成功！前往登陆'); window.location.href='http://home.home.com/login/login';</script>";
              }
             else{
	             echo "<script> alert('添加失败！'); window.history.back(-1);</script>";
             } 

          }
        }




    	return $this->fetch();
    }
}

