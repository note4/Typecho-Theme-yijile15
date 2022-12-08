
	<header id="header" <?php $this->widget('Widget_Archive@cover', 'pageSize=1&type=tag', 'slug=cover')->to($imgcover); ?><?php while($imgcover->next()): ?>style="background-image: url(<?php echo img_cover($imgcover->cid,4); ?>);"<?php endwhile; ?>>
		<div class="pw fa fno tdn t03 Headroom">
			<div class="logo db fl"><?php if($this->is('index')): ?><h1><?php endif; ?><a href="<?php $this->options->siteUrl(); ?>" class="db"><?php $this->options->title() ?></a><?php if($this->is('index')): ?></h1><?php endif; ?></div>
		<nav id="nav" class="fr">
			<a href="<?php $this->options->siteUrl(); ?>" class="db fl t2s <?php if($this->is('index')): ?>on<?php endif; ?>" onclick="_czc.push(['_trackEvent', '<?php if($this->is('index')): ?>首页<?php endif; ?><?php if($this->is('post')): ?>文章页面<?php endif; ?><?php if($this->is('page')): ?>页面<?php endif; ?><?php if($this->is('category')): ?>分类<?php endif; ?><?php if($this->is('tag')): ?>标签页面<?php endif; ?><?php if($this->is('404')): ?>错误提示<?php endif; ?>', '导航首页链接']);"><?php _e('首页'); ?><span<?php if($this->is('index')): ?> style="display:none;"<?php endif; ?>>1</span></a>

<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
<?php while ($category->next()): ?>
<a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"  class="db fl t2s<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> on<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> on<?php endif; ?><?php endif; ?>"><?php $category->name(); ?></a>
<?php endwhile; ?>


					<a href="#tag" class="db fl t2s">标签</a>
		</nav>
		<form class="search fno fl pr" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search"><input type="text" name="s" class="text db bc2t" placeholder="预防鼠标手，搜索用回车！"<?php if($this->is('search')): ?> value="<?php $this->archiveTitle(' &raquo; ', '', ''); ?>"<?php endif; ?> onclick="_czc.push(['_trackEvent', '<?php if($this->is('index')): ?>首页<?php endif; ?><?php if($this->is('post')): ?>文章页面<?php endif; ?><?php if($this->is('page')): ?>页面<?php endif; ?><?php if($this->is('category')): ?>分类<?php endif; ?><?php if($this->is('tag')): ?>专题页面<?php endif; ?><?php if($this->is('404')): ?>错误提示<?php endif; ?>', '导航搜索输入框']);" /><input type="submit" class="submit pa db bc2t" value="搜索" onclick="_czc.push(['_trackEvent', '<?php if($this->is('index')): ?>首页<?php endif; ?><?php if($this->is('post')): ?>文章页面<?php endif; ?><?php if($this->is('page')): ?>页面<?php endif; ?><?php if($this->is('category')): ?>分类<?php endif; ?><?php if($this->is('tag')): ?>标签页面<?php endif; ?><?php if($this->is('404')): ?>错误提示<?php endif; ?>', '导航搜索']);" /></form><!--end./search/-->
		</div>
		<!-- end/.pw/ -->
<?php if($this->is('index') || $this->is('archive')): ?>
<?php $this->widget('Widget_Archive@cover', 'pageSize=1&type=tag', 'slug=cover')->to($imgcover); ?><?php while($imgcover->next()): ?> 
		<span class="talk"><a href="<?php $imgcover->permalink(); ?>" class="t03"><?php $imgcover->title() ?></a></span>
<?php endwhile; ?>
<?php endif; ?>
	</header>
	<!-- end/.header/ -->
<div class="topbar">
	<div class="pw fa fno">
	
		<ul class="pages2nav fr">
		    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		    <?php while($pages->next()): ?>
		        <li class="fl"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" target="_blank" class="<?php if($this->is('page', $pages->slug)): ?>on<?php endif; ?>"><?php $pages->title(); ?></a>
		    <?php endwhile; ?>
		</ul>
		<div class="breadcrumb fl fno">
			<a href="<?php $this->options->siteUrl(); ?>" class="icohome" title="<?php $this->options->title() ?>首页" onclick="_czc.push(['_trackEvent', '<?php if($this->is('index')): ?>首页<?php endif; ?><?php if($this->is('post')): ?>文章页面<?php endif; ?><?php if($this->is('page')): ?>页面<?php endif; ?><?php if($this->is('category')): ?>分类<?php endif; ?><?php if($this->is('tag')): ?>专题页面<?php endif; ?><?php if($this->is('404')): ?>错误提示<?php endif; ?>', '面包屑导航首页链接']);"><?php $this->options->title() ?></a><span>&raquo;</span>

			<?php if($this->is('index')): ?><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>首页">以及樂首页</a><?php endif; ?>

			<?php if($this->is('post')): ?><?php $this->category(','); ?><span>&raquo;</span><strong>文章正文</strong><?php if($this->user->hasLogin()): ?><span>&raquo;</span><a href="<?php $this->options->adminUrl('write-post.php?cid=' . $this->cid); ?>">(编辑)</a><?php else: ?><?php endif; ?><?php endif; ?>

			<?php if($this->is('page')): ?><a href="<?php $this->options->siteUrl(); ?>"><?php $this->title() ?></a><?php if($this->user->hasLogin()): ?><span>&raquo;</span><a href="<?php $this->options->adminUrl('write-page.php?cid=' . $this->cid); ?>">(编辑)</a><?php else: ?><?php endif; ?><?php endif; ?>

			<?php if($this->is('category')): ?><strong><?php $this->archiveTitle(' &raquo; ', '', ''); ?></strong><?php endif; ?>

			<?php if($this->is('tag')): ?><strong>专题：<?php $this->archiveTitle(' &raquo; ', '', ''); ?></strong><?php endif; ?>

			<?php if($this->is('404')): ?><strong>错误提示</strong><?php endif; ?> 

			<?php if($this->is('search')): ?><strong>搜索</strong><span>&raquo;</span><strong><?php $this->archiveTitle(' &raquo; ', '', ''); ?></strong><?php endif; ?> 		
		</div>
		<!-- end/.breadcrumb/ -->
		<!-- end/.pages2nav/ -->

	<!--end/.pw fno/--></div>
<!--end/.breadcrumb/--></div> 