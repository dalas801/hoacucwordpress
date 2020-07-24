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
<?php 
$date=get_the_date( 'd.m.Y' );

 $url = wp_get_attachment_url( get_post_thumbnail_id($teaposts->ID), 'thumbnail' );

?>
<section id="hero" class="detailView">
			



			<div class="b-hero">
				<figure style="background-image: url('assets/img/thumb6.jpg');" class="b-post__hero-image" >
					<div class="b-post__hero-wrap">
						<div class="b-read__wrap container">	
					<div class="b-post__hero-inner">
						<h1><?php the_title(); ?></h1>
						<p class="description"><?php the_excerpt(); ?></p>
						
						<div class="b-post__details-wrap">
							<a href="#" class="b-post__details-wrap-cell ">
								<div style="background-image:url('"<?php echo $url ?>');" class="b-post__hero-thumbnail"></div>
								<div class="b-post__hero-detail-text">Nguyễn Thái Thảo Nguyên</div>
							  </a>
							  
							  <div class="b-post__details-wrap-cell">
								<div class="b-post__hero-detail-text"><?php echo $date; ?></div>
							  </div>
							  <!-- <a href="#" class="b-post__details-wrap-cell cc-last ">
								<div class="b-post__hero-detail-text">Trà và cuộc sống</div>
							  </a> -->
						</div>
						</div>
					</div>
					</div>
				
				
			

		
				</figure>
				
			
				
			</div>
		
		
		</section>


<main class="cc-post">
<div class="b-sticky-share__wrap">
	<div class="cc-sticky-share b-post-bottom__share cc-read">
		<div><span>SHARE</span></div>
		
			<div class="icon_share"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
			
				<div class="icon_share"><a href="#"><i class="fab fa-twitter"></i></a></div>
		
	</div>
</div>

<div class="container cc-read">



	<article class="b-read__wrap">


	</article>

</div>
<div class="cc-post-bottom cc-read">
	<div class="b-read__wrap">
		<div class="b-post-bottom__share bottom__share cc-read">
			<div class="bottom__share__wrap">
			<div><span>SHARE</span></div>
			
				<div class="icon_share"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
				
					<div class="icon_share"><a href="#"><i class="fab fa-twitter"></i></a></div>
					</div>
			
		</div>
		<div class="b-post-bottom__author">
			
				<a class="b-post-bottom__author-img" style="background-image:url('assets/img/tacgia.png');"></a>
				
			<div class="author-info">
				<a class="b-post-bottom__author-name">Nguyễn Thái Thảo Nguyên</a>
				<p class="b-post-bottom__author-desc">Là một nữ nhà văn của Hội nhà văn Việt Nam, được biết đến nhiều nhất bởi tập truyện gây tranh cãi mang tên Cánh đồng bất tận. Tập truyện đã nhận được giải thưởng của Hội nhà văn Việt Nam năm 2006 </p>
			</div>

	</div>
</div>
</div>



</main>



<?php

get_footer();
