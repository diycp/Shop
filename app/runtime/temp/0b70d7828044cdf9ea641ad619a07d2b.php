<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp\www\app\public/../application/index\view\index\index.html";i:1526985840;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>黑猫零食铺</title>

		<link href="/home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/home/css/hmstyle.css" rel="stylesheet" type="text/css" />
		<script src="/home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

	</head>

	<body>
		<div class="hmtop">
			<!--顶部导航条 -->
			<div class="am-container header">
				
				<ul class="message-r">
					
				</ul>
				</div>

				<!--悬浮搜索框-->

				<div class="nav white">
					<div class="logo"><img src="/home/images/logo.png" /></div>
					<div class="logoBig">
						<li><img src="/home/images/logobig.png" /></li>
					</div>

					<div class="search-bar pr">
						<a name="index_none_header_sysc" href="#"></a>
						<form>
							<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
							<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
						</form>
					</div>
				</div>

				<div class="clear"></div>
			</div>
			<div class="banner">
                      <!--轮播 -->
						<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
							<ul class="am-slides">
								<li class="banner1"><a href="introduction.html"><img src="/home/images/ad1.jpg" /></a></li>
								<li class="banner2"><a><img src="/home/images/ad2.jpg" /></a></li>
								<li class="banner3"><a><img src="/home/images/ad3.jpg" /></a></li>
								<li class="banner4"><a><img src="/home/images/ad4.jpg" /></a></li>

							</ul>
						</div>
						<div class="clear"></div>	
			</div>
			<div class="shopNav">
				<div class="slideall">

					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="<?php echo url('index/index/index'); ?>">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>
		        				
						<!--侧边导航 -->
						<div id="nav" class="navfull">
							<div class="area clearfix">
								<div class="category-content" id="guide_2">
									<div class="category">
										<ul class="category-list" id="js_climit_li">
											<?php if(is_array($tptc) || $tptc instanceof \think\Collection || $tptc instanceof \think\Paginator): $k = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
											<li class="appliance js_toggle relative first">
												<div class="category-info">
													<h3 class="category-name b-category-name"><a class="ml-22" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></h3>
													<em>&gt;</em></div>
													 <div class="menu-item menu-in top">
													 <div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																	<?php if(is_array($tpts) || $tpts instanceof \think\Collection || $tpts instanceof \think\Paginator): $k = 0; $__LIST__ = $tpts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($k % 2 );++$k;if($vo['pid'] == $vs['gid']): ?>

																			<dd><a title="<?php echo $vs['name']; ?>"  href="<?php echo url('info',['id'=>$vs['gid']]); ?>" ><span><?php echo $vs['name']; ?></span></a></dd>
																	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
											<b class="arrow"></b>	
										</li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
						
						<!--轮播 -->
						<script type="text/javascript">


							(function() {
								$('.am-slider').flexslider();
							});
							$(document).ready(function() {
								$("li").hover(function() {
									$(".category-content .category-list li.first .menu-in").css("display", "none");
									$(".category-content .category-list li.first").removeClass("hover");
									$(this).addClass("hover");
									$(this).children("div.menu-in").css("display", "block")
								}, function() {
									$(this).removeClass("hover")
									$(this).children("div.menu-in").css("display", "none")
								});
							})
						</script>


					

					<!--走马灯 -->

					<div class="marqueen">
						<span class="marqueen-title">商城头条</span>
						<div class="demo">

							<ul>
								<li class="title-first"><a target="_blank" href="#">
									<img src="/home/images/TJ2.jpg"></img>
									<span>[特惠]</span>商城爆品1分秒								
								</a></li>
								<li class="title-first"><a target="_blank" href="#">
									<span>[公告]</span>商城与广州市签署战略合作协议
								     <img src="/home/images/TJ.jpg"></img>
								     <p>XXXXXXXXXXXXXXXXXX</p>
							    </a></li>
						
								<li><a target="_blank" href="#"><span>[特惠]</span>洋河年末大促，低至两件五折</a></li>
								<li><a target="_blank" href="#"><span>[公告]</span>华北、华中部分地区配送延迟</a></li>
								<li><a target="_blank" href="#"><span>[特惠]</span>家电狂欢千亿礼券 买1送1！</a></li>
								
							</ul>
                        <div class="advTip"><img src="/home/images/advTip.jpg"/></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<script type="text/javascript">
					if ($(window).width() < 640) {
						function autoScroll(obj) {
							$(obj).find("ul").animate({
								marginTop: "-39px"
							}, 500, function() {
								$(this).css({
									marginTop: "0px"
								}).find("li:first").appendTo(this);
							})
						}
						$(function() {
							setInterval('autoScroll(".demo")', 3000);
						})
					}
				</script>
			</div>
			<div class="shopMainbg">
				<div class="shopMain" id="shopmain">

					<!--今日推荐 -->

					<div class="am-g am-g-fixed recommendation">
						<div class="clock am-u-sm-3" ">
							<img src="/home/images/2016.png "></img>
							<p>今日<br>推荐</p>
						</div>
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<h3>真的有鱼</h3>
								<h4>开年福利篇</h4>
							</div>
							<div class="recommendationMain one">
								<img src="/home/images/tj.png "></img>
							</div>
						</div>						
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<h3>囤货过冬</h3>
								<h4>让爱早回家</h4>
							</div>
							<div class="recommendationMain two">
								<img src="/home/images/tj1.png "></img>
							</div>
						</div>
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<h3>浪漫情人节</h3>
								<h4>甜甜蜜蜜</h4>
							</div>
							<div class="recommendationMain three ">
								<img src="/home/images/tj2.png "></img>
							</div>
						</div>

					</div>
					<div class="clear "></div>
					<!--热门活动 -->

					<div class="am-container activity ">
						<div class="shopTitle ">
							<h4>活动</h4>
							<h3>每期活动 优惠享不停 </h3>
							<span class="more ">
                               <a href="# ">全部活动<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                            </span>
						</div>
					
					  <div class="am-g am-g-fixed ">
						<div class="am-u-sm-3 ">
							<div class="icon-sale one "></div>	
								<h4>秒杀</h4>							
							<div class="activityMain ">
								<img src="/home/images/activity1.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>
							</div>														
						</div>
					  </div>
                   </div>
					<div class="clear "></div>

			

                    <div id="f1">
					<!--坚果-->
					<div class="am-container ">
						<div class="shopTitle ">
							<h4>干果</h4>
							<h3>店长推荐。。。。</h3>
							<span class="more ">
                                <a href="# ">更多美味<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                            </span>
						</div>
					</div>
					<div class="am-g am-g-fixed floodFour">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/home/images/act1.png " />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						<?php foreach($data as $groom): ?>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="outer-con ">
									<div class="title ">
										<?php echo $groom['gname']; ?>
									</div>
									<div class="sub-title ">
										¥<?php echo $groom['price']; ?>
									</div>
									<i class="am-icon-shopping-basket am-icon-md  seprate"></i>						</div>
								<a href="<?php echo url('index/index/introduction',['id'=>$groom['goid']]); ?>"><img src="<?php echo $groom['minphoto']; ?>" /></a>
							</div>
						<?php endforeach; ?>
							
					</div>
                 <div class="clear "></div>                 
                 </div>	

                  <div id="f2">
					<!--坚果-->
					<div class="am-container ">
						<div class="shopTitle ">
							<h4>肉干</h4>
							<h3>店长推荐。。。。</h3>
							<span class="more ">
                                <a href="# ">更多美味<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                            </span>
						</div>
					</div>
					<div class="am-g am-g-fixed floodFour">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/home/images/act1.png " />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						<?php foreach($data1 as $groom): ?>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="outer-con ">
									<div class="title ">
										<?php echo $groom['gname']; ?>
									</div>
									<div class="sub-title ">
										¥<?php echo $groom['price']; ?>
									</div>
									<i class="am-icon-shopping-basket am-icon-md  seprate"></i>						</div>
								<a href="<?php echo url('index/index/introduction',['id'=>$groom['goid']]); ?>"><img src="<?php echo $groom['minphoto']; ?>" /></a>
							</div>
						<?php endforeach; ?>
							
					</div>
                 <div class="clear "></div>                 
                 </div>		

                  <div id="f3">
					<!--坚果-->
					<div class="am-container ">
						<div class="shopTitle ">
							<h4>薯片</h4>
							<h3>店长推荐。。。。</h3>
							<span class="more ">
                                <a href="# ">更多美味<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                            </span>
						</div>
					</div>
					<div class="am-g am-g-fixed floodFour">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/home/images/act1.png " />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						<?php foreach($data2 as $groom): ?>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="outer-con ">
									<div class="title ">
										<?php echo $groom['gname']; ?>
									</div>
									<div class="sub-title ">
										¥<?php echo $groom['price']; ?>
									</div>
									<i class="am-icon-shopping-basket am-icon-md  seprate"></i>						</div>
								<a href="<?php echo url('index/index/introduction',['id'=>$groom['goid']]); ?>"><img src="<?php echo $groom['minphoto']; ?>" /></a>
							</div>
						<?php endforeach; ?>
							
					</div>
                 <div class="clear "></div>                 
                 </div>	

					<div class="footer ">
						<div class="footer-hd ">
							<p>
								<a href="# ">恒望科技</a>
								<b>|</b>
								<a href="# ">商城首页</a>
								<b>|</b>
								<a href="# ">支付宝</a>
								<b>|</b>
								<a href="# ">物流</a>
							</p>
						</div>
						<div class="footer-bd ">
							<p>
								<a href="# ">关于恒望</a>
								<a href="# ">合作伙伴</a>
								<a href="# ">联系我们</a>
								<a href="# ">网站地图</a>
								<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!--引导-->
		<div class="navCir">
			<li class="active"><a href="<?php echo url('index/index/index'); ?>"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="<?php echo url('index/index/sort'); ?>"><i class="am-icon-list"></i>分类</a></li>
			<li><a href="<?php echo url('index/index/shopcart'); ?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li><a href="<?php echo url('index/member/index'); ?>"><i class="am-icon-user"></i>我的</a></li>					
		</div>

		<!--菜单 -->
		<div class=tip>
			<div id="sidebar">
				<div id="wrap">
					<div id="prof" class="item ">
						<a href="<?php echo url('index/member/index'); ?>">
							<span class="setting "></span>
						</a>


						<div class="ibar_login_box status_login ">
						<?php if(\think\Session::get('name') == ''): ?>
						    <div class="login_btnbox ">
								<a class="login_order "  href="<?php echo url('index/login/login'); ?>" target="_top" >亲，请登录</a>
							    <a class="login_favorite "  href="<?php echo url('index/login/register'); ?>" target="_top">免费注册</a>
							</div>
						<?php else: ?>
							<div class="avatar_box ">
								<p class="avatar_imgbox "><img src="/home/images/no-img_mid_.jpg " /></p>	
							<ul class="user_info ">
									<li>用户名：<?php echo \think\Session::get('name'); ?></li>
									<li>级&nbsp;别：普通会员</li>
								</ul>
							</div>
							<div class="login_btnbox ">
							<a href="<?php echo url('index/member/index'); ?>" class="login_order ">个人中心</a>
								<a href="<?php echo url('index/order/order'); ?>" class="login_order ">我的订单</a>
								<a href="# " class="login_favorite ">我的收藏</a>
								<a href="<?php echo url('index/login/out'); ?>" class="login_favorite ">退出</a>
							</div>
							<i class="icon_arrow_white "></i>
							<?php endif; ?>
						</div>

					</div>
					<div id="shopCart " class="item ">
						<a href="<?php echo url('index/index/shopcart'); ?>">
							<span class="message "></span>
						</a>
						<p>
							购物车
						</p>
						<p class="cart_num ">0</p>
					</div>
					<div id="asset " class="item ">
						<a href=" ">
							<span class="view "></span>
						</a>
						<div class="mp_tooltip ">
							我的资产
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="foot " class="item ">
						<a href="# ">
							<span class="zuji "></span>
						</a>
						<div class="mp_tooltip ">
							我的足迹
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="brand " class="item ">
						<a href="#">
							<span class="wdsc "><img src="/home/images/wdsc.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我的收藏
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="broadcast " class="item ">
						<a href="# ">
							<span class="chongzhi "><img src="/home/images/chongzhi.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我要充值
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div class="quick_toggle ">
						<li class="qtitem ">
							<a href="# "><span class="kfzx "></span></a>
							<div class="mp_tooltip ">客服中心<i class="icon_arrow_right_black "></i></div>
						</li>
						<!--二维码 -->
						<li class="qtitem ">
							<a href="#none "><span class="mpbtn_qrcode "></span></a>
							<div class="mp_qrcode " style="display:none; "><img src="/home/images/weixin_code_145.png " /><i class="icon_arrow_white "></i></div>
						</li>
						<li class="qtitem ">
							<a href="#top " class="return_top "><span class="top "></span></a>
						</li>
					</div>

					<!--回到顶部 -->
					<div id="quick_links_pop " class="quick_links_pop hide "></div>

				</div>

			</div>
	
		</div>
		<script>
			window.jQuery || document.write('<script src="basic/js/jquery.min.js "><\/script>');
		</script>
		<script type="text/javascript " src="/home/basic/js/quick_links.js "></script>
	</body>

</html>