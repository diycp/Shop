<?php
namespace app\index\model;
use think\Model;

class Login extends Model{
	 //--------管理员登录---------
	public function login($name,$password){
		$member=\think\Db::name('member')->whereOr('name','=',$name)->whereOr('phone','=',$name)->whereOr('email','=',$name)->find();
		if($member){
			if($member['password']==md5($password)){
				\think\Session::set('name',$member['name']);
				\think\Session::set('id',$member['id']);
				
				return 1;
				
			}else{
				return 2;
			}
			
		}else{
		return 3;
	}
	
}


}
