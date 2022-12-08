<?php
/**
 * 以及乐2015
 * 
 * @package yijile15
 * @author 我在山上
 * @version 0.1
 * @link http://yijile.com/log/526/
 */
$this->need('header.php'); ?>
	<link rel="canonical" href="<?php $this->options->siteUrl(); ?>"/>
</head>
<body class="home">
<?php $this->need('nav.php'); ?>
<div id="main">
    <div class="pw fa fno">
    	<?php $this->need('list1.php'); ?>
    	<?php $this->need('sidebar.php'); ?>
    </div>
    <!-- end/.pw/ -->
</div>
<!-- end/#main/ -->
<?php $this->need('footer.php'); ?>
</body>
</html>