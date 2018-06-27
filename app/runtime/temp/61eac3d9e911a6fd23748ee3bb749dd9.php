<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"C:\wamp\www\app\public/../application/admin\view\goods\goods_list.html";i:1526982766;s:38:"../application/admin/view/index/a.html";i:1525596546;s:38:"../application/admin/view/index/b.html";i:1526985052;}*/ ?>
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
      <ul class="am-icon-flag on"> 栏目名称</ul>
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">商品列表</a></dl>
   </div>
  
  <div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
  <ul>
    <li>
      <div class="am-btn-group am-btn-group-xs">
      所属类别：
      </div>
    </li>
    <li style="margin-left: -10px;">
        <div class="am-btn-group am-btn-group-xs">
        <select onchange="show_id(this.options[this.options.selectedIndex].value)">
          <?php if(is_array($tptc) || $tptc instanceof \think\Collection || $tptc instanceof \think\Paginator): $k = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                  <option value="<?php echo $vo['pid']; ?>">|--<?php echo $vo['name']; ?></option>
                  <?php if(is_array($tpts) || $tpts instanceof \think\Collection || $tpts instanceof \think\Paginator): $k = 0; $__LIST__ = $tpts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($k % 2 );++$k;if($vo['pid'] == $vs['gid']): ?>
                           <option value="<?php echo $vs['gid']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;|----<?php echo $vs['name']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>     
        </select>
        </div>
       </li>
     <li> <input type="text" class="am-input-sm"  name="number"  style="width:200px;height:25px;" placeholder="关键词搜索" /></li>
     <li><button type="button" class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: -1px;">搜索</button></li>
   </ul>
 </div>


    <form class="am-form am-g">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped" id="table-result">
            <thead>
              <tr class="am-success">
                <th class="table-type"><input type="checkbox" />排序</th>
                <th class="table-type">商品ID</th>
                <th class="table-title">商品名称</th>
                <th class="table-type">推荐/不推荐 <i class="am-icon-check am-text-warning"></i> <i class="am-icon-close am-text-primary"></i></th>
                <th class="table-type">上架/下架 <i class="am-icon-check am-text-warning"></i> <i class="am-icon-close am-text-primary"></i></th>
                <th class="table-type">价格</th>
                <th class="table-date am-hide-sm-only">入库时间</th>
                <th width="163px" class="table-set">操作</th>
              </tr>
            </thead>
            <tbody id="tbody-result">
            
            </tbody>
          </table>
          
                 <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 删除</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 上架</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 下架</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 移动</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 移动</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
          
          <ul class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"></a></li>
              </ul>
             <hr />
                <p>注：.....</p>
          </form>
      </div>
   </div>
</div>
<script type="text/javascript">
function show_id(v){
           var pid=v;
           var tbody=window.document.getElementById("tbody-result"); 
      $.ajax({
               type: "get",
               url: "goods_list",
               data:{pid:pid},
            success: function (msg) {
                  if (msg.ret){  
                     var str = "";  
                    var data = msg.data;  
                for (i in data) { 
                    str += "<tr>" +  
                        "<td>" + data[i].id + "</td>" +  
                        "<td>" + data[i].goid + "</td>" +  
                        "<td>" + data[i].gname + "</td>" +  
                        "<td>" + data[i].price + "</td>" +  
                        "<td>" + data[i].groom + "</td>" +  
                        "<td>" + data[i].shelf + "</td>" +  
                        "<td>2014年9月4日 7:28:47</td>" +  
                        "</tr>";  
                    }  
                    tbody.innerHTML = str;  
                }  
            },
            statusCode: {
              404: function() {
                 alert("找不到该页面");//失败报错
              }
           }
      }); 
}
</script>

</body>
</html>