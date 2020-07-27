<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiencucvang
 */

?>
<section class="relate">
	<div class="container">
		
		<h1>Bài viết<span> cùng chủ đề</span></h1>
		<div class="row content-list">
			
		<?php 

$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$arg=array('cat'=>$category_id,'posts_per_page'=>6);
$catquery = new WP_Query( $arg );



if($catquery->have_posts()){
 while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div class=" col-sm-6 postslide">
	
		<div class="imgContainer">
			<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

			<img src="<?php echo $url ?>" alt=""></a>
		</div>
		<div class="detailPost">
			
			<div class="title">
			<div class="date"><?php echo $date; ?></div>
				<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>
			</div>
			<div class="description"><?php echo wp_trim_words(get_the_excerpt(),30);?></div>
			<div class="read-divider"><i class="ti-timer"></i> <?php echo  get_field( "reading-time" ); ?> phút để đọc</div>
		</div> 
			
</div>
<?php endwhile;
	wp_reset_postdata();
}
?>

		</div>
		
	</div>


</section>