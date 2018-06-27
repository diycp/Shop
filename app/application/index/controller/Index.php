<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Index extends Controller
{

    public function index()//首页
    {

  // 获取导航列表及子列表
       parent::__construct();
          $tptc = db('category')->where("gid = 0")->order('pid ASC')->select();
          $tpts = db('category')->where("gid != 0")->order('pid ASC')->select();
          $this->assign(array('tptc' => $tptc, 'tpts' => $tpts));
          $data=Db::name('goods')->where('gid','2')->where('groom','yes')->where('shelf','yes')->select();
          $data1=Db::name('goods')->where('gid','3')->where('groom','yes')->where('shelf','yes')->select();
          $data2=Db::name('goods')->where('gid','4')->where('groom','yes')->where('shelf','yes')->select();
          $this->assign('data',$data);
          $this->assign('data1',$data1);
          $this->assign('data2',$data2);
      return $this->fetch();       
  
    }
   public function info(){//分类商品列表
    parent::__construct();
          $tptc = db('category')->where("gid = 0")->order('pid ASC')->select();
          $tpts = db('category')->where("gid != 0")->order('pid ASC')->select();
           
   
       $id=input('id');
       $data=Db::name('goods')->where('gid',$id)->paginate(15);
       $page = $data->render();
       $this->assign(array('tptc' => $tptc, 'tpts' => $tpts,'data'=>$data));
       $this->assign('page', $page);

      return $this->fetch();
  
   }


  public function sort()//手机分类导航
    {
      parent::__construct();
          $tptc = db('category')->where("gid = 0")->order('pid ASC')->select();
          $tpts = db('category')->where("gid != 0")->order('pid ASC')->select();
           $this->assign(array('tptc' => $tptc, 'tpts' => $tpts));
        return $this->fetch();
    }



 	public function search()//手机版商品列表
    {
   
       $id=input('id');
       $data=Db::name('goods')->where('gid',$id)->paginate(15);
       $page = $data->render();
        $this->assign('data',$data);
       $this->assign('page', $page);


      return $this->fetch();
    }

     public function introduction()
    {
       $id=input('id');
       $data=Db::name('goods')->where('goid',$id)->find();
       $this->assign('data',$data);
      
      return $this->fetch();
    }

	public function shopcart()
    {
      if(request()->isPost()){

      $data = array('gname'=>$_POST['gname'],'price'=>$_POST['price'],'number'=>$_POST['number']);
      
       $this->assign('data',$data);
     }
      return $this->fetch();
    }

	public function pay()
    {

      return $this->fetch();
    }

    public function pay_yes()
    {

      return $this->fetch();
    }
}


