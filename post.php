<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php $this->need('header.php');?>

<div class="col-mb-12 col-12" id="main" role="main">
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

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s', '没有了');?></li>
        <li>下一篇: <?php $this->theNext('%s', '没有了');?></li>
    </ul>

    <?php $this->need('comments.php');?>

</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php');?>
