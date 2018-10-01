<?php 
include ("functions/dbqueries.php"); 
include ("partials/checkUser.php");
include ("partials/header.php"); 

?>

<div id="add" class="container">

<!-- start of add Users -->
<?php
if(($_GET["area"] == "users"))
{
	if(!isset($_GET["id"]))
	{
		$title = "Add New User";
		$username = "";
		$password = "";
		$id = "";
	}

	if(isset($_GET["id"]))
	{
		$userEdit = runSql("singleData", "SELECT * FROM users WHERE id=".$_GET["id"]);
		$username = $userEdit["strUsername"];
		$password = $userEdit["strPassword"];
		$title = "Edit User";
		$id = $userEdit["id"];
	}
?>
	<a id="returnBt" href="manage.php?area=users">Return to Manage Users</a>
	<h1><?=$title?></h1>
	<form id="addUser" method="post" action="save.php?area=users" onsubmit="return validateForm();"  autocomplete="off">
		<input type="hidden" name="id" value="<?=$id?>" />
		<div class="blockfield">
			<label>Username</label>
			<input type="text" class="required" name="username" placeholder="username" value="<?=$username?>" />
		</div><!--//blockfield-->
		
		<div class="blockfield">
			<label>Password</label>
			<input type="password" class="required" name="password" placeholder="password" value="<?=$password?>" />
		</div><!--//blockfield-->

		<input class="btn purple" type="submit" value="Save" />
	</form>
<?php
}
?>
<!-- end of add Users -->

<!-- start of add tracks -->
<?php
if(($_GET["area"] == "tracks"))
{
?>
	<a id="returnBt" href="manage.php?area=tracks">Return to Manage Mixes</a>
	<h1>Add New Mix</h1>
	<form id="addMix" method="post" action="save.php?area=tracks" onsubmit="return validateForm();"  autocomplete="off" enctype="multipart/form-data">
		<input type="hidden" name="nTypeID" value="1" />
		<input type="hidden" name="bFeature" value="1" />
		<div class="blockfield">
			<label>Title</label>
			<input type="text" class="required" name="strName" placeholder="mix name" />
		</div><!--//blockfield-->

		<div class="blockfield">
			<div class="duoField">
				<label>Release Date</label>
				<input type="date" class="required" name="nYear" />
			</div><!--//duoField-->
			
			<div class="duoField">
				<label>Features</label>
				<input type="text" name="strFeature" placeholder="artist name" />
			</div><!--//duoField-->
		</div><!--//blockfield-->
		
		<div class="blockfield">
			<div class="duoField">
				<label>Mix File</label>
				<input type="file" class="required" accept=".mp3" name="strFile"/>
			</div><!--//duoField-->

			<div class="duoField">
				<label>Cover Photo</label>
				<input type="file" class="required" accept="image/*" name="strCover"/>
			</div><!--//duoField-->
		</div><!--//blockfield-->

		<input class="btn purple" type="submit" value="Save" />
	</form>
<?php
}
?>
<!-- end of add tracks -->

<!-- start of add news -->
<?php
if(($_GET["area"] == "news"))
{
	if(!isset($_GET["id"]))
	{
		$title = "Add News";
		$strTitle = "";
		$strSubTitle = "";
		$id = "";
		$strPhoto = "";
		$strDate = "";
		$strPress = "";
		$strText = "";
	}

	if(isset($_GET["id"]))
	{
		$newsEdit = runSql("singleData", "SELECT * FROM news WHERE id=".$_GET["id"]);
		$strTitle = $newsEdit["strTitle"];
		$strSubTitle = $newsEdit["strSubTitle"];
		$title = "Edit News";
		$id = $newsEdit["id"];
		$strPhoto = $newsEdit["strPhoto"];
		$strDate = $newsEdit["strDate"];
		$strPress = $newsEdit["strPress"];
		$strText = $newsEdit["strText"];
	}
?>
	<a id="returnBt" href="manage.php?area=news">Return to Manage News</a>
	<h1>Add a News</h1>
	<form id="addNew" method="post" action="save.php?area=news" onsubmit="return validateForm();"  autocomplete="off" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$id?>" />
		<div class="blockfield">
			<label>Title</label>
			<input type="text" class="required" name="strTitle" placeholder="Article's name" value="<?=$strTitle?>" />
		</div><!--//blockfield-->

		<div class="blockfield">
			<div class="duoField">
				<label>Subtitle</label>
				<input type="text" class="required" name="strSubTitle" placeholder="Short name" value="<?=$strSubTitle?>" />
			</div><!--//duoField-->
			
			<div class="duoField">
				<input type="file" class="required" accept="image/*" name="strPhoto" />
			</div><!--//duoField-->
		</div><!--//blockfield-->

		<div class="blockfield">
			<div class="duoField">
				<label>Release Date</label>
				<input type="text" class="required" name="strDate" placeholder="March 2017" value="<?=$strDate?>" />
			</div><!--//duoField-->
			
			<div class="duoField">
				<label>Magazine</label>
				<input type="text" name="strPress" placeholder="magazine name" value="<?=$strPress?>" />
			</div><!--//duoField-->
		</div><!--//blockfield-->
		
		<div class="blockfield">
			<label>Text</label>
			<textarea name="strText" placeholder="Type the article's text"><?=$strText?></textarea>
		</div><!--//blockfield-->

		<input class="btn purple" type="submit" value="Save" />
	</form>
<?php
}
?>
<!-- end of add news -->

</div>
<?php
include ("partials/footer.php"); 
?>