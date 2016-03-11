<?php
/**
 * @package Aira Theme
 * @author HyanCat
 * @version 1.0
 * @link http://www.hyancat.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

$this->need('header.php');
?>

<div class="col-mb-12 col-12" id="main" role="main">
	<?php while ($this->next()): ?>
        <article class="post" itemprop>
            <time class="date">
                <span class="day"><?php $this->date('d');?></span>
                <span class="month"><?php $this->date('M');?></span>
                <span class="year"><?php $this->date('Y');?></span>
            </time>
        	<div class="post-container">
    			<h2 class="post-title" itemprop="name headline"><span class="stick"> <?php $this->sticky();?> </span> <a itemtype="url" href="<?php $this->permalink()?>"><?php $this->title()?></a></h2>
                <div class="post-content markdown-body" itemprop="articleBody">
        			<?php $this->content('- 阅读剩余部分 -');?>
                </div>
                <div class="post-meta">
                	<?php $this->need('postmeta.php');?>
                </div>
            </div>
        </article>
	<?php endwhile;?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;');?>
</div><!-- end #main-->

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php');?>
