<?php
/*
Template Name: Home Page
 */

get_header();
?>

<!-- HERO
			================================================== -->
			<section id="hero" data-type="background" data-speed="5">
				<div class="banner_hero">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
							<li class="glide__slide"><img src="assets/img/banner1.png" alt=""></li>
							<!-- <li class="glide__slide"><img src="assets/img/Banner2.png" alt=""></li> -->
							<!-- <li><img src="assets/img/Banner3.png" alt=""></li> -->
						</ul>
					</div>
					<div class="glide__arrows" data-glide-el="controls">
						<button class="glide__arrow glide__arrow--right" data-glide-dir="<"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
						<button class="glide__arrow glide__arrow--left" data-glide-dir=">"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
					</div>
					<div class="glide__bullets" data-glide-el="controls[nav]">
						
					</div>
					<!-- <div id="dots" class="glider-dots"> </div> -->
				</div>
			</section>
			
			<section id="newPost" class="home">

				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class=" title-left">
					<h1>Bài viết<span> mới nhất</span></h1>
					</div>
					</div>
					<div class="col-sm-4">
						<div class="postslide">
							<div class="imgContainer">
								
								<a href="detail.html"> <img  src="assets/img/thumb7.png" alt=""></a>
							</div>
							<div class="detailPost">
								<div class="date">11.04.2020</div>
								<div class="title">
									<a href="detail.html"><h3 >Người thông minh là phải biết chọn trà theo từng loại cảm xúc</h3></a>
								</div>
								<div class="description">Cảm xúc sẽ giúp ích rất nhiều cho bạn trong việc xoa dịu tâm lí đấy!</div>
							
								<div class="read-divider"><i class="ti-timer"></i> 5 phút để đọc</div>
							</div>
					
						</div>
						</div>
						<div class="col-sm-4">
							<div class="postslide">
								<div class="imgContainer">
									
									<a href="detail.html"> <img  src="assets/img/post4.png" alt=""></a>
								</div>
								<div class="detailPost">
									<div class="date">12.03.2020</div>
									<div class="title">
										<a href="detail.html"><h3 >6 thứ lành mạnh nhất mà bạn nên thêm vào ly trà uống hàng ngày</h3></a>
									</div>
									<div class="description">Chọn trà theo đúng cung bậc cảm xúc sẽ giúp ích rất nhiều cho bạn trong việc xoa dịu tâm lí đấy!</div>
								
									<div class="read-divider"><i class="ti-timer"></i> 11 phút để đọc</div>
								</div>
						
							</div>
							</div>

					</div>
				</div>
				
					
					
				



</section>
<section id="life">
<div class="life-inner">
<div class="container">
<div class="inner-header">
	<h1>Trà & <span>Cuộc sống</span></h1>
	<div class="seeMore">
		<a href="<?php echo get_post_type_archive_link('tea') ?> "><span>XEM THÊM</span></a>
	</div>
</div>
<div class="row">
<?php

$args=array('post_type'=>'tea','posts_per_page' =>2,);
$teaposts = new WP_Query($args);
$time_reading= get_field( "reading-time" );
$date=get_the_date( 'd.m.Y' );

if($teaposts->have_posts()){
while($teaposts->have_posts() ){
	$teaposts->the_post();?>

	<div class=" col-sm-6 postslide">
		<div class="date"><?php echo $date; ?></div>
		<div class="imgContainer">
			<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($teaposts->ID), 'thumbnail' ); ?>

			<img src="<?php echo $url ?>" alt=""></a>
		</div>
		<div class="detailPost">
			
			<div class="title">
				<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>
			</div>
			<div class="description"><?php echo wp_trim_words(get_the_excerpt(),30);?></div>
			<div class="read-divider"><i class="ti-timer"></i> <?php echo  get_field( "reading-time" ); ?> phút để đọc</div>
		</div> 
			
</div>

<?php
 } }
 ?>



</div>	


<div class="seeMore btn-mb">
		<a href="health.html" ><span>XEM THÊM</span></a>
	</div>
</div>
</div>
</section>
<section id="health">
<div class="container">
<h1>Sức khỏe <span>của bạn</span></h1>
<div class="row health-inner">


