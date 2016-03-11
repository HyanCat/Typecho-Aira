<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php $this->need('header.php');?>

    <div class="col-mb-12 col-12" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
    'category' => _t('分类【 %s 】下的文章:'),
    'search'   => _t('包含关键字【 %s 】的文章:'),
    'tag'      => _t('标签【 %s 】下的文章:'),
    'author'   => _t('【 %s 】发布的文章:'),
), '', '');?></h3>
        <?php if ($this->have()): ?>
    	<?php while ($this->next()): ?>
            <article class="post">
                <time class="date">
                    <span class="day"><?php $this->date('d');?></span>
                    <span class="month"><?php $this->date('M');?></span>
                    <span class="year"><?php $this->date('Y');?></span>
                </time>
    			<div class="post-container">
                    <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink()?>"><?php $this->title()?></a></h2>
                    <div class="post-content markdown-body" itemprop="articleBody">
                        <?php $this->content('- 阅读剩余部分 -');?>
                    </div>
                    <div class="post-meta">
                        <?php $this->need('postmeta.php');?>
                    </div>
                </div>
    		</article>
    	<?php endwhile;?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容');?></h2>
            </article>
        <?php endif;?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;');?>
    </div><!-- end #main -->

	<?php //$this->need('sidebar.php'); ?>
	<?php $this->need('footer.php');?>
