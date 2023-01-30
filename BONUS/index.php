<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'img' => './img/hotel1.jpeg',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'img' => './img/hotel2.jpeg',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'img' => './img/hotel3.jpeg',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'img' => './img/hotel4.jpeg',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'img' => './img/hotel5.jpeg',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	]

];
$star = '<i class="fa-solid fa-star text-warning"></i>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="container w-75 mt-4">
		<div class="row my-4">
			<form action="GET" class="row">
				<select class="form-select w-25 me-3" aria-label="Default select example">
					<option selected>Qualsiasi valutazione</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<button class="col-1 btn btn-primary" type="submit">filtra</button>
			</form>
		</div>

		<div class="row w-100 ">
			<?php foreach ($hotels as $hotel) { ?>
				<div class="card p-0 mb-3 me-3">
					<img src="<?php echo $hotel['img'] ?>" alt="hotel-image" class="card-img-top">
					<div class="card-body">
						<h5><?php echo $hotel['name']; ?></h5>
						<div><?php echo $hotel['description']; ?></div>
						<div>
							<?php
							for ($i = 0; $i < $hotel['vote']; $i++) {
								echo $star;
							}
							?>
						</div>
						<div><i class="fa-solid fa-square-parking <?php echo ($hotel['parking']) ? 'text-success' : 'text-danger'; ?>"></i></div>
						<div>
							A soli <?php echo $hotel['distance_to_center'] ?>Km dal centro
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</body>

</html>