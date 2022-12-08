<?php
    /**
    * 分类小分队
    *
    * @package custom
    */
 $this->need('header.php'); ?>
    <link rel="canonical" href="<?php $this->permalink() ?>"/>
<style>/*category*/
.categorylist ol {margin: 0px;padding: 20px 40px;  list-style-type: decimal;list-style-position: inside;color: #2e2e2e;}
.categorylist ol li { padding: 6px 0; border-bottom: solid 1px #fff;height: 38px;}
.categorylist ol li a:link {font-size: 12px; color: #000;}
.categorylist ol li a:visited {color: #444;}
.categorylist .tab-main ol{height: 300px;overflow-y: auto;overflow-x: hidden ;}
.categorylist h2.tab-hader {padding: 0px 40px;line-height: 60px !important;text-align: center;margin:0px;}
.categorylist .tab-hader strong.on{background-color: #fff;}
.categorylist .tab-box { border-bottom: solid #18AD4E 6px; }
</style>
</head>
<body class="post2page">
<?php $this->need('nav.php'); ?>
<div id="main" role="main">
    <div class="pw fa">
    <article class="post typo" itemscope itemtype="http://schema.org/BlogPosting">

<div class="categorylist">

                <div class="tab-box">
                <h2 class="module-title tab-hader bcg fno"><?php $this->widget('Widget_Metas_Category_List')->to($category); ?><?php while($category->next()): ?>
                <strong class="<?php $category->slug(); ?>"><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?> 的全部文章" target="_blank"><?php $category->name(); ?><?php $category->mid(); ?></a></strong><?php endwhile; ?></h2>
                <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                <div class="tab-main">
                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?><?php while($category->next()): ?>
                <ol class="<?php $category->slug(); ?>">
                <?php $this->widget("Widget_Archive@$category->mid" ,array('pageSize' => '9999' ,'type' => 'category'), "mid= $category->mid")->parse('<li><a href="{permalink}" target="_blank">{title}</a></li>'); ?>
                <li><a href="<?php $this->options->feedUrl(); ?><?php $category->slug(); ?>" target="_blank">订阅本分类</a></li>
                </ol><?php endwhile; ?>
                <!--end/.tab-main/--></div>
                <!--end/.tab-box/--></div>
</div>
<!-- end.categorylist -->

<hr class="line" /> 




        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <ul class="post-meta fno lsn">
            <li class="di"><?php _e('查看: '); ?><?php Views_Plugin::theViews('',''); ?></li>
            <li class="di"><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></li>

            &nbsp;&nbsp;
        </ul>
        <div class="post-content" itemprop="articleBody">

            <?php $this->content(); ?>

           <p class="tagscloud"><?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=9999999')->to($tags); ?><?php if($tags->have()): ?>
                <?php while ($tags->next()): ?><a href="<?php $tags->permalink(); ?>" rel="tag" class="tagsc<?php echo(rand(1,3)); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?>(<?php $tags->count(); ?>)</a>
                <?php endwhile; ?>
                <?php else: ?><?php _e('没有任何标签'); ?><?php endif; ?>
            </p>

            <!-- <p class="likepay"><a href="#">打赏</a></p> -->

<?php if($this->is('post')): ?> 
<div class="yt-post fno mt2 bclg"><p><?php $this->options->title() ?> 为乐趣而生</p><!--end/.b728x90--></div>
<?php endif; ?> 

            <?php if($this->is('post')): ?> 
            <h3 class="tc">话题标签</h3>
            <p itemprop="keywords" class="tags tagscloud tc"><?php $this->tags('', true, '<span>抱歉本文还未添加标签</span>'); ?></p>
            <?php endif; ?> 
            <p class="info tr">《<?php $this->title() ?>》&nbsp;&nbsp;<span class="time">添加时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><a href="/<?php $this->date('Y/h'); ?>" title="查看同年同月发布的文章"><?php $this->date(); ?></a></time></span>&nbsp;&nbsp;<span class="time">最后更新时间：<time datetime="<?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?>"><?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></time></span></p>

        </div>
    </article>

        <h3>谁来过</h3>
        <div class="ds-recent-visitors" data-num-items="25"></div> 
        <p><strong><?php $this->author(); ?></strong>邀请你对本文不足说出你的看法！</p>


    <?php $this->need('comments.php'); ?>

    </div><!-- end/.pw/ -->
</div><!-- end #main-->

<?php $this->need('sidebar2.php'); ?>
<?php $this->need('footer.php'); ?>
</body>
</html>