<!DOCTYPE html>
<html>
<head>
	<title><?=$arrPage["strNav"]?> - <?=$arrPage["strTitle"]?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:500|Open+Sans|Vollkorn" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#3d4e65">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
	 <header>
        <div class="container">
            <a id="logo" href="index.php"><img src="images/<?=Connect::getGlobals('logo')?>" alt="logo" /></a>
            <!--get logo from DB-->
           <?php
           include("views/nav_open.php");
           include("views/nav_hamb.php");
           ?>
            <div id="socialNav">
                <a href="http://facebook.com/<?=Connect::getGlobals('facebook')?>"><img src="images/facebook.png" alt="<?=Connect::getGlobals('facebook')?>" /></a>
                <a href="http://instagram.com/<?=Connect::getGlobals('instagram')?>"><img src="images/instagram.png" alt="<?=Connect::getGlobals('instagram')?>" /></a>
                <a href="http://twitter.com/<?=Connect::getGlobals('twitter')?>"><img src="images/twitter.png" alt="<?=Connect::getGlobals('twitter')?>" /></a>
                <a href="http://youtube.com/<?=Connect::getGlobals('youtube')?>"><img src="images/youtube.png" alt="<?=Connect::getGlobals('youtube')?>" /></a>
                <a href="#"><img src="images/email.png" alt="<?=Connect::getGlobals('email')?>" /></a>
            </div><!-- socialNav -->
        </div><!--//container-->
    </header><!--//header-->

    <section id="heroImg" class="bgCont contentWrap">
        <img class="bgImg" src="assets/<?=$arrPage['strHeroImg']?>" alt="<?=$arrPage['strHeroImg']?>" />
    </section><!-- Hero img -->