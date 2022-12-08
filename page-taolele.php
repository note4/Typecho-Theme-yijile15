<?php
    /**
    * 淘乐乐
    *
    * @package custom
    */
?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="<?php $this->options->charset(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit" />
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s-搜索结果-以及乐搜索'),
            'tag'       =>  _t('%s-专题'),
            'post'       =>  _t('%s'),
            'author'    =>  _t('%s的个人主页-文章列表')
        ), '', ' - '); ?><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?> <?php $this->options->title(); ?><?php if($this->is('index')): ?><?php endif; ?></title>
<link rel="dns-prefetch" href="//yijile.qiniudn.com"/>
<link rel="dns-prefetch" href="//yisha.qiniudn.com"/>
<link rel="dns-prefetch" href="//yisha.com"/>
<link rel="dns-prefetch" href="//s5.cnzz.com"/>
<link rel="dns-prefetch" href="//googleads.g.doubleclick.net"/>
<link rel="dns-prefetch" href="//pagead2.googlesyndication.com"/>
<link rel="dns-prefetch" href="//cdn.staticfile.org"/><?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom=&rss1=&rss2='); ?>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl(); ?>style.css">
<!--[if lt IE 9]><script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js" onload="myInit()"></script><script src="http://cdn.staticfile.org/respond.js/1.4.2/respond.min.js" onload="myInit()"></script><![endif]-->
<script async type="text/javascript" src="http://cdn.staticfile.org/jquery/1.6.4/jquery.min.js" onload="myInit()"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" onload="myInit()"></script>

<link rel="canonical" href="<?php $this->permalink() ?>"/> 
<script type="text/javascript">
//<![CDATA[
  (function() {
    var shr = document.createElement('script');
    shr.setAttribute('data-cfasync', 'false');
    shr.src = '//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js';
    shr.type = 'text/javascript'; shr.async = 'true';
    shr.onload = shr.onreadystatechange = function() {
      var rs = this.readyState;
      if (rs && rs != 'complete' && rs != 'loaded') return;
      var site_id = '9266028032500ced6b0a63218feede01';
      try { Shareaholic.init(site_id); } catch (e) {}
    };
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(shr, s);
  })();
//]]>
</script>
<style type="text/css">
a[href*="taobao.com"]{
 	padding-left: 20px;
	background-image: url(<?php $this->options->themeUrl(); ?>images/icon.png);
	background-repeat: no-repeat;
	display: block;
	line-height: 1.9em;
}
a[href^="http://g.click.taobao.com"]{
	background-position: 0px 5px;
}
a[href^="http://s.click.taobao.com"], a[href^="http://ai.taobao.com"]{
	background-position: left -38px;
} 
</style> 
</head>
<body>


<div class="container"> 
<div class="main post fno" >
<div class="content w6 fl">

        <div class="article">
        <h1 class="title"><?php $this->title() ?></h1>	
		<p class="meta"><span class="auther">作者：<?php $this->author(); ?></span>&nbsp;&nbsp;<span class="postsite">来源：以及乐（<?php $this->options->siteUrl(); ?>）</span>&nbsp;&nbsp;<?php Views_Plugin::theViews('查看：',''); ?>&nbsp;&nbsp;<span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span></p> 
		<p class="recent-article fno"><span class="prev fl"><?php $this->thePrev(); ?></span> <span class="next fr"><?php $this->theNext(); ?></span></p>

<div id=>
    <?php $this->content(); ?> 

    <script type="text/javascript">
     document.write('<a style="display:none!important" id="tanx-a-mm_11069606_3511293_21536515"></a>');
     tanx_s = document.createElement("script");
     tanx_s.type = "text/javascript";
     tanx_s.charset = "gbk";
     tanx_s.id = "tanx-s-mm_11069606_3511293_21536515";
     tanx_s.async = true;
     tanx_s.src = "http://p.tanx.com/ex?i=mm_11069606_3511293_21536515";
     tanx_h = document.getElementsByTagName("head")[0];
     if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
</script>
    
    <?php $this->related(5)->to($relatedPosts); ?><?php if ($relatedPosts->have()): ?>	
	<h4>话题相关文章</h4> 
    <ul>
    <?php while ($relatedPosts->next()): ?><li><a href="<?php $relatedPosts->permalink(); ?>" rel="section" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
    <?php endwhile; ?>
    <?php else : ?>
     <p><a href="http://yijile.com/tag/url_qiniu" target="_blank" rel=“nofollow”>七牛云储存免费的高速图床</a></p>
    <?php endif; ?>
    </ul>

<!-- end/ --></div> 

<p class="info" style="text-align: right;">《<?php $this->title() ?>》&nbsp;&nbsp;<span class="time">发表时间：<?php $this->date(); ?></span>&nbsp;&nbsp;<span class="time">最后更新时间：<?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></span></p>
<p class="copyriht">转载请注明转自：<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>（<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>）<br /><strong>子曰去哪</strong>邀请你对本文不足说出你的看法！</p>

<?php if($this->is('post')): ?> <div class='shareaholic-canvas' data-app='recommendations' data-app-id='6912804'></div><?php endif; ?>

<!--end.article--></div>
<?php $this->need('comments.php'); ?>
<!--end.content--></div> 
<div class="sidebar w3 fr">
    
<?php $this->need('sidebar.php'); ?>
<!--end/.sidebar/--></div>
    <!---end.main--></div>
    <!--end.container--></div> 

<script type="text/javascript"> (function(win,doc){ var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0]; if (!win.alimamatk_show) { s.charset = "gbk"; s.async = true; s.src = "http://a.alimama.cn/tkapi.js"; h.insertBefore(s, h.firstChild); }; var o = { pid: "mm_11069606_6246023_21552333",/*推广单元ID，用于区分不同的推广渠道*/ appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/ unid: ""/*自定义统计字段*/ }; win.alimamatk_onload = win.alimamatk_onload || []; win.alimamatk_onload.push(o); })(window,document);</script>

	<?php $this->need('footer.php'); ?>
</body></html>