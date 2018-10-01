<?php
class makeSubNav {
	static function showSub($array, $mainCat) {

		if(in_array($_GET['nPageID'], $array)) {
		$sql = "SELECT * FROM pages WHERE bMainPage=0 AND nSubPageID=".$mainCat;
		$arrSubCat = Connect::runSql("getData", $sql);

		foreach ($arrSubCat as $subCat) {
			$activeSt = "";
			if($_GET['nPageID'] == $subCat['id'])
            {
                $activeSt = "activeSub";
                //add the class active is page id is the same as GET(nPageID)
            }
?>
			<a class="<?=$activeSt?>" href="index.php?nPageID=<?=$subCat['id']?>"><?=$subCat['strNav']?></a>
<?php
		}
		}
	}
}

?>