<?php $this->need('header.php'); ?>
    <link rel="canonical" href="<?php $this->permalink() ?>"/>
</head>
<body>
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
