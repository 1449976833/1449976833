<?php if (!defined('EMLOG_ROOT')) {exit('error!');}?>
<div class="content_tab">
<div class="tab_left">
<a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-left"></i></a>
</div>
<div class="tab_right">
<a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-right"></i></a>
</div>

</div>
<div class="content_main">
<div id="iframe_home" class="iframe cur">
<div class="row">
<?php doAction('adm_main_top'); ?>
<?php if (ROLE == ROLE_ADMIN):?>	
<div class="col-lg-12">
<section class="panel panel-default">
<header class="panel-heading top"> 
<i class="zmdi zmdi-fire"></i> <b>EMLOG</b>
</header>				
<div class="widget-container fluid-height ibox-content">
<div class="row">
<div class="col-md-4 welcome-panel">
<h4>开始使用</h4>
<div class="row">
<div class="col-lg-6 col-md-6"><a href="widgets.php" class="btn btn-lg btn-block btn-default">自定义侧边栏</a>
</div>
</div>
<h4>或<a href="template.php">更换主题</a></h4>
</div>
<div class="col-md-4 welcome-panel">
<h4>接下来</h4>
<p><i class="zmdi zmdi-keyboard-hide"></i> <a href="write_log.php">撰写您的想写文章</a></p>
<p><i class="zmdi zmdi-folder-outline"></i> <a href="page.php"> 添加“留言”页面 </a></p>
</div>
<div class="col-md-4 welcome-panel">
<h4>更多操作</h4>
<p><i class="zmdi zmdi-widgets"></i> <a href="widgets.php">管理边栏小工具</a>和<a href="navbar.php">导航</a></p>
<p><i class="zmdi zmdi-reader"></i> <a href="admin_log.php?pid=draft">管理草稿</a>和<a href="admin_log.php">文章</a></a></p>
</div>
</div>
</div>
</section>	
</div>
<?php endif; ?>
 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="sm-data-box bg-red">
<div class="container-fluid">
<div class="row">
<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
<span class="txt-light block counter"><span class="counter-anim">
<?php echo count_user_all() ; ?>
</span>
</span>
<span class="weight-500 uppercase-font txt-light block font-13">
用户
</span>
</div>
<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
<i class="zmdi zmdi-accounts-list txt-light data-right-rep-icon"></i>
</div>
</div>	
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="sm-data-box bg-yellow">
<div class="container-fluid">
<div class="row">
<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
<span class="txt-light block counter">
<span class="counter-anim">
<?php if (ROLE == ROLE_ADMIN):?>
<?php echo $sta_cache['comnum_all'];?>
<?php else:?>
<?php echo $sta_cache[UID]['commentnum'];?>
<?php endif; ?>
</span></span>
<span class="weight-500 uppercase-font txt-light block">
评论
</span>
</div>
<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
<i class="zmdi zmdi-comments txt-light data-right-rep-icon"></i>					
</div>
</div>	
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="sm-data-box bg-green">
<div class="container-fluid">
<div class="row">
<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
<span class="txt-light block counter">
<span class="counter-anim">
<?php if (ROLE == ROLE_ADMIN):?>
<?php echo $sta_cache['lognum'];?>
<?php else:?>
<?php echo $sta_cache[UID]['lognum'];?>
<?php endif; ?>
</span>
</span>
<span class="weight-500 uppercase-font txt-light block">
文章
</span>
</div>
<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
<i class="zmdi zmdi-collection-text txt-light data-right-rep-icon"></i>
</div>
</div>	
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="sm-data-box bg-blue">
<div class="container-fluid">
<div class="row">
<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
<span class="txt-light block counter">
<span class="counter-anim">
<?php echo $sta_cache['twnum'];?>
</span>
</span>
<span class="weight-500 uppercase-font txt-light block">
微语
</span>
</div>
<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
<i class="zmdi zmdi-camera txt-light data-right-rep-icon"></i>
</div>
</div>	
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<section class="panel panel-default index">
<header class="panel-heading index">  最新回复
</header>
<div class="latest-link" id="admindex_servinfo">
<ul class="todo-list m-t small-list">
<?php newcomm() ?>
</ul>
</div>
</section>
</div>
<div class="col-lg-6">
<section class="panel panel-default index">
<?php if (ROLE == ROLE_ADMIN):?>
<header class="panel-heading index">  最近一语
<?php else : ?>
<header class="panel-heading index">  站点公告
<?php endif; ?>
</header>
 <div class="latest-link" id="admindex_servinfo">
<ul>
<?php newt() ?>
</ul>
</div>
</section>
</div>
</div>



<div class="row">

        <div class="col-lg-6">
            <div class="panel panel-default top">
                <div class="panel-heading index">
                   站点信息
                </div>
                    <div class="panel-body" id="admindex_servinfo">
<ul>
                        <li>共有 <b><?php echo $sta_cache['lognum'];?></b> 篇文章，<b><?php echo $sta_cache['comnum_all'];?></b> 条评论</li>
                        <li>数据库表前缀：<?php echo DB_PREFIX; ?></li>
                        <li>PHP版本：<?php echo $php_ver; ?></li>
                        <li>MySQL版本：<?php echo $mysql_ver; ?></li>
                        <li>服务器环境：<?php echo $serverapp; ?></li>
                        <li>服务器空间允许上传最大文件：<?php echo $uploadfile_maxsize; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default top">
                <div class="panel-heading index">
                   系统信息
                </div>
                                        <div class="panel-body" id="admindex_servinfo">
<ul>
                        <li>服务器系统：<?php echo php_uname('s') ; ?></li>
                        <li>服务器空间：<?php echo intval(diskfreespace(".") / (1024 * 1024))."M" ; ?></li>
                        <li>服务器端口：<?php echo $_SERVER["SERVER_PORT"]; ?></li>
                        <li>服务器时间：<?php date_default_timezone_set("Asia/Shanghai");echo date("Y-m-d H:i:s");?></li>
                        <li>服务器版本：<?php echo $_SERVER['SERVER_SOFTWARE'] ; ?></li>
                        <li>服务器语种：<?php echo getenv("HTTP_ACCEPT_LANGUAGE") ; ?></li>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
   <div class="row">
        <div class="col-lg-12">
            <div id="admindex">
                <div id="about" class="alert alert-warning">
                  欢迎使用 &copy; <a href="http://www.emlog.net" target="_blank">EMLOG</a> v<?php echo Option::EMLOG_VERSION; ?>
                </div>
            </div>
        </div>
    </div>
<link rel="stylesheet" type="text/css" href="./views/app/css/main.css"/>