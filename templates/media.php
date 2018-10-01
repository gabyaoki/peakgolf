<div class="container media">
	<section class="gallery">
		<h2 id="titleInsta">Instagram <a target="_blank" href="http://www.instagram.com/<?=Connect::getGlobals('instagram')?>">@<?=Connect::getGlobals('instagram')?></a></h2>
		<?php
		$sql = "SELECT * FROM medias WHERE nTypeID=1 ORDER BY medias.id DESC LIMIT 12";
		$arrImg = Connect::runSql("getData", $sql);
		foreach ($arrImg as $img) {
		?>
			<div class="instaWrap">
				<div class="bgCont">
					<img class="bgImg" src="assets/<?=$img['strName']?>" alt="<?=$img['strName']?>" />
				</div>
				<div class="instaDesc">
					<p><?=$img['strDesc']?></p>
				</div>
			</div>
		<?php
		}
		?>
	</section><!-- instagram gallery -->

	<?php
	include("views/line.php");
	?>

	<section id="video">
		<h2 id="titleVideo">Feature Wedding Films</h2>
		<div class="videoDiv">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/WJ-l1Uja9I4?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p class="instaDesc">Jette and Ragnar's Wedding Film - Sep 2018</p>
		</div>
		<div class="videoDiv">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/P1uEtueUBVg?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p class="instaDesc">Robbie and Kaylan's Wedding Film - May 2018</p>
		</div>
		<div class="videoDiv">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/0CJlRkqu8GQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p class="instaDesc">Megan and Robert's Wedding Film - Feb 2018</p>
		</div>
		<div class="videoDiv">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/46xhFCXBMJs?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p class="instaDesc">Nikki and Jamie's Wedding Film - Nov 2017</p>
		</div>
	</section><!-- titleVideo -->

	<?php
	include("views/line.php");
	?>

	<section class="contact">
		<?php
		include("views/contact.php");
		?>
	</section><!-- contact form and services summary -->
</div>