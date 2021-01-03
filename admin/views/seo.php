<?php if(!defined('EMLOG_ROOT')) {exit('error!');}?>
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
<li id="tab_seo" class="cur">
<a href="admin_log.php" class="waves-effect waves-light">网站设置</a>
</li>
</ul>
</div>
<div class="content_main">
<div class="panel-wrapper collapse in">
<div class="panel-body">
<div class="row">
  <div class="col-lg-12">
    <?php if(isset($_GET['activated'])):?><div class="alert alert-success">设置保存成功</div><?php endif;?>
    <?php if(isset($_GET['error'])):?><div class="alert alert-danger">保存失败：根目录下的.htaccess不可写</div><?php endif;?>
    </div>
    </div>
<form action="seo.php?action=update" method="post">
    <div class="panel panel-default">
        <div class="panel-heading"> 链接形式
        </div>
<div class="panel-body">
<div class="panel-wrapper collapse in">
<div class="panel-body row">
<input type="radio" name="permalink" value="0" <?php echo $ex0; ?> id="radio1" >
<label for="radio1"style="vertical-align:2px"> 默认形式: <?php echo BLOG_URL; ?>?post=1			</label><br>
<input type="radio" name="permalink" value="1" <?php echo $ex1; ?> id="radio1" >
<label for="radio2" style="vertical-align:2px"> 文件形式：<?php echo BLOG_URL; ?>post-1.html</label><br>
<input type="radio" name="permalink" value="2" <?php echo $ex2; ?> id="radio1" >
<label for="radio3" style="vertical-align:2px"> 目录形式：<?php echo BLOG_URL; ?>post/1</label>			<br>
<input type="radio" name="permalink" value="3" <?php echo $ex3; ?> id="radio1" >
<label for="radio4" style="vertical-align:2px"> 分类形式：<?php echo BLOG_URL; ?>category/1.html</label>			
</div>
</div>
</div>
</div>
    <div class="panel panel-default">
        <div class="panel-heading">  附加形式
        </div>
<div class="panel-body">
<div class="panel-wrapper collapse in">
<div class="panel-body row">
<div class="form-group">
<input  type="checkbox" style="vertical-align:-3.2px" value="y" name="isalias" id="checkbox0 isalias" <?php echo $isalias; ?> />
<label class="control-label mb-10"> 启用文章链接别名 </label>
<br>
<input type="checkbox" style="vertical-align:-3.2px" value="y" name="isalias_html" id="checkbox11 isalias_html" <?php echo $isalias_html; ?> />
<label class="control-label mb-10"> 启用文章链接别名HTML </label>
</div>
</div>
</div>
</div>
</div>
    <div class="panel panel-default">
        <div class="panel-heading"> Meta信息设置
        </div>
<div class="panel-body">
<div class="panel-wrapper collapse in">
<div class="panel-body row">
<div class="form-group">
<label class="control-label mb-10"> 站点浏览器标题（ Title ）</label>
<input maxlength="200"  class="form-control" value="<?php echo $site_title; ?>" name="site_title" />
</div>
<div class="form-group">
<label class="control-label mb-10"> 站点关键字（ Keywords ）</label>
<input maxlength="200" class="form-control" value="<?php echo $site_key; ?>" name="site_key" />
</div>
<div class="form-group">
<label class="control-label mb-10"> 站点浏览器描述（ Description ）</label>
<textarea name="site_description" class="form-control textarea" cols="" rows="4" ><?php echo $site_description; ?></textarea>
</div>
<div class="form-group form-inline">
<label class="control-label mb-10"> 文章浏览器标题方案 </label>
<select name="log_title_style" class="form-control">
<option value="0" <?php echo $opt0; ?>>文章标题</option>
<option value="1" <?php echo $opt1; ?>>文章标题 - 站点标题</option>
<option value="2" <?php echo $opt2; ?>>文章标题 - 站点浏览器标题</option>
<option value="3" <?php echo $opt3; ?>>文章标题 - 分类标题 - 站点标题</option>
<option value="4" <?php echo $opt4; ?>>文章标题 - 分类标题 - 站点浏览器标题</option>
</select>
</div>
<div class="clearfix"></div>
<div class="form-group text-center">
        <input name="token" id="token" value="<?php echo LoginAuth::genToken(); ?>" type="hidden" />

</div>
        <button type="submit" class="btn  btn-success" />保存</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="./views/app/css/main.css"/>
<script>
    setTimeout(hideActived, 2600);
    $("#menu_seo").addClass('active');
</script>