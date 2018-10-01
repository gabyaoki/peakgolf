<nav class="navHamb">
    <div class="phone topPhone">
        <p><?=Connect::getGlobals('phone')?></p>
    </div><!--//phone-->
    <a id="hambMenu" href="#"><img src="images/hamb-menu.svg" alt="nav"></a>

    <div id="hambOpen">
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
        <a id="closeHamb" href="#"><img src="images/close.png" alt="close nav"></a>
    </div>
</nav><!--//nav-->