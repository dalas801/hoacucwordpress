<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hiencucvang
 */

get_header();
?>

<section  id="hero">

<div class="container">
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>


		<div class="content-list row">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				// End the loop.
			endwhile;

			

		else :
			?>
				<div class="col-12">
			<p><?php _e( 'Rất tiếc không có bài viết nào phù hợp với từ bạn tìm kiếm, thử lại xem !', 'twentyseventeen' ); ?></p>
			</div>
			<?php
			

		endif;
		?>
</div>
		</div><!-- #main -->

        </section><!-- #primary .content-area -->





	<?php

get_footer();
