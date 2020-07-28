<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiencucvang
 */

?>


<section id="listView">

<div class="container">
	<div class="row">

		<!-- <div class="col-12">
			<div class="filter-row ">
		<div class="filter-ele">
			<div> -->
				<!-- <label>Sắp xếp theo:</label> -->
				<!-- <select class="form-control" ">
					<option selected="" value="">Mới nhất</option>
					<option value="">Phổ biến nhất</option>
					<option value="">A-Z</option>
				</select>
			</div>
		</div>
		</div> -->
		
	</div>

<div class="col-12 " id="#life">
		<div class="content-list row">


<?php 

$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$arg=array('cat'=>$category_id,);
$catquery = new WP_Query( $arg );
$date=get_the_date( 'd.m.Y' );


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
	</div>
	</div>
	</div>


</section>