<?php
	//$teacherID = $_GET['teacher']; 
	include('createDB.inc');
		
	// $result = $pdo->prepare('SELECT id, dogParkName, street, parkName, latitude, longitude, dogParkArea, Picture FROM parks where id = :park');
	// $result->bindParam(':park', $parkID, PDO::PARAM_STR);
	// $title = ':dogParkName - Park Bark';
	// //$title->bindValue(':dogParkName', $park['dogParkName']);
	// $result->execute();
	// //$title->execute();
	// $reviews = $pdo->prepare('SELECT * FROM reviews where id = :park');
	// $reviews->bindParam(':park', $parkID, PDO::PARAM_STR);
	// $reviews->execute();

	include 'html_head.inc';
?>

<div class="top-header">
	
	<div class="col-md-7">
	</div>
	
	<div class="col-md-5">
	</div>

</div>

<div class="home-page-content">
	
	<!--banner div should have fixed width-->
	<div id="home-banner">
	</div>

	<div class="home-elements">
		
		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

		<div class="col-md-3">
		</div>

	</div>
	
	<?php
		echo '<br><br><br><br><br><br><br><h1>Make a Complaint:</h1>';
		include('createDB.inc');
		
		echo '<form action="./functions/addComplaint.php"  method="POST">';
			echo'Who the complaint is against:<br>
  					<input type="text" name="complainAbout"><br>
  					<textarea name="message" rows="10" cols="30">
						Make your complaint here. 
					</textarea>';

			echo'<input type="submit" name="SUBMIT">';
		echo'</form>';

	?>

</div>

<?php
	include('footer.inc');
?>