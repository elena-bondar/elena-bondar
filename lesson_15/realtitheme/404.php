<?php get_header(); ?>
<ul id="content">
    
    <?php if (have_posts() ):?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<li class="post">
            <h1>Sorry! This post is not there!!!</h1>
            <?php get_search_form(); ?>
            <?php the_content(); ?>
            
        </li>  
    <?php endwhile; ?>
    <?php endif; ?>

</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>