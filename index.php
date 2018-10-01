<?php
include("classes/connect.php");
$nPageID = (isset($_GET["nPageID"]))?$_GET["nPageID"]:1;
$sql = ("SELECT pages.*, templates.strPath FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesID WHERE pages.id='".$nPageID."'");
$arrPage = Connect::runSql("singleData", $sql);

include("views/header.php");
include("templates/".$arrPage["strPath"]);
include("views/footer.php");
?>