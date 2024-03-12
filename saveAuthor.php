<?php

	//read form's data

	$name=$_POST["name"];
	$lastName=$_POST["lastName"];
	$phoneNumber=$_POST["phoneNumber"];
	$street=$_POST["street"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$country=$_POST["country"];




	//connect to the database

	include 'conection.php';


	$sql = "INSERT INTO author(au_name, au_last_name, phone_number, street, city, state, country) VALUES ('$name', '$lastName', '$phoneNumber','$street', '$city', '$state', '$country')";
	



	// Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
	mysqli_close($conection);

	header("location:list_author.php");

?>