<?php if (!defined('EMLOG_ROOT')) {exit('error!');}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="author" content="">
<title>管理面板 - <?php echo Option::get('blogname'); ?></title>
<link href="./views/plugins/fullPage/jquery.fullPage.css" rel="stylesheet"/>
<link href="./views/plugins/bootstrap-3.3.0/css/bootstrap.min.css" rel="stylesheet"/>
<link href="./views/plugins/material-design-iconic-font-2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet"/>
<link href="./views/plugins/waves-0.7.5/waves.min.css" rel="stylesheet"/>
<link href="./views/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
<link href="./views/app/css/admin.css" rel="stylesheet"/>
<link href="./views/app/css/common.css" rel="stylesheet"/>
<link href="./views/plugins/bootstrap-table-1.11.0/bootstrap-table.min.css" rel="stylesheet"/>
<script src="../include/lib/js/jquery/jquery-1.11.0.js?v=<?php echo Option::EMLOG_VERSION; ?>"></script>
<script src="./views/plugins/bootstrap-3.3.0/js/bootstrap.min.js"></script>
 <script src="./views/plugins/jquery.cookie.js?v=<?php echo Option::EMLOG_VERSION; ?>"></script>
<script type="text/javascript" src="./views/app/js/common.js?v=<?php echo Option::EMLOG_VERSION; ?>"></script>
<?php doAction('adm_head');?>
 </head>
 <body>
 <div id="<?php echo Option::get('admin_style');?>">
<header id="header">
	<ul id="menu">
		<li id="guide" class="line-trigger">
			<div class="line-wrap">
				<div class="line top"></div>
				<div class="line center"></div>
				<div class="line bottom"></div>
			</div>
		</li>
		<li id="logo" class="hidden-xs">
			<a href="./">
				<img src="./views/app/img/logo.png"/>
			</a>
			<span id="system_title">后台管理</span>
		</li>
		<li class="pull-right">
			<ul class="hi-menu">
<li class="admin-index">
	<a class="waves-effect waves-light" href="./" title="后台首页">
	<i class="him-icon zmdi zmdi-home"></i>
	</a>
	</li>
<li class="add-post">
	<a class="waves-effect waves-light" href="write_log.php" title="发布文章">
	<i class="him-icon zmdi zmdi-plus"></i>
	</a>
	</li>

				<!-- 搜索 -->
				<li class="dropdown">
					<a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
						<i class="him-icon zmdi zmdi-search"></i>
					</a>
					<ul class="dropdown-menu dm-icon pull-right">
						<form action="admin_log.php" method="get" id="search-form" class="form-inline">
						
			<?php if($pid):?>
		<input type="hidden" id="pid" name="pid" value="draft">
		<?php endif;?>					
		<div class="input-group">
<input id="keywords" type="text" name="keyword" class="form-control" placeholder="搜索文章"/>
<div class="input-group-btn">
<button type="submit" class="btn btn-default"><span class="zmdi zmdi-search"></span></button>
								</div>
							</div>
						</form>
					</ul>
				</li>
				<li class="dropdown">
		<a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
		<i class="him-icon zmdi zmdi-palette"></i>
					</a>
	<ul class="dropdown-menu dm-icon pull-right">
						<li class="skin-switch">
							主题配色
						</li>
						<li class="divider"></li>
						<li>
							<a class="waves-effect" href="./index.php?action=usestyle&style=admin-default&token=<?php echo LoginAuth::genToken(); ?>" > <?php if(Option::get('admin_style')=="admin-default"){ ?> <i class="zmdi zmdi-dot-circle"></i> <?php }else{ ?> <i class="zmdi zmdi-circle-o"></i> <?php } ?>默认配色</a>
						</li>
						<li>
			<a class="waves-effect" href="./index.php?action=usestyle&style=admin-pink&token=<?php echo LoginAuth::genToken(); ?>"> <?php if(Option::get('admin_style')=="admin-pink"){ ?> <i class="zmdi zmdi-dot-circle"></i> <?php }else{ ?> <i class="zmdi zmdi-circle-o"></i> <?php } ?>粉色系列 </a>
						</li>
			                      <li>
			<a class="waves-effect" href="./index.php?action=usestyle&style=admin-purple&token=<?php echo LoginAuth::genToken(); ?>"> <?php if(Option::get('admin_style')=="admin-purple"){ ?> <i class="zmdi zmdi-dot-circle"></i> <?php }else{ ?> <i class="zmdi zmdi-circle-o"></i> <?php } ?>紫色系列 </a>
						</li>
						<li>
			<a class="waves-effect" href="./index.php?action=usestyle&style=admin-green&token=<?php echo LoginAuth::genToken(); ?>"> <?php if(Option::get('admin_style')=="admin-green"){ ?> <i class="zmdi zmdi-dot-circle"></i> <?php }else{ ?> <i class="zmdi zmdi-circle-o"></i> <?php } ?>绿色系列 </a>
						</li>
					       <li>
			<a class="waves-effect" href="./index.php?action=usestyle&style=admin-blue&token=<?php echo LoginAuth::genToken(); ?>"> <?php if(Option::get('admin_style')=="admin-blue"){ ?> <i class="zmdi zmdi-dot-circle"></i> <?php }else{ ?> <i class="zmdi zmdi-circle-o"></i> <?php } ?> 蓝色系列 </a>
						</li>					
					</ul>
				</li>

			</ul>
		</li>
	</ul>
