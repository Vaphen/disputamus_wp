<!DOCTYPE html>

<html>
	<head>
  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title><?php wp_title('&laguo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="only screen and (min-width: 761px)">
  		<!-- <link rel="stylesheet" href="./styles/small.css" media="only screen and (max-width: 760px)"> -->
  		<?php if(is_singular() ) wp_enqueue_script('comment-reply'); ?>
  		<?php wp_head(); ?>
	</head>