<div class="container">
	<section id="subNav">
	<?php
	$sql = "SELECT * FROM pages WHERE bMainPage=0 AND nSubPageID=".$_GET['nPageID'];
	$arrSubCat = Connect::runSql("getData", $sql);

	foreach ($arrSubCat as $subCat) {
	?>
		<a href="index.php?nPageID=<?=$subCat['id']?>"><?=$subCat['strNav']?></a>
	<?php
	}
	?>
	</section>
	<section class="textAbout">
		<p><?=$arrPage['strMainContent']?></p>
	</section><!-- About -->
</div>

<div class="coverPhoto"></div>

<div class="container">
	<section class="testimonial">
		<div class="textImg textOne">
			<h2>Testimonial</h2>
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
</div>