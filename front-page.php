<?php get_header(); ?>

<div>



	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

	<div id="headerGwen">sncjndsckds</div>


	<script src="three.r119.min.js"></script>
<script src="vanta.birds.min.js"></script>
<script>
VANTA.BIRDS({
  el: "#headerGwen",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  wingSpan: 25.00,
  quantity: 3.00,
  backgroundAlpha: 0.00
})
</script>

</div>


<?php get_footer(); ?>