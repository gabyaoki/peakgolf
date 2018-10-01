<?php
include("classes/makeSubNav.php");
?>
<div class="container">
	<?php
	include("views/subMenu.php");
	?>
	<section class="textAbout">
		<p><?=$arrPage['strMainContent']?></p>
	</section><!-- About -->
</div>

<div class="coverPhotoSub"></div>

<div class="container">
	<section class="testimonial">
		<div class="textImg textOne">
			<h2>Tips And Thoughts</h2>
			<p><?=$arrPage['strSecContent']?></p>
		</div>
		<div class="textImg bgCont">
			<img class="bgImg" src="assets/<?=$arrPage['strPhoto']?>" alt="<?=$arrPage['strPhoto']?>" />
		</div>
	</section>

	<?php
	include("views/line.php");
	?>

	<section class="contact">
		<?php
		include("views/contact.php");
		?>
	</section><!-- contact form and services summary -->

<?php
if($_GET['nPageID']==9){
	include("views/line.php");
?>

	<section class="gallery">
		<?php
		include("views/insta_gallery.php");
		?>
	</section><!-- instagram gallery -->
<?php
}
?>
</div>