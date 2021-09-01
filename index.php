<?php get_header(); ?>



<div class="fond-rouge">
    <h1 class="texte-blanc"><?php bloginfo('name'); ?></h1> 
</div>

<div class="fond-jaune">

<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>

</div>

<div class="fond-rouge">
    <h1 class="texte-blanc"><?php bloginfo('description'); ?></h1> 
</div>

<?php get_footer(); ?>