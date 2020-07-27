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
					
					<h1>Sức khỏe <span>của bạn</span></h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Trà & cuộc sống</a></li>
						
					  </ul>
					
				</div>
				<div class="TopImage">
					<img href="#" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/thumb13.png" alt="">
				</div>
			</div>
			</section>


			<?php include(locate_template('template-parts/content-listview.php')); ?>

	</main><!-- #main -->

<?php

get_footer();
