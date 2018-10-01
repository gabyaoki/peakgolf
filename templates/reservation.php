<div class="container contact">
	<div class="contactDiv">
		<form id="reserveForm" method="post" action="models/saveContact.php" autocomplete="off">
			<div class="fieldModal">
				<label>Your Name:</label>
				<input id="nameR" class="required" type="text" name="strName" placeholder="i.e. John Doe" />
			</div><!-- End of name -->

			<div class="fieldModal">
				<label>Phone:</label>
				<input id="phoneR" class="required" type="text" name="strPhone"  placeholder="(xxx) xxx xxxx" />
			</div><!-- End of phone -->

			<div class="fieldModal">
				<label>E-mail:</label>
				<input id="emailR" class="required" type="email" name="strEmail"  placeholder="(xxx) xxx xxxx" />
			</div><!-- End of email -->

			<div class="fieldModal">
				<label>Occasion:</label>
				<select id="ocasionR" name="nOccasionID">
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
				<label>Event Date:</label>
				<input id="dateR" type="date" name="dateEvent"  placeholder="mm-dd-yyyy" />
			</div><!-- End of date -->

			<div class="fieldModal">
				<label>Number of Guests:</label>
				<input id="guestsR" type="number" name="nGuests"  placeholder="Min. 20 Guests" />
			</div><!-- End of guests -->

			<div class="fieldModal">
				<label>Your Vision:</label>
				<textarea id="descriptionR" name="strMessage" placeholder="Talk about the event..."></textarea>
			</div><!-- End of Description -->

			<input class="btn nudeRed" type="submit" id="submitBt" value="Send Message" />

			<div class="alertMsg"></div>
		</form>
	</div>
	<div class="contactDiv register">
		<div class="bgCont">
			<img class="bgImg" src="assets/<?=$arrPage['strPhoto']?>" alt="make reservation" />
		</div>
	</div>
</div>