<?php
include("../classes/connect.php");

$sql = "INSERT INTO 
		contacts(
			strName,
			strEmail,
			strPhone,
			nOccasionID, 
			strMessage,
			dateEvent,
			nGuests) 
		VALUES (			
			'".$_POST['strName']."',
			'".$_POST['strEmail']."',
			'".$_POST['strPhone']."',
			'".$_POST['nOccasionID']."',
			'".$_POST['strMessage']."',
			'".$_POST['dateEvent']."',
			'".$_POST['nGuests']."')
		;";

Connect::runSql("saveData", $sql);
?>