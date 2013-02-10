<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
	</head>

	<body>
		<div id="wrapper">
        	<!-- HEADER -->
        	<div id="header">
            	<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rielti-insight.png" width="303" height="77"  alt="<?php bloginfo('name'); ?> " /></a>
                <ul>
                	<li class="gb"><a href="#"></a></li>
                    <li class="red_flag"><a href="#"></a></li>
                    <li class="ua"><a href="#"></a></li>
                </ul>
                <div class="center">
                    <img src="<?php bloginfo('template_directory'); ?>/images/image.png" width="507" height="362" alt="" />	
					<div class="menu">
                    	<div class="sale">
                        	<img class="years" src="<?php bloginfo('template_directory'); ?>/images/5_year.png" width="79" height="100" />
                            <a>Читать подробнее >></a>
                            <img src="<?php bloginfo('template_directory'); ?>/images/discount.png" width="116" height="164" />
                    	</div>
                        <button>Поиск</button>
                        <form>
                            <ul>
                                <li><select name="1"  ><option selected="selected">Тип недвижимости</option></select></li>
                                <li><select name="1"  ><option selected="selected">Местоположение</option></select></li>
                                <li><select name="1"  ><option selected="selected">Стоимость</option></select></li>
                                <li><select name="1"  ><option selected="selected">Площадь</option></select></li>
                                <li><select name="1"  ><option selected="selected">Класс</option></select></li>
                            </ul>
                        </form>
                    </div>
            	</div>
            </div>
			
            <?php $args = array(
					  'menu_class'      => 'navbar', 
					);

					wp_nav_menu( $args );
			?>
            
			<div id="conteiner">