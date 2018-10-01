	<footer>
		<div class="container">
			<div id="footerDetails">
				<a id="logoFooter" href="index.php"><img src="images/<?=Connect::getGlobals('logo')?>" alt="logo" /></a>
				<p class="textFooter"><?=Connect::getGlobals('address')?></p>
				<p class="textFooter"><?=Connect::getGlobals('city')?></p>
				<p class="textFooter"><?=Connect::getGlobals('postal code')?></p>
				<p class="textFooter email"><?=Connect::getGlobals('email')?></p>
			</div>
			<div id="gMap"></div>
			<div class="copy">
			<p>&copy;Peak Golf (Since 1980) - All Rights Reserved</p>
		</div>
		</div><!-- //container -->
	</footer><!-- //footer -->

	<script   src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- //jquery -->
	<script src="js/hambMenu.js"></script>
	<!-- //hambuguer menu -->
	<script src="js/makebg.js"></script>
	<!-- //getState -->
	<script src="js/formValidation.js"></script> 
	<!-- //form validation -->
	<script src="js/ajaxForm.js"></script>
	<!-- //ajaxform -->
	<script src="js/mapstyle.js"></script>
	<!-- //google maps style -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7IkawfWHWvvbVUNkt8uvtMW9MUXtr6c&callback=initMap" async defer></script> 
	<!-- //google maps API -->
</body>
</html>