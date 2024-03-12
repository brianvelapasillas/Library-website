<?php

	//read form's data

	$name=$_POST["name"];
	$city=$_POST["city"];
	$state=$_POST["state"];

	//connect to the database

	include 'conection.php';


	$sql = "INSERT INTO editorials(name_editorial, city, state) VALUES ('$name', '$city', '$state')";




	// Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
	mysqli_close($conection);

	header("location:listing.php");

?>