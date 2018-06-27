<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Comment
{
    public function index()
    {

    return $this->fetch();
    }
    

}


