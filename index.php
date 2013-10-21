<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="icon" type="image/x-icon" href="<?= bloginfo('template_directory'); ?>/favicon.ico" />
		<link rel="apple-touch-icon" href="<?= bloginfo('template_directory'); ?>/img/apple52.png"/>  
		<link rel="apple-touch-icon" sizes="72x72" href="<?= bloginfo('template_directory'); ?>/img/apple72.png"/>  
		<link rel="apple-touch-icon" sizes="114x114" href="<?= bloginfo('template_directory'); ?>/img/apple114.png"/> 
		<meta name="msapplication-TileImage" content="<?= bloginfo('template_directory'); ?>/img/windows144.png"/>  
		<meta name="msapplication-TileColor" content="#000000"/> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" type="text/css" media="screen" /> 
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>	
    </head>

	<body <?php body_class(); ?>>
	
		<?php wp_title(); ?> - <?php bloginfo( 'description' ); ?>
		
		<?php wp_footer(); ?>
	</body>
	
</html>
