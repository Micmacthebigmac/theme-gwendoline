<?php get_header(); ?>

<<<<<<< HEAD


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
=======
<h1>Coucou Nathan et Hervé</h1>
>>>>>>> e997c9ed00180df0411b670886a8c5ff37aa37c9

<?php get_footer(); ?>