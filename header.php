<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset();?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php
$this->archiveTitle(array(
    'category' => _t('分类 %s 下的文章'),
    'search'   => _t('包含关键字 %s 的文章'),
    'tag'      => _t('标签 %s 下的文章'),
    'author'   => _t('%s 发布的文章'),
), '', ' - ');?><?php $this->options->title();?> - <?php $this->options->description();
?></title>
    <!-- 使用url函数转换相关路径 -->
    <link href="//cdn.bootcss.com/normalize/3.0.3/normalize.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/grid.css');?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css');?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/markdown.css');?>">

    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header();?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>');?>.</div>
<![endif]-->

<header id="header" class="clearfix">
    <div class="profile">
            <a href="<?php $this->options->siteUrl();?>" class="avatar">
                <img src="<?php echo getUserAvatar(); ?>" width=128 height=128>
            </a>
            <div class="site-name">
                <a href="<?php $this->options->siteUrl();?>">
                    <?php if ($this->options->logoUrl): ?>
                    <?php endif;?>
                    <?php $this->options->title()?>
                </a>
        	    <p class="description"><?php $this->options->description()?></p>
            </div>
            <ul class="nav-menu" class="clearfix">
                    <li><a<?php if ($this->is('index')): ?> class="current"<?php endif;?> href="<?php $this->options->siteUrl();?>"><?php _e('首页');?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages);?>
                    <?php while ($pages->next()): ?>
                        <li><a<?php if ($this->is('page', $pages->slug)): ?> class="current"<?php endif;?> href="<?php $pages->permalink();?>" title="<?php $pages->title();?>"><?php $pages->title();?></a></li>
                    <?php endwhile;?>
                </ul>
            <ul class="category">
                <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" title="{description}">{name}</a></li>'); //({count})?>
            </ul>
            <!-- <div class="site-search">
                <form id="search" method="post" action="./" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字');?></label>
                    <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索');?>" />
                    <button type="submit" class="submit"><?php _e('搜索');?></button>
                </form>
            </div> -->
    </div>
</header><!-- end #header -->
<div class="body">
    <div class="container">
        <div class="row">

