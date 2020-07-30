<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiencucvang
 */

?>
<?php 
$postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$date=get_the_date( 'd.m.Y' );
$cat = get_the_category(); 
$user = wp_get_current_user();
 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

?>
<section id="hero" class="detailView">
			


	<?php while ( have_posts() ) : the_post(); ?>

			
			<?php endwhile; // end of the loop. ?>




			<div class="b-hero">
				<figure style="background-image: url('<?php echo $backgroundImg[0]; ?>')" class="b-post__hero-image" >
					<div class="b-post__hero-wrap">
						<div class="b-read__wrap_bio_frist container">	
					<div class="b-post__hero-inner">
						<h1><?php the_title(); ?></h1>
						<p class="description"><?php echo wp_trim_words(get_the_excerpt(),30) ?></p>
						
						<div class="b-post__details-wrap">
							
							<div  class="b-post__hero-thumbnail  ">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 25 ); ?>
						
						
						</div>
								<div class="b-post__hero-detail-text b-post__details-wrap-cell ">
								<?php echo wp_kses_post( wpautop( get_the_author() ) ); ?>
												
												</div>
								
							 
							  
							  <div class="b-post__details-wrap-cell">
								<div class="b-post__hero-detail-text"><?php echo $date; ?></div>
							  </div>
							  <a  class="b-post__details-wrap-cell cc-last ">
								<div class="b-post__hero-detail-text"><?php  echo $cat[0]->cat_name; ?></div>
							  </a>
							  
						</div>
						
						</div>
						<?php the_breadcrumb(); ?>
					</div>
					
					</div>
				
				
			

		
				</figure>
				
			
				
			</div>
		
		
		</section>

		
<main class="cc-post">
<div class="b-sticky-share__wrap">
	<div class="cc-sticky-share b-post-bottom__share cc-read">
		<div><span>SHARE</span></div>
		
			<div class="icon_share"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></div>
			
				<div class="icon_share"><a target="_blank"  href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fab fa-twitter"></i></a></div>
		
	</div>
</div>

<div class="container cc-read">



	<article class="b-read__wrap">
	<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>


	</article>

</div>
<div class="cc-post-bottom cc-read">
	<div class="b-read__wrap_bio">
		<div class="b-post-bottom__share bottom__share cc-read">
			<div class="bottom__share__wrap">
			<div><span>SHARE</span></div>
			
				<div class="icon_share"><a  target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></div>
				
					<div class="icon_share"><a target="_blank"  href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fab fa-twitter"></i></a></div>
					</div>
			
		</div>
		<div class="b-post-bottom__author">
			
				<a class="b-post-bottom__author-img">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
				</a>
				
			
			<div class="author-info">
				<a class="b-post-bottom__author-name"><?php echo wp_kses_post( wpautop( get_the_author() ) ); ?></a>
				<p class="b-post-bottom__author-desc"><?php echo wp_kses_post( wpautop( get_the_author_meta( 'description' ) ) ); ?>	</div>

	</div>
</div>
</div>
</main>

