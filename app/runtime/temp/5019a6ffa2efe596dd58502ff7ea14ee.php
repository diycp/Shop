<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"E:\wamp64\www\app\public/../application/admin\view\category\category.html";i:1526985190;s:41:"../application/admin/view/index/link.html";i:1526983970;s:38:"../application/admin/view/index/a.html";i:1525596546;s:38:"../application/admin/view/index/b.html";i:1526985052;s:38:"../application/admin/view/index/c.html";i:1526054401;}*/ ?>
﻿<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>黑猫商城后台</title>
<meta name="description" content="这是一个 index 页面">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/admin/assets/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/admin/assets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/admin/assets/css/amazeui.min.css"/>
<link rel="stylesheet" href="/admin/assets/css/admin.css">
<script src="/admin/assets/js/jquery.min.js"></script>
<script src="/admin/assets/js/app.js"></script>
</head>
<body>
﻿
  <div class="am-topbar-brand"><img src="/admin/assets/i/logo.png"></div>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

   <li class="am-dropdown tognzhi" data-am-dropdown>
  <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o" data-am-dropdown-toggle> 消息管理<span class="am-badge am-badge-danger am-round">6</span></button>
  <ul class="am-dropdown-content">
    
    
    
    <li class="am-dropdown-header">所有消息都在这里</li>
    <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
    <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
    <li><a href="#">未处理汇款</a></li>
    <li><a href="#">未发放提现</a></li>
    <li><a href="#">未发货订单</a></li>
    <li><a href="#">低库存产品</a></li>
    
    <li><a href="#">信息反馈</a></li>
  </ul>
</li>
 <li class="kuanjie">
  <a href="#">会员管理</a>          
  <a href="#">奖金管理</a> 
  <a href="#">订单管理</a>   
  <a href="#">产品管理</a> 
  <a href="#">个人中心</a> 
   <a href="#">系统设置</a>
 </li>
 <li class="soso">
<p>   
  
  <select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
          <option value="b">全部</option>
          <option value="o">产品</option>
          <option value="o">会员</option>
          
        </select>

</p>

<p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域" /></p>
<p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
 </li>
<li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
﻿<div class="am-cf admin-main"> 

<div class="nav-navicon admin-main admin-sidebar">
    
    
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：<?php echo \think\Session::get('admin'); ?></div>
    <div class="sideMenu">
    <h2> <a href="<?php echo url('admin/index/index'); ?>">首页</a></h2>
      <h3 class="am-icon-flag"><em></em> <a href="#">商品管理</a></h3>
      <ul>
        <li><a href="<?php echo url('admin/goods/goods_list'); ?>">商品列表</a></li>
        <li><a href="<?php echo url('admin/goods/goods_add'); ?>">添加新商品</a></li>
        <li><a href="<?php echo url('admin/category/category'); ?>">商品分类</a></li>
        <li><a href="<?php echo url('admin/goods/goods_rey'); ?>">商品回收站</a></li>
        <li><a href="<?php echo url('admin/goods/goods_number'); ?>">库存管理</a> </li>
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
      <ul>
        <li><a href="<?php echo url('admin/order/order_list'); ?>">订单列表</a></li>
        <li><a href="<?php echo url('admin/order/delivery_yes'); ?>">已发货</a></li>
        <li><a href="<?php echo url('admin/order/delivery_no'); ?>">未发货</a></li>
        <li><a href="<?php echo url('admin/order/pay_yes'); ?>">已支付</a></li>
        <li><a href="<?php echo url('admin/order/pay_no'); ?>">未支付</a></li>
        <li><a href="<?php echo url('admin/order/order_th'); ?>">退/换货</a></li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="#">会员管理</a></h3>
      <ul>
        <li><a href="<?php echo url('admin/member/member_list'); ?>">会员列表 </a></li>
        <li><a href="<?php echo url('admin/member/member_list'); ?>">删除会员</a></li>
        <li><a href="<?php echo url('admin/member/member_plun'); ?>">用户评论</a></li>
      
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
      <ul>
        <li><a href="">站内消息 /留言 </a></li>
        <li><a href="">短信</a></li>
        <li><a href="">邮件</a></li>
        <li><a href="">微信</a></li>
        <li><a href="">客服</a></li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
      <ul>
        <li><a href="">数据备份</a></li>
        <li><a href="">邮件/短信管理</a></li>
        <li><a href="">上传/下载</a></li>
        <li><a href="">权限</a></li>
        <li><a href="">网站设置</a></li>
        <li><a href="">第三方支付</a></li>
        <li><a href="">提现 /转账 出入账汇率</a></li>
        <li><a href="">平台设置</a></li>
        <li><a href="">声音文件</a></li>
      </ul>
    </div>
    <!-- sideMenu End --> 
    
    <script type="text/javascript">
      jQuery(".sideMenu").slide({
        titCell:"h3", //鼠标触发对象
        targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
        effect:"slideDown", //targetCell下拉效果
        delayTime:300 , //效果时间
        triggerTime:150, //鼠标延迟触发时间（默认150）
        defaultPlay:true,//默认是否执行效果（默认true）
        returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
        });
    </script> 
