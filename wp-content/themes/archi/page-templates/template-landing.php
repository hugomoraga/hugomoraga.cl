<?php

/*
 * Template Name: Landing Page
 * Description: A Page Template with a Page Builder design.
 */

get_header('landing'); ?>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post()?>
		<?php the_content(); ?>
	<?php 
		endwhile; 
		else :
			 esc_html_e('Page Canvas For Page Builder', 'archi'); 
		endif;
	?>

<?php get_footer('landing'); ?>