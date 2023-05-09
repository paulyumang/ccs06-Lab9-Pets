<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Richard', 'Male', '2002-10-20', 'alex', 'example1@gmail.com', 'San Fernando', '0928378349');
	echo "<li>Added 1 Pet Information";

	$pets = [
		[
			'name' => 'Albert',
			'gender' => 'Female',
			'birthdate' => '2002-10-21',
			'owner' => 'bell',
			'email' => 'example2@gmail.com',
			'address' => 'Angeles',
			'contact_number' => '09281581795'
		],
		[
			'name' => 'max',
			'gender' => 'Female',
			'birthdate' => '2002-10-22',
			'owner' => 'ange',
			'email' => 'example3@gmail.com',
			'address' => 'Mabalacat',
			'contact_number' => '09054109425'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more Pet Information";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

