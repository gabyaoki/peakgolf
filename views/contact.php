<h2 id="titleContact">Make Your Event With Us</h2>
<div class="contactDiv">
<?php
$sql = "SELECT * FROM services WHERE bMainService=0 AND nSubMainID=1";
$arrServices = Connect::runSql("getData", $sql);

foreach ($arrServices as $service) {
?>
	<div class="contactServ">
		<div class="servSummary">
			<img src="images/<?=$service['strIcon']?>" alt="<?=$service['strName']?>" />
		</div>
		<div class="servSummary">
			<h3><?=$service['strName']?></h3>
			<p><?=$service['strShortDesc']?></p>
		</div>
	</div>
<?php
}
?>
</div>
<div class="contactDiv">
	<form id="contactForm" method="post" action="models/saveContact.php" autocomplete="off">
		<div class="fieldModal">
			<label>Your Name:</label>
			<input id="name" class="required" type="text" name="strName" placeholder="i.e. John Doe" />
		</div><!-- End of name -->

		<div class="fieldModal">
			<label>Phone:</label>
			<input id="phone" class="required" type="text" name="strPhone"  placeholder="(xxx) xxx xxxx" />
		</div><!-- End of phone -->

		<div class="fieldModal">
			<label>E-mail:</label>
			<input id="email" class="required" type="email" name="strEmail"  placeholder="(xxx) xxx xxxx" />
		</div><!-- End of email -->

		<div class="fieldModal">
			<label>Occasion:</label>
			<select id="ocasion" name="nOccasionID">
				<option value="">Select an option...</option>
		<?php
			$sql = "SELECT * FROM ocasions";
			$arrOcasion = Connect::runSql('getData', $sql);

			foreach ($arrOcasion as $ocasion) {
		?>
				<option value="<?=$ocasion['id']?>"><?=$ocasion['strName']?></option>
		<?php
			}
		?>
			</select>
		</div><!-- End of Ocasion -->

		<div class="fieldModal">
			<label>Your Vision:</label>
			<textarea id="description" name="strMessage" placeholder="Talk about the event..."></textarea>
		</div><!-- End of Description -->

		<input class="btn nudeRed" type="submit" id="submitForm" value="Send Message" />

		<div class="alertMsg"></div>
	</form>
</div>