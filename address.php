<?php require_once 'header.php';?>
	<section class="main-content-w3layouts-agileits">

		<h3 class="tittle">Get Us</h3>
		<p class="sub text-center">We are open from monday to saterday</p>
        <div class=" text-center bg-info">
                     <h3 class="text-warning">please download our application</h3>
                    <img src="uploads/app.jpg" style="width: 200px;height:120px">


                     </div>
		<div class="contact-map inner-sec">

			<!-- <iframe src="<?php //getcontacts("titles","4");?>"
				class="map" style="border:0" allowfullscreen=""></iframe> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.591750060202!2d38.78591611410488!3d9.00965999177397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8556c333f399%3A0x97dd40f63fa6ef9e!2sTESHEAB%20COMMERCIAL%20CENTER!5e0!3m2!1sen!2set!4v1656315605989!5m2!1sen!2set" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			<div class="ad-inf-sec bg-light">
				<div class="container">
					<div class="address row">

						<div class="col-lg-4 address-grid">
							<div class="row address-info">
								<div class="col-md-4 address-left text-center">
									<i class="far fa-map"></i>
								</div>
								<div class="col-md-8 address-right text-left">
									<h6>Address</h6>
									<p> Ethiopia,Addis Abeba.hayahulet,tesabe building 5th floor

									</p>
								</div>
							</div>

						</div>
						<div class="col-lg-4 address-grid">
							<div class="row address-info">
								<div class="col-md-4 address-left text-center">
									<i class="far fa-envelope"></i>
								</div>
								<div class="col-md-8 address-right text-left">
									<h6>Email</h6>
									<p>
										<a href="mailto:kinideas@gmail.com">kinideas@gmail.com</a></p>
									</div>

								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-4 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-8 address-right text-left">
										<h6>Phone</h6>
										<p>09-11-51-00-04</p>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--//main-->
			<!--footer-->
			<?php include("footer.php");?>
			<!---->
			<!-- js -->
			<script src="js/jquery-2.2.3.min.js"></script>
			<!-- //js -->
			<!--/ start-smoth-scrolling -->
			<script src="js/move-top.js"></script>
			<script src="js/easing.js"></script>
			<script>
				jQuery(document).ready(function ($) {
					$(".scroll").click(function (event) {
						event.preventDefault();
						$('html,body').animate({
							scrollTop: $(this.hash).offset().top
						}, 900);
					});
				});
			</script>
			<!--// end-smoth-scrolling -->

			<script>
				$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>