</header>
<section id="main">
	<!-- 左侧导航区 -->
	<aside id="sidebar">
		<!-- 个人资料区 -->
		<div class="s-profile">
			<a class="waves-effect waves-light" href="javascript:;">
				<div class="sp-pic">
					<img src="<?php echo $avatars=preg_replace('/thum-|thum52-/','',$avatars); ?>"/>
				</div>
				<div class="sp-info">
					<?php echo $loginname ?> , <?php welcome()?>！
					<i class="zmdi zmdi-caret-down"></i>
				</div>
			</a>
			<ul class="main-menu">
				<li>
					<a class="waves-effect" href="blogger.php"><i class="zmdi zmdi-account"></i> 个人设置</a>
				</li>
				<li>
	<a class="waves-effect" href="./?action=logout"><i class="zmdi zmdi-run"></i> 退出登录</a>
				</li>
			</ul>
		</div>
		<!-- /个人资料区 -->
		<!-- 菜单区 -->
		<ul class="main-menu">
	<li>
			<a class="waves-effect" href="../"><i class="zmdi zmdi-desktop-mac"></i> 博客首页 </a>
	</li>
<?php if (ROLE == ROLE_ADMIN):?>	
<li class="sub-menu system_menus system_1 0">
			<a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-assignment"></i> 文章管理 </a>
			<ul>
				<li id="menu_log"><a class="waves-effect" href="admin_log.php"> 全部文章
<?php
        $checknum = $sta_cache['checknum'];
		if (ROLE == ROLE_ADMIN && $checknum > 0):
		$n = $checknum > 999 ? '...' : $checknum;
		?>
		<div class="pull-right" style="margin-right:-9px"><span class="label label-warning"><?php echo $n; ?></span></div>
		<?php endif; ?>				
 </a></li>				
				
			<li id="menu_wt"><a class="waves-effect" href="write_log.php"> 发布文章 </a></li>
                         <li id="menu_page"><a class="waves-effect" href="page.php?action=new"> 新建页面 </a></li>
			<li id ="menu_draft"><a class="waves-effect" href="admin_log.php?pid=draft"> 临时草稿  <div class="pull-right" style="margin-right:-9px"><span class="label label-warning"><?php 
		if (ROLE == ROLE_ADMIN){
			echo $sta_cache['draftnum'] == 0 ? '' : ''.$sta_cache['draftnum'].''; 
		}else{
			echo $sta_cache[UID]['draftnum'] == 0 ? '' : ''.$sta_cache[UID]['draftnum'].'';
		}
		?></span></div></a> </li>
		<li id ="menu_tw"><a class="waves-effect" href="twitter.php"> 每日一语 </a></li>							
			</ul>
			</li>
<?php else : ?>			
				<li id="menu_log"><a class="waves-effect" href="admin_log.php"> 全部文章 </a></li>
			<li id="menu_wt"><a class="waves-effect" href="write_log.php"> 发布文章 </a></li>
			<li id ="menu_draft"><a class="waves-effect" href="admin_log.php?pid=draft"> 临时草稿  <div class="pull-right" style="margin-right:-9px"><span class="label label-warning"><?php 
		if (ROLE == ROLE_ADMIN){
			echo $sta_cache['draftnum'] == 0 ? '' : ''.$sta_cache['draftnum'].''; 
		}else{
			echo $sta_cache[UID]['draftnum'] == 0 ? '' : ''.$sta_cache[UID]['draftnum'].'';
		}
		?></span></div></a> </li>			
			