<div class="col-sm-6 col-12">
	<div class="health-banner">
		
			<a href="detail.html"> <img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bannertext.png" alt=""></a>
		
		
</div>
</div>
<?php

$args=array('post_type'=>'suc_khoe','posts_per_page' =>2,);
$teaposts = new WP_Query($args);
$time_reading= get_field( "reading-time" );
$date=get_the_date( 'd.m.Y' );

if($teaposts->have_posts()){
while($teaposts->have_posts() ){
	$teaposts->the_post();?>

<div class="col-sm-3 col-6">
	<div class="postslide">
		<div class="imgContainer">
			
		<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($teaposts->ID), 'thumbnail' ); ?>

			<img src="<?php echo $url ?>" alt=""></a>
		</div>
		<div class="detailPost">
		<div class="date"><?php echo $date; ?></div>
			<div class="title">
			<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>
			</div>
			<div class="description"><?php echo wp_trim_words(get_the_excerpt(),30);?></div>
			<div class="read-divider"><i class="ti-timer"></i> <?php echo  get_field( "reading-time" ); ?> phút để đọc</div>
		</div>

	</div>
</div>
<?php
 } }?>
</div>
</div>
<div class="seeMore">
<a href="<?php echo get_post_type_archive_link('tea') ?>" ><span>XEM THÊM</span></a>
</div>
</div>
</section>
<section id="recipe">
	<div class="recipe-container">
<div class="container">
<div class="row">
<div class="col-sm-4">
	<h1>Công thức <span>cho bạn</span></h1>
	<p class="lead">Chuyên mục Công thức nấu ăn sẽ là sổ tay dạy nấu ăn bổ ích, đồng hành cùng người nội trợ, mang đến những món ăn thơm ngon, bổ dưỡng cho bữa ăn gia ...</p>
	<div class="seeMore">
		<a href="recipe.html" ><span>XEM THÊM</span></a>
	</div>
	<div class="recipe-inner">
	</div>
</div>
<div class="col-sm-8">
	<div class="row">
	<?php

$args=array('post_type'=>'cuoc-song','posts_per_page' =>2,);
$teaposts = new WP_Query($args);
$time_reading= get_field( "reading-time" );

if($teaposts->have_posts()){
while($teaposts->have_posts() ){
	$teaposts->the_post();?>

<div class="col-sm-6">
	<div class="postslide left">
		<div class="imgContainer">
		<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($teaposts->ID), 'thumbnail' ); ?>

			<img src="<?php echo $url ?>" alt=""></a>
		</div>
		</div>
		<div class="detailPost">
			
			<div class="title">
			<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>

			</div>
			<div class="read-divider"><i class="ti-timer"></i> <?php echo  get_field( "reading-time" ); ?> phút để đọc</div>
			
		</div>
	
	</div>
</div>
<?php  } }?>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- <section id="review">
<video autoplay muted loop id="myVideo">
<source src="assets/video/Pexels Videos 2675515.mp4" type="video/mp4">
</video> -->
<section id="review">
<div class="container">
<div class="inner-header">
	<h1>Đánh giá <span>về trà</span></h1>
	<div class="seeMore">
		<a href="review.html" ><span>XEM THÊM</span></a>
	</div>
</div>
</div>
<div class="swiper-container small-slider">
<div class="swiper-wrapper">
<?php

$args=array('post_type'=>'danh-gia','posts_per_page' =>2,);
$teaposts = new WP_Query($args);
$time_reading= get_field( "reading-time" );

if($teaposts->have_posts()){
while($teaposts->have_posts() ){
	$teaposts->the_post();?>
	<div class="swiper-slide">
	<div class="imgContainer">
		<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($teaposts->ID), 'thumbnail' ); ?>

			<img src="<?php echo $url ?>" alt=""></a>
		</div>
		<div class="detailPost">
			
			<div class="title">
			<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>
			</div>
			
		</div>
	</div>
	<?php  } }?>
</div>
<div class="swiper-pagination"></div>
</div>
</section>	

<?php get_footer(); ?>
