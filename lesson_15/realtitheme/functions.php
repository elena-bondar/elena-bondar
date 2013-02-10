<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div id="%16s" class="widget-container %26s">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',
	));

?>