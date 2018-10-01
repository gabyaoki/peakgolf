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
            <nav>
                <div class="phone topPhone">
                    <p><?=Connect::getGlobals('phone')?></p>
                </div><!--//phone-->

                <ul>
                <?php
                    $arrAllPages = Connect::runSql("getData","SELECT * FROM pages WHERE bMainPage=1"); //get all data from table pages
                    foreach($arrAllPages as $page)
                    {
                        $activeSt = "";
                        if($nPageID == $page['id'])
                        {
                            $activeSt = "active";
                            //add the class active is page id is the same as GET(nPageID)
                        }
                ?>
                    <li><a class="<?=$activeSt?>" href="index.php?nPageID=<?=$page['id']?>"><?=$page["strNav"]?></a></li>  
                    <!--for each data from column "strNav" put inside an li and add the "id" to the link, so we know which page it is talking-->
                <?php
                    }
                ?>
                </ul>
            </nav><!--//nav-->
        </div><!--//container-->
    </header><!--//header-->
    <section id="heroImg" class="bgCont contentWrap">
        <img class="bgImg" src="assets/<?=$arrPage['strHeroImg']?>" alt="<?=$arrPage['strHeroImg']?>" />
    </section><!-- Hero img -->