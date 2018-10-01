<?php
include ("../classes/connect.php");

if($_GET["area"] == "users")
{
	$sql = "DELETE FROM users WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=users");
}

if($_GET["area"] == "photos")
{
	$sql = "DELETE FROM medias WHERE id='".$_GET["id"]."'";
	Connect::runSql("delete", $sql);
	header("location: ../manage.php?delete=true&area=photos");
}

?>