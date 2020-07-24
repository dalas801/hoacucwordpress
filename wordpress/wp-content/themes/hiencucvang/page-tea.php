<?php
/*
Template Name: tra
 */

get_header();
?>
<?php $args=array('post_type'=>'tra_cuoc_song'); ?>

<section id="hero" class="list-view">
				<div class="container listTop">
				<div class="banner_hero">
					
					<h1>Trà & <span>cuộc sống</span></h1>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Trà & cuộc sống</a></li>
						
					  </ul>
					
				</div>
				<div class="TopImage">
					<img href="#" src="assets/img/thumb13.png" alt="">
				</div>
			</div>
			</section>




<?php include(locate_template('template-parts/content-listview.php')); ?>

	

<?php get_footer(); ?>
