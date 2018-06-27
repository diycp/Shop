<?php
namespace app\index\controller;

use think\Controller;

class Money extends Controller
{
    public function coupon()  
    {

      return $this->fetch();
    }
    public function bonus() 
    {

      return $this->fetch();
    }
    public function bill() 
    {

      return $this->fetch();
    }
}