</div>











<div class="admin-biaogelist">
   <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 订单列表</ul>
      <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="#">商品列表</a></dl>
   </div>

  <div class="am-tabs am-margin" data-am-tabs>
     <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">添加父类</a></li>
        <li><a href="#tab2">添加子类</a></li>
        <li><a href="#tab3">分类详情</a></li>
    </ul>

    <div class="am-tabs-bd">

      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            父类名称：
          </div>
          <div class="am-u-sm-8 am-u-md-10">
            <form class="am-form am-form-inline" method="post" action="<?php echo url('admin/category/category_add_fu'); ?>">
              <div class="am-form-group am-form-icon">
               <input type="text" name="name" class="am-form-field am-input-sm" >
              </div>
              <button type="submit" class="am-btn am-btn-success am-radius ">添加</button>
            </form>
          </div>
        </div>
    </div>


      <div class="am-tab-panel am-fade" id="tab2">
        <form class="am-form" method="post" action="<?php echo url('admin/category/category_add_son'); ?>">
          <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">所属父类：</div>
          <div class="am-u-sm-8 am-u-md-10">
            <select  name="gid" style="width:200px;">
             <?php foreach($category as $v): ?>
                  <option value="<?php echo $v['pid']; ?>">---<?php echo $v['name']; ?>---</option>
            <?php endforeach; ?>     
            </select>
          </div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              子类名称：
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" name="name" class="am-input-sm">
            </div>
           <button type="submit" class="am-btn am-btn-success am-radius ">添加</button>
          </div>
        </form>
      </div>

      <div class="am-tab-panel am-fade" id="tab3">
        <form class="am-form">
        <div class="xitong">
        <?php if(is_array($tptc) || $tptc instanceof \think\Collection || $tptc instanceof \think\Paginator): $k = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                  <div class="am-form-group">|——<?php echo $vo['name']; ?>------<a href="<?php echo url('admin/category/del_fu',['id'=>$vo['pid']]); ?>">删除</a>

                  </div>
                  <?php if(is_array($tpts) || $tpts instanceof \think\Collection || $tpts instanceof \think\Paginator): $k = 0; $__LIST__ = $tpts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($k % 2 );++$k;if($vo['pid'] == $vs['gid']): ?>
                           <div class="am-form-group">&nbsp;&nbsp;&nbsp;&nbsp;
                           ||————<?php echo $vs['name']; ?>------<a href="<?php echo url('admin/category/del_son',['id'=>$vs['pid']]); ?>">删除</a>
                            
                           </div>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>     
      </div>
      </form>
      </div>
      
 
    </div>
  </div>

 ﻿<div class="foods">
  <ul>
    模板版权所有@2015. 模板收集自 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> -  More Templates<a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>，内容功能版权所有@叶过房
  </ul>
 
  
 
  <dl>
    <a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a>
  </dl>
</div>
</div>
<!--[if (gte IE 9)|!(IE)]><!--> 
<script src="/admin/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
</body>
</html>




