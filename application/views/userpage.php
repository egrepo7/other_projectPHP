<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Userpage</title>
</head>
<body>
	<div id="container">
		<h2>Hello <?= $data['name'] ?></h2>
		<br>
		<p><a href="">Logout</a></p>
		<p>Your Trip Schedules</p>
		<table>
			<thead>
				<th>Destination</th>
				<th>Travel Start Date</th>
				<th>Travel End Date</th>
				<th>Plan</th>
			</thead>
			<tbody>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tbody>
		</table>
		<p><a href='<?= "/addplan" ?>'>Add Travel Plan</a></p>
	</div>
</body>
</html>