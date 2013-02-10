<?php get_header(); ?>
<ul id="content">
    
    <?php if (have_posts() ):?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<li class="post">
            <h2><a href="<?php the_permalink(); ?>" title="Read about <?php the_title(); ?>" > <?php the_title(); ?> </a></h2>
            <span>Author: <?php the_author_posts_link(); ?>.  <?php comments_number(); ?></span>
			<?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" title="Read about <?php the_title(); ?>" >Read ...</a>  

        </li>  
        
    <?php endwhile; ?>
    <?php endif; ?>

</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>