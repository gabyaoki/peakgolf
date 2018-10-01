<?php 
include ("classes/connect.php"); 
include ("models/checkUser.php"); 
include ("views/header.php"); 
$_GET["area"] = (isset($_GET["area"]))?$_GET["area"]:"";
?>
<section id="manage" class="container">
	<div id="users">
	<?php
	include ("views/states.php");

	if($_GET["area"] == "users")
	{
		$sql = "SELECT * FROM users";
		$arrUser = Connect::runSql("getData", $sql);
		?>
			<h1>Manage Users</h1>

			<div class="options addCont">
				<a href="add.php?area=users">
					<span class="fas fa-user-plus"></span>
					<span class="label">New User</spasn>
				</a>
				<div class="optBt">	
					<a class="add" href="add.php?area=users">Add</a>	
				</div><!-- //optBt -->
			</div><!-- //options -->

		<?php
		foreach($arrUser as $user)
		{
		?>
			<div class="options">
				<div class="nUser">
					<a class="edit" href="add.php?id=<?=$user['id']?>&amp;area=users">
						<span class="fas fa-user"></span>
						<p class="label">Edit <?=$user["strUsername"]?></p>
					</a>
				</div>
				
				<div class="optBt">	
					<a class="delete" href="models/delete.php?id=<?=$user['id']?>&amp;area=users">Delete</a>	
				</div><!-- //optBt -->
			</div><!-- //options -->
	<?php
		}
	}

	if($_GET["area"] == "info")
	{
	?>
		<h1>Manage Informations</h1>
		<form id="infos" method="post" action="models/save.php?area=infos" onsubmit="return validateForm();"  autocomplete="off">

			<div class="blockfield contact">
				<label>Phone:</label>
				<input type="text" class="required" name="phone" placeholder="name" value="<?=Connect::getGlobals('phone')?>" />
			</div><!--//blockfield-->

			<div class="blockfield contact">
				<label>E-mail:</label>
				<input type="text" class="required" name="email" placeholder="name" value="<?=Connect::getGlobals('email')?>" />
			</div><!--//blockfield-->
			
			<div class="blockfield address">
				<label>Address:</label>
				<input type="text" class="required" name="address" placeholder="name" value="<?=Connect::getGlobals('address')?>" />
				<input type="text" class="required" name="city" placeholder="phone" value="<?=Connect::getGlobals('city')?>" />
				<input type="text" class="required" name="postalcode" placeholder="i.e. V6G 1S8" value="<?=Connect::getGlobals('postal code')?>" />
			</div><!--//blockfield-->

			<input class="btn nudeRed" type="submit" value="Save" />
		</form>
	<?php
	}

	if($_GET["area"] == "photos")
	{
		$sql = "SELECT * FROM medias";
		$arrPhotos = Connect::runSql("getData", $sql);
	?>
		<h1>Manage Gallery</h1>

		<div class="photo">
			<form id="addPhoto" method="post" action="models/save.php?area=photos" enctype="multipart/form-data">
				<label>Add Photo:</label>
				<input type="text" name="strDesc" placeholder="i.e. #wedding #food" />
				<input type="file" class="required" name="strName"/>
				<input type="hidden" name="nTypeID" value="1" />
				<input class="btn nudeRed" type="submit" value="Save"/>
			</form>
		</div>
	<?php
		foreach($arrPhotos as $photo)
		{
	?>
			<div class="photo bgCont">
				<a class="deletePhoto" href="models/delete.php?id=<?=$photo['id']?>&amp;area=photos"><span class="fas fa-times-circle"></span></a>
				<img class="bgImg" src="../assets/<?=$photo['strName']?>" alt="<?=$photo['strName']?>" />
			</div>
	<?php
		}
	}

	if($_GET["area"] == "services")
	{
		$sql = "SELECT * FROM services WHERE bMainService=1";
		$arrMainService = Connect::runSql("getData", $sql);

		$sql = "SELECT * FROM services WHERE bMainService=0";
		$arrSubService = Connect::runSql("getData", $sql);
	?>
		<h1>Manage Main Services</h1>
		
		<div class="options addCont">
			<a href="add.php?area=services">
				<span class="fas fa-plus-circle"></span>
				<span class="label">New Service</spasn>
			</a>
			<div class="optBt">	
				<a class="add" href="add.php?area=services">Add</a>	
			</div><!-- //optBt -->
		</div><!-- //options -->
	<?php
		foreach($arrMainService as $mainService)
		{
		?>
			<div class="options">
				<div class="nUser">
					<a class="edit" href="add.php?id=<?=$mainService['id']?>&amp;area=services">
						<span class="fas fa-edit"></span>
						<p class="label">Edit <?=$mainService["strName"]?></p>
					</a>
				</div>
				
				<div class="optBt">	
					<a class="delete" href="models/delete.php?id=<?=$mainService['id']?>&amp;area=services">Delete</a>	
				</div><!-- //optBt -->
			</div><!-- //options -->
	<?php
		}
	?>
		<h2>Manage Sub Services</h2>
		
		<div class="options addCont">
			<a href="models/add.php?area=services">
				<span class="fas fa-plus-circle"></span>
				<span class="label">New Service</spasn>
			</a>
			<div class="optBt">	
				<a class="add" href="models/add.php?area=services">Add</a>	
			</div><!-- //optBt -->
		</div><!-- //options -->
	<?php
		foreach($arrSubService as $subService)
		{
		?>
			<div class="options">
				<div class="nUser">
					<a class="edit" href="models/add.php?id=<?=$subService['id']?>&amp;area=services">
						<span class="fas fa-edit"></span>
						<p class="label">Edit <?=$subService["strName"]?></p>
					</a>
				</div>
				
				<div class="optBt">	
					<a class="delete" href="models/delete.php?id=<?=$subService['id']?>&amp;area=services">Delete</a>	
				</div><!-- //optBt -->
			</div><!-- //options -->
	<?php
		}
	}

	if($_GET["area"] == "menu")
	{
	?>
			<h1>Manage Menu</h1>
			<p>Please, contact our support to unlock this feature.</p>			
	<?php
	}
	?>
	</div>
</section>

<?php 
include ("views/footer.php"); 
?>