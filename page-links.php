<?php
    /**
    * 友情链接 默认调用插件内容
    *
    * @package custom
    */
?>
<?php $this->need('head.php'); ?>
<link rel="canonical" href="<?php $this->permalink() ?>"/> 
</head>
<body>
<?php $this->need('header.php'); ?>
<div class="container"> 
<div class="main fno" >
<div class="content w6 fl">

        <div class="article ac">
        <h1 class="title module-title"><?php $this->title() ?></h1>	
		<p class="info"><span class="time">时间：<?php $this->date(); ?></span>&nbsp;&nbsp;<span class="auther">作者：<?php $this->author(); ?></span>&nbsp;&nbsp;<span class="postsite">来源<?php $this->options->siteUrl(); ?></span>&nbsp;&nbsp;<?php Views_Plugin::theViews('查看：',''); ?>&nbsp;&nbsp;<span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></p> 
		<p class="recent-article fno"><span class="prev fl"><?php $this->thePrev(); ?></span> <span class="next fr"><?php $this->theNext(); ?></span></p>
		<ul>
		<?php Links_Plugin::output("SHOW_text"); ?>
		</ul>		
        <?php $this->content(); ?> 
		<p>转载请注明转自：<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>（<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>）<br /><strong>子曰去哪</strong>邀请你对本文不足说出你的看法！</p>
 
    <?php $this->related(5)->to($relatedPosts); ?><?php if ($relatedPosts->have()): ?>	
	<h4>话题相关文章</h4> 
    <p>
    <?php while ($relatedPosts->next()): ?><a href="<?php $relatedPosts->permalink(); ?>" rel="section" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a><br />
    <?php endwhile; ?></p>
	
    <?php else : ?>
     
    <?php endif; ?> 

<?php if($this->is('post')): ?> 
    <h3>话题标签：</h3>
    <p class="tags tagscloud"><?php $this->tags('', true, '<span>抱歉本文还未添加标签</span>'); ?></p><?php endif; ?> 
    <script  type="text/javascript" c=gd  charset="utf-8"  src="http://tui.cnzz.net/cs.php?id=1000036247"></script> 
     
<!--end.article--></div>
<?php $this->need('comments.php'); ?>
<!--end.content--></div> 
<div class="sidebar w3 fr">
    
<?php $this->need('sidebar.php'); ?>
<!--end/.sidebar/--></div>
    <!---end.main--></div>
    <!--end.container--></div> 
	<?php $this->need('footer.php'); ?>  
</body></html>