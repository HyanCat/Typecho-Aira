<span class="sep"><em>&nbsp;</em></span>
<div class="click">
    <span class="sep"><em>&nbsp;</em></span>
    <i class="fa fa-eye"></i>
    <?php Views_Plugin::theViews('', ' 次阅读');?>
</div>
<div class="comment">
    <span class="sep"><em>&nbsp;</em></span>
    <a href="<?php
$this->permalink()?>#comments"><i class="fa fa-comment"></i>
    <?php $this->commentsNum('评论', '一条评论', '%d 条评论');?></a>
</div>
<div class="cate">
    <span class="sep"><em>&nbsp;</em></span>
    <i class="fa fa-book"></i>
    <?php $this->category(' ');?>
</div>
<?php foreach ($this->tags as $tag): ?>
<div class="tag">
    <span class="sep"><em>&nbsp;</em></span>
    <i class="fa fa-tag"></i><a href="<?php
echo $tag['permalink']; ?>"><?php
echo $tag['name']; ?></a>
</div>
<?php endforeach;?>