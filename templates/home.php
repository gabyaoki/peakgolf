<div class="container">
	<section id="quote">
		<p id="quoteText"><?=$arrPage['strMainContent']?></p>
		<div>
			<a class="btn outlined" href="index.php?nPageID=2">Weddings</a>
			<a class="btn outlined" href="index.php?nPageID=2">Banquets</a>
		</div>
	</section><!-- Quote -->

	<?php
	include("views/line.php");
	?>

	<section>
		<?php
		include("views/contact.php");
		?>
	</section><!-- contact form and services summary -->

	<?php
	include("views/line.php");
	?>

	<section class="gallery">
		<?php
		include("views/insta_gallery.php");
		?>
	</section><!-- instagram gallery -->
</div>