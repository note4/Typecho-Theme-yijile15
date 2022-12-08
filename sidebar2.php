
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
<hr class="line pw fa" />
<div id="slidecontent" class="morecontent">
    <div class="pw fa">
    <div class="group fno">
        <div class="item fl wi3">
            <div class="box">
            <h3 class="title">点击榜</h3>
            <ul class="detail">
                <?php Views_Plugin::theMostViewed(); ?>
            </ul>
            </div>
        </div><!-- end/.item/ -->
        <?php if($this->is('index') || $this->is('page')): ?>
        <div class="item fl wi3">
            <div class="box">
            <h3 class="title">度友推荐</h3>
            <ul class="detail">
                <li><a href="http://yijile.com/log/333.html">微信绑定qq登录失败 4-69</a></li>
                <li><a href="http://yijile.com/log/68.html">加载中 gif动画 </a></li>
                <li><a href="http://yijile.com/log/276.html">织梦后台密码忘记了</a> </li>
                <li><a href="http://yijile.com/log/163.html">怎么rgb设置背景色的透明度</a></li>
                <li><a href="http://yijile.com/code/cmstop">cmstop媒体版源码</a></li>
                <li><a href="http://yijile.com/code/typecho">typecho源码</a></li>
            </ul>
            </div>
        </div><!-- end/.item/ -->
        <?php endif; ?>
        <?php if($this->is('post') || $this->is('archive')): ?>
        <div class="item fl wi3">
            <div class="box">
            <h3 class="title">新发表</h3>
            <ul class="detail">
                <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=6') ->parse('<li><a href="{permalink}" target="_blank">{title}</a></li>'); ?>
            </ul>
            </div>
        </div><!-- end/.item/ -->
        <?php endif; ?>
        <div class="item fl wi3">
            <div class="box">
            <h3 class="title">新留言</h3>
            <ul class="detail">
            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $this->widget('Widget_Comments_Recent', 'pageSize=6')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>：<?php $comments->excerpt(35, '...'); ?></li>
            <?php endwhile; ?>
            </ul>
            </div>
        </div><!-- end/.item/ -->
        

        </div><!-- end/.group/ -->
<?php if($this->is('post')): ?> 
        <hr class="line fa pw" />
<?php endif; ?>
     <div class="group fno">


        <?php if($this->is('index')): ?>      
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
        <?php endif; ?>

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

        <?php if($this->is('index')): ?>
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
        <?php endif; ?>
        </div><!-- end/.group/ -->
    </div><!-- end/.pw/ -->
</div><!-- end/.recomtopic/ -->