<!doctype html>
<!--[if IE 7]><html lang="en-US" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="en-US" class="ie8"><![endif]-->
<!--[if gt IE 8]><html lang="en-US" class="ie new-ie"><![endif]-->
<!--[if !IE]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>

	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//ajax.googleapis.com">
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<meta name="author" content="http://royand.co - Roy&amp;Co LTD" />
	<meta name="Copyright" content="Copyright <?php bloginfo('name'); ?> <?php echo date("Y"); ?>, All Rights Reserved." />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	
	<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css">
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144.png">
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div class="wrapper">
	
<header itemscope itemtype="http://schema.org/WPHeader">
	<a class="logo" href="<?php echo home_url(); ?>" itemscope itemtype="http://schema.org/Organization">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
	</a>
	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php royco_nav(); ?>
	</nav>
</header>