
    	<div class="list fl w6">
            <?php if($this->is('post') || $this->is('archive')): ?>
    		<h1 class="archive-title tc"><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s-搜索结果-以及乐搜索'),
            'tag'       =>  _t('%s专题'),
            'post'       =>  _t('%s'),
            'author'    =>  _t('%s的个人主页')
        ), '', ''); ?></h1>
            <?php endif; ?>

<?php if($this->is('author')): ?> 
<div class="post author-info">
    <img src="http://cn.gravatar.com/avatar/<?php echo MD5($this->author->mail); ?>?s=120" alt="<?php $this->author(); ?>的gravatar头像" class="fl" />
    <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->author->url(); ?>"><?php $this->author(); ?> - <?php $this->options->title(); ?></a></h2>
    <div class="p-info"><span class="p-url">yijile.com/author/<?php $this->author->uid(); ?></span><span class="p-time"></span> </div>
    <div class="p-txt"><?php $this->author(); ?>的全部文章：<a href="<?php $this->author->permalink(); ?>"><?php $this->author->permalink(); ?></a><br /><?php $this->author(); ?>的个人站点：<a href="<?php $this->author->url(); ?>" target="_blank"><?php $this->author->url(); ?></a></div>
</div>
<?php endif; ?>

            <?php if ($this->have()): ?>
        	<?php while($this->next()): ?>
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                    <?php echo img_postthumb($this->cid); ?>
        			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                    <div class="post-content" itemprop="articleBody">
            			<?php $this->excerpt(65); ?><a href="<?php $this->permalink() ?>">[阅读全文]</a>
                    </div>
                    <ul class="post-meta fno lsn">
                        <li class="di url">yijile.com/log/<?php echo $this->cid;?>.html</li>
                        <li class="di"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(''); ?></time></li>
                        <?php /**
                        <li class="di" itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
                        **/ ?>
                        <li class="di">[<?php $this->category(','); ?>]</li>
                        <li class="di">阅读 <?php Views_Plugin::theViews('',''); ?></li>
                        <li class="di" itemprop="interactionCount"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
                    </ul>
        		</article>
<?php if ($this->sequence == 5): ?>
<div class="agoo-pagenav fno mt2 bclg"><p><?php $this->options->title() ?> 为乐趣而生</p><!--end/.b728x90--></div>
<hr class="line" style="margin-top: 10px;">
<?php endif; ?>
        	<?php endwhile; ?>
            <?php else: ?>
                <article class="post">
                    <h2 class="post-title"><?php _e('还没有相关内容哦！'); ?></h2>
                    <div class="post-content" itemprop="articleBody">
                    <p>看看下面有没有你喜欢的内容。</p>
                    </div>
                </article>
<hr class="line" />
<div class="morecontent fa">
    <div class="group fno">
     <div class="item fl wi2">
         <div class="box">
         <h3 class="title">樂知道</h3>
         <ul class="detail">
             <?php  $this->widget('Widget_Archive@indexhelp', 'pageSize=6&type=tag', 'slug=support') ->parse('<li><a href="{permalink}" title="{title}" target="_blank">{title}</a></li>'); ?>
         </ul>
         </div>
     </div><!-- end/.item/ -->
     
     <div class="item fl wi2">
         <div class="box">
         <h3 class="title">typecho</h3>
         <ul class="detail">
             <?php  $this->widget('Widget_Archive@indextypecho', 'pageSize=6&type=tag', 'slug=typecho') ->parse('<li><a href="{permalink}" title="{title}" target="_blank">{title}</a></li>'); ?>
         </ul>
         </div>
     </div><!-- end/.item/ -->
    </div><!-- end/.group/ -->
    <div class="group fno">
     <hr class="line" />
     <div class="item fl wi2">
         <div class="box">
         <h3 class="title">HTML</h3>
         <ul class="detail">
             <?php  $this->widget('Widget_Archive@indexhtml', 'pageSize=6&type=tag', 'slug=html') ->parse('<li><a href="{permalink}" title="{title}" target="_blank">{title}</a></li>'); ?>
         </ul>
         </div>
     </div><!-- end/.item/ -->
     <div class="item fl wi2">
         <div class="box">
         <h3 class="title">CSS</h3>
         <ul class="detail">
             <?php  $this->widget('Widget_Archive@indexcss', 'pageSize=6&type=tag', 'slug=css') ->parse('<li><a href="{permalink}" title="{title}" target="_blank">{title}</a></li>'); ?>
         </ul>
         </div>
     </div><!-- end/.item/ -->
    </div><!-- end/.group/ -->
</div><!-- end/.recomtopic/ -->
            <?php endif; ?>		
            <div class="agoo-pagenav fno mt2 bclg"><p><?php $this->options->title() ?>网温馨提示：翻页更多精彩</p><!--end/.b728x90--></div>
            <?php $this->pageNav('&laquo; 上一页', '下一页 &raquo;', '3', '...'); ?>
    	</div>
        <!-- end/.list/ -->