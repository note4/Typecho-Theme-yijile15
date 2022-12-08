
        <div class="sidebar fr w4">

        <div class="yt-side">
            <span>欢迎来到<?php $this->options->title() ?></span>
        </div>

        <div class="group fno">
            <?php if($this->is('index') || $this->is('page')): ?>
                
            <div class="item fl wi3">
                <div class="box">
                <h3 class="title">点击榜</h3>
                <ul class="detail">
                    <?php Views_Plugin::theMostViewed(); ?>
                </ul>
                </div>
            </div><!-- end/.item/ -->
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
            <hr class="line" />
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
            <hr class="line" />
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


        <?php if($this->is('index')): ?>
        <div class="about">
            <h3 class="title">关于<?php $this->options->title() ?></h3>
            <div class="detail">
                <p><?php $this->options->description() ?></p>
                <ul class="links fno">
                <li><a href="http://zlun.yijile.com/weibo.html" target="_blank" title="<?php $this->options->title() ?>Stone的微博" rel="me nofollow">新浪微博</a></li>
                <li><a href="<?php $this->options->siteUrl(); ?>feed/rss" target="_blank" title="订阅<?php $this->options->title() ?>">RSS订阅</a></li>
                <li><a href="https://plus.google.com/107490403856069569633?rel=author" target="_blank" title="<?php $this->options->title() ?><?php $this->author(); ?>的google+">Google+</a></li>
                <li><a href="http://yijile.com/about" target="_blank" title="子曰去哪">网页名片</a></li>
                </ul>   
            </div>
            <h3 class="title">记录</h3>
            <div class="detail">
                <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                <p><strong><a href="#"><?php $this->options->title() ?></a></strong>（<a href="<?php $this->options->feedUrl(); ?>" target="_blank"><?php _e('RSS'); ?></a>）<?php _e('存储了 <em>%s</em> 篇文章，', $stat->publishedPostsNum); ?>最后更新于<?php echo date('Y年m月d日'); ?></p>
            </div>
        </div><!-- end/#about/ -->
        <?php endif; ?>

        </div>
        <!-- end/.sidebar/ -->