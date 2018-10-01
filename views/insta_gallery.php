<h2 id="titleInsta">Instagram <a target="_blank" href="http://www.instagram.com/<?=Connect::getGlobals('instagram')?>">@<?=Connect::getGlobals('instagram')?></a></h2>
<?php
$sql = "SELECT * FROM medias WHERE nTypeID=1 ORDER BY medias.id DESC LIMIT 6";
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