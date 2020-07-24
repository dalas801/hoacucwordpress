<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiencucvang
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1>page content</h1>

	<footer class="entry-footer">
		<?php hiencucvang_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
