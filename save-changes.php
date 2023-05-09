<?php

require "config.php";

use App\Pet;

// Save the Student information, and automatically redirect to index

try {
	$id = $_POST['id'];
	$pet_name = $_POST['name'];
	$pet_gender = $_POST['gender'];
	$birthday = $_POST['birthdate'];
	$owner_name = $_POST['owner'];
	$email_address = $_POST['email'];
	$address = $_POST['address'];
	$contact_number = $_POST['contact_number'];
	$result = Pet::update($id, $name, $pgender, $birthday, $owner, $email, $address, $contact_number);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

