<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiencucvang
 */

?>


<?php wp_footer(); ?>

<!-- FOOTER
================================================== -->
<footer>
<div class="footer_top">
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<h1>Tham gia<span> cộng đồng</span></h1>
			<p class="lead">Một khi đã tham gia vào Project Sugar, trái tim bạn sẽ luôn đồng hành cùng những giá trị Sugar mong muốn mang tới ...</p>
		</div>
		<div class="col-sm-8">
			<div class="">
				
				<?php echo do_shortcode('[contact-form-7 id="160" title="contact footer"]'); ?>
			
</div>

				
			</div>
		</div>
	</div>
</div>
</div>
<div class="footer_bot">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="quote_text">
				<p>Hôm nay là một ngày hay hay, với tách trà trên tay, ta cùng thổi giấc mơ bay bay…<span>Cùng chia sẻ với Hiên Cúc Vàng tại các kênh thông tin này ngay</span></p>
			</div>
			<div class="social">
				<?php $catquery = new WP_Query( 'post_type=contact_info&posts_per_page=1' );


if($catquery->have_posts()){
 while($catquery->have_posts()) : $catquery->the_post(); ?>

				<div class="social-ico facebook-ico"><a href="<?php echo  get_field('facebook') ?>"><i class="fab fa-facebook-f"></i></a></div>
				<div class="social-ico insta-ico"><a href="<?php echo  get_field('instagram') ?>"><i class="fab fa-instagram"></i></a></div>
				<div class="social-ico youtube-ico"><a href="<?php echo  get_field('youtube') ?>"><i class="fab fa-youtube"></i></a></div>
					<div class="social-ico twitter-ico"><a href="<?php echo  get_field('twitter') ?>"><i class="fab fa-twitter"></i></a></div>
					
<?php endwhile;
	wp_reset_postdata();
}
?>
			</div>
			<div class="email-info">

			<i aria-hidden="true" class="far fa-envelope icon_color"></i><span> vitratuhoa@gmail.com</span>
</div>
		</div>
		
		
		</div><!-- container -->
		<div class="menu-footer">
			<ul>
				<li ><a href="#">Liên hệ quảng cáo</a></li>
				<li><a href="#"> Chính sách bảo mật</a> </li>
				<li><a href="#">Quy định sử dụng</a></li>
			</ul>
		</div>
	</div>
</div>
</footer>
<!-- MODAL
================================================== -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			
<div class="form-login">
	<div class="left">

	</div>
	<form action="" class="log-in" autocomplete="off">
		<h3>Đăng nhập</h3>
	  <p>Welcome back! Log in to your account to view today's clients:</p>
	  <div class="floating-label">
		  <input class="form-control" placeholder="Email" type="text" name="email" id="email" autocomplete="off">
		  <!-- <label for="email">Email:</label> -->
	  </div>
	  <div class="floating-label">
        <input class="form-control" placeholder="Password" type="password" name="password" id="password" autocomplete="off">
        <!-- <label for="password">Password:</label> -->
	  </div>
	  <p><a href="#">Quên mật khẩu?</a></p>
	  <button class="btn-login">Đăng nhập</button>
	</form>
	</div>

</div>
</div>
</div>

<!-- 
================================================== -->

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
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
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
slidesPerView: 6,
// centeredSlides: true,
spaceBetween: 30,

// loopAdditionalSlides: 100,
// loop: true,
// fadeEffect: { crossFade: true },
grabCursor: true,
// effect: "fade"
// loopFillGroupWithBlank: true,
navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
pagination: {
el: '.swiper-pagination',
clickable: true,
 
},
      breakpoints: {
      320: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    640: {
slidesPerView: 3,
spaceBetween: 20
},
992: {
slidesPerView: 6,
spaceBetween: 20
},
},

});
</script>
<script>
var swiper = new Swiper('.swiper-container.small-slider', {
slidesPerView: 5,
// centeredSlides: true,
spaceBetween: 30,
loopAdditionalSlides: 100,
loop: true,
grabCursor: true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
 autoplay: {
    delay: 3000,
  },
breakpoints: {
320: {
slidesPerView: 2,
spaceBetween: 20
},
640: {
slidesPerView: 4,
spaceBetween: 20
},
992: {
slidesPerView: 5,
spaceBetween: 20
},
},
});
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
