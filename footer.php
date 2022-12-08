<hr class="line fa pw" />
<div class="recomtopic">
    <div class="pw tc fa">
        <h3><a href="<?php $this->options->siteUrl(); ?>category/">博主推荐专题</a></h3>
        <p>
            <a href="http://yisha.yijile.com/foxueziliao/"  target="_blank">佛学资料</a><a href="<?php $this->options->siteUrl(); ?>tag/typechocodes/">Typecho模版代码</a><a href="<?php $this->options->siteUrl(); ?>tag/support/">乐知道</a><a href="<?php $this->options->siteUrl(); ?>tag/css/" target="_blank">CSS</a><a href="<?php $this->options->siteUrl(); ?>tag/baidu/" target="_blank">百度</a><a href="<?php $this->options->siteUrl(); ?>tag/cyanogenmod/">CyanogenMod</a><br /><a href="<?php $this->options->siteUrl(); ?>log/170.html">搜索引擎提交入口</a><a href="http://shuozhufu.com" target="_blank">说祝福</a>
        </p>
    </div>
</div>

<hr class="line pw fa" />

<?php if($this->is('index')): ?>
<?php
// include lastRSS
include "./lastRSS.php";
// Create lastRSS object
$rss = new lastRSS;
// Set cache dir and cache time limit (1200 seconds)
// (don't forget to chmod cahce dir to 777 to allow writing)
$rss->cache_dir = './cache';
$rss->cache_time = 40000;
$rss->items_limit = 6;
?>
<div class="morecontent pw fa">
    <div class="group fno">
<?php // Try to load and parse RSS file
if ($rs = $rss->get('http://rss.cnbeta.com/rss')) {
    // Show last published articles (title, link, description)
    echo "<div class='item fl wi3'>\n";
    echo "<div class='box'>\n";
    echo "<h3 class='title'>互联网头条</h3>\n";
    echo "<ul class='detail'>\n";
    foreach($rs['items'] as $item) {
        echo "\t<li><a href=\"$item[link]\" rel='nofollow' target='_blank'>".$item['title']."</a></li>\n";
        }
    echo "</ul>\n";
    echo "</div></div><!-- end/.item/ -->\n";
    }
else {
    echo "内容载入失败...\n";
}
?>
     <div class="item fl wi3">
         <div class="box">
         <h3 class="title">樂知道</h3>
         <ul class="detail">
             <?php  $this->widget('Widget_Archive@indexhelp', 'pageSize=6&type=tag', 'slug=support') ->parse('<li><a href="{permalink}" title="{title}" target="_blank">{title}</a></li>'); ?>
         </ul>
         </div>
     </div><!-- end/.item/ -->

     <div class="item fl wi3">
         <div class="box">
         <h3 class="title">typecho</h3>
         <ul class="detail">
             <?php  $this->widget('Widget_Archive@indextypecho', 'pageSize=6&type=tag', 'slug=typecho') ->parse('<li><a href="{permalink}" title="{title}" target="_blank">{title}</a></li>'); ?>
         </ul>
         </div>
     </div><!-- end/.item/ -->
    </div><!-- end/.group/ -->
<hr class="line" />
</div><!-- end/.recomtopic/ -->


<div class="morecontent pw fa">
    <div class="group fno">

<?php // Try to load and parse RSS file
if ($rs = $rss->get('http://zlun.yijile.com/feed')) {
    echo "<div class='item fl wi3'>\n";
    echo "<div class='box'>\n";
    echo "<h3 class='title'><a href='http://zlun.yijile.com/' target='_blank'>智论</a></h3>\n";
    echo "<ul class='detail'>\n";
    foreach($rs['items'] as $item) {
        echo "\t<li><a href=\"$item[link]\" target='_blank'>".$item['title']."</a></li>\n";
        }
    echo "</ul>\n";
    echo "</div></div><!-- end/.item/ -->\n";
    }
else {
    echo "内容载入失败...\n";
}
?>
<?php // Try to load and parse RSS file
if ($rs = $rss->get('http://yijile.com/code/feed')) {
    // Show last published articles (title, link, description)
    echo "<div class='item fl wi3'>\n";
    echo "<div class='box'>\n";
    echo "<h3 class='title'><a href='http://yijile.com/code/' target='_blank'>源码下载</a></h3>\n";
    echo "<ul class='detail'>\n";
    foreach($rs['items'] as $item) {
        echo "\t<li><a href=\"$item[link]\" target='_blank'>".$item['title']."</a></li>\n";
        }
    echo "</ul>\n";
    echo "</div></div><!-- end/.item/ -->\n";
    }
else {
    echo "内容载入失败...\n";
}
?>
<?php // Try to load and parse RSS file
if ($rs = $rss->get('http://yisha.yijile.com/feed')) {
    // Show last published articles (title, link, description)
    echo "<div class='item fl wi3'>\n";
    echo "<div class='box'>\n";
    echo "<h3 class='title'><a href='http://yisha.yijile.com/' target='_blank' title='一砂佛教网'>一砂一极乐</a></h3>\n";
    echo "<ul class='detail'>\n";
    foreach($rs['items'] as $item) {
        echo "\t<li><a href=\"$item[link]\" target='_blank'>".$item['title']."</a></li>\n";
        }
    echo "</ul>\n";
    echo "</div></div><!-- end/.item/ -->\n";
    }
