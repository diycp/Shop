<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\wamp64\www\app\public/../application/index\view\index\introduction.html";i:1529505813;}*/ ?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>商品页面</title>

		<link href="/home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="/home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/home/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link type="text/css" href="/home/css/optstyle.css" rel="stylesheet" />
		<link type="text/css" href="/home/css/style.css" rel="stylesheet" />

		<script type="text/javascript" src="/home/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/home/basic/js/quick_links.js"></script>

		<script type="text/javascript" src="/home/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<script type="text/javascript" src="/home/js/jquery.imagezoom.min.js"></script>
		<script type="text/javascript" src="/home/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="/home/js/list.js"></script>

	</head>

	<body>


		<!--顶部导航条 -->
		<div class="am-container header">
			
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
            <b class="line"></b>
			<div class="listMain">

				<!--分类-->
			<div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="qc"><a href="<?php echo url('index/index/index'); ?>">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    
						</div>
			</div>
				<ol class="am-breadcrumb am-breadcrumb-slash">
					<li><a href="#">首页</a></li>
					<li><a href="#">分类</a></li>
					<li class="am-active">内容</li>
				</ol>
				<script type="text/javascript">
					$(function() {});
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider) {
								$('body').removeClass('loading');
							}
						});
					});
				</script>
				<div class="scoll">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="<?php echo $data['minphoto']; ?>" title="pic" />
								</li>
								<li>
									<img src="<?php echo $data['minphoto']; ?>" />
								</li>
								<li>
									<img src="<?php echo $data['minphoto']; ?>" />
								</li>
							</ul>
						</div>
					</section>
				</div>

				<!--放大镜-->

				<div class="item-inform">
					<div class="clearfixLeft" id="clearcontent">

						<div class="box">
							<script type="text/javascript">
								$(document).ready(function() {
									$(".jqzoom").imagezoom();
									$("#thumblist li a").click(function() {
										$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
										$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
										$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
									});
								});
							</script>

							<div class="tb-booth tb-pic tb-s310">
								<a href="<?php echo $data['photo']; ?>"><img src="<?php echo $data['photo']; ?>" alt="细节展示放大镜特效" rel="<?php echo $data['photo']; ?>" class="jqzoom" /></a>
							</div>
							<ul class="tb-thumb" id="thumblist">
								<li class="tb-selected">
									<div class="tb-pic tb-s40">
										<a href="#"><img src="<?php echo $data['photo']; ?>" mid="<?php echo $data['photo']; ?>" big="<?php echo $data['photo']; ?>"></a>
									</div>
								</li>
								<li>
									<div class="tb-pic tb-s40">
										<a href="#"><img src="<?php echo $data['photo']; ?>" mid="<?php echo $data['photo']; ?>" big="<?php echo $data['photo']; ?>"></a>
									</div>
								</li>
								<li>
									<div class="tb-pic tb-s40">
										<a href="#"><img src="<?php echo $data['photo']; ?>" mid="<?php echo $data['photo']; ?>" big="<?php echo $data['photo']; ?>"></a>
									</div>
								</li>
							</ul>
						</div>

						<div class="clear"></div>
					</div>
				<form  method="post" action="<?php echo url('index/index/shopcart'); ?>"></form>
					<div class="clearfixRight">

						<!--规格属性-->
						<!--名称-->
						<div class="tb-detail-hd">
							<h1>
							<input style='background:none;border:0;' type='text' name='gname' value="<?php echo $data['gname']; ?>"  readonly="true" />	
				 			</h1>
						</div>
						<div class="tb-detail-list">
							<!--价格-->
							<div class="tb-detail-price">
								<li class="price iteminfo_price">
									<dt>促销价</dt>
									<dd><em>¥</em><b class="sys_item_price"><?php echo $data['price']; ?></b>  </dd> 
									                                
								</li>
								<li class="price iteminfo_mktprice">
									<dt>原价</dt>
									<dd><em>¥</em><b class="sys_item_mktprice">98.00</b></dd>									
								</li>
								<div class="clear"></div>
							</div>

							
							<!--销量-->
							<ul class="tm-ind-panel">
								<li class="tm-ind-item tm-ind-sellCount canClick">
									<div class="tm-indcon"><span class="tm-label">月销量</span><span class="tm-count">1015</span></div>
								</li>
								<li class="tm-ind-item tm-ind-sumCount canClick">
									<div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">6015</span></div>
								</li>
								<li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
									<div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">640</span></div>
								</li>
							</ul>
							<div class="clear"></div>

							<!--各种规格-->
							<dl class="iteminfo_parameter sys_item_specpara">
								<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
								<dd>
									<!--操作页面-->

									<div class="theme-popover-mask"></div>

									<div class="theme-popover">
										<div class="theme-span"></div>
										<div class="theme-poptit">
											<a href="javascript:;" title="关闭" class="close">×</a>
										</div>
										<div class="theme-popbod dform">
											<form action="<?php echo url('index/index/shopcart'); ?>" method="post">
  	
												<div class="theme-signin-left">
													
													<div class="theme-options">
														<div class="cart-title number">数量</div>
														<dd>
															<input id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
															<input id="text_box" name="number" type="text" value="1" style="width:30px;" />
															<input id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
															<span id="Stock" class="tb-hidden">库存<span class="stock"><?php echo $data['number']; ?></span>件</span>
															<input  name='gname' value="<?php echo $data['gname']; ?>" type="hidden"/>
															<input  name='price' value="<?php echo $data['price']; ?>" type="hidden"/>
														</dd>
													</div>
													<div class="clear"></div>
													<div class="btn-op">
														<div class="btn am-btn am-btn-warning">确认</div>
														<div class="btn close am-btn am-btn-warning">取消</div>
													</div>
												</div>
												<div class="theme-signin-right">
													<div class="img-info">
														<img src="/home/images/songzi.jpg" />
													</div>
													<div class="text-info">
														<span class="J_Price price-now"><?php echo $data['price']; ?></span>
														<span id="Stock" class="tb-hidden">库存<span class="stock"><?php echo $data['number']; ?></span>件</span>
														<input  name='gname' value="<?php echo $data['gname']; ?>" type="hidden"/>
															<input  name='price' value="<?php echo $data['price']; ?>" type="hidden"/>
													</div>
												</div>
										</div> 
									</div>

								</dd>
							</dl>
							<div class="clear"></div>
							<!--活动	-->
						
						</div>

						<div class="pay">
						   <li>
								<div class="clearfix tb-btn tb-btn-buy theme-login">
									<input  type="submit"  value="立即购买" style="width:100px; height: 33px;background:pink;">
								</div>
							</li>
							<li>
								<div class="clearfix tb-btn tb-btn-basket theme-login">
									<a><input  type="submit"  value="加入购物车"  style="width:100px;height: 33px; background:#f08900;"></a>
								</div>
							</li>
						</div>
					</div>
         		</form>
					<div class="clear"></div>
				</div>

				
							
				<!-- introduce-->

				<div class="introduce">
					<div class="browse">
					    
					</div>
					<div class="introduceMain">
						<div class="am-tabs" data-am-tabs>
							<ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active">
									<a href="#">
									<span class="index-needs-dt-txt">宝贝详情</span></a>
								</li>
								<li>
									<a href="#">
									<span class="index-needs-dt-txt">全部评价</span></a>
								</li>
							</ul>
							<div class="am-tabs-bd">

								<div class="am-tab-panel am-fade am-in am-active">
									<div class="J_Brand">

										<div class="attr-list-hd tm-clear">
											<h4>产品参数：</h4></div>
										<div class="clear"></div>
										<ul id="J_AttrUL">
											<li title="">产品类型:&nbsp;烘炒类</li>
											<li title="">产地:&nbsp;巴基斯坦</li>
											<li title="">配料表:&nbsp;进口松子、食用盐</li>
											<li title="">产品规格:&nbsp;210g</li>
											<li title="">保质期:&nbsp;180天</li>
											<li title="">食用方法：&nbsp;开袋去壳即食</li>
										</ul>
										<div class="clear"></div>
									</div>

									<div class="details">
										<div class="attr-list-hd after-market-hd">
											<h4>商品细节</h4>
										</div>
										<div class="twlistNews">
											<img src="<?php echo $data['photo']; ?>" />
											<img src="<?php echo $data['photo']; ?>" />
											<img src="<?php echo $data['photo']; ?>" />
											<img src="<?php echo $data['photo']; ?>" />
											
										</div>
									</div>
									<div class="clear"></div>

								</div>

								<div class="am-tab-panel am-fade">
									
                                    <div class="actor-new">
                                    	<div class="rate">                
                                    		<strong>100<span>%</span></strong><br> <span>好评度</span>            
                                    	</div>
                                        <dl>                    
                                            <dt>买家印象</dt>                    
                                            <dd class="p-bfc">
                                            			<q class="comm-tags"><span>味道不错</span><em>(2177)</em></q>
                                            			<q class="comm-tags"><span>商品不错</span><em>(1689)</em></q>
                                            			<q class="comm-tags"><span>香脆可口</span><em>(1488)</em></q>
                                            			<q class="comm-tags"><span>价格便宜</span><em>(1119)</em></q>
                                            			
                                            </dd>                                           
                                         </dl> 
                                    </div>	
                                    <div class="clear"></div>
									<div class="tb-r-filter-bar">
										<ul class=" tb-taglist am-avg-sm-4">
											<li class="tb-taglist-li tb-taglist-li-current">
												<div class="comment-info">
													<span>全部评价</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>

											<li class="tb-taglist-li tb-taglist-li-1">
												<div class="comment-info">
													<span>好评</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>

											<li class="tb-taglist-li tb-taglist-li-0">
												<div class="comment-info">
													<span>中评</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>

											<li class="tb-taglist-li tb-taglist-li--1">
												<div class="comment-info">
													<span>差评</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="clear"></div>

									<ul class="am-comments-list am-comments-list-flip">

										<li class="am-comment">
											<!-- 评论容器 -->
											<a href="">
												<img class="am-comment-avatar" src="/home/images/hwbn40x40.jpg" />
												<!-- 评论者头像 -->
											</a>

											<div class="am-comment-main">
												<!-- 评论内容容器 -->
												<header class="am-comment-hd">
													<!--<h3 class="am-comment-title">评论标题</h3>-->
													<div class="am-comment-meta">
														<!-- 评论元数据 -->
														<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
														<!-- 评论者 -->
														评论于
														<time datetime="">2015年11月02日 17:46</time>
													</div>
												</header>

												<div class="am-comment-bd">
													<div class="tb-rev-item " data-id="255776406962">
														<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
															摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
														</div>
														<div class="tb-r-act-bar">
															颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
														</div>
													</div>

												</div>
												<!-- 评论内容 -->
											</div>
										</li>
										
									</ul>
										<div class="clear"></div>

									<!--分页 -->
									
									<div class="clear"></div>

									<div class="tb-reviewsft">
										<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
									</div>

								</div>

							</div>

						</div>

						<div class="clear"></div>

						<div class="footer">
							<div class="footer-hd">
								<p>
									<a href="#">商城首页</a>
									<b>|</b>
									<a href="#">支付宝</a>
									<b>|</b>
									<a href="#">物流</a>
								</p>
							</div>
							<div class="footer-bd">
								<p>
									<a href="#">关于黑猫</a>
									<a href="#">合作伙伴</a>
									<a href="#">联系我们</a>
									
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
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
					
					<div id="brand " class="item ">
						<a href="#">
							<span class="wdsc "><img src="/home/images/wdsc.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我的收藏
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>
			
					</div>
						<div id="quick_links_pop" class="quick_links_pop hide"></div>
					</div>
				</div>
			</div>
	</body>
</html>