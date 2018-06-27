<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Category extends Model{


public function tree()
    {
        //这个表示那拿到的数据库里面的内容
        $product=$this->order('pid','gid','name')->select();
        return  $this->getTree($product);

    }
    //无限极递归
    public function getTree($data,$pid=0,$gid=0){
        static $arr=array();
        foreach($data as $key=>$value){
            if($value['pid'] == $pid){
                $value['gid']=$gid;     //用来作为在模版进行层级的区分
                $arr[] = $value;            //把内容存进去
                $this->getTree($data,$value['pid'],$gid+1);    //回调进行无线递归
            }
        }
       
        return $arr;


    }


public function getTopId($cid){
        $data=db('cate')->select();
        return $this->_getTopId($cid,$data);
    }
 
    public function _getTopId($cid,$data){
        static $topId;
        $cates=db('cate')->find($cid);
        if($cates['pid']==0){
            return $cates['id'];
        }
        foreach ($data as $k => $v) {
            if($cates['pid']==$v['id']){
                $topId=$v['id'];
                $this->_getTopId($v['id'],$data);
            }
        }
        return $topId;
    }

}