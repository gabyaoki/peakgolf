<?php 
include ("classes/connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
?>

<section id="dashboard" class="container">
	<h1>Hello, <?=$logUser['strName']?></h1>
	<p>Here you can add, update and delete some of the content.</p>
	<p>To unlock more functionalities or help, please contact our support.</p>
</section><!-- //dashboard -->

<?php
include ("views/footer.php"); 
?>