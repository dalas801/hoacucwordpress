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
<?php include(locate_template('template-parts/content-relate.php')); ?>



<?php

get_footer();
