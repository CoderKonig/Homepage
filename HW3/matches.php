<?php
	
	include("common.php"); 
?>		
		<form action="matches-submit.php">
			<div>
				<fieldset>
					<legend>Returning User:</legend>
					<strong>Name:</strong><input type="text" name="name" size="16" />
					<input type="submit" value="View My Matches" />
				</fieldset>
			</div>
		</form>

<?php commonBottom();  ?>