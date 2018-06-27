<?php
namespace app\index\controller;

use think\Controller;

class Category extends Controller
{
    public function  category()
    {

    
      return $this->fetch('index');
    }
}
