<footer>
	<div class="container">
		<div class="footerRow">
			<div class="footerLogo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="Logo SheCar">
			</div>
			<div class="footerPhones">
				<p><span>P: </span><a href="tel:4072340080">407.234.0080</a></p>
			</div>
			<address>
				<i class="fas fa-map-marker-alt"></i>
					<a href="https://www.google.com/maps/place/612+W+Michigan+St,+Orlando,+FL+32805,+EUA/@28.5144999,-81.388975,17z/data=!3m1!4b1!4m5!3m4!1s0x88e77b9f098a05fd:0x20225c62972dc449!8m2!3d28.5144952!4d-81.3867863" target="_blank">612 W. Michigan Street <br>Orlando, Fl 32805</a><br>
					<span>By appointment only</span> <br>
					<span><a href="<?php echo site_url(); ?>/privacy-policy/">Privacy Policy/Terms & Conditions</a></span>
			</address>
		</div>
		<div class="footerRow">
			<div class="footerSocial">
				<a href="https://www.facebook.com/shecarinc/" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
				<a href="https://www.instagram.com/shecarinc/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo site_url(); ?>/contact-us/" target="_blank"><i class="fas fa-envelope"></i></a>
				<p class="dealerLicense">
					Dealer License VI-1125620-1
				</p>
			</div>
			<div class="legalTermsFooter">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/FIADA-logo.png" alt="Logo FIADA">
			</div>
			<div class="logoDP">
				<?php require_once('logo-dppa-footer.php'); ?>
			</div>
		</div>
		
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider-min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/slick/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script>
	AOS.init();
</script>
<?php wp_footer(); ?> 
</body>
</html>