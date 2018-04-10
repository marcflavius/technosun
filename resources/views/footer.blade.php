</div>
{{-- app end  --}}
	<!-- copyright area starts -->
<footer class="copyright-area section-small">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="copy-right">
					<p>TECHNOSUN Copyright &nbsp; &copy; <?php echo date('Y') ?></p>
				</div>
			</div>
			<a class="smooth_scroll" href="#slider" id="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
		</div>
	</div>
</footer>
<!-- copyright area ends -->
<script src="{{asset('app.js')}}" charset="utf-8"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js" charset="utf-8"></script> --}}
	<!-- Latest jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Owl Carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Mixitup js -->
<script src="assets/js/jquery.mixitup.js"></script>

<!-- Magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!-- Waypoint js -->
<script src="assets/js/jquery.waypoints.min.js"></script>

<!-- jquery.inview js -->
<script src="assets/js/jquery.inview.min.js"></script>

<!-- wow js -->
<script src="assets/js/wow.min.js"></script>

<!-- Ajax Mailchimp js -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Main js-->
<script src="assets/js/main_script.js"></script>
@yield('js')

@if($errors->any())
	<script>
		$(document).ready(
			$('html, body').stop().animate({
				scrollTop: $('#contact').offset().top - 50
			}, 0)
		);
	</script>
	@endif
</body>

</html>