else {
    echo "内容载入失败...\n";
}
?>
    </div><!-- end/.group/ -->
<hr class="line" />
</div><!-- end/.recomtopic/ -->


	<div id="links" class="bpg">
		<div class="piece bpg fa fno pw">
			<h3 class="title">博友圈</h3>
			<ul class="detail links fno pw fa">
				<?php Links_Plugin::output(); ?>
				<li><a target="_blank" href="http://shuozhufu.com/zhufuyu">祝福语</a></li>
				<li class="on"><a href="http://yijile.com/bang/">网址收藏夹</a></li>
				<li class="on"><a href="http://yijile.com/talk/" title="记录了被删除的链接及缘由" target="_blank">】_【链接不见了？</a></li>
			</ul>
		</div>
	</div><!-- end/#links/ -->
<?php endif; ?>




	<div id="tagcloud" class="ippp t09 tagscloud">
		<div class="ipp2bg t09"><div class="ipp2close">关闭</div></div>
		<div class="ipp2main pw t09">
			<h3 class="title tc">标签云</h3>
			<div class="detail tc fno">
				<p><?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=32')->to($tags); ?>
	<?php if($tags->have()): ?>
	<?php while ($tags->next()): ?><a href="<?php $tags->permalink(); ?>" rel="tag"><?php $tags->name(); ?><span><?php $tags->count(); ?></span></a>
	<?php endwhile; ?>
	<?php else: ?><?php _e('没有任何标签'); ?><?php endif; ?>
				</p>

				<p><a href="http://yisha.yijile.com/foxueziliao/"  target="_blank">佛学资料</a><a href="<?php $this->options->siteUrl(); ?>tag/typechocodes/">Typecho模版代码</a><a href="<?php $this->options->siteUrl(); ?>tag/support/">乐知道</a><a href="<?php $this->options->siteUrl(); ?>tag/css/" target="_blank">CSS</a><a href="<?php $this->options->siteUrl(); ?>tag/baidu/" target="_blank">百度</a><a href="<?php $this->options->siteUrl(); ?>tag/cyanogenmod/">CyanogenMod</a><a href="<?php $this->options->siteUrl(); ?>log/170.html">搜索引擎提交入口</a><a href="http://shuozhufu.com" target="_blank">说祝福</a></p>
			</div>
		</div><!-- end/.ipp2main/ -->
	</div><!-- end/#tagcloud/ -->



<div class="yt-post fno mt2 bclg"><p><?php $this->options->title() ?> 衷心接受你的建议</p><!--end/.b728x90--></div>

	<footer id="footer">
		<div class="pw fa">
			<p class="fno">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a> <a href="<?php $this->options->siteUrl(); ?>sitemap.xml" class="ico_site" title="<?php $this->options->title() ?>网站地图 WebSiteMap">SiteMap</a><span class="fr"><?php _e('由 <a href="http://www.typecho.org" rel="nofollow" target="_blank">Typecho</a> / <a href="http://my.hengtian.org/aff.php?aff=503" rel="nofollow" target="_blank">衡天主机</a> / <a href="http://yijile.com/tag/url_qiniu" rel="nofollow" target="_blank">七牛云储存</a> 强劲驱动'); ?></span></p>
			<p class="tr fno">天空再辽阔也能掌握手心！ The world is small, we can always bump! <span class="fl">yijile.com 版权所有.</span></p>
		</div>
	</footer>


<script src="<?php $this->options->themeUrl(); ?>jquery-1.42.min.js"></script>
<!-- 	<script src="<?php $this->options->themeUrl(); ?>jquery.SuperSlide.js"></script> -->

<script src="//cdn.bootcss.com/headroom/0.7.0/headroom.min.js"></script>
<script>
// 获取页面元素
var myElement = document.querySelector(".Headroom");
// 创建 Headroom 对象，将页面元素传递进去
var headroom  = new Headroom(myElement);
// 初始化
headroom.init();
</script>

<script>
$(document).ready(function(){
	$("a[href='#tag']").click(function(){
		// $("body").css("overflow-y","hidden");
		$(".ippp").addClass("on");
	});
	$(".ipp2bg").click(function(){
		$(".ippp").removeClass("on");
		// $("body").css("overflow-y","auto");
	});
    $("#gotop").click(function(){
    $(document.body).animate({'scrollTop':0},100);
    });
});
</script>
<a href="#top" id="gotop" onclick="_czc.push(['_trackEvent', '<?php if($this->is('index')): ?>首页<?php endif; ?><?php if($this->is('post')): ?>文章页面<?php endif; ?><?php if($this->is('page')): ?>页面<?php endif; ?><?php if($this->is('category')): ?>分类<?php endif; ?><?php if($this->is('tag')): ?>专题页面<?php endif; ?><?php if($this->is('404')): ?>错误提示<?php endif; ?>', 'TOP按钮']);">TOP</a>
<script async type="text/javascript" src="<?php $this->options->themeUrl(); ?>jile2015.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17988643-5', 'auto');
  ga('send', 'pageview');

</script>
	<?php $this->footer(); ?>
