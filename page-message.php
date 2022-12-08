<?php
    /**
    * 留言板
    *
    * @package custom
    */
 $this->need('header.php'); ?>
	<link rel="canonical" href="<?php $this->permalink() ?>"/>
<style>
#reader ul:hover a{opacity: .50; filter: alpha(opacity=50);}
#reader ul:hover a:hover{opacity: 1; filter: alpha(opacity=100);}
#reader ul {list-style: none; margin: 0 -9px;}
#reader li {padding: 9px 9px 15px; float: left; }
#reader li a {position: relative; display: block; text-align: center; text-decoration: none; overflow: hidden;}
#reader li a:hover{ outline: 1px solid #000000; overflow: visible;}
#reader li a img{ width: 125px; height:125px;z-index: 0;border: 0;margin: 0;display: block; border-radius: 3px;}
#reader li a small {line-height: 30px; font-size: 12px; position: absolute; bottom: 125px; left: -1px; right: -1px; z-index: 1; background: #000000; color: #FFF;}
#reader li a:hover small {bottom: -8px;}
#reader li a i {font-size: 10px; font-style: normal; width: 38px; height: 38px; line-height: 38px; color: #fff; position: absolute; top: 0px; right: 0px; border-radius: 38px; }
#reader li a:hover i{ top: -15px; right: -15px; background-color: #F56763;}
</style>
</head>
<body class="post2page">
<?php $this->need('nav.php'); ?>

<div id="main" role="main">
    <div class="pw fa">
    <article class="post typo" itemscope itemtype="http://schema.org/BlogPosting">



<div id="reader">
<h2 class="module-title"><strong>读者风云榜</strong></h2>
<ul class="fno t03">
<?php
$period = time() - 999592000; // 時段: 30 天, 單位: 秒
$counts = Typecho_Db::get()->fetchAll(Typecho_Db::get()
->select('COUNT(author) AS cnt','author', 'url', 'mail')
->from('table.comments')
->where('created > ?', $period )
->where('status = ?', 'approved')
->where('type = ?', 'comment')
->where('authorId = ?', '0')
->group('author')
->order('cnt', Typecho_Db::SORT_DESC)
->limit('35')
);
$mostactive = '';
$avatar_path = 'http://cdn.v2ex.com/gravatar/';
foreach ($counts as $count) {
  $avatar = $avatar_path . md5(strtolower($count['mail'])) . '.jpg?s=125';
  $c_url = $count['url']; if ( !$c_url ) $c_url = Helper::options()->siteUrl;
  $mostactive .= "<li><a href='" . $c_url . "' title='" . $count['author'] . " (参与" . $count['cnt'] . "次探讨)' rel='nofollow' target='_blank' class='t03'><img src='" . $avatar . "' alt='" . $count['author'] . "的照片' class='avatar' /><small class='t03'>" . $count['author'] . "</small><i class='t03'>" . $count['cnt'] . "</i></a></li>\n";
}
echo $mostactive; ?></ul> 
<!--end/.reader/--></div>  
<hr class="line" /> 




        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <ul class="post-meta fno lsn">
            <li class="di"><?php _e('查看: '); ?><?php Views_Plugin::theViews('',''); ?></li>
            <li class="di"><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></li>

            &nbsp;&nbsp;
        </ul>
        <div class="post-content" itemprop="articleBody">

            <?php $this->content(); ?>

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