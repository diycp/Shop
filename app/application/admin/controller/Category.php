<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;

class Category extends Comment
{
    public function category()
    {
    	parent::__construct();
          $tptc = db('category')->where("gid = 0")->order('pid ASC')->select();
          $tpts = db('category')->where("gid != 0")->order('pid ASC')->select();
          $this->assign(array('tptc' => $tptc, 'tpts' => $tpts));

          $category = Db::name('category')->where('gid','0')->select();
          $this->assign('category',$category);


    return $this->fetch();
    }
    

    public function category_add_fu()//----添加父类
    {
   if(request()->isPost()){
	    $name=$_POST['name'];
	    $data=['name'=>$name,'gid'=>'0'];
	     //检测是否已存在此子类
        $test=Db::name('category')->where('name',$name)->where('gid','0')->select();
        if($test!=null){
 			echo "<script> alert('已存在父类！'); window.history.back(-1);</script>";
 		}else{
 			//检测同通过。。

		    $res=Db::name('category')->insert($data);
		   if($res==1){
				echo "<script> alert('添加成功！'); window.history.back(-1);</script>";
		   }else{
		   	echo "<script> alert('添加失败！'); window.history.back(-1);</script>";
		   }
	   }
     }
    return $this->fetch();
    }


    public function category_add_son()//----添加子类
    {
     if(request()->isPost()){
	    $name=$_POST['name'];
	    $gid=$_POST['gid'];
	    //检测是否已存在此子类
        $test=Db::name('category')->where('name',$name)->where('gid',$gid)->select();
        if($test!=null){
 			echo "<script> alert('已存在子类！'); window.history.back(-1);</script>";
 		}else{
 			//检测同通过。。
	    $data=['name'=>$name,'gid'=>$gid];
	    $res=Db::name('category')->insert($data);
	   if($res==1){
			echo "<script> alert('添加成功！'); window.history.back(-1);</script>";
	   }else{
	   	echo "<script> alert('添加失败！'); window.history.back(-1);</script>";
	   }
	  }
     }
    

    return $this->fetch('category');
    }
   


   public function del_son(){
     $pid=input('id');
     $data=Db::name('category')->where('pid',$pid)->delete();
     if(!empty($data)){
      echo "<script> alert('删除子类成功！'); window.history.back(-1);</script>";
     }else{
      echo "<script> alert('删除子类失败！'); window.history.back(-1);</script>";
     }

   }

   public function del_fu(){
     $pid=input('id');
     $data=Db::name('category')->where('pid',$pid)->delete();
     
     if(!empty($data)||!empty($res)){
      echo "<script> alert('删除父类成功！'); window.history.back(-1);</script>";
       $res=Db::name('category')->where('gid',$pid)->delete();
     }else{
      echo "<script> alert('删除父类失败！'); window.history.back(-1);</script>";
     }

   }
   

}
