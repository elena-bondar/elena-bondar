<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Site</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
	</head>

	<body>
		<div id="wrapper">
        	<div id="header">
            	<a href="/" title="main page"><img src="<?php bloginfo('template_directory'); ?>/images/geekhub.png" height="71" width="167" /></a>
                         
                <?php $args = array(
					  'menu_class'      => 'navbar', 
					);

					wp_nav_menu( $args );
				?>
                                
                <ul class="social_links">
                    <li><a href="http://www.facebook.com/pages/GeekHub/158983477520070" class="facebook"></a></li>
                    <li><a href="http://vk.com/geekhub" class="vkontakte" ></a></li>
                    <li><a href="http://twitter.com/geek_hub" class="twitter" ></a></li>
                    <li><a href="http://www.youtube.com/user/GeekHubchannel" class="youtube" ></a></li>
                    <li><a href="http://vimeo.com/geekhub" class="vimeo" ></a></li>                
                </ul>
               
            </div>