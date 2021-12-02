<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:40:"template/default_pc/html/label\sort.html";i:1638323117;s:71:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\system\include.html";i:1638323118;s:71:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\system\headtop.html";i:1638323118;s:70:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\system\search.html";i:1638323118;s:72:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\system\headmeun.html";i:1638323118;s:67:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\module\tag.html";i:1638323117;s:73:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\module\footer_ad.html";i:1638323117;s:70:"C:\inetpub\wwwroot\MDYS006\template\default_pc\html\system\footer.html";i:1638323118;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<title>分类大全 - <?php echo $maccms['site_name']; ?></title>
		<meta name="keywords" content="分类大全 - <?php echo $maccms['site_keywords']; ?>"/>
		<meta name="description" content="分类大全 - <?php echo $maccms['site_description']; ?>"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link href="<?php echo $maccms['path']; ?>MDassets/css/all-responsive-metal.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $maccms['path']; ?>MDassets/css/jquery.fancybox-metal.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo mac_url('rss/index'); ?>" rel="alternate" type="application/rss+xml" />
		<link href="<?php echo $maccms['site_url']; ?>" rel="canonical" />
		<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
		<script>var maccms={"path":"/MDYS006","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
		<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
	</head>
	<body>
		<div class="top-links">
			<div class="center-hold">
				<div class="network">
					<strong></strong>
					<ul>
						<li><a href="<?php echo $GLOBALS['config']['site']['yjurl']; ?>">地址发布页</a></li>
					</ul>
				</div>
				<?php if($GLOBALS['user']['user_id']): ?>
				<div class="member-links">
				<ul>
					<li>您好，<?php echo $user['user_name']; ?></li>
					<?php if($GLOBALS['user']['group_id'] == 2): ?>
					<li><a href="<?php echo mac_url('user/upgrade'); ?>" style="color:#00be06">VIP:未激活</a></li>
					<?php elseif($GLOBALS['user']['group_id'] == 3): ?>
					<li><a href="<?php echo mac_url('user/upgrade'); ?>" style="color:red">VIP续费</a></li>
					<?php endif; ?>
					<li><a href="<?php echo mac_url('user/index'); ?>">个人中心</a></li>
					<li><a href="<?php echo mac_url('user/plays'); ?>">播放记录</a></li>
					<li><a href="<?php echo mac_url('user/favs'); ?>">收藏中心</a></li>
					<li><a href="<?php echo mac_url('user/reward'); ?>">三级分销</a></li>
					<li><a href="<?php echo mac_url('user/plog'); ?>">我的积分：<?php echo $user['user_points']; ?></a></li>
					<li><a href="<?php echo mac_url('user/logout'); ?>">退出</a></li>
				</ul>
				</div>
				<?php else: ?>
				<div class="member-links">
					<ul>
						<li><a data-href="<?php echo mac_url('label/signup'); ?>" data-fancybox="ajax">注册</a></li>
						<li><a data-href="<?php echo mac_url('label/login'); ?>" data-fancybox="ajax" id="login">登录</a></li>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="container">
		<div class="header">
				<div class="header-inner">
					<div class="logo">
						<a href="/"><img src="<?php echo mac_url_img($maccms['site_logo']); ?>" alt="<?php echo $maccms['site_name']; ?>"></a>
					</div>
					<div class="search">
						<form id="search_form" action="<?php echo mac_url('vod/search'); ?>" method="get" data-url="<?php echo mac_url('vod/search'); ?>">
							<button type="submit" class="search-button">搜索</button>
							<div class="search-text">
								<input type="text" name="wd" placeholder="请输入关键词,至少两个字符" value="" />
							</div>
						</form>
					</div>
				</div>
			</div>
		<nav>
				<div class="navigation">
					<button class="button">
						<span class="icon">
							<span class="ico-bar"></span>
							<span class="ico-bar"></span>
							<span class="ico-bar"></span>
						</span>
					</button>
					<ul class="primary">
						<li class="<?php if($maccms['aid'] == 1): ?>selected<?php endif; ?>">
							<a href="/">首页</a>
						</li>
						<li class="<?php if(strpos($_SERVER["REQUEST_URI"],'new')): ?>selected<?php endif; ?>">
							<a href="<?php echo mac_url('label/new'); ?>">最新</a>
						</li>
						<li class="<?php if(strpos($_SERVER["REQUEST_URI"],'hot')): ?>selected<?php endif; ?>">
							<a href="<?php echo mac_url('label/hot'); ?>">热门</a>
						</li>
						<li class="<?php if(strpos($_SERVER["REQUEST_URI"],'sort')): ?>selected<?php endif; ?>">
							<a href="<?php echo mac_url('label/sort'); ?>">分类</a>
						</li>
						<li class="<?php if(strpos($_SERVER["REQUEST_URI"],'tags')): ?>selected<?php endif; ?>">
							<a href="<?php echo mac_url('label/tags'); ?>">标签</a>
						</li>
						<li class="<?php if($maccms['aid']==80||$maccms['aid']==82||$maccms['aid']==84): ?>selected<?php endif; ?>">
							<a href="<?php echo mac_url('actor/index'); ?>">明星 </a>
						</li>
						
						<li class="<?php if($maccms['aid']==30||$maccms['aid']==34): ?>selected<?php endif; ?>">
							<a href="<?php echo mac_url('topic/index'); ?>">专题</a>
						</li>
						

					</ul>
					<ul class="secondary">
					</ul>
				</div>
			</nav>
		<div class="content">
		<div class="main-content">
			<div class="main-container">
				<div id="list_playlists_common_playlists_list">
							<div class="headline">
								<h1> 最受欢迎的类别 </h1>
							</div>
							<div class="box">
								<div class="list-playlists">
									<div class="margin-fix" id="list_playlists_common_playlists_list_items">
									<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
										<div class="item">
											<a href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>">
												<div class="img">
													<img class="thumb video1 lazy-load" src="<?php echo mac_url_img($vo['type_pic']); ?>" alt="<?php echo $vo['type_name']; ?>" title="<?php echo $vo['type_name']; ?>" width="320" height="180" >
												</div>
												<strong class="title">
													<?php echo $vo['type_name']; ?>
												</strong>
												<div class="wrap">
													<div class="videos"><?php echo mac_data_count($vo['type_id'],all); ?>部视频</div>
												</div>
												
											</a>
										</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div>
							</div>
						</div>
				</div>
		</div>
						<div class="box tags-cloud">
				<div class="box tags-cloud" id="tags">
				<?php $__TAG__ = '{"order":"desc","by":"time","num":"11","ids":"all","type":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['vod_tag'] == ''): else: ?>
				<?php echo mac_url_create($vo['vod_tag'],'tag'); endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
					<a href="<?php echo mac_url('label/tags'); ?>" class="all">显示所有标签</a>
				</div>
		</div>
		<!--
			<div class="footer-margin">
				<div class="content">
					<div class="box bottom-adv">
						<div class="spot">
							<a href="https://baidu.com" rel="nofollow" title="广告位">
								<img src="https://ae02.alicdn.com/kf/Hbf4c792135b34010adfe38d433c36e1bO.jpg">
							</a>
						</div>
						<div class="spot">
							<a href="https://baidu.com" rel="nofollow" title="广告位">
								<img src="https://ae02.alicdn.com/kf/H842dee0514534bd2ab312ca22ba01cd9a.jpg">
							</a>
						</div>
						<div class="spot">
							<a href="https://baidu.com" rel="nofollow" title="广告位">
								<img src="https://ae03.alicdn.com/kf/H574363e310fe4d329865b1077e262504m.jpg">
							</a>
						</div>
						<div class="spot">
							<a href="https://baidu.com" rel="nofollow" title="广告位">
								<img src="https://ae04.alicdn.com/kf/H45c32f91895242a2a2c0c53a8e776bdac.jpg">
							</a>
						</div>
						
					</div>
				</div>
			</div>
			-->
		</div>
		<div class="footer">
			<div class="footer-wrap">
				<ul class="nav">
					<li><a href="/">主页</a></li>
					<li><a data-href="<?php echo mac_url('label/signup'); ?>" data-fancybox="ajax">注册</a></li>
					<li><a data-href="<?php echo mac_url('label/login'); ?>" data-fancybox="ajax">登录</a></li>
					<li><a>分享</a></li>
					<li><a>反馈</a></li>
					<li><a>规则</a></li>
				</ul>
				<div class="copyright">
					2005-2020 <a href="<?php echo $maccms['site_url']; ?>"><?php echo $maccms['site_name']; ?> - <?php echo $maccms['site_url']; ?></a>
				</div>
				<div class="txt">
					免责声明：若本站收录的资源侵犯了您的权益，请发邮件至：<?php echo $maccms['site_email']; ?>，我们会及时删除侵权内容，谢谢合作！
				</div>
			</div>

			<script src="<?php echo $maccms['path']; ?>MDassets/js/main.min.js"></script>
			<script>
				$.blockUI.defaults.overlayCSS = {};
			</script>
		</div>
		<div id="gototop" title="回到顶部" style="position: fixed; bottom: 200px; right: 30px; cursor: pointer;">
			<img src="<?php echo $maccms['path']; ?>MDassets/images/gototop.png">
		</div>
		<script src="<?php echo $maccms['path']; ?>MDassets/js/layer.js"></script>
		<script>
			function favs(id) {
				var userstatus = "<?php echo $user['user_id']; ?>";
				$.get("/index.php/user/ajax_ulog/?ac=set&mid=1&id=" + id + "&type=2", function(data) {
					if (data.msg == "获取成功") {
						layer.msg('已收藏');
					} else if (userstatus == "0") {
						layer.msg('请先登录');
					} else if (userstatus == "1") {
						layer.msg('收藏成功');
					}
				}, "json");
			}
			function artfavs(id) {
				var userstatus = "<?php echo $user['user_id']; ?>";
				$.get("/index.php/user/ajax_ulog/?ac=set&mid=2&id=" + id + "&type=2", function(data) {
					if (data.msg == "获取成功") {
						layer.msg('已收藏');
					} else if (userstatus == "0") {
						layer.msg('请先登录');
					} else if (userstatus == "1") {
						layer.msg('收藏成功');
					}
				}, "json");
			}

			function actorfavs(id) {
				var userstatus = "<?php echo $user['user_id']; ?>";
				$.get("/index.php/user/ajax_ulog/?ac=set&mid=8&id=" + id + "&type=2", function(data) {
					if (data.msg == "获取成功") {
						layer.msg('已收藏');
					} else if (userstatus == "0") {
						layer.msg('请先登录');
					} else if (userstatus == "1") {
						layer.msg('收藏成功');
					}
				}, "json");
			}
			function topicfavs(id) {
				var userstatus = "<?php echo $user['user_id']; ?>";
				$.get("/index.php/user/ajax_ulog/?ac=set&mid=3&id=" + id + "&type=2", function(data) {
					if (data.msg == "获取成功") {
						layer.msg('已收藏');
					} else if (userstatus == "0") {
						layer.msg('请先登录');
					} else if (userstatus == "1") {
						layer.msg('收藏成功');
					}
				}, "json");
			}
		</script>
		<script>
			$(document).ready(function() {
				$(function(){
					var json = {};
					var $div = $("#tags");
					var $diva = $div.find("a");
					$diva.each(function(){
						var key = $(this).html();
						json[key] = key;
					});
					$div.empty();
					for(var key in json){
						$div.append("<a href='/index.php/vod/search/tag/"+key+".html' style='font-weight: bold; font-size: 15px;'>"+key+"</a>");
					}   
				})
			})
		</script>
		<script>
            $(function(){
            	$('#gototop').hide();
            	$(function(){
            		$(window).scroll(function(){
            			if($(window).scrollTop()>300){
            				$('#gototop').fadeIn(300);
            				}
            				else{$('#gototop').fadeOut(200);}
            			
            			});
            			$('#gototop').click(function(){
            				
            				$('body,html').animate({scrollTop:0},300);
            				return false;
            				
            				})
            		
            		})
            	
            	
            	})
        </script>
		<div style="display: none;"><?php echo $maccms['site_tj']; ?></div>
	
	</body>
</html>
