<div id="main" class="">
	

<?php /** if($this->is('author')): ?> 
<li><img src="http://cn.gravatar.com/avatar/<?php echo MD5($this->author->mail); ?>?s=120" alt="<?php $this->author(); ?>的gravatar头像" class="" style="float:left;padding-right:10px;" />
<h3><a href="<?php $this->author->url(); ?>"><?php $this->author(); ?> - <?php $this->options->title(); ?></a></h3> 
<div class="p-info"><span class="p-url">yijile.com/author/<?php $this->author->uid(); ?></span><span class="p-time"></span> </div>
<div class="p-txt"><?php $this->author(); ?>的全部文章：<a href="<?php $this->author->permalink(); ?>"><?php $this->author->permalink(); ?></a><br /><?php $this->author(); ?>的个人站点：<a href="<?php $this->author->url(); ?>" target="_blank"><?php $this->author->url(); ?></a>...</div></li>
<?php endif; **/ ?>

<div class="post-list list-pic pw fa fno ">
<ul class="fno ylist ">

<?php while($this->next()): ?>
<li>
<img src="<?php echo img_postthumb($this->cid); ?>" alt="<?php $this->title() ?>" class="pic">
<div class="box t03">
<h3 class="title"><a class="cat <?php echo $this->category; ?>" href="<?php $this->options->siteUrl(); ?><?php echo $this->category; ?>" title="<?php echo $this->category; ?>"><?php echo $this->category; ?></a>&raquo;<a href="<?php $this->permalink() ?>"><?php $this->title() ?> <?php $this->options->title(); ?></a></h3>
<div class="meta"><span class="p-url">yijile.com/log/<?php echo $this->cid;?>.html</span><span class="p-time"><time><?php $this->date(''); ?></time></span></div>
<p class="content"><?php $this->excerpt(80); ?><?php $this->author(); ?>于<?php $this->date('Y年m月d日'); ?>发表在<?php $this->options->title(); ?>，目前已经有<?php Views_Plugin::theViews('','人浏览'); ?></p> 
<div class="tags tagscloud"><?php $this->tags('', true, '<span> </span>'); ?></div>
</div>
</li> 
<?php endwhile; ?>
</ul>
<div class="agoo-pagenav fno mt2 bclg"><p><?php $this->options->title(); ?>温馨提示：翻页更多精彩</p><!--end/.b728x90--></div>
<?php $this->pageNav('&laquo; 上一页', '下一页 &raquo;', '3', '...'); ?>
</div>

</div><!-- end/#main/ -->