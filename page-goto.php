<?php
    /**
    * 链接跳转-内容处填网址
    *
    * @package custom
    */
$this->need('head.php'); ?>
<meta http-equiv="refresh" content="0;URL=<?php $this->excerpt(360, 'more'); ?>" />
<link rel="canonical" href="<?php $this->excerpt(360, 'more'); ?>"/>
</head>
<body>
<?php $this->need('header.php'); ?>
<div class="container cpw">
    <div class="main home cpw">
        <div class="content">
        <div class="article">
        <h2 class="title"><?php $this->title() ?>，页面重新定向中</h2>
        <p class="articleinfo">正在带你去<a href="<?php $this->excerpt(360, 'more'); ?>"><?php $this->excerpt(360, 'more'); ?></a></p>
        <!--end.article--></div>
        <!--end.content--></div>
        <div class="pagenav"></div>
    <!---end.main--></div><!--end.container--></div>
	<?php $this->need('footer.php'); ?>
</body></html>