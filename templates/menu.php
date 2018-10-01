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

<div class="container menu">
	<h2>Fall Features</h2>
	<section class="menuItem">
<?php
$sql = "SELECT
			menufoods.*,
		    menucategories.strName AS strCategory,
		    menucategories.strPhoto
		FROM
		    menufoods
		INNER JOIN menucategories ON menufoods.nCategoryID = menucategories.id";
$arrFoods = Connect::runSql("getData", $sql);

foreach ($arrFoods as $food) {
?>
		<div class="textImg textOne">
			<h3><?=$food['strCategory']?></h3>
			<p class="price"><?=$food['nPrice']?></p>
			<h4><?=$food['strName']?></h4>
			<p><?=$food['strDesc']?></p>
		</div>
<?php
if($food['strPhoto']) {
?>
		<div class="textImg textOne bgCont">
			<img class="bgImg" src="assets/<?=$food['strPhoto']?>" alt="<?=$food['strPhoto']?>" />
		</div>
<?php
}

}
?>
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