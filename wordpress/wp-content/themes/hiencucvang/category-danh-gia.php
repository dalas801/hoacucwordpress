<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiencucvang
 */

get_header();
?>
<section id="hero" class="list-view">
				<div class="container listTop">
				<div class="banner_hero">
					
				<h1>Đánh giá <span>về trà</span></h1>
				<?php the_breadcrumb(); ?>
					
				</div>
				<div class="TopImage">
					<img href="#" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/thumb10.png" alt="">
				</div>
			</div>
			</section>


			<?php include(locate_template('template-parts/content-listview.php')); ?>

	</main><!-- #main -->

<?php

get_footer();
