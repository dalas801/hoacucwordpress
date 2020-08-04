<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hiencucvang
 */

get_header();
?>
<?php include(locate_template('template-parts/content-detailpost.php')); ?>
<div class="container fbComment">
<div class="fb-comments" xid="<?php the_ID(); ?>" data-numposts="20" width="100%" data-colorscheme="light" data-version="v2.3"></div>
</div>
<?php include(locate_template('template-parts/content-relate.php')); ?>


<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/indicator.js"></script>
<?php

get_footer();
