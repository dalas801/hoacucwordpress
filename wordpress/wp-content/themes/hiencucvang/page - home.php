<?php
/*
Template Name: Home Page
 */

get_header();
?>
<?php 
$time_reading= get_field( "reading-time" );
$date=get_the_date( 'd.m.Y' );
?>
<!-- HERO
			================================================== -->
			<section id="hero" class="banner-top" data-type="background" data-speed="5">
				<div class="banner_hero">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
						<?php $catquery = new WP_Query( 'post_type=banner&posts_per_page=2' );


						if($catquery->have_posts()){
							while($catquery->have_posts()) : $catquery->the_post(); ?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'full' ); ?>
	
							<li class="glide__slide"><img src="<?php echo $url ?>" alt=""></li>
							<?php endwhile;
									wp_reset_postdata();
								}
								?>
						
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
					<?php $catquery = new WP_Query( 'posts_per_page=2' );


if($catquery->have_posts()){
	while($catquery->have_posts()) : $catquery->the_post(); ?>
					<div class="col-sm-4">
					<div class="postslide">
		<div class="imgContainer">
			
		<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

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
						<?php endwhile;
	wp_reset_postdata();
}
?>
						</div>
					
				</div>
				
					
					
				



</section>
<section id="life">
<div class="life-inner">
<div class="container">
<div class="inner-header">
	<h1>Trà & <span>Cuộc sống</span></h1>
	<div class="seeMore">
		<a href="<?php echo site_url('/tra') ?>  "><span>XEM THÊM</span></a>
	</div>
</div>
<div class="row">

<?php $catquery = new WP_Query( 'cat=5&posts_per_page=2' );


if($catquery->have_posts()){
 while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div class=" col-sm-6 postslide">
		<div class="date"><?php echo $date; ?></div>
		<div class="imgContainer">
			<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

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

<?php endwhile;
	wp_reset_postdata();
}
?>



</div>	


<div class="seeMore btn-mb">
		<a href="<?php echo site_url('/suc-khoe') ?> "><span>XEM THÊM</span></a>
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


<?php $catquery = new WP_Query( 'cat=6&posts_per_page=2' );


if($catquery->have_posts()){
	while($catquery->have_posts()) : $catquery->the_post(); ?>

<div class="col-sm-3 col-6">
	<div class="postslide">
		<div class="imgContainer">
			
		<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

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
<?php endwhile;
	wp_reset_postdata();
}
?>
</div>
</div>
<div class="seeMore">
<a href="<?php echo site_url('/suc-khoe') ?>" ><span>XEM THÊM</span></a>
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
		<a href="<?php echo site_url('/cong-thuc') ?>" ><span>XEM THÊM</span></a>
	</div>
	<div class="recipe-inner">
	</div>
</div>
<div class="col-sm-8">
	<div class="row">


<?php $catquery = new WP_Query( 'cat=7&posts_per_page=1' );


if($catquery->have_posts()){
	while($catquery->have_posts()) : $catquery->the_post(); ?>

			
			<div class="col-sm-6">
					<div class="postslide left">
					<div class="imgContainer">
					<a href="<?php the_permalink();?>">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

					<img src="<?php echo $url ?>" alt=""></a>
					<div class="detailPost">
					
					<div class="title">
					<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>

					</div>
					<div class="read-divider"><i class="ti-timer"></i> <?php echo  get_field( "reading-time" ); ?> phút để đọc</div>
			
			</div>
					</div>
					</div>
					
	
	</div>
	<?php endwhile;
	wp_reset_postdata();
}
?>
<div class="col-sm-6">
<div class="row">

<?php $catquery = new WP_Query( 'cat=7&posts_per_page=2&offset=1' );


if($catquery->have_posts()){
	while($catquery->have_posts()) : $catquery->the_post(); ?>

				<div class="col-sm-12 col-6">
					<div class="postslide">
						<div class="imgContainer">
							<a href="<?php the_permalink();?>">
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

						<img src="<?php echo $url ?>" alt=""></a>
						</div>
					
					<div class="detailPost">
					
						<div class="title">
						<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>

						</div>
						<div class="read-divider"><i class="ti-timer"></i> <?php echo  get_field( "reading-time" ); ?> phút để đọc</div>
					
					</div>
			
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
		<a href="<?php echo site_url('/danh-gia') ?>" ><span>XEM THÊM</span></a>
	</div>
</div>
</div>
<div class="swiper-container small-slider">
<div class="swiper-wrapper">
<?php $catquery = new WP_Query( 'cat=8&posts_per_page=6' );


if($catquery->have_posts()){
	while($catquery->have_posts()) : $catquery->the_post(); ?>
	<div class="swiper-slide">
	<div class="imgContainer">
		<a href="<?php the_permalink();?>">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($catquery->ID), 'thumbnail' ); ?>

			<img src="<?php echo $url ?>" alt=""></a>
		</div>
		<div class="detailPost">
			
			<div class="title">
			<a href="<?php the_permalink();?>"><h3 ><?php the_title();?></h3></a>
			</div>
			
		</div>
	</div>
	<?php endwhile;
	wp_reset_postdata();
}
?>
</div>
<div class="swiper-pagination"></div>
</div>
</section>	
<script src="https://unpkg.com/@glidejs/glide@3.3.0/dist/glide.min.js"></script>
<script>
new Glide('.banner_hero',{
	perView: 1,
	type:'carousel',
	dots:'#dots',
	variableWidth: true,
	// focusAt: 'center',
	breakpoints:{
		800:{
			perView:1
		}
	}
	
}).mount();
</script>
<?php get_footer(); ?>
