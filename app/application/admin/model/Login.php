<?php
namespace app\admin\model;
use think\Model;

class Login extends Model{
	 //--------管理员登录---------
	public function login($name,$password){
		$admin=\think\Db::name('admin')->where('name','=',$name)->find();
		if($admin){
			if($admin['password']==md5($password)){
				\think\Session::set('admin',$admin['name']);
				\think\Session::set('id',$admin['id']);
				
				return 1;
				
			}else{
				return 2;
			}
			
		}else{
		return 3;
	}
	
}


}
