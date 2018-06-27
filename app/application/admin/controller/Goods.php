<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;

class Goods extends Comment
{
    public function goods_list()//商品列表
    {
       
        parent::__construct();
          $tptc = db('category')->where("gid = 0")->order('pid ASC')->select();
          $tpts = db('category')->where("gid != 0")->order('pid ASC')->select();
          $this->assign(array('tptc' => $tptc, 'tpts' => $tpts));

   if(request()->isAjax()){
   	    $id=input('pid');
   		$pid=Db::name('category')->where('pid',$id)->field('gid')->select();
        $p_id=array_column($pid,'gid');
        $msg=Db::name('goods')->where('gid','in',$p_id)->paginate(3);
        echo json($msg);
    }else{
   		$data=Db::name('goods')->where('gid','1')->paginate(3);
        $this->assign('data',$data);
 	}
		return $this->fetch();
    }


     public function goods_add()//添加商品
    {
          parent::__construct();
          $tptc = db('category')->where("gid = 0")->order('pid ASC')->select();
          $tpts = db('category')->where("gid != 0")->order('pid ASC')->select();
          $this->assign(array('tptc' => $tptc, 'tpts' => $tpts));

  //判断是否提交表单
        if (request()->isPost()){
        	//获取表单数据
    	     $goid=$_POST['goid'];     	
    	     $gname=$_POST['gname'];
    	     $price=$_POST['price'];
   	         $number=$_POST['number'];
   	         $groom=$_POST['groom'];
   		     $shelf=$_POST['shelf'];
           $gid=$_POST['category'];
   			//图片上传以及缩略图
   		     $file = request()->file('photo');// 获取表单上传文件 
             $info =$file->move(ROOT_PATH .'public'.DS.'uploads'.DS.'a');   // 移动到框架应用根目录/public/uploads/ 目录下
            if ($info) {    // 成功上传后 获取上传信息
                 $img = DS . 'uploads' . DS .'a' .DS. $info->getSaveName(); //存入相对路径/upload/日期/文件名
                 $imgurl = DS . 'uploads' . DS .'a' .DS.'thumb'.DS. $info->getFileName(); 
                 $min = ROOT_PATH.'public'.$imgurl; 
                 $mfile=\think\Image::open($file);
                 $minfo=$mfile->thumb(150,200)->save($min);
                
                }else{   // 上传失败获取错误信息
                       echo "<script> alert('图片上传失败！'); window.history.back(-1);</script>";
                   }
      
      
   		 //定义插入数据字段
   	     $data = [
           	'goid' =>$goid, 'gname' =>$gname,
            'price'=>$price,'number'=>$number,
            'shelf'=>$shelf,'groom'=>$groom,
            'photo'=>$img, 'minphoto'=>$imgurl ,
            'gid'=>$gid
          		];
           $res=Db::name('goods')->insert($data);
                 if($res==1){
                      echo "<script> alert('添加成功'); window.history.back(-1);</script>";
                     }else{
	                   echo "<script> alert('添加失败！'); window.history.back(-1);</script>";
                   }
                
            }
   
    return $this->fetch();
    }
     public function goods_edit()
    {

    return $this->fetch();
    }
     public function goods_del()
    {

    return $this->fetch();
    }
     public function goods_rey()
    {

    return $this->fetch();
    }
     public function goods_sj()
    {

    return $this->fetch();
    }
}