<?php endif; ?>			
<li>
<a class="waves-effect" href="comment.php"><i class="zmdi zmdi-comments"></i> 评论管理 <?php
		$hidecmnum = ROLE == ROLE_ADMIN ? $sta_cache['hidecomnum'] : $sta_cache[UID]['hidecommentnum'];
		if ($hidecmnum > 0):
		$n = $hidecmnum > 999 ? '...' : $hidecmnum;
		?>
		<div class="pull-right" style="margin-right:-9px"><span class="label label-danger"><?php echo $hidecmnum; ?></span></div> <?php endif; ?> </a>
			</li>			
<?php if (ROLE == ROLE_ADMIN):?>				
			<li class="sub-menu system_menus system_1 1">
			<a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-accounts-list"></i> 相关管理 </a>
			<ul>
				<li id="menu_tpl"><a class="waves-effect" href="template.php"> 模板管理 </a></li>
			<li id="menu_plug">
			<a class="waves-effect" href="plugin.php"> 插件管理 </a>
			</li>				
				<li id="menu_widget"><a class="waves-effect" href="widgets.php"> 侧边设置 </a></li>
					<li id="menu_pages"><a class="waves-effect" href="page.php">  页面管理 </a></li>
				<li id="menu_sort"><a class="waves-effect" href="sort.php"> 分类管理 </a></li>
			</ul>
			</li>		
		<li class="sub-menu system_menus system_1 2">
			<a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-settings"></i> 系统调试 </a>
			<ul>
			<li id="menu_setting"><a class="waves-effect" href="configure.php"> 系统设置 </a></li>
			<li id="menu_seo"><a class="waves-effect" href="seo.php"> 网站设置 </a></li>
			<li id="menu_navi"><a class="waves-effect" href="navbar.php"> 系统导航 </a></li>
			<li id="menu_safety"><a class="waves-effect" href="safety.php"> 站点防御 </a></li>					
			<li id="menu_data"><a class="waves-effect" href="data.php"> 备份恢复 </a></li>
			<li id="menu_cache"><a class="waves-effect" href="cache.php"> 更新缓存 </a></li>					
</ul>
</li>
<li>
<a class="waves-effect" href="../?setting/"><i class="zmdi zmdi-plaster"></i> 模板设置 </a>
</li>				
<?php if (!empty($emHooks['adm_sidebar_ext'])): ?>
<li class="sub-menu system_menus system_1 3">
<a class="waves-effect" href="javascript:;"> <i class="zmdi zmdi-gas-station"></i> 插件功能 </a>
<ul id="pls">
 <?php doAction('adm_sidebar_ext'); ?>
  </ul>
</li>
 <?php endif;?>
  <?php endif;?>                          
   <li class="sub-menu system_menus system_1 4">
			<a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-labels"></i> 更多功能 </a>
			<ul>
			<li id="menu_tag"><a class="waves-effect" href="tag.php"> 标签管理 </a></li>	
							<li id="menu_link"><a class="waves-effect" href="link.php"> 链接管理 </a></li>									<li id="menu_linksort"><a class="waves-effect" href="sortlink.php"> 链接分类 </a></li>
							<li id="menu_user"><a class="waves-effect" href="user.php"> 用户管理 </a></li>
								<li id="menu_media"><a class="waves-effect" href="media.php"> 附件管理 </a></li>		
			</ul>
			</li>
			<div class="upms-version">
				ZeRan  &copy; 欢迎使用点滴记忆
			</div>
			</li>
		</ul>
		<!-- /菜单区 -->
	</aside>
	<!-- /左侧导航区 -->
<section id="content">
<?php doAction('adm_set_top'); ?>
<?php if(isset($_GET["plugin"])){?>
<div class="content_tab">
<div class="tab_left">
<a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-left"></i></a>
</div>
<div class="tab_right">
<a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-right"></i></a>
</div>
<ul id="tabs" class="tabs">
<li id="tab_home">
<a href="./" class="waves-effect waves-light">首页</a>
</li>
<li id="tab_plugin" class="cur">
<a href="#" class="waves-effect waves-light">插件配置</a>
</li>
</ul>
</div>
<div class="content_main" id="container">
<div class="panel-wrapper collapse in">
<div class="panel-body">
<?php };?>
