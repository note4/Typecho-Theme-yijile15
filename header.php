<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="<?php $this->options->charset(); ?>">
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
	<link rel="dns-prefetch" href="//yisha.yijile.com"/>
	<link rel="dns-prefetch" href="//s5.cnzz.com"/>
	<link rel="dns-prefetch" href="//googleads.g.doubleclick.net"/>
	<link rel="dns-prefetch" href="//pagead2.googlesyndication.com"/>
	<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom=&rss1=&rss2='); ?>
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl(); ?>style.css">
	<!--[if lt IE 9]><script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script><script src="//cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script><![endif]-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php if($this->is('index')): ?><link rel="canonical" href="<?php $this->options->siteUrl(); ?>"/><?php endif; ?>
	<?php if($this->is('post')): ?><link rel="canonical" href="<?php $this->permalink() ?>"/><?php endif; ?>
	<?php if($this->is('page')): ?><link rel="canonical" href="<?php $this->permalink() ?>"/><?php endif; ?>
