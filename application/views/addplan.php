<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a Trip</title>
</head>
<body>
	<div id="container">
		<p><a href="/">Home</a></p>
		<p><a href='<?= "/logout" ?>'>Logout</a></p>
		<fieldset>
			<legend>Add a Trip</legend>
			<form action="/Travels/addTravel" method="POST">
				<?= form_error('add_destination'); ?>
				<p>Destination:<input type="text" name="add_destination"></p>
				<?= form_error('add_description'); ?>
				<p>Description:<input type="text" name="add_description"></p>
				<?= form_error('add_travel_from'); ?>
				<p>Travel Date From:<input type="text" name="add_travel_from"></p>
				<?= form_error('add_travel_to'); ?>
				<p>Travel Date To:<input type="text" name="add_travel_to"></p>
				<input type="submit" value="Add">
			</form>
		</fieldset>
	</div>
</body>
</html>