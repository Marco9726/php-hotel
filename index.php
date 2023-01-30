<?php

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	]

];

// foreach ($hotels as $hotel) {
// 	// salvo l'array delle chiavi in una variabile 
// 	$tableHeaders = array_keys($hotel);
// }
$tableHeaders = array_keys($hotels[0]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./style.scss">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="container w-75 mt-4">
		<table class="w-100">
			<thead>
				<?php foreach ($tableHeaders as $info) { ?>
					<th><?php echo strtoupper($info); ?></th>
				<?php } ?>
			</thead>
			<tbody>
				<?php foreach ($hotels as $hotel) { ?>
					<tr>
						<?php foreach ($hotel as $key => $info) { ?>
							<td>
								<?php
								if ($key === 'parking') {
									// if ($info) {
									// 	echo 'si';
									// } else {
									// 	echo 'no';
									// }
									echo ($info) ? 'si' : 'no';
								} else {
									echo $info;
								}
								?>
							</td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>