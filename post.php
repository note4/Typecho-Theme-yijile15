<?php $this->need('header.php'); ?>
	<link rel="canonical" href="<?php $this->permalink() ?>"/>
</head>
<body class="post2page">
<?php $this->need('nav.php'); ?>

<div id="main" role="main">
    <div class="pw fa">
    <article class="post typo" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <ul class="post-meta fno lsn">
            <li class="di" itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li class="di"><?php _e('来源: '); ?><?php $this->options->title(); ?>（<?php $this->options->siteUrl(); ?>）</li>
            <li class="di"><?php _e('查看: '); ?><?php Views_Plugin::theViews('',''); ?></li>
            <li class="di"><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
<?php if($this->is('post')): ?>
            <hr />
            <?php $this->related(5)->to($relatedPosts); ?><?php if ($relatedPosts->have()): ?>

            <h3>话题相关文章</h3>
            <ul>
            <?php while ($relatedPosts->next()): ?><li><a href="<?php $relatedPosts->permalink(); ?>" rel="section" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
            <?php endwhile; ?>
            <?php else : ?>
             <p><a href="http://yijile.com/tag/url_qiniu" target="_blank" rel=“nofollow”>七牛云储存免费的高速图床</a></p>
            <?php endif; ?>
            </ul>

            <h3>话题标签</h3>
            <p itemprop="keywords" class="tags tagscloud"><?php $this->tags('', true, '<span>抱歉本文还未添加标签</span>'); ?></p>


            <p>转载请注明转自：<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>（<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>）</p>

            <ul class="post-near">
                <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
                <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
            </ul>

            <!-- <p class="likepay"><a href="#">打赏</a></p> -->

<div class="yt-post fno mt2 bclg"><p><?php $this->options->title() ?> 为乐趣而生</p><!--end/.b728x90--></div>
<?php endif; ?>

            <p class="info tr">《<?php $this->title() ?>》&nbsp;&nbsp;<span class="time">发表时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><a href="/<?php $this->date('Y/h'); ?>" title="查看同年同月发布的文章"><?php $this->date(); ?></a></time></span>&nbsp;&nbsp;<span class="time">最后更新时间：<time datetime="<?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?>"><?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></time></span></p>

        </div>
    </article>

        <h3>谁来过</h3>
        <div class="ds-recent-visitors" data-num-items="51" data-avatar-size="50"></div>
        <p><strong><?php $this->author(); ?></strong>邀请你对本文不足说出你的看法！</p>

    <?php $this->need('comments.php'); ?>

<script  type="text/javascript" c=gd  charset="utf-8"  src="http://tui.cnzz.net/cs.php?id=1000036247"></script>


    </div><!-- end/.pw/ -->
</div><!-- end #main-->

<?php $this->need('sidebar2.php'); ?>
<?php $this->need('footer.php'); ?>
<?php if($this->is('post')): ?>
  <script type="text/javascript">
$(document).ready(function(){
    $('.tags span').replaceWith('<?php $this->category(','); ?>');

    $('pre code').each(function(){
        var lines = $(this).text().split('\n').length - 1;
        var $numbering = $('<ul/>').addClass('pre-numbering');
        $(this)
            .addClass('has-numbering')
            .parent()
            .append($numbering);
        for(i=1;i<=lines;i++){
            $numbering.append($('<li/>').text(i));
        }
    });

});
</script>


<link href="http://cdn.staticfile.org/highlight.js/8.3/styles/solarized_light.min.css" rel="stylesheet">
<script src="http://cdn.staticfile.org/highlight.js/8.3/highlight.min.js"></script>
<script >hljs.initHighlightingOnLoad();</script>
<?php endif; ?>
</body>
</html